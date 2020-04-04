-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2020 at 08:54 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name_user` varchar(128) NOT NULL,
  `age_user` int(11) NOT NULL,
  `sex_user` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name_user`, `age_user`, `sex_user`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'Danny Ambarita', 21, 'man', 'danny.ambarita130@gmail.com', 'default.jpg', '$2y$10$dp5tBW0NnFe2O9b2sMrn3.UXSb/gckpyIYDFpbqtZvaOK2xJxGFmm', 2, 1, 1585962911),
(3, 'Devina Sihaloho', 19, 'woman', 'devina.sihaloho71@gmail.com', 'default.jpg', '$2y$10$3CnstPJHKBpQCsiiJjlzTeYF9uXxSMSppbz8XTVAOgxT5q59t0O6a', 2, 1, 1585963021),
(4, 'lionel messi', 33, 'man', 'lionel.messi@gmail.com', 'default.jpg', '$2y$10$kv2CEWSKh/wOpVKf5JGjHuA536A5O.cbnZyeZPXC0RTeZXLroNz/.', 2, 1, 1585963352),
(18, 'Christio Danny Gratia Ambarita', 21, 'man', 'ambarita.danny@gmail.com', 'default.jpg', '$2y$10$SZEDgp9NYovJmPWui5CifevJKZBYpT1rIS5Pde.wDNGLY6rrTLygW', 2, 1, 1586022644);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'user');

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
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id_rating` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roti`
--
ALTER TABLE `roti`
  MODIFY `id_roti` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
