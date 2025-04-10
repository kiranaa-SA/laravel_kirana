@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row-justify-content-center">
      <div class="col">
        <div class="card">
            <div class="card-header">Data Pengguna</div>
            <div class="card-body">
                <form action="{{route('telepon.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="">Nomor</label>
                    <input type="text" class="form-control" name="nomor" required>
                </div>
                <div class="form-group">
                    <label>Id Pengguna</label>
                    <select class="form-control" name="id_pengguna">
                    @foreach($pengguna as $data)
                    <option value="{{ $data->id }}">{{ $data->nama}}</option>
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