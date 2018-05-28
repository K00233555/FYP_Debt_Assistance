-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2018 at 02:31 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `consultations`
--

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `noticeId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `shortDescription` varchar(50) NOT NULL,
  `longDescription` varchar(250) NOT NULL,
  `largeImage` varchar(50) NOT NULL,
  `smallImage` varchar(50) NOT NULL,
  `area` varchar(50) NOT NULL,
  `dateUploaded` date NOT NULL,
  `dateExp` time NOT NULL,
  `article` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`noticeId`, `userId`, `shortDescription`, `longDescription`, `largeImage`, `smallImage`, `area`, `dateUploaded`, `dateExp`, `article`) VALUES
(8, 72, 'Mark Lanegan', 'Dublin', 'Dublin.jpg', '', 'DRN', '2018-05-09', '15:00:00', ''),
(9, 72, 'Mark Lanegan', 'Dublin', 'Dublin.jpg', '', 'DRN', '2018-05-09', '15:00:00', ''),
(10, 72, 'Mark Lanegan', 'Dublin', 'Dublin.jpg', '', 'DRN', '2018-05-09', '15:00:00', ''),
(11, 72, 'Mark Lanegan', 'Dublin', 'Dublin.jpg', '', 'DRN', '2018-05-09', '15:00:00', ''),
(12, 73, 'Matt Pike', 'Cork', 'Cork.jpg', '', 'DRN', '2018-05-25', '15:57:00', ''),
(13, 73, 'Matt Pike', 'Cork', 'Cork.jpg', '', 'DRN', '2018-05-25', '15:57:00', ''),
(14, 74, 'Aaroon Turner', 'Galway', 'Galway.jpg', '', 'DRN', '2018-05-25', '14:56:00', ''),
(15, 74, 'Aaroon Turner', 'Galway', 'Galway.jpg', '', 'DRN', '2018-05-25', '14:56:00', ''),
(16, 74, 'Aaroon Turner', 'Galway', 'Galway.jpg', '', 'DRN', '2018-05-25', '14:56:00', ''),
(17, 75, 'Matt Pike', 'Cork', 'Cork.jpg', '', 'PIA', '2018-05-24', '12:03:00', ''),
(18, 76, 'Aaroon Turner', 'Galway', 'Galway.jpg', '', 'DSN', '2018-05-17', '15:55:00', ''),
(19, 76, 'Matt Pike', 'Cork', 'Cork.jpg', '', 'DSN', '2018-05-17', '13:01:00', ''),
(20, 76, 'Matt Pike', 'Cork', 'Cork.jpg', '', 'DSN', '2018-05-17', '13:01:00', ''),
(21, 76, 'Matt Pike', 'Cork', 'Cork.jpg', '', 'DSN', '2018-05-17', '13:01:00', ''),
(22, 77, 'Matt Pike', 'Cork', 'Cork.jpg', '', 'DRN', '2018-05-09', '13:55:00', ''),
(23, 77, 'Matt Pike', 'Cork', 'Cork.jpg', '', 'DRN', '2018-05-09', '13:55:00', ''),
(24, 79, 'Matt Pike', 'Cork', 'Cork.jpg', '', 'DRN', '2018-05-16', '16:05:00', ''),
(25, 79, 'Matt Pike', 'Cork', 'Cork.jpg', '', 'DRN', '2018-05-16', '16:05:00', ''),
(26, 79, 'Matt Pike', 'Cork', 'Cork.jpg', '', 'DRN', '2018-05-16', '16:05:00', ''),
(27, 79, 'Matt Pike', 'Cork', 'Cork.jpg', '', 'DRN', '2018-05-16', '16:05:00', ''),
(28, 79, 'Matt Pike', 'Cork', 'Cork.jpg', '', 'DRN', '2018-05-16', '16:05:00', ''),
(29, 79, 'Matt Pike', 'Cork', 'Cork.jpg', '', 'DRN', '2018-05-16', '16:05:00', ''),
(30, 79, 'Matt Pike', 'Cork', 'Cork.jpg', '', 'DRN', '2018-05-16', '16:05:00', ''),
(31, 79, 'Matt Pike', 'Cork', 'Cork.jpg', '', 'DRN', '2018-05-16', '16:05:00', ''),
(32, 79, 'Steve von Till', 'Limerick', 'Limerick.jpg', '', 'DRN', '2018-05-16', '12:05:00', ''),
(42, 98, 'Matt Pike', 'Cork', 'Cork.jpg', '', 'DSN', '2018-05-10', '13:02:00', ''),
(43, 98, 'Matt Pike', 'Cork', 'Cork.jpg', '', 'DSN', '2018-05-10', '13:02:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserID` int(11) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `SurName` varchar(50) NOT NULL,
  `Mobile` varchar(50) NOT NULL,
  `AddressLine1` varchar(50) NOT NULL,
  `AddressLine2` varchar(50) NOT NULL,
  `AddressLine3` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `recordCreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `UserName`, `Password`, `FirstName`, `SurName`, `Mobile`, `AddressLine1`, `AddressLine2`, `AddressLine3`, `Email`, `recordCreated`) VALUES
(68, 'Eugene', 'Eugeme', 'Default', 'Default', 'Default', 'DRN', 'Default', 'Default', 'Default', '2018-05-03 18:22:17'),
(72, 'to', 'to', 'Default', 'Default', 'Default', 'DRN', 'Default', 'Default', 'Default', '2018-05-04 09:59:48'),
(73, 'Trevor', 'Trevor', 'Default', 'Default', 'Default', 'DRN', 'Default', 'Default', 'Default', '2018-05-04 10:08:16'),
(74, 'The', 'The', 'Default', 'Default', 'Default', 'DRN', 'Default', 'Default', 'Default', '2018-05-04 10:14:12'),
(75, 'Eugene', 'OR', 'Default', 'Default', 'Default', 'PIA', 'Default', 'Default', 'Default', '2018-05-04 10:35:27'),
(76, 'Eugene', 'po', 'Default', 'Default', 'Default', 'DSN', 'Default', 'Default', 'Default', '2018-05-04 10:39:17'),
(77, 'rte', 'rte', 'Default', 'Default', 'Default', 'DRN', 'Default', 'Default', 'Default', '2018-05-06 17:30:17'),
(78, '', '', 'Default', 'Default', 'Default', 'DRN', 'Default', 'Default', 'Default', '2018-05-07 12:48:03'),
(79, 'Eugene', 'O\' REgan', 'Default', 'Default', 'Default', 'DRN', 'Default', 'Default', 'Default', '2018-05-07 12:56:56'),
(80, 'Eugene', 'O\' REgan', 'Default', 'Default', 'Default', 'DRN', 'Default', 'Default', 'Default', '2018-05-07 13:02:46'),
(81, 'Eugene', 'O\' REgan', 'Default', 'Default', 'Default', 'DRN', 'Default', 'Default', 'Default', '2018-05-07 13:05:07'),
(82, 'Eugene', 'O\' REgan', 'Default', 'Default', 'Default', 'DRN', 'Default', 'Default', 'Default', '2018-05-07 13:05:57'),
(83, 'Eugene', 'O\' REgan', 'Default', 'Default', 'Default', 'DRN', 'Default', 'Default', 'Default', '2018-05-07 13:06:14'),
(84, 'Eugene', 'O\' REgan', 'Default', 'Default', 'Default', 'DRN', 'Default', 'Default', 'Default', '2018-05-07 13:08:54'),
(85, 'Eugene', 'O\' REgan', 'Default', 'Default', 'Default', 'DRN', 'Default', 'Default', 'Default', '2018-05-07 13:09:08'),
(86, 'Eugene', 'O\' REgan', 'Default', 'Default', 'Default', 'DRN', 'Default', 'Default', 'Default', '2018-05-07 13:13:07'),
(87, 'Eugene', 'O\' REgan', 'Default', 'Default', 'Default', 'DRN', 'Default', 'Default', 'Default', '2018-05-07 13:15:26'),
(88, 'Eugene', 'O\' REgan', 'Default', 'Default', 'Default', 'DRN', 'Default', 'Default', 'Default', '2018-05-07 13:17:27'),
(89, 'Eugene', 'O\' REgan', 'Default', 'Default', 'Default', 'DRN', 'Default', 'Default', 'Default', '2018-05-07 13:17:36'),
(90, 'Eugene', 'O\' REgan', 'Default', 'Default', 'Default', 'DRN', 'Default', 'Default', 'Default', '2018-05-07 13:18:28'),
(91, 'Eugene', 'O\' REgan', 'Default', 'Default', 'Default', 'DRN', 'Default', 'Default', 'Default', '2018-05-07 13:23:02'),
(92, 'Eugene', 'O\' REgan', 'Default', 'Default', 'Default', 'DRN', 'Default', 'Default', 'Default', '2018-05-07 13:23:15'),
(93, 'John', 'Keirns', 'Default', 'Default', 'Default', 'DRN', 'Default', 'Default', 'Default', '2018-05-07 13:51:12'),
(94, 'Default', 'Default', 'Default', 'Default', 'Default', 'DSN', 'Default', 'Default', 'Default', '2018-05-08 11:46:10'),
(95, 'Default', 'Default', 'Default', 'Default', 'Default', 'DSN', 'Default', 'Default', 'Default', '2018-05-08 11:48:03'),
(96, 'Default', 'Default', 'Default', 'Default', 'Default', 'DSN', 'Default', 'Default', 'Default', '2018-05-08 11:48:07'),
(97, 'Default', 'Default', 'Default', 'Default', 'Default', 'DSN', 'Default', 'Default', 'Default', '2018-05-08 11:48:56'),
(98, 'Tre', 'Tre', 'Default', 'Default', 'Default', 'DSN', 'Default', 'Default', 'Default', '2018-05-08 11:52:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`noticeId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `noticeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `notice`
--
ALTER TABLE `notice`
  ADD CONSTRAINT `notice_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`UserID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
