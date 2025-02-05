@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row-justify-content-center">
      <div class="col">
        <div class="card">
            <div class="card-header">Tambah Nilai</div>
            <div class="card-body">
                <form action="{{route('nilai.store')}}" method="post">
                @csrf
                <div class="mb-2">
                    <label for="">Nama</label>
                    <input type="text" class="form-control" name="nama" required>
                </div>
                <div class="mb-2">
                    <label for="">Jenis Kelamin</label>
                    <select class="form-control" name="jenis_kelamin" required>
                        <option value="laki-laki">Laki-laki</option>
                        <option value="perepmpuan">Perempuan</option>
                    </select>
                </div>
                <div class= "mb-2">
                    <label for="">Kelas</label>
                    <input type="text" class="form-control" name="kelas" required>
                </div>
                <div class="mb-2">
                    <label for="">Mapel</label>
                    <input type="text" class="form-control" name="mapel" required>
                </div>
                 <div class="mb-2">
                    <label for="">Nilai</label>
                    <input type="text" class="form-control" name="nilai" required>
                </div>
                <div class="mb-2">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
               </form>
            </div>
        </div>
      </div>
    </div>
</div>  
@endsection