@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header">Nilai <b>{{$nilai->nama}}</b></div>
                    <div class="mb-2">
                        <label for="">Nama</label>
                        <input type="text" class="form-control" name="nama" value="{{$nilai->nama}}" disabled>
                    </div>
                    <div class="mb-2">
                        <label for="">Jenis Kelamin</label>
                        <input type="text" class="form-control" name="nama" value="{{$nilai->jenis_kelamin}}" disabled>
                    </div>
                    <div class="mb-2">
                        <label for="">Kelas</label>
                        <input type="text" class="form-control" name="nama" value="{{$nilai->kelas}}" disabled>
                    </div>
                    <div class="mb-2">
                        <label for="">Mapel</label>
                        <input type="text" class="form-control" name="nama" value="{{$nilai->mapel}}" disabled>
                    </div>
                    <div class="mb-2">
                        <label for="">Nilai</label>
                        <input type="text" class="form-control" name="nama" value="{{$nilai->nilai}}" disabled>
                    </div>
                    <div class="mb-2">
                        <a href="{{route('nilai.index')}}" class="btn btn-ptimary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection