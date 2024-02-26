

<?php $__env->startSection('content'); ?>
    <div class="card mx-auto px-3" style="max-width: 1000px;">
        <div class="row g-0">
            <div class="text-center">
                <h1 class="mx-auto">Subproducto derivado</h1>
                <h4><a href="<?php echo e(Route('admin.productos.productData', encrypt($product))); ?>"
                        class="text-info-emphasis"><?php echo e($product->name); ?></a>/
                    <a href="<?php echo e(Route('admin.productos.subproductData', [encrypt($product), encrypt($subproduct)])); ?>"
                        class="text-info-emphasis"><?php echo e($subproduct->name); ?></a>/
                    <a href="<?php echo e(Route('admin.productos.subproductDerData', [encrypt($product), encrypt($subproduct), encrypt($subproductDer)])); ?>"
                        class="text-info-emphasis"><?php echo e($subproductDer->name); ?></a>/
                </h4>
            </div>
            <div class="mt-3 mb-3 me-3 col-md-2">
                <form action="" id="update_subproduct_der_image" method="POST" enctype="multipart/form-data" class="img-fluid rounded mx-auto formImage">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('POST'); ?>
                    <button type="button" data-bs-toggle="modal" data-bs-target="#uploadImageModal">
                        <img src="<?php echo e(url($subproductDer->icon)); ?>" class="img-fluid rounded mx-auto"
                            alt="<?php echo e($subproductDer->uri); ?>">
                    </button>
                </form>
            </div>
            <div class="col mx-auto">
                <div class="card-body p-0">
                    <form action="" id="update_subproduct_der_image" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('POST'); ?>
                        <div class="input-group input-group">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Nombre</span>
                            <input type="text" class="form-control" aria-label="Sizing example input"
                                aria-describedby="inputGroup-sizing-sm" placeholder="<?php echo e($subproductDer->name); ?>">
                        </div>
                        <div class="input-group">
                            <span class="input-group-text">Detalle</span>
                            <textarea class="form-control" aria-label="With textarea" placeholder="<?php echo e($subproductDer->detalle); ?>"
                                style="height: 12px;"></textarea>
                        </div>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </form>
                </div>
                <button type="button" class="btn btn-success float-end mb-3">Guardar</button>
            </div>
            <hr>
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

                        <div class="d-flex justify-content-center flex-wrap">

                            <div class="input-group">
                                <div class="input-group-text">
                                    <input name="existente_imagen_producto" class="form-check-input mt-0" type="radio"
                                        value="" aria-label="Radio button for following text input">
                                </div>
                                <img src="<?php echo e(url($product->icon)); ?>" class="rounded img-fluid" alt="<?php echo e($product->uri); ?>">
                            </div>

                        </div>

                        <div>
                            <label for="evidencia_comentario">Nueva imagen: </label>
                            <input type="file" name="nueva_imagen_producto" id="nueva_imagen_producto" accept="image/*">
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

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USUARIO\Desktop\UNIBLOCK\webpage\resources\views/admin/products/subproductDerData.blade.php ENDPATH**/ ?>