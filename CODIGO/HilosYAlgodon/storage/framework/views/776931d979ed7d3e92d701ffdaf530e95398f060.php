

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-body">
            <div class="text-center mx-auto" style="max-width: 1000px">
                <h1>ACCESO RAPIDO</h1>
                <button class="btn btn-outline-dark p-0 m-0" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    <div class="image--card_container">
                        <img src="<?php echo e(Storage::url($acRapido->image)); ?>" class="card-img-bottom mx-auto image--card_image">
                        <div class="image--card_filter">
                            <span class="image--card_text">Actualizar imagen</span>
                        </div>
                    </div>
                </button>
            </div>

            <div style="max-width:900px;" class="mx-auto text-center">
                <form action="<?php echo e(route('admin.acRapidos.acRapido.updateAcRapido', encrypt($acRapido->id))); ?>" method="POST"
                    enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <div class="form-check form-switch my-3 mx-auto rounded border border-primary px-2 py-1 list-group-item list-group-item-action list-group-item-primary"
                        style="width:25%;height:35px;">
                        <input name="acRapido_active_status" class="form-check-input float-end" id="flexSwitchCheckChecked"
                            type="checkbox" role="switch" <?php if($acRapido->active === 1): ?> checked <?php else: ?> <?php endif; ?>>
                        <label class="form-check-label stretched-link float-start w-9"
                            for="flexSwitchCheckChecked">Activo</label>
                    </div>

                    <div class="input-group input-group">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Nombre</span>
                        <input name="acRapido_name" type="text" class="form-control" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-sm" value="<?php echo e($acRapido->name); ?>" required>
                    </div>

                    <div class="input-group input-group">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Description</span>
                        <input name="acRapido_description" type="text" class="form-control"
                            aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"
                            value="<?php echo e($acRapido->description); ?>">
                    </div>

                    <div class="input-group input-group">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Link</span>
                        <input name="acRapido_url" type="text" class="form-control" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-sm" value="<?php echo e($acRapido->url); ?>" required>
                    </div>

                    <div class="input-group input-group mx-auto" style="max-width:200px;">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Position</span>
                        <input name="acRapido_position" type="number" class="form-control" aria-label="With textarea"
                            min="1" id="positionNewAcRapido" value="<?php echo e($acRapido->position); ?>" required
                            oninput="posicionReplaceValidation(<?php echo e(json_encode($positions)); ?>,<?php echo e($acRapido->position); ?>)">
                    </div>

                    <p class="fw-normal fs-6 my-0 text-center rounded border border-danger list-group-item list-group-item-danger px-1 my-1 mx-auto"
                        id="textPositionValidation" style="display:none;"></p>

                    <button type="submit" class="btn btn-success float-end mb-3">Guardar</button>
                </form>
                <p class="card-text"><small class="text-body-secondary">Última actualización:
                        <?php echo e($acRapido->updated_at); ?></small>
                </p>
            </div>
        </div>
    </div>

    <!-- Modal update images -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Actualizar imagen</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-check btn btn-primary w-100 m-0 mb-2 p-0">
                        <input class="form-check-input" type="checkbox" id="checkbox_deploy_updateImage" value=""
                            onclick="deployFormNewImage()" style="display:none;">
                        <label class="form-check-label w-100 py-1" for="checkbox_deploy_updateImage">
                            Actualizar con una nueva imagen<i class="bi bi-caret-right-fill float-end"
                                id="newImageIcon"></i>
                        </label>
                    </div>

                    <div id="formToUploadImage" class="formToUploadImage">
                        <form action="<?php echo e(route('admin.acRapidos.updateNewImageCard')); ?>" id="update_product_image"
                            method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('POST'); ?>
                            <div class="mb-3">
                                <h2 class="modal-title fs-5 mb-3" id="exampleModalLabel">Nueva imagen:</h2>
                                <input required type="file" name="nueva_imagen_producto" id="nueva_imagen_producto"
                                    accept="image/*">
                                <input name="idAcRapido" type="hidden" value="<?php echo e(encrypt($acRapido->id)); ?>">
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Añadir y actualizar Imagen</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="form-check btn btn-primary w-100 m-0 p-0">
                        <input class="form-check-input" type="checkbox" value=""
                            id="checkbox_deploy_updateExistImage" onclick="deployFormExistingImage()"
                            style="display:none;">
                        <label class="form-check-label w-100 py-1" for="checkbox_deploy_updateExistImage">
                            Actualizar con una imagen existente<i class="bi bi-caret-right-fill float-end"
                                id="existingImageIcon"></i>
                        </label>
                    </div>

                    <div class="formToExistingImageContainer">
                        <div id="formToExistingImage" class="formToExistingImage">

                            <h2 class="modal-title fs-5 mb-3" id="exampleModalLabel">Imagen existente:</h2>
                            <form action="<?php echo e(route('admin.acRapidos.updateExistingImageCard')); ?>"
                                id="update_product_image" method="POST" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('POST'); ?>
                                <div class="exist-images_container">
                                    <?php $__currentLoopData = $imagesPath; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="form-check exist-images_input-group p-0 m-0">
                                            <input required class="form-check-input exist-images_radio"
                                                value="<?php echo e($image); ?>" type="radio" name="existing_image_update"
                                                id="flexRadioDefault<?php echo e($image); ?>">
                                            <label class="form-check-label image-card_toUpload_container"
                                                for="flexRadioDefault<?php echo e($image); ?>">
                                                <img src="<?php echo e(Storage::url($image)); ?>" alt=""
                                                    class="exist-img_upload">
                                            </label>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                                <input name="idAcRapido" type="hidden" value="<?php echo e(encrypt($acRapido->id)); ?>">
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Añadir y actualizar Imagen</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USUARIO\Desktop\UNIBLOCK\webpageModificandoVistasDeProductos\resources\views/admin/acRapidos/acRapidoData.blade.php ENDPATH**/ ?>