-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2022 at 03:22 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `orders`
--

-- --------------------------------------------------------

--
-- Table structure for table `salesrecord`
--

CREATE TABLE `salesrecord` (
  `sales-id` int(255) NOT NULL,
  `order-code` int(255) NOT NULL,
  `order-name` varchar(255) NOT NULL,
  `employee-incharge` varchar(255) NOT NULL,
  `total-number` int(255) NOT NULL,
  `mode-of-payment` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `DI-or-TO` varchar(255) NOT NULL,
  `discount` int(255) NOT NULL,
  `total-amount` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `salesrecord`
--

INSERT INTO `salesrecord` (`sales-id`, `order-code`, `order-name`, `employee-incharge`, `total-number`, `mode-of-payment`, `time`, `DI-or-TO`, `discount`, `total-amount`) VALUES
(1, 0, 'Banana Mocha Brownie', '', 1, '05:35:44PM', '', '', 0, '430.00'),
(3, 0, 'Banana Mocha Brownie', '', 3, '', '05:45:39PM', '', 0, '590.00'),
(4, 0, 'Blue Ocean Yogurt Over Ice ', '', 1, 'Cash', '05:46:03PM', 'Dine-In', 0, '115.00'),
(5, 2, 'Blue Ocean Yogurt Over Ice ', '', 3, 'GCash', '05:46:30PM', 'Take-Out', 0, '345.00'),
(6, 2022, 'Blue Ocean Yogurt Over Ice ', '', 2, 'Cash', '05:51:29PM', 'Dine-In', 0, '230.00'),
(7, 789, 'Butterscotch Crunch', '', 1, 'GCash', '05:53:02PM', 'Take-Out', 20, '420.00'),
(8, 123, 'Butterscotch Crunch', '', 1, 'Cash', '06:00:10PM', 'Dine-In', 20, '420.00'),
(9, 2136681, 'Choco Matcha Cubano Frappe', '', 1, 'GCash', '06:52:57PM', 'Take-Out', 20, '315.00'),
(10, 123123, 'Iced Latte', '', 1, 'GCash', '07:38:55PM', 'Dine-In', 20, '390.00'),
(11, 0, '', '', 0, '', '08:04:37PM', '', 0, '0.00'),
(12, 890, 'Mango Peach Yogurt Smoothie', '', 2, 'GCash', '08:09:57PM', 'Dine-In', 20, '630.00'),
(13, 12324, 'Iced Americano Breve', '', 1, 'GCash', '09:13:44PM', 'Dine-In', 20, '195.00'),
(14, 1, 'Iced Americano Breve', '', 1, 'GCash', '10:03:31PM', 'Dine-In', 0, '385.00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_orders`
--

CREATE TABLE `tb_orders` (
  `id` int(255) NOT NULL,
  `product-id` int(255) NOT NULL,
  `order-name` varchar(255) NOT NULL,
  `order-price` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_orders`
--

INSERT INTO `tb_orders` (`id`, `product-id`, `order-name`, `order-price`) VALUES
(375, 3, 'Bana Berry Yogurt Smoothie', '155.00'),
(376, 11, 'Cookies and Cream Frappe', '140.00'),
(377, 15, 'Iced Americano Breve', '90.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `salesrecord`
--
ALTER TABLE `salesrecord`
  ADD PRIMARY KEY (`sales-id`);

--
-- Indexes for table `tb_orders`
--
ALTER TABLE `tb_orders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `salesrecord`
--
ALTER TABLE `salesrecord`
  MODIFY `sales-id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_orders`
--
ALTER TABLE `tb_orders`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=378;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
