-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220511.c3fb567b13
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2023 at 02:42 PM
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
(31, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(30, 10, 7, 1, 6, 4, 3, 2, 5),
(32, 0, 0, 0, 0, 0, 0, 0, 0),
(41, 0, 0, 0, 0, 0, 0, 0, 0);

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
(30, 'Red Cross  ', 'redcross@example.com', 'redcross', 'redcross', '1234567', '  Kathmandu-10', 'verified', '  National humanitarian organization.'),
(31, 'Central Blood Bank', 'centralbb@example.com', 'centralbb', 'securepass', '9876543', 'Kathmandu-12', 'verified', 'Government blood bank.'),
(32, 'Eye Hospital Blood Bank', 'eyehospitalbb@example.com', 'eyehospitalbb', 'p@ssw0rd', '5555555', 'Kathmandu-11', 'verified', 'Specialized blood bank for eye surgeries.'),
(33, 'Nobel Blood Bank', 'nobelbb@example.com', 'nobelbb', 'password', '1112223', 'Kathmandu-15', 'verified', 'Private blood bank.'),
(34, 'BPK Hospital Blood Bank', 'bpkhospitalbb@example.com', 'bpkhospitalbb', 'mysecret', '4444444', 'Chitwan-4', 'verified', 'Blood bank serving cancer patients.'),
(35, 'Koshi Zonal Blood Bank', 'koshizonalbb@example.com', 'koshizonalbb', 'p@ssword', '9998887', 'Morang-9', 'verified', 'Blood bank in the eastern region.'),
(36, 'Rhona Norton', 'curage@mailinator.com', 'vegekevuw', 'Pa$$w0rd!', '+1 (247) 439-4999', 'Enim dolores officii', 'verified', 'Aspernatur perspicia'),
(37, 'Sheila Nieves', 'jufydajoz@mailinator.com', 'supaneze', 'Pa$$w0rd!', '+1 (288) 624-7305', 'Consequatur magni ut', 'verified', 'Explicabo Accusamus'),
(38, 'Branden Davenport', 'jakexi@mailinator.com', 'nodegebug', 'Pa$$w0rd!', '+1 (604) 369-1667', 'Corporis non laborum', 'verified', 'Ut eu nulla qui reru'),
(39, 'Quamar Black', 'cora@mailinator.com', 'sofusun', 'Pa$$w0rd!', '+1 (695) 543-2056', 'Consectetur ullamco ', 'not-verified', 'Quaerat blanditiis r'),
(40, 'Sharon Goff', 'ravem@mailinator.com', '12345', '12345', '+1 (934) 632-9157', 'Numquam modi irure r', 'not-verified', 'Magni rem cillum aut'),
(41, 'Kimberley Hicks', 'zecyjuju@mailinator.com', 'dopimulez', 'dopimulez', '+1 (144) 185-4228', 'Fugiat perferendis ', 'verified', 'Voluptas est ex enim');

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
(18, 1, 'Blood Donation Camp', 'Kathmandu', 'A blood donation camp to collect blood for hospitals in need. <br>\n\nLorem ipsum dolor sit amet consectetur adipisicing elit. Neque earum exercitationem eos ab facilis consequatur ipsam sequi beatae, vero voluptate corporis vitae porro dicta fugit doloribus non pariatur aperiam qui!\nLorem ipsum dolor sit amet consectetur adipisicing elit. Neque earum exercitationem eos ab facilis consequatur ipsam sequi beatae, vero voluptate corporis vitae porro dicta fugit doloribus non pariatur aperiam qui!\nLorem ipsum dolor sit amet consectetur adipisicing elit. Neque earum exercitationem eos ab facilis consequatur ipsam sequi beatae, vero voluptate corporis vitae porro dicta fugit doloribus non pariatur aperiam qui!\nLorem ipsum dolor sit amet consectetur adipisicing elit. Neque earum exercitationem eos ab facilis consequatur ipsam sequi beatae, vero voluptate corporis vitae porro dicta fugit doloribus non pariatur aperiam qui!\nLorem ipsum dolor sit amet consectetur adipisicing elit. Neque earum exercitationem eos ab facilis consequatur ipsam sequi beatae, vero voluptate corporis vitae porro dicta fugit doloribus non pariatur aperiam qui!\n', 'Red Cross Nepal', 'redcross@example.com', '2023-07-20'),
(19, 2, 'Health Fair', 'Pokhara', 'An event promoting health awareness and blood donation.', 'Pokhara Health Foundation', 'info@pokharahealthfoundation.org', '2023-08-15'),
(20, 3, 'Blood Drive', 'Biratnagar', 'A community blood drive to support local hospitals.', 'Biratnagar Blood Bank', 'bloodbank@biratnagar.org', '2023-09-05'),
(21, 1, 'Donor Appreciation Event', 'Kathmandu', 'An event to appreciate blood donors and raise awareness about the importance of blood donation.', 'Red Cross Nepal', 'redcross@example.com', '2023-10-10'),
(22, 4, 'Blood Donation Marathon', 'Chitwan', 'A marathon-style blood donation event aiming to collect a large number of blood units.', 'Nobel Blood Bank', 'nobelblood@example.com', '2023-11-25'),
(23, 5, 'Blood Awareness Seminar', 'Dharan', 'A seminar to educate the public about the need for regular blood donation and its impact on the community.', 'Dharan Blood Bank', 'info@dharanbloodbank.org', '2023-12-05'),
(24, 30, 'Yoshio', 'Ad Nam dolore eaque ', 'Magni pariatur Omni', 'Ea sunt ea sed magn', 'Minima non', '2005-07-16'),
(25, 30, 'Todd ', 'Provident ea fugiat', 'Magnam in similique ', 'Voluptatem impedit ', 'Sunt quisq', '1979-12-29'),
(26, 31, 'Yoshio', 'Et ab est in fugit', 'efwfwef', 'Nesciunt aliquip be', '98434324we', '2023-06-27');

-- --------------------------------------------------------

--
-- Table structure for table `event_participants`
--

CREATE TABLE `event_participants` (
  `event_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `blood_unit` int(11) NOT NULL,
  `participation_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event_participants`
--

INSERT INTO `event_participants` (`event_id`, `user_id`, `blood_unit`, `participation_id`) VALUES
(18, 155, 0, 5),
(18, 153, 0, 6),
(18, 15, 0, 7),
(25, 16, 16, 8),
(25, 15, 15, 9),
(26, 16, 0, 10),
(26, 38, 0, 11),
(18, 38, 0, 12);

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
(1, 15, 'private', 15, 'completed', '\n            Patients Name :Portia HaleyRia Harrell<br> Patient Contact : +1 (434) 411-3912<br> Patient Address : Corporis nihil nobis<br> Patient Blood Group A+<br> Required Before : 1992-07-26<br> Urgency : moderate<br> Patient Blood Reason : Consequatur velit qu', 'A+', '2023-09-06', 1),
(2, 15, 'public', 0, 'completed', 'Patients Name :Quinn YoungTate Bradley<br> Patient Contact : +1 (932) 526-5543<br> Patient Address : Consectetur quidem <br> Patient Blood Group B-<br> Required Before : 1972-09-12<br> Urgency : urgent<br> Patient Blood Reason : Neque dolorem ut tot', '', '0000-00-00', 0),
(3, 15, 'private', 38, 'completed', '\r\n            Patients Name :Jaime TannerDavid Park<br> Patient Contact : +1 (908) 632-4182<br> Patient Address : Praesentium sint fu<br> Patient Blood Group O+<br> Required Before : 2017-04-23<br> Urgency : not urgent<br> Patient Blood Reason : Consectetur occaeca', 'O+', '2017-04-23', 1),
(4, 15, 'private', 38, 'completed', '\r\n            Patients Name :Anjolie HerreraJudith Berger<br> Patient Contact : +1 (138) 799-7994<br> Patient Address : Sit praesentium omni<br> Patient Blood Group O-<br> Required Before : 2023-10-06<br> Urgency : urgent<br> Patient Blood Reason : Expedita fugiat nequ', 'O-', '2023-10-06', 1),
(5, 15, 'private', 15, 'pending', '\r\n            Patients Name :Kevin DavisMiriam Everett<br> Patient Contact : +1 (954) 254-7539<br> Patient Address : Mollitia sequi archi<br> Patient Blood Group B-<br> Required Before : 1975-02-26<br> Urgency : moderate<br> Patient Blood Reason : Non officiis non eu ', 'B-', '1975-02-26', 1),
(6, 15, 'private', 15, 'completed', '\r\n            Patients Name :Julie DurhamAzalia Roberson<br> Patient Contact : +1 (747) 997-4394<br> Patient Address : Odit eveniet dolore<br> Patient Blood Group B-<br> Required Before : 2023-10-06<br> Urgency : urgent<br> Patient Blood Reason : Et ipsum inventore e', 'B-', '2023-10-06', 1);

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
(15, 'Narayan', 'Bdr', 'Sharma', '1989-05-17', 'narayandhakal443@gmail.com', 'userone', 'userone', 'A-', 'Unavailable', '   pokhara', '9846956604', 34, '2023-10-06'),
(16, 'Jane', 'Elizabeth', 'Johnson', '1988-09-27', 'jane@example.com', 'usertwo', 'usertwo', 'A-', 'Available', 'Pokhara, Nepal', '+97798456xxxx', 33, NULL),
(17, 'Michael', 'Lee', 'Brown', '1995-02-10', 'michael@example.com', 'userthree', 'userthree', 'B+', 'Available', 'Lalitpur, Nepal', '+97798678xxxx', 26, NULL),
(18, 'Emily', NULL, 'Smith', '1992-07-08', 'emily@example.com', 'userfour', 'userfour', 'AB-', 'Unavailable', 'Birgunj, Nepal', '+97798123xxxx', 29, NULL),
(19, 'Daniel', NULL, 'Williams', '1985-11-18', 'daniel@example.com', 'userfive', 'userfive', 'A+', 'Available', 'Bharatpur, Nepal', '+97798456xxxx', 36, NULL),
(20, 'Olivia', NULL, 'Taylor', '1994-04-29', 'olivia@example.com', 'usersix', 'usersix', 'O-', 'Unavailable', 'Dharan, Nepal', '+97798678xxxx', 27, NULL),
(21, 'David', NULL, 'Miller', '1998-12-02', 'david@example.com', 'userseven', 'userseven', 'AB+', 'Available', 'Biratnagar, Nepal', '+97798123xxxx', 23, NULL),
(22, 'Sophia', NULL, 'Anderson', '1991-06-23', 'sophia@example.com', 'usereight', 'usereight', 'B-', 'Unavailable', 'Janakpur, Nepal', '+97798456xxxx', 30, NULL),
(23, 'James', NULL, 'Thomas', '1987-03-12', 'james@example.com', 'usernine', 'usernine', 'O+', 'Available', 'Butwal, Nepal', '+97798678xxxx', 34, NULL),
(24, 'Ava', NULL, 'Clark', '1997-08-05', 'ava@example.com', 'userten', 'userten', 'A-', 'Unavailable', 'Hetauda, Nepal', '+97798123xxxx', 24, NULL),
(25, 'William', 'Henry', 'Lewis', '1993-01-17', 'william@example.com', 'usereleven', 'usereleven', 'B+', 'Available', 'Nepalgunj, Nepal', '+97798456xxxx', 28, NULL),
(26, 'Mia', 'Grace', 'Walker', '1989-10-28', 'mia@example.com', 'usertwelve', 'usertwelve', 'O-', 'Unavailable', 'Dhangadhi, Nepal', '+97798678xxxx', 32, NULL),
(27, 'Benjamin', NULL, 'Green', '1996-03-21', 'benjamin@example.com', 'userthirteen', 'userthirteen', 'O+', 'Available', 'Kathmandu, Nepal', '+97798123xxxx', 27, NULL),
(28, 'Ethan', 'Michael', 'Johnson', '1991-07-14', 'ethan@example.com', 'userfourteen', 'userfourteen', 'A+', 'Unavailable', 'Pokhara, Nepal', '+97798456xxxx', 32, NULL),
(29, 'Isabella', NULL, 'Davis', '1994-11-03', 'isabella@example.com', 'userfifteen', 'userfifteen', 'AB-', 'Available', 'Lalitpur, Nepal', '+97798678xxxx', 29, NULL),
(30, 'Alexander', NULL, 'Martinez', '1998-02-25', 'alexander@example.com', 'usersixteen', 'usersixteen', 'B-', 'Unavailable', 'Birgunj, Nepal', '+97798123xxxx', 25, NULL),
(31, 'Sofia', 'Lily', 'Lee', '1990-06-19', 'sofia@example.com', 'userseventeen', 'userseventeen', 'O+', 'Available', 'Bharatpur, Nepal', '+97798456xxxx', 31, NULL),
(32, 'Joseph', NULL, 'White', '1986-03-29', 'joseph@example.com', 'usereighteen', 'usereighteen', 'A-', 'Unavailable', 'Dharan, Nepal', '+97798678xxxx', 35, NULL),
(33, 'Charlotte', NULL, 'Harris', '1997-08-02', 'charlotte@example.com', 'usernineteen', 'usernineteen', 'B+', 'Available', 'Biratnagar, Nepal', '+97798123xxxx', 24, NULL),
(34, 'Henry', 'James', 'King', '1992-01-12', 'henry@example.com', 'usertwenty', 'usertwenty', 'O-', 'Unavailable', 'Janakpur, Nepal', '+97798456xxxx', 29, NULL),
(35, 'Yvette', 'Burke Carroll', 'Luna', '1974-04-03', 'mezy@mailinator.com', 'Pa$$w0rd!', 'zynefav', 'B+', NULL, 'Illo amet voluptatu', '+1 (584) 558-2073', NULL, NULL),
(36, 'Mollie', 'Steven Kent', 'Booth', '1983-08-16', 'loxexofuj@mailinator.com', 'Pa$$w0rd!', 'noneki', 'B+', 'Available', 'Pariatur Suscipit i', '+1 (769) 261-2713', NULL, NULL),
(37, 'Bibit', '', 'Kunwar', '2023-07-26', 'kunwar.bibit7@gmail.com', 'hrllo/World', 'bibitk', 'A+', 'Unavailable', 'Malepatan', '9816655644', 0, NULL),
(38, 'Narayan', '', 'Dhakal', '1990-12-15', 'narayandhakal443@gmail.com', 'sanzgrapher', 'sanzgrapher', 'AB+', 'Available', 'Gandaki,pokhara, Pokhara-17,chhorepatan, Pokhara-17,chhorepatan', '9846945604', 32, '2023-01-06');

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
  MODIFY `bb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `event_participants`
--
ALTER TABLE `event_participants`
  MODIFY `participation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `request_list`
--
ALTER TABLE `request_list`
  MODIFY `req_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



