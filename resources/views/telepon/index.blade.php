@extends('layouts.app')
@section('content')
 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
            <div class="card-header">Daftar Telepon
                <a href="{{route('telepon.create')}}" class="btn btn-primary" style="float: right">Tambah</a>
            </div>
               <div class="card-body">
                <div class="table">
                    <table class="table table-responsive">
                        <thead>
                            <th >No</th>
                            <th>Nomor</th>
                            <th>Id Pengguna</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach ($telepon as $data)
                                <tr>
                                    <th scope="row">{{ $no++ }}</th>
                                    <td>{{$data->nomor}}</td>
                                    <td>{{$data->pengguna->nama}}</td>
                                    <td>
                                <a href="{{ route('telepon.edit',$data->id )}}" class="btn btn-success mb-3">Edit</a>
                                <a href="{{ route('telepon.show',$data->id )}}" class="btn btn-warning mb-3">Show</a>
                                  <form action="{{route('telepon.destroy',$data->id)}}" method="POST">
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
</div>
@endsection