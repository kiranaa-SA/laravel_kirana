@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Tambah Data pendaftaran') }}</div>
                    <div class="card-body">
                        <form action="{{ route('pendaftaran.update', $pendaftaran->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-2">
                                <label>Nama Lengkap</label>
                                <input type="text" class="form-control" name="nama_lengkap"
                                    value="{{ $pendaftaran->nama_lengkap }}" required>
                                <div class="mb-2">
                                    <label>Jenis Kelamin</label><br>
                                    <input type="radio" class="form-check-input" name="jenis_kelamin"
                                        value="laki-laki">Laki-laki
                                    <input type="radio" class="from-check-input" name="jenis_kelamin"
                                        value="perempuan">Perempuan
                                </div>
                                <div class="mb-2">
                                    <label>Tanggal Lahir</label>
                                    <input type="date" class="form-control" name="tanggal_lahir" value="{{ $pendaftaran->tanggal_lahir }}"required>
                                </div>
                                <div class="mb-2">
                                    <label>Agama</label>
                                    <select class="form-control" name="agama">
                                        <option value="">Pilih Agama</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Islam">Kristen</option>
                                        <option value="Islam">Budha</option>
                                        <option value="Islam">Hindu</option>
                                    </select>
                                </div>
                                <div class="mb-2">
                                    <label>Asal Sekolah</label>
                                    <input type="text" class="form-control" name="asal_sekolah" value="{{ $pendaftaran->asal_sekolah }}"required>
                                </div>
                                <div class="mb-2">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
