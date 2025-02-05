@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row-justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header">Edit Produk</div>
                    <div class="card-body">
                        <form action="{{route('produk.update', $produk->id)}}" method="POST">
                        @csrf
                        @method('put')
                        <div class="mb-2">
                            <label for="">Nama produk</label>
                            <input type="text" class="form-control" name="nama" value="{{$produk->nama_produk}}">
                        </div>
                        <div class="mb-2">
                            <label for="">Merek</label>
                            <input type="text" class="form-control" name="merek" value="{{$produk->merek}}">
                        </div>
                        <div class="mb-2">
                            <label for="">Harga</label>
                            <input type="text" class="form-control" name="harga" value="{{$produk->harga}}" required>
                        </div>
                        <div class="mb-2">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection