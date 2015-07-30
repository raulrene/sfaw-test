CREATE DATABASE  IF NOT EXISTS `newSite` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `newSite`;
-- MySQL dump 10.13  Distrib 5.5.43, for debian-linux-gnu (x86_64)
--
-- Host: 127.0.0.1    Database: newSite
-- ------------------------------------------------------
-- Server version	5.5.43-0ubuntu0.14.04.1

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
-- Table structure for table `about`
--

DROP TABLE IF EXISTS `about`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `about` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(1500) NOT NULL,
  `sub_title` varchar(1500) NOT NULL,
  `text` varchar(1500) NOT NULL,
  `course_link` varchar(1500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `about`
--

LOCK TABLES `about` WRITE;
/*!40000 ALTER TABLE `about` DISABLE KEYS */;
INSERT INTO `about` VALUES (1,'Online Learning','Learning Management','Quisque id augue erat, suscipit ultricies est. Maecenas feugiat justo ac massa porttitor mollis auctor nulla ullamcorper. sed blandit interdum.\n\nPenatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer fringilla magna ut risus sagittis ultrices. Nam eget varius sem. Nam mattis consectetur suscipit. Vivamus quis ante enim. Cras id sodales metus.\n\nSuspendisse luctus, felis at fringilla dictum, erat massa vehicula velit, id venenatis eros libero et lectus. Proin ullamcorper molestie lectus, sit amet condimentum dui tincidunt ut. In tempor faucibus eros, sed auctor orci ultricies non suspen.','#'),(2,'WooCommerce','WooCommerce Integration','Nulla in orci justo. In elit elit, tempus sit amet pellentesque ut, tempus ac risus. Suspendisse imperdiet, mi in bibendum scelerisque massa.\n\nQuisque volutpat nunc ligula. Praesent nec massa in tortor malesuada conse scelerisque. Sed lobortis interdum pulvinar. Maecenas et est vel nunc imperdiet blandit at sed turpis. Mauris non libero ut nulla tempus gravida nec vel erat.\n\nFusce a justo non dui imperdiet ultricies. Donec consectetur metus sed velit placerat pulvinar. Nam neque libero, tristique eu placerat sed, consectetur mattis leo. Aliquam sapien nulla, mattis ac luctus tincidunt, gravida quam.','#'),(3,'User Profiles','Personal User Profiles','Fusce euismod euismod enim non adipiscing. Integer ante nisi, dictum tempus elementum hendrerit, convallis a tortor maecenas sed ante.\n\nFusce a justo non dui imperdiet ultricies. Donec consectetur metus sed velit placerat pulvinar. Nam neque libero, tristique eu placerat sed, consectetur mattis leo. Aliquam sapien nulla, mattis ac luctus tincidunt, gravida quam.\n\nQuisque volutpat nunc ligula. Praesent nec massa in tortor malesuada conse scelerisque. Sed lobortis interdum pulvinar. Maecenas et est vel nunc imperdiet blandit at sed turpis. Mauris non libero ut nulla tempus gravida nec vel praesent.','#'),(4,'Media Player','Built-in Media Player','Auctor hendrerit hendrerit lacus id euismod. Aliquam erat volutpat. In in sem tortor. Vestibulum facilisis consequat purus, vel adipiscing velit.\n\nEtiam quam est, malesuada ut fringilla eu, auctor vel odio. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer fringilla magna ut risus sagittis ultrices. Nam eget varius sem nam mattis.\n\nPenatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer fringilla magna ut risus sagittis ultrices. Nam eget varius sem. Nam mattis consectetur suscipit. Vivamus quis ante enim. Cras id sodales metus.','#');
/*!40000 ALTER TABLE `about` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-07-16 10:47:42
