@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row-justify-content-center">
      <div class="col">
        <div class="card">
            <div class="card-header">Data Produk</div>
            <div class="card-body">
                <form action="{{route('produkk.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="">Nama Produk</label>
                    <input type="text" class="form-control" name="nama_produk" required>
                </div>
                <div class="form-group">
                    <label for="">Harga</label>
                    <input type="text" class="form-control" name="harga" required>
                </div>
                <div class="form-group">
                    <label for="">Stok</label>
                    <input type="text" class="form-control" name="stok" required>
                </div>
                <div class="form-group mb-3">
                    <label>Id Kategori</label>
                    <select class="form-control" name="id_kategori">
                    @foreach($kategori as $data)
                    <option value="{{ $data->id }}">{{ $data->nama_kategori}}</option>
                    @endforeach
                </select>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </div>
              </form>
        </div>
      </div>
    </div>
</div>  
@endsection