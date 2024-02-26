
<?php $__env->startSection('content'); ?>
<div class="com"> </div>
<div class="services-product">
    <div class="services-text">
        <p> Información de Crédito</p>
        <p>Deja tus datos para que un ascesor se comunique con tigo.</p>
        <p></p>
    </div>

</div>
<div class="come"> </div>


<form class="form" method="POST" action="<?php echo e(route('enviarMail')); ?>">
<?php echo csrf_field(); ?>
    <p>Nombres:</p><input type="text" name="nombre" minlength="10" required>
    <p>Número de cédula:</p><input type="text" name="cedula" minlength="10" required>
    <p>Ciudad de residencia:</p><input type="text" name="ciudad" minlength="5" required>
    <p>Número de teléfono celular:</p><input type="text" name="celular" minlength="10" required>
    <p>Número de teléfono convencional:</p><input type="text" name="convencional" minlength="5">
    <p>Correo electrónico:</p><input type="email" name="correo" required>
    <p>Monto solicitado:</p><input type="text" name="monto" required>
    <p>Destino del crédito:</p><input name="necesidad" type="text" required>
    <p>Total de ingresos:</p><input type="number" name="ingresos" minlength="2" required>
    <p>Total de gastos:</p><input type="number" name="gastos" minlength="2" required>
    <p>¿Cuánto puede pagar de cuota?:</p><input minlength="2" name="puedepagar" type="number" required>
    <p>Plazo:</p><input type="number" minlength="1" name="plazo" required>
    <p>Por este medio autorizo de forma expresa e irrevocable a la Cooperativa de Ahorro y Crédito UNIBLOCK y Servicios Ltda., para que obtenga un reporte de la información crediticia de la cual soy titular para lo cual expresamente declaro que asumo la responsabilidad por la información que obtenga, así como exonero expresamente a la Cooperativa de cualquier responsabilidad.</p>
    <p><input type="checkbox" required name="autoriza" > Si, Autorizo.</p>
    <input hidden type="text" name="title" minlength="10" value="Creditos">
    <input class="input" type="submit" value="Enviar">
</form>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('vista.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USUARIO\Desktop\UNIBLOCK\webpageModificandoVistasDeProductos\resources\views/Formularios/creditos.blade.php ENDPATH**/ ?>