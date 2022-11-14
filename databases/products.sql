-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2022 at 01:44 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

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
  `image` varchar(255) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `Price` decimal(7,2) NOT NULL,
  `Category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_product`
--

INSERT INTO `tb_product` (`id`, `image`, `productName`, `Price`, `Category`) VALUES
(1, '', 'Sample Product Name', '80.00', 'Iced Coffee'),
(2, '', 'Product Name', '80.00', 'Sample Category'),
(3, '', 'Sample Product Name', '80.00', 'Iced Coffee'),
(4, '', 'Sample Product Name', '80.00', 'Iced Coffee'),
(5, '636ccf8760c97.', 'Sample Product Name', '80.00', 'Iced Coffee'),
(6, '636ccf8c68b45.', 'Product Name', '80.00', 'Sample Category'),
(7, '636ccfa88058c.png', 'Sample Product Name', '80.00', 'Iced Coffee'),
(8, '636ccfba0f254.png', 'Sample Product Name', '80.00', 'Iced Coffee'),
(9, '636cd04f0cc98.png', 'Sample Product Name', '80.00', 'Iced Coffee'),
(10, '636cd05a5073d.png', 'Sample Product Name', '80.00', 'Iced Coffee'),
(11, '636cd0648d3c4.png', 'Sample Product Name', '80.00', 'Iced Coffee'),
(12, '636cd072a0f0a.png', 'Sample Product Name', '80.00', 'Iced Coffee'),
(13, '636d09d5053ac.png', 'Sample Product Name 2', '99.99', 'Iced Coffee'),
(14, '636d0a5b63ede.png', 'Sample Product Name 3', '150.00', 'Iced Coffee'),
(15, '636d0a7794c6a.png', 'Sample Product Name', '100.00', 'Iced Coffee'),
(16, '636d0b774c3bb.png', 'Product Name', '80.00', 'Sample Category'),
(17, '636dd3e0a2006.png', 'Banana', '140.00', 'Iced Coffee'),
(18, '', 'Iced Coffee', '90.00', 'Iced Coffee'),
(19, '', 'Almond Tea Latte', '80.00', 'Sample Category'),
(20, '', 'Bana Berry Yogurt Smoothie', '110.00', 'Sample Category'),
(21, '', 'Bana Berry Yogurt Smoothie', '67.00', 'coffee');

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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
