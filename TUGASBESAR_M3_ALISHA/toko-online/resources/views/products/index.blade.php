@extends('layouts.app')
@section('title', 'Daftar Produk')
@section('content')
    <div class="header-flex">
        <h2>Katalog Produk</h2>
        <a href="{{ route('products.create') }}" class="btn-tambah">+ Tambah Produk</a>
    </div>

    <table>
        <thead>
            <tr><th>No</th><th>Nama</th><th>Merek</th><th>Harga</th><th>Berat</th><th>Varian</th><th>Aksi</th></tr>
        </thead>
        <tbody>
            @forelse ($products as $p)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $p->nama }}</td>
                    <td>{{ $p->brand->nama }}</td>
                    <td>Rp {{ number_format($p->harga, 0, ',', '.') }}</td>
                    <td>{{ $p->berat }} g</td>
                    <td>{{ $p->variants_count }}</td>
                    <td>
                        <div class="aksi">
                            <a href="{{ route('products.show', $p) }}" class="btn-link">Detail</a>
                            <a href="{{ route('products.edit', $p) }}" class="btn-link">Edit</a>
                            <form action="{{ route('products.destroy', $p) }}" method="POST" onsubmit="return confirm('Hapus produk ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-delete">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr><td colspan="7" class="empty-data">Belum ada produk.</td></tr>
            @endforelse
        </tbody>
    </table>
@endsection