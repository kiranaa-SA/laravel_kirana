@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row-justify-content-center">
      <div class="col">
        <div class="card">
            <div class="card-header">Tambah Pembeli</div>
            <div class="card-body">
                <form action="{{route('pembeli.store')}}" method="post">
                @csrf
                <div class="mb-2">
                    <label for="">Nama Pembeli</label>
                    <input type="text" class="form-control" name="nama_pembeli" required>
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
                    <input type="text" class="form-control" name="telepon" required>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
            </div>
              </form>
        </div>
      </div>
    </div>
</div>  
@endsection