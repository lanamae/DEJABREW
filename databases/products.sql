-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2022 at 09:04 AM
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
-- Database: `products`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_product`
--

CREATE TABLE `tb_product` (
  `id` int(255) NOT NULL,
  `productImage` varchar(255) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `Price` varchar(255) NOT NULL,
  `Category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_product`
--

INSERT INTO `tb_product` (`id`, `productImage`, `productName`, `Price`, `Category`) VALUES
(18, 'Bana Berry Yogurt Smoothie.png', 'Banana Berry Yogurt Smoothie', '90', 'Iced Coffee'),
(19, 'Almond Tea Latte.png', 'Almond Tea Latte', '80', 'Iced Coffee'),
(20, 'img7.jpg', 'agdshgda', '233', 'coffee '),
(21, 'html5-logo-png-transparent-5.png', 'Sample Product Name 4 ', '899', 'fruits '),
(22, '1590430652red-youtube-logo-png-xl.png', 'Sample Product Name ', '89', 'Non-Coffee ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_product`
--
ALTER TABLE `tb_product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
