-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3309
-- Generation Time: Apr 01, 2020 at 02:30 AM
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
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `admin_login_count`) VALUES
('admin', 'admin', 32);

-- --------------------------------------------------------

--
-- Table structure for table `airports`
--

DROP TABLE IF EXISTS `airports`;
CREATE TABLE IF NOT EXISTS `airports` (
  `stn_code` varchar(6) NOT NULL,
  `airport_name` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  PRIMARY KEY (`stn_code`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `airports`
--

INSERT INTO `airports` (`stn_code`, `airport_name`, `city`) VALUES
('HYD', 'Rajiv Gandhi International Airport', 'Hyderabad'),
('BOM', 'Chhatrapati Shivaji International Airport', 'Mumbai'),
('TRV', 'Trivandrum International Airport', 'Trivandrum'),
('BLR', 'Bengaluru International Airport', 'Bengaluru'),
('CCU', 'Netaji Subhash Chandra Bose International Airport', 'Kolkata'),
('DEL', 'Indira Gandhi International Airport', 'Delhi'),
('COK', 'Cochin International Airport', 'Cochin'),
('GOI', 'Goa International Airport', 'Goa'),
('BBI', 'Biju Patnaik International Airport', 'Bhubaneswar'),
('PNQ', 'Pune Airport', 'Pune'),
('MMA', 'Meenambarkkam International Airport', 'Chennai'),
('AMD', 'Sardar Vallabhbhai Patel International Airport', 'Ahmedabad'),
('ATL', 'Atlanta International Airport', 'Atlanta,Georgia'),
('PEK', 'Beijing Capital International Airport', 'Beijing'),
('LAX', 'Los Angeles International Airport', 'Los Angeles'),
('HND', 'Tokyo Haneda Airport', 'Tokyo'),
('DXB', 'Dubai International Airport', 'Dubai'),
('HKG', 'Hong Kong International Airport', 'Chek Lap Kok'),
('DFW', 'Dallas/Fort Worth International Airport', 'Texas'),
('JFK', 'John F.Kennedy International Airport', 'NewYork'),
('SIN', 'Singapore Changi Airport', 'Singapore'),
('KUL', 'Kuala Lumpur International Airport', 'Sepang');

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
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`booking_id`, `email`, `booking_name`, `Age`, `type_of_identification`, `id_number`, `phone_number`, `class`, `source`, `destination`, `halt_station`, `plane_id1`, `plane_id2`, `total_fare`, `anum`, `cnum`, `timestamp`, `dtd1`, `dta1`, `dtd2`, `dta2`) VALUES
(000048, 'shivaveldi160@gmail.com', 'K VARUN', 12, 'aadhar', '3321', 7894561234, 'first', 'HYD', 'DEL', NULL, 'SpiceJet03', NULL, 345, 5, 3, '2020-03-30 09:09:24', '2020-03-31 13:00:00', '2020-03-31 15:00:00', NULL, NULL),
(000047, 'shivaveldi160@gmail.com', 'K VARUN', 12, 'aadhar', '3321', 7894561234, 'first', 'HYD', 'DEL', NULL, 'SpiceJet03', NULL, 345, 5, 3, '2020-03-30 09:09:17', '2020-03-31 13:00:00', '2020-03-31 15:00:00', NULL, NULL),
(000046, 'shivaveldi160@gmail.com', 'shivakumar', 21, 'aadhar', '3454', 7845693215, 'first', 'HYD', 'DEL', NULL, 'SpiceJet03', NULL, 345, 5, 1, '2020-03-30 09:08:38', '2020-03-31 13:00:00', '2020-03-31 15:00:00', NULL, NULL),
(000045, 'shivaveldi160@gmail.com', 'shivakumar', 21, 'aadhar', '3454', 7845693215, 'first', 'HYD', 'DEL', NULL, 'SpiceJet03', NULL, 345, 5, 1, '2020-03-30 09:08:34', '2020-03-31 13:00:00', '2020-03-31 15:00:00', NULL, NULL),
(000044, 'shivaveldi160@gmail.com', 'shivakumar', 21, 'aadhar', '3454', 7845693215, 'first', 'HYD', 'DEL', NULL, 'SpiceJet03', NULL, 345, 5, 1, '2020-03-30 09:08:30', '2020-03-31 13:00:00', '2020-03-31 15:00:00', NULL, NULL),
(000043, 'shivaveldi160@gmail.com', 'shivakumar', 21, 'aadhar', '3454', 7845693215, 'first', 'HYD', 'DEL', NULL, 'SpiceJet03', NULL, 345, 5, 1, '2020-03-30 09:08:20', '2020-03-31 13:00:00', '2020-03-31 15:00:00', NULL, NULL),
(000042, 'shivaveldi160@gmail.com', 'shiva', 12, 'aadhar', '798997', 8158044333, 'economy', 'HYD', 'DEL', 'BBI', 'IndiGo01', 'IndiGo02', 20430, 5, 0, '2020-03-30 09:06:34', '2020-03-31 08:00:00', '2020-03-31 10:00:00', '2020-03-31 11:00:00', '2020-03-31 12:00:00'),
(000041, 'shivaveldi160@gmail.com', 'asdpkjkj', 32, 'aadhar', '56464', 9456871235, 'economy', 'DXB', 'ATL', NULL, 'Quatar02', NULL, 80000, 1, 0, '2020-03-30 08:49:10', '2020-03-30 17:00:00', '2020-03-31 08:00:00', NULL, NULL),
(000040, 'shivaveldi160@gmail.com', 'asdpkjkj', 32, 'aadhar', '56464', 9456871235, 'economy', 'DXB', 'ATL', NULL, 'Quatar02', NULL, 80000, 1, 0, '2020-03-30 08:48:36', '2020-03-30 17:00:00', '2020-03-31 08:00:00', NULL, NULL),
(000039, 'shivaveldi160@gmail.com', 'shiva', 12, 'aadhar', '54654', 8974563145, 'business', 'HYD', 'DXB', NULL, 'Quatar01', NULL, 24982, 1, 0, '2020-03-30 08:45:21', '2020-03-30 11:00:00', '2020-03-30 15:00:00', NULL, NULL),
(000038, 'shivaveldi160@gmail.com', 'shivakumar', 21, 'aadhar', '35354', 6541522356, 'economy', 'BBI', 'CCU', NULL, 'AirIndia01', NULL, 15000, 5, 2, '2020-03-30 08:21:34', '2020-03-30 08:00:00', '2020-03-30 10:00:00', NULL, NULL),
(000037, 'shivaveldi160@gmail.com', 'sony', 21, 'aadhar', '645654', 9490794677, 'economy', 'BBI', 'CCU', NULL, 'AirIndia01', NULL, 6000, 2, 1, '2020-03-30 08:19:20', '2020-03-30 08:00:00', '2020-03-30 10:00:00', NULL, NULL),
(000036, 'shivaveldi160@gmail.com', 'shivakumar', 12, 'aadhar', 'alksd', 8158044333, 'first', 'HYD', 'ATL', 'DXB', 'Quatar01', 'Quatar02', 479946, 3, 0, '2020-03-30 08:16:43', '2020-03-30 11:00:00', '2020-03-30 15:00:00', '2020-03-30 17:00:00', '2020-03-31 08:00:00'),
(000035, 'shivaveldi160@gmail.com', 'shivakumar', 12, 'aadhar', 'alksd', 8158044333, 'first', 'HYD', 'ATL', 'DXB', 'Quatar01', 'Quatar02', 479946, 3, 0, '2020-03-30 08:13:22', '2020-03-30 11:00:00', '2020-03-30 15:00:00', '2020-03-30 17:00:00', '2020-03-31 08:00:00'),
(000034, 'shivaveldi160@gmail.com', 'shivakumar', 12, 'aadhar', 'alksd', 8158044333, 'first', 'HYD', 'ATL', 'DXB', 'Quatar02', 'Quatar01', 479946, 3, 0, '2020-03-30 08:12:49', '2020-03-30 17:00:00', '2020-03-31 08:00:00', '2020-03-30 11:00:00', '2020-03-30 15:00:00'),
(000033, 'shivaveldi160@gmail.com', 'shiva', 54, 'aadhar', '45654', 8158044333, 'first', 'HYD', 'ATL', 'DXB', 'Quatar02', 'Quatar01', 319964, 2, 0, '2020-03-30 08:01:33', '2020-03-30 17:00:00', '2020-03-31 08:00:00', '2020-03-30 11:00:00', '2020-03-30 15:00:00'),
(000032, 'shivaveldi160@gmail.com', 'shiva', 54, 'aadhar', '45654', 8158044333, 'first', 'HYD', 'ATL', 'DXB', 'Quatar02', 'Quatar01', 319964, 2, 0, '2020-03-30 07:59:35', '2020-03-30 17:00:00', '2020-03-31 08:00:00', '2020-03-30 11:00:00', '2020-03-30 15:00:00'),
(000031, 'shivaveldi160@gmail.com', 'shiva', 54, 'aadhar', '45654', 8158044333, 'first', 'HYD', 'ATL', 'DXB', 'Quatar02', 'Quatar01', 319964, 2, 0, '2020-03-30 07:58:12', '2020-03-30 17:00:00', '2020-03-31 08:00:00', '2020-03-30 11:00:00', '2020-03-30 15:00:00'),
(000030, 'shivaveldi160@gmail.com', 'shiva', 54, 'aadhar', '45654', 8158044333, 'first', 'HYD', 'ATL', 'DXB', 'Quatar02', 'Quatar01', 319964, 2, 0, '2020-03-30 07:57:37', '2020-03-30 17:00:00', '2020-03-31 08:00:00', '2020-03-30 11:00:00', '2020-03-30 15:00:00'),
(000029, 'shivaveldi160@gmail.com', 'shiva', 54, 'aadhar', '45654', 8158044333, 'first', 'HYD', 'ATL', 'DXB', 'Quatar02', 'Quatar01', 319964, 2, 0, '2020-03-30 07:56:49', '2020-03-30 17:00:00', '2020-03-31 08:00:00', '2020-03-30 11:00:00', '2020-03-30 15:00:00'),
(000028, 'shivaveldi160@gmail.com', 'shiva', 54, 'aadhar', '45654', 8158044333, 'first', 'HYD', 'ATL', 'DXB', 'Quatar02', 'Quatar01', 319964, 2, 0, '2020-03-30 07:52:00', '2020-03-30 17:00:00', '2020-03-31 08:00:00', '2020-03-30 11:00:00', '2020-03-30 15:00:00'),
(000027, 'shivaveldi160@gmail.com', 'shiva', 54, 'aadhar', '45654', 8158044333, 'first', 'HYD', 'ATL', 'DXB', 'Quatar02', 'Quatar01', 319964, 2, 0, '2020-03-30 07:46:48', '2020-03-30 17:00:00', '2020-03-31 08:00:00', '2020-03-30 11:00:00', '2020-03-30 15:00:00'),
(000049, 'shivaveldi160@gmail.com', 'K VARUN', 12, 'aadhar', '3321', 7894561234, 'first', 'HYD', 'DEL', NULL, 'SpiceJet03', NULL, 345, 5, 3, '2020-03-30 09:09:28', '2020-03-31 13:00:00', '2020-03-31 15:00:00', NULL, NULL),
(000050, 'shivaveldi160@gmail.com', 'shivakumar', 12, 'aadhar', '564', 8745693215, 'first', 'HYD', 'DEL', NULL, 'SpiceJet03', NULL, 138, 2, 0, '2020-03-30 09:10:12', '2020-03-31 13:00:00', '2020-03-31 15:00:00', NULL, NULL),
(000051, 'shivaveldi160@gmail.com', 'shivakumar', 12, 'aadhar', '11321', 8158044333, 'first', 'HYD', 'DEL', NULL, 'SpiceJet03', NULL, 207, 3, 0, '2020-03-30 09:11:02', '2020-03-31 13:00:00', '2020-03-31 15:00:00', NULL, NULL),
(000052, 'demo@gmail.com', 'demo', 21, 'aadhar', '1875469321549', 8974569312, 'first', 'HYD', 'DEL', NULL, 'SpiceJet03', NULL, 20700, 3, 0, '2020-03-30 09:30:20', '2020-03-31 13:00:00', '2020-03-31 15:00:00', NULL, NULL),
(000053, 'demo@gmail.com', 'shivakumar', 21, 'aadhar', '1236547986541', 8974563126, 'first', 'HYD', 'DEL', 'BBI', 'IndiGo01', 'IndiGo02', 65000, 5, 2, '2020-03-30 09:31:45', '2020-03-31 08:00:00', '2020-03-31 10:00:00', '2020-03-31 11:00:00', '2020-03-31 12:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `flights`
--

DROP TABLE IF EXISTS `flights`;
CREATE TABLE IF NOT EXISTS `flights` (
  `flight_id` int(11) NOT NULL AUTO_INCREMENT,
  `source` varchar(50) NOT NULL,
  `destination` varchar(50) NOT NULL,
  `stops` int(20) NOT NULL DEFAULT 0,
  `halt_station` varchar(3) DEFAULT NULL,
  PRIMARY KEY (`flight_id`)
) ENGINE=MyISAM AUTO_INCREMENT=77 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flights`
--

INSERT INTO `flights` (`flight_id`, `source`, `destination`, `stops`, `halt_station`) VALUES
(76, 'PNQ', 'GOI', 0, NULL),
(75, 'HYD', 'PNQ', 0, NULL),
(73, 'HYD', 'GOI', 0, NULL),
(72, 'HYD', 'DEL', 0, NULL),
(71, 'HYD', 'DEL', 0, NULL),
(70, 'BBI', 'DEL', 0, NULL),
(69, 'HYD', 'BBI', 0, NULL),
(68, 'HYD', 'DEL', 1, 'BBI'),
(67, 'BBI', 'DEL', 0, NULL),
(64, 'HYD', 'CCU', 0, NULL),
(65, 'HYD', 'DEL', 1, 'BBI'),
(66, 'HYD', 'BBI', 0, NULL),
(60, 'DXB', 'ATL', 0, NULL),
(59, 'HYD', 'DXB', 0, NULL),
(58, 'HYD', 'ATL', 1, 'DXB'),
(48, 'BBI', 'CCU', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `from_to_intermediate`
--

DROP TABLE IF EXISTS `from_to_intermediate`;
CREATE TABLE IF NOT EXISTS `from_to_intermediate` (
  `flight_id` int(11) NOT NULL,
  `stn_code` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `has_booked_seats_in_plane`
--

DROP TABLE IF EXISTS `has_booked_seats_in_plane`;
CREATE TABLE IF NOT EXISTS `has_booked_seats_in_plane` (
  `flight_id` int(11) NOT NULL,
  `plane_id` varchar(50) NOT NULL,
  `booked_economy_seats` int(11) DEFAULT 0,
  `booked_business_seats` int(11) NOT NULL DEFAULT 0,
  `booked_first_seats` int(11) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `has_booked_seats_in_plane`
--

INSERT INTO `has_booked_seats_in_plane` (`flight_id`, `plane_id`, `booked_economy_seats`, `booked_business_seats`, `booked_first_seats`) VALUES
(48, 'AirIndia01', 7, 0, 0),
(64, 'SpiceJet01', 0, 0, 0),
(63, 'UN02', 0, 0, 0),
(62, 'UN01', 0, 0, 0),
(61, 'UN02', 0, 0, 0),
(61, 'UN01', 0, 0, 0),
(60, 'Quatar02', 2, 0, 6),
(59, 'Quatar01', 0, 1, 6),
(58, 'Quatar02', 2, 0, 6),
(58, 'Quatar01', 0, 1, 6),
(65, 'IndiGo01', 5, 0, 5),
(65, 'IndiGo02', 5, 0, 5),
(66, 'IndiGo01', 5, 0, 5),
(67, 'IndiGo02', 5, 0, 5),
(68, 'AirIndia01', 0, 0, 0),
(68, 'AirIndia02', 0, 0, 0),
(69, 'AirIndia01', 0, 0, 0),
(70, 'AirIndia02', 0, 0, 0),
(71, 'GoAir01', 0, 0, 0),
(72, 'SpiceJet03', 0, 0, 40),
(73, 'Emirates02', 0, 0, 0),
(74, 'AirIndiaExpress01', 0, 0, 0),
(74, 'AirIndiaExpress02', 0, 0, 0),
(75, 'AirIndiaExpress01', 0, 0, 0),
(76, 'AirIndiaExpress02', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `planes`
--

DROP TABLE IF EXISTS `planes`;
CREATE TABLE IF NOT EXISTS `planes` (
  `plane_id` varchar(50) NOT NULL,
  `airlines` varchar(50) NOT NULL,
  `total_economy_seats` int(11) NOT NULL,
  `total_business_seats` int(11) NOT NULL,
  `total_first_seats` int(11) NOT NULL,
  PRIMARY KEY (`plane_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `planes`
--

INSERT INTO `planes` (`plane_id`, `airlines`, `total_economy_seats`, `total_business_seats`, `total_first_seats`) VALUES
('SpiceJet01', 'SpiceJet', 60, 50, 40),
('IndiGo03', 'IndiGo', 60, 50, 40),
('IndiGo02', 'IndiGo', 40, 30, 20),
('IndiGo01', 'IndiGo', 80, 60, 40),
('AirIndiaExpress03', 'Air India Express', 80, 60, 40),
('AirIndiaExpress02', 'Air India Express', 60, 40, 30),
('AirIndiaExpress01', 'Air India Express', 50, 30, 20),
('AirIndia03', 'AirIndia', 50, 30, 20),
('AirIndia02', 'AirIndia', 80, 60, 40),
('AirIndia01', 'AirIndia', 80, 60, 40),
('SpiceJet02', 'SpiceJet', 60, 50, 40),
('SpiceJet03', 'SpiceJet', 60, 50, 40),
('GoAir01', 'GoAir', 80, 50, 40),
('GoAir02', 'GoAir', 90, 70, 50),
('GoAir03', 'GoAir', 90, 70, 50),
('Quatar01', 'Qatar Airways', 90, 70, 50),
('Quatar02', 'Qatar Airways', 100, 80, 40),
('Quatar03', 'Qatar Airways', 50, 60, 40),
('Singapore01', 'Singapore Airlines', 100, 70, 70),
('Singapore02', 'Singapore Airlines', 100, 70, 70),
('Singapore03', 'Singapore Airlines', 80, 60, 40),
('Emirates01', 'Emirates', 80, 60, 40),
('Emirates02', 'Emirates', 80, 60, 40),
('Emirates03', 'Emirates', 80, 60, 40),
('Thai01', 'Thai Airways', 80, 60, 40),
('Thai02', 'Thai Airways', 80, 60, 40),
('UN01', 'United Airways', 80, 60, 40),
('UN02', 'United Airways', 80, 60, 40);

-- --------------------------------------------------------

--
-- Table structure for table `taken_by_plane`
--

DROP TABLE IF EXISTS `taken_by_plane`;
CREATE TABLE IF NOT EXISTS `taken_by_plane` (
  `flight_id` int(11) NOT NULL,
  `plane_id` varchar(20) NOT NULL,
  `path` int(10) NOT NULL,
  `path_desc` varchar(100) NOT NULL,
  `date_of_depart` date NOT NULL,
  `time_of_depart` time NOT NULL,
  `date_of_arrival` date NOT NULL,
  `time_of_arrival` time NOT NULL,
  `economy_fare` int(11) NOT NULL,
  `business_fare` int(11) NOT NULL,
  `first_fare` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `taken_by_plane`
--

INSERT INTO `taken_by_plane` (`flight_id`, `plane_id`, `path`, `path_desc`, `date_of_depart`, `time_of_depart`, `date_of_arrival`, `time_of_arrival`, `economy_fare`, `business_fare`, `first_fare`) VALUES
(48, 'AirIndia01', 0, 'D irect', '2020-03-30', '08:00:00', '2020-03-30', '10:00:00', 3000, 6000, 10000),
(65, 'IndiGo01', 1, 'HYD to BBI', '2020-03-31', '08:00:00', '2020-03-31', '10:00:00', 2000, 3000, 5000),
(65, 'IndiGo02', 2, 'BBI to DEL', '2020-03-31', '11:00:00', '2020-03-31', '12:00:00', 2086, 5614, 8000),
(66, 'IndiGo01', 0, 'Direct', '2020-03-31', '08:00:00', '2020-03-31', '10:00:00', 2000, 3000, 5000),
(67, 'IndiGo02', 0, 'Direct', '2020-03-31', '11:00:00', '2020-03-31', '12:00:00', 2086, 5614, 8000),
(60, 'Quatar02', 0, 'Direct', '2020-03-30', '17:00:00', '2020-03-31', '08:00:00', 80000, 100000, 125000),
(59, 'Quatar01', 0, 'Direct', '2020-03-30', '11:00:00', '2020-03-30', '15:00:00', 14982, 24982, 34982),
(58, 'Quatar02', 2, 'DXB to ATL', '2020-03-30', '17:00:00', '2020-03-31', '08:00:00', 80000, 100000, 125000),
(58, 'Quatar01', 1, 'HYD to DXB', '2020-03-30', '11:00:00', '2020-03-30', '15:00:00', 14982, 24982, 34982),
(64, 'SpiceJet01', 0, 'Direct', '2020-03-30', '08:00:00', '2020-03-30', '10:00:00', 3000, 4000, 5000),
(68, 'AirIndia01', 1, 'HYD to BBI', '2020-03-31', '01:00:00', '2020-03-31', '03:00:00', 1035, 4564, 8156),
(68, 'AirIndia02', 2, 'BBI to DEL', '2020-03-31', '05:00:00', '2020-03-31', '06:30:00', 4565, 5666, 6100),
(69, 'AirIndia01', 0, 'Direct', '2020-03-31', '01:00:00', '2020-03-31', '03:00:00', 1035, 4564, 8156),
(70, 'AirIndia02', 0, 'Direct', '2020-03-31', '05:00:00', '2020-03-31', '06:30:00', 4565, 5666, 6100),
(71, 'GoAir01', 0, 'Direct', '2020-03-31', '14:00:00', '2020-03-31', '16:00:00', 3000, 5000, 6000),
(72, 'SpiceJet03', 0, 'Direct', '2020-03-31', '13:00:00', '2020-03-31', '15:00:00', 3569, 5846, 6900),
(73, 'Emirates02', 0, 'Direct', '2020-03-31', '22:01:00', '2020-03-31', '23:00:00', 2256, 2931, 4394),
(75, 'AirIndiaExpress01', 0, 'Direct', '2020-03-31', '10:00:00', '2020-03-31', '11:00:00', 1000, 2000, 3000),
(76, 'AirIndiaExpress02', 0, 'Direct', '2020-03-31', '12:00:00', '2020-03-31', '13:00:00', 1000, 2000, 3000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
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

INSERT INTO `users` (`name`, `email`, `password`, `login_count`) VALUES
('shivakumar', 'shivaveldi160@gmail.com', '386576eb22f85ed2c01be368a1abc6d9', 50),
('shankar', 'shankarveldi71@gmail.com', 'e36746428c0084e5444890f46c97b6b8', 8),
('rama', 'rama@gmail.com', 'e04f28cc33cb20274dd3ff44e600a923', 1),
('K VARUN', 'vsk.3104@gmail.com', 'd1d334727243fced2e3fecf56faada86', 0),
('K VARUN', 'vsk.310@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 0),
('K VARUN', 'vsk.31@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 0),
('d', 'shi@gmail.com', '5fc7ed49e79e0de3a3e93c2fefb84221', 0),
('d', 'shi@gmail.co', 'f970e2767d0cfe75876ea857f92e319b', 0),
('d', 'shi@gmail.c', '81dc9bdb52d04dc20036dbd8313ed055', 0),
('test', 'test@gmail.com', '098f6bcd4621d373cade4e832627b4f6', 1),
('demo', 'demo@gmail.com', 'fe01ce2a7fbac8fafaed7c982a04e229', 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
