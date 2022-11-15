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

        return view("content/viewMasterAdmin", $data);
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
        // $listBuku = $this->modelBuku->findAll();

        $data = [
            'title' => "Perpustakaan"
            // 'listBuku' => $listBuku
        ];

        return view('content/viewLibrary', $data);
    }

    public function profile()
    {
        $data = [
            'title' => "Profile"
        ];

        return view('content/viewProfile', $data);
    }

    public function dashboard()
    {
        $data = [
            'title' => "Dashboard"
        ];

        return view('content/viewDashboard', $data);
    }

    public function dummy()
    {
        $data = [
            'title' => "dummy"
        ];

        return view('content/viewDummy', $data);
    }

    public function user()
    {
        $listAkun = $this-> modelAkun->where('validasi', 1)->findAll();
        $listValidating = $this->modelAkun->where('validasi', 0)->findAll();

        $data = [
            'title' => "User",
            'listAkun' => $listAkun,
            'listValidating' => $listValidating
        ];

        return view('content/viewUser', $data);
    }

    public function pinjam($idBuku)
    {
        $buku = $this->modelBuku->where('id', $idBuku)->first();

        $this->decreaseBook($idBuku, $buku);

        return $this->perpustakaan();
    }

    public function simpanBuku(){
        $data = [
            'id' => $this->request->getVar('id'),
            'isbn' => $this->request->getVar('isbn'),
            'judul' => $this->request->getVar('judul'),
            'pengarang' => $this->request->getVar('pengarang'),
            'penerbit' => $this->request->getVar('penerbit'),
            'terbit' => $this->request->getVar('terbit'),
            'jumlah' => $this->request->getVar('jumlah')
        ];

        $this->modelBuku->save($data);

        return redirect()->to('/perpustakaan');
    }

    public function updateBuku($idBuku)
    {
        $data = [
            'title' => "Update buku",
            'buku' => $this->modelBuku->where('id', $idBuku)->first()
        ];

        return view('content/viewBooksInput', $data);
    }

    public function decreaseBook($idBuku, $buku)
    {
        $data = [
            'jumlah' => $buku['jumlah'] - 1
        ];

        $this->modelBuku->update($idBuku, $data);
    }
}
