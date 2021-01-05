-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2019 at 03:04 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `staff_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE IF NOT EXISTS `administrator` (
`id` int(11) NOT NULL,
  `Firstname` varchar(30) NOT NULL,
  `Sirname` varchar(30) NOT NULL,
  `Phone` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Pic` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`id`, `Firstname`, `Sirname`, `Phone`, `Password`, `Email`, `Pic`) VALUES
(1, 'Ahmed', 'Sodiq', '09023232323', 'admin', 'Ahmedsodiq7@gmail.com', 'admin2.jpg'),
(2, 'Nurudeen', 'Afolabi', '09087654321', 'dadas', 'ibrahimond75@gmail.com', 'templatemo_pic.jpg'),
(4, 'Kayode', 'Ade', '08076526754', '12345', 'KayodeAde@gmail.com', 'ogitech-igbesa-logo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
`Id` int(10) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `dateReg` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`Id`, `Name`, `dateReg`) VALUES
(1, 'Business Administration', '2019-06-12'),
(2, 'Mass Communication', '2019-06-12'),
(3, 'Architecture', '2019-07-10');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE IF NOT EXISTS `files` (
`id` int(11) NOT NULL,
  `Title` varchar(300) NOT NULL,
  `Name` varchar(1000) NOT NULL,
  `Type` varchar(30) NOT NULL,
  `Size` decimal(10,0) DEFAULT NULL,
  `content` longblob NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `Title`, `Name`, `Type`, `Size`, `content`) VALUES
(1, 'Staff', 'staff.csv', 'application/vnd.ms-excel', '76', '');

-- --------------------------------------------------------

--
-- Table structure for table `inorg`
--

CREATE TABLE IF NOT EXISTS `inorg` (
`id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `Phone` varchar(300) NOT NULL,
  `email` varchar(100) NOT NULL,
  `website` varchar(300) NOT NULL,
  `year` varchar(10) NOT NULL,
  `pname` varchar(1000) NOT NULL,
  `type` varchar(30) NOT NULL,
  `size` decimal(10,0) NOT NULL,
  `content` longblob NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `inorg`
--

INSERT INTO `inorg` (`id`, `name`, `Phone`, `email`, `website`, `year`, `pname`, `type`, `size`, `content`) VALUES
(1, 'Ogitech', '909249520', 'ogitechedu.ng', 'Ogun State Institute of technology', '1993', 'ogitech.jpg', 'image/jpeg', '29551', 0x6f6769746563682e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `profilepictures`
--

CREATE TABLE IF NOT EXISTS `profilepictures` (
`id` int(11) NOT NULL,
  `ids` varchar(30) NOT NULL,
  `Category` varchar(30) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `type` varchar(30) NOT NULL,
  `Size` decimal(10,0) NOT NULL,
  `content` longblob NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `profilepictures`
--

INSERT INTO `profilepictures` (`id`, `ids`, `Category`, `name`, `type`, `Size`, `content`) VALUES
(1, '1', 'Administrator', '20.jpg', ' image/jpeg', '17476', 0x32302e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `Firstname` varchar(300) NOT NULL,
  `Surname` varchar(300) NOT NULL,
  `othername` varchar(255) NOT NULL,
  `Level` varchar(30) NOT NULL,
  `Department` varchar(300) NOT NULL,
  `Matricno` varchar(300) NOT NULL,
  `Picname` varchar(1000) NOT NULL,
  `signature` text NOT NULL,
  `datereg` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Firstname`, `Surname`, `othername`, `Level`, `Department`, `Matricno`, `Picname`, `signature`, `datereg`) VALUES
(2, 'sam', 'sam', 'sam', 'HND1', 'computer science', 'HCSF/15/0033', '10.jpg', 'eddie.JPG', '2019-06-12'),
(5, 'Samuel', 'Kunle', 'kola', 'ND1', 'Architecture', 'HCSF/15/0026', 'npc.jpg', 'carpark.jpg', '2019-07-11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
 ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inorg`
--
ALTER TABLE `inorg`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profilepictures`
--
ALTER TABLE `profilepictures`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `inorg`
--
ALTER TABLE `inorg`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `profilepictures`
--
ALTER TABLE `profilepictures`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
