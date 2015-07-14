-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2015 at 09:47 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `primarydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `capitol`
--

CREATE TABLE IF NOT EXISTS `capitol` (
  `id` int(11) NOT NULL,
  `capitol` varchar(255) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `url` varchar(1500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `capitol`
--

INSERT INTO `capitol` (`id`, `capitol`, `order`, `url`) VALUES
(1, 'Introducere', NULL, NULL),
(2, 'Notiuni de baza', NULL, NULL),
(3, 'Notiuni avansate', NULL, NULL),
(4, 'Aplicatii', NULL, NULL),
(5, 'Extra', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `coding`
--

CREATE TABLE IF NOT EXISTS `coding` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `coding` varchar(1500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(45) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `date` varchar(45) DEFAULT NULL,
  `comments` varchar(1500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `img`, `name`, `date`, `comments`) VALUES
(1, 'expAvatar.jpg', 'Stevie', 'February 24, 2013', 'Phasellus id velit ante, quis elementum elit. Donec bibendum consequat massa, sit amet rhoncus sapien elementum vel. Suspendisse potenti. Donec semper dapibus nisl et pellentesque. Cras vel tempus.'),
(2, 'zenith.jpg', 'Zenith', 'February 24, 2013', 'Phasellus id velit ante, quis elementum elit. Donec bibendum consequat massa, sit amet rhoncus sapien elementum vel. Suspendisse potenti. Donec semper dapibus nisl et pellentesque. Cras vel tempus.'),
(3, 'mitch.jpg', 'Mitch', 'February 24, 2013', 'Phasellus id velit ante, quis elementum elit. Donec bibendum consequat massa, sit amet rhoncus sapien elementum vel. Suspendisse potenti. Donec semper dapibus nisl et pellentesque. Cras vel tempus.');

-- --------------------------------------------------------

--
-- Table structure for table `configurare`
--

CREATE TABLE IF NOT EXISTS `configurare` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `logo` varchar(1500) DEFAULT NULL,
  `background` varchar(1500) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE IF NOT EXISTS `content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(1500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `price` varchar(550) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `author` varchar(45) DEFAULT NULL,
  `users` int(11) DEFAULT NULL,
  `stars` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `price`, `img`, `author`, `users`, `stars`) VALUES
(1, 'Basic cooking tehniques', '$128', 'cook.jpg', 'Steven Granger', 12, '4'),
(2, 'Home Fitness Training', 'FREE', 'fitt.jpg', 'Mark Blackwood', 12, '4'),
(3, 'Digital Photography', '$142', 'picc.jpg', 'Michael Lawson', 12, '3'),
(4, 'Architecture Basics', '$136', 'arch.jpg', 'Steven Granger', 11, '4'),
(5, 'Spa Treatment at Home', '$126', 'spa.jpg', 'Mark Blackwood', 14, '4'),
(6, 'Professional Singing', '$138', 'sing.jpg', 'Steven Granger', 12, '4'),
(7, 'Business Management', '$146', 'business.jpg', 'Mark Blackwood', 10, '5'),
(8, 'Club Dance Course', '$124', 'club.jpg', 'Michael lawson', 15, '4'),
(9, 'Mountain Hiking Course', '$122', 'mountain.jpg', 'Mark Blackwood', 14, '4'),
(10, 'DJ Master Lessons', '$134', 'dj.jpg', 'Steven Granger', 11, '4'),
(11, 'Home Yoga Practice', 'FREE', 'yoga.jpg', 'Michael Lawson', 14, '3'),
(12, 'Starting Online Business', '$132', 'online.jpg', 'Steven Granger', 12, '4');

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE IF NOT EXISTS `replies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(45) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `date` varchar(45) DEFAULT NULL,
  `reply` varchar(1500) DEFAULT NULL,
  `comment_id` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `replies`
--

INSERT INTO `replies` (`id`, `img`, `name`, `date`, `reply`, `comment_id`) VALUES
(1, 'herry.jpg', 'Herry', 'February 24, 2013', 'Suspendisse varius, leo nec eleifend faucibus, neque ante molestie massa, eu vestibulum massa tortor non odio. Quisque porta velit vel purus blandit faucibus elementum.', '1'),
(2, 'marco.jpg', 'Marco', 'February 24, 2013', 'Suspendisse varius, leo nec eleifend faucibus, neque ante molestie massa, eu vestibulum massa tortor non odio. Quisque porta velit vel purus blandit faucibus elementum.', '1');

-- --------------------------------------------------------

--
-- Table structure for table `sub_capitol`
--

CREATE TABLE IF NOT EXISTS `sub_capitol` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sub_capitol` varchar(255) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sub_sub_capitol`
--

CREATE TABLE IF NOT EXISTS `sub_sub_capitol` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sub_sub_capitol` varchar(255) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
