-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 08, 2022 lúc 08:49 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `studio1`
--
CREATE DATABASE IF NOT EXISTS `studio1` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `studio1`;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `anhcuois`
--

CREATE TABLE `anhcuois` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `anhcuois`
--

INSERT INTO `anhcuois` (`id`, `name`, `price`, `image`, `created_at`, `updated_at`) VALUES
(1, 'ALBUM ẢNH CƯỚI TẠI PHIM TRƯỜNG L\'AMOUR', 789, '1.jpg', NULL, NULL),
(2, 'ALBUM ẢNH CƯỚI TẠI PHIM TRƯỜNG ALIBABA', 690, '2.jpg', NULL, NULL),
(3, 'ALBUM ẢNH CƯỚI TẠI PHIM TRƯỜNG PARIS', 590, '3.jpg', NULL, NULL),
(4, 'ALBUM ẢNH CƯỚI  TẠI PHIM TRƯỜNG ENDEE', 670, '4.jpg', NULL, NULL),
(5, 'ALBUM ẢNH CƯỚI CHỤP TRONG NỘI THÀNH SÀI GÒN', 740, '5.jpg', NULL, NULL),
(6, 'ALBUM ẢNH CƯỚI CHỤP TRONG PHIM TRƯỜNG CABIN', 760, '6.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `aocuois`
--

CREATE TABLE `aocuois` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `aocuois`
--

INSERT INTO `aocuois` (`id`, `name`, `price`, `image`, `created_at`, `updated_at`) VALUES
(1, 'SELENA - VLITX-479 LIMITED BALL GOWN IVORY ROYAL CATHEDRAL', 1100, '1.jpg', NULL, NULL),
(2, 'HERA - VLTX-480 LUXURY BALL GOWN LONG SLEEVE 3D LACE CATHEDRAL ', 1300, '2.jpg', NULL, NULL),
(3, 'FREYJA - VLTX-481 BALL GOWN ROYAL CATHEDRAL TRAIN LONG SLEEVE HIGH ', 1200, '3.jpg', NULL, NULL),
(4, 'ATHENA-VLTX-482 BALL GOWN FLOOR LENGTH WEDDING DRESS', 1529, '4.jpg', NULL, NULL),
(5, 'VMDC - 395 MERMAID IVORY PRINCESS FLOOR LENGTH V NECK SATIN ', 1430, '5.jpg', NULL, NULL),
(6, 'VLTX-394 LUXURY BALL GOWN HIGH NECK LONG 3D LACE WEDDING DRESS', 1230, '6.jpg', NULL, NULL),
(7, 'VMDC-408 MERMAID IVORY MINIMALIST FLOOR LENGTH 3D FLORAL ', 1390, '7.jpg', NULL, NULL),
(8, 'VLTX - 406 LUXURY BALL GOWN CATHEDRAL TRAIN STRAPLESS', 1690, '8.jpg', NULL, NULL),
(9, 'VMDC-408 MINIMALIST FLOOR LENGTH WITH LONG CAP 2D FLORAL ', 1403, '9.jpg', NULL, NULL),
(10, 'SELENA - VLITX-479 LIMITED BALL GOWN IVORY ROYAL CATHEDRAL', 1290, '0.jpg', NULL, NULL),
(11, 'HERA - VLTX-480 LUXURY BALL GOWN LONG SLEEVE 3D LACE CATHEDRAL ', 1390, '0-1.jpg', NULL, NULL),
(12, 'FREYJA - VLTX-481 BALL GOWN ROYAL CATHEDRAL TRAIN LONG SLEEVE HIGH ', 1190, '0-2.jpg', NULL, NULL),
(13, 'ATHENA-VLTX-482 BALL GOWN FLOOR LENGTH WEDDING DRESS', 1490, '6-1.jpg', NULL, NULL),
(14, 'VMDC - 395 MERMAID IVORY PRINCESS FLOOR LENGTH V NECK SATIN ', 1250, '6-2.jpg', NULL, NULL),
(15, 'VLTX-394 LUXURY BALL GOWN HIGH NECK LONG 3D LACE WEDDING DRESS', 1550, '9-2.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bills_anh_cuois`
--

CREATE TABLE `bills_anh_cuois` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bills_anh_cuois`
--

INSERT INTO `bills_anh_cuois` (`id`, `user_id`, `note`, `created_at`, `updated_at`) VALUES
(5, 18, 'không', '2022-04-07 06:41:33', '2022-04-07 06:41:33');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bills_anh_cuoi_details`
--

CREATE TABLE `bills_anh_cuoi_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `billsanhcuoi_id` bigint(20) UNSIGNED NOT NULL,
  `anhcuoi_id` bigint(20) UNSIGNED NOT NULL,
  `price` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bills_anh_cuoi_details`
--

INSERT INTO `bills_anh_cuoi_details` (`id`, `billsanhcuoi_id`, `anhcuoi_id`, `price`, `quantity`, `created_at`, `updated_at`) VALUES
(9, 5, 1, 789, 2, '2022-04-07 06:41:33', '2022-04-07 06:41:33'),
(10, 5, 2, 690, 1, '2022-04-07 06:41:33', '2022-04-07 06:41:33');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bills_ao_cuois`
--

CREATE TABLE `bills_ao_cuois` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bills_ao_cuois`
--

INSERT INTO `bills_ao_cuois` (`id`, `user_id`, `note`, `created_at`, `updated_at`) VALUES
(13, 18, 'không', '2022-04-07 06:41:25', '2022-04-07 06:41:25'),
(16, 2, 'không', '2022-04-08 03:59:14', '2022-04-08 03:59:14');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bills_ao_cuoi_details`
--

CREATE TABLE `bills_ao_cuoi_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `billsaocuoi_id` bigint(20) UNSIGNED NOT NULL,
  `aocuoi_id` bigint(20) UNSIGNED NOT NULL,
  `price` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bills_ao_cuoi_details`
--

INSERT INTO `bills_ao_cuoi_details` (`id`, `billsaocuoi_id`, `aocuoi_id`, `price`, `quantity`, `created_at`, `updated_at`) VALUES
(24, 13, 1, 1100, 2, '2022-04-07 06:41:25', '2022-04-07 06:41:25'),
(25, 13, 2, 1300, 1, '2022-04-07 06:41:25', '2022-04-07 06:41:25');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chi_tiet_anh_cuois`
--

CREATE TABLE `chi_tiet_anh_cuois` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_anhcuoi` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chi_tiet_anh_cuois`
--

INSERT INTO `chi_tiet_anh_cuois` (`id`, `image1`, `image2`, `image3`, `id_anhcuoi`, `created_at`, `updated_at`) VALUES
(1, '1.jpg', '1-1.jpg', '1-2.jpg', 1, NULL, NULL),
(2, '2-1.jpg', '2-2.jpg', '2-3.jpg', 2, NULL, NULL),
(3, '3.jpg', '3-1.jpg', '3-2.jpg', 3, NULL, NULL),
(4, '4.jpg', '4-1.jpg', '4-2.jpg', 4, NULL, NULL),
(5, '5.jpg', '5-1.jpg', '5-2.jpg', 5, NULL, NULL),
(6, '6-1.jpg', '6-2.jpg', '6-3.jpg', 6, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chi_tiet_ao_cuois`
--

CREATE TABLE `chi_tiet_ao_cuois` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_aocuoi` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chi_tiet_ao_cuois`
--

INSERT INTO `chi_tiet_ao_cuois` (`id`, `image1`, `image2`, `image3`, `id_aocuoi`, `created_at`, `updated_at`) VALUES
(1, '1.jpg', '1-1.jpg', '1-2.jpg', 1, NULL, NULL),
(2, '2.jpg', '2-1.jpg', '2-2.jpg', 2, NULL, NULL),
(3, '3.jpg', '3-1.jpg', '3-2.jpg', 3, NULL, NULL),
(4, '4.jpg', '4-1.jpg', '4-2.jpg', 4, NULL, NULL),
(5, '5.jpg', '5-1.jpg', '5-2.jpg', 5, NULL, NULL),
(6, '6.jpg', '6-1.jpg', '6-2.jpg', 6, NULL, NULL),
(7, '7.jpg', '7-1.jpg', '7-2.jpg', 7, NULL, NULL),
(8, '8.jpg', '8-1.jpg', '8-2.jpg', 8, NULL, NULL),
(9, '9.jpg', '9-1.jpg', '9-2.jpg', 9, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_03_28_183357_create_aocuois_table', 2),
(6, '2022_03_29_054557_create_anhcuois_table', 3),
(7, '2022_03_29_115829_create_chi_tiet_ao_cuois_table', 4),
(8, '2022_03_30_154236_create_chi_tiet_anh_cuois_table', 5),
(13, '2022_04_01_141034_create_bills_ao_cuoi_details_table', 9),
(14, '2022_04_01_144935_create_bills_ao_cuois_table', 10),
(15, '2022_04_01_154838_create_bills_anh_cuois_table', 11),
(16, '2022_04_01_155108_create_bills_anh_cuoi_details_table', 11);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` int(11) NOT NULL DEFAULT 1,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'AvatarUser.png',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `role`, `image`, `name`, `email`, `phone`, `address`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 2, '003.jpg', 'Nhu Hoang Hai', 'nhuhoanghai1900@gmail.com', '0933037293', 'Viet Nam', NULL, '$2y$10$j5nM9KuQ4oF9KziL0jfHpeCaaVSZjMd4BNiYcnuQ09piKQ4xzF4Xm', NULL, '2022-03-28 11:18:02', '2022-03-28 11:18:02'),
(2, 1, '0.jpg', 'Hoang Hai', 'nhuhoanghai@gmail.com', '0123456789', 'china', NULL, '$2y$10$SojTHc6OkZ1ZaYh5Aw8jMumXgU6JJt8tQ7GoE7m5YDXXcmn91mQ82', 'bhDgygigQo5Z3AZshSKAMSSO8M1SP0NKRz4ue9AkBh0Gvpqy23esUDJvsize', '2022-03-28 11:18:20', '2022-03-28 11:18:20'),
(18, 1, 'quang.jpg', 'Lê Minh Quang', 'leminhquang@gmail.com', '0933037293', 'Việt Nam', NULL, '$2y$10$TSI9hdonDvpuFG3ACZnVZu5hWpaNUbrStaooPsez4IvxmKdgHo.pS', NULL, NULL, NULL),
(19, 1, 'hung.jpg', 'Đặng Ngọc Hùng', 'ngochung@gmail.com', '0933037293', 'Việt Nam', NULL, '$2y$10$sAt0P2skStLiFb2.T3CxAe5kFW1M76EWh5A0aGEFxpwvvqIUHqVze', NULL, '2022-04-08 05:25:05', '2022-04-08 05:25:05'),
(21, 1, 'nam.jpg', 'Đỗ Phương Nam', 'phuongnam@gmail.com', '0933037293', 'Việt Nam', NULL, '$2y$10$M7l3nB1KQKPJ.I9n7M7A9uj1LOZCRP2iyBUFWHrJu/MMam0/.op9u', NULL, '2022-04-08 07:52:50', '2022-04-08 07:52:50');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `anhcuois`
--
ALTER TABLE `anhcuois`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Chỉ mục cho bảng `aocuois`
--
ALTER TABLE `aocuois`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Chỉ mục cho bảng `bills_anh_cuois`
--
ALTER TABLE `bills_anh_cuois`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `id` (`id`);

--
-- Chỉ mục cho bảng `bills_anh_cuoi_details`
--
ALTER TABLE `bills_anh_cuoi_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `anhcuoi_id` (`anhcuoi_id`),
  ADD KEY `billsanhcuoi_id` (`billsanhcuoi_id`),
  ADD KEY `id` (`id`);

--
-- Chỉ mục cho bảng `bills_ao_cuois`
--
ALTER TABLE `bills_ao_cuois`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `bills_ao_cuoi_details`
--
ALTER TABLE `bills_ao_cuoi_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `billsaocuoi_id` (`billsaocuoi_id`),
  ADD KEY `aocuoi_id` (`aocuoi_id`),
  ADD KEY `id` (`id`);

--
-- Chỉ mục cho bảng `chi_tiet_anh_cuois`
--
ALTER TABLE `chi_tiet_anh_cuois`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_anhcuoi` (`id_anhcuoi`);

--
-- Chỉ mục cho bảng `chi_tiet_ao_cuois`
--
ALTER TABLE `chi_tiet_ao_cuois`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_aocuoi` (`id_aocuoi`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `anhcuois`
--
ALTER TABLE `anhcuois`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `aocuois`
--
ALTER TABLE `aocuois`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT cho bảng `bills_anh_cuois`
--
ALTER TABLE `bills_anh_cuois`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `bills_anh_cuoi_details`
--
ALTER TABLE `bills_anh_cuoi_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `bills_ao_cuois`
--
ALTER TABLE `bills_ao_cuois`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `bills_ao_cuoi_details`
--
ALTER TABLE `bills_ao_cuoi_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `chi_tiet_anh_cuois`
--
ALTER TABLE `chi_tiet_anh_cuois`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `chi_tiet_ao_cuois`
--
ALTER TABLE `chi_tiet_ao_cuois`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bills_anh_cuois`
--
ALTER TABLE `bills_anh_cuois`
  ADD CONSTRAINT `bills_anh_cuois_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `bills_anh_cuoi_details`
--
ALTER TABLE `bills_anh_cuoi_details`
  ADD CONSTRAINT `bills_anh_cuoi_details_ibfk_1` FOREIGN KEY (`billsanhcuoi_id`) REFERENCES `bills_anh_cuois` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bills_anh_cuoi_details_ibfk_2` FOREIGN KEY (`anhcuoi_id`) REFERENCES `anhcuois` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `bills_ao_cuois`
--
ALTER TABLE `bills_ao_cuois`
  ADD CONSTRAINT `bills_ao_cuois_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `bills_ao_cuoi_details`
--
ALTER TABLE `bills_ao_cuoi_details`
  ADD CONSTRAINT `bills_ao_cuoi_details_ibfk_1` FOREIGN KEY (`aocuoi_id`) REFERENCES `aocuois` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bills_ao_cuoi_details_ibfk_2` FOREIGN KEY (`billsaocuoi_id`) REFERENCES `bills_ao_cuois` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `chi_tiet_anh_cuois`
--
ALTER TABLE `chi_tiet_anh_cuois`
  ADD CONSTRAINT `chi_tiet_anh_cuois_ibfk_1` FOREIGN KEY (`id_anhcuoi`) REFERENCES `anhcuois` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `chi_tiet_ao_cuois`
--
ALTER TABLE `chi_tiet_ao_cuois`
  ADD CONSTRAINT `chi_tiet_ao_cuois_ibfk_1` FOREIGN KEY (`id_aocuoi`) REFERENCES `aocuois` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
