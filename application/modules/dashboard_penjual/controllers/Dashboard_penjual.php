<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard_penjual extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_dashboard_penjual');
		//  $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "dashboard_penjual",
			'namafileview' 	=> "V_dashboard_penjual",
			'tampil'		=> $this->m_dashboard_penjual->tampil(),
		);
		echo Modules::run('template/tampilCore2', $data);
	}

	function dashboard_penjual(){
		$this->m_dashboard_penjual->dashboard_penjual();
	}
	
}
?>
 