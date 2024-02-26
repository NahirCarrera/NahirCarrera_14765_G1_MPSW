<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>Admin</title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
</head>

<body>
    <div id="app">

        <nav class="navbar bg-primary navbar-expand-lg" data-bs-theme="dark">
            <div class="container-fluid">
                <?php if(auth()->guard()->guest()): ?>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                        aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarText">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page"
                                    href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                            </li>
                            
                        </ul>
                    </div>
                <?php else: ?>
                    <a id="navbarDropdown" class="nav-link text-light fw-bold" href="#" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="true" v-pre>
                        <?php echo e(Auth::user()->name); ?>

                    </a>
                    <div class="btn btn-info">
                        <a class="nav-link text-dark" href="<?php echo e(route('logout')); ?>"
                            onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                            <?php echo e(__('Logout')); ?>

                        </a>
                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                        </form>
                    </div>
                <?php endif; ?>
            </div>
        </nav>

        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>
<?php /**PATH C:\Users\crist\Desktop\Uni\HostProyectos\PROCESOS\HilosYAlgodon\resources\views/layouts/app.blade.php ENDPATH**/ ?>