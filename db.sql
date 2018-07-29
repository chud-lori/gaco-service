-- MySQL dump 10.13  Distrib 5.7.22, for Linux (x86_64)
--
-- Host: localhost    Database: gaco
-- ------------------------------------------------------
-- Server version	5.7.22

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `alamat`
--

DROP TABLE IF EXISTS `alamat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `alamat` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kode_pos` int(11) NOT NULL,
  `alamat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `model_id` int(100) NOT NULL,
  `model_type` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alamat`
--

LOCK TABLES `alamat` WRITE;
/*!40000 ALTER TABLE `alamat` DISABLE KEYS */;
INSERT INTO `alamat` VALUES (1,57474,'Klaten',1,'App\\Models\\Bank',NULL,NULL),(2,44412,'Solo',2,'App\\Models\\Bank',NULL,NULL),(3,24124112,'asdsad',4,'App\\Models\\Bank','2018-07-21 06:50:54','2018-07-21 06:50:54'),(4,77777,'siniaja',5,'App\\Models\\User','2018-07-21 07:17:56','2018-07-21 07:17:56'),(5,88888,'disana',6,'App\\Models\\User','2018-07-21 07:41:44','2018-07-21 07:41:44'),(6,88888,'mana',7,'App\\Models\\User','2018-07-21 07:44:30','2018-07-21 07:44:30'),(7,6666,'jakarta',5,'App\\Models\\Bank','2018-07-21 09:44:58','2018-07-21 09:44:58'),(8,65839,'surakarta',8,'App\\Models\\User','2018-07-21 10:09:55','2018-07-21 10:09:55'),(9,65839,'surakarta',9,'App\\Models\\User','2018-07-21 10:10:56','2018-07-21 10:10:56'),(10,75757,'solo',8,'App\\Models\\Bank','2018-07-21 16:51:52','2018-07-21 16:51:52');
/*!40000 ALTER TABLE `alamat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ambil`
--

DROP TABLE IF EXISTS `ambil`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ambil` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `kode_pos` int(20) NOT NULL,
  `phone` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `ambil_user_id_foreign` (`user_id`),
  CONSTRAINT `ambil_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ambil`
--

LOCK TABLES `ambil` WRITE;
/*!40000 ALTER TABLE `ambil` DISABLE KEYS */;
INSERT INTO `ambil` VALUES (9,5,'hohoe','siniaja',77777,'0745873','2018-07-21 12:42:08','2018-07-21 12:42:08'),(10,6,'hoho','disana',88888,'55343','2018-07-21 13:46:28','2018-07-21 13:46:28');
/*!40000 ALTER TABLE `ambil` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bank`
--

DROP TABLE IF EXISTS `bank`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bank` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bank`
--

LOCK TABLES `bank` WRITE;
/*!40000 ALTER TABLE `bank` DISABLE KEYS */;
INSERT INTO `bank` VALUES (1,'lori bank','2018-07-20 23:58:37','2018-07-20 23:58:37'),(2,'bank lain','2018-07-21 13:31:00','2018-07-20 17:00:00'),(3,'asda','2018-07-21 06:50:46','2018-07-21 06:50:46'),(4,'asda','2018-07-21 06:50:54','2018-07-21 06:50:54'),(5,'bank lagi','2018-07-21 09:44:58','2018-07-21 09:44:58'),(8,'pemulung','2018-07-21 16:51:52','2018-07-21 16:51:52');
/*!40000 ALTER TABLE `bank` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kategori`
--

DROP TABLE IF EXISTS `kategori`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kategori` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kategori`
--

LOCK TABLES `kategori` WRITE;
/*!40000 ALTER TABLE `kategori` DISABLE KEYS */;
INSERT INTO `kategori` VALUES (1,'besi',5000,NULL,NULL),(2,'kardus',1000,NULL,NULL);
/*!40000 ALTER TABLE `kategori` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2018_07_21_042304_create_kategori_table',1),(4,'2018_07_21_050026_create_alamat_table',1),(5,'2018_07_21_050036_create_bank_table',1),(6,'2018_07_21_051711_create_transaksi_table',1),(7,'2018_07_21_051752_create_transaksi_kategori_table',1),(8,'2018_07_21_083353_create_users_meta_table',2),(9,'2018_07_21_183316_create_ambil_table',3),(10,'2018_07_21_204740_create_pikup_table',4),(11,'2018_07_21_232941_laratrust_setup_tables',5);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permission_role`
--

DROP TABLE IF EXISTS `permission_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permission_role` (
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `permission_role_role_id_foreign` (`role_id`),
  CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permission_role`
--

LOCK TABLES `permission_role` WRITE;
/*!40000 ALTER TABLE `permission_role` DISABLE KEYS */;
/*!40000 ALTER TABLE `permission_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permission_user`
--

DROP TABLE IF EXISTS `permission_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permission_user` (
  `permission_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `user_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`user_id`,`permission_id`,`user_type`),
  KEY `permission_user_permission_id_foreign` (`permission_id`),
  CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permission_user`
--

LOCK TABLES `permission_user` WRITE;
/*!40000 ALTER TABLE `permission_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `permission_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_unique` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pikup`
--

DROP TABLE IF EXISTS `pikup`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pikup` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `kategori_id` int(10) unsigned NOT NULL,
  `berat` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pikup_user_id_foreign` (`user_id`),
  KEY `pikup_kategori_id_foreign` (`kategori_id`),
  CONSTRAINT `pikup_kategori_id_foreign` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`) ON DELETE CASCADE,
  CONSTRAINT `pikup_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pikup`
--

LOCK TABLES `pikup` WRITE;
/*!40000 ALTER TABLE `pikup` DISABLE KEYS */;
INSERT INTO `pikup` VALUES (1,7,2,5,'2018-07-21 14:19:41','2018-07-21 14:19:41');
/*!40000 ALTER TABLE `pikup` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_user`
--

DROP TABLE IF EXISTS `role_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `role_user` (
  `role_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `user_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`,`user_type`),
  KEY `role_user_role_id_foreign` (`role_id`),
  CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_user`
--

LOCK TABLES `role_user` WRITE;
/*!40000 ALTER TABLE `role_user` DISABLE KEYS */;
INSERT INTO `role_user` VALUES (1,11,'App\\Models\\User');
/*!40000 ALTER TABLE `role_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'petugas','Petugas',NULL,'2018-07-21 17:00:00','2018-07-21 17:00:00');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transaksi`
--

DROP TABLE IF EXISTS `transaksi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `transaksi` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `jenis_transaksi` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `status_transaksi` smallint(6) NOT NULL DEFAULT '0',
  `user_id` int(10) unsigned NOT NULL,
  `bank_id` int(10) unsigned NOT NULL,
  `alamat_id` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `transaksi_user_id_foreign` (`user_id`),
  KEY `transaksi_bank_id_foreign` (`bank_id`),
  KEY `transaksi_alamat_id_foreign` (`alamat_id`),
  CONSTRAINT `transaksi_alamat_id_foreign` FOREIGN KEY (`alamat_id`) REFERENCES `alamat` (`id`) ON DELETE CASCADE,
  CONSTRAINT `transaksi_bank_id_foreign` FOREIGN KEY (`bank_id`) REFERENCES `bank` (`id`) ON DELETE CASCADE,
  CONSTRAINT `transaksi_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transaksi`
--

LOCK TABLES `transaksi` WRITE;
/*!40000 ALTER TABLE `transaksi` DISABLE KEYS */;
/*!40000 ALTER TABLE `transaksi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transaksi_kategori`
--

DROP TABLE IF EXISTS `transaksi_kategori`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `transaksi_kategori` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `transaksi_id` int(10) unsigned NOT NULL,
  `kategori_id` int(10) unsigned NOT NULL,
  `berat` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `transaksi_kategori_transaksi_id_foreign` (`transaksi_id`),
  KEY `transaksi_kategori_kategori_id_foreign` (`kategori_id`),
  CONSTRAINT `transaksi_kategori_kategori_id_foreign` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`) ON DELETE CASCADE,
  CONSTRAINT `transaksi_kategori_transaksi_id_foreign` FOREIGN KEY (`transaksi_id`) REFERENCES `transaksi` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transaksi_kategori`
--

LOCK TABLES `transaksi_kategori` WRITE;
/*!40000 ALTER TABLE `transaksi_kategori` DISABLE KEYS */;
/*!40000 ALTER TABLE `transaksi_kategori` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'lori','imlori000@gmail.com','$2y$10$rZKOUJTVRNSMiEodqUR6yOVXmGEPNZyI6y8v29kvdunYordG0yGNK','per9L8ZHL0AgDLVJxs8Vsx0DbLI8a8tbgSxgrJBxPAyihCLSS8NMtqeHOYBR','2018-07-20 23:25:55','2018-07-20 23:25:55'),(2,'haha','aa@aa.aa','$2y$10$F6y/PGv88hjmhFhMZE8T9usElBtuj.RQVFiOQPKpjKiKqE7MUlGei',NULL,'2018-07-21 01:08:09','2018-07-21 01:08:09'),(3,'hehe','bb@bb.bb','$2y$10$FhPQIeBWqnEZv.8UEwj50OfIpWjABZGnhJDGeiFsClp4YXzW7M9y6',NULL,'2018-07-21 02:27:37','2018-07-21 02:27:37'),(4,'hoho','ccc@cc.cc','$2y$10$mgfeQtrPhG3Peggh40Osd.FXyrdLV2LPfBNxk6ytHjM38Qm5vUXfy',NULL,'2018-07-21 02:29:11','2018-07-21 02:29:11'),(5,'hohoe','ccc@cc.cw','$2y$10$0Dz97WJnY3/iUICPytbqYeFy7xPzlH/NOHUnXOKSmIWNapF5aRXqG',NULL,'2018-07-21 07:17:56','2018-07-21 07:17:56'),(6,'hoho','a@a.a','$2y$10$cJmxIAUkd8Tqcym9IQF.MOkMpDBuvZrGDauWyjFxjmzli/WpWGsmm',NULL,'2018-07-21 07:41:44','2018-07-21 07:41:44'),(7,'ssss','s@s.s','$2y$10$flQWYRdrHx8GfONTMsUnjO9seU7C3OYKTQBbViDhznIJ.w7pn.jKy',NULL,'2018-07-21 07:44:30','2018-07-21 07:44:30'),(9,'heru','heru@gmail.com','$2y$10$FCX2y3U7ttf933CPgMcRzO/r3O3IxS8/bQTghZAOISzWTtP3PGfE.',NULL,'2018-07-21 10:10:56','2018-07-21 10:10:56'),(11,'pemulung','pem@gmail.com','$2y$10$QVvq8S/qlzJ/I1NjImCBrOwb7H6MkPG4Hyt1P5RQKh8GliVRhs2Pm',NULL,'2018-07-21 16:51:52','2018-07-21 16:51:52');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_meta`
--

DROP TABLE IF EXISTS `users_meta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_meta` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'null',
  `key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `users_meta_user_id_index` (`user_id`),
  KEY `users_meta_key_index` (`key`),
  CONSTRAINT `users_meta_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_meta`
--

LOCK TABLES `users_meta` WRITE;
/*!40000 ALTER TABLE `users_meta` DISABLE KEYS */;
INSERT INTO `users_meta` VALUES (1,3,'NULL','phone',NULL,'2018-07-21 02:27:37','2018-07-21 02:27:37'),(2,4,'string','phone','0745873','2018-07-21 02:29:11','2018-07-21 02:29:11'),(3,5,'string','phone','0745873','2018-07-21 07:17:56','2018-07-21 07:17:56'),(4,6,'string','phone','55343','2018-07-21 07:41:44','2018-07-21 07:41:44'),(5,7,'string','phone','55343','2018-07-21 07:44:30','2018-07-21 07:44:30'),(6,1,'null','phone','9999999',NULL,NULL),(8,9,'string','phone','0885720162','2018-07-21 10:10:56','2018-07-21 10:10:56');
/*!40000 ALTER TABLE `users_meta` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-07-22  7:15:03
