<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelPekerjaan;

class Pekerjaan extends BaseController
{
    public function __construct()
    {
        $this->ModelPekerjaan = new ModelPekerjaan();
        helper('form');
    }
    public function index() 
    {
        $data = [
            'title' => 'PSB Online',
            'subtitle' => 'Pekerjaan',
            'pekerjaan' => $this->ModelPekerjaan->getAllData(),
        ];
        return view('admin/v_pekerjaan', $data);
    }

    public function insertData()
    {
        $data = [
            'pekerjaan' => $this->request->getPost(),
        ];

        $this->ModelPekerjaan->insertData($data);
        session()->setFlashdata('tambah','Data Berhasil Di Tambahkan');
        return redirect()->to(base_url('pekerjaan'));
    }
}
