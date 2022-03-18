-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2022 at 02:04 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `th`
--

-- --------------------------------------------------------

--
-- Table structure for table `currentdate`
--

CREATE TABLE `currentdate` (
  `id` int(20) NOT NULL,
  `dateClicked` datetime NOT NULL,
  `dateClicked1` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `currentdate`
--

INSERT INTO `currentdate` (`id`, `dateClicked`, `dateClicked1`) VALUES
(24, '2022-03-03 23:59:59', '2022-03-04 03:04:01'),
(25, '2022-03-04 00:06:37', '2022-03-04 03:04:01'),
(26, '2022-03-04 00:06:40', '2022-03-04 03:04:01'),
(27, '2022-03-04 00:06:45', '2022-03-04 03:04:01'),
(34, '2022-03-04 03:04:00', '2022-03-04 03:04:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `currentdate`
--
ALTER TABLE `currentdate`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `currentdate`
--
ALTER TABLE `currentdate`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
