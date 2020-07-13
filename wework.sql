-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 10, 2020 at 09:25 PM
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
(6, 'Admin', 'admin@admin.com', '$2y$10$NXsNYnihbIp7EGMZjXVV1.uSqLPChz9pUnQf7RtMsbqWQTELFfgvy', 'admin'),
(9, 'Blend', 'blendi@blendi.com', '$2y$10$mtWH0tz5Qntaz.5jjYeFwuc/xJOTo3cwYFp1rVQbiO/kf2sSsM3eG', 'normal'),
(10, 'Lirian', 'lirian@lirian.com', '$2y$10$DcNXXhWi49sGSak5AqN/6uFpVZSNYkDPaE8OEgLH3gPXts7QkAMyi', 'normal'),
(12, 'Boss', 'boss@boss.com', '$2y$10$PyWPUbFFcFdfopk1lhprmOBNj39Yy0X8zcQWjbrPmyb6krUzXBoYC', 'normal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
