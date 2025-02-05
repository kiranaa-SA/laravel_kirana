@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h3>Detail Produk</h3>
                </div>

                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Nama Produk</th>
                            <td>{{ $product->nama_product }}</td>
                        </tr>
                        <tr>
                            <th>Merk</th>
                            <td>{{ $product->merk }}</td>
                        </tr>
                        <tr>
                            <th>Stok</th>
                            <td>{{ $product->stock }}</td>
                        </tr>
                        <tr>
                            <th>Harga</th>
                            <td>Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                        </tr>
                        <tr>
                            <th>Tanggal Produksi</th>
                            <td>{{ date('d M Y', strtotime($product->production_date)) }}</td>
                        </tr>
                        <tr>
                            <th>Foto</th>
                            <td>
                                @if ($product->photo)
                                    <img src="{{ Storage::url('product/' . $product->photo) }}" alt="Foto Produk" class="img-thumbnail" width="150">
                                @else
                                    <p>Tidak ada foto</p>
                                @endif
                            </td>
                        </tr>
                    </table>
                    <a href="{{ route('product.index') }}" class="btn btn-secondary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection