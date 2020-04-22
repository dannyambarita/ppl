-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2020 at 09:12 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `deskripsi` varchar(5000) NOT NULL,
  `image` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `deskripsi`, `image`) VALUES
(1, 'A Team That Feels a Whole Lot Like Family\r\n\r\nWe, Mary and Michael Gassen, are the husband and wife founding team behind Jon’s Boulangerie Patisserie. Michael is our master baker and Mary is our strategic leader. We’re proud to have built a team of bakers and service professionals who delight in taking care of each other and serving our community.\r\n\r\n\r\nWe Love Being A Bakery\r\n\r\nTo us, a bakery is everything that’s right with a neighborhood. We love working dough in the early hours of the morning, the satisfyingly straight rows of baguette, and too-adorable-to-eat cupcakes. We love putting smiles on the faces of little ones, prepping for the big meeting with a great breakfast, and giving an excuse to lingering with an old friend. We love every single minute of being your San Francisco neighborhood bakery.', 'aboutus.png');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `isi_komentar` varchar(500) NOT NULL,
  `id_komentar` int(255) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`isi_komentar`, `id_komentar`, `id_user`) VALUES
('hello world!!', 1, 0),
('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque posuere velit tortor. In sagittis, sapien a laoreet pretium, lectus erat tempus leo, vitae dapibus dui ex eu lectus. Cras leo metus, venenatis ut ex nec, feugiat placerat risus. Quisque pulvinar est in mi tincidunt, sed volutpat elit mattis. Nullam lorem elit, ornare at nulla ac, imperdiet efficitur sapien. Vivamus egestas risus quis posuere mattis. Sed convallis tempor interdum.', 2, 0),
('asdasd', 3, 0),
('hello world', 4, 0);

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

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`rating_satu`, `rating_dua`, `rating_tiga`, `rating_empat`, `rating_lima`, `id_rating`) VALUES
(1, 2, 3, 4, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `roti`
--

CREATE TABLE `roti` (
  `nama_roti` varchar(50) NOT NULL,
  `harga_roti` int(50) NOT NULL,
  `jenis_roti` varchar(50) NOT NULL,
  `gambar_roti` varchar(50) NOT NULL,
  `id_roti` int(255) NOT NULL,
  `deskripsi_roti` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roti`
--

INSERT INTO `roti` (`nama_roti`, `harga_roti`, `jenis_roti`, `gambar_roti`, `id_roti`, `deskripsi_roti`) VALUES
('Coconut', 8000, 'Bread', '76d042c3-3006-47b8-b16b-6f42dafd1fe2.jpg', 14, 'Isian parutan kelapa'),
('Mini cheddar', 4000, 'Bread', '14c32885-0be2-4e16-8bc5-01185d231859.jpg', 15, 'isian keju,toping keju slice + daun parsley'),
('Talas Ungu', 10000, 'Bread', '18e14a5e-0eaf-4ed4-ac2d-8374b4cb75db.jpg', 16, 'isian talas+ubi ungu');

-- --------------------------------------------------------

--
-- Table structure for table `roti_role`
--

CREATE TABLE `roti_role` (
  `id` int(11) NOT NULL,
  `jenis_roti` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roti_role`
--

INSERT INTO `roti_role` (`id`, `jenis_roti`) VALUES
(1, 'Bread'),
(2, 'Cake'),
(3, 'Croissant');

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
(1, 'Danny Ambarita', 21, 'Man', 'danny.ambarita130@gmail.com', 'default.jpg', '$2y$10$dp5tBW0NnFe2O9b2sMrn3.UXSb/gckpyIYDFpbqtZvaOK2xJxGFmm', 2, 1, 1585962911),
(3, 'example', 19, 'woman', 'example@gmail.com', 'default.jpg', '$2y$10$3CnstPJHKBpQCsiiJjlzTeYF9uXxSMSppbz8XTVAOgxT5q59t0O6a', 2, 1, 1585963021),
(4, 'lionel messi', 33, 'man', 'lionel.messi@gmail.com', 'default.jpg', '$2y$10$kv2CEWSKh/wOpVKf5JGjHuA536A5O.cbnZyeZPXC0RTeZXLroNz/.', 2, 1, 1585963352),
(19, 'Danny', 21, 'Man', 'ambarita.danny@gmail.com', 'tomorinao.png', '$2y$10$6Egu8t9t4FyR2NuJq5vcO.UNjXiKEyFeMZTmhrmrerhsEaTVPBe96', 1, 1, 1586233766),
(20, 'Ambarita Danny', 21, 'man', 'danny.ambarita@gmail.com', 'default.jpg', '$2y$10$X04YWDV2FqTi9vgjSKG9Su9zV.20cKK9SdR3sOA5DjXJc6CUGu.qy', 2, 1, 1586401414),
(21, 'Danny Ambarita', 21, 'man', 'danny.ambarita110@gmail.com', 'default.jpg', '$2y$10$Jdd5IPqsuuhJ3Og9W5LyQ.SJwnvPOX3vpFP81Mc4BVnp18MjSPXOK', 2, 1, 1586403980),
(22, 'Danny', 21, 'man', 'danny.ambarita131@gmail.com', 'default.jpg', '$2y$10$IILuf6q42EfT4AMvTVHOSOxC8iXlMGsRlWaB.8tj15j6ee2oQWi3u', 2, 1, 1586913300);

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
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `roti_role`
--
ALTER TABLE `roti_role`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id_rating` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roti`
--
ALTER TABLE `roti`
  MODIFY `id_roti` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `roti_role`
--
ALTER TABLE `roti_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
