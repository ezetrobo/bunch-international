<div>
    <a id="contadorCarro" >
        <img src="<?php echo e(URL::asset('images/iconos/carro.png')); ?>" style="width: 50px;">
            <span></span>
    </a>
</div>
<div class="row carrito" style="display: none;">
	<div class="col-md-12">
		<div id="contenidoCarro">
      		<?php $__env->startSection('carrito'); ?>
      			<?php if(!empty($oCarrito) && !empty($oEntrega)): ?>
      				<table style="width: 100%">
  						<tr>
  							<td>Cantidad</td>
  							<td>Descripcion</td>
  							<td>Precio</td>
  							<td>Total</td>
  							<td>Opciones</td>
  						</tr>
          				<?php $__currentLoopData = $oCarrito->productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $xCarrito): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          						<tr>
          							<td><?php echo e($xCarrito->cantidad); ?></td>
          							<td><?php echo e($xCarrito->titulo); ?></td>
          							<td>
          								<input type="number" class="form-control cambio-cantidad" value="<?php echo e($xCarrito->cantidad); ?>" id="<?php echo e($xCarrito->idProducto); ?>">
          							</td>
          							<td><?php echo e($xCarrito->precio * $xCarrito->cantidad); ?></td>
          							<td>
          								<span onclick="deleteProducto(<?php echo $key; ?>)">X</span>
          							</td>
          						</tr>
          				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      				</table>

                    <div>
                        <strong>Subtotal : <?php echo e($oCarrito->subTotal); ?></strong>
                    </div>
                    <div>
                        <strong>Total : <?php echo e($oCarrito->costoTotal); ?></strong>
                    </div>

                    <select id="selectOpEnvio" class="form-control">
                        <option value="0">Seleccione un tipo de envio</option>
                        <?php $__currentLoopData = $oEntrega; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $xEntrega): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                            
                            <option value="<?php echo e($xEntrega->idEcommerceTipo); ?>"><?php echo e($xEntrega->nombre); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>;
                    </select>    
                        <br>
                    <?php $__currentLoopData = $oEntrega; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $xEntrega): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <select id="<?php echo e($xEntrega->idEcommerceTipo); ?>" class="selectOpciones form-control" style="width: 200px; display: none">
                            <option>Seleccione una opcion</option>
                            <?php $__currentLoopData = $xEntrega->listaCostoEnvioZona; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $xListaEntrega): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($xListaEntrega->idCostoEnvioZona); ?>"><?php echo e($xListaEntrega->nombre); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>;
                        </select>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

      				<button id="btn-compra">Completar compra</button>
      			<?php endif; ?>
      		<?php $__env->stopSection(); ?>
    	</div>
	</div>
</div><?php /**PATH C:\xampp\htdocs\laravel-maqueta\resources\views/layouts/menu.blade.php ENDPATH**/ ?>