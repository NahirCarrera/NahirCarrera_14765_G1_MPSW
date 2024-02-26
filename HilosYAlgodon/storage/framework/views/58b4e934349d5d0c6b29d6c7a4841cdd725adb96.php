

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-body">
            <h1>USUARIOS</h1>
            <button type="button" class="btn btn-primary my-3 float-end" data-bs-toggle="modal" data-bs-target="#newUserModal">
                <i class="bi bi-person-fill-add ms-1" style="font-size: 1.5rem;"></i>
            </button>
            <table class="table table-bordered">
                <thead>
                    <tr class="bg-primary text-light">
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Roles</th>
                        <th scope="col">Options</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                        $roles = $user->assignatedRoles(encrypt($user->id));
                    ?>
                        <tr>
                            <th scope="row"><?php echo e($user->id); ?></th>
                            <td><?php echo e($user->name); ?></td>
                            <td><?php echo e($user->email); ?></td>
                            <td>
                                <?php if($roles): ?>
                                    <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rol): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php echo e($rol); ?>-
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            </td>
                            <td>
                                <a href="<?php echo e(Route('admin.users.show', encrypt($user->id))); ?>" class="btn btn-info">
                                    Editar
                                </a>
                                <a href="<?php echo e(Route('admin.impersonate', $user->id)); ?>" class="btn btn-primary">
                                    Ver
                                </a>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#deleteUserModal<?php echo e($user->id); ?>">
                                    Eliminar
                                </button>
                            </td>
                        </tr>

                        <!-- Delete Modal -->
                        <div class="modal fade" id="deleteUserModal<?php echo e($user->id); ?>" data-bs-backdrop="static"
                            data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">¿Está seguro de eliminar a
                                            <?php echo e($user->name); ?>?</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p class="text-danger fw-bold">Los datos no se podrán recuperar</p>
                                    </div>
                                    <div class="modal-footer">
                                        <form action="<?php echo e(route('admin.users.destroy', encrypt($user->id))); ?>"
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
            <?php echo e($users->links()); ?>

        </div>
    </div>

    <!-- Modal new user -->
    <div class="modal fade modal-lg" id="newUserModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary text-light">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Nuevo usuario</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form action="<?php echo e(route('admin.users.store')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('POST'); ?>
                    <div class="modal-body">

                        <div class="input-group input-group mb-3">
                            <label for="name" class="input-group-text bg-primary-subtle"
                                id="inputGroup-sizing-sm"><?php echo e(__('Name')); ?></label>


                            <input id="name" type="text" aria-label="Sizing example input"
                                aria-describedby="inputGroup-sizing-sm"
                                class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="name"
                                value="<?php echo e(old('name')); ?>" required autocomplete="name" autofocus>

                            <?php $__errorArgs = ['name'];
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
                            <label for="email" class="input-group-text bg-primary-subtle"
                                id="inputGroup-sizing-sm"><?php echo e(__('E-Mail Address')); ?></label>
                            <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email">

                            <?php $__errorArgs = ['email'];
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
                            <label for="password" class="input-group-text bg-primary-subtle"
                                id="inputGroup-sizing-sm"><?php echo e(__('Password')); ?></label>
                            <input id="password" type="password"
                                class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required
                                autocomplete="new-password">
                            <?php $__errorArgs = ['password'];
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
                            <label for="password-confirm" class="input-group-text bg-primary-subtle"
                                id="inputGroup-sizing-sm"><?php echo e(__('Confirm Password')); ?></label>
                            <input id="password-confirm" type="password" class="form-control"
                                name="password_confirmation" required autocomplete="new-password">
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

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\crist\Desktop\Uni\HostProyectos\PROCESOS\webpageModificandoVistasDeProductos\resources\views/admin/users/userManager.blade.php ENDPATH**/ ?>