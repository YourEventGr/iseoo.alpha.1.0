-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2017 at 07:34 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `nama_event` text,
  `jenis_event` text,
  `creator` varchar(100) DEFAULT NULL,
  `keterangan` text,
  `tanggal` text,
  `status` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `nama_event`, `jenis_event`, `creator`, `keterangan`, `tanggal`, `status`) VALUES
(1, 'Telkom Big Event', 'Olahraga', 'wr', 'xxx', '19/10/2017', 'ongoing'),
(5, 'xx', 'Kesenian', 'wr', 'xx', '30/09/2017', 'ongoing'),
(6, 'hut SI', 'Adat', 'wr', 'bb', '27/10/2017', 'ongoing'),
(10, 'Talkom Big Event2', 'Olahraga', 'wr', 'xxx', '17 02 2017', 'ongoing'),
(12, 'INSYL', 'Olahraga', 'wr', 'xx', '17 02 2017', 'ongoing'),
(14, 'PSI', 'Olahraga', 'B.B.', '', '', 'ongoing');

-- --------------------------------------------------------

--
-- Table structure for table `jasa`
--

CREATE TABLE `jasa` (
  `id` int(11) NOT NULL,
  `nama_jasa` text,
  `harga` text,
  `kontak` text,
  `jenis_jasa` text,
  `deskripsi` text,
  `untuk_event` text,
  `pemilik` varchar(100) DEFAULT NULL,
  `status` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jasa`
--

INSERT INTO `jasa` (`id`, `nama_jasa`, `harga`, `kontak`, `jenis_jasa`, `deskripsi`, `untuk_event`, `pemilik`, `status`) VALUES
(1, 'Sound System', '1000000', '081210113977', '1', 'Menyewakan jasa penyewaan sound system dengan kualitas terbaik', 'all event', 'wr', '1'),
(2, 'Penyewaan gedung X', '15000000', '12341234', '2', 'Menyewakan gedung X untuk segala macam acara, dekorasi dapat disesuaikan dengan permintaan event organizer', 'all event', 'dzz', '1');

-- --------------------------------------------------------

--
-- Table structure for table `order_jasa`
--

CREATE TABLE `order_jasa` (
  `id` int(11) NOT NULL,
  `jasa_id` int(11) DEFAULT NULL,
  `event_id` int(11) DEFAULT NULL,
  `tanggal_order` text,
  `status` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_jasa`
--

INSERT INTO `order_jasa` (`id`, `jasa_id`, `event_id`, `tanggal_order`, `status`) VALUES
(1, 1, 1, '2017-10-04 03:14:46', 'order telah disetujui, silahkan kontak penyedia layanan'),
(4, 1, 5, '2017-10-04 03:51:58', 'waiting'),
(5, 2, 1, '2017-10-04 11:24:14', 'waiting'),
(6, 2, 6, '2017-10-04 12:17:04', 'waiting'),
(7, 1, 6, '2017-10-04 12:18:00', 'order telah disetujui, silahkan kontak penyedia layanan'),
(8, 2, 6, '2017-10-04 12:19:23', 'waiting');

-- --------------------------------------------------------

--
-- Table structure for table `request_sponsor`
--

CREATE TABLE `request_sponsor` (
  `id` int(11) NOT NULL,
  `event_id` int(11) DEFAULT NULL,
  `sponsor_id` int(11) DEFAULT NULL,
  `tanggal_request` text,
  `status` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sponsor`
--

CREATE TABLE `sponsor` (
  `id` int(11) NOT NULL,
  `nama_sponsor` text,
  `kontak` text,
  `jenis_sponsor` text,
  `deskripsi` text,
  `untuk_event` text,
  `pemilik` varchar(100) DEFAULT NULL,
  `status` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `birthday` text,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fullname`, `username`, `password`, `birthday`, `email`, `phone`, `gender`, `status`) VALUES
(8, 'Imaduddin Haris Nasution', 'duds_hn', 'nasution', '1995-10-19', 'duds@issolutions.id', '081210113977', 'male', 'member'),
(11, 'Muhammad Haekal Luthfi S', 'haekal', 'mh10061995', '1995-06-10', 'mohammed_haekal@live.com', '081310355247', 'male', 'member'),
(20, 'Hizkia Nowaly Tunay', 'hnt123456', 'hnt123456', '1995-10-15', 'hnt@issolutions.id', '1234567890', 'male', 'member'),
(21, 'Dzaky Rifqiatha', 'dzz', 'dzz', '1010-10-10', 'dzz@dzz.com', '12341241214', 'male', 'member'),
(22, 'Aziz Abdur Roziq', 'oji', 'oji1234567', '1000-10-10', '103nljnljn@fnlej.com', '139013901', 'male', 'member'),
(23, 'Aziz Abdur Roziq', 'abdurroziq', 'akuaku', '1995-05-19', 'abdurroziq.aziz@gmail.com', '082347484780', 'male', 'member'),
(42, 'Aziz Abdur Roziqq', 'a', 'a', '2010-10-10', 'azizabdurroziq@gmail.com', '12341234', 'male', 'member'),
(46, 'wr', 'wr', 'wr', '', 'wr', '2', 'Male', 'member'),
(47, 'e', 'e', 'e', '2017-08-04', 'e', '2', 'Male', 'member'),
(48, 'w', 'w', 'w', '2017-08-04', 'a@gmail.com', '12', 'Male', 'member'),
(57, 'qw', 'qw', 'qw', '', 'qw@gmail.com', '1234', '', 'member'),
(58, 'admin', 'admin', 'admin', '2017-10-10', 'admin@admin.com', '12341234', 'x', 'admin'),
(59, 'bob', 'B.B.', 'B.B.', 'bob', 'bob', 'bob', 'bob', 'member'),
(60, 'haekal', 'haekall', 'akuaku@gg.com', NULL, 'abdurroziq.aziz@gmail.com', '082345', NULL, NULL),
(61, 'ioswashere', '', '', '', '', '', '', 'member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`),
  ADD KEY `creator` (`creator`);

--
-- Indexes for table `jasa`
--
ALTER TABLE `jasa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pemilik` (`pemilik`);

--
-- Indexes for table `order_jasa`
--
ALTER TABLE `order_jasa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `event_id` (`event_id`),
  ADD KEY `jasa_id` (`jasa_id`);

--
-- Indexes for table `request_sponsor`
--
ALTER TABLE `request_sponsor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `event_id` (`event_id`),
  ADD KEY `sponsor_id` (`sponsor_id`);

--
-- Indexes for table `sponsor`
--
ALTER TABLE `sponsor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pemilik` (`pemilik`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `username_2` (`username`),
  ADD UNIQUE KEY `username_3` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `jasa`
--
ALTER TABLE `jasa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `order_jasa`
--
ALTER TABLE `order_jasa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `request_sponsor`
--
ALTER TABLE `request_sponsor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sponsor`
--
ALTER TABLE `sponsor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `event_ibfk_1` FOREIGN KEY (`creator`) REFERENCES `user` (`username`);

--
-- Constraints for table `jasa`
--
ALTER TABLE `jasa`
  ADD CONSTRAINT `jasa_ibfk_1` FOREIGN KEY (`pemilik`) REFERENCES `user` (`username`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `order_jasa`
--
ALTER TABLE `order_jasa`
  ADD CONSTRAINT `order_jasa_ibfk_1` FOREIGN KEY (`jasa_id`) REFERENCES `jasa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `order_jasa_ibfk_2` FOREIGN KEY (`event_id`) REFERENCES `event` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `request_sponsor`
--
ALTER TABLE `request_sponsor`
  ADD CONSTRAINT `request_sponsor_ibfk_1` FOREIGN KEY (`sponsor_id`) REFERENCES `sponsor` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `request_sponsor_ibfk_2` FOREIGN KEY (`event_id`) REFERENCES `event` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `sponsor`
--
ALTER TABLE `sponsor`
  ADD CONSTRAINT `sponsor_ibfk_1` FOREIGN KEY (`pemilik`) REFERENCES `user` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
