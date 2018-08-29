-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2018 at 04:15 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.1.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `interview`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pid` int(11) NOT NULL,
  `productname` varchar(225) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `productname`, `created_at`, `updated_at`) VALUES
(1, 'pizza', '2018-08-29 11:03:44', '2018-08-29 11:03:44'),
(2, 'rice', '2018-08-29 12:18:34', '2018-08-29 12:18:34'),
(3, 'beans', '2018-08-29 12:18:44', '2018-08-29 12:18:44'),
(4, 'beef', '2018-08-29 13:16:29', '2018-08-29 13:16:29');

-- --------------------------------------------------------

--
-- Table structure for table `stores`
--

CREATE TABLE `stores` (
  `stid` int(11) NOT NULL,
  `storename` varchar(225) NOT NULL,
  `productid` int(11) DEFAULT NULL,
  `location` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stores`
--

INSERT INTO `stores` (`stid`, `storename`, `productid`, `location`, `created_at`, `updated_at`) VALUES
(1, 'Domino', 1, 'Ketu', '2018-08-29 11:21:44', '2018-08-29 11:21:44'),
(2, 'kfc', 2, 'ibadan', '2018-08-29 11:55:17', '2018-08-29 11:55:17'),
(3, 'mamacass', 3, 'ijora', '2018-08-29 12:19:09', '2018-08-29 12:19:09'),
(4, 'Reftek', 2, 'Ikeja', '2018-08-29 13:18:40', '2018-08-29 13:18:40'),
(5, 'ofada restaurant', 2, 'lekki', '2018-08-29 14:05:58', '2018-08-29 14:05:58');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `role` varchar(50) NOT NULL,
  `storeid` varchar(50) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `storeid`, `created_at`, `updated_at`) VALUES
(1, 'Haruna Ahmadu', 'akhmadharuna@gmail.com', 'admin', '1', '2018-08-29 11:29:48', '2018-08-29 11:29:48'),
(3, 'Samuel Oluwaseyi Sanni', 'samuelakintomiwa98@gmail.com', 'manager', '5', '2018-08-29 12:13:33', '2018-08-29 12:13:33'),
(4, 'Ramond', 'raymond@gmail.com', 'manager', '1', '2018-08-29 13:19:17', '2018-08-29 13:19:17'),
(5, 'tom mark', 'akhmadharuna@gmail.com', 'admin', '3', '2018-08-29 14:01:32', '2018-08-29 14:01:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `stores`
--
ALTER TABLE `stores`
  ADD PRIMARY KEY (`stid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `stores`
--
ALTER TABLE `stores`
  MODIFY `stid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
