<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template extends MX_Controller {

	function __construct()
	{
		parent:: __construct();
		//load model

		$this->load->model('m_template');
		$this->load->model('login/m_session');
	}

	

	// view core templating
	public function index()
	{
		
		$this->load->view('view_template_core');
		$this->load->view('view_template_core2');
		$this->load->view('view_template_core3');
	}

	public function tampilCore($data)
	{
		$id = $this->session->userdata('session_id');
		
		$this->load->view('view_template_core',$data);
	}

	public function tampilCore2($data)
	{
		$id = $this->session->userdata('session_id');
		
		$this->load->view('view_template_core2',$data);
	}

	public function tampilCore3($data)
	{
		$id = $this->session->userdata('session_id');
		
		$this->load->view('view_template_core3',$data);
	}

}
