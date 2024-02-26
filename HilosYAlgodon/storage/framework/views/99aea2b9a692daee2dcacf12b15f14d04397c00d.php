

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-body">
            <div class="text-center">
                <h1>Accesos Rápidos</h1>
            </div>
            
            <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#newAcRapido">
                Añadir acceso rápido
            </button>
            <div class="row row-cols-1 row-cols-md-2 g-4 justify-content-md-center">
                <?php $__currentLoopData = $acRapidos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rapido): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col cardSliderContainer" style="max-width: 390px">
                        <a href="<?php echo e(route('admin.acRapidos.acRapido.show', encrypt($rapido))); ?>"
                            class="card btn btn-outline-dark m-0">
                            <img src="<?php echo e(Storage::url($rapido->image)); ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo e($rapido->name); ?></h5>
                                <p class="card-text"><?php echo e($rapido->description); ?></p>
                            </div>
                        </a>
                        <button type="button" class="buttonDeleteCardSlide me-3" data-bs-toggle="modal"
                            data-bs-target="#deleteModal<?php echo e($rapido->id); ?>">
                            <i class="bi bi-trash"></i>
                        </button>
                    </div>

                    <!-- Modal delete card -->
                    <div class="modal fade" id="deleteModal<?php echo e($rapido->id); ?>" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-4" id="exampleModalLabel">¿Está seguro de eliminar
                                        "<?php echo e($rapido->name); ?>"?</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p class="text-danger fw-bold">Los datos no se podrán recuperar</p>
                                </div>
                                <div class="modal-footer">
                                    <form action="<?php echo e(route('admin.acRapidos.deleteAcRapido', encrypt($rapido->id))); ?>"
                                        method="POST" enctype="multipart/form-data">
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

    <!-- Modal new requirement -->
    <div class="modal fade modal-lg" id="newAcRapido" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Nuevo acceso rápido</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo e(route('admin.acRapidos.newAcRapido')); ?>" id="update_product_info" method="POST"
                        enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('POST'); ?>
                        <div class="col mx-auto">
                            <div class="card-body p-0">
                                <div class="form-check form-switch mx-auto rounded border border-primary px-2 py-1 list-group-item list-group-item-action list-group-item-primary"
                                    style="width:25%;height:35px;">
                                    <input name="acRapido_active_status" class="form-check-input float-end"
                                        id="flexSwitchCheckChecked" type="checkbox" role="switch">
                                    <label class="form-check-label stretched-link float-start w-9"
                                        for="flexSwitchCheckChecked">Activo</label>
                                </div>

                                <div class="input-group input-group mx-auto" style="max-width:200px;">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Posición</span>
                                    <input name="acRapido_position" type="number" class="form-control"
                                        aria-label="With textarea" min="1" id="positionNewAcRapido" required oninput="positionValidation(<?php echo e(json_encode($positions)); ?>)">
                                </div>
                                <p class="fw-normal fs-6 my-0 text-center rounded border border-danger list-group-item list-group-item-danger px-1 my-1 mx-auto" id="textPositionValidation" style="display:none;"></p>

                                <div class="input-group input-group">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Nombre</span>
                                    <input name="acRapido_name" type="text" class="form-control"
                                        aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                </div>

                                <div class="input-group input-group">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Description</span>
                                    <input name="acRapido_description" type="text" class="form-control"
                                        aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                </div>

                                <div class="input-group input-group">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Link</span>
                                    <input name="acRapido_url" type="text" class="form-control"
                                        aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"
                                        required>
                                </div>

                                
                                <div class="form-check btn btn-primary w-100 mt-3 mb-2 p-0">
                                    <input class="form-check-input" type="checkbox" id="checkbox_deploy_updateImage"
                                        value="" onclick="deployFormNewImage()" style="display:none;">
                                    <label class="form-check-label w-100 py-1" for="checkbox_deploy_updateImage">
                                        Crear con una nueva imagen<i class="bi bi-caret-right-fill float-end"
                                            id="newImageIcon"></i>
                                    </label>
                                </div>

                                <div id="formToUploadImage" class="formToUploadImage">

                                    <div class="mb-3">
                                        <h2 class="modal-title fs-5 mb-3" id="exampleModalLabel">Nueva imagen:</h2>
                                        <input type="file" name="nueva_imagen_producto"
                                            id="nueva_imagen_producto" accept="image/*">
                                    </div>

                                </div>

                                
                                <div class="form-check btn btn-primary w-100 m-0 p-0">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="checkbox_deploy_updateExistImage" onclick="deployFormExistingImage()"
                                        style="display:none;">
                                    <label class="form-check-label w-100 py-1" for="checkbox_deploy_updateExistImage">
                                        Crear con una imagen existente<i class="bi bi-caret-right-fill float-end"
                                            id="existingImageIcon"></i>
                                    </label>
                                </div>

                                <div class="formToExistingImageContainer">
                                    <div id="formToExistingImage" class="formToExistingImage">

                                        <h2 class="modal-title fs-5 mb-3" id="exampleModalLabel">Imagen existente:</h2>

                                        <div class="exist-images_container">
                                            <?php $__currentLoopData = $imagesPath; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="form-check exist-images_input-group p-0 m-0">
                                                    <input class="form-check-input exist-images_radio"
                                                        value="<?php echo e($image); ?>" type="radio"
                                                        name="existing_image_update"
                                                        id="flexRadioDefault<?php echo e($image); ?>">
                                                    <label class="form-check-label image-card_toUpload_container"
                                                        for="flexRadioDefault<?php echo e($image); ?>">
                                                        <img src="<?php echo e(Storage::url($image)); ?>" alt=""
                                                            class="exist-img_upload">
                                                    </label>
                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                <button type="submit" class="btn btn-primary" id="buttonNewAcRapido">Añadir</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USUARIO\Desktop\UNIBLOCK\webpage\resources\views/admin/acRapidos/acRapidosManager.blade.php ENDPATH**/ ?>