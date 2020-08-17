-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2020 at 09:59 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `id` int(10) UNSIGNED NOT NULL,
  `ten_bv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mtngan_bv` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung_bv` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `cd_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `hinhanh_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `baiviet`
--

INSERT INTO `baiviet` (`id`, `ten_bv`, `mtngan_bv`, `noidung_bv`, `alias`, `created_at`, `updated_at`, `status`, `cd_id`, `user_id`, `anhdaidien`) VALUES
(1, 'Đây là bài viết có tên 123', '<p>Đ&acirc;y l&agrave; b&agrave;i viết c&oacute; t&ecirc;n 123</p>', '<p>Đ&acirc;y l&agrave; b&agrave;i viết c&oacute; t&ecirc;n 123</p>', 'day-la-bai-viet-co-ten-123', '2020-08-14 00:40:14', '2020-08-14 00:40:14', NULL, 1, NULL, NULL),
(2, 'Đây là bài viết có tên 1231', '<p>Đ&acirc;y l&agrave; b&agrave;i viết c&oacute; t&ecirc;n 1231</p>', '<p>Đ&acirc;y l&agrave; b&agrave;i viết c&oacute; t&ecirc;n 1231</p>', 'day-la-bai-viet-co-ten-1231', '2020-08-14 00:40:56', '2020-08-14 00:40:56', NULL, 1, NULL, NULL),
(3, 'Đây là bài viết có tên 12311', '<p>Đ&acirc;y l&agrave; b&agrave;i viết c&oacute; t&ecirc;n 12311</p>', '<p>Đ&acirc;y l&agrave; b&agrave;i viết c&oacute; t&ecirc;n 12311</p>', 'day-la-bai-viet-co-ten-12311', '2020-08-14 00:41:20', '2020-08-14 00:41:20', NULL, 1, NULL, NULL),
(4, 'Đây là bài viết có tên 123111', '<p>Đ&acirc;y l&agrave; b&agrave;i viết c&oacute; t&ecirc;n 123111</p>', '<p>Đ&acirc;y l&agrave; b&agrave;i viết c&oacute; t&ecirc;n 123111</p>', 'day-la-bai-viet-co-ten-123111', '2020-08-14 00:42:06', '2020-08-14 00:42:06', NULL, 1, NULL, NULL),
(5, 'Đây là bài viết có tên 1231111', '<p>Đ&acirc;y l&agrave; b&agrave;i viết c&oacute; t&ecirc;n 1231111</p>', '<p>Đ&acirc;y l&agrave; b&agrave;i viết c&oacute; t&ecirc;n 1231111</p>', 'day-la-bai-viet-co-ten-1231111', '2020-08-14 00:42:13', '2020-08-14 00:42:13', NULL, 1, NULL, NULL),
(6, 'Đây là bài viết có tên 12311111', '<p>Đ&acirc;y l&agrave; b&agrave;i viết c&oacute; t&ecirc;n 12311111</p>', '<p>Đ&acirc;y l&agrave; b&agrave;i viết c&oacute; t&ecirc;n 12311111</p>', 'day-la-bai-viet-co-ten-12311111', '2020-08-14 00:42:21', '2020-08-14 00:42:21', NULL, 1, NULL, NULL),
(7, 'Đây là bài viết có tên 123111111', '<p>Đ&acirc;y l&agrave; b&agrave;i viết c&oacute; t&ecirc;n 123111111</p>', '<p>Đ&acirc;y l&agrave; b&agrave;i viết c&oacute; t&ecirc;n 123111111</p>', 'day-la-bai-viet-co-ten-123111111', '2020-08-14 00:42:32', '2020-08-14 00:42:32', NULL, 1, NULL, NULL),
(8, 'Đây là bài viết có tên 1231111111', '<p>Đ&acirc;y l&agrave; b&agrave;i viết c&oacute; t&ecirc;n 1231111111</p>', '<p>Đ&acirc;y l&agrave; b&agrave;i viết c&oacute; t&ecirc;n 1231111111</p>', 'day-la-bai-viet-co-ten-1231111111', '2020-08-14 00:42:40', '2020-08-14 00:42:40', NULL, 1, NULL, NULL),
(9, 'Đây là bài viết có tên 12311111111', '<p>Đ&acirc;y l&agrave; b&agrave;i viết c&oacute; t&ecirc;n 12311111111</p>', '<p>Đ&acirc;y l&agrave; b&agrave;i viết c&oacute; t&ecirc;n 12311111111</p>', 'day-la-bai-viet-co-ten-12311111111', '2020-08-14 00:42:48', '2020-08-14 00:42:48', NULL, 1, NULL, NULL),
(10, 'Đây là bài viết có tên 123111111111', '<p>Đ&acirc;y l&agrave; b&agrave;i viết c&oacute; t&ecirc;n 123111111111</p>', '<p>Đ&acirc;y l&agrave; b&agrave;i viết c&oacute; t&ecirc;n 123111111111</p>', 'day-la-bai-viet-co-ten-123111111111', '2020-08-14 00:42:59', '2020-08-14 00:42:59', NULL, 1, NULL, NULL),
(11, 'Đây là bài viết có tên 1231111111111', '<p>Đ&acirc;y l&agrave; b&agrave;i viết c&oacute; t&ecirc;n 1231111111111</p>', '<p>Đ&acirc;y l&agrave; b&agrave;i viết c&oacute; t&ecirc;n 1231111111111</p>', 'day-la-bai-viet-co-ten-1231111111111', '2020-08-14 00:43:21', '2020-08-14 00:43:21', NULL, 1, NULL, NULL),
(12, 'Đây là bài viết có tên 12311111111111', '<p>Đ&acirc;y l&agrave; b&agrave;i viết c&oacute; t&ecirc;n 12311111111111</p>', '<p>Đ&acirc;y l&agrave; b&agrave;i viết c&oacute; t&ecirc;n 12311111111111</p>', 'day-la-bai-viet-co-ten-12311111111111', '2020-08-14 00:43:29', '2020-08-14 00:43:29', NULL, 1, NULL, NULL),
(13, 'Đây là bài viết có tên 123111111111111', '<p>Đ&acirc;y l&agrave; b&agrave;i viết c&oacute; t&ecirc;n 123111111111111</p>', '<p>Đ&acirc;y l&agrave; b&agrave;i viết c&oacute; t&ecirc;n 123111111111111</p>', 'day-la-bai-viet-co-ten-123111111111111', '2020-08-14 00:43:35', '2020-08-14 00:43:35', NULL, 1, NULL, NULL),
(14, 'Đây là bài viết có tên 1231111111111111', '<p>Đ&acirc;y l&agrave; b&agrave;i viết c&oacute; t&ecirc;n 1231111111111111</p>', '<p>Đ&acirc;y l&agrave; b&agrave;i viết c&oacute; t&ecirc;n 1231111111111111</p>', 'day-la-bai-viet-co-ten-1231111111111111', '2020-08-14 00:43:50', '2020-08-14 00:43:50', NULL, 1, NULL, NULL),
(15, 'Đây là bài viết có tên 12311111111111111', '<p>Đ&acirc;y l&agrave; b&agrave;i viết c&oacute; t&ecirc;n 12311111111111111</p>', '<p>Đ&acirc;y l&agrave; b&agrave;i viết c&oacute; t&ecirc;n 12311111111111111</p>', 'day-la-bai-viet-co-ten-12311111111111111', '2020-08-14 00:44:31', '2020-08-14 00:44:31', NULL, 1, NULL, NULL),
(16, 'Đây là bài viết có tên 123111111111111111', '<p>Đ&acirc;y l&agrave; b&agrave;i viết c&oacute; t&ecirc;n 123111111111111111</p>', '<p>Đ&acirc;y l&agrave; b&agrave;i viết c&oacute; t&ecirc;n 123111111111111111</p>', 'day-la-bai-viet-co-ten-123111111111111111', '2020-08-14 00:44:40', '2020-08-14 00:44:40', NULL, 1, NULL, NULL),
(17, 'Đây là bài viết có tên 1231111111111111111', '<p>Đ&acirc;y l&agrave; b&agrave;i viết c&oacute; t&ecirc;n 1231111111111111111</p>', '<p>Đ&acirc;y l&agrave; b&agrave;i viết c&oacute; t&ecirc;n 1231111111111111111</p>', 'day-la-bai-viet-co-ten-1231111111111111111', '2020-08-14 00:44:52', '2020-08-14 00:44:52', NULL, 1, NULL, NULL),
(18, 'Đây là bài viết có tên 12311111111111111111', '<p>Đ&acirc;y l&agrave; b&agrave;i viết c&oacute; t&ecirc;n 12311111111111111111</p>', '<p>Đ&acirc;y l&agrave; b&agrave;i viết c&oacute; t&ecirc;n 12311111111111111111</p>', 'day-la-bai-viet-co-ten-12311111111111111111', '2020-08-14 00:45:01', '2020-08-14 00:45:01', NULL, 1, NULL, NULL),
(19, 'Đây là bài viết có tên 123111111111111111111', '<p>Đ&acirc;y l&agrave; b&agrave;i viết c&oacute; t&ecirc;n 123111111111111111111</p>', '<p>Đ&acirc;y l&agrave; b&agrave;i viết c&oacute; t&ecirc;n 123111111111111111111</p>', 'day-la-bai-viet-co-ten-123111111111111111111', '2020-08-14 00:45:18', '2020-08-14 00:45:18', NULL, 1, NULL, NULL),
(20, 'Đây là bài viết có tên 1231111111111111111111', '<p>Đ&acirc;y l&agrave; b&agrave;i viết c&oacute; t&ecirc;n 1231111111111111111111</p>', '<p>Đ&acirc;y l&agrave; b&agrave;i viết c&oacute; t&ecirc;n 1231111111111111111111</p>', 'day-la-bai-viet-co-ten-1231111111111111111111', '2020-08-14 00:45:27', '2020-08-14 00:45:27', NULL, 1, NULL, NULL),
(21, 'Đây là bài viết có tên 12311111111111111111111', '<p>Đ&acirc;y l&agrave; b&agrave;i viết c&oacute; t&ecirc;n 12311111111111111111111</p>', '<p>Đ&acirc;y l&agrave; b&agrave;i viết c&oacute; t&ecirc;n 12311111111111111111111</p>', 'day-la-bai-viet-co-ten-12311111111111111111111', '2020-08-14 00:45:38', '2020-08-14 00:45:38', NULL, 1, NULL, NULL),
(22, 'Đây là bài viết có tên 123111111111111111111111', '<p>Đ&acirc;y l&agrave; b&agrave;i viết c&oacute; t&ecirc;n 123111111111111111111111</p>', '<p>Đ&acirc;y l&agrave; b&agrave;i viết c&oacute; t&ecirc;n 123111111111111111111111</p>', 'day-la-bai-viet-co-ten-123111111111111111111111', '2020-08-14 00:45:47', '2020-08-14 00:45:47', NULL, 1, NULL, NULL),
(23, 'Đây là bài viết có tên 1231111111111111111111111', '<p>Đ&acirc;y l&agrave; b&agrave;i viết c&oacute; t&ecirc;n 1231111111111111111111111</p>', '<p>Đ&acirc;y l&agrave; b&agrave;i viết c&oacute; t&ecirc;n 1231111111111111111111111</p>', 'day-la-bai-viet-co-ten-1231111111111111111111111', '2020-08-14 00:46:05', '2020-08-14 00:46:05', NULL, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `chudebv`
--

CREATE TABLE `chudebv` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten_cd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chudebv`
--

INSERT INTO `chudebv` (`id`, `ten_cd`, `alias`, `created_at`, `updated_at`) VALUES
(1, 'Tin tức - Sự kiện', 'tin-tuc-su-kien', '2020-08-14 00:39:39', '2020-08-14 00:39:39');

-- --------------------------------------------------------

--
-- Table structure for table `hinhanh`
--

CREATE TABLE `hinhanh` (
  `id` int(10) UNSIGNED NOT NULL,
  `link_anh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten_anh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2020_08_13_090626_create_chudebv_table', 1),
(2, '2020_08_13_090647_create_phanquyen_table', 1),
(3, '2020_08_13_090731_create_usergroup_table', 1),
(4, '2020_08_13_090804_create_users_table', 1),
(5, '2020_08_13_090829_create_profileuser_table', 1),
(6, '2020_08_13_090856_create_hinhanh_table', 1),
(7, '2020_08_13_090927_create_baiviet_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `phanquyen`
--

CREATE TABLE `phanquyen` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten_pq` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profileuser`
--

CREATE TABLE `profileuser` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_prouser` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `users_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `usergroup`
--

CREATE TABLE `usergroup` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_group` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pq_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usergroup_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baiviet`
--
ALTER TABLE `baiviet`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `baiviet_ten_bv_unique` (`ten_bv`),
  ADD KEY `baiviet_cd_id_foreign` (`cd_id`),
  ADD KEY `baiviet_user_id_foreign` (`user_id`),
  ADD KEY `baiviet_hinhanh_id_foreign` (`hinhanh_id`);

--
-- Indexes for table `chudebv`
--
ALTER TABLE `chudebv`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `chudebv_ten_cd_unique` (`ten_cd`);

--
-- Indexes for table `hinhanh`
--
ALTER TABLE `hinhanh`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phanquyen`
--
ALTER TABLE `phanquyen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profileuser`
--
ALTER TABLE `profileuser`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `profileuser_email_unique` (`email`),
  ADD KEY `profileuser_users_id_foreign` (`users_id`);

--
-- Indexes for table `usergroup`
--
ALTER TABLE `usergroup`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usergroup_pq_id_foreign` (`pq_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_usergroup_id_foreign` (`usergroup_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baiviet`
--
ALTER TABLE `baiviet`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `chudebv`
--
ALTER TABLE `chudebv`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hinhanh`
--
ALTER TABLE `hinhanh`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `phanquyen`
--
ALTER TABLE `phanquyen`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profileuser`
--
ALTER TABLE `profileuser`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usergroup`
--
ALTER TABLE `usergroup`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `baiviet`
--
ALTER TABLE `baiviet`
  ADD CONSTRAINT `baiviet_cd_id_foreign` FOREIGN KEY (`cd_id`) REFERENCES `chudebv` (`id`),
  ADD CONSTRAINT `baiviet_hinhanh_id_foreign` FOREIGN KEY (`hinhanh_id`) REFERENCES `hinhanh` (`id`),
  ADD CONSTRAINT `baiviet_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `profileuser`
--
ALTER TABLE `profileuser`
  ADD CONSTRAINT `profileuser_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `usergroup`
--
ALTER TABLE `usergroup`
  ADD CONSTRAINT `usergroup_pq_id_foreign` FOREIGN KEY (`pq_id`) REFERENCES `phanquyen` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_usergroup_id_foreign` FOREIGN KEY (`usergroup_id`) REFERENCES `usergroup` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
