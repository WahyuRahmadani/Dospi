<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cara_penjualan_pembeli extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_cara_penjualan_pembeli');

		 // dropzone
         $this->load->helper(array('form','url'));

		 // $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "cara_penjualan_pembeli",
			'namafileview' 	=> "V_cara_penjualan_pembeli",
			'tampil'		=> $this->m_cara_penjualan_pembeli->tampil(),
		);
		echo Modules::run('template/tampilCore5', $data);
    }
    function cara_penjualan_pembeli(){
        $this->m_cara_penjualan_pembeli->cara_penjualan_pembeli();
    }
}
 ?>