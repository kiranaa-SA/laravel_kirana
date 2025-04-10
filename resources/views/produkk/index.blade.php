@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Data produk
                <a href="{{route('produkk.create')}}" class="btn btn-primary" style="float:right">Tambah</a>
                </div>
                <div class="card-body">
                    @if (@session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    
                 <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Produk</th>
                            <th scope="col">Harga</th> 
                            <th scope="col">Stok</th>
                            <th scope="col">Id Kategori</th>
                            <th scope="col">Aksi</th>

                        </tr>
                    </thead>
                    <tbody>
                        @php $no = 1; @endphp
                        @foreach ($produkk as $data)
                        <tr>
                            <th scope="row">{{ $no++ }}</th>
                            <td>{{$data->nama_produk}}</td>
                            <td>{{$data->harga}}</td>
                            <td>{{$data->stok}}</td>
                            <td>{{$data->kategori->nama_kategori}}</td>
                            <td>
                                <a href="{{ route('produkk.edit',$data->id )}}" class="btn btn-success mb-3">Edit</a>
                                <a href="{{ route('produkk.show',$data->id )}}" class="btn btn-warning mb-3">Show</a>
                                  <form action="{{route('produkk.destroy',$data->id)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                <button type="submit" class="btn btn-danger mb-3" onclick="return confirm('Apakah Anda Yakin?')">Delete</button>           
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                 </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection