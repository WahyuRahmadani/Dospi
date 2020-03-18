<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class lupa_password_penjual extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_lupa_password_penjual');
		 // $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "lupa_password_penjual",
			'namafileview' 	=> "V_lupa_password_penjual",
			'tampil'		=> $this->m_lupa_password_penjual->tampil(),
		);
		echo Modules::run('template/tampilCore1', $data);
	}
}