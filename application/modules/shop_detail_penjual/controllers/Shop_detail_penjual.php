<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop_detail_penjual extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_shop_detail_penjual');
		//  $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "shop_detail_penjual",
			'namafileview' 	=> "V_shop_detail_penjual",
			'tampil'		=> $this->m_shop_detail_penjual->tampil(),
		);
		echo Modules::run('template/tampilCore4', $data);
	}

}
?>