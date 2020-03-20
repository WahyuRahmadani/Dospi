<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_dospi extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_login_dospi');
		 // $this->load->model('login/m_session');
	}


	function login_penjual(){
		$this->load->view('V_login_dospi');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "Login_dospi",
			'namafileview' 	=> "V_login_dospi",
			'tampil'		=> $this->m_login_dospi->tampil(),
		);
		echo Modules::run('template/tampilCore1', $data);
	}


		function aksi_login(){

			$email = $this->input->post('email');
			$password = $this->input->post('password');

			$where = array('email'=>$email,'password' =>$password,'status'=>1);

			$kebo=$this->m_login_dospi->cek_login('user',$where)->num_rows();

			if ($kebo == 1) {
				$data_session = array(
									  'email'=> $email,
									  'status' =>"login",
									  'authenticated'=> true
									);
				$this->session->set_userdata($data_session);
				redirect ('halaman_penjual');
				
				
			}else{
					echo"<script>alert('Password Anda Salah');window.location='login_dospi';</script>";
			}
		}

}
?>