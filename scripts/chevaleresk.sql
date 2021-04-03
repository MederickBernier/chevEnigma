-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2021 at 02:29 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chevaleresk`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `idObject` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `StockQuantity` int(11) NOT NULL,
  `Price` float NOT NULL,
  `PictureGUID` varchar(50) NOT NULL,
  `idType` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `items_properties`
--

CREATE TABLE `items_properties` (
  `IdProperty` int(11) NOT NULL,
  `IdObject` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `items_reviews`
--

CREATE TABLE `items_reviews` (
  `IdReview` int(11) NOT NULL,
  `IdObject` int(11) NOT NULL,
  `IdPlayer` int(11) NOT NULL,
  `Star` int(11) NOT NULL,
  `Review` varchar(2048) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `items_type`
--

CREATE TABLE `items_type` (
  `IdType` int(11) NOT NULL,
  `Name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `IdPlayer` int(11) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(60) NOT NULL,
  `FullName` varchar(70) NOT NULL,
  `Email` varchar(70) NOT NULL,
  `Money` int(11) NOT NULL,
  `Admin` bit(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `player_inventory`
--

CREATE TABLE `player_inventory` (
  `IdPlayer` int(11) NOT NULL,
  `IdObject` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`idObject`);

--
-- Indexes for table `items_properties`
--
ALTER TABLE `items_properties`
  ADD PRIMARY KEY (`IdProperty`,`IdObject`);

--
-- Indexes for table `items_reviews`
--
ALTER TABLE `items_reviews`
  ADD PRIMARY KEY (`IdReview`);

--
-- Indexes for table `items_type`
--
ALTER TABLE `items_type`
  ADD PRIMARY KEY (`IdType`);

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`IdPlayer`);

--
-- Indexes for table `player_inventory`
--
ALTER TABLE `player_inventory`
  ADD PRIMARY KEY (`IdPlayer`,`IdObject`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
