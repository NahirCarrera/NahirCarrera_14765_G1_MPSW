

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-body">
            <div class="text-center">
                <h1>REQUISITOS</h1>
            </div>
            
            <button type="button" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#newRequirementModal">
                Añadir requisito
            </button>
            <div>
                <ul class="list-group">
                    <?php $__currentLoopData = $requirements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $requisito): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="mx-auto input-group">
                            <a href="<?php echo e(Route('admin.requirements.requirement.show', encrypt($requisito))); ?>"
                                class="list-group-item list-group-item-action list-group-item-info col mb-1">
                                <?php echo e($requisito->id); ?>.- <?php echo e($requisito->name); ?></a>
                            <button type="button" class="btn btn-danger mb-1 " data-bs-toggle="modal"
                                data-bs-target="#deleteRequirement<?php echo e($requisito->id); ?>">
                                <i class="bi bi-trash"></i>
                            </button>
                        </div>


                        <!-- Modal delete requirement -->
                        <div class="modal fade" id="deleteRequirement<?php echo e($requisito->id); ?>" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-4" id="exampleModalLabel">¿Está seguro de eliminar el requisito <?php echo e($requisito->id); ?>?</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p class="text-danger fw-bold">Los datos no se podrán recuperar</p>
                                    </div>
                                    <div class="modal-footer">
                                        <form action="<?php echo e(route('admin.requirements.deleteRequirement',encrypt($requisito->id))); ?>" method="POST" enctype="multipart/form-data">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('PUT'); ?>

                                            <button type="button" class="btn btn-primary"
                                                data-bs-dismiss="modal">Cancelar</button>
                                            <button type="submit" class="btn btn-danger">Eliminar</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        </div>
    </div>


    <!-- Modal new requirement -->
    <div class="modal fade modal-lg" id="newRequirementModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Nuevo requisito</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo e(route('admin.requirements.newRequirement')); ?>" id="update_product_info" method="POST"
                        enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('POST'); ?>
                        <div class="col mx-auto">
                            <div class="card-body p-0">
                                <div class="input-group input-group">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Nombre</span>
                                    <input name="new_requirement_title" type="text" class="form-control"
                                        aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                </div>
                            </div>

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

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\crist\Desktop\Uni\HostProyectos\PROCESOS\HilosYAlgodon\resources\views/admin/requirements/requirementsManager.blade.php ENDPATH**/ ?>