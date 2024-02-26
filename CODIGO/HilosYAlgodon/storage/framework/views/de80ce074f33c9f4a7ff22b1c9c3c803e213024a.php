



<?php $__env->startSection('content'); ?>
    <nav class="navbar">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newProductModal">
            Añadir producto
        </button>
    </nav>
    <div class="d-flex justify-content-center flex-wrap mt-4">
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card text-bg-primary mb-3 me-4" style="max-width: 18rem; min-width:286px;">

                <div class="card-header"><?php echo e($product->name); ?></div>
                <div class="card-body">
                    <p class="card-text text-white"><?php echo e($product->detalle); ?></p>
                </div>

                <div class="d-flex justify-content-center mb-3">
                    <a href="<?php echo e(Route('admin.productos.productData', encrypt($product))); ?>">
                        <button class="btn btn-info me-4">Editar</button>
                    </a>
                    <!-- Button delete modal -->
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                        data-bs-target="#deleteModal<?php echo e($product->id); ?>">
                        Eliminar
                    </button>
                </div>

            </div>

            <!-- Delete Modal -->
            <div class="modal fade" id="deleteModal<?php echo e($product->id); ?>" data-bs-backdrop="static" data-bs-keyboard="false"
                tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">¿Está seguro de eliminar
                                <?php echo e($product->name); ?>?</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p class="text-danger fw-bold">Se eliminará el producto, todos sus subproductos y derivados</p>
                        </div>
                        <div class="modal-footer">
                            <form action="<?php echo e(route('admin.productos.deleteProduct', encrypt($product->id))); ?>"
                                method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PUT'); ?>
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancelar</button>
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

    <!-- Modal nuevo producto -->
    <div class="modal fade modal-lg" id="newProductModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Nuevo producto</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo e(route('admin.productos.newProduct')); ?>" id="update_product_info" method="POST"
                        enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('POST'); ?>
                        <div class="col mx-auto">
                        <div class="card-body p-0">
                                <div class="input-group input-group">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Nombre</span>
                                    <input name="new_product_name" required type="text" class="form-control"
                                        aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"
                                        id="name_input" oninput="newUri()">
                                </div>
                                <div class="input-group">
                                    <span class="input-group-text">Detalle</span>
                                    <textarea name="new_product_detail" required class="form-control" aria-label="With textarea" style="height: 12px;"></textarea>
                                </div>
                                <div class="input-group">
                                    <span class="input-group-text" style="height: 37px;">Uri</span>
                                    <p class="form-control" aria-label="With textarea"
                                        style="height: 37px; background:#f0f0f0; color:rgb(107, 107, 107)" id="uri_input">
                                    </p>
                                    <input required name="new_product_uri" id="uri_input_value" value=""
                                        type="hidden">
                                </div>
                                <div>
                                    <label for="customRange2" class="form-label">Niveles</label>
                                    <input name="new_product_levels" type="number" class="form-control" aria-label="With textarea" min="1"
                                        max="3" id="customRange2">
                                </div>
                                <div class="mb-3">
                                    <h3 class="modal-title fs-6 my-2" id="exampleModalLabel">Nueva imagen:</h3>
                                    <input name="nueva_imagen_producto" required type="file"
                                        id="nueva_imagen_producto" accept="image/*">
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

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USUARIO\Desktop\UNIBLOCK\webpage\resources\views/admin/products/products.blade.php ENDPATH**/ ?>