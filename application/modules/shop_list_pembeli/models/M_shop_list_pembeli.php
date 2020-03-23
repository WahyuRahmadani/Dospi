<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_shop_list_pembeli extends CI_Model {

	function tampil()
	{
		return $this->db->get('data_hewan')->result();
    }
    

}
?>