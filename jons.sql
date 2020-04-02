-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2020 at 03:30 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jons`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `nama_admin` varchar(50) NOT NULL,
  `username_admin` varchar(50) NOT NULL,
  `password_admin` varchar(50) NOT NULL,
  `id_admin` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`nama_admin`, `username_admin`, `password_admin`, `id_admin`) VALUES
('Danny Ambarita', 'dannyambarita123', 'jonsbakery123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `isi_komentar` varchar(500) NOT NULL,
  `id_komentar` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`isi_komentar`, `id_komentar`) VALUES
('hello world!!', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `nama_pengguna` varchar(50) NOT NULL,
  `umur_pengguna` varchar(200) NOT NULL,
  `username_pengguna` varchar(50) NOT NULL,
  `password_pengguna` varchar(50) NOT NULL,
  `id_pengguna` int(255) NOT NULL,
  `jenis_kelamin_pengguna` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`nama_pengguna`, `umur_pengguna`, `username_pengguna`, `password_pengguna`, `id_pengguna`, `jenis_kelamin_pengguna`, `email`) VALUES
('Danny', '21', 'ekspulotion', 'asd', 3, 'laki', 'danny.ambarita130@gmail.com'),
('hello world', '31', 'asdasd', 'asdasd', 4, 'perempuan', 'email@email.com');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `rating_satu` int(255) NOT NULL,
  `rating_dua` int(255) NOT NULL,
  `rating_tiga` int(255) NOT NULL,
  `rating_empat` int(255) NOT NULL,
  `rating_lima` int(255) NOT NULL,
  `id_rating` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `roti`
--

CREATE TABLE `roti` (
  `nama_roti` varchar(50) NOT NULL,
  `harga_roti` int(50) NOT NULL,
  `jenis_roti` varchar(50) NOT NULL,
  `stok_roti` int(50) NOT NULL,
  `gambar_roti` varchar(50) NOT NULL,
  `id_roti` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roti`
--

INSERT INTO `roti` (`nama_roti`, `harga_roti`, `jenis_roti`, `stok_roti`, `gambar_roti`, `id_roti`) VALUES
('roti bakar', 10000, 'dibakar', 10, '600px-OG_RB_Logo.png', 3),
('roti coklat', 10000, 'enak', 12, '1574330094-picsay.jpg', 4),
('Christio Danny Gratia Ambarita', 10000, 'buns', 10, 'FC_Barcelona_(crest).svg.png', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id_rating`);

--
-- Indexes for table `roti`
--
ALTER TABLE `roti`
  ADD PRIMARY KEY (`id_roti`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id_rating` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roti`
--
ALTER TABLE `roti`
  MODIFY `id_roti` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
