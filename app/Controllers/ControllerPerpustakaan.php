<?php

namespace App\Controllers;

use App\Models\modelBuku;

class ControllerPerpustakaan extends BaseController
{
    public function test()
    {
        $data = [
            'title' => "test"
        ];

        return view("content/viewProfile", $data);
    }

    public function signIn()
    {
        $_SESSION['akun'] = null;

        $data = [
            'title' => "SignIn"
        ];

<<<<<<< Updated upstream
        return view("content/viewAccount", $data);
    }

    public function landingPage()
    {
        $data = [
            'title' => "Landing Page"
        ];

        return view('content/viewLandingPage', $data);
=======
        return view('content/viewAdminRegister', $data);
>>>>>>> Stashed changes
    }

    public function perpustakaan()
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

        return $this->perpustakaan();
    }

    public function profile()
    {
        $data = [
            'title' => "Profile"
        ];

        return view('content/viewProfile', $data);
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
