-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2022 at 12:58 PM
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
-- Database: `crm`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `text` longtext NOT NULL,
  `category` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `text`, `category`) VALUES
(1, 'Learn Html ', 'In this article, we will go through all the basic stuff of HTML coding. There are various tags that we must consider and include while starting to code in HTML. These tags help in the organization and basic formatting of elements in our script or web pages. These step by step procedures will guide you through the process of writing HTML.', 'Technology'),
(4, 'CSS ', 'Cascading Style Sheets, fondly referred to as CSS, is a simply designed language intended to simplify the process of making web pages presentable. CSS allows you to apply styles to web pages. More importantly, CSS enables you to do this independent of the HTML that makes up each web page.<br>\r\n<img src=\"C:xampphtdocsphpAssignmentcmsimgimg.png\">\r\nCSS is easy to learn and understand, but it provides powerful control over the presentation of an HTML document.', 'Technology'),
(6, 'sports', 'There are two types of sports activities – indoor and outdoor.<br> Outdoor sports activities include sports that exercise the body—these sports activities are basketball, cricket, football, table tennis, tennis, hockey. Basketball, tennis are sports activities', 'Sports'),
(8, 'tennis', 'tennis is a great game to play.', 'Sports'),
(11, 'New Game', 'this is a new game. <br>\r\nrelated to bike race.and can run on your PC.', 'Game'),
(12, 'Mobiles', 'here are some mobiles...<br>\r\n1.Apple <br>\r\n2.Nokia <br>\r\n3.samsung<br>\r\n4.MI', 'Electronics');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
