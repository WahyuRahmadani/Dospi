<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login_pembeli extends CI_Model {

	function tampil()
	{
		return $this->db->get('user')->result();
	}

//start function pembeli-->

	function login_pembeli(){
		$email							= $this->input->post('email');
		$password						= $this->input->post('password');
		
		$status=2;
		$user = array( "email"     			=>$email,
					   "password" 			=>$password,
				);

		$this->db->set('status',$status);
		$this->db->insert('user',$user);	
	}

	/*end start function register_pembeli*/

	function cek_login($table,$where){
		return $this->db->get_where($table,$where);
	}
}





