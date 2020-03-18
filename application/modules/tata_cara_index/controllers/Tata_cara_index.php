<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tata_cara_index extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_tata_cara_index');

		 // dropzone
         $this->load->helper(array('form','url'));

		 // $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "tata_cara_index",
			'namafileview' 	=> "V_tata_cara_index",
			'tampil'		=> $this->m_tata_cara_index->tampil(),
		);
		echo Modules::run('template/tampil_template_index', $data);
	}

	
}
 