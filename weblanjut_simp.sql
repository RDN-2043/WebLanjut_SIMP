-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2022 at 08:22 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `weblanjut_simp`
--

-- --------------------------------------------------------

--
-- Table structure for table `perpustakaan`
--

CREATE TABLE `perpustakaan` (
  `id` int(5) NOT NULL,
  `isbn` varchar(17) NOT NULL,
  `judul` varchar(256) NOT NULL,
  `pengarang` varchar(256) NOT NULL,
  `penerbit` varchar(256) NOT NULL,
  `terbit` int(4) NOT NULL,
  `jumlah` int(5) NOT NULL,
  `ditambahkan` datetime(6) NOT NULL,
  `diperbarui` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `perpustakaan`
--

INSERT INTO `perpustakaan` (`id`, `isbn`, `judul`, `pengarang`, `penerbit`, `terbit`, `jumlah`, `ditambahkan`, `diperbarui`) VALUES
(1, '978-979-107-882-5', 'Akuntansi Pengantar 1', 'Supardi', 'Gava Media', 2009, 2, '2022-10-02 12:21:19.000000', '2022-10-02 12:21:19.000000'),
(2, '978-979-328-876-5', 'Aplikasi Klinis Induk Ovulasi & Stimulasi Ovariu', 'Samsulhadi', 'Sagung Seto', 2013, 2, '2022-10-02 12:21:19.000000', '2022-10-02 12:21:19.000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `perpustakaan`
--
ALTER TABLE `perpustakaan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `perpustakaan`
--
ALTER TABLE `perpustakaan`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
