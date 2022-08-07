-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2020 at 10:55 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lombok catcare center`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID_Admin` int(20) NOT NULL,
  `Email_Admin` varchar(40) NOT NULL,
  `Password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID_Admin`, `Email_Admin`, `Password`) VALUES
(1, 'ayu@gmail.com', 'yuayu');

-- --------------------------------------------------------

--
-- Table structure for table `adopsi`
--

CREATE TABLE `adopsi` (
  `ID_Adopsi` int(20) NOT NULL,
  `Nama_Adopter` varchar(40) NOT NULL,
  `E-mail_Adopter` varchar(40) NOT NULL,
  `Nama_Kucing` varchar(40) NOT NULL,
  `ID_Admin` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `adopter`
--

CREATE TABLE `adopter` (
  `ID_Adopter` int(20) NOT NULL,
  `Nama_Adopter` varchar(40) NOT NULL,
  `E-mail_Adopter` varchar(40) NOT NULL,
  `Nama_Kucing` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `ID_Dokter` int(20) NOT NULL,
  `Nama_Dokter` varchar(40) NOT NULL,
  `Email_Dokter` varchar(40) NOT NULL,
  `Password` varchar(8) NOT NULL,
  `ID_Admin` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`ID_Dokter`, `Nama_Dokter`, `Email_Dokter`, `Password`, `ID_Admin`) VALUES
(1, 'Dr. Sucipto', 'sucipto@gmail.com', 'suci', 1),
(2, 'Dr. Stella', 'stella@gmail.com', 'stell', 3);

-- --------------------------------------------------------

--
-- Table structure for table `donasi`
--

CREATE TABLE `donasi` (
  `ID_Donatur` int(20) NOT NULL,
  `Nama_Donatur` varchar(40) NOT NULL,
  `Alamat_Donatur` text NOT NULL,
  `E-mail_Donatur` varchar(40) NOT NULL,
  `Jumlah_Donasi` int(40) NOT NULL,
  `Jenis_Pembayaran` varchar(40) NOT NULL,
  `ID_Admin` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `konsultasi`
--

CREATE TABLE `konsultasi` (
  `ID_Konsultasi` int(20) NOT NULL,
  `Nama_Member` varchar(40) NOT NULL,
  `E-mail_Member` varchar(40) NOT NULL,
  `Jenis_Kucing` varchar(40) NOT NULL,
  `Keluhan` text NOT NULL,
  `ID_Dokter` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `melakukan`
--

CREATE TABLE `melakukan` (
  `ID_Adopter` int(20) NOT NULL,
  `ID_Adopsi` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `ID_Member` int(20) NOT NULL,
  `Nama_Member` varchar(40) NOT NULL,
  `Alamat_Member` text NOT NULL,
  `Email_Member` varchar(40) NOT NULL,
  `Username` varchar(40) NOT NULL,
  `Password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`ID_Member`, `Nama_Member`, `Alamat_Member`, `Email_Member`, `Username`, `Password`) VALUES
(1, 'maidatun izzati', 'kumbung', 'maidatun@gmail.com', 'mae', 'kimia'),
(8, 'ayu rezki', 'bima', 'ayu@gmail.com', 'yuyu', 'ayu'),
(9, 'ilhan jahiri', 'lotim', 'ilhan@gmail.com', 'ilhan', 'teknik'),
(10, 'nyayu siti fahira rizky asmarani', 'gunung sari', 'fira@gmail.com', 'nyayu', 'infor'),
(11, 'putu ayu desi', 'sayang', 'desy@gmail.com', 'anabul', 'desu');

-- --------------------------------------------------------

--
-- Table structure for table `memberikan`
--

CREATE TABLE `memberikan` (
  `ID_Member` int(20) NOT NULL,
  `ID_Donatur` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mengikuti`
--

CREATE TABLE `mengikuti` (
  `ID_Member` int(20) NOT NULL,
  `ID_Konsultasi` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `relawan`
--

CREATE TABLE `relawan` (
  `ID_Relawan` int(20) NOT NULL,
  `Nama_Relawan` varchar(40) NOT NULL,
  `Alamat_Relawan` text NOT NULL,
  `ID_Admin` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID_Admin`);

--
-- Indexes for table `adopsi`
--
ALTER TABLE `adopsi`
  ADD PRIMARY KEY (`ID_Adopsi`),
  ADD UNIQUE KEY `adopsi_admin` (`ID_Admin`);

--
-- Indexes for table `adopter`
--
ALTER TABLE `adopter`
  ADD PRIMARY KEY (`ID_Adopter`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`ID_Dokter`),
  ADD UNIQUE KEY `dokter_admin` (`ID_Admin`);

--
-- Indexes for table `donasi`
--
ALTER TABLE `donasi`
  ADD PRIMARY KEY (`ID_Donatur`),
  ADD UNIQUE KEY `donasi_admin` (`ID_Admin`);

--
-- Indexes for table `konsultasi`
--
ALTER TABLE `konsultasi`
  ADD PRIMARY KEY (`ID_Konsultasi`),
  ADD UNIQUE KEY `konsultasi_dokter` (`ID_Dokter`);

--
-- Indexes for table `melakukan`
--
ALTER TABLE `melakukan`
  ADD UNIQUE KEY `melakukan_adopter` (`ID_Adopter`),
  ADD UNIQUE KEY `melakukan_adopsi` (`ID_Adopsi`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`ID_Member`);

--
-- Indexes for table `memberikan`
--
ALTER TABLE `memberikan`
  ADD UNIQUE KEY `memberikan_member` (`ID_Member`),
  ADD UNIQUE KEY `memberikan_donatur` (`ID_Donatur`);

--
-- Indexes for table `mengikuti`
--
ALTER TABLE `mengikuti`
  ADD UNIQUE KEY `mengikuti_member` (`ID_Member`),
  ADD UNIQUE KEY `mengikuti_konsultasi` (`ID_Konsultasi`);

--
-- Indexes for table `relawan`
--
ALTER TABLE `relawan`
  ADD PRIMARY KEY (`ID_Relawan`),
  ADD UNIQUE KEY `admin_relawan` (`ID_Admin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID_Admin` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `ID_Dokter` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `ID_Member` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `relawan`
--
ALTER TABLE `relawan`
  MODIFY `ID_Relawan` int(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
