<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KaprodiModel;

// class KurikulumController extends Controller
// {
//     public function __construct()
//     {
//         $this->KaprodiModel = new KaprodiModel();
//     }
//     public function index()
//     {
//         $data = [
//             'kaprodi' => $this->KaprodiModel->allData(),
//         ];
//         return view('kaprodi.kurikulum.v_kurikulum', $data);
//     }
//     public function add()
//     {
//         return view('kaprodi.kurikulum.v_addkurikulum');
//     }
//     public function insert()
//     {
//         Request()->validate([
//             'nama_kaprodi' => 'required',
//             'prodi' => 'required',
//             'foto_kaprodi' => 'required|mimes:jpg,jpeg,png|max:1024',
//         ]);
//     }
// }
