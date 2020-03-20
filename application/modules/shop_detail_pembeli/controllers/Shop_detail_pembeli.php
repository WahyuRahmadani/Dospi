<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop_detail_pembeli extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_shop_detail_pembeli');

		 
		 $this->load->helper(array('form','url'));
		//  $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "shop_detail_pembeli",
			'namafileview' 	=> "V_shop_detail_pembeli",
			'tampil'		=> $this->m_shop_detail_pembeli->tampil(),
		);
		echo Modules::run('template/tampilCore5', $data);
	}
	function komentar()
	{
		$this->m_shop_detail_pembeli->komentar();
		redirect('Shop_detail_pembeli');     
	}
	function balas()
	{
		$this->m_shop_detail_pembeli->balas();
		   
	}
	function hapus($id)
	{
		$this->m_shop_detail_pembeli->hapus($id);

	}

}
