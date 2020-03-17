<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pembayaran extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_pembayaran');
		//  $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "pembayaran",
			'namafileview' 	=> "V_pembayaran",
			'tampil'		=> $this->m_pembayaran->tampil(),
		);
		echo Modules::run('template/tampilCore3', $data);
	}

	function pembayaran(){
		$this->m_pembayaran->pembayaran();
	}
	
}
?>
 