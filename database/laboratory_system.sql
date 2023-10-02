-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2023 at 09:48 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laboratory_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `bloodtest`
--

CREATE TABLE `bloodtest` (
  `testid` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `shortname` varchar(50) NOT NULL,
  `unit1` varchar(50) NOT NULL,
  `unit2` varchar(50) NOT NULL,
  `unit3` varchar(50) NOT NULL,
  `cost` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bloodtest`
--

INSERT INTO `bloodtest` (`testid`, `fullname`, `shortname`, `unit1`, `unit2`, `unit3`, `cost`) VALUES
(1, 'Complete blood count', 'CBC', 'red blood cells', 'white blood cells', 'hemoglobin', 2000),
(5, 'Basic metabolic panel', 'BMP', 'calcium', 'glucose', 'potassium', 1500),
(6, 'Comprehensive metabolic panel', 'CMP', 'albumin', 'bilirubin', 'total protein', 3000),
(7, 'Thyroid panel', 'TP', 'Triiodothyronine (T3)', 'Thyroxine (T4)', 'Thyroid-stimulating hormone (TSH)', 5000),
(8, 'Cardiac biomarkers', 'CB', 'Creatine kinase (CK)', 'Troponin', 'Creatine kinase-MB (CK-MB)', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `patientdatil`
--

CREATE TABLE `patientdatil` (
  `id` int(50) NOT NULL,
  `pname` varchar(20) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `adress` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `testno` int(50) NOT NULL,
  `tname` varchar(20) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `units` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patientdatil`
--

INSERT INTO `patientdatil` (`id`, `pname`, `mobile`, `adress`, `email`, `time`, `testno`, `tname`, `sname`, `units`, `price`, `gender`, `status`) VALUES
(7, 'wasif', '03487169471', 'douna drink corner', 'masifbsf1803778@gmail.com', '2pm-3pm', 359, 'Urine', 'UR', 'hemo,globan,blood', '5000', 'on', 'conform');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id` int(50) NOT NULL,
  `testname` varchar(20) NOT NULL,
  `quantity` varchar(20) NOT NULL,
  `units` varchar(30) NOT NULL,
  `ranges` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `samples`
--

CREATE TABLE `samples` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `testname` varchar(20) NOT NULL,
  `units` varchar(30) NOT NULL,
  `price` varchar(20) NOT NULL,
  `sampletype` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `samples`
--

INSERT INTO `samples` (`id`, `name`, `phone`, `testname`, `units`, `price`, `sampletype`) VALUES
(3, 'wasif', '03487169471', 'Urine', 'hemo,globan,blood', '5000', 'blood');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `user` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `fullname`, `user`, `email`, `password`, `usertype`) VALUES
(12, 'Muhammad Asif', 'asif', 'masifbsf1803778@gmail.com', '12345', 'admin'),
(13, 'Muhammad Wasif', 'wasif', 'masifbsf1803778@gmail.com', '12345', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bloodtest`
--
ALTER TABLE `bloodtest`
  ADD PRIMARY KEY (`testid`);

--
-- Indexes for table `patientdatil`
--
ALTER TABLE `patientdatil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `samples`
--
ALTER TABLE `samples`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bloodtest`
--
ALTER TABLE `bloodtest`
  MODIFY `testid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `patientdatil`
--
ALTER TABLE `patientdatil`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `samples`
--
ALTER TABLE `samples`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
