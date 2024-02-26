

<?php $__env->startSection('content'); ?>
    <div class="card mx-auto" style="max-width: 1000px;">
        <div class="row g-0">
            <div class="text-center">
                <h1 class="mx-auto">Producto</h1>
            </div>
            <div class="mt-3 ms-3 me-1 col-md-1 float-end">
                <img src="<?php echo e(url($productDecrypt->icon)); ?>" class="img-fluid rounded" alt="<?php echo e($productDecrypt->uri); ?>">
            </div>
            <div class="col-md-10">
                <div class="card-body">

                    <div class="input-group input-group">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Nombre</span>
                        <input type="text" class="form-control" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-sm" placeholder="<?php echo e($productDecrypt->name); ?>" autocomplete="<?php echo e($productDecrypt->name); ?>">
                    </div>
                    <div class="input-group">
                        <span class="input-group-text">Detalle</span>
                        <textarea class="form-control" aria-label="With textarea" placeholder="<?php echo e($productDecrypt->detalle); ?>" style="height: 12px;" autocomplete="<?php echo e($productDecrypt->detalle); ?>"></textarea>
                    </div>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
            <hr>
        </div>
        <div>
            <button type="button" class="btn btn-primary ms-3">Añadir subproducto</button>
            <div class="text-center">
                <h1 class="mx-auto">Subproductos</h1>
            </div>

            <div class="d-flex justify-content-center flex-wrap mt-4">

                <?php $__currentLoopData = $subProductos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subProduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="card text-bg-primary mb-3 me-4" style="max-width: 18rem;">

                        <div class="card-header"><strong><?php echo e($subProduct->name); ?></strong></div>
                        <div class="card-body">
                            <p class="card-text text-white"><small><?php echo e($subProduct->detalle); ?></small></p>
                        </div>

                        <div class="d-flex justify-content-center mb-3">
                            <a href="<?php echo e(Route('admin.productos.subproductData', encrypt($subProduct))); ?>">
                                <button class="btn btn-info me-4">Editar</button></a>
                            <a href="" class="btn btn-danger">Eliminar</a>
                        </div>

                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USUARIO\Desktop\UNIBLOCK\webpage\resources\views/admin/productData.blade.php ENDPATH**/ ?>