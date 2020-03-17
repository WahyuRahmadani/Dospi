<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class halaman_penjual extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_halaman_penjual');

		 // dropzone
         $this->load->helper(array('form','url'));

		 // $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "halaman_penjual",
			'namafileview' 	=> "V_halaman_Penjual",
			'tampil'		=> $this->m_halaman_penjual->tampil(),
		);
		echo Modules::run('template/tampilCore4', $data);
	}

	
}
 