

<?php $__env->startSection('content'); ?>
    <div class="card mx-auto px-3" style="max-width: 1000px;">
        <div class="row g-0">
            <div class="text-center">
                <h1 class="mx-auto">Subproducto derivado</h1>
                <h4><a href="<?php echo e(Route('admin.productos.productData', encrypt($product))); ?>"
                        class="text-info-emphasis"><?php echo e($product->name); ?></a>/
                    <a href="<?php echo e(Route('admin.productos.subproductos.subproductData', encrypt($subproduct))); ?>"
                        class="text-info-emphasis"><?php echo e($subproduct->name); ?></a>/
                    <a href="<?php echo e(Route('admin.productos.subproductos.subproductosDer.subproductDerData', encrypt($subproductDer))); ?>"
                        class="text-info-emphasis"><?php echo e($subproductDer->name); ?></a>/
                </h4>
            </div>

            <div class="mt-3 mb-3 me-3 col-md-2">
                <form action="" id="update_subproduct_der_image" method="POST" enctype="multipart/form-data"
                    class="img-fluid rounded mx-auto formImage">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('POST'); ?>
                    <button type="button" data-bs-toggle="modal" data-bs-target="#uploadImageModal">
                        <img src="<?php echo e(Storage::url($subproductDer->icon)); ?>" class="img-fluid rounded mx-auto"
                            alt="<?php echo e($subproductDer->uri); ?>">
                    </button>
                </form>
            </div>
            <div class="col mx-auto">
                <form
                    action="<?php echo e(route('admin.productos.subproductos.subproductosDer.updateSubproductDer', encrypt($subproductDer->id))); ?>"
                    id="update_subproduct_der_info" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <div class="card-body p-0">

                        <div class="input-group input-group">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Nombre</span>
                            <input name="new_subproductDer_name" type="text" class="form-control"
                                aria-label="Sizing example input" id="name_update_input"
                                aria-describedby="inputGroup-sizing-sm" placeholder="<?php echo e($subproductDer->name); ?>"
                                oninput="updateUri()">
                        </div>
                        <div class="input-group">
                            <span class="input-group-text">Detalle</span>
                            <textarea name="new_subproductDer_detail" class="form-control" aria-label="With textarea"
                                placeholder="<?php echo e($subproductDer->detalle); ?>" style="height: 12px;"></textarea>
                        </div>

                        <div class="input-group">
                            <span class="input-group-text" style="height: 37px;">Uri</span>
                            <p class="form-control" aria-label="With textarea"
                                style="height: 37px; background:#f0f0f0; color:rgb(107, 107, 107)" id="uri_update_input">
                                <?php echo e($subproductDer->uri); ?></p>
                            <input required name="new_subproductDer_uri" id="uri_update_input_value" value=""
                                type="hidden">
                        </div>
                        <p class="card-text"><small class="text-muted">Modificado por última vez:
                                <?php echo e($subproductDer->updated_at); ?></small></p>

                    </div>
                    <button type="submit" class="btn btn-success float-end mb-3">Guardar</button>
                </form>

            </div>
            <hr>
        </div>
    </div>

    <?php if($product->niveles == 3): ?>
        <div class="mb-3">
            <div class="text-center">
                <h2>REQUISITOS</h2>
            </div>

            <div>
                <ul class="list-group">
                    <?php $__currentLoopData = $requisitos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $requisito): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="list-group-item list-group-item-info"><?php echo e($requisito->name); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        </div>
    <?php endif; ?>

    <!-- Modal para actualizar imagen -->
    <div class="modal fade" id="uploadImageModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Actualizar imagen</h1>
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
                        <form action="<?php echo e(route('admin.productos.updateNewImage', encrypt($subproductDer->id))); ?>"
                            id="update_product_image" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            <div class="mb-3">
                                <h2 class="modal-title fs-5 mb-3" id="exampleModalLabel">Nueva imagen:</h2>
                                <input required type="file" name="nueva_imagen_producto" id="nueva_imagen_producto"
                                    accept="image/*">
                                <input type="hidden" name="product_type" value="subproductDer">
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

                    <div id="formToExistingImage" class="formToExistingImage">
                        <form action="<?php echo e(route('admin.productos.updateExistingImage', encrypt($subproductDer->id))); ?>"
                            id="update_product_image" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            <h2 class="modal-title fs-5 mb-3" id="exampleModalLabel mb-5">Insertar una imagen existente:
                            </h2>
                            <div class="exist-images_container">
                                <?php $__currentLoopData = $imagesProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="form-check exist-images_input-group p-0 m-0">
                                        <input required class="form-check-input exist-images_radio"
                                            value="<?php echo e($image); ?>" type="radio" name="existente_imagen_producto"
                                            id="flexRadioDefault<?php echo e($image); ?>">
                                        <label class="form-check-label image-card_toUpload_container"
                                            for="flexRadioDefault<?php echo e($image); ?>">
                                            <img src="<?php echo e(Storage::url($image)); ?>" class="exist-img_upload">
                                        </label>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <input type="hidden" name="product_type" value="subproductDer">
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Actualizar Imagen</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USUARIO\Desktop\UNIBLOCK\webpage\resources\views/admin/products/subproductDerData.blade.php ENDPATH**/ ?>