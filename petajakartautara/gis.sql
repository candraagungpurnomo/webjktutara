-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2021 at 05:19 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gis`
--

-- --------------------------------------------------------

--
-- Table structure for table `kepadatan`
--

CREATE TABLE `kepadatan` (
  `provinsi` char(20) NOT NULL,
  `kota` char(20) NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  `jml` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kepadatan`
--

INSERT INTO `kepadatan` (`provinsi`, `kota`, `kecamatan`, `jml`) VALUES
('DKI Jakarta', 'Kota Jakarta Utara', 'Cilincing', 10714),
('DKI Jakarta', 'Kota Jakarta Utara', 'Kelapa Gading', 10690),
('DKI Jakarta', 'Kota Jakarta Utara', 'Koja', 25844),
('DKI Jakarta', 'Kota Jakarta Utara', 'Pademangan', 13992),
('DKI Jakarta', 'Kota Jakarta Utara', 'Penjaringan', 7733),
('DKI Jakarta', 'Kota Jakarta Utara', 'Tanjung Priok', 17499);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
