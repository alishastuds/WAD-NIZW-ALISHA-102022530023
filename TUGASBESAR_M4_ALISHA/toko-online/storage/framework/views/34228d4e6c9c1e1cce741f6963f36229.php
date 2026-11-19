<?php $__env->startSection('title', 'Daftar Produk'); ?>
<?php $__env->startSection('content'); ?>
    <div class="header-flex">
        <h2>Katalog Produk</h2>
        <a href="<?php echo e(route('products.create')); ?>" class="btn-tambah">+ Tambah Produk</a>
    </div>

    <table>
        <thead>
            <tr><th>No</th><th>Nama</th><th>Merek</th><th>Harga</th><th>Berat</th><th>Varian</th><th>Aksi</th></tr>
        </thead>
        <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td><?php echo e($loop->iteration); ?></td>
                    <td><?php echo e($p->nama); ?></td>
                    <td><?php echo e($p->brand->nama); ?></td>
                    <td>Rp <?php echo e(number_format($p->harga, 0, ',', '.')); ?></td>
                    <td><?php echo e($p->berat); ?> g</td>
                    <td><?php echo e($p->variants_count); ?></td>
                    <td>
                        <div class="aksi">
                            <a href="<?php echo e(route('products.show', $p)); ?>" class="btn-link">Detail</a>
                            <a href="<?php echo e(route('products.edit', $p)); ?>" class="btn-link">Edit</a>
                            <form action="<?php echo e(route('products.destroy', $p)); ?>" method="POST" onsubmit="return confirm('Hapus produk ini?')">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn-delete">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr><td colspan="7" class="empty-data">Belum ada produk.</td></tr>
            <?php endif; ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\TugasBesarWAD\toko-online\resources\views/products/index.blade.php ENDPATH**/ ?>