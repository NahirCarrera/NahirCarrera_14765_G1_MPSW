

<?php $__env->startSection('content'); ?>
    <div class="card mx-auto px-3" style="max-width: 1000px;">
        <div class="row g-0">
            <div class="text-center">
                <h1 class="mx-auto">Subproducto</h1>
                <h4><a href="<?php echo e(Route('admin.productos.productData', encrypt($product))); ?>"
                        class="text-info-emphasis"><?php echo e($product->name); ?></a>/
                    <a href="<?php echo e(Route('admin.productos.subproductos.subproductData', encrypt($subproduct))); ?>"
                        class="text-info-emphasis"><?php echo e($subproduct->name); ?></a>
                </h4>
            </div>
            <div class="mb-3 me-3 col-md-2">
                <form action="" id="update_subproduct_image" method="POST" enctype="multipart/form-data"
                    class="img-fluid rounded mx-auto formImage">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('POST'); ?>
                    <button type="button" data-bs-toggle="modal" data-bs-target="#uploadImageModal">
                        <img src="<?php echo e(Storage::url($subproduct->icon)); ?>" class="img-fluid rounded mx-auto"
                            alt="<?php echo e($subproduct->uri); ?>">
                    </button>
                </form>
            </div>
            <div class="col mx-auto">
                <form action="<?php echo e(route('admin.productos.subproductos.updateSubproduct', encrypt($subproduct->id))); ?>"
                    id="update_subproduct_info" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <div class="card-body p-0">

                        <div class="input-group input-group">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Nombre</span>
                            <input name="new_subproduct_name" type="text" class="form-control" id="name_update_input"
                                aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"
                                placeholder="<?php echo e($subproduct->name); ?>" autocomplete="<?php echo e($subproduct->name); ?>"
                                oninput="updateUri()">
                        </div>
                        <div class="input-group">
                            <span class="input-group-text">Detalle</span>
                            <textarea name="new_subproduct_detail" class="form-control" aria-label="With textarea"
                                placeholder="<?php echo e($subproduct->detalle); ?>" style="height: 12px;" autocomplete="<?php echo e($subproduct->detalle); ?>"></textarea>
                        </div>

                        <div class="input-group">
                            <span class="input-group-text" style="height: 37px;">Uri</span>
                            <p class="form-control" aria-label="With textarea"
                                style="height: 37px; background:#f0f0f0; color:rgb(107, 107, 107)" id="uri_update_input">
                                <?php echo e($subproduct->uri); ?></p>
                            <input required name="new_subproduct_uri" id="uri_update_input_value" value=""
                                type="hidden">
                        </div>

                        <p class="card-text"><small class="text-muted">Modificado por última vez:
                                <?php echo e($subproduct->updated_at); ?></small></p>
                        <button type="submit" class="btn btn-success float-end mb-3">Guardar</button>
                    </div>
                </form>

            </div>
            <hr>
        </div>

        <?php if($product->niveles == 2): ?>
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

        <?php if($product->niveles > 2): ?>
            <div>
                <div class="text-center">
                    <h1 class="mx-auto">Subproductos derivados</h1>
                </div>
                
                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#newSubProductDerModal">
                    Añadir subproducto derivado
                </button>
                <div class="d-flex justify-content-center flex-wrap mt-4">

                    <?php $__currentLoopData = $subSubProductos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subSubProducto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="card text-bg-primary mb-3 me-4" style="max-width: 18rem;">

                            <div class="card-header"><strong><?php echo e($subSubProducto->name); ?></strong></div>
                            <div class="card-body">
                                <p class="card-text text-white"><small><?php echo e($subSubProducto->detalle); ?></small></p>
                            </div>

                            <div class="d-flex justify-content-center mb-3">
                                <a
                                    href="<?php echo e(Route('admin.productos.subproductos.subproductosDer.subproductDerData', encrypt($subSubProducto))); ?>">
                                    <button class="btn btn-info me-4">Editar</button></a>
                                <!-- Button delete modal -->
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#deleteModal<?php echo e($subSubProducto->id); ?>">
                                    Eliminar
                                </button>
                            </div>

                        </div>

                        <!-- Delete Modal -->
                        <div class="modal fade" id="deleteModal<?php echo e($subSubProducto->id); ?>" data-bs-backdrop="static"
                            data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">¿Está seguro de eliminar
                                            <?php echo e($subSubProducto->name); ?>?</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p class="text-danger fw-bold">No se podrá recuperar los datos</p>
                                    </div>
                                    <div class="modal-footer">
                                        <form
                                            action="<?php echo e(route('admin.productos.subproductos.deleteSubproductDer', encrypt($subSubProducto->id))); ?>"
                                            method="POST">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('PUT'); ?>
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
                </div>
            </div>
        <?php endif; ?>

    </div>

    <?php if($product->niveles > 2): ?>
        <!-- Modal para nuevo subproducto derivado -->
        <div class="modal fade modal-lg" id="newSubProductDerModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Nuevo subproducto derivado</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?php echo e(route('admin.productos.subproductos.newSubProductDer')); ?>" method="POST"
                            enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('POST'); ?>
                            <div class="col mx-auto">
                                <div class="card-body p-0">
                                    <div class="input-group input-group">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Nombre</span>
                                        <input name="new_subproductder_name" required type="text" class="form-control"
                                            aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"
                                            id="name_input" oninput="newUri()">
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-text">Detalle</span>
                                        <textarea name="new_subproductder_detail" required class="form-control" aria-label="With textarea"
                                            style="height: 12px;"></textarea>
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-text" style="height: 37px;">Uri</span>
                                        <p class="form-control" aria-label="With textarea"
                                            style="height: 37px; background:#f0f0f0; color:rgb(107, 107, 107)"
                                            id="uri_input">
                                        </p>
                                        <input required name="new_subproductder_uri" id="uri_input_value" value=""
                                            type="hidden">
                                    </div>
                                    <div class="mb-3">
                                        <h3 class="modal-title fs-6 my-2" id="exampleModalLabel">Nueva imagen:</h3>
                                        <input name="new_subproductder_image" required type="file"
                                            id="nueva_imagen_producto" accept="image/*">
                                    </div>
                                    <input required name="new_subproductder_id_subproduct" value="<?php echo e($subproduct->id); ?>"
                                        type="hidden">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Cerrar</button>
                                    <button type="submit" class="btn btn-primary">Añadir</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <!-- Modal para actualizar imagen -->
    <div class="modal fade" id="uploadImageModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
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
                        <form action="<?php echo e(route('admin.productos.updateNewImage', encrypt($subproduct->id))); ?>"
                            id="update_product_image" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            <div class="mb-3">
                                <h2 class="modal-title fs-5 mb-3" id="exampleModalLabel">Nueva imagen:</h2>
                                <input required type="file" name="nueva_imagen_producto" id="nueva_imagen_producto"
                                    accept="image/*">
                                <input type="hidden" name="product_type" value="subproduct">
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
                        <form action="<?php echo e(route('admin.productos.updateExistingImage', encrypt($subproduct->id))); ?>"
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
                            <input type="hidden" name="product_type" value="subproduct">
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

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USUARIO\Desktop\UNIBLOCK\webpage\resources\views/admin/products/subproductData.blade.php ENDPATH**/ ?>