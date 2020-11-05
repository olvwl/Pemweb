-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2020 at 03:18 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko`
--

-- --------------------------------------------------------

--
-- Table structure for table `datatoko`
--

CREATE TABLE `datatoko` (
  `SKU` varchar(10) NOT NULL,
  `Nama Barang` varchar(50) NOT NULL,
  `Kategori Barang` varchar(20) NOT NULL,
  `Harga Satuan` int(11) NOT NULL,
  `Jumlah Stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datatoko`
--

INSERT INTO `datatoko` (`SKU`, `Nama Barang`, `Kategori Barang`, `Harga Satuan`, `Jumlah Stok`) VALUES
('MAK00-01', 'Beras 10 KG', 'Makanan', 150000, 17),
('MIN00-01', 'AQUA GALON', 'Minuman', 15000, 100),
('MIN00-02', 'AQUA BOTOL', 'Minuman', 2500, 10),
('MIN00-03', 'AQUA GELAS', 'Minuman', 500, 300),
('PRT00-01', 'KIPAS ANGIN MASPION', 'Peralatan', 300000, 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datatoko`
--
ALTER TABLE `datatoko`
  ADD PRIMARY KEY (`SKU`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
