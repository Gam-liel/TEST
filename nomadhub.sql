-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2020 at 12:40 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nomadhub`
--

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `IdHistory` int(11) NOT NULL,
  `HistoryType` varchar(45) NOT NULL,
  `DateTime` timestamp NOT NULL DEFAULT current_timestamp(),
  `Remarks` varchar(100) NOT NULL,
  `ActiveUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`IdHistory`, `HistoryType`, `DateTime`, `Remarks`, `ActiveUser`) VALUES
(1, '1', '2020-02-22 19:43:12', 'login', 0),
(2, 'LOGOUT', '2020-02-22 20:01:34', 'user logout', 1),
(3, 'login', '2020-02-22 20:02:05', 'client login', 1),
(4, 'LOGOUT', '2020-02-22 20:03:10', 'user logout', 1),
(5, 'login', '2020-02-23 02:14:45', 'client login', 1),
(6, 'ADD-LANDLORD', '2020-02-23 04:25:22', 'Landlord ID:1', 1),
(7, 'DELETE-LANDLORD', '2020-02-23 06:30:45', 'Landlord ID:', 1),
(8, 'ADD-LANDLORD', '2020-02-23 06:40:02', 'Landlord ID:2', 1),
(9, 'ADD-LANDLORD', '2020-02-23 06:40:29', 'Landlord ID:2', 1),
(10, 'ADD-LANDLORD', '2020-02-23 06:40:34', 'Landlord ID:2', 1),
(11, 'ADD-LANDLORD', '2020-02-23 06:40:41', 'Landlord ID:2', 1),
(12, 'DELETE-LANDLORD', '2020-02-23 06:42:29', 'Landlord ID:', 1),
(13, 'DELETE-LANDLORD', '2020-02-23 06:42:29', 'Landlord ID:', 1),
(14, 'UPLOAD PHOTO-LANDLORD', '2020-02-23 07:14:37', 'Landlord ID:', 0),
(15, 'UPLOAD PHOTO-LANDLORD', '2020-02-23 07:17:35', 'Landlord ID:', 0),
(16, 'UPLOAD PHOTO-LANDLORD', '2020-02-23 07:18:57', 'Landlord ID:', 0),
(17, 'UPLOAD PHOTO-LANDLORD', '2020-02-23 07:19:57', 'Landlord ID:', 0),
(18, 'UPLOAD PHOTO-LANDLORD', '2020-02-23 07:21:09', 'Landlord ID:', 0),
(19, 'LOGOUT', '2020-02-23 08:32:39', 'user logout', 1),
(20, 'login', '2020-02-23 08:32:49', 'client login', 1),
(21, 'LOGOUT', '2020-02-23 11:29:48', 'user logout', 1),
(22, 'login', '2020-02-23 11:29:59', 'client login', 1),
(23, 'DELETE-LANDLORD', '2020-02-23 11:30:17', 'Landlord ID:', 1);

-- --------------------------------------------------------

--
-- Table structure for table `landlords`
--

CREATE TABLE `landlords` (
  `IdLandlord` int(11) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `MiddleName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Street` varchar(100) NOT NULL,
  `City` varchar(100) NOT NULL,
  `Province` varchar(100) NOT NULL,
  `Country` varchar(100) NOT NULL DEFAULT 'Philippines',
  `PostalCode` varchar(45) NOT NULL,
  `Phone` varchar(45) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Photo` varchar(100) NOT NULL DEFAULT 'default_landlord_photo.png',
  `Status` varchar(45) NOT NULL DEFAULT 'active',
  `Deleted` int(11) NOT NULL DEFAULT 0,
  `DateAdded` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `landlords`
--

INSERT INTO `landlords` (`IdLandlord`, `FirstName`, `MiddleName`, `LastName`, `Gender`, `Street`, `City`, `Province`, `Country`, `PostalCode`, `Phone`, `Email`, `Photo`, `Status`, `Deleted`, `DateAdded`) VALUES
(2, 'kylie loli', 'casalta', 'salar', 'female', 'poblacion district 2', 'silago', 'southern leyte', 'Philippines', '6607', '0912345678', 'eefwf@gmail.com', '2_1582442470.jpg', 'active', 0, '2020-02-23 06:40:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `IdUser` int(11) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `UserName` varchar(4100) NOT NULL,
  `MiddleName` varchar(100) NOT NULL,
  `LastName` varchar(100) DEFAULT NULL,
  `Password` varchar(100) NOT NULL DEFAULT '123456789',
  `Avatar` varchar(100) NOT NULL DEFAULT 'default_avatar.png',
  `UserType` varchar(45) NOT NULL DEFAULT 'staff'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`IdUser`, `FirstName`, `UserName`, `MiddleName`, `LastName`, `Password`, `Avatar`, `UserType`) VALUES
(1, 'Takidong', 't4lks1ck', 'Cantones', 'Casalta', '1234', 'default_avatar.png', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`IdHistory`);

--
-- Indexes for table `landlords`
--
ALTER TABLE `landlords`
  ADD PRIMARY KEY (`IdLandlord`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`IdUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `IdHistory` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `landlords`
--
ALTER TABLE `landlords`
  MODIFY `IdLandlord` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `IdUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
