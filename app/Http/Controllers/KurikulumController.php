<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KaprodiModel;

class KurikulumController extends Controller
{
    public function __construct()
    {
        $this->KaprodiModel = new KaprodiModel();
    }
    public function index()
    {
        $data = [
            'kaprodi' => $this->KaprodiModel->allData(),
        ];
        return view('kaprodi.kurikulum.v_kurikulum', $data);
    }
}
