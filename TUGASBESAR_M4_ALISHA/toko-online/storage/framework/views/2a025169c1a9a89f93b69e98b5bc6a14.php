<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'Katalog Produk'); ?></title>
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
</head>
<body>

    <?php if(auth()->guard()->check()): ?>
    <nav>
    <a href="<?php echo e(route('products.index')); ?>">Produk</a>
    <?php if(auth()->user()->isAdmin()): ?>
        <a href="<?php echo e(route('brands.index')); ?>">Merek</a>
    <?php endif; ?>
    <span><?php echo e(auth()->user()->name); ?> (<?php echo e(auth()->user()->role); ?>)</span>
    <form action="<?php echo e(route('logout')); ?>" method="POST" style="display:inline">
        <?php echo csrf_field(); ?>
        <button type="submit" class="btn-delete">Keluar</button>
    </form>
    </nav>
    <?php endif; ?>

    <main>
        <div class="<?php echo $__env->yieldContent('wrapper', 'container'); ?>">
            <?php if(session('success')): ?>
                <div class="alert-success"><?php echo e(session('success')); ?></div>
            <?php endif; ?>
            <?php if($errors->any()): ?>
                <div class="alert-error">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($e); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>

            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </main>
</body>
</html><?php /**PATH C:\laragon\www\WAD-NIZW-ALISHA-102022530023\WAD-NIZW-ALISHA-102022530023\TUGASBESAR_M3_ALISHA\toko-online\resources\views/layouts/app.blade.php ENDPATH**/ ?>