-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2020 at 05:53 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iap_lab_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `foods`
--

CREATE TABLE `foods` (
  `food_id` int(11) NOT NULL,
  `food_name` varchar(255) NOT NULL,
  `food_description` varchar(255) NOT NULL,
  `food_price` int(255) NOT NULL,
  `food_image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `foods`
--

INSERT INTO `foods` (`food_id`, `food_name`, `food_description`, `food_price`, `food_image`) VALUES
(1, 'Italian Pasta', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 1600, 0x676f6f64656174732d7971722d4f4f3558546d7868324e672d756e73706c6173682e6a7067),
(2, 'Choco-vanilla Frappe', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 450, 0x666f6f642d70686f746f677261706865722d6a656e6e696665722d70616c6c69616e2d5832674d2d5349756670552d756e73706c6173682e6a7067),
(3, 'Dry Red Wine', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 800, 0x6b6576696e2d6b656c6c792d50506e65534271664343552d756e73706c6173682e6a7067),
(4, 'Mojito', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 650, 0x6d656c697373612d77616c6b65722d686f726e2d67744459775549723956672d756e73706c6173682e6a7067),
(5, 'Spicy Rice Porridge', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 1400, 0x73746576652d7473616e672d4f746572474d706b64734d2d756e73706c6173682e6a7067),
(6, 'Vegetable Soup', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 1250, 0x6d6f6e696b612d677261626b6f77736b612d565650432d4445426932492d756e73706c6173682e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_full_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `city_of_residence` varchar(255) NOT NULL,
  `profile_photo` blob NOT NULL,
  `user_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_full_name`, `user_email`, `city_of_residence`, `profile_photo`, `user_password`) VALUES
(1, 'Maryann Gitonga', 'nay@gmail.com', 'Kitale', 0x4d617279616e6e5f4769746f6e676127735f50686f746f2e6a706567, '$2y$10$hJ4YikZfsu.SpI8R0h0pqepn91GiSIjtn'),
(2, 'Imali Susan', 'imali@mail.com', 'Kisumu', 0x576861747341707020496d61676520323032302d31302d32302061742031312e32332e313120414d2e6a706567, '$2y$10$EYKKP6q1pI3zY97xq9.QIOJWsO5aXeeQA'),
(3, 'Annrita Gitonga', 'rita@mail.com', 'Mombasa', 0x4d617279616e6e5f4769746f6e676127735f50686f746f2e6a706567, '$2y$10$7wI56F9yMPByHMeVv2wCn.9SPvdHRfArl'),
(5, 'Cyprian Kyalo', 'cyprian@mail.com', 'Nairobi', 0x576861747341707020496d61676520323032302d31302d32302061742031312e32332e313120414d2e6a706567, '$2y$10$zgWgD05Gk8pwEkMn720MfufWkSBLU8DWVNkvT/AvL/g9/aI5Xgzbm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `foods`
--
ALTER TABLE `foods`
  ADD PRIMARY KEY (`food_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `foods`
--
ALTER TABLE `foods`
  MODIFY `food_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
