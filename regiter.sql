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
-- Table structure for table `regiter`
--

CREATE TABLE `regiter` (
  `Id` int(11) NOT NULL,
  `Name` varchar(20) DEFAULT NULL,
  `Email` varchar(20) DEFAULT NULL,
  `Password` varchar(20) DEFAULT NULL,
  `Role` varchar(20) DEFAULT NULL,
  `updatestatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `regiter`
--

INSERT INTO `regiter` (`Id`, `Name`, `Email`, `Password`, `Role`, `updatestatus`) VALUES
(2, 'hassan ali', 'hassan@gmail.com', '1234', 'parents', 0),
(4, 'hassan ali', 'hassan@gmail.com', '1234', 'parents', 0),
(5, 'Amir Ali', 'amir@gmail.com', '1234', 'hospital', 0),
(6, 'ahmed ali', 'ahmed@gmail.com', '1234', 'hospital', 0),
(7, 'hassan ali', 'hassan@gmail.com', '1234', 'parents', 0),
(8, 'hamza ali', 'ali@gmail.com', '1234', 'parents', 0),
(31, 'naeem ali', 'naeem@gmail.com', '1234', 'parents', 0),
(65, 'furqan', 'furqan@gmail.com', '1234', 'hospital', 1),
(67, 'adam', 'adam@gmail.com', '1234', 'parents', 0),
(68, 'hello', 'hello@gmail.com', '1234', 'parents', 1),
(70, '', '', '', '', 0),
(71, '', '', '', '', 0),
(72, '', '', '', '', 0),
(73, '', '', '', '', 0),
(74, 'Abdullah', 'abdullah@gmail.com', '1234', 'parents', 0),
(75, 'Huzayfa Ali', 'huzayfa@gmail.com', '1234', 'admin', 0),
(76, 'asif', 'asif@gmail.com', '1234', 'hospital', 0),
(77, 'anwar', 'anwar@gmail.com', '1234', '', 0),
(78, 'anwar', 'anwar@gmail.com', '1234', 'hospital', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `regiter`
--
ALTER TABLE `regiter`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `regiter`
--
ALTER TABLE `regiter`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
