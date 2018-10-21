-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 21, 2018 at 02:45 PM
-- Server version: 5.7.21
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `modal_test`
--
CREATE DATABASE IF NOT EXISTS `modal_test` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `modal_test`;

-- --------------------------------------------------------

--
-- Table structure for table `modal_data`
--

DROP TABLE IF EXISTS `modal_data`;
CREATE TABLE IF NOT EXISTS `modal_data` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `input1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `input2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `modal_data`
--

INSERT INTO `modal_data` (`id`, `input1`, `input2`) VALUES
(1, 'John', 'Doe'),
(2, 'Billy', 'the Kid'),
(3, 'Palico', 'the Cat'),
(4, 'Sniper', 'Soldier'),
(5, 'Neo', 'The One'),
(18, 'Farmer', 'McDonalds'),
(19, 'PHP', 'Framework'),
(26, 'Tuti', 'Fruti');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
