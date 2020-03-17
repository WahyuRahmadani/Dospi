<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak_penjual extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_kontak_penjual');

		 // dropzone
         $this->load->helper(array('form','url'));

		 // $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "kontak_penjual",
			'namafileview' 	=> "V_Kontak_penjual",
			'tampil'		=> $this->m_kontak_penjual->tampil(),
		);
		echo Modules::run('template/tampilCore4', $data);
	}
}
 