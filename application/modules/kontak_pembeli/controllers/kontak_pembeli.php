<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak_pembeli extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_kontak_pembeli');

		 // dropzone
         $this->load->helper(array('form','url'));

		 // $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "kontak_pembeli",
			'namafileview' 	=> "V_Kontak_pembeli",
			'tampil'		=> $this->m_kontak_pembeli->tampil(),
		);
		echo Modules::run('template/tampilCore5', $data);
	}
}
?>
 