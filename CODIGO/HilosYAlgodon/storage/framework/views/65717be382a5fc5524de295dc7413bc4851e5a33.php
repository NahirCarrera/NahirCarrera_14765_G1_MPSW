

<?php $__env->startSection('content'); ?>
    <div class="card mx-auto px-3" style="max-width: 1000px;">
        <div class="row g-0">
            <div class="text-center">
                <h1 class="mx-auto">Producto</h1>
            </div>
            <div class=" mb-3 me-3 col-md-2">
                <form action="" id="update_product_image" method="POST" enctype="multipart/form-data"
                    class="img-fluid rounded mx-auto formImage">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('POST'); ?>
                    <!-- Button trigger modal -->
                    <button type="button" data-bs-toggle="modal" data-bs-target="#uploadImageModal">
                        <img src="<?php echo e(url($product->icon)); ?>" class="img-fluid rounded mx-auto" alt="<?php echo e($product->uri); ?>">
                    </button>
                </form>
            </div>

            <div class="col mx-auto">
                <form action="<?php echo e(route('admin.productos.updateProduct')); ?>" id="update_product_info" method="POST"
                    enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('POST'); ?>
                    <div class="col mx-auto">
                        <div class="card-body p-0">
                            <div class="input-group input-group">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Nombre</span>
                                <input name="new_product_name" type="text" class="form-control"
                                    aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"
                                    placeholder="<?php echo e($product->name); ?>" autocomplete="<?php echo e($product->name); ?>">
                            </div>
                            <div class="input-group">
                                <span class="input-group-text">Detalle</span>
                                <textarea name="new_product_detail" class="form-control" aria-label="With textarea"
                                    placeholder="<?php echo e($product->detalle); ?>" style="height: 12px;" autocomplete="<?php echo e($product->detalle); ?>"></textarea>
                            </div>
                            <input name="productId" value="<?php echo e($product->id); ?>" type="text" style="display:none;">
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                        <button type="submit" class="btn btn-success float-end mb-3">Guardar</button>
                    </div>

                </form>
            </div>
            <hr class="mt-3">
        </div>
        <div>

            <div class="text-center">
                <h1 class="mx-auto">Subproductos</h1>
            </div>
            <button type="button" class="btn btn-primary ms-3">Añadir subproducto</button>
            <div class="d-flex justify-content-center flex-wrap mt-4">

                <?php $__currentLoopData = $subProductos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subProduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="card text-bg-primary mb-3 me-4" style="max-width: 18rem; min-width:286px;">

                        <div class="card-header"><strong><?php echo e($subProduct->name); ?></strong></div>
                        <div class="card-body">
                            <p class="card-text text-white"><small><?php echo e($subProduct->detalle); ?></small></p>
                        </div>
                        <div class="d-flex justify-content-center mb-3">
                            <a
                                href="<?php echo e(Route('admin.productos.subproductData', [encrypt($product), encrypt($subProduct)])); ?>">
                                <button class="btn btn-info me-4">Editar</button></a>
                            <a href="" class="btn btn-danger">Eliminar</a>
                        </div>

                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>

    </div>

    <!-- Modal -->
    <div class="modal fade" id="uploadImageModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Actualizar imagen</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="" id="update_product_image" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('POST'); ?>
                    <div class="modal-body">
                        <div class="mb-3">
                            <h2 class="modal-title fs-5 mb-3" id="exampleModalLabel">Nueva imagen:</h2>
                            <input type="file" name="nueva_imagen_producto" id="nueva_imagen_producto" accept="image/*">
                        </div>

                        <h2 class="modal-title fs-5 mb-3" id="exampleModalLabel mb-5">Insertar una imagen existente:</h2>

                        <div class="exist-images_container">
                            <?php $__currentLoopData = $imagesProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="exist-images_input-group">
                                    <input name="existente_imagen_producto" class="exist-images_radio" type="radio"
                                        value="" aria-label="Radio button for following text input">
                                    <img src="<?php echo e($image); ?>" class="exist-img_upload" alt="">
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USUARIO\Desktop\UNIBLOCK\webpage\resources\views/admin/products/productData.blade.php ENDPATH**/ ?>