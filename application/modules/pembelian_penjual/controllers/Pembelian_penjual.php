<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pembelian_penjual extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_pembelian_penjual');
		//  $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "pembelian_penjual",
			'namafileview' 	=> "V_pembelian_penjual",
			'tampil'		=> $this->m_pembelian_penjual->tampil(),
		);
		echo Modules::run('template/tampilCore2', $data);
	}
	
}
?>
 