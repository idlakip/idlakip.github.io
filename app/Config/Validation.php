<?php

namespace Config;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var array
	 */
	public $ruleSets = [
		\CodeIgniter\Validation\Rules::class,
		\CodeIgniter\Validation\FormatRules::class,
		\CodeIgniter\Validation\FileRules::class,
		\CodeIgniter\Validation\CreditCardRules::class,
	];

	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
	];

	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------
	// Validasi input Daftar
	public $daftar = [
		'nrp' => [
			'rules' => 'required|is_unique[tbl_peserta.nrp]|min_length[4]',
			'errors' => [
				'required' => 'NRP wajib diisi dan tidak boleh kosong',
				'is_unique' => 'NRP sudah terdaftar, Input NRP lain',
				'min_length' => 'Min NRP 4 karakter'

			]
		],
		'nama' => [
			'rules' => 'required|max_length[20]',
			'errors' => [
				'required' => 'Nama wajib diisi dan tidak boleh kosong',
				'max_length' => 'max 20 Karakter'

			]
		],
		'email' => [
			'rules' => 'required|valid_email',
			'errors' => [
				'required' => 'Email wajib diisi dan tidak boleh kosong',
				'valid_email' => 'Email tidak valid'

			]
		],
		'photo' => [
			'rules' => 'uploaded[photo]|mime_in[photo,image/jpg,image/jpeg,image/png,image/gif]|max_size[photo,5000]',
			'errors' => [
				'uploaded' => 'Photo wajib diisi dan tidak boleh kosong',
				'max_size' => 'Maximal ukuran 5MB'

			]
		]
	];
	// public $daftar_errors = [
	// 	'nrp' => [
	// 		'required' => 'NRP wajib diisi dan tidak boleh kosong',
	// 		'is_unique' => 'NRP sudah terdaftar, Input NRP lain',
	// 		'min_length' => 'Min NRP 4 karakter'
	// 	],
	// 	'nama' => [
	// 		'required' => 'Nama wajib diisi dan tidak boleh kosong',
	// 		'max_length' => 'max 20 Karakter'
	// 	],
	// 	'email' => [
	// 		'required' => 'Email wajib diisi dan tidak boleh kosong',
	// 		'valid_email' => 'Email tidak valid'
	// 	],
	// 	'photo' => [
	// 		'max_size' => 'Maximal ukuran 5MB',
	// 		'uploaded' => 'Photo wajib diisi dan tidak boleh kosong'
	// 	]
	// ];
	//--------------------------------------------------------------------

}
