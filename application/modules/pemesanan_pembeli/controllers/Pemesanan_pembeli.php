<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pemesanan_pembeli extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_pemesanan_pembeli');
		//  $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "pemesanan_pembeli",
			'namafileview' 	=> "V_pemesanan_pembeli",
			'tampil'		=> $this->m_pemesanan_pembeli->tampil(),
		);
		echo Modules::run('template/tampilCore3', $data);
	}

	function pemesanan_pembeli(){
		$this->m_pemesanan_pembeli->pemesanan_pembeli();
	}
	
}
?>
 