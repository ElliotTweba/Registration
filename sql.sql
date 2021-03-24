-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2021 at 04:46 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `people`
--
CREATE DATABASE IF NOT EXISTS `people` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `people`;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `name` text NOT NULL,
  `lastname` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` int(10) NOT NULL,
  `description` varchar(30) NOT NULL,
  `terms` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`name`, `lastname`, `email`, `contact`, `description`, `terms`) VALUES
('Tsekiso', 'Thokoana', 'tsekisoelliot1535@gmail.com', 631069933, 'Approves attendence', 'on'),
('Thabo', 'Thokoana', 'tweba@engineer.com', 631069933, 'Approves attendence', 'on'),
('Tsekiso', 'leche', 'th@gmail.com', 631069933, 'Approves attendence', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` text NOT NULL,
  `lastname` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `lastname`, `email`, `password`) VALUES
('Mpho', 'Likotsi', 'likotsi@gmail.com', '1111'),
('Tsekiso', 'lecheeeeeeee', 'th@gmail.com', '0631069933'),
('Tsekiso ', 'Thokoana', 'tsekisoelliot1535@gmail.com', '1111'),
('Thabos', 'Thokoana', 'tweba@engineer.com', '0631069933');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
