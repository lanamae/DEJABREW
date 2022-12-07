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
-- Database: `accounts`
--

-- --------------------------------------------------------

--
-- Table structure for table `log_details`
--

CREATE TABLE `log_details` (
  `id` int(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `date_login` varchar(255) NOT NULL,
  `login_time` varchar(255) NOT NULL,
  `date_logout` varchar(255) NOT NULL,
  `logout_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log_details`
--

INSERT INTO `log_details` (`id`, `position`, `username`, `date_login`, `login_time`, `date_logout`, `logout_time`) VALUES
(1, 'admin', 'lanamaegalvez', 'Dec-02-2022', '11:14:54PM', 'Dec-02-2022', '11:15:19PM'),
(2, 'admin', 'lanamaegalvez', 'Dec-02-2022', '11:15:49PM', 'Dec-02-2022', '11:16:09PM'),
(3, 'admin', 'lanamaegalvez', 'Dec-02-2022', '11:19:49PM', 'Dec-02-2022', '11:28:33PM'),
(4, 'admin', 'lanamaegalvez', 'Dec-02-2022', '11:28:49PM', 'Dec-03-2022', '12:00:21AM'),
(5, 'employee', 'dejabrew', 'Dec-03-2022', '12:00:10AM', '0', ''),
(6, 'admin', 'lanamaegalvez', 'Dec-05-2022', '06:31:10AM', 'Dec-05-2022', '06:34:58AM'),
(7, 'admin', 'lanamaegalvez', 'Dec-05-2022', '06:35:36AM', '0', '0'),
(8, 'admin', 'lanamaegalvez', 'Dec-05-2022', '06:43:39AM', 'Dec-05-2022', '06:43:46AM'),
(9, 'admin', 'lanamaegalvez', 'Dec-05-2022', '06:44:10AM', '0', '0'),
(10, 'admin', 'lanamaegalvez', 'Dec-05-2022', '06:44:33AM', 'Dec-05-2022', '06:44:41AM'),
(11, 'admin', 'lanamaegalvez', 'Dec-05-2022', '06:46:13AM', '0', '0'),
(12, 'admin', 'lanamaegalvez', 'Dec-05-2022', '06:49:10AM', 'Dec-05-2022', '06:51:30AM'),
(13, 'admin', 'lanamaegalvez', 'Dec-05-2022', '06:51:53AM', 'Dec-05-2022', '06:55:09AM'),
(14, 'admin', 'lanamaegalvez', 'Dec-05-2022', '06:58:17AM', 'Dec-05-2022', '06:59:57AM'),
(15, 'admin', 'lanamaegalvez', 'Dec-05-2022', '07:03:20AM', 'Dec-05-2022', '07:03:33AM'),
(16, 'admin', 'lanamaegalvez', 'Dec-05-2022', '07:03:56AM', 'Dec-05-2022', '07:05:07AM'),
(17, 'admin', 'lanamaegalvez', 'Dec-05-2022', '07:06:24AM', 'Dec-05-2022', '07:09:37AM'),
(18, 'employee', 'dejabrew', 'Dec-05-2022', '07:08:32AM', 'still logged in', ''),
(19, 'employee', 'dejabrew', 'Dec-05-2022', '07:10:19AM', 'still logged in', ''),
(20, 'employee', 'dejabrew', 'Dec-05-2022', '07:13:11AM', 'still logged in', 'still logged in'),
(21, 'employee', 'dejabrew', 'Dec-05-2022', '07:15:36AM', 'still logged in', 'still logged in'),
(22, 'employee', 'dejabrew', 'Dec-05-2022', '07:22:43AM', 'still logged in', 'still logged in'),
(23, 'employee', 'dejabrew', 'Dec-05-2022', '07:26:02AM', 'still logged in', 'still logged in'),
(24, 'admin', 'lanamaegalvez', 'Dec-05-2022', '07:31:43AM', 'Dec-05-2022', '07:33:52AM'),
(25, 'employee', 'dejabrew', 'Dec-05-2022', '07:33:54AM', 'Dec-05-2022', '07:34:06AM'),
(26, 'admin', 'lanamaegalvez', 'Dec-05-2022', '07:35:15AM', 'still logged in', 'still logged in'),
(27, 'employee', 'dejabrew', 'Dec-05-2022', '07:45:08AM', 'Dec-05-2022', '07:45:22AM'),
(28, 'employee', 'dejabrew', 'Dec-05-2022', '07:45:48AM', 'Dec-05-2022', '09:20:47AM'),
(29, 'admin', 'lanamaegalvez', 'Dec-05-2022', '09:20:52AM', 'Dec-05-2022', '09:36:30AM'),
(30, 'admin', 'lanamaegalvez', 'Dec-05-2022', '09:36:33AM', 'Dec-05-2022', '04:27:05PM'),
(31, 'admin', 'lanamaegalvez', 'Dec-05-2022', '04:30:20PM', 'Dec-05-2022', '04:31:18PM'),
(32, 'admin', 'lanamaegalvez', 'Dec-05-2022', '04:36:54PM', 'Dec-05-2022', '11:45:44PM'),
(33, 'admin', 'lanamaegalvez', 'Dec-05-2022', '05:38:05PM', 'Dec-05-2022', '11:44:44PM'),
(34, 'admin', 'lanamaegalvez', 'Dec-06-2022', '01:52:45PM', 'Dec-06-2022', '07:19:38PM'),
(35, 'admin', 'lanamaegalvez', 'Dec-06-2022', '07:22:56PM', 'Dec-06-2022', '07:23:17PM'),
(36, 'admin', 'lanamaegalvez', 'Dec-07-2022', '02:14:45PM', 'Dec-07-2022', '02:17:17PM'),
(37, 'admin', 'lanamaegalvez', 'Dec-07-2022', '02:26:31PM', 'Dec-07-2022', '03:12:06PM'),
(38, 'admin', 'lanamaegalvez', 'Dec-07-2022', '02:32:50PM', 'still logged in', 'still logged in'),
(39, 'admin', 'lanamaegalvez', 'Dec-07-2022', '03:12:14PM', 'still logged in', 'still logged in'),
(40, 'admin', 'lanamaegalvez', 'Dec-07-2022', '03:27:12PM', 'still logged in', 'still logged in'),
(41, 'admin', 'lanamaegalvez', 'Dec-07-2022', '03:28:28PM', 'Dec-07-2022', '03:47:41PM'),
(42, 'admin', 'lanamaegalvez', 'Dec-07-2022', '03:47:43PM', 'still logged in', 'still logged in'),
(43, 'admin', 'lanamaegalvez', 'Dec-07-2022', '04:02:57PM', 'still logged in', 'still logged in');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `useraccounts`
--

INSERT INTO `useraccounts` (`id`, `position`, `username`, `email`, `password`) VALUES
(1, 'admin', 'lanamaegalvez', 'lanamaegalvez015@gmail.com', '202cb962ac59075b964b07152d234b70'),
(2, 'employee', 'dejabrew', 'dejabrew@gmail.com', '7815696ecbf1c96e6894b779456d330e'),
(3, 'admin', 'lana', 'lanamaegalvez015@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(4, 'employee', 'deja', 'dejabre@yahoo.com', '912ec803b2ce49e4a541068d495ab570');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `log_details`
--
ALTER TABLE `log_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `useraccounts`
--
ALTER TABLE `useraccounts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `log_details`
--
ALTER TABLE `log_details`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `useraccounts`
--
ALTER TABLE `useraccounts`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
