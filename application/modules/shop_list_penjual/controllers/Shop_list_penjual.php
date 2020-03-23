<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop_list_penjual extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('M_shop_list_penjual');

		 // $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "shop_list_penjual",
			'namafileview' 	=> "V_shop_list_penjual",
			'tampil'		=> $this->M_shop_list_penjual->tampil(),
		);
		echo Modules::run('template/tampilCore4', $data);
	}

	
	
}
 