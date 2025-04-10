@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Edit Data Produk</div>
                <div class="card-body">
                    <form action="{{ route('produkk.update', $produkk->id) }}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group mb-3">
                            <label for="name">Nama Produk</label>
                            <input type="text" class="form-control" name="nama_produk" value="{{ $produkk->nama_produk }}">
                        </div>   
                         <div class="form-group mb-3">
                            <label for="name">Harga</label>
                            <input type="text" class="form-control" name="harga" value="{{ $produkk->harga }}">
                        </div>  
                         <div class="form-group mb-3">
                            <label for="name">Stok</label>
                            <input type="text" class="form-control" name="stok" value="{{ $produkk->stok }}">
                        </div>  
                            <div class="form-group">
                                <label>Id Kategori</label>
                                <select class="form-control" name="id_kategori">
                                    @foreach($kategori as $data)
                                    <option value="{{$data->id}}" {{$data->id == $produkk->id_kategori ? 'selected' : ''}}>{{$data->nama_kategori}}</option>
                                   @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-success">Edit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection