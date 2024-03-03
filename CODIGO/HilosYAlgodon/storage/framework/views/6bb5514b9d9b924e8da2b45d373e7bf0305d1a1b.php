

<?php $__env->startSection('content'); ?>
    <div class="d-flex flex-wrap w-100 justify-content-center">
        <div class="card mb-3 flex-fill">
            <div class="card-header bg-info">
                <h4>Perfil del orden: <?php echo e($orden->nombre); ?></h4>
            </div>
            <div class="card-body">
                <div class="col mx-auto">
                    <form action="<?php echo e(route('admin.agenda.edit', encrypt($orden->id))); ?>" id="update_product_info"
                        method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>

                        <div class="modal-body">

                            <div class="form-floating mb-3">
                                <input id="nombre_cliente" type="text"
                                    class="form-control <?php $__errorArgs = ['nombre_cliente'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="nombre_cliente"
                                    value="<?php echo e($orden->nombre_cliente); ?>" autocomplete="nombre_cliente"
                                    placeholder="Almohada">

                                <label for="nombre_cliente"><?php echo e(__('Nombre del cliente')); ?></label>

                                <?php $__errorArgs = ['nombre_cliente'];
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
                                <textarea class="form-control <?php $__errorArgs = ['descripcion'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Leave a comment here"
                                    id="descripcion" name="descripcion"><?php echo e($orden->descripcion); ?></textarea>
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

                            <div class="input-group mb-3">
                                <div class="form-floating">
                                    <input id="fecha_entrega" type="datetime-local" min="2024-03-02T12:00"
                                        class="form-control <?php $__errorArgs = ['fecha_entrega'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                        name="fecha_entrega" value="<?php echo e($orden->fecha_entrega); ?>"
                                        autocomplete="fecha_entrega" placeholder="Insertar el costo">
                                    <label for="fecha_entrega">Fecha de Entrega</label>
                                </div>

                                <?php $__errorArgs = ['fecha_entrega'];
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
                                <textarea class="form-control <?php $__errorArgs = ['direccion'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Leave a comment here"
                                    id="direccion" name="direccion"><?php echo e($orden->descripcion); ?></textarea>
                                <label for="direccion">Dirección</label>
                                <?php $__errorArgs = ['direccion'];
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

                            <label for="entregado"
                                class="form-check form-switch my-3 mx-auto rounded border border-primary px-2 py-1 list-group-item list-group-item-action list-group-item-primary"
                                style="width:25%;height:35px;min-width:200px;">
                                <input name="entregado" id="entregado"
                                    class="form-check-input float-end <?php $__errorArgs = ['entregado'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    type="checkbox" role="switch" <?php if($orden->entregado === 1): ?> checked <?php else: ?> <?php endif; ?>>
                                <label class="form-check-label float-start" for="entregado">Entregado</label>
                                <?php $__errorArgs = ['entregado'];
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
                            </label>

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
                <h4>Asignacion de Productos</h4>
            </div>
            <div class="card-body">
                <div class="text-end mb-3">
                    <button href="" class="btn btn-success px-2" data-bs-toggle="modal"
                        data-bs-target="#newRequirementsModal">
                        <i class="bi bi-plus-lg"></i> Elegir Productos
                    </button>
                </div>

                <form action="<?php echo e(route('admin.agenda.editCantidadProductos', encrypt($orden->id))); ?>" method="POST"
                    enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <ul class="list-group text-start">
                        <?php $__currentLoopData = $productosAsignados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $asignacion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                                $producto = $asignacion->getProducto(encrypt($asignacion->producto_id));
                            ?>
                            <div class="input-group">
                                <span class="input-group-text" for="asignacion_<?php echo e($asignacion->id); ?>">
                                    <?php echo e($producto->nombre); ?> </span>
                                <input name="<?php echo e($asignacion->id); ?>" min="1" step="1" type="number"
                                    id="asignacion_<?php echo e($asignacion->id); ?>" class="form-control"
                                    value="<?php echo e($asignacion->cantidad); ?>" required>
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
                    <form action="<?php echo e(route('admin.agenda.editAsignacionProductos', encrypt($orden->id))); ?>"
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
                                    <?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($producto->nombre); ?></td>
                                            <td>
                                                <input name="material_<?php echo e($producto->id); ?>"
                                                    value="material_<?php echo e($producto->id); ?>" class="form-check-input"
                                                    type="checkbox" id="material_<?php echo e($producto->id); ?>"
                                                    <?php if($idsProductosAsignados): ?> <?php if(in_array($producto->id, $idsProductosAsignados)): ?>
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

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\crist\Desktop\Uni\HostProyectos\PROCESOS\NahirCarrera_14765_G1_MPSW\CODIGO\HilosYAlgodon\resources\views/admin/agenda/ordenDetail.blade.php ENDPATH**/ ?>