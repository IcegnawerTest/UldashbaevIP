<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">

	<link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="/css/admin.css">
    <title><?php echo $__env->yieldContent('title'); ?></title>

    <style>
        .DescriptionMain .title { font-size: 2rem; }
        @media screen and (max-width: 1024px) {
        .DescriptionMain .title { font-size: 2.2rem; }
        }
        @media screen and (max-width: 1100px) {
        .DescriptionMain .title { font-size: 1rem; }
        .title-description .title-desc-one, .title-description .title-desc-two {
        font-size: 0.5rem;
        }
        .title-description .title-desc-one h2, .title-description .title-desc-two h2 {
        font-size: 1rem;
        }
        }
        @media screen and (max-width: 648px) {
        .DescriptionMain .title { font-size: 0.5rem; }
        .title-description .title-desc-one h2, .title-description .title-desc-two h2 {
        font-size: 0.8rem;
        }
        }
       </style>
</head>

<body>
    <div class="header">
        <div class="icon">
            <img src="/image/BakeryIcon.png" alt="Иконка">
        </div>
        <nav>
            <a class="nav-link" href="<?php echo e(Route('index')); ?>">
                Главная
            </a>
            <a class="nav-link" href="<?php echo e(Route('products')); ?>">
                Товары
            </a>
            <?php if(auth()->guard()->check()): ?>
            <?php if(auth()->user()->role === 'admin'): ?>
            <a class="nav-link" href="<?php echo e(Route('admin.products')); ?>">
                Мои товары
            </a>
            <a class="nav-link" href="<?php echo e(Route('admin.applications')); ?>">
                Заказы
            </a>
            <?php endif; ?>
            <?php if(auth()->user()->role === 'client'): ?>
            <a class="nav-link" href="<?php echo e(Route('cart.index')); ?>">
                Корзина
            </a>
            <?php endif; ?>
            <?php endif; ?>
            <?php echo csrf_field(); ?>

            <?php if(auth()->guard()->guest()): ?>
                            <?php if(Route::has('login')): ?>
                                    <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Вход')); ?></a>
                            <?php endif; ?>

                            <?php if(Route::has('register')): ?>
                                    <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Регистрация')); ?></a>
                            <?php endif; ?>
                            <?php else: ?>
                                    <a class="nav-link" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Выход')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                        <?php echo csrf_field(); ?>
                                    </form>
            <?php endif; ?>
        </nav>
    </div>

    <div>
        <?php echo $__env->yieldContent('content'); ?>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
<?php /**PATH E:\OSPanel\domains\BakeryUld\resources\views/pattern/app.blade.php ENDPATH**/ ?>