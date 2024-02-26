
<?php $__env->startSection('content'); ?>
    <div class="com"> </div>
    <div class="services-product">
        <div class="services-text">
            <p><?php echo e($product->name); ?></p>
            <p><?php echo e($product->detalle); ?></p>
            <p></p>
        </div>
    </div>

    <div class="come"> </div>

    <div class="container">
        <p hidden><?php echo e($cont = 0); ?></p>
        <?php $__currentLoopData = $sub; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $su): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p hidden><?php echo e($cont++); ?></p>
            <div class="card">
                <img src="<?php echo e(url($su->icon)); ?>" alt="<?php echo e($su->uri); ?>">
                <h2><?php echo e($su->name); ?></h2>
                <div class="desc"><?php echo e(substr($su->detalle, 0, 100)); ?>...</div>
                <?php if($pos[1] == 1): ?>
                    <a href="<?php echo e(route('producton2',[$product->uri,$su->uri])); ?>"><div class="title title--epic">Solicitar</div></a>
                <?php else: ?>
                    <a href="<?php echo e(route('detalle',[$pos[2],$product->uri,$su->uri])); ?>"><div class="title title--epic">Solicitar</div></a>
                <?php endif; ?>
            </div>
            <?php if($cont == 3): ?>
                <p hidden><?php echo e($cont = 0); ?></p>
                </div>
                <div class="container">
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>       
    </div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('vista.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USUARIO\Desktop\UNIBLOCK\webpage\resources\views/product/producto.blade.php ENDPATH**/ ?>