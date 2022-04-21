@extends('layout.v_template')

@section('title', 'Profil Lulusan Prodi Teknologi Rekayasa Perangkat')

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <!-- <div class="box-header">
                <h3 class="box-title">Data Mata Kuliah</h3>
            </div> -->
            <div class="box-body ">
                <div class="card-body table-responsive p-0" style="height: responsive;">
                    <table id="dataTable" class="table table-striped table-body-fixed text-nowrap table-bordered table-hover">
                        <thead>
                            <tr>
                                <th width="30px">No</th>
                                <th>Profil Lulusan</th>
                                <th>Kualifikasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <tr>
                                <td>{{$no++}}</td>
                                <td>Analis Sistem (System Analyst)</td>
                                <td>Orang yang mampu menganalisis dan merancang perangkat lunak sesuai kebutuhan. [SKKNI-2017-044]</td>
                            </tr>
                            <tr>
                                <td>{{$no++}}</td>
                                <td>Perekayasa Perangkat Lunak (Software Engineer)</td>
                                <td>Orang yang mampu mengembangkan (Programmer), menguji dan memvalidasi perangkat lunak. [SKKNI-2016-282] [SKKNI-2017-047]</td>
                            </tr>
                            <tr>
                                <td>{{$no++}}</td>
                                <td>Administrator Basis Data</td>
                                <td>Orang yang mampu mendesain, mengimpmenetasikan, dan mengelola basis data. [SKKNI-2017-044]</td>
                            </tr>
                            <tr>
                                <td>{{$no++}}</td>
                                <td>Pengembang Game dan Multimedia</td>
                                <td>Orang yang mampu mengembangkan produk game dan multimedia.[SKKNI-2015-458]</td>
                            </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection