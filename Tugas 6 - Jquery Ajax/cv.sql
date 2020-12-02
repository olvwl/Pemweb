-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2020 at 10:10 AM
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
-- Database: `cv`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic`
--

CREATE TABLE `academic` (
  `ID` int(11) NOT NULL,
  `SEKOLAH` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `academic`
--

INSERT INTO `academic` (`ID`, `SEKOLAH`) VALUES
(1, 'SDN TAMBAK SAWAH'),
(2, 'SMPN 2 SEDATI'),
(3, 'SMA 17 AGUSTUS 1945'),
(4, 'UPN VETERAN JATIM');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `IDC` int(11) NOT NULL,
  `CONTACT` varchar(30) NOT NULL,
  `IMAGES` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`IDC`, `CONTACT`, `IMAGES`) VALUES
(1, 'Mobile : 0895367289456', '5.png'),
(2, 'Location : Indonesia', '6.png'),
(3, 'Email : syafridamelania@gmail.', '7.png'),
(4, 'Social Media : mlnasyfrda', '8.png');

-- --------------------------------------------------------

--
-- Table structure for table `hobi`
--

CREATE TABLE `hobi` (
  `IDH` int(11) NOT NULL,
  `NAMA` varchar(30) NOT NULL,
  `IMAGES` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hobi`
--

INSERT INTO `hobi` (`IDH`, `NAMA`, `IMAGES`) VALUES
(1, 'Sleeping', '1.png'),
(2, 'Gaming', '2.png'),
(3, 'Studying', '3.png'),
(4, 'Listening', '4.png');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `IDM` int(11) NOT NULL,
  `JUDUL` varchar(50) NOT NULL,
  `IMAGE` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`IDM`, `JUDUL`, `IMAGE`) VALUES
(1, 'Silenced (2011)', 'silence.jpg'),
(2, 'Zootopia (2016)', 'zootopia.jpg'),
(3, 'A Silence Voice (2016)', 'silence voice.jpeg'),
(4, 'Kim Ji Young (2019)', 'kim ji young.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic`
--
ALTER TABLE `academic`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
