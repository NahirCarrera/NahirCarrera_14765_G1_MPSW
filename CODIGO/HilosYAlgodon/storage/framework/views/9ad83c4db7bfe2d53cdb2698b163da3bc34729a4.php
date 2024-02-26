<?php if(session('aviso')): ?>
<div id="uno" class="modal-window">
    <div>
        <a href="#" title="Close" class="modal-close">Cerrar</a>
        <h1>Aviso!</h1>
        <div class="justify">
            <?php echo e(session('aviso')); ?>

            <p>¡Gracias por su confianza!</p>
        </div>
    </div>
</div>

<?php endif; ?><?php /**PATH C:\Users\USUARIO\Desktop\UNIBLOCK\webpageModificandoVistasDeProductos\resources\views/alerts/alerts.blade.php ENDPATH**/ ?>