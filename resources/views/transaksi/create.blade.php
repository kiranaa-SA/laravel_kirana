@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row-justify-content-center">
      <div class="col">
        <div class="card">
            <div class="card-header">Data Transaksi</div>
            <div class="card-body">
                <form action="{{route('transaksi.store')}}" method="post">
                @csrf
                
                <div class="form-group">
                    <label for="">Tanggal Transaksi</label>
                    <input type="date" class="form-control" name="tgl_transaksi" required>
                </div>
                <div class="form-group">
                    <label for="">Jumalah</label>
                    <input type="text" class="form-control" name="jumlah" required>
                </div>
                <div class="form-group">
                    <label>Id Obat</label>
                    <select class="form-control" name="id_obat">
                    @foreach($obat as $data)
                    <option value="{{ $data->id }}">{{ $data->nama_obat}}</option>
                    @endforeach
                </select>
                </div>
                <div class="form-group">
                    <label>Id Pembeli</label>
                    <select class="form-control" name="id_pembeli">
                    @foreach($pembeli as $data)
                    <option value="{{ $data->id }}">{{ $data->nama_pembeli}}</option>
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