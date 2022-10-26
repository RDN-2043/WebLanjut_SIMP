<?php

namespace App\Controllers;

use App\Controllers\ControllerPerpustakaan;
use App\Models\modelAkun;
use App\Models\modelBuku;
use App\Models\modelPinjam;

class ControllerAkun extends BaseController
{
    private $controllerPerpustakaan;
    private $modelAkun;
    private $modelBuku;
    private $modelPinjam;

    public function __construct()
    {
        $this->controllerPerpustakaan = new ControllerPerpustakaan();
        $this->modelAkun = new modelAkun();
        $this->modelBuku = new modelBuku();
        $this->modelPinjam = new modelPinjam();
    }

    public function signIn()
    {
        $username = $this->request->getVar('username');

        if (empty($this->findAccount($username))) {
            echo "<script>alert('Username/Password tidak sesuai!');window.location.href='account';</script>";
        }
        else {
            $password = $this->request->getVar('password');
            $akun = $this->signingIn($username, $password);

            if (empty($akun) || $akun['validasi'] == 0) {

                echo "<script>alert('Akun belum divalidasi!');window.location.href='account';</script>";
            } else {
                session_start();
                $_SESSION['akun'] = $akun;

                switch ($akun['tipe']) {
                    case "Master-Admin":
                        return redirect()->to('/masteradmin');
                        break;

                    case "Admin":
                        return redirect()->to('/admin');
                        break;

                    case "User":
                        return redirect()->to('/user');
                        break;
                }
            }
        }
    }

    public function signUpAdmin()
    {
        $username = $this->request->getVar('username');
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        return $this->signUp($username, $email, $password, "Admin", true, "register", "register");
    }

    public function signUpUser()
    {
        $username = $this->request->getVar('username');
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        return $this->signUp($username, $email, $password, "User", false, "account", "account");
    }

    public function signUp($username, $email, $password, $tipe, $validasi, $signUpSuccess, $signUpFailed)
    {
        if(!empty($this->findAccount($username))) {
            echo "<script>alert('Username telah digunakan!');window.location.href='$signUpFailed';</script>";
        }
        else {
            $this->modelAkun->save([
                'username' => $username,
                'email' => $email,
                'password' => $password,
                'tipe' => $tipe,
                'validasi' => $validasi
            ]);

            echo "<script>alert('Akun berhasil dibuat!');window.location.href='$signUpSuccess';</script>";
        }
    }

    public function masterAdmin()
    {
        $totalAdmin = count($this->modelAkun->where('tipe', "Admin")->findAll());
        $totalUser = count($this->modelAkun->where('tipe', "User")->findAll());
        $totalBuku = count($this->modelBuku->findAll());
        $totalHistory = count($this->modelPinjam->findAll());

        $data = [
            'title' => "Master Admin",
            'totalAdmin' => $totalAdmin,
            'totalUser' => $totalUser,
            'totalBuku' => $totalBuku,
            'totalHistory' => $totalHistory
        ];

        return view("content/viewMasterAdmin", $data);
    }

    public function admin()
    {
        $data = [
            'title' => "Admin"
        ];

        return view("content/viewAdmin", $data);
    }

    public function user()
    {
        $data = [
            'title' => "User"
        ];

        return view("content/viewPerpustakaan", $data);
    }

    public function logOut(){
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        session_destroy();

        return redirect()->to('/account');
    }

    public function delete($username){
        $this->modelAkun->where('username', $username)->delete();

        echo "<script>alert('Akun berhasil dihapus!');window.location.href='user';</script>";
    }

    public function findAccount($username){
        return $this->modelAkun->where('username', $username)->first();
    }

    public function signingIn($username, $password){
        return $this->modelAkun->where('username', $username, 'password', $password)->first();
    }

    public function validateUserAccount($username)
    {
        $data = [
            'validasi' => 1
        ];

        $this->modelAkun->set($data)->where('username', $username)->update();
        return $this->controllerPerpustakaan->validation();
    }
}
