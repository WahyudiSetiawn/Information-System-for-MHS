-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2020 at 05:08 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `microhousingsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_allocation`
--

CREATE TABLE `tb_allocation` (
  `allocation_ID` int(255) NOT NULL,
  `from_Date` date NOT NULL,
  `duration` int(255) NOT NULL,
  `end_Date` date NOT NULL,
  `unit_ID` int(255) NOT NULL,
  `application_ID` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_applicant`
--

CREATE TABLE `tb_applicant` (
  `email` varchar(255) NOT NULL,
  `monthly_Income` decimal(21,0) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_application`
--

CREATE TABLE `tb_application` (
  `application_ID` int(255) NOT NULL,
  `application_Date` int(255) NOT NULL,
  `required_Month` varchar(255) NOT NULL,
  `required_Year` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `residence_ID` int(255) NOT NULL,
  `staff_ID` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_housing_officer`
--

CREATE TABLE `tb_housing_officer` (
  `staff_ID` int(255) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_residence`
--

CREATE TABLE `tb_residence` (
  `residence_ID` int(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `num_Units` int(255) NOT NULL,
  `size_Per_Unit` decimal(21,0) NOT NULL,
  `monthly_Rental` decimal(21,0) NOT NULL,
  `staff_ID` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_unit`
--

CREATE TABLE `tb_unit` (
  `unit_ID` int(255) NOT NULL,
  `unit_No` int(255) NOT NULL,
  `availability` varchar(255) NOT NULL,
  `residence_ID` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`username`, `password`, `fullname`, `email`, `user_type`) VALUES
('bagus53', '1234', 'I Kadek Bagus Paradhita Utama', 'bagusparadhita@gmail.com', 'applicant'),
('chacha', '2345', 'chacha maricha', 'chacha@gmail.com', 'housing officer'),
('gantul', '4567', 'gantoelz', 'gantulmentalmentul@gmail.com', 'applicant'),
('jono', '4567', 'jono joni', 'jono@gmail.com', 'housing officer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_allocation`
--
ALTER TABLE `tb_allocation`
  ADD PRIMARY KEY (`allocation_ID`),
  ADD KEY `unit_ID` (`unit_ID`),
  ADD KEY `unit_ID_2` (`unit_ID`),
  ADD KEY `application_ID` (`application_ID`);

--
-- Indexes for table `tb_applicant`
--
ALTER TABLE `tb_applicant`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `tb_application`
--
ALTER TABLE `tb_application`
  ADD PRIMARY KEY (`application_ID`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `tb_housing_officer`
--
ALTER TABLE `tb_housing_officer`
  ADD PRIMARY KEY (`staff_ID`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `tb_residence`
--
ALTER TABLE `tb_residence`
  ADD PRIMARY KEY (`residence_ID`),
  ADD KEY `staff_ID` (`staff_ID`);

--
-- Indexes for table `tb_unit`
--
ALTER TABLE `tb_unit`
  ADD PRIMARY KEY (`unit_ID`),
  ADD KEY `residence_ID` (`residence_ID`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`username`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_allocation`
--
ALTER TABLE `tb_allocation`
  ADD CONSTRAINT `tb_allocation_ibfk_1` FOREIGN KEY (`unit_ID`) REFERENCES `tb_unit` (`unit_ID`),
  ADD CONSTRAINT `tb_allocation_ibfk_2` FOREIGN KEY (`application_ID`) REFERENCES `tb_application` (`application_ID`);

--
-- Constraints for table `tb_application`
--
ALTER TABLE `tb_application`
  ADD CONSTRAINT `tb_application_ibfk_1` FOREIGN KEY (`email`) REFERENCES `tb_applicant` (`email`);

--
-- Constraints for table `tb_housing_officer`
--
ALTER TABLE `tb_housing_officer`
  ADD CONSTRAINT `tb_housing_officer_ibfk_1` FOREIGN KEY (`username`) REFERENCES `tb_user` (`username`);

--
-- Constraints for table `tb_residence`
--
ALTER TABLE `tb_residence`
  ADD CONSTRAINT `tb_residence_ibfk_1` FOREIGN KEY (`staff_ID`) REFERENCES `tb_housing_officer` (`staff_ID`);

--
-- Constraints for table `tb_unit`
--
ALTER TABLE `tb_unit`
  ADD CONSTRAINT `tb_unit_ibfk_1` FOREIGN KEY (`residence_ID`) REFERENCES `tb_residence` (`residence_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
