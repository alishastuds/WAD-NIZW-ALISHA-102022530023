<?php $__env->startSection('title', 'Tambah Produk'); ?>
<?php $__env->startSection('wrapper', 'card'); ?>
<?php $__env->startSection('content'); ?>
    <h2>Tambah Produk</h2>
    <form action="<?php echo e(route('products.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo $__env->make('products._form', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\TugasBesarWAD\toko-online\resources\views/products/create.blade.php ENDPATH**/ ?>