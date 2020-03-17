<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class faktur_penjual extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_faktur_penjual');
		//  $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "faktur_penjual",
			'namafileview' 	=> "V_faktur_penjual",
			'tampil'		=> $this->m_faktur_penjual->tampil(),
		);
		echo Modules::run('template/tampilCore2', $data);
	}

	function faktur_penjual(){
		$this->m_faktur_penjual->faktur_penjual();
	}
	
}
?>
 