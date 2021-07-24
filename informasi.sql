-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2021 at 04:07 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `absensi`
--

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE `informasi` (
  `id_info` int(11) NOT NULL,
  `judul_info` varchar(255) NOT NULL,
  `isi` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `informasi`
--

INSERT INTO `informasi` (`id_info`, `judul_info`, `isi`, `file`) VALUES
(1, 'PPKM DARURAT', 'PPKM DARURAT 3 JULI 2021 - 20 JULI 2021', '003-Alur_Pengajuan_Proposal_Tahap_2_TA__2020-2021.pdf'),
(2, 'PPKM DARURAT', 'PPKM DARURAT 3 JULI 2021 - 20 JULI 2021', '003-Alur_Pengajuan_Proposal_Tahap_2_TA__2020-20211.pdf'),
(3, 'LIBURRRRRRRRRRRRRR', 'LIBURRRRRRRRRRRRRRRRRRRRRRRRRRRRRR', '29-4.pdf'),
(4, 'LIBUR', 'PPKM DARURAT 3 JULI 2021 - 20 JULI 2021', ''),
(5, 'axd', 'axv', ''),
(6, 'qe', 'qe', '293.pdf'),
(7, 'mm', 'mm', 'Proposal_PKL_TI_2020-2021.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id_info`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id_info` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
