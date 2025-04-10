@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h3>Data Pengguna</h3>
                </div>

                <div class="card-body">
                   <div class="mb-2">
                                <label class="mb-3" for=""><b>Nama Produk</b></label>
                                <input type="text" class="form-control" name="nama_produk" value="{{$produkk->nama_produk}}" disabled>
                            </div>
                             <div class="mb-2">
                                <label class="mb-3" for=""><b>Harga</b></label>
                                <input type="text" class="form-control" name="harga" value="{{$produkk->harga}}" disabled>
                            </div>
                             <div class="mb-2">
                                <label class="mb-3" for=""><b>Stok</b></label>
                                <input type="text" class="form-control" name="stok" value="{{$produkk->stok}}" disabled>
                            </div>
                             <div class="mb-2">
                                <label class="mb-3" for=""><b>Id Kategori</b></label>
                                <input type="text" class="form-control" name="id_kategori" value="{{$produkk->id_kategori}}" disabled>
                            </div>
                    <a href="{{ route('produkk.index') }}" class="btn btn-secondary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection