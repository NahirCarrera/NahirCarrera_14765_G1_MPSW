<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>
        Admin
    </title>
    <link rel="shortcut icon" href="https://logodix.com/logo/1707088.png">
    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- CSS Files -->
    <link href="<?php echo e(url('css/adminPanel.css')); ?>" rel="stylesheet" />

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <link rel="stylesheet" href="//cdn.datatables.net/2.0.0/css/dataTables.dataTables.min.css">
</head>

<body class="">
    <div class="wrapper">
        <div id="sidebar_container" class="sidebar_container">
            <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px;" id="sidebar">
                <a href="<?php echo e(route('admin.principal')); ?>"
                    class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none text-center">

                    <span class="fs-4">Entre Hilos y Algodón</span>
                </a>
                <hr>
                <ul class="list-group nav nav-pills flex-column mb-auto list-unstyled ps-0">


                    <?php if(Auth::user()->rolValidation(['Admin', 'Materiales'])): ?>
                        <li class="nav-item list-group nav-link-item">
                            <a href="<?php echo e(route('admin.materiales.')); ?>" class="nav-link text-white">
                                <i class="bi bi-backpack3-fill"></i>
                                Materiales
                            </a>
                        </li>
                    <?php endif; ?>

                    <?php if(Auth::user()->rolValidation(['Admin', 'Productos'])): ?>
                        <li class="nav-item list-group nav-link-item">
                            <a href="<?php echo e(route('admin.productos.')); ?>" class="nav-link text-white">
                                <i class="bi bi-archive"></i>
                                Productos
                            </a>
                        </li>
                    <?php endif; ?>

                    <?php if(Auth::user()->rolValidation(['Admin', 'Agenda'])): ?>
                        <li class="nav-item list-group nav-link-item">
                            <a href="<?php echo e(route('admin.agenda.')); ?>" class="nav-link text-white">
                                <i class="bi bi-calendar-week me-2"></i>Agenda
                            </a>
                        </li>
                    <?php endif; ?>

                    <?php if(Auth::user()->rolValidation(['Admin', 'Reportes'])): ?>
                        <li class="nav-item list-group nav-link-item">
                            <a href="<?php echo e(route('admin.reportes.')); ?>" class="nav-link text-white">
                                <i class="bi bi-card-list me-2"></i>Reportes
                            </a>
                        </li>
                    <?php endif; ?>

                    <?php if(Auth::user()->rolValidation(['Admin'])): ?>
                        <hr class="my-2">
                        <p class="m-0">Usuarios</p>
                        <hr class="my-2">

                        <li class="nav-item list-group nav-link-item">
                            <a href="<?php echo e(route('admin.users.index')); ?>" class="nav-link text-white">
                                <i class="bi bi-people-fill me-2"></i>
                                Usuarios
                            </a>
                        </li>
                        <li class="nav-item list-group nav-link-item">
                            <a href="<?php echo e(route('admin.roles.roles')); ?>" class="nav-link text-white">
                                <i class="bi bi-person-lines-fill me-2"></i>Roles
                            </a>
                        </li>
                    <?php endif; ?>

                    <?php if (is_impersonating($guard = null)) : ?>
                        <li class="nav-item list-group btn btn-sm btn-primary p-0 mt-3">
                            <a href="<?php echo e(route('admin.impersonate.leave')); ?>" class="nav-link text-white"><i
                                    class="bi bi-slash-circle me-2"></i>Salir Impersonate</a>
                        </li>
                    <?php endif; ?>
                </ul>
                <hr>

                <div class="dropdown">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                        id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        
                        <strong><?php echo e(Auth::user()->name); ?></strong>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                        <li><a class="dropdown-item"
                                href="<?php echo e(Route('admin.users.show', encrypt(Auth::id()))); ?>">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                <?php echo e(__('Logout')); ?>

                            </a>
                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                <?php echo csrf_field(); ?>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Page Content  -->
        <div id="content">
            <button id="button_sideBar" class="button_sideBar" onclick="showAdminSidebar()"><i class="bi bi-list"
                    style="font-size:2rem"></i></button>
            <button id="button_close_sideBar" class="button_close_sideBar" onclick="closeAdminSidebar()"><i
                    class="bi bi-x-lg" style="font-size:2rem"></i></button>
            <div id="overlay" class="overlay"></div>
            <div class="container-fluid pt-3">

                <?php if($errors->any()): ?>
                    <div class="alert alert-danger">
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <?php echo $__env->make('partials.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <?php echo $__env->yieldContent('content'); ?>

            </div>
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="<?php echo e(url('js/style.js')); ?>"></script>
<script src="//cdn.datatables.net/2.0.0/js/dataTables.min.js"></script>
<script>
    let tableProductos = new DataTable('#productos');
    let tableMateriales = new DataTable('#materiales');
    let tableAsignarMateriales = new DataTable('#asignarMateriales');
</script>

</html>
<?php /**PATH C:\Users\crist\Desktop\Uni\HostProyectos\PROCESOS\NahirCarrera_14765_G1_MPSW\CODIGO\HilosYAlgodon\resources\views/admin/layout.blade.php ENDPATH**/ ?>