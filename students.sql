-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2019 at 04:38 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `students`
--

-- --------------------------------------------------------

--
-- Table structure for table `login_data`
--

CREATE TABLE IF NOT EXISTS `login_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `flag` int(3) NOT NULL,
  `status` int(3) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `email_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `login_data`
--

INSERT INTO `login_data` (`id`, `user_id`, `password`, `flag`, `status`) VALUES
(1, 'daskunal242@gmail.com', 'qwertyU7_', 1, 1),
(3, 'dassayani@gmail.com', 'asdFGH7_', 1, 0),
(2, 'kibby187@gmail.com', 'asdFGH4_', 1, 1),
(4, 'twinklepaul@gmail.com', 'Twink_admin1', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE IF NOT EXISTS `user_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `course` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`id`, `user_id`, `name`, `address`, `city`, `district`, `state`, `mobile`, `gender`, `course`, `department`) VALUES
(1, 'daskunal242@gmail.com', 'Kunal das', '17/1E,Bosepukur Road Kolkata 700042', 'Kolkata', 'North 24 pargans', 'WB', '2147483647', 'M', 'UG', 'Engg'),
(2, 'kibby187@gmail.com', 'Shruti Singh', 'Railway Colony 12', 'Kharagpur', 'W.Midnapore', 'WB', '8786543454', 'F', 'UG', 'Para'),
(3, 'dassayani@gmail.com', 'Sayani Das', 'Kalna Gram', 'Kalna', 'Burdwan', 'WB', '2147483647', 'F', 'Diploma', 'Dip'),
(4, 'twinklepaul@gmail.com', 'Twinkle Paul', 'Maharaja Lane', 'Bhp', 'Msd', 'WB', '9932037691', 'F', 'UG', 'Engg');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `login_data`
--
ALTER TABLE `login_data`
  ADD CONSTRAINT `login_data_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `login_data` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
