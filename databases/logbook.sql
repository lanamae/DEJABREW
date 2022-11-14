-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2022 at 04:51 AM
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
-- Database: `logbook`
--

-- --------------------------------------------------------

--
-- Table structure for table `log_details`
--

CREATE TABLE `log_details` (
  `id` int(11) NOT NULL,
  `position` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `date_login` varchar(255) NOT NULL,
  `login_time` varchar(255) NOT NULL,
  `date_logout` varchar(255) DEFAULT NULL,
  `logout_time` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `log_details`
--

INSERT INTO `log_details` (`id`, `position`, `username`, `date_login`, `login_time`, `date_logout`, `logout_time`) VALUES
(1, 'admin', 'lanamaegalvez', 'Oct-26-2022', '02:49:37PM', '', ''),
(2, 'admin', 'lanamaegalvez', 'Oct-26-2022', '02:56:59PM', '', NULL),
(3, 'admin', 'lanamaegalvez', '', '03:09:01PM', '', NULL),
(4, 'admin', 'lanamaegalvez', '', '03:09:13PM', '', NULL),
(5, 'admin', 'lanamaegalvez', 'Oct-26-2022', '03:10:26PM', '', NULL),
(6, 'employee', 'dejabrew', '', '', '', NULL),
(7, 'employee', 'dejabrew', 'Oct-26-2022', '03:12:28PM', '', NULL),
(8, 'admin', 'lanamaegalvez', 'Oct-26-2022', '03:14:57PM', '', NULL),
(9, 'admin', 'lanamaegalvez', '', '', '0', NULL),
(10, 'admin', 'lanamaegalvez', 'Oct-26-2022', '03:42:44PM', '', NULL),
(11, 'admin', 'lanamaegalvez', 'Oct-26-2022', '03:49:16PM', '', NULL),
(12, 'admin', 'lanamaegalvez', 'Oct-26-2022', '03:50:10PM', '', NULL),
(13, 'admin', 'lanamaegalvez', 'Oct-26-2022', '03:52:53PM', '', NULL),
(14, 'admin', 'lanamaegalvez', 'Oct-26-2022', '03:54:06PM', '', NULL),
(15, 'admin', 'lanamae', 'Oct-26-2022', '03:55:24PM', '', NULL),
(16, 'admin', 'lanamaegalvez', 'Oct-27-2022', '02:54:56PM', '', NULL),
(17, 'admin', 'lanamaegalvez', 'Oct-27-2022', '03:05:57PM', '', NULL),
(18, 'admin', 'lanamaegalvez', 'Oct-27-2022', '03:09:34PM', '', NULL),
(19, 'admin', 'lanamaegalvez', 'Oct-27-2022', '03:12:26PM', '', NULL),
(20, 'admin', 'lanamaegalvez', 'Oct-27-2022', '03:13:38PM', '', NULL),
(21, 'admin', 'lanamaegalvez', 'Oct-27-2022', '03:14:09PM', '', NULL),
(22, 'admin', 'lanamaegalvez', 'Oct-27-2022', '03:18:33PM', '', NULL),
(23, 'admin', 'lanamaegalvez', 'Oct-27-2022', '03:48:53PM', '', NULL),
(24, 'admin', 'lanamaegalvez', 'Oct-27-2022', '03:50:58PM', '', NULL),
(25, 'admin', 'lanamaegalvez', 'Oct-27-2022', '03:51:27PM', '', NULL),
(26, 'admin', 'lanamaegalvez', 'Oct-27-2022', '03:53:07PM', '', NULL),
(27, 'admin', 'lanamaegalvez', 'Oct-27-2022', '03:54:23PM', '', NULL),
(28, 'admin', 'lanamae', 'Oct-27-2022', '03:58:24PM', '', NULL),
(29, 'admin', 'lanamaegalvez', 'Oct-27-2022', '04:27:22PM', '', NULL),
(30, 'admin', 'lanamaegalvez', 'Oct-27-2022', '04:40:38PM', '', NULL),
(31, 'admin', 'lanamaegalvez', 'Oct-27-2022', '04:41:15PM', '', NULL),
(32, 'admin', 'lanamaegalvez', 'Oct-27-2022', '04:47:01PM', '', NULL),
(33, 'admin', 'lanamae', 'Oct-27-2022', '04:49:02PM', '', NULL),
(34, 'admin', 'lanamaegalvez', 'Oct-27-2022', '04:53:15PM', '', NULL),
(35, 'admin', 'lanamaegalvez', 'Oct-27-2022', '04:53:52PM', '', NULL),
(36, 'admin', 'lanamaegalvez', 'Oct-27-2022', '07:47:36PM', '', NULL),
(37, 'admin', 'lanamaegalvez', 'Oct-27-2022', '08:03:59PM', '', NULL),
(38, 'admin', 'alyfajardo', 'Oct-27-2022', '08:24:36PM', NULL, NULL),
(39, 'admin', 'pearl', 'Oct-27-2022', '08:25:12PM', NULL, NULL),
(40, 'admin', 'lanamaegalvez', 'Oct-27-2022', '08:37:05PM', NULL, NULL),
(41, 'admin', 'lanamaegalvez', 'Oct-27-2022', '08:42:12PM', NULL, NULL),
(42, 'admin', 'lanamaegalvez', 'Oct-27-2022', '08:44:14PM', NULL, NULL),
(43, 'admin', 'alyfajardo', 'Oct-27-2022', '08:47:41PM', NULL, NULL),
(44, 'admin', 'alyfajardo', 'Oct-27-2022', '08:55:56PM', NULL, NULL),
(45, 'admin', 'lanamaegalvez', 'Oct-27-2022', '08:59:08PM', NULL, NULL),
(46, 'admin', 'lanamaegalvez', 'Oct-27-2022', '08:59:29PM', NULL, NULL),
(47, 'admin', 'lanamaegalvez', 'Oct-27-2022', '09:37:17PM', NULL, NULL),
(48, 'admin', 'alyfajardo', 'Oct-27-2022', '09:38:43PM', NULL, NULL),
(49, 'admin', 'lanamaegalvez', 'Oct-27-2022', '09:39:13PM', NULL, NULL),
(50, 'admin', 'lanamaegalvez', 'Oct-27-2022', '09:39:51PM', NULL, NULL),
(51, 'admin', 'lanamaegalvez', 'Oct-27-2022', '09:43:25PM', NULL, NULL),
(52, 'admin', 'lanamaegalvez', 'Oct-27-2022', '09:43:58PM', NULL, NULL),
(53, 'admin', 'lanamaegalvez', 'Oct-28-2022', '02:07:23PM', NULL, NULL),
(54, 'admin', 'lanamaegalvez', 'Oct-28-2022', '02:16:26PM', NULL, NULL),
(55, 'admin', 'lanamaegalvez', 'Oct-28-2022', '02:22:47PM', NULL, NULL),
(56, 'admin', 'lanamaegalvez', 'Oct-28-2022', '02:27:14PM', NULL, NULL),
(57, 'admin', 'lanamaegalvez', 'Oct-28-2022', '02:28:09PM', 'Oct-28-2022', ''),
(58, 'admin', 'alyfajardo', 'Oct-28-2022', '02:29:08PM', 'Oct-28-2022', '02:29:11PM'),
(59, 'admin', 'alyfajardo', 'Oct-28-2022', '02:34:27PM', 'Oct-28-2022', '02:34:41PM'),
(60, 'admin', 'lanamaegalvez', 'Oct-28-2022', '02:52:44PM', 'Oct-28-2022', '02:52:47PM'),
(61, 'admin', 'lanamaegalvez', 'Oct-28-2022', '03:12:12PM', 'Oct-28-2022', '03:12:14PM'),
(62, 'admin', 'alyfajardo', 'Oct-28-2022', '03:12:19PM', 'Oct-28-2022', '03:13:50PM'),
(63, 'admin', 'alyfajardo', 'Oct-28-2022', '03:24:34PM', 'Oct-28-2022', '03:24:50PM'),
(64, 'admin', 'alyfajardo', 'Oct-28-2022', '03:49:02PM', 'Oct-28-2022', '03:49:22PM'),
(65, 'admin', 'lanamaegalvez', 'Oct-28-2022', '04:10:23PM', 'Oct-28-2022', '04:12:53PM'),
(66, 'admin', 'lanamaegalvez', 'Oct-28-2022', '04:41:48PM', 'Oct-28-2022', '04:41:50PM'),
(67, 'admin', 'lanamaegalvez', 'Oct-28-2022', '05:21:41PM', 'Oct-30-2022', '05:58:59PM'),
(68, 'admin', 'alyfajardo', 'Oct-30-2022', '06:06:23PM', 'Oct-30-2022', '06:09:26PM'),
(69, 'admin', 'lanamaegalvez', 'Oct-30-2022', '06:09:39PM', 'Oct-30-2022', '06:09:49PM'),
(70, 'admin', 'lanamaegalvez', 'Oct-30-2022', '06:27:20PM', 'Oct-30-2022', '06:27:48PM'),
(71, 'admin', 'lanamaegalvez', 'Oct-30-2022', '06:45:25PM', 'Oct-30-2022', '06:45:28PM'),
(72, 'admin', 'lanamaegalvez', 'Oct-30-2022', '06:48:54PM', 'Oct-30-2022', '06:48:57PM'),
(73, 'admin', 'lanamaegalvez', 'Oct-30-2022', '06:49:04PM', 'Oct-30-2022', '06:50:36PM'),
(74, 'admin', 'alyfajardo', 'Oct-30-2022', '06:52:54PM', 'Oct-30-2022', '06:53:18PM'),
(75, 'admin', 'lanamaegalvez', 'Oct-30-2022', '06:58:24PM', '0', '06:58:26PM'),
(76, 'admin', 'lanamaegalvez', 'Oct-30-2022', '07:01:12PM', 'Oct-30-2022', '07:01:47PM'),
(77, 'admin', 'lanamaegalvez', 'Oct-30-2022', '07:01:52PM', '0', '07:02:21PM'),
(78, 'admin', 'lanamaegalvez', 'Oct-30-2022', '07:06:56PM', '0', '07:10:24PM'),
(79, 'admin', 'alyfajardo', 'Oct-30-2022', '07:10:56PM', '0', '07:11:40PM'),
(80, 'admin', 'lanamaegalvez', 'Oct-30-2022', '07:12:20PM', '0', '07:17:02PM'),
(81, 'admin', 'lanamaegalvez', 'Oct-30-2022', '07:18:39PM', '0', '07:18:40PM'),
(82, 'employee', 'dejabrew', 'Oct-30-2022', '07:29:20PM', 'Oct-30-2022', ''),
(83, 'admin', 'lanamaegalvez', 'Oct-30-2022', '07:29:53PM', '0', '07:32:37PM'),
(84, 'admin', 'lanamaegalvez', 'Oct-30-2022', '08:02:04PM', 'Oct-30-2022', '08:02:10PM'),
(85, 'admin', 'lanamaegalvez', 'Oct-30-2022', '08:04:00PM', 'Oct-30-2022', '08:04:30PM'),
(86, 'admin', 'alyfajardo', 'Oct-30-2022', '08:07:46PM', '0', '08:07:52PM'),
(87, 'admin', 'lanamaegalvez', 'Oct-31-2022', '12:59:14AM', 'Oct-31-2022', '12:59:16AM'),
(88, 'admin', 'lanamaegalvez', 'Nov-01-2022', '10:51:15AM', 'Nov-01-2022', '10:51:18AM'),
(89, 'admin', 'lanamaegalvez', 'Nov-01-2022', '03:50:34PM', 'Nov-01-2022', '03:50:50PM'),
(90, 'admin', 'lanamaegalvez', 'Nov-02-2022', '12:31:00AM', 'Nov-02-2022', '02:01:28PM'),
(91, 'admin', 'lanamaegalvez', '<br />\r\n<b>Warning</b>:  Undefined array key', '<br />\r\n<b>Warning</b>:  Undefined array key', '0', '12:23:37AM'),
(92, 'admin', 'alyfajardo', 'Nov-04-2022', '01:22:56AM', 'Nov-04-2022', '01:23:40AM'),
(93, 'admin', 'lanamaegalvez', '<br />\r\n<b>Warning</b>:  Undefined array key', '<br />\r\n<b>Warning</b>:  Undefined array key', 'Nov-04-2022', '05:23:50PM'),
(94, 'admin', 'lanamaegalvez', '<br />\r\n<b>Warning</b>:  Undefined array key', '<br />\r\n<b>Warning</b>:  Undefined array key', 'Nov-05-2022', '02:38:50PM'),
(95, 'admin', 'lanamaegalvez', '<br />\r\n<b>Warning</b>:  Undefined array key', '<br />\r\n<b>Warning</b>:  Undefined array key', 'Nov-07-2022', '09:30:41AM'),
(96, 'admin', 'lanamaegalvez', 'Nov-07-2022', '09:54:34AM', 'Nov-07-2022', '09:54:42AM'),
(97, 'admin', 'lanamaegalvez', 'Nov-07-2022', '11:04:53AM', 'Nov-07-2022', '11:05:35AM'),
(98, 'admin', 'lanamaegalvez', '<br />\r\n<b>Warning</b>:  Undefined array key', '<br />\r\n<b>Warning</b>:  Undefined array key', 'Nov-07-2022', '12:38:34PM'),
(99, 'admin', 'lan', '', '', 'Nov-09-2022', '12:11:07AM'),
(100, 'admin', 'alyfajardo', '', '', '0', '12:27:41AM'),
(101, 'admin', 'alyfajardo', '', '', 'Nov-09-2022', '12:15:00AM'),
(102, 'admin', 'lanamaegalvez', '', '', 'Nov-09-2022', '12:33:27PM'),
(103, 'admin', 'lanamaegalvez', '', '', 'Nov-09-2022', '12:35:09PM'),
(104, 'admin', 'lanamaegalvez', '', '', 'Nov-09-2022', '12:37:28PM'),
(105, 'admin', 'lanamaegalvez', 'Nov-09-2022', '12:42:03PM', '0', '12:42:12PM'),
(106, 'admin', 'lanamaegalvez', 'Nov-09-2022', '12:46:01PM', '0', '12:47:32PM'),
(107, 'admin', 'lanamaegalvez', 'Nov-09-2022', '12:48:47PM', '0', '12:54:08PM'),
(108, 'admin', 'lanamaegalvez', 'Nov-09-2022', '12:56:47PM', '0', '12:57:06PM'),
(109, 'admin', 'lanamaegalvez', 'Nov-09-2022', '12:58:04PM', '0', '12:59:32PM'),
(110, 'admin', 'lanamaegalvez', 'Nov-09-2022', '01:24:08PM', 'Nov-09-2022', '01:24:12PM'),
(111, 'admin', 'lanamaegalvez', 'Nov-09-2022', '01:53:37PM', '0', '01:35:47PM'),
(112, 'admin', 'lanamaegalvez', 'Nov-10-2022', '02:22:39PM', '0', '02:23:01PM'),
(113, 'admin', 'lanamaegalvez', 'Nov-10-2022', '03:22:15PM', 'Nov-10-2022', '03:23:28PM'),
(114, 'admin', 'alyfajardo', '<br />\r\n<b>Warning</b>:  Undefined array key', '<br />\r\n<b>Warning</b>:  Undefined array key', '0', '03:26:43PM'),
(115, 'admin', 'alyfajardo', 'Nov-10-2022', '03:27:22PM', 'Nov-10-2022', '03:27:28PM'),
(116, 'admin', 'lanamaegalvez', '<br />\r\n<b>Warning</b>:  Undefined array key', '<br />\r\n<b>Warning</b>:  Undefined array key', 'Nov-10-2022', '11:53:44PM'),
(117, 'admin', 'lanamaegalvez', 'Nov-11-2022', '10:45:20AM', 'Nov-11-2022', '10:45:24AM'),
(118, 'admin', 'lanamaegalvez', 'Nov-11-2022', '12:55:25PM', '0', '12:55:28PM'),
(119, 'admin', 'lanamaegalvez', 'Nov-11-2022', '01:53:34PM', 'Nov-11-2022', '01:53:36PM'),
(120, 'admin', 'lanamaegalvez', '<br />\r\n<b>Warning</b>:  Undefined array key', '<br />\r\n<b>Warning</b>:  Undefined array key', 'Nov-13-2022', '06:43:20PM'),
(121, 'employee', 'dejabrew', 'Nov-14-2022', '10:03:30AM', 'Nov-14-2022', ''),
(122, 'admin', 'lanamaegalvez', 'Nov-14-2022', '10:18:26AM', '0', '10:18:31AM'),
(123, 'admin', 'lanamaegalvez', 'Nov-14-2022', '11:01:24AM', 'Nov-14-2022', '11:01:44AM'),
(124, 'admin', 'lanamaegalvez', 'Nov-14-2022', '11:33:28AM', '0', '11:33:43AM'),
(125, 'admin', 'lanamaegalvez', 'Nov-14-2022', '11:36:26AM', 'Nov-14-2022', '11:36:50AM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `log_details`
--
ALTER TABLE `log_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `log_details`
--
ALTER TABLE `log_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
