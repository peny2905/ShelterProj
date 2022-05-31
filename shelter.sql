-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2022 at 01:21 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shelter`
--

-- --------------------------------------------------------

--
-- Table structure for table `animals`
--

CREATE TABLE `animals` (
  `Name` varchar(50) NOT NULL,
  `Age` int(40) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `Breed` varchar(50) NOT NULL,
  `Colors` text DEFAULT NULL,
  `Health` text NOT NULL,
  `Photo` mediumtext NOT NULL,
  `Admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `animals`
--

INSERT INTO `animals` (`Name`, `Age`, `Gender`, `Breed`, `Colors`, `Health`, `Photo`, `Admin`) VALUES
('Bob', 2, 'male', 'Labrador', 'Blonde', 'Vaccinated', 'labrador.jpg', 4),
('Carlos', 2, 'male', 'Scottish Fold', 'Black', 'Vaccinated', 'scottish_fold.jpg', 7),
('Catty', 5, 'female', 'Brit Shorthair', 'Black', 'UnVaccinated', 'brit_shorthair.jpg', 2),
('Karly', 5, 'female', 'Poodle', 'Blonde', 'Vaccinated', 'poodle.jpg', 6),
('Lexy', 4, 'female', 'Beagle', 'Lightbrown-White', 'Vaccinated-Healthy', 'beagle.jpg', 1),
('Lory', 3, 'female', 'Devon Rex', 'Black n White', 'Vaccinated', 'devon_rex.jpg', 3),
('Tobby', 3, 'male', 'Pembroke Welsh', 'Blonde-n-White', 'Vaccinated', 'pembroke_welsh.jpg', 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pic` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `admin` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `firstname`, `lastname`, `email`, `address`, `city`, `country`, `phone`, `pic`, `admin`) VALUES
(1, 'user01', 'pass01', 'John', 'Papas', 'user1@gmail.com', 'user address 1', 'Athens', 'GR', '5454236367346', 'pics/user1.jpg', NULL),
(2, 'user02', 'pass02', 'Joana', 'Statham', 'user2@gmail.com', 'user address 2', 'Athens', 'GR', '54657345824', 'pics/user2.jpg', NULL),
(3, 'user3', 'pass3', 'Babis', 'Flou', 'user3@gmail.com', 'user address 3', 'Paris', 'FR', '35657235235', 'pics/user3.jpg', NULL),
(4, 'user4', 'pass4', 'Mic', 'Jagger', 'user4@gmail.com', 'user address 4', 'Torino', 'IT', '35657235235', 'pics/user4.jpg', NULL),
(5, 'user5', 'pass5', 'Sophi', 'Lauren', 'user5@gmail.com', 'user address 5', 'Paris', 'FR', '35657235235', 'pics/user5.jpg', NULL),
(6, 'user6', 'pass6', 'Terens', 'Hill', 'user6@gmail.com', 'user address 6', 'Milano', 'IT', '35657235235', 'pics/user6.jpg', NULL),
(7, 'user7', 'pass7', 'Bad', 'Spenser', 'user7@gmail.com', 'user address 7', 'Barcelona', 'ES', '35657235235', 'pics/user7.jpg', NULL),
(8, 'user8', 'pass8', 'Soula', 'Boula', 'user8@gmail.com', 'user address 8', 'Athens', 'GR', '35657235235', 'pics/user8.jpg', NULL),
(9, 'user9', 'pass9', 'Sakis', 'Rouvas', 'user9@gmail.com', 'user address 9', 'Milano', 'IT', '35657235235', 'pics/user9.jpg', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `animals`
--
ALTER TABLE `animals`
  ADD PRIMARY KEY (`Name`),
  ADD UNIQUE KEY `Name` (`Name`),
  ADD UNIQUE KEY `Photo` (`Photo`) USING HASH;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
