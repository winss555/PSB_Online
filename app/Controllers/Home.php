<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'PSB Online',
            'subtitle' => 'Home',
        ];
        return view('v_home', $data);
    }
}
