@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                      <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="mb-3">
                        <label for="">Nama produk</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name">
                        @error('name')
                        <div class="invalid-feedback">{{$messege}}</div>
                        @enderror
                </div>
                 <div class="card-body">
                      <div class="mb-3">
                        <label for="">Merk</label>
                        <input type="text" class="form-control @error('merk') is-invalid @enderror" name="merk">
                        @error('merk')
                        <div class="invalid-feedback">{{$messege}}</div>
                        @enderror
                </div>
                 <div class="card-body">
                      <div class="mb-3">
                        <label for="">Stok</label>
                        <input type="text" class="form-control @error('stock') is-invalid @enderror" name="stock">
                        @error('stock')
                        <div class="invalid-feedback">{{$messege}}</div>
                        @enderror
                </div>
                 <div class="card-body">
                      <div class="mb-3">
                        <label for="">Harga</label>
                        <input type="text" class="form-control @error('price') is-invalid @enderror" name="price">
                        @error('price')
                        <div class="invalid-feedback">{{$messege}}</div>
                        @enderror
                </div>
                  <div class="mb-3">
                        <label for="">Tanggal Produksi</label>
                        <input type="date" class="form-control @error('production_date') is-invalid @enderror" name="production_date">
                        @error('production_date')
                        <div class="invalid-feedback">{{$messege}}</div>
                        @enderror
                </div>
                <div class="mb-3">
                        <label for="">Foto</label>
                        <input type="file" class="form-control @error('photo') is-invalid @enderror" name="photo">
                        @error('photo')
                        <div class="invalid-feedback">{{$messege}}</div>
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