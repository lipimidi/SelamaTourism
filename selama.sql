-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 04, 2025 at 08:17 PM
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
-- Table structure for table `blog`
--

DROP TABLE IF EXISTS `blog`;
CREATE TABLE IF NOT EXISTS `blog` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8mb4_general_ci,
  `content` text COLLATE utf8mb4_general_ci,
  `main_pic` text COLLATE utf8mb4_general_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `content`, `main_pic`, `created_at`, `updated_at`) VALUES
(11, '&lt;p&gt;\r\n            &lt;/p&gt;&lt;h1 class=&quot;text-gradient text-primary mb-0&quot;&gt;Title&lt;/h1&gt;&lt;p&gt;\r\n            &lt;/p&gt;&lt;h1 class=&quot;mb-4&quot;&gt;Subtitle&lt;/h1&gt;&lt;p&gt;\r\n        &lt;/p&gt;', '&lt;p&gt;\r\n             &lt;/p&gt;&lt;h3 class=&quot;title mb-4&quot;&gt;Create a design system that can be used in any product available&lt;/h3&gt;&lt;p&gt;\r\n            &lt;/p&gt;&lt;p class=&quot;text-dark&quot;&gt;\r\n                This is the paragraph where you can write more details about your product. Keep your user engaged by providing meaningful information. Remember that by this time, the user is curious, otherwise, they wouldn&#039;t scroll to get here. Add a button if you want the user to see more. We are here to make life better.\r\n                \r\n                And now I look and look around and there are so many Kanyes I&#039;ve been trying to figure out the bed design for the master bedroom at our Hidden Hills compound... and thank you for turning my personal jean jacket into a couture piece.\r\n                \r\n                The way to survive in modern society is to be an ascetic. It is to retreat from society. There&#039;s too much society everywhere you go…The only solution is to turn it off.\r\n            &lt;/p&gt;&lt;p&gt;\r\n        &lt;/p&gt;', 'images.png', '2025-05-06 10:16:07', '2025-05-06 10:39:13'),
(12, '&lt;p&gt;\r\n            &lt;/p&gt;&lt;h1 class=&quot;text-gradient text-primary mb-0&quot;&gt;Title&lt;/h1&gt;&lt;p&gt;\r\n            &lt;/p&gt;&lt;h1 class=&quot;mb-4&quot;&gt;Subtitle&lt;/h1&gt;&lt;p&gt;\r\n        &lt;/p&gt;', '&lt;p&gt;\r\n             &lt;/p&gt;&lt;h3 class=&quot;title mb-4&quot;&gt;Create a design system that can be used in any product available&lt;/h3&gt;&lt;p&gt;\r\n            &lt;/p&gt;&lt;p class=&quot;text-dark&quot;&gt;\r\n                This is the paragraph where you can write more details about your product. Keep your user engaged by providing meaningful information. Remember that by this time, the user is curious, otherwise, they wouldn&#039;t scroll to get here. Add a button if you want the user to see more. We are here to make life better.\r\n                \r\n                And now I look and look around and there are so many Kanyes I&#039;ve been trying to figure out the bed design for the master bedroom at our Hidden Hills compound... and thank you for turning my personal jean jacket into a couture piece.\r\n                \r\n                The way to survive in modern society is to be an ascetic. It is to retreat from society. There&#039;s too much society everywhere you go…The only solution is to turn it off.\r\n            &lt;/p&gt;&lt;p&gt;\r\n        &lt;/p&gt;', 'images.png', '2025-05-06 10:16:07', '2025-05-06 10:39:13'),
(13, '&lt;p&gt;\r\n            &lt;/p&gt;&lt;h1 class=&quot;text-gradient text-primary mb-0&quot;&gt;Title&lt;/h1&gt;&lt;p&gt;\r\n            &lt;/p&gt;&lt;h1 class=&quot;mb-4&quot;&gt;Subtitle&lt;/h1&gt;&lt;p&gt;\r\n        &lt;/p&gt;', '&lt;p&gt;\r\n             &lt;/p&gt;&lt;h3 class=&quot;title mb-4&quot;&gt;Create a design system that can be used in any product available&lt;/h3&gt;&lt;p&gt;\r\n            &lt;/p&gt;&lt;p class=&quot;text-dark&quot;&gt;\r\n                This is the paragraph where you can write more details about your product. Keep your user engaged by providing meaningful information. Remember that by this time, the user is curious, otherwise, they wouldn&#039;t scroll to get here. Add a button if you want the user to see more. We are here to make life better.\r\n                \r\n                And now I look and look around and there are so many Kanyes I&#039;ve been trying to figure out the bed design for the master bedroom at our Hidden Hills compound... and thank you for turning my personal jean jacket into a couture piece.\r\n                \r\n                The way to survive in modern society is to be an ascetic. It is to retreat from society. There&#039;s too much society everywhere you go…The only solution is to turn it off.\r\n            &lt;/p&gt;&lt;p&gt;\r\n        &lt;/p&gt;', 'images.png', '2025-05-06 10:16:07', '2025-05-06 10:39:13');

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
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `user_id`, `booking_date`, `timeslot_id`, `people_booked`, `created_at`, `status`, `reason`) VALUES
(68, 3, '2025-06-03', 1, 1, '2025-06-01 20:32:20', 2, NULL),
(71, 3, '2025-06-04', 1, 4, '2025-06-02 05:26:23', 1, NULL),
(72, 10, '2025-06-04', 1, 1, '2025-06-02 05:29:09', 2, NULL);

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
  `status` int DEFAULT '2',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `booking_id` (`booking_id`)
) ENGINE=InnoDB AUTO_INCREMENT=90 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking_details`
--

INSERT INTO `booking_details` (`id`, `booking_id`, `name`, `ic`, `phone`, `address`, `email`, `file`, `status`, `created_at`) VALUES
(80, 68, 'asdasda3', 'asd', '12312', 'asdd', 'asdasd@gmail.com', 'ETS_Intercity - Ticket.pdf', 2, '2025-06-01 20:32:20'),
(85, 71, 'asdasda3', '123', '12312', 'asdd', 'asdasd@gmail.com', 'ETS_Intercity - Ticket.pdf', 2, '2025-06-02 05:26:23'),
(86, 71, '123', '123', 'asd', 'asd', 'sad@gmail.com', 'ETS_Intercity - Ticket.pdf', 2, '2025-06-02 05:26:23'),
(87, 71, '123', '123', '312', '123', 'sad@gmail.com', 'ETS_Intercity - Ticket.pdf', 2, '2025-06-02 05:26:23'),
(88, 71, '123', '213', '123', 'asd', 'sad@gmail.com', 'ETS_Intercity - Ticket.pdf', 2, '2025-06-02 05:26:23'),
(89, 72, 'asd', 'sadasd', 'asd', 'asd', 'asdasd2@gmail.com', 'ETS_Intercity - Ticket.pdf', 2, '2025-06-02 05:29:09');

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking_timeslots`
--

INSERT INTO `booking_timeslots` (`id`, `start_time`, `end_time`) VALUES
(1, '08:00:00', '12:00:00'),
(2, '14:00:00', '18:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `guides`
--

DROP TABLE IF EXISTS `guides`;
CREATE TABLE IF NOT EXISTS `guides` (
  `id` int NOT NULL AUTO_INCREMENT,
  `date` date DEFAULT NULL,
  `timeslot_id` int DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `guide_lat` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `guide_long` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `guides`
--

INSERT INTO `guides` (`id`, `date`, `timeslot_id`, `user_id`, `guide_lat`, `guide_long`, `created_at`, `status`) VALUES
(27, '2025-06-03', 1, 5, NULL, NULL, '2025-06-02 02:26:18', 1),
(28, '2025-06-04', 1, NULL, '3.3626622', '101.4232721', '2025-06-02 05:26:31', 0);

-- --------------------------------------------------------

--
-- Table structure for table `guide_details`
--

DROP TABLE IF EXISTS `guide_details`;
CREATE TABLE IF NOT EXISTS `guide_details` (
  `id` int NOT NULL AUTO_INCREMENT,
  `guide_id` int DEFAULT NULL,
  `booking_id` int NOT NULL,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ic` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `phone` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `file` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `status` int DEFAULT '0',
  `_lat` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `_long` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `booking_id` (`booking_id`)
) ENGINE=InnoDB AUTO_INCREMENT=133 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `guide_details`
--

INSERT INTO `guide_details` (`id`, `guide_id`, `booking_id`, `name`, `ic`, `phone`, `address`, `email`, `file`, `status`, `_lat`, `_long`, `created_at`) VALUES
(94, 27, 68, 'asdasda3', 'asd', '12312', 'asdd', 'asdasd@gmail.com', 'ETS_Intercity - Ticket.pdf', 0, NULL, NULL, '2025-06-02 02:26:18'),
(95, 28, 71, 'asdasda3', '123', '12312', 'asdd', 'asdasd@gmail.com', 'ETS_Intercity - Ticket.pdf', 0, '3.3619968', '101.4235136', '2025-06-02 05:26:31'),
(96, 28, 71, '123', '123', 'asd', 'asd', 'sad@gmail.com', 'ETS_Intercity - Ticket.pdf', 0, '3.3619968', '101.4235136', '2025-06-02 05:26:31'),
(97, 28, 71, '123', '123', '312', '123', 'sad@gmail.com', 'ETS_Intercity - Ticket.pdf', 0, '3.3619968', '101.4235136', '2025-06-02 05:26:31'),
(98, 28, 71, '123', '213', '123', 'asd', 'sad@gmail.com', 'ETS_Intercity - Ticket.pdf', 0, '3.3619968', '101.4235136', '2025-06-02 05:26:31'),
(99, 28, 72, 'asd', 'sadasd', 'asd', 'asd', 'asdasd2@gmail.com', 'ETS_Intercity - Ticket.pdf', 0, NULL, NULL, '2025-06-02 05:29:37');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

DROP TABLE IF EXISTS `log`;
CREATE TABLE IF NOT EXISTS `log` (
  `id` int NOT NULL AUTO_INCREMENT,
  `action` text COLLATE utf8mb4_general_ci,
  `user_id` int DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `page_views`
--

DROP TABLE IF EXISTS `page_views`;
CREATE TABLE IF NOT EXISTS `page_views` (
  `id` int NOT NULL AUTO_INCREMENT,
  `page_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `view_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `view_count` int DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_page_date` (`page_name`,`view_date`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `page_views`
--

INSERT INTO `page_views` (`id`, `page_name`, `view_date`, `view_count`) VALUES
(2, 'index', '2025-06-04 19:36:08', 13),
(3, 'blog/list', '2025-05-29 17:35:13', 2),
(4, 'blog/11', '2025-05-29 17:34:56', 2),
(5, 'contactus', '2025-05-29 17:35:40', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `expires_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

DROP TABLE IF EXISTS `review`;
CREATE TABLE IF NOT EXISTS `review` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `content` int NOT NULL,
  `star` int NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  PRIMARY KEY (`id`),
  KEY `role` (`role`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`, `image`, `created_at`) VALUES
(3, 'asdasd', 'asdasd@gmail.com', '$2y$10$x7Ae41BrLWr0mptjm./jgeySBlMcOwaXLZ3u5d9G4riovcW7sN6Oa', 3, NULL, '2025-03-14 23:20:06'),
(4, 'admin', 'admin@gmail.com', '$2y$10$x7Ae41BrLWr0mptjm./jgeySBlMcOwaXLZ3u5d9G4riovcW7sN6Oa', 1, NULL, '2025-03-18 21:26:54'),
(5, 'guide', 'guide@gmail.com', '$2y$10$x7Ae41BrLWr0mptjm./jgeySBlMcOwaXLZ3u5d9G4riovcW7sN6Oa', 2, NULL, '2025-03-20 19:03:38'),
(7, 'guide2', 'guide2@gmail.com', '$2y$10$x7Ae41BrLWr0mptjm./jgeySBlMcOwaXLZ3u5d9G4riovcW7sN6Oa', 2, NULL, '2025-03-20 21:11:38'),
(9, 'dsaads', 'syakir@gmail.com', '$2y$10$x7Ae41BrLWr0mptjm./jgeySBlMcOwaXLZ3u5d9G4riovcW7sN6Oa', 1, NULL, '2025-04-12 10:53:38'),
(10, 'asdasd2', 'izmeera2000@gmail.com', '$2y$10$x7Ae41BrLWr0mptjm./jgeySBlMcOwaXLZ3u5d9G4riovcW7sN6Oa', 3, NULL, '2025-05-05 09:44:34');

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
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `user_id`, `name`, `ic`, `image`, `passport`, `phone`, `address`) VALUES
(2, 5, 'abe', '123123', 'assets/uploads/user/5/images.png', NULL, '123123', 'guide'),
(4, 7, 'guide2', '123123', NULL, NULL, '123123', '123123'),
(5, 9, 'asd', 'asdsadasd', NULL, NULL, 'asdasd', 'asdasdasdasdas'),
(6, 3, 'asdasda3', '', 'assets/uploads/user/3/controller.jpg', NULL, '12312', 'asdd'),
(7, 4, 'test2', '', 'assets/uploads/user/4/images.png', '123123', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

DROP TABLE IF EXISTS `user_role`;
CREATE TABLE IF NOT EXISTS `user_role` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'guide'),
(3, 'user');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_ibfk_1` FOREIGN KEY (`timeslot_id`) REFERENCES `booking_timeslots` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `booking_details`
--
ALTER TABLE `booking_details`
  ADD CONSTRAINT `booking_details_ibfk_1` FOREIGN KEY (`booking_id`) REFERENCES `bookings` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `guide_details`
--
ALTER TABLE `guide_details`
  ADD CONSTRAINT `guide_details_ibfk_1` FOREIGN KEY (`booking_id`) REFERENCES `bookings` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role`) REFERENCES `user_role` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `user_details`
--
ALTER TABLE `user_details`
  ADD CONSTRAINT `user_details_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
