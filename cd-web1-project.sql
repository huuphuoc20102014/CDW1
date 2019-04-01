-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2019 at 04:25 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cd-web1-project`
--

-- --------------------------------------------------------

--
-- Table structure for table `airlines`
--

CREATE TABLE `airlines` (
  `airline_id` int(11) NOT NULL,
  `airline_name` varchar(55) NOT NULL,
  `nation_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `airlines`
--

INSERT INTO `airlines` (`airline_id`, `airline_name`, `nation_id`) VALUES
(1, ' Vietnam Airlines', 2),
(2, ' Jetstar Pacific', 2),
(3, 'VietJetAir', 2),
(4, 'Air Mekong', 2);

-- --------------------------------------------------------

--
-- Table structure for table `airports`
--

CREATE TABLE `airports` (
  `airport_id` int(11) NOT NULL,
  `airport_name` varchar(55) NOT NULL,
  `airport_city_id` int(11) NOT NULL,
  `airport_nation_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `airports`
--

INSERT INTO `airports` (`airport_id`, `airport_name`, `airport_city_id`, `airport_nation_id`) VALUES
(1, 'Sân bay Quốc tế Tân Sơn Nhất', 2, 0),
(2, 'Sân bay Quốc tế Nội Bài – Hà Nội', 4, 0),
(3, 'Sân bay Quốc tế Đà Nẵng', 1, 0),
(4, 'Sân bay Côn Đảo', 5, 0),
(5, 'Sân bay Nà Sản', 6, 0),
(6, 'Sân bay Phù Cát – Bình Định', 7, 0),
(7, 'Sân bay Cà Mau', 8, 0),
(8, 'Sân bay Buôn Ma Thuột', 11, 0),
(9, 'Sân bay Điện Biên Phủ', 10, 0),
(10, 'Sân bay Pleiku – Gia Lai', 11, 0),
(11, 'Sân bay Rạch Giá – Kiên Giang', 12, 0),
(12, 'Sân bay Liên Khương – Đà Lạt', 9, 0),
(13, 'Sân bay Tuy Hòa – Phú Yên', 14, 0);

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `city_id` int(11) NOT NULL,
  `city_name` varchar(55) NOT NULL,
  `city_code` varchar(15) NOT NULL,
  `nation_id` int(11) NOT NULL,
  `flight_route_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`city_id`, `city_name`, `city_code`, `nation_id`, `flight_route_id`) VALUES
(1, 'Đà Nẵng', 'DN', 2, 1),
(2, 'Thành phố Hồ Chí Minh', 'TPHCM', 2, 1),
(4, 'Hà Nội ', 'HN', 2, 1),
(5, 'Bà Rịa-Vũng Tàu', 'BR-VT', 2, 1),
(6, 'Sơn La', 'SL', 2, 1),
(7, 'Bình Định', 'BĐ', 2, 1),
(8, 'Cà Mau', 'CM', 2, 1),
(9, 'Đắk Lắk', 'ĐL', 2, 1),
(10, 'Điện Biên', 'ĐBP', 2, 1),
(11, 'Gia Lai', 'GL', 2, 1),
(12, 'Kiên Giang', 'KG', 2, 1),
(13, 'Lâm Đồng', 'LD', 2, 1),
(14, 'Phú Yên', 'PY', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `customer_user_id` int(11) NOT NULL,
  `customer_first_name` varchar(55) NOT NULL,
  `customer_last_name` varchar(16) NOT NULL,
  `customer_phone_number` int(11) NOT NULL,
  `customer_email` varchar(55) NOT NULL,
  `customer_transfer` varchar(55) DEFAULT NULL,
  `customer_paypal` varchar(55) DEFAULT NULL,
  `customer_credit_card` varchar(16) DEFAULT NULL,
  `customer_credit_name` varchar(55) DEFAULT NULL,
  `customer_credit_ccv` varchar(8) DEFAULT NULL,
  `customer_fl_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_user_id`, `customer_first_name`, `customer_last_name`, `customer_phone_number`, `customer_email`, `customer_transfer`, `customer_paypal`, `customer_credit_card`, `customer_credit_name`, `customer_credit_ccv`, `customer_fl_id`) VALUES
(51, 4, 'Minh', 'Hiển', 1651651511, 'minhhien@gmail.com', 'transfer', '', '', '', '', 1),
(49, 4, 'Minh', 'Hiển', 1651651511, 'minhhien@gmail.com', '', '', '12345664311234', 'Phạm Minh Hiển', '1231', 1),
(50, 4, 'Minh', 'Hiển', 1651651511, 'minhhien@gmail.com', 'transfer', '', '', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `flight_booking`
--

CREATE TABLE `flight_booking` (
  `fb_id` int(11) NOT NULL,
  `fb_departure_date` int(11) NOT NULL,
  `fb_landing_date` int(11) NOT NULL,
  `fb_fl_id` int(11) NOT NULL,
  `fb_customer_id` int(11) NOT NULL,
  `fb_total` int(10) NOT NULL,
  `fb_price` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `flight_booking`
--

INSERT INTO `flight_booking` (`fb_id`, `fb_departure_date`, `fb_landing_date`, `fb_fl_id`, `fb_customer_id`, `fb_total`, `fb_price`) VALUES
(22, 1554780000, 1554801200, 1, 51, 5, 2200000),
(21, 1554780000, 1554801200, 1, 50, 5, 2200000),
(20, 1554780000, 1554801200, 1, 49, 5, 2200000);

-- --------------------------------------------------------

--
-- Table structure for table `flight_classes`
--

CREATE TABLE `flight_classes` (
  `fc_id` int(11) NOT NULL,
  `fc_name` varchar(55) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `flight_classes`
--

INSERT INTO `flight_classes` (`fc_id`, `fc_name`) VALUES
(1, 'Business'),
(2, 'Economic'),
(3, 'Premium Economy');

-- --------------------------------------------------------

--
-- Table structure for table `flight_list`
--

CREATE TABLE `flight_list` (
  `fl_id` int(11) NOT NULL,
  `fl_fc_id` int(11) NOT NULL,
  `fl_code` varchar(15) NOT NULL,
  `fl_total` int(11) NOT NULL,
  `fl_cost` float NOT NULL,
  `fl_city_from_id` int(11) NOT NULL,
  `fl_city_to_id` int(11) NOT NULL,
  `fl_departure_date` int(11) NOT NULL,
  `fl_return_date` int(11) NOT NULL,
  `fl_type` tinyint(11) NOT NULL,
  `fl_airline_id` int(11) NOT NULL,
  `fl_distance` int(11) NOT NULL,
  `fl_fr_id` int(11) NOT NULL,
  `fl_airport_id_from` int(11) NOT NULL,
  `fl_airport_id_to` int(11) NOT NULL,
  `fl_flight_route_id` int(11) NOT NULL,
  `fl_duration` int(11) NOT NULL,
  `fl_num_transit` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `flight_list`
--

INSERT INTO `flight_list` (`fl_id`, `fl_fc_id`, `fl_code`, `fl_total`, `fl_cost`, `fl_city_from_id`, `fl_city_to_id`, `fl_departure_date`, `fl_return_date`, `fl_type`, `fl_airline_id`, `fl_distance`, `fl_fr_id`, `fl_airport_id_from`, `fl_airport_id_to`, `fl_flight_route_id`, `fl_duration`, `fl_num_transit`) VALUES
(1, 1, 'CB1', 5, 0, 1, 2, 1554780000, 0, 1, 2, 500, 1, 3, 1, 1, 0, 0),
(3, 1, 'CB3', 8, 0, 4, 2, 1554680000, 1554680000, 0, 1, 3600, 1, 2, 1, 1, 0, 0),
(4, 2, 'CB4', 8, 0, 8, 7, 1554680000, 1554880000, 0, 4, 3100, 1, 7, 6, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `flight_route`
--

CREATE TABLE `flight_route` (
  `fr_id` int(11) NOT NULL,
  `fr_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `flight_route`
--

INSERT INTO `flight_route` (`fr_id`, `fr_name`) VALUES
(1, 'Domestic Route'),
(2, 'International Route');

-- --------------------------------------------------------

--
-- Table structure for table `nation`
--

CREATE TABLE `nation` (
  `nation_id` int(11) NOT NULL,
  `nation_name` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nation`
--

INSERT INTO `nation` (`nation_id`, `nation_name`) VALUES
(1, 'Japanese'),
(2, 'Việt Nam'),
(3, 'American');

-- --------------------------------------------------------

--
-- Table structure for table `passengers`
--

CREATE TABLE `passengers` (
  `passenger_id` int(11) NOT NULL,
  `passenger_firstname` varchar(55) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passenger_lastname` varchar(55) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passenger_title` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passenger_customer_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `passengers`
--

INSERT INTO `passengers` (`passenger_id`, `passenger_firstname`, `passenger_lastname`, `passenger_title`, `passenger_customer_id`) VALUES
(136, NULL, NULL, 'Mr.', 51),
(135, NULL, NULL, 'Mr.', 51),
(134, NULL, NULL, 'Mr.', 51),
(133, NULL, NULL, 'Mr.', 51),
(132, NULL, NULL, 'Mr.', 51),
(131, 'sd', 'sd', 'Mr.', 50),
(130, 'ád', 'đ', 'Mrs.', 50),
(129, 'H', 'a', 'Mrs.', 50),
(128, 'a', 's', 'Mr.', 50),
(127, 'd', 's', 'Mr.', 50),
(126, 'Triệu', 'Đức Hoà', 'Mr.', 49),
(125, 'Nguyễn', 'Văn Quyết', 'Mr.', 49),
(124, 'Hà', 'Chí Vỹ', 'Mr.', 49),
(123, 'Đặng', 'Hoàng Lan', 'Mrs.', 49),
(122, 'Lê', 'Thị Hằng', 'Mrs.', 49);

-- --------------------------------------------------------

--
-- Table structure for table `transits`
--

CREATE TABLE `transits` (
  `transit_id` int(11) NOT NULL,
  `transit_city_id` int(11) NOT NULL,
  `transit_departure_date` int(11) NOT NULL,
  `transit_landing_date` int(11) NOT NULL,
  `transit_fl_id` int(11) NOT NULL,
  `transit_airport_id` int(11) NOT NULL,
  `transit_fl_type` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transits`
--

INSERT INTO `transits` (`transit_id`, `transit_city_id`, `transit_departure_date`, `transit_landing_date`, `transit_fl_id`, `transit_airport_id`, `transit_fl_type`) VALUES
(1, 13, 1554780000, 1554783600, 1, 12, 1),
(2, 5, 1554784000, 1554787600, 1, 4, 1),
(3, 2, 1554794800, 1554801200, 1, 1, 1),
(4, 1, 1557380503, 1557391303, 3, 3, 0),
(5, 13, 1557394903, 1557421200, 3, 12, 0),
(6, 12, 1554682000, 1554684000, 4, 11, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_email` varchar(55) NOT NULL,
  `user_password` varchar(55) NOT NULL,
  `user_first_name` varchar(55) NOT NULL,
  `user_last_name` varchar(15) NOT NULL,
  `user_phone` varchar(15) NOT NULL,
  `user_last_access` int(11) NOT NULL DEFAULT '0',
  `user_time_register` int(11) NOT NULL,
  `user_attempt` int(11) NOT NULL DEFAULT '0',
  `user_status` tinyint(4) NOT NULL DEFAULT '0',
  `user_level` tinyint(4) NOT NULL DEFAULT '0',
  `user_gender` tinyint(4) DEFAULT NULL,
  `user_address` varchar(500) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `airlines`
--
ALTER TABLE `airlines`
  ADD PRIMARY KEY (`airline_id`);

--
-- Indexes for table `airports`
--
ALTER TABLE `airports`
  ADD PRIMARY KEY (`airport_id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `flight_booking`
--
ALTER TABLE `flight_booking`
  ADD PRIMARY KEY (`fb_id`);

--
-- Indexes for table `flight_classes`
--
ALTER TABLE `flight_classes`
  ADD PRIMARY KEY (`fc_id`);

--
-- Indexes for table `flight_list`
--
ALTER TABLE `flight_list`
  ADD PRIMARY KEY (`fl_id`);

--
-- Indexes for table `flight_route`
--
ALTER TABLE `flight_route`
  ADD PRIMARY KEY (`fr_id`);

--
-- Indexes for table `nation`
--
ALTER TABLE `nation`
  ADD PRIMARY KEY (`nation_id`);

--
-- Indexes for table `passengers`
--
ALTER TABLE `passengers`
  ADD PRIMARY KEY (`passenger_id`);

--
-- Indexes for table `transits`
--
ALTER TABLE `transits`
  ADD PRIMARY KEY (`transit_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `airlines`
--
ALTER TABLE `airlines`
  MODIFY `airline_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `airports`
--
ALTER TABLE `airports`
  MODIFY `airport_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `flight_booking`
--
ALTER TABLE `flight_booking`
  MODIFY `fb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `flight_classes`
--
ALTER TABLE `flight_classes`
  MODIFY `fc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `flight_list`
--
ALTER TABLE `flight_list`
  MODIFY `fl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `flight_route`
--
ALTER TABLE `flight_route`
  MODIFY `fr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `nation`
--
ALTER TABLE `nation`
  MODIFY `nation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `passengers`
--
ALTER TABLE `passengers`
  MODIFY `passenger_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT for table `transits`
--
ALTER TABLE `transits`
  MODIFY `transit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
