-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 25, 2018 at 03:47 PM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `daily_expences`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `Category_id` int(11) NOT NULL AUTO_INCREMENT,
  `Category_name` varchar(50) NOT NULL,
  PRIMARY KEY (`Category_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`Category_id`, `Category_name`) VALUES
(1, 'Grocery'),
(2, 'Entertainment'),
(3, 'Vehicle'),
(4, 'Food'),
(5, 'Miscellaneous');

-- --------------------------------------------------------

--
-- Table structure for table `expences`
--

CREATE TABLE IF NOT EXISTS `expences` (
  `User_Id` int(11) NOT NULL,
  `Category_id` int(11) NOT NULL,
  `Amount` varchar(50) NOT NULL,
  `Day` int(11) NOT NULL,
  `Month` int(11) NOT NULL,
  `Name` text NOT NULL,
  `expences_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`expences_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `expences`
--

INSERT INTO `expences` (`User_Id`, `Category_id`, `Amount`, `Day`, `Month`, `Name`, `expences_id`) VALUES
(1, 1, '100', 24, 2, 'gh', 4),
(1, 1, '400', 25, 2, 'ctc', 6),
(1, 1, '123', 26, 2, 'Deep', 7),
(1, 3, '123', 25, 2, 'pq', 8),
(1, 4, '100', 2, 1, 'an', 10),
(1, 5, '200', 4, 3, 'jsdk', 11),
(1, 1, '200', 1, 1, 'sjdgf', 12);

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE IF NOT EXISTS `user_tbl` (
  `User_Id` int(11) NOT NULL AUTO_INCREMENT,
  `User_name` varchar(50) NOT NULL,
  `User_gmail` varchar(50) NOT NULL,
  `User_phone_number` varchar(10) NOT NULL,
  `User_password` varchar(50) NOT NULL,
  PRIMARY KEY (`User_Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`User_Id`, `User_name`, `User_gmail`, `User_phone_number`, `User_password`) VALUES
(1, 'a2', 'a@gmail.com', '123', 'a');
