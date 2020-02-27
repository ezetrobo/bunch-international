<?php $__env->startSection('title', ' | International'); ?>
<?php $__env->startSection('body-clase','landing-page sidebar-collapse'); ?>
<?php $__env->startSection('contenido'); ?>
    <?php echo $__env->make('layouts.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="container-fluid p-0">

        <div class="container contenedor-logo">
            <img src="<?php echo e(asset('images/logo.png')); ?>" alt="">
        </div>
        
        <div class="carousel slide carousel-fade carousel-bunch" data-ride="carousel">
            <!-- Imagenes del slide -->
            
            <div class="carousel-inner">

                <div class="centrar-img overlay">
                    <img src="<?php echo e(asset('images/bg-nubes.png')); ?>" alt="">
                </div>

                <div class="carousel-item active">
                    <div class="centrar-img">
                        <img src="<?php echo e(asset('images/slide-1.png')); ?>" alt="">
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="centrar-img">
                        <img src="<?php echo e(asset('images/slide-2.png')); ?>" alt="">
                    </div>
                </div>

            </div>

            <?php if(!empty($oContenidoHeader)): ?>
                <?php $__currentLoopData = $oContenidoHeader; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $xContenidoHeader): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="container info-slide pl-0 pr-0">
                        <div class="contenedor-info">
                            <div class="descripcion-slide">
                                <h1><?php echo e($xContenidoHeader->titulo); ?></h1>
                                <hr>
                                <p><?php echo e($xContenidoHeader->bajada); ?>

                                </p>
                            </div>
                            <div class="description-slide mt-5">
                                <h1><?php echo e($xContenidoHeader->subtitulo); ?></h1>
                                <hr>
                                <?php echo $xContenidoHeader->descripcion; ?>

                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>

        </div>
    </div>


    <div class="container-fluid bg-main">
        <div class="centrar-img">
            <img src="<?php echo e(asset('images/bg-nubes2.png')); ?>" alt="" class="bg-section">
        </div>
            <div class="row contenedores">
                <?php if(!empty($oContenidoInfo)): ?>
                    <?php $__currentLoopData = $oContenidoInfo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $xContenidoInfo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-6 p-0 align-left">
                            <div class="contenedor-texto">
                                <h1> <?php echo e($xContenidoInfo->titulo); ?></h1>
                                <div class="descripcion-contenedor">    
                                    <h1> <?php echo e($xContenidoInfo->subtitulo); ?></h1>
                                    <p><?php echo e($xContenidoInfo->bajada); ?></p>
                                </div>
                                <div class="icons-contenedor">
                                    <?php echo e($xContenidoInfo->printImagenes(5)); ?>

                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
                <div class="col-md-6 p-0">
                    <div class="centrar-img">
                        <img src="<?php echo e(asset('images/contenedor-1.png')); ?>" alt="" class="contenedores-pares">
                    </div>
                </div>
                <div class="col-md-6 p-0 align-left">
                    <div class="carousel slide carousel-fade carousel-contenedor" id="carousel-contendor" data-ride="carousel">
                        <?php if(!empty($oContenido[0])): ?>
                            <div class="carousel-inner">
                                <?php $__currentLoopData = $oContenido[0]->imagenes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $xImagen): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="carousel-item <?php if($key == 0): ?> active <?php endif; ?>">
                                        <div class="centrar-img">
                                            <img src="<?php echo e($xImagen->path); ?>" alt="">
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        <?php endif; ?>
                        <a class="carousel-control-prev" href="#carousel-contendor"" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a class="carousel-control-next" href="#carousel-contendor"" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                          </a>
                    </div>
                    <div class="centrar-img">
                        <img src="<?php echo e(asset('images/contenedor-2.png')); ?>" alt="" class="bg-carousel">
                    </div>
                </div>
                <?php if(!empty($oContenido[0]) && !empty($oContenido[1])): ?>
                    <div class="col-md-6 p-0">
                        <div class="info-contenedor">
                            <h1><?php echo e($oContenido[0]->titulo); ?></h1>
                            <p><?php echo e($oContenido[0]->bajada); ?></p>
                        </div>
                        <div class="centrar-img">
                            <img src="<?php echo e(asset('images/contenedor-3.png')); ?>" alt="" class="contenedores-pares">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-8 p-0 align-left">
                        <div class="info-contenedor">
                            <h1><?php echo e($oContenido[1]->titulo); ?></h1>
                            <p><?php echo e($oContenido[1]->bajada); ?></p>
                        </div>
                        <div class="centrar-img">
                            <img src="<?php echo e(asset('images/contenedor-4.png')); ?>" alt="">
                        </div>
                    </div>
                <?php endif; ?>
                <div class="col-md-6 col-sm-4 p-0">
                    <div class="centrar-img">
                        <img src="<?php echo e(asset('images/contenedor-5.png')); ?>" alt="" class="contenedores-pares">
                    </div>
                </div>
                <div class="col-md-6 col-sm-8 p-0 align-left">
                    <div class="info-contenedor">
                        <h1 class="mt-5">FORMULARIO DE
                            CONTACTO</h1>
                    </div>
                    <div class="centrar-img">
                        <img src="<?php echo e(asset('images/contenedor-6.png')); ?>" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-sm-4 p-0 d-none d-sm-block">
                    <div class="centrar-img">
                        <img src="<?php echo e(asset('images/contenedor-7.png')); ?>" alt="" class="contenedores-pares">
                    </div>
                </div>
            </div>

    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xamppOK\htdocs\bunch-landing\resources\views/home/index.blade.php ENDPATH**/ ?>