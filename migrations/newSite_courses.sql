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
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `courses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(1500) NOT NULL,
  `author` varchar(1500) NOT NULL,
  `picture` varchar(1500) NOT NULL,
  `user` varchar(1500) NOT NULL,
  `price` varchar(1500) NOT NULL,
  `stars` varchar(1500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `courses`
--

LOCK TABLES `courses` WRITE;
/*!40000 ALTER TABLE `courses` DISABLE KEYS */;
INSERT INTO `courses` VALUES (1,'Basic cooking tehniques','Steven Granger','assets/img/cook.jpg','12','128','4'),(2,'Home Fitness Training','Mark Blackwood','assets/img/fitt.jpg','11','FREE','4'),(3,'Digital Photography','Michael Lawson','assets/img/picc.jpg','12','142','3'),(4,'Architecture Basics','Steven Granger','assets/img/arch.jpg','11','136','4'),(5,'Spa Treatment at Home','Mark Blackwood','assets/img/spa.jpg','14','126','5'),(6,'Professional Singing','Steven Granger','assets/img/image_47.jpg','12','138','4'),(7,'Business Management','Mark Blackwood','assets/img/image_48.jpg','10','146','5'),(8,'Club Dance Course','Michael Lawson','assets/img/image_54.jpg','15','124','4'),(9,'Mountain Hiking Course','Mark Blackwood','assets/img/image_52.jpg','14','122','4'),(10,'DJ Master Lessons','Steven Granger','assets/img/image_55.jpg','11','134','4'),(11,'Home Yoga Practice','Michael Lawson','assets/img/image_53.jpg','14','FREE','3'),(12,'Starting Online Business','Steven Granger','assets/img/image_56.jpg','12','132','4');
/*!40000 ALTER TABLE `courses` ENABLE KEYS */;
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
