-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2021 at 11:47 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinetourguide`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `touristEmail` varchar(50) NOT NULL,
  `touristName` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `packageName` varchar(75) NOT NULL,
  `tourGuideName` varchar(50) NOT NULL,
  `tourGuideEmail` varchar(50) NOT NULL,
  `paymentMethod` varchar(50) NOT NULL,
  `departureDate` date NOT NULL,
  `arrivalDate` date NOT NULL,
  `members` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `touristEmail`, `touristName`, `country`, `packageName`, `tourGuideName`, `tourGuideEmail`, `paymentMethod`, `departureDate`, `arrivalDate`, `members`) VALUES
(1, 'tom@gmail.com', 'Tom', 'New Zealand', 'North Island Adventure', 'Bawanthi Gunasekara', 'bawanthi@gmail.com', 'credit card', '2021-06-12', '2021-07-12', 2),
(2, 'emma@gmail.com', 'Emma', 'Dubai', 'Magestic dubai', 'Amasha Bandara', 'amasha@gmail.com', 'PayPal', '2021-08-05', '2021-08-12', 3),
(3, 'jennifer@gmail.com', 'Jennifer', 'Italy', 'Romantic Italy', 'Kawya Samarasinghe', 'kawya@gmail.com', 'PayPal', '2021-09-05', '2021-09-12', 6),
(4, 'jack@gmail.com', 'Jack', 'Sri Lanka', 'Sri Lanka One Life Adventure', 'Thamindu Gamage', 'thamindu@gmail.com', 'credit card', '2021-08-12', '2021-09-05', 5),
(5, 'david@gmail.com', 'David', 'Brazil', 'Rio Getaway', 'Charith Jayasingha', 'charith@gmail.com', 'Fund transfer', '2021-12-08', '2021-12-25', 4);

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `message`) VALUES
(1, 'Tom', 'tom@gmail.com', 'blah blah blah'),
(2, 'Emma', 'emma@gmail.com', 'wingardium leviousa'),
(3, 'Jack', 'jack@gmail.com', 'sweet'),
(4, 'David', 'david@gmail.com', 'James Bond');

-- --------------------------------------------------------

--
-- Table structure for table `preex`
--

CREATE TABLE `preex` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `preex`
--

INSERT INTO `preex` (`id`, `name`, `feedback`) VALUES
(1, 'David Crane', 'Great Service'),
(2, 'Jennifer Lawrence', 'Great experience'),
(3, 'Jack Black', 'New experience'),
(4, 'Henry Cavill', 'Great people highly reccommend');

-- --------------------------------------------------------

--
-- Table structure for table `ratee`
--

CREATE TABLE `ratee` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `rate` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ratee`
--

INSERT INTO `ratee` (`id`, `name`, `rate`) VALUES
(1, 'Jack', 4.6),
(2, 'Jennifer', 2.5),
(3, 'David', 4.6),
(4, 'Emma', 3.5),
(5, 'Samuel', 4.8);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `createPW` varchar(15) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `bio` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `fname`, `lname`, `dob`, `email`, `createPW`, `gender`, `bio`) VALUES
(1, 'Jennifer ', ' Aniston', '1969-02-11', 'jennifer@gmail.com', 'jennifer1969', 'female', 'Love travelling, travelling life'),
(2, 'Ryan', ' Reynolds', '1978-05-12', 'ryan@gmail.com', 'ryan1978', 'male', 'Funny traveller, lone wolf'),
(3, 'Emma', ' Watson', '1992-01-12', 'emma@gmail.com', 'emma1992', 'female', 'lighten up your day'),
(4, 'Tom', ' Cruise', '1958-05-12', 'tom@gmail.com', 'tom1958', 'male', 'mission impossible'),
(5, 'Jack', ' Black', '1962-05-22', 'jack@gmail.com', 'jack1962', 'male', 'Do what you have to do');

-- --------------------------------------------------------

--
-- Table structure for table `regtourguide`
--

CREATE TABLE `regtourguide` (
  `id` int(100) NOT NULL,
  `firstName` varchar(20) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(40) NOT NULL,
  `passportno` varchar(10) NOT NULL,
  `Password` varchar(15) NOT NULL,
  `country` varchar(20) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `bio` varchar(500) NOT NULL,
  `experience` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regtourguide`
--

INSERT INTO `regtourguide` (`id`, `firstName`, `lastName`, `dob`, `email`, `passportno`, `Password`, `country`, `gender`, `bio`, `experience`) VALUES
(1, 'Thamindu', 'Gamage', '2000-07-07', 'thamindu@gmail.com', 'n1234567', '123', 'Sri Lanka', 'male', 'Lively funny energetic', 'One year'),
(2, 'Kawya', 'Samarasinghe', '1999-11-18', 'kawya@gmail.com', 'n4567896', 'kawya1999', 'Italy', 'female', 'Kpop fan, love travelling, energetic', 'Two years'),
(3, 'Charith', 'Jayasingha', '2000-03-10', 'charith@gmail.com', 'n5123654', 'charith2000', 'Brazil', 'male', 'Gaming is life, Curious, Love to travel, No worries', 'Three years'),
(4, 'Amasha', 'Bandara', '1998-11-23', 'amasha@gmail.com', 'n12354987', 'amasha1998', 'Dubai', 'female', 'Funny, No worries, hard working, love to travel, friendly', 'More Than Three Years'),
(5, 'Bawanthi', 'Gunasekara', '1999-06-29', 'bawanthi@gmail.com', 'n4568799', 'bawanthi1999', 'New Zealand', 'female', 'Friendly, Teamwork, Funny, Kind hearted, enigmatic, active, love to travel, new adventure seeker', 'More Than Three Years');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `preex`
--
ALTER TABLE `preex`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ratee`
--
ALTER TABLE `ratee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regtourguide`
--
ALTER TABLE `regtourguide`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `preex`
--
ALTER TABLE `preex`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ratee`
--
ALTER TABLE `ratee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `regtourguide`
--
ALTER TABLE `regtourguide`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
