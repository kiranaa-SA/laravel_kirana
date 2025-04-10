@extends('layouts.app')
@section('content')
 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
            <div class="card-header">Daftar Kategori
                <a href="{{route('kategori.create')}}" class="btn btn-primary" style="float: right">Tambah</a>
            </div>
               <div class="card-body">
                <div class="table">
                    <table class="table table-responsive">
                        <thead>
                            <th>No</th>
                            <th>Nama Kategori</th>
                            <th>Aksi</th>
                        </thead>
                        <tbody>
                            @foreach ($kategori as $data)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$data->nama_kategori}}</td>
                                    <td>
                                        <form action="{{route('kategori.destroy',$data->id)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <a href="{{route('kategori.show',$data->id)}}"
                                        class="btn btn-sm btn-warning">Show</a> |
                                    <a href="{{route('kategori.edit',$data->id)}}"
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