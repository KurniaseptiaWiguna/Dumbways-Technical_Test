-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2021 at 03:24 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wiki_game`
--

-- --------------------------------------------------------

--
-- Table structure for table `heroes_tb`
--

CREATE TABLE `heroes_tb` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `type_id` int(11) DEFAULT NULL,
  `detail` varchar(100) DEFAULT NULL,
  `photo` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `heroes_tb`
--

INSERT INTO `heroes_tb` (`id`, `name`, `type_id`, `detail`, `photo`) VALUES
(1, 'ban', 1, 'Nanatsu no taizai member', NULL),
(2, 'Meliodas', 1, 'Nanatsu no taizai member', NULL),
(3, 'Escanor', 2, 'Holy Knight Escanor from Nanatsu no Taizai', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `type_tb`
--

CREATE TABLE `type_tb` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `type_tb`
--

INSERT INTO `type_tb` (`id`, `name`) VALUES
(1, 'Strenght'),
(2, 'HP'),
(3, 'Agility'),
(4, 'fighter');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `heroes_tb`
--
ALTER TABLE `heroes_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type_tb`
--
ALTER TABLE `type_tb`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
