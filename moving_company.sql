-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Apr 25, 2019 at 06:19 AM
-- Server version: 5.7.24-log
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moving_company`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `service_id` int(11) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `Dateofservice` varchar(20) NOT NULL,
  `Typeofservice` varchar(30) NOT NULL,
  `source` varchar(30) NOT NULL,
  `Destination` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`service_id`, `booking_id`, `user_id`, `Dateofservice`, `Typeofservice`, `source`, `Destination`) VALUES
(1, 1, 1, '2019-04-01', 'sdvv', 'DVSDV', 'DVSDV'),
(10, 3, 1, '23/4/2019', 'Long Distance', 'sdgsg', 'sdgsgfs'),
(10, 4, 1, '23/4/2019', 'Long Distance', 'sdgsg', 'sdgsgfs');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `service_id` int(20) NOT NULL,
  `service_name` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(200) NOT NULL DEFAULT 'active',
  `service_type` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`service_id`, `service_name`, `description`, `image`, `status`, `service_type`) VALUES
(4, 'Local Service', 'Mean for local move in town', 'assets/img/services/local-service.jpg', 'inactive', ''),
(5, 'national moving', 'fjkfblqbgklqg;', 'assets/img/services/local-service.jpg', 'inactive', ''),
(6, 'jbalbk', 'bjblsgblk', 'assets/img/services/Rplot-k5.png', 'inactive', 'Commercial'),
(7, 'local service', 'bdkjbvlwkvb', 'assets/img/services/quiz71.jpeg', 'inactive', 'Commercial'),
(8, 'njfdbdlk', 'jbflflkbwb', 'assets/img/services/屏幕快照 2017-03-07 09.37.44.png', 'inactive', 'Commercial'),
(9, 'rbjlwlk', 'jblwjbhlwk', 'assets/img/services/quiz72.jpeg', 'inactive', 'Commercial'),
(10, 'local service', 'for local distance', 'assets/img/services/quiz72.jpeg', 'active', 'Residential');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`service_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `service_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
