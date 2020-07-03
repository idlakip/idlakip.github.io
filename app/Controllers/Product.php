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
}
