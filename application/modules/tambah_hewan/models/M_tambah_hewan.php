<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_tambah_hewan extends CI_Model {

	function tampil()
	{
		return $this->db->get('data_hewan')->result();

				// join
			$this->db->select('*')
				->from('data_hewan')
				->join('gambar_hewan', 'data_hewan.id_gambar = gambar_hewan.id_gambar')
				->join('jenis_hewan', 'data_hewan.id_jenis = jenis_hewan.id_jenis')
				->join('kategori_hewan', 'data_hewan.id_kategori = kategori_hewan.id_kategori')
				->join('tb_makanan', 'data_hewan.id_makanan = tb_makanan.id_makanan')
				->where('data_hewan.id_datahewan',$id_datahewan);
			$query = $this->db->get();
			return $query;
	}

	function hewan()
	{
		// Table Tambah Hewan

		$jenishewan		= $this->input->post('jenis_hewan');
		$tanggaltambah	= $this->input->post('tanggal_tambah');
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
			'kode_pos'			=> $kodepos,
			'tanggal_tambah'	=> $tanggaltambah
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
		$config['file_name'] 		= $new_name;
		$new_name = time().$_FILES["file_name"]['name'];
		
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



























