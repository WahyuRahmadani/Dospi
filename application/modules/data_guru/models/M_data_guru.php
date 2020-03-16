<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data_guru extends CI_Model {

	function tampil()
	{
		return $this->db->get('guru')->result();
	}

	function tambah()
	{
		$nama_guru 		= $this->input->post('nama');
		$alamat_guru	= $this->input->post('alamat');
		$mapel 			= $this->input->post('guru');
		$jurusan		= $this->input->post('jurusan');


		$data = array( "nama_guru"   =>$nama_guru,
					   "alamat_guru" =>$alamat_guru,
					   "mapel"       =>$mapel,
					   "jurusan"     =>$jurusan);

		$this->db->insert("guru",$data);
		
	}

	function hapus($id)
	{
		$this->db->where('id', $id)->delete('guru');
	}


	function edit ()
	{
		$id 			= $this->input->post('id');

		$nama_guru	 	= $this->input->post('nama');
		$alamat_guru 	= $this->input->post('alamat');
		$mapel 			= $this->input->post('guru');
		$jurusan 		= $this->input->post('jurusan');

		$data 			= array(  'nama_guru' => $nama_guru,
								  'alamat_guru' => $alamat_guru,
								  'mapel' =>$mapel,
								  'jurusan' =>$jurusan);

		$this->db->where('id',$id)->update('guru', $data);
	}

}
?>