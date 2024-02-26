
<?php $__env->startSection('content'); ?>

<section>
    <div class="text-container">
        <p><?php echo e($sub->name); ?></p>
        <p><?php echo e($product->name); ?></p>
        <p><?php echo e($product->detalle); ?></p>
        <?php if($product->sub_pro == 2): ?>
        <li hidden><?php echo e($tipo = 'creditos'); ?></li>
        <?php endif; ?>
        <?php if($product->sub_pro == 1): ?>
        <li>Ampliación del negocio.</li>
        <li>Adecuación de trabajo.</li>
        <li>Capital de trabajo.</li>
        <li>Adquisición de activos fijos de negocio.</li>
        <li>Emergencias financieras.</li>
        <li hidden><?php echo e($tipo = 'creditos'); ?></li>
        <?php elseif($sub->id == 3): ?>
        <table cellspacing="0">
            <tr>
                <th>Días</th>
                <th>Procentaje de ganancia</th>
            </tr>
            <tr>
                <td>30 - 90</td>
                <td>8%</td>
            </tr>
            <tr>
                <td>91 - 180</td>
                <td>9%</td>
            </tr>
            <tr>
                <td>181 - 270</td>
                <td>10%</td>
            </tr>
            <tr>
                <td>271 - 330</td>
                <td>10.5%</td>
            </tr>
            <tr>
                <td>331 - 1800</td>
                <td>11%</td>
            </tr>
            <tr>
                <td>+ 3 años</td>
                <td>11.5%</td>
            </tr>
        </table>
        <li hidden><?php echo e($tipo = 'inversion'); ?></li>
        <?php endif; ?>
        <div class="center">
            <!--<button class="hire-btn">Ver mas</button> -->
            <?php if($product->id_pro == 1 && $product->id == 3 || $product->id == 6): ?>

            <?php elseif($product->id_pro == 1 && $product->id == 4): ?>
            <li hidden><?php echo e($tipo = 'Ahoprogramado'); ?></li>
            <a href="<?php echo e(route('cotizador',$tipo)); ?>"><button class="cotiza">Cotizar</button></a>
            <?php else: ?>
            <a href="<?php echo e(route('cotizador',$tipo)); ?>"><button class="cotiza">Cotizar</button></a>
            <?php endif; ?>
            <a href="<?php echo e(route($tupe)); ?>">
                <button class="down-cv">Solicitar Ahora</button>
            </a>
        </div>
    </div>
    <img src="<?php echo e(url($product->foto)); ?>" class="model" alt="model">
</section>
<div class="about-container <?php if($sub->id == 3): ?> about-container-dos <?php else: ?> about-container-uno <?php endif; ?> ">
    <i style="font-size: 1500%; font-weight: unset;" class="lni lni-pencil-alt"></i>
    <div class="about-text">
        <p>Requisitos.</p>
        <?php $__currentLoopData = $requisitos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $re): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($re->id == 4 && $sub->id == 1): ?>

        <?php elseif($re->id == 5 && $sub->id == 2): ?>

        <?php elseif($re->id == 12 && $re->id_pro == 1 && $product->id == 3): ?>

        <?php elseif($re->id == 11 && $re->id_pro == 1 && $product->id == 4): ?>

        <?php else: ?>
        <p><?php echo e($re->name); ?></p>
        <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('vista.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH X:\Project\webpage\resources\views/product/informacion.blade.php ENDPATH**/ ?>