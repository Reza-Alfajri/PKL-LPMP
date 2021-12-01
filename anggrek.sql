-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2021 at 03:29 AM
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
('0000-00-00 00:00:00', '', '0000-00-00', '0000-00-00', 'kosong', '', '', '', '0000-00-00', '', '', '', '', 103),
('0000-00-00 00:00:00', '', '0000-00-00', '0000-00-00', 'kosong', '', '', '', '0000-00-00', '', '', '', '', 104),
('0000-00-00 00:00:00', '', '0000-00-00', '0000-00-00', 'kosong', '', '', '', '0000-00-00', '', '', '', '', 105),
('0000-00-00 00:00:00', '', '0000-00-00', '0000-00-00', 'kosong', '', '', '', '0000-00-00', '', '', '', '', 106),
('0000-00-00 00:00:00', '', '0000-00-00', '0000-00-00', 'kosong', '', '', '', '0000-00-00', '', '', '', '', 107),
('0000-00-00 00:00:00', '', '0000-00-00', '0000-00-00', 'kosong', '', '', '', '0000-00-00', '', '', '', '', 108),
('0000-00-00 00:00:00', '', '0000-00-00', '0000-00-00', 'kosong', '', '', '', '0000-00-00', '', '', '', '', 109),
('0000-00-00 00:00:00', '', '0000-00-00', '0000-00-00', 'kosong', '', '', '', '0000-00-00', '', '', '', '', 110),
('0000-00-00 00:00:00', '', '0000-00-00', '0000-00-00', 'kosong', '', '', '', '0000-00-00', '', '', '', '', 111),
('0000-00-00 00:00:00', '', '0000-00-00', '0000-00-00', 'kosong', '', '', '', '0000-00-00', '', '', '', '', 112),
('0000-00-00 00:00:00', '', '0000-00-00', '0000-00-00', 'kosong', '', '', '', '0000-00-00', '', '', '', '', 113),
('0000-00-00 00:00:00', '', '0000-00-00', '0000-00-00', 'kosong', '', '', '', '0000-00-00', '', '', '', '', 114),
('0000-00-00 00:00:00', '', '0000-00-00', '0000-00-00', 'kosong', '', '', '', '0000-00-00', '', '', '', '', 115),
('0000-00-00 00:00:00', '', '0000-00-00', '0000-00-00', 'kosong', '', '', '', '0000-00-00', '', '', '', '', 116),
('0000-00-00 00:00:00', '', '0000-00-00', '0000-00-00', 'kosong', '', '', '', '0000-00-00', '', '', '', '', 117),
('0000-00-00 00:00:00', '', '0000-00-00', '0000-00-00', 'kosong', '', '', '', '0000-00-00', '', '', '', '', 118),
('0000-00-00 00:00:00', '', '0000-00-00', '0000-00-00', 'kosong', '', '', '', '0000-00-00', '', '', '', '', 119),
('0000-00-00 00:00:00', '', '0000-00-00', '0000-00-00', 'kosong', '', '', '', '0000-00-00', '', '', '', '', 120),
('0000-00-00 00:00:00', '', '0000-00-00', '0000-00-00', 'kosong', '', '', '', '0000-00-00', '', '', '', '', 121),
('0000-00-00 00:00:00', '', '0000-00-00', '0000-00-00', 'kosong', '', '', '', '0000-00-00', '', '', '', '', 122),
('0000-00-00 00:00:00', '', '0000-00-00', '0000-00-00', 'kosong', '', '', '', '0000-00-00', '', '', '', '', 123),
('0000-00-00 00:00:00', '', '0000-00-00', '0000-00-00', 'kosong', '', '', '', '0000-00-00', '', '', '', '', 124),
('0000-00-00 00:00:00', '', '0000-00-00', '0000-00-00', 'kosong', '', '', '', '0000-00-00', '', '', '', '', 125),
('0000-00-00 00:00:00', '', '0000-00-00', '0000-00-00', 'kosong', '', '', '', '0000-00-00', '', '', '', '', 126),
('0000-00-00 00:00:00', '', '0000-00-00', '0000-00-00', 'kosong', '', '', '', '0000-00-00', '', '', '', '', 201),
('0000-00-00 00:00:00', '', '0000-00-00', '0000-00-00', 'kosong', '', '', '', '0000-00-00', '', '', '', '', 202),
('0000-00-00 00:00:00', '', '0000-00-00', '0000-00-00', 'kosong', '', '', '', '0000-00-00', '', '', '', '', 203),
('0000-00-00 00:00:00', '', '0000-00-00', '0000-00-00', 'kosong', '', '', '', '0000-00-00', '', '', '', '', 204),
('0000-00-00 00:00:00', '', '0000-00-00', '0000-00-00', 'kosong', '', '', '', '0000-00-00', '', '', '', '', 205),
('0000-00-00 00:00:00', '', '0000-00-00', '0000-00-00', 'kosong', '', '', '', '0000-00-00', '', '', '', '', 206),
('0000-00-00 00:00:00', '', '0000-00-00', '0000-00-00', 'kosong', '', '', '', '0000-00-00', '', '', '', '', 207),
('0000-00-00 00:00:00', '', '0000-00-00', '0000-00-00', 'kosong', '', '', '', '0000-00-00', '', '', '', '', 208),
('0000-00-00 00:00:00', '', '0000-00-00', '0000-00-00', 'kosong', '', '', '', '0000-00-00', '', '', '', '', 209),
('0000-00-00 00:00:00', '', '0000-00-00', '0000-00-00', 'kosong', '', '', '', '0000-00-00', '', '', '', '', 210),
('0000-00-00 00:00:00', '', '0000-00-00', '0000-00-00', 'kosong', '', '', '', '0000-00-00', '', '', '', '', 211),
('0000-00-00 00:00:00', '', '0000-00-00', '0000-00-00', 'kosong', '', '', '', '0000-00-00', '', '', '', '', 212),
('0000-00-00 00:00:00', '', '0000-00-00', '0000-00-00', 'kosong', '', '', '', '0000-00-00', '', '', '', '', 213),
('0000-00-00 00:00:00', '', '0000-00-00', '0000-00-00', 'kosong', '', '', '', '0000-00-00', '', '', '', '', 214),
('0000-00-00 00:00:00', '', '0000-00-00', '0000-00-00', 'kosong', '', '', '', '0000-00-00', '', '', '', '', 215),
('0000-00-00 00:00:00', '', '0000-00-00', '0000-00-00', 'kosong', '', '', '', '0000-00-00', '', '', '', '', 216),
('0000-00-00 00:00:00', '', '0000-00-00', '0000-00-00', 'kosong', '', '', '', '0000-00-00', '', '', '', '', 217),
('0000-00-00 00:00:00', '', '0000-00-00', '0000-00-00', 'kosong', '', '', '', '0000-00-00', '', '', '', '', 218),
('0000-00-00 00:00:00', '', '0000-00-00', '0000-00-00', 'kosong', '', '', '', '0000-00-00', '', '', '', '', 219),
('0000-00-00 00:00:00', '', '0000-00-00', '0000-00-00', 'kosong', '', '', '', '0000-00-00', '', '', '', '', 220),
('0000-00-00 00:00:00', '', '0000-00-00', '0000-00-00', 'kosong', '', '', '', '0000-00-00', '', '', '', '', 221),
('0000-00-00 00:00:00', '', '0000-00-00', '0000-00-00', 'kosong', '', '', '', '0000-00-00', '', '', '', '', 222),
('0000-00-00 00:00:00', '', '0000-00-00', '0000-00-00', 'kosong', '', '', '', '0000-00-00', '', '', '', '', 223),
('0000-00-00 00:00:00', '', '0000-00-00', '0000-00-00', 'kosong', '', '', '', '0000-00-00', '', '', '', '', 224),
('0000-00-00 00:00:00', '', '0000-00-00', '0000-00-00', 'kosong', '', '', '', '0000-00-00', '', '', '', '', 225),
('0000-00-00 00:00:00', '', '0000-00-00', '0000-00-00', 'kosong', '', '', '', '0000-00-00', '', '', '', '', 226),
('0000-00-00 00:00:00', '', '0000-00-00', '0000-00-00', 'kosong', '', '', '', '0000-00-00', '', '', '', '', 301),
('0000-00-00 00:00:00', '', '0000-00-00', '0000-00-00', 'kosong', '', '', '', '0000-00-00', '', '', '', '', 302),
('0000-00-00 00:00:00', '', '0000-00-00', '0000-00-00', 'kosong', '', '', '', '0000-00-00', '', '', '', '', 303),
('0000-00-00 00:00:00', '', '0000-00-00', '0000-00-00', 'kosong', '', '', '', '0000-00-00', '', '', '', '', 304),
('0000-00-00 00:00:00', '', '0000-00-00', '0000-00-00', 'kosong', '', '', '', '0000-00-00', '', '', '', '', 305),
('0000-00-00 00:00:00', '', '0000-00-00', '0000-00-00', 'kosong', '', '', '', '0000-00-00', '', '', '', '', 306),
('0000-00-00 00:00:00', '', '0000-00-00', '0000-00-00', 'kosong', '', '', '', '0000-00-00', '', '', '', '', 307),
('0000-00-00 00:00:00', '', '0000-00-00', '0000-00-00', 'kosong', '', '', '', '0000-00-00', '', '', '', '', 308),
('0000-00-00 00:00:00', '', '0000-00-00', '0000-00-00', 'kosong', '', '', '', '0000-00-00', '', '', '', '', 309),
('0000-00-00 00:00:00', '', '0000-00-00', '0000-00-00', 'kosong', '', '', '', '0000-00-00', '', '', '', '', 310),
('0000-00-00 00:00:00', '', '0000-00-00', '0000-00-00', 'kosong', '', '', '', '0000-00-00', '', '', '', '', 311),
('0000-00-00 00:00:00', '', '0000-00-00', '0000-00-00', 'kosong', '', '', '', '0000-00-00', '', '', '', '', 312),
('0000-00-00 00:00:00', '', '0000-00-00', '0000-00-00', 'kosong', '', '', '', '0000-00-00', '', '', '', '', 313),
('0000-00-00 00:00:00', '', '0000-00-00', '0000-00-00', 'kosong', '', '', '', '0000-00-00', '', '', '', '', 314),
('0000-00-00 00:00:00', '', '0000-00-00', '0000-00-00', 'kosong', '', '', '', '0000-00-00', '', '', '', '', 315),
('0000-00-00 00:00:00', '', '0000-00-00', '0000-00-00', 'kosong', '', '', '', '0000-00-00', '', '', '', '', 316),
('0000-00-00 00:00:00', '', '0000-00-00', '0000-00-00', 'kosong', '', '', '', '0000-00-00', '', '', '', '', 317),
('0000-00-00 00:00:00', '', '0000-00-00', '0000-00-00', 'kosong', '', '', '', '0000-00-00', '', '', '', '', 318),
('0000-00-00 00:00:00', '', '0000-00-00', '0000-00-00', 'kosong', '', '', '', '0000-00-00', '', '', '', '', 319),
('0000-00-00 00:00:00', '', '0000-00-00', '0000-00-00', 'kosong', '', '', '', '0000-00-00', '', '', '', '', 320),
('0000-00-00 00:00:00', '', '0000-00-00', '0000-00-00', 'kosong', '', '', '', '0000-00-00', '', '', '', '', 321),
('0000-00-00 00:00:00', '', '0000-00-00', '0000-00-00', 'kosong', '', '', '', '0000-00-00', '', '', '', '', 322),
('0000-00-00 00:00:00', '', '0000-00-00', '0000-00-00', 'kosong', '', '', '', '0000-00-00', '', '', '', '', 323),
('0000-00-00 00:00:00', '', '0000-00-00', '0000-00-00', 'kosong', '', '', '', '0000-00-00', '', '', '', '', 324),
('0000-00-00 00:00:00', '', '0000-00-00', '0000-00-00', 'kosong', '', '', '', '0000-00-00', '', '', '', '', 325),
('0000-00-00 00:00:00', '', '0000-00-00', '0000-00-00', 'kosong', '', '', '', '0000-00-00', '', '', '', '', 326);

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
