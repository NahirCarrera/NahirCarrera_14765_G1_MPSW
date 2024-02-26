

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-body">
            <div class="text-center">
                <h1>MULTIMEDIA</h1>
            </div>

            <div class="container text-center">
                <div class="row align-items-start">
                    <div class="col">
                        <div class="row row-cols-1 row-cols-md-2 g-4 justify-content-md-center">
                            
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title">Slider</h5>
                                    <a href="<?php echo e(Route('admin.multimedia.slider.show')); ?>">
                                        <button class="btn btn-info">Administrar</button>
                                    </a>
                                </div>
                            </div>

                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title">Productos</h5>
                                    <a href="<?php echo e(Route('admin.multimedia.products.show')); ?>">
                                        <button class="btn btn-info">Administrar</button>
                                    </a>
                                </div>
                            </div>

                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title">Accesos rápidos</h5>
                                    <a href="<?php echo e(Route('admin.multimedia.acRapidos.show')); ?>">
                                        <button class="btn btn-info">Administrar</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USUARIO\Desktop\UNIBLOCK\webpage\resources\views/admin/multimedia/multimediaManager.blade.php ENDPATH**/ ?>