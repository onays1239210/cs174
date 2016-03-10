-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2016 at 01:46 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cs174`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignment1`
--

CREATE TABLE `assignment1` (
  `UserID` int(11) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Sex` varchar(10) NOT NULL,
  `School` varchar(50) NOT NULL,
  `Age` int(11) NOT NULL,
  `PostID` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=ascii COMMENT='StudentInformation';

--
-- Dumping data for table `assignment1`
--

INSERT INTO `assignment1` (`UserID`, `FirstName`, `LastName`, `Sex`, `School`, `Age`, `PostID`) VALUES
(1, 'a', 'b', 'Male', 'San Jose State University', 88, 33);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `PostID` int(11) NOT NULL,
  `Text` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`PostID`, `Text`) VALUES
(33, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assignment1`
--
ALTER TABLE `assignment1`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `PostID_2` (`PostID`),
  ADD UNIQUE KEY `UserID` (`UserID`),
  ADD KEY `PostID` (`PostID`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`PostID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
