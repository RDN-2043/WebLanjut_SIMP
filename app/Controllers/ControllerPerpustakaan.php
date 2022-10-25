<?php

namespace App\Controllers;

use App\Models\modelAkun;
use App\Models\modelBuku;

class ControllerPerpustakaan extends BaseController
{
    private $modelBuku;
    private $modelAkun;

    public function __construct()
    {
        $this->modelBuku = new modelBuku();
        $this->modelAkun = new modelAkun();
    }

    public function test()
    {
        $data = [
            'title' => "test"
        ];

        return view("content/viewUser", $data);
    }

    public function register()
    {
        $data = [
            'title' => "Register"
        ];

        return view("content/viewAdminRegister", $data);
    }

    public function history()
    {
        $data = [
            'title' => "History"
        ];

        return view("content/viewHistory", $data);
    }

    public function signIn()
    {
        $_SESSION['akun'] = null;

        $data = [
            'title' => "SignIn"
        ];

        return view("content/viewAccount", $data);
    }

    public function landingPage()
    {
        $data = [
            'title' => "Landing Page"
        ];

        return view('content/viewLandingPage', $data);
    }

    public function perpustakaan()
    {
        $listBuku = $this->modelBuku->findAll();

        $data = [
            'title' => "Perpustakaan",
            'listBuku' => $listBuku
        ];

        return view('content/viewPerpustakaan', $data);
    }

    public function profile()
    {
        $data = [
            'title' => "Profile"
        ];

        return view('content/viewProfile', $data);
    }

    public function user()
    {
        $listAkun = $this->modelAkun->findAll();

        $data = [
            'title' => "User",
            'listAkun' => $listAkun
        ];

        return view('content/viewUser', $data);
    }

    public function pinjam($idBuku)
    {
        $modelBuku = new modelBuku();
        $buku = $modelBuku->where('id', $idBuku)->first();

        $this->decreaseBook($idBuku, $buku);

        return $this->perpustakaan();
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
