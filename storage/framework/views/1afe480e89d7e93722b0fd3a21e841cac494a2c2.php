<?php $__env->startSection('title', ' | Carrito'); ?>
<?php $__env->startSection('body-clase','landing-page sidebar-collapse'); ?>


<?php $__env->startSection('contenido'); ?>
    
    <form id="form-persona">
        <div class="menu-carrito">
            <div id="datos" class="form-group" >
                <div class="col-md-6">
                    <label for="">Nombre</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" value="">
                </div>
                <div class="col-md-6">
                    <label for="">Domicilio<br> Titular</label>
                    <input type="text" class="form-control" name="domicilio" id="domicilio" maxlength="60" value="" >
                </div>
                <div class="col-md-6">
                    <label for="">Apellido</label>
                    <input type="text" class="form-control" name="apellido" id="apellido" value="" >
                </div>
                <div class="col-md-6">
                    <label for="">Barrio</label>
                    <input type="text" class="form-control" name="barrio" id="barrio" value="">
                </div>
                <div class="col-md-6">
                    <label for="">E-mail</label>
                    <input type="text" class="form-control" name="email" id="email" value="">
                </div>
                <div class="col-md-6">
                    <label for="">CP</label>
                    <input type="text" class="form-control" name="cp" id="cp" value="">
                </div>
                <div class="col-md-6">
                    <label for="">Dni</label>
                    <input type="text" class="form-control"  name="dni" id="dni" value="">
                </div>
                <div class="col-md-6">
                    <label for="">Localidad</label>
                    <input type="text" class="form-control" name="localidad" id="localidad" value="">
                </div>
                <div class="col-md-6">
                    <label for="">Teléfono</label>
                    <input type="text" class="form-control" name="telefono" id="telefono" value="">
                </div>
                <div class="col-md-6">
                    <label for="">Provincia</label>
                    <select class="form-control" name="provincia" id="provincia">
                        <option value="0">Seleccione la Provincia</option>
                        <option value="1">Córdoba</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="">Movil</label>
                    <input type="text" class="form-control" name="pref3" id="pref3" value="">
                    <input type="text" class="form-control" name="movil" id="movil" value="">
                </div>
                <div class="col-md-12 mt-1">
                    <label for="">Observaciones</label><br>
                    <textarea name="observacion" id="observacion" cols="72" rows="5"></textarea>
                </div>

                <div class="col-md-12">
                    <div class="btn-terminos">
                        <label class="radio"><p>ACEPTO TERMINOS Y CONDICIONES</p>
                            <input type="checkbox" name="terminos" id="terminos">
                            <span class="checkround"></span>
                        </label>
                    </div>
                    <!-- Terminos y Condiciones -->
                    <div id="modalTerminos" class="modal" role="dialog">
                        <div class="modal-dialog">
                        <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-body" id="contTerminos">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12">
                                            <?php if(!empty($oTerminos[0])):
                                                echo $oTerminos[0]->descripcion;
                                            endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="button" value="Continuar" id="btn-complete" name="">
                    <!--  -->
                </div>
            </div>
        </div>
    </form>                    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-maqueta\resources\views/carrito/index.blade.php ENDPATH**/ ?>