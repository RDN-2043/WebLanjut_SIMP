<?php

namespace App\Models;

use CodeIgniter\Model;

class modelAkun extends Model
{
    protected $table = "tabel_akun";
    protected $allowedFields = ['username', 'password', 'tipe', 'validasi'];

    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'ditambahkan';
    protected $updatedField  = 'diperbarui';
    protected $deletedField  = 'dihapus';
}