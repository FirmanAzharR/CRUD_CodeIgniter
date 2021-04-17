-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2021 at 12:50 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mini_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `kode` varchar(50) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `item_penjualan`
--

CREATE TABLE `item_penjualan` (
  `nota` varchar(50) NOT NULL,
  `kode_barang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` varchar(50) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `domisili` varchar(100) NOT NULL,
  `jenis_kelamin` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `id_nota` varchar(50) NOT NULL,
  `tgl` date NOT NULL,
  `kode_pelanggan` varchar(50) NOT NULL,
  `subtotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `item_penjualan`
--
ALTER TABLE `item_penjualan`
  ADD KEY `nota` (`nota`),
  ADD KEY `kode_barang` (`kode_barang`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id_nota`),
  ADD KEY `kode_pelanggan` (`kode_pelanggan`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `item_penjualan`
--
ALTER TABLE `item_penjualan`
  ADD CONSTRAINT `item_penjualan_ibfk_1` FOREIGN KEY (`nota`) REFERENCES `penjualan` (`id_nota`),
  ADD CONSTRAINT `item_penjualan_ibfk_2` FOREIGN KEY (`kode_barang`) REFERENCES `barang` (`kode`);

--
-- Constraints for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD CONSTRAINT `penjualan_ibfk_1` FOREIGN KEY (`kode_pelanggan`) REFERENCES `pelanggan` (`id_pelanggan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
