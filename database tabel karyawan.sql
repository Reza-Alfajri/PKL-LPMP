-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2021 at 04:50 AM
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
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `timestamp` datetime(6) NOT NULL,
  `nama_kegiatan` varchar(100) NOT NULL,
  `tanggal_awal` date NOT NULL,
  `tanggal_akhir` date NOT NULL,
  `statusco` enum('Terisi','Kosong') NOT NULL,
  `nama_tamu` varchar(100) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `jenis_kelamin` enum('Pria','Wanita') NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `kota` varchar(100) NOT NULL,
  `jabatan` varchar(200) NOT NULL,
  `nama_kantor` varchar(100) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `wisma` enum('Handayani','Anggrek') NOT NULL,
  `nomor_kamar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`timestamp`, `nama_kegiatan`, `tanggal_awal`, `tanggal_akhir`, `statusco`, `nama_tamu`, `nip`, `jenis_kelamin`, `tanggal_lahir`, `kota`, `jabatan`, `nama_kantor`, `no_hp`, `wisma`, `nomor_kamar`) VALUES
('2021-11-29 10:43:35.000000', 'A', '2021-11-22', '2021-11-29', 'Kosong', 'Bramantio Alif Perdana', '3201916069', 'Pria', '2001-04-10', 'Pontianak', 'Magang', 'Polnep', '081234567890', 'Handayani', '12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`nip`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
