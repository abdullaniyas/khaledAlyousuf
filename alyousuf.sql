-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2016 at 04:22 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alyousuf`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE IF NOT EXISTS `about` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `ename` varchar(255) NOT NULL,
  `aname` varchar(255) NOT NULL,
  `eposition` varchar(255) NOT NULL,
  `aposition` varchar(255) NOT NULL,
  `edescription` varchar(1000) NOT NULL,
  `adescription` varchar(1000) NOT NULL,
  `email` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `deleted` varchar(100) DEFAULT 'false',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `category`, `ename`, `aname`, `eposition`, `aposition`, `edescription`, `adescription`, `email`, `image`, `deleted`, `date`) VALUES
(1, 'aboutdescr', '', '', '', '', 'Khaled Al Yousuf General Trading is trading shop situated in the heart of Ajman, which deals with stationary item''s, Car accessories, Mobile Accessories, and oil. simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '', '', '', 'false', '2015-12-29 15:02:57'),
(3, 'team1', 'Car Oil', 'Ø§Ù„Ù†ÙØ· Ø³ÙŠØ§Ø±Ø©', 'vsdvsdvs', 'vsdvsdvsv', 'Enter Descripstiosdvsdvdvsdvsdvsdvn', '', 'john.doe@gmail.com', 'banner4.jpg', 'true', '2015-12-27 06:05:41'),
(4, 'sponsor', 'Khaled Al Madani', 'Ø®Ø§Ù„Ø¯ Ù…Ø¯Ù†ÙŠ', 'Civil Defence Ajman', 'Ø¹Ø¬Ù…Ø§Ù† Ø§Ù„Ø¯ÙØ§Ø¹ Ø§Ù„Ù…Ø¯Ù†ÙŠ', '', '', '', 'sponsor.jpg', 'false', '2015-12-31 05:41:07'),
(5, 'team1', 'Musthafa', 'Ù…ØµØ·ÙÙ‰', 'Managing director', 'Ø§Ù„Ù…Ø¯ÙŠØ± Ø§Ù„Ø¹Ø§Ù…', 'Enter Description', 'Enter Description', 'musthafa@khaledalyouf.com', 'mustafa.jpg', 'false', '2015-12-27 07:11:37'),
(6, 'team2', 'Salam', 'Ø§Ù„Ø³Ù„Ø§Ù…', 'Managing Partner', 'Ø§Ù„Ø´Ø±ÙŠÙƒ Ø§Ù„Ø¥Ø¯Ø§Ø±ÙŠ', 'Enter Description', 'Enter Description', 'salam@khaledalyouf.com', 'no-image.jpg', 'false', '2015-12-27 07:12:40'),
(7, 'team3', '', '', '', '', 'Enter Description', 'Enter Description', '', 'no-image.jpg', 'false', '2015-12-27 07:14:12');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE IF NOT EXISTS `banners` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `banimage` varchar(255) NOT NULL,
  `deleted` varchar(10) NOT NULL DEFAULT 'false',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `name`, `banimage`, `deleted`, `date`) VALUES
(3, 'slider', '1.png', 'false', '2015-12-24 17:44:41'),
(4, 'slider', '2.png', 'false', '2015-12-24 17:44:33'),
(5, 'slider', '3.png', 'false', '2015-12-24 17:44:27'),
(6, 'slider', '4.png', 'false', '2015-12-24 17:44:19'),
(7, 'lubricants', 'banner4.jpg', 'false', '2015-12-24 17:45:28'),
(8, 'stationary', 'banner.jpg', 'false', '2015-12-24 17:45:43'),
(9, 'caracces', 'banner2.jpg', 'false', '2015-12-24 17:46:07'),
(10, 'mobileacces', 'banner3.jpg', 'false', '2015-12-24 17:46:24'),
(11, 'slider', 'banner2.jpg', 'true', '2015-12-24 17:59:28');

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE IF NOT EXISTS `car` (
  `id` int(11) NOT NULL,
  `ename` varchar(255) NOT NULL,
  `aname` varchar(255) NOT NULL,
  `categoryeng` varchar(255) NOT NULL,
  `showfront` varchar(255) NOT NULL,
  `edescription` varchar(1000) NOT NULL,
  `adescription` varchar(1000) NOT NULL,
  `image` varchar(255) NOT NULL,
  `deleted` varchar(255) NOT NULL DEFAULT 'false',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`id`, `ename`, `aname`, `categoryeng`, `showfront`, `edescription`, `adescription`, `image`, `deleted`, `date`) VALUES
(1, 'Car Baby Seat', 'Ø³ÙŠØ§Ø±Ø© Ù…Ù‚Ø¹Ø¯ Ø§Ù„Ø·ÙÙ„', 'seat', 'yes', 'Car Baby Seat', 'Ø³ÙŠØ§Ø±Ø© Ù…Ù‚Ø¹Ø¯ Ø§Ù„Ø·ÙÙ„', 'car-baby-seat.png', 'false', '2015-12-31 05:13:14'),
(2, 'Car LCD', 'Car LCD', 'entertainment', 'yes', 'Car LCD', 'Car LCD', 'car-lcd.png', 'false', '2015-12-31 05:18:24'),
(3, 'Car Seat', 'Ù…Ù‚Ø¹Ø¯ Ø³ÙŠØ§Ø±Ø©', 'seat', 'yes', 'Car Seat', 'Ù…Ù‚Ø¹Ø¯ Ø³ÙŠØ§Ø±Ø©', 'car-seat.png', 'false', '2015-12-31 05:15:52'),
(4, 'Car Sterio', 'Ø³ØªØ±ÙŠÙˆ Ø§Ù„Ø³ÙŠØ§Ø±Ø©', 'entertainment', 'yes', 'Car Sterio', 'Ø³ØªØ±ÙŠÙˆ Ø§Ù„Ø³ÙŠØ§Ø±Ø©', 'car-sterio.png', 'false', '2015-12-31 05:18:10'),
(5, 'Car Stickers', 'Ù…Ù„ØµÙ‚Ø§Øª Ø§Ù„Ø³ÙŠØ§Ø±Ø§Øª', 'stickers', 'yes', 'Car Stickers', 'Ù…Ù„ØµÙ‚Ø§Øª Ø§Ù„Ø³ÙŠØ§Ø±Ø§Øª', 'car-stickers.png', 'false', '2015-12-31 05:20:57'),
(6, 'Car Stickers', 'Ù…Ù„ØµÙ‚Ø§Øª Ø§Ù„Ø³ÙŠØ§Ø±Ø§Øª', 'stickers', 'yes', 'Car Stickers', 'Ù…Ù„ØµÙ‚Ø§Øª Ø§Ù„Ø³ÙŠØ§Ø±Ø§Øª', 'car-stickers2.png', 'false', '2015-12-31 05:21:18'),
(7, 'Head Lamp', 'Ø±Ø¦ÙŠØ³ Ù…ØµØ¨Ø§Ø­', 'lights', 'yes', 'Head Lamp', 'Ø±Ø¦ÙŠØ³ Ù…ØµØ¨Ø§Ø­', 'headlight.png', 'false', '2015-12-31 05:22:02'),
(8, 'Head Lamp', 'Ø±Ø¦ÙŠØ³ Ù…ØµØ¨Ø§Ø­', 'lights', 'yes', 'Head Lamp', 'Ø±Ø¦ÙŠØ³ Ù…ØµØ¨Ø§Ø­', 'headlight2.png', 'false', '2015-12-31 05:22:28'),
(9, 'LCD', 'LCD', 'entertainment', 'no', 'LCD', 'LCD', 'lcd.png', 'false', '2015-12-31 05:23:02'),
(10, 'Tyre', 'ØµÙˆØ±', 'wheels', 'yes', 'Tyre', 'ØµÙˆØ±', 'tyre.png', 'false', '2015-12-31 05:25:42'),
(11, 'Tyre', 'ØµÙˆØ±', 'wheels', 'yes', 'Tyre', 'ØµÙˆØ±', 'tyre2.png', 'false', '2015-12-31 05:26:11'),
(12, 'Wheel Cap', 'Ø¹Ø¬Ù„Ø© ÙƒØ§Ø¨', 'wheels', 'yes', 'Wheel Cap', 'Ø¹Ø¬Ù„Ø© ÙƒØ§Ø¨', 'wheel-cap.png', 'false', '2015-12-31 05:26:39'),
(13, 'Wheel Cap', 'Ø¹Ø¬Ù„Ø© ÙƒØ§Ø¨', 'wheels', 'no', 'Wheel Cap', 'Ø¹Ø¬Ù„Ø© ÙƒØ§Ø¨', 'wheel-cap2.png', 'false', '2015-12-31 05:27:01');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `descr` varchar(1000) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `contact`, `descr`, `date`) VALUES
(12, 'ververv', 'niyas@ads.com', '9876543210', 'vervewrvwerv', '2016-01-01 15:19:26'),
(13, 'dsdvv', 'evrvervve@hdbc.com', '987654345', 'svfvv', '2016-01-01 15:19:43');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `deleted` varchar(255) NOT NULL DEFAULT 'false',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `name`, `image`, `deleted`, `date`) VALUES
(1, 'one', 'IMG-20151215-WA0000.jpg', 'false', '2016-01-01 13:39:14'),
(2, 'two', 'IMG-20151215-WA0001.jpg', 'false', '2016-01-01 13:45:48'),
(3, '12w', 'IMG-20151215-WA0002.jpg', 'false', '2016-01-01 13:45:58'),
(4, '43424', 'IMG-20151215-WA0003.jpg', 'false', '2016-01-01 13:46:07'),
(5, '2r24', 'IMG-20151215-WA0007.jpg', 'false', '2016-01-01 13:46:14'),
(6, 'fvfd', 'IMG-20151215-WA0008.jpg', 'false', '2016-01-01 13:46:20');

-- --------------------------------------------------------

--
-- Table structure for table `lubricants`
--

CREATE TABLE IF NOT EXISTS `lubricants` (
  `id` int(11) NOT NULL,
  `ename` varchar(500) NOT NULL,
  `aname` varchar(500) NOT NULL,
  `categoryeng` varchar(255) NOT NULL,
  `showfront` varchar(255) NOT NULL,
  `edescription` varchar(1000) NOT NULL,
  `adescription` varchar(1000) NOT NULL,
  `image` varchar(500) NOT NULL,
  `deleted` varchar(255) NOT NULL DEFAULT 'false',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lubricants`
--

INSERT INTO `lubricants` (`id`, `ename`, `aname`, `categoryeng`, `showfront`, `edescription`, `adescription`, `image`, `deleted`, `date`) VALUES
(15, 'ATF Dexron II & III', 'ATF Dexron II & III', 'petrol', 'yes', '', '', 'ATF-DEXRON.png', 'false', '2015-12-29 10:46:07'),
(16, 'Automotive Gear Oil', 'Automotive Gear Oil', 'gear', '', '', '', 'AUTOMOTIVE-GEAR-OIL.png', 'false', '2015-12-24 12:21:43'),
(17, 'Brake Fluid', 'Brake Fluid', 'gear', 'yes', '', '', 'brealflus.png', 'false', '2015-12-29 10:45:58'),
(18, 'Premium Desil Engine Oil', 'Premium Desil Engine Oil', 'diesel', '', '', '', 'desilengion.png', 'false', '2015-12-24 12:21:33'),
(19, 'Grease Calcium & Lithium', 'Grease Calcium & Lithium', 'grease', 'yes', '', '', 'grease.png', 'false', '2015-12-29 10:46:20'),
(20, 'Hydraulic Oil AW', 'Hydraulic Oil AW', 'engine', 'yes', '', '', 'HYDRAULIC-OIL.png', 'false', '2015-12-29 10:45:47'),
(21, 'Industrial Gear Oil', 'Industrial Gear Oil', 'gear', 'yes', '', '', 'INDUSTRIALGEAROIL.png', 'false', '2015-12-29 10:45:28'),
(22, 'Marine Engine Oil', 'Marine Engine Oil', 'engine', 'yes', '', '', 'MARINEENGINEOIL.png', 'false', '2015-12-29 10:45:20'),
(23, 'Supreme Petrol Engine Oil', 'Supreme Petrol Engine Oil', '', '', '', '', 'petrolengn.png', 'true', '2015-12-24 15:58:25'),
(24, 'Car Oil', 'Ø§Ù„Ù†ÙØ· Ø³ÙŠØ§Ø±Ø©', 'engine', '', '', '', '', 'true', '2015-12-24 12:15:00'),
(25, 'Car Oil', 'Ø§Ù„Ù†ÙØ· Ø³ÙŠØ§Ø±Ø©', '', '', '', '', '', 'true', '2015-12-24 07:39:06'),
(26, 'ATF DEXRON', 'Ø§Ù„Ù†ÙØ· Ø³ÙŠØ§Ø±Ø©', '', '', '', '', '', 'true', '2015-12-22 17:25:03'),
(27, 'ATF DEXRON', 'ATF DEXRON', '', '', '', '', 'banner2.jpg', 'true', '2015-12-24 07:39:08'),
(28, 'Car Oil', 'Ø§Ù„Ù†ÙØ· Ø³ÙŠØ§Ø±Ø©', '', '', '', '', 'cars2.jpg', 'true', '2015-12-24 07:39:01'),
(29, '', '', '', '', '', '', '', 'true', '2015-12-24 07:38:59'),
(30, '', '', '', '', '', '', '', 'true', '2015-12-24 07:38:58'),
(31, '', '', '', '', '', '', '', 'true', '2015-12-24 07:38:56'),
(32, 'Car Oil', 'Ø§Ù„Ù†ÙØ· Ø³ÙŠØ§Ø±Ø©', '', '', '', '', '', 'true', '2015-12-24 07:38:54'),
(33, 'Car Oil', 'Ø§Ù„Ù†ÙØ· Ø³ÙŠØ§Ø±Ø©', '', '', '', '', 'day-7-2.jpg', 'true', '2015-12-24 11:51:05'),
(34, 'Car Oil', 'Ø§Ù„Ù†ÙØ· Ø³ÙŠØ§Ø±Ø©', '', '', '', '', 'banner2.jpg', 'true', '2015-12-24 15:58:27'),
(35, 'Bread', 'Ø§Ù„Ù†ÙØ· Ø³ÙŠØ§Ø±Ø©', '', '', '', '', 'cars2.jpg', 'true', '2015-12-24 15:58:24'),
(36, 'Supreme Petrol Engine Oil', 'Supreme Petrol Engine Oil', 'petrol', 'yes', 'Supreme Petrol Engine Oil', 'Supreme Petrol Engine Oil', 'petrolengn.png', 'false', '2015-12-29 10:32:54'),
(37, 'niyas', 'Ø§Ù„Ù†ÙØ· Ø³ÙŠØ§Ø±Ø©', 'Petrol', 'yes', 'niyas', 'niyas', 'ATF-DEXRON.png', 'true', '2015-12-29 10:40:20'),
(38, 'Car Oilegrger', 'gerggØ§Ù„Ù†ÙØ· Ø³ÙŠØ§Ø±Ø©', 'diesel', 'yes', 'scalergeg', 'scalergerg', 'ATF-DEXRON.png', 'true', '2015-12-31 04:02:15');

-- --------------------------------------------------------

--
-- Table structure for table `mobile`
--

CREATE TABLE IF NOT EXISTS `mobile` (
  `id` int(11) NOT NULL,
  `ename` varchar(255) NOT NULL,
  `aname` varchar(255) NOT NULL,
  `categoryeng` varchar(255) NOT NULL,
  `showfront` varchar(255) NOT NULL,
  `edescription` varchar(1000) NOT NULL,
  `adescription` varchar(1000) NOT NULL,
  `image` varchar(255) NOT NULL,
  `deleted` varchar(255) NOT NULL DEFAULT 'false',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobile`
--

INSERT INTO `mobile` (`id`, `ename`, `aname`, `categoryeng`, `showfront`, `edescription`, `adescription`, `image`, `deleted`, `date`) VALUES
(1, 'JBL Ear Phones', ' Ø³Ù…Ø§Ø¹Ø§Øª Ù„Ù„Ø£Ø°Ù†', 'earphones', 'yes', 'JBL Ear Phones', ' Ø³Ù…Ø§Ø¹Ø§Øª Ù„Ù„Ø£Ø°Ù†', 'ear-phones.png', 'false', '2015-12-31 04:33:24'),
(2, 'Sony Ear Phones', 'Ø³ÙˆÙ†ÙŠ Ø³Ù…Ø§Ø¹Ø§Øª Ù„Ù„Ø£Ø°Ù†', 'earphones', 'yes', 'Sony Ear Phones', 'Ø³ÙˆÙ†ÙŠ Ø³Ù…Ø§Ø¹Ø§Øª Ù„Ù„Ø£Ø°Ù†', 'ear-phones2.png', 'false', '2015-12-31 04:38:15'),
(3, 'Sennheiser Headset', 'Ø³Ù†Ù‡ÙŠØ³Ø± Ø³Ù…Ø§Ø¹Ø©', 'earphones', 'yes', 'Sennheiser Headset', 'Ø³Ù†Ù‡ÙŠØ³Ø± Ø³Ù…Ø§Ø¹Ø©', 'headset.png', 'false', '2015-12-31 04:39:20'),
(4, 'Headset', 'Ø³Ù…Ø§Ø¹Ø©', 'earphones', 'no', 'Headset', 'Ø³Ù…Ø§Ø¹Ø©', 'headset2.png', 'false', '2015-12-31 04:39:55'),
(5, 'iPhone 6Plus', 'Ø£ÙƒØ«Ø± ÙÙˆÙ† 6', 'mobile', 'yes', 'iPhone 6Plus', '6 Ø£ÙƒØ«Ø± ÙÙˆÙ†', 'iphone-6plus.png', 'false', '2015-12-31 04:41:16'),
(6, ' iPhone 6 s', 'Ø§ÙŠ ÙÙˆÙ† 6 Ù‚', 'mobile', 'yes', ' iPhone 6 s', 'Ø§ÙŠ ÙÙˆÙ† 6 Ù‚', 'iphone-6s.png', 'false', '2015-12-31 04:42:16'),
(7, 'Mobile Pouch', 'Ø§Ù„Ù…Ø­Ù…ÙˆÙ„ Ø§Ù„Ø­Ù‚ÙŠØ¨Ø©', 'mobilepouch', 'no', 'Mobile Pouch', 'Ø§Ù„Ù…Ø­Ù…ÙˆÙ„ Ø§Ù„Ø­Ù‚ÙŠØ¨Ø©', 'mobile-pouch.png', 'false', '2015-12-31 04:43:38'),
(8, 'Mobile Pouch', 'Ø§Ù„Ù…Ø­Ù…ÙˆÙ„ Ø§Ù„Ø­Ù‚ÙŠØ¨Ø©', 'mobilepouch', 'yes', 'Mobile Pouch', 'Ø§Ù„Ù…Ø­Ù…ÙˆÙ„ Ø§Ù„Ø­Ù‚ÙŠØ¨Ø©', 'mobile-pouch2.png', 'false', '2015-12-31 04:44:03'),
(9, 'Mobile Stand', 'Ø­Ø§Ù…Ù„ Ø§Ù„Ø¬ÙˆØ§Ù„', 'mobilestand', 'yes', 'Mobile Stand', 'Ø­Ø§Ù…Ù„ Ø§Ù„Ø¬ÙˆØ§Ù„', 'mobile-stand.png', 'false', '2015-12-31 04:44:52'),
(10, 'Mobile Stand', 'Ø­Ø§Ù…Ù„ Ø§Ù„Ø¬ÙˆØ§Ù„', 'mobilestand', 'yes', 'Mobile Stand', 'Ø­Ø§Ù…Ù„ Ø§Ù„Ø¬ÙˆØ§Ù„', 'mobile-stand2.png', 'false', '2015-12-31 04:45:18'),
(11, 'Selfie Stick', 'Selfie Stick', 'selfiestick', 'no', 'Selfie Stick', 'Enter Description', 'selfie-stick.png', 'false', '2015-12-31 04:46:30'),
(12, 'Selfie Stick', 'Selfie Stick', 'selfiestick', 'yes', 'Selfie Stick', 'Selfie Stick', 'selfie-stick2.png', 'false', '2015-12-31 04:47:05');

-- --------------------------------------------------------

--
-- Table structure for table `stationary`
--

CREATE TABLE IF NOT EXISTS `stationary` (
  `id` int(11) NOT NULL,
  `ename` varchar(500) NOT NULL,
  `aname` varchar(500) NOT NULL,
  `categoryeng` varchar(500) NOT NULL,
  `showfront` varchar(500) NOT NULL,
  `edescription` varchar(1000) NOT NULL,
  `adescription` varchar(1000) NOT NULL,
  `image` varchar(500) NOT NULL,
  `deleted` varchar(50) NOT NULL DEFAULT 'false',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stationary`
--

INSERT INTO `stationary` (`id`, `ename`, `aname`, `categoryeng`, `showfront`, `edescription`, `adescription`, `image`, `deleted`, `date`) VALUES
(1, 'Book', 'ÙƒØªØ§Ø¨', 'book', 'yes', 'Book', 'ÙƒØªØ§Ø¨', 'book.png', 'false', '2015-12-30 06:41:02'),
(2, 'Color Pencil', 'Ù‚Ù„Ù… Ù…Ù„ÙˆÙ†', 'pen', 'yes', 'Color Pencil', 'Ù‚Ù„Ù… Ù…Ù„ÙˆÙ†', 'color-pencil.png', 'false', '2015-12-30 06:42:01'),
(3, 'Color Pencil', 'Ù‚Ù„Ù… Ù…Ù„ÙˆÙ†', 'pen', 'yes', 'Color Pencil', 'Ù‚Ù„Ù… Ù…Ù„ÙˆÙ†', 'color-pencil2.png', 'false', '2015-12-30 06:41:23'),
(4, 'Crayola Crayons', 'ÙƒØ±Ø§ÙŠÙˆÙ„Ø§ Ø§Ù„Ø·Ø¨Ø§Ø´ÙŠØ±', 'pen', 'yes', 'Crayola Crayons', 'ÙƒØ±Ø§ÙŠÙˆÙ„Ø§ Ø§Ù„Ø·Ø¨Ø§Ø´ÙŠØ±', 'crayons.png', 'false', '2015-12-31 03:34:43'),
(5, 'Faber Castle Eraser', 'ÙØ§Ø¨Ø± Ø§Ù„Ù‚Ù„Ø¹Ø© Ù…Ù…Ø­Ø§Ø©', 'eraser', 'no', 'Faber Castle Eraser', 'ÙØ§Ø¨Ø± Ø§Ù„Ù‚Ù„Ø¹Ø© Ù…Ù…Ø­Ø§Ø©', 'eraser.png', 'false', '2015-12-31 03:35:34'),
(6, 'Eraser', 'Ù…Ù…Ø­Ø§Ø©', 'eraser', 'yes', 'Eraser', 'Ù…Ù…Ø­Ø§Ø©', 'eraser2.png', 'false', '2015-12-31 03:36:15'),
(7, 'Parker Pen', 'Ø¨Ø§Ø±ÙƒØ± Ø§Ù„Ù‚Ù„Ù…', 'pen', 'yes', 'Parker Fountain Ink Pen', 'Ø¨Ø§Ø±ÙƒØ± Ù†Ø§ÙÙˆØ±Ø© Ø­Ø¨Ø± Ø§Ù„Ù‚Ù„Ù…', 'pen.png', 'false', '2015-12-31 03:37:33'),
(8, 'Ball Point Pen', 'Ø§Ù„ÙƒØ±Ø© Ù†Ù‚Ø·Ø© Ø§Ù„Ù‚Ù„Ù…', 'pen', 'yes', 'Ball Point Pen', 'Ø§Ù„ÙƒØ±Ø© Ù†Ù‚Ø·Ø© Ø§Ù„Ù‚Ù„Ù…', 'pen2.png', 'false', '2015-12-31 03:38:15'),
(9, 'Sharpener', 'Ù…Ø¨Ø±Ø§Ø©', 'sharpner', 'no', 'Pencil Sharpener', 'Ø§Ù„Ø¨Ø±Ø§ÙŠØ©', 'sharpner.png', 'false', '2015-12-31 03:41:44'),
(10, 'Sharpener', 'Ù…Ø¨Ø±Ø§Ø©', 'sharpner', 'yes', 'Pencil Sharpener', 'Ø§Ù„Ø¨Ø±Ø§ÙŠØ©', 'sharpner2.png', 'false', '2015-12-31 03:42:28'),
(11, 'Sharpener', 'Ù…Ø¨Ø±Ø§Ø©', 'sharpner', 'yes', 'Pencil Sharpener', 'Ø§Ù„Ø¨Ø±Ø§ÙŠØ©', 'sharpner3.png', 'false', '2015-12-31 03:43:12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `code` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `code`) VALUES
(1, 'niyas', '502bdd090083d2cab14b41699bfb60bd', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lubricants`
--
ALTER TABLE `lubricants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobile`
--
ALTER TABLE `mobile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stationary`
--
ALTER TABLE `stationary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `lubricants`
--
ALTER TABLE `lubricants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `mobile`
--
ALTER TABLE `mobile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `stationary`
--
ALTER TABLE `stationary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
