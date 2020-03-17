<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class shop_list_index extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_shop_list_index');

		 // dropzone
         $this->load->helper(array('form','url'));

		 // $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "shop_list_index",
			'namafileview' 	=> "V_shop_list_index",
			'tampil'		=> $this->m_shop_list_index->tampil(),
		);
		echo Modules::run('template/tampil_template_index', $data);
	}

	
}
 