@extends('layouts.app')
@section('content')
 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
            <div class="card-header">Daftar Nilai
                <a href="{{route('nilai.create')}}" class="btn btn-primary" style="float: right">Tambah</a>
            </div>
               <div class="card-body">
                <div class="table">
                    <table class="table table-responsive">
                        <thead>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Aksi</th>
                        </thead>
                        <tbody>
                            @foreach ($nilai as $data)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$data->nama}}</td>
                                    <td>{{$data->kelas}}</td>
                                    <td>Aksi</td>
                                    <td>
                                        <form action="{{route('nilai.destroy', $data->id)}}" method="post"></form>
                                        @csrf
                                        @method('delete')
                                        <a href="{{route('nilai.edit', $data->id)}}" 
                                           class="btn btn-sm btn-success">Edit</a>  
                                        <a href="{{route('nilai.show', $data->id)}}" 
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