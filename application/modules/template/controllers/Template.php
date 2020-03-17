<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template extends MX_Controller {

	function __construct()
	{
		parent:: __construct();
		//load model

		$this->load->model('m_template');
		// $this->load->model('login/m_session');
	}

	

	// view core templating
	public function index()
	{
		
		$this->load->view('view_template_core');
		$this->load->view('view_template_core1');
		$this->load->view('view_template_core2');
		$this->load->view('view_template_core3');
		$this->load->view('view_template_core4');
		$this->load->view('view_template_core5');
		$this->load->view('template_index');
	}

	public function tampilCore($data)
	{
		$id = $this->session->userdata('session_id');
		
		$this->load->view('view_template_core',$data);
	}

	public function tampilCore1($data)
	{
		$id = $this->session->userdata('session_id');
		
		$this->load->view('view_template_core1',$data);
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

	public function tampilCore4($data)
	{
		$id = $this->session->userdata('session_id');
		
		$this->load->view('view_template_core4',$data);
	}

	public function tampilCore5($data)
	{
		$id = $this->session->userdata('session_id');
		
		$this->load->view('view_template_core5',$data);
	}

	public function tampil_template_index($data)
	{
		$id = $this->session->userdata('session_id');
		
		$this->load->view('template_index',$data);
	}

}
