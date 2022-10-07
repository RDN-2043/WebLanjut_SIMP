<?php

namespace App\Models;

use CodeIgniter\Model;

class modelBuku extends Model
{
    protected $table = "tabel_buku";
    protected $allowedFields = ['judul', 'pengarang', 'penerbit', 'terbit', 'jumlah'];

    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'ditambahkan';
    protected $updatedField  = 'diperbarui';
}