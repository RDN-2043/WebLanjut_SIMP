<?php

namespace App\Models;

use CodeIgniter\Model;

class modelPinjam extends Model
{
    protected $table = "tabel_pinjam";
    protected $allowedFields = ['username', 'isbn'];

    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'ditambahkan';
    protected $updatedField  = 'diperbarui';
}
