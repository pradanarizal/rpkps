@extends('layout.v_template')

@section('title', 'Ketua Program Studi DTEDI')

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
                                <th>Kaprodi</th>
                                <th>Nama Dosen</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <tr>
                                <td width="50px">{{$no++}}</td>
                                <td width="200px">Kaprodi Teknologi Rekayasa Instrumentasi Kontrol TA 2021/2022</td>
                                <td width="200px"></td>
                                <td><span type="button" class="label label-success btn-xs">Aktif</span></td>
                                <td><span type="button" class="label label-warning btn-xs">Edit</span></td>
                            </tr>
                            <tr>
                                <td>{{$no++}}</td>
                                <td>Kaprodi Teknologi Rekayasa Perangkat Lunak TA 2021/2022</td>
                                <td>Muhammad Fakhrurrifqi, S.Kom., M.Cs.</td>
                                <td><span type="button" class="label label-success btn-xs">Aktif</span></td>
                                <td><span type="button" class="label label-warning btn-xs">Edit</span></td>
                            </tr>
                            <tr>
                                <td>{{$no++}}</td>
                                <td>Kaprodi Teknologi Rekayasa Internet TA 2021/2022</td>
                                <td>Dr. Ronald Adrian, S.T., M.Eng.</td>
                                <td><span type="button" class="label label-success btn-xs">Aktif</span></td>
                                <td><span type="button" class="label label-warning btn-xs">Edit</span></td>
                            </tr>
                            <tr>
                                <td>{{$no++}}</td>
                                <td>Kaprodi Teknologi Rekayasa Elektro TA 2021/2022</td>
                                <td>Ma’un Budiyanto, S.T., M.T.</td>
                                <td><span type="button" class="label label-success btn-xs">Aktif</span></td>
                                <td><span type="button" class="label label-warning btn-xs">Edit</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection