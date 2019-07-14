-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 20, 2013 at 11:11 AM
-- Server version: 5.1.36-community-log
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `image_upload`
--

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE IF NOT EXISTS `image` (
  `image_id` int(11) NOT NULL AUTO_INCREMENT,
  `location` varchar(200) NOT NULL,
  PRIMARY KEY (`image_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`image_id`, `location`) VALUES
(2, 'upload/5a6d4ba6917ec159cc7bf0c8db52fbfd2244a058.png'),
(3, 'upload/7580_04_microsoft_and_barnes_noble_ink_windows_8_e_book_platform_deal_full.jpg'),
(4, 'upload/Download-Windows-8-for-Dummies-E-Book-for-Free.jpg'),
(5, 'upload/e.jpg'),
(6, 'upload/acer_travelmate-p243-2.jpg'),
(7, 'upload/php.png'),
(8, 'upload/Python.png'),
(9, 'upload/269140_422252297837156_102542235_n.png'),
(10, 'upload/acer15-16.jpg'),
(11, 'upload/letra-n-md.png'),
(12, 'upload/images (1).jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
