-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 15, 2022 at 06:32 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `user_id` int(4) NOT NULL,
  `hotel_id` int(3) NOT NULL,
  `type` varchar(50) NOT NULL,
  `no_of_rooms` int(10) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `book_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_name` varchar(10) NOT NULL,
  `places` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_name`, `places`) VALUES
('bhopal', 'DB mall'),
('bhopal', 'Sanchi stupa'),
('bhopal', 'Shaukat mahal'),
('bhopal', 'Upper lake'),
('bhopal', 'Van vihar'),
('delhi', 'Chandani chowk'),
('delhi', 'Jantar mantar'),
('delhi', 'Lodi gardens'),
('delhi', 'Lotus temple'),
('delhi', 'Qutub minar'),
('mumbai', 'Elephanta caves'),
('mumbai', 'Gandhi national park'),
('mumbai', 'Gateway of india'),
('mumbai', 'Red carpet wax museum'),
('mumbai', 'Siddhi vinayak temple');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `hotel_id` int(3) NOT NULL,
  `city_name` varchar(15) NOT NULL,
  `hotel_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`hotel_id`, `city_name`, `hotel_name`) VALUES
(101, 'bhopal', 'Noor-Us-Sabah Palace'),
(102, 'bhopal', 'The Bastion'),
(103, 'delhi', 'The LaLiT'),
(104, 'delhi', 'CP Villa'),
(105, 'mumbai', 'Residency Hotel'),
(106, 'mumbai', 'Sun-N-Sand');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `hotel_id` int(3) NOT NULL,
  `type` varchar(50) NOT NULL,
  `rent` int(5) NOT NULL,
  `no_of_rooms` int(10) NOT NULL,
  `availability` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`hotel_id`, `type`, `rent`, `no_of_rooms`, `availability`) VALUES
(103, 'Business suite', 15660, 4, 4),
(105, 'Club Room', 4368, 8, 8),
(101, 'Club suites', 8730, 4, 4),
(103, 'Corner suite', 11200, 4, 4),
(105, 'Day use room', 3280, 8, 8),
(105, 'Deluxe private room', 13890, 3, 3),
(103, 'Deluxe room king', 8270, 5, 5),
(102, 'Executive ', 2394, 8, 8),
(105, 'Grande room', 13440, 5, 5),
(105, 'Junior suite', 14751, 3, 3),
(101, 'Lake view room', 7650, 4, 4),
(102, 'PREMIUM', 3570, 6, 6),
(104, 'Private patio', 5140, 6, 6),
(104, 'Rustic cottage', 5080, 5, 5),
(105, 'Standard AC room', 3450, 6, 6),
(101, 'Standard room', 4500, 8, 8),
(103, 'Twin room', 4590, 7, 7);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(4) NOT NULL,
  `user_name` varchar(15) NOT NULL,
  `user_mob` int(10) NOT NULL,
  `user_email` varchar(15) NOT NULL,
  `user_pass` varchar(15) NOT NULL,
  `user_add` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`user_id`,`hotel_id`,`type`),
  ADD KEY `hotel_id` (`hotel_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_name`,`places`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`hotel_id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`type`),
  ADD KEY `Foreign` (`hotel_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_mob` (`user_mob`,`user_email`,`user_pass`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `hotel`
--
ALTER TABLE `hotel`
  ADD CONSTRAINT `Foreign key constraints` FOREIGN KEY (`city_name`) REFERENCES `city` (`city_name`) ON UPDATE CASCADE;

--
-- Constraints for table `rooms`
--
ALTER TABLE `rooms`
  ADD CONSTRAINT `Foreign` FOREIGN KEY (`hotel_id`) REFERENCES `hotel` (`hotel_id`),
  ADD CONSTRAINT `rooms_ibfk_1` FOREIGN KEY (`hotel_id`) REFERENCES `hotel` (`hotel_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
