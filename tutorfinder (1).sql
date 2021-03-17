-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 25, 2020 at 04:05 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tutorfinder`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `tutor_email` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `salary` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `user_email`, `tutor_email`, `subject`, `salary`) VALUES
(1, 'atiq@gmail.com', 'abc@gmail.com', 'chemistry', 3000),
(2, 'atiq@gmail.com', 'xyz@gmail.com', 'physics', 4000),
(3, 'atiq@gmail.com', 'abc@gmail.com', 'chemistry', 3000),
(4, 'atiq@gmail.com', 'abc@gmail.com', 'chemistry', 3000),
(5, 'atiq@gmail.com', 'abc@gmail.com', 'chemistry', 3000),
(6, 'atiq@gmail.com', 'abc@gmail.com', 'chemistry', 3000),
(7, 'atiq@gmail.com', 'abc@gmail.com', 'chemistry', 3000),
(8, 'atiq@gmail.com', 'abc@gmail.com', 'chemistry', 3000),
(9, 'atiq@gmail.com', 'abc@gmail.com', 'chemistry', 3000),
(10, 'atiq@gmail.com', 'abc@gmail.com', 'chemistry', 3000),
(11, 'atiq@gmail.com', '', '', 0),
(12, 'atiq@gmail.com', 'abc@gmail.com', 'chemistry', 3000),
(13, 'atiq@gmail.com', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `login_info`
--

CREATE TABLE `login_info` (
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `status` int(5) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_info`
--

INSERT INTO `login_info` (`name`, `email`, `password`, `status`) VALUES
('atiq', 'abc@gmail.com', '12345', 1),
('atiqur', 'atiq@gmail.com', '54321', 3),
('Atiq', 'abcd@gmail.com', '12345', 0),
('tabiul', 'm@gmail.com', '12345', 1),
('shk', 's@gmail.com', '12345', 1),
('Mahfujur Rahman', 'tbot@gmail.com', '12345', 1),
('deadpool', 'pool@gmail.com', '12345', 1),
('Shahdat', 'sha@gmail.com', '12345', 3);

-- --------------------------------------------------------

--
-- Table structure for table `opinions`
--

CREATE TABLE `opinions` (
  `ID` int(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `opinion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `opinions`
--

INSERT INTO `opinions` (`ID`, `email`, `opinion`) VALUES
(1, 'hridxx@gmail.com', 'abcd');

-- --------------------------------------------------------

--
-- Table structure for table `tutor_info`
--

CREATE TABLE `tutor_info` (
  `id` int(8) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `education` varchar(40) DEFAULT NULL,
  `phone` int(15) DEFAULT NULL,
  `address` varchar(30) DEFAULT NULL,
  `salary` int(20) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `day` int(11) NOT NULL,
  `language` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tutor_info`
--

INSERT INTO `tutor_info` (`id`, `name`, `email`, `education`, `phone`, `address`, `salary`, `subject`, `day`, `language`) VALUES
(11, 'Atiq', 'abc@gmail.com', 'Bsc.CSE', 1234567, 'Dhaka', 3000, 'chemistry', 0, ''),
(14, 'Sala Uddin', 's@gmail.com', 'SEVEN', 1548589685, 'Dhaka,Bangladesh', 0, 'Football', 7, 'English'),
(16, 'deadpool', 'pool@gmail.com', 'Graduate', 1258974255, 'DHaka', 0, '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `id` int(8) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `institution` varchar(20) DEFAULT NULL,
  `phone` int(15) DEFAULT NULL,
  `address` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `name`, `email`, `institution`, `phone`, `address`) VALUES
(3, 'Atiq', 'abcd@gmail.com', 'Iub', 12345, 'Dhaka');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_info`
--
ALTER TABLE `login_info`
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `opinions`
--
ALTER TABLE `opinions`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tutor_info`
--
ALTER TABLE `tutor_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `opinions`
--
ALTER TABLE `opinions`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tutor_info`
--
ALTER TABLE `tutor_info`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
