-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2022 at 08:22 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wedding_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_booking`
--

CREATE TABLE `tb_booking` (
  `id_booking` int(11) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `Catering` varchar(255) NOT NULL,
  `Tempat` varchar(255) NOT NULL,
  `Jumlah_Orang` int(11) NOT NULL,
  `MC` int(11) NOT NULL,
  `Hiburan` varchar(255) NOT NULL,
  `Dekorasi` varchar(25) NOT NULL,
  `Makeup` varchar(255) NOT NULL,
  `Tanggal` date NOT NULL,
  `konfirmasi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_booking`
--

INSERT INTO `tb_booking` (`id_booking`, `Nama`, `Catering`, `Tempat`, `Jumlah_Orang`, `MC`, `Hiburan`, `Dekorasi`, `Makeup`, `Tanggal`, `konfirmasi`) VALUES
(59687, 'far', 'EATEVER Catering', 'Outdoor', 1000, 10, 'Orkestra', 'Pernikahan Adat', 'Wardah', '2022-12-23', '0'),
(72841, 'wau', 'Teratai Catering', 'Indoor', 1, 2, 'Orkestra', 'Pernikahan Adat', 'Kryolan', '0000-00-00', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tb_harga`
--

CREATE TABLE `tb_harga` (
  `id_booking` int(11) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `Harga_Catering` varchar(255) NOT NULL,
  `Harga_Tempat` varchar(255) NOT NULL,
  `Harga_Jumlah_Orang` int(11) NOT NULL,
  `Harga_MC` int(11) NOT NULL,
  `Harga_Hiburan` varchar(255) NOT NULL,
  `Harga_Dekorasi` varchar(25) NOT NULL,
  `Harga_Makeup` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_harga`
--

INSERT INTO `tb_harga` (`id_booking`, `Nama`, `Harga_Catering`, `Harga_Tempat`, `Harga_Jumlah_Orang`, `Harga_MC`, `Harga_Hiburan`, `Harga_Dekorasi`, `Harga_Makeup`) VALUES
(59687, 'far', '15000000', '10000000', 20000000, 20000000, '50000000', '100000000', '5000000'),
(72841, 'wau', '5000000', '5000000', 20000, 4000000, '50000000', '100000000', '5000000');

-- --------------------------------------------------------

--
-- Table structure for table `tb_login`
--

CREATE TABLE `tb_login` (
  `id` int(11) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(13) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_login`
--

INSERT INTO `tb_login` (`id`, `Nama`, `Username`, `Password`, `jenis_kelamin`, `email`, `phone`, `role`) VALUES
(5, '2', '2', '2', 'Perempuan', '2', 2, ''),
(1, 'far', 'wan', '1', 'Laki-Laki', '1', 1, '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_booking`
--
ALTER TABLE `tb_booking`
  ADD PRIMARY KEY (`id_booking`);

--
-- Indexes for table `tb_harga`
--
ALTER TABLE `tb_harga`
  ADD PRIMARY KEY (`id_booking`);

--
-- Indexes for table `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`Username`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
