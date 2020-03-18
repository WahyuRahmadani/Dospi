<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_lupa_password_penjual extends CI_Model {

	function tampil()
	{
		return $this->db->get('user')->result();
	}
}



