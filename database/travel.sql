-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2021 at 04:11 AM
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
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `crudpage`
--

CREATE TABLE `crudpage` (
  `id` int(225) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `telepon` varchar(225) NOT NULL,
  `confirm_destination` varchar(225) NOT NULL,
  `alamat_penjemputan` varchar(255) NOT NULL,
  `tanggal_keberangkatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `crudpage`
--

INSERT INTO `crudpage` (`id`, `nama`, `telepon`, `confirm_destination`, `alamat_penjemputan`, `tanggal_keberangkatan`) VALUES
(5, 'rafi', '0812375955', 'raja ampat', 'tlogomas no 34 malang', '10-9-2021'),
(6, 'nurdi', '08123456789', 'candi perambanan', 'madjen panjaitan no 56, malang', '02-30-2021');

-- --------------------------------------------------------

--
-- Table structure for table `loginpage`
--

CREATE TABLE `loginpage` (
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loginpage`
--

INSERT INTO `loginpage` (`username`, `email`, `password`, `id`) VALUES
('Narendra Wijaya', 'narendra@gmail.com', 'ae2511009380674cfa294ba6a0d43baf', 1),
('rikoo', 'rikoo@gmail.com', '72404357f6cfe58b43aca6fd0523dfab', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crudpage`
--
ALTER TABLE `crudpage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loginpage`
--
ALTER TABLE `loginpage`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `crudpage`
--
ALTER TABLE `crudpage`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `loginpage`
--
ALTER TABLE `loginpage`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
