<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faq_dashboard_pembeli extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_faq_dashboard_pembeli');

		 // dropzone
         $this->load->helper(array('form','url'));

		 // $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "faq_dashboard_pembeli",
			'namafileview' 	=> "V_faq_dashboard_pembeli",
			'tampil'		=> $this->m_faq_dashboard_pembeli->tampil(),
		);
		echo Modules::run('template/tampilCore3', $data);
    }
    function faq_dashoard_pembeli(){
        $this->m_faq_dashboard->faq_dashboard_pembeli();
    }
}
?>
 