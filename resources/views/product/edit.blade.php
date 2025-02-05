@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    <form action="{{ route('product.update', $product->id) }}" method="post" enctype="multipart/form-data">
                        @method('put')
                        @csrf

                        <div class="mb-3">
                            <label for="name">Nama Produk</label>
                            <input type="text" class="form-control @error('nama_product') is-invalid @enderror" name="nama_product" value="{{ $product->name }}">
                            @error('nama_product')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="merk">Merk</label>
                            <input type="text" class="form-control @error('merk') is-invalid @enderror" name="merk" value="{{ $product->merk }}">
                            @error('merk')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="stock">Stok</label>
                            <input type="text" class="form-control @error('stock') is-invalid @enderror" name="stock" value="{{ $product->stock }}">
                            @error('stock')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="price">Harga</label>
                            <input type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ $product->price }}">
                            @error('price')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="production_date">Tanggal Produksi</label>
                            <input type="date" class="form-control @error('production_date') is-invalid @enderror" name="production_date" value="{{ $product->production_date }}">
                            @error('production_date')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="photo">Foto</label>
                            @if ($product->photo)
                                <div class="mb-2">
                                    <img src="{{ Storage::url('product/' . $product->photo) }}" alt="Foto Produk" class="img-thumbnail" width="150">
                                </div>
                            @endif
                            <input type="file" class="form-control @error('photo') is-invalid @enderror" name="photo" value="{{ $product->photo }}">
                            @error('photo')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection