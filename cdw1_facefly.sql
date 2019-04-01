-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th4 01, 2019 lúc 02:00 PM
-- Phiên bản máy phục vụ: 5.7.23
-- Phiên bản PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `cdw1_facefly`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `airlines`
--

DROP TABLE IF EXISTS `airlines`;
CREATE TABLE IF NOT EXISTS `airlines` (
  `airline_id` int(11) NOT NULL AUTO_INCREMENT,
  `airline_name` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `airline_nation` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`airline_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `airlines`
--

INSERT INTO `airlines` (`airline_id`, `airline_name`, `airline_nation`) VALUES
(1, 'VietNam Airline', 'Việt Nam'),
(2, 'Japan Airline', 'Nhật Bản');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `airports`
--

DROP TABLE IF EXISTS `airports`;
CREATE TABLE IF NOT EXISTS `airports` (
  `airports_id` int(11) NOT NULL AUTO_INCREMENT,
  `airports_name` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `airports_pro` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`airports_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `airports`
--

INSERT INTO `airports` (`airports_id`, `airports_name`, `airports_pro`) VALUES
(1, 'Long Thành', 'Đồng Nai'),
(2, 'Biên Hòa', 'Đồng Nai'),
(3, 'Tân Sơn Nhất', 'HCM'),
(4, 'Nội Bài', 'Hàn Nội');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `booking`
--

DROP TABLE IF EXISTS `booking`;
CREATE TABLE IF NOT EXISTS `booking` (
  `booking_id` int(11) NOT NULL AUTO_INCREMENT,
  `booking_user_id` int(11) DEFAULT NULL,
  `booking_passanger_id` int(11) NOT NULL,
  `booking_depart_id` int(11) NOT NULL,
  `booking_return_id` int(11) DEFAULT NULL,
  `booking_credit_id` int(11) DEFAULT NULL,
  `booking_price` int(11) NOT NULL,
  PRIMARY KEY (`booking_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `credit`
--

DROP TABLE IF EXISTS `credit`;
CREATE TABLE IF NOT EXISTS `credit` (
  `credit_id` int(11) NOT NULL AUTO_INCREMENT,
  `credit_number` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `credit_holder` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `credit_ccv` int(5) NOT NULL,
  PRIMARY KEY (`credit_id`),
  UNIQUE KEY `credit_number` (`credit_number`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `credit`
--

INSERT INTO `credit` (`credit_id`, `credit_number`, `credit_holder`, `credit_ccv`) VALUES
(1, '056476', 'ami', 358);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_user_id` int(11) NOT NULL,
  `customer_first_name` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_last_name` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_title` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_transfer` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_paypal` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_credit_card` int(15) NOT NULL,
  `customer_credit_name` int(55) NOT NULL,
  `customer_credit_ccv` int(8) NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `flight`
--

DROP TABLE IF EXISTS `flight`;
CREATE TABLE IF NOT EXISTS `flight` (
  `flight_id` int(11) NOT NULL AUTO_INCREMENT,
  `flight_carrier` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `flight_from_id` int(11) NOT NULL,
  `flight_departure` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `flight_to_id` int(11) NOT NULL,
  `flight_return` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `flight_duration` double NOT NULL,
  `flight_transit` int(11) NOT NULL,
  `flight_price` int(55) NOT NULL,
  PRIMARY KEY (`flight_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `flight`
--

INSERT INTO `flight` (`flight_id`, `flight_carrier`, `flight_from_id`, `flight_departure`, `flight_to_id`, `flight_return`, `flight_duration`, `flight_transit`, `flight_price`) VALUES
(5, 'Vietnam Airline', 1, '2019-03-06 02:38:06', 2, '0000-00-00 00:00:00', 2, 0, 1000000),
(6, 'Singapore Airline', 1, '2019-03-06 02:40:38', 2, '0000-00-00 00:00:00', 3, 0, 7000000),
(7, 'Japan Airline', 1, '2019-03-06 02:41:01', 4, '0000-00-00 00:00:00', 3, 1, 8000000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=88 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(82, '2014_10_12_000000_create_users_table', 1),
(83, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `passanger`
--

DROP TABLE IF EXISTS `passanger`;
CREATE TABLE IF NOT EXISTS `passanger` (
  `passanger_id` int(11) NOT NULL AUTO_INCREMENT,
  `passanger_title` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `passanger_firstname` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `passanger_lastname` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`passanger_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `province`
--

DROP TABLE IF EXISTS `province`;
CREATE TABLE IF NOT EXISTS `province` (
  `province_id` int(11) NOT NULL AUTO_INCREMENT,
  `province_code` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `province_name` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`province_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `province`
--

INSERT INTO `province` (`province_id`, `province_code`, `province_name`) VALUES
(1, 'SGN', 'TP Hồ Chí Minh'),
(2, 'CDG', 'Paris'),
(3, 'HAN', 'Hà Nội'),
(4, 'HND', 'Haneda');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_access` timestamp NULL DEFAULT NULL,
  `attempt` int(11) DEFAULT '0',
  `active` int(11) NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `password`, `last_access`, `attempt`, `active`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '1111111', '$2y$10$RscsXTD7nYHJk1c44H3lWOoK.zWir8muys61AtBrBQ5mDciedn3b.', NULL, 0, 1, 'uD4ukgwhTPynQ4HE4z4Hf7zoObI9IpKSd3lcrQYktd1l5b9ckFEUQQVHJddH', '2019-02-26 13:18:37', '2019-02-26 17:11:14'),
(2, 'phuoc', 'phuoc@gmail.com', '11111111', '$2y$10$RscsXTD7nYHJk1c44H3lWOoK.zWir8muys61AtBrBQ5mDciedn3b.', NULL, 0, 1, 'XwId8xgiZkrzSEx3JJXRYLoeirzfMnpdFYYMuhrcgKHGD9zrCcjKUljxE27a', '2019-02-26 13:32:39', '2019-02-26 17:11:14'),
(3, 'Trần Hữu Phước', 'xyz@gmail.com', '0392993597', '$2y$10$RscsXTD7nYHJk1c44H3lWOoK.zWir8muys61AtBrBQ5mDciedn3b.', NULL, 0, 1, 'd1LHih9Vg46OXKM0Nzzy73vlmm0K0cuZBYCwJvqOMtzP8YWi4TXgjCKro4Jo', '2019-03-05 19:33:22', '2019-03-05 19:33:22');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
