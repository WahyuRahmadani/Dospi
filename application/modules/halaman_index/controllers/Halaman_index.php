<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class halaman_index extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_halaman_index');

		 // dropzone
         $this->load->helper(array('form','url'));

		 // $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "halaman_index",
			'namafileview' 	=> "V_halaman_index",
			'tampil'		=> $this->m_halaman_index->tampil(),
		);
		echo Modules::run('template/tampil_template_index', $data);
	}

	
}
 