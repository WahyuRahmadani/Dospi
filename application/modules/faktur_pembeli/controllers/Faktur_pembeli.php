<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class faktur_pembeli extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_faktur_pembeli');
		//  $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "faktur_pembeli",
			'namafileview' 	=> "V_faktur_pembeli",
			'tampil'		=> $this->m_faktur_pembeli->tampil(),
		);
		echo Modules::run('template/tampilCore3', $data);
	}

	function faktur_pembeli(){
		$this->m_faktur_pembeli->faktur_pembeli();
	}
	
}
?>
 