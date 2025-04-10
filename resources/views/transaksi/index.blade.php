@extends('layouts.app')
@section('content')
 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
            <div class="card-header">Daftar Transaksi
                <a href="{{route('transaksi.create')}}" class="btn btn-primary" style="float: right">Tambah</a>
            </div>
               <div class="card-body">
                <div class="table">
                    <table class="table table-responsive">
                        <thead>
                            <th >No</th>
                            <th>Tanggal Transaksi</th>
                            <th>Jumlah</th>
                            <th>Id Obat</th>
                            <th>Id Pembeli</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach ($transaksi as $data)
                                <tr>
                                    <th scope="row">{{ $no++ }}</th>
                                    <td>{{$data->tgl_transaksi}}</td>
                                    <td>{{$data->jumlah}}</td>
                                    <td>{{$data->obat->nama_obat}}</td>
                                    <td>{{$data->pembeli->nama_pembeli}}</td>
                                    <td>
                                <a href="{{ route('transaksi.edit',$data->id )}}" class="btn btn-success mb-3">Edit</a>
                                <a href="{{ route('transaksi.show',$data->id )}}" class="btn btn-warning mb-3">Show</a>
                                  <form action="{{route('transaksi.destroy',$data->id)}}" method="POST">
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