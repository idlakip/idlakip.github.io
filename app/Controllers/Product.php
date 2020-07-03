<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ProductModel;

class Product extends BaseController
{
    protected $ProductModel;

    public function __construct()
    {
        $this->ProductModel = new ProductModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Data Product',
            'product' => $this->ProductModel->get_product(),
            'isi' => 'product/v_lists'
        ];
        echo view('layout/m_wrapper', $data);
    }

    public function tambah()
    {
        $data = [
            'title' => 'Tambah Data Product',
            'isi' => 'product/v_add'
        ];
        echo view('layout/m_wrapper', $data);
    }

    public function save()
    {
        $data = [
            'product_name' => $this->request->getPost('product_name'),
            'product_description' => $this->request->getPost('product_description'),
            'created_at' => $this->request->getPost('created_at')
        ];

        $this->ProductModel->insert_product($data);
        session()->setFlashdata('success', 'Data berhasil ditambahkan');
        return redirect()->to(base_url('product'));
    }

    public function edit($product_id)
    {
        $data = [
            'title' => 'Edit Data Product',
            'product' => $this->ProductModel->edit_product($product_id),
            'isi' => 'product/v_edit'
        ];
        echo view('layout/m_wrapper', $data);
    }

    public function update($product_id)
    {
        $data = [
            'product_name' => $this->request->getPost('product_name'),
            'product_description' => $this->request->getPost('product_description'),
            'updated_at' => $this->request->getPost('updated_at')
        ];

        $this->ProductModel->update_product($data, $product_id);
        session()->setFlashdata('success', 'Data berhasil diupdate!!!');
        return redirect()->to(base_url('product'));
    }

    public function delete($product_id)
    {
        $this->ProductModel->delete_product($product_id);
        session()->setFlashdata('success', 'Data berhasil dihapus!!!');
        return redirect()->to(base_url('product'));
    }
}
