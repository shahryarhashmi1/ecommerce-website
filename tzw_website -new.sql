-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2023 at 10:17 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tzw_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_brand`
--

CREATE TABLE `add_brand` (
  `id` int(11) NOT NULL,
  `brand_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_brand`
--

INSERT INTO `add_brand` (`id`, `brand_name`) VALUES
(5, 'ARMANI'),
(8, 'OMEGA'),
(9, 'ROLEX'),
(10, 'PATEK'),
(11, 'HEUER'),
(12, 'TISSOT'),
(13, 'NEW');

-- --------------------------------------------------------

--
-- Table structure for table `add_product`
--

CREATE TABLE `add_product` (
  `id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `my_image` varchar(200) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL,
  `product_detail` varchar(500) NOT NULL,
  `product_code` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_product`
--

INSERT INTO `add_product` (`id`, `brand_id`, `my_image`, `product_name`, `price`, `product_detail`, `product_code`) VALUES
(38, 13, 'IMG-646895ab489806.68075312.png', 'test', '103', ' Mechanism: Analog(Automatic)\r\nFeature: Date\r\nDial Color: Silver\r\nDial Shape: Round\r\nDial Size approx: 36mm\r\nGlass: Sapphire Crystal\r\nCase Color: Gold\r\nCase width approx: 38mm\r\nCase Material: Stainless Steel\r\nBand Color: Silver and Gold\r\nBand Material: Stainless Steel\r\nWater Resistance: 30 Meter\r\nWarranty: 1 Year', ''),
(39, 5, 'IMG-646895bb57f550.41307295.png', 'rolex', '150', ' Mechanism: Analog(Automatic)\r\nFeature: Date\r\nDial Color: Silver\r\nDial Shape: Round\r\nDial Size approx: 36mm\r\nGlass: Sapphire Crystal\r\nCase Color: Go', ''),
(40, 9, 'IMG-646895c830c142.42763541.png', 'patek', '50', '', ''),
(41, 11, 'IMG-646895d8c46de3.60522641.png', 'heuer', '211', '', ''),
(42, 12, 'IMG-646895e983e8d3.45637597.png', 'tissot', '111', '', ''),
(43, 11, 'IMG-646895fb5bd219.88890512.png', 'Watch_2', '500', ' Vintage', ''),
(44, 8, 'IMG-64689608be2153.07341966.png', 'patek', '211', '', ''),
(45, 9, 'IMG-6468961d73c874.26486480.png', 'rolex', '95', '', ''),
(46, 11, 'IMG-6468962ee833e8.50268065.png', 'omega', '150', '', ''),
(47, 12, 'IMG-64689648239443.05848125.png', 'heuer', '100', '', ''),
(53, 8, 'IMG-646a5c5a04e405.86551862.png', 'test', '34', ' ', '2'),
(54, 9, 'IMG-646a558c8a5764.97139910.png', 'MI', '100', '  ', 'code'),
(55, 8, 'IMG-646a54e7b4a162.42637704.png', 'NEW', '122', ' ', '5'),
(57, 8, 'IMG-646a54fb9d5042.27417005.png', 'name', '34', ' ', '12'),
(58, 8, 'IMG-646a5d0ce970b9.09155979.png', 'Testdata', '3000', ' ', '2'),
(59, 9, 'IMG-646a558c8a5764.97139910.png', 'rolex', '45', '  ', '3'),
(60, 8, 'IMG-646895ab489806.68075312.png', 'Sub', '499', ' ', '2'),
(63, 12, 'IMG-646891cb2ef8f4.62180123.png', 'Jupiter', '999', 'Color:Brown', '');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `id` int(11) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `number` varchar(50) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`id`, `fullname`, `email`, `number`, `message`) VALUES
(1, 'Hassan', 'hassanhashmi7349@gmail.com', '098765432', 'Hi sir'),
(2, 'Sherry', 'sherry@gmail.com', '0987654321', 'Hello SIr'),
(3, 'Hamza', 'hamza@gmail.com', '0987654321', 'message up'),
(5, 'shahryar', 'a@gmail.com', '245678987654', 'hi my name is shahryar ali '),
(7, 'Shah', 'shah1@gmail.com', '0987654321', 'amkkankxnknxixusbnsxkns'),
(8, 'Shah', 'shah1@gmail.com', '987654321', 'klsdjlaslaskdndlaksnxassjxniudhwesnaasiocnsddsnosdicsdcsdc;sncnsdcnsdcsdio'),
(9, 'Muhammad Sharjeel Ali Hashmi', 'sharjeelhashmi28@gmail.com', '987654321', 'xsaxasxasxasxasxasc'),
(10, 'Shah', 'shah1@gmail.com', '', 'Hi! there is a problem in products category');

-- --------------------------------------------------------

--
-- Table structure for table `index_product`
--

CREATE TABLE `index_product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_detail` varchar(500) NOT NULL,
  `my_image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `index_product`
--

INSERT INTO `index_product` (`id`, `product_name`, `product_detail`, `my_image`) VALUES
(5, 'Vintage Wachtes', ' A 50-year-old Omega, Rolex, or Breitling displays your status as a watch lover just as well as a new timepiece.', 'IMG-646b723f14bb94.42043470.png');

-- --------------------------------------------------------

--
-- Table structure for table `loginform`
--

CREATE TABLE `loginform` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loginform`
--

INSERT INTO `loginform` (`id`, `username`, `password`) VALUES
(1, 'Sherry', 'fyp990');

-- --------------------------------------------------------

--
-- Table structure for table `registration_form`
--

CREATE TABLE `registration_form` (
  `id` int(11) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `counrty` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration_form`
--

INSERT INTO `registration_form` (`id`, `fullname`, `email`, `counrty`, `password`) VALUES
(1, 'Shery', 'shah18@gmail.com', 'Pakistan', 'hvjv jvvjvj'),
(4, 'IMAD JAN', 'imadjanmaddy@gmail.com', '', '123456'),
(5, 'Maddy', 'maddy@gmail.com', '', '123'),
(6, 'Abc', 'Abc@gmail.com', '', 'Abc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_brand`
--
ALTER TABLE `add_brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_product`
--
ALTER TABLE `add_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_add_product_brand` (`brand_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `index_product`
--
ALTER TABLE `index_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loginform`
--
ALTER TABLE `loginform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration_form`
--
ALTER TABLE `registration_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_brand`
--
ALTER TABLE `add_brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `add_product`
--
ALTER TABLE `add_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `index_product`
--
ALTER TABLE `index_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `loginform`
--
ALTER TABLE `loginform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `registration_form`
--
ALTER TABLE `registration_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `add_product`
--
ALTER TABLE `add_product`
  ADD CONSTRAINT `fk_add_product_brand` FOREIGN KEY (`brand_id`) REFERENCES `add_brand` (`id`),
  ADD CONSTRAINT `fk_product_brand` FOREIGN KEY (`brand_id`) REFERENCES `add_brand` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
