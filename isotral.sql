-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql310.infinityfree.com
-- Generation Time: Nov 27, 2025 at 03:59 AM
-- Server version: 11.4.7-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `if0_38457029_isotral`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_first` varchar(255) NOT NULL,
  `phone_second` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `address_url` varchar(255) NOT NULL,
  `embed_map_url` varchar(255) DEFAULT NULL,
  `facebook_url` varchar(255) DEFAULT NULL,
  `twitter_url` varchar(255) DEFAULT NULL,
  `youtube_url` varchar(255) DEFAULT NULL,
  `linkedin_url` varchar(255) DEFAULT NULL,
  `vault_source` varchar(255) DEFAULT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `phone_first`, `phone_second`, `address`, `address_url`, `embed_map_url`, `facebook_url`, `twitter_url`, `youtube_url`, `linkedin_url`, `vault_source`, `updated_at`, `created_at`) VALUES
(1, 'isotral', 'info.isotral@gmail.com', '+8801771449957', '+8801956394373', 'Nazma Mohol, Naruli, Bogura, Bangladesh', 'https://www.google.com/maps?ll=24.856083,89.388068&z=16&t=m&hl=en&gl=BD&mapclient=embed&q=24%C2%B051%2721.9%22N+89%C2%B023%2717.0%22E+24.856083,+89.388056@24.8560833,89.3880556', 'https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3620.227365986334!2d89.38806799999999!3d24.856082999999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjTCsDUxJzIxLjkiTiA4OcKwMjMnMTcuMCJF!5e0!3m2!1sen!2sbd!4v1738864585255!5m2!1sen!2sbd', 'https://www.facebook.com/isotral', 'https://x.com/isotral13091', 'https://www.youtube.com/@Isotral-n7o', 'https://www.linkedin.com/company/isotral', '01771449957', '2025-02-07 22:00:00', '2025-02-07 22:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `anonymous`
--

CREATE TABLE `anonymous` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `anonymous`
--

INSERT INTO `anonymous` (`id`, `name`, `email`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Reyad', 'reyadhosen@gmail.com', '01956394373', 'hello this is first message from isotral', '2025-02-06 19:55:09', '2025-02-06 19:55:09'),
(2, 'Sakib', 'sakib@gmail.com', '01956394344', 'hello sakib, \r\nthis is test mail from sakib', '2025-02-06 20:09:58', '2025-02-06 20:09:58'),
(3, 'Reyad Hossain', 'reyadhosen@gmail.com', '01956394373', 'à¦†à¦®à¦¿à¦“ à¦œà§Ÿà§‡à¦¨ à¦¹à¦‡à¦¤à§‡ à¦šà¦¾à¦‡', '2025-02-14 05:48:20', '2025-02-14 05:48:20');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `blog_link` varchar(255) NOT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `name`, `blog_link`, `image_url`, `created_at`, `updated_at`) VALUES
(1, '?????? ?????? ????? ??????????? ???? ?????? ???????', 'https://isotral.blogspot.com/2024/10/blog-post_19.html', 'https://blogger.googleusercontent.com/img/a/AVvXsEgaeHnplNhPhQvY6PWJN9ws0XNYbxe_5uXGuUV2c3i2jqtwls9lvq_RqrD498mOdBBBQr1IsEoqPY1bi4rqbZ_guCy3Dv94B69RU0UMRsKRJj88U3qfuJOcVzXqeD3byCH9FL4XFZLaGaCz8WMPepsmzZxwNoth2VpLGhDr3AhSCcgs0xIcuwgDUmyUh9eN', '2024-10-19 00:00:00', '2024-10-19 00:00:00'),
(2, '??????? ???????? ??????', 'https://isotral.blogspot.com/2024/10/blog-post.html', NULL, '2024-10-01 00:00:00', '2024-10-01 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `cost`
--

CREATE TABLE `cost` (
  `id` int(11) NOT NULL,
  `reason` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fund`
--

CREATE TABLE `fund` (
  `id` int(11) NOT NULL,
  `amount` float NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `invest`
--

CREATE TABLE `invest` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `amount` double NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `invest`
--

INSERT INTO `invest` (`id`, `title`, `description`, `amount`, `updated_at`, `created_at`) VALUES
(1, 'Website host', 'For website host on ryzen web host 5gb nvme ssd package', 800, '2025-04-05 12:43:42', '2025-04-05 12:43:42');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `location` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `user_id`, `ip`, `location`, `created_at`, `updated_at`) VALUES
(1, 1, '27.147.204.204', 'Rajshahi Division, Bangladesh', '2025-03-21 12:49:48', '2025-03-21 12:49:48'),
(2, 1, '27.147.204.204', 'Rajshahi Division, Bangladesh', '2025-03-21 14:14:01', '2025-03-21 14:14:01'),
(3, 1, '27.147.204.204', 'Rajshahi Division, Bangladesh', '2025-03-21 14:15:55', '2025-03-21 14:15:55'),
(4, 1, '27.147.204.204', 'Rajshahi Division, Bangladesh', '2025-03-21 14:16:14', '2025-03-21 14:16:14'),
(5, 1, '27.147.204.204', 'Rajshahi Division, Bangladesh', '2025-03-23 18:23:28', '2025-03-23 18:23:28'),
(6, 8, '27.147.204.204', 'Rajshahi Division, Bangladesh', '2025-03-23 18:46:38', '2025-03-23 18:46:38'),
(7, 8, '27.147.204.204', 'Rajshahi Division, Bangladesh', '2025-03-23 18:46:53', '2025-03-23 18:46:53'),
(8, 8, '27.147.204.204', 'Rajshahi Division, Bangladesh', '2025-03-23 21:35:25', '2025-03-23 21:35:25'),
(9, 8, '27.147.204.204', 'Rajshahi Division, Bangladesh', '2025-03-23 21:36:35', '2025-03-23 21:36:35'),
(10, 8, '27.147.204.204', 'Rajshahi Division, Bangladesh', '2025-03-23 21:38:32', '2025-03-23 21:38:32'),
(11, 8, '27.147.204.204', 'Rajshahi Division, Bangladesh', '2025-03-23 21:51:16', '2025-03-23 21:51:16'),
(12, 8, '27.147.204.204', 'Rajshahi Division, Bangladesh', '2025-03-23 22:11:07', '2025-03-23 22:11:07'),
(13, 8, '27.147.204.204', 'Rajshahi Division, Bangladesh', '2025-03-26 11:28:34', '2025-03-26 11:28:34'),
(14, 8, '27.147.204.204', 'Rajshahi Division, Bangladesh', '2025-03-27 09:07:08', '2025-03-27 09:07:08'),
(15, 7, '27.147.204.204', 'Rajshahi Division, Bangladesh', '2025-03-27 09:07:24', '2025-03-27 09:07:24'),
(16, 8, '27.147.204.204', 'Rajshahi Division, Bangladesh', '2025-03-27 14:53:42', '2025-03-27 14:53:42'),
(17, 8, '27.147.204.204', 'Rajshahi Division, Bangladesh', '2025-03-28 11:27:40', '2025-03-28 11:27:40'),
(18, 1, '27.147.204.204', 'Rajshahi Division, Bangladesh', '2025-03-30 20:47:58', '2025-03-30 20:47:58'),
(19, 5, '27.147.204.204', 'Rajshahi Division, Bangladesh', '2025-03-30 20:48:44', '2025-03-30 20:48:44'),
(20, 1, '27.147.204.204', 'Rajshahi Division, Bangladesh', '2025-04-02 11:29:10', '2025-04-02 11:29:10'),
(21, 5, '27.147.204.204', 'Rajshahi Division, Bangladesh', '2025-04-02 11:29:29', '2025-04-02 11:29:29'),
(22, 4, '27.147.204.204', 'Rajshahi Division, Bangladesh', '2025-04-02 11:30:16', '2025-04-02 11:30:16'),
(23, 8, '27.147.204.204', 'Rajshahi Division, Bangladesh', '2025-04-03 20:25:15', '2025-04-03 20:25:15'),
(24, 8, '27.147.204.204', 'Rajshahi Division, Bangladesh', '2025-04-03 20:27:13', '2025-04-03 20:27:13'),
(25, 8, '27.147.204.204', 'Rajshahi Division, Bangladesh', '2025-04-03 20:27:55', '2025-04-03 20:27:55'),
(26, 8, '27.147.204.204', 'Rajshahi Division, Bangladesh', '2025-04-03 21:47:32', '2025-04-03 21:47:32'),
(27, 5, '27.147.204.204', 'Rajshahi Division, Bangladesh', '2025-04-03 21:51:32', '2025-04-03 21:51:32'),
(28, 5, '27.147.204.204', 'Rajshahi Division, Bangladesh', '2025-04-03 22:29:44', '2025-04-03 22:29:44'),
(29, 8, '27.147.204.204', 'Rajshahi Division, Bangladesh', '2025-04-03 22:42:04', '2025-04-03 22:42:04'),
(30, 8, '27.147.204.204', 'Rajshahi Division, Bangladesh', '2025-04-04 08:45:18', '2025-04-04 08:45:18'),
(31, 5, '27.147.204.204', 'Rajshahi Division, Bangladesh', '2025-04-04 17:16:14', '2025-04-04 17:16:14'),
(32, 8, '27.147.204.204', 'Rajshahi Division, Bangladesh', '2025-04-06 14:16:58', '2025-04-06 14:16:58'),
(33, 8, '27.147.204.204', 'Rajshahi Division, Bangladesh', '2025-04-06 17:19:31', '2025-04-06 17:19:31'),
(34, 8, '27.147.204.204', 'Rajshahi Division, Bangladesh', '2025-04-06 17:20:30', '2025-04-06 17:20:30'),
(35, 6, '27.147.204.204', 'Rajshahi Division, Bangladesh', '2025-04-09 20:40:52', '2025-04-09 20:40:52'),
(36, 8, '27.147.204.204', 'Rajshahi Division, Bangladesh', '2025-04-09 20:41:42', '2025-04-09 20:41:42'),
(37, 7, '27.147.204.204', 'Rajshahi Division, Bangladesh', '2025-04-09 21:00:36', '2025-04-09 21:00:36'),
(38, 8, '27.147.204.204', 'Rajshahi Division, Bangladesh', '2025-04-27 11:26:31', '2025-04-27 11:26:31'),
(39, 6, '27.147.204.204', 'Rajshahi Division, Bangladesh', '2025-04-27 11:49:29', '2025-04-27 11:49:29'),
(40, 5, '185.27.134.238', 'England, United Kingdom', '2025-04-27 14:44:45', '2025-04-27 14:44:45'),
(41, 4, '185.27.134.238', 'England, United Kingdom', '2025-04-28 07:12:32', '2025-04-28 07:12:32'),
(42, 4, '185.27.134.238', 'England, United Kingdom', '2025-04-28 07:13:48', '2025-04-28 07:13:48'),
(43, 1, '185.27.134.238', 'England, United Kingdom', '2025-04-28 14:03:35', '2025-04-28 14:03:35'),
(44, 6, '185.27.134.238', 'England, United Kingdom', '2025-04-28 14:04:57', '2025-04-28 14:04:57'),
(45, 6, '185.27.134.238', 'England, United Kingdom', '2025-04-28 14:05:56', '2025-04-28 14:05:56'),
(46, 6, '185.27.134.238', 'England, United Kingdom', '2025-04-28 14:08:38', '2025-04-28 14:08:38'),
(47, 6, '185.27.134.238', 'England, United Kingdom', '2025-04-28 14:09:35', '2025-04-28 14:09:35'),
(48, 5, '185.27.134.238', 'England, United Kingdom', '2025-04-28 15:48:13', '2025-04-28 15:48:13'),
(49, 5, '185.27.134.238', 'England, United Kingdom', '2025-04-28 15:48:30', '2025-04-28 15:48:30'),
(50, 5, '185.27.134.238', 'England, United Kingdom', '2025-04-28 15:49:06', '2025-04-28 15:49:06'),
(51, 5, '185.27.134.238', 'England, United Kingdom', '2025-04-28 15:50:07', '2025-04-28 15:50:07'),
(52, 5, '185.27.134.238', 'England, United Kingdom', '2025-05-24 17:05:02', '2025-05-24 17:05:02'),
(53, 5, '185.27.134.238', 'England, United Kingdom', '2025-05-24 17:05:16', '2025-05-24 17:05:16'),
(54, 4, '185.27.134.238', 'England, United Kingdom', '2025-06-03 05:13:56', '2025-06-03 05:13:56'),
(55, 4, '185.27.134.238', 'England, United Kingdom', '2025-06-24 13:08:46', '2025-06-24 13:08:46'),
(56, 4, '185.27.134.238', 'England, United Kingdom', '2025-07-05 14:43:47', '2025-07-05 14:43:47'),
(57, 1, '185.27.134.238', 'England, United Kingdom', '2025-07-06 14:53:05', '2025-07-06 14:53:05'),
(58, 1, '185.27.134.238', 'England, United Kingdom', '2025-08-02 16:46:12', '2025-08-02 16:46:12'),
(59, 1, '185.27.134.238', 'England, United Kingdom', '2025-08-05 07:47:30', '2025-08-05 07:47:30'),
(60, 1, '185.27.134.238', 'England, United Kingdom', '2025-11-19 17:28:49', '2025-11-19 17:28:49'),
(61, 4, '185.27.134.238', 'England, United Kingdom', '2025-11-19 17:29:04', '2025-11-19 17:29:04');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `from_id` int(11) DEFAULT NULL,
  `message` varchar(255) NOT NULL,
  `to_id` int(11) DEFAULT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `otp`
--

CREATE TABLE `otp` (
  `id` int(11) NOT NULL,
  `otp` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `priority` int(11) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `website` varchar(255) DEFAULT NULL,
  `facebook_url` varchar(255) DEFAULT NULL,
  `linkedin_url` varchar(255) DEFAULT NULL,
  `instagram_url` varchar(255) DEFAULT NULL,
  `twitter_url` varchar(255) DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `profession` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `sa_title` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `type` enum('ADMIN','MEMBER','SUPER_ADMIN') NOT NULL,
  `status` enum('ACTIVE','INACTIVE','PENDING') DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_id`, `priority`, `name`, `email`, `website`, `facebook_url`, `linkedin_url`, `instagram_url`, `twitter_url`, `image_url`, `phone`, `address`, `profession`, `title`, `sa_title`, `password`, `type`, `status`, `created_at`, `updated_at`) VALUES
(1, 12, 2, 'Reyad Hossain', 'reyadhosen@gmail.com', 'https://its-reyad.netlify.app/', 'https://www.facebook.com/mdreyadhossain.rh', 'https://www.linkedin.com/in/mdreyadhossain/', 'https://www.instagram.com/mdreyadhossain.rh', 'https://x.com/ReyadSteel', 'https://res.cloudinary.com/dmcppzpgl/image/upload/v1742984675/Reyad-pro_lub6kl.jpg', '01956394373', 'Bogura, Bangladesh', 'Software Engineer', 'Vice President of Isotral', 'Co-Founder of Isotral', '000000', 'SUPER_ADMIN', 'ACTIVE', '2025-02-07 00:00:00', '2025-02-07 00:00:00'),
(3, 31, 4, 'Md Maruf Raihan', 'marufraihan99@gmail.com', NULL, 'https://www.facebook.com/shakil.islam.37625843', 'https://www.linkedin.com/in/maruf-raihan27/', NULL, NULL, 'https://res.cloudinary.com/dmcppzpgl/image/upload/v1741549441/maruf_loqxpv.jpg', '01762749948', 'Bogura, Bangladesh', 'Textile Engineer', 'CEO of Blue Dot', NULL, '000000', 'ADMIN', 'ACTIVE', '2025-02-08 12:21:13', '2025-02-08 12:21:13'),
(4, 23, 6, 'S.M. Kamrul Hasan Koche', 'kamrulkoche@gmail.com', '', 'https://www.facebook.com/kamrul.hasan.610715', 'https://www.linkedin.com/in/kamrul-hasan-koche/', '', '', 'https://res.cloudinary.com/dmcppzpgl/image/upload/v1741548642/kamrul_zivg8b.jpg', '01755555555', 'Barishal, Bangladesh', 'Software Engineer', 'Director of QuadroCode', NULL, '000000', 'ADMIN', 'ACTIVE', '2025-02-12 00:00:00', '2025-06-24 13:09:46'),
(5, 21, 3, 'Munira Zebin', 'munirazebin229@gmail.com', 'http://munira.unaux.com/', 'https://www.facebook.com/christinajenifer.christinajenifar', 'https://www.linkedin.com/in/munirazebin/', 'https://www.instagram.com/zebin_ruhi', '', 'https://res.cloudinary.com/dmcppzpgl/image/upload/v1743780987/php7AAA_id8dw4.jpg', '01745482666', 'Dhaka, Bangladesh', 'SQA Engineer', 'CEO of Squadrosoft', NULL, '000000', 'ADMIN', 'ACTIVE', '2025-02-07 00:00:00', '2025-04-28 16:06:17'),
(6, 11, 1, 'Najmus Sakib', 'najmusnishad2020@gmail.com', NULL, 'https://www.facebook.com/najmus.sakib.522', 'https://www.linkedin.com/in/najmus-sakib-66050a215/', NULL, NULL, 'https://res.cloudinary.com/dmcppzpgl/image/upload/v1741548420/profile-1_gjr6rd.png', '01771449957', 'Bogura, Bangladesh', 'Textile Engineer', 'President of Isotral', 'Founder of Isotral', '369369', 'SUPER_ADMIN', 'ACTIVE', '2025-03-10 00:00:00', '2025-04-28 14:16:56'),
(7, 13, 7, 'Md Shahriar Islam', 'shahriarjobs111@gmail.com', NULL, 'https://www.facebook.com/profile.php?id=100031429620360', 'https://www.linkedin.com/in/md-shahriar-islam-22b415182/', NULL, NULL, 'https://res.cloudinary.com/dmcppzpgl/image/upload/v1741548444/69a35321-bcb4-44e3-9881-df98df480be0_rdxf9o.jpg', '01777610833', 'Bogura, Bangladesh', 'Aerospace Engineer', 'HR head of Isotral', NULL, '000000', 'ADMIN', 'ACTIVE', '2025-03-10 00:00:00', '2025-04-09 21:03:51'),
(8, 22, 5, 'Nasim Reza Hridoy', 'reza0445nrh@gmail.com', '', 'https://www.facebook.com/profile.php?id=100008106511380', 'https://www.linkedin.com/in/nasim-reza-hridoy-ab88b3246/', 'https://www.linkedin.com/in/nasim-reza-hridoy-ab88b3246/', 'https://www.linkedin.com/in/nasim-reza-hridoy-ab88b3246/', 'https://res.cloudinary.com/dmcppzpgl/image/upload/v1741548641/reza_pj0qne.jpg', '01717365484', 'Dhaka, Bangladesh', 'Software Engineer', 'Senior Director of QuadroCode', NULL, '000000', 'ADMIN', 'ACTIVE', '2025-03-10 00:00:00', '2025-04-27 11:32:51'),
(9, NULL, NULL, 'Leon', 'leon@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '00000', 'MEMBER', 'PENDING', '2025-03-10 00:00:00', '2025-03-10 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `vault`
--

CREATE TABLE `vault` (
  `id` int(11) NOT NULL,
  `source` varchar(255) NOT NULL,
  `vault_source` varchar(255) NOT NULL,
  `trans_id` varchar(255) NOT NULL,
  `amount` double DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `vault`
--

INSERT INTO `vault` (`id`, `source`, `vault_source`, `trans_id`, `amount`, `user_id`, `status`, `updated_at`, `created_at`) VALUES
(1, 'IBBL LTD', '01956394373', 'CBA4ONWCT4', 450, 1, 1, '2025-04-05 02:38:41', '2025-04-05 02:38:41'),
(2, '01771449957', '01956394373', 'CCE5L2SFSB', 200, 6, 0, '2025-04-05 02:42:55', '2025-04-05 02:42:55'),
(3, '01771449957', '01956394373', 'CCB0IQM19Y', 200, 6, 1, '2025-04-05 02:43:41', '2025-04-05 02:43:41'),
(4, '01717365484', '01771449957', 'CCWWWWWWW', 200, 8, 0, '2025-04-10 00:56:11', '2025-04-10 00:56:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `anonymous`
--
ALTER TABLE `anonymous`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cost`
--
ALTER TABLE `cost`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cost_ibfk_1` (`user_id`);

--
-- Indexes for table `fund`
--
ALTER TABLE `fund`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `invest`
--
ALTER TABLE `invest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `otp`
--
ALTER TABLE `otp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vault`
--
ALTER TABLE `vault`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `anonymous`
--
ALTER TABLE `anonymous`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cost`
--
ALTER TABLE `cost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fund`
--
ALTER TABLE `fund`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invest`
--
ALTER TABLE `invest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `otp`
--
ALTER TABLE `otp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `vault`
--
ALTER TABLE `vault`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cost`
--
ALTER TABLE `cost`
  ADD CONSTRAINT `cost_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `fund`
--
ALTER TABLE `fund`
  ADD CONSTRAINT `fund_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `vault`
--
ALTER TABLE `vault`
  ADD CONSTRAINT `vault_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
