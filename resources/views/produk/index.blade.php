@extends('layouts.app')
@section('content')
 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
            <div class="card-header">Daftar Produk
                <a href="{{route('produk.create')}}" class="btn btn-primary" style="float: right">Tambah</a>
            </div>
               <div class="card-body">
                <div class="table">
                    <table class="table table-responsive">
                        <thead>
                            <th>No</th>
                            <th>Nama Produk</th>
                            <th>Merek</th>
                            <th>Harga</th>
                        </thead>
                        <tbody>
                            @foreach ($produk as $data)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$data->nama_produk}}</td>
                                    <td>{{$data->merek}}</td>
                                    <td>{{$data->harga}}</td>
                                    <td>
                                        <form action="{{route('produk.destroy', $data->id)}}" method="post"></form>
                                        @csrf
                                        @method('delete')
                                        <a href="{{route('produk.edit', $data->id)}}" 
                                           class="btn btn-sm btn-success">Edit</a>  
                                        <a href="{{route('produk.show', $data->id)}}" 
                                           class="btn btn-sm btn-warning">Show</a>
                                        <button type="submit" class="btn btn-danger">Hapus</button>
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