<?php

namespace App\Controllers;

use App\Models\DaftarModel;

class Daftar extends BaseController
{
    // protected $DaftarModel;
    public function __construct()
    {
        helper('form');
        $this->DaftarModel = new DaftarModel();
    }

    public function index()
    {
        $data = array(
            'title' => 'Input Peserta',
            'isi' => 'daftar/m_validation'
        );
        echo view('layout/m_wrapper', $data);
    }

    //--------------------------------------------------------------------
    public function save()
    {
        $validation = \Config\Services::validation();
        // mengambil file upload
        $image = $this->request->getFile('photo');
        // merandom nama file yang diupload
        $name = $image->getRandomName();

        $data = [
            'nrp' => $this->request->getPost('nrp'),
            'nama' => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
            'photo' => $name,
        ];

        if ($validation->run($data, 'daftar') == FALSE) {
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('daftar/index'));
        } else {
            $image->move(ROOTPATH . 'public/foto_pendaftar', $name);
            $this->DaftarModel->insert_daftar($data);
            session()->setFlashdata('success', 'Data pendaftar berhasil ditambahkan');
            return redirect()->to(base_url('daftar/index'));
        }
    }
    //--------------------------------------------------------------------


}
