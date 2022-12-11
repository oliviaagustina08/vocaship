-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2022 at 11:21 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `beasiswa_internasional`
--

CREATE TABLE `beasiswa_internasional` (
  `id` int(11) NOT NULL,
  `nik` int(11) NOT NULL,
  `beasiswa` varchar(11) NOT NULL,
  `nama` varchar(11) NOT NULL,
  `jenis_kelamin` varchar(11) NOT NULL,
  `kota` varchar(12) NOT NULL,
  `date_modified` int(11) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `beasiswa_internasional`
--

INSERT INTO `beasiswa_internasional` (`id`, `nik`, `beasiswa`, `nama`, `jenis_kelamin`, `kota`, `date_modified`, `date_created`) VALUES
(23, 4322, 'IISMA Vokas', 'Izza M Hafi', 'Laki laki', 'Jakarta', 1669214655, 1669214655),
(24, 3202, '2+i Interen', 'Atsilah Mum', 'Perempuan', 'Solo', 1669214655, 1669214655);

-- --------------------------------------------------------

--
-- Table structure for table `beasiswa_nasional`
--

CREATE TABLE `beasiswa_nasional` (
  `id` int(11) NOT NULL,
  `nik` int(11) NOT NULL,
  `beasiswa` varchar(110) NOT NULL,
  `nama` varchar(21) NOT NULL,
  `jenis_kelamin` varchar(11) NOT NULL,
  `kota` varchar(12) NOT NULL,
  `date_created` int(11) NOT NULL,
  `date_modified` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `beasiswa_nasional`
--

INSERT INTO `beasiswa_nasional` (`id`, `nik`, `beasiswa`, `nama`, `jenis_kelamin`, `kota`, `date_created`, `date_modified`) VALUES
(85, 123456, 'BSI Inspirasi', 'Izza M Hafiz', 'Laki laki', 'Jakarta', 1669214648, 1669214648),
(86, 1234567, 'BSI Prestasi', 'Atsilah Mumtazah N.', 'Perempuan', 'Solo', 1669214648, 1669214648),
(87, 12345678, 'Aktivisi Salman', 'Fatin', 'Perempuan', 'Bogor', 1669214648, 1669214648);

-- --------------------------------------------------------

--
-- Table structure for table `help`
--

CREATE TABLE `help` (
  `id` int(11) NOT NULL,
  `name` varchar(35) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `help`
--

INSERT INTO `help` (`id`, `name`, `email`, `subject`, `pesan`) VALUES
(19, 'Muhammad Arya Rifan', 'muhammadaryarifan17@gmail.com', 'Informasi', 'Cara memesan?');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`) VALUES
(12312455, 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(12312456, 'user@gmail.com', 'ee11cbb19052e40b07aac0ca060c23ee', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `useri`
--

CREATE TABLE `useri` (
  `id` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `nama` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `useri`
--

INSERT INTO `useri` (`id`, `username`, `password`, `nama`) VALUES
(1, 'admin1@gmail.com', 'admin', 'arya'),
(2, 'a@gmail.com', '202cb962ac59075b964b07152d234b70', 'a'),
(3, 'a@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Muhammad Arya Rifan'),
(4, 'arya@gmail.com', '202cb962ac59075b964b07152d234b70', 'arya'),
(5, 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(6, 'user@gmail.com', 'ee11cbb19052e40b07aac0ca060c23ee', 'user'),
(7, 'arya@gmail.com', '202cb962ac59075b964b07152d234b70', 'Muhammad Arya Rifan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beasiswa_internasional`
--
ALTER TABLE `beasiswa_internasional`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `beasiswa_nasional`
--
ALTER TABLE `beasiswa_nasional`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `help`
--
ALTER TABLE `help`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `useri`
--
ALTER TABLE `useri`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beasiswa_internasional`
--
ALTER TABLE `beasiswa_internasional`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `beasiswa_nasional`
--
ALTER TABLE `beasiswa_nasional`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `help`
--
ALTER TABLE `help`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12312457;

--
-- AUTO_INCREMENT for table `useri`
--
ALTER TABLE `useri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
