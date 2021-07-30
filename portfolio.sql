-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2021 at 07:30 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `abtpara` text NOT NULL,
  `age` int(10) NOT NULL,
  `qualification` varchar(30) NOT NULL,
  `post` varchar(30) NOT NULL,
  `language` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `email`, `abtpara`, `age`, `qualification`, `post`, `language`) VALUES
(33, 'dash.anisha44@gmail.com', 'I am Anisha Dash, a 3rd year student of the Instrumentation and Electronics Engineering Branch. I am a very passionate Front-End Developer. I am currently learning PHP. I want to be thorough with both front-end and back-end so that I can be a full stack web developer.', 20, 'Student', 'Front-End Web Developer', 'English, Odia, Hindi'),
(35, '123@abc.com', 'I am Agnes, a 3rd year student of the Instrumentation and Electronics Engineering Branch. I am a very passionate Back-End Developer. I am currently learning PHP. I want to be thorough with both front-end and back-end so that I can be a full stack web developer.', 25, 'Student', 'PHP developer', 'English'),
(36, 'abc@bcd.com', 'I am Geetanjali. I am a very passionate Graphic Designer. I am currently learning poster design. I want to be a Designer.', 30, 'B-tech', 'Graphics Designer', 'English, Odia, Hindi, Turkish');

-- --------------------------------------------------------

--
-- Table structure for table `achievement`
--

CREATE TABLE `achievement` (
  `id` int(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `achievement1` text NOT NULL,
  `achievement2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `achievement`
--

INSERT INTO `achievement` (`id`, `email`, `achievement1`, `achievement2`) VALUES
(24, 'dash.anisha44@gmail.com', 'Successfully completed the Hacktoberfest Challenge 2020', 'Awarded the CET Merit Scholarship (03/2021)'),
(26, '123@abc.com', 'Successfully completed the Hacktoberfest Challenge 2020', 'Awarded the CET Merit Scholarship (03/2021)'),
(27, 'abc@bcd.com', 'Got a prize for design', 'Got a prize for design');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `instagram` varchar(150) NOT NULL,
  `linkedin` varchar(150) NOT NULL,
  `facebook` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `email`, `instagram`, `linkedin`, `facebook`) VALUES
(23, 'dash.anisha44@gmail.com', 'Anisha Dash', 'Anisha Dash', 'Anisha Dash'),
(25, '123@abc.com', 'Agnes', 'Agnes', 'Agnes'),
(26, 'abc@bcd.com', 'Geetanjali', 'Geetanjali', 'Geetanjali');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `year1` bigint(100) NOT NULL,
  `sclname` text NOT NULL,
  `year2` bigint(100) NOT NULL,
  `hsname` text NOT NULL,
  `year3` bigint(100) NOT NULL,
  `colname` text NOT NULL,
  `colb` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `email`, `year1`, `sclname`, `year2`, `hsname`, `year3`, `colname`, `colb`) VALUES
(24, 'dash.anisha44@gmail.com', 2017, 'St. Josephs High School', 2019, 'Mothers Public School', 2023, 'College of Engineering and Technology', 'IEE'),
(26, '123@abc.com', 2017, 'St Josephs High School', 2019, 'DAV Public School', 2023, 'Odisha University of Technology and Research', 'IEE'),
(27, 'abc@bcd.com', 2007, 'High School', 2009, 'High school', 2013, 'XYZ College', 'CSE');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `email` varchar(150) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `email`, `name`) VALUES
(33, 'dash.anisha44@gmail.com', 'Anisha Dash'),
(35, '123@abc.com', 'Agnes'),
(36, 'abc@bcd.com', 'Geetanjali');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `project1` text NOT NULL,
  `project2` text NOT NULL,
  `project3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `email`, `project1`, `project2`, `project3`) VALUES
(24, 'dash.anisha44@gmail.com', 'Successfully made an all-terrain ', 'Successfully created a GUI application', 'Successfully created a portfolio website using front end development'),
(26, '123@abc.com', 'Created a simple login-signup page in PHP', 'Created a clone of Apple website', 'Made a registration page'),
(27, 'abc@bcd.com', 'Made an illustration for Diwali', 'Made a poster for the Independence Day', 'Made a background image');

-- --------------------------------------------------------

--
-- Table structure for table `reg-data`
--

CREATE TABLE `reg-data` (
  `id` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reg-data`
--

INSERT INTO `reg-data` (`id`, `name`, `email`, `password`) VALUES
(3, 'Anisha Dash', 'dash.anisha44@gmail.com', 'adash'),
(4, 'Agnes', '123@abc.com', 'pass'),
(5, 'Geetanjali', 'abc@bcd.com', 'geeta');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `advance` text NOT NULL,
  `intermediate` text NOT NULL,
  `novice` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `email`, `advance`, `intermediate`, `novice`) VALUES
(24, 'dash.anisha44@gmail.com', 'HTML, CSS, JavaScript, Bootstrap', 'Java, Python, C', 'PHP'),
(26, '123@abc.com', 'HTML,CSS', 'PHP', 'NodeJS'),
(27, 'abc@bcd.com', 'Graphic Design', 'Poster Making', 'Illustration');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `achievement`
--
ALTER TABLE `achievement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reg-data`
--
ALTER TABLE `reg-data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `achievement`
--
ALTER TABLE `achievement`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `reg-data`
--
ALTER TABLE `reg-data`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
