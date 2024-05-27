-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2024 at 12:54 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datawork`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `mobile` bigint(14) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` varchar(150) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `role` int(1) NOT NULL,
  `status` int(1) NOT NULL,
  `votes` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `mobile`, `password`, `address`, `photo`, `role`, `status`, `votes`) VALUES
(54, 'king', 3498966202, 'king123', 'king@gmail.com', '2016-10-24-nissan-skyline-r34-toyota.jpg', 2, 1, 13),
(55, 'Muzammil Asghar', 123, '123', 'muzammil@gmail.com', 'lofi-smoking-girl-4k-nl-1440x900.jpg', 2, 0, 1),
(56, 'ali', 123321, 'ali123', 'ali@gmail.coom', 'couple_starry_sky_art_123338_1440x900.jpg', 1, 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
