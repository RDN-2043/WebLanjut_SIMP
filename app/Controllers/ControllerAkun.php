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
            return redirect()->to('/account');
        }

        $password = $this->request->getVar('password');
        $akun = $this->signingIn($username, $password);

        if(empty($akun) || $akun['validasi'] == 0) {
            return redirect()->to('/account');
        }

        session_start();
        $_SESSION['username'] = $akun['username'];

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

    public function signUpAdmin()
    {
        $username = $this->request->getVar('username');
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $this->signUp($username, $email, $password, "Admin", true);
    }

    public function signUpUser()
    {
        $username = $this->request->getVar('username');
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        return $this->signUp($username, $email, $password, "User", false);
    }

    public function signUp($username, $email, $password, $tipe, $validasi)
    {
        if(!empty($this->findAccount($username))) {
            return redirect()->to('/account');
        }

        $this->modelAkun->save([
            'username' => $username,
            'email' => $email,
            'password' => $password,
            'tipe' => $tipe,
            'validasi' => $validasi
        ]);

        return redirect()->to('/account');
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
