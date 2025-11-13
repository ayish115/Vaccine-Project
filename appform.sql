-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2023 at 09:09 PM
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
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `appform`
--

CREATE TABLE `appform` (
  `Name` varchar(20) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `Email` varchar(20) DEFAULT NULL,
  `Number` int(11) DEFAULT NULL,
  `date` int(11) DEFAULT NULL,
  `time` int(11) DEFAULT NULL,
  `vaccine` varchar(20) DEFAULT NULL,
  `hospital` varchar(20) DEFAULT NULL,
  `address` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appform`
--

INSERT INTO `appform` (`Name`, `age`, `Email`, `Number`, `date`, `time`, `vaccine`, `hospital`, `address`) VALUES
('huzayfa ali', 20, 'huzayfa@gmail.com', 2147483647, 2022, 4, 'polio', 'civil', ''),
('huzayfa ali', 20, 'huzayfa@gmail.com', 2147483647, 2022, 4, 'polio', 'civil', ''),
('amir ali', 20, 'amir@gmail.com', 2147483647, 2009, 20, 'polio', 'agha_khan', 'korangi'),
('ayesha', 3, 'ayesha@gmail.com', 12234577, 1999, 23, 'polio', 'agha_khan', 'karachi'),
('', 0, '', 0, 0, 0, '', '', ''),
('', 0, '', 0, 0, 0, '', '', ''),
('', 0, '', 0, 0, 0, '', '', ''),
('', 0, '', 0, 0, 0, '', '', ''),
('', 0, '', 0, 0, 0, '', '', ''),
('', 0, '', 0, 0, 0, '', '', ''),
('abdullah ', 44, 'abdullah@gmail.com', 2147483647, 20003, 16, 'polio', 'agha_khan', 'pakistan'),
('abdullah ', 44, 'abdullah@gmail.com', 2147483647, 20003, 16, 'polio', 'agha_khan', 'pakistan'),
('abdullah ', 44, 'abdullah@gmail.com', 2147483647, 20003, 16, 'polio', 'agha_khan', 'pakistan'),
('abdullah ', 44, 'abdullah@gmail.com', 2147483647, 20003, 16, 'polio', 'agha_khan', 'pakistan'),
('abdullah ', 44, 'abdullah@gmail.com', 2147483647, 20003, 16, 'polio', 'agha_khan', 'pakistan'),
('abdullah ', 44, 'abdullah@gmail.com', 2147483647, 20003, 16, 'polio', 'agha_khan', 'pakistan'),
('abdullah ', 44, 'abdullah@gmail.com', 2147483647, 2024, 0, 'namonia', 'agha_khan', 'pakistan');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
