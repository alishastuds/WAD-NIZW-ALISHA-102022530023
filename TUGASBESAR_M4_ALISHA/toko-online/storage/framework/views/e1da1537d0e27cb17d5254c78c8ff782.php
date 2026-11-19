<?php $__env->startSection('title', 'Login'); ?>
<?php $__env->startSection('content'); ?>
    <h2>Masuk</h2>
    <form action="<?php echo e(route('login.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="<?php echo e(old('email')); ?>" required>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <button type="submit" class="btn-tambah">Masuk</button>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\WAD-NIZW-ALISHA-102022530023\WAD-NIZW-ALISHA-102022530023\TUGASBESAR_M3_ALISHA\toko-online\resources\views/auth/login.blade.php ENDPATH**/ ?>