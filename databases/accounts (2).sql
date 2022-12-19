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
(42, 'admin', 'lanamaegalvez', 'Dec-07-2022', '03:47:43PM', 'Dec-07-2022', '04:18:55PM'),
(43, 'admin', 'lanamaegalvez', 'Dec-07-2022', '04:02:57PM', 'Dec-07-2022', '04:35:30PM'),
(44, 'employee', 'dejabrew', 'Dec-07-2022', '04:18:56PM', 'Dec-07-2022', '04:19:14PM'),
(45, 'admin', 'lanamaegalvez', 'Dec-07-2022', '04:36:09PM', 'Dec-08-2022', '12:05:33AM'),
(46, 'admin', 'lanamaegalvez', 'Dec-08-2022', '12:06:03AM', 'Dec-08-2022', '02:58:01AM'),
(47, 'admin', 'lanamaegalvez', 'Dec-08-2022', '07:40:53AM', 'Dec-08-2022', '09:38:46AM'),
(48, 'admin', 'lanamaegalvez', 'Dec-08-2022', '09:00:57AM', 'Dec-08-2022', '10:10:25AM'),
(49, 'admin', 'lanamaegalvez', 'Dec-08-2022', '09:38:47AM', 'Dec-08-2022', '10:21:17AM'),
(50, 'employee', 'dejabrew', 'Dec-08-2022', '10:11:44AM', 'Dec-08-2022', '10:12:34AM'),
(51, 'admin', 'lanamaegalvez', 'Dec-08-2022', '10:12:35AM', 'still logged in', 'still logged in'),
(52, 'admin', 'lanamaegalvez', 'Dec-08-2022', '10:21:38AM', 'Dec-08-2022', '10:22:24AM'),
(53, 'admin', 'lanamaegalvez', 'Dec-08-2022', '10:26:05AM', 'Dec-08-2022', '10:13:11PM'),
(54, 'employee', 'papasaAko', 'Dec-08-2022', '10:22:56PM', 'Dec-08-2022', '10:38:12PM'),
(55, 'admin', 'lanamaegalvez', 'Dec-08-2022', '10:38:14PM', 'Dec-11-2022', '10:37:52PM'),
(56, 'admin', 'lanamaegalvez', 'Dec-08-2022', '10:42:54PM', 'Dec-09-2022', '09:42:28AM'),
(57, 'admin', 'lanamaegalvez', 'Dec-09-2022', '09:42:29AM', 'still logged in', 'still logged in'),
(58, 'admin', 'lanamaegalvez', 'Dec-11-2022', '10:39:12PM', 'Dec-11-2022', '10:47:15PM'),
(59, 'employee', 'dejabrew', 'Dec-11-2022', '10:47:27PM', 'Dec-11-2022', '10:48:29PM'),
(60, 'employee', 'dejabrew', 'Dec-12-2022', '07:27:49AM', 'Dec-12-2022', '07:37:48AM'),
(61, 'admin', 'lanamaegalvez', 'Dec-12-2022', '07:29:25AM', 'Dec-12-2022', '07:40:28AM'),
(62, 'employee', 'dejabrew', 'Dec-12-2022', '07:37:58AM', 'Dec-12-2022', '07:39:08AM'),
(63, 'employee', 'dejabrew', 'Dec-12-2022', '07:39:30AM', 'Dec-12-2022', '07:46:49AM'),
(64, 'admin', 'lanamaegalvez', 'Dec-12-2022', '07:40:29AM', 'still logged in', 'still logged in'),
(65, 'admin', 'lanamaegalvez', 'Dec-12-2022', '07:46:51AM', 'Dec-12-2022', '01:03:36PM'),
(66, 'admin', 'lanamaegalvez', 'Dec-12-2022', '01:05:42PM', 'Dec-12-2022', '01:20:05PM'),
(67, 'admin', 'lanamaegalvez', 'Dec-12-2022', '01:21:16PM', 'Dec-12-2022', '01:22:57PM'),
(68, 'employee', 'dejabrew', 'Dec-12-2022', '01:23:05PM', 'Dec-12-2022', '01:23:30PM'),
(69, 'admin', 'lanamaegalvez', 'Dec-12-2022', '01:23:31PM', 'Dec-12-2022', '01:25:28PM'),
(70, 'admin', 'lanamaegalvez', 'Dec-12-2022', '01:47:18PM', 'Dec-13-2022', '10:38:49AM'),
(71, 'admin', 'lanamaegalvez', 'Dec-14-2022', '01:48:10PM', 'Dec-14-2022', '02:55:37PM'),
(72, 'admin', 'lanamaegalvez', 'Dec-14-2022', '02:15:21PM', 'still logged in', 'still logged in'),
(73, 'admin', 'lanamaegalvez', 'Dec-14-2022', '02:56:18PM', 'Dec-17-2022', '08:50:17PM'),
(74, 'employee', 'dejabrew', 'Dec-15-2022', '07:43:53AM', 'Dec-15-2022', '07:44:30AM'),
(75, 'admin', 'lanamaegalvez', 'Dec-17-2022', '06:35:15PM', 'Dec-17-2022', '08:02:34PM'),
(76, 'admin', 'lanamaepantanillagalvez', 'Dec-17-2022', '08:02:41PM', 'Dec-17-2022', '08:03:32PM'),
(77, 'admin', 'lanamaegalvez', 'Dec-17-2022', '08:31:05PM', 'Dec-17-2022', '08:31:27PM'),
(78, 'admin', 'lanamaegalvez', 'Dec-17-2022', '08:31:57PM', 'still logged in', 'still logged in'),
(79, 'admin', 'lanamaegalvez02', 'Dec-17-2022', '08:34:02PM', 'still logged in', 'still logged in'),
(80, 'admin', 'lanamaegalvez', 'Dec-17-2022', '08:34:56PM', 'still logged in', 'still logged in'),
(81, 'admin', 'lanamaegalvez', 'Dec-17-2022', '08:35:12PM', 'Dec-17-2022', '08:35:47PM'),
(82, 'admin', 'lanamaegalvez', 'Dec-17-2022', '08:35:56PM', 'still logged in', 'still logged in'),
(83, 'admin', 'lanamaegalvez', 'Dec-17-2022', '08:36:24PM', 'Dec-17-2022', '08:39:48PM'),
(84, 'admin', 'lanamaegalvez123', 'Dec-17-2022', '08:43:05PM', 'still logged in', 'still logged in'),
(85, 'admin', 'lanamaegalvez123', 'Dec-17-2022', '08:43:36PM', 'still logged in', 'still logged in'),
(86, 'admin', 'lanamaegalvez123', 'Dec-17-2022', '08:43:55PM', 'Dec-17-2022', '08:45:18PM'),
(87, 'admin', 'alyfajardo', 'Dec-17-2022', '08:48:16PM', 'still logged in', 'still logged in'),
(88, 'admin', 'alyfajardo', 'Dec-17-2022', '08:48:52PM', 'still logged in', 'still logged in'),
(89, 'admin', 'lanamaegalvez123', 'Dec-17-2022', '08:50:02PM', 'still logged in', 'still logged in'),
(90, 'admin', 'lanamaegalvez123', 'Dec-17-2022', '08:50:19PM', 'Dec-18-2022', '07:21:00PM'),
(91, 'employee', 'dejabrew', 'Dec-18-2022', '07:21:41PM', 'Dec-18-2022', '08:14:21PM'),
(92, 'employee', 'dejabrew', 'Dec-18-2022', '07:28:32PM', 'Dec-18-2022', '07:39:53PM'),
(93, 'employee', 'dejabrew', 'Dec-18-2022', '07:39:55PM', 'still logged in', 'still logged in'),
(94, 'admin', 'lanamaegalvez123', 'Dec-18-2022', '08:14:41PM', 'Dec-19-2022', '10:48:21AM'),
(95, 'admin', 'lanamaegalvez123', 'Dec-19-2022', '10:04:06AM', 'Dec-19-2022', '10:05:43AM'),
(96, 'employee', 'dejabrew', 'Dec-19-2022', '10:05:45AM', 'Dec-19-2022', '10:17:18AM'),
(97, 'admin', 'lanamaegalvez123', 'Dec-19-2022', '10:17:19AM', 'Dec-19-2022', '10:18:12AM'),
(98, 'employee', 'dejabrew', 'Dec-19-2022', '10:18:14AM', 'still logged in', 'still logged in'),
(99, 'employee', 'dejabrew', 'Dec-19-2022', '10:19:15AM', 'still logged in', 'still logged in'),
(100, 'employee', 'dejabrew', 'Dec-19-2022', '10:48:23AM', 'still logged in', 'still logged in');

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
(9, 'employee', 'dejabrew', 'dejabrew@yhaoo.com', 'dejabrew'),
(10, 'admin', 'lanamaegalvez123', 'lanamaegalvez015@gmail.com', '123456'),
(11, 'employee', 'alyfajardo', 'ai@gmail.com', '456');

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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `useraccounts`
--
ALTER TABLE `useraccounts`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
