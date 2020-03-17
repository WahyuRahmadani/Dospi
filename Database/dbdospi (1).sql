-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2020 at 07:04 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbdospi`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_hewan`
--

CREATE TABLE IF NOT EXISTS `data_hewan` (
`id_datahewan` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `ukuran_hewan` int(11) NOT NULL,
  `berat_hewan` int(50) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `id_makanan` int(11) NOT NULL,
  `warna_hewan` varchar(50) NOT NULL,
  `harga_hewan` int(50) NOT NULL,
  `nama_pemilik` varchar(100) NOT NULL,
  `rt_rw` varchar(20) NOT NULL,
  `kabupaten` varchar(50) NOT NULL,
  `kode_pos` int(15) NOT NULL,
  `id_gambar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gambar_hewan`
--

CREATE TABLE IF NOT EXISTS `gambar_hewan` (
`id_gambar` int(11) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gambar_layanan`
--

CREATE TABLE IF NOT EXISTS `gambar_layanan` (
`id_gambar_layanan` int(11) NOT NULL,
  `gambar_layanan` text NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `image_slider`
--

CREATE TABLE IF NOT EXISTS `image_slider` (
`id_imageslider` int(11) NOT NULL,
  `gambar` text NOT NULL,
  `konten` varchar(1000) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_hewan`
--

CREATE TABLE IF NOT EXISTS `jenis_hewan` (
`id_jenis` int(11) NOT NULL,
  `jenis_hewan` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kategori_hewan`
--

CREATE TABLE IF NOT EXISTS `kategori_hewan` (
`id_kategori` int(11) NOT NULL,
  `nama_hewan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `konfirmasi_bayar`
--

CREATE TABLE IF NOT EXISTS `konfirmasi_bayar` (
`id_konfirm_bayar` int(11) NOT NULL,
  `id_pemesanan` int(11) NOT NULL,
  `jenis_transaksi` varchar(100) NOT NULL,
  `tgl_bayar` date NOT NULL,
  `id_ bank` int(11) NOT NULL,
  `bukti_bayar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kontak_dospi`
--

CREATE TABLE IF NOT EXISTS `kontak_dospi` (
`id_kontak` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `no_tlp` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `gambar` text NOT NULL,
  `icon` varchar(100) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `instagram` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `layanan_kami`
--

CREATE TABLE IF NOT EXISTS `layanan_kami` (
`id_layanan` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `konten` text NOT NULL,
  `id_gambar_layanan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tata_cara`
--

CREATE TABLE IF NOT EXISTS `tata_cara` (
`id_tatacara` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `konten` varchar(1000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tata_cara`
--

INSERT INTO `tata_cara` (`id_tatacara`, `judul`, `konten`) VALUES
(1, 'syarat dan ketentuan', 'sendi adalah orang yang selalu menjadi kapten di saat kita bermain sepakbola');

-- --------------------------------------------------------

--
-- Table structure for table `tb_bank`
--

CREATE TABLE IF NOT EXISTS `tb_bank` (
`id_bank` int(11) NOT NULL,
  `nama_pemilik` varchar(100) NOT NULL,
  `nama_rekening` varchar(100) NOT NULL,
  `no_rekening` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_faq`
--

CREATE TABLE IF NOT EXISTS `tb_faq` (
`id_faq` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `soal` varchar(1000) NOT NULL,
  `jawaban` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_index`
--

CREATE TABLE IF NOT EXISTS `tb_index` (
`id_index` int(11) NOT NULL,
  `logo` text NOT NULL,
  `id_imageslider` int(11) NOT NULL,
  `id_datahewan` int(11) NOT NULL,
  `id_tentang` int(11) NOT NULL,
  `id_kontak` int(11) NOT NULL,
  `id_layanan` int(11) NOT NULL,
  `id_rating` int(11) NOT NULL,
  `id_rekomendasi` int(11) NOT NULL,
  `id_faq` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_komentar`
--

CREATE TABLE IF NOT EXISTS `tb_komentar` (
`id_komentar` int(11) NOT NULL,
  `id_pembeli` int(11) NOT NULL,
  `id_penjual` int(11) NOT NULL,
  `isi_komentar` text NOT NULL,
  `waktu` time(6) NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_makanan`
--

CREATE TABLE IF NOT EXISTS `tb_makanan` (
`id_makanan` int(11) NOT NULL,
  `nama_makanan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pemesanan`
--

CREATE TABLE IF NOT EXISTS `tb_pemesanan` (
`id_pemesanan` int(11) NOT NULL,
  `id_datahewan` int(11) NOT NULL,
  `kode_barang` int(11) NOT NULL,
  `no_order` int(11) NOT NULL,
  `tgl_pesan` date NOT NULL,
  `tgl_beli` date NOT NULL,
  `id_user` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_rating`
--

CREATE TABLE IF NOT EXISTS `tb_rating` (
`id_rating` int(11) NOT NULL,
  `jumlah_rating` text NOT NULL,
  `komentar` text NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_rekomendasi`
--

CREATE TABLE IF NOT EXISTS `tb_rekomendasi` (
`id_rekomendasi` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `konten` varchar(1000) NOT NULL,
  `id_datahewan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_tentang`
--

CREATE TABLE IF NOT EXISTS `tb_tentang` (
`id_tentang` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `konten` text NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id_user` int(11) NOT NULL,
  `foto_profil` varchar(300) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `no_tlp` varchar(20) NOT NULL,
  `foto_ktp` varchar(300) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=88 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `foto_profil`, `username`, `password`, `email`, `jenis_kelamin`, `no_tlp`, `foto_ktp`, `status`) VALUES
(86, 'file_1584422068.jpg', 'Wahyu  Rahmadani', 12345, 'bagongchanel75@gmail.com', 'laki-laki', '085233170475', 'file_1584361662.jpeg', '1'),
(87, 'file_1584422133.jpg', 'Winda Adelia', 20411, 'windaadelia12@gmail.com', 'perempuan', '087699244123', 'file_1584421859.jpg', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_hewan`
--
ALTER TABLE `data_hewan`
 ADD PRIMARY KEY (`id_datahewan`);

--
-- Indexes for table `gambar_hewan`
--
ALTER TABLE `gambar_hewan`
 ADD PRIMARY KEY (`id_gambar`);

--
-- Indexes for table `gambar_layanan`
--
ALTER TABLE `gambar_layanan`
 ADD PRIMARY KEY (`id_gambar_layanan`);

--
-- Indexes for table `image_slider`
--
ALTER TABLE `image_slider`
 ADD PRIMARY KEY (`id_imageslider`);

--
-- Indexes for table `jenis_hewan`
--
ALTER TABLE `jenis_hewan`
 ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `kategori_hewan`
--
ALTER TABLE `kategori_hewan`
 ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `konfirmasi_bayar`
--
ALTER TABLE `konfirmasi_bayar`
 ADD PRIMARY KEY (`id_konfirm_bayar`);

--
-- Indexes for table `kontak_dospi`
--
ALTER TABLE `kontak_dospi`
 ADD PRIMARY KEY (`id_kontak`);

--
-- Indexes for table `layanan_kami`
--
ALTER TABLE `layanan_kami`
 ADD PRIMARY KEY (`id_layanan`);

--
-- Indexes for table `tata_cara`
--
ALTER TABLE `tata_cara`
 ADD PRIMARY KEY (`id_tatacara`);

--
-- Indexes for table `tb_bank`
--
ALTER TABLE `tb_bank`
 ADD PRIMARY KEY (`id_bank`);

--
-- Indexes for table `tb_faq`
--
ALTER TABLE `tb_faq`
 ADD PRIMARY KEY (`id_faq`);

--
-- Indexes for table `tb_index`
--
ALTER TABLE `tb_index`
 ADD PRIMARY KEY (`id_index`);

--
-- Indexes for table `tb_komentar`
--
ALTER TABLE `tb_komentar`
 ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `tb_makanan`
--
ALTER TABLE `tb_makanan`
 ADD PRIMARY KEY (`id_makanan`);

--
-- Indexes for table `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
 ADD PRIMARY KEY (`id_pemesanan`);

--
-- Indexes for table `tb_rating`
--
ALTER TABLE `tb_rating`
 ADD PRIMARY KEY (`id_rating`);

--
-- Indexes for table `tb_rekomendasi`
--
ALTER TABLE `tb_rekomendasi`
 ADD PRIMARY KEY (`id_rekomendasi`);

--
-- Indexes for table `tb_tentang`
--
ALTER TABLE `tb_tentang`
 ADD PRIMARY KEY (`id_tentang`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_hewan`
--
ALTER TABLE `data_hewan`
MODIFY `id_datahewan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `gambar_hewan`
--
ALTER TABLE `gambar_hewan`
MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `gambar_layanan`
--
ALTER TABLE `gambar_layanan`
MODIFY `id_gambar_layanan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `image_slider`
--
ALTER TABLE `image_slider`
MODIFY `id_imageslider` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jenis_hewan`
--
ALTER TABLE `jenis_hewan`
MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kategori_hewan`
--
ALTER TABLE `kategori_hewan`
MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `konfirmasi_bayar`
--
ALTER TABLE `konfirmasi_bayar`
MODIFY `id_konfirm_bayar` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kontak_dospi`
--
ALTER TABLE `kontak_dospi`
MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `layanan_kami`
--
ALTER TABLE `layanan_kami`
MODIFY `id_layanan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tata_cara`
--
ALTER TABLE `tata_cara`
MODIFY `id_tatacara` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_bank`
--
ALTER TABLE `tb_bank`
MODIFY `id_bank` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_faq`
--
ALTER TABLE `tb_faq`
MODIFY `id_faq` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_index`
--
ALTER TABLE `tb_index`
MODIFY `id_index` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_komentar`
--
ALTER TABLE `tb_komentar`
MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_makanan`
--
ALTER TABLE `tb_makanan`
MODIFY `id_makanan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_rating`
--
ALTER TABLE `tb_rating`
MODIFY `id_rating` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_rekomendasi`
--
ALTER TABLE `tb_rekomendasi`
MODIFY `id_rekomendasi` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_tentang`
--
ALTER TABLE `tb_tentang`
MODIFY `id_tentang` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=88;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
