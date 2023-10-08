-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220511.c3fb567b13
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2023 at 11:10 AM
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
(52, 0, 0, 0, 0, 0, 0, 0, 0),
(48, 2, 2, 2, 2, 2, 2, 2, 2),
(49, 0, 0, 0, 0, 0, 0, 0, 0),
(50, 0, 0, 0, 0, 0, 0, 0, 0);

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
  `bb_description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blood_banks`
--

INSERT INTO `blood_banks` (`bb_id`, `bb_name`, `bb_email`, `bb_username`, `bb_password`, `bb_phoneno`, `bb_address`, `bb_status`, `bb_description`) VALUES
(44, 'Cassandra Spears', 'makohis@mailinator.com', 'porazexux', 'Pa$$w0rd!', '+1 (903) 347-6083', 'Repellendus Pariatu', 'not-verified', 'Est sunt nesciunt f'),
(45, 'Cassandra Spears', 'makohis@mailinator.com', 'porazexux', 'Pa$$w0rd!', '+1 (903) 347-6083', 'Repellendus Pariatu', 'not-verified', 'Est sunt nesciunt f'),
(46, 'Cassandra Spears', 'makohis@mailinator.com', 'porazexux', 'Pa$$w0rd!', '+1 (903) 347-6083', 'Repellendus Pariatu', 'not-verified', 'Est sunt nesciunt f'),
(47, 'Cassandra Spears', 'makohis@mailinator.com', 'porazexux', 'Pa$$w0rd!', '+1 (903) 347-6083', 'Repellendus Pariatu', 'not-verified', 'Est sunt nesciunt f'),
(48, 'Nepal Red Cross Blood Bank', 'nrcbb@example.com', 'redcross', 'redcross', '9855555555', '   Kathmandu, Nepal', 'verified', '   Providing blood donation services'),
(49, 'Mount Everest Blood Center', 'mebc@example.com', 'mounteverest', 'mounteverest', '+977-1-2345678', 'Pokhara, Nepal', 'verified', 'Supporting the local community with blood supplies.'),
(50, 'Bhaktapur Blood Donation Center', 'bbdc@example.com', 'bbdc_user', 'safe12345', '+977-1-3456789', 'Bhaktapur, Nepal', 'verified', 'Temporarily closed for maintenance.'),
(51, 'Himalayan Blood Bank', 'hbb@example.com', 'hbb_user', 'strongpass789', '+977-1-4567890', 'Kathmandu, Nepal', 'not-verified', '24/7 blood donation services available.'),
(52, 'Lumbini Blood Center', 'lbc@example.com', 'lbc_user', 'protective567', '+977-1-5678901', 'Lumbini, Nepal', 'verified', 'Providing blood for medical emergencies.');

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
  `event_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_id`, `bb_id`, `event_name`, `event_location`, `event_desc`, `organizer`, `contact_info`, `event_date`) VALUES
(27, 48, 'Redcross Donation Pokhara', 'Pokhara', 'Redcross Event Page Description', 'RedCros', '9898989', '2023-10-10');

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

--
-- Dumping data for table `request_list`
--

INSERT INTO `request_list` (`req_id`, `user_id`, `transaction_type`, `donor_id`, `transaction_status`, `req_description`, `required_blood_group`, `required_date`, `req_blood_unit`) VALUES
(16, 41, 'private', 40, 'pending', '\r\n            Patients Name :Gavin OlsenZorita Gilbert<br> Patient Contact : +1 (248) 588-3089<br> Patient Address : Dicta molestias mole<br> Patient Blood Group AB-<br> Required Before : 2023-10-08<br> Urgency : moderate<br> Patient Blood Reason : Aut eu placeat volu', 'AB-', '2023-10-08', 1);

-- --------------------------------------------------------

--
-- Table structure for table `site_info`
--

CREATE TABLE `site_info` (
  `app_name` varchar(20) DEFAULT NULL,
  `app_desc` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `site_info`
--

INSERT INTO `site_info` (`app_name`, `app_desc`) VALUES
('bloodworks', 'A simple Blood management system');

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
(40, 'Narayan', 'Dhakal', 'Dhakal', '2021-11-23', 'narayandhakal443@gmail.com', 'sanzgrapher', 'sanzgrapher', 'A+', 'Available', 'pokhara', '999999999999', 21, NULL),
(41, 'Userone', 'Merrill Short', 'Pace', '1970-05-14', 'qosuqizomu@mailinator.com', 'userone', 'userone', 'AB+', 'Unavailable', 'Aut do nostrum asper', '+1 (477) 638-2266', 53, NULL),
(42, 'Usertwo', 'Uriel Keller', 'Fulton', '1980-12-03', 'sihakigabe@mailinator.com', 'usertwo', 'usertwo', 'AB+', 'Unavailable', 'Hic aperiam adipisic', '+1 (141) 958-4744', 42, NULL),
(43, 'Stewart', 'Louis Murray', 'Mcbride', '1981-05-13', 'wajybyho@mailinator.com', 'Pa$$w0rd!', 'pywoselul', 'A-', 'Unavailable', 'Aliqua Cupiditate q', '+1 (651) 753-4617', 42, NULL),
(44, 'Rudyard', 'Imogene Cleveland', 'Nelson', '2001-11-23', 'cihako@mailinator.com', 'dd', 'jixoziz', 'A+', 'Unavailable', 'Pariatur Fugiat qui', '+1 (361) 153-3814', 21, NULL);

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
  MODIFY `bb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `event_participants`
--
ALTER TABLE `event_participants`
  MODIFY `participation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `request_list`
--
ALTER TABLE `request_list`
  MODIFY `req_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



