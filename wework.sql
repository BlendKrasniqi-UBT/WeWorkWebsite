-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 13, 2020 at 06:25 PM
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
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `placeofwork` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `entertext` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `city`, `placeofwork`, `gender`, `entertext`) VALUES
(1, 'a', 'aa@aa.com', 'prishtina', 'elswhere', 'female', 'aa'),
(2, 'bb', 'bb@bb.com', 'prishtina', 'office', 'female', 'ccsada'),
(3, 'Blend', 'test@test.com', 'prishtina', 'home', 'male', 'Hello world!'),
(4, 'adasdasd', 'a@a.com', 'beogradi', 'office', 'female', 'a'),
(5, 'blendi', 'blendi@blendi.com', 'prishtina', 'home', 'male', 'Helloooo');

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` int(11) NOT NULL,
  `featuresmaintitle` text NOT NULL,
  `featuretitleone` text NOT NULL,
  `featuresdescone` text NOT NULL,
  `featurestitletwo` text NOT NULL,
  `featuresdesctwo` text NOT NULL,
  `featurestitlethree` text NOT NULL,
  `featuresdescthree` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `featuresmaintitle`, `featuretitleone`, `featuresdescone`, `featurestitletwo`, `featuresdesctwo`, `featurestitlethree`, `featuresdescthree`) VALUES
(1, 'Features', 'Fully custom spaces', 'Whole buildings to full or partial floors that are tailored to enhance your unique business and culture.', 'Coworking Spaces', 'Dedicated desks or hot desks that come with access to meeting rooms, business-class printing, and common amenities.', 'Flexible private offices', 'Move-in ready offices and configurable suites that flex to accommodate teams of any size.');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `user_type` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(5, 'Normal', 'normal@normal.com', '$2y$10$832Gtp8isVOFSy4QTo9ZI..dMLTOuIaaOhbYY1aLg4HXmaGFaF24i', 'normal'),
(6, 'Admin', 'admin@admin.com', '$2y$10$NXsNYnihbIp7EGMZjXVV1.uSqLPChz9pUnQf7RtMsbqWQTELFfgvy', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
