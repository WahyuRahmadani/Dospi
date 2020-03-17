<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class syarat_ketentuan_penjual extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_syarat_ketentuan_penjual');
		//  $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "syarat_ketentuan_penjual",
			'namafileview' 	=> "V_syarat_ketentuan_penjual",
			'tampil'		=> $this->m_syarat_ketentuan_penjual->tampil(),
		);
		echo Modules::run('template/tampilCore2', $data);
	}

	function syarat_ketentuan_penjual(){
		$this->m_syarat_ketentuan_penjual->syarat_ketentuan_penjual();
	}
	
}
?>
 