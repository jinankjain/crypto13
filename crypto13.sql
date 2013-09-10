-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2013 at 09:00 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `crypto13`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE IF NOT EXISTS `answer` (
  `sno` int(11) DEFAULT NULL,
  `answer` text NOT NULL,
  `level` int(11) NOT NULL,
  `level_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `level` int(11) NOT NULL,
  `email_id` text NOT NULL,
  PRIMARY KEY (`user_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `level`, `email_id`) VALUES
(1, 'jinank', 'jon', 0, 'jinank.rocks@gmail.com'),
(2, 'jinank', 'jon', 0, 'jinank.rocks@gmail.com'),
(3, 'jinank', 'joney', 0, 'jinank.rocks@gmail.com'),
(4, 'jinank', 'joney', 0, 'jinank.rocks@gmail.com'),
(5, 'jinank123', 'jin', 0, 'jinank@mirage.com'),
(6, 'jinank123', 'jin', 0, 'jinank@mirage.com'),
(11, 'jinank3242', 'jin', 0, 'jinank.rocks@gmail.com'),
(12, 'jinank3242', 'jin', 0, 'jinank.rocks@gmail.com'),
(13, 'jinank3242', 'jin', 0, 'jinank.rocks@gmail.com'),
(14, 'jinank3242', 'jin', 0, 'jinank.rocks@gmail.com'),
(15, 'jodfvds', 'jin', 0, 'jinank@mirage.com'),
(16, 'jodfvds', 'jin', 0, 'jinank@mirage.com'),
(17, 'dgdf', 'gfdgd', 0, 'jinank@mirage.com'),
(18, 'dgdf', 'gfdgd', 0, 'jinank@mirage.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
