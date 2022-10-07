<?php

namespace App\Controllers;

use App\Models\modelBuku;

class ControllerPerpustakaan extends BaseController
{
    public function index()
    {
        $modelBuku = new modelBuku();
        $listBuku = $modelBuku->findAll();

        $data = [
                'title' => "Perpustakaan",
                'listBuku' => $listBuku
            ];

        return view('content/viewPerpustakaan', $data);
    }

    public function pinjam($idBuku)
    {
        $modelBuku = new modelBuku();
        $buku = $modelBuku->where('id', $idBuku)->first();

        $this->decreaseBook($idBuku, $buku);
        
        //return redirect()->to('/viewDaftarPinjam');
        return $this->index();
    }

    public function decreaseBook($idBuku, $buku)
    {
        $modelBuku = new modelBuku();

        $data = [
            'jumlah' => $buku['jumlah'] - 1
        ];

        $modelBuku->update($idBuku, $data);
    }
}
