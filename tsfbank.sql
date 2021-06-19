-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2021 at 04:02 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tsfbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `customerdata`
--

CREATE TABLE `customerdata` (
  `ID` int(5) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `father_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email_address` varchar(30) NOT NULL,
  `mobile_no` varchar(30) NOT NULL,
  `account_no` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `balance` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `timestamp` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customerdata`
--

INSERT INTO `customerdata` (`ID`, `first_name`, `father_name`, `last_name`, `email_address`, `mobile_no`, `account_no`, `address`, `city`, `state`, `dob`, `balance`, `gender`, `timestamp`) VALUES
(1, 'Abhishek', '', 'Chavan', 'chavanabhishek18@gmail.com', '9421242312', '1001', 'Bajirao Road', 'Pune', 'Maharashtra', '23/12/2000', '8000', 'Male', '2021-06-16'),
(2, 'Rushikesh', '', 'Sali', 'rushikesh@gmail.com', '7734657991', '1002', 'CBS Road', 'Nashik', 'Maharashtra', '16/09/2000', '23200', 'Male', '2021-06-16'),
(3, 'Ayan', '', 'Memon', 'ayan@gmail.com', '8834651123', '1003', 'Chinchwad', 'Pimpri', 'Maharashtra', '11/07/2000', '10000', 'Male', '2021-06-16'),
(4, 'Apurv', '', 'Dikondawar', 'apurv@gmail.com', '7473373124', '1004', 'Jadgaon', 'Jalgaon', 'Maharashtra', '18/02/2000', '15000', 'Male', '2021-06-16'),
(5, 'Mayuresh', '', 'Bhangale', 'mayuresh@gmail.com', '924741785', '1005', 'Chinchwad', 'Pune', 'Maharashtra', '07/07/2000', '14420', 'Male', '2021-06-18'),
(6, 'Ajinkya', '', 'Randhawan', 'ajinkya@gmail.com', '8431874828', '1006', 'Aundh', 'Pune', 'Maharashtra', '11/09/2000', '20000', 'Male', '2021-06-18'),
(7, 'Atharva', '', 'Kulkarni', 'atharva@gmail.com', '8237906539', '1007', 'Akola', 'Akola', 'Maharashtra', '8/05/2000', '14000', 'Male', '2021-06-18'),
(8, 'Rohan', '', 'Khandizode', 'rohan@gmail.com', '9467235887', '1008', 'Aundh', 'Pune', 'Maharshtra', '1/10/2000', '17000', 'Male', '2021-06-18'),
(9, 'Tejas', '', 'Koli', 'tejas@gmail.com', '9543578642', '1009', 'Panchavti', 'Nashik', 'Maharashtra', '14/06/2000', '22000', 'Male', '2021-06-18'),
(10, 'Sumit', '', 'Gaikwad', 'sumit@gmail.com', '8745698688', '1010', 'Rajgurunagar', 'Pune', 'Maharashtra', '19/07/2000', '17580', 'Male', '2021-06-18');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_history`
--

CREATE TABLE `transaction_history` (
  `id` int(11) NOT NULL,
  `from_account` varchar(30) NOT NULL,
  `to_account` varchar(30) NOT NULL,
  `transfer_amount` varchar(30) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction_history`
--

INSERT INTO `transaction_history` (`id`, `from_account`, `to_account`, `transfer_amount`, `date`) VALUES
(28, '1002', '1001', '300', '2021-06-18'),
(29, '1003', '1002', '100', '2021-06-18'),
(31, '1010', '1005', '210', '2021-06-18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customerdata`
--
ALTER TABLE `customerdata`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `transaction_history`
--
ALTER TABLE `transaction_history`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customerdata`
--
ALTER TABLE `customerdata`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `transaction_history`
--
ALTER TABLE `transaction_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
