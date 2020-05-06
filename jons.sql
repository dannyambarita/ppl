-- MySQL dump 10.16  Distrib 10.1.41-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: jons
-- ------------------------------------------------------
-- Server version	10.1.41-MariaDB-0ubuntu0.18.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `about`
--

DROP TABLE IF EXISTS `about`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `about` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `deskripsi` varchar(5000) NOT NULL,
  `image` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `about`
--

LOCK TABLES `about` WRITE;
/*!40000 ALTER TABLE `about` DISABLE KEYS */;
INSERT INTO `about` VALUES (1,'A Team That Feels a Whole Lot Like Family\r\n\r\nWe, Mary and Michael Gassen, are the husband and wife founding team behind Jon’s Boulangerie Patisserie. Michael is our master baker and Mary is our strategic leader. We’re proud to have built a team of bakers and service professionals who delight in taking care of each other and serving our community.\r\n\r\n\r\nWe Love Being A Bakery\r\n\r\nTo us, a bakery is everything that’s right with a neighborhood. We love working dough in the early hours of the morning, the satisfyingly straight rows of baguette, and too-adorable-to-eat cupcakes. We love putting smiles on the faces of little ones, prepping for the big meeting with a great breakfast, and giving an excuse to lingering with an old friend. We love every single minute of being your San Francisco neighborhood bakery.','aboutus.png');
/*!40000 ALTER TABLE `about` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `diskon`
--

DROP TABLE IF EXISTS `diskon`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `diskon` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `deskripsi` varchar(600) NOT NULL,
  `foto` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `diskon`
--

LOCK TABLES `diskon` WRITE;
/*!40000 ALTER TABLE `diskon` DISABLE KEYS */;
INSERT INTO `diskon` VALUES (20,'dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in ','diskon-06-05-2020-03:06:28am.png'),(21,'y7','diskon-06-05-2020-09:45:35am.png');
/*!40000 ALTER TABLE `diskon` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `faq`
--

DROP TABLE IF EXISTS `faq`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `faq` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(300) NOT NULL,
  `answer` varchar(1500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `faq`
--

LOCK TABLES `faq` WRITE;
/*!40000 ALTER TABLE `faq` DISABLE KEYS */;
INSERT INTO `faq` VALUES (6,'Buat apa data data nya?','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur s'),(7,'Kenapa gk bisa beli di sini?','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,'),(8,'Ada cabang di mana aja?','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostr'),(9,'Boleh bagi resep nya gk?','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostru GAAAKKKK');
/*!40000 ALTER TABLE `faq` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `komentar`
--

DROP TABLE IF EXISTS `komentar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `komentar` (
  `isi_komentar` varchar(500) NOT NULL,
  `id_komentar` int(255) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_komentar`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `komentar`
--

LOCK TABLES `komentar` WRITE;
/*!40000 ALTER TABLE `komentar` DISABLE KEYS */;
INSERT INTO `komentar` VALUES ('hello world!!',1,0),('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque posuere velit tortor. In sagittis, sapien a laoreet pretium, lectus erat tempus leo, vitae dapibus dui ex eu lectus. Cras leo metus, venenatis ut ex nec, feugiat placerat risus. Quisque pulvinar est in mi tincidunt, sed volutpat elit mattis. Nullam lorem elit, ornare at nulla ac, imperdiet efficitur sapien. Vivamus egestas risus quis posuere mattis. Sed convallis tempor interdum.',2,0),('asdasd',3,0),('hello world',4,0);
/*!40000 ALTER TABLE `komentar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rating`
--

DROP TABLE IF EXISTS `rating`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rating` (
  `rating_satu` int(255) NOT NULL,
  `rating_dua` int(255) NOT NULL,
  `rating_tiga` int(255) NOT NULL,
  `rating_empat` int(255) NOT NULL,
  `rating_lima` int(255) NOT NULL,
  `id_rating` int(255) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_rating`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rating`
--

LOCK TABLES `rating` WRITE;
/*!40000 ALTER TABLE `rating` DISABLE KEYS */;
INSERT INTO `rating` VALUES (1,2,3,4,5,1);
/*!40000 ALTER TABLE `rating` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roti`
--

DROP TABLE IF EXISTS `roti`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roti` (
  `nama_roti` varchar(50) NOT NULL,
  `harga_roti` int(50) NOT NULL,
  `jenis_roti` varchar(50) NOT NULL,
  `gambar_roti` varchar(50) NOT NULL,
  `id_roti` int(255) NOT NULL AUTO_INCREMENT,
  `deskripsi_roti` varchar(500) NOT NULL,
  PRIMARY KEY (`id_roti`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roti`
--

LOCK TABLES `roti` WRITE;
/*!40000 ALTER TABLE `roti` DISABLE KEYS */;
INSERT INTO `roti` VALUES ('Coconut',8000,'Bread','76d042c3-3006-47b8-b16b-6f42dafd1fe2.jpg',14,'Isian parutan kelapa'),('Mini cheddar',4000,'Bread','14c32885-0be2-4e16-8bc5-01185d231859.jpg',15,'isian keju,toping keju slice + daun parsley'),('Talas Ungu',10000,'Bread','18e14a5e-0eaf-4ed4-ac2d-8374b4cb75db.jpg',16,'isian talas+ubi ungu'),('Donat Bulat Coklat',10000,'Bread','1d1747cb-2228-4945-af28-d243deccd0c1.jpg',21,'Donut dengan toping cream dan Mesis'),('Coklat Keju',10000,'Bread','e5d1c87a-f6ea-4eec-9088-97ff75c096d2.jpg',22,'Roti dengan isi coklat pasta dan keju'),('Boomerang',12000,'Bread','5358d01b-2a8c-455e-852e-4ad4dc98364c.jpg',23,'Roti dengan isian buah pisang + coklat'),('Mini Pisang Coklat',4000,'Bread','60056fcd-32fd-4042-a32c-2dfa1658d714.jpg',24,'Roti dengan isian buah pisang dan coklat pasta, toping wijen hitam'),('Tuna Croquette',15000,'Bread','9fa7bc43-307f-41b6-8479-b292a2aab988.jpg',25,'Roti dengan isi daging ikan tuna, dan toping daun parsley'),('Super Choco',9000,'Bread','a18e3896-8da8-4780-97f8-d64c9f58ecb3.jpg',26,'Roti isiang coklat pasta ditambah dengan toping mesis'),('Banana Chese',11000,'Bread','0bfa8681-7577-4890-8f0e-9fd9e3df2f6a.jpg',27,'Roti dengan isian pisang keju, ditambah dengan toping keju parut'),('Durian Bread',16000,'Bread','433e9833-00d6-43ec-875c-6bca311dd5dc.jpg',28,'Roti dengan isian durian Medan asli'),('Mini Srikaya',4000,'Bread','f68f498f-82c0-4cc6-b9dc-1e65b69f71b5.jpg',29,'Roti mini isian selay srikaya, cocok untuk sarapan bersama anak'),('suva',2000,'Cake','',30,'enak');
/*!40000 ALTER TABLE `roti` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roti_role`
--

DROP TABLE IF EXISTS `roti_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roti_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_roti` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roti_role`
--

LOCK TABLES `roti_role` WRITE;
/*!40000 ALTER TABLE `roti_role` DISABLE KEYS */;
INSERT INTO `roti_role` VALUES (1,'Bread'),(2,'Cake'),(3,'Croissant');
/*!40000 ALTER TABLE `roti_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `special_role`
--

DROP TABLE IF EXISTS `special_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `special_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_special` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `special_role`
--

LOCK TABLES `special_role` WRITE;
/*!40000 ALTER TABLE `special_role` DISABLE KEYS */;
INSERT INTO `special_role` VALUES (1,'Enak');
/*!40000 ALTER TABLE `special_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_user` varchar(128) NOT NULL,
  `age_user` int(11) NOT NULL,
  `sex_user` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'Danny Ambarita',21,'Man','danny.ambarita130@gmail.com','default.jpg','$2y$10$dp5tBW0NnFe2O9b2sMrn3.UXSb/gckpyIYDFpbqtZvaOK2xJxGFmm',2,1,1585962911),(3,'example',19,'woman','example@gmail.com','default.jpg','$2y$10$3CnstPJHKBpQCsiiJjlzTeYF9uXxSMSppbz8XTVAOgxT5q59t0O6a',2,1,1585963021),(4,'lionel messi',33,'man','lionel.messi@gmail.com','default.jpg','$2y$10$kv2CEWSKh/wOpVKf5JGjHuA536A5O.cbnZyeZPXC0RTeZXLroNz/.',2,1,1585963352),(19,'Danny',21,'Man','ambarita.danny@gmail.com','tomorinao.png','$2y$10$6Egu8t9t4FyR2NuJq5vcO.UNjXiKEyFeMZTmhrmrerhsEaTVPBe96',1,1,1586233766),(20,'Ambarita Danny',21,'man','danny.ambarita@gmail.com','default.jpg','$2y$10$X04YWDV2FqTi9vgjSKG9Su9zV.20cKK9SdR3sOA5DjXJc6CUGu.qy',2,1,1586401414),(21,'Danny Ambarita',21,'man','danny.ambarita110@gmail.com','default.jpg','$2y$10$Jdd5IPqsuuhJ3Og9W5LyQ.SJwnvPOX3vpFP81Mc4BVnp18MjSPXOK',2,1,1586403980),(22,'Danny',21,'man','danny.ambarita131@gmail.com','default.jpg','$2y$10$IILuf6q42EfT4AMvTVHOSOxC8iXlMGsRlWaB.8tj15j6ee2oQWi3u',2,1,1586913300),(23,'suva',12,'man','suva@mail.com','default.jpg','$2y$10$WPN.FHo71JPfiwOugooauudX9lv9UoxLc/A6QA5c60KU0PgmQ6OLS',1,1,1588667845);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_role`
--

DROP TABLE IF EXISTS `user_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_role`
--

LOCK TABLES `user_role` WRITE;
/*!40000 ALTER TABLE `user_role` DISABLE KEYS */;
INSERT INTO `user_role` VALUES (1,'admin'),(2,'user');
/*!40000 ALTER TABLE `user_role` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-05-06 13:50:42
