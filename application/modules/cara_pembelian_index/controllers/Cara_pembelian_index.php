<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cara_pembelian_index extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_cara_pembelian_index');

		 // dropzone
         $this->load->helper(array('form','url'));

		 // $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "cara_pembelian_index",
			'namafileview' 	=> "V_cara_pembelian_index",
			'tampil'		=> $this->m_cara_pembelian_index->tampil(),
		);
		echo Modules::run('template/tampil_template_index', $data);
	}

	
}
 