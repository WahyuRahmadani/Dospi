<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class lupa_password_pembeli extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_lupa_password_pembeli');
		 // $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "lupa_password_pembeli",
			'namafileview' 	=> "V_lupa_password_pembeli",
			'tampil'		=> $this->m_lupa_password_pembeli->tampil(),
		);
		echo Modules::run('template/tampilCore1', $data);
	}
}