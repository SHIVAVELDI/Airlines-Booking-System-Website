-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 23, 2020 at 08:40 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `airlines`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin_login_count` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`username`),
  UNIQUE KEY `admin_login_count` (`admin_login_count`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--


-- --------------------------------------------------------

--
-- Table structure for table `airports`
--

DROP TABLE IF EXISTS `airports`;
CREATE TABLE IF NOT EXISTS `airports` (
  `stn_code` varchar(3) NOT NULL,
  `airport_name` varchar(20) NOT NULL,
  PRIMARY KEY (`stn_code`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `airports`
--



-- --------------------------------------------------------

--
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
CREATE TABLE IF NOT EXISTS `books` (
  `booking_id` int(6) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `booking_name` varchar(50) NOT NULL,
  `Age` int(11) NOT NULL,
  `type_of_identification` varchar(50) NOT NULL,
  `id_number` varchar(50) NOT NULL,
  `phone_number` bigint(255) NOT NULL,
  `class` varchar(50) NOT NULL,
  `source` varchar(50) NOT NULL,
  `destination` varchar(50) NOT NULL,
  `halt_station` varchar(20) DEFAULT NULL,
  `plane_id1` varchar(20) NOT NULL,
  `plane_id2` varchar(20) DEFAULT NULL,
  `total_fare` int(100) NOT NULL,
  `anum` int(11) NOT NULL,
  `cnum` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `dtd1` datetime NOT NULL,
  `dta1` datetime NOT NULL,
  `dtd2` datetime DEFAULT NULL,
  `dta2` datetime DEFAULT NULL,
  PRIMARY KEY (`booking_id`,`email`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--


CREATE TABLE IF NOT EXISTS `flights` (
  `flight_id` int(11) NOT NULL AUTO_INCREMENT,
  `source` varchar(50) NOT NULL,
  `destination` varchar(50) NOT NULL,
  `stops` int(20) NOT NULL,
  `halt_station` varchar(3) DEFAULT NULL,
  PRIMARY KEY (`flight_id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flights`
--


-- --------------------------------------------------------

--
-- Table structure for table `planes`
--

DROP TABLE IF EXISTS `planes`;
CREATE TABLE IF NOT EXISTS `planes` (
  `plane_id` varchar(50) NOT NULL,
  `airlines` varchar(50) NOT NULL,
  `total_economy_seats` int(11) NOT NULL,
  `booked_economy_seats` int(11) NOT NULL,
  `total_business_seats` int(11) NOT NULL,
  `booked_business_seats` int(11) NOT NULL,
  `total_first_seats` int(11) NOT NULL,
  `booked_first_seats` int(11) NOT NULL,
  PRIMARY KEY (`plane_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `planes`
--

-----

--
-- Table structure for table `taken_by_plane`
--

DROP TABLE IF EXISTS `taken_by_plane`;
CREATE TABLE IF NOT EXISTS `taken_by_plane` (
  `flight_id` int(11) NOT NULL,
  `plane_id` varchar(20) NOT NULL,
  `path` int(10) NOT NULL,
  `path_desc` varchar(100) NOT NULL,
  `fare` int(100) NOT NULL,
  `date_of_depart` date NOT NULL,
  `time_of_depart` time NOT NULL,
  `date_of_arrival` date NOT NULL,
  `time_of_arrival` time NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--


DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(120) NOT NULL,
  `login_count` int(255) NOT NULL DEFAULT 0,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
