-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2021 at 07:47 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `modern medical`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `ID` int(20) NOT NULL,
  `Name` text NOT NULL,
  `Email` text NOT NULL,
  `Mobile Number` int(20) NOT NULL,
  `Address` text NOT NULL,
  `Password` text NOT NULL,
  `Shift` text NOT NULL,
  `Category` text NOT NULL,
  `Gender` text NOT NULL,
  `Date of Birth` int(20) NOT NULL,
  `Image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`ID`, `Name`, `Email`, `Mobile Number`, `Address`, `Password`, `Shift`, `Category`, `Gender`, `Date of Birth`, `Image`) VALUES
(3, 'Arnab Saha', 'arnabsaha1999@gmail.com', 1821456987, 'Narsingdi,Dhaka', '$2y$10$GrExr7jKqxXuLsI6Cz7pV.OQb7gPMhVyZQrEi0T5NnMNHxLbH04tu', 'Night (4PM -12PM)', 'Doctor', 'Male', 1999, ''),
(4, 'Anik Saha', 'anik@gmail.com', 1678945611, 'Gazipur,Dhaka', '$2y$10$a40fVnUR8VSrZSW/1cDI6u.Si17XdlPx9BYoRGsfIhxniQPjIbq/2', 'Day (8AM - 4PM)', 'Doctor', 'Male', 1992, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
