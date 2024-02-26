<?php $__env->startSection('content'); ?>

<div id="owl-carousel" class="owl-carousel">
    <?php $__currentLoopData = $carousel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $carr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if($carr->tlink === 1): ?>
    <a href="<?php echo e($carr->link); ?>" target="_blank">
        <?php endif; ?>
        <div style="background-image: url('<?php echo e($carr->foto); ?>');" class="owl-slide">
            <?php if($carr->tdes === 1): ?>
            <div class="owl--text">
                <p><?php echo e($carr->titulo); ?></p>
                <p><?php echo e($carr->description); ?></p>
            </div>
            <?php endif; ?>
        </div>
        <?php if($carr->tlink === 1): ?>
    </a>
    <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<section id="servicios">
    <div class="services">
        <div class="services-text">
            <p>Servicios</p>
            <p>Servicios que ofrece la intitución</p>
            <p></p>
        </div>
        <div class="box-container">
            <?php $__currentLoopData = $Product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="box-1">
                <img src="<?php echo e($pro->icon); ?>" alt="">
                <p class="heading"><?php echo e($pro->name); ?></p>
                <p class="details"><?php echo e($pro->detalle); ?></p>
                <a href="<?php echo e(route('producto',$pro->uri)); ?>"><button>Saber más</button></a>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<div class="services">
    <div class="services-text">
        <p>Accesos rápidos</p>
        <p>Haciedo más sencillo y rapido tus tramites</p>
        <p></p>
    </div>
    <div class="com"> </div>
    <div class="container-card">
        <div class="card-blog">
            <div class="card-blog-imagen">
                <img src="<?php echo e(url('images/rapidos/inversiones.jpg')); ?>" alt="{1">
            </div>
            <div class="card-blog-description">
                <h2>Simulador de Inversiones</h2>
                <p>Revisa cuanto puedes ganar con tu dinero..</p><br>
                <a href="<?php echo e(route('cotizador','inversion')); ?>"><button>Revisar</button></a>
            </div>
        </div>
    </div>

    <div class="container-card">
        <p hidden><?php echo e($cont = 0); ?></p>
        <p hidden><?php echo e($cont++); ?></p>
        <div class="card-blog">
            <div class="card-blog-description">
                <h2>Solicita información de Créditos</h2>
                <p>Llena el formulario y un ascesor se comunicara con usted.</p><br>
                <a href="<?php echo e(route('cotizador','inversion')); ?>"><button>Revisar</button></a>
            </div>
            <div class="card-blog-imagen">
                <img src="<?php echo e(url('images/rapidos/credito.jpg')); ?>" alt="{1">
            </div>
        </div>
    </div>
    <div class="container-card">
        <p hidden><?php echo e($cont = 0); ?></p>
        <p hidden><?php echo e($cont++); ?></p>
        <div class="card-blog">
            <div class="card-blog-imagen">
                <img src="<?php echo e(url('images/rapidos/ahorro.jpg')); ?>" alt="1">
            </div>
            <div class="card-blog-description">
                <h2>Solicita tu Ahorro Programado</h2>
                <p>Te pagamos a un interes de 8% y si hay cumplimiento te regalamos el 2% adicional.</p><br>
                <a href="<?php echo e(route('cotizador','Ahoprogramado')); ?>"><button>Revisar</button></a>
            </div>
        </div>
    </div>
</div>

<div class="about-container">
    <img src="<?php echo e($insti->imagen1); ?>">
    <div class="about-text">
        <p><?php echo e($insti->nameCorto); ?></p>
        <p><?php echo e($insti->eslogan); ?></p>
        <p><?php echo e($insti->frase); ?></p>
        <a href="<?php echo e(route('about',$insti->uri)); ?>"><button>Conoce más</button></a>
    </div>
</div>
<div class="contact-me">
    <p>Alguna consulta, reclamo, sugerencia escribenos...</p>
    <a href="<?php echo e(route('contactanos')); ?>"><button>Escribenos</button></a>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('vista.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH X:\Project\webpage\resources\views/welcome.blade.php ENDPATH**/ ?>