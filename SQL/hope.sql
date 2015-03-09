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
-- Database: `hope`
--

-- --------------------------------------------------------

--
-- Table structure for table `6c3aa803929c5304db58ad5f109d2955_blogs`
--

CREATE TABLE IF NOT EXISTS `6c3aa803929c5304db58ad5f109d2955_blogs` (
  `shared` varchar(500) DEFAULT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `74be16979710d4c4e7c6647856088456_blogs`
--

CREATE TABLE IF NOT EXISTS `74be16979710d4c4e7c6647856088456_blogs` (
  `shared` varchar(500) DEFAULT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2806109b5862c0a91f3150fd09929ed4_blogs`
--

CREATE TABLE IF NOT EXISTS `2806109b5862c0a91f3150fd09929ed4_blogs` (
  `shared` varchar(500) DEFAULT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2806109b5862c0a91f3150fd09929ed4_blogs`
--

INSERT INTO `2806109b5862c0a91f3150fd09929ed4_blogs` (`shared`, `date_time`) VALUES
('    \r\n    2806109b5862c0a91f3150fd09929ed4_blogs    ', '2015-03-06 15:53:46'),
('    \r\n    welcome to my blogs', '2015-03-06 15:56:36'),
('    \r\n welcome again', '2015-03-06 15:57:23'),
('    \r\n    help\r\nhelp\r\n    help\r\nhelp\r\n    help\r\nhelp\r\n    help\r\nhelp\r\n    help\r\nhelp\r\n    help\r\nhelp\r\n    help\r\nhelp\r\n    help\r\nhelp\r\n    help\r\nhelp\r\n    help\r\nhelp\r\n    help\r\nhelp\r\n\r\n', '2015-03-06 16:01:43'),
('    \r\n  This is my blog', '2015-03-06 16:12:09'),
('    ashdiaischiascnas\r\n', '2015-03-07 07:06:41'),
('    Hi there!', '2015-03-07 09:31:37');

-- --------------------------------------------------------

--
-- Table structure for table `a92cac2ca1f12cebaf85433f6c21e51f_blogs`
--

CREATE TABLE IF NOT EXISTS `a92cac2ca1f12cebaf85433f6c21e51f_blogs` (
  `shared` varchar(500) DEFAULT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `a_blogs`
--

CREATE TABLE IF NOT EXISTS `a_blogs` (
  `shared` varchar(500) DEFAULT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `c19eec92ec2a7fd41ef0786b7fbe130b_blogs`
--

CREATE TABLE IF NOT EXISTS `c19eec92ec2a7fd41ef0786b7fbe130b_blogs` (
  `shared` varchar(500) DEFAULT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `caancer`
--

CREATE TABLE IF NOT EXISTS `caancer` (
  `username` varchar(50) NOT NULL,
  `shared` varchar(5000) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `caancer`
--

INSERT INTO `caancer` (`username`, `shared`, `date_time`) VALUES
('Aashiq Ahmed', 'Welcome to my world!.', '2015-03-07 02:16:50'),
('Afzal Juneja', '    \r\n    caancer    ', '2015-03-07 02:57:53'),
('Afzal Juneja', '    \r\n    caanc', '2015-03-07 07:49:28'),
('Afzal Juneja', '    \r\n    caancer    ', '2015-03-07 09:35:16'),
('Aashiq Ahmed', ' This is Cancer page', '2015-03-07 09:59:21');

-- --------------------------------------------------------

--
-- Table structure for table `e152a2d614a9af25e3612f224b876a82_blogs`
--

CREATE TABLE IF NOT EXISTS `e152a2d614a9af25e3612f224b876a82_blogs` (
  `shared` varchar(500) DEFAULT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `e613f7269ee16994a89232324c6ebefd_blogs`
--

CREATE TABLE IF NOT EXISTS `e613f7269ee16994a89232324c6ebefd_blogs` (
  `shared` varchar(500) DEFAULT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE IF NOT EXISTS `feedbacks` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phno` int(15) NOT NULL,
  `comment` varchar(1000) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`name`, `email`, `phno`, `comment`, `date_time`) VALUES
('afzal', 'a@b.com', 784, 'sdfdsfdsf', '2015-03-07 08:57:18'),
('Ashiq ', 'sachin.ten01@gmail.com', 2147483647, 'Hi this is ashiq ahamed from anjuman-i-islam kalsekar technical campus', '2015-03-07 08:58:35'),
('as', 'a@d.com', 898986352, 'mkknjavkshcva  ashdjavsdasd', '2015-03-07 09:02:35'),
('sameer', 's@b.com', 789456, 'juneja', '2015-03-07 09:11:28');

-- --------------------------------------------------------

--
-- Table structure for table `heart`
--

CREATE TABLE IF NOT EXISTS `heart` (
  `username` varchar(50) NOT NULL,
  `shared` varchar(5000) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `heart`
--

INSERT INTO `heart` (`username`, `shared`, `date_time`) VALUES
('Afzal', 'hello world', '2015-03-07 02:01:09');

-- --------------------------------------------------------

--
-- Table structure for table `hiv`
--

CREATE TABLE IF NOT EXISTS `hiv` (
  `username` varchar(50) NOT NULL,
  `shared` varchar(5000) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hiv`
--

INSERT INTO `hiv` (`username`, `shared`, `date_time`) VALUES
('Mannan', 'This is HIV part', '2015-03-07 02:18:21'),
('Afzal Juneja', '    \r\n    caancer    ', '2015-03-07 07:49:49');

-- --------------------------------------------------------

--
-- Table structure for table `malaria`
--

CREATE TABLE IF NOT EXISTS `malaria` (
  `username` varchar(50) NOT NULL,
  `shared` varchar(5000) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `malaria`
--

INSERT INTO `malaria` (`username`, `shared`, `date_time`) VALUES
('Mohd Shaddir', 'This our Algorithm 1.0 project.', '2015-03-07 02:12:53');

-- --------------------------------------------------------

--
-- Table structure for table `mannan_blogs`
--

CREATE TABLE IF NOT EXISTS `mannan_blogs` (
  `followedby` varchar(500) DEFAULT NULL,
  `following` varchar(500) DEFAULT NULL,
  `bothfollwing` varchar(500) DEFAULT NULL,
  `status_notice` varchar(500) DEFAULT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registered`
--

CREATE TABLE IF NOT EXISTS `registered` (
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` int(15) NOT NULL,
  `password` varchar(11) NOT NULL,
  `date_creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registered`
--

INSERT INTO `registered` (`username`, `email`, `mobile`, `password`, `date_creation`) VALUES
('Afzal Juneja', 'zenithziels@yahoo.com', 2147483647, 'hello', '2015-03-06 15:37:13'),
('', '', 0, '', '2015-03-06 20:40:22'),
('shaddir mohd', 'shad@yahoo.com', 1234, '147', '2015-03-07 05:50:29'),
('mannan', 'm@b.com', 789456, '147', '2015-03-07 09:03:40'),
('sammer', 's@b.com', 741, '147', '2015-03-07 09:11:02'),
('a', 'a@b.com', 47, '47', '2015-03-07 09:28:19'),
('Aashiq Ahmed', 'ashiq@yahoo.com', 741, '741', '2015-03-07 09:57:45');

-- --------------------------------------------------------

--
-- Table structure for table `swine`
--

CREATE TABLE IF NOT EXISTS `swine` (
  `username` varchar(50) NOT NULL,
  `shared` varchar(5000) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `swine`
--

INSERT INTO `swine` (`username`, `shared`, `date_time`) VALUES
('Afzal Juneja ', 'Do you ever feel of breaking down, do you ever feel out of place like somehow you just dont belong..', '2015-03-07 02:22:19'),
('Mohd Shaddir', '    \r\n    hello', '2015-03-07 07:52:38');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
