<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pesan_penjual extends CI_Model {

	function tampil()
	{
		return $this->db->get('tb_pesan')->result();
	}

	function balasan(){
		$id_pesan	= $this->input->post('id_pesan');

		$isi_pesan	= $this->input->post('isi_pesan');
		$tanggal	= $this->input->post('tanggal');
		$waktu		= $this->input->post('waktu');

		$tb_pesan = array(
			'isi_pesan'		=> $isipesan,
			'tanggal'		=> $tanggal,
			'waktu'			=> $waktu,
		);
		 $this->db->where('id_pesan',$id_pesan)->uploat('tb_pesan',$data);
	}

	function hapus($id){
		$this->db->where('id_pesan',$id_pesan)->delete('tb_pesan',$data);
	}

}