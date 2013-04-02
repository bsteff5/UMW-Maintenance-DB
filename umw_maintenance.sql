-- phpMyAdmin SQL Dump
-- version 3.3.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 01, 2013 at 08:13 PM
-- Server version: 5.1.63
-- PHP Version: 5.3.5-1ubuntu7.11

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `umw_maintenance`
--
CREATE DATABASE `umw_maintenance` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `umw_maintenance`;

-- --------------------------------------------------------

--
-- Table structure for table `buildings`
--

CREATE TABLE IF NOT EXISTS `buildings` (
  `buildingId` int(2) NOT NULL,
  `buildingName` varchar(80) NOT NULL,
  PRIMARY KEY (`buildingId`),
  KEY `buildingName` (`buildingName`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `buildings`
--

INSERT INTO `buildings` (`buildingId`, `buildingName`) VALUES
(0, '1004 College Avenue'),
(1, '1201 William Street'),
(2, 'Alvey Hall'),
(3, 'Alvey House'),
(4, 'Anderson Center'),
(5, 'Amnex A'),
(6, 'Amnex B'),
(7, 'Arlington Hall'),
(8, 'Art Gallery'),
(9, 'Ball Hall'),
(10, 'Battleground Athletic Complex'),
(11, 'Bell Tower'),
(12, 'Brent House'),
(13, 'Brompton'),
(14, 'Bushnell Hall'),
(15, 'Chandler Hall'),
(16, 'Combs Hall'),
(17, 'Cornell House'),
(18, 'Custis Hall'),
(19, 'duPont Hall'),
(20, 'Eagle Landing'),
(21, 'Fairfax House'),
(22, 'Fitness Center'),
(23, 'Framar House'),
(24, 'George Washington Hall'),
(25, 'Goolrick Hall'),
(26, 'Hamlet House'),
(27, 'Heating Plant'),
(28, 'Jefferson Hall'),
(29, 'Jepson Alumni Executive Center'),
(30, 'Jepson Science Center'),
(31, 'Lee Hall'),
(32, 'Simpson Library'),
(33, 'Madison Hall'),
(34, 'Marshall Hall'),
(35, 'Marye House'),
(36, 'Mason Hall'),
(37, 'Melchers Hall'),
(38, 'Mercer Hall'),
(39, 'Monroe Hall'),
(40, 'Parking Deck'),
(41, 'Physical Plant'),
(42, 'Pollard Hall'),
(43, 'Randolph Hall'),
(44, 'Russell Hall'),
(45, 'Seacobeck Hall'),
(46, 'South Hall'),
(47, 'Tennis Center'),
(48, 'Trinkle Hall'),
(49, 'Tyler House'),
(50, 'University Apartments'),
(51, 'Virginia Hall'),
(52, 'Westmoreland Hall'),
(53, 'Willard Hall'),
(54, 'Woodard Campus Center');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE IF NOT EXISTS `reports` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `Description` longtext NOT NULL,
  `ReportDate` date NOT NULL,
  `Priority` int(11) DEFAULT '0',
  `BuildingID` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=0 ;

--
-- Dumping data for table `reports`
--


-- --------------------------------------------------------

--
-- Table structure for table `resolved`
--

CREATE TABLE IF NOT EXISTS `resolved` (
  `id` bigint(20) NOT NULL,
  `Description` longtext NOT NULL,
  `Priority` int(11) NOT NULL,
  `BuildingID` int(3) NOT NULL,
  `ResolveDate` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resolved`
--


-- --------------------------------------------------------

--
-- Table structure for table `room_problems`
--

CREATE TABLE IF NOT EXISTS `room_problems` (
  `report_id` int(3) NOT NULL AUTO_INCREMENT,
  `room` int(3) NOT NULL,
  PRIMARY KEY (`report_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=0 ;

--
-- Dumping data for table `room_problems`
--


-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE IF NOT EXISTS `rooms` (
  `room` int(3) NOT NULL,
  `BuildingID` int(3) NOT NULL,
  PRIMARY KEY (`room`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--


-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(80) NOT NULL,
  `permissions` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `permissions`) VALUES
(1, 'admin', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918', 0);
