-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2022 at 05:01 AM
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
-- Table structure for table `addons`
--

CREATE TABLE `addons` (
  `id` int(11) NOT NULL,
  `add-ons-name` varchar(255) NOT NULL,
  `price` decimal(4,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addons`
--

INSERT INTO `addons` (`id`, `add-ons-name`, `price`) VALUES
(1, 'Torani Syrup', '10.00'),
(2, 'Fruit Jelly', '10.00'),
(4, 'Coffee Jelly', '10.00'),
(5, 'Pearls', '15.00'),
(6, 'Torani Sauce', '20.00'),
(7, 'Whipped Cream', '20.00'),
(8, 'Breve Milk', '20.00'),
(9, 'Espresso Shot', '20.00'),
(10, 'Strawberry Pure', '25.00'),
(11, 'Ice Cream Float', '25.00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_product`
--

CREATE TABLE `tb_product` (
  `id` int(255) NOT NULL,
  `productImage` varchar(255) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `Price` decimal(5,2) NOT NULL,
  `Category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_product`
--

INSERT INTO `tb_product` (`id`, `productImage`, `productName`, `Price`, `Category`) VALUES
(1, 'Almond Coffee Cheesecake Streusel.png', 'Almond Coffee Cheesecake Streusel', '150.00', 'gourmet series'),
(2, 'Almond Tea Latte.png', 'Almond Tea Latte', '130.00', 'tea latte series'),
(3, 'Bana Berry Yogurt Smoothie.png', 'Bana Berry Yogurt Smoothie', '155.00', 'fruit splash yogurt smoothies'),
(4, 'Banana Mocha Brownie.png', 'Banana Mocha Brownie', '150.00', 'gourmet series'),
(5, 'Blue Ocean Yogurt Over Ice.png', 'Blue Ocean Yogurt Over Ice ', '115.00', 'yogurt'),
(6, 'Blueberries Cream.png', 'Blueberries Cream', '140.00', 'barista choice'),
(7, 'Butter Pecan Frappuccino.png', 'Butter Pecan Frappuccino', '150.00', 'gourmet series'),
(8, 'Butterscotch Crunch.png', 'Butterscotch Crunch', '140.00', 'barista choice'),
(9, 'Choco Matcha Cubano Frappe.png', 'Choco Matcha Cubano Frappe', '160.00', 'frappucino'),
(10, 'Choco Mixed Berry Yogurt Smoothie.png', 'Choco Mixed Berry Yogurt Smoothie', '155.00', 'fruit splash yogurt smoothies'),
(11, 'Cookies and Cream Frappe.png', 'Cookies and Cream Frappe', '140.00', 'frappucino'),
(12, 'Double Chocolate.png', 'Double Chocolate', '140.00', 'barista choice'),
(13, 'European Hot Chocolate.png', 'European Hot Chocolate ', '120.00', 'coffee '),
(14, 'Hazelnut Cheesecake Affogato.png', 'Hazelnut Cheesecake Affogato', '150.00', 'gourmet series'),
(15, 'Iced Americano Breve.png', 'Iced Americano Breve', '90.00', 'coffee'),
(16, 'Iced Caramel Macchiato.png', 'Iced Caramel Macchiato', '105.00', 'coffee'),
(17, 'Iced Coffee Float.png', 'Iced Coffee Float', '115.00', 'float series'),
(18, 'Iced Latte.png', 'Iced Latte', '95.00', 'coffee'),
(19, 'Java Chip Frappe.png', 'Java Chip Frappe', '140.00', 'frappucino'),
(20, 'Mango Peach Yogurt Smoothie.png', 'Mango Peach Yogurt Smoothie', '155.00', 'fruit splash yogurt smoothies'),
(21, 'Matcha Frappe.png', 'Matcha Frappe', '150.00', 'frappucino'),
(22, 'Milo Volcano.png', 'Milo Volcano', '120.00', 'non-coffee'),
(23, 'Mocha Hazelnut.png', 'Mocha Hazelnut', '125.00', 'cheese macchiato series'),
(24, 'Passion Fruit Tea.png', 'Passion Fruit Tea', '100.00', 'fruit tea series'),
(25, 'Pink Cupcake.png', 'Pink Cupcake', '140.00', 'barista choice'),
(26, 'Praline Tea Latte.png', 'Praline Tea Latte', '130.00', 'tea latte series'),
(27, 'Roasted Almond Mocha Popcorn.png', 'Roasted Almond Mocha Popcorn', '150.00', 'gourmet series'),
(28, 'Salted Caramel Almond Cheese Macchiato.png', 'Salted Caramel Almond Cheese Macchiato', '125.00', 'cheese macchiato series'),
(29, 'Salted Caramel Banana Chips.png', 'Salted Caramel Banana Chips', '150.00', 'gourmet series'),
(30, 'Shortrbread Tea Latte.png', 'Shortrbread Tea Latte', '130.00', 'tea latte series'),
(31, 'Spanish Macchiato.png', 'Spanish Macchiato', '125.00', 'coffee'),
(32, 'Strawberry Yogurt Smoothie.png', 'Strawberry Yogurt Smoothie', '155.00', 'fruit splash yogurt smoothies'),
(33, 'White Macadamia.png', 'White Macadamia', '125.00', 'cheese macchiato series');

-- --------------------------------------------------------

--
-- Table structure for table `vouchers`
--

CREATE TABLE `vouchers` (
  `id` int(255) NOT NULL,
  `voucher_name` varchar(255) NOT NULL,
  `voucher_percentage` int(255) NOT NULL,
  `voucher_price` decimal(15,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vouchers`
--

INSERT INTO `vouchers` (`id`, `voucher_name`, `voucher_percentage`, `voucher_price`) VALUES
(28, 'Senior Citizen Discount', 20, '0.00'),
(29, 'Person With Disorder', 20, '0.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addons`
--
ALTER TABLE `addons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_product`
--
ALTER TABLE `tb_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vouchers`
--
ALTER TABLE `vouchers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addons`
--
ALTER TABLE `addons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `vouchers`
--
ALTER TABLE `vouchers`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
