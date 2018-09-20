# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.21-0ubuntu0.16.04.1)
# Database: visma
# Generation Time: 2018-09-20 21:22:54 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table clients
# ------------------------------------------------------------

DROP TABLE IF EXISTS `clients`;

CREATE TABLE `clients` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phonenumber1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phonenumber2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `clients` WRITE;
/*!40000 ALTER TABLE `clients` DISABLE KEYS */;

INSERT INTO `clients` (`id`, `created_at`, `updated_at`, `lastname`, `email`, `phonenumber1`, `phonenumber2`, `comment`)
VALUES
	(70,'2018-09-20 20:29:25','2018-09-20 20:29:25','Bezos','jeff@amazon.com','+370 (602) 45678','8 (602) 47878','loves reading'),
	(71,'2018-09-20 20:29:26','2018-09-20 20:29:26','Schmidt','eric@gmail.com','+967 125 47896','8 156 12314','ask him anything'),
	(72,'2018-09-20 20:29:26','2018-09-20 20:29:26','Hamilton','julian@thepresets.com','812378654','+370 (125) 78547','this boy’s in love'),
	(73,'2018-09-20 20:29:26','2018-09-20 20:29:26','Eno','brian@music.com','+370 (601) 45647','+372 (789) 85496','likes ambient atmosphere'),
	(74,'2018-09-20 20:29:26','2018-09-20 20:29:26','Dreijer','karin@feverray.com','+96712547326','+37012541456','has been busy, working like crazy'),
	(75,'2018-09-20 20:29:26','2018-09-20 20:29:26','Moyes','kim@thepresets.com','8 123 75254','8 653 78654','has made something good'),
	(76,'2018-09-20 20:29:26','2018-09-20 20:29:26','Parker','kevin@tameimpala.com','+370 (601) 45748','+370 (601) 46377','the less he knows the better'),
	(77,'2018-09-20 20:29:26','2018-09-20 20:29:26','Cook','tim@apple.com','+370 (602) 78978','+370 (602) 32176','is concerned about privacy, like a lot'),
	(78,'2018-09-20 20:29:26','2018-09-20 20:29:26','O','karen@yahyeahyeahs.com','8 415 75254','8 984 75352','writes good OST’s'),
	(79,'2018-09-20 20:29:26','2018-09-20 20:29:26','Gates','bill@microsoft.com','+967 964 47741','+967 145 85431','can afford it'),
	(80,'2018-09-20 20:29:26','2018-09-20 20:29:26','Musk','elon@spacex.com','+370 (603) 78412','+370 (603) 74136','lives in a simulation'),
	(81,'2018-09-20 20:29:26','2018-09-20 20:29:26','Boucher','claire@grimes.com','8 715 75254','8 635 71474','lives in Canada');

/*!40000 ALTER TABLE `clients` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`id`, `migration`, `batch`)
VALUES
	(1,'2014_10_12_000000_create_users_table',1),
	(2,'2014_10_12_100000_create_password_resets_table',1),
	(3,'2018_09_19_094350_create_clients_table',2),
	(4,'2018_09_19_151544_create_customers_table',3);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table password_resets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
