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
        
        
        <p class="aling"></p>
        <h3>Estimado <?php echo e($data->name); ?> </h3>
        <p class="aling">Estimado socio agradecemos por su cooperación, sus datos se han registrado con éxito.</p>
        <p class="aling">Un encargado de la Comisión Electoral se comunicará con usted.</p>
        <p class="aling"></p>
        <p class="aling"><b>NOTA: Para la validación de la información registrada en el formulario de inscripción, será necesario acercarse a las instalaciones de la Cooperativa.<b></p>
        <p class="aling">COAC UNIBLOCK y Servicios Ltda.<br>Creciendo juntos hacia el futuro..!</p>
        
    </div>
<!-- partial -->
  
</body>
</html>
<?php /**PATH C:\Users\USUARIO\Desktop\UNIBLOCK\webpage\resources\views/Mail/Elecciones/elecciones.blade.php ENDPATH**/ ?>