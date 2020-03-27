<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesan_penjual extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_pesan_penjual');

		 // dropzone
         $this->load->helper(array('form','url'));

		 // $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "pesan_penjual",
			'namafileview' 	=> "V_pesan_penjual",
			'tampil'		=> $this->m_pesan_penjual->tampil(),
		);
		echo Modules::run('template/tampilCore2', $data);
	}

	function balasan(){
		$this->m_pesan_penjual->pesan_penjual();
		
	}

	function hapus($id){
		$this->m_pesan_penjual->hapus($id)
	}

}
 