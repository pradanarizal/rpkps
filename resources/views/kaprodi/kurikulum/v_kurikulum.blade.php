@extends('layout.v_template')

@section('title', 'Kurikulum Prodi Teknologi Rekayasa Perangkat')

@section('content')
<!-- dea -->
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <a href="/kurikulum/add" class="btn btn-primary">Tambah Kurikulum</a><br>
                <!-- <button type="button" class="btn btn-primary">
                    <i class="fa fa-add"></i><span>Mata Kuliah</span></button> -->
            </div>
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

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection