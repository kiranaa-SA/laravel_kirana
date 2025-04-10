@extends('layouts.app')
@section('content')
 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
            <div class="card-header">Daftar Pengguna
                <a href="{{route('pengguna.create')}}" class="btn btn-primary" style="float: right">Tambah</a>
            </div>
               <div class="card-body">
                <div class="table">
                    <table class="table table-responsive">
                        <thead>
                            <th>No</th>
                            <th>Nama Pengguna</th>
                            <th>Aksi</th>
                        </thead>
                        <tbody>
                            @foreach ($pengguna as $data)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$data->nama}}</td>
                                    <td>
                                        <form action="{{route('pengguna.destroy',$data->id)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <a href="{{route('pengguna.show',$data->id)}}"
                                        class="btn btn-sm btn-warning">Show</a> |
                                    <a href="{{route('pengguna.edit',$data->id)}}"
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