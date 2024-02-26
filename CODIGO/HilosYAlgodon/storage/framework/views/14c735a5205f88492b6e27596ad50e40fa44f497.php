

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-body">
            <div class="text-center">
                <h1>MULTIMEDIA</h1>
            </div>

            <div class="container text-center">
                <div class="row align-items-start">
                    <div class="col">
                        <div class="row row-cols-1 row-cols-md-2 g-2 justify-content-md-center">

                            <div class="col mx-auto cardSliderContainer" style="max-width: 390px">
                                <a href="<?php echo e(Route('admin.multimedia.slider.show')); ?>"
                                    class="card btn btn-outline-info m-0">
                                    
                                    <div class="card-body">
                                        <h5 class="card-title">SLIDER</h5>
                                    </div>
                                </a>
                            </div>

                            <div class="col mx-auto cardSliderContainer" style="max-width: 390px">
                                <a href="<?php echo e(Route('admin.multimedia.products.show')); ?>"
                                    class="card btn btn-outline-primary m-0">
                                    
                                    <div class="card-body">
                                        <h5 class="card-title">PRODUCTOS</h5>
                                    </div>
                                </a>
                            </div>
                            
                            <div class="col mx-auto cardSliderContainer" style="max-width: 390px">
                                <a href="<?php echo e(Route('admin.multimedia.acRapidos.show')); ?>"
                                    class="card btn btn-outline-warning m-0">
                                    
                                    <div class="card-body">
                                        <h5 class="card-title">ACCESOS RÁPIDOS</h5>
                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\crist\Desktop\Uni\HostProyectos\PROCESOS\HilosYAlgodon\resources\views/admin/multimedia/multimediaManager.blade.php ENDPATH**/ ?>