-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2022 at 04:55 AM
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
-- Database: `accounts`
--

-- --------------------------------------------------------

--
-- Table structure for table `useraccounts`
--

CREATE TABLE `useraccounts` (
  `id` int(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `useraccounts`
--

INSERT INTO `useraccounts` (`id`, `position`, `username`, `email`, `password`) VALUES
(20, 'admin', 'lanamaegalvez', 'lanamaegalvez015@gmail.com', '202cb962ac59075b964b07152d234b70'),
(21, 'admin', 'lanamaegalvez', 'lanamaegalvez015@gmail.com', 'c9544665ff6aa00bc0587502dcbbbe1b'),
(22, 'admin', 'uwu', 'lanamaegalvez15@gmail.com', '7815696ecbf1c96e6894b779456d330e'),
(23, 'employee', 'dejabrew', 'dejabrew@gmail.com', '912ec803b2ce49e4a541068d495ab570'),
(24, 'admin', 'lanamaegalvez', 'lanamaegalvez015@gmail.com', '68053af2923e00204c3ca7c6a3150cf7'),
(25, 'admin', 'deja', 'dejabre@yahoo.com', 'a41609a72ebd1b3eeb561be0da79a2ec'),
(26, 'admin', 'lanlan', 'lanamaegalvez015@gmail.com', '76d80224611fc919a5d54f0ff9fba446'),
(27, 'employee', 'dejadeja', 'dejabre@yahoo.com', '9fbfb220e03aa76d424088e43314b0d0'),
(28, 'admin', 'helloworld', 'lan.galvez.wu@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(29, 'admin', 'marites', 'marites@yahoo.com', '187b1b3750f84b18a05d9ac1e60a528c'),
(30, 'admin', 'lanamae', 'lanamaegalvez15@gmail.com', '76d80224611fc919a5d54f0ff9fba446'),
(31, 'admin', 'pearl', 'pearl@gmail.com', '024d7f84fff11dd7e8d9c510137a2381'),
(32, 'admin', 'galvez', 'galvez@gmail.com', '202cb962ac59075b964b07152d234b70'),
(33, 'admin', 'alyfajardo', 'aly@gmail.com', '174a3f4fa44c7bb22b3b6429cb4ea44c'),
(34, 'admin', 'lan', 'lan@gmail.com', '024d7f84fff11dd7e8d9c510137a2381'),
(35, 'admin', 'lan', 'lan@gmail.com', '024d7f84fff11dd7e8d9c510137a2381'),
(36, 'employee', 'lany', 'lany@gmail.com', '7815696ecbf1c96e6894b779456d330e'),
(37, 'employee', 'ai', 'ai@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(38, 'employee', 'deja', 'dejabre@yahoo.com', '3457d435b3d97c73db255cb0779698c5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `useraccounts`
--
ALTER TABLE `useraccounts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `useraccounts`
--
ALTER TABLE `useraccounts`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
