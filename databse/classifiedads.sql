-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 31, 2015 at 06:28 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `classifiedads`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE IF NOT EXISTS `ads` (
  `adId` int(11) NOT NULL AUTO_INCREMENT,
  `adHeading` varchar(255) NOT NULL,
  `adText` text NOT NULL,
  `adPrice` double NOT NULL,
  `adPincode` int(15) NOT NULL,
  `adImg1` varchar(500) DEFAULT NULL,
  `adImg2` varchar(500) DEFAULT NULL,
  `adImg3` varchar(500) DEFAULT NULL,
  `adImg4` varchar(500) DEFAULT NULL,
  `uId` int(11) DEFAULT NULL,
  `adRegion` varchar(255) NOT NULL,
  `adKey` varchar(500) NOT NULL,
  `opId` int(11) NOT NULL,
  `adStatus` varchar(100) NOT NULL,
  `adCity` varchar(500) NOT NULL,
  `adCountry` varchar(200) NOT NULL,
  `adDate` date NOT NULL,
  PRIMARY KEY (`adId`),
  KEY `uId` (`uId`),
  KEY `oId` (`opId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`adId`, `adHeading`, `adText`, `adPrice`, `adPincode`, `adImg1`, `adImg2`, `adImg3`, `adImg4`, `uId`, `adRegion`, `adKey`, `opId`, `adStatus`, `adCity`, `adCountry`, `adDate`) VALUES
(1, 'Apple brand new', 'xyz', 20000, 401303, 'image/ads/img1/1440923211.jpg', 'image/ads/img1/1440923211.jpg', 'image/ads/img1/1440923211.jpg', 'image/ads/img1/1440923211.jpg', 1, 'Sushant', 'accessories', 9, 'Used', 'Mumbai', 'India', '0000-00-00'),
(2, 'Mini notebook', 'Notebook used for sell.', 150, 401303, 'image/ads/img1/1440923211.jpg', 'image/ads/img1/1440923211.jpg', 'image/ads/img1/1440923211.jpg', 'image/ads/img1/1440923211.jpg', 2, 'Navi Mumbai', 'Accessories', 10, 'Used', 'Vikhroli', 'India', '0000-00-00'),
(16, 'class', 'classes for 2nd year engg students.', 401303, 401030, 'image/ads/img1/1440923211.jpg', 'image/ads/img1/1440923211.jpg', 'image/ads/img1/1440923211.jpg', 'image/ads/img1/1440923211.jpg', 2, 'Mumbai', 'services', 17, 'Used', 'Matunga', 'India', '2015-08-27'),
(17, 'Math 1 kumbhojkar', 'Sem 1 book for 1sy year engg.', 200, 401303, 'img/ads/img1/1440409448.jpg', 'img/ads/img2/1440409448.jpg', 'img/ads/img3/1440409448.png', 'img/ads/img4/1440409448.jpg', 3, 'Nishant', 'Math sem1', 3, 'Used', 'vasai', 'India', '0000-00-00'),
(18, 'yuvfiu', 'jubvg.', 1000, 401303, 'image/ads/img1/1440923211.jpg', 'image/ads/img2/1440923211.jpg', 'image/ads/img3/1440923211.jpg', 'image/ads/img4/1440923211.jpg', 3, 'vasai', 'tools', 10, 'New', 'virar', 'India', '0000-00-00'),
(19, 'Digital System textbook', 'Used text book for all 2nd year I.T.Students. ', 300, 401305, 'image/ads/img1/1440960639.jpg', 'image/ads/img2/1440960639.jpg', 'image/ads/img3/1440960639.jpg', 'image/ads/img4/1440960639.jpg', 4, 'Virar', 'Sem 4, I.T.', 2, 'Used', 'vasai', 'India', '2015-08-28'),
(20, 'HDD', 'I have hard disk 6 month old want to sell 500gb new segate', 1700, 401202, 'image/ads/img1/1440961777.jpg', 'image/ads/img2/1440961777.jpg', 'image/ads/img3/1440961777.jpg', 'image/ads/img4/1440961777.jpg', 5, 'Vikhroli', 'hard disk', 12, 'Used', 'Mumabi', 'India', '0000-00-00'),
(21, 'C by balguruswami', 'C programming book for programmer wants to learn c in details. i broght this last year and wants to sell now.\r\nits in good condition.', 200, 401300, 'image/ads/img1/1440965888.jpg', 'image/ads/img2/1440965888.jpg', 'image/ads/img3/1440965888.jpg', 'image/ads/img4/1440965888.jpg', 5, 'Virar', 'c Programming', 2, 'Used', 'Vasai', 'India', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `cId` int(11) NOT NULL AUTO_INCREMENT,
  `cName` varchar(255) NOT NULL,
  PRIMARY KEY (`cId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cId`, `cName`) VALUES
(1, 'Books'),
(2, 'Tools'),
(3, 'Electronics & computers'),
(4, 'Services'),
(5, 'Jobs');

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE IF NOT EXISTS `options` (
  `opId` int(11) NOT NULL,
  `opName` varchar(255) NOT NULL,
  `cId` int(11) NOT NULL,
  PRIMARY KEY (`opId`),
  KEY `cId` (`cId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`opId`, `opName`, `cId`) VALUES
(1, 'Computer Science', 1),
(2, 'InformationTechnology', 1),
(3, 'Mechanical', 1),
(4, 'Electronics', 1),
(5, 'Extc', 1),
(6, 'Electrical', 1),
(7, 'Civil', 1),
(8, 'Production', 1),
(9, 'WorkShoop Tools', 2),
(10, 'Drafters', 2),
(11, 'Other Tools', 2),
(12, 'Computers & Accessories', 3),
(13, 'Camera & Accessories', 3),
(14, 'Other Tools', 3),
(15, 'Education & Classes', 4),
(16, 'Web Development', 4),
(17, 'Electronics & computer Repair', 4),
(18, 'Other Services', 4),
(19, 'Internship', 5),
(20, 'Placement Books', 1),
(21, 'GRE and others Books', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `pId` int(11) NOT NULL AUTO_INCREMENT,
  `pName` varchar(255) NOT NULL,
  `pPrice` int(11) NOT NULL,
  `adId` int(11) NOT NULL,
  PRIMARY KEY (`pId`),
  KEY `adId` (`adId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `uId` int(11) NOT NULL AUTO_INCREMENT,
  `uEmail` varchar(255) NOT NULL,
  `uFirstname` varchar(255) NOT NULL,
  `uLastname` varchar(255) NOT NULL,
  `uPassword` varchar(255) NOT NULL,
  `uCity` varchar(255) NOT NULL,
  `uState` varchar(255) NOT NULL,
  `uPhone` varchar(13) NOT NULL,
  `uAddress` varchar(255) NOT NULL,
  `uPincode` varchar(15) NOT NULL,
  `uCollege` varchar(500) NOT NULL,
  PRIMARY KEY (`uId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uId`, `uEmail`, `uFirstname`, `uLastname`, `uPassword`, `uCity`, `uState`, `uPhone`, `uAddress`, `uPincode`, `uCollege`) VALUES
(1, 'sushantjadhav2010@gmail.com', 'Sushant', 'Jadhav', 'Sush', 'Virar', 'Maharashtra', '9637636952', 'House No 695 At kaner Post mandv', '401303', 'VJTI'),
(2, 'shweta@gmail.com', 'Shwetali ', 'Jadhav', 'Shweta', 'Mumbai', 'Maharashtra', '2147483647', 'Dadar West', '401019', 'SPIT'),
(3, 'nishantjadhav@gmail.com', 'Nishant', 'Jadhav', 'Nish5362', 'Kandavali', 'Maharashtra', '800697057', 'thankur college,Kandavali West', '401008', 'VJTI'),
(4, 'sushant1993jadhav@gmail.com', 'Sushant', 'Jadhav', 'Sushant1993', 'Virar', 'Maharashtra', '8983516072', 'House no 695 virar East', '401303', 'VJTI'),
(5, 'gs@gmail.com', 'Gauri', 'Sonawane', 'gauris', 'Vikhroli', 'Maharashtra', '7208292162', 'amrapali building vikhroli east', '401062', 'Vikas College');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ads`
--
ALTER TABLE `ads`
  ADD CONSTRAINT `ads_ibfk_1` FOREIGN KEY (`uId`) REFERENCES `users` (`uId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `options`
--
ALTER TABLE `options`
  ADD CONSTRAINT `options_ibfk_1` FOREIGN KEY (`cId`) REFERENCES `category` (`cId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`adId`) REFERENCES `ads` (`adId`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
