-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 23, 2017 at 07:32 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `complexityDb`
--

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(100) NOT NULL,
  `projectName` varchar(40) NOT NULL,
  `owner` varchar(40) NOT NULL,
  `financial` varchar(50) NOT NULL,
  `projectDuration` varchar(50) NOT NULL,
  `mode` varchar(50) NOT NULL,
  `username` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `projectName`, `owner`, `financial`, `projectDuration`, `mode`, `username`) VALUES
(12, 'software testing', 'zeinalabidin', '100k', '20 days', 'insource', 'zain'),
(13, 'programming ', 'zeinalabidin', '1k', '6 days ', 'outsource  ', 'zain'),
(14, 'web', 'farid', '17 k', '19 days', 'co-scource ', 'farid'),
(15, 'qta', 'abcd', '4k', '4 das', 'Insource', 'abcd'),
(16, 'complexity', 'me', '1k', '2 days', 'Insource', 'zain'),
(17, 'computers', 'hello', '4 k', '8 days', 'Insource', 'hello'),
(18, 'laptops repairs', 'zain', '5 k', '5 days ', 'Insource', 'cabi');

-- --------------------------------------------------------

--
-- Table structure for table `qestions`
--

CREATE TABLE `qestions` (
  `id` int(111) NOT NULL,
  `score` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `projectName` varchar(45) NOT NULL,
  `section1` varchar(100) NOT NULL,
  `section2` varchar(100) NOT NULL,
  `section3` varchar(100) NOT NULL,
  `section4` varchar(100) NOT NULL,
  `section5` varchar(100) NOT NULL,
  `section6` varchar(100) NOT NULL,
  `section7` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qestions`
--

INSERT INTO `qestions` (`id`, `score`, `username`, `projectName`, `section1`, `section2`, `section3`, `section4`, `section5`, `section6`, `section7`) VALUES
(37, '163', 'zain', 'software testing', '46', '19', '25', '12', '9', '12', '40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `name` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `position`) VALUES
(5, 'zain', 'zain', 'zain', 'projectManager'),
(6, 'jalal', 'jalal', 'jalal', 'admin'),
(9, 'abc', 'abc', 'abc', 'ProjectDirector'),
(10, 'farid', 'farid', 'farid', 'projectManager'),
(14, 'aa', 'aa', 'aa', 'projectManager'),
(15, 'abcd', 'abcd', 'abcd', 'projectManager'),
(16, 'akita', 'akita', 'akila', 'projectManager'),
(17, 'hello', 'hello', 'jello', 'projectManager'),
(19, 'cabi', 'cabi', 'cabi', 'projectManager'),
(20, 'zain', 'zain25', 'zain25', 'ProjectDirector'),
(21, 'finalfantasy', 'finalfantasy', '123', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qestions`
--
ALTER TABLE `qestions`
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
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `qestions`
--
ALTER TABLE `qestions`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
