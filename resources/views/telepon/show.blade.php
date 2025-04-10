@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header">{{ __('Show Data pengguna') }}</div>
                    <div class="card-body">
                        <form action="{{ route('telepon.update', $telepon->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label>Nomor</label>
                                <input type="text" class="form-control" name="nomor"
                                    value="{{ $telepon->nomor }}" disabled>
                            </div>  
                            <a href="{{ route('telepon.index') }}" class="btn btn-primary">Kembali</a>
                       </form> 
                  </div>
             </div>
         </div>
@endsection