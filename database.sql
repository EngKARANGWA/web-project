-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2023 at 07:40 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carshar`
--
CREATE DATABASE IF NOT EXISTS `carshar` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `carshar`;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `names` varchar(30) NOT NULL,
  `nationalId` varchar(20) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `street` varchar(7) NOT NULL,
  `departing` date NOT NULL,
  `returning` date NOT NULL,
  `payment` varchar(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `names`, `nationalId`, `phone`, `street`, `departing`, `returning`, `payment`, `email`, `date`) VALUES
(1, 'kamana', '111444546', '0778658', '563', '2023-09-13', '2023-09-13', 'mtn', 'esafg@gmail.com', '2023-09-17 10:31:41'),
(2, 'kamana', '111444546', '0778658', '563', '2023-09-13', '2023-09-13', 'mtn', 'esafg@gmail.com', '2023-09-17 10:32:34');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `plateNo` varchar(10) NOT NULL,
  `marker` varchar(20) NOT NULL,
  `rent` varchar(12) NOT NULL,
  `licence` varchar(20) NOT NULL,
  `car_photo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`plateNo`, `marker`, `rent`, `licence`, `car_photo`) VALUES
('', '', '', '', ''),
('kakak', 'totyio', '188', '20220908_121213_resi', '499e3c5200e141b9aa71'),
('RAB 222 B', 'Toyota', '', 'IMG-20230206-WA0023.', 'IMG-20230206-WA0023.'),
('RAD 235 H', 'Land Rover', '$150', 'ccna.PNG', 'Screenshot (54).png'),
('RAG 255 K', 'range rover', '$150', 'Screenshot (63).png', 'Screenshot (65).png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(7) NOT NULL,
  `names` text NOT NULL,
  `nationalId` varchar(17) NOT NULL,
  `tel` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `images` varchar(50) NOT NULL,
  `passwords` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `names`, `nationalId`, `tel`, `email`, `images`, `passwords`) VALUES
(6, 'Osuald', '2147483647', '786736328', 'osualdiradukunda16@gmail.com', '', 'kaihavertz'),
(7, 'KABAKA Jean', '2147483647', '2147483647', 'kaba@gmail.com', 'ccna.PNG', 'kaihavertz'),
(8, 'UEGHIRUGBRJFK', '2147483647', '790061738', 'consolateur16@gmail.com', '20220908_121803.jpg', 'hhhhh'),
(9, 'emmanuel', '120023837474837', '790061738', 'emmanuel16@gmail.com', '20220908_121803.jpg', 'dddd'),
(10, 'ISHIMWE Cyrille', '120008010783489', '7834236578', 'ishi@gmail.com', 'ccna.PNG', 'isiji'),
(11, 'KAGAME Jules', '12004872438248758', '78957777783', 'kaju@gmail.com', '5614888dc44c4996a33cc227dc362042.jpg', 'kagju@7'),
(12, 'SINGIZWA SERGE', '11990778546475647', '790061738', 'singiz@gmail.com', 'Screenshot (59).png', 'QWER2'),
(13, 'NTWALI Jean de Diue', '120012343354535', '789934323', 'ntwari@gmail.com', 'Screenshot (70).png', 'yyyy'),
(14, 'kamanzi', '25416346218543248', '78246376526', 'kalisa@gmail.com', '', ''),
(15, 'Happiness ABIJURU', '20024565434675662', '7865434576', 'happinessabijuru4@gmail.com', '', 'adsf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`plateNo`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
