<?php

namespace App\Controllers;

use \App\Models\ReservasiModel;

class Reservasi extends BaseController
{
  protected $reservasiModel;
  public function __construct()
  {
    $this->reservasiModel = new ReservasiModel();
  }
  public function index()
  {
    // cara manual
    // $db = \Config\Database::connect();
    // $dbman = $db->query("SELECT * FROM data_reservasi");
    // foreach($dbman->getResultArray() as $row) {
    // dd($row);
    // }
    // ga di pakai!!! pakai cara yang benar !!!

    // $dbres = $this->reservasiModel->findAll();
    // $dbuser = $this->userModel->findAll();

    // $reservasiModel = new \App\Models\ReservasiModel(); 
    // atau seperti di bawah, tapi name space nya di set di atas jadi construct!!

    $dbres = $this->reservasiModel->findAll();

    $data = [
      'data_reservasi' => $this->reservasiModel->getReservasi()
      // 'data_user' => $dbuser
    ];

    return view('reservasi/index', $data);
  }

  public function detail($slug)
  {
    $drid = $this->reservasiModel->getReservasi($slug);
    $data = [
      "data_res" => $drid
    ];

    if (empty($data['data_res'])) {
      throw new \CodeIgniter\Exceptions\PageNotFoundException('Reservasi zoom ' . $slug . ' tidak ditemukan.');
    }
    return view('reservasi/detail', $data);
  }

  public function tambah()
  {
    // $drid = $this->reservasiModel->getReservasi($slug);
    $data = [
      'data_res' => 'data'
    ];
    // dd($data);
    return view('reservasi/tambah', $data);
  }

  public function save()
  {
    // dd($this->request->getVar());
    $slug = url_title($this->request->getVar('judul'), '-', true);
    $this->reservasiModel->save([
      'nama' => $this->request->getVar('nama'),
      'slug' => $slug,
      'jenis_kegiatan' => $this->request->getVar('jenis'),
      'judul_kegiatan' => $this->request->getVar('judul'),
      'tanggal_kegiatan' => $this->request->getVar('tanggal'),
      'jam_mulai' => $this->request->getVar('jam_mulai'),
      'jam_selesai' => $this->request->getVar('jam_selesai')
    ]);

    session()->setFlashdata('pesan', 'Data reservasi berhasil ditambahkan, konfirmasi link akan kami sampaikan melalui email');

    return redirect()->to('/reservasi');
  }
}
