-- phpMyAdmin SQL Dump
-- version 4.7.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 03, 2019 at 10:39 AM
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
(20180005, 20180007, 2, 'Lolo Osi Dormitories', 'Juan Luna st.. Sto cristo, Tarlac City', '0912225050', '4', '../assets/img/bhd_images/1538787420Screen Shot 2018-10-06 at 8.51.30 AM.png', '../assets/img/bhd_business_license_permit/1538787420153841690442882964_273771560011558_2717328948076740608_n.png', '2824', 'Lolo Osi Dormitories description', 3, 'March 3, 2019 5:33 pm', 'October 6, 2018 8:57 am'),
(20180007, 20180012, 1, 'Arvil', 'Camiling Tarlac', '09981850790', '4', '../assets/img/bhd_images/15507664107.png', '../assets/img/bhd_business_license_permit/15507664105.png', '5555', 'arvil', 5, 'February 22, 2019 12:26 am', 'February 22, 2019 12:26 am'),
(20180008, 20180016, 2, 'norvs b house', 'gomez st., camiling, tarlac', '09981850790', '20', '../assets/img/bhd_images/15508457950.jpg', '../assets/img/bhd_business_license_permit/15508457957.png', '7878', '12121212', 4, 'February 22, 2019 11:36 pm', 'February 22, 2019 10:29 pm');

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
  `updated_date` varchar(255) NOT NULL,
  `created_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`room_id`, `house_id`, `room_type`, `room_number`, `room_price`, `room_customer_no`, `availability`, `updated_date`, `created_date`) VALUES
(20180005, 20180004, 1, '2019', '2000', 0, '5', 'February 21, 2019 9:51 pm', 'February 19, 2019 4:43 pm'),
(20180006, 20180008, 1, '8', '999', 3, '4', 'February 22, 2019 11:18 pm', 'February 22, 2019 11:16 pm');

-- --------------------------------------------------------

--
-- Table structure for table `room_imgs`
--

CREATE TABLE `room_imgs` (
  `img_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `img_name` varchar(255) NOT NULL,
  `created_date` varchar(255) NOT NULL,
  `updated_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room_imgs`
--

INSERT INTO `room_imgs` (`img_id`, `room_id`, `img_name`, `created_date`, `updated_date`) VALUES
(20190091, 20180005, '../assets/img/rooms/15507570903.png', 'February 21, 2019 9:51 pm', 'February 21, 2019 9:51 pm'),
(20190093, 20180006, '../assets/img/rooms/15508486911.png', 'February 22, 2019 11:18 pm', 'February 22, 2019 11:18 pm'),
(20190094, 20180006, '../assets/img/rooms/15508486912.png', 'February 22, 2019 11:18 pm', 'February 22, 2019 11:18 pm'),
(20190095, 20180006, '../assets/img/rooms/15508486913.png', 'February 22, 2019 11:18 pm', 'February 22, 2019 11:18 pm');

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
(1, 1, 1, 'Admin', 'Admin', 'Admin', 'Admin address', 'm', '2001-02-07', '../assets/img/owner_pictures/1550059538marcel.jpg', 'admin@test.com', '122223550', 'admin', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '0000-00-00 00:00:00', 'February 13, 2019 8:05 pm'),
(20180002, 3, 1, 'Wesley', 'Sebastian', 'S', 'NA', 'm', '2018-09-11', '../assets/img/owner_pictures/1538906725Screen Shot 2018-06-07 at 10.29.53 PM.png', 'wesley@gmail.com', '09122235050', 'wesley', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'September 30, 2018 2:02 am', 'October 7, 2018 6:05 pm'),
(20180003, 2, 1, 'Wilbert', 'Garcia', 'G', 'NA', 'm', '2018-09-21', 'assets/img/default.jpg', 'wilbert@gmail.com', '09122235050', 'wilbert', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'September 30, 2018 2:08 am', 'September 30, 2018 2:09 am'),
(20180004, 2, 1, 'Jan Rommel', 'Lorenzo', 'a', 'NA', 'm', '2018-10-11', 'assets/img/default.jpg', 'janrommel@gmail.com', '09122235050', 'rommel', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'October 2, 2018 1:21 am', 'October 2, 2018 1:39 am'),
(20180005, 2, 1, 'Jemar', 'Agustin', 'A', 'Morales Bldg F taedo st Brgy San Nicolas Tarlac City', 'm', '1999-01-14', '../assets/img/owner_pictures/15386792741538563692Screen Shot 2018-06-07 at 10.29.53 PM.png', 'jemar@gmail.com', '09122235050', 'jemar', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'October 5, 2018 2:52 am', 'October 5, 2018 2:54 am'),
(20180006, 2, 1, 'Owner', 'De Leon', 'D', 'Hosp DR San vicente Tarlac City', 'm', '2018-10-11', '../assets/img/default.jpg', 'deleon@gmail.com', '09122235050', 'deleon', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'October 6, 2018 8:30 am', 'October 6, 2018 8:30 am'),
(20180007, 2, 1, 'Corera', 'Corera', 'C', 'Juan Luna st Sto cristo Tarlac City', 'f', '2018-10-12', '../assets/img/default.jpg', 'Corera@gmail.com', '09122235050', 'corera', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'October 6, 2018 8:55 am', 'October 6, 2018 8:55 am'),
(20180008, 3, 1, 'Zera', 'Mana', 'Mena', 'Adriatico St. Malate Manila', 'f', '1995-02-10', '../assets/img/default.jpg', 'zeramana@gmail.com', '0977792334', 'Zera', '9ef51daa691a2f2404d65752cac7d66fc9e7f8cb', 'October 7, 2018 6:12 pm', 'October 7, 2018 6:13 pm'),
(20180010, 2, 1, 'Rochelle', 'Lorenzo', 'Anne', 'Brgy Libueg Camiling Tarlac', 'm', '1995-10-25', 'assets/img/default.jpg', 'rochelleofficial025@gmail.com', '09773390522', 'chel', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'February 5, 2019 12:24 am', 'February 5, 2019 12:45 am'),
(20180011, 2, 1, 'Wesley', 'Sebastian', '', 'wesley address', 'm', '2001-02-08', 'assets/img/default.jpg', 'wesleyqq@gmail.com', '09122235050', 'wes', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'February 13, 2019 6:49 pm', 'February 13, 2019 7:28 pm'),
(20180012, 2, 1, 'arvill', 'tangonan', '', '', '', '', 'assets/img/default.jpg', 'arvilltangonan@gmail.com', '09278579678', 'arvil', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'February 13, 2019 7:33 pm', 'February 13, 2019 7:33 pm'),
(20180013, 3, 1, 'arvill', 'tangonan', '_.', 'NA', 'm', '2004-02-11', '../assets/img/default.jpg', 'arvilltangonan2@gmail.com', '09278579678', 'arrr', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'February 13, 2019 7:34 pm', 'February 13, 2019 8:03 pm'),
(20180014, 1, 1, 'Lorenzo', 'Jan Rommel', 'NA', 'NA', '', 'NA', '../assets/img/default.jpg', 'lorenzojanrommel@gmail.com', '09123455000', 'mel', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'February 13, 2019 8:10 pm', 'February 13, 2019 8:10 pm'),
(20180015, 1, 1, 'James', 'pas', '_.', '', '', 'NA', '../assets/img/default.jpg', 'james@gmail.com', '091223405063', 'james', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'February 13, 2019 8:37 pm', 'February 13, 2019 8:37 pm'),
(20180016, 2, 1, 'Norvin', 'Mercado', '_.', 'gomez st camiling tarlac', 'm', '2000-12-12', 'assets/img/default.jpg', 'norvin@gmail.com', '09981850790', 'norvin21', '01b307acba4f54f55aafc33bb06bbbf6ca803e9a', 'February 22, 2019 10:13 pm', 'February 22, 2019 10:21 pm'),
(20180017, 1, 1, 'juan', 'dela cruz', '_.', '', '', 'NA', '../assets/img/default.jpg', 'juandelacruz@gmail.com', '09981850790', 'admintwo', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'February 22, 2019 11:06 pm', 'February 22, 2019 11:06 pm');

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
-- Indexes for table `room_imgs`
--
ALTER TABLE `room_imgs`
  ADD PRIMARY KEY (`img_id`),
  ADD KEY `room_id` (`room_id`) USING BTREE;

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
  MODIFY `house_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20180009;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `reservation_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20180007;

--
-- AUTO_INCREMENT for table `room_imgs`
--
ALTER TABLE `room_imgs`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20190096;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20180018;

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
-- Constraints for table `room_imgs`
--
ALTER TABLE `room_imgs`
  ADD CONSTRAINT `room_imgs_ibfk_1` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`room_id`);

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
