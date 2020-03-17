<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil_pembeli extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_profil_pembeli');
		//  $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "profil_pembeli",
			'namafileview' 	=> "V_profil_pembeli",
			'tampil'		=> $this->m_profil_pembeli->tampil(),
		);
		echo Modules::run('template/tampilCore3', $data);
	}


}
?>
 