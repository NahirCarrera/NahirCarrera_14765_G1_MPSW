

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-body">
            <form action="<?php echo e(route('admin.roles.role.updateRole', encrypt($rol->id))); ?>" method="POST"
                enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <div class="text-center">
                    <h1>ROL: <?php echo e($rol->name); ?></h1>
                </div>
                <div class="row">
                    <div class="input-group">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Nombre</span>
                        <input name="name" type="text" class="form-control" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-sm" value="<?php echo e($rol->name); ?>" required>
                    </div>
                    <p class="card-text mt-3"><small class="text-body-secondary">Última actualización:
                            <?php echo e($rol->updated_at); ?></small>
                    </p>
                </div>
                <hr>
                <?php
                    $currentAssignation = json_decode($rol->assignation, true);
                ?>
                <div class="row mx-auto">
                    <div class="text-center">
                        <h1>Alcance</h2>
                    </div>
                    <div class="col mx-auto">
                        <div class="container text-center mt-3">
                            <div class="row align-items-start">
                                <div class="col">
                                    <div class="text-center">
                                        <h3>Usuarios</h3>
                                    </div>
                                    <ul class="list-group text-start">
                                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li class="list-group-item list-group-item-action list-group-item-info">
                                                <input name="user_<?php echo e($user->id); ?>" value="user_<?php echo e($user->id); ?>"
                                                    class="form-check-input me-1" type="checkbox"
                                                    id="user<?php echo e($user->id); ?>"
                                                    <?php if($currentAssignation): ?> 
                                                        <?php if(in_array($user->id, $currentAssignation)): ?>
                                                            checked 
                                                        <?php endif; ?>
                                                    <?php endif; ?>>
                                                    
                                                <label class="form-check-label stretched-link"
                                                    for="user<?php echo e($user->id); ?>"> <?php echo e($user->name); ?> </label>
                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success float-end mt-3">Guardar</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\crist\Desktop\Uni\HostProyectos\PROCESOS\NahirCarrera_14765_G1_MPSW\CODIGO\HilosYAlgodon\resources\views/admin/roles/roleData.blade.php ENDPATH**/ ?>