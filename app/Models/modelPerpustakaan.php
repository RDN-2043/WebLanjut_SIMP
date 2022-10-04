<?php

namespace App\Models;

use CodeIgniter\Model;

class modelPerpustakaan extends Model
{
    protected $table = "table_buku";
    protected $allowedFields = ['judul', 'pengarang'. 'penerbit', 'terbit', 'jumlah'];

    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'ditambahkan';
    protected $updatedField  = 'diperbarui';
}