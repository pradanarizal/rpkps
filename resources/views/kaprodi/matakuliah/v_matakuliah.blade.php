@extends('layout.v_template')

@section('title', 'Mata Kuliah')

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <a href="/kurikulum/add">
                    <button type="button" class="btn btn-warning" style="float: right;">
                        <i class="fa fa-print" style="margin-right:10px;"></i><span>Cetak Mata Kuliah</span>
                    </button>
                </a>
            </div>
            <div class="box-body ">
                <div class="card-body">
                    <table class="table table-striped text-nowrap table-bordered table-hover">
                        <thead>
                            <tr>
                                <th rowspan="2" style="vertical-align: middle; text-align: center;">No</th>
                                <th rowspan="2" style="vertical-align: middle; text-align: center;">Kode Mata Kuliah</th>
                                <th rowspan="2" style="vertical-align: middle; text-align: center;">Nama Mata Kuliah</th>
                                <th rowspan="2" style="vertical-align: middle; text-align: center;">SKS</th>
                                <th colspan="2" style="text-align: center;">Jam</th>
                            </tr>
                            <tr>
                                <th>Teori</th>
                                <th>Praktek</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <tr>
                                <td>{{$no++}}</td>
                                <td>V3KI3103</td>
                                <td>Keamanan Sistem Informasi</td>
                                <td>2</td>
                                <td width="40px">90</td>
                                <td width="40px">-</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th colspan="3" style="vertical-align: middle; text-align: center;">Jumlah</th>
                                <th>2</th>
                                <th>90</th>
                                <th>-</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection