-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2024 at 08:56 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `databas`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(30) NOT NULL,
  `Full_name` varchar(32) NOT NULL,
  `phone` int(13) NOT NULL,
  `city` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `num` int(30) NOT NULL,
  `roomType` varchar(50) NOT NULL,
  `numberRoom` int(30) NOT NULL,
  `datein` date NOT NULL,
  `dateout` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `Full_name`, `phone`, `city`, `email`, `num`, `roomType`, `numberRoom`, `datein`, `dateout`) VALUES
(1, 'peter', 956667533, 'Hawassa', 'udhbf@gmail.com', 0, '', 5, '0000-00-00', '0000-00-00'),
(2, 'peter', 956667533, 'Hawassa', 'udhbf@gmail.com', 0, '', 5, '0000-00-00', '0000-00-00'),
(3, 'kefa', 987654, 'aa', 'piert@gmail.com', 0, '', 53, '0000-00-00', '0000-00-00'),
(4, 'kefa', 987654, 'aab', 'piert@gmail.com', 0, '', 53, '0000-00-00', '0000-00-00'),
(5, 'kefa', 987654, 'aab', 'piert@gmail.com', 0, '', 53, '0000-00-00', '0000-00-00'),
(6, 'bezabih', 956667533, 'Hawassa', 'bezabihbekele0875@gmail.com', 0, '', 0, '0000-00-00', '0000-00-00'),
(7, 'bezabih', 956667533, 'Hawassa', 'bezabihbekele0875@gmail.com', 0, '', 9, '0000-00-00', '0000-00-00'),
(8, 'abe', 956667533, 'Hawassa', 'bezabihbekele0875@gmail.com', 0, '', 9, '0000-00-00', '0000-00-00'),
(9, 'fra', 956667533, 'Hawassa', 'bezabihbekele0875@gmail.com', 0, '', 2, '0000-00-00', '0000-00-00'),
(10, 'wh', 956667533, 'Hawassa', 'bezabihbekele0875@gmail.com', 0, '', 1, '0000-00-00', '0000-00-00'),
(11, 'abr', 956667533, 'Hawassa', 'bezabihbekele0875@gmail.com', 0, 'select', 5, '0000-00-00', '0000-00-00'),
(12, 'abus', 956667533, 'Hawassa', 'bezabihbekele0875@gmail.com', 0, 'Queen Grand View', 2, '0000-00-00', '0000-00-00'),
(13, 'babi', 987654, 'aa', 'pit@gmail.com', 0, 'Elegant suit Room', 5, '2024-02-22', '2024-03-02'),
(14, 'babihg', 987654, 'aa', 'pit@gmail.com', 0, 'Connected Family room', 5, '2024-02-22', '2024-03-02'),
(15, 'babaipeter', 987654, 'aa', 'pit@gmail.com', 0, 'Twin Room', 6, '2024-02-22', '2024-02-28'),
(16, 'peter mess', 987654, 'aa', 'pit@gmail.com', 0, 'Elegant suit Room', 6, '2024-02-22', '2024-02-22');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(10) NOT NULL,
  `name` varchar(32) NOT NULL,
  `phone` varchar(32) NOT NULL,
  `address` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `comment` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `name`, `phone`, `address`, `email`, `comment`) VALUES
(1, 'bezabih', '0956667533', 'Hawassa', 'bezabihbekele0875@gmail.com', 'rqrgrt'),
(2, 'bezabih', '0956667533', 'Hawassa', 'bezabihbekele0875@gmail.com', ';ew,f/qe'),
(3, 'kefa', '0987654', 'aa', 'pit@gmail.com', 'rwgt'),
(4, 'bezabih', '0956667533', 'Hawassa', 'bezabihbekele0875@gmail.com', 'kedmlkkfjgjitkjmw gkjoslkmvkl, afjvclkklkllfnvof lkmv'),
(5, 'babi', '0956667533', 'Hawassa', 'bezabihbekele0875@gmail.com', 'it is good'),
(6, '.gnbl,eg', '0956667533', 'Hawassa', 'bezabihbekele0875@gmail.com', 'hey');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
