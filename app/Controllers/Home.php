<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {

        $data = [
            'title' => 'Home | Profile'
        ];

        return view('home/index', $data);
    }
}
