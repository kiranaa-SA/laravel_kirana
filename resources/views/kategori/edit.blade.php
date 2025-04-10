@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row-justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header">Edit Kategori</div>
                    <div class="card-body">
                        <form action="{{route('kategori.update', $kategori->id)}}" method="POST">
                        @csrf
                        @method('put')
                        <div class="mb-2">
                            <label for="">Nama kategori</label>
                            <input type="text" class="form-control" name="nama_kategori" value="{{$kategori->nama_kategori}}">
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