

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-body">
            <div class="text-center">
                <h1>SLIDER</h1>
            </div>
            
            <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#newCardModal">
                Nueva Card
            </button>
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <?php $__currentLoopData = $carousel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $card): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col mx-auto" style="max-width: 390px">
                        <div class="card cardSliderContainer">
                            <a href="<?php echo e(route('admin.slider.card.show', encrypt($card))); ?>"
                                class="card btn btn-outline-dark p-1 m-0">
                                <img src="<?php echo e(Storage::url($card->foto)); ?>" class="card-img-top" alt="...">
                                <?php if($card->tdes === 1): ?>
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo e($card->titulo); ?></h5>
                                        
                                    </div>
                                <?php endif; ?>
                            </a>
                            <button type="button" class="buttonDeleteCardSlide" data-bs-toggle="modal"
                                data-bs-target="#deleteModal<?php echo e($card->id); ?>">
                                <i class="bi bi-trash"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Modal delete card -->
                    <div class="modal fade" id="deleteModal<?php echo e($card->id); ?>" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-4" id="exampleModalLabel">¿Está seguro?</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p class="text-danger fw-bold">Los datos no se podrán recuperar</p>
                                </div>
                                <div class="modal-footer">
                                    <form action="<?php echo e(route('admin.slider.deleteCard', encrypt($card->id))); ?>" method="POST"
                                        enctype="multipart/form-data">
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
            </div>
        </div>
    </div>
    <!-- Modal new card -->
    <div class="modal fade modal-lg" id="newCardModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Nueva Card</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo e(route('admin.slider.newCard')); ?>" id="update_product_info" method="POST"
                        enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('POST'); ?>
                        <div class="col mx-auto">
                            <div class="card-body p-0">
                                <div class="form-check form-switch mx-auto" style="width:35%;">
                                    <input name="card_active_status" class="form-check-input float-end" type="checkbox"
                                        role="switch">
                                    <label class="form-check-label float-start" for="flexSwitchCheckChecked">Activo</label>
                                </div>
                                <div class="form-check form-switch mt-3 mx-auto" style="width:35%;">
                                    <input name="card_tdes_status" class="form-check-input float-end" type="checkbox"
                                        role="switch" onchange="tdesModify()" id="tdesCheckbox">
                                    <label class="form-check-label float-start" for="flexSwitchCheckChecked">Título y
                                        Descripción</label>
                                </div>
                                <div class="form-check form-switch my-3 mx-auto" style="width:35%;">
                                    <input name="card_tlink_status" class="form-check-input float-end" type="checkbox"
                                        role="switch" onchange="tlinkModify()" id="tlinkCheckbox">
                                    <label class="form-check-label float-start" for="flexSwitchCheckChecked">Enlace</label>
                                </div>
                                <div id="tdesContainer" class="hiddenContainer">
                                    <div class="input-group input-group">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Titulo</span>
                                        <input name="new_card_title" type="text" class="form-control"
                                            aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"
                                            id="titleCardInput">
                                    </div>
                                    <div class="input-group input-group">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Descripción</span>
                                        <input name="new_card_des" type="text" class="form-control"
                                            aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"
                                            id="desCardInput">
                                    </div>
                                </div>
                                <div id="tlinkContainer" class="hiddenContainer">
                                    <div class="input-group input-group">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Link</span>
                                        <input name="new_card_link" type="text" class="form-control"
                                            aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"
                                            id="tlinkInput">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <h3 class="modal-title fs-6 my-2" id="exampleModalLabel">Nueva imagen:</h3>
                                    <input required name="new_card_image" type="file" accept="image/*">
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

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\crist\Desktop\Uni\HostProyectos\PROCESOS\HilosYAlgodon\resources\views/admin/slider/sliderManager.blade.php ENDPATH**/ ?>