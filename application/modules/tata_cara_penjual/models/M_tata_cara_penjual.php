<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_tata_cara_penjual extends CI_Model {

	function tampil()
	{
		return $this->db->get('data_hewan')->result();
    }
    function tata_cara()
    {
    	$id_tatacara                = $this->input->post('id_tatacara');
    	$judul 					    = $this->input->post('judul');
    	$isi 					    = $this->input->post('konten');
    	
    	$cara = array(
				'judul'				=>$judul,
				'konten'					=>$isi,
			);

		$this->db->insert('tb_tatacara',$isi);

    }
    
}