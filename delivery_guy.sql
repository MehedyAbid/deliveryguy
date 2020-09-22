-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2020 at 02:11 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `delivery_guy`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderId` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `pickup` varchar(255) DEFAULT NULL,
  `receiverName` varchar(255) DEFAULT NULL,
  `receiver` varchar(255) DEFAULT NULL,
  `delivery` varchar(255) DEFAULT NULL,
  `created_ad` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderId`, `id`, `email`, `pickup`, `receiverName`, `receiver`, `delivery`, `created_ad`) VALUES
(1, 6, 'shakil@gmail.com', 'Khilgaon', 'abid', '01521428937', 'Dakhingaon', '2020-09-18 06:09:41'),
(2, 6, 'shakil@gmail.com', 'Bnasree', 'tanvir', '541548', 'kaola', '2020-09-19 08:09:41'),
(3, 5, 'masud@gmail.com', 'dhanmondi', 'roton', '01445645444', 'Mugda', '2020-09-19 08:09:41'),
(4, 5, 'masud@gmail.com', 'gendaria', 'taki', '541548', 'taltola', '2020-09-19 08:30:34'),
(5, 5, 'masud@gmail.com', 'nayapaltan', 'onu', '2465466', 'uttara', '2020-09-19 08:33:55'),
(6, 7, 'adit@gmail.com', 'Khilgaon', 'abid', '01521428937', 'Dakhingaon', '2020-09-19 13:36:09'),
(7, 7, 'adit@gmail.com', 'nayapaltan', 'tanvir', '01521428937', 'Mugda', '2020-09-19 13:36:34'),
(8, 12, 'kisu@gmail.com', '12324', 'sdhgs', 'shrhe', 'rhqasdjtdj', '2020-09-20 06:25:53'),
(9, 12, 'kisu@gmail.com', 'rhsajstjat', 'dtjdyttydtdjk', 'dtadkqytkwyd', 'dtjkkyfkyrwkr', '2020-09-20 06:28:13'),
(10, 13, 'shakilll@gmail.com', 'Khilgaon', 'taki', '2465466', 'kaola', '2020-09-20 10:07:52'),
(11, 13, 'shakilll@gmail.com', 'nayapaltan', 'abid', '2465466', 'uttara', '2020-09-20 10:08:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(2, 'abid', 'abid@gmail.com', '76bdae49b71de482c720ca1e0f713acc'),
(3, 'taki', 't@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(4, 'AbidMehedy', 't@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(5, 'Abid', 'masud@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(6, 'shkil', 'shakil@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(7, 'adit', 'adit@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(8, 'onu', 'onu@gmail.com', '6c14da109e294d1e8155be8aa4b1ce8e'),
(9, 'abid', 't@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(10, 'g', 'g@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(11, 'h', 'h@g.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(12, 'kisu', 'kisu@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(13, 'shakil', 'shakilll@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderId`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
