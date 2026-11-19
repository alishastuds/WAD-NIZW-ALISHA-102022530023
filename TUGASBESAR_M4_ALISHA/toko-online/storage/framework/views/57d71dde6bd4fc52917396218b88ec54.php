<?php $__env->startSection('title', $product->nama); ?>
<?php $__env->startSection('content'); ?>
    <div class="header-flex">
        <h2><?php echo e($product->nama); ?></h2>
        <a href="<?php echo e(route('products.edit', $product)); ?>" class="btn-tambah">Edit Produk</a>
    </div>

    <p>
        <b>Merek:</b> <?php echo e($product->brand->nama); ?><br>
        <b>Harga:</b> Rp <?php echo e(number_format($product->harga, 0, ',', '.')); ?><br>
        <b>Berat:</b> <?php echo e($product->berat); ?> g<br>
        <b>Dimensi (P x L x T):</b> <?php echo e($product->panjang ?? '-'); ?> x <?php echo e($product->lebar ?? '-'); ?> x <?php echo e($product->tinggi ?? '-'); ?> cm<br>
        <b>Deskripsi:</b> <?php echo e($product->deskripsi ?? '-'); ?>

    </p>

    <h3>Varian</h3>
    <table>
        <thead>
            <tr><th>Warna</th><th>Ukuran</th><th>Stok</th><th>Harga</th><th>Aksi</th></tr>
        </thead>
        <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $product->variants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td><?php echo e($v->warna ?? '-'); ?></td>
                    <td><?php echo e($v->ukuran ?? '-'); ?></td>
                    <td><?php echo e($v->stok); ?></td>
                    <td><?php echo e($v->harga ? 'Rp ' . number_format($v->harga, 0, ',', '.') : 'Ikut harga produk'); ?></td>
                    <td>
                        <form action="<?php echo e(route('variants.destroy', $v)); ?>" method="POST" onsubmit="return confirm('Hapus varian ini?')">
                            <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn-delete">Hapus</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr><td colspan="5" class="empty-data">Belum ada varian.</td></tr>
            <?php endif; ?>
        </tbody>
    </table>

    <h4>Tambah Varian</h4>
    <form action="<?php echo e(route('variants.store', $product)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="row">
            <div class="form-group"><label>Warna</label><input type="text" name="warna" class="form-control"></div>
            <div class="form-group"><label>Ukuran</label><input type="text" name="ukuran" class="form-control"></div>
            <div class="form-group"><label>Stok</label><input type="number" name="stok" class="form-control" value="0" required></div>
            <div class="form-group"><label>Harga (opsional)</label><input type="number" step="0.01" name="harga" class="form-control"></div>
        </div>
        <button type="submit" class="btn-tambah">Tambah Varian</button>
    </form>

    <a href="<?php echo e(route('products.index')); ?>" class="btn-batal" style="text-align:left">← Kembali</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\TugasBesarWAD\toko-online\resources\views/products/show.blade.php ENDPATH**/ ?>