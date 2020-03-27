<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rating extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_rating');

		 // dropzone
         $this->load->helper(array('form','url'));

		 // $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "rating",
			'namafileview' 	=> "V_rating",
			'tampil'		=> $this->m_rating->tampil(),
		);
		echo Modules::run('template/tampilCore1', $data);
	}

	function tambah()
	{
		$this->m_rating->komentar();
		redirect('rating');
	}

	
}
 