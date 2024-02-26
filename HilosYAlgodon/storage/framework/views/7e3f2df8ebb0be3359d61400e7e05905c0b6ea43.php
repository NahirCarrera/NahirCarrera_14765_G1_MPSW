
<?php $__env->startSection('content'); ?>


<div class="services-product">
    <div class="services-text">
        <p> Información de Ahorros</p>
        <p>Deja tus datos para que un ascesor se comunique con tigo.</p>
        <p></p>
    </div>

</div>
<div class="com"> </div>


<form class="form" method="POST" action="<?php echo e(route('enviarMail')); ?>">
<?php echo csrf_field(); ?>
    <p>Nombres:</p><input type="text" name="nombre" minlength="10" required>
    <p>Número de cédula:</p><input type="text" name="cedula" minlength="10" required>
    <p>Número de teléfono celular:</p><input type="text" name="celular" minlength="10" required>
    <p>Número de teléfono convencional:</p><input type="text" placeholder="Opcional" name="convencional" minlength="5">
    <p>Correo electrónico:</p><input type="email" name="correo" required>
    <p></p>
    <input hidden type="text" name="title" minlength="10" value="Ahorros">
    <input class="input" type="submit" value="Enviar">
</form>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('vista.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH X:\Project\webpage\resources\views/Formularios/Ahorros.blade.php ENDPATH**/ ?>