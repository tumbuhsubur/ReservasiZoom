<?php

namespace App\Models;

use CodeIgniter\Model;

class ReservasiModel extends Model
{
  protected $table      = 'data_reservasi';
  // protected $primaryKey = 'idReservasi';
  protected $useTimestamps = true;
  // protected $allowedFields = ['idUser', 'nama', 'jenis_kegiatan', 'judul_kegiatan', 'slug', 'tanggal_kegiatan', 'jam_mulai', 'jam_selesai', 'validasi', 'link'];
  protected $allowedFields = ['nama', 'jenis_kegiatan', 'judul_kegiatan', 'slug', 'tanggal_kegiatan', 'jam_mulai', 'jam_selesai'];

  public function getReservasi($slug = false)
  {
    if ($slug == false) {
      return $this->findAll();
    }

    return $this->where(['slug' => $slug])->first();
  }
}
