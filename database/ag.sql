-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 03, 2019 at 08:16 AM
-- Server version: 5.7.24
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ag`
--

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

DROP TABLE IF EXISTS `jurusan`;
CREATE TABLE IF NOT EXISTS `jurusan` (
  `id_jurusan` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_sekolah` text NOT NULL,
  `nama_jurusan` text NOT NULL,
  `bobot_jurusan` varchar(2) NOT NULL,
  PRIMARY KEY (`id_jurusan`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `jenis_sekolah`, `nama_jurusan`, `bobot_jurusan`) VALUES
(2, 'SMK', 'TEKNIK KERJA JARINGAN', '2'),
(3, 'SMA', 'IPA', '2'),
(4, 'SMA', 'IPS', '1'),
(5, 'SMK', 'REKAYASA PERANGKAT LUNAK', '2'),
(1, 'SMK', 'AKUNTANSI', '1'),
(6, 'SMA', 'BAHASA', '1'),
(7, 'SMK', 'ANIMASI DAN MULTIMEDIA', '2'),
(8, 'SMK', 'PARIWISATA', '1'),
(9, 'SMK', 'TEKNIK OTOMOTIF', '1'),
(10, 'SMK', 'FARMASI', '1'),
(11, 'SMK', 'PELAYARAN', '1');

-- --------------------------------------------------------

--
-- Table structure for table `mhs`
--

DROP TABLE IF EXISTS `mhs`;
CREATE TABLE IF NOT EXISTS `mhs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_mhs` int(11) DEFAULT NULL,
  `nama` text,
  `nilai_un` text NOT NULL,
  `nilai_test` text NOT NULL,
  `jurusan` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mhs`
--

INSERT INTO `mhs` (`id`, `id_mhs`, `nama`, `nilai_un`, `nilai_test`, `jurusan`) VALUES
(1, 240, 'KENNY PERULU', '80', '90', '2'),
(2, 241, 'FELDI AMALO', '67', '90', '2'),
(3, 242, 'JIWANTRIS SADUK', '70', '54', '1'),
(4, 243, 'NOBERT TRISNO', '90', '54', '2'),
(5, 244, 'YANDRES ASBANU', '55', '89', '1'),
(6, 245, 'INA TANGKUYA', '88', '88', '1');

-- --------------------------------------------------------

--
-- Table structure for table `mhs_si`
--

DROP TABLE IF EXISTS `mhs_si`;
CREATE TABLE IF NOT EXISTS `mhs_si` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_mhs` varchar(5) NOT NULL,
  `bobot_nilaiUN` varchar(2) NOT NULL,
  `bobot_nilaiT` varchar(2) NOT NULL,
  `bobot_jurusan` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mhs_si`
--

INSERT INTO `mhs_si` (`id`, `id_mhs`, `bobot_nilaiUN`, `bobot_nilaiT`, `bobot_jurusan`) VALUES
(1, '245', '2', '2', 2),
(2, '245', '2', '2', 2);

-- --------------------------------------------------------

--
-- Table structure for table `mhs_ti`
--

DROP TABLE IF EXISTS `mhs_ti`;
CREATE TABLE IF NOT EXISTS `mhs_ti` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_mhs` varchar(5) NOT NULL,
  `bobot_nilaiUN` varchar(2) NOT NULL,
  `bobot_nilaiT` varchar(2) NOT NULL,
  `bobot_jurusan` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
