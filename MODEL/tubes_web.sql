-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2019 at 11:43 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `nama_user` varchar(20) NOT NULL,
  `passnya` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`nama_user`, `passnya`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `donatur`
--

CREATE TABLE `donatur` (
  `id` int(100) NOT NULL,
  `nama_don` char(20) NOT NULL,
  `alamat_don` text NOT NULL,
  `email_don` char(30) NOT NULL,
  `pass_don` varchar(10) DEFAULT NULL,
  `nohp_don` bigint(12) UNSIGNED ZEROFILL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donatur`
--

INSERT INTO `donatur` (`id`, `nama_don`, `alamat_don`, `email_don`, `pass_don`, `nohp_don`) VALUES
(1, 'Sulhen', 'Mataram', 'dfghj', 'bla', 081234543567),
(2, 'Ikii', 'Mataram', 'ikilul@gmail.com', 'iki', 081234544678),
(3, 'Hangop', 'Mataram', 'hangop@gmail.com', NULL, 019019019019),
(4, 'Ditha', 'Pagutan', 'ditha@gmail.com', NULL, 012012012012);

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE `informasi` (
  `no_informasi` varchar(10) NOT NULL,
  `jumlah_penerima` int(5) NOT NULL,
  `daerah_penerima` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `makanan`
--

CREATE TABLE `makanan` (
  `id_makanan` varchar(10) NOT NULL,
  `nama_makanan` char(10) NOT NULL,
  `jml_makanan` int(5) NOT NULL,
  `jenis_makanan` char(10) NOT NULL,
  `batas_kadaluarsa` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penjemputan`
--

CREATE TABLE `penjemputan` (
  `id_jemput` varchar(5) NOT NULL,
  `waktu_jemput` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `relawan`
--

CREATE TABLE `relawan` (
  `nama_rela` char(20) DEFAULT NULL,
  `alamat_rela` text,
  `nohp_rela` bigint(12) UNSIGNED ZEROFILL DEFAULT NULL,
  `email_rela` char(20) DEFAULT NULL,
  `pass_rela` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `relawan`
--

INSERT INTO `relawan` (`nama_rela`, `alamat_rela`, `nohp_rela`, `email_rela`, `pass_rela`) VALUES
('Sagop', 'Mataram', 081222333444, 'sagop@gmail.com', 'us');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donatur`
--
ALTER TABLE `donatur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`no_informasi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donatur`
--
ALTER TABLE `donatur`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
