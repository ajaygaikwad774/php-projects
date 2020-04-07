-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 30, 2020 at 11:26 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id7587736_masterdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `addevents`
--

CREATE TABLE `addevents` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `theme` varchar(100) NOT NULL,
  `event_date` date NOT NULL,
  `imagename` blob NOT NULL,
  `description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addevents`
--

INSERT INTO `addevents` (`id`, `title`, `theme`, `event_date`, `imagename`, `description`) VALUES
(1, 'PUBG', 'Playstation', '2018-10-09', 0x707562672e6a7067, '  This is Pubg..'),
(2, 'snake and ladder', 'games', '2018-10-23', 0x322e706e67, '  snake and ladder game'),
(3, 'openmic', 'music', '2018-10-24', 0x382e6a7067, '  singing');

-- --------------------------------------------------------

--
-- Table structure for table `adminlogindetails`
--

CREATE TABLE `adminlogindetails` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogindetails`
--

INSERT INTO `adminlogindetails` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin@123');

-- --------------------------------------------------------

--
-- Table structure for table `applymembers`
--

CREATE TABLE `applymembers` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `roll_number` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `year` varchar(100) NOT NULL,
  `amount` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applymembers`
--

INSERT INTO `applymembers` (`id`, `firstname`, `lastname`, `roll_number`, `department`, `year`, `amount`, `email`, `mobile`, `username`, `password`) VALUES
(10, 'shweta', 'patil', '17IT5003', 'information technology', 'TE', 350, 'shwetapatil1805@gmail.com', '9702031937', 'shw.pat.rt17@rait.ac.in', 'shweta@123'),
(11, 'shraddha', 'kamble', '17IT5018', 'information technology', 'TE', 350, 'shraddha4121997@gmail.com', '9833461338', '', ''),
(14, 'mani', 'patil', '21', 'information technology', 'BE', 350, 'riddhi1@gmail.com', '8433754709', '', ''),
(15, 'Monica', 'Patil', '17IT5025', 'IT', 'TE', 350, 'twinkle01shah@gmail.com', '9892019506', 'monica@gmail.com', 'monica'),
(16, 'sushant', 'chavan', '78', 'pharmacy', 'TE', 350, 'sushnat@gmail.com', '9893903344', 'sushant', 'sai@123'),
(17, 'saurabh', 'tamhane', '35', 'Web-Designer', 'TE', 350, 's3vfilmproduction@gmail.com', '9895461206', 'saurabh', 'tamhane'),
(18, 'rohit', 'balwante', '17IT7111', 'DTP', 'SE', 350, 'rohitbalwante7111@gmail.com', '9820739727', 'rohit.balwante', 'sai@123'),
(19, 'priya', 'pole', '187768', 'bscIt', 'TE', 350, 'priyapole3@gmail.com', '8652006373', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addevents`
--
ALTER TABLE `addevents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminlogindetails`
--
ALTER TABLE `adminlogindetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applymembers`
--
ALTER TABLE `applymembers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roll_number` (`roll_number`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addevents`
--
ALTER TABLE `addevents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `adminlogindetails`
--
ALTER TABLE `adminlogindetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `applymembers`
--
ALTER TABLE `applymembers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
