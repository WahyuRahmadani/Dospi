<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tambah_hewan extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_tambah_hewan');

	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "tambah_hewan",
			'namafileview' 	=> "V_tambah_hewan",
			'tampil'		=> $this->m_tambah_hewan->tampil(),
		);
		echo Modules::run('template/tampilCore2', $data);
	}

	function tambah()
	{
		$this->m_tambah_hewan->hewan();
		redirect('Tambah_hewan');
	}

	function edit()
	{
		$this->m_tambah_hewan->edit();
		redirect('Tambah_hewan');
	}

	function hapus($id)
	{
		$this->m_tambah_hewan->hapus($id);
		redirect('Tambah_hewan');
	}

	function cari()
	{
		$data = array(
			'namamodule' 	=> "Tambah_hewan",
			'namafileview' 	=> "V_tambah_hewan",
			'tampil'		=> $this->m_tambah_hewan->cari(),
		);
		echo Modules::run('template/tampilCore2', $data);
	}
	
}
 