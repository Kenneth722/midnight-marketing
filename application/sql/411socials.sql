-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2022 at 03:35 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `411socials`
--

-- --------------------------------------------------------

--
-- Table structure for table `business`
--

CREATE TABLE `business` (
  `id` int(5) NOT NULL,
  `name` int(255) NOT NULL,
  `address` int(255) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `ended_at` int(11) NOT NULL,
  `business_number` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `img_url` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `description`, `img_url`, `created_at`) VALUES
(1, 'Digital Marketing', 'With digital marketing you can never go wrong. All you need to do is update and upgrade your data, your business and everything under the sun to get your business up-to-date and competitive.\nIncrease your bottom line, grow your Facebook, Twitter, Tiktok, Instagram, and YouTube following and boost your local and worldwide presence.\n', '0', '2022-08-29 16:51:25'),
(2, 'Programming and Tech', 'Get all technical bells and whistles without paying for a programming degree. With 411 socials, you get 100% money back guarantee if we do not deliver it on time and the right way.', '0', '2022-08-29 17:11:01'),
(3, 'Business', 'From time immemorial, the business space has always been up against management, focus and growth. With 411 socials, you do not have to worry of the first two. We will manage and focus on your business process and improvement while you worry on the growth of your business.', '0', '2022-09-04 15:09:12'),
(4, 'Music & Animation', 'Your humble beginning is unique. Tell it differently with custom music and animation services.', '0', '2022-09-04 15:09:35'),
(5, 'Video & Audio', 'Everyone’s got something to say and everyone’s got a message. So how can you be different? Let the world hear your message with 411 socials’ audio and video services.', '0', '2022-09-04 15:09:55'),
(6, 'Writing & Editorials', 'Have a way with words. Get copy, translation, ghost-writing, and editorial work from 411 socials’ seasoned writers, translators, proof-readers, and editors.', '0', '2022-09-04 15:10:25'),
(7, 'Film Adaptation', 'In today’s fast-paced world. A video is one of the best ways to get your clientele’s attention. May it be a producer, film-maker, director, or even a traditional company? You need to create an engaging brand video for your story. Every story is unique, you are unique. Tell it to the world.', '0', '2022-09-04 15:10:47');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `sub_category_id` int(5) NOT NULL,
  `duration` int(5) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `name`, `description`, `sub_category_id`, `duration`, `created_at`) VALUES
(1, 'Vlog Advertisement', 'Vlog Advertisement Description', 2, 6, '2022-08-30 14:32:41');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `id` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `category_id` int(5) NOT NULL,
  `duration` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`id`, `name`, `description`, `category_id`, `duration`, `created_at`) VALUES
(1, 'Facebook', 'Facebook Description', 1, '0000-00-00 00:00:00', '2022-08-29 18:00:36'),
(2, 'Twitter', 'Twitter Description', 1, '0000-00-00 00:00:00', '2022-08-30 14:27:58'),
(3, 'Youtube', 'Youtube Description', 1, '0000-00-00 00:00:00', '2022-09-04 14:52:42'),
(4, 'Instagram', 'Instagram Description', 1, '0000-00-00 00:00:00', '2022-09-04 14:53:01'),
(5, 'Tiktok', 'Tiktok Description', 1, '0000-00-00 00:00:00', '2022-09-04 14:53:37'),
(6, 'Website Builder', 'Website Builder Description', 2, '0000-00-00 00:00:00', '2022-09-04 15:02:24'),
(7, 'Convert Files', 'Convert Files Description', 2, '0000-00-00 00:00:00', '2022-09-04 15:02:47'),
(8, 'Support & IT', 'Support & IT Description', 2, '0000-00-00 00:00:00', '2022-09-04 15:03:14'),
(9, 'Graphic Design', 'Graphic Design Description', 2, '0000-00-00 00:00:00', '2022-09-04 15:03:37'),
(10, 'Logo', 'Logo Description', 2, '0000-00-00 00:00:00', '2022-09-04 15:03:52'),
(11, 'Art', 'Art Description', 2, '0000-00-00 00:00:00', '2022-09-04 15:04:24'),
(12, 'Illustration', 'Illustration Description', 2, '0000-00-00 00:00:00', '2022-09-04 15:04:49'),
(13, 'Placement', 'Placement Description', 3, '0000-00-00 00:00:00', '2022-09-04 15:15:58'),
(14, 'Int\'l', 'Int\'l Description', 3, '0000-00-00 00:00:00', '2022-09-04 15:18:20'),
(15, 'Placement Program', 'Placement Program Description', 3, '0000-00-00 00:00:00', '2022-09-04 15:18:35'),
(16, 'Voice Over', 'Voice Over Description', 4, '0000-00-00 00:00:00', '2022-09-04 15:19:09'),
(17, 'Animation Explainer', 'Animation Explainer Description', 4, '0000-00-00 00:00:00', '2022-09-04 15:19:31'),
(18, 'Character Animation', 'Character Animation Description', 4, '0000-00-00 00:00:00', '2022-09-04 15:21:27'),
(19, 'Short Videos', 'Short Videos Description', 5, '0000-00-00 00:00:00', '2022-09-04 15:22:06'),
(20, 'Audio Books', 'Audio Books Description', 5, '0000-00-00 00:00:00', '2022-09-04 15:22:36'),
(21, 'Audio Ads', 'Audio Ads Description', 5, '0000-00-00 00:00:00', '2022-09-04 15:23:04'),
(22, 'Audio', 'Audio Description', 5, '0000-00-00 00:00:00', '2022-09-04 15:23:23'),
(23, 'Screen Writing', 'Screen Writing Description', 6, '0000-00-00 00:00:00', '2022-09-04 15:24:00'),
(24, 'Translation', 'Translation Description', 6, '0000-00-00 00:00:00', '2022-09-04 15:24:29'),
(25, 'Screen Plays', 'Screen Plays Description', 6, '0000-00-00 00:00:00', '2022-09-04 15:25:18'),
(26, 'Reviews', 'Reviews Description', 6, '0000-00-00 00:00:00', '2022-09-04 15:26:37'),
(27, 'Film Adaptation Submission', 'Film Adaptation Submission Description', 7, '0000-00-00 00:00:00', '2022-09-04 15:28:35'),
(28, 'Imdb Entry', 'Imdb Entry Description', 7, '0000-00-00 00:00:00', '2022-09-04 15:29:39'),
(29, 'Critique', 'Critique Description', 7, '0000-00-00 00:00:00', '2022-09-04 15:30:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `business`
--
ALTER TABLE `business`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `business`
--
ALTER TABLE `business`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
