<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Admin extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'PSB Online',
            'subtitle' => 'Home',
        ];
        return view('admin/v_dashboard', $data);
    }
}
