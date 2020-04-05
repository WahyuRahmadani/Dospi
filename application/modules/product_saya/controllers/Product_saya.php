<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_saya extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_product_saya');
		 //dropzone
		 $this->load->helper(array('form','url'));
	
		 //$this->load->model('login/m_session');
		
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "product_saya",
			'namafileview' 	=> "V_product_saya",
			'tampil'		=>$this->m_product_saya->tampil()
		);
		echo Modules::run('template/tampilCore2', $data);
	}

	function edit(){
		$this->m_product_saya->edit();
		redirect('product_saya');
	}

	function hapus($id_datahewan)
	{
	$this->m_product_saya->hapus($id_datahewan);
	 redirect('product_saya');

}
	}