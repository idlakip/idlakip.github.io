<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\PesertaModel;

class Peserta extends BaseController
{
    protected $PesertaModel;

    public function __construct()
    {
        $this->PesertaModel = new PesertaModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Data Peserta',
            'rekap' => $this->PesertaModel->get_peserta(),
            'isi' => 'peserta/v_peserta'
        ];
        echo view('layout/m_wrapper', $data);
    }
}
