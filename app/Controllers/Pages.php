<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Pages',
            'isi' => 'p/p_pages'
        ];
        echo view('layout/m_wrapper', $data);
    }

    //--------------------------------------------------------------------
    public function pages2()
    {
        $data = [
            'title' => 'pages 2',
            'isi' => 'p/p_pages_2'
        ];
        echo view('layout/m_wrapper', $data);
    }

    //--------------------------------------------------------------------

    public function pages3()
    {
        $data = [
            'title' => 'pages 3',
            'isi' => 'p/p_pages_3'
        ];
        echo view('layout/m_wrapper', $data);
    }

    //--------------------------------------------------------------------

    public function pages4()
    {
        $data = [
            'title' => 'pages 4',
            'isi' => 'p/p_pages_4'
        ];
        echo view('layout/m_wrapper', $data);
    }

    //--------------------------------------------------------------------

    public function menu1()
    {
        $data = [
            'title' => 'Menu 1',
            'isi' => 'menu/n_menu1'
        ];
        echo view('layout/m_wrapper', $data);
    }

    //--------------------------------------------------------------------

    public function menu2()
    {
        $data = [
            'title' => 'Menu 2',
            'isi' => 'menu/n_menu2'
        ];
        echo view('layout/m_wrapper', $data);
    }

    //--------------------------------------------------------------------

    public function menu3()
    {
        $data = [
            'title' => 'Menu 3',
            'isi' => 'menu/n_menu3'
        ];
        echo view('layout/m_wrapper', $data);
    }

    //--------------------------------------------------------------------
    public function menu4()
    {
        $data = [
            'title' => 'Product',
            'isi' => 'menu/n_menu4'
        ];
        echo view('layout/m_wrapper', $data);
    }

    //--------------------------------------------------------------------

}
