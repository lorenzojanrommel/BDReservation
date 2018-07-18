-- phpMyAdmin SQL Dump
-- version 4.7.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 18, 2018 at 11:12 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bdreservation`
--

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'Landlord'),
(3, 'Customer');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `status`) VALUES
(1, 'Active'),
(2, 'Deactivate');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `status_id` int(11) NOT NULL,
  `user_fname` varchar(255) NOT NULL,
  `user_lname` varchar(255) DEFAULT NULL,
  `user_mname` varchar(10) NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `user_gender` enum('m','f') NOT NULL,
  `user_birthdate` varchar(255) NOT NULL,
  `user_picture` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `create_date` datetime NOT NULL,
  `update_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `status_id`, `user_fname`, `user_lname`, `user_mname`, `user_address`, `user_gender`, `user_birthdate`, `user_picture`, `user_email`, `username`, `password`, `create_date`, `update_date`) VALUES
(1, 1, 1, 'Admin', 'Admin', '', 'Admin address', 'm', '04/27/2018', '', 'admin@test.com', 'admin', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 2, 1, 'Jan', 'Lorenzo', 'kj', 'NA', '', 'NA', 'NA', 'jan@gmail.com', 'mel', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 2, 1, 'Owner', 'Owner', 'Owner', 'NA', '', 'NA', 'NA', 'owner@gmail.com', 'owner', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 3, 1, 'Customer', 'Customer', 'Customer', 'NA', '', 'NA', 'NA', 'customer@gmail.com', 'customer', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`),
  ADD KEY `status_id` (`status_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`),
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`status_id`) REFERENCES `status` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
