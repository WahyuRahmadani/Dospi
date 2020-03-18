<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user_pemilik extends CI_Model {

	function tampil()
	{
		return $this->db->get('user')->result();
	}

	/*start function register_pemilik*/

	function register_pemilik(){
		$username						= $this->input->post('username');
		$password						= $this->input->post('password');
		$email							= $this->input->post('email');
		$jenis_kelamin					= $this->input->post('gender');
		$no_tlp							= $this->input->post('no_tlp');

		$this->load->library('upload');
		$nmfile = "file_".time();
		$config['upload_path']		= 'assets/img/user';
		$config['allowed_types']	= 'gif|jpg|png|jpeg';
		$config['max_size']			= 5120;
		$config['max_width']		= 4300;
		$config['max_height']		= 4300;
		$config['file_name'] 		= $nmfile;
		
		$this->upload->initialize($config);
		
		$this->upload->do_upload('gambar');
				$gbr = $this->upload->data();
		
		$status=1;
		$user = array( "username"  	 		=>$username,
					   "password" 			=>$password,
					   "email"     			=>$email,
					   "jenis_kelamin" 		=>$jenis_kelamin,
					   "no_tlp"				=>$no_tlp,

					   'foto_ktp' 			=> $gbr['file_name'],
					   'foto_profil'		=> 'default.jpg'
								
				);

		$this->db->set('status',$status);
		$this->db->insert('user',$user);	
	}

	/*end start function register_pemilik*/


	/*start function register_pembeli*/

		function register_pembeli(){
		$username						= $this->input->post('username');
		$password						= $this->input->post('password');
		$email							= $this->input->post('email');
		$jenis_kelamin					= $this->input->post('gender');
		$no_tlp							= $this->input->post('no_tlp');

		$this->load->library('upload');
		$nmfile = "file_".time();
		$config['upload_path']		= 'assets/img/user';
		$config['allowed_types']	= 'gif|jpg|png|jpeg';
		$config['max_size']			= 5120;
		$config['max_width']		= 4300;
		$config['max_height']		= 4300;
		$config['file_name'] 		= $nmfile;
		
		$this->upload->initialize($config);
		
		$this->upload->do_upload('gambar');
				$gbr = $this->upload->data();
		
		$status=2;
		$user = array( "username"  	 		=>$username,
					   "password" 			=>$password,
					   "email"     			=>$email,
					   "jenis_kelamin" 		=>$jenis_kelamin,
					   "no_tlp"				=>$no_tlp,

					   'foto_ktp' 			=> $gbr['file_name'],
					    'foto_profil'		=> 'default.jpg'
								
				);

		$this->db->set('status',$status);
		$this->db->insert('user',$user);	
	}
	/*end start function register_pembeli*/


}