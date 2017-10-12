-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2017 at 01:15 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_iseoo`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_event`
--

CREATE TABLE `tb_event` (
  `id_event` int(11) NOT NULL,
  `nama_event` varchar(100) NOT NULL,
  `jenis_event` int(11) NOT NULL,
  `creator` varchar(100) NOT NULL,
  `deskripsi_event` text NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_jasa`
--

CREATE TABLE `tb_jasa` (
  `id_jasa` int(11) NOT NULL,
  `nama_jasa` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `kontak` varchar(20) NOT NULL,
  `jenis_jasa` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `untuk_event` int(11) NOT NULL,
  `pemilik` varchar(100) NOT NULL,
  `total_tagihan` bigint(20) NOT NULL,
  `status` varchar(50) NOT NULL,
  `last_paid` date NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenis_event`
--

CREATE TABLE `tb_jenis_event` (
  `id_jenis_event` int(11) NOT NULL,
  `jenis_event` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenis_jasa`
--

CREATE TABLE `tb_jenis_jasa` (
  `id_jenis_jasa` int(11) NOT NULL,
  `jenis_jasa` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenis_sponsor`
--

CREATE TABLE `tb_jenis_sponsor` (
  `id_jenis_sponsor` int(11) NOT NULL,
  `jenis_sponsor` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_order`
--

CREATE TABLE `tb_order` (
  `id_order` int(11) NOT NULL,
  `id_event` int(11) NOT NULL,
  `id_jasa` int(11) NOT NULL,
  `tanggal_order` datetime NOT NULL,
  `lama_event` int(11) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `total_harga` bigint(20) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_request`
--

CREATE TABLE `tb_request` (
  `id_request` int(11) NOT NULL,
  `id_sponsor` int(11) NOT NULL,
  `id_event` int(11) NOT NULL,
  `tanggal_request` datetime NOT NULL,
  `lama_event` int(11) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_sponsor`
--

CREATE TABLE `tb_sponsor` (
  `id_sponsor` int(11) NOT NULL,
  `nama_sponsor` varchar(100) NOT NULL,
  `kontak` varchar(20) NOT NULL,
  `jenis_sponsor` int(11) NOT NULL,
  `deskipsi` text NOT NULL,
  `untuk_event` int(11) NOT NULL,
  `pemilik` varchar(100) NOT NULL,
  `total_tagihan` bigint(20) NOT NULL,
  `last_paid` date NOT NULL,
  `created_at` date NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `login_terakhir` datetime NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user_detail`
--

CREATE TABLE `tb_user_detail` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `no_telp` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user_log`
--

CREATE TABLE `tb_user_log` (
  `id_user_notif` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `pesan` text NOT NULL,
  `tanggal_notif` datetime NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_event`
--
ALTER TABLE `tb_event`
  ADD PRIMARY KEY (`id_event`),
  ADD KEY `creator` (`creator`),
  ADD KEY `jenis_event` (`jenis_event`);

--
-- Indexes for table `tb_jasa`
--
ALTER TABLE `tb_jasa`
  ADD PRIMARY KEY (`id_jasa`),
  ADD KEY `jenis_jasa` (`jenis_jasa`),
  ADD KEY `untuk_event` (`untuk_event`),
  ADD KEY `pemilik` (`pemilik`);

--
-- Indexes for table `tb_jenis_event`
--
ALTER TABLE `tb_jenis_event`
  ADD PRIMARY KEY (`id_jenis_event`);

--
-- Indexes for table `tb_jenis_jasa`
--
ALTER TABLE `tb_jenis_jasa`
  ADD PRIMARY KEY (`id_jenis_jasa`);

--
-- Indexes for table `tb_jenis_sponsor`
--
ALTER TABLE `tb_jenis_sponsor`
  ADD PRIMARY KEY (`id_jenis_sponsor`);

--
-- Indexes for table `tb_order`
--
ALTER TABLE `tb_order`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_jasa` (`id_jasa`),
  ADD KEY `id_event` (`id_event`);

--
-- Indexes for table `tb_request`
--
ALTER TABLE `tb_request`
  ADD PRIMARY KEY (`id_request`),
  ADD KEY `id_event` (`id_event`),
  ADD KEY `id_sponsor` (`id_sponsor`);

--
-- Indexes for table `tb_sponsor`
--
ALTER TABLE `tb_sponsor`
  ADD PRIMARY KEY (`id_sponsor`),
  ADD KEY `jenis_sponsor` (`jenis_sponsor`),
  ADD KEY `untuk_event` (`untuk_event`),
  ADD KEY `pemilik` (`pemilik`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `tb_user_detail`
--
ALTER TABLE `tb_user_detail`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `tb_user_log`
--
ALTER TABLE `tb_user_log`
  ADD PRIMARY KEY (`id_user_notif`),
  ADD KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_event`
--
ALTER TABLE `tb_event`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_jasa`
--
ALTER TABLE `tb_jasa`
  MODIFY `id_jasa` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_jenis_event`
--
ALTER TABLE `tb_jenis_event`
  MODIFY `id_jenis_event` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_jenis_jasa`
--
ALTER TABLE `tb_jenis_jasa`
  MODIFY `id_jenis_jasa` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_jenis_sponsor`
--
ALTER TABLE `tb_jenis_sponsor`
  MODIFY `id_jenis_sponsor` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_order`
--
ALTER TABLE `tb_order`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_request`
--
ALTER TABLE `tb_request`
  MODIFY `id_request` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_sponsor`
--
ALTER TABLE `tb_sponsor`
  MODIFY `id_sponsor` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_user_detail`
--
ALTER TABLE `tb_user_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_user_log`
--
ALTER TABLE `tb_user_log`
  MODIFY `id_user_notif` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_event`
--
ALTER TABLE `tb_event`
  ADD CONSTRAINT `tb_event_ibfk_1` FOREIGN KEY (`jenis_event`) REFERENCES `tb_jenis_event` (`id_jenis_event`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tb_event_ibfk_2` FOREIGN KEY (`creator`) REFERENCES `tb_user_detail` (`username`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tb_jasa`
--
ALTER TABLE `tb_jasa`
  ADD CONSTRAINT `tb_jasa_ibfk_1` FOREIGN KEY (`untuk_event`) REFERENCES `tb_jenis_event` (`id_jenis_event`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tb_jasa_ibfk_3` FOREIGN KEY (`jenis_jasa`) REFERENCES `tb_jenis_jasa` (`id_jenis_jasa`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tb_jasa_ibfk_4` FOREIGN KEY (`pemilik`) REFERENCES `tb_user_detail` (`username`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tb_order`
--
ALTER TABLE `tb_order`
  ADD CONSTRAINT `tb_order_ibfk_1` FOREIGN KEY (`id_jasa`) REFERENCES `tb_jasa` (`id_jasa`) ON DELETE NO ACTION,
  ADD CONSTRAINT `tb_order_ibfk_2` FOREIGN KEY (`id_event`) REFERENCES `tb_event` (`id_event`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tb_request`
--
ALTER TABLE `tb_request`
  ADD CONSTRAINT `tb_request_ibfk_1` FOREIGN KEY (`id_sponsor`) REFERENCES `tb_sponsor` (`id_sponsor`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tb_request_ibfk_2` FOREIGN KEY (`id_event`) REFERENCES `tb_event` (`id_event`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tb_sponsor`
--
ALTER TABLE `tb_sponsor`
  ADD CONSTRAINT `tb_sponsor_ibfk_1` FOREIGN KEY (`untuk_event`) REFERENCES `tb_jenis_event` (`id_jenis_event`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tb_sponsor_ibfk_2` FOREIGN KEY (`jenis_sponsor`) REFERENCES `tb_jenis_sponsor` (`id_jenis_sponsor`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tb_sponsor_ibfk_3` FOREIGN KEY (`pemilik`) REFERENCES `tb_user_detail` (`username`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tb_user_detail`
--
ALTER TABLE `tb_user_detail`
  ADD CONSTRAINT `tb_user_detail_ibfk_1` FOREIGN KEY (`username`) REFERENCES `tb_user` (`username`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tb_user_log`
--
ALTER TABLE `tb_user_log`
  ADD CONSTRAINT `tb_user_log_ibfk_1` FOREIGN KEY (`username`) REFERENCES `tb_user_detail` (`username`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
