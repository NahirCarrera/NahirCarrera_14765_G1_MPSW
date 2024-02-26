



<?php $__env->startSection('content'); ?>
    <nav class="navbar">
        <button type="button" class="btn btn-primary float-right">Añadir producto</button>
    </nav>
    <div class="d-flex justify-content-center flex-wrap mt-4">
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card text-bg-primary mb-3 me-4" style="max-width: 18rem;">

                <div class="card-header"><?php echo e($product->name); ?></div>
                <div class="card-body">
                    <p class="card-text text-white"><?php echo e($product->detalle); ?></p>
                </div>

                <div class="d-flex justify-content-center mb-3">
                    <a href="<?php echo e(Route('admin.productos.productData', encrypt($product))); ?>">
                        <button class="btn btn-info me-4">Editar</button></a>
                    <a href="" class="btn btn-danger">Eliminar</a>
                </div>

            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USUARIO\Desktop\UNIBLOCK\webpage\resources\views/admin/index.blade.php ENDPATH**/ ?>