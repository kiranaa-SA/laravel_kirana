@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row-justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header">Edit Pembeli</div>
                    <div class="card-body">
                        <form action="{{route('pembeli.update', $pembeli->id)}}" method="POST">
                        @csrf
                        @method('put')
                        <div class="mb-2">
                            <label for="">Nama Pembeli</label>
                            <input type="text" class="form-control" name="nama_pembeli" value="{{$pembeli->nama_pembeli}}">
                        </div>
                        <div class="mb-2">
                            <label for="">Jenis Kelamin</label>
                            <select class="form-control" name="jenis_kelamin" required>
                                <option value="laki-laki">Laki-laki</option>
                                <option value="perepmpuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="mb-2">
                            <label for="">Telepon</label>
                            <input type="text" class="form-control" name="telepon" value="{{$pembeli->telepon}}">
                        </div>
                        <div class="mb-2">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection