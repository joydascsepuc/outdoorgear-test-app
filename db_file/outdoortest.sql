-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2022 at 11:00 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `outdoortest`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `header` varchar(255) DEFAULT NULL,
  `banner_text` varchar(255) DEFAULT NULL,
  `banner_img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `header`, `banner_text`, `banner_img`) VALUES
(2, 'Banner One', 'Banner One text', 'IMG_1655573544_slider-3.jpg'),
(4, 'Banner 2', 'banner 2 text', 'IMG_1655577277_slider-2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `body`
--

CREATE TABLE `body` (
  `id` int(11) NOT NULL,
  `nav_img` varchar(255) DEFAULT NULL,
  `about_us` text DEFAULT NULL,
  `customer_support` text DEFAULT NULL,
  `hot_line` varchar(255) DEFAULT NULL,
  `e_mail` varchar(255) DEFAULT NULL,
  `whatsapp` varchar(255) DEFAULT NULL,
  `facebook_link` varchar(255) DEFAULT NULL,
  `insta_link` varchar(255) DEFAULT NULL,
  `linked_link` varchar(255) DEFAULT NULL,
  `footer_copyright` varchar(255) DEFAULT NULL,
  `body_text` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `body`
--

INSERT INTO `body` (`id`, `nav_img`, `about_us`, `customer_support`, `hot_line`, `e_mail`, `whatsapp`, `facebook_link`, `insta_link`, `linked_link`, `footer_copyright`, `body_text`) VALUES
(1, 'IMG_1655582898_IMG_1655575957_nav-img.png', 'OutdoorGears is an UAE based company Established in 2019 and has presence in India, Saudi Arabia, Oman, and East Africa. We are specialized in Adventure, sports and travel products.We are excited to make your journey a true success. There are different types of people but not everyone dares to choose challenges & differences in the World. Do you think if you are one of them then stop thinking start and chasing?', 'OutdoorGears suppport team is hard working 24/7 for our customers.We give high priority to troubleshoot and sort out all the complaints and issue of ourcustomers. We will provide entire support till your face smiles.', '97142652524', 'seller@outdoorgears.ae', '971505688382', 'https://facebook.com', 'https://instagram.com', 'https://linkedin.com', '© 2021 | Family Outdoor Camping Requisites Trading LLC | All Rights Reserved.', '<p>body text</p>\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `body`
--
ALTER TABLE `body`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `body`
--
ALTER TABLE `body`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
