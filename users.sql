-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2019 at 08:12 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(30) NOT NULL,
  `userName` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userName`, `fname`, `lname`, `email`, `password`) VALUES
(3, 'mkmkmkk', 'Prakhar', 'Agarwal', 'mm@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92'),
(6, 'mskmksm', 'aamk', 'kmkmak', 'mmm@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92'),
(7, 'snjsnsj', 'Prakhar', 'Agarwal', 'PRAKHARAGARWALL95@GMAIL.COM', '15e2b0d3c33891ebb0f1ef609ec419420c20e320ce94c65fbc8c3312448eb225'),
(8, 'nnkjnjnkjn', 'Aditya', 'Bajpai', 'prakhar.agarwal_cs14@gla.ac.in', '15e2b0d3c33891ebb0f1ef609ec419420c20e320ce94c65fbc8c3312448eb225'),
(9, '123456', 'the university of texas', 'dallas', 'mkmak@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92'),
(10, 'mkmakmka', 'the university of texas', 'dallas', 'pp@gmail.com', '4b20881e47ae607c9ae56d0ee121690c2dcb1e547ff4e1753082ddf95da440cb'),
(11, 'arpit', 'arpita', 'dutta', 'arpita@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92'),
(12, 'idudndun', 'dhbh', 'hbhdb', 'hdbh@gmail.com', '4eeb66205fc7190c8fb3f9c25a7b973b27d0b611c53fdc6b47901c30c67a6325'),
(13, 'jndjdnjdnan', 'Prakhar', 'Agarwal', 'PRAKHARAGAjnsjnjsnRWALL95@GMAIL.COM', 'e31f256d9d6e3541faf16ce47dfff9ccb78f42127033f550a2ee124d7891b798'),
(14, 'jndjdnjdnj', 'Prakhar', 'Agarwal', 'PRAKHARnsnhsnhAGARWALL95@GMAIL.COM', '35c295a3a372e08b96f823a374c444939e048bccaf6d1418de9e6754da58223b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
