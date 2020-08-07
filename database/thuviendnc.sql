-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2020 at 10:20 AM
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
  `id` int(10) UNSIGNED NOT NULL,
  `ten_bv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mtngan_bv` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung_bv` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL,
  `cd_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `baiviet`
--

INSERT INTO `baiviet` (`id`, `ten_bv`, `mtngan_bv`, `noidung_bv`, `alias`, `created_at`, `updated_at`, `status`, `cd_id`, `user_id`) VALUES
(4, 'Toggle main menu visibility  TRANG CHỦ GIỚI THIỆU TRA CỨU OPAC SÁCH ĐIỆN TỬ TÀI LIỆU NỘI SINH TIN TỨC HƯỚNG DẪN SỬ DỤNG GÓC TẢN MẠN SV Hướng dẫn khai thác tài liệu trên website thư viện DNC', 'Nhằm hỗ trợ sinh viên tìm kiếm tài liệu phục vụ cho việc học một cách hiệu quả và nhanh chóng, Thư viện DNC đã tổ chức nhiều', '<p>Nhằm hỗ trợ sinh vi&ecirc;n t&igrave;m kiếm t&agrave;i liệu phục vụ cho việc học một c&aacute;ch hiệu quả v&agrave; nhanh ch&oacute;ng, Thư viện DNC đ&atilde; tổ chức nhiều buổi hướng dẫn sinh vi&ecirc;n khai th&aacute;c nguồn t&agrave;i nguy&ecirc;n đang c&oacute; tại thư viện bao gồm: giới thiệu website thư viện,&nbsp;hướng dẫn c&aacute;ch t&igrave;m kiếm c&aacute;c nguồn&nbsp;t&agrave;i liệu điện tử tr&ecirc;n trang thư viện v&agrave; giới thiệu về kho s&aacute;ch của thư viện.</p>\r\n\r\n<p>H&igrave;nh ảnh hoạt động:</p>\r\n\r\n<p><img alt=\"\" src=\"http://thuvien.nctu.edu.vn/upload/dnc_ebook_train_3.PNG\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://thuvien.nctu.edu.vn/upload/dnc_ebook_train_2.PNG\" /></p>', 'toggle-main-menu-visibility-trang-chu-gioi-thieu-tra-cuu-opac-sach-dien-tu-tai-lieu-noi-sinh-tin-tuc-huong-dan-su-dung-goc-tan-man-sv-huong-dan-khai-thac-tai-lieu-tren-website-thu-vien-dnc', '2018-07-09 10:00:00', NULL, 1, 1, 1);

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
(1, 'Góc tản mạn sinh viên', 'goc-tan-man-sinh-vien', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hinhanh`
--

CREATE TABLE `hinhanh` (
  `id` int(10) UNSIGNED NOT NULL,
  `link_anh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bv_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hinhanh`
--

INSERT INTO `hinhanh` (`id`, `link_anh`, `bv_id`, `created_at`, `updated_at`) VALUES
(1, '1530587132.png', 4, NULL, NULL);

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
(11, '2020_08_07_063356_create_chudebv_table', 1),
(12, '2020_08_07_063510_create_profileuser_table', 1),
(13, '2020_08_07_063535_create_phanquyen_table', 1),
(14, '2020_08_07_063558_create_usergroup_table', 1),
(15, '2020_08_07_063613_create_users_table', 1),
(16, '2020_08_07_063635_create_baiviet_table', 1),
(17, '2020_08_07_063654_create_hinhanh_table', 1);

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

--
-- Dumping data for table `phanquyen`
--

INSERT INTO `phanquyen` (`id`, `ten_pq`, `created_at`, `updated_at`) VALUES
(1, 'Quyền Admin', NULL, NULL);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profileuser`
--

INSERT INTO `profileuser` (`id`, `name_prouser`, `email`, `address`, `sdt`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn Hoàng Giang', 'jasonnguyen0204@gmail.com', '2338/4 Mỹ hưng 1, Mỹ Hòa, Bình Minh, Vĩnh Long', '0789539650', NULL, NULL);

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

--
-- Dumping data for table `usergroup`
--

INSERT INTO `usergroup` (`id`, `name_group`, `pq_id`, `created_at`, `updated_at`) VALUES
(1, 'admin', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usergroup_id` int(10) UNSIGNED NOT NULL,
  `profileuser_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `status`, `usergroup_id`, `profileuser_id`, `created_at`, `updated_at`) VALUES
(1, 'admin1', 'e00cf25ad42683b3df678c61f42c6bda', '1', 1, 1, NULL, NULL);

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
  ADD KEY `baiviet_user_id_foreign` (`user_id`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `hinhanh_bv_id_foreign` (`bv_id`);

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
  ADD UNIQUE KEY `profileuser_email_unique` (`email`);

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
  ADD KEY `users_usergroup_id_foreign` (`usergroup_id`),
  ADD KEY `users_profileuser_id_foreign` (`profileuser_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baiviet`
--
ALTER TABLE `baiviet`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `chudebv`
--
ALTER TABLE `chudebv`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hinhanh`
--
ALTER TABLE `hinhanh`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `phanquyen`
--
ALTER TABLE `phanquyen`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `profileuser`
--
ALTER TABLE `profileuser`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `usergroup`
--
ALTER TABLE `usergroup`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `baiviet`
--
ALTER TABLE `baiviet`
  ADD CONSTRAINT `baiviet_cd_id_foreign` FOREIGN KEY (`cd_id`) REFERENCES `chudebv` (`id`),
  ADD CONSTRAINT `baiviet_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `hinhanh`
--
ALTER TABLE `hinhanh`
  ADD CONSTRAINT `hinhanh_bv_id_foreign` FOREIGN KEY (`bv_id`) REFERENCES `baiviet` (`id`);

--
-- Constraints for table `usergroup`
--
ALTER TABLE `usergroup`
  ADD CONSTRAINT `usergroup_pq_id_foreign` FOREIGN KEY (`pq_id`) REFERENCES `phanquyen` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_profileuser_id_foreign` FOREIGN KEY (`profileuser_id`) REFERENCES `profileuser` (`id`),
  ADD CONSTRAINT `users_usergroup_id_foreign` FOREIGN KEY (`usergroup_id`) REFERENCES `usergroup` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
