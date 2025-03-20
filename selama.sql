-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 20, 2025 at 10:06 PM
-- Server version: 8.3.0
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `selama`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

DROP TABLE IF EXISTS `bookings`;
CREATE TABLE IF NOT EXISTS `bookings` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `booking_date` date NOT NULL,
  `timeslot_id` int NOT NULL,
  `people_booked` int DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int DEFAULT '1',
  `reason` text COLLATE utf8mb4_general_ci,
  PRIMARY KEY (`id`),
  KEY `timeslot_id` (`timeslot_id`)
) ENGINE=MyISAM AUTO_INCREMENT=65 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `user_id`, `booking_date`, `timeslot_id`, `people_booked`, `created_at`, `status`, `reason`) VALUES
(62, 3, '2025-02-27', 1, 3, '2025-03-16 06:19:22', 0, 'invalid payment'),
(64, 3, '2025-03-11', 1, 1, '2025-03-18 20:35:06', 0, 'invalid payment');

-- --------------------------------------------------------

--
-- Table structure for table `booking_details`
--

DROP TABLE IF EXISTS `booking_details`;
CREATE TABLE IF NOT EXISTS `booking_details` (
  `id` int NOT NULL AUTO_INCREMENT,
  `booking_id` int NOT NULL,
  `name` text COLLATE utf8mb4_general_ci NOT NULL,
  `ic` text COLLATE utf8mb4_general_ci NOT NULL,
  `phone` text COLLATE utf8mb4_general_ci NOT NULL,
  `address` text COLLATE utf8mb4_general_ci NOT NULL,
  `email` text COLLATE utf8mb4_general_ci NOT NULL,
  `file` text COLLATE utf8mb4_general_ci,
  `status` int DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=76 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking_details`
--

INSERT INTO `booking_details` (`id`, `booking_id`, `name`, `ic`, `phone`, `address`, `email`, `file`, `status`, `created_at`) VALUES
(75, 64, 'asd', 'asd', 'asd', 'asd', 'asdasd@gmail.com', 'final_cleaned_logo.png', 0, '2025-03-18 20:35:06'),
(74, 62, 'asd2', 'asdd', 'asdd', 'asd', 'asdasd@gmail.com', 'cleaned_logo.png', 0, '2025-03-16 06:19:22'),
(73, 62, 'asd1', 'asd', 'asd', 'asd', 'asdasd@gmail.com', 'final_cleaned_logo.png', 0, '2025-03-16 06:19:22');

-- --------------------------------------------------------

--
-- Table structure for table `booking_timeslots`
--

DROP TABLE IF EXISTS `booking_timeslots`;
CREATE TABLE IF NOT EXISTS `booking_timeslots` (
  `id` int NOT NULL AUTO_INCREMENT,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking_timeslots`
--

INSERT INTO `booking_timeslots` (`id`, `start_time`, `end_time`) VALUES
(1, '08:00:00', '12:00:00'),
(2, '14:00:00', '18:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `role` int NOT NULL,
  `image` text COLLATE utf8mb4_general_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`, `image`, `created_at`) VALUES
(4, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 1, NULL, '2025-03-18 21:26:54'),
(3, 'asdasd', 'asdasd@gmail.com', 'a8f5f167f44f4964e6c998dee827110c', 3, NULL, '2025-03-14 23:20:06'),
(5, 'guide', 'guide@gmail.com', '5a764d2ed111e518b94592517efbc3cf', 2, NULL, '2025-03-20 19:03:38'),
(7, 'guide2', 'guide2@gmail.com', 'e7e8de62a6470356b5126d28ff4a730a', 2, NULL, '2025-03-20 21:11:38');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

DROP TABLE IF EXISTS `user_details`;
CREATE TABLE IF NOT EXISTS `user_details` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `ic` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `image` text COLLATE utf8mb4_general_ci,
  `passport` text COLLATE utf8mb4_general_ci,
  `phone` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `address` text COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `user_id`, `name`, `ic`, `image`, `passport`, `phone`, `address`) VALUES
(1, 1, 'test', 'test', NULL, NULL, 'test', 'test'),
(2, 5, '', '123123', NULL, NULL, '123123', 'guide'),
(4, 7, 'guide2', '123123', NULL, NULL, '123123', '123123');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

DROP TABLE IF EXISTS `user_role`;
CREATE TABLE IF NOT EXISTS `user_role` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'guide'),
(3, 'user');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
