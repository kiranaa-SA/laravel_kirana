@extends('layouts.app')
@section('content')
 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
            <div class="card-header">Daftar obat
                <a href="{{route('obat.create')}}" class="btn btn-primary" style="float: right">Tambah</a>
            </div>
               <div class="card-body">
                <div class="table">
                    <table class="table table-responsive">
                        <thead>
                            <th>No</th>
                            <th>Nama Obat</th>
                            <th>Jenis Obat</th>
                            <th>Tanggal Kadaluarsa</th>
                            <th>Harga</th>
                            <th>Aksi</th>
                        </thead>
                        <tbody>
                            @foreach ($obat as $data)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$data->nama_obat}}</td>
                                    <td>{{$data->jenis_obat}}</td>
                                    <td>{{$data->tgl_kadaluarsa}}</td>
                                    <td>{{$data->harga}}</td>
                                    <td>
                                        <form action="{{route('obat.destroy',$data->id)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <a href="{{route('obat.show',$data->id)}}"
                                        class="btn btn-sm btn-warning">Show</a> |
                                    <a href="{{route('obat.edit',$data->id)}}"
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