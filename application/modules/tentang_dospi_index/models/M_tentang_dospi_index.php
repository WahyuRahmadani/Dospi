<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_tentang_dospi_index extends CI_Model {

	function tampil()
	{
		return $this->db->get('tb_tentang')->result();
    }
    function tentang()
    {
    	$id_tentang = $this->input->post('id_tentang');

		$judul 		= $this->input->post('judul');
		$konten	 	= $this->input->post('konten');
		
		$this->db->insert('tb_tentang',$konten);
    }

}
?>