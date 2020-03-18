<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cara_penjualan_penjual extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_cara_penjualan_penjual');

		 // dropzone
         $this->load->helper(array('form','url'));

		 // $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "cara_penjualan_penjual",
			'namafileview' 	=> "V_cara_penjualan_penjual",
			'tampil'		=> $this->m_cara_penjualan_penjual->tampil(),
		);
		echo Modules::run('template/tampilCore4', $data);
    }
    function cara_penjualan_penjual(){
        $this->m_cara_penjualan_penjual->cara_penjualan_penjual();
    }
}
 ?>