

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-body">
            <form action="<?php echo e(route('admin.requirements.requirement.updateRequirement', encrypt($requirement->id))); ?>"
                id="update_product_info" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <div class="text-center">
                    <h1>REQUISITO <?php echo e($requirement->id); ?></h1>
                </div>
                <div class="row">
                    <div class="input-group">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Nombre</span>
                        <input name="new_requirement_name" type="text" class="form-control"
                            aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"
                            value="<?php echo e($requirement->name); ?>" required>
                    </div>
                    <p class="card-text mt-3"><small class="text-body-secondary">Última actualización: <?php echo e($requirement->updated_at); ?></small>
                    </p>
                </div>
                <hr>
                <?php
                    $currentScope = json_decode($requirement->scope_ids, true);
                ?>
                <div class="row mx-auto">
                    <div class="text-center">
                        <h1>Alcance</h2>
                    </div>
                    <div class="col mx-auto">
                        <div class="container text-center mt-3">
                            <div class="row align-items-start">
                                <div class="col">
                                    <div class="text-center">
                                        <h3>Productos</h3>
                                    </div>
                                    <ul class="list-group text-start">
                                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li class="list-group-item list-group-item-secondary">
                                                <input name="product_<?php echo e($product->id); ?>"
                                                    value="product_<?php echo e($product->id); ?>" class="form-check-input me-1"
                                                    type="checkbox" id="product<?php echo e($product->id); ?>"
                                                    <?php if($currentScope): ?> 
                                                        <?php if(in_array($product->id, $currentScope['products'])): ?>
                                                            checked
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                >
                                                
                                                <label class="form-check-label stretched-link"
                                                    for="product<?php echo e($product->id); ?>"> <?php echo e($product->name); ?> </label>
                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>
                                <div class="col">
                                    <div class="text-center">
                                        <h3>Subproductos</h3>
                                    </div>
                                    <ul class="list-group text-start ps-2">
                                        <?php $__currentLoopData = $subproducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subproduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li class="list-group-item list-group-item-primary">
                                                <input name="subproduct_<?php echo e($subproduct->id); ?>"
                                                    value="subproduct_<?php echo e($subproduct->id); ?>" class="form-check-input me-1"
                                                    type="checkbox" id="subproduct<?php echo e($subproduct->id); ?>"
                                                    <?php if($currentScope): ?>
                                                        <?php if(in_array($subproduct->id, $currentScope['subproducts'])): ?>
                                                            checked
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                >

                                                <label class="form-check-label stretched-link"
                                                    for="subproduct<?php echo e($subproduct->id); ?>"> <?php echo e($subproduct->name); ?>

                                                </label>
                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>
                                <div class="col">
                                    <div class="text-center">
                                        <h3>Subproductos derivados</h3>
                                    </div>
                                    <ul class="list-group text-start ps-4">
                                        <?php $__currentLoopData = $subproductsDer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subproductDer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li class="list-group-item list-group-item-info">
                                                <input name="subproductDer_<?php echo e($subproductDer->id); ?>"
                                                    value="subproductDer_<?php echo e($subproductDer->id); ?>"
                                                    class="form-check-input me-1" type="checkbox"
                                                    id="subproductDer<?php echo e($subproductDer->id); ?>"
                                                    <?php if($currentScope): ?>
                                                        <?php if(in_array($subproductDer->id, $currentScope['subproductsDer'])): ?>
                                                        checked
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                >

                                                <label class="form-check-label stretched-link"
                                                    for="subproductDer<?php echo e($subproductDer->id); ?>">
                                                    <?php echo e($subproductDer->name); ?> </label>
                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>

                            </div>

                        </div>
                        <button type="submit" class="btn btn-success float-end mt-3">Guardar</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USUARIO\Desktop\UNIBLOCK\webpageModificandoVistasDeProductos\resources\views/admin/requirements/requirementData.blade.php ENDPATH**/ ?>