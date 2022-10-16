<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <?php echo \Livewire\Livewire::styles(); ?>

    <?php echo \Livewire\Livewire::scripts(); ?>

</head>

<body>
    <div class="flex-center position-ref full-height">
        <?php if(Route::has('login')): ?>
        <div class="top-right links">
            <?php if(auth()->guard()->check()): ?>
            <a href="<?php echo e(url('/home')); ?>">Home</a>
            <?php else: ?>
            <a href="<?php echo e(route('login')); ?>">Login</a>

            <?php if(Route::has('register')): ?>
            <a href="<?php echo e(route('register')); ?>">Register</a>
            <?php endif; ?>
            <?php endif; ?>
        </div>
        <?php endif; ?>

        <div class="content">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

</html><?php /**PATH D:\WEB\learning_livewire\resources\views/main.blade.php ENDPATH**/ ?>