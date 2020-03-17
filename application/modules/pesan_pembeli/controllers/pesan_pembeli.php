<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesan_pembeli extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_pesan_pembeli');

		 // dropzone
         $this->load->helper(array('form','url'));

		 // $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "pesan_pembeli",
			'namafileview' 	=> "V_pesan_pembeli",
			'tampil'		=> $this->m_pesan_pembeli->tampil(),
		);
		echo Modules::run('template/tampilCore3', $data);
	}

	function pesan_pembeli(){
		$this->m_pesan_pembeli->pesan_pembeli();
	}

}
?>