-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2022 at 06:06 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `s_id` int(10) NOT NULL,
  `s_name` varchar(20) NOT NULL,
  `s_address` varchar(50) NOT NULL,
  `s_class` int(10) NOT NULL,
  `s_contact` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`s_id`, `s_name`, `s_address`, `s_class`, `s_contact`) VALUES
(1, 'rajesh', 'sikar ', 1, '9843098978'),
(2, 'devendra', 'sec-10 jaipur', 1, '2365876790'),
(3, 'pushpendra', 'sawai madhopur', 1, '7823942424'),
(4, 'harsh', 'pune', 1, '8778675687'),
(6, 'yash', 'nayapura kota', 3, '2365876790'),
(7, 'ankit', 'chhabra', 2, '7823942424'),
(8, 'prashant', 'chhabra', 1, '7656452321'),
(9, 'shashank ', 'ajmer', 1, '7656452321'),
(10, 'priyanshu', 'bihar', 2, '0087654321'),
(11, 'ujjwal', 'jodhpur', 3, '8798675498'),
(12, 'priyanshu', 'bihar', 2, '0087654321'),
(13, 'ujjwal', 'jodhpur', 3, '8798675498');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `s_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
