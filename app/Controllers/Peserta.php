<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\PesertaModel;

class Peserta extends BaseController
{
    protected $PesertaModel;

    public function __construct()
    {
        // Auth
        if (session()->get('username') == '') {
            session()->getFlashdata('gagal', 'Anda belum login !!!');
            return redirect()->to(base_url('login'));
        }
        // end Auth
        $this->PesertaModel = new PesertaModel();
    }

    public function index()
    {
        // Auth
        if (session()->get('username') == '') {
            session()->getFlashdata('gagal', 'Anda belum login !!!');
            return redirect()->to(base_url('login'));
        }
        // end Auth
        $data = [
            'title' => 'Data Peserta',
            'rekap' => $this->PesertaModel->get_peserta(),
            'isi' => 'peserta/v_peserta'
        ];
        echo view('layout/m_wrapper', $data);
    }
}
