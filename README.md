-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2026 at 08:08 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `vaild`
--

CREATE TABLE `vaild` (
  `fullname` varchar(40) DEFAULT NULL,
  `username` varchar(40) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `phone` varchar(40) DEFAULT NULL,
  `password` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vaild`
--

INSERT INTO `vaild` (`fullname`, `username`, `email`, `phone`, `password`) VALUES
('abhi', 'abhishek', 'gyanbaba401@gmail.com', '4435672727', '$2y$10$H/.QKS/rsUs/M5RmHWvC8OC5KD07N8B4I'),
('hell', 'hel', 'helloitme@gmail.com', '27772272727', '$2y$10$G9Jhxz5.W7DArr.8oNuVROZqmFe1RSI6k');

-- --------------------------------------------------------

--
-- Table structure for table `valid1`
--

CREATE TABLE `valid1` (
  `id` int(11) NOT NULL,
  `booktitle` varchar(40) DEFAULT NULL,
  `authorname` varchar(40) DEFAULT NULL,
  `genre` varchar(40) DEFAULT NULL,
  `totalcopies` varchar(40) DEFAULT NULL,
  `availablecopies` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `valid1`
--

INSERT INTO `valid1` (`id`, `booktitle`, `authorname`, `genre`, `totalcopies`, `availablecopies`) VALUES
(2, 'poor dad', 'me', 'skskksk', '4', '55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `valid1`
--
ALTER TABLE `valid1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `valid1`
--
ALTER TABLE `valid1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
