

<?php $__env->startSection('content'); ?>
    

    <div class="section" style="text-aling:left">

    <div class="services-product">
            <div class="services-text">
                <p>Cotizador Créditos</p>
                <p>Recueda que los datos mostrados son referenciales.</p>
                <p></p>
            </div>

        </div>

        <div class="com"> </div>
        <table class="table">
            
            <tr>
                <td></td>
                <td>¿En que va a invertir?
                    <select class="input" onChange="impuesto()"  id="comb">
                        <option  value="volvo">Gastos personales y/o familiares</option>
                        <option  value="volvo">Compra de bienes personales</option>
                        <option  value="saab">Capital de trabajo</option> <!-- 20 -->
                        <option  value="saab">Ampliación del negocio.</option> <!-- 20 -->
                        <option  value="saab">Adecuación de trabajo.</option> <!-- 20 -->
                        <option  value="saab">Adquisición de activos fijos de negocio.</option> <!-- 20 -->
                        <option  value="saab">Emergencias financieras.</option> <!-- 20 -->
                        <option  value="saab">Reactivación de tu negocio</option> <!-- 20 -->
                        <option  value="saab">Otro referente a tu negocio</option> <!-- 20 -->
                    </select>
                </td>
                <td><input hidden class="input" type="text" value="18" id="imp" style="width:50px" disabled="true"> <input hidden onClick="cheenable()" type="checkbox"></td>

            </tr>
            <tr>
                <td></td>
                <td>Ingrese el monto: <input placeholder="1000.00" required class="input" onChange="monin()" id="canti" type="number" onkeypress="comprueba(this)" min="100" pattern="^[0-9]+"></td>
                <td id="ti"> </td>
            </tr>
            <tr>
                <td></td>
                <td>Tiempo del prestamo: <input placeholder="En meses" id="time" class="input" min="1" type="number" onkeypress="comprueba(this)" min="1" pattern="^[0-9]+" required></td>
                <td>Total a pagar: <p id="tpa" style="color: #FF0004"></p></td>
            </tr>
            <tr>
                <td></td>
                <td><input class="down-cv" type="button"  value="Calcular" onClick="generarTabla()" >		
                <!--<input class="cotiza" type="button" value="Imprimir" onClick="window.print()"></td> -->
            </tr>
        </table>
	</div>
	
	
	
	<div id="klo">
	
	</div>
    <script src="<?php echo e(url('js/coCreditos.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('vista.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH X:\Project\webpage\resources\views/cotizador/credito.blade.php ENDPATH**/ ?>