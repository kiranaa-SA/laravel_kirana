@extends('layouts.app')
@section('content')
 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
            <div class="card-header">Daftar Pembeli
                <a href="{{route('pembeli.create')}}" class="btn btn-primary" style="float: right">Tambah</a>
            </div>
               <div class="card-body">
                <div class="table">
                    <table class="table table-responsive">
                        <thead>
                            <th>No</th>
                            <th>Nama Pembeli</th>
                            <th>Jenis Kelamin</th>
                            <th>Telepon</th>
                            <th>Aksi</th>
                        </thead>
                        <tbody>
                            @foreach ($pembeli as $data)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$data->nama_pembeli}}</td>
                                    <td>{{$data->jenis_kelamin}}</td>
                                    <td>{{$data->telepon}}</td>
                                    <td>
                                        <form action="{{route('pembeli.destroy',$data->id)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <a href="{{route('pembeli.show',$data->id)}}"
                                        class="btn btn-sm btn-warning">Show</a> |
                                    <a href="{{route('pembeli.edit',$data->id)}}"
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