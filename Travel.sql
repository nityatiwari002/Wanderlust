-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 19, 2022 at 05:30 AM
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
  `user_id` varchar(10) NOT NULL,
  `hotel_id` varchar(3) NOT NULL,
  `type_id` varchar(3) NOT NULL,
  `no_of_rooms` varchar(10) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `book_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`user_id`, `hotel_id`, `type_id`, `no_of_rooms`, `checkin`, `checkout`, `book_id`) VALUES
('1234', '101', '02', '2', '2022-11-30', '2022-12-01', '123410102');

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
  `hotel_id` varchar(3) NOT NULL,
  `city_name` varchar(15) NOT NULL,
  `hotel_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`hotel_id`, `city_name`, `hotel_name`) VALUES
('101', 'bhopal', 'Noor-Us-Sabah Palace'),
('102', 'bhopal', 'The Bastion'),
('103', 'delhi', 'The LaLiT'),
('104', 'delhi', 'CP Villa'),
('105', 'mumbai', 'Residency Hotel'),
('106', 'mumbai', 'Sun-N-Sand');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `hotel_id` varchar(3) NOT NULL,
  `room_type` varchar(50) NOT NULL,
  `type_id` varchar(3) NOT NULL,
  `rent` varchar(5) NOT NULL,
  `no_of_rooms` varchar(10) NOT NULL,
  `availability` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`hotel_id`, `room_type`, `type_id`, `rent`, `no_of_rooms`, `availability`) VALUES
('101', 'Club suites', '01', '8730', '4', '4'),
('101', 'Lake view room', '02', '7650', '4', '4'),
('101', 'Standard room', '03', '4500', '8', '8'),
('102', 'Executive ', '04', '2394', '8', '8'),
('102', 'PREMIUM', '05', '3570', '6', '6'),
('103', 'Business suite', '06', '15660', '4', '4'),
('103', 'Corner suite', '07', '11200', '4', '4'),
('103', 'Deluxe room king', '08', '8270', '5', '5'),
('103', 'Twin room', '09', '4590', '7', '7'),
('104', 'Private patio', '10', '5140', '6', '6'),
('104', 'Rustic cottage', '11', '5080', '5', '5'),
('105', 'Club Room', '12', '4368', '8', '8'),
('105', 'Day use room', '13', '3280', '8', '8'),
('105', 'Deluxe private room', '14', '13890', '3', '3'),
('105', 'Grande room', '15', '13440', '5', '5'),
('105', 'Junior suite', '16', '14751', '3', '3'),
('105', 'Standard AC room', '17', '3450', '6', '6');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` varchar(10) NOT NULL,
  `user_name` varchar(15) NOT NULL,
  `user_mob` varchar(10) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `user_pass` varchar(15) NOT NULL,
  `user_add` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_mob`, `user_email`, `user_pass`, `user_add`) VALUES
('1234', 'Nitya', '8989898989', 'nitya@gmail.com', 'p1', ''),
('SID1', 'Siddhi', '8181818181', 'sidhi@gmail.com', 'pw2', ''),
('sway', 'swati', '8787878787', 'swati@gmail.com', 'p3', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`user_id`,`hotel_id`,`type_id`),
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
  ADD PRIMARY KEY (`hotel_id`,`type_id`);

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
  ADD CONSTRAINT `hotel-foreign` FOREIGN KEY (`hotel_id`) REFERENCES `hotel` (`hotel_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user-foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hotel`
--
ALTER TABLE `hotel`
  ADD CONSTRAINT `Foreign key constraints` FOREIGN KEY (`city_name`) REFERENCES `city` (`city_name`) ON UPDATE CASCADE;

--
-- Constraints for table `rooms`
--
ALTER TABLE `rooms`
  ADD CONSTRAINT `foreign` FOREIGN KEY (`hotel_id`) REFERENCES `hotel` (`hotel_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
