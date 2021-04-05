-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Apr 05, 2021 at 12:54 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopping_cart`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1' COMMENT '1=Active | 0=Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `phone`, `address`, `created`, `modified`, `status`) VALUES
(4, 'Bhavika Umesh Kulkarni', 'bhavikakulkarni0202@gmail.com', '07447594914', '503,Sethi Nagar', '2021-02-23 19:47:36', '2021-02-23 19:47:36', '1'),
(5, 'Bhavika Kulkarni', 'bhavikakulkarni0202@gmail.com', '07447594914', '503,Sethi Nagar', '2021-02-23 20:31:25', '2021-02-23 20:31:25', '1'),
(6, 'Bhavika Kulkarni', 'bhavikakulkarni0202@gmail.com', '07447594914', '503,Sethi Nagar', '2021-04-04 08:40:03', '2021-04-04 08:40:03', '1');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `grand_total` float(10,2) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1' COMMENT '1=Active | 0=Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `grand_total`, `created`, `modified`, `status`) VALUES
(4, 4, 37989.00, '2021-02-23 19:47:36', '2021-02-23 19:47:36', '1'),
(5, 5, 55980.00, '2021-02-23 20:31:25', '2021-02-23 20:31:25', '1'),
(6, 6, 76000.00, '2021-04-04 08:40:03', '2021-04-04 08:40:03', '1');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(5) NOT NULL,
  `sub_total` float(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `quantity`, `sub_total`) VALUES
(7, 4, 2, 1, 27990.00),
(8, 4, 4, 1, 9999.00),
(9, 5, 2, 2, 55980.00),
(10, 6, 5, 1, 76000.00);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `price` float(10,2) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1' COMMENT '1=Active | 0=Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `image`, `name`, `description`, `price`, `created`, `modified`, `status`) VALUES
(1, '22.jpg', 'Boat rockerz 400 headphones', 'Enjoy your music while you stay on the move with boAt Rockerz 400; it’s time for Super Extra Bass. Equipped with 40mm Dynamic Audio Drivers, soak up each moment of the immersive audio experience. Hit up all the spots in your town with the lightweight music and joy.', 1499.00, '2021-02-10 11:34:23', '2021-02-12 10:20:25', '1'),
(2, '23.jpg', 'Microsoft surface headphones-2', 'From your doorstep to your office, on the train or in the air, listen in comfort and style All day. Your music and phone calls sound spectacular with rich, clear audio and adjustable noise cancellation. And use your voice to get more done with your hands-free. \"Hey Cortana, skip to the next song\".', 27990.00, '2021-02-18 11:39:45', '2021-02-22 12:25:29', '1'),
(3, '21.jpg', 'Apple series 3 gps watch', 'Smart activity coaching. An enhanced Heart Rate app. Your favorite playlists right on your wrist. A built-in altimeter. And a more powerful processor that lets Siri speak to you. Introducing Apple Watch Series 3. Now you can be more active, motivated and connected than ever.\r\n\r\n', 75000.00, '2021-02-27 11:38:23', '0000-00-00 00:00:00', '1'),
(4, '24.jpg', 'Mi Xiaomi watch', 'The Mi Watch Revolve comes in two elegant variants which ensure you stand out from the crowd. The 46mm stainless steel frame & AMOLED display makes for a large, vivid reading even under bright daylight. It also comes with Smart Always-on-Display that allows your display to stay on.', 9999.00, '2021-02-10 12:14:34', '2021-02-11 10:12:09', '1'),
(5, 'lap1.jpg', 'HP spectre x360', 'The HP Spectre x360 13 is one of the best ultraportable two-in-ones around, super fastr, lightweight, multiple privacy and security features and class-leading battery life. HP includes a laptop sleeve and full-size active pen and the mighty with near borderless 4k screen display', 76000.00, '2021-02-10 12:14:34', '2021-02-11 10:12:09', '1'),
(6, 'lap3.jpg', 'Microsoft Surface Laptop 3 ', 'The platinum Microsoft 15 Multi-Touch Surface Laptop 3 features a portable lightweight design with an exclusive AMD Ryzen processor Bluetooth 5.0 a large touchpad and a USB Type-C port. Powered by an exclusive AMD Ryzen 5 3580U processor and 8GB of DDR4 RAM with fast boot and load times.', 86000.00, '2021-02-10 12:14:34', '2021-02-11 10:12:09', '1'),
(7, '6.jpg', 'iPhone 11 pro', 'The phone comes with a 5.80-inch touchscreen display with a resolution of 1125x2436 pixels at a pixel density of 458 pixels per inch (ppi). iPhone 11 Pro is powered by a hexa-core Apple A13 Bionic processor. It comes with 4GB of RAM. The iPhone 11 Pro runs iOS 13 ', 100000.00, '2021-02-10 12:14:34', '2021-02-11 10:12:09', '1'),
(8, '3.jpg', 'Samsung Galaxy S21', 'The phone comes with a 6.20-inch touchscreen display with a resolution of 1080x2400 pixels at a pixel density of 421 pixels per inch (ppi) and an aspect ratio of 20:9. Samsung Galaxy S21 is powered by a 2.2GHz octa-core Samsung Exynos 2100 processor that features 3 cores', 36000.00, '2021-02-10 12:14:34', '2021-02-11 10:12:09', '1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `gender` enum('Male','Female') COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=Active | 0=Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `gender`, `phone`, `created`, `modified`, `status`) VALUES
(1, 'John', 'Doe', 'john@gmail.com', '58c2bd8a8be6198468412a24a56acf0b', 'Male', '6731234798', '2021-04-04 08:36:15', '2021-04-04 08:36:15', 1),
(2, 'John', 'Doe', 'john@gmail.com', '', 'Male', '6731234798', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(3, 'Tom', 'Hanks', 'tom@gmail.com', 'bb53dc5ca4a52a70e15439a45e1b2cf1', 'Male', '1234567890', '2021-04-04 11:20:12', '2021-04-04 11:20:12', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
