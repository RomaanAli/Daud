-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2023 at 08:54 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fitclub`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `zipcode` varchar(20) NOT NULL,
  `country` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `plan_type` varchar(20) NOT NULL,
  `require_personal_trainer` varchar(3) NOT NULL,
  `been_in_gym_before` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `first_name`, `last_name`, `gender`, `address`, `city`, `zipcode`, `country`, `email`, `phone`, `plan_type`, `require_personal_trainer`, `been_in_gym_before`) VALUES
(1, 'Daud', 'Afzaal', 'male', 'Raiwind City', 'Lahore', '1234', 'pakistan', 'daudafzaal202@gmail.com', '03046300407', 'Select Plan', 'yes', 'yes'),
(2, 'Daud', 'Afzaal', 'male', 'Raiwind City', 'Lahore', '1234', 'pakistan', 'daudafzaal202@gmail.com', '03046300407', 'Select Plan', 'no', 'no'),
(3, 'Ahmad', 'Jamal', 'male', 'Nishter Colony', 'Lahore', '76554', 'Turkey', 'jamal@email.com', '03334042809', 'weekly', 'no', 'no'),
(4, 'Mahad', 'd', 'other', 'd', 'd', 'd', 'pakistan', 'daudafzaal202@gmail.com', 'd', 'basic', 'yes', 'no'),
(5, 'Areeba', 'Abid', 'female', 'Raiwind', 'Lahore', '22222', 'pakistan', 'areeba123@email.com', '03334042809', 'monthly', 'no', 'no'),
(6, 'aa', 'aa', 'female', 'aa', 'Lahore', '1234', 'pakistan', 'daudafzaal202@gmail.com', '03046300407', 'Select Plan', 'no', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'Daud Afzaal', 'daudafzaal202@gmail.com', 'daud41214'),
(6, 'Jamal', 'bcsm-f21-293@superior.edu.pk', 'asdf'),
(8, 'Daud Afzaal', 'daudafzaal202@gmail.com', 'QQ'),
(9, 'daud', 'daudafzaal202@gmail.com', 'ooo'),
(10, 'Mahad', 'mahad12@email.com', '1234%'),
(11, 'Hadi', 'Hadi12@gmail.com', 'asdf'),
(12, 'Sumera', 'bcsm-f21-290@superior.edu.pk', 'wwww'),
(13, 'Zainab', 'Zainab@email.com', '1234'),
(14, 'Fozia', 'raojunaidsabriraojunaidsabri@email.com', 'aaa'),
(15, 'Daud Afzaal', 'daudafzaal202@gmail.com', 'fff'),
(16, 'sss', 'Zainab@email.com', 'ssss'),
(17, 'zafar', 'zafar@email.com', '1234'),
(18, 'Usman', 'usman@email.com', '1234'),
(19, 'hhhh', 'Zainab@email.com', 'nnnn'),
(20, 'sabi', 'zsabi@email.com', 'ssss'),
(21, 'sabi', 'zsabi@email.com', 'jjjjjj'),
(22, 'hhhhh', 'hhhhh@email.com', 'jjjjj'),
(23, 'wwww', 'www@email.com', 'dddd'),
(24, 'kkkk', 'kkkk@email.com', 'kkkk'),
(25, 'gggg', 'gggg@email.com', 'gggg'),
(26, 'sindh', 'sindh@email.com', 'gia'),
(27, 'Areeba Abid', 'areeba12@email.com', '1234'),
(28, 'Jamal Khan', 'jamalkhan@email.com', '123456789'),
(29, 'qq', 'mahad123@email.com', '123'),
(30, 'qq', 'qq@email.com', 'qq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
