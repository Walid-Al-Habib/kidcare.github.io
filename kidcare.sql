-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2021 at 08:59 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kidcare`
--

-- --------------------------------------------------------

--
-- Table structure for table `daycare`
--

CREATE TABLE `daycare` (
  `Name` varchar(100) DEFAULT NULL,
  `Website` varchar(100) DEFAULT NULL,
  `Phone` varchar(11) DEFAULT NULL,
  `Location` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daycare`
--

INSERT INTO `daycare` (`Name`, `Website`, `Phone`, `Location`) VALUES
('Creative Day Care and Pre Schooling Center', 'info@creativedaycare.org', '01963297241', 'House No: 806, Adabor, Shyamoli, Dhaka, 1207, Rd No. 3, Dhaka'),
('Childcheer', 'childcheer@gmail.com', '01616924337', 'House # 15, Road # 1 Block # C, Banasree, Rampura, Dhaka'),
('Kids Paradise Day Care Center', 'www.facebook.com/kidsparadisebd', '01734888523', 'House 19, Road No 13A, Dhanmondi, Dhaka 1209'),
('Kidz Leadz Preschool, Daycare & Child Development Center', 'https://kidzleadz.business.site/', '01921059724', 'House# 25, Road# 14, Sector# 13 Uttara; Dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `username` varchar(12) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `class` varchar(8) NOT NULL,
  `gender` text NOT NULL,
  `curriculum` text NOT NULL,
  `guardian_name` text NOT NULL,
  `area` varchar(10) NOT NULL,
  `address` varchar(30) NOT NULL,
  `guardian_number` int(11) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
