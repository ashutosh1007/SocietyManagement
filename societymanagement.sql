-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2021 at 07:54 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `societymanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int(11) NOT NULL,
  `bill_type` varchar(255) NOT NULL,
  `bill_amount` int(11) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id`, `bill_type`, `bill_amount`, `created_at`, `updated_at`) VALUES
(1, 'Maintainence', 5000, '2021-05-22 07:21:26am', '2021-05-22 07:21:26am');

-- --------------------------------------------------------

--
-- Table structure for table `building`
--

CREATE TABLE `building` (
  `id` int(11) NOT NULL,
  `floor_no` int(11) NOT NULL,
  `flat_no` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `building`
--

INSERT INTO `building` (`id`, `floor_no`, `flat_no`, `created_at`, `updated_at`) VALUES
(3, 1, 102, '2021-05-07 04:24:36', '2021-05-07 04:24:36'),
(5, 1, 103, '2021-05-07 04:28:35', '2021-05-21 04:43:12');

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `id` int(11) NOT NULL,
  `flat_id` int(11) NOT NULL,
  `complaint_title` varchar(255) NOT NULL,
  `complaint_description` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `flat`
--

CREATE TABLE `flat` (
  `id` int(11) NOT NULL,
  `flat_id` int(11) NOT NULL,
  `member_name` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flat`
--

INSERT INTO `flat` (`id`, `flat_id`, `member_name`, `created_at`, `updated_at`) VALUES
(1, 6, 'ashu', '2021-05-12 04:34:26', '2021-05-12 05:11:32'),
(2, 3, 'ashjsnklms', '2021-05-12 04:51:22', '2021-05-12 04:51:22');

-- --------------------------------------------------------

--
-- Table structure for table `floor`
--

CREATE TABLE `floor` (
  `id` int(11) NOT NULL,
  `floor_id` int(11) NOT NULL,
  `flat_no` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `member_name` varchar(255) NOT NULL,
  `member_email` varchar(255) NOT NULL,
  `member_password` varchar(255) NOT NULL,
  `member_role` varchar(255) NOT NULL DEFAULT 'SocietyMember',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `member_name`, `member_email`, `member_password`, `member_role`, `created_at`, `updated_at`) VALUES
(35, 'admin', 'admin', 'admin', 'admin', '2020-12-06 09:36:34', '2020-12-07 07:20:08'),
(36, 'Ashutosh', 'ashutosh.tambe@somaiya.edu', 'Ashutosh', 'Society Member', '2021-05-22 06:04:57', '2021-05-22 06:04:57');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(11) NOT NULL,
  `notice_title` varchar(255) NOT NULL,
  `notice_description` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE `query` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `query` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`id`, `name`, `email`, `location`, `query`, `created_at`, `updated_at`) VALUES
(1, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `sensordata`
--

CREATE TABLE `sensordata` (
  `id` int(6) UNSIGNED NOT NULL,
  `sensor` varchar(30) NOT NULL,
  `location` varchar(30) NOT NULL,
  `distance` varchar(10) DEFAULT NULL,
  `reading_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sensordata`
--

INSERT INTO `sensordata` (`id`, `sensor`, `location`, `distance`, `reading_time`) VALUES
(1, 'HC-SR04', 'Home', '6', '2021-05-15 04:16:29'),
(2, 'HC-SR04', 'Home', '0', '2021-05-15 04:16:38'),
(3, 'HC-SR04', 'Home', '90', '2021-05-15 04:16:43'),
(4, 'HC-SR04', 'Home', '4', '2021-05-15 04:16:52'),
(5, 'HC-SR04', 'Home', '0', '2021-05-15 04:17:02'),
(6, 'HC-SR04', 'Home', '0', '2021-05-15 04:17:11'),
(7, 'HC-SR04', 'Home', '92', '2021-05-15 04:17:16'),
(8, 'HC-SR04', 'Home', '94', '2021-05-15 04:17:21'),
(9, 'HC-SR04', 'Home', '88', '2021-05-15 04:17:26'),
(10, 'HC-SR04', 'Home', '88', '2021-05-15 04:17:31'),
(11, 'HC-SR04', 'Home', '88', '2021-05-15 04:17:36'),
(12, 'HC-SR04', 'Home', '88', '2021-05-15 04:17:41'),
(13, 'HC-SR04', 'Home', '90', '2021-05-15 04:26:47'),
(14, 'HC-SR04', 'Home', '90', '2021-05-15 04:26:52'),
(15, 'HC-SR04', 'Home', '90', '2021-05-15 04:26:57'),
(16, 'HC-SR04', 'Home', '90', '2021-05-15 04:27:02'),
(17, 'HC-SR04', 'Home', '90', '2021-05-15 04:27:07'),
(18, 'HC-SR04', 'Home', '90', '2021-05-15 04:27:12'),
(19, 'HC-SR04', 'Home', '90', '2021-05-15 04:27:17'),
(20, 'HC-SR04', 'Home', '90', '2021-05-15 04:27:22'),
(21, 'HC-SR04', 'Home', '90', '2021-05-15 04:27:27'),
(22, 'HC-SR04', 'Home', '90', '2021-05-15 04:27:33'),
(23, 'HC-SR04', 'Home', '90', '2021-05-15 04:27:38'),
(24, 'HC-SR04', 'Home', '90', '2021-05-15 04:27:43'),
(25, 'HC-SR04', 'Home', '90', '2021-05-15 04:27:48'),
(26, 'HC-SR04', 'Home', '90', '2021-05-15 04:27:53'),
(27, 'HC-SR04', 'Home', '90', '2021-05-15 04:27:58'),
(28, 'HC-SR04', 'Home', '90', '2021-05-15 04:28:03'),
(29, 'HC-SR04', 'Home', '90', '2021-05-15 04:28:08'),
(30, 'HC-SR04', 'Home', '90', '2021-05-15 04:28:13'),
(31, 'HC-SR04', 'Home', '90', '2021-05-15 04:28:18'),
(32, 'HC-SR04', 'Home', '90', '2021-05-15 04:28:23'),
(33, 'HC-SR04', 'Home', '90', '2021-05-15 04:28:28'),
(34, 'HC-SR04', 'Home', '90', '2021-05-15 04:28:34'),
(35, 'HC-SR04', 'Home', '90', '2021-05-15 04:28:39'),
(36, 'HC-SR04', 'Home', '90', '2021-05-15 04:28:44'),
(37, 'HC-SR04', 'Home', '90', '2021-05-15 04:28:49'),
(38, 'HC-SR04', 'Home', '100', '2021-05-15 04:28:54'),
(39, 'HC-SR04', 'Home', '100', '2021-05-15 04:28:59'),
(40, 'HC-SR04', 'Home', '100', '2021-05-15 04:29:04'),
(41, 'HC-SR04', 'Home', '100', '2021-05-15 04:29:09'),
(42, 'HC-SR04', 'Home', '100', '2021-05-15 04:29:14'),
(43, 'HC-SR04', 'Home', '100', '2021-05-15 04:29:34'),
(44, 'HC-SR04', 'Home', '100', '2021-05-15 04:29:39'),
(45, 'HC-SR04', 'Home', '96', '2021-05-15 04:29:44'),
(46, 'HC-SR04', 'Home', '82', '2021-05-15 04:29:49'),
(47, 'HC-SR04', 'Home', '64', '2021-05-15 04:29:54'),
(48, 'HC-SR04', 'Home', '58', '2021-05-15 04:29:59'),
(49, 'HC-SR04', 'Home', '44', '2021-05-15 04:30:08'),
(50, 'HC-SR04', 'Home', '96', '2021-05-15 04:30:13'),
(51, 'HC-SR04', 'Home', '88', '2021-05-15 04:36:09'),
(52, 'HC-SR04', 'Home', '88', '2021-05-15 04:36:14'),
(53, 'HC-SR04', 'Home', '82', '2021-05-15 04:36:19'),
(54, 'HC-SR04', 'Home', '80', '2021-05-15 04:36:24'),
(55, 'HC-SR04', 'Home', '60', '2021-05-15 04:36:29'),
(56, 'HC-SR04', 'Home', '42', '2021-05-15 04:36:38'),
(57, 'HC-SR04', 'Home', '54', '2021-05-15 04:49:32'),
(58, 'HC-SR04', 'Home', '54', '2021-05-15 04:49:37'),
(59, 'HC-SR04', 'Home', '54', '2021-05-15 04:49:42'),
(60, 'HC-SR04', 'Home', '54', '2021-05-15 04:51:45'),
(61, 'HC-SR04', 'Home', '54', '2021-05-15 04:51:50'),
(62, 'HC-SR04', 'Home', '98', '2021-05-15 04:51:55'),
(63, 'HC-SR04', 'Home', '90', '2021-05-15 04:52:00'),
(64, 'HC-SR04', 'Home', '90', '2021-05-15 04:52:33'),
(65, 'HC-SR04', 'Home', '90', '2021-05-15 04:52:38'),
(66, 'HC-SR04', 'Home', '90', '2021-05-15 04:53:08'),
(67, 'HC-SR04', 'Home', '90', '2021-05-15 04:53:13'),
(68, 'HC-SR04', 'Home', '90', '2021-05-15 04:53:18'),
(69, 'HC-SR04', 'Home', '90', '2021-05-15 04:53:23'),
(70, 'HC-SR04', 'Home', '90', '2021-05-15 04:53:29'),
(71, 'HC-SR04', 'Home', '90', '2021-05-15 04:53:34'),
(72, 'HC-SR04', 'Home', '90', '2021-05-15 04:53:42'),
(73, 'HC-SR04', 'Home', '90', '2021-05-15 04:53:47'),
(74, 'HC-SR04', 'Home', '90', '2021-05-15 04:53:52'),
(75, 'HC-SR04', 'Home', '90', '2021-05-15 04:53:57'),
(76, 'HC-SR04', 'Home', '90', '2021-05-15 04:54:02'),
(77, 'HC-SR04', 'Home', '90', '2021-05-15 04:54:07'),
(78, 'HC-SR04', 'Home', '90', '2021-05-15 04:54:12'),
(79, 'HC-SR04', 'Home', '90', '2021-05-15 04:54:17'),
(80, 'HC-SR04', 'Home', '90', '2021-05-15 04:54:22'),
(81, 'HC-SR04', 'Home', '90', '2021-05-15 04:54:27'),
(82, 'HC-SR04', 'Home', '90', '2021-05-15 04:54:32'),
(83, 'HC-SR04', 'Home', '90', '2021-05-15 04:54:38'),
(84, 'HC-SR04', 'Home', '90', '2021-05-15 04:54:43'),
(85, 'HC-SR04', 'Home', '90', '2021-05-15 04:54:48'),
(86, 'HC-SR04', 'Home', '90', '2021-05-15 04:54:53'),
(87, 'HC-SR04', 'Home', '90', '2021-05-15 04:54:58'),
(88, 'HC-SR04', 'Home', '90', '2021-05-15 04:55:23'),
(89, 'HC-SR04', 'Home', '90', '2021-05-15 04:55:28'),
(90, 'HC-SR04', 'Home', '90', '2021-05-15 04:55:33'),
(91, 'HC-SR04', 'Home', '90', '2021-05-15 04:55:38'),
(92, 'HC-SR04', 'Home', '90', '2021-05-15 04:57:13'),
(93, 'HC-SR04', 'Home', '90', '2021-05-15 04:57:18'),
(94, 'HC-SR04', 'Home', '90', '2021-05-15 04:57:23'),
(95, 'HC-SR04', 'Home', '100', '2021-05-15 04:57:29'),
(96, 'HC-SR04', 'Home', '90', '2021-05-15 04:57:31'),
(97, 'HC-SR04', 'Home', '100', '2021-05-15 05:03:26'),
(98, 'HC-SR04', 'Home', '100', '2021-05-15 05:03:31'),
(99, 'HC-SR04', 'Home', '100', '2021-05-15 05:04:04'),
(100, 'HC-SR04', 'Home', '96', '2021-05-15 05:04:09'),
(101, 'HC-SR04', 'Home', '90', '2021-05-15 05:04:14'),
(102, 'HC-SR04', 'Home', '90', '2021-05-15 05:04:19'),
(103, 'HC-SR04', 'Home', '90', '2021-05-15 05:04:24'),
(104, 'HC-SR04', 'Home', '90', '2021-05-15 05:04:56'),
(105, 'HC-SR04', 'Home', '90', '2021-05-15 05:05:01'),
(106, 'HC-SR04', 'Home', '90', '2021-05-15 05:05:37'),
(107, 'HC-SR04', 'Home', '90', '2021-05-15 05:05:42'),
(108, 'HC-SR04', 'Home', '90', '2021-05-15 05:07:10'),
(109, 'HC-SR04', 'Home', '90', '2021-05-15 05:07:15'),
(110, 'HC-SR04', 'Home', '90', '2021-05-15 05:07:20'),
(111, 'HC-SR04', 'Home', '90', '2021-05-15 05:07:25'),
(112, 'HC-SR04', 'Home', '90', '2021-05-15 05:07:30'),
(113, 'HC-SR04', 'Home', '90', '2021-05-15 05:07:35'),
(114, 'HC-SR04', 'Home', '90', '2021-05-15 05:07:41'),
(115, 'HC-SR04', 'Home', '90', '2021-05-15 05:07:46'),
(116, 'HC-SR04', 'Home', '90', '2021-05-15 05:07:51'),
(117, 'HC-SR04', 'Home', '90', '2021-05-15 05:07:56'),
(118, 'HC-SR04', 'Home', '42', '2021-05-15 05:08:05'),
(119, 'HC-SR04', 'Home', '42', '2021-05-15 05:08:14'),
(120, 'HC-SR04', 'Home', '42', '2021-05-15 05:08:56'),
(121, 'HC-SR04', 'Home', '42', '2021-05-15 05:09:05'),
(122, 'HC-SR04', 'Home', '76', '2021-05-15 05:09:10'),
(123, 'HC-SR04', 'Home', '76', '2021-05-15 05:09:16'),
(124, 'HC-SR04', 'Home', '78', '2021-05-15 05:09:21'),
(125, 'HC-SR04', 'Home', '76', '2021-05-15 05:09:26'),
(126, 'HC-SR04', 'Home', '78', '2021-05-15 05:09:31'),
(127, 'HC-SR04', 'Home', '76', '2021-05-15 05:09:36'),
(128, 'HC-SR04', 'Home', '76', '2021-05-15 05:09:41'),
(129, 'HC-SR04', 'Home', '78', '2021-05-15 05:09:46'),
(130, 'HC-SR04', 'Home', '78', '2021-05-15 05:09:51'),
(131, 'HC-SR04', 'Home', '76', '2021-05-15 05:09:56'),
(132, 'HC-SR04', 'Home', '76', '2021-05-15 05:10:02'),
(133, 'HC-SR04', 'Home', '78', '2021-05-15 05:10:07'),
(134, 'HC-SR04', 'Home', '76', '2021-05-15 05:10:12'),
(135, 'HC-SR04', 'Home', '76', '2021-05-15 05:10:17'),
(136, 'HC-SR04', 'Home', '78', '2021-05-15 05:10:22'),
(137, 'HC-SR04', 'Home', '78', '2021-05-15 05:10:27'),
(138, 'HC-SR04', 'Home', '78', '2021-05-15 05:10:32'),
(139, 'HC-SR04', 'Home', '78', '2021-05-15 05:10:37'),
(140, 'HC-SR04', 'Home', '76', '2021-05-15 05:10:49'),
(141, 'HC-SR04', 'Home', '78', '2021-05-15 05:10:54'),
(142, 'HC-SR04', 'Home', '78', '2021-05-15 05:10:59'),
(143, 'HC-SR04', 'Home', '78', '2021-05-15 05:11:28'),
(144, 'HC-SR04', 'Home', '78', '2021-05-15 05:11:33'),
(145, 'HC-SR04', 'Home', '78', '2021-05-15 05:11:39'),
(146, 'HC-SR04', 'Home', '78', '2021-05-15 05:11:44'),
(147, 'HC-SR04', 'Home', '78', '2021-05-15 05:11:49'),
(148, 'HC-SR04', 'Home', '76', '2021-05-15 05:11:54'),
(149, 'HC-SR04', 'Home', '76', '2021-05-15 05:11:59'),
(150, 'HC-SR04', 'Home', '78', '2021-05-15 05:12:04'),
(151, 'HC-SR04', 'Home', '78', '2021-05-15 05:12:09'),
(152, 'HC-SR04', 'Home', '52', '2021-05-15 05:12:14'),
(153, 'HC-SR04', 'Home', '24', '2021-05-15 05:12:23'),
(154, 'HC-SR04', 'Home', '20', '2021-05-15 05:12:33'),
(155, 'HC-SR04', 'Home', '20', '2021-05-15 05:12:42'),
(156, 'HC-SR04', 'Home', '20', '2021-05-15 05:13:29'),
(157, 'HC-SR04', 'Home', '78', '2021-05-15 05:13:34'),
(158, 'HC-SR04', 'Home', '58', '2021-05-15 05:13:35'),
(159, 'HC-SR04', 'Home', '78', '2021-05-15 05:13:37'),
(160, 'HC-SR04', 'Home', '58', '2021-05-15 05:13:42'),
(161, 'HC-SR04', 'Home', '78', '2021-05-15 05:13:47'),
(162, 'HC-SR04', 'Home', '78', '2021-05-15 05:13:52'),
(163, 'HC-SR04', 'Home', '34', '2021-05-15 05:14:01'),
(164, 'HC-SR04', 'Home', '34', '2021-05-15 05:14:10'),
(165, 'HC-SR04', 'Home', '34', '2021-05-15 05:14:20'),
(166, 'HC-SR04', 'Home', '34', '2021-05-15 05:14:29'),
(167, 'HC-SR04', 'Home', '34', '2021-05-15 05:14:38'),
(168, 'HC-SR04', 'Home', '34', '2021-05-15 05:14:47'),
(169, 'HC-SR04', 'Home', '34', '2021-05-15 05:17:29'),
(170, 'HC-SR04', 'Home', '34', '2021-05-15 05:18:09'),
(171, 'HC-SR04', 'Home', '34', '2021-05-15 05:18:36'),
(172, 'HC-SR04', 'Home', '34', '2021-05-15 05:18:45'),
(173, 'HC-SR04', 'Home', '34', '2021-05-15 05:18:54'),
(174, 'HC-SR04', 'Home', '80', '2021-05-15 05:19:00'),
(175, 'HC-SR04', 'Home', '82', '2021-05-15 05:19:05'),
(176, 'HC-SR04', 'Home', '82', '2021-05-15 05:19:10'),
(177, 'HC-SR04', 'Home', '82', '2021-05-15 05:19:15'),
(178, 'HC-SR04', 'Home', '80', '2021-05-15 05:19:20'),
(179, 'HC-SR04', 'Home', '80', '2021-05-15 05:19:58'),
(180, 'HC-SR04', 'Home', '82', '2021-05-15 05:20:03'),
(181, 'HC-SR04', 'Home', '80', '2021-05-15 05:20:18'),
(182, 'HC-SR04', 'Home', '80', '2021-05-15 05:20:23'),
(183, 'HC-SR04', 'Home', '42', '2021-05-15 05:20:38'),
(184, 'HC-SR04', 'Home', '42', '2021-05-15 05:20:53'),
(185, 'HC-SR04', 'Home', '92', '2021-05-15 05:20:58'),
(186, 'HC-SR04', 'Home', '92', '2021-05-15 05:21:03'),
(187, 'HC-SR04', 'Home', '92', '2021-05-15 05:21:08'),
(188, 'HC-SR04', 'Home', '92', '2021-05-15 05:21:13'),
(189, 'HC-SR04', 'Home', '92', '2021-05-15 05:21:19'),
(190, 'HC-SR04', 'Home', '92', '2021-05-15 05:21:24'),
(191, 'HC-SR04', 'Home', '96', '2021-05-15 05:25:39'),
(192, 'HC-SR04', 'Home', '68', '2021-05-15 05:25:44'),
(193, 'HC-SR04', 'Home', '52', '2021-05-15 05:25:49'),
(194, 'HC-SR04', 'Home', '42', '2021-05-15 05:26:04'),
(195, 'HC-SR04', 'Home', '84', '2021-05-15 05:26:09'),
(196, 'HC-SR04', 'Home', '84', '2021-05-15 05:26:14'),
(197, 'HC-SR04', 'Home', '84', '2021-05-15 05:26:19'),
(198, 'HC-SR04', 'Home', '84', '2021-05-15 05:26:24'),
(199, 'HC-SR04', 'Home', '84', '2021-05-15 05:26:29'),
(200, 'HC-SR04', 'Home', '84', '2021-05-15 05:26:34'),
(201, 'HC-SR04', 'Home', '84', '2021-05-15 05:26:40'),
(202, 'HC-SR04', 'Home', '84', '2021-05-15 05:26:45'),
(203, 'HC-SR04', 'Home', '84', '2021-05-15 05:26:50'),
(204, 'HC-SR04', 'Home', '84', '2021-05-15 05:26:55'),
(205, 'HC-SR04', 'Home', '84', '2021-05-15 05:27:00'),
(206, 'HC-SR04', 'Home', '84', '2021-05-15 05:27:05'),
(207, 'HC-SR04', 'Home', '84', '2021-05-15 05:27:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `building`
--
ALTER TABLE `building`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flat`
--
ALTER TABLE `flat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `floor`
--
ALTER TABLE `floor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `query`
--
ALTER TABLE `query`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sensordata`
--
ALTER TABLE `sensordata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `building`
--
ALTER TABLE `building`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `flat`
--
ALTER TABLE `flat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `floor`
--
ALTER TABLE `floor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `query`
--
ALTER TABLE `query`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sensordata`
--
ALTER TABLE `sensordata`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=208;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
