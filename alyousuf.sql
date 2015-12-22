-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2015 at 06:54 PM
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
-- Table structure for table `lubricants`
--

CREATE TABLE IF NOT EXISTS `lubricants` (
  `id` int(11) NOT NULL,
  `ename` varchar(500) NOT NULL,
  `aname` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL,
  `deleted` varchar(255) NOT NULL DEFAULT 'false',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lubricants`
--

INSERT INTO `lubricants` (`id`, `ename`, `aname`, `image`, `deleted`, `date`) VALUES
(15, 'ATF Dexron II & III', 'ATF Dexron II & III', 'ATF-DEXRON.png', 'false', '2015-12-22 13:30:33'),
(16, 'Automotive Gear Oil', 'Automotive Gear Oil', 'AUTOMOTIVE-GEAR-OIL.png', 'false', '2015-12-22 13:31:52'),
(17, 'Brake Fluid', 'Brake Fluid', 'brealflus.png', 'false', '2015-12-22 13:32:05'),
(18, 'Premium Desil Engine Oil', 'Premium Desil Engine Oil', 'desilengion.png', 'false', '2015-12-22 13:32:23'),
(19, 'Grease Calcium & Lithium', 'Grease Calcium & Lithium', 'grease.png', 'false', '2015-12-22 13:33:36'),
(20, 'Hydraulic Oil AW', 'Hydraulic Oil AW', 'HYDRAULIC-OIL.png', 'false', '2015-12-22 13:33:58'),
(21, 'Industrial Gear Oil', 'Industrial Gear Oil', 'INDUSTRIALGEAROIL.png', 'false', '2015-12-22 13:34:32'),
(22, 'Marine Engine Oil', 'Marine Engine Oil', 'MARINEENGINEOIL.png', 'false', '2015-12-22 13:34:49'),
(23, 'Supreme Petrol Engine Oil', 'Supreme Petrol Engine Oil', 'petrolengn.png', 'false', '2015-12-22 13:35:08'),
(24, 'Car Oil', 'Ø§Ù„Ù†ÙØ· Ø³ÙŠØ§Ø±Ø©', '', 'true', '2015-12-22 15:03:20'),
(25, 'Car Oil', 'Ø§Ù„Ù†ÙØ· Ø³ÙŠØ§Ø±Ø©', '', 'false', '2015-12-22 17:20:05'),
(26, 'ATF DEXRON', 'Ø§Ù„Ù†ÙØ· Ø³ÙŠØ§Ø±Ø©', '', 'true', '2015-12-22 17:25:03'),
(27, 'ATF DEXRON', 'ATF DEXRON', 'banner2.jpg', 'false', '2015-12-22 17:24:58');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `code` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `code`) VALUES
(1, 'niyas', '502bdd090083d2cab14b41699bfb60bd', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lubricants`
--
ALTER TABLE `lubricants`
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
-- AUTO_INCREMENT for table `lubricants`
--
ALTER TABLE `lubricants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
