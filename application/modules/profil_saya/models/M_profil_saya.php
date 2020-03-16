<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_profil_saya extends CI_Model {

	function tampil()
	{
		return $this->db->get('user')->result();
	}

	function profil_saya()
	{
		$this->db->insert("user",$data);
		
	}

}
?>