<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        // Auth
        if (session()->get('username') == '') {
            session()->getFlashdata('gagal', 'Anda belum login !!!');
            return redirect()->to(base_url('login'));
        }
        // end Auth
        $data = [
            'title' => 'Pages',
            'isi' => 'p/p_pages'
        ];
        echo view('layout/m_wrapper', $data);
    }

    //--------------------------------------------------------------------
    public function pages2()
    {
        // Auth
        if (session()->get('username') == '') {
            session()->getFlashdata('gagal', 'Anda belum login !!!');
            return redirect()->to(base_url('login'));
        }
        // end Auth
        $data = [
            'title' => 'pages 2',
            'isi' => 'p/p_pages_2'
        ];
        echo view('layout/m_wrapper', $data);
    }

    //--------------------------------------------------------------------

    public function pages3()
    {
        // Auth
        if (session()->get('username') == '') {
            session()->getFlashdata('gagal', 'Anda belum login !!!');
            return redirect()->to(base_url('login'));
        }
        // end Auth
        $data = [
            'title' => 'pages 3',
            'isi' => 'p/p_pages_3'
        ];
        echo view('layout/m_wrapper', $data);
    }

    //--------------------------------------------------------------------

    public function pages4()
    {
        // Auth
        if (session()->get('username') == '') {
            session()->getFlashdata('gagal', 'Anda belum login !!!');
            return redirect()->to(base_url('login'));
        }
        // end Auth
        $data = [
            'title' => 'pages 4',
            'isi' => 'p/p_pages_4'
        ];
        echo view('layout/m_wrapper', $data);
    }

    //--------------------------------------------------------------------

    public function menu1()
    {
        // Auth
        if (session()->get('username') == '') {
            session()->getFlashdata('gagal', 'Anda belum login !!!');
            return redirect()->to(base_url('login'));
        }
        // end Auth
        $data = [
            'title' => 'Menu 1',
            'isi' => 'menu/n_menu1'
        ];
        echo view('layout/m_wrapper', $data);
    }

    //--------------------------------------------------------------------

    public function menu2()
    {
        // Auth
        if (session()->get('username') == '') {
            session()->getFlashdata('gagal', 'Anda belum login !!!');
            return redirect()->to(base_url('login'));
        }
        // end Auth
        $data = [
            'title' => 'Menu 2',
            'isi' => 'menu/n_menu2'
        ];
        echo view('layout/m_wrapper', $data);
    }

    //--------------------------------------------------------------------

    public function menu3()
    {
        // Auth
        if (session()->get('username') == '') {
            session()->getFlashdata('gagal', 'Anda belum login !!!');
            return redirect()->to(base_url('login'));
        }
        // end Auth
        $data = [
            'title' => 'Menu 3',
            'isi' => 'menu/n_menu3'
        ];
        echo view('layout/m_wrapper', $data);
    }

    //--------------------------------------------------------------------
    public function menu4()
    {
        // Auth
        if (session()->get('username') == '') {
            session()->getFlashdata('gagal', 'Anda belum login !!!');
            return redirect()->to(base_url('login'));
        }
        // end Auth
        $data = [
            'title' => 'Product',
            'isi' => 'menu/n_menu4'
        ];
        echo view('layout/m_wrapper', $data);
    }

    //--------------------------------------------------------------------

}
