<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop_detail extends MX_Controller {

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
		echo Modules::run('template/tampilCore4', $data);
	}

	function tambah()
	{
		$this->m_tambah_hewan->hewan();
		redirect('Tambah_hewan');
	}

}
?>