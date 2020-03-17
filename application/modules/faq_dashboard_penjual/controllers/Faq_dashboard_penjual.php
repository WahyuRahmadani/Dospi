<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faq_dashboard_penjual extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_faq_dashboard_penjual');

		 // dropzone
         $this->load->helper(array('form','url'));

		 // $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "faq_dashboard_penjual",
			'namafileview' 	=> "V_faq_dashboard_penjual",
			'tampil'		=> $this->m_faq_dashboard_penjual->tampil(),
		);
		echo Modules::run('template/tampilCore2', $data);
    }
    function faq_dashoard_penjual(){
        $this->m_faq_dashboard->faq_dashboard_penjual();
    }
}
?>
 