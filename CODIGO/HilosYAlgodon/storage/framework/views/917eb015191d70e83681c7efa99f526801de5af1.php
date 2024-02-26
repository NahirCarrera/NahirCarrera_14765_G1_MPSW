  <!DOCTYPE html>
  <html lang="es">

  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>UNIBLOCK</title>
      <link rel="stylesheet" type="text/css" href="<?php echo e(url('css/style.css')); ?>">
      <link rel="stylesheet" type="text/css" href="<?php echo e(url('css/LineIcons.css')); ?>">
      <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css'>
      <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css'>
      <link rel="stylesheet" href="<?php echo e(url('css/carousel.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(url('css/card.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(url('css/blog-card.css')); ?>">


  </head>

  <body>
     <!-- <div id="loader">
          <div id="loading-animation">
              <div class="spinner">>
                  <div class="center_circle">
                      <img src="<?php echo e(url('images/logo.png')); ?>" alt="">
                  </div>
              </div>
          </div>
      </div>-->
      <nav>
          <div class="logo"><img src="<?php echo e(url('images/logo.png')); ?>" alt=""></div>
          <ul>
              <li><a href="<?php echo e(route('inicio')); ?>">Inicio</a></li>
              <li><a href="/#servicios">Servicios</a></li>
              <li><a href="<?php echo e(route('about','coac-uniblock')); ?>">Institución</a></li>
              <li><a href="<?php echo e(route('contactanos')); ?>">Contáctanos</a></li>
              <li><a href=""><button class="down-cv">UNIBLOCK WEB</button></a></li>
          </ul>
          <div class="toggle">
          </div>
      </nav>

      <?php echo $__env->yieldContent('content'); ?>
      <?php echo $__env->make('alerts.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <footer>
          <p><?php echo e($insti->name); ?></p>
          <p><?php echo e($insti->eslogan); ?></p>
          <a href="https://cutt.ly/HkKTm5h" target="_blank"><label>Av. Simón Rodriguez y Uruguay, San Felipe, Latacunga,
                  Ecuador. Tel: 032252634</label></a>
          <div class="social-icons">
              <a href="https://www.facebook.com/CooperativaUniblock" target="_blank"><i
                      class="lni lni-facebook-filled"></i></a>
              <a href="https://www.instagram.com/coacuniblockyserviciosltda/" target="_blank"><i
                      class="lni lni-instagram-original"></i></a>
              <a href="https://twitter.com/CoacUniblock" target="_blank"><i class="lni lni-twitter-filled"></i></a>
              <!--<a href="" target="_blank"><i class="lni lni-youtube"></i></a>-->
              <a href="https://n9.cl/elgb" target="_blank"><i class="lni lni-whatsapp"></i></a>
              <a href="https://n9.cl/elgb" target="_blank"><i class="lni lni-phone"></i></a>
          </div>
          <p class="copyright">Copyright COAC UNIBLOCK y Servicios Ltda. <?php echo e(date('Y')); ?></p>
      </footer>
      <div class="a-social-b">
          <a href="https://www.facebook.com/CooperativaUniblock" target="_blank"><i
                  class="lni lni-facebook-filled"></i></a>
          <a href="https://www.instagram.com/coacuniblockyserviciosltda/" target="_blank"><i
                  class="lni lni-instagram-original"></i></a>
          <a href="https://twitter.com/CoacUniblock" target="_blank"><i class="lni lni-twitter-filled"></i></a>
          <!--<a href="" target="_blank"><i class="lni lni-youtube"></i></a>-->
          <a href="https://n9.cl/elgb" target="_blank"><i class="lni lni-whatsapp"></i></a>
          <a href="https://n9.cl/elgb" target="_blank"><i class="lni lni-phone"></i></a>
      </div>
  </body>
  <script type="text/javascript" src="<?php echo e(url('js/jquery-3.5.1.min.js')); ?>"></script>
  <script type="text/javascript" src="<?php echo e(url('js/style.js')); ?>"></script>
  <script type="text/javascript" src="<?php echo e(url('js/slick.min.js')); ?>"></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js'></script>
  <script src="<?php echo e(url('js/carousel.js')); ?>"></script>

  <script type="text/javascript">
$(document).ready(function() {
    $('.toggle').click(function() {
        $('.toggle').toggleClass('active')
        $('nav').toggleClass('active')
    });
})
  </script>

  </html><?php /**PATH X:\Project\webpage\resources\views/vista/index.blade.php ENDPATH**/ ?>