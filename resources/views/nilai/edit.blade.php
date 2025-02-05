@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row-justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header">Edit Nilai</div>
                    <div class="card-body">
                        <form action="{{rout('nilai.update', $nilai->id)}}" method=post></form>
                        @csrf
                        @method('put')
                        <div class="mb-2">
                            <label for="">Nama</label>
                            <input type="text" class="form-control" name="nama" value="{{$nilai->nama}}">
                        </div>
                        <div class="mb-2">
                            <label for="">Jenis Kelamin</label>
                            <select class="form-control" name="jenis_kelamin" required>
                            <option value="laki-laki"{{$nilai->jenis_kelamin ==
                                  "Laki-laki"?'selected':''}}>
                                  Laki-laki
                                  </option>
                             <option value="Perempuan"{{$nilai->jenis_kelamin ==
                                  "Perempuan"?'selected':''}}>
                                  Perempuan
                                  </option>
                            </select>
                        </div>
                        <div class="mb-2">
                            <label for="">Kelas</label>
                            <input type="text" class="form-control" name="kelas" value="{{$nilai->kelas}}" required>
                        </div>
                         <div class="mb-2">
                            <label for="">Mapel</label>
                            <input type="text" class="form-control" name="mapel" value="{{$nilai->kelas}}" required>
                        </div>
                         <div class="mb-2">
                            <label for="">Nilai</label>
                            <input type="text" class="form-control" name="nilai" value="{{$nilai->kelas}}" required>
                        </div>
                         <div class="mb-2">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection