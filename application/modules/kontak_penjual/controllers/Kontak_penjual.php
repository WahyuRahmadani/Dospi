<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kontak_penjual extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_kontak_penjual');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "kontak_penjual",
			'namafileview' 	=> "V_kontak_penjual",
			'tampil'		=> $this->m_kontak_penjual->tampil(),
		);
		echo Modules::run('template/tampilCore4', $data);
	}

		function tambah(){
		$this->m_kontak_penjual->kontak_penjual();
}
}
 