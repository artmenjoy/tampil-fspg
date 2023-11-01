-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 01, 2023 at 01:36 PM
-- Server version: 8.0.30
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fspg`
--

-- --------------------------------------------------------

--
-- Table structure for table `info_tampil`
--

CREATE TABLE `info_tampil` (
  `id` int NOT NULL,
  `cs_1` varchar(200) NOT NULL,
  `cs_2` varchar(200) NOT NULL,
  `cs_3` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `persiapan_1` varchar(200) NOT NULL,
  `persiapan_2` varchar(200) NOT NULL,
  `verifikasi` varchar(200) NOT NULL,
  `meditasi` varchar(200) NOT NULL,
  `tampil` varchar(200) NOT NULL,
  `after` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `info_tampil`
--

INSERT INTO `info_tampil` (`id`, `cs_1`, `cs_2`, `cs_3`, `persiapan_1`, `persiapan_2`, `verifikasi`, `meditasi`, `tampil`, `after`) VALUES
(1, 'ISTIRAHAT', '2 MAHANAIM SAWANGAN', '1 FIRDAUS RANOTONGKOR', 'IMANUEL SAGRAT', 'BAITEL KEMA II', 'imanuel sagrat', '11 BAPA ABRAHAM TATAARAN PATAR', '5 IMANUEL SAGRAT', '4 SYALOM DENDENGAN DALAM ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info_tampil`
--
ALTER TABLE `info_tampil`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info_tampil`
--
ALTER TABLE `info_tampil`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
