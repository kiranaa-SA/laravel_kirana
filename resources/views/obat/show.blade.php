@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header">{{ __('Show Data obat') }}</div>
                    <div class="card-body">
                        <form action="{{ route('obat.update', $obat->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label>Nama obat</label>
                                <input type="text" class="form-control" name="nama_obat"
                                    value="{{ $obat->nama_obat }}" disabled>
                            </div>
                            <div class="mb-3">
                                <label>Jenis obat</label>
                                <input type="text" class="form-control" name="jenis_obat"
                                    value="{{ $obat->jenis_obat }}" disabled>
                            </div>  
                            <div class="mb-3">
                                <label>Tanggal Kadaluarsa</label>
                                <input type="date" class="form-control" name="tgl_kadaluarsa"
                                    value="{{ $obat->tgl_kadaluarsa }}" disabled>
                            </div>
                            <div class="mb-3">
                                <label>Harga</label>
                                <input type="text" class="form-control" name="harga"
                                    value="{{ $obat->harga }}" disabled>
                            </div>
                            <a href="{{ route('obat.index') }}" class="btn btn-primary">Kembali</a>
                       </form> 
                  </div>
             </div>
         </div>
@endsection