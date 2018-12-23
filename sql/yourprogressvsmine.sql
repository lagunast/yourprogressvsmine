-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2018 at 05:22 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yourprogressvsmine`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `message_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `timestamp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`message_id`, `user_id`, `message`, `timestamp`) VALUES
(6, 14, 'hello there', 0),
(7, 15, 'Hi', 0),
(79, 14, 'hello', 0);

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `login_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `last_activity` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`login_id`, `user_id`, `last_activity`) VALUES
(1, 14, '2018-12-20 23:30:20'),
(2, 14, '2018-12-21 03:34:40'),
(3, 14, '2018-12-21 03:49:00'),
(4, 14, '2018-12-22 06:19:01'),
(5, 14, '2018-12-22 06:23:31'),
(6, 14, '2018-12-22 06:24:44'),
(7, 14, '2018-12-22 09:39:04'),
(8, 14, '2018-12-22 09:52:21'),
(9, 14, '2018-12-22 10:13:42'),
(10, 14, '2018-12-22 10:19:13'),
(11, 14, '2018-12-22 10:45:56'),
(12, 14, '2018-12-22 10:51:42'),
(13, 15, '2018-12-22 11:02:25'),
(14, 14, '2018-12-22 11:13:41'),
(15, 14, '2018-12-22 11:20:28'),
(16, 15, '2018-12-22 11:22:38'),
(17, 14, '2018-12-22 11:24:55'),
(18, 14, '2018-12-22 12:19:18'),
(19, 14, '2018-12-22 12:26:22'),
(20, 14, '2018-12-22 13:24:02'),
(21, 14, '2018-12-22 13:44:46');

-- --------------------------------------------------------

--
-- Table structure for table `pwdreset`
--

CREATE TABLE `pwdreset` (
  `pwdResetId` int(11) NOT NULL,
  `pwdResetEmail` text NOT NULL,
  `pwdResetSelector` text NOT NULL,
  `pwdResetToken` longtext NOT NULL,
  `PwdResetExpires` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pwdreset`
--

INSERT INTO `pwdreset` (`pwdResetId`, `pwdResetEmail`, `pwdResetSelector`, `pwdResetToken`, `PwdResetExpires`) VALUES
(3, '', '1133f985c54c92b5', '$2y$10$u02I1ON1zAR35WGZHkoKkeHmH7YW6lWfHl0yO7U0w0mWEQgJfbJ8W', '1543516829'),
(4, 'nick@nickscreativedesign.com', '33e0aaed25677e88', '$2y$10$y.cx10zCDBY1MdvO/N3B4.cM/3TbdIEYavwcTacP9GwSb2ujTExkO', '1543531379');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_first` tinytext NOT NULL,
  `user_last` tinytext NOT NULL,
  `user_date` datetime NOT NULL,
  `user_goal` tinytext NOT NULL,
  `user_email` tinytext NOT NULL,
  `user_pwd` longtext NOT NULL,
  `user_qoute` varchar(256) NOT NULL,
  `user_gender` tinytext NOT NULL,
  `user_uid` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_first`, `user_last`, `user_date`, `user_goal`, `user_email`, `user_pwd`, `user_qoute`, `user_gender`, `user_uid`) VALUES
(14, 'nick', 'simpson', '1983-10-29 00:00:00', 'Transform', 'nick@nickscreativedesign.com', '$2y$10$yWxBE5RGm2BvmlzRJoZDfulx339QYFWGiqVdmLNAwYygAiZJGOL3G', 'do what others wont today so i can do what others cant tomorrow!', 'male', 'toxic'),
(15, 'test', 'test', '2018-10-21 00:00:00', 'Other', 'test@test.com', '$2y$10$ay7PAFvuXsYSy1oojBt5SOvzKczaNXqRsuQjjlIenEOliG2eIYUue', 'this is a test!', 'male', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `workout_desc`
--

CREATE TABLE `workout_desc` (
  `wrk_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `wrk_name` varchar(256) NOT NULL,
  `wrk_type` varchar(256) NOT NULL,
  `wrk_sets` varchar(256) NOT NULL,
  `wrk_desc` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workout_desc`
--

INSERT INTO `workout_desc` (`wrk_id`, `user_id`, `wrk_name`, `wrk_type`, `wrk_sets`, `wrk_desc`) VALUES
(5, 0, 'GPP 1 ', 'Cardio', '5', 'Hiit Interval Training! ');

-- --------------------------------------------------------

--
-- Table structure for table `workout_details`
--

CREATE TABLE `workout_details` (
  `add_id` int(11) NOT NULL,
  `wrk_id` int(11) NOT NULL,
  `add_name` varchar(256) NOT NULL,
  `add_equip` varchar(256) NOT NULL,
  `add_sets` varchar(256) NOT NULL,
  `add_reps` varchar(256) NOT NULL,
  `add_time` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workout_details`
--

INSERT INTO `workout_details` (`add_id`, `wrk_id`, `add_name`, `add_equip`, `add_sets`, `add_reps`, `add_time`) VALUES
(1, 0, 'Burpees', 'None', '1', '', ':30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `login_details`
--
ALTER TABLE `login_details`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `pwdreset`
--
ALTER TABLE `pwdreset`
  ADD PRIMARY KEY (`pwdResetId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `workout_desc`
--
ALTER TABLE `workout_desc`
  ADD PRIMARY KEY (`wrk_id`);

--
-- Indexes for table `workout_details`
--
ALTER TABLE `workout_details`
  ADD PRIMARY KEY (`add_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
--
-- AUTO_INCREMENT for table `login_details`
--
ALTER TABLE `login_details`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `pwdreset`
--
ALTER TABLE `pwdreset`
  MODIFY `pwdResetId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `workout_desc`
--
ALTER TABLE `workout_desc`
  MODIFY `wrk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `workout_details`
--
ALTER TABLE `workout_details`
  MODIFY `add_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
