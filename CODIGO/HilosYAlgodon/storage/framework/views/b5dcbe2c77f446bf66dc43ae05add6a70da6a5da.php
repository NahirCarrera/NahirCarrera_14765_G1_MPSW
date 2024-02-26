

<?php $__env->startSection('content'); ?>

<div class="services-product">
            <div class="services-text">
                <p>Cotizador de Inversiones</p>
                <p>Recueda que los datos mostrados son referenciales.</p>
                <p></p>
            </div>

        </div>

        <div class="com"> </div>
<table class="table">
    <tr>
        <td></td>
        <td>Ingrese el tiempo a invertir:
            <input style="width:200px" value="<?php echo e(date('Y-m-d')); ?>" class="input" type="date" onChange="datss()" id="dateini" value=""> <input style="width:200px"  class="input" type="date" onChange="datss()" id="datefin"> <input class="input" value="NaN" disabled="true" onChange="datss()" style="width:50px" type="text" id="diasimp">Días</td>
        <td width="300">Interes <input class="input"  type="text" id="imp" style="width:90px" disabled="true"> <input hidden onClick="cheenable()" type="checkbox"></td>
    </tr><br>
    <tr>
        <td></td>
        <td>
            <div class="col-xs-push-0">
                Ingrese el monto a invertir:
                <input class="input" required id="canti" type="number" onkeypress="comprueba(this)" min="100" pattern="^[0-9]+"> 
                <input class="cotiza" type="button" value="Calcular" onClick="generarTabla()">
                <a href="<?php echo e(route('solicitudInversiones')); ?>">
                    <input style="background-color: red" class="cotiza" type="button" value="Solicitar Ahora" onClick="generarTabla()">
                </a>
                <!--<input type="button" value="Imprimir" onClick="window.print()">-->
            </div>
        </td>
        <td></td>
    </tr>
 
    <tr>
        <td></td>
        <td></td>
        <td><b>Datos</b></td>
    </tr>
    <tr>
        <td></td>
        <td class="text-right">Capital:</td>
        <td><p id="cap">x</p></td>
    </tr>
    <tr>
        <td></td>
        <td class="text-right">Interes:</td>
        <td><p id="inte">x</p></td>
    </tr>
    <tr>
        <td></td>
        <td class="text-right">Retención:</td>
        <td><p id="rete">x</p></td>
    </tr>
    <tr>
        <td></td>
        <td class="text-right">Total:</td>
        <td><p id="tot" style="color: #00901E ">x</p></td>
    </tr>
</table>
<div id="klo">
</div>

<script src="<?php echo e(url('js/coInversiones.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('vista.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH X:\Project\webpage\resources\views/cotizador/inversiones.blade.php ENDPATH**/ ?>