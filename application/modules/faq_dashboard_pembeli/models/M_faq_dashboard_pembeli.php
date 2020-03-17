<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_faq_dashboard_pembeli extends CI_Model {

	function tampil()
	{
		return $this->db->get('data_hewan')->result();
    }
    
}