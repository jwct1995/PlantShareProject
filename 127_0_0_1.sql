-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2021 at 10:03 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbplant`
--
DROP DATABASE IF EXISTS `dbplant`;
CREATE DATABASE IF NOT EXISTS `dbplant` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `dbplant`;

-- --------------------------------------------------------

--
-- Table structure for table `tblplant`
--

DROP TABLE IF EXISTS `tblplant`;
CREATE TABLE IF NOT EXISTS `tblplant` (
  `pId` varchar(30) NOT NULL,
  `pName` varchar(50) DEFAULT NULL,
  `pSize` varchar(20) DEFAULT NULL,
  `pDesc` mediumtext DEFAULT NULL,
  `pImg` mediumtext DEFAULT NULL,
  `pLikeCount` int(11) DEFAULT NULL,
  PRIMARY KEY (`pId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblplant`
--

INSERT INTO `tblplant` (`pId`, `pName`, `pSize`, `pDesc`, `pImg`, `pLikeCount`) VALUES
('p20211028175237863411', 'qwe t1', 'asd', 'qwe t1', 'img/20211028194209919800.png', 1),
('p20211028175351499003', 'qwe v2', '99XL', 'qwe v2txt', 'img/20211028194137912200.png', 0),
('p20211028181735607686', 'q11', 'asd', 'q1 v123', 'img/20211028194059376000.png', 0),
('p20211028181744953608', 'q22', '99XL', 'q2 v13', 'img/20211028194045475800.png', 0),
('p20211028181751636394', 'q31', 'edc', 'q3 v11', 'img/20211028194436670000.jpg', 2),
('p20211028181758395215', 'q4', 'asd', 'q4 v1', 'img/20211028194421781300.jpg', 1),
('p20211028213753522859', 'hello world', 'edc', 'welcome to my world', 'img/20211028193753514000.jpg', 1),
('p20211028215356934581', 'a1123', 'asd', 'a1 desc 12345', 'img/20211028195456798400.png', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
