-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2023 at 01:34 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `university`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `NAME` varchar(20) NOT NULL,
  `EMAIL` varchar(30) NOT NULL,
  `MESSAGE` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`NAME`, `EMAIL`, `MESSAGE`) VALUES
('Jigyasa Yadav', 'jigyasayadav1903@gma', 'hyy');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `NAME` varchar(20) NOT NULL,
  `EMAILID` varchar(30) NOT NULL,
  `CONTACT` int(20) NOT NULL,
  `GENDER` text NOT NULL,
  `ADDRESS` varchar(20) NOT NULL,
  `CITY` varchar(20) NOT NULL,
  `STATE` varchar(20) NOT NULL,
  `COUNTRY` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`NAME`, `EMAILID`, `CONTACT`, `GENDER`, `ADDRESS`, `CITY`, `STATE`, `COUNTRY`) VALUES
('Jigyasa Yadav', 'jigyasayadav1903@gmail.com', 2147483647, 'f', '151,B\r\nAYODHYA PURI ', 'Indore', 'Madhya Pradesh', 'India');

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE `userdetails` (
  `NAME` varchar(20) NOT NULL,
  `EMAIL` varchar(30) NOT NULL,
  `PASSWORD` varchar(20) NOT NULL,
  `CONFIRM_PASSWORD` varchar(20) NOT NULL,
  `MOBILE` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`NAME`, `EMAIL`, `PASSWORD`, `CONFIRM_PASSWORD`, `MOBILE`) VALUES
('Jigyasa Yadav', 'jigyasayadav1903@gma', '1234567', '12345687', 2147483647),
('VISHAL YADAV', 'vishalyadav.er@gmail', '123456789', '123456789', 2147483647),
('apeksha yadav', 'yadavapkeshaji29@gmail.com', '2345fghj', '2345fghj', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userdetails`
--
ALTER TABLE `userdetails`
  ADD PRIMARY KEY (`EMAIL`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
