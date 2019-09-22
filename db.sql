-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Sep 22, 2019 at 11:26 PM
-- Server version: 5.7.25
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `queue_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(10) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `email`, `created_at`, `updated_at`) VALUES
(27, 'Kotryna', 'kotrynos@gmail.com', '2019-09-22 14:18:49', NULL),
(28, 'Kotryna', 'kotrynos@gmail.com', '2019-09-22 19:22:17', NULL),
(29, 'Kotryna', 'kotrynos@gmail.com', '2019-09-22 19:41:11', NULL),
(30, 'Dmitriy Yanov-Yanovskiy', 'yanovyan@msu.edu', '2019-09-22 22:51:01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `visits`
--

CREATE TABLE `visits` (
  `id` int(10) NOT NULL,
  `client_id` int(10) NOT NULL,
  `name` text NOT NULL,
  `reason` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `visits`
--

INSERT INTO `visits` (`id`, `client_id`, `name`, `reason`, `created_at`, `updated_at`) VALUES
(2, 27, 'Kotryna', 'Complain', '2019-09-22 14:18:49', NULL),
(3, 28, 'Kotryna', 'Contract', '2019-09-22 19:22:17', NULL),
(4, 29, 'Kotryna', 'Visit', '2019-09-22 19:41:11', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visits`
--
ALTER TABLE `visits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_id` (`client_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `visits`
--
ALTER TABLE `visits`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `visits`
--
ALTER TABLE `visits`
  ADD CONSTRAINT `visits_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`);
