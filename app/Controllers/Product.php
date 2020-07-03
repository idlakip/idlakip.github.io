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
            'product_description' => $this->request->getPost('product_description')
        ];

        $this->ProductModel->insert_product($data);
        return redirect()->to(base_url('product'));
    }
}
