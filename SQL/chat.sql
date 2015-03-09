-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 07, 2015 at 03:56 PM
-- Server version: 5.6.19-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `8ea0506edbe1c901cb472233ac31944d_1`
--

CREATE TABLE IF NOT EXISTS `8ea0506edbe1c901cb472233ac31944d_1` (
  `user_id` varchar(50) NOT NULL,
  `message` longtext,
  `user_image` longblob,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `8ea0506edbe1c901cb472233ac31944d_1`
--

INSERT INTO `8ea0506edbe1c901cb472233ac31944d_1` (`user_id`, `message`, `user_image`, `date_time`) VALUES
('8ea0506edbe1c901cb472233ac31944d', NULL, NULL, '2015-03-07 06:01:21'),
('d847f4be567df949c127b3f7955d6bd4', NULL, NULL, '2015-03-07 06:02:04');

-- --------------------------------------------------------

--
-- Table structure for table `796cc6f09e87a3900b9b6a8bc02f0b3a_2`
--

CREATE TABLE IF NOT EXISTS `796cc6f09e87a3900b9b6a8bc02f0b3a_2` (
  `user_id` varchar(50) NOT NULL,
  `message` longtext,
  `user_image` longblob,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `796cc6f09e87a3900b9b6a8bc02f0b3a_2`
--

INSERT INTO `796cc6f09e87a3900b9b6a8bc02f0b3a_2` (`user_id`, `message`, `user_image`, `date_time`) VALUES
('796cc6f09e87a3900b9b6a8bc02f0b3a', NULL, NULL, '2015-03-07 06:58:04'),
('e15f5048ed8aa7e91a9e888227dba7e7', NULL, NULL, '2015-03-07 08:00:02');

-- --------------------------------------------------------

--
-- Table structure for table `random`
--

CREATE TABLE IF NOT EXISTS `random` (
  `user_id` varchar(50) NOT NULL,
  `message` longtext NOT NULL,
  `user_image` longblob NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `session_table`
--

CREATE TABLE IF NOT EXISTS `session_table` (
  `sr_no` int(11) NOT NULL,
  `chat_table` varchar(50) NOT NULL,
  PRIMARY KEY (`sr_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `session_table`
--

INSERT INTO `session_table` (`sr_no`, `chat_table`) VALUES
(1, '8ea0506edbe1c901cb472233ac31944d_1'),
(2, '796cc6f09e87a3900b9b6a8bc02f0b3a_2');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
