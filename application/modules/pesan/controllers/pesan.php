<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesan extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_pesan');

		 // dropzone
         $this->load->helper(array('form','url'));

		 // $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "pesan",
			'namafileview' 	=> "V_pesan",
			'tampil'		=> $this->m_pesan->tampil(),
		);
		echo Modules::run('template/tampilCore2', $data);
	}

	function edit(){
		$this->m_pesan->edit();
		redirect('pesan');
	}

	function hapus($id)
	{
		$this->m_pesan->hapus($id);
		redirect('pesan');
	}

}
 