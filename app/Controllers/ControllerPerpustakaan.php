<?php

namespace App\Controllers;

use App\Models\modelAkun;
use App\Models\modelBuku;
use App\Models\modelPinjam;

class ControllerPerpustakaan extends BaseController
{
    private $modelBuku;
    private $modelAkun;
    private $modelPinjam;

    public function __construct()
    {
        $this->modelBuku = new modelBuku();
        $this->modelAkun = new modelAkun();
        $this->modelPinjam = new modelPinjam();
    }

    public function test()
    {
        $data = [
            'title' => "test"
        ];

        return view("content/viewBooksInput", $data);
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

    public function returnbook()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        if (isset($_SESSION['akun'])) {
            $akun = $_SESSION['akun'];
        }

        $listPinjam = $this->modelPinjam->where('username', $akun['username'])->findAll();
        $listBuku = array();

        foreach($listPinjam as $pinjam){
            $listBuku[] = $this->modelBuku->where('isbn', $pinjam['isbn'])->first();
        }

        $data = [
            'title' => "returnbook",
            'listBuku' => $listBuku,
            'akun' => $akun
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

    public function admin()
    {
        $listAkun = $this->modelAkun->where('validasi', 1)->findAll();

        $data = [
            'title' => "Admin",
            'listAkun' => $listAkun
        ];

        return view('content/viewAdmin', $data);
    }

    public function pinjam($idBuku)
    {
        $buku = $this->modelBuku->where('id', $idBuku)->first();

        $this->decreaseBook($idBuku, $buku);

        return $this->libraryUser();
    }

    public function kembalikanBuku($idBuku){
        $this->increaseBook($idBuku);
        $this->modelPinjam->where('isbn', $this->modelBuku->where('id', $idBuku)->first()['isbn'])->delete();

        return $this->returnbook();
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

        return redirect()->to('/libraryadmin');
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

    public function increaseBook($idBuku)
    {
        $data = [
            'jumlah' => $this->modelBuku->where('id', $idBuku)->first()['jumlah'] + 1
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
