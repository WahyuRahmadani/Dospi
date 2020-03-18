<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user_pemilik extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_user_pemilik');
		//  $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "user_pemilik",
			'namafileview' 	=> "V_user_pembeli",
			'tampil'		=> $this->m_user_pemilik->tampil(),
		);
		echo Modules::run('template/tampilCore1', $data);
	}

	function register_pemilik(){
		$this->m_user_pemilik->register_pemilik();
	}

	function register_pembeli(){
		$this->m_user_pemilik->register_pembeli();
	}
}
?>