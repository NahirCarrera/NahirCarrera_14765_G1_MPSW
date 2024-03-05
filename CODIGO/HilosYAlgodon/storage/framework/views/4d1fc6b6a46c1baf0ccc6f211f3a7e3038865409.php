

<?php $__env->startSection('content'); ?>
    <div>
        <h1>Entre Hilos & Algodon</h1>
    </div>
    <div class="card">
        <div class="card-body">
            <?php if($productosBajos && $productosBajos->isEmpty() && !$ordenesProntasAEntregar): ?>
                <div class="alert alert-success" role="alert">
                    <h5>Todo en orden</h5>
                    <p>El inventario se encuentra en buen estado Y no tiene entregas pendientes!</p>
                </div>
            <?php endif; ?>

            <?php if($productosBajos && !$productosBajos->isEmpty()): ?>
                <div class="alert alert-danger" role="alert">
                    <h5>Inventario</h5>
                    <p>Atención! Los siguientes productos se encuentran bajos de stock:</p>
                    <table class="table-danger">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Producto</th>
                                <th>Cantidad</th>
                            </tr>
                        </thead>
                        <?php $__currentLoopData = $productosBajos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tbody>
                                <tr>
                                    <td><?php echo e($productos->id); ?></td>
                                    <td>
                                        <?php echo e($productos->nombre); ?>

                                    </td>
                                    <td>
                                        <?php echo e($productos->cantidad); ?>

                                    </td>
                                </tr>
                            </tbody>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
                </div>
            <?php endif; ?>

            <?php if($ordenesRetrasadas && !$ordenesRetrasadas->isEmpty()): ?>
                <div class="alert alert-danger" role="alert">
                    <h5>Entregas</h5>
                    <p>Atención! Las siguientes entregas se encuentran RETRASADAS:</p>

                    <table class="table-danger">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Cliente</th>
                                <th>Descripcion</th>
                                <th>Fecha de Entrega</th>
                                <th>Días de retraso</th>
                            </tr>
                        </thead>
                        <?php $__currentLoopData = $ordenesRetrasadas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $orden): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tbody>
                                <tr>
                                    <td>
                                        <?php echo e($orden->id); ?>

                                    </td>
                                    <td>
                                        <?php echo e($orden->nombre_cliente); ?>

                                    </td>
                                    <td>
                                        <?php echo e($orden->descripcion); ?>

                                    </td>
                                    <td>
                                        <?php echo e($orden->fecha_entrega); ?>

                                    </td>
                                    <td>
                                        <?php echo e(\Carbon\Carbon::parse($orden->fecha_entrega)->diffInDays(now())); ?>

                                    </td>
                                </tr>
                            </tbody>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
                </div>
            <?php endif; ?>


            <?php if($ordenesProntasAEntregar && !$ordenesProntasAEntregar->isEmpty()): ?>
                <div class="alert alert-warning" role="alert">
                    <h5>Entregas</h5>
                    <p>Atención! Las siguientes entregas se encuentran pendientes:</p>

                    <table class="table-warning">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Cliente</th>
                                <th>Descripcion</th>
                                <th>Fecha de Entrega</th>
                                <th>Días restantes</th>
                            </tr>
                        </thead>
                        <?php $__currentLoopData = $ordenesProntasAEntregar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $orden): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tbody>

                                <tr>
                                    <td>
                                        <?php echo e($orden->id); ?>

                                    </td>
                                    <td>
                                        <?php echo e($orden->nombre_cliente); ?>

                                    </td>
                                    <td>
                                        <?php echo e($orden->descripcion); ?>

                                    </td>
                                    <td>
                                        <?php echo e(\Carbon\Carbon::parse($orden->fecha_entrega)->format('Y-m-d')); ?>

                                    </td>
                                    <td>
                                        <?php echo e(\Carbon\Carbon::parse($orden->fecha_entrega)->diffInDays(now()->subDay())); ?>

                                    </td>
                                </tr>

                            </tbody>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
                </div>
            <?php endif; ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\NahirCarrera_14765_G1_MPSW\CODIGO\HilosYAlgodon\resources\views/admin/adminPrincipal.blade.php ENDPATH**/ ?>