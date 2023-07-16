-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220511.c3fb567b13
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2023 at 03:33 AM
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
-- Table structure for table `blood_banks`
--

CREATE TABLE `blood_banks` (
  `bb_id` int(11) NOT NULL,
  `bb_name` varchar(50) NOT NULL,
  `bb_email` varchar(50) DEFAULT NULL,
  `bb_username` varchar(50) NOT NULL,
  `bb_password` varchar(100) NOT NULL,
  `bb_phoneno` varchar(11) DEFAULT NULL,
  `bb_address` varchar(255) DEFAULT NULL,
  `bb_status` varchar(50) DEFAULT NULL,
  `bb_description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blood_banks`
--

INSERT INTO `blood_banks` (`bb_id`, `bb_name`, `bb_email`, `bb_username`, `bb_password`, `bb_phoneno`, `bb_address`, `bb_status`, `bb_description`) VALUES
(1, 'Red Cross Blood Bank', 'redcrossbb@example.c', 'redcrossbb', 'P@ssw0rd123', NULL, NULL, NULL, NULL),
(2, 'LifeSavers Blood Bank', 'lifesaversbb@example', 'lifesaversbb', 'B@nk1234', NULL, NULL, NULL, NULL),
(3, 'Hope Blood Bank', 'hopebb@example.com', 'hopebb', 'Hope2023', NULL, NULL, NULL, NULL),
(4, 'Community Blood Center', 'communitybb@example.', 'communitybb', 'C0mmunity!', NULL, NULL, NULL, NULL),
(5, 'United Blood Services', 'unitedbb@example.com', 'unitedbb', 'UBSpass123', NULL, NULL, NULL, NULL),
(6, 'Kiona Douglas', 'cimetu@mailinator.com', '', 'Pa$$w0rd!', '+1 (459) 61', 'Sed aut velit tempo', 'not-verifie', 'Aut do nisi nostrud '),
(7, 'Jacob Sampson', 'rofawyqi@mailinator.com', 'bomadabixe', 'Pa$$w0rd!', '+1 (709) 89', 'Ullam est elit eu q', 'not-verifie', 'Iusto vero dolore di'),
(8, 'Adele Alston', 'kogyva@mailinator.com', 'momafofiby', 'Pa$$w0rd!', '+1 (305) 69', 'Eu in odio magnam of', 'not-verifie', 'Ipsum dolor qui nemo'),
(9, 'Angela Dillard', 'xovimiti@mailinator.com', 'rumim', 'Pa$$w0rd!', '+1 (448) 86', 'A elit iusto cupida', 'not-verified', 'Molestias et cupidat'),
(10, 'Sharon Stephenson', 'hapaqynycu@mailinator.com', 'zulucija', 'Pa$$w0rd!', '+1 (775) 10', 'Id cupidatat dolorum', 'not-verified', 'Optio dolorem velit'),
(11, 'Fritz Gibson', 'poxareweja@mailinator.com', 'bitupusoz', 'Pa$$w0rd!', '+1 (407) 81', 'Sed commodo nihil qu', 'not-verified', 'Natus do incidunt q');

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
  `email` varchar(25) DEFAULT NULL,
  `password` varchar(70) DEFAULT NULL,
  `username` varchar(25) DEFAULT NULL,
  `bloodgroup` varchar(2) DEFAULT NULL,
  `donor_availability` varchar(15) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `phone_no` varchar(100) DEFAULT NULL,
  `age` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `mname`, `lname`, `dateofbirth`, `email`, `password`, `username`, `bloodgroup`, `donor_availability`, `address`, `phone_no`, `age`) VALUES
(1, 'John', 'Doe', 'Smith', '1990-01-01', 'johndoe@example.com', 'password123', 'johndoe', 'AB', 'Available', NULL, NULL, NULL),
(2, 'Eugenia Armstron', 'Regan Salazar', 'Teagan Camacho', '2021-07-09', 'janesmith@example.com', 'pass123', 'janesmith', 'O', 'Unavailabl', ' Regan Salazar', '+1 (601) 848-9628', NULL),
(3, 'Michael', 'Johnson', 'Brown', '1985-07-10', 'michaelbrown@example.com', 'securepass', 'michaelbrown', 'A', 'Available', NULL, NULL, NULL),
(4, 'John', 'Doe', 'Smith', '1990-01-01', 'johndoe@example.com', 'password123', 'johndoe', 'AB', 'Available', NULL, NULL, NULL),
(5, 'Jane', 'Smith', 'Doe', '1995-02-15', 'janesmith@example.com', 'pass123', 'janesmith', 'O', 'Unavailable', NULL, NULL, NULL),
(6, 'Michael', 'Johnson', 'chor', '1985-07-10', 'gg@gg.coDSS', 'securepass', 'michaelbrown', 'A', 'Available', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blood_banks`
--
ALTER TABLE `blood_banks`
  ADD PRIMARY KEY (`bb_id`);

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
  MODIFY `bb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



