<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('kaprodi.kurikulum.v_kurikulum');
});

route::view('/profillulusan', 'kaprodi.profillulusan.v_profillulusan');
route::view('/pemetaanprofil', 'kaprodi.pemetaanprofil.v_pemetaanprofil');
route::view('/cpl', 'kaprodi.cpl.v_cpl');
route::view('/pemetaancpl', 'kaprodi.pemetaancpl.v_pemetaancpl');
route::view('/matakuliah', 'kaprodi.matakuliah.v_matakuliah');
