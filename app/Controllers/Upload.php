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
        if (!$this->validate([]))
            {
        $data = [
            'title'      => 'Upload Gambar',
            'data'       => $this->UploadModel->get_upload(),
            'validation' => $this->validator,
            'isi'        => 'upload/m_upload'
        ];
        echo view('layout/m_wrapper', $data);
        }
    }

    public function edit($id)
    {
        if (!$this->validate([]))
            {
        $data = [
            'title'      => 'Edit Gambar',
            'data'       => $this->UploadModel->edit_upload($id),
            'validation' => $this->validator,
            'isi'        => 'upload/m_edit'
        ];
        echo view('layout/m_wrapper', $data);
    }
}

    public function gallery()
    {
        $data = [
            'title'      => 'Gallery Upload Gambar',
            'dataupload' => $this->UploadModel->get_upload(),
            'isi'        => 'upload/m_gallery'
        ];
        echo view('layout/m_wrapper', $data);
    }

    public function save()
    {
        if ($this->request->getMethod() !== 'post') {
            return redirect()->to(base_url('upload/index'));
        }

        $validated = $this->validate([
            // 'gambar' => 'uploaded[gambar]|mime_in[gambar,image/jpg,image/gif,image/jpeg,image/png]|max_size[gambar,2000]'
            'gambar' => [
                'rules' => 'uploaded[gambar]|mime_in[gambar,image/jpg,image/gif,image/jpeg,image/png]|max_size[gambar,2000]',
                'errors' => [
                    'mime_in' => 'Hanya {field} yang diperbolehkan.'

                ]
            ]
        ]);

        if ($validated == FALSE) {
            return $this->index();
        } else {
            $file_gambar = $this->request->getFile('gambar');
            $file_gambar->move(ROOTPATH . 'public/folder_upload');

            $data = [
                'ket' => $this->request->getPost('ket'),
                'gambar' => $file_gambar->getName(),
                'csrf_test_name' => $this->request->getPost()
            ];
            $this->UploadModel->insert_gambar($data);
            return redirect()->to(base_url('upload'))->with('success', 'Data berhasil di upload!!!');
        }
    }

    public function update($id)
    {
       
        $data = [
            'ket'    => $this->request->getPost('ket'),
            // 'gambar' => $this->request->getName('gambar'),
            'csrf_test_name' => $this->request->getPost()

        ];

        $this->UploadModel->update_upload($data, $id);
        session()->setFlashdata('success', 'Data berhasil diupdate!!!');
        return redirect()->to(base_url('upload'));
    }
}
