-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2021 at 12:23 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2102_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `position` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `position`) VALUES
(7, 'kalana', '$2y$10$P747FuXVjc2jmPhfgz562OFycG5iMndYxrdyQ.IrfZV5s7UpAirdq', 'hr-manager'),
(8, 'jayasanka', '$2y$10$gvFiMW4P2dghSXhhZXLqQ.tmqFowQWnEm1XNm5k.LXtulDMcQpQeC', 'leave-manager'),
(9, 'lakshika', '$2y$10$duX/Elhk9PMXMftAcxS/LeDJ9tV4mKDbfB0UNmyG2rv0FEIRvZdbO', 'recruitment-manager'),
(10, 'sadun', '$2y$10$mQRxrY2nPn0/cyFHYjCRl.w8o2YgPV0aCO4PQxUCYrlATMZHad9iS', 'admin'),
(11, 'dileepa', '$2y$10$lBMAz4.f8wlngcrY7Ejk.ufO4faWtdJqopLNHNgVXQ8KmSdS6Umpi', 'admin'),
(12, 'lakmina', '$2y$10$WUAOSiENgVN2P0Fur7iQbOfAH9C2O55SRgkAzR7kcAG6tS3wMAK8y', 'employee');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
