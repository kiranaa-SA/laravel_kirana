@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header">{{ __('Show Data pengguna') }}</div>
                    <div class="card-body">
                        <form action="{{ route('pengguna.update', $pengguna->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label>Nama Pengguna</label>
                                <input type="text" class="form-control" name="nama"
                                    value="{{ $pengguna->nama }}" disabled>
                            </div>  
                            <a href="{{ route('pengguna.index') }}" class="btn btn-primary">Kembali</a>
                       </form> 
                  </div>
             </div>
         </div>
@endsection