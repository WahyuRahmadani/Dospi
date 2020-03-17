<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class riwayat_pembayaran_pembeli extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_riwayat_pembayaran_pembeli');
		//  $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "riwayat_pembayaran_pembeli",
			'namafileview' 	=> "V_riwayat_pembayaran_pembeli",
			'tampil'		=> $this->m_riwayat_pembayaran_pembeli->tampil(),
		);
		echo Modules::run('template/tampilCore3', $data);
	}

	function riwayat_pembayaran_pembeli(){
		$this->m_riwayat_pembayaran_pembeli->riwayat_pembayaran_pembeli();
	}
	
}
?>
 