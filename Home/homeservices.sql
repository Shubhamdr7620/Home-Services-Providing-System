-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2024 at 06:27 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `homeservices`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `ID` int(10) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `con` int(11) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Addr` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `day` varchar(10) NOT NULL,
  `descr` varchar(200) NOT NULL,
  `proname` varchar(40) NOT NULL,
  `procity` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`ID`, `Name`, `con`, `Email`, `Addr`, `date`, `day`, `descr`, `proname`, `procity`, `status`) VALUES
(71, 'asdf', 2147483647, 'asdf@gmail.com', 'asdf', '2023-06-05', 'monday', 'Tell me something', 'asdf', 'bhor', 'REJECTED'),
(72, 'Nilesh Dhawale', 2147483647, 'abc@gmail.com', 'bajrwadi', '2023-06-19', 'friday', 'I required Electrician', 'asdf', 'bhor', 'REJECTED'),
(73, 'Aishwarya ', 0, 'aish@gmail.com', 'I dont know', '2023-06-05', 'sunday', 'i know', 'asdf', 'bhor', 'REJECTED'),
(74, 'Shubham Raut', 2147483647, 'asdf@gmail.com', 'bajrwadi', '2023-11-29', 'monday', 'Tell Me Something', 'asdf', 'bhor', 'REJECTED'),
(75, 'abcd', 1111111111, 'xyz@gmail.com', 'bajarwadi', '2024-01-23', 'monday', 'Tell me something', 'nilesh', 'bhor', 'APPROVED');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `subject` varchar(45) NOT NULL,
  `message` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `Name`, `mobile`, `email`, `subject`, `message`) VALUES
(4, '', '', '', '', ''),
(5, '', '', '', '', ''),
(6, '', '', '', '', ''),
(7, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `provider`
--

CREATE TABLE `provider` (
  `Id` int(10) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Add` varchar(50) NOT NULL,
  `city` varchar(40) NOT NULL,
  `date` date NOT NULL,
  `Description` varchar(200) NOT NULL,
  `pwd` varchar(6) NOT NULL,
  `profession` varchar(20) NOT NULL,
  `status` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `provider`
--

INSERT INTO `provider` (`Id`, `Name`, `contact`, `Email`, `Add`, `city`, `date`, `Description`, `pwd`, `profession`, `status`) VALUES
(0, 'asdf', '2222222222', 'asdf@gmail.com', 'asdf', 'bhor', '2023-06-05', 'Tell me something', 'asdf', 'electrician', ''),
(0, 'nilesh', '1234567890', 'xyz@gmail.com', 'bhor', 'bhor', '2002-02-01', 'tell me something', 'asdf', 'electrician', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UID` int(10) NOT NULL,
  `UName` varchar(20) NOT NULL,
  `UMail` varchar(20) NOT NULL,
  `UPass` varchar(10) NOT NULL,
  `UAdd` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UID`, `UName`, `UMail`, `UPass`, `UAdd`) VALUES
(6, 'asdf', 'asdf@gmail.com', 'asdf', 'asdf'),
(7, 'asdf', 'asdf@gmail.com', 'asdf', 'asdf'),
(8, 'abc', 'abc@gmail.com', 'abc', 'abc'),
(9, 'asdf', 'asdf@gmail.com', 'asdf', 'abcd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `provider`
--
ALTER TABLE `provider`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
