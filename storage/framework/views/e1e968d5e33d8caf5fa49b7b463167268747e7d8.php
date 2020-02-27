<?php $__env->startSection('title', ' | Catalogo'); ?>
<?php $__env->startSection('body-clase','landing-page sidebar-collapse'); ?>
<div id="carousel-responsive" class="carousel carousel-responsive slide slide-home" data-ride="carousel" data-items="2, 2, 3, 3, 4">
                    
        <a class="carousel-control-prev" href="#carousel-responsive" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon prev-slide" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-responsive" role="button" data-slide="next">
            <span class="carousel-control-next-icon next-slide" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>

    <div class="carousel-inner" role="listbox">

        <div class="carousel-item active">
            <img src="http://aristeiaabogados.com/wp-content/uploads/2017/05/1.png" alt="">
        </div>
        
        <div class="carousel-item">
            <img src="http://aristeiaabogados.com/wp-content/uploads/2017/05/1.png" alt="">
        </div>

        <div class="carousel-item">
            <img src="http://aristeiaabogados.com/wp-content/uploads/2017/05/1.png" alt="">
        </div>

        <div class="carousel-item">
            <img src="http://aristeiaabogados.com/wp-content/uploads/2017/05/1.png" alt="">
        </div>

        <div class="carousel-item">
            <img src="http://aristeiaabogados.com/wp-content/uploads/2017/05/1.png" alt="">
        </div>

        <div class="carousel-item">
            <img src="http://aristeiaabogados.com/wp-content/uploads/2017/05/1.png" alt="">
        </div>

    </div>
</div>

<?php $__env->startSection('contenido'); ?>
    <?php echo $__env->make('layouts.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\SITIOS PHP\laravel-maqueta\resources\views/home/index.blade.php ENDPATH**/ ?>