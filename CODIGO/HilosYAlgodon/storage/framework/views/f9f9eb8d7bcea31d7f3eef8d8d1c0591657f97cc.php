

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-body">
            <div class="text-center">
                <h1>PRODUCTOS</h1>
                <h2>Imágenes</h2>
            </div>

            <div class="border border-dark-subtle rounded mb-3">

                <h4 class="text-center mb-3">Activas</h4>

                <form action="<?php echo e(route('admin.multimedia.deleteActiveImages')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('POST'); ?>
                    <div class="exist-images_container">
                        <?php if($activeImages): ?>
                            <?php $__currentLoopData = $activeImages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="form-check exist-images_input-group p-0 m-0">
                                    <input class="form-check-input me-1 exist-images_radio"
                                        value="productsView_<?php echo e($image); ?>" type="checkbox"
                                        name="productsView_<?php echo e($image); ?>" id="flexRadioDefault<?php echo e($image); ?>">
                                    <label class="form-check-label image-card_toUpload_container"
                                        for="flexRadioDefault<?php echo e($image); ?>">
                                        <img src="<?php echo e(Storage::url($image)); ?>" class="exist-img_upload">
                                    </label>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>
                            <p>No se han encontrado imágenes</p>
                        <?php endif; ?>
                    </div>
                    <button type="button" class="float-end btn btn-sm btn-danger mt-1 me-1 mb-1" data-bs-toggle="modal"
                        data-bs-target="#deletSelectedActiveImagesModal">Eliminar</button>
                    <button type="button" class="btn btn-sm btn-outline-danger mt-1 ms-1 mb-1" data-bs-toggle="modal"
                        data-bs-target="#deletAllModal">Eliminar
                        todo</button>


                    <!-- Delete selected active images Modal -->
                    <div class="modal fade" id="deletSelectedActiveImagesModal" data-bs-backdrop="static"
                        data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">¿Está seguro de eliminar las
                                        imágenes activas seleccionadas?</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-footer">

                                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancelar</button>
                                    <button type="button" class="float-right ml-2 btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#deletSelectedActiveImagesConfirmModal">
                                        Eliminar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Delete selected active images confirm Modal -->
                    <div class="modal fade" id="deletSelectedActiveImagesConfirmModal" data-bs-backdrop="static"
                        data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5 text-danger" id="staticBackdropLabel">¿LAS IMÁGENES
                                        SELECCIONADAS NO SE PODRÁN RECUPERAR?</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="float-right ml-2 btn btn-danger">
                                        Eliminar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            

            <div class="border border-dark-subtle rounded">
                <h4 class="text-center my-3">Inactivas</h4>
                <form action="<?php echo e(route('admin.multimedia.deleteInactiveImages')); ?>" method="POST"
                    enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('POST'); ?>
                    <div class="exist-images_container">
                        <?php if($inactiveImages): ?>
                            <?php $__currentLoopData = $inactiveImages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="form-check exist-images_input-group p-0 m-0">
                                    <input class="form-check-input me-1 exist-images_radio"
                                    value="productsView_<?php echo e($image); ?>" type="checkbox"
                                    name="productsView_<?php echo e($image); ?>" 
                                        id="flexRadioDefault<?php echo e($image); ?>">
                                    <label class="form-check-label image-card_toUpload_container"
                                        for="flexRadioDefault<?php echo e($image); ?>">
                                        <img src="<?php echo e(Storage::url($image)); ?>" class="exist-img_upload">
                                    </label>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>
                            <p>No se han encontrado imágenes</p>
                        <?php endif; ?>
                    </div>
                    <button type="button" class="float-end btn btn-sm btn-danger mt-3 mb-1 me-1" data-bs-toggle="modal"
                        data-bs-target="#deleteSelectedInactiveImagesModal">Eliminar</button>
                    <button type="button" class="btn btn-sm btn-outline-danger mt-3 mb-1 ms-1" data-bs-toggle="modal"
                        data-bs-target="#deletAllInactiveImagesModal">Eliminar
                        todo</button>


                    <!-- Delete selected inactive images Modal -->
                    <div class="modal fade" id="deleteSelectedInactiveImagesModal" data-bs-backdrop="static"
                        data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">¿Está seguro de eliminar las
                                        imágenes inactivas seleccionadas?</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-footer">

                                    <button type="button" class="btn btn-primary"
                                        data-bs-dismiss="modal">Cancelar</button>
                                    <button type="button" class="float-right ml-2 btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#deletSelectedInactiveImagesConfirmModal">
                                        Eliminar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Delete selected active images confirm Modal -->
                    <div class="modal fade" id="deletSelectedInactiveImagesConfirmModal" data-bs-backdrop="static"
                        data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5 text-danger" id="staticBackdropLabel">¿LAS IMÁGENES
                                        SELECCIONADAS NO SE PODRÁN RECUPERAR?</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary"
                                        data-bs-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="float-right ml-2 btn btn-danger">
                                        Eliminar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Delete all active images Modal -->
    <div class="modal fade" id="deletAllModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 text-danger" id="staticBackdropLabel">¿Está seguro de eliminar TODAS LAS
                        IMÁGENES
                        ACTIVAS?</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="text-danger fw-bold">Las imágenes no podrán ser recuperadas</p>
                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="float-right ml-2 btn btn-danger" data-bs-toggle="modal"
                        data-bs-target="#deleteAllConfirmModal">
                        Eliminar
                    </button>

                </div>
            </div>
        </div>
    </div>

    <!-- Delete all active images CONFIRM Modal -->
    <div class="modal fade" id="deleteAllConfirmModal" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 fw-bold text-danger" id="staticBackdropLabel">¿Está completamente seguro?
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-footer">
                    <form action="<?php echo e(route('admin.multimedia.deleteAllActiveImages', encrypt($activeImages))); ?>"
                        method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <input type="hidden" name="type" value="productsView">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Mejor no</button>
                        <button type="submit" class="float-right ml-2 btn btn-danger" data-bs-toggle="modal"
                            data-bs-target="#deleteAllConfirmModal">
                            Si
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <!-- Delete all inactive images Modal -->
    <div class="modal fade" id="deletAllInactiveImagesModal" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 text-danger" id="staticBackdropLabel">¿Está seguro de eliminar TODAS LAS
                        IMÁGENES
                        INACTIVAS?</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="text-danger fw-bold">Las imágenes no podrán ser recuperadas</p>
                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="float-right ml-2 btn btn-danger" data-bs-toggle="modal"
                        data-bs-target="#deleteAllInactiveImagesConfirmModal">
                        Eliminar
                    </button>

                </div>
            </div>
        </div>
    </div>

    <!-- Delete all inactive images CONFIRM Modal -->
    <div class="modal fade" id="deleteAllInactiveImagesConfirmModal" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 fw-bold text-danger" id="staticBackdropLabel">¿Está completamente seguro?
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-footer">
                    <form action="<?php echo e(route('admin.multimedia.deleteAllInactiveImages', encrypt($inactiveImages))); ?>"
                        method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <input type="hidden" name="type" value="productsView">
                        
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Mejor no</button>
                        <button type="submit" class="float-right ml-2 btn btn-danger" data-bs-toggle="modal"
                            data-bs-target="#deleteAllConfirmModal">
                            Si
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USUARIO\Desktop\UNIBLOCK\webpage\resources\views/admin/multimedia/productMultimedia.blade.php ENDPATH**/ ?>