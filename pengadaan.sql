-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2021 at 05:04 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pengadaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `no` int(11) NOT NULL,
  `akun` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`no`, `akun`) VALUES
(1, '532111'),
(2, '521111'),
(3, '521811'),
(4, '522141'),
(5, '523111'),
(6, '523121');

-- --------------------------------------------------------

--
-- Table structure for table `kontrak`
--

CREATE TABLE `kontrak` (
  `no` int(11) NOT NULL,
  `no_kontrak` varchar(20) NOT NULL,
  `nilai_kontrak` int(15) NOT NULL,
  `penyedia` varchar(100) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontrak`
--

INSERT INTO `kontrak` (`no`, `no_kontrak`, `nilai_kontrak`, `penyedia`, `tgl_mulai`, `tgl_selesai`) VALUES
(1, 'SPK-21/TIKBMN.1/PPK.', 14000000, 'CV Prediksi Jaya', '2020-10-29', '2020-10-31'),
(2, 'SPK-23/TIKBMN.1/PPK.', 65000000, 'CV WAHID YAHUD', '2020-10-30', '2020-11-06'),
(3, 'SPK-25/TIKBMN.1/PPK.', 17000000, 'CV FLOWER', '2020-10-30', '2020-11-30');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `akses` enum('admin','manajemen') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `name`, `akses`) VALUES
('admin', 'admin', 'Administrator', 'admin'),
('indah', 'indah', 'Indah Permata', 'manajemen');

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `no` varchar(11) NOT NULL,
  `nama_paket` varchar(100) NOT NULL,
  `akun` int(11) NOT NULL,
  `nilai_hps` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`no`, `nama_paket`, `akun`, `nilai_hps`) VALUES
('1', 'Perbaikan Plafon Ruangan Bagian Umum Kanwil DJBC', 523111, 15000000),
('2', 'Pengadaan Seragam Security KPTIKBMN Medan TA 2020', 521811, 80000000),
('3', 'Pemeliharaan Taman Vertikal GKN ', 523111, 20000000);

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `no` int(11) NOT NULL,
  `no_kuitansi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`no`, `no_kuitansi`) VALUES
(1, 'k322');

-- --------------------------------------------------------

--
-- Table structure for table `pemeriksaan`
--

CREATE TABLE `pemeriksaan` (
  `no` int(11) NOT NULL,
  `no_bapp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemeriksaan`
--

INSERT INTO `pemeriksaan` (`no`, `no_bapp`) VALUES
(1, 'BAPP-24/TIKBMN.1/2020');

-- --------------------------------------------------------

--
-- Table structure for table `permintaan`
--

CREATE TABLE `permintaan` (
  `no` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `dasar_permintaan` varchar(100) NOT NULL,
  `ket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permintaan`
--

INSERT INTO `permintaan` (`no`, `user`, `dasar_permintaan`, `ket`) VALUES
(1, 'Kanwil DJBC', 'S-5/KWBC.2/2020', 'Perbaikan Plafon Ruangan Bagian Umum Kanwil'),
(2, 'KPTIKBMN', 'S-66/TIKBMN.1.1/2020', 'Pengadaan Seragam Security'),
(3, 'KPTIKBMN', 'S-67/TIKBMN.1.1/2020', 'Pemeliharaan Taman Vertikal'),
(4, 'Kanwil DJKN', 'S-12/KN.1/2020', 'kamar mandi tumpat');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `no` int(11) NOT NULL,
  `user` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`no`, `user`) VALUES
(1, 'KPTIKBMN'),
(2, 'Kanwil DJBC'),
(3, 'KPP P L Pakam'),
(4, 'Kanwil DJPb'),
(5, 'KPPN Medan 2'),
(6, 'KPPN Medan 1'),
(7, 'Kanwil DJKN'),
(8, 'KPKNL');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `kontrak`
--
ALTER TABLE `kontrak`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `pemeriksaan`
--
ALTER TABLE `pemeriksaan`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `permintaan`
--
ALTER TABLE `permintaan`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `permintaan`
--
ALTER TABLE `permintaan`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
