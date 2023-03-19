-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2023 at 08:05 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `salon_appointment`
--

-- --------------------------------------------------------

--
-- Table structure for table `salon_admin`
--

CREATE TABLE `salon_admin` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `salon_admin`
--

INSERT INTO `salon_admin` (`id`, `fullname`, `email`, `password`) VALUES
(1, 'salon', 'salon@gmail.com', 'salon');

-- --------------------------------------------------------

--
-- Table structure for table `salon_appointments`
--

CREATE TABLE `salon_appointments` (
  `appointments_id` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `services_id` int(11) DEFAULT NULL,
  `service_date` date DEFAULT NULL,
  `service_time` time DEFAULT NULL,
  `service_out` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `salon_appointments`
--

INSERT INTO `salon_appointments` (`appointments_id`, `customer_id`, `services_id`, `service_date`, `service_time`, `service_out`) VALUES
(1, 1, 1, '2023-03-18', '11:00:00', '00:00:00'),
(2, 2, 3, '2023-03-18', '11:00:00', '00:00:00'),
(3, 4, 2, '2023-03-18', '11:20:00', '00:00:00'),
(4, 3, 2, '2023-03-18', '15:00:00', '00:00:00'),
(6, 8, 5, '2023-03-19', '18:00:00', '00:00:00'),
(7, 8, 1, '2023-03-19', '18:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `salon_customer`
--

CREATE TABLE `salon_customer` (
  `customer_id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `salon_customer`
--

INSERT INTO `salon_customer` (`customer_id`, `fullname`, `phone`, `email`) VALUES
(1, 'Jeremy Opriasa', '09267758198', 'opriasaj@gmail.com'),
(2, 'Mary Grace Nicomedes', '09558487858', 'nicomedesmg@gmail.com'),
(3, 'Elsi Opriasaaa', '09552451658', 'opriasae@gmail.com'),
(4, 'Coco Opriasa', '09378845124', 'opriasac@gmail.com'),
(5, 'Fox Opriasa', '09554824658', 'opriasaf@gmail.com'),
(6, 'Ka Tuya', '09665878854', 'tuyak@gmail.com'),
(8, 'Yami Sukehiro', '09554878885', 'sukehiroy@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `salon_services`
--

CREATE TABLE `salon_services` (
  `services_id` int(11) NOT NULL,
  `service_name` text DEFAULT NULL,
  `availability` enum('true','false') DEFAULT NULL,
  `price` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `salon_services`
--

INSERT INTO `salon_services` (`services_id`, `service_name`, `availability`, `price`) VALUES
(1, 'Haircut men', 'true', '100'),
(2, 'Haircut women', 'true', '120'),
(3, 'Salon', 'true', '1500'),
(5, 'Color - light', 'true', '500'),
(6, 'Color - heavy', 'true', '1000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `salon_admin`
--
ALTER TABLE `salon_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salon_appointments`
--
ALTER TABLE `salon_appointments`
  ADD PRIMARY KEY (`appointments_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `services_id` (`services_id`);

--
-- Indexes for table `salon_customer`
--
ALTER TABLE `salon_customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `salon_services`
--
ALTER TABLE `salon_services`
  ADD PRIMARY KEY (`services_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `salon_admin`
--
ALTER TABLE `salon_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `salon_appointments`
--
ALTER TABLE `salon_appointments`
  MODIFY `appointments_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `salon_customer`
--
ALTER TABLE `salon_customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `salon_services`
--
ALTER TABLE `salon_services`
  MODIFY `services_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `salon_appointments`
--
ALTER TABLE `salon_appointments`
  ADD CONSTRAINT `salon_appointments_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `salon_customer` (`customer_id`),
  ADD CONSTRAINT `salon_appointments_ibfk_2` FOREIGN KEY (`services_id`) REFERENCES `salon_services` (`services_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
