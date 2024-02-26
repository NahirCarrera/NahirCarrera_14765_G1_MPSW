<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CONFIRMACION</title>
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
        .aling{
           text-align: justify;
        }
        h2{
            color: #10255d;
            font-size: 18px;
        }
        p{
            color: #10255d;
            font-size: 14px;
        }
    </style>
</head>
<body>
<!-- partial:index.partial.html -->
<div id="container">
        <img src="<?php echo e(url('images/logo.png')); ?>" width="200px" alt="logo uniblock">

        <h2>NUEVO REGISTRO</h2>
        
        <h3>Nombre: <?php echo e($data->name); ?> </h3>
        <p><b>Cédula:</b> <?php echo e($data->nCedula); ?> </p>
        <p><b>Tel. Celular:</b> <?php echo e($data->nCelular); ?> </p>
        <p><b>Direccion:</b> <?php echo e($data->direccion); ?> </p>
        <p><b>Correo:</b> <?php echo e($data->correo); ?> </p>
        <p><b>Autoriza:</b> <?php if($data->autorizacion): ?> Si <?php else: ?> No <?php endif; ?></p>
        <h3>FV#<?php echo e(str_pad($data->id, 3, "0", STR_PAD_LEFT)); ?></h3>

    </div>
<!-- partial -->
  
</body>
</html>
<?php /**PATH C:\Users\USUARIO\Desktop\UNIBLOCK\webpage\resources\views/Mail/Elecciones/newRegistro.blade.php ENDPATH**/ ?>