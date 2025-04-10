@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row-justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header">Edit Data Transaksi</div>
                    <div class="card-body">
                        <form action="{{route('transaksi.update', $transaksi->id)}}" method="POST">
                        @csrf
                        @method('put')
                       
                        <div class="form-group">
                            <label>Tanggal Transaksi</label>
                            <input type="date" class="form-control" name="tgl_transaksi" value="{{$transaksi->tgl_transaksi}}">
                        </div>
                         <div class="form-group">
                            <label>Jumlah</label>
                            <input type="text" class="form-control" name="jumlah" value="{{$transaksi->jumlah}}">
                        </div>
                        <div class="form-group">
                            <label>Id Obat</label>
                            <select class="form-control" name="id_obat">
                                @foreach($obat as $data)
                                <option value="{{ $data->id}}" {{$data->id == $transaksi->id_obat ? 'selected' : ''}}>{{ $data->nama_obat}}</option>
                                @endforeach
                            </select>
                        </div>
                         <div class="form-group">
                            <label>Id Pembeli</label>
                            <select class="form-control" name="id_pembeli">
                                @foreach($pembeli as $data)
                                <option value="{{ $data->id}}" {{$data->id == $transaksi->id_pembeli ? 'selected' : ''}}>{{ $data->nama_pembeli}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-2">
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection