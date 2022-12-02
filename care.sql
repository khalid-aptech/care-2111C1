-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2022 at 07:19 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `care`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `DID` int(11) NOT NULL,
  `D-NAME` varchar(30) NOT NULL,
  `PROFILE` varchar(67) NOT NULL,
  `SPLST` varchar(60) NOT NULL,
  `CITY` varchar(80) NOT NULL,
  `TIMING` int(6) NOT NULL,
  `A-DAYS` varchar(70) NOT NULL,
  `ADDRESS` varchar(80) NOT NULL,
  `ROLE` varchar(70) NOT NULL,
  `PASSWORD` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`DID`, `D-NAME`, `PROFILE`, `SPLST`, `CITY`, `TIMING`, `A-DAYS`, `ADDRESS`, `ROLE`, `PASSWORD`) VALUES
(10, 'zain', 'image', 'abc', 'sad', 0, '', 'gsfdg', 'doctor', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `ID` int(11) NOT NULL,
  `P-NAME` varchar(30) NOT NULL,
  `EMAIL` varchar(60) NOT NULL,
  `PASSWORD` varchar(80) NOT NULL,
  `PHONE` int(46) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`ID`, `P-NAME`, `EMAIL`, `PASSWORD`, `PHONE`) VALUES
(1, 'Taha', 'taha@gmail.com', 'taha', 1234555),
(2, 'Taha', 'taha@gmail.com', 'taha', 1234555);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(20) NOT NULL,
  `NAME` varchar(30) NOT NULL,
  `EMAIL` varchar(67) NOT NULL,
  `PASSWORD` varchar(60) NOT NULL,
  `IMAGE` varchar(80) NOT NULL,
  `ROLE` varchar(46) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `NAME`, `EMAIL`, `PASSWORD`, `IMAGE`, `ROLE`) VALUES
(13, 'zarlish', 'z@gmail.com', '123', 'image', 'admin'),
(14, 'zarlish', 'z@gmail.com', '123', 'image', 'admin'),
(15, 'faiqa', 'f@gmail.com', '123', 'image', 'employee');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`DID`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `DID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
