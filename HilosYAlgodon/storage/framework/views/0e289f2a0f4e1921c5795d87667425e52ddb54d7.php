

<?php $__env->startSection('content'); ?>
    

    <div class="section" style="text-aling:left">
<div class="com"> </div>
    <div class="services-product">
            <div class="services-text">
                <p>Cotizador Ahorro Programado</p>
                <p>Recueda que los datos mostrados son referenciales.</p>
                <p></p>
            </div>

        </div>

        <div class="come"> </div>
        <table class="table">
            
            <tr>
                <td></td>
                <td>Ingrese el monto de ahorro: <input placeholder="1000.00" required class="input"  id="canti" type="number" onkeypress="comprueba(this)" min="100" pattern="^[0-9]+"></td>
                <td id="ti"> </td>
            </tr>
            <tr>
                <td></td>
                <td>Tiempo de ahorro: <input placeholder="En meses" id="time" class="input" min="3" type="number" onkeypress="comprueba(this)" min="1" pattern="^[0-9]+" required></td>
                <td style="color:#ffff">Tiempo de ahorro: <p id="tpa" style="color: #FF0004"></p></td>
            </tr>
            <tr>
                <td></td>
                <td><input class="down-cv" type="button"  value="Calcular" onClick="generarTabla()" >
                <a href="<?php echo e(route('solicitudAhorros')); ?>">
                    <input style="background-color: red" class="cotiza" type="button" value="Solicitar Ahora" onClick="generarTabla()">
                </a>		
                <!--<input class="cotiza" type="button" value="Imprimir" onClick="window.print()"></td> -->
            </tr>
            <tr>
        <td></td>
        <td></td>
        <td><b>Datos</b></td>
    </tr>
    <tr>
        <td></td>
        <td class="text-right">Capital ahorrado:</td>
        <td><p id="cap">x</p></td>
    </tr>
    <tr>
        <td></td>
        <td class="text-right">Meses:</td>
        <td><p id="meses">x</p></td>
    </tr>
    <tr>
        <td></td>
        <td class="text-right">Interes Generado:</td>
        <td><p id="inte">x</p></td>
    </tr>
    <tr>
        <td></td>
        <td class="text-right">Bono de cumplimiento:</td>
        <td><p id="rete">x</p></td>
    </tr>
    <tr>
        <td></td>
        <td class="text-right">Interes + Bono:</td>
        <td><p id="sumabono">x</p></td>
    </tr>
    <tr>
        <td></td>
        <td class="text-right">Total a recibir:</td>
        <td><p id="tot" style="color: #00901E ">x</p></td>
    </tr>
        </table>
	</div>
	
	
	
	<div id="klo">
	
	</div>
    <script src="<?php echo e(url('js/coAhorroPro.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('vista.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USUARIO\Desktop\UNIBLOCK\webpage\resources\views/cotizador/AhorroPro.blade.php ENDPATH**/ ?>