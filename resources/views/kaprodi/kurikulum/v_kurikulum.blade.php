@extends('layout.v_template')

@section('title', 'Kurikulum Prodi Teknologi Rekayasa Perangkat')

@section('content')
<!-- Default box -->
<div class="box">
    <!-- /.box-header -->

    <table id="t_kurikulum" class="table table-bordered table-striped">
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
                <td width="500px">2021</td>
                <td><button type="button" class="btn btn-success btn-sm">Aktif</button></td>
            </tr>
            <tr>
                <td>{{$no++}}</td>
                <td>Kurikulum 2021</td>
                <td>2021</td>
                <td><button type="button" class="btn btn-danger btn-sm">Tidak</button></td>
            </tr>
            <tr>
                <td>{{$no++}}</td>
                <td>Kurikulum 2016</td>
                <td>2016</td>
                <td><button type="button" class="btn btn-danger btn-sm">Tidak</button></td>
            </tr>
        </tbody>
    </table>

    <!-- /.box-body -->
</div>
<!-- /.box -->
@endsection