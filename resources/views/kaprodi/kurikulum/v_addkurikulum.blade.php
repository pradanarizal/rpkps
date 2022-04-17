@extends('layout.v_template')

@section('title', 'Kurikulum Prodi Teknologi Rekayasa Perangkat')

@section('content')
<!-- <form action="/kurikulum/insert" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-xs-6">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Tambah Data</h3>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label>Nama Kaprodi</label>
                        <input name="nama_kaprodi" class="form-control" value="{{ old('nama_kaprodi') }}">
                        <div class="text-danger">
                            @error('nama_kaprodi')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Prodi</label>
                        <input name="prodi" class="form-control" value="{{ old('prodi') }}">
                        <div class="text-danger">
                            @error('prodi')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Foto Kaprodi</label>
                        <input type="file" name="foto_kaprodi" class="form-control">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form> -->
@endsection