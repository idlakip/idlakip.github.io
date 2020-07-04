<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UploadModel;

class Upload extends BaseController
{
    protected $UploadModel;

    public function __construct()
    {
        helper('form');
        $this->UploadModel = new UploadModel();
    }


    public function index()
    {
        $data = [
            'title'      => 'Upload Gambar',
            'dataupload' => $this->UploadModel->get_upload(),
            'validation' => $this->validator,
            'isi'        => 'upload/m_upload'
        ];
        echo view('layout/m_wrapper', $data);
    }

    public function save()
    {
        if ($this->request->getMethod() !== 'post') {
            return redirect()->to(base_url('upload'));
        }

        $validated = $this->validate([
            'gambar' => 'uploaded[gambar]|mime_in[gambar,image/jpg,image/gif,image/jpeg,image/png]|max_size[gambar,2000]'
        ]);

        if ($validated == FALSE) {
            return $this->index();
        } else {
            $file_gambar = $this->request->getFile('gambar');
            $file_gambar->move(ROOTPATH . 'public/upload');

            $data = [
                'ket' => $this->request->getPost('ket'),
                'gambar' => $file_gambar->getName()
            ];
            $this->UploadModel->insert_gambar($data);
            return redirect()->to(base_url('upload'))->with('success', 'Data berhasil di upload!!!');
        }
    }
}
