<?php $__env->startSection('title', ' | Carrito'); ?>
<?php $__env->startSection('body-clase','landing-page sidebar-collapse'); ?>


<?php $__env->startSection('contenido'); ?>
	<script type="text/javascript">
	    if (window.history && window.history.pushState) {
	        //window.history.pushState('forward', null, './#forward');
	        //$(window).on('popstate', function() {
	            //window.location.href = "/home";
	        //});
	    }
	</script>
    
    <div class="form-group">
    	<?php if(!empty($oGatewayPagos)): ?>
	    	<?php $__currentLoopData = $oGatewayPagos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $xGatewayPagos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    			<div class="col-sm-2" style="border: solid; height: 400px; display: inline-block;vertical-align: top">
    				<fieldset>
    					<legend><?php echo e($xGatewayPagos->nombre); ?></legend>
    					<button onclick="setGatewayPago(<?php echo e($xGatewayPagos->idGatewayPago); ?>)">Seleccionar</button>
    				</fieldset>
    			</div>
    		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    	<?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xamppOK\htdocs\laravel-maqueta\resources\views/carrito/finalizado.blade.php ENDPATH**/ ?>