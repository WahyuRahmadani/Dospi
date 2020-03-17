<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class shop_detail extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_shop_detail');
		//  $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "shop_detail",
			'namafileview' 	=> "V_shop_detail",
			'tampil'		=> $this->m_shop_detail->tampil(),
		);
		echo Modules::run('template/tampilCore', $data);
	}

	// shop
	function shop_detail(){
		$this->m_shop_detail->shop_detail();
	}

}
?>