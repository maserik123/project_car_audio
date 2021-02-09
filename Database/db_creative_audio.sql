-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 09, 2021 at 08:56 AM
-- Server version: 5.7.33-0ubuntu0.18.04.1
-- PHP Version: 7.1.33-25+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_creative_audio`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pembayaran`
--

CREATE TABLE `tbl_pembayaran` (
  `id_pembayaran` int(10) NOT NULL,
  `total_pembayaran` int(11) NOT NULL,
  `bukti_pembayaran` varchar(255) NOT NULL,
  `nomor_resi` varchar(50) NOT NULL,
  `kurir_pengiriman` varchar(30) NOT NULL,
  `tgl_pembayaran` date NOT NULL,
  `status_pembayaran` varchar(30) NOT NULL,
  `review_produk` text NOT NULL,
  `aktif` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pembayaran`
--

INSERT INTO `tbl_pembayaran` (`id_pembayaran`, `total_pembayaran`, `bukti_pembayaran`, `nomor_resi`, `kurir_pengiriman`, `tgl_pembayaran`, `status_pembayaran`, `review_produk`, `aktif`) VALUES
(1, 0, '', '', '', '0000-00-00', '', '', 1),
(5, 385000, '13569908_931271313683979_153760524_o1.jpg', '021234567854248', 'JNE', '2020-09-14', 'Sudah Dikirim', '', 0),
(6, 460000, 'BRI1.JPG', '021234567854248', 'J&T', '2020-09-14', 'Sudah Dikirim', '', 0),
(7, 785000, 'BRI2.JPG', '021234567854248', 'J&T', '2020-09-14', 'Sudah Dikirim', '', 0),
(8, 320000, 'Cuti_Bersama2.jpg', '', 'JNE', '2020-10-13', 'Sudah Bayar', '', 0),
(9, 195000, 'Cuti_Bersama3.jpg', '08142678930987654', 'Go Send', '2020-11-20', 'Sudah Dikirim', '', 0),
(10, 212000, 'BRI3.JPG', '', 'Go Send', '2020-12-06', 'Sudah Bayar', '', 0),
(11, 308000, 'BRI4.JPG', '08142678930987654', 'Go Send', '2020-12-06', 'Sudah Dikirim', '', 0),
(12, 572000, 'BRI5.JPG', '', 'Go Send', '2020-12-06', 'Sudah Bayar', '', 0),
(13, 383000, 'weedy1.jpg', '', '', '2021-01-06', 'Sudah Dikirim', '', 0),
(14, 315000, 'jam.PNG', '08142678930987654', '', '2021-01-11', 'Sudah Dikirim', '', 0),
(15, 87000, 'bg_zoom_fix.png', '', '', '2021-01-06', 'Sudah Bayar', '', 0),
(16, 198000, 'Selection_004.png', '', '', '2021-01-17', 'Sudah Dikirim', '', 0),
(17, 113000, 'Screenshot_from_2021-01-15_14-01-22.png', '', '', '2021-01-17', 'Sudah Dikirim', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_produk`
--

CREATE TABLE `tbl_produk` (
  `id_produk` int(10) NOT NULL,
  `kode_produk` varchar(10) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `harga_beli` int(11) NOT NULL,
  `harga_jual` int(11) NOT NULL,
  `stok_produk` int(11) NOT NULL,
  `kategori_produk` varchar(50) NOT NULL,
  `kategori_mobil` varchar(50) NOT NULL,
  `foto_produk` varchar(255) NOT NULL,
  `rop` float NOT NULL,
  `eoq` float NOT NULL,
  `aktif` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_produk`
--

INSERT INTO `tbl_produk` (`id_produk`, `kode_produk`, `nama_produk`, `harga_beli`, `harga_jual`, `stok_produk`, `kategori_produk`, `kategori_mobil`, `foto_produk`, `rop`, `eoq`, `aktif`) VALUES
(5, 'AM - DHD', 'Alarm Mobil Merk DHD', 120000, 190000, 25, 'Alarm', 'All', 'amdhd4.JPG', 0, 0, 0),
(6, 'AM - RWB', 'Alarm Mobil Merk RWB', 200000, 275000, 22, 'Alarm', 'All', 'rwb5.jpg', 0, 0, 0),
(7, 'KM - RWB', 'Klakson Mobil Merk RWB', 120000, 175000, 28, 'Klakson', 'All', 'kmrwb11.PNG', 0, 25, 0),
(8, 'KM - HT', 'Klakson Mobil Merk Heto', 120000, 175000, 30, 'Klakson', 'All', 'kmheto11.PNG', 0, 0, 0),
(9, 'SS - LV', 'Sarung Stir Mobil Merk Louis Vuitton', 130000, 200000, 29, 'Sarung_Stir', 'All', 'lv1.jpg', 0, 0, 0),
(10, 'SS - EX', 'Sarung Stir Mobil Merk Exclusive', 35000, 75000, 38, 'Sarung_Stir', 'All', 'exc12.PNG', 84, 7, 0),
(11, 'WP - HL', 'Wiper Mobil Merk Helios', 125000, 185000, 47, 'Wiper', 'All', 'wphl12.jpg', 64, 5, 0),
(12, 'WP - DDF', 'Wiper Mobil Merk Dr D Fischer', 60000, 100000, 29, 'Wiper', 'All', 'wpddf2.jpg', 76, 6, 0),
(13, 'WP - RWB', 'Wiper Mobil Merk RWB', 60000, 100000, 45, 'Wiper', 'All', 'wprwb1.jpg', 0, 0, 1),
(14, 'WP - RWB', 'Wiper Mobil Merk RWB', 60000, 100000, 40, 'Wiper', 'All', 'wprwb2.jpg', 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaksi`
--

CREATE TABLE `tbl_transaksi` (
  `id_transaksi` int(10) NOT NULL,
  `id_produk` int(10) NOT NULL,
  `id_pembayaran` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `qty_transaksi` int(11) NOT NULL,
  `total_transaksi` int(11) NOT NULL,
  `komentar` text NOT NULL,
  `aktif` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_transaksi`
--

INSERT INTO `tbl_transaksi` (`id_transaksi`, `id_produk`, `id_pembayaran`, `id_user`, `tgl_transaksi`, `qty_transaksi`, `total_transaksi`, `komentar`, `aktif`) VALUES
(22, 7, 1, 6, '2020-09-14', 2, 350000, '', 1),
(23, 7, 5, 6, '2020-09-14', 2, 350000, '', 2),
(24, 10, 1, 7, '2020-09-14', 3, 225000, '', 1),
(25, 10, 6, 7, '2020-09-14', 3, 225000, '', 2),
(26, 12, 6, 7, '2020-09-14', 2, 200000, '', 2),
(27, 12, 1, 9, '2020-09-14', 3, 300000, '', 1),
(28, 12, 7, 9, '2020-09-14', 3, 300000, '', 2),
(29, 10, 7, 9, '2020-09-14', 6, 450000, '', 2),
(30, 12, 8, 5, '2020-10-15', 1, 100000, '', 2),
(31, 11, 8, 5, '2020-10-15', 1, 185000, '', 2),
(32, 9, 1, 5, '2020-10-16', 1, 200000, '', 1),
(33, 10, 1, 5, '2020-10-16', 1, 75000, '', 1),
(34, 9, 1, 5, '2020-10-17', 1, 200000, '', 1),
(35, 11, 9, 11, '2020-11-20', 1, 185000, '', 2),
(36, 11, 1, 11, '2020-11-20', 6, 1110000, '', 1),
(37, 11, 1, 11, '2020-11-20', 1, 185000, '', 1),
(38, 12, 10, 13, '2020-12-06', 2, 200000, '', 2),
(39, 12, 11, 13, '2020-12-06', 3, 300000, '', 2),
(40, 11, 12, 13, '2020-12-06', 3, 555000, '', 2),
(41, 9, 1, 13, '2020-12-08', 1, 200000, '', 0),
(42, 9, 1, 8, '2020-12-08', 1, 200000, '', 1),
(43, 11, 1, 14, '2020-12-23', 2, 370000, '', 1),
(44, 10, 1, 14, '2020-12-23', 3, 225000, '', 1),
(49, 11, 1, 14, '2020-12-23', 1, 185000, '', 0),
(50, 10, 13, 16, '2021-01-06', 5, 375000, '', 2),
(51, 12, 14, 8, '2021-01-11', 3, 300000, '', 2),
(52, 10, 15, 8, '2021-01-11', 1, 75000, '', 2),
(53, 12, 1, 8, '2021-01-11', 1, 100000, '', 0),
(54, 11, 16, 17, '2021-01-17', 1, 185000, '', 2),
(55, 12, 17, 17, '2021-01-17', 1, 100000, 'Produk sangat baik', 2),
(56, 11, 1, 17, '2021-02-03', 1, 185000, '', 1),
(57, 11, 1, 17, '2021-02-03', 2, 370000, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(10) NOT NULL,
  `nama_user` varchar(30) NOT NULL,
  `email_user` varchar(50) NOT NULL,
  `telp_user` varchar(15) NOT NULL,
  `alamat_user` varchar(255) NOT NULL,
  `provinsi_user` varchar(30) NOT NULL,
  `kota_user` varchar(30) NOT NULL,
  `kecamatan_user` varchar(30) NOT NULL,
  `kode_pos` int(10) NOT NULL,
  `password_user` varchar(255) NOT NULL,
  `level_user` int(1) NOT NULL,
  `aktif` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `email_user`, `telp_user`, `alamat_user`, `provinsi_user`, `kota_user`, `kecamatan_user`, `kode_pos`, `password_user`, `level_user`, `aktif`) VALUES
(1, 'Admin', 'admin@creativeaudio.com', '082390299923', 'Pekanbaru', 'Riau', 'Pekanbaru', '', 28282, '21232f297a57a5a743894a0e4a801fc3', 1, 0),
(5, 'Suparman', 'suparman@gmail.com', '081344563321', 'Jl. Melati Blok A no 12', 'Riau', 'Pekanbaru', '', 28284, 'e10adc3949ba59abbe56e057f20f883e', 0, 0),
(6, 'Satria Dharma Novrianto', 'satria.novrianto@gmail.com', '081371833321', 'Jl. Barau-Barau Blok D no 14', 'Riau', 'Pekanbaru', '', 28285, '7470a1190ab8f69605c5baf35d481f1e', 0, 2),
(7, 'Sri Elpi Dahani', 'srielpi@gmail.com', '081375954149', 'Jl. Melati Blok A no 12', 'Riau', 'Pekanbaru', '', 28282, '2a84a825094ad829052f43d0e391086e', 0, 0),
(8, 'Sylva Qamara Nur Fadilah', 'sylvaqamara@gmail.com', '081375454149', 'Jl. Melati Blok A no 12', 'Riau', 'Pekanbaru', 'Lima Puluh', 28285, '49cfcf6e21578b4c8cae9ad84cd4fadc', 0, 0),
(9, 'Satria Dharma Novrianto', 'satriadharman@gmail.com', '081371833321', 'Jl. Barau-Barau Blok D no 14', 'Riau', 'Pekanbaru', '', 28285, '7470a1190ab8f69605c5baf35d481f1e', 0, 2),
(10, 'Gunawan', 'dirsabayu@gmail.com', '08239029999', 'Jl. Rumbai', 'Riau', 'Pekanbaru', '', 28282, 'e10adc3949ba59abbe56e057f20f883e', 0, 1),
(11, 'Akun Tester', 'tester@gmail.com', '082390299923', 'Jl. Rumbai', 'Riau', 'Pekanbaru', 'Bukit Raya', 28282, 'e10adc3949ba59abbe56e057f20f883e', 0, 1),
(12, 'Satria Dharma Novrianto', 'satria16si@mahasiswa.pcr.ac.id', '', '', '', '', '', 0, '7470a1190ab8f69605c5baf35d481f1e', 0, 1),
(13, 'Satria Dharma Novrianto', 'satria.dharma11@gmail.com', '081371833321', 'Jl. Barau-Barau Blok D no 14', 'Riau', 'Pekanbaru', 'Rumbai Pesisir', 28285, '7470a1190ab8f69605c5baf35d481f1e', 0, 2),
(14, 'Satria Dharma Novrianto', 'satria.dharma12@gmail.com', '', '', '', '', '', 0, '477054c78baea7a1242f79d898a2ca46', 0, 0),
(15, 'Anonymus', 'sa', 'as', 'as', 'as', 'as', 'as', 1, 'asd', 1, 1),
(16, 'Dimas', 'dimas@gmail.com', '081271729987', 'Jl. Melati Blok A no 12', 'Riau', 'Pekanbaru', 'Pekanbaru Kota', 28287, '7d49e40f4b3d8f68c19406a58303f826', 0, 0),
(17, 'fitra', 'fitraarrafiq@gmail.com', '082399221111', 'Medan, pekanbaru', 'Riau', 'Pekanbaru', 'Bukit Raya', 200000, '06719b92a71ed5e601ca66a1f1984fec', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_pembayaran`
--
ALTER TABLE `tbl_pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_produk` (`id_produk`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_pembayaran` (`id_pembayaran`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_pembayaran`
--
ALTER TABLE `tbl_pembayaran`
  MODIFY `id_pembayaran` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  MODIFY `id_produk` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  MODIFY `id_transaksi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD CONSTRAINT `tbl_transaksi_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `tbl_produk` (`id_produk`),
  ADD CONSTRAINT `tbl_transaksi_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `tbl_user` (`id_user`),
  ADD CONSTRAINT `tbl_transaksi_ibfk_3` FOREIGN KEY (`id_pembayaran`) REFERENCES `tbl_pembayaran` (`id_pembayaran`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
