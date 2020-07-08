<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\BeritaModel;

class Berita extends BaseController
{
    protected $BeritaModel;

    public function __construct()

    {
        // Auth
        if (session()->get('username') == '') {
            session()->getFlashdata('gagal', 'Anda belum login !!!');
            return redirect()->to(base_url('login'));
        }
        // end Auth
        $this->BeritaModel = new BeritaModel();
        $pager = \Config\Services::pager();
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
            'title' => 'Data Berita',
            'berita' => $this->BeritaModel->paginate(5, 'berita'),
            'pager' => $this->BeritaModel->pager,
            'isi' => 'berita/v_berita'
        ];
        echo view('layout/m_wrapper', $data);
    }

    public function tambah()
    {
        // Auth
        if (session()->get('username') == '') {
            session()->getFlashdata('gagal', 'Anda belum login !!!');
            return redirect()->to(base_url('login'));
        }
        // end Auth
        $data = [
            'title' => 'Tambah Data berita',
            'isi' => 'berita/v_news'
        ];
        echo view('layout/m_wrapper', $data);
    }

    public function save()
    {
        // Auth
        if (session()->get('username') == '') {
            session()->getFlashdata('gagal', 'Anda belum login !!!');
            return redirect()->to(base_url('login'));
        }
        // end Auth
        $data = [
            'berita_name' => $this->request->getPost('berita_name'),
            'berita_description' => $this->request->getPost('berita_description'),
            'created_at' => $this->request->getPost('created_at')
        ];

        $this->BeritaModel->insert_berita($data);
        session()->setFlashdata('success', 'Data berhasil ditambahkan');
        return redirect()->to(base_url('berita'));
    }

    public function edit($berita_id)
    {
        // Auth
        if (session()->get('username') == '') {
            session()->getFlashdata('gagal', 'Anda belum login !!!');
            return redirect()->to(base_url('login'));
        }
        // end Auth
        $data = [
            'title' => 'Edit Data berita',
            'berita' => $this->BeritaModel->edit_berita($berita_id),
            'isi' => 'berita/v_edit'
        ];
        echo view('layout/m_wrapper', $data);
    }

    public function update($berita_id)
    {
        // Auth
        if (session()->get('username') == '') {
            session()->getFlashdata('gagal', 'Anda belum login !!!');
            return redirect()->to(base_url('login'));
        }
        // end Auth
        $data = [
            'berita_name' => $this->request->getPost('berita_name'),
            'berita_description' => $this->request->getPost('berita_description'),
            'updated_at' => $this->request->getPost('updated_at')
        ];

        $this->BeritaModel->update_berita($data, $berita_id);
        session()->setFlashdata('success', 'Data berhasil diupdate!!!');
        return redirect()->to(base_url('berita'));
    }

    public function delete($berita_id)
    {
        // Auth
        if (session()->get('username') == '') {
            session()->getFlashdata('gagal', 'Anda belum login !!!');
            return redirect()->to(base_url('login'));
        }
        // end Auth
        $this->BeritaModel->delete_berita($berita_id);
        session()->setFlashdata('success', 'Data berhasil dihapus!!!');
        return redirect()->to(base_url('berita'));
    }
}
