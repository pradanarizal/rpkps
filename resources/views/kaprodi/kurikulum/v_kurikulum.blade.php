@extends('layout.v_template')

@section('title', 'Kurikulum Prodi Teknologi Rekayasa Perangkat')

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-body ">
                <div class="card-body table-responsive p-0" style="height: responsive;">
                    <table id="dataTable" class="table table-striped table-body-fixed text-nowrap table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kurikulum</th>
                                <th>Tahun</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <tr>
                                <td width="50px">{{$no++}}</td>
                                <td width="500px">Kurikulum 2021 MBKM</td>
                                <td width="400px">2021</td>
                                <td><span type="button" class="label label-success btn-xs">Aktif</span></td>
                            </tr>
                            <tr>
                                <td>{{$no++}}</td>
                                <td>Kurikulum 2021</td>
                                <td>2021</td>
                                <td><span type="button" class="label label-danger btn-xs">Tidak</span></td>
                            </tr>
                            <tr>
                                <td>{{$no++}}</td>
                                <td>Kurikulum 2016</td>
                                <td>2016</td>
                                <td><span type="button" class="label label-danger btn-xs">Tidak</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection