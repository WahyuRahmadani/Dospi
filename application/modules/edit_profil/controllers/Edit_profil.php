<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_profil extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_edit_profil');
		 /*$this->load->model('login/m_session');*/
		 $this->load->helper(array('form','url'));
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "edit_profil",
			'namafileview' 	=> "V_edit_profil",
			'tampil'		=> $this->m_edit_profil->tampil(),
		);
		echo Modules::run('template/tampilCore2', $data);
	}

	function edit(){
		$this->m_edit_profil->edit();
		redirect('profil_saya');
	}

	function password(){
		$this->m_edit_profil->edit_password();
	}
	
}
?>
 