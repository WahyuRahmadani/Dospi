<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faq_pembeli extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_faq_pembeli');

		 // dropzone
         $this->load->helper(array('form','url'));

		 // $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "faq_pembeli",
			'namafileview' 	=> "V_faq_pembeli",
			'tampil'		=> $this->m_faq_pembeli->tampil(),
		);
		echo Modules::run('template/tampilCore5', $data);
	}
}
?>
 