<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login_dospi extends CI_Model {

	function tampil()
	{
		return $this->db->get('user')->result();
	}

/*start function register_pemilik*/

	function login_dospi(){
		$email							= $this->input->post('email');
		$password						= $this->input->post('password');
		
		$status=1;
		$user = array( "email"     			=>$email,
					   "password" 			=>$password,
				);

		$this->db->set('status',$status);
		$this->db->insert('user',$user);	
	}

	/*end start function register_pemilik*/

	function cek_login($table,$where){
		return $this->db->get_where($table,$where);
	}

//start function pembeli-->

	function login_dospi_pembeli(){
		$email							= $this->input->post('email');
		$password						= $this->input->post('password');
		
		$status=2;
		$user = array( "email"     			=>$email,
					   "password" 			=>$password,
				);

		$this->db->set('status',$status);
		$this->db->insert('user',$user);	
	}

	/*end start function register_pemilik*/

	function cek_login_pembeli($user,$where){
		return $this->db->get_where($user,$where);
	}


}


