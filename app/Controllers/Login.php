<?php

namespace App\Controllers;

use App\Models\LoginModel;
use App\Controllers\Home;

class Login extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->LoginModel = new LoginModel();
    }

    public function index()
    {
        echo view('auth/_login');
    }

    public function cek_login()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $cek = $this->LoginModel->cek_login($username, $password);

        if (($cek['username'] == $username) && ($cek['password'] == $password)) {
            // Jika username dan password betul
            session()->set('username', $cek['username']);
            session()->set('nama_user', $cek['nama_user']);
            session()->set('level', $cek['level']);
            return redirect()->to(base_url('home'));
        } else {
            // Jika username dan password salah 
            session()->getFlashdata('gagal', 'Username atau Password Salah !!!');
            return redirect()->to(base_url('login'));
        }
    }

    public function logout()
    {
        // session()->destroy();
        session()->setTempdata('username');
        session()->setTempdata('nama_user');
        session()->setTempdata('level');

        session()->getFlashdata('logout', 'Anda berhasil Logout !!!');
        return redirect()->to(base_url('login'));
    }
}
