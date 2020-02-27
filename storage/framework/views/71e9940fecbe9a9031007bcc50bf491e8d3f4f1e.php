<?php $__env->startSection('title', ' | Catalogo'); ?>
<?php $__env->startSection('body-clase','landing-page sidebar-collapse'); ?>


<?php $__env->startSection('contenido'); ?>
    <?php echo $__env->make('layouts.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="wrapper">
    <div id="content">
    <div class="main main-raised">
        <div class="container">
            <div class="section text-center">
                <h2 class="title">Nuestros productos</h2>
                <div class="team">
                    <div class="row">
                        <input type="hidden" name="total_pages" id="total_pages" value="<?php echo e($oProductos->lastPage()); ?>">
                        <input type="hidden" name="page" id="page" value="<?php echo e($oProductos->currentPage()); ?>">
                        <?php $__currentLoopData = $oProductos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-md-4">
                                <div class="team-player">
                                    <div class="card card-plain">
                                        <a href="<?php echo e(url('/catalogo/producto/'.$producto->idProducto)); ?>">
                                            <div class="col-md-6 ml-auto mr-auto">
                                            <div class="imagenes">
                                                <?php echo e($producto->printImagenes()); ?>

                                            </div>
                                            </div>
                                            <h4 class="card-title"><?php echo e($producto->titulo); ?>

                                                <br>
                                            </h4>
                                            <div class="card-body">
                                                <p class="card-description"><?php echo e($producto->descripcionCorta); ?></p>
                                            </div>
                                            <div class="card-body">
                                                <p class="card-description">$ <?php echo e($producto->precios[0]); ?></p>
                                            </div>
                                            <br />
                                        </a>
                                        <button class="btn btn-block btn-primary" onclick="addProducto(<?php echo e($producto->idProducto); ?>,1)">Add</button>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <button id="btn-viewMore" onclick="viewMore();">Ver mas</button>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xamppOK\htdocs\laravel-maqueta\resources\views/catalogo/index.blade.php ENDPATH**/ ?>