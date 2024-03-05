

<?php $__env->startSection('content'); ?>
    <div class="d-flex flex-wrap w-100 justify-content-center">
        <div class="card mb-3 flex-fill">
            <div class="card-header bg-info">
                <h4>Perfil del producto: <?php echo e($producto->nombre); ?></h4>
            </div>
            <div class="card-body">
                <div class="col mx-auto">
                    <form action="<?php echo e(route('admin.productos.edit', encrypt($producto->id))); ?>" id="update_product_info"
                        method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>

                        <div class="modal-body">

                            <div class="form-floating mb-3">
                                <input id="nombre" type="text"
                                    class="form-control <?php $__errorArgs = ['nombre'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="nombre"
                                    value="<?php echo e($producto->nombre); ?>" required autocomplete="nombre" placeholder="Almohada">

                                <label for="nombre"><?php echo e(__('Nombre')); ?></label>

                                <?php $__errorArgs = ['nombre'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control <?php $__errorArgs = ['descripcion'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    placeholder="Leave a comment here" id="descripcion" name="descripcion"
                                    value="<?php echo e($producto->descripcion); ?>">
                                <label for="descripcion">Descripcion</label>
                                <?php $__errorArgs = ['descripcion'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="input-group">
                                <div class="form-floating">
                                    <input disabled id="costo_unitario" type="text" min="0"
                                        class="form-control <?php $__errorArgs = ['costo_unitario'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                        name="costo_unitario" value="<?php echo e($producto->costo_unitario); ?>" required
                                        autocomplete="costo_unitario" oninput="validarMontoInput(this)"
                                        placeholder="Insertar el costo">
                                    <label for="costo_unitario">Costo Unitario</label>
                                </div>
                                <label class="input-group-text">$</label>

                                <?php $__errorArgs = ['costo_unitario'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                
                            </div>
                            <label class=" mb-3 text-secondary">Valor por hora de trabajo: <?php echo e(round($configuraciones->sueldo_base/30/8,2)); ?></label>

                            <div class="form-floating mb-3">
                                <input id="cantidad" type="number" min="0"
                                    class="form-control <?php $__errorArgs = ['cantidad'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="cantidad"
                                    value="<?php echo e($producto->cantidad); ?>" required autocomplete="cantidad"
                                    oninput="validarMontoInput(this)" placeholder="Insertar el costo">
                                <label for="cantidad">Cantidad</label>


                                <?php $__errorArgs = ['cantidad'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="form-floating mb-3">
                                <input id="horas_trabajo" type="number" min="0"
                                    class="form-control <?php $__errorArgs = ['horas_trabajo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="horas_trabajo"
                                    value="<?php echo e($producto->horas_trabajo); ?>" required autocomplete="horas_trabajo"
                                    oninput="validarMontoInput(this)" placeholder="Insertar el costo">
                                <label for="horas_trabajo">Horas de trabajo</label>


                                <?php $__errorArgs = ['horas_trabajo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-info">Guardar</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <div class="card mb-3 mx-3">
            <div class="card-header bg-info">
                <h4>Asignacion de Materiales</h4>
            </div>
            <div class="card-body">
                <div class="text-end mb-3">
                    <button href="" class="btn btn-success px-2" data-bs-toggle="modal"
                        data-bs-target="#newRequirementsModal">
                        <i class="bi bi-plus-lg"></i> Modificar Materiales
                    </button>
                </div>

                <form action="<?php echo e(route('admin.productos.editCantidadMateriales', encrypt($producto->id))); ?>" method="POST"
                    enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <ul class="list-group text-start">
                        <?php $__currentLoopData = $materialesAsignados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $asignacion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                                $material = $asignacion->getMaterial(encrypt($asignacion->material_id));
                            ?>
                            <div class="input-group">
                                <span class="input-group-text" for="asignacion_<?php echo e($asignacion->id); ?>">
                                    <?php echo e($material->nombre); ?> </span>
                                <input name="<?php echo e($asignacion->id); ?>" min="0" step="0.001" type="number"
                                    id="asignacion_<?php echo e($asignacion->id); ?>" class="form-control"
                                    oninput="validarMontoInput(this)" value="<?php echo e($asignacion->cantidad); ?>" required>
                                <span class="input-group-text" for="asignacion_<?php echo e($asignacion->id); ?>">
                                    <?php echo e($material->ud_medida); ?> </span>
                                <span class="input-group-text" for="asignacion_<?php echo e($asignacion->id); ?>">
                                    <?php echo e($material->costo_ud_medida); ?>$ c/u </span>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                    <div class="modal-footer mt-3">
                        <button type="submit" class="btn btn-primary">Asignar</button>
                    </div>
                </form>

            </div>
        </div>

    </div>

    <!-- MODAL PARA AÑADIR MATERIALES -->
    <div class="modal fade modal-md" id="newRequirementsModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modificar Materiales</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo e(route('admin.productos.editAsignacionMateriales', encrypt($producto->id))); ?>"
                        id="update_product_info" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <div class="col mx-auto">
                            <table class="table table-bordered w-100" id="asignarMateriales">
                                <thead>
                                    <tr class="bg-primary text-light">
                                        <th>Nombre</th>
                                        <th>OP</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $materiales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $material): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($material->nombre); ?></td>
                                            <td>
                                                <input name="material_<?php echo e($material->id); ?>"
                                                    value="material_<?php echo e($material->id); ?>" class="form-check-input"
                                                    type="checkbox" id="material_<?php echo e($material->id); ?>"
                                                    <?php if($idsMaterialesAsignados): ?> <?php if(in_array($material->id, $idsMaterialesAsignados)): ?>
                                                    checked <?php endif; ?>
                                                    <?php endif; ?>>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                <button type="submit" class="btn btn-primary">Añadir</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\NahirCarrera_14765_G1_MPSW\CODIGO\HilosYAlgodon\resources\views/admin/productos/productoDetail.blade.php ENDPATH**/ ?>