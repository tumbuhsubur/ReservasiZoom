<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
  protected $table      = 'data_user';
  protected $primaryKey = 'idUser';
  protected $useTimestamps = true;
}
