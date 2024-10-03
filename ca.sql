-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2023 at 03:41 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ca`
--

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `Yname` text NOT NULL,
  `Ynumber` int(15) NOT NULL,
  `Yorder` varchar(50) NOT NULL,
  `Afood` varchar(50) NOT NULL,
  `Nooforders` int(20) NOT NULL,
  `dateandtime` varchar(20) NOT NULL,
  `Yaddress` varchar(50) NOT NULL,
  `Ymessage` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`Yname`, `Ynumber`, `Yorder`, `Afood`, `Nooforders`, `dateandtime`, `Yaddress`, `Ymessage`) VALUES
('Saran', 123456789, 'briyani', 'coca cola', 1, '2023-12-24T20:01', 'Colombo', 'hi'),
('K.Saran', 1234567890, 'Pizza', 'Milk', 2, '2023-12-24T20:08', 'Jaffna', 'Hello');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `uname1` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `upswd1` varchar(20) NOT NULL,
  `upswd2` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`uname1`, `email`, `upswd1`, `upswd2`) VALUES
('danu', 'danu@gmail.com', '123', '123'),
('saran', 'saran@gmail.com', '1234', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `uname1` (`uname1`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
