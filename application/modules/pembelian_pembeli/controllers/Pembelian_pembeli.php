<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pembelian_pembeli extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_pembelian_pembeli');
		//  $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "pembelian_pembeli",
			'namafileview' 	=> "V_pembelian_pembeli",
			'tampil'		=> $this->m_pembelian_pembeli->tampil(),
		);
		echo Modules::run('template/tampilCore3', $data);
	}
	
}
?>
 