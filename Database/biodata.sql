-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2020 at 08:42 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biodata`
--

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `PA` varchar(50) NOT NULL,
  `PA2` varchar(50) NOT NULL,
  `DB` varchar(50) NOT NULL,
  `Religon` varchar(50) NOT NULL,
  `CS` varchar(50) NOT NULL,
  `Age` varchar(50) NOT NULL,
  `Citizenship` varchar(50) NOT NULL,
  `Weight` varchar(50) NOT NULL,
  `PB` varchar(50) NOT NULL,
  `Height` varchar(50) NOT NULL,
  `FName` varchar(50) NOT NULL,
  `MName` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `LDS` varchar(50) NOT NULL,
  `PE` varchar(50) NOT NULL,
  `Elementary` varchar(50) NOT NULL,
  `YG1` varchar(50) NOT NULL,
  `HighSchool` varchar(50) NOT NULL,
  `YG2` varchar(50) NOT NULL,
  `College` varchar(50) NOT NULL,
  `YG3` varchar(50) NOT NULL,
  `Course` varchar(50) NOT NULL,
  `SS` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`id`, `Name`, `PA`, `PA2`, `DB`, `Religon`, `CS`, `Age`, `Citizenship`, `Weight`, `PB`, `Height`, `FName`, `MName`, `Address`, `LDS`, `PE`, `Elementary`, `YG1`, `HighSchool`, `YG2`, `College`, `YG3`, `Course`, `SS`) VALUES
(11, 'Joshua Alarcio', 'Alac San Quintin Pangasinan 2444', 'Mars', '08/03/00', 'Muslim', '  Single', '20', 'Affrican/American', '100 lbs', 'Mars City', '7/7', 'Abo Bacar', 'Cinthia', 'Mars', 'Mars', 'N/A', 'Mars', '12:12', 'Mars', '12:12', 'Mars', '12:12', 'BSIT', 'Eat, Sleep ,Repeat');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biodata`
--
ALTER TABLE `biodata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
