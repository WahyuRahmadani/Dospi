<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cara_pembelian_penjual extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_cara_pembelian_penjual');

		 // dropzone
         $this->load->helper(array('form','url'));

		 // $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "cara_pembelian_penjual",
			'namafileview' 	=> "V_cara_pembelian_penjual",
			'tampil'		=> $this->m_cara_pembelian_penjual->tampil(),
		);
		echo Modules::run('template/tampilCore4', $data);
    }
    function cara_pembelian_penjual(){
        $this->m_cara_pembelian_penjual->cara_pembelian_penjual();
    }
}
 ?>