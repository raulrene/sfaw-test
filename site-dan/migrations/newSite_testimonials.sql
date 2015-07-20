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
-- Table structure for table `testimonials`
--

DROP TABLE IF EXISTS `testimonials`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(1500) NOT NULL,
  `author` varchar(1500) NOT NULL,
  `text` varchar(1500) NOT NULL,
  `img` varchar(1500) NOT NULL,
  `tag` varchar(1500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `testimonials`
--

LOCK TABLES `testimonials` WRITE;
/*!40000 ALTER TABLE `testimonials` DISABLE KEYS */;
INSERT INTO `testimonials` VALUES (1,'Learning Online Becomes Easier',' ','Academy is a perfect theme for sharing and selling your knowledge online. It’s not just a theme, but learning management system that provides great features to make learning and teaching online easier for everyone.','assets/img/slide_1.png','slider'),(2,'Learn anything online',' ','Suspendisse ante mi, iaculis ac eleifend id, venenatis non eros. Sed rhoncus gravida elit, eu sollicitudin sem iaculis. Proin scelerisque, ipsum mollis posuere metus.','assets/img/book.jpg','three-col'),(3,'Talk to experts','','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna mauris, sagittis tempus varius vel, eleifend ut metus. Pellentesque sapien tellus, accumsan.','assets/img/book.jpg','three-col'),(4,'Communicate with people','','Nullam viverra, magna vitae mollis venenatis, leo mi dignissim quam, et lacinia purus diam nec sapien. Cras aliquet, purus non rhoncus aliquet, dapibus.','assets/img/book.jpg','three-col'),(5,'','Jessica White','Pellentesque pulvinar sodales quam a placerat. Vivamus quis vitae consectetur ligula. Ut bibendum eleifend quam eget fermentum. Nulla facilisi. Augue aliquam augue vel odio faucibus luctus!','assets/img/avatar.jpg','testimonials'),(6,'','Jessica White','Pellentesque pulvinar sodales quam a placerat. Vivamus quis vitae consectetur ligula. Ut bibendum eleifend quam eget fermentum. Nulla facilisi. Augue aliquam augue vel odio faucibus luctus!','assets/img/avatar2.jpg','testimonials'),(7,'','Jessica White','Pellentesque pulvinar sodales quam a placerat. Vivamus quis vitae consectetur ligula. Ut bibendum eleifend quam eget fermentum. Nulla facilisi. Augue aliquam augue vel odio faucibus luctus!','assets/img/avatar3.jpg','testimonials'),(8,'Learning Online Becomes Easier',' ','Academy is a perfect theme for sharing and selling your knowledge online. It’s not just a theme, but learning management system that provides great features to make learning and teaching online easier for everyone.','assets/img/slide_1.png','slider'),(9,'Learning Online Becomes Easier',' ','Academy is a perfect theme for sharing and selling your knowledge online. It’s not just a theme, but learning management system that provides great features to make learning and teaching online easier for everyone.','assets/img/slide_1.png','slider');
/*!40000 ALTER TABLE `testimonials` ENABLE KEYS */;
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
