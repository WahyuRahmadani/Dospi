<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop_detail_penjual extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_shop_detail_penjual');
		 $this->load->helper(array('form','url'));
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

	function detail($id_datahewan){
		
		$data = array(
			'namamodule' 	=> "shop_detail_penjual",
			'namafileview' 	=> "V_shop_detail_penjual",
			'tampil'		=> $this->m_shop_detail_penjual->detail_hewan($id_datahewan),
		);
		echo Modules::run('template/tampilCore4', $data);
	}


	function komentar()
	{
		$this->m_shop_detail_penjual->komentar();
		redirect('Shop_detail_penjual');     
	}
	function balas()
	{
		$this->m_shop_detail_penjual->balas();
		   
	}
	function hapus($id)
	{
		$this->m_shop_detail_penjual->hapus($id);

	}

}
?>