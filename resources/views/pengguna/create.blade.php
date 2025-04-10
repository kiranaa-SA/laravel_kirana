@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row-justify-content-center">
      <div class="col">
        <div class="card">
            <div class="card-header">Tambah Pengguna</div>
            <div class="card-body">
                <form action="{{route('pengguna.store')}}" method="post">
                @csrf
                <div class="mb-2">
                    <label for="">Nama Pengguna</label>
                    <input type="text" class="form-control" name="nama" required>
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