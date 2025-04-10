@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h3>Data Transaksi</h3>
                </div>

                <div class="card-body">
                   <div class="mb-2">
                                <label class="mb-3" for=""><b>Jumlah</b></label>
                                <input type="text" class="form-control" name="jumlah" value="{{$transaksi->jumlah}}" disabled>
                            </div>
                             <div class="mb-2">
                                <label class="mb-3" for=""><b>Tanggal Transaksi</b></label>
                                <input type="date" class="form-control" name="tgl_transaksi" value="{{$transaksi->tgl_transaksi}}" disabled>
                            </div>
                             <div class="mb-2">
                                <label class="mb-3" for=""><b>Id Obat</b></label>
                                <input type="text" class="form-control" name="id_obat" value="{{$transaksi->id_obat}}" disabled>
                            </div>
                             <div class="mb-2">
                                <label class="mb-3" for=""><b>Id Pembeli</b></label>
                                <input type="text" class="form-control" name="id_kategori" value="{{$transaksi->id_pembeli}}" disabled>
                            </div>
                    <a href="{{ route('transaksi.index') }}" class="btn btn-secondary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection