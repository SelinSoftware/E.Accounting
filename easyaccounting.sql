-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 04 Haz 2020, 23:55:48
-- Sunucu sürümü: 10.4.11-MariaDB
-- PHP Sürümü: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `easyaccounting`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `balance`
--

CREATE TABLE `balance` (
  `balance_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `income_amount` int(255) NOT NULL,
  `income_explanation` varchar(255) NOT NULL,
  `expense_amount` int(255) NOT NULL,
  `expense_explanation` varchar(255) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `balance`
--

INSERT INTO `balance` (`balance_id`, `user_id`, `income_amount`, `income_explanation`, `expense_amount`, `expense_explanation`, `create_date`) VALUES
(12, 7, 0, '+No income!', 524, '-Shopping', '2020-06-04 02:17:31'),
(13, 7, 125, '+Extra Salary', 30, '-Payment of monthly bills', '2020-06-04 02:18:18'),
(14, 7, 250, '+Extra Job', 0, '-No expense!', '2020-06-04 02:19:01'),
(15, 7, 300, '+Promotion', 8000, '-Buying Car', '2020-06-04 02:19:31'),
(16, 7, 576, '+Lottery', 0, '-No expense!', '2020-06-04 02:19:47'),
(17, 7, 671, '+Extra Salary', 100, '-Shopping', '2020-06-04 02:20:05'),
(18, 7, 1500, '+Rent', 2500, '-Payment of Taxes', '2020-06-04 02:20:26'),
(19, 7, 8000, '+Extra Salary', 450, '-Shopping', '2020-06-04 02:21:16'),
(20, 7, 10000, '+Salary', 500, '-Payment of bills', '2020-06-04 02:21:40'),
(21, 7, 25000, '+Salary per year', 5000, '-Payment of taxes and bills', '2020-06-04 02:22:07'),
(22, 7, 45000, '+Salary', 2504, '-Education Payment per year', '2020-06-04 02:22:40'),
(23, 8, 5000, '+Salary', 0, '-No expense!', '2020-06-04 02:36:10'),
(24, 8, 0, '+No income!', 4500, '-Payment of taxes', '2020-06-04 02:36:52'),
(25, 8, 300, '+Promotion', 8000, '-Travelling Costs', '2020-06-04 02:37:11'),
(26, 8, 500, '+Extra Salary', 0, '-No expense!', '2020-06-04 02:38:05'),
(27, 8, 23000, '+Extra Job', 65000, '-Buying a New Home', '2020-06-04 02:38:47');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `invoice_no` int(255) NOT NULL,
  `invoice_amount` int(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `customers`
--

INSERT INTO `customers` (`customer_id`, `user_id`, `customer_name`, `invoice_no`, `invoice_amount`, `phone_number`, `create_date`) VALUES
(8, 7, 'Ahmet Mehmet', 11, 20000, '234 567 891', '2020-06-04 02:11:02'),
(9, 7, 'Ali Mahmut', 81, 3400, '345 987 555 43', '2020-06-04 02:11:31'),
(10, 7, 'Ali Veli', 10, 10000, '123 456 789', '2020-06-04 02:11:53'),
(11, 7, 'Ayşe Fatma', 12, 30000, '345 678 912', '2020-06-04 02:12:18'),
(12, 7, 'Berke Burç', 14, 50000, '567 891 234', '2020-06-04 02:12:38'),
(13, 7, 'Bilge Ege', 16, 70000, '789 123 456', '2020-06-04 02:12:58'),
(14, 7, 'Emre Kaan', 17, 80000, '891 234 567', '2020-06-04 02:13:20'),
(15, 7, 'Mustafa Aslı', 18, 34500, '345 678 123 45', '2020-06-04 02:13:44'),
(16, 7, 'Nefise Eren', 19, 100000, '123 465 789 1', '2020-06-04 02:14:11'),
(17, 7, 'Selin Seda', 13, 40000, '456 789 123', '2020-06-04 02:14:32'),
(18, 7, 'Sena Elif', 18, 90000, '912 345 678', '2020-06-04 02:15:02'),
(19, 7, 'Sema Esma', 56, 2345, '345 978 901', '2020-06-04 02:15:22'),
(20, 7, 'Yankı Emre', 15, 60000, '678 912 345', '2020-06-04 02:15:38'),
(21, 8, 'Valentina Gilyazov', 20, 25460, '876 452', '2020-06-04 02:33:25'),
(22, 8, 'Giovanna Preis', 21, 4578, '314 568', '2020-06-04 02:33:53'),
(23, 8, 'Cladui Bard', 22, 6500, '897 333', '2020-06-04 02:34:12'),
(24, 8, 'Mariel Schmid', 23, 4950, '123 459', '2020-06-04 02:34:39'),
(25, 8, 'Lea Xue', 24, 6545, '456 783', '2020-06-04 02:35:13'),
(26, 8, 'Timea Vizzalli', 25, 10000, '462 777', '2020-06-04 02:35:43');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `invoices`
--

CREATE TABLE `invoices` (
  `invoice_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `invoice_no` int(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `invoice_amount` int(255) NOT NULL,
  `company_phone_number` varchar(255) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `invoices`
--

INSERT INTO `invoices` (`invoice_id`, `user_id`, `invoice_no`, `company_name`, `invoice_amount`, `company_phone_number`, `create_date`) VALUES
(11, 7, 1, 'Apple', 1000, '123 456', '2020-06-04 02:24:11'),
(12, 7, 2, 'Huawei', 2000, '234 567', '2020-06-04 02:24:24'),
(13, 7, 3, 'Samsung', 3000, '345 678', '2020-06-04 02:24:39'),
(14, 7, 4, 'LG', 4000, '456 789', '2020-06-04 02:25:10'),
(15, 7, 5, 'Oracle', 5000, '567 891', '2020-06-04 02:25:29'),
(16, 7, 6, 'Mıcrosoft', 6000, '678 912', '2020-06-04 02:25:49'),
(17, 7, 7, 'Turkish Airlines', 7056, '789 123', '2020-06-04 02:26:17'),
(18, 7, 8, 'AUDI', 9568, '456 138', '2020-06-04 02:26:48'),
(19, 7, 9, 'Google', 7412, '567 521', '2020-06-04 02:27:12'),
(20, 7, 10, 'Amazon', 6580, '657 858', '2020-06-04 02:27:29'),
(21, 8, 1, 'Bosch', 648145, '311 457 ', '2020-06-04 02:30:01'),
(22, 8, 2, 'Mercedes-Benz', 65000, '987 788', '2020-06-04 02:30:21'),
(23, 8, 3, 'P&G', 225, '352 449', '2020-06-04 02:30:50'),
(24, 8, 4, 'Toshıba', 45820, '647 545', '2020-06-04 02:31:23'),
(25, 8, 5, 'Tav Airports', 568356, '315 786', '2020-06-04 02:32:04');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`) VALUES
(7, 'Selin_Aybuke', '12345'),
(8, 'Yasar_University', 'asdfg');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `balance`
--
ALTER TABLE `balance`
  ADD PRIMARY KEY (`balance_id`);

--
-- Tablo için indeksler `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Tablo için indeksler `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`invoice_id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `balance`
--
ALTER TABLE `balance`
  MODIFY `balance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Tablo için AUTO_INCREMENT değeri `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Tablo için AUTO_INCREMENT değeri `invoices`
--
ALTER TABLE `invoices`
  MODIFY `invoice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
