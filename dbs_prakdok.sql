-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2017 at 10:03 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbs_prakdok`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dokter`
--

CREATE TABLE `tbl_dokter` (
  `kd_dokter` varchar(20) NOT NULL,
  `nama_dokter` varchar(50) NOT NULL,
  `jk_dokter` varchar(10) NOT NULL,
  `tlp_dokter` varchar(13) NOT NULL,
  `hari_dokter` varchar(50) NOT NULL,
  `jam_dokter` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_dokter`
--

INSERT INTO `tbl_dokter` (`kd_dokter`, `nama_dokter`, `jk_dokter`, `tlp_dokter`, `hari_dokter`, `jam_dokter`) VALUES
('DKR001', 'dr. Regina Husein', 'Perempuan', '087854543233', 'Senin-Rabu', '09:00 - 14:00'),
('DKR002', 'dr. Faqih Asslam', 'Laki-laki', '085678789091', 'Senin-Rabu', '09:00 - 14:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_obt`
--

CREATE TABLE `tbl_obt` (
  `kd_obt` varchar(20) NOT NULL,
  `nama_obt` varchar(50) NOT NULL,
  `indikasi_obt` varchar(100) NOT NULL,
  `stok_obt` int(11) NOT NULL,
  `harga_obt` double NOT NULL,
  `tglkadar_obt` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_obt`
--

INSERT INTO `tbl_obt` (`kd_obt`, `nama_obt`, `indikasi_obt`, `stok_obt`, `harga_obt`, `tglkadar_obt`) VALUES
('OBT001', 'Parazon', 'sakit kepala, sakit gigi', 46, 7000, '2021-01-01'),
('OBT002', 'Paracetamol', 'Demam', 47, 8000, '2022-02-08');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pasien`
--

CREATE TABLE `tbl_pasien` (
  `kd_pasien` varchar(20) NOT NULL,
  `nama_pasien` varchar(50) NOT NULL,
  `jk_pasien` varchar(20) NOT NULL,
  `usia_pasien` int(11) NOT NULL,
  `alamat_pasien` varchar(100) NOT NULL,
  `tlp_pasien` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pasien`
--

INSERT INTO `tbl_pasien` (`kd_pasien`, `nama_pasien`, `jk_pasien`, `usia_pasien`, `alamat_pasien`, `tlp_pasien`) VALUES
('PSN001', 'AHY', 'Laki-laki', 90, 'Ciomas', '087843434343'),
('PSN003', 'RR', 'Laki-laki', 43, 'Ciomas', '085611112222');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pembayaran`
--

CREATE TABLE `tbl_pembayaran` (
  `kd_pembayaran` varchar(20) NOT NULL,
  `kd_user` varchar(50) NOT NULL,
  `kd_dokter` varchar(50) NOT NULL,
  `kd_pasien` varchar(50) NOT NULL,
  `kd_obt` varchar(50) NOT NULL,
  `jml_obt` int(11) NOT NULL,
  `diagnosa` varchar(100) NOT NULL,
  `tgl_pembayaran` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pembayaran`
--

INSERT INTO `tbl_pembayaran` (`kd_pembayaran`, `kd_user`, `kd_dokter`, `kd_pasien`, `kd_obt`, `jml_obt`, `diagnosa`, `tgl_pembayaran`) VALUES
('PMB001', '1', 'DKR001', 'PSN001', 'OBT001', 2, 'Sakit Gigi', '2017-11-14'),
('PMB002', '1', 'DKR002', 'PSN002', 'OBT001', 2, 'Sakit Gigi', '2017-11-15'),
('PMB003', '1', 'DKR001', 'PSN001', 'OBT002', 3, 'Demam', '2017-11-15');

--
-- Triggers `tbl_pembayaran`
--
DELIMITER $$
CREATE TRIGGER `update_stok` AFTER INSERT ON `tbl_pembayaran` FOR EACH ROW BEGIN
	UPDATE tbl_obt SET stok_obt=stok_obt-NEW.jml_obt WHERE
    kd_obt=NEW.kd_obt;
    END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_status`
--

CREATE TABLE `tbl_status` (
  `kd_status` int(11) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_status`
--

INSERT INTO `tbl_status` (`kd_status`, `status`) VALUES
(1, 'Aktif'),
(2, 'Non Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `kd_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `kd_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`kd_user`, `nama`, `username`, `password`, `kd_status`) VALUES
(1, 'fani', 'fans', '1234', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_dokter`
--
ALTER TABLE `tbl_dokter`
  ADD PRIMARY KEY (`kd_dokter`);

--
-- Indexes for table `tbl_obt`
--
ALTER TABLE `tbl_obt`
  ADD PRIMARY KEY (`kd_obt`);

--
-- Indexes for table `tbl_pasien`
--
ALTER TABLE `tbl_pasien`
  ADD PRIMARY KEY (`kd_pasien`);

--
-- Indexes for table `tbl_pembayaran`
--
ALTER TABLE `tbl_pembayaran`
  ADD PRIMARY KEY (`kd_pembayaran`);

--
-- Indexes for table `tbl_status`
--
ALTER TABLE `tbl_status`
  ADD PRIMARY KEY (`kd_status`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`kd_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_status`
--
ALTER TABLE `tbl_status`
  MODIFY `kd_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `kd_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
