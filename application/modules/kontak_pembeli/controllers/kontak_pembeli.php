<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kontak_pembeli extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_kontak_pembeli');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "kontak_pembeli",
			'namafileview' 	=> "V_kontak_pembeli",
			'tampil'		=> $this->m_kontak_pembeli->tampil(),
		);
		echo Modules::run('template/tampilCore5', $data);
	}

		function tambah(){
		$this->m_kontak_pembeli->kontak_pembeli();
}
}
 