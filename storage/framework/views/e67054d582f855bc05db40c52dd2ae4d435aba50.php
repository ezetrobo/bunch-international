<?php $__env->startSection('body-clase','profile-page sidebar-collapse'); ?>

<?php $__env->startSection('contenido'); ?>
	<?php echo $__env->make('layouts.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<div class="page-header header-filter" data-parallax="true" style="background-image: url('<?php echo e(asset('/images/city-profile.jpg')); ?>')"></div>
	<div class="main main-raised">
	    <div class="profile-content">
		    <div class="container">
		        <div class="row">
		          <div class="col-md-6 ml-auto mr-auto">
		            <div class="profile">
		              <div class="avatar">
		                <?php echo e($oProducto->printImagenes()); ?>

		              </div>
		              <div class="name">
		                <h3 class="title"><?php echo e($oProducto->titulo); ?></h3>
		              </div>
		            </div>
		          </div>
		        </div>
		        <div class="description text-center">
		          <p><?php echo e($oProducto->descripcion); ?></p>
		        </div>
		        <div class="text-center">
		        	<a href="<?php echo e(url('/catalogo')); ?>" class="btn btn-default">Volver</a>
		        	<button class="btn btn-primary" onclick="addproducto(<?php echo e($oProducto->idProducto); ?>, <?php echo e((int)$oProducto->volumen); ?>)">
		        	<i class="material-icons">
						shopping_cart
					</i>
		        </button>

		        </div>

		    </div>
	    </div>
  	</div>
  <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-maqueta\resources\views/catalogo/producto-ampliado.blade.php ENDPATH**/ ?>