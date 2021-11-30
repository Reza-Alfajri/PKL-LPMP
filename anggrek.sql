-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2021 at 08:51 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lpmp`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggrek`
--

CREATE TABLE `anggrek` (
  `timestamp` datetime NOT NULL,
  `nama_kegiatan` varchar(100) NOT NULL,
  `tanggal_awal` date NOT NULL,
  `tanggal_akhir` date NOT NULL,
  `statusco` enum('terisi','kosong') NOT NULL,
  `nama_tamu` varchar(100) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `jenis_kelamin` enum('pria','wanita') NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `kota` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `nama_kantor` varchar(100) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `nomor_kamar` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anggrek`
--

INSERT INTO `anggrek` (`timestamp`, `nama_kegiatan`, `tanggal_awal`, `tanggal_akhir`, `statusco`, `nama_tamu`, `nik`, `jenis_kelamin`, `tanggal_lahir`, `kota`, `jabatan`, `nama_kantor`, `no_hp`, `nomor_kamar`) VALUES
('0000-00-00 00:00:00', '', '0000-00-00', '0000-00-00', 'kosong', '', '', '', '0000-00-00', '', '', '', '', 101),
('0000-00-00 00:00:00', '', '0000-00-00', '0000-00-00', 'kosong', '', '', '', '0000-00-00', '', '', '', '', 102),
('0000-00-00 00:00:00', '', '0000-00-00', '0000-00-00', 'kosong', '', '', '', '0000-00-00', '', '', '', '', 103);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggrek`
--
ALTER TABLE `anggrek`
  ADD PRIMARY KEY (`nomor_kamar`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
