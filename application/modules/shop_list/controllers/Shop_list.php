<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop_list extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('M_shop_list');

		 // $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "shop_list",
			'namafileview' 	=> "V_shop_list",
			'tampil'		=> $this->M_shop_list->tampil(),
		);
		echo Modules::run('template/tampilCore4', $data);
	}

	
	
}
 