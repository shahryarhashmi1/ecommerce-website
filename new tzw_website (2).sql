-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2023 at 05:17 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_brand`
--

INSERT INTO `add_brand` (`id`, `brand_name`) VALUES
(5, 'all'),
(8, 'omega'),
(9, 'rolex'),
(10, 'patek'),
(11, 'heuer'),
(12, 'tissot');

-- --------------------------------------------------------

--
-- Table structure for table `add_product`
--

CREATE TABLE `add_product` (
  `id` int(11) NOT NULL,
  `my_image` varchar(200) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL,
  `product_detail` varchar(500) NOT NULL,
  `product_code` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_product`
--

INSERT INTO `add_product` (`id`, `my_image`, `product_name`, `price`, `product_detail`, `product_code`) VALUES
(38, 'IMG-646895ab489806.68075312.png', 'omega', '100', '', ''),
(39, 'IMG-646895bb57f550.41307295.png', 'rolex', '150', '', ''),
(40, 'IMG-646895c830c142.42763541.png', 'patek', '50', '', ''),
(41, 'IMG-646895d8c46de3.60522641.png', 'heuer', '211', '', ''),
(42, 'IMG-646895e983e8d3.45637597.png', 'tissot', '111', '', ''),
(43, 'IMG-646895fb5bd219.88890512.png', 'rolex', '121', '', ''),
(44, 'IMG-64689608be2153.07341966.png', 'patek', '211', '', ''),
(45, 'IMG-6468961d73c874.26486480.png', 'rolex', '95', '', ''),
(46, 'IMG-6468962ee833e8.50268065.png', 'omega', '150', '', ''),
(47, 'IMG-64689648239443.05848125.png', 'heuer', '100', '', ''),
(48, 'IMG-64689665b006c8.93346522.png', 'rolex', '322', '', ''),
(51, 'IMG-646a56483b0f44.62041590.png', 'rolex', '212', 'vdvvdscsvdfvfdbdfbgfbvdvdfvcsdcdvfvbgfdb', '233r3r34');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration_form`
--

INSERT INTO `registration_form` (`id`, `fullname`, `email`, `counrty`, `password`) VALUES
(1, 'jjv', 'shah1@gmail.com', 'Pakistan', 'hvjv jvvjvj'),
(2, 'cscscsc', 'shah1@gmail.com', 'Pakistan', 'scscscscs'),
(3, 'sxsxsxsx', 'shah1@gmail.com', 'Pakistan', 'sxsxsx');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `add_product`
--
ALTER TABLE `add_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
