<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kontak_pembeli extends CI_Model {

	function tampil()
	{
		return $this->db->get('kontak_dospi')->result();
    }

    	function kontak_pembeli(){
			$id_kontak_Pembeli				= $this->input->post('id_kontak_pembeli');

			$judul   						= $this->input->post('judul');
			$pesan  						= $this->input->post('pesan');

			$pesan = array(
				'judul_subject'				=>$judul,
				'keluhan'					=>$pesan,
			);

		$this->db->insert('kontak_dospi',$pesan);

	}
    
}