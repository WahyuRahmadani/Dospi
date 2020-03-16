<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_profil_pembeli extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_edit_profil_pembeli');
		 /*$this->load->model('login/m_session');*/
		 $this->load->helper(array('form','url'));
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "edit_profil_pembeli",
			'namafileview' 	=> "V_edit_profil_pembeli",
			'tampil'		=> $this->m_edit_profil_pembeli->tampil(),
		);
		echo Modules::run('template/tampilCore3', $data);
	}

	function edit(){
		$this->m_edit_profil_pembeli->edit();
		redirect('profil_pembeli');
	}

	function password(){
		$this->m_edit_profil_pembeli->edit_password();
	}
	
}
?>
 