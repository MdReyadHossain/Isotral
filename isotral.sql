-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2025 at 10:09 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `isotral`
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
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `phone_first`, `phone_second`, `address`, `address_url`, `embed_map_url`, `facebook_url`, `twitter_url`, `youtube_url`, `linkedin_url`, `updated_at`, `created_at`) VALUES
(1, 'isotral', 'info.isotral@gmail.com', '+8801771449957', '+8801956394373', 'Nazma Mohol, Naruli, Bogura, Bangladesh', 'https://www.google.com/maps?ll=24.856083,89.388068&z=16&t=m&hl=en&gl=BD&mapclient=embed&q=24%C2%B051%2721.9%22N+89%C2%B023%2717.0%22E+24.856083,+89.388056@24.8560833,89.3880556', 'https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3620.227365986334!2d89.38806799999999!3d24.856082999999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjTCsDUxJzIxLjkiTiA4OcKwMjMnMTcuMCJF!5e0!3m2!1sen!2sbd!4v1738864585255!5m2!1sen!2sbd', 'https://www.facebook.com/isotral', 'https://x.com/isotral13091', 'https://www.youtube.com/@Isotral-n7o', 'https://www.linkedin.com/company/isotral', '2025-02-07 22:00:00', '2025-02-07 22:00:00');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `otp`
--

CREATE TABLE `otp` (
  `id` int(11) NOT NULL,
  `otp` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `type` enum('ADMIN','MEMBER') NOT NULL,
  `status` enum('ACTIVE','INACTIVE','PENDING') DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `phone`, `address`, `password`, `type`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Reyad Hossain', 'reyadhosen@gmail.com', '01956394373', 'Bogura, Bangladesh', '123456', 'ADMIN', 'ACTIVE', '2025-02-07 00:00:00', '2025-02-07 00:00:00'),
(3, 'Md Maruf Raihan', 'maruf@gmail.com', '01762749948', NULL, '000000', 'MEMBER', 'ACTIVE', '2025-02-08 12:21:13', '2025-02-08 12:21:13'),
(4, 'Kamrul Koche', 'koche@gmail.com', '01755555555', 'Dhaka, Bangladesh', '000000', 'MEMBER', 'PENDING', '2025-02-12 00:00:00', '2025-02-05 00:00:00'),
(5, 'Munira Zebin', 'zebin@gmail.com', '01788888888', 'Dhaka, Bangladesh', '000000', 'MEMBER', 'INACTIVE', '2025-02-07 00:00:00', '2025-02-07 00:00:00');

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
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

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
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
