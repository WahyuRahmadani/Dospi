<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop_list extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_shop_list');

		 // $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "shop_list",
			'namafileview' 	=> "V_shop_list",
			'tampil'		=> $this->m_shop_list->tampil(),
		);
		echo Modules::run('template/tampilCore4', $data);
	}

	// function tambah()
	// {
	// 	$this->m_shop_list->hewan();
	// 	redirect('shop_list');
	// }

	// function edit()
	// {
	// 	$this->m_tambah_hewan->edit();
	// 	redirect('Tambah_hewan');
	// }

	// function hapus($id)
	// {
	// 	$this->m_tambah_hewan->hapus($id);
	// 	redirect('Tambah_hewan');
	// }

	// function cari()
	// {
	// 	$data = array(
	// 		'namamodule' 	=> "Tambah_hewan",
	// 		'namafileview' 	=> "V_tambah_hewan",
	// 		'tampil'		=> $this->m_tambah_hewan->cari(),
	// 	);
	// 	echo Modules::run('template_dashboard/tampilCore2', $data);
	// }
	
}
 