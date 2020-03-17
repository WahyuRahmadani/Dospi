<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pemesanan_penjual extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_pemesanan_penjual');
		//  $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "pemesanan_penjual",
			'namafileview' 	=> "V_pemesanan_penjual",
			'tampil'		=> $this->m_pemesanan_penjual->tampil(),
		);
		echo Modules::run('template/tampilCore2', $data);
	}

	function pemesanan_penjual(){
		$this->m_pemesanan_penjual->pemesanan_penjual();
	}
	
}
?>
 