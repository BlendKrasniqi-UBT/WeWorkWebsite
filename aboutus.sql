-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2020 at 09:30 PM
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
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `desc1` text NOT NULL,
  `desc2` text NOT NULL,
  `desc3` text NOT NULL,
  `desc4` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`id`, `title`, `desc1`, `desc2`, `desc3`, `desc4`) VALUES
(1, 'About Us', 'WeWork is an American commercial real estate company that provides shared workspaces for technology startups and services for other enterprises. Founded in 2010, it is headquartered in New York City. As of 2018, WeWork managed over 4 million square metres. WeWork\'s parent company is The We Company. WeWork designs and builds physical and virtual shared spaces and office services for entrepreneurs and companies. At one time, WeWork had more than 5,000 employees in over 280 locations, spread across 86 cities in 32 countries.', 'When we started WeWork in 2010, we wanted to build more than beautiful, shared office spaces. We wanted to build a community. A place you join as an individual, \'me\', but where you become part of a greater \'we\'. A place where we’re redefining success measured by personal fulfillment, not just the bottom line. Community is our catalyst.\r\n\r\n', 'Our mission doesn’t end with the small businesses and entrepreneurs that call us home. We believe in empowering our team to create their own life\'s work. We move fast and we challenge each other, but we look after each other and care about our culture, which makes working here extremely rewarding. There\'s a lot of work left for us to do, and we couldn\'t do it without a single member of our team.', 'As a first-mover in the industry, WeWork has been a leader in fostering innovation and collaboration in the workplace for over a decade. Today, with over 600,000 members around the world, we are once again in a position to redefine what the future of work looks like as we face the new realities of a post COVID-19 world. While so much has changed—WeWork’s promise to deliver exceptional, innovative, and safe spaces, has not.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
