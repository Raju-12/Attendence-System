-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2020 at 10:13 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attendence`
--

-- --------------------------------------------------------

--
-- Table structure for table `attan`
--

CREATE TABLE `attan` (
  `attan_id` int(11) NOT NULL,
  `value` varchar(50) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attan`
--

INSERT INTO `attan` (`attan_id`, `value`, `emp_id`, `date`) VALUES
(24, 'Present', 32, '18-02-20'),
(25, 'Absent', 33, '18-02-20'),
(26, 'Present', 35, '18-02-20'),
(27, 'Present', 32, '21-02-20'),
(28, 'Present', 33, '21-02-20'),
(29, 'Present', 35, '21-02-20');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `name`, `fname`, `email`) VALUES
(32, 'a', 'a', 'aa@d.com'),
(33, 'aaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaa', 'aa@d.com'),
(35, 'raju', 'biswas', 'rajubiswas5878@gmail.com'),
(36, 'Rana', 'Chadan', 'ranabiswas5878@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attan`
--
ALTER TABLE `attan`
  ADD PRIMARY KEY (`attan_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attan`
--
ALTER TABLE `attan`
  MODIFY `attan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
