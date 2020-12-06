-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2020 at 09:30 PM
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
(5, 'admin', 'admin', 'admin', 'admin', '2020-10-08 23:05:43', '2020-10-08 23:05:43'),
(7, 'ashutosh tambe', 'ashutosh.tambe@somaiya.edu', 'ashu', 'admin', '2020-12-06 07:22:01', '2020-12-06 08:49:57'),
(14, 'ashutosh', 'ashutosh.tambe@somaiya.edu', 'ashutosh', 'admin', '2020-12-06 08:43:58', '2020-12-06 08:43:58'),
(15, 'ashu', 'ashutosh.tambe@somaiya.edu', 'ashu', 'admin', '2020-12-06 08:47:42', '2020-12-06 08:47:42'),
(16, 'asj', 'ashutosh.tambe@somaiya.edu', 'asj', 'admin', '2020-12-06 09:01:45', '2020-12-06 09:01:45'),
(17, 'asdh', 'ashutosh.tambe@somaiya.edu', 'asdh', 'admin', '2020-12-06 09:03:05', '2020-12-06 09:03:05'),
(18, 'aksk', 'ashutosh.tambe@somaiya.edu', 'aksk', 'admin', '2020-12-06 09:03:31', '2020-12-06 09:03:31'),
(19, 'à¤¤à¤¾à¤‚à¤¬à¥‡ à¤†à¤¶à¥à¤¤à¥‹à¤· à¤®à¤¿à¤²à¥€à¤‚à¤¦ à¤¸à¥à¤®à¤¿à¤¤à¤¾', 'ashutosh.tambe@somaiya.edu', 'à¤¤à¤¾à¤‚à¤¬à¥‡ à¤†à¤¶à¥à¤¤à¥‹à¤· à¤®à¤¿à¤²à¥€à¤‚à¤¦ à¤¸à¥à¤®à¤¿à¤¤à¤¾', 'admin', '2020-12-06 09:04:45', '2020-12-06 09:04:45'),
(20, 'ashu', 'ashutosh.tambe@somaiya.edu', 'ashu', 'admin', '2020-12-06 09:05:52', '2020-12-06 09:05:52'),
(21, 'ashu', 'ashutosh.tambe@somaiya.edu', 'ashu', 'admin', '2020-12-06 09:06:43', '2020-12-06 09:06:43'),
(22, 'à¤¤à¤¾à¤‚à¤¬à¥‡ à¤†à¤¶à¥à¤¤à¥‹à¤· à¤®à¤¿à¤²à¥€à¤‚à¤¦ à¤¸à¥à¤®à¤¿à¤¤à¤¾', 'ashutosh.tambe@somaiya.edu', 'à¤¤à¤¾à¤‚à¤¬à¥‡ à¤†à¤¶à¥à¤¤à¥‹à¤· à¤®à¤¿à¤²à¥€à¤‚à¤¦ à¤¸à¥à¤®à¤¿à¤¤à¤¾', 'admin', '2020-12-06 09:08:19', '2020-12-06 09:08:19'),
(23, 'à¤¤à¤¾à¤‚à¤¬à¥‡ à¤†à¤¶à¥à¤¤à¥‹à¤· à¤®à¤¿à¤²à¥€à¤‚à¤¦ à¤¸à¥à¤®à¤¿à¤¤à¤¾', 'ashutosh.tambe@somaiya.edu', 'à¤¤à¤¾à¤‚à¤¬à¥‡ à¤†à¤¶à¥à¤¤à¥‹à¤· à¤®à¤¿à¤²à¥€à¤‚à¤¦ à¤¸à¥à¤®à¤¿à¤¤à¤¾', 'admin', '2020-12-06 09:09:25', '2020-12-06 09:09:25'),
(24, 'ashutosh', 'ashutosh.tambe@somaiya.edu', 'ashutosh', 'admin', '2020-12-06 09:10:09', '2020-12-06 09:10:09'),
(25, 'ashu', 'ashutosh.tambe@somaiya.edu', 'ashu', 'admin', '2020-12-06 09:10:55', '2020-12-06 09:10:55'),
(26, 'à¤¤à¤¾à¤‚à¤¬à¥‡ à¤†à¤¶à¥à¤¤à¥‹à¤· à¤®à¤¿à¤²à¥€à¤‚à¤¦ à¤¸à¥à¤®à¤¿à¤¤à¤¾', 'ashutosh.tambe@somaiya.edu', 'à¤¤à¤¾à¤‚à¤¬à¥‡ à¤†à¤¶à¥à¤¤à¥‹à¤· à¤®à¤¿à¤²à¥€à¤‚à¤¦ à¤¸à¥à¤®à¤¿à¤¤à¤¾', 'admin', '2020-12-06 09:12:20', '2020-12-06 09:12:20'),
(27, 'ashu', 'ashutosh.tambe@somaiya.edu', 'ashu', 'admin', '2020-12-06 09:14:06', '2020-12-06 09:14:06'),
(28, 'à¤¤à¤¾à¤‚à¤¬à¥‡ à¤†à¤¶à¥à¤¤à¥‹à¤· à¤®à¤¿à¤²à¥€à¤‚à¤¦ à¤¸à¥à¤®à¤¿à¤¤à¤¾', 'ashutosh.tambe@somaiya.edu', 'à¤¤à¤¾à¤‚à¤¬à¥‡ à¤†à¤¶à¥à¤¤à¥‹à¤· à¤®à¤¿à¤²à¥€à¤‚à¤¦ à¤¸à¥à¤®à¤¿à¤¤à¤¾', 'admin', '2020-12-06 09:15:36', '2020-12-06 09:15:36'),
(29, 'ashu', 'ashutosh.tambe@somaiya.edu', 'ashu', 'admin', '2020-12-06 09:17:56', '2020-12-06 09:17:56'),
(30, 'ashu', 'ashutosh.tambe@somaiya.edu', 'ashu', 'admin', '2020-12-06 09:22:30', '2020-12-06 09:22:30'),
(31, 'ashu', 'ashutosh.tambe@somaiya.edu', 'ashu', 'admin', '2020-12-06 09:22:46', '2020-12-06 09:22:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
