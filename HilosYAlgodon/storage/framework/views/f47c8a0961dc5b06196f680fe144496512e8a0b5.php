

<?php $__env->startSection('content'); ?>
<div class="services-product">
    <div class="services-text">
        <p> Contáctanos</p>
        <p>La institución siempre al servicio de la comunidad.</p>
        <p></p>
    </div>

</div>
<div class="com"> </div>
<div class="com"> </div>
<div class="contact">
    <div class="contact-map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.2983714495876!2d-78.63290688588917!3d-0.9250093355981007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x96fce794b9d5ced1!2sUniblock%20Cooperativa%20de%20Ahorro%20y%20Cr%C3%A9dito!5e0!3m2!1ses!2sec!4v1613080465005!5m2!1ses!2sec"
            width="500" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
            tabindex="0"></iframe>
    </div>
    <div class="contact-formulario">
        <form method="POST" action="<?php echo e(route('enviarMail')); ?>">
            <?php echo csrf_field(); ?>
            <label>Escribenos</label><br>
            <label for="">Nombre: </label>
            <input type="text" name="nombre" placeholder="Nombre" require>
            <label for="">Telefono: </label>
            <input type="number" name="celular" placeholder="Telefono" require>
            <label for="">Correo: </label>
            <input type="email" name="correo" placeholder="Correo" require>
            <label for="">Mensaje: </label>
            <input hidden type="text" name="title" minlength="10" value="Contacto">
            <textarea name="mensaje" require></textarea>
            <input class="down-cv" type="submit" value="Contactar">
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('vista.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH X:\Project\webpage\resources\views/about/contact.blade.php ENDPATH**/ ?>