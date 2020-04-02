<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tentang_dospi_pembeli extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_tentang_dospi_pembeli');

		 // dropzone
         $this->load->helper(array('form','url'));

		 // $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "tentang_dospi_pembeli",
			'namafileview' 	=> "V_tentang_dospi_pembeli",
			'tampil'		=> $this->m_tentang_dospi_pembeli->tampil(),
		);
		echo Modules::run('template/tampilCore5', $data);
	}
	
}
 