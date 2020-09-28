-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Sep 24, 2020 at 06:06 PM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sql_challenge`
--

-- --------------------------------------------------------

--
-- Table structure for table `clues`
--

DROP TABLE IF EXISTS `clues`;
CREATE TABLE IF NOT EXISTS `clues` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `info` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clues`
--

INSERT INTO `clues` (`id`, `info`) VALUES
(1, 'congratulations you have not found the flag'),
(2, 'CTF{ civilizationFall }');

-- --------------------------------------------------------

--
-- Table structure for table `decrypt`
--

DROP TABLE IF EXISTS `decrypt`;
CREATE TABLE IF NOT EXISTS `decrypt` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `info` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `decrypt`
--

INSERT INTO `decrypt` (`id`, `info`) VALUES
(1, 'You can decrypt the flag using a clue.'),
(2, 'The encryption is AES-128');

-- --------------------------------------------------------

--
-- Table structure for table `outposts`
--

DROP TABLE IF EXISTS `outposts`;
CREATE TABLE IF NOT EXISTS `outposts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `city` varchar(255) NOT NULL,
  `defence` varchar(255) NOT NULL,
  `troops` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `outposts`
--

INSERT INTO `outposts` (`id`, `city`, `defence`, `troops`) VALUES
(1, 'Gladden Fields', 'Low', '600'),
(2, 'Isengard', 'Medium', '5000'),
(3, 'Minas Tirith', 'High', '25000'),
(4, 'Rivendell', 'Medium', '8000'),
(5, 'Rohan', 'Medium', '4000'),
(6, 'Númenor', 'Low', '400'),
(7, 'Eriador', 'Low', '300'),
(8, 'Gondor', 'High', '30000');

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

DROP TABLE IF EXISTS `resources`;
CREATE TABLE IF NOT EXISTS `resources` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `info` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `resources`
--

INSERT INTO `resources` (`id`, `info`, `quantity`) VALUES
(1, 'food', '16 Wagons'),
(2, 'wood', '12 wagons'),
(3, 'stone', '8 wagons'),
(4, 'Cannons', '150'),
(5, 'Ammo', '800 cannon balls'),
(6, 'flag', 'oneCTF{W9/Y0VJZ8feSQv2MuRHq2+etfuYWlU+e8xW4DfRz5VvCBjLP2OwfJeSpSmP+SPPsrVu0vF/ZvJqR8FmS7+lig4jxhreQzBrJYhpzs3EzagA=}');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` char(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', 'Welc0meT0M1ddleEarthMyLord');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

CREATE USER 'ctf_user'@'localhost' IDENTIFIED BY 'ctf_user123';
GRANT SELECT ON `sql_challenge`.* TO 'ctf_user'@'localhost';

FLUSH PRIVILEGES;