-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2022 at 12:30 AM
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
-- Table structure for table `tabel_akun`
--

CREATE TABLE `tabel_akun` (
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `tipe` enum('Master-Admin','Admin','User','') NOT NULL,
  `validasi` tinyint(1) NOT NULL,
  `ditambahkan` datetime NOT NULL,
  `diperbarui` datetime NOT NULL,
  `dihapus` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_akun`
--

INSERT INTO `tabel_akun` (`username`, `password`, `email`, `tipe`, `validasi`, `ditambahkan`, `diperbarui`, `dihapus`) VALUES
('rdn2043', 'rdn2043', '', 'User', 0, '2022-10-10 16:51:50', '2022-10-10 16:51:50', '0000-00-00 00:00:00'),
('rdnTrue', 'rdnTrue', 'rdnTrue@gmail.com', 'User', 1, '2022-10-10 23:55:58', '2022-10-10 23:55:58', '2022-10-10 23:55:58');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_buku`
--

CREATE TABLE `tabel_buku` (
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
-- Dumping data for table `tabel_buku`
--

INSERT INTO `tabel_buku` (`id`, `isbn`, `judul`, `pengarang`, `penerbit`, `terbit`, `jumlah`, `ditambahkan`, `diperbarui`) VALUES
(1, '978-979-107-882-5', 'Akuntansi Pengantar 1', 'Supardi', 'Gava Media', 2009, 5, '2022-10-02 12:21:19.000000', '2022-10-04 12:18:15.000000'),
(2, '978-979-328-876-5', 'Aplikasi Klinis Induk Ovulasi & Stimulasi Ovariu', 'Samsulhadi', 'Sagung Seto', 2013, -1, '2022-10-02 12:21:19.000000', '2022-10-07 07:07:34.000000');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_pinjam`
--

CREATE TABLE `tabel_pinjam` (
  `username` varchar(256) NOT NULL,
  `isbn` varchar(256) NOT NULL,
  `ditambahkan` datetime(6) NOT NULL,
  `diperbarui` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_akun`
--
ALTER TABLE `tabel_akun`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `tabel_buku`
--
ALTER TABLE `tabel_buku`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_buku`
--
ALTER TABLE `tabel_buku`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
