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
	

		// PAGINATION LOAD LIBRARI

	$this->load->library('pagination');

	// CONFIG

	$config['base_url']		= base_url().'http://localhost/Dospi/shop_list_penjual/index/';
	$config['total_rows']	= $this->M_shop_list_penjual->jumlah_data();
	$config['per_page']		= 10;
	$from['start']			= $this->uri->segment(3);

	$this->pagination->initialize($config);
	$data['data_hewan']		= $this->M_shop_list_penjual->data($config['per_page'],$from['start']);
	
	}
	
	
}
 