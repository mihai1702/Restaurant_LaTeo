-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 28, 2025 at 07:56 AM
-- Server version: 9.1.0
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lateodb`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE IF NOT EXISTS `menu` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `Price` decimal(10,0) NOT NULL,
  `Ingredients` text COLLATE utf8mb4_general_ci NOT NULL,
  `Quantity` int NOT NULL,
  `ImageURL` text COLLATE utf8mb4_general_ci NOT NULL,
  `active` tinyint(1) NOT NULL,
  `CreationDate` date NOT NULL,
  `Categ_ID` int NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk_menu_category` (`Categ_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=129 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`ID`, `Name`, `Price`, `Ingredients`, `Quantity`, `ImageURL`, `active`, `CreationDate`, `Categ_ID`) VALUES
(116, 'Croissant', 20, 'multe ingrediente foarte folositoare', 180, 'croissant-image.jpg', 1, '2025-03-12', 1),
(117, 'Croissant cu fistic', 14, 'cel mai bun ', 200, 'croissant-fistic-image.jpg', 1, '2025-03-12', 1),
(127, 'clatite', 14, 'uyvbyubu', 34, 'wallpaper-Enhanced-SR.png', 1, '2025-03-12', 2),
(128, 'ihview', 5357, 'nidgi', 34, 'wallpaper-Enhanced-SR.png', 1, '2025-03-10', 2);

-- --------------------------------------------------------

--
-- Table structure for table `menucategory`
--

DROP TABLE IF EXISTS `menucategory`;
CREATE TABLE IF NOT EXISTS `menucategory` (
  `Cat_ID` int NOT NULL AUTO_INCREMENT,
  `Cat_Name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`Cat_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menucategory`
--

INSERT INTO `menucategory` (`Cat_ID`, `Cat_Name`) VALUES
(1, 'viennoiserrie'),
(2, 'desert');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

DROP TABLE IF EXISTS `reservations`;
CREATE TABLE IF NOT EXISTS `reservations` (
  `reserv_id` int NOT NULL AUTO_INCREMENT,
  `reserv_date` date NOT NULL,
  `reserv_hour` time NOT NULL,
  `person_numb` int NOT NULL,
  `reserv_name` text COLLATE utf8mb4_general_ci NOT NULL,
  `email` text COLLATE utf8mb4_general_ci NOT NULL,
  `phone_numb` text COLLATE utf8mb4_general_ci NOT NULL,
  `observations` text COLLATE utf8mb4_general_ci NOT NULL,
  `status` text COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`reserv_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`reserv_id`, `reserv_date`, `reserv_hour`, `person_numb`, `reserv_name`, `email`, `phone_numb`, `observations`, `status`) VALUES
(1, '2025-03-27', '20:30:00', 4, 'Apopi Mihai', 'apopi.mihai@gmail.com', '0787596450', 'venim cu un caine', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `role` text COLLATE utf8mb4_general_ci NOT NULL,
  `active` tinyint(1) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `username_unique` (`username`),
  UNIQUE KEY `email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`, `role`, `active`) VALUES
(8, 'admin', 'apopi.mihai@gmail.com', '$2y$10$BTIps1N/e9UENJQr7N/oWelg5F8xgo8p7rQqg6H/A9DJuNN8kSzBm', 'admin', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
