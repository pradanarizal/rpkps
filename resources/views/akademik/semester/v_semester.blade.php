@extends('layout.v_template')

@section('title', 'Semester')

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
                                <th>Semester</th>
                                <th>Tanggal Mulai</th>
                                <th>Tanggal Akhir</th>
                                <th>Aktif</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <tr>
                                <td width="50px">{{$no++}}</td>
                                <td width="200px">Semester Genap 2021/2022</td>
                                <td width="200px">2 Februari 2022</td>
                                <td width="200px">31 Juli 2022</td>
                                <td><span type="button" class="label label-success btn-xs">Ya</span></td>
                                <td width="200px"></td>
                            </tr>
                            <tr>
                                <td>{{$no++}}</td>
                                <td>Semester Gasal 2021/2022</td>
                                <td>1 Agustus 2021</td>
                                <td>31 Januari 2022</td>
                                <td><span type="button" class="label label-danger btn-xs">Tidak</span></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>{{$no++}}</td>
                                <td>Semester Antara 2021/2022</td>
                                <td>14 Februari 2022</td>
                                <td>31 Oktober 2022</td>
                                <td><span type="button" class="label label-danger btn-xs">Tidak</span></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>{{$no++}}</td>
                                <td>Semester Genap 2020/2021</td>
                                <td>4 Januari 2021</td>
                                <td>30 Juli 2021</td>
                                <td><span type="button" class="label label-danger btn-xs">Tidak</span></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>{{$no++}}</td>
                                <td>Semester Gasal 2020/2021</td>
                                <td>1 Juli 2020</td>
                                <td>31 Januari 2021</td>
                                <td><span type="button" class="label label-danger btn-xs">Tidak</span></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>{{$no++}}</td>
                                <td>Semester Genap 2019/2020</td>
                                <td>2 Januari 2020</td>
                                <td>31 Juli 2020</td>
                                <td><span type="button" class="label label-danger btn-xs">Tidak</span></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>{{$no++}}</td>
                                <td>Semester Gasal 2019/2020</td>
                                <td>1 Juli 2019</td>
                                <td>31 Januari 2020</td>
                                <td><span type="button" class="label label-danger btn-xs">Tidak</span></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>{{$no++}}</td>
                                <td width="200px">Semester Genap 2018/2019</td>
                                <td>1 Januari 2019</td>
                                <td>31 Juli 2019</td>
                                <td><span type="button" class="label label-danger btn-xs">Tidak</span></td>
                                <td width="200px"></td>
                            </tr>
                            <tr>
                                <td>{{$no++}}</td>
                                <td>Semester Gasal 2018/2019</td>
                                <td>6 Agustus 2018</td>
                                <td>31 Januari 2019</td>
                                <td><span type="button" class="label label-danger btn-xs">Tidak</span></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>{{$no++}}</td>
                                <td>Semester Genap 2017/2018</td>
                                <td>2 Januari 2018</td>
                                <td>31 Juli 2018</td>
                                <td><span type="button" class="label label-danger btn-xs">Tidak</span></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection