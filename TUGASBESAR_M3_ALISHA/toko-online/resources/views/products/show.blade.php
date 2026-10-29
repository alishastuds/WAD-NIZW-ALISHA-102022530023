@extends('layouts.app')
@section('title', $product->nama)
@section('content')
    <div class="header-flex">
        <h2>{{ $product->nama }}</h2>
        <a href="{{ route('products.edit', $product) }}" class="btn-tambah">Edit Produk</a>
    </div>

    <p>
        <b>Merek:</b> {{ $product->brand->nama }}<br>
        <b>Harga:</b> Rp {{ number_format($product->harga, 0, ',', '.') }}<br>
        <b>Berat:</b> {{ $product->berat }} g<br>
        <b>Dimensi (P x L x T):</b> {{ $product->panjang ?? '-' }} x {{ $product->lebar ?? '-' }} x {{ $product->tinggi ?? '-' }} cm<br>
        <b>Deskripsi:</b> {{ $product->deskripsi ?? '-' }}
    </p>

    <h3>Varian</h3>
    <table>
        <thead>
            <tr><th>Warna</th><th>Ukuran</th><th>Stok</th><th>Harga</th><th>Aksi</th></tr>
        </thead>
        <tbody>
            @forelse ($product->variants as $v)
                <tr>
                    <td>{{ $v->warna ?? '-' }}</td>
                    <td>{{ $v->ukuran ?? '-' }}</td>
                    <td>{{ $v->stok }}</td>
                    <td>{{ $v->harga ? 'Rp ' . number_format($v->harga, 0, ',', '.') : 'Ikut harga produk' }}</td>
                    <td>
                        <form action="{{ route('variants.destroy', $v) }}" method="POST" onsubmit="return confirm('Hapus varian ini?')">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn-delete">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="5" class="empty-data">Belum ada varian.</td></tr>
            @endforelse
        </tbody>
    </table>

    <h4>Tambah Varian</h4>
    <form action="{{ route('variants.store', $product) }}" method="POST">
        @csrf
        <div class="row">
            <div class="form-group"><label>Warna</label><input type="text" name="warna" class="form-control"></div>
            <div class="form-group"><label>Ukuran</label><input type="text" name="ukuran" class="form-control"></div>
            <div class="form-group"><label>Stok</label><input type="number" name="stok" class="form-control" value="0" required></div>
            <div class="form-group"><label>Harga (opsional)</label><input type="number" step="0.01" name="harga" class="form-control"></div>
        </div>
        <button type="submit" class="btn-tambah">Tambah Varian</button>
    </form>

    <a href="{{ route('products.index') }}" class="btn-batal" style="text-align:left">← Kembali</a>
@endsection