<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>SOLICITUD</title>
    <style>
        #container {
            width: 50%;
            height: auto;
            background: #fff;
            border: 1px solid #a2a2a2;
            margin: 77px auto 40px;
            padding: 30px;
            color: #3f3f3f;
            -webkit-box-shadow: 0 0 3px 0 rgba(50,50,50,0.75);
            -moz-box-shadow: 0 0 3px 0 rgba(50,50,50,0.75);
            box-shadow: 0 0 3px 0 rgba(50,50,50,0.75);
        }
    </style>
</head>
<body>
<!-- partial:index.partial.html -->
<div id="container">
        <h2>Solicitud de información de <?php echo e($data->title); ?></h2>
        
        <h3>Nombre: <?php echo e($data->nombre); ?> </h3>
        <p><b>Cédula:</b> <?php echo e($data->cedula); ?> </p>
        <p><b>Tel. Celular:</b> <?php echo e($data->celular); ?> </p>
        <p><b>Tel. Convencional:</b> <?php echo e($data->convencional); ?> </p>
        <p><b>Correo:</b> <?php echo e($data->correo); ?> </p>
        <?php if($data->title === 'Creditos'): ?>
            <p><b>Ciudad:</b> <?php echo e($data->ciudad); ?> </p>
            <p><b>Monto Solicitado:</b> <?php echo e($data->monto); ?> </p>
            <p><b>Lo va a invertir en:</b> <?php echo e($data->necesidad); ?> </p>
            <p><b>Ingresos:</b> <?php echo e($data->ingresos); ?> </p>
            <p><b>Gastos:</b> <?php echo e($data->gastos); ?> </p>
            <p><b>Cuanto podría pagar:</b> <?php echo e($data->puedepagar); ?> </p>
            <p><b>Plazo:</b> <?php echo e($data->plazo); ?> </p>
            <p><b>Autoriza:</b> <?php if($data->autoriza == true): ?> SI <?php else: ?> NO  <?php endif; ?>  </p>
        <?php endif; ?>
        <p><b>Mensaje:</b> <?php echo e($data->mensaje); ?> </p>
    </div>
<!-- partial -->
  
</body>
</html>
<?php /**PATH C:\Users\USUARIO\Desktop\UNIBLOCK\webpage\resources\views/Mail/solicitud.blade.php ENDPATH**/ ?>