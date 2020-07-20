-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2020 at 02:54 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thuviendnc`
--

-- --------------------------------------------------------

--
-- Table structure for table `baiviet`
--

CREATE TABLE `baiviet` (
  `id_bv` int(11) NOT NULL,
  `ten_bv` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `ngaydang_bv` date NOT NULL,
  `mtngan_bv` text COLLATE utf8_unicode_ci NOT NULL,
  `nd_bv` text COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_cd` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chudebv`
--

CREATE TABLE `chudebv` (
  `id_cd` int(11) NOT NULL,
  `ten_cd` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hinhanh`
--

CREATE TABLE `hinhanh` (
  `id_anh` int(11) NOT NULL,
  `link_anh` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `id_bv` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `phanquyen`
--

CREATE TABLE `phanquyen` (
  `id_pq` int(11) NOT NULL,
  `ten_pq` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `id_group` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profileuser`
--

CREATE TABLE `profileuser` (
  `id_pro` int(11) NOT NULL,
  `name_pro` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(128) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `usergroup`
--

CREATE TABLE `usergroup` (
  `id_group` int(11) NOT NULL,
  `name_group` varchar(128) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) DEFAULT 1,
  `id_group` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baiviet`
--
ALTER TABLE `baiviet`
  ADD PRIMARY KEY (`id_bv`),
  ADD UNIQUE KEY `TenBV` (`ten_bv`),
  ADD KEY `FK_baiviet_user_ID` (`id_user`),
  ADD KEY `FK_baiviet_chudebv_ID` (`id_cd`);

--
-- Indexes for table `chudebv`
--
ALTER TABLE `chudebv`
  ADD PRIMARY KEY (`id_cd`),
  ADD UNIQUE KEY `TenCD` (`ten_cd`);

--
-- Indexes for table `hinhanh`
--
ALTER TABLE `hinhanh`
  ADD PRIMARY KEY (`id_anh`),
  ADD UNIQUE KEY `LinkImage` (`link_anh`),
  ADD KEY `FK_anh_baiviet_ID` (`id_bv`);

--
-- Indexes for table `phanquyen`
--
ALTER TABLE `phanquyen`
  ADD PRIMARY KEY (`id_pq`),
  ADD KEY `FK_phanquyen_group_ID` (`id_group`);

--
-- Indexes for table `profileuser`
--
ALTER TABLE `profileuser`
  ADD PRIMARY KEY (`id_pro`),
  ADD UNIQUE KEY `Email` (`email`),
  ADD UNIQUE KEY `Phone` (`phone`);

--
-- Indexes for table `usergroup`
--
ALTER TABLE `usergroup`
  ADD PRIMARY KEY (`id_group`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `UsersName` (`username`),
  ADD KEY `FK_user_group_ID` (`id_group`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baiviet`
--
ALTER TABLE `baiviet`
  MODIFY `id_bv` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chudebv`
--
ALTER TABLE `chudebv`
  MODIFY `id_cd` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hinhanh`
--
ALTER TABLE `hinhanh`
  MODIFY `id_anh` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `phanquyen`
--
ALTER TABLE `phanquyen`
  MODIFY `id_pq` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usergroup`
--
ALTER TABLE `usergroup`
  MODIFY `id_group` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `baiviet`
--
ALTER TABLE `baiviet`
  ADD CONSTRAINT `FK_baiviet_chudebv_ID` FOREIGN KEY (`id_cd`) REFERENCES `chudebv` (`id_cd`),
  ADD CONSTRAINT `FK_baiviet_user_ID` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Constraints for table `hinhanh`
--
ALTER TABLE `hinhanh`
  ADD CONSTRAINT `FK_anh_baiviet_ID` FOREIGN KEY (`id_bv`) REFERENCES `baiviet` (`id_bv`);

--
-- Constraints for table `phanquyen`
--
ALTER TABLE `phanquyen`
  ADD CONSTRAINT `FK_phanquyen_group_ID` FOREIGN KEY (`id_group`) REFERENCES `usergroup` (`id_group`);

--
-- Constraints for table `profileuser`
--
ALTER TABLE `profileuser`
  ADD CONSTRAINT `FK_ProfileUser_ID` FOREIGN KEY (`id_pro`) REFERENCES `users` (`id_user`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  fdlgjfdlkgjlkfd

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
