<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title><?php echo e(config('app.name', 'Gestor de Mascotas')); ?></title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" defer></script>
    </head>
    <body>
        <div class="min-vh-100 bg-light">
            <!-- Navigation -->
            <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
                <div class="container">
                    <a class="navbar-brand" href="<?php echo e(route('dashboard')); ?>">
                        <?php echo e(config('app.name', 'Gestor de Mascotas')); ?>

                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="mainNavbar">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link <?php echo e(request()->routeIs('dashboard') ? 'active' : ''); ?>" href="<?php echo e(route('dashboard')); ?>">Inicio</a></li>
                            <li class="nav-item"><a class="nav-link <?php echo e(request()->routeIs('pets.*') ? 'active' : ''); ?>" href="<?php echo e(route('pets.index')); ?>">Mis Mascotas</a></li>
                        </ul>

                        <ul class="navbar-nav ms-auto">
                            <?php if(auth()->guard()->check()): ?>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"><?php echo e(Auth::user()->name); ?></a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="<?php echo e(route('profile.edit')); ?>">Mi Perfil</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li>
                                            <form method="POST" action="<?php echo e(route('logout')); ?>">
                                                <?php echo csrf_field(); ?>
                                                <button type="submit" class="dropdown-item">Cerrar Sesión</button>
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                            <?php else: ?>
                                <li class="nav-item"><a class="nav-link" href="<?php echo e(route('login')); ?>">Iniciar Sesión</a></li>
                                <li class="nav-item"><a class="nav-link" href="<?php echo e(route('register')); ?>">Registrarse</a></li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- Page Heading -->
            <?php if(isset($header)): ?>
                <header class="bg-white shadow">
                    <div class="container py-4">
                        <?php echo e($header); ?>

                    </div>
                </header>
            <?php endif; ?>

            <!-- Page Content -->
            <main>
                <?php echo $__env->yieldContent('content'); ?>
            </main>
        </div>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\DAW_EJERCICIOS\DWES\2eva\Crud-laravel\resources\views/layouts/app.blade.php ENDPATH**/ ?>