-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2025 at 09:58 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `memento`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer data`
--

CREATE TABLE `customer data` (
  `id` int(11) NOT NULL,
  `fullName` text DEFAULT NULL,
  `contactNumber` text DEFAULT NULL,
  `utangDate` text DEFAULT NULL,
  `product1` text DEFAULT NULL,
  `qty1` int(11) DEFAULT NULL,
  `price1` double DEFAULT NULL,
  `product2` text DEFAULT NULL,
  `qty2` int(11) DEFAULT NULL,
  `price2` double DEFAULT NULL,
  `product3` text DEFAULT NULL,
  `qty3` int(11) DEFAULT NULL,
  `price3` double DEFAULT NULL,
  `product4` text DEFAULT NULL,
  `qty4` int(11) DEFAULT NULL,
  `price4` double DEFAULT NULL,
  `product5` text DEFAULT NULL,
  `qty5` int(11) DEFAULT NULL,
  `price5` double DEFAULT NULL,
  `total` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer data`
--

INSERT INTO `customer data` (`id`, `fullName`, `contactNumber`, `utangDate`, `product1`, `qty1`, `price1`, `product2`, `qty2`, `price2`, `product3`, `qty3`, `price3`, `product4`, `qty4`, `price4`, `product5`, `qty5`, `price5`, `total`) VALUES
(1, 'Diosa Lee Yap', '1234567891011', '2025-04-20', 'creamsilk', 1, 13, 'Milk', 2, 15, 'Milo', 5, 10, 'pancake', 2, 42, 'piatos', 2, 17, 211);

-- --------------------------------------------------------

--
-- Table structure for table `login_db`
--

CREATE TABLE `login_db` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_db`
--

INSERT INTO `login_db` (`id`, `name`, `email`, `password_hash`, `created_at`) VALUES
(1, 'Diosa', 'iam.diosaleeyap@gmail.com', '$2y$10$YUVeoNeRvrNHJ8gbkRKz1u2XCFGaE.VK1zgZFIhUodCaJT5xf65Ce', '2025-04-20 07:38:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer data`
--
ALTER TABLE `customer data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_db`
--
ALTER TABLE `login_db`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer data`
--
ALTER TABLE `customer data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login_db`
--
ALTER TABLE `login_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
