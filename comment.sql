-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2024 at 08:55 PM
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
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
