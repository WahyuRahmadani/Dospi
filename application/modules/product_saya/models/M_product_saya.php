<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_product_saya extends CI_Model {

	function tampil()
	{
		return $this->db->get('data_hewan')->result();
	}


		function edit(){
			$id_datahewann	= $this->input->post('id_datahewan');
			
			$ukuran_hewan	= $this->input->post('ukuran_hewan');
			$berat_hewan	= $this->input->post('berat_hewan');
			$jenis_kelamin	= $this->input->post('jenis_kelamin');
			$warna_hewan	= $this->input->post('warna_hewan');
			$harga_hewan	= $this->input->post('harga_hewan');
			$nama_pemilik	= $this->input->post('nama_pemilik');
			$rt_rw			= $this->input->post('rtrw_penjual');
			$kabupaten		= $this->input->post('kabupaten_kota');
			$kode_pos		= $this->input->post('kode_pos');
			$deskripsi		= $this->input->post('deskripsi_hewan');

			$this->load->library('upload');
			$nmfile = "file_".time();
			$config['upload_path']		= 'assets/img/';
			$config['allowed_types']	= 'gif|jpg|png|jpeg';
			$config['max_size']			= 5120;
			$config['max_width']		= 4300;
			$config['max_height']		= 4300;
			$config['file_name'] 		= $nmfile;
		
			$this->upload->initialize($config);
				
			 if($_FILES['gambar']['name'])
        	{
			$this->upload->do_upload('gambar');
			$gbr11 = $this->upload->data();
				
				$data = array(
					'ukuran_hewan'	=> $ukuran_hewan,
					'berat_hewan'	=> $berat_hewan,
					'jenis_kelamin'	=> $jenis_kelamin,
					'warna_hewan'	=> $warna_hewan,
					'harga_hewan'	=> $harga_hewan,
					'nama_pemilik'	=> $nama_pemilik,
					'rt_rw' 		=> $rt_rw,
					'kabupaten'		=> $kabupaten,
					'kode_pos'		=> $kode_pos,
					'deskripsi'		=> $deskripsi,
					'gambar' 		=> $gbr11['file_name'],
				);
		$this->db->where('id_datahewan',$id)->update('data_hewan',$data);
	
}else{
		$data1 = array( 
					'ukuran_hewan'	=> $ukuran_hewan,
					'berat_hewan'	=> $berat_hewan,
					'jenis_kelamin'	=> $jenis_kelamin,
					'warna_hewan'	=> $warna_hewan,
					'harga_hewan'	=> $harga_hewan,
					'nama_pemilik'	=> $nama_pemilik,
					'rt_rw' 		=> $rt_rw,
					'kabupaten'		=> $kabupaten,
					'kode_pos'		=> $kode_pos,
					'deskripsi'		=> $deskripsi,
				);
			$this->db->where('id_datahewan',$id_datahewann)->update('data_hewan',$data1);
}


}
}