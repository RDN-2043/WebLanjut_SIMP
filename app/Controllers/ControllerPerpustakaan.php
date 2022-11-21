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

        return view("content/viewInformation", $data);
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

    public function libraryAdmin()
    {
        // $listBuku = $this->modelBuku->findAll();

        $data = [
            'title' => "Daftar Buku",
            'listBuku' => $this->modelBuku->findAll()
        ];

        return view('content/viewLibraryAdmin', $data);
    }

    public function libraryUser()
    {
        // $listBuku = $this->modelBuku->findAll();

        $data = [
            'title' => "Perpustakaan",
            'listBuku' => $this->modelBuku->findAll()
        ];

        return view('content/viewLibraryUser', $data);
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

    public function returnbook()
    {
        $data = [
            'title' => "returnbook"
        ];

        return view('content/viewReturnBook', $data);
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

        return $this->libraryUser();
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

    public function infoBuku($idBuku){
        $data = [
            'title' => "Informasi Buku",
            'buku' => $this->modelBuku->where('id', $idBuku)->first()
        ];

        return view('content/viewInformation', $data);
    }
}
