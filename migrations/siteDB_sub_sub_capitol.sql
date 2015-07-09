CREATE DATABASE  IF NOT EXISTS `siteDB` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `siteDB`;
-- MySQL dump 10.13  Distrib 5.5.43, for debian-linux-gnu (x86_64)
--
-- Host: 127.0.0.1    Database: siteDB
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
-- Table structure for table `sub_sub_capitol`
--

DROP TABLE IF EXISTS `sub_sub_capitol`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sub_sub_capitol` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sub_capitol_id` int(11) NOT NULL,
  `nume` varchar(1500) NOT NULL,
  `order` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_subsubcapitolSubcapitol_idx` (`sub_capitol_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sub_sub_capitol`
--

LOCK TABLES `sub_sub_capitol` WRITE;
/*!40000 ALTER TABLE `sub_sub_capitol` DISABLE KEYS */;
INSERT INTO `sub_sub_capitol` VALUES (1,1,'Ghid PHP pentru incepatori',NULL),(2,2,'Notiuni elementare',NULL),(3,3,'PHP si programarea server-side',NULL),(4,3,'Programare web',NULL),(5,3,'PHP si paginile dinamice',NULL),(6,4,'Pregatirea calculatorului pentru lucrul cu PHP. Instalare PHP',NULL),(7,4,'De ce imi trebuie un server web?',NULL),(8,4,'Testarea online a codului-sursa PHP',NULL);
/*!40000 ALTER TABLE `sub_sub_capitol` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-07-09 13:20:25
