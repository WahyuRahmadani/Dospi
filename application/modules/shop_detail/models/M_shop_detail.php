<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_shop_detail extends CI_Model {

	function tampil()
	{
		return $this->db->get('user')->result();
	}

	function shop_detail()
	{
		$nama_guru 		= $this->input->post('nama');
		$alamat_guru	= $this->input->post('alamat');
		$mapel 			= $this->input->post('guru');
		$jurusan		= $this->input->post('jurusan');


		$user = array( "nama_guru"   =>$nama_guru,
					   "alamat_guru" =>$alamat_guru,
					   "mapel"       =>$mapel,
					   "jurusan"     =>$jurusan);

		$this->db->insert("user",$user);
		
	}

}
?>