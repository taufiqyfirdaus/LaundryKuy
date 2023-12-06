-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2022 at 03:09 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dblaundry`
--

-- --------------------------------------------------------

--
-- Table structure for table `layanan`
--

CREATE TABLE `layanan` (
  `id` varchar(4) NOT NULL,
  `nama_layanan` varchar(50) NOT NULL,
  `harga` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `layanan`
--

INSERT INTO `layanan` (`id`, `nama_layanan`, `harga`) VALUES
('KL1', 'Cuci Kering Lipat (3kg)', 20000),
('KL2', 'Cuci Kering Lipat (5kg)', 30000),
('KL3', 'Cuci Kering Setrika (3 kg)', 35000),
('KL4', 'Cuci Kering Setrika (5 kg)', 45000),
('KL5', 'Setrika (3 kg)', 30000),
('KL6', 'Setrika (5 kg)', 50000),
('KR1', 'Karpet Rumah', 20000),
('KR2', 'Karpet Rumah Besar', 25000),
('KR3', 'Karpet Masjid (1 roll)', 35000),
('KR4', 'Karpet Kantor (1 roll)', 45000),
('SP1', 'Sepatu Kanvas', 60000),
('SP2', 'Sepatu Sneaker', 50000),
('SP3', 'Sepatu Leather', 70000),
('SP4', 'Sepatu Suede', 65000),
('ST1', 'Kemeja Batik', 20000),
('ST2', 'Jas', 35000),
('ST3', 'Bantal/Guling', 50000),
('ST4', 'Selimut', 25000),
('ST5', 'Baju Muslim', 20000),
('ST6', 'Bed Cover', 30000),
('ST7', 'Bed Cover Jumbo', 40000);

-- --------------------------------------------------------

--
-- Table structure for table `outlet`
--

CREATE TABLE `outlet` (
  `id` varchar(5) NOT NULL,
  `nama_outlet` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telepon` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `outlet`
--

INSERT INTO `outlet` (`id`, `nama_outlet`, `alamat`, `no_telepon`) VALUES
('OTL1', 'LaundryKuy cabang 1', 'Perum Platinum Blok 2 no.23', '081235803564'),
('OTL10', 'LaundryKuy cabang 10', 'Perum Kamboja blok 5 no.11', '089674542997'),
('OTL2', 'LaundryKuy cabang 2', 'Jl. Melati no.25', '086446538679'),
('OTL3', 'LaundryKuy cabang 3', 'Jl. Mawar no.16', '086344522745'),
('OTL4', 'LaundryKuy cabang 4', 'Jl. Besi no.20', '088373544867'),
('OTL5', 'LaundryKuy cabang 5', 'Perum Titanium Blok 4 no.2', '086728754478'),
('OTL6', 'LaundryKuy cabang 6', 'Jl. Emas no.32', '083487692376'),
('OTL7', 'LaundryKuy cabang 7', 'Jl. Silver no.2', '083467345587'),
('OTL8', 'LaundryKuy cabang 8', 'Perum Titanium Blok 1 no.17', '081769673387'),
('OTL9', 'LaundryKuy cabang 9', 'Jl. Baja no.29', '082367689996');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(4) NOT NULL,
  `id_layanan` varchar(4) NOT NULL,
  `nama_pemesan` varchar(50) NOT NULL,
  `alamat_pemesan` varchar(50) NOT NULL,
  `no_telepon_pemesan` varchar(12) NOT NULL,
  `ttl_harga` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_layanan`, `nama_pemesan`, `alamat_pemesan`, `no_telepon_pemesan`, `ttl_harga`) VALUES
(1, 'KL1', 'Taufiqy', 'Perum Platinum h12', '081294803478', 20000),
(2, 'KL5', 'Jonie ', 'Jl. Pelatuk no.8', '089036752674', 30000),
(3, 'KL6', 'Doni', 'Jl. Mawar no.22', '081667893567', 50000),
(4, 'SP3', 'Jack', 'Jl. Mawar no.2', '085647920478', 70000),
(5, 'KR3', 'Bobi', 'Jl. Pelatuk no.9', '083759672345', 35000),
(6, 'KR2', 'Jonie ', 'Perum Platinum h12', '089036752674', 25000),
(7, 'KL5', 'Yuba', 'Perum Platinum h2', '081294803478', 30000),
(8, 'KL1', 'Jack', 'Jl. Emas no.18', '089036752674', 20000),
(9, 'SP4', 'Tony', 'Jl. Besi no.4', '083759672798', 65000),
(10, 'ST2', 'John', 'Jl. Titanium no.5', '082367972344', 35000),
(11, 'KL5', 'Taufiqy', 'Jl. Mawar no.22', '082367972678', 30000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`) VALUES
(1, 'doni', 'doni@gmail.com', 'f9330f242ff516494a21d3fd94f0807f'),
(2, 'yuba', 'yuba@gmail.com', 'bf44bc386bc6329362bcd3fa53889b18'),
(3, 'fiqy', 'fiqy@gmail.com', '80de6c997e6035b26e4edde0c0578e74'),
(4, 'joko', 'joko@gmail.com', '278ea841c0d133059032b8a75320c3e0'),
(5, 'mia', 'mia@gmail.com', 'e154e212f88557130a2fe3de73299ad9'),
(6, 'joni', 'joni@gmail.com', '1c0ac25b077a885dc53d91b05b14544e'),
(7, 'ko', 'ko@gmail.com', '6675652725df6d20b9cdc252c839dddd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `outlet`
--
ALTER TABLE `outlet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
