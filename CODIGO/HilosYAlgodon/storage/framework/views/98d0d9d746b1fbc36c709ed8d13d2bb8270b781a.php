

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-body overflow-x-auto">
            <h1>PRODUCTOS</h1>
            <button type="button" class="btn btn-primary my-3 float-end" data-bs-toggle="modal" data-bs-target="#newUserModal">
                <i class="bi bi-plus-circle-dotted" style="font-size: 1.5rem;"></i>
            </button>
            <table class="table table-bordered" id="productos">
                <thead>
                    <tr class="bg-primary text-light">
                        <th scope="col">Id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Descipcion</th>
                        <th scope="col">Costo Unitario</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Horas de Trabajo</th>
                        <th scope="col">OP</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($producto->id); ?></td>
                            <td><?php echo e($producto->nombre); ?></td>
                            <td><?php echo e($producto->descripcion); ?></td>
                            <td><?php echo e($producto->costo_unitario); ?></td>
                            <td><?php echo e($producto->cantidad); ?></td>
                            <td><?php echo e($producto->horas_trabajo); ?></td>
                            <td>
                                <a href="<?php echo e(route('admin.productos.details', encrypt($producto->id))); ?>"
                                    class="btn btn-primary">
                                    Editar
                                </a>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#modalDeleteMaterial<?php echo e($producto->id); ?>">
                                    Eliminar
                                </button>
                            </td>
                        </tr>

                        <!-- Delete Modal -->
                        <div class="modal fade" id="modalDeleteMaterial<?php echo e($producto->id); ?>" data-bs-backdrop="static"
                            data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">¿Está seguro de eliminar el
                                            producto:
                                            <?php echo e($producto->nombre); ?>?</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p class="text-danger fw-bold">Los datos no se podrán recuperar</p>
                                    </div>
                                    <div class="modal-footer">
                                        <form action="<?php echo e(route('admin.productos.destroy', encrypt($producto->id))); ?>"
                                            method="POST">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <button type="button" class="btn btn-primary"
                                                data-bs-dismiss="modal">Cancelar</button>
                                            <button type="submit" class="float-right ml-2 btn btn-danger">
                                                Eliminar
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal new Producto -->
    <div class="modal fade modal-lg" id="newUserModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary text-light">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Nuevo producto</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form action="<?php echo e(route('admin.productos.create')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('POST'); ?>
                    <div class="modal-body">

                        <div class="form-floating mb-3">
                            <input id="nombre" type="text" class="form-control <?php $__errorArgs = ['nombre'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                name="nombre" value="<?php echo e(old('nombre')); ?>" autocomplete="nombre"
                                placeholder="Almohada">

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
                            <textarea class="form-control <?php $__errorArgs = ['descripcion'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Leave a comment here"
                                id="descripcion" name="descripcion"></textarea>
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
                                <input disabled id="costo_unitario" type="text" min="0"
                                    class="form-control <?php $__errorArgs = ['costo_unitario'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="costo_unitario"
                                    value="<?php echo e(old('costo_unitario')); ?>" autocomplete="costo_unitario"
                                    oninput="validarMontoInput(this)" placeholder="Insertar el costo">
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
                                value="<?php echo e(old('cantidad')); ?>" autocomplete="cantidad"
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
                                value="<?php echo e(old('horas_trabajo')); ?>" autocomplete="horas_trabajo"
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
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\NahirCarrera_14765_G1_MPSW\CODIGO\HilosYAlgodon\resources\views/admin/productos/ProductosManager.blade.php ENDPATH**/ ?>