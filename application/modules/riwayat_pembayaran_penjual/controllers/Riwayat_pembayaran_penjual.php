<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class riwayat_pembayaran_penjual extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_riwayat_pembayaran_penjual');
		//  $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "riwayat_pembayaran_penjual",
			'namafileview' 	=> "V_riwayat_pembayaran_penjual",
			'tampil'		=> $this->m_riwayat_pembayaran_penjual->tampil(),
		);
		echo Modules::run('template/tampilCore2', $data);
	}

	function riwayat_pembayaran_penjual(){
		$this->m_riwayat_pembayaran_penjual->riwayat_pembayaran_penjual();
	}
	
}
?>
 