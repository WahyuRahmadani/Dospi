<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tata_cara_pembeli extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_tata_cara_pembeli');

		 // dropzone
         $this->load->helper(array('form','url'));

		 // $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "tata_cara_pembeli",
			'namafileview' 	=> "V_tata_cara_pembeli",
			'tampil'		=> $this->m_tata_cara_pembeli->tampil(),
		);
		echo Modules::run('template/tampilCore5', $data);
    }
    function tata_cara_penjual(){
        $this->m_tata_cara_pembeli->tata_cara_pembeli();
    }
}
 ?>