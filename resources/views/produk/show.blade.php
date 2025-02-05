@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header">Produk <b>{{$produk->nama}}</b></div>
                    <div class="mb-2">
                        <label for="">Nama Produk</label>
                        <input type="text" class="form-control" name="nama" value="{{$produk->nama_produk}}" disabled>
                    </div>
                    <div class="mb-2">
                        <label for="">Merek</label>
                        <input type="text" class="form-control" name="nama" value="{{$produk->merek}}" disabled>
                    </div>
                    <div class="mb-2">
                        <label for="">Harga</label>
                        <input type="text" class="form-control" name="nama" value="{{$produk->harga}}" disabled>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection