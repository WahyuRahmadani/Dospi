<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_shop_detail_pembeli extends CI_Model {

	function tampil()
	{
		$this->db->select('*');
		$this->db->from('data_hewan');
		$this->db->join('tb_komentar', 'data_hewan.id_datahewan = tb_komentar.id_datahewan');
		$query = $this->db->get();

		return $query->result();


						// Join spesifikasi hewan

		// $this->db->select('*')
		// 		 ->from('data_hewan')
		// 		 ->join('jenis_hewan', 'jenis_hewan.id_jenis = data_hewan.id_jenis')
		// 		 ->join('tb_makanan','tb_makanan.id_makanan = data_hewan.id_makanan')
		// 		 ->join('gambar_hewan', 'gambar_hewan.id_gambar = data_hewan.id_gambar');
		// $query = $this->db->get();
		// return $query->result();	


	}

	
	function komentar()
	{
		// Table komentar  

		$isikomentar		= $this->input->post('isi_komentar');
		$komentar = array(
			'isi_komentar' 	=> $isikomentar,
		
		 );
		$this->db->insert('tb_komentar',$komentar);

	}
	function balas()
		{
			// Table komentar  
	
			$isibalas		= $this->input->post('balas');
			$balas = array(
				'isi_komentar' 	=> $isibalas,
			
			 );
			$this->db->insert('tb_komentar',$balas);
	
			}

	function hapus()
	{
		$this->db->where('id_komentar', $id)->delete('tb_komentar');
	}



}
?>