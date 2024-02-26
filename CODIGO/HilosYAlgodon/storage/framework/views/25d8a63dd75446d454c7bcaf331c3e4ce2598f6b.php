

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-body">

            <div class="card">
                <div class="card-header bg-info">
                    <h1>Perfil de <?php echo e($user->name); ?></h1>
                </div>
                <div class="card-body">
                    <div class="col mx-auto">
                        <form action="<?php echo e(route('admin.users.update', encrypt($user->id))); ?>" id="update_product_info"
                            method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            <div class="col mx-auto">
                                <div class="card-body p-0">
                                    <div class="input-group input-group mb-3">
                                        <span class="input-group-text bg-info-subtle"
                                            id="inputGroup-sizing-sm">Nombre</span>
                                        <input name="name" type="text" class="form-control"
                                            aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"
                                            value="<?php echo e($user->name); ?>">
                                    </div>

                                    <div class="input-group input-group mb-3">
                                        <span class="input-group-text bg-info-subtle"
                                            id="inputGroup-sizing-sm">Correo</span>
                                        <input name="email" type="text" class="form-control"
                                            aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"
                                            placeholder="<?php echo e($user->email); ?>">
                                    </div>

                                    <p class="card-text"><small class="text-muted">Modificado por última vez:
                                            <?php echo e($user->updated_at); ?></small></p>
                                </div>
                                <button type="submit" class="btn btn-info float-end">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


            <div class="card mx-auto mt-3 p-3">
                <h3>Roles</h3>
                <form action="<?php echo e(route('admin.updateUserRoles', encrypt($user->id))); ?>" id="update_product_info"
                    method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>

                    <ul class="list-group text-start">
                        <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rol): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                                $currentAssignation = json_decode($rol->assignation, true);
                            ?>
                            <li class="list-group-item list-group-item-action list-group-item-info">
                                <input name="rol_<?php echo e($rol->id); ?>" value="rol_<?php echo e($rol->id); ?>"
                                    class="form-check-input me-1" type="checkbox" id="rol<?php echo e($rol->id); ?>"
                                    <?php if($currentAssignation): ?> <?php if(in_array($user->id, $currentAssignation)): ?>
                                            checked <?php endif; ?>
                                    <?php endif; ?>>

                                <label class="form-check-label stretched-link" for="rol<?php echo e($rol->id); ?>">
                                    <?php echo e($rol->name); ?> </label>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                    <button type="submit" class="btn btn-info mt-3 float-end">Guardar</button>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\crist\Desktop\Uni\HostProyectos\PROCESOS\webpageModificandoVistasDeProductos\resources\views/admin/users/profile.blade.php ENDPATH**/ ?>