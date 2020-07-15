-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 15, 2020 at 12:18 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `author` text NOT NULL,
  `entertext` text NOT NULL,
  `imageurl` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `author`, `entertext`, `imageurl`) VALUES
(3, '10 best video conferencing software for remote teams', 'Blend', 'Video chat go only so far. We review the most popular solutions so that you can jump straight into working.', '5f0db1e1b7ab30.95132360.jpg'),
(4, 'How to host a virtual conference while distancing', 'Blend', 'Holding a virtual conference now supports your industry and creates relationships that can outlast a crisis.', '5f0db2007dc317.61431012.jpg'),
(5, '10 effective brainstorming techniques for teamsc', 'Lirian', 'Group brainstorming, can promote creative thinking, bring a team together, and help you land on the perfect idea.', '5f0db246f2be56.38606395.jpg'),
(6, 'How to engage remote employees', 'Admin', 'Slack and video chat go only so far. Here\'s how to make remote workers feel like part of the team.', '5f0db73ca56f68.76291182.jpg'),
(7, '16 tips for managing remote teams', 'Admin', 'As the workforce becomes more distributed, managers must adapt and manage remote employees.', '5f0db76884af07.53941299.jpg'),
(8, 'Does productivity increase when working remotely?', 'Admin', 'Studies show that it can. Here’s what businesses and employees should consider to make remote work, work. ', '5f0db783ae50c9.21432509.jpg');

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
(3, 'Blend', 'test@test.com', 'prishtina', 'home', 'male', 'Hello world!'),
(6, 'Blendi', 'blendi@blendi.com', 'shkupi', 'elsewhere', 'male', 'Hello Blendi'),
(7, 'Lirian', 'liriandragusha@ubt.com', 'prishtina', 'office', 'other', 'Hello Lirian!');

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

-- --------------------------------------------------------

--
-- Table structure for table `section1`
--

CREATE TABLE `section1` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `smalltitle` text NOT NULL,
  `button1` text NOT NULL,
  `button2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `section1`
--

INSERT INTO `section1` (`id`, `title`, `smalltitle`, `button1`, `button2`) VALUES
(1, 'WeWork', 'Office space and workspace solutions', 'Learn More', 'Contact Us');

-- --------------------------------------------------------

--
-- Table structure for table `section2`
--

CREATE TABLE `section2` (
  `id` int(5) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `section2`
--

INSERT INTO `section2` (`id`, `title`, `description`) VALUES
(1, 'Over 500 locations worldwide', 'Whether you need to build a headquarters in New York, expand into the London market, or secure coworking space in Tokyo, we have office spaces to rent worldwide.');

-- --------------------------------------------------------

--
-- Table structure for table `section3`
--

CREATE TABLE `section3` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `section3`
--

INSERT INTO `section3` (`id`, `title`, `description`) VALUES
(1, 'Moving forward, together', 'WeWork is deeply committed to supporting our member companies. As we look ahead to the new normal in the workplace, WeWork is redesigning our spaces for your health and safety.');

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
(57, 'Blend', 'blendkrasniqi@ubt.com', '$2y$10$2fNVOH.1R5/UlWzHbXIhiOySwcsSj1/Beg7n4zIdiskfwKbNKfgcG', 'normal'),
(58, 'Lirian', 'liriandragusha@ubt.com', '$2y$10$.mpmyW13OysEluqY59d77eUJ8.Qsl5CVMfpHWtPGiXjykdIV4Dfz2', 'normal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `ourstaff`
--
ALTER TABLE `ourstaff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section1`
--
ALTER TABLE `section1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section2`
--
ALTER TABLE `section2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section3`
--
ALTER TABLE `section3`
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
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ourstaff`
--
ALTER TABLE `ourstaff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `section1`
--
ALTER TABLE `section1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `section2`
--
ALTER TABLE `section2`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `section3`
--
ALTER TABLE `section3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
