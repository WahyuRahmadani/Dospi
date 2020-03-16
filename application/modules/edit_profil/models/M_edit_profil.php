<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_edit_profil extends CI_Model {

	function tampil()
	{
		return $this->db->get('user')->result();
	}

	//start function syarat_ketentuan_penjual*/

	function edit()
		{
			$id_user					= $this->input->post('id_user');

			$username 					= $this->input->post('name');
			$no_telepon					= $this->input->post('telepon');

			$this->load->library('upload');
			$nmfile = "file_".time();
			$config['upload_path']		= 'assets/img/user/';
			$config['allowed_types']	= 'gif|jpg|png|jpeg';
			$config['max_size']			= 5120;
			$config['max_width']		= 4300;
			$config['max_height']		= 4300;
			$config['file_name'] 		= $nmfile;
			
			$this->upload->initialize($config);

			if($_FILES['foto_profil']['name'])
        	{
	            if ($this->upload->do_upload('foto_profil'))
	            {
					$gbr = $this->upload->data();
					$syarat = array(
						'username'		=>$username,
						'no_tlp'		=>$no_telepon,
						'foto_profil'	=>$gbr['file_name'],

					);

					$this->db->where('id_user',$id_user)->update('user', $syarat);

				}
			}else{
					$syarat = array(
							'username'		=>$username,
							'no_tlp'		=>$no_telepon,
							/*'foto_profil'	=>'kosong1.png',*/
					);

					$this->db->where('id_user',$id_user)->update('user', $syarat);
				}
		}

		function edit_password(){
			$id_user					= $this->input->post('id_user');

			$Password_Baru   			= $this->input->post('new-password');

			$syarat = array(
				'password'		=>$Password_Baru,
			);

		$this->db->where('id_user',$id_user)->update('user', $syarat);

	}

	//end function syarat_ketentuan_penjual*/

}
