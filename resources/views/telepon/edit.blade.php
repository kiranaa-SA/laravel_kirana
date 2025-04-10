@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row-justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header">Edit Data Telepon</div>
                    <div class="card-body">
                        <form action="{{route('telepon.update', $telepon->id)}}" method="POST">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label>Nomor</label>
                            <input type="text" class="form-control" name="nomor" value="{{$telepon->nomor}}">
                        </div>
                        <div class="form-group">
                            <label>Id Pengguna</label>
                            <select class="form-control" name="id_pengguna">
                                @foreach($pengguna as $data)
                                <option value="{{ $data->id}}" {{$data->id == $telepon->id_pengguna ? 'selected' : ''}}>{{ $data->nama}}</option>
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