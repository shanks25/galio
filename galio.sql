-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2020 at 07:30 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `galio`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`) VALUES
(1, 'Super Admin', 'admin@yopmail.com', '$2y$10$CS6d7JRuixMnA4XPx8Co.OhZHNzmxU9h3v4qDRkxR0CQIEUrJpV22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'test', 'asdf@asdfasdf', '$2y$10$i5p/Lfeqa2.GiZgSCmCeIeYTJGqF.vSdEzL2NIBTcGXK1b.q6dFUm', '2020-06-14 13:06:43', '2020-06-14 13:06:43'),
(2, 'test', 'kunal@yopmail.com', '$2y$10$ABS.Cd5pSfe/zgO.WE1Xn.l5gG3gepBKGHkh4kvVQlxAjSamAvtNK', '2020-06-14 13:11:05', '2020-06-14 13:11:05'),
(3, 'kun2al@yopmail.com', 'kun2al@yopmail.com', '$2y$10$uqdVmz2t9A.PbCz1DyubOOTX2e4muNOmN4NbVy3EiYLuhdwsNk3oS', '2020-06-14 13:13:03', '2020-06-14 13:13:03'),
(4, 'Kunal Rajput', 'kunal@gmail.com', '$2y$10$T4y4IuHn6pejAE7GSk2lCOP.vP4/CXsymn/RIx3dfBZhH.gzoP0Km', '2020-06-15 11:43:13', '2020-06-15 11:43:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
