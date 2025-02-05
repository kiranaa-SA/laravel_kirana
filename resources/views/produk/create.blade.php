@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row-justify-content-center">
      <div class="col">
        <div class="card">
            <div class="card-header">Tambah Produk</div>
            <div class="card-body">
                <form action="{{route('produk.store')}}" method="post">
                @csrf
                <div class="mb-2">
                    <label for="">Nama Produk</label>
                    <input type="text" class="form-control" name="nama" required>
                </div>
                <div class="mb-2">
                    <label for="">Merek</label>
                    <input type="text" class="form-control" name="merek" required>
                </div>
                <div class= "mb-2">
                    <label for="">Harga</label>
                    <input type="text" class="form-control" name="harga" required>
                </div>
            </div>
        </div>
      </div>
    </div>
</div>  
@endsection