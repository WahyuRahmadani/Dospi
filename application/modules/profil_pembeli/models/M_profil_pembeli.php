<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_profil_pembeli extends CI_Model {

	function tampil()
	{
		return $this->db->get('user')->result();
	}

	function profil_pembeli()
	{
		$this->db->insert("user",$data);
		
	}

}
?>