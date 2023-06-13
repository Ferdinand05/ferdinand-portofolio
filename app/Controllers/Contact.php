<?php

namespace App\Controllers;

use App\Models\DataModel;
use Config\App;

class Contact extends BaseController
{
    protected $DataModel;
    protected $helpers = 'form';


    public function __construct()
    {
        $this->DataModel = new \App\Models\DataModel();
    }

    public function index()
    {
        session();

        $data = [
            'title' => 'Contact',
            'validation' => \Config\Services::validation()
        ];

        return view('contact/index', $data);
    }

    public function add()
    {

        if (!$this->validate([
            'emailUser' => 'valid_email|required',
            'nama' => 'alpha_numeric_space|required',
            'messages' => 'string'
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->back()->with('validation', $validation);
        }


        $email   = $this->request->getVar('emailUser');
        $username = $this->request->getVar('nama');
        $messages = $this->request->getVar('messages');
        $data = [
            'email' => $email,
            'username' => $username,
            'messages' => $messages,
        ];
        $this->DataModel->insert($data);
        session()->setFlashdata('pesan', 'Data/Pesan Berhasil Terkirim!!');
        return redirect()->to(base_url() . 'contact');
    }
}