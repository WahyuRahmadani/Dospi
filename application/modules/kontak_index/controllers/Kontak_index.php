<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kontak_index extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_kontak_index');

		 // dropzone
         $this->load->helper(array('form','url'));

		 // $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "kontak_index",
			'namafileview' 	=> "V_kontak_index",
			'tampil'		=> $this->m_kontak_index->tampil(),
		);
		echo Modules::run('template/tampil_template_index', $data);
	}

	
}
 