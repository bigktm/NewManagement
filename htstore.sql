-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 30, 2021 lúc 02:35 PM
-- Phiên bản máy phục vụ: 10.1.34-MariaDB
-- Phiên bản PHP: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `htstore`
--

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
(3, '2021_07_26_132647_create_tbl_category_product', 1),
(4, '2021_07_29_081514_table_tbl_brand_product', 2),
(5, '2021_07_29_132600_table_tbl_product', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_brand`
--

CREATE TABLE `tbl_brand` (
  `brand_id` int(10) UNSIGNED NOT NULL,
  `brand_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_brand`
--

INSERT INTO `tbl_brand` (`brand_id`, `brand_name`, `brand_slug`, `brand_desc`, `brand_status`, `created_at`, `updated_at`) VALUES
(1, 'Burberry', 'burberry', 'Thương hiệu thời trang nổi tiếng của quốc đảo sương mù do Thomas Burberry, một người may quần áo ở Anh, sáng lập vào năm 1856.', 0, NULL, NULL),
(2, 'ZARA', 'zara', 'Zara là một thương hiệu thời trang bình dân nổi tiếng bán chạy nhất thế giới với quy mô toàn cầu, được thành lập bởi Amancio Ortega vào năm 1975, thuộc tập đoàn dệt may Inditex Tây Ban Nha, với cái tên ban đầu là Zobra – được lấy cảm hứng từ phim “Zobra The Greek”, Tuy nhiên, sau đó vì sợ bị nhầm lẫn nên nhà thiết kế đã quyết định đổi thành Zara và phát triển như ngày nay.', 1, NULL, NULL),
(3, 'Louis Vuitton', 'louis-vuitton', 'Louis Vuitton là một cái tên tối thượng trong làng thời trang Pháp', 1, NULL, NULL),
(4, 'Gucci', 'gucci', 'The House of Gucci, hay Gucci, là một biểu tượng thời trang của Italia và Pháp, một nhãn hiệu đồ da nổi tiếng', 1, NULL, NULL),
(5, 'Leo Vatino', 'leo-vatino', 'Thương hiệu thời trang Việt Nam', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category_product`
--

CREATE TABLE `tbl_category_product` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_keywords` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_status` int(11) NOT NULL,
  `category_parent` int(11) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_category_product`
--

INSERT INTO `tbl_category_product` (`category_id`, `category_name`, `category_slug`, `category_desc`, `category_keywords`, `category_status`, `category_parent`, `created_at`, `updated_at`) VALUES
(1, 'Áo Polo', 'ao-polo', 'Áo Polo mới cập nhật năm 2021', 'Áo Polo', 1, 0, '2021-07-28', NULL),
(2, 'Áo thun', 'ao-thun', 'Áo thun 2021', 'áo thun', 1, 0, '2021-07-28', NULL),
(4, 'Áo Polo Hoạ Tiết', 'ao-polo-hoa-tiet', 'Áo Polo Hoạ Tiết', 'Áo Polo', 1, 1, NULL, NULL),
(5, 'Quần Jeans', 'quan-jeans', 'Quần Jeans', 'Quần Jeans', 1, 0, NULL, NULL),
(6, 'Áo Polo Galvin', 'ao-polo-galvin', 'Áo Polo Galvin', 'Áo Polo Galvin', 1, 1, NULL, NULL),
(7, 'Quần Jeans Ngố', 'quan-jeans-ngo', 'Quần Jeans Ngố', 'Quần Jeans Ngố', 1, 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_sku` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_desc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` decimal(8,2) NOT NULL,
  `product_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_status` int(11) NOT NULL,
  `product_keywords` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `category_id`, `brand_id`, `product_name`, `product_image`, `product_slug`, `product_sku`, `product_desc`, `product_price`, `product_content`, `product_status`, `product_keywords`, `created_at`, `updated_at`) VALUES
(4, 2, 4, 'Áo đấu Cati mùa 2022', 'preview (5)35.png', 'ao-dau-cati-mua-2022', 'HT-CT-001', 'Áo đấu Cati mùa 2022', '220000.00', 'Áo đấu Cati mùa 2022', 1, 'cati,áo đấu', NULL, NULL),
(5, 7, 4, 'Áo đấu Cati sân khách', 'preview (1)16.png', 'ao-dau-cati-san-khach', 'HT-CT-002', 'Áo đấu Cati sân khách', '180000.00', 'Áo đấu Cati sân khách', 0, 'áo cati', NULL, NULL),
(6, 2, 5, 'Áo thun nam trơn màu vàng bò', 'áo vàng56.png', 'ao-thun-nam-tron-mau-vang-bo', 'HT-AT-001', 'Áo thun nam trơn màu vàng bò', '210000.00', 'Áo thun nam trơn màu vàng bò', 1, 'áo thun', NULL, NULL),
(7, 2, 5, 'Áo thun nam trơn màu cam', 'áo cam39.png', 'ao-thun-nam-tron-mau-cam', 'HT-AT-002', 'Áo thun nam trơn màu cam', '210000.00', 'Áo thun nam trơn màu cam', 1, 'áo thun', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Hoàng Anh', 'hoanganh94cit@gmail.com', '$2y$10$7zVE.StwkH5C3FWEs7j1auEuyzLiC8UtmCpj7ZZiF0cpXI5UuVcjS', 'nCokf0vRgOvR3Vx6opoMA3qrKCS31SGAUGoaxQUO5VO0UWyCMuYzTDUD4kvR', '2021-07-28 06:21:49', '2021-07-28 06:21:49');

--
-- Chỉ mục cho các bảng đã đổ
--

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
-- Chỉ mục cho bảng `tbl_brand`
--
ALTER TABLE `tbl_brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Chỉ mục cho bảng `tbl_category_product`
--
ALTER TABLE `tbl_category_product`
  ADD PRIMARY KEY (`category_id`);

--
-- Chỉ mục cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `brand_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tbl_category_product`
--
ALTER TABLE `tbl_category_product`
  MODIFY `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
