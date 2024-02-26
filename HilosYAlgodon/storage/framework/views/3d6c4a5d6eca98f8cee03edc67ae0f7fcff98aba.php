<?php $__env->startSection('content'); ?>
<div id="owl-carousel" class="owl-carousel">
    <?php $__currentLoopData = $carousel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $carr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($carr->tlink === 1): ?>
        <a href="<?php echo e($carr->link); ?>" target="_blank">
            <?php endif; ?>
            <div style="background-image: url('<?php echo e($carr->foto); ?>');" class="owl-slide">
                <div class="cotizador">
                </div>
                <?php if($carr->tdes === 1): ?>
                <div class="owl--text">
                    <p><?php echo e($carr->titulo); ?></p>
                    <p><?php echo e($carr->description); ?></p>
                </div>
                <?php elseif($carr->tlink === 2): ?>
                <a href="https://www.cosede.gob.ec/conoce-tu-monto-de-cobertura/" target="_blank">
                    <div style="width:65%" class="cosede"></div>
                </a>
                <a href="https://educate.cosede.gob.ec" target="_blank">
                    <div style="width:35%" class="cosede"></div>
                </a>
                <?php endif; ?>
            </div>
            <?php if($carr->tlink === 1): ?>
        </a>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<div class="services" id="Productos" data-aos="zoom-in">
    <div class="services-text servicios_ofrecidos--text">
        <p>Servicios</p>
        <p>Servicios que ofrece la intitución</p>
        <p></p>
    </div>
    <div class="box-container">
        <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="box-1">
            <img src="<?php echo e($pro->icon); ?>" alt="">
            <p class="heading"><?php echo e($pro->name); ?></p>
            <p class="details"><?php echo e($pro->detalle); ?></p>
            <a href="<?php echo e(route('producto',$pro->uri)); ?>"><button>Saber más</button></a>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>

<div class="services">
    <div class="services-text accesos_rapidos--text">
        <p>Accesos rápidos</p>
        <p>Haciedo más sencillo y rapido tus tramites</p>
        <p></p>
    </div>
    <div class="come"> </div>
    <div class="container-card" id="container-card1" data-aos="fade-left">
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

    <div class="container-card" id="container-card2" data-aos="fade-right">
        <div class="card-blog">
            <div class="card-blog-description">
                <h2>Solicita información de Créditos</h2>
                <p>Llene el formulario y un ascesor se comunicará con usted.</p><br>
                <a href="<?php echo e(route('cotizador','creditos')); ?>"><button>Revisar</button></a>
            </div>
            <div class="card-blog-imagen">
                <img src="<?php echo e(url('images/rapidos/credito.jpg')); ?>" alt="{1">
            </div>
        </div>
    </div>
    <div class="container-card" id="container-card3" data-aos="fade-left">
        <div class="card-blog">
            <div class="card-blog-imagen">
                <img src="<?php echo e(url('images/rapidos/ahorro.jpg')); ?>" alt="1">
            </div>
            <div class="card-blog-description">
                <h2>Solicita tu Ahorro Programado</h2>
                <p>Aplicamos una tasa atractiva del 8% y premiamos tu cumplimiento con el 2% adicional..</p><br>
                <a href="<?php echo e(route('cotizador','Ahoprogramado')); ?>"><button>Revisar</button></a>
            </div>
        </div>
    </div>
</div>

<div class="about-container" id="about-container" data-aos="fade-up">
    <img src="<?php echo e(url($insti->imagen1)); ?>">
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

<script src="<?php echo e(url('js/coInversiones.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('vista.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USUARIO\Desktop\UNIBLOCK\webpage\resources\views/welcome.blade.php ENDPATH**/ ?>