-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2021 at 01:50 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adro_9`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id_user` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id_user`, `first_name`, `last_name`, `username`, `email`, `password`) VALUES
(1, 'rahma', 'tami', 'rahma21', 'rahma21@gmail.com', '$2y$10$ok99m2EOelfnvbA5rdUqn.yNO3lhzIoadHxL05zLiGwiy3d1MJ5mK'),
(3, 'rahmatami', 'novitiya', 'utari', 'admin@gmail.com', '$2y$10$pfg/5gOIV5vTIa/Qd8CRdOYpcWcnZ0q6cvQyFCuNi9gEnQ/MqfJ8m'),
(4, 'rahmatami', 'novitiya', 'rahma1', 'admin1@gmail.com', '$2y$10$XIElqn1CGJvemx4sFONzD.PxMP9dk6UvT5ZS7rEcaEkc66aX7NOOG');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `harga` int(14) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama_produk`, `harga`, `deskripsi`) VALUES
(19, 'Mawar', 5000000, 'Bunga mawar memiliki arti cinta sejati, kemurniaan cinta, kesungguhan dan kebahagiaan.'),
(20, 'Tulip', 100000, 'Bunga yang dikenal sebagai media untuk menyatakan cinta ini tentunya memiliki makna sebuah kesucian dan keabadian cinta.'),
(27, 'Carnation', 2000000, 'bunga carnation bunga ini juga sering disebut dengan bunga anyelir. setiap warnanya juga memilki arti ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
