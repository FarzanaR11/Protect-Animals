-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 20, 2021 at 06:12 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ProtectPets-master`
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
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`id`, `username`, `email`, `mobile`, `division`, `postcode`, `password`, `cpassword`) VALUES
(1, 'nishan', 'nishan@gmail.com', 2147483647, 'Barisal', 9865, '$2y$10$.xgb7d2eH5NRQvkhwpTRxO0', '$2y$10$khsKcxEb4dt4wF65JiGTNOv'),
(2, 'admin', 'kaziar42@gmail.com', 123456, 'dhaka', 1234, '$2y$10$KX27cQmDJ0ObGHj1vpYOI.MS.qPvQB9KnSNAPO5uazYITHCWthwoW', '$2y$10$0TaZEvRkYxpHAyoqoIQ2G.ermvNTujSSUo0uqg8oyOwmzdG/gLaly'),
(3, 'admin', 'kaziar42@gmail.com', 123456, 'dhaka', 1234, '$2y$10$mWZH/rMOK3qMOsb.ZDkfc.wo/XRfzz9W8UOPIJhWgCzx3CAiN6MjS', '$2y$10$jbNMDPiqTfL/5mbkVI/xGuFUqHEN0LPHmpw0CMNtYISaujN34.Pm.');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
