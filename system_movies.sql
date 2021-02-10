-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 10, 2021 at 03:56 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `system_movies`
--

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `movie_id` int(11) NOT NULL COMMENT 'รหัส',
  `movie_name` varchar(30) NOT NULL COMMENT 'ชื่อ',
  `movie_datetime` datetime NOT NULL COMMENT 'วันที่+เวลา'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`movie_id`, `movie_name`, `movie_datetime`) VALUES
(1, 'Godzilla vs Kong (2021)', '2021-02-10 18:00:00'),
(2, 'Wanda Vision (2021)', '2021-02-01 00:00:00'),
(3, 'à¸—à¸”à¸ªà¸­à¸š', '2021-02-10 10:03:00'),
(4, '5555 à¹ƒà¸«à¸¡à¹ˆ', '2021-02-13 10:04:00'),
(5, '5555 ใหม่', '2021-02-13 10:04:00'),
(6, 'ทดสอบ', '2021-02-11 10:05:00'),
(7, 'ทดสอบ (2021)', '2021-02-03 15:15:00'),
(8, 'ทดสอบเพิ่ม (2021)', '2021-02-10 13:00:00'),
(9, '', '2021-02-26 10:21:00'),
(10, '', '2021-02-26 10:21:00'),
(11, 'Godzilla vs Kong (2021)', '2021-02-11 10:22:00'),
(12, 'Godzilla vs Kong (2021)', '2021-02-11 10:22:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(8) NOT NULL,
  `user_username` varchar(30) NOT NULL,
  `user_pin` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_username`, `user_pin`) VALUES
(1, 'user', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`movie_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `movie_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัส', AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
