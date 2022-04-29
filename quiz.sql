-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2022 at 08:35 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `q_id` int(11) NOT NULL,
  `question` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`q_id`, `question`) VALUES
(1, 'What is capital of India?'),
(2, 'What is 1+1?'),
(3, 'Who painted Mona Lisa?'),
(4, 'How many continents exists?'),
(5, 'How many days makes a week ?'),
(6, '30 days has ______ ?'),
(7, 'How many hours can be found in a day ?'),
(8, 'Which is the longest river in the world ?'),
(9, '_____ is the hottest Continent on Earth ?'),
(10, 'Which country is the largest in the world ?');

-- --------------------------------------------------------

--
-- Table structure for table `question_choice`
--

CREATE TABLE `question_choice` (
  `choice_id` int(11) NOT NULL,
  `q_id` int(11) NOT NULL,
  `is_right_choice` tinyint(1) NOT NULL,
  `choice` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `question_choice`
--

INSERT INTO `question_choice` (`choice_id`, `q_id`, `is_right_choice`, `choice`) VALUES
(1, 1, 1, 'Delhi'),
(2, 1, 0, 'gurgaon'),
(3, 1, 0, 'panjim'),
(4, 1, 0, 'mumbai'),
(5, 2, 1, '2'),
(6, 2, 0, '4'),
(7, 2, 0, '8'),
(8, 2, 0, '6'),
(9, 3, 1, 'Leo'),
(10, 3, 0, 'Tiger'),
(11, 3, 0, 'John'),
(12, 3, 0, 'Fin'),
(13, 4, 0, '1'),
(14, 4, 0, '4'),
(15, 4, 0, '9'),
(16, 4, 1, '7'),
(17, 5, 0, '10 days'),
(18, 5, 1, '7 days'),
(19, 5, 0, '15 days'),
(20, 5, 0, '1 day'),
(21, 6, 0, 'January'),
(22, 6, 0, 'November'),
(23, 6, 1, 'July'),
(24, 6, 0, 'December'),
(25, 7, 0, '30 hours'),
(26, 7, 0, '38 hours'),
(27, 7, 0, '48 hours'),
(28, 7, 1, '24 hours'),
(29, 8, 1, 'River Nile'),
(30, 8, 0, 'Long River'),
(31, 8, 0, 'River Niger'),
(32, 8, 0, 'Lake Chad'),
(33, 9, 0, 'Oceania'),
(34, 9, 0, 'Antarctica'),
(35, 9, 1, 'Africa'),
(36, 9, 0, 'North America'),
(37, 10, 1, 'Russia'),
(38, 10, 0, 'Canada'),
(39, 10, 0, 'Africa'),
(40, 10, 0, 'Egypt');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `id` int(2) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(10) NOT NULL,
  `score` int(150) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`id`, `email`, `password`, `role`, `score`, `date`) VALUES
(1, 'siddhantparekh7@gmail.com', '*35619C2C9F021D87FE548A48EE9AF715FCA09D86', 'admin', 0, '2022-03-28 09:19:08'),
(7, 'sad', 'sad', 'Admin', 0, '2022-03-28 09:44:46'),
(8, 'siddhant.parekh@somaiya.edu', 'pass@123', 'Admin', 0, '2022-03-28 10:02:27'),
(12, 'User', '123456', 'User', 0, '2022-04-21 15:48:59'),
(18, 'User', '123456', 'User', 0, '2022-04-22 04:07:45'),
(22, 'exp9@email.com', '1234567', 'User', 0, '2022-04-23 05:26:13'),
(23, 'siddhant@gmail.com', '1234456', 'User', 0, '2022-04-23 05:26:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `question_choice`
--
ALTER TABLE `question_choice`
  ADD PRIMARY KEY (`choice_id`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `question_choice`
--
ALTER TABLE `question_choice`
  MODIFY `choice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
