<div class="form-group">
    <label>Merek</label>
    <select name="brand_id" class="form-control" required>
        <option value="">-- Pilih merek --</option>
        <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($b->id); ?>" <?php if(old('brand_id', $product->brand_id ?? '') == $b->id): echo 'selected'; endif; ?>><?php echo e($b->nama); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</div>

<div class="form-group">
    <label>Nama Produk</label>
    <input type="text" name="nama" class="form-control" value="<?php echo e(old('nama', $product->nama ?? '')); ?>" required>
</div>

<div class="form-group">
    <label>Deskripsi</label>
    <textarea name="deskripsi" class="form-control"><?php echo e(old('deskripsi', $product->deskripsi ?? '')); ?></textarea>
</div>

<div class="row">
    <div class="form-group"><label>Harga (Rp)</label><input type="number" step="0.01" name="harga" class="form-control" value="<?php echo e(old('harga', $product->harga ?? '')); ?>" required></div>
    <div class="form-group"><label>Berat (gram)</label><input type="number" name="berat" class="form-control" value="<?php echo e(old('berat', $product->berat ?? '')); ?>" required></div>
</div>
<div class="row">
    <div class="form-group"><label>Panjang (cm)</label><input type="number" step="0.01" name="panjang" class="form-control" value="<?php echo e(old('panjang', $product->panjang ?? '')); ?>"></div>
    <div class="form-group"><label>Lebar (cm)</label><input type="number" step="0.01" name="lebar" class="form-control" value="<?php echo e(old('lebar', $product->lebar ?? '')); ?>"></div>
    <div class="form-group"><label>Tinggi (cm)</label><input type="number" step="0.01" name="tinggi" class="form-control" value="<?php echo e(old('tinggi', $product->tinggi ?? '')); ?>"></div>
</div>

<button type="submit" class="btn-submit">Simpan</button>
<a href="<?php echo e(route('products.index')); ?>" class="btn-batal">Batal</a><?php /**PATH C:\TugasBesarWAD\toko-online\resources\views/products/_form.blade.php ENDPATH**/ ?>