<?php $__env->startSection('content'); ?>
    
    <section class="form_section">
        
        <div class="services-product elecciones_form--services-product">
            <div class="pequenio">
                <div class="services-text">
                    <p>Elecciones 2022 - 2026</p>
                    <p>Formulario de inscripción para candidatos a representantes para la asamblea general de
                        representantes.</p>
                    <p></p>
                </div>
                <!-- INICIO formulario elecciones -->
                <form class="form-pequenio" method="POST" action="<?php echo e(route('validacionRegistro')); ?>">
                    <?php echo method_field('POST'); ?>
                    <?php echo csrf_field(); ?>
                    <p>Nombres:</p><input id="elecciones_form_name" type="text" name="name" minlength="10" value="<?php echo e(old('name')); ?>" required>
                    <p>Número de cédula:</p><input id="elecciones_form_nCedula" type="number" name="nCedula" minlength="10" value="<?php echo e(old('nCedula')); ?>" required>
                    <?php $__errorArgs = ['nCedula'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="form_elecciones-error_message">
                            <p><?php echo e($message); ?></p>
                        </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                    <p>Número de teléfono celular:</p><input id="elecciones_form_nCelular" type="text" name="nCelular" minlength="10" value="<?php echo e(old('nCelular')); ?>" required>

                    <?php $__errorArgs = ['nCelular'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="form_elecciones-error_message">
                            <p><?php echo e($message); ?></p>
                        </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                    <p>Dirección:</p><input id="elecciones_form_direccion" type="text" name="direccion" minlength="5" value="<?php echo e(old('direccion')); ?>" >
                    <?php $__errorArgs = ['direccion'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="form_elecciones-error_message">
                            <p><?php echo e($message); ?></p>
                        </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <p>Correo:</p><input id="elecciones_form_correo" type="text" name="correo" minlength="5" value="<?php echo e(old('correo')); ?>">
                    <?php $__errorArgs = ['correo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="form_elecciones-error_message">
                            <p><?php echo e($message); ?></p>
                        </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <p></p>
                    
                    <input class="input form_elecciones_enviar--button" id="elecciones_form--active_button" onclick="elecciones_form_active_modal()" type="button" value="Enviar">
                    
                    
                    <section class="modal_elecciones_form--section" id="modal_elecciones_form--section">
                        
                        <input type="button" class="blur_background" id="elecciones_form--hide_background">
                        <div>
                            <div class="modal_elecciones--hide_button">
                                <input id="elecciones_form--hide_button" onclick="elecciones_form_hide_modal()" type="button" class="input" value="X">
                            </div>
                            <div class="modal_elecciones--header">
                                <h2>AVISO</h2>
                            </div>
                            <div class="modal_elecciones--content">
                                <input id="form_elecciones--checkbox" class="modal_elecciones--checkbox" type="checkbox" name="autorizacion" required>
                                <?php $__errorArgs = ['autorizacion'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="form_elecciones-error_message">
                                        <p><?php echo e($message); ?></p>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                <p>Al aceptar esta autorizando a la Cooperativa de Ahorro y Crédito "UNIBLOCK" y Servicios Ltda., a usar la información proporcionada en el presente formulario para la inscripción en las elecciones para candidatos a Representantes para la Asamblea General de Socios.</p>
                                <input id="form_elecciones--accept" type="submit" class="input modal_elecciones_Accept" value="Acepto">
                                
                            </div>
                        </div>
                    </section>
                </form>
            </div>
            <img src="https://www.cne.gob.ec/wp-content/uploads/2022/07/nota-22-de-julio.jpg" class="model transformation image_form_elecciones">
        </div>
        
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('vista.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USUARIO\Desktop\UNIBLOCK\webpage\resources\views/elecciones/index.blade.php ENDPATH**/ ?>