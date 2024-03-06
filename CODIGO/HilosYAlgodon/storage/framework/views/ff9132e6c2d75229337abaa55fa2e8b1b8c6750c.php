

<?php $__env->startSection('content'); ?>
    <div class="card mb-3" id="formReport">
        <div class="card-body overflow-x-auto">
            <h1>REPORTES</h1>

            <div class="card">
                <div class="card-body">
                    <form action="<?php echo e(route('admin.reportes.generarReporte')); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('POST'); ?>
                        <div class="modal-body">
                            <label for="reporte_materiales"
                                class="form-check form-switch my-3 mx-auto rounded border border-primary px-2 py-1 list-group-item list-group-item-action list-group-item-primary"
                                style="width:25%;height:35px;min-width:200px;">
                                <input name="reporte_materiales" id="reporte_materiales"
                                    class="form-check-input float-end <?php $__errorArgs = ['reporte_materiales'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    type="checkbox" role="switch">
                                <label class="form-check-label float-start" for="reporte_materiales">Materiales</label>
                                <?php $__errorArgs = ['reporte_materiales'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </label>
                            <label for="reporte_inventario"
                                class="form-check form-switch my-3 mx-auto rounded border border-primary px-2 py-1 list-group-item list-group-item-action list-group-item-primary"
                                style="width:25%;height:35px;min-width:200px;">
                                <input name="reporte_inventario" id="reporte_inventario"
                                    class="form-check-input float-end <?php $__errorArgs = ['reporte_inventario'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    type="checkbox" role="switch">
                                <label class="form-check-label float-start" for="reporte_inventario">Inventario</label>
                                <?php $__errorArgs = ['reporte_inventario'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </label>
                            <label for="reporte_agenda"
                                class="form-check form-switch my-3 mx-auto rounded border border-primary px-2 py-1 list-group-item list-group-item-action list-group-item-primary"
                                style="width:25%;height:35px;min-width:200px;">
                                <input name="reporte_agenda" id="reporte_agenda"
                                    class="form-check-input float-end <?php $__errorArgs = ['reporte_agenda'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    type="checkbox" role="switch">
                                <label class="form-check-label float-start" for="reporte_agenda">Agenda</label>
                                <?php $__errorArgs = ['reporte_agenda'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </label>

                            <div class="form-floating mb-3" style="width:25%;min-width:200px;margin:0 auto;">
                                <select disabled class="form-select" id="estado_ordenes" name="estado_ordenes"
                                    aria-label="Floating label select example">
                                    <option value="" selected>--Seleccione--</option>
                                    <option value="todas">Todas</option>
                                    <option value="entregadas">Entregadas</option>
                                    <option value="pendientes">Pendientes</option>
                                </select>
                                <label for="estado_ordenes">Estado de las Órdenes</label>
                            </div>

                            <div class="input-group mb-3">
                                <div class="form-floating">
                                    <input id="fechaInicio" type="date"
                                        class="form-control <?php $__errorArgs = ['fechaInicio'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="fechaInicio"
                                        value="<?php echo e(old('fechaInicio')); ?>" autocomplete="fechaInicio"
                                        placeholder="Insertar el costo">
                                    <label for="fechaInicio">Fecha de Inicio</label>
                                </div>

                                <?php $__errorArgs = ['fechaInicio'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="input-group mb-3">
                                <div class="form-floating">
                                    <input id="fechaFin" type="date"
                                        class="form-control <?php $__errorArgs = ['fechaFin'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="fechaFin"
                                        value="<?php echo e(old('fechaFin')); ?>" autocomplete="fechaFin"
                                        placeholder="Insertar el costo">
                                    <label for="fechaFin">Fecha Final</label>
                                </div>

                                <?php $__errorArgs = ['fechaFin'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>



        </div>

    </div>
    <?php if(
        $datosMateriales == '' &&
            $datosProductos == '' &&
            $datosAgenda == '' &&
            $datosMateriales == null &&
            $datosProductos == null &&
            $datosAgenda == null): ?>
        <h2>No hay datos para mostrar</h2>
    <?php else: ?>
        <?php if($fechaInicio && $fechaFin && $actualDate): ?>
            <h1>Reporte</h1>
            <input type="button" value="Imprimir" id="printbutton" class="btn btn-success float-end">
            <div class="d-flex">
                <p class="my-0 me-5 fs-6">Desde la fecha: <?php echo e($fechaInicio); ?></p>
                <p class="m-0 fs-6">Hasta la fecha: <?php echo e($fechaFin); ?></p>
            </div>

            <p class="m-0 fs-6">Generado el: <?php echo e($actualDate); ?></p>
        <?php endif; ?>
    <?php endif; ?>

    <?php if($datosMateriales != '' && $datosMateriales != null): ?>
        <h2>Materiales</h2>
        <table class="table table-bordered" id="materialesReport">
            <thead>
                <tr class="bg-primary text-light">
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Unidad de medida</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Costo Total</th>
                    <th scope="col">Costo/Ud medida</th>
                </tr>
            </thead>
            <tbody>

                <?php $__currentLoopData = $datosMateriales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $material): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($material->id); ?></td>
                        <td><?php echo e($material->nombre); ?></td>
                        <td><?php echo e($material->ud_medida); ?></td>
                        <td><?php echo e($material->cantidad); ?></td>
                        <td><?php echo e($material->costo_total); ?></td>
                        <td><?php echo e($material->costo_ud_medida); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    <?php endif; ?>

    <?php if($datosProductos != '' && $datosProductos != null): ?>
        <h2>Inventario de Productos</h2>
        <table class="table table-bordered" id="productosReport">
            <thead>
                <tr class="bg-primary text-light">
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descipcion</th>
                    <th scope="col">Costo Unitario</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Horas de Trabajo</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $datosProductos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($producto->id); ?></td>
                        <td><?php echo e($producto->nombre); ?></td>
                        <td><?php echo e($producto->descripcion); ?></td>
                        <td><?php echo e($producto->costo_unitario); ?></td>
                        <td><?php echo e($producto->cantidad); ?></td>
                        <td><?php echo e($producto->horas_trabajo); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    <?php endif; ?>

    <?php if($datosAgenda != '' && $datosAgenda != null): ?>
        <h2>Agenda</h2>
        <table class="table table-bordered" id="agendaReport">
            <thead>
                <tr class="bg-primary text-light">
                    <th scope="col">Id</th>
                    <th scope="col">Cliente</th>
                    <th scope="col">Descipcion</th>
                    <th scope="col">Fecha de Entrega</th>
                    <th scope="col">Dirección</th>
                    <th scope="col">Estado</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $datosAgenda; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $orden): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($orden->id); ?></td>
                        <td><?php echo e($orden->nombre_cliente); ?></td>
                        <td><?php echo e($orden->descripcion); ?></td>
                        <td><?php echo e($orden->fecha_entrega); ?></td>
                        <td><?php echo e($orden->direccion); ?></td>
                        <td style="text-align: center">
                            <?php if($orden->entregado == 0): ?>
                                <span class="badge bg-success">Entregado</span>
                            <?php else: ?>
                                <span class="badge bg-secondary">Pendiente</span>
                            <?php endif; ?>
                        </td>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    <?php endif; ?>

    <script>
        document.getElementById('reporte_agenda').addEventListener('change', function() {
            if (this.checked) {
                document.getElementById('estado_ordenes').disabled = false;
            } else {
                document.getElementById('estado_ordenes').disabled = true;
            }
        });
        document.querySelectorAll('#printbutton').forEach(function(element) {
            element.addEventListener('click', function() {
                print();
            });
        });
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\NahirCarrera_14765_G1_MPSW\CODIGO\HilosYAlgodon\resources\views/admin/reportes/index.blade.php ENDPATH**/ ?>