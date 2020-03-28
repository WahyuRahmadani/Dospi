<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_shop_list_penjual extends CI_Model {

	function tampil()
	{
		$this->db->select('*')
				 ->from('data_hewan')
				 ->join('jenis_hewan', 'jenis_hewan.id_jenis = data_hewan.id_jenis')
				 ->join('tb_makanan','tb_makanan.id_makanan = data_hewan.id_makanan')
				 ->join('gambar_hewan', 'gambar_hewan.id_gambar = data_hewan.id_gambar');
		$query = $this->db->get();
		return $query->result();


			// $query = $this->db->query('select * from data_hewan a join jenis_hewan b  join tb_makanan c on a.id_jenis=b.id_jenis and a.id_makanan=c.id_makanan')->result();
			// return $query;
	}


	function data($number,$offset){

		return $query = $this->db->get('data_hewan',$number,$offset)->result();

	}


	function jumlah_data(){

		return $this->db->get('data_hewan')->num_rows();
	}



	function hewan()
	{
		// Table Tambah Hewan

		$jenishewan		= $this->input->post('jenis_hewan');
		$ukuranhewan	= $this->input->post('ukuran_hewan');
		$berathewan		= $this->input->post('berat_hewan');
		$jeniskelamin	= $this->input->post('jenis_kelamin');
		$warnahewan		= $this->input->post('warna_hewan');
		$hargahewan		= $this->input->post('harga_hewan');
		$deskripsihewan	= $this->input->post('deskripsi_hewan');
		$namapemilik	= $this->input->post('nama_pemilik');
		$rtrwpenjual	= $this->input->post('rtrw_penjual');
		$kabupatenkota	= $this->input->post('kabupaten_kota');
		$kodepos		= $this->input->post('kode_pos');


		$data_hewan = array(
			'ukuran_hewan' 		=> $ukuranhewan,
			'berat_hewan' 		=> $berathewan,
			'jenis_kelamin'		=> $jeniskelamin,
			'warna_hewan'		=> $warnahewan,
			'deskripsi'			=> $deskripsihewan,
			'harga_hewan'		=> $hargahewan,
			'nama_pemilik'		=> $namapemilik,
			'rt_rw'				=> $rtrwpenjual,
			'kabupaten'			=> $kabupatenkota,
			'kode_pos'			=> $kodepos
		 );
		$this->db->insert('data_hewan',$data_hewan);


		// Table Gambar Hewan

		$this->load->library('upload');
		$nmfile = "file_".time();
		$config['upload_path']		= 'assets/img/properties';
		$config['allowed_types']	= 'gif|jpg|png|jpeg';
		$config['max_size']			= 5120;
		$config['max_width']		= 4300;
		$config['max_height']		= 4300;
		$config['file_name'] 		= $nmfile;
		
		$this->upload->initialize($config);
		$this->upload->do_upload('gambar1');
		$gbr1 = $this->upload->data();

		$this->upload->do_upload('gambar2');
		$gbr2 = $this->upload->data();

		$this->upload->do_upload('gambar3');
		$gbr3 = $this->upload->data();

		$this->upload->do_upload('gambar4');
		$gbr4 = $this->upload->data();

		$this->upload->do_upload('gambar5');
		$gbr5 = $this->upload->data();
            

			$data1 = array(
				'gambar' 			=> $gbr1['file_name'],
					
				
			);
		   $this->db->insert('gambar_hewan', $data1);

		   	$data2 = array(
				'gambar' 			=> $gbr2['file_name'],
					
				
			);
		   $this->db->insert('gambar_hewan', $data2);

			$data3 = array(
				'gambar' 			=> $gbr3['file_name'],
					
				
			);
		   $this->db->insert('gambar_hewan', $data3);

		   	$data4 = array(
				'gambar' 			=> $gbr4['file_name'],
					
				
			);
		   $this->db->insert('gambar_hewan', $data4);

		   	$data5 = array(
				'gambar' 			=> $gbr5['file_name'],
					
				
			);
		   $this->db->insert('gambar_hewan', $data5);




		// table kategori

		$filterhewan 	= $this->input->post('filter_hewan');	

		$hewan=array(
			'nama_hewan'	=> $filterhewan
		);
		$this->db->insert('kategori_hewan',$hewan);



		// Table Sub Kategori Jenis Hewan

			$jenishewan 	= $this->input->post('jenis_hewan');

			$gambar = $this->upload->data();
			$data = array(
				'jenis_hewan'	=> $jenishewan,
				'foto' 			=> $gambar['file_name'],
					
				
			);
		   $this->db->insert('jenis_hewan', $data);





		// table makanan

		$jenismakanan	= $this->input->post('jenis_makanan');

		$makanan =array(
			'nama_makanan'	=> $jenismakanan
		);
		$this->db->insert('tb_makanan',$makanan);

	}



}



























