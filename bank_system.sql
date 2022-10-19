-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2022 at 09:31 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `sr` int(8) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`sr`, `Name`, `Email`, `Message`) VALUES
(0, 'abhishek', 'red.fg@gmail.com', 'hy'),
(0, 'rd', 'ah.sd@gmail.com', 'g'),
(0, 'abhishek', 'abhi.gawade27@gmail.com', 'hello'),
(0, 'abhi', 'abhi.gawade27@gmail.com', 'hi'),
(0, 'abhishek', 'ah.sd@gmail.com', 'kkkk');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Sr` int(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `AccountNo` int(50) NOT NULL,
  `Balance` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Sr`, `Name`, `Email`, `AccountNo`, `Balance`) VALUES
(1, 'Abhishek Gawade', 'abhi.gawade@gmail.com', 101, 999990),
(2, 'raj jilla', 'raj12@gmail.com', 102, 999905),
(3, 'nikhil rane', 'rane.nikhil06@gmail.com', 103, 1000000),
(4, 'govil shinde', 'gov.shinde@gmail.com', 104, 1000105),
(5, 'ankita shinde', 'anku.07@gmail.com', 105, 1000000),
(6, 'anushka pawar', 'pawar.anu09@gmail.com', 106, 1000000),
(7, 'omkar bhagat', 'omi.access@gmail.com', 107, 1000000),
(8, 'varsha pal', 'pal.varsha@gmail.com', 108, 1000000),
(9, 'valmik shingh', 'singh.valmik46@gmail.com', 109, 1000000),
(10, 'saakshi dev', 'saakshu.dev@gmail.com', 110, 1000000),
(11, 'hulk', 'hulk.lk@gmail.com', 111, 222);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `Sr` int(50) NOT NULL,
  `Sender` varchar(50) NOT NULL,
  `Receiver` varchar(50) NOT NULL,
  `Amount` int(50) NOT NULL,
  `Status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`Sr`, `Sender`, `Receiver`, `Amount`, `Status`) VALUES
(1, '112', '113', 10, 'failed'),
(2, '113', '112', 15, 'Success'),
(3, '102', '101', 10, 'success'),
(4, '101', '102', 10, 'success'),
(5, '102', '104', 105, 'success');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Sr`),
  ADD UNIQUE KEY `UNIQUE` (`AccountNo`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`Sr`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `Sr` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `Sr` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
