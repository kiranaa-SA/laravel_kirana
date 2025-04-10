@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header">{{ __('Show Data kategori') }}</div>
                    <div class="card-body">
                        <form action="{{ route('kategori.update', $kategori->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label>Nama Kategori</label>
                                <input type="text" class="form-control" name="nama_kategori"
                                    value="{{ $kategori->nama_kategori }}" disabled>
                            </div>  
                            <a href="{{ route('kategori.index') }}" class="btn btn-primary">Kembali</a>
                       </form> 
                  </div>
             </div>
         </div>
@endsection