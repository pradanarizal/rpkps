@extends('layout.v_template')

@section('title', 'Kurikulum Prodi Teknologi Rekayasa Perangkat')

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <!-- <div class="box-header">
                <button type="button" class="btn btn-primary">
                    <i class="fa fa-book"></i><span>Mata Kuliah</span></button>
            </div> -->
            <div class="box-body ">
                <div class="card-body table-responsive p-0" style="height: responsive;">
                    <table id="dataTable" class="table table-striped table-body-fixed text-nowrap table-bordered table-hover">
                        <thead>
                            <tr>
                                <th width="20px">No</th>
                                <th width="400px">Kurikulum</th>
                                <th width="200px">Tahun</th>
                                <th width="100px">Status</th>
                                <th width="100px">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @foreach ($kaprodi as $data)
                            <tr>
                                <td>{{$no++}}</td>
                                <td><img src="{{url('gambar/'. $data->foto_kaprodi)}}" width="50px"></td>
                                <td>{{ $data->nama_kaprodi}}</td>
                                <td>{{ $data->prodi}}</td>
                                <td>
                                    <a href="" class="btn btn-sm btn-success">Aktif</a>
                                    <a href="" class="btn btn-sm btn-danger">Tidak</a>
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
@endsection