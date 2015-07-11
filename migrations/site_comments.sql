CREATE DATABASE  IF NOT EXISTS `site` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `site`;
-- MySQL dump 10.13  Distrib 5.5.43, for debian-linux-gnu (x86_64)
--
-- Host: 127.0.0.1    Database: site
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
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content_id` int(11) NOT NULL,
  `comments_content` varchar(1500) NOT NULL,
  `date` datetime DEFAULT NULL,
  `tag` varchar(1500) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_comments_1_idx` (`content_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-07-09 13:21:46
ALTER TABLE `site`.`comments`
CHANGE COLUMN `content_id` `author` VARCHAR(255) NOT NULL ,
CHANGE COLUMN `comments_content` `author_img` VARCHAR(255) NOT NULL ,
CHANGE COLUMN `date` `date_posted` DATETIME NOT NULL ,
CHANGE COLUMN `tag` `comm_text` VARCHAR(1500) NOT NULL ,
ADD COLUMN `author_link` VARCHAR(255) NOT NULL AFTER `comm_text`;

INSERT INTO `site`.`comments` (`author`, `author_img`, `date_posted`, `comm_text`, `author_link`) VALUES ('Stevie', 'assets/img/stevie.jpg', 'February 24,2013', 'Phasellus id velit ante, quis elementum elit. Donec bibendum consequat massa, sit amet rhoncus sapien elementum vel. Suspendisse potenti. Donec semper dapibus nisl et pellentesque. Cras vel tempus.', '#');
INSERT INTO `site`.`comments` (`author`, `author_img`, `date_posted`, `comm_text`) VALUES ('Zenith', 'assets/img/zenith.jpg', 'February 23,2013', 'Phasellus id velit ante, quis elementum elit. Donec bibendum consequat massa, sit amet rhoncus sapien elementum vel. Suspendisse potenti. Donec semper dapibus nisl et pellentesque. Cras vel tempus.');
INSERT INTO `site`.`comments` (`author`, `author_img`, `date_posted`, `comm_text`) VALUES ('Mitch', 'asstes/img/mitch.jpg', 'February 23,2013', 'Phasellus id velit ante, quis elementum elit. Donec bibendum consequat massa, sit amet rhoncus sapien elementum vel. Suspendisse potenti. Donec semper dapibus nisl et pellentesque. Cras vel tempus.');
