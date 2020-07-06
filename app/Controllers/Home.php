<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Home',
			'isi' => 'v/v_home'
		];
		echo view('layout/m_wrapper', $data);
	}

	//--------------------------------------------------------------------
	public function halaman2()
	{
		$data = [
			'title' => 'Halaman 2',
			'isi' => 'v/v_halaman2'
		];
		echo view('layout/v_wrapper', $data);
	}

	//--------------------------------------------------------------------

	public function halaman3()
	{
		$data = [
			'title' => 'Halaman 3',
			'isi' => 'v/v_halaman3'
		];
		echo view('layout/v_wrapper', $data);
	}

	//--------------------------------------------------------------------

	public function halaman4()
	{
		$data = [
			'title' => 'Halaman 4',
			'isi' => 'v/v_halaman4'
		];
		echo view('layout/v_wrapper', $data);
	}

	//--------------------------------------------------------------------

	public function halaman5()
	{
		$data = [
			'title' => 'Halaman 5',
			'isi' => 'v/v_halaman5'
		];
		echo view('layout/v_wrapper', $data);
	}

	//--------------------------------------------------------------------

	public function halaman6()
	{
		$data = [
			'title' => 'Halaman 6',
			'isi' => 'v/v_halaman6'
		];
		echo view('layout/v_wrapper', $data);
	}

	//--------------------------------------------------------------------

}
