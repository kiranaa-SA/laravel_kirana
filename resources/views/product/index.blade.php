@extends('layouts.app')
@section('content')
<div class="conteiner">
 <div class="row justify-content-center">
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">Daftar Produk
                <a href="{{route('product.create')}}" class="btn btn-sm btn-primary" style="float: right">Tambah</a>
            </div>
            <div class="card-body">
                <div class="table">
                    <table class="table table-responsive">
                        <thead></thead>
                        <th>No</th>
                        <th>Nama </th>
                        <th>Harga</th>
                        <th>Foto </th>
                        <th>Aksi</th>
                        </thead>
                        <tbody>
                            @foreach ($product as $data)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$data->nama_product}}</td>
                                    <td> Rp.{{number_format($data->price, 0, ',','.')}}</td>
                                    <td><img src="{{asset('storage/product/' .$data->photo)}}" alt=""
                                         style="width:50px; height=50px;">
                                    </td>
                                     <td>
                                <form action="{{route('product.destroy',$data->id)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <a href="{{route('product.show',$data->id)}}"
                                        class="btn btn-sm btn-warning">Show</a> |
                                    <a href="{{route('product.edit',$data->id)}}"
                                        class="btn btn-sm btn-success">Edit</a>|
                                    <button type="submit" class="btn btn-danger" 
                                    onclick="return confirm('Apakah Anda Yakin?')">Delete</button>           
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
</div>
@endsection