<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cara_pembelian_pembeli extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_cara_pembelian_pembeli');

		 // dropzone
         $this->load->helper(array('form','url'));

		 // $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "cara_pembelian_pembeli",
			'namafileview' 	=> "V_cara_pembelian_pembeli",
			'tampil'		=> $this->m_cara_pembelian_pembeli->tampil(),
		);
		echo Modules::run('template/tampilCore5', $data);
    }
    function cara_pembelian_pembeli(){
        $this->m_cara_pembelian_pembeli->cara_pembelian_pembeli();
    }
}
 ?>