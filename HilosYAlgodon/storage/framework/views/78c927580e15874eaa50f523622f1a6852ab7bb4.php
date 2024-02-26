<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>AGRADECIMIENTO</title>
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
        <h2>Solicitud de información de <?php echo e($data->title); ?><br>Generada correctamente</h2>
        <h3>Estimado <?php echo e($data->nombre); ?> </h3>
        <p class="aling">Nuestra institución trabaja día a día para ofrecerles nuestro mejor servicio.</p>
        <p class="aling">Nos esforzamos por lograr la calidad que busca y es una gran motivación contar con la aprobación de nuestros asociados.</p>
        <p class="aling">Esperamos seguir disfrutando de su visita en un futuro para podérselo demostrar. Muchas gracias por su confianza.</p>
        <p class="aling">¡Gracias por utilizar nuestros servicios!</p>
        <p class="aling"></p>
        <p class="aling"><b>COAC UNIBLOCK y Servicios Ltda.<br>Creciendo juntos hacia el futuro..!<b></p>
        

    </div>
<!-- partial -->
  
</body>
</html>
<?php /**PATH X:\Project\webpage\resources\views/Mail/agradecimiento.blade.php ENDPATH**/ ?>