<?php

namespace App\Controllers;

use App\Models\modelAkun;
use App\Controllers\ControllerPerpustakaan;

class ControllerAkun extends BaseController
{
    private $modelAkun;

    public function __construct()
    {
        $this->modelAkun = new modelAkun();
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
                        return redirect()->to('/viewMasterAdmin');
                        break;

                    case "Admin":
                        return redirect()->to('/viewAdmin');
                        break;

                    case "User":
                        return redirect()->to('/perpustakaan');
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

    public function logOut(){
        session_destroy();

        return redirect()->to('/viewSignInUp');
    }

    public function findAccount($username){
        return $this->modelAkun->where('username', $username)->first();
    }

    public function signingIn($username, $password){
        return $this->modelAkun->where('username', $username, 'password', $password)->first();
    }

    public function validateUserAccount()
    {
        $modelAkun = new modelAkun();
        $username = $this->request->getVar('username');

        $data = [
            'validasi' => true
        ];

        $modelAkun->update($username, $data);
    }
}
