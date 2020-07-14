-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2020 at 09:16 PM
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
-- Database: `wework`
--

-- --------------------------------------------------------

--
-- Table structure for table `ourstaff`
--

CREATE TABLE `ourstaff` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `staff1name` text NOT NULL,
  `staff1position` text NOT NULL,
  `staff2Name` text NOT NULL,
  `staff2position` text NOT NULL,
  `staff3name` text NOT NULL,
  `staff3position` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ourstaff`
--

INSERT INTO `ourstaff` (`id`, `title`, `staff1name`, `staff1position`, `staff2Name`, `staff2position`, `staff3name`, `staff3position`) VALUES
(1, 'Our Staff', 'Adam Neumann', 'CEO', 'Laura Nelson', 'Executive Chairman', 'Betta Williams', 'CCO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ourstaff`
--
ALTER TABLE `ourstaff`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ourstaff`
--
ALTER TABLE `ourstaff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
