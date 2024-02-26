

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-body overflow-x-auto">
            <h1>MATERIALES</h1>
            <button type="button" class="btn btn-primary my-3 float-end" data-bs-toggle="modal" data-bs-target="#newUserModal">
                <i class="bi bi-plus-circle-dotted" style="font-size: 1.5rem;"></i>
            </button>
            <table class="table table-bordered" id="materiales">
                <thead>
                    <tr class="bg-primary text-light">
                        <th scope="col">Id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Unidad de medida</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Costo Total</th>
                        <th scope="col">Costo/Ud medida</th>
                        <th scope="col">Options</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $materiales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $material): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($material->id); ?></td>
                            <td><?php echo e($material->nombre); ?></td>
                            <td><?php echo e($material->ud_medida); ?></td>
                            <td><?php echo e($material->cantidad); ?></td>
                            <td><?php echo e($material->costo_total); ?></td>
                            <td><?php echo e($material->costo_ud_medida); ?></td>
                            <td>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#modalEditarMaterial<?php echo e($material->id); ?>">
                                    Editar
                                </button>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#modalDeleteMaterial<?php echo e($material->id); ?>">
                                    Eliminar
                                </button>
                            </td>
                        </tr>



                        <!-- Modal neditar Material -->
                        <div class="modal fade modal-lg" id="modalEditarMaterial<?php echo e($material->id); ?>" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header bg-primary text-light">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Editar material:
                                            <?php echo e($material->nombre); ?></h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>

                                    <form action="<?php echo e(route('admin.materiales.edit', encrypt($material->id))); ?>"
                                        method="POST" enctype="multipart/form-data">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('PUT'); ?>
                                        <div class="modal-body">

                                            <div class="input-group input-group mb-3">
                                                <label for="nombre" class="input-group-text bg-primary-subtle"
                                                    id="inputGroup-sizing-sm"><?php echo e(__('nombre')); ?></label>

                                                <input id="nombre" type="text" aria-label="Sizing example input"
                                                    aria-describedby="inputGroup-sizing-sm"
                                                    class="form-control <?php $__errorArgs = ['nombre'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                    name="nombre" value="<?php echo e($material->nombre); ?>" autocomplete="nombre"
                                                    autofocus title="Este campo es obligatorio">

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

                                            <div class="input-group input-group mb-3">
                                                <label for="ud_medida" class="input-group-text bg-primary-subtle"
                                                    id="inputGroup-sizing-sm">Unidad de Medida</label>

                                                <select name="ud_medida"
                                                    class="form-select <?php $__errorArgs = ['ud_medida'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                    id="ud_medida" title="Este campo es obligatorio">
                                                    <option selected value="">Elegir...</option>
                                                    <option <?php if($material->ud_medida == 'kg'): ?> selected <?php endif; ?>
                                                        value="kg">Kilogramo (kg) </option>
                                                    <option <?php if($material->ud_medida == 'm2'): ?> selected <?php endif; ?>
                                                        value="m2">Metro Cuadrado (m^2) </option>
                                                    <option <?php if($material->ud_medida == 'unidad'): ?> selected <?php endif; ?>
                                                        value="unidad">Unidad (unidad)</option>
                                                    <option <?php if($material->ud_medida == 'm'): ?> selected <?php endif; ?>
                                                        value="m">Metro (m)</option>
                                                    id="ud_medida">
                                                </select>
                                                <?php $__errorArgs = ['ud_medida'];
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
unset($__errorArgs, $__bag); ?>"
                                                    name="cantidad" value="<?php echo e($material->cantidad); ?>"
                                                    autocomplete="cantidad" oninput="validarMontoInput(this)"
                                                    placeholder="Insertar el costo">
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

                                            <div class="input-group mb-3">
                                                <div class="form-floating">
                                                    <input id="costo_total" type="text" min="0"
                                                        class="form-control <?php $__errorArgs = ['costo_total'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                        name="costo_total" value="<?php echo e($material->costo_total); ?>"
                                                        autocomplete="costo_total" oninput="validarMontoInput(this)"
                                                        placeholder="Insertar el costo">
                                                    <label for="costo_total">Costo Total</label>
                                                </div>
                                                <label class="input-group-text">$</label>

                                                <?php $__errorArgs = ['costo_total'];
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
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Cancelar</button>
                                            <button type="submit" class="btn btn-primary">Guardar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>


                        <!-- Delete Modal -->
                        <div class="modal fade" id="modalDeleteMaterial<?php echo e($material->id); ?>" data-bs-backdrop="static"
                            data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">¿Está seguro de eliminar el
                                            material:
                                            <?php echo e($material->nombre); ?>?</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p class="text-danger fw-bold">Los datos no se podrán recuperar</p>
                                    </div>
                                    <div class="modal-footer">
                                        <form action="<?php echo e(route('admin.materiales.destroy', encrypt($material->id))); ?>"
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

    <!-- Modal new Material -->
    <div class="modal fade modal-lg" id="newUserModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary text-light">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Nuevo material</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form action="<?php echo e(route('admin.materiales.create')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('POST'); ?>
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
                                value="<?php echo e(old('nombre')); ?>" autocomplete="nombre" autofocus
                                title="Este campo es obligatorio" placeholder="Ingrese el nombre">
                            <label for="nombre">Nombre</label>

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

                        <div class="input-group input-group mb-3">
                            <label for="ud_medida" class="input-group-text bg-primary-subtle"
                                id="inputGroup-sizing-sm">Unidad de Medida</label>

                            <select name="ud_medida" class="form-select <?php $__errorArgs = ['ud_medida'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                id="ud_medida" title="Este campo es obligatorio">
                                <option selected value="">Elegir...</option>
                                <option <?php if(old('ud_medida') == 'kg'): ?> selected <?php endif; ?> value="kg">Kilogramo (kg)
                                </option>
                                <option <?php if(old('ud_medida') == 'm2'): ?> selected <?php endif; ?> value="m2">Metro Cuadrado
                                    (m^2)</option>
                                <option <?php if(old('ud_medida') == 'unidad'): ?> selected <?php endif; ?> value="unidad">Unidad (unidad)
                                </option>
                                <option <?php if(old('ud_medida') == 'm'): ?> selected <?php endif; ?> value="m">Metro (m)
                                </option>
                            </select>
                            <?php $__errorArgs = ['ud_medida'];
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
                                value="<?php echo e(old('cantidad')); ?>" autocomplete="cantidad" oninput="validarMontoInput(this)"
                                placeholder="Insertar el costo">
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

                        <div class="input-group mb-3">
                            <div class="form-floating">
                                <input id="costo_total" type="text" min="0"
                                    class="form-control <?php $__errorArgs = ['costo_total'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="costo_total"
                                    value="<?php echo e(old('costo_total')); ?>" autocomplete="costo_total"
                                    oninput="validarMontoInput(this)" placeholder="Insertar el costo">
                                <label for="costo_total">Costo Total</label>
                            </div>
                            <label class="input-group-text">$</label>

                            <?php $__errorArgs = ['costo_total'];
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

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\crist\Desktop\Uni\HostProyectos\PROCESOS\NahirCarrera_14765_G1_MPSW\CODIGO\HilosYAlgodon\resources\views/admin/materiales/materialesManager.blade.php ENDPATH**/ ?>