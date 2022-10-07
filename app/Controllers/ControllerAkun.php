<?php

namespace App\Controllers;

use App\Models\modelAkun;

class ControllerAkun extends BaseController
{
    public function signIn()
    {
        $username = $this->request->getVar('username');

        if (empty($this->findAccount($username))) {
            return redirect()->to('/viewSignInUp');
        }

        $password = $this->request->getVar('password');
        $akun = $this->signingIn($username, $password);

        if(empty($akun) || $akun['validasi'] == false) {
            return redirect()->to('/viewSignInUp');
        }

        switch ($akun['tipe']) {
            case "Master-Admin":
                return redirect()->to('/viewMasterAdmin');
                break;

            case "Admin":
                return redirect()->to('/viewAdmin');
                break;

            case "User":
                return redirect()->to('/viewUser');
                break;
        }

        session_start();
        $_SESSION['username'] = $akun['username'];

        $data = [
            'title' => "Dashboard"
        ];

        return view('content/viewPerpustakaan', $data);
    }

    public function signUpAdmin()
    {
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        $this->signUp($username, $password, "Admin", true);
    }

    public function signUpUser()
    {
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        $this->signUp($username, $password, "User", false);
    }

    public function signUp($username, $password, $tipe, $validasi)
    {
        if(!empty($this->findAccount($username))) {
            return redirect()->to('/viewSignInUp');
        }

        $this->modelAkun->save([
            'username' => $username,
            'password' => $password,
            'tipe' => $tipe,
            'validasi' => $validasi
        ]);

        return redirect()->to('/viewDashboard');
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
