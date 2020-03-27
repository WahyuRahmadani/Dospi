<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_rating extends CI_Model {

	function tampil()
	{
		return $this->db->get('tb_rating')->result();
    }
    function komentar()
    {

		$komentar		= $this->input->post('komentar');
		

		$komentar = array(
			'komentar'	=> $komentar
		 );
		$this->db->insert('tb_rating',$komentar);
    }
    

}
?>