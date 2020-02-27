var csrfToken = $('[name="csrf_token"]').attr('content');

$( document ).ready(function() {
    /* Obtenemos la cantidad de productos en la sesion */
    obtenerCantidadProductos();

});

$(function () {
    $(document).on('click', '#btn-compra', function(event) {
        validarEnvio();
    })

    $(document).on('click', '#btn-complete', function(event) {
        if ($( "#form-persona" ).valid()){
            setpersona();
        }
    })

    $(document).on('click', '#contadorCarro', function(event) {
        if($(".carrito").is(":hidden")){
            $(".carrito").show();
            printCarrito();
        }else{
            $(".carrito").hide();
        }
    })

    $('#contenidoCarro').on('change','.cambio-cantidad', function(){
        changecantidad($(this).attr("id"),$(this).val());
    });

    $('#contenidoCarro').on('change','#tipoEnvio', function(){
        mostrarOpciones($(this).val());
    });

    /* Reglas de validacion */
    $( "#form-persona" ).validate({
            rules: {
                nombre: "required",
                apellido: "required",
                email: "required",
                domicilio: "required",
                barrio: "required",
                cp: "required",
                dni: "required",
                localidad: "required",
                provincia: "required",
                pref3: "required",
                movil: "required",
                localidad: "required",
                terminos: "required",
            }
    });  
})

/* Refrescamos el token cada 1 hs */
setInterval(refreshToken, 3600000);
function refreshToken(){
    $.get('refresh-csrf').done(function(data){
        csrfToken = data;
    });
}

/* ------ Propias de la pagina ------*/

function viewMore(){
    var total_pages = parseInt($("#total_pages").val());
    var page = parseInt($("#page").val())+1;
    if(page <= total_pages) {
        load_more_data(page, total_pages);
    }           
 }
 
function load_more_data(page, total_pages) {        
    $("#total_pages, #page").remove();      
    $.ajax({
        url: baseUrl+'/catalogo/index',
        type: "GET",
        data: {
            page:page
        },
        beforeSend: function(){
            $(".loader").show();
        },
        complete: function(){
            $('.loader').hide();
            if(page == total_pages) {
                $("#btn-viewMore").hide();
            }
        },
        success: function(data){
            $("#output").append(data);
        },
        error: function(){
            
        }
    });
}


/* ------ Fin propias ------ */

/* ------ CARRO DE COMPRAS ECOMMERCE ------*/

/* Funcion para agregar un producto al carro */
function addProducto(xIdProducto, xCantidad){
	cerrarCarrito();
    $.ajax({
        url: baseUrl +'/carrito/addProducto',
        type: 'POST',
        dataType:'json',
        data: {
            idProducto: xIdProducto, 
            cantidad: xCantidad,
            "_token": $('meta[name="csrf-token"]').attr('content'),
        },
    })
    .done(function(response) {
        if(response.estado){
            setcarro(response);
        }else{
        	mensajeModal(response.mensaje);
        }
    })
    .fail(function(response) {
        consultasErroneas(response);
    })
}

/* Funcion para Eliminar 1 producto del carro */
function deleteProducto(xIdProducto){
	console.log(xIdProducto);
    try
    {
        $.ajax({
            url: baseUrl +'/carrito/deleteproducto',
            type: 'POST',
            dataType: 'JSON',
            data: {
                idProducto: xIdProducto,
                "_token": $('meta[name="csrf-token"]').attr('content'),
            },
        })
        .done(function(response) {
            if(response.estado){
            	printCarrito();
            	setcarro(response)
	        }else{
	        	mensajeModal(response.mensaje);
	        }
        })
        .fail(function(response) {
        	consultasErroneas(response);
        })
	}
    catch(e)
    {
        console.log(e);
    }
}

/* Function para cerrar el carrito */
function cerrarCarrito(){

    $(".carrito").hide();
}

/* Funcion para obtener la cantidad de productos del carro */
function obtenerCantidadProductos(){
    $.ajax({
        url: baseUrl +'/carrito/contCarrito',
        type: 'POST',
        dataType: 'json',
        data: {
            "_token": $('meta[name="csrf-token"]').attr('content'),
        },
    })
    .done(function(response) {
        setcarro(response);
    })
    .fail(function(response) {
        consultasErroneas(response);
    })
}

/* Funcion para imprimir el carrito */
function printCarrito(){
	$.ajax({
		url: baseUrl +'/carrito/printCarrito',
		type: 'POST',
		data: {
        	"_token": $('meta[name="csrf-token"]').attr('content'),
    	},
	})
	.done(function(response) {
		$("#contenidoCarro").html(response);
	})
	.fail(function() {
		console.log("error");
	});	
}

/* funcion para realizar posterior al guardado en el carro */
function setcarro(xCarro){
    try{
        /* Contador del carrito */
        $("#contadorCarro span").html(xCarro.parametros.cantidadProductos);   

        /*  */
    }
    catch(e){
        console.log(e);
    }
}

/* Funcion para modificar la cantidad de productos*/
function changecantidad(xIdProducto,xCantidad){
    $.ajax({
        url: baseUrl +'/carrito/changecantidad',
        type: 'POST',
        dataType: 'JSON',
        data: {
            xIdProducto: xIdProducto, 
            xCantidad: xCantidad,
            "_token": $('meta[name="csrf-token"]').attr('content'),
        },
    })
    .done(function(response) {
        printCarrito();
    })
    .fail(function(response) {
        consultasErroneas();
    }); 
}

function setpersona(){
    var form_data = new FormData($('#form-persona')[0]);
    form_data.append("_token", $('meta[name="csrf-token"]').attr('content'));
    form_data.append("provincia-nombre", $( "#provincia option:selected" ).text());
    
    $.ajax({
        url: baseUrl +'/carrito/setPersona',
        type: 'POST',
        dataType: 'JSON',
        processData: false,
        contentType: false,
        data:form_data,
    })
    .done(function(response) {
        if(response['estado']){
            window.location.href = "carrito/finalizado";
        }
    })
    .fail(function(response) {
        
    });
}

function validarEnvio(){
    if($("#tipoEnvio").val() > 0 && $("#tipoEnvioZona_"+$("#tipoEnvio").val()).val() > 0){
        $.ajax({
            url: baseUrl +'/carrito/setTipoEnvio',
            type: 'POST',
            dataType: 'JSON',
            data: {
                tipoEnvio: $("#tipoEnvio").val(),
                tipoEnvioZona: $("#tipoEnvioZona_"+$("#tipoEnvio").val()).val(),
                "_token": $('meta[name="csrf-token"]').attr('content'),
            },
        })
        .done(function(response) {
            if(response['estado']){
                window.location.href = "carrito";
            }else{
                mensajeModal("Intente nuevamente");
            }
        })
        .fail(function(response) {
            
        });
    }
    else{
        mensajeModal("Complete todos los campos");
    }
}

function setGatewayPago(xGatewayPago){
    $.ajax({
        url: baseUrl +'/carrito/setGatewayPago',
        type: 'POST',
        dataType: 'JSON',
        data: {
            xGatewayPago: xGatewayPago,
            "_token": $('meta[name="csrf-token"]').attr('content'),
        },
    })
    .done(function() {
        console.log("success");
    })
    .fail(function() {
        console.log("error");
    });
}

/* Muestra las opciones de Envio*/
function mostrarOpciones(xOpcionEnvio){
    $(".selectOpciones").hide();
    $("[data-entrega='"+xOpcionEnvio+"']").show();
    $("[data-entrega='"+xOpcionEnvio+"']").prop('selectedIndex',0);

}

/* FIN DEL CARRO DE COMPRAS */


/* 
| Muestra los errores
*/
function consultasErroneas(xError){
	try{
        console.log(xError);
	}
    catch(e){
        console.log(e)
    }
}

/* 
| Muestra los mensajes
*/
function mensajeModal(xMensaje){
	try{
        alert(xMensaje);
	}
    catch(e)
    {
		console.log(e);
	}
}