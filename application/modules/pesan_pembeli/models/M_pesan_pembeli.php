<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pesan_pembeli extends CI_Model {

	function tampil()
	{
		return $this->db->get('data_hewan')->result();
	}


	function edit(){
		$id_datahewan	= $this->input->post('id_datahewan');

		$ukuran_hewan		= $this->input->post('ukuran_hewan');
		$berat_hewan		= $this->input->post('berat_hewan');
		$jenis_kelamin		= $this->input->post('jenis_kelamin');
		$warna_hewan		= $this->input->post('warna_hewan');
		$harga_hewan		= $this->input->post('harga_hewan');
		$nama_pemilik		= $this->input->post('nama_pemilik');
		$rt_rw				= $this->input->post('rt_rw');
		$dusun				= $this->input->post('dusun');
		$desa				= $this->input->post('desa');
		$kabupaten			= $this->input->post('kabupaten');
		$kode_pos			= $this->input->post('kode_pos');

		$data_hewan = array(

			'ukuran_hewan' 		=> $ukuranhewan,
			'berat_hewan' 		=> $berathewan,
			'jenis_kelamin'		=> $jeniskelamin,
			'warna_hewan'		=> $warnahewan,
			'harga_hewan'		=> $hargahewan,
			'nama_pemilik'		=> $namapemilik,
			'rt_rw'				=> $rtrw,
			'dusun'				=> $dusun,
			'desa'				=> $desa,
			'kabupaten'			=> $kabupatenkota,
			'kode_pos'			=> $kodepos
		 );
		$this->db->where('id_datahewan',$id_datahewan)->update('data_hewan',$data);

		}

		function hapus($id){
			$this->db->where('$id_datahewan',$id_datahewan)->delete('data_hewan',$data);

		}
}