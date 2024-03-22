-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2023 at 04:08 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kp`
--

-- --------------------------------------------------------

--
-- Table structure for table `ifeedback`
--

CREATE TABLE `ifeedback` (
  `ID` int(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Message` varchar(300) NOT NULL,
  `waktu` varchar(255) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ifeedback`
--

INSERT INTO `ifeedback` (`ID`, `Name`, `Email`, `Message`, `timestamp`) VALUES
(1, 'agung', ' Yordanmirza@gmail.com', ' sangat baik', '2023-11-24 00:03:07'),
(2, 'awa', ' Yordantdt@gfysr', ' sangat baik bagus', '2023-11-24 00:03:07'),
(3, 'sinta', ' sinta@gmail.com', ' bagus', '2023-11-24 00:03:07'),
(4, 'gvfcxvn rc', ' c mbckgkbxb', ' cbnfnrxbm', '2023-11-24 00:03:07'),
(5, 'jb bnb ', ' yordanmirza@gmail.com', ' bzn bn szzhbhbzhbzh', '2023-11-24 00:03:07'),
(6, 'gvfcxvn rc', ' yordanmirza@gmail.com', ' bagus', '2023-11-24 00:03:07'),
(7, 'nb', ' tegar@gmail.com', ' asekkk', '2023-11-24 00:03:07'),
(8, 'yordan', ' yordanmirza@gmail.com', ' iuehirwuebfiwubfialejrgnjkebfvilbsvijnkeagrnae[rg\r\n\r\nerklgneogineprigmnepo', '2023-11-24 02:51:13'),
(9, 'sinta', ' sinta@gmail.com', ' bagus bgt', '2023-11-24 03:19:28'),
(11, 'yordanee', ' Yordanmirza@gmail.com', ' jw2hkhjshj', '2023-12-12 01:17:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ifeedback`
--
ALTER TABLE `ifeedback`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ifeedback`
--
ALTER TABLE `ifeedback`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
