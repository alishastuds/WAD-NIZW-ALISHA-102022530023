<?php $__env->startSection('title', 'Edit Produk'); ?>
<?php $__env->startSection('wrapper', 'card'); ?>
<?php $__env->startSection('content'); ?>
    <h2>Edit Produk</h2>
    <form action="<?php echo e(route('products.update', $product)); ?>" method="POST">
        <?php echo csrf_field(); ?> <?php echo method_field('PUT'); ?>
        <?php echo $__env->make('products._form', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\TugasBesarWAD\toko-online\resources\views/products/edit.blade.php ENDPATH**/ ?>