-- MySQL dump 10.13  Distrib 5.6.24, for Win32 (x86)
--
-- Host: localhost    Database: primarydb
-- ------------------------------------------------------
-- Server version	5.6.17

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
-- Table structure for table `capitol`
--

DROP TABLE IF EXISTS `capitol`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `capitol` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `capitol` varchar(45) DEFAULT NULL,
  `url` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `capitol`
--

LOCK TABLES `capitol` WRITE;
/*!40000 ALTER TABLE `capitol` DISABLE KEYS */;
INSERT INTO `capitol` VALUES (1,'Online Learning','Online-Learning'),(2,'WooCommerce','WooCommerce'),(3,'User Profiles','User -Profiles'),(4,'Media Player','Media-Player');
/*!40000 ALTER TABLE `capitol` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(45) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `date` varchar(45) DEFAULT NULL,
  `comment` varchar(1500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` VALUES (1,'expAvatar.jpg','Stevie','February 24, 2013','Phasellus id velit ante, quis elementum elit. Donec bibendum consequat massa, sit amet rhoncus sapien elementum vel. Suspendisse potenti. Donec semper dapibus nisl et pellentesque. Cras vel tempus.'),(2,'zenith.jpg','Zenith','February 24, 2013','Phasellus id velit ante, quis elementum elit. Donec bibendum consequat massa, sit amet rhoncus sapien elementum vel. Suspendisse potenti. Donec semper dapibus nisl et pellentesque. Cras vel tempus.'),(3,'mitch.jpg','Mitch','February 24, 2013','Phasellus id velit ante, quis elementum elit. Donec bibendum consequat massa, sit amet rhoncus sapien elementum vel. Suspendisse potenti. Donec semper dapibus nisl et pellentesque. Cras vel tempus.');
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `content`
--

DROP TABLE IF EXISTS `content`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text_1` varchar(1500) DEFAULT NULL,
  `text_2` varchar(1500) DEFAULT NULL,
  `text_3` varchar(1500) DEFAULT NULL,
  `sub_capitol_id` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `content`
--

LOCK TABLES `content` WRITE;
/*!40000 ALTER TABLE `content` DISABLE KEYS */;
INSERT INTO `content` VALUES (1,'Quisque id augue erat, suscipit ultricies est. Maecenas feugiat justo ac massa porttitor mollis auctor nulla ullamcorper. sed blandit interdum.','Penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer fringilla magna ut risus sagittis ultrices. Nam eget varius sem. Nam mattis consectetur suscipit. Vivamus quis ante enim. Cras id sodales metus.','Suspendisse luctus, felis at fringilla dictum, erat massa vehicula velit, id venenatis eros libero et lectus. Proin ullamcorper molestie lectus, sit amet condimentum dui tincidunt ut. In tempor faucibus eros, sed auctor orci ultricies non suspen.','1'),(2,'Nulla in orci justo. In elit elit, tempus sit amet pellentesque ut, tempus ac risus. Suspendisse imperdiet, mi in bibendum scelerisque massa.','Quisque volutpat nunc ligula. Praesent nec massa in tortor malesuada conse scelerisque. Sed lobortis interdum pulvinar. Maecenas et est vel nunc imperdiet blandit at sed turpis. Mauris non libero ut nulla tempus gravida nec vel erat.','Fusce a justo non dui imperdiet ultricies. Donec consectetur metus sed velit placerat pulvinar. Nam neque libero, tristique eu placerat sed, consectetur mattis leo. Aliquam sapien nulla, mattis ac luctus tincidunt, gravida quam.','2'),(3,'Fusce euismod euismod enim non adipiscing. Integer ante nisi, dictum tempus elementum hendrerit, convallis a tortor maecenas sed ante.','Fusce a justo non dui imperdiet ultricies. Donec consectetur metus sed velit placerat pulvinar. Nam neque libero, tristique eu placerat sed, consectetur mattis leo. Aliquam sapien nulla, mattis ac luctus tincidunt, gravida quam.','Quisque volutpat nunc ligula. Praesent nec massa in tortor malesuada conse scelerisque. Sed lobortis interdum pulvinar. Maecenas et est vel nunc imperdiet blandit at sed turpis. Mauris non libero ut nulla tempus gravida nec vel praesent.','3'),(4,'Auctor hendrerit hendrerit lacus id euismod. Aliquam erat volutpat. In in sem tortor. Vestibulum facilisis consequat purus, vel adipiscing velit.','Etiam quam est, malesuada ut fringilla eu, auctor vel odio. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer fringilla magna ut risus sagittis ultrices. Nam eget varius sem nam mattis.','Penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer fringilla magna ut risus sagittis ultrices. Nam eget varius sem. Nam mattis consectetur suscipit. Vivamus quis ante enim. Cras id sodales metus.','4');
/*!40000 ALTER TABLE `content` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `courses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `price` varchar(45) DEFAULT NULL,
  `img` varchar(45) DEFAULT NULL,
  `author` varchar(45) DEFAULT NULL,
  `users` varchar(45) DEFAULT NULL,
  `stars` varchar(45) DEFAULT NULL,
  `title_1` varchar(45) DEFAULT NULL,
  `title_2` varchar(45) DEFAULT NULL,
  `text_1` varchar(1500) DEFAULT NULL,
  `text_2` varchar(1500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `courses`
--

LOCK TABLES `courses` WRITE;
/*!40000 ALTER TABLE `courses` DISABLE KEYS */;
INSERT INTO `courses` VALUES (1,'Basic Cooking Techinques','$128','cook.jpg','Steven Granger','12','4','Course Overview','About the Author','Maecenas a leo nisi. Nam pharetra imperdiet diam, ut consequat felis egestas sagittis. Donec at nunc augue, cursus iaculis libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam dignissim lobortis ligula, quis fringilla justo dictum phasellus adipiscing dictum!','Nam sem nulla, mollis ac ullamcorper in, placerat eget lectus. Suspendisse in dui eu neque suscipit imperdiet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit aliquam lobortis.'),(2,'Home Fitness Training','FREE','fitt.jpg','Mark Blackwood','12','4','Course Overview','About the Author','Maecenas a leo nisi. Nam pharetra imperdiet diam, ut consequat felis egestas sagittis. Donec at nunc augue, cursus iaculis libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam dignissim lobortis ligula, quis fringilla justo dictum phasellus adipiscing dictum!','Nam sem nulla, mollis ac ullamcorper in, placerat eget lectus. Suspendisse in dui eu neque suscipit imperdiet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit aliquam lobortis.'),(3,'Digital Photography','$142','picc.jpg','Michael Lawson','12','3','Course Overview','About the Author','Maecenas a leo nisi. Nam pharetra imperdiet diam, ut consequat felis egestas sagittis. Donec at nunc augue, cursus iaculis libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam dignissim lobortis ligula, quis fringilla justo dictum phasellus adipiscing dictum!','Nam sem nulla, mollis ac ullamcorper in, placerat eget lectus. Suspendisse in dui eu neque suscipit imperdiet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit aliquam lobortis.'),(4,'Architecture Basics','$136','arch.jpg','Steven Granger','11','4','Course Overview','About the Author','Maecenas a leo nisi. Nam pharetra imperdiet diam, ut consequat felis egestas sagittis. Donec at nunc augue, cursus iaculis libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam dignissim lobortis ligula, quis fringilla justo dictum phasellus adipiscing dictum!','Nam sem nulla, mollis ac ullamcorper in, placerat eget lectus. Suspendisse in dui eu neque suscipit imperdiet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit aliquam lobortis.'),(5,'Spa Treatment at Home','$126','spa.jpg','Mark Blackwood','14','5','Course Overview','About the Author','Maecenas a leo nisi. Nam pharetra imperdiet diam, ut consequat felis egestas sagittis. Donec at nunc augue, cursus iaculis libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam dignissim lobortis ligula, quis fringilla justo dictum phasellus adipiscing dictum!','Nam sem nulla, mollis ac ullamcorper in, placerat eget lectus. Suspendisse in dui eu neque suscipit imperdiet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit aliquam lobortis.'),(6,'Professional Singing','$138','sing.jpg','Steven Granger','12','4','Course Overview','About the Author','Maecenas a leo nisi. Nam pharetra imperdiet diam, ut consequat felis egestas sagittis. Donec at nunc augue, cursus iaculis libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam dignissim lobortis ligula, quis fringilla justo dictum phasellus adipiscing dictum!','Nam sem nulla, mollis ac ullamcorper in, placerat eget lectus. Suspendisse in dui eu neque suscipit imperdiet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit aliquam lobortis.'),(7,'Business Management','$146','business.jpg','Mark Blackwood','10','5','Course Overview','About the Author','Maecenas a leo nisi. Nam pharetra imperdiet diam, ut consequat felis egestas sagittis. Donec at nunc augue, cursus iaculis libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam dignissim lobortis ligula, quis fringilla justo dictum phasellus adipiscing dictum!','Nam sem nulla, mollis ac ullamcorper in, placerat eget lectus. Suspendisse in dui eu neque suscipit imperdiet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit aliquam lobortis.'),(8,'Club Dance Course','$125','club.jpg','Michael Lawson','15','4','Course Overview','About the Author','Maecenas a leo nisi. Nam pharetra imperdiet diam, ut consequat felis egestas sagittis. Donec at nunc augue, cursus iaculis libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam dignissim lobortis ligula, quis fringilla justo dictum phasellus adipiscing dictum!','Nam sem nulla, mollis ac ullamcorper in, placerat eget lectus. Suspendisse in dui eu neque suscipit imperdiet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit aliquam lobortis.'),(9,'Mountain Hiking Course','$122','mountain.jpg','Mark Blackwood','14','4','Course Overview','About the Author','Maecenas a leo nisi. Nam pharetra imperdiet diam, ut consequat felis egestas sagittis. Donec at nunc augue, cursus iaculis libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam dignissim lobortis ligula, quis fringilla justo dictum phasellus adipiscing dictum!','Nam sem nulla, mollis ac ullamcorper in, placerat eget lectus. Suspendisse in dui eu neque suscipit imperdiet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit aliquam lobortis.'),(10,'DJ Master Lessons','$134','dj.jpg','Steven Granger','11','4','Course Overview','About the Author','Maecenas a leo nisi. Nam pharetra imperdiet diam, ut consequat felis egestas sagittis. Donec at nunc augue, cursus iaculis libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam dignissim lobortis ligula, quis fringilla justo dictum phasellus adipiscing dictum!','Nam sem nulla, mollis ac ullamcorper in, placerat eget lectus. Suspendisse in dui eu neque suscipit imperdiet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit aliquam lobortis.'),(11,'Steven Granger','FREE','yoga.jpg','Michael Lawson','14','3','Course Overview','About the Author','Maecenas a leo nisi. Nam pharetra imperdiet diam, ut consequat felis egestas sagittis. Donec at nunc augue, cursus iaculis libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam dignissim lobortis ligula, quis fringilla justo dictum phasellus adipiscing dictum!','Nam sem nulla, mollis ac ullamcorper in, placerat eget lectus. Suspendisse in dui eu neque suscipit imperdiet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit aliquam lobortis.'),(12,'Starting Online Business','$132','online.jpg','Steven Granger','12','4','Course Overview','About the Author','Maecenas a leo nisi. Nam pharetra imperdiet diam, ut consequat felis egestas sagittis. Donec at nunc augue, cursus iaculis libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam dignissim lobortis ligula, quis fringilla justo dictum phasellus adipiscing dictum!','Nam sem nulla, mollis ac ullamcorper in, placerat eget lectus. Suspendisse in dui eu neque suscipit imperdiet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit aliquam lobortis.');
/*!40000 ALTER TABLE `courses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `index`
--

DROP TABLE IF EXISTS `index`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `index` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `text` varchar(1500) DEFAULT NULL,
  `img` varchar(45) DEFAULT NULL,
  `tag` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `index`
--

LOCK TABLES `index` WRITE;
/*!40000 ALTER TABLE `index` DISABLE KEYS */;
INSERT INTO `index` VALUES (1,'Learning Online Becomes Easier',NULL,'Academy is a perfect theme for sharing and selling your knowledge online. It’s not just a theme, but learning management system that provides great features to make learning and teaching online easier for everyone.','slide_1.png','slide'),(2,'Learn Anything Online',NULL,'Suspendisse ante mi, iaculis ac eleifend id, venenatis non eros. Sed rhoncus gravida elit, eu sollicitudin sem iaculis. Proin scelerisque, ipsum mollis posuere metus.','book.jpg','info'),(3,'Talk to Our Experts',NULL,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna mauris, sagittis tempus varius vel, eleifend ut metus. Pellentesque sapien tellus, accumsan.','book.jpg','info'),(4,'Communicate with People',NULL,'Nullam viverra, magna vitae mollis venenatis, leo mi dignissim quam, et lacinia purus diam nec sapien. Cras aliquet, purus non rhoncus aliquet, dapibus.','book.jpg','info'),(5,NULL,'Jessica White','Pellentesque pulvinar sodales quam a placerat. Vivamus quis vitae consectetur ligula. Ut bibendum eleifend quam eget fermentum. Nulla facilisi. Augue aliquam augue vel odio faucibus luctus!','avatar.jpg','testimonials'),(6,NULL,'John Dawson','Maecenas sed metus sem, ac varius ante. Nullam non mi tempor nisl varius consectetur vel in ipsum. Vestibulum sem diam, vehicula sit amet luctus adipiscing, viverra in sem. Proin molestie.','avatar.jpg','testimonials'),(7,NULL,'Mary Springs','Donec convallis, mauris quis tempor pulvinar, lorem neque rhoncus nisl, at hendrerit quam leo volutpat est. Quisque fringilla, nulla vitae vehicula fermentum, nibh dolor tristique, scelerisque.','avatar.jpg','testimonials');
/*!40000 ALTER TABLE `index` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `replies`
--

DROP TABLE IF EXISTS `replies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `replies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(45) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `date` varchar(45) DEFAULT NULL,
  `reply` varchar(1500) DEFAULT NULL,
  `comment_id` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `replies`
--

LOCK TABLES `replies` WRITE;
/*!40000 ALTER TABLE `replies` DISABLE KEYS */;
INSERT INTO `replies` VALUES (1,'herry.jpg','Herry','February 24, 2013','Suspendisse varius, leo nec eleifend faucibus, neque ante molestie massa, eu vestibulum massa tortor non odio. Quisque porta velit vel purus blandit faucibus elementum.','1'),(2,'marco.jpg','Marco','February 24, 2013','Suspendisse varius, leo nec eleifend faucibus, neque ante molestie massa, eu vestibulum massa tortor non odio. Quisque porta velit vel purus blandit faucibus elementum.','1');
/*!40000 ALTER TABLE `replies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sub_capitol`
--

DROP TABLE IF EXISTS `sub_capitol`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sub_capitol` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sub_capitol` varchar(45) DEFAULT NULL,
  `capitol_id` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sub_capitol`
--

LOCK TABLES `sub_capitol` WRITE;
/*!40000 ALTER TABLE `sub_capitol` DISABLE KEYS */;
INSERT INTO `sub_capitol` VALUES (1,'Learning Management','1'),(2,'WooCommerce Integration','2'),(3,'Personal User Profiles','3'),(4,'Built-in Media Player','4');
/*!40000 ALTER TABLE `sub_capitol` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-07-16 15:24:08
