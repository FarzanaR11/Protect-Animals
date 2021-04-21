-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2021 at 07:52 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `animal_welfare`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `post` varchar(255) NOT NULL,
  `dis` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(25) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `division` varchar(20) NOT NULL,
  `postcode` int(4) NOT NULL,
  `password` varchar(20) NOT NULL,
  `cpassword` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `username`, `email`, `mobile`, `division`, `postcode`, `password`, `cpassword`) VALUES
(5, 'maksud', 'maksud3663@gmail.com', '01818790794', 'Chittagong', 3804, '$2y$10$itWlT59VWgg/R', '$2y$10$UzUj0F1joZs.L'),
(6, 'sohel', 'sohel3663@gmail.com', '1234356', 'Dhaka', 2367, '$2y$10$oZcYQXl04gMgq', '$2y$10$ba8WPqxAOyGpj'),
(7, 'simon', 'simon3663@gmail.com', '43554636', 'Khulna', 9876, '$2y$10$SApjB8zQYuZzO', '$2y$10$cOmVKJSdjO.mw'),
(9, 'maksud', 'maksud3663@gmail.com', '78161744', 'Chittagong', 3804, '$2y$10$kaRa5E9Ibc/37', '$2y$10$dYvFAi08vKUvm'),
(10, 'maksud', 'maksud3663@gmail.com', '2788923798', 'Chittagong', 3804, '$2y$10$1YBPHCOP9aDYS', '$2y$10$NEDVpIsa7pGfc'),
(11, 'amirul ahsan', 'amirul.ahsan@northsouth.e', '87464897649', 'Sylhet', 4354, '$2y$10$DaK5Gax19ckWL', '$2y$10$P2lyyfwuSmiqZ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE `volunteer` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(25) NOT NULL,
  `mobile` int(11) NOT NULL,
  `division` varchar(20) NOT NULL,
  `postcode` int(4) NOT NULL,
  `password` varchar(30) NOT NULL,
  `cpassword` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`id`, `username`, `email`, `mobile`, `division`, `postcode`, `password`, `cpassword`) VALUES
(1, 'nishan', 'nishan@gmail.com', 2147483647, 'Barisal', 9865, '$2y$10$.xgb7d2eH5NRQvkhwpTRxO0', '$2y$10$khsKcxEb4dt4wF65JiGTNOv');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `volunteer`
--
ALTER TABLE `volunteer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `volunteer`
--
ALTER TABLE `volunteer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
