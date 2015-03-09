-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 26, 2015 at 10:44 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `registered`
--

-- --------------------------------------------------------

--
-- Table structure for table `2a264d7222beea3f89c5c7443663a870_follow`
--

CREATE TABLE IF NOT EXISTS `2a264d7222beea3f89c5c7443663a870_follow` (
  `followedby` varchar(500) DEFAULT NULL,
  `following` varchar(500) DEFAULT NULL,
  `bothfollwing` varchar(500) DEFAULT NULL,
  `status_notice` varchar(500) DEFAULT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2a264d7222beea3f89c5c7443663a870_message`
--

CREATE TABLE IF NOT EXISTS `2a264d7222beea3f89c5c7443663a870_message` (
  `message_to` varchar(50) NOT NULL,
  `message_from` varchar(50) NOT NULL,
  `message` varchar(5000) NOT NULL,
  `message_status` varchar(20) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2a264d7222beea3f89c5c7443663a870_shared`
--

CREATE TABLE IF NOT EXISTS `2a264d7222beea3f89c5c7443663a870_shared` (
  `shared_text` varchar(5000) DEFAULT NULL,
  `shared_image` longblob,
  `rates` varchar(500) DEFAULT NULL,
  `who_rates` varchar(500) DEFAULT NULL,
  `who_comments` varchar(5000) DEFAULT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `7beec5502d69d4aeed47b2bd2b0f2d07_follow`
--

CREATE TABLE IF NOT EXISTS `7beec5502d69d4aeed47b2bd2b0f2d07_follow` (
  `followedby` varchar(500) DEFAULT NULL,
  `following` varchar(500) DEFAULT NULL,
  `bothfollwing` varchar(500) DEFAULT NULL,
  `status_notice` varchar(500) DEFAULT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `7beec5502d69d4aeed47b2bd2b0f2d07_message`
--

CREATE TABLE IF NOT EXISTS `7beec5502d69d4aeed47b2bd2b0f2d07_message` (
  `message_to` varchar(50) NOT NULL,
  `message_from` varchar(50) NOT NULL,
  `message` varchar(5000) NOT NULL,
  `message_status` varchar(20) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `7beec5502d69d4aeed47b2bd2b0f2d07_shared`
--

CREATE TABLE IF NOT EXISTS `7beec5502d69d4aeed47b2bd2b0f2d07_shared` (
  `shared_text` varchar(5000) DEFAULT NULL,
  `shared_image` longblob,
  `rates` varchar(500) DEFAULT NULL,
  `who_rates` varchar(500) DEFAULT NULL,
  `who_comments` varchar(5000) DEFAULT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `08eca14f117a3ac81d36fa635985384c_follow`
--

CREATE TABLE IF NOT EXISTS `08eca14f117a3ac81d36fa635985384c_follow` (
  `followedby` varchar(500) DEFAULT NULL,
  `following` varchar(500) DEFAULT NULL,
  `bothfollwing` varchar(500) DEFAULT NULL,
  `status_notice` varchar(500) DEFAULT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `08eca14f117a3ac81d36fa635985384c_message`
--

CREATE TABLE IF NOT EXISTS `08eca14f117a3ac81d36fa635985384c_message` (
  `message_to` varchar(50) NOT NULL,
  `message_from` varchar(50) NOT NULL,
  `message` varchar(5000) NOT NULL,
  `message_status` varchar(20) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `08eca14f117a3ac81d36fa635985384c_shared`
--

CREATE TABLE IF NOT EXISTS `08eca14f117a3ac81d36fa635985384c_shared` (
  `shared_text` varchar(5000) DEFAULT NULL,
  `shared_image` longblob,
  `rates` varchar(500) DEFAULT NULL,
  `who_rates` varchar(500) DEFAULT NULL,
  `who_comments` varchar(5000) DEFAULT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `740cf1f6cb78f996c42173c0315f427f_follow`
--

CREATE TABLE IF NOT EXISTS `740cf1f6cb78f996c42173c0315f427f_follow` (
  `followedby` varchar(500) DEFAULT NULL,
  `following` varchar(500) DEFAULT NULL,
  `bothfollwing` varchar(500) DEFAULT NULL,
  `status_notice` varchar(500) DEFAULT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `740cf1f6cb78f996c42173c0315f427f_message`
--

CREATE TABLE IF NOT EXISTS `740cf1f6cb78f996c42173c0315f427f_message` (
  `message_to` varchar(50) NOT NULL,
  `message_from` varchar(50) NOT NULL,
  `message` varchar(5000) NOT NULL,
  `message_status` varchar(20) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `740cf1f6cb78f996c42173c0315f427f_mine`
--

CREATE TABLE IF NOT EXISTS `740cf1f6cb78f996c42173c0315f427f_mine` (
  `mine_email_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `740cf1f6cb78f996c42173c0315f427f_mine`
--

INSERT INTO `740cf1f6cb78f996c42173c0315f427f_mine` (`mine_email_id`) VALUES
('zenithziels@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `740cf1f6cb78f996c42173c0315f427f_shared`
--

CREATE TABLE IF NOT EXISTS `740cf1f6cb78f996c42173c0315f427f_shared` (
  `shared_text` varchar(5000) DEFAULT NULL,
  `shared_image` longblob,
  `rates` varchar(500) DEFAULT NULL,
  `who_rates` varchar(500) DEFAULT NULL,
  `who_comments` varchar(5000) DEFAULT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `aisi`
--

CREATE TABLE IF NOT EXISTS `aisi` (
  `hello` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aisi`
--

INSERT INTO `aisi` (`hello`) VALUES
('2a264d7222beea3f89c5c7443663a870_08eca14f117a3ac81d36fa635985384c'),
('2a264d7222beea3f89c5c7443663a870'),
('08eca14f117a3ac81d36fa635985384c'),
('2a264d7222beea3f89c5c7443663a870_08eca14f117a3ac81d36fa635985384c'),
('2a264d7222beea3f89c5c7443663a870'),
('08eca14f117a3ac81d36fa635985384c'),
('2a264d7222beea3f89c5c7443663a870_08eca14f117a3ac81d36fa635985384c'),
('2a264d7222beea3f89c5c7443663a870'),
('08eca14f117a3ac81d36fa635985384c'),
('b351ab0d739f540f9119e6f3ecf640c1_08eca14f117a3ac81d36fa635985384c'),
('b351ab0d739f540f9119e6f3ecf640c1'),
('08eca14f117a3ac81d36fa635985384c');

-- --------------------------------------------------------

--
-- Table structure for table `b351ab0d739f540f9119e6f3ecf640c1_follow`
--

CREATE TABLE IF NOT EXISTS `b351ab0d739f540f9119e6f3ecf640c1_follow` (
  `followedby` varchar(500) DEFAULT NULL,
  `following` varchar(500) DEFAULT NULL,
  `bothfollwing` varchar(500) DEFAULT NULL,
  `status_notice` varchar(500) DEFAULT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `b351ab0d739f540f9119e6f3ecf640c1_message`
--

CREATE TABLE IF NOT EXISTS `b351ab0d739f540f9119e6f3ecf640c1_message` (
  `message_to` varchar(50) NOT NULL,
  `message_from` varchar(50) NOT NULL,
  `message` varchar(5000) NOT NULL,
  `message_status` varchar(20) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `b351ab0d739f540f9119e6f3ecf640c1_shared`
--

CREATE TABLE IF NOT EXISTS `b351ab0d739f540f9119e6f3ecf640c1_shared` (
  `shared_text` varchar(5000) DEFAULT NULL,
  `shared_image` longblob,
  `rates` varchar(500) DEFAULT NULL,
  `who_rates` varchar(500) DEFAULT NULL,
  `who_comments` varchar(5000) DEFAULT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `random_msg`
--

CREATE TABLE IF NOT EXISTS `random_msg` (
  `from` varchar(30) NOT NULL,
  `to` varchar(30) NOT NULL,
  `message` longtext NOT NULL,
  `status` varchar(30) NOT NULL,
  `d` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registered_users`
--

CREATE TABLE IF NOT EXISTS `registered_users` (
  `sr_no` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `d_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `d_image` longblob NOT NULL,
  `dob` varchar(20) NOT NULL,
  `country` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `about_you` longtext,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `active` varchar(10) NOT NULL,
  PRIMARY KEY (`sr_no`,`email`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `sr_no` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `d_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `encrypted_email` varchar(60) NOT NULL,
  `password` varchar(50) NOT NULL,
  `d_image` longblob NOT NULL,
  `dob` varchar(20) NOT NULL,
  `country` varchar(30) NOT NULL,
  `city` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `about_user` longtext,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `active` varchar(10) NOT NULL,
  `confimation_code` int(10) NOT NULL,
  PRIMARY KEY (`sr_no`,`email`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=71 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sr_no`, `username`, `d_name`, `email`, `encrypted_email`, `password`, `d_image`, `dob`, `country`, `city`, `gender`, `about_user`, `date_created`, `active`, `confimation_code`) VALUES
(66, 'Afzal', 'juneja', 'zenithziels@yahoo.com', '', 'c7491e020906d7ac52cd66967d3965ee', 0x646973706c61795f706963732f30382d30322d323031352d313432333338393335372e6a7065672e, '15/Nov/1994', 'india', 'mumbai', 'male', 'i am an india', '2015-02-08 09:55:57', 'inactive', 13043549),
(67, 'faisal', 'juneja', 'faj@yahoo.com', '7beec5502d69d4aeed47b2bd2b0f2d07', '47070077c78b4c960f81b58e04c6d387', 0x646973706c61795f706963732f30382d30322d323031352d313432333430343635332e6a7065672e, '27/Nov/1994', 'india', 'mumbai', 'male', 'i live in on earth', '2015-02-08 14:10:53', 'inactive', 27069721),
(68, 'Afzal Juneja', 'june', 'afzalj309@yahoo.com', '08eca14f117a3ac81d36fa635985384c', 'a1b0ea1fd645f52901da494493704ae7', 0x646973706c61795f706963732f31392d30322d323031352d313432343334333636342e706e672e, '15/Dec/1994', 'india', 'mumbai', 'male', 'dsfdsfsd', '2015-02-19 11:01:04', 'inactive', 53580280),
(69, 'Faisal Juneja', 'Fais', 'faisal@yahoo.com', '2a264d7222beea3f89c5c7443663a870', '3132c9893577f3ab5f7e08e30c98709b', 0x646973706c61795f706963732f32322d30322d323031352d313432343633313531352e6a7065672e, '17/Dec/1994', 'india', 'Delhi', 'male', 'i am indian', '2015-02-22 18:58:35', 'inactive', 86985162),
(70, 'Juneja Afzal', 'Mr.june', 'afzalj309@gmail.com', 'b351ab0d739f540f9119e6f3ecf640c1', '51f67f993dbac68d7f41157bff74cd4a', 0x646973706c61795f706963732f32332d30322d323031352d313432343639353437332e6a7065672e, '14/Dec/1994', 'india', 'pune', 'male', 'hello World', '2015-02-23 12:44:33', 'inactive', 24741125);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
