<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pemesanan_pembeli extends CI_Model {

	function tampil()
	{
		return $this->db->get('tata_cara')->result();
	}

	//start function syarat_ketentuan_penjual*/

	function syarat_ketentuan_penjual(){
			$judul 		= $this->input->post('judul');
			$konten		= $this->input->post('konten');

			$syarat = array(
				"judul"		=>$judul,
				"konten"	=>$konten,
			);

		$this->db->insert('tata_cara',$syarat);

	}

	//end function syarat_ketentuan_penjual*/

}