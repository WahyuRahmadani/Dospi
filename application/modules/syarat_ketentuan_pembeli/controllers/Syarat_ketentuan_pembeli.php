<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class syarat_ketentuan_pembeli extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_syarat_ketentuan_pembeli');
		//  $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "syarat_ketentuan_pembeli",
			'namafileview' 	=> "V_syarat_ketentuan_pembeli",
			'tampil'		=> $this->m_syarat_ketentuan_pembeli->tampil(),
		);
		echo Modules::run('template/tampilCore3', $data);
	}

	function syarat_ketentuan_pembeli(){
		$this->m_syarat_ketentuan_pembeli->syarat_ketentuan_pembeli();
	}
	
}
?>
 