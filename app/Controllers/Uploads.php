<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UploadsModel;

class Uploads extends BaseController
{
    protected $UploadsModel;

    public function __construct()
    {
        helper('form');
        $this->UploadsModel = new UploadsModel();
    }


    public function index()
    {
        if (!$this->validate([])) {
            $data = [
                'title'      => 'Upload Multiple',
                // 'data'       => $this->UploadsModel->get_upload(),
                // 'validation' => $this->validator,
                'isi'        => 'upload/m_uploads'
            ];
            echo view('layout/m_wrapper', $data);
        }
    }

    public function save()
    {
        $judul = $this->request->getPost('judul');
        $files = $this->request->getFiles();

        if ($files) {
            $random = rand(000, 999);

            $data_uploads = [
                'id_upload' => $random,
                'judul' => $judul
            ];
            $this->UploadsModel->insert_upload($data_uploads);

            foreach ($files['file_upload'] as $key => $img) {
                $data_galery = [
                    'id_upload' => $random,
                    'gambar'    => $img->getRandomName(),
                ];
                $this->UploadsModel->insert_galeries($data_galery);
                $img->move(ROOTPATH . 'public/folder_upload', $img->getRandomName());
            }
            session()->setFlashdata('success', 'File Data berhasil diuploads!!!');
            return redirect()->to(base_url('uploads'));
        }
    }


    // public function save()
    // {
    //     if ($this->request->getMethod() !== 'post') {
    //         return redirect()->to(base_url('upload/index'));
    //     }

    //     $validated = $this->validate([
    //         // 'gambar' => 'uploaded[gambar]|mime_in[gambar,image/jpg,image/gif,image/jpeg,image/png]|max_size[gambar,2000]'
    //         'gambar' => [
    //             'rules' => 'uploaded[gambar]|mime_in[gambar,image/jpg,image/gif,image/jpeg,image/png]|max_size[gambar,2000]',
    //             'errors' => [
    //                 'mime_in' => 'Hanya {field} yang diperbolehkan.'

    //             ]
    //         ]
    //     ]);

    //     if ($validated == FALSE) {
    //         return $this->index();
    //     } else {
    //         $file_gambar = $this->request->getFile('gambar');
    //         $file_gambar->move(ROOTPATH . 'public/folder_upload');

    //         $data = [
    //             'ket' => $this->request->getPost('ket'),
    //             'gambar' => $file_gambar->getName(),
    //             'csrf_test_name' => $this->request->getPost()
    //         ];
    //         $this->UploadsModel->insert_gambar($data);
    //         return redirect()->to(base_url('upload'))->with('success', 'Data berhasil di upload!!!');
    //     }
    // }

    // public function edit($id)
    // {
    //     if (!$this->validate([])) {
    //         $data = [
    //             'title'      => 'Edit Gambar',
    //             'data'       => $this->UploadsModel->edit_upload($id),
    //             'validation' => $this->validator,
    //             'isi'        => 'upload/m_edit'
    //         ];
    //         echo view('layout/m_wrapper', $data);
    //     }
    // }

    // public function gallery()
    // {
    //     $data = [
    //         'title'      => 'Gallery Upload Gambar',
    //         'dataupload' => $this->UploadsModel->get_upload(),
    //         'isi'        => 'upload/m_gallery'
    //     ];
    //     echo view('layout/m_wrapper', $data);
    // }



    // public function update($id)
    // {

    //     $data = [
    //         'ket'    => $this->request->getPost('ket'),
    //         // 'gambar' => $this->request->getName('gambar'),
    //         'csrf_test_name' => $this->request->getPost()

    //     ];

    //     $this->UploadsModel->update_upload($data, $id);
    //     session()->setFlashdata('success', 'Data berhasil diupdate!!!');
    //     return redirect()->to(base_url('upload'));
    // }
}
