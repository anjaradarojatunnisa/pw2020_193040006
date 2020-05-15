-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 11, 2020 at 12:24 PM
-- Server version: 5.7.26
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_193040006`
--

-- --------------------------------------------------------

--
-- Table structure for table `elektronik`
--

CREATE TABLE `elektronik` (
  `id` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `warna` varchar(100) NOT NULL,
  `stok` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `elektronik`
--

INSERT INTO `elektronik` (`id`, `nama`, `warna`, `stok`, `harga`, `gambar`) VALUES
(1, 'handp', 'biru', '10', '2.000.000', 'hp.jpg'),
(2, 'blender', 'hitam', '100', '3.000.000', 'blender.jpg'),
(3, 'kulkas', 'silver', '5', '9.000.0000', 'kulkas.jpg'),
(4, 'mesin cuci', 'silver', '10', '5.000.000', 'mesinv.jpg'),
(5, 'radio', 'hitam', '2', '2.000.000', 'radio.jpg'),
(6, 'tv', 'putih', '20', '10.000.000', 'tv.jpg'),
(7, 'laptop', 'silver', '10', '9.000.000', 'laptop.jpg'),
(8, 'kamera', 'hitam', '4', '11.000.000', 'kamera.jpg'),
(9, 'ricecooker', 'pink ', '10', '5.000.000', 'm.jpg'),
(10, 'setrika', 'putih', '6', '500.000', 'setrika.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(2, 'admin', '$2y$10$Se7x5Amk/ruw2y28pdpfTOJSm/7X5.fbi2DrwuH.inFg89nqwpdHm'),
(3, 'niki', '$2y$10$a5oe/lQHsfjvLVI5SFAkYequzZj7TeybDQua4ww.X4U68nYvRvE/.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `elektronik`
--
ALTER TABLE `elektronik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `elektronik`
--
ALTER TABLE `elektronik`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
