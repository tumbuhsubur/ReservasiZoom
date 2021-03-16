<?php

namespace App\Controllers;

use \App\Models\ReservasiModel;

class Pages extends BaseController
{
    protected $reservasiModel;
    public function __construct()
    {
        $this->reservasiModel = new ReservasiModel();
    }
    public function index()
    {
        $dbres = $this->reservasiModel->findAll();
        // $dbuser = $this->userModel->findAll();
        $data = [
            'data_reservasi' => $dbres
            // 'data_user' => $dbuser
        ];

        return view('pages/beranda', $data);
    }

    public function kontak()
    {
        return view('pages/kontak');
    }

    public function tentang()
    {
        return view('pages/tentang');
    }

    public function konten()
    {
        return view('pages/konten');
    }
}
