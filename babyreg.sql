-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2018 at 03:49 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `babyreg`
--

-- --------------------------------------------------------

--
-- Table structure for table `babyregister`
--

CREATE TABLE `babyregister` (
  `s/n` int(11) NOT NULL,
  `id` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `middle_name` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `poc` varchar(100) NOT NULL,
  `lga` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `weight` varchar(100) NOT NULL,
  `delivery_time` time(6) NOT NULL,
  `mlast_name` varchar(100) NOT NULL,
  `mfirst_name` varchar(100) NOT NULL,
  `mmiddle_name` varchar(100) NOT NULL,
  `mage` varchar(100) NOT NULL,
  `mstatus` varchar(100) NOT NULL,
  `mnationality` varchar(100) NOT NULL,
  `morigin` varchar(100) NOT NULL,
  `mtribe` varchar(100) NOT NULL,
  `moccupation` varchar(100) NOT NULL,
  `mphone` varchar(100) NOT NULL,
  `maddress` text NOT NULL,
  `flast_name` varchar(100) NOT NULL,
  `ffirst_name` varchar(100) NOT NULL,
  `fmiddle_name` varchar(100) NOT NULL,
  `fage` varchar(100) NOT NULL,
  `fstatus` varchar(100) NOT NULL,
  `fnationality` varchar(100) NOT NULL,
  `forigin` varchar(100) NOT NULL,
  `ftribe` varchar(100) NOT NULL,
  `foccupation` varchar(100) NOT NULL,
  `fphone` varchar(100) NOT NULL,
  `faddress` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `babyregister`
--
ALTER TABLE `babyregister`
  ADD PRIMARY KEY (`s/n`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `babyregister`
--
ALTER TABLE `babyregister`
  MODIFY `s/n` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
