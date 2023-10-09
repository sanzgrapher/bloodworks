-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220511.c3fb567b13
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2023 at 04:29 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodworks`
--

-- --------------------------------------------------------

--
-- Table structure for table `bloodstock`
--

CREATE TABLE `bloodstock` (
  `bb_id` int(11) DEFAULT NULL,
  `a_pos` int(11) DEFAULT NULL,
  `a_neg` int(11) DEFAULT NULL,
  `b_pos` int(11) DEFAULT NULL,
  `b_neg` int(11) DEFAULT NULL,
  `o_neg` int(11) DEFAULT NULL,
  `o_pos` int(11) DEFAULT NULL,
  `ab_pos` int(11) DEFAULT NULL,
  `ab_neg` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bloodstock`
--

INSERT INTO `bloodstock` (`bb_id`, `a_pos`, `a_neg`, `b_pos`, `b_neg`, `o_neg`, `o_pos`, `ab_pos`, `ab_neg`) VALUES
(1, 84, 20, 30, 62, 67, 33, 23, 10),
(2, 3, 70, 88, 70, 6, 33, 37, 94),
(3, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `blood_banks`
--

CREATE TABLE `blood_banks` (
  `bb_id` int(11) NOT NULL,
  `bb_name` varchar(50) NOT NULL,
  `bb_email` varchar(50) DEFAULT NULL,
  `bb_username` varchar(50) NOT NULL,
  `bb_password` varchar(100) NOT NULL,
  `bb_phoneno` varchar(20) DEFAULT NULL,
  `bb_address` varchar(255) DEFAULT NULL,
  `bb_status` varchar(50) DEFAULT NULL,
  `bb_description` varchar(255) DEFAULT NULL,
  `bb_image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blood_banks`
--

INSERT INTO `blood_banks` (`bb_id`, `bb_name`, `bb_email`, `bb_username`, `bb_password`, `bb_phoneno`, `bb_address`, `bb_status`, `bb_description`, `bb_image`) VALUES
(1, 'Redcross BloodBank', 'redcross@redcross.com', 'redcross', '$2y$10$VhDQc7qHoNzsgGEfNIjd5eIXybQJVCTpFoxVFiWRZv8XscrJ/9pBS', '+1 (675) 607-3401', 'pokhara', 'verified', 'Redcross From Pokhara Nepal', ''),
(2, 'Geoffrey Santiago', 'xysygeqi@mailinator.com', 'geoffrey', '$2y$10$.rUmUwHwDGBaGDngXtFY.uFtMU6C/9DxJ0xOljvghWcIBWWzD0fiK', '+1 (415) 823-5172', 'Occaecat optio qui ', 'verified', 'Omnis eligendi commo', ''),
(3, 'Todd Lowery', 'nirelubecy@mailinator.com', 'toxaceti', '$2y$10$3oflufqK45z05Uc.mdOph.Z7ATc73D2d9rcTtD/9iCd04IKEL/VQK', '+1 (435) 349-9165', 'Ea nulla labore aute', 'verified', 'Eos quia et sapiente', 'BloodBank.png');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_id` int(11) NOT NULL,
  `bb_id` int(11) DEFAULT NULL,
  `event_name` varchar(50) DEFAULT NULL,
  `event_location` varchar(50) DEFAULT NULL,
  `event_desc` text DEFAULT NULL,
  `organizer` varchar(50) DEFAULT NULL,
  `contact_info` varchar(255) DEFAULT NULL,
  `event_date` date DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_id`, `bb_id`, `event_name`, `event_location`, `event_desc`, `organizer`, `contact_info`, `event_date`, `image`) VALUES
(1, 2, 'Urielle Warner', 'Voluptas hic cupidit', 'Nemo voluptatem volu', 'Veniam ut ipsa vel', 'Nostrud re', '2023-10-09', NULL),
(3, 1, 'Kiara Gilmore', 'Aut eius mollit quid', 'Sed ut sit quas fuga', 'Et sit praesentium ', 'Voluptatum', '2023-10-09', 'bloodworkseve.png');

-- --------------------------------------------------------

--
-- Table structure for table `event_participants`
--

CREATE TABLE `event_participants` (
  `event_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `blood_unit` int(11) NOT NULL,
  `participation_id` int(11) NOT NULL,
  `transaction_status` varchar(10) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `request_list`
--

CREATE TABLE `request_list` (
  `req_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `transaction_type` varchar(8) NOT NULL,
  `donor_id` int(11) NOT NULL,
  `transaction_status` varchar(50) DEFAULT NULL,
  `req_description` text DEFAULT NULL,
  `required_blood_group` varchar(5) NOT NULL,
  `required_date` date NOT NULL,
  `req_blood_unit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `site_info`
--

CREATE TABLE `site_info` (
  `app_name` varchar(20) DEFAULT NULL,
  `app_desc` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fname` varchar(20) DEFAULT NULL,
  `mname` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `dateofbirth` date DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(70) DEFAULT NULL,
  `username` varchar(25) DEFAULT NULL,
  `bloodgroup` varchar(5) DEFAULT NULL,
  `donor_availability` varchar(15) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `phone_no` varchar(100) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `last_donation_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `mname`, `lname`, `dateofbirth`, `email`, `password`, `username`, `bloodgroup`, `donor_availability`, `address`, `phone_no`, `age`, `last_donation_date`) VALUES
(1, 'Bilokunuc', 'Camille Petersen', 'Paul', '2007-06-18', 'coridugu@mailinator.com', '$2y$10$jVQ5JejByvy5xKVjY2w6R./NryxwtdWgvt966LXSJysU5wNgqeQYG', 'bilokunuc', 'B-', 'Unavailable', 'Pokhara', '+1 (247) 789-9331', 16, NULL),
(2, 'Alexander', 'Alma Day', 'Best', '2006-08-15', 'jenir@mailinator.com', '$2y$10$9XfarerUR7494M5G5lKaIOSeW9GwGskmvqeQi7Vhaj05rZPTGhFcy', 'alexander', 'B-', 'Unavailable', 'lalitpur', '+1 (446) 423-7573', 17, NULL),
(3, 'Brenden', 'Germane Perkins', 'Hudson', '1979-06-16', 'rynobafuku@mailinator.com', '$2y$10$rpXgZ7cBlhYh4Ox4SqtwPumTvyXRb4it/KKu8QX.W6nm/JtBUao8S', 'brenden', 'A+', 'Unavailable', 'Nepalgunj', '+1 (941) 336-8086', 44, NULL),
(4, 'Userone', 'Laith', 'Flores', '1999-01-05', 'userone@mailinator.com', '$2y$10$0VymwFldcenIve0kXFSlfOwLacizV/UhPbb1Aiq2/FivcVlgeH0W6', 'userone', 'O-', 'Available', 'butwal', '+1 (173) 167-7499', 24, NULL),
(5, 'user', 'user', 'user', '2001-10-26', 'user@user.com', '$2y$10$Uxc7be/HpyUKmcPRN.IKbuadPVVWz4OfJ7BavkiKMZRFWrINzyV9S', 'user', 'A+', 'Unavailable', 'pokhara', '9889898989', 21, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bloodstock`
--
ALTER TABLE `bloodstock`
  ADD UNIQUE KEY `bb_id` (`bb_id`);

--
-- Indexes for table `blood_banks`
--
ALTER TABLE `blood_banks`
  ADD PRIMARY KEY (`bb_id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `event_participants`
--
ALTER TABLE `event_participants`
  ADD PRIMARY KEY (`participation_id`);

--
-- Indexes for table `request_list`
--
ALTER TABLE `request_list`
  ADD PRIMARY KEY (`req_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blood_banks`
--
ALTER TABLE `blood_banks`
  MODIFY `bb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `event_participants`
--
ALTER TABLE `event_participants`
  MODIFY `participation_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `request_list`
--
ALTER TABLE `request_list`
  MODIFY `req_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



