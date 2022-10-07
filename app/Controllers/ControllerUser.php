<?php

namespace App\Controllers;

use App\Models\modelPinjam;

class ControllerUser extends BaseController
{
    public function daftarPinjam()
    {
        $modelPinjam = new modelPinjam();
        $listPinjam = $modelPinjam->where('username', $_SESSION['username'])->findAll();

        $data = [
            'title' => 'Daftar Pinjam',
            'listPinjam' => $listPinjam
        ];

        return view('content/viewDaftarPinjam', $data);
    }
}
