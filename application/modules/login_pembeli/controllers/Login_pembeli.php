<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_pembeli extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_login_pembeli');
		 // $this->load->model('login/m_session');
	}


	function login_pembeli(){
		$this->load->view('V_login_pembeli');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "Login_pembeli",
			'namafileview' 	=> "V_login_pembeli",
			'tampil'		=> $this->m_login_pembeli->tampil(),
		);
		echo Modules::run('template/tampilCore1', $data);
	}


	function aksi_login_pembeli(){

			$email = $this->input->post('email');
			$password = $this->input->post('password');

			$where = array('email'=>$email,'password' =>$password,'status'=>2);

			$sapi=$this->m_login_pembeli->cek_login('user',$where)->num_rows();

			if ($sapi == 1) {
				$data_session = array(
									  'email'=> $email,
									  'status' =>"login",
									  'authenticated'=> true
									);
				$this->session->set_userdata($data_session);
				redirect('halaman_pembeli');
				
				
			}else{
					echo"<script>alert('Password Anda Salah');window.location='login_pembeli';</script>";
			}
		}

}
?>