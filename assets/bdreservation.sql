-- phpMyAdmin SQL Dump
-- version 4.7.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 07, 2018 at 01:51 PM
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
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `house_category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `house_category`) VALUES
(1, 'Boarding House'),
(2, 'Dormitory');

-- --------------------------------------------------------

--
-- Table structure for table `houses`
--

CREATE TABLE `houses` (
  `house_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `house_category_id` int(11) NOT NULL,
  `house_name` varchar(255) NOT NULL,
  `house_address` varchar(255) NOT NULL,
  `house_phone_number` text NOT NULL,
  `house_number_room` text NOT NULL,
  `house_picture` text NOT NULL,
  `house_blpp` text NOT NULL,
  `house_business_no` varchar(100) NOT NULL,
  `house_description` text NOT NULL,
  `house_status` int(11) NOT NULL,
  `updated_date` varchar(100) NOT NULL,
  `created_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `houses`
--

INSERT INTO `houses` (`house_id`, `user_id`, `house_category_id`, `house_name`, `house_address`, `house_phone_number`, `house_number_room`, `house_picture`, `house_blpp`, `house_business_no`, `house_description`, `house_status`, `updated_date`, `created_date`) VALUES
(20180004, 20180006, 1, 'De leon Boarding house', 'Hosp DR, San vicente, Tarlac City', '09122235050', '4', '../assets/img/bhd_images/1538786482Screen Shot 2018-10-06 at 8.27.40 AM.png', '../assets/img/bhd_business_license_permit/1538786482153841690442882964_273771560011558_2717328948076740608_n.png', '2731', 'De leon Boarding house Description', 4, 'October 6, 2018 8:41 am', 'October 6, 2018 8:41 am'),
(20180005, 20180007, 2, 'Lolo Osi Dormitories', 'Juan Luna st.. Sto cristo, Tarlac City', '0912225050', '4', '../assets/img/bhd_images/1538787420Screen Shot 2018-10-06 at 8.51.30 AM.png', '../assets/img/bhd_business_license_permit/1538787420153841690442882964_273771560011558_2717328948076740608_n.png', '2824', 'Lolo Osi Dormitories description', 4, 'October 6, 2018 8:57 am', 'October 6, 2018 8:57 am');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `reservation_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `owner_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `reservation_status` int(11) NOT NULL,
  `room_price` varchar(100) NOT NULL,
  `day` varchar(100) NOT NULL,
  `update_reserve_date` varchar(255) NOT NULL,
  `reserve_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`reservation_id`, `customer_id`, `owner_id`, `room_id`, `reservation_status`, `room_price`, `day`, `update_reserve_date`, `reserve_date`) VALUES
(7, 20180008, 20180006, 20180003, 4, '1', '30', 'October 7, 2018 7:40 pm', 'October 7, 2018 7:35 pm'),
(8, 20180002, 20180006, 20180003, 4, '1', '5', 'October 7, 2018 7:42 pm', 'October 7, 2018 7:41 pm');

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
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `room_id` int(11) NOT NULL,
  `house_id` int(11) NOT NULL,
  `room_type` int(11) NOT NULL,
  `room_number` varchar(10) NOT NULL,
  `room_price` varchar(255) NOT NULL,
  `room_customer_no` int(11) NOT NULL,
  `availability` varchar(255) NOT NULL,
  `room_pic_1` varchar(255) NOT NULL,
  `room_pic_2` varchar(255) NOT NULL,
  `room_pic_3` varchar(255) NOT NULL,
  `room_pic_4` varchar(255) NOT NULL,
  `updated_date` varchar(255) NOT NULL,
  `created_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`room_id`, `house_id`, `room_type`, `room_number`, `room_price`, `room_customer_no`, `availability`, `room_pic_1`, `room_pic_2`, `room_pic_3`, `room_pic_4`, `updated_date`, `created_date`) VALUES
(20180003, 20180004, 1, '25', '1', 4, '4', '../assets/img/rooms/1538786729Screen Shot 2018-10-06 at 8.20.35 AM.png', '../assets/img/rooms/1538786729Screen Shot 2018-10-06 at 8.20.56 AM.png', '../assets/img/rooms/1538907444Screen Shot 2018-10-07 at 6.17.07 PM.png', '../assets/img/rooms/1538786729Screen Shot 2018-10-06 at 8.21.17 AM.png', 'October 7, 2018 7:41 pm', 'October 6, 2018 8:43 am'),
(20180004, 20180005, 2, '3', '1', 0, '3', '../assets/img/rooms/1538787526Screen Shot 2018-10-06 at 8.50.51 AM.png', '../assets/img/rooms/1538787526Screen Shot 2018-10-06 at 8.50.58 AM.png', '../assets/img/rooms/1538787526Screen Shot 2018-10-06 at 8.51.09 AM.png', '../assets/img/rooms/1538787526Screen Shot 2018-10-06 at 8.51.21 AM.png', 'October 6, 2018 8:58 am', 'October 6, 2018 8:58 am');

-- --------------------------------------------------------

--
-- Table structure for table `room_types`
--

CREATE TABLE `room_types` (
  `type_id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room_types`
--

INSERT INTO `room_types` (`type_id`, `type`) VALUES
(1, 'Male'),
(2, 'Female');

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
(2, 'Deactivate'),
(3, 'Pending'),
(4, 'Approved'),
(5, 'Denied');

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
  `user_phone_number` varchar(15) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `create_date` varchar(100) NOT NULL,
  `update_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `status_id`, `user_fname`, `user_lname`, `user_mname`, `user_address`, `user_gender`, `user_birthdate`, `user_picture`, `user_email`, `user_phone_number`, `username`, `password`, `create_date`, `update_date`) VALUES
(1, 1, 1, 'Admin', 'Admin', 'Admin', 'Admin address', 'm', '2018-08-29', '../assets/img/owner_pictures/1538694605Screen Shot 2018-06-07 at 10.29.53 PM.png', 'admin@test.com', '122223550', 'admin', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '0000-00-00 00:00:00', 'October 5, 2018 7:10 am'),
(20180002, 3, 1, 'Wesley', 'Sebastian', 'S', 'NA', 'm', '2018-09-11', '../assets/img/owner_pictures/1538906725Screen Shot 2018-06-07 at 10.29.53 PM.png', 'wesley@gmail.com', '09122235050', 'wesley', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'September 30, 2018 2:02 am', 'October 7, 2018 6:05 pm'),
(20180003, 2, 1, 'Wilbert', 'Garcia', 'G', 'NA', 'm', '2018-09-21', 'assets/img/default.jpg', 'wilbert@gmail.com', '09122235050', 'wilbert', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'September 30, 2018 2:08 am', 'September 30, 2018 2:09 am'),
(20180004, 2, 1, 'Jan Rommel', 'Lorenzo', 'a', 'NA', 'm', '2018-10-11', 'assets/img/default.jpg', 'janrommel@gmail.com', '09122235050', 'rommel', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'October 2, 2018 1:21 am', 'October 2, 2018 1:39 am'),
(20180005, 2, 1, 'Jemar', 'Agustin', 'A', 'Morales Bldg F taedo st Brgy San Nicolas Tarlac City', 'm', '1999-01-14', '../assets/img/owner_pictures/15386792741538563692Screen Shot 2018-06-07 at 10.29.53 PM.png', 'jemar@gmail.com', '09122235050', 'jemar', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'October 5, 2018 2:52 am', 'October 5, 2018 2:54 am'),
(20180006, 2, 1, 'Owner', 'De Leon', 'D', 'Hosp DR San vicente Tarlac City', 'm', '2018-10-11', '../assets/img/default.jpg', 'deleon@gmail.com', '09122235050', 'deleon', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'October 6, 2018 8:30 am', 'October 6, 2018 8:30 am'),
(20180007, 2, 1, 'Corera', 'Corera', 'C', 'Juan Luna st Sto cristo Tarlac City', 'f', '2018-10-12', '../assets/img/default.jpg', 'Corera@gmail.com', '09122235050', 'corera', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'October 6, 2018 8:55 am', 'October 6, 2018 8:55 am'),
(20180008, 3, 1, 'Zera', 'Mana', 'Mena', 'Adriatico St. Malate Manila', 'f', '1995-02-10', '../assets/img/default.jpg', 'zeramana@gmail.com', '0977792334', 'Zera', '9ef51daa691a2f2404d65752cac7d66fc9e7f8cb', 'October 7, 2018 6:12 pm', 'October 7, 2018 6:13 pm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `houses`
--
ALTER TABLE `houses`
  ADD PRIMARY KEY (`house_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `faci_status` (`house_status`),
  ADD KEY `house_category_id` (`house_category_id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`reservation_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `room_id` (`room_id`),
  ADD KEY `reservation_status` (`reservation_status`),
  ADD KEY `owner_id` (`owner_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`room_id`),
  ADD KEY `house_id` (`house_id`),
  ADD KEY `room_type` (`room_type`);

--
-- Indexes for table `room_types`
--
ALTER TABLE `room_types`
  ADD PRIMARY KEY (`type_id`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `houses`
--
ALTER TABLE `houses`
  MODIFY `house_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20180006;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `reservation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20180005;

--
-- AUTO_INCREMENT for table `room_types`
--
ALTER TABLE `room_types`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20180009;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `houses`
--
ALTER TABLE `houses`
  ADD CONSTRAINT `facilities_status` FOREIGN KEY (`house_status`) REFERENCES `status` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `house_category` FOREIGN KEY (`house_category_id`) REFERENCES `categories` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `houses_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `reservations_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reservations_ibfk_4` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`room_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reservations_ibfk_5` FOREIGN KEY (`reservation_status`) REFERENCES `status` (`id`),
  ADD CONSTRAINT `reservations_ibfk_6` FOREIGN KEY (`owner_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rooms`
--
ALTER TABLE `rooms`
  ADD CONSTRAINT `rooms_ibfk_1` FOREIGN KEY (`house_id`) REFERENCES `houses` (`house_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rooms_ibfk_2` FOREIGN KEY (`room_type`) REFERENCES `room_types` (`type_id`);

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
