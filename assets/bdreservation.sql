-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2018 at 10:47 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL,
  `house_category` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

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

CREATE TABLE IF NOT EXISTS `houses` (
  `house_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `house_category_id` int(11) NOT NULL,
  `house_name` varchar(255) NOT NULL,
  `house_address` varchar(255) NOT NULL,
  `house_postcode` int(11) NOT NULL,
  `house_phone_number` text NOT NULL,
  `house_number_room` text NOT NULL,
  `house_picture` text NOT NULL,
  `house_mp` text NOT NULL,
  `house_birp` text NOT NULL,
  `house_blpp` text NOT NULL,
  `house_description` text NOT NULL,
  `house_status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `houses`
--

INSERT INTO `houses` (`house_id`, `user_id`, `house_category_id`, `house_name`, `house_address`, `house_postcode`, `house_phone_number`, `house_number_room`, `house_picture`, `house_mp`, `house_birp`, `house_blpp`, `house_description`, `house_status`) VALUES
(53, 3, 1, 'QWE', 'Camiling, Tarlac, Philippines', 2306, '902323232424242', '4', 'assets/img/bhd_images/1535397801homebg.jpg', 'assets/img/bhd_mayors_permit/1535397801homebg.jpg', 'assets/img/bhd_bir_permit/1535397801homebg.jpg', 'assets/img/bhd_business_license_plate/1535397801coffee.jpg', 'QWEqeqwewqewq', 4),
(54, 5, 1, 'Sample1', 'sample1@address', 2304, '00923092302', '2', 'assets/img/no_image_uploaded.png', 'assets/img/no_image_uploaded.png', 'assets/img/no_image_uploaded.png', 'assets/img/no_image_uploaded.png', 'This is sample 1', 3);

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE IF NOT EXISTS `reservations` (
  `reservation_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `owner_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `reservation_status` int(11) NOT NULL,
  `room_price` varchar(100) NOT NULL,
  `payment` varchar(255) NOT NULL,
  `update_reserve_date` varchar(255) NOT NULL,
  `reserve_date` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`reservation_id`, `customer_id`, `owner_id`, `room_id`, `reservation_status`, `room_price`, `payment`, `update_reserve_date`, `reserve_date`) VALUES
(26, 4, 3, 17, 4, '23', '0', 'September 25, 2018 6:03 pm', 'September 25, 2018 6:02 pm');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

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

CREATE TABLE IF NOT EXISTS `rooms` (
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
  `update_date` varchar(255) NOT NULL,
  `created_date` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`room_id`, `house_id`, `room_type`, `room_number`, `room_price`, `room_customer_no`, `availability`, `room_pic_1`, `room_pic_2`, `room_pic_3`, `room_pic_4`, `update_date`, `created_date`) VALUES
(15, 53, 2, '23', '4242', 5, '6', '../assets/img/noimage.png', '../assets/img/noimage.png', '../assets/img/noimage.png', '../assets/img/noimage.png', 'September 24, 2018 1:28 am', 'September 24, 2018 1:28 am'),
(16, 53, 1, '4', '123', 0, '2', '../assets/img/noimage.png', '../assets/img/noimage.png', '../assets/img/noimage.png', '../assets/img/noimage.png', '', ''),
(17, 53, 1, '3', '23', 1, '3', '../assets/img/noimage.png', '../assets/img/noimage.png', '../assets/img/noimage.png', '../assets/img/noimage.png', 'September 25, 2018 6:03 pm', ''),
(18, 53, 1, '23', '3232', 0, '6', '../assets/img/noimage.png', '../assets/img/noimage.png', '../assets/img/noimage.png', '../assets/img/noimage.png', 'September 25, 2018 5:29 pm', '');

-- --------------------------------------------------------

--
-- Table structure for table `room_types`
--

CREATE TABLE IF NOT EXISTS `room_types` (
  `type_id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room_types`
--

INSERT INTO `room_types` (`type_id`, `type`) VALUES
(1, 'Single'),
(2, 'Double');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

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

CREATE TABLE IF NOT EXISTS `users` (
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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `status_id`, `user_fname`, `user_lname`, `user_mname`, `user_address`, `user_gender`, `user_birthdate`, `user_picture`, `user_email`, `user_phone_number`, `username`, `password`, `create_date`, `update_date`) VALUES
(1, 1, 1, 'Admin', 'Admin', 'Admin', 'Admin address', 'm', '2018-08-29', '../assets/img/owner_pictures/15380520817cdee8236a997c7c49c05b8a0e46f89e51a7e361_hq.jpg', 'admin@test.com', '122223550', 'admin', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '0000-00-00 00:00:00', 'September 27, 2018 8:41 pm'),
(2, 2, 1, 'Jan', 'Lorenzo', 'kj', 'NA', '', 'NA', 'NA', 'jan@gmail.com', '', 'mel', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 2, 1, 'Owner', 'Owner', 'Owner', 'Bacabac Camiling,Tarlac', 'm', '2018-09-05', '../assets/img/owner_pictures/15380617637cdee8236a997c7c49c05b8a0e46f89e51a7e361_hq.jpg', 'owner@gmail.com', '0923232323', 'owner', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '0000-00-00 00:00:00', 'September 27, 2018 11:25 pm'),
(4, 3, 1, 'Customer', 'Customer', 'Customer', 'Libueg Camiling,Tarlac', 'm', '2018-09-21', '../assets/img/owner_pictures/15380624927cdee8236a997c7c49c05b8a0e46f89e51a7e361_hq.jpg', 'customer@gmail.com', '09280522001', 'customer', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '0000-00-00 00:00:00', 'September 27, 2018 11:34 pm'),
(5, 2, 1, 'Owner2', 'Owner2', 'Owner2', 'NA', '', 'NA', 'NA', 'owner2@test.test', '', 'owner2', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 1, 1, 'Mel', 'Antonio', 'Lorenzo', 'NA', '', 'NA', 'NA', 'misterfewwords@gmail.com', '09122235050', 'melmel', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'September 25, 2018 4:23 am', 'September 25, 2018 4:23 am'),
(7, 1, 1, 'Wesley', 'Sebastian', 'Q', 'NA', '', 'NA', 'NA', 'wes@gmail.com', '09122222222', 'wes', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'September 25, 2018 6:16 pm', 'September 25, 2018 6:16 pm'),
(8, 2, 1, 'Kobe', 'Agustine', 'J', 'NA', 'm', '2018-09-12', '../assets/img/owner_pictures/1537911519Chibi-Star-Guardian-Soraka-by-Xyrise-HD-Wallpaper-Background-Fan-Art-Artwork-League-of-Legends-lol-Thumbnail.jpg', 'jemar@gmail.com', '639122235050', 'jemar', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'September 26, 2018 2:21 am', 'September 26, 2018 5:38 am');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `houses`
--
ALTER TABLE `houses`
  MODIFY `house_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `reservation_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `room_types`
--
ALTER TABLE `room_types`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
