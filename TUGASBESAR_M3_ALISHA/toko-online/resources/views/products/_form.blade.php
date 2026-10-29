<div class="form-group">
    <label>Merek</label>
    <select name="brand_id" class="form-control" required>
        <option value="">-- Pilih merek --</option>
        @foreach ($brands as $b)
            <option value="{{ $b->id }}" @selected(old('brand_id', $product->brand_id ?? '') == $b->id)>{{ $b->nama }}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label>Nama Produk</label>
    <input type="text" name="nama" class="form-control" value="{{ old('nama', $product->nama ?? '') }}" required>
</div>

<div class="form-group">
    <label>Deskripsi</label>
    <textarea name="deskripsi" class="form-control">{{ old('deskripsi', $product->deskripsi ?? '') }}</textarea>
</div>

<div class="row">
    <div class="form-group"><label>Harga (Rp)</label><input type="number" step="0.01" name="harga" class="form-control" value="{{ old('harga', $product->harga ?? '') }}" required></div>
    <div class="form-group"><label>Berat (gram)</label><input type="number" name="berat" class="form-control" value="{{ old('berat', $product->berat ?? '') }}" required></div>
</div>
<div class="row">
    <div class="form-group"><label>Panjang (cm)</label><input type="number" step="0.01" name="panjang" class="form-control" value="{{ old('panjang', $product->panjang ?? '') }}"></div>
    <div class="form-group"><label>Lebar (cm)</label><input type="number" step="0.01" name="lebar" class="form-control" value="{{ old('lebar', $product->lebar ?? '') }}"></div>
    <div class="form-group"><label>Tinggi (cm)</label><input type="number" step="0.01" name="tinggi" class="form-control" value="{{ old('tinggi', $product->tinggi ?? '') }}"></div>
</div>

<button type="submit" class="btn-submit">Simpan</button>
<a href="{{ route('products.index') }}" class="btn-batal">Batal</a>