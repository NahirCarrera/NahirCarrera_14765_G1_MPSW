

<?php $__env->startSection('content'); ?>
    
    <section>
        <div class="text-container">
            <p>Acerca de Nosotros</p>
            <p><?php echo e($insti->nameCorto); ?></p>
            <p><?php echo e($insti->historia); ?></p>
        </div>
        <img src="<?php echo e(url($insti->imagen2)); ?>" class="model-uno" alt="model">
    </section>
    <div class="about-container about-about">
        <div class="about-text">
            <p>Misión</p>
            <p><?php echo e($insti->mision); ?></p>
        </div>
        <div class="about-text">
            <p>Visión</p>
            <p><?php echo e($insti->vision); ?></p>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('vista.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USUARIO\Desktop\UNIBLOCK\webpage\resources\views/about/index.blade.php ENDPATH**/ ?>