<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop_list_pembeli extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_shop_list_pembeli');

		 // dropzone
         $this->load->helper(array('form','url'));

		 // $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "shop_list_pembeli",
			'namafileview' 	=> "V_shop_list_pembeli",
			'tampil'		=> $this->m_shop_list_pembeli->tampil(),
		);
		echo Modules::run('template/tampilCore5', $data);
	}

	
}
 