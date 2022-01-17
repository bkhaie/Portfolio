-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2022 at 11:02 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zuzu`
--

-- --------------------------------------------------------

--
-- Table structure for table `klant`
--

CREATE TABLE `klant` (
  `order_id` int(11) NOT NULL,
  `dop` datetime NOT NULL DEFAULT current_timestamp(),
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `zipcode` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `klant`
--

INSERT INTO `klant` (`order_id`, `dop`, `name`, `email`, `address`, `zipcode`, `city`) VALUES
(171, '2022-01-15 22:17:15', 'Badr Khaie', 'Badrkhaie@hotmail.com', 'Drapeniersgaarde 35', '2542 VK', 'Den Haag'),
(172, '2022-01-15 22:17:15', 'Badr Khaie', 'Badrkhaie@hotmail.com', 'Drapeniersgaarde 35', '2542 VK', 'Den Haag'),
(173, '2022-01-15 22:18:11', 'Badr Khaie', 'Badrkhaie@hotmail.com', 'Drapeniersgaarde 35', '2542 VK', 'Den Haag'),
(174, '2022-01-15 22:18:11', 'Badr Khaie', 'Badrkhaie@hotmail.com', 'Drapeniersgaarde 35', '2542 VK', 'Den Haag'),
(175, '2022-01-15 22:52:14', 'Badr Khaie', 'Badrkhaie@hotmail.com', 'Drapeniersgaarde 35', '2542 VK', 'Den Haag'),
(176, '2022-01-15 22:52:14', 'Badr Khaie', 'Badrkhaie@hotmail.com', 'Drapeniersgaarde 35', '2542 VK', 'Den Haag'),
(177, '2022-01-15 22:52:37', 'Badr Khaie', 'Badrkhaie@hotmail.com', 'Drapeniersgaarde 35', '2542 VK', 'Den Haag'),
(178, '2022-01-15 22:52:37', 'Badr Khaie', 'Badrkhaie@hotmail.com', 'Drapeniersgaarde 35', '2542 VK', 'Den Haag');

-- --------------------------------------------------------

--
-- Table structure for table `sushi`
--

CREATE TABLE `sushi` (
  `id` int(255) NOT NULL,
  `name` varchar(20) NOT NULL,
  `price` int(255) NOT NULL,
  `amount` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sushi`
--

INSERT INTO `sushi` (`id`, `name`, `price`, `amount`) VALUES
(1, 'Sushi', 0, 200),
(2, 'Sushi2', 3, 200),
(3, 'Sushi3', 4, 200);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `klant`
--
ALTER TABLE `klant`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `dop` (`dop`);

--
-- Indexes for table `sushi`
--
ALTER TABLE `sushi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `klant`
--
ALTER TABLE `klant`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=179;

--
-- AUTO_INCREMENT for table `sushi`
--
ALTER TABLE `sushi`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
