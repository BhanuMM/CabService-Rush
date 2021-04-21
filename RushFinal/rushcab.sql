-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2021 at 12:04 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rushcab`
--

-- --------------------------------------------------------

--
-- Table structure for table `driver_det`
--

CREATE TABLE `driver_det` (
  `DID` int(5) NOT NULL,
  `Dnic` varchar(13) NOT NULL,
  `Dfname` varchar(50) NOT NULL,
  `Dlname` varchar(50) NOT NULL,
  `Dlicno` varchar(20) NOT NULL,
  `Dtelno` varchar(12) NOT NULL,
  `Demail` varchar(50) NOT NULL,
  `Duname` varchar(50) NOT NULL,
  `Dpass` varchar(50) NOT NULL,
  `is_deleted` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `driver_det`
--

INSERT INTO `driver_det` (`DID`, `Dnic`, `Dfname`, `Dlname`, `Dlicno`, `Dtelno`, `Demail`, `Duname`, `Dpass`, `is_deleted`) VALUES
(1, '12345', 'asela', 'ravindu', '12345', '09871234', 'asel@gamol.com', 'asela', 'ruwani123', 'YES'),
(2, '3423', 'Kasun', 'Kalhara', 'igi049u309', '89437439', 'bhbdu@gmail.com', 'Kasun', 'kasun123', 'YES'),
(3, '122434', 'kamal', 'bandu', 'dfsfd', '12313', 'gh@gmail.com', 'kamal', 'kamal123', 'YES'),
(4, 'ewre', 'ewe', 'erw', '2342', '342', 'fadf', 'trex', 'trex12345', 'YES'),
(5, '23343', 'sfg', 'fgsf', 'fs', 'fgsd', 'dsf', 'sfg', 'dsfgsewrqwerq', 'YES'),
(6, '4r2', '32r3', '23r23', '23r2', '23r23', '3efadf', 'medagama', 'medagama123', 'YES'),
(7, '2323', '2323', '232', '2323', '232', '2323', 'pavani', 'pavanirox', 'YES'),
(8, '4t3', '34t3', '434', '4t34t', '34t3', '34t3', 't34t34t', '34t34t34t34t34t', 'NO');

-- --------------------------------------------------------

--
-- Table structure for table `rider_det`
--

CREATE TABLE `rider_det` (
  `RID` int(5) NOT NULL,
  `Rnic` varchar(13) NOT NULL,
  `Rfname` varchar(50) NOT NULL,
  `Rlname` varchar(50) NOT NULL,
  `Rtelno` varchar(12) NOT NULL,
  `Radrs` varchar(150) DEFAULT NULL,
  `Remail` varchar(100) NOT NULL,
  `Runame` varchar(50) NOT NULL,
  `Rpswrd` varchar(50) NOT NULL,
  `is_deleted` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rider_det`
--

INSERT INTO `rider_det` (`RID`, `Rnic`, `Rfname`, `Rlname`, `Rtelno`, `Radrs`, `Remail`, `Runame`, `Rpswrd`, `is_deleted`) VALUES
(1, '1234', 'Malith', 'Test', '123', 'asdfrgtr', 'asdf@gmail', 'malith', 'malith123', 'NO'),
(2, '6789', 'dfghjk', 'dfgg', '09876543', 'sdfgefwefw', 'dn@gmail.com', 'ruwani', 'ruwani123', 'YES'),
(3, 'rwerw', 'sdfdf', 'fsd', 'dfs', 'sdfs', 'fdfs', 'kamal', 'kamal123', 'YES'),
(4, '342', 'pavani', 'perera', '342323', 'wdeqwq', 'bsdbai@gmailcom', 'pavani', 'pavani123', 'YES');

-- --------------------------------------------------------

--
-- Table structure for table `trip_det`
--

CREATE TABLE `trip_det` (
  `trip_id` int(5) NOT NULL,
  `VID` int(5) NOT NULL,
  `DID` int(5) NOT NULL,
  `RID` int(5) NOT NULL,
  `Pick_up` varchar(30) NOT NULL,
  `Drop_lo` varchar(30) NOT NULL,
  `distan` int(5) NOT NULL,
  `No_pass` int(2) NOT NULL,
  `fee` int(5) NOT NULL,
  `trip_date` date NOT NULL,
  `is_completed` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trip_det`
--

INSERT INTO `trip_det` (`trip_id`, `VID`, `DID`, `RID`, `Pick_up`, `Drop_lo`, `distan`, `No_pass`, `fee`, `trip_date`, `is_completed`) VALUES
(1, 1, 1, 1, '', '', 0, 0, 40, '0000-00-00', 'YES'),
(2, 0, 0, 1, '', '', 0, 0, 40, '0000-00-00', 'YES'),
(3, 0, 0, 1, '', '', 0, 0, 40, '0000-00-00', 'YES'),
(4, 0, 0, 1, 'dsd', 'sds', 0, 0, 40, '2021-02-05', 'YES'),
(5, 1, 1, 1, 'v', 'v', 0, 0, 40, '2021-02-03', 'YES'),
(6, 1, 1, 1, 'r', '', 0, 0, 40, '2021-03-04', 'YES'),
(7, 0, 0, 2, 'erg', 'ger', 0, 0, 40, '2021-02-18', 'YES'),
(8, 1, 1, 2, 'yr', '', 0, 0, 40, '2021-02-03', 'YES'),
(10, 1, 1, 2, 'weg', 'wg', 0, 0, 40, '2021-02-11', 'YES'),
(11, 0, 0, 0, '', '', 0, 0, 0, '0000-00-00', 'NO'),
(12, 0, 0, 0, '', '', 0, 0, 0, '0000-00-00', 'NO'),
(13, 1380, 1380, 1380, '', '', 0, 0, 1380, '0000-00-00', 'NO'),
(14, 1, 1, 1, '', '', 0, 0, 720, '0000-00-00', 'YES'),
(15, 1, 1, 1, 'Galle', 'colombo', 15, 4, 1, '2021-02-20', 'YES'),
(16, 0, 0, 0, '', '', 0, 0, 0, '0000-00-00', 'NO'),
(17, 0, 0, 0, '', '', 0, 0, 0, '0000-00-00', 'NO'),
(18, 1, 1, 1, '', '', 100, 0, 6000, '0000-00-00', 'YES'),
(19, 0, 0, 0, '', '', 0, 0, 0, '0000-00-00', 'NO'),
(20, 0, 0, 0, '', '', 0, 0, 0, '0000-00-00', 'NO'),
(21, 0, 0, 0, '', '', 0, 0, 0, '0000-00-00', 'NO'),
(22, 1, 1, 1, '', '', 100, 0, 6000, '0000-00-00', 'YES'),
(23, 1, 1, 1, 'rgerge', 'erg', 100, 4, 6000, '2021-02-11', 'YES'),
(24, 1, 1, 1, 'rgerge', 'erg', 100, 4, 6000, '2021-02-19', 'YES'),
(25, 1, 1, 1, 'rgerge', 'qw', 12, 3, 720, '2021-02-26', 'YES'),
(26, 1, 1, 1, 'rgerge', 'rgerg', 100, 4, 6000, '2021-02-06', 'YES'),
(27, 1, 1, 1, 'rgerge', 'qwq', 100, 4, 6000, '2021-02-06', 'YES'),
(28, 1, 1, 1, 'rgerge', 'rgerg', 100, 4, 6000, '2021-02-18', 'YES'),
(29, 1, 1, 1, 'rgerge', 'rgerg', 100, 4, 6000, '2021-02-19', 'YES'),
(30, 1, 1, 2, 'sd', 'colombo', 100, 4, 6000, '2021-03-05', 'NO');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_det`
--

CREATE TABLE `vehicle_det` (
  `VID` int(5) NOT NULL,
  `DID` int(5) NOT NULL,
  `Vtype` varchar(20) NOT NULL,
  `Vbrand` varchar(30) NOT NULL,
  `Vmodel` varchar(30) NOT NULL,
  `Vnumber` varchar(8) NOT NULL,
  `Reg_date` date NOT NULL,
  `is_deleted` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicle_det`
--

INSERT INTO `vehicle_det` (`VID`, `DID`, `Vtype`, `Vbrand`, `Vmodel`, `Vnumber`, `Reg_date`, `is_deleted`) VALUES
(1, 1, 'Car', 'Toyota', 'premio', 'cbf-5466', '2021-02-07', 'YES'),
(2, 2, 'Car', 'Suzuki', 'Alto', 'CAA-7687', '2021-02-08', 'YES'),
(3, 3, 'Cab', 'Nissan', 'L200', 'ky-9876', '2021-02-09', 'YES'),
(4, 4, 'Car', 'toyota', 'L200', 'rgerger', '2021-02-09', 'YES'),
(5, 5, 'Three-wheeler', 'dsfg', 'dfgd', 't434t', '2021-02-15', 'YES'),
(6, 6, 'Van', 'toyota', 'L200', 't434t', '2021-02-15', 'NO'),
(7, 7, 'Bicycle', 'toyota', 'L200', 't434t', '2021-02-15', 'YES'),
(8, 8, 'Three-wheeler', 't43t3', 't34t', '34t3', '2021-02-16', 'NO');

-- --------------------------------------------------------

--
-- Table structure for table `v_available`
--

CREATE TABLE `v_available` (
  `VID` int(11) NOT NULL,
  `DID` int(11) NOT NULL,
  `v_avail` varchar(11) NOT NULL,
  `vtype` varchar(30) NOT NULL,
  `book_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `v_available`
--

INSERT INTO `v_available` (`VID`, `DID`, `v_avail`, `vtype`, `book_date`) VALUES
(1, 1, 'NO', 'Car', '2021-03-05'),
(2, 2, 'NO', 'Car', '0000-00-00'),
(3, 3, 'YES', 'Cab', '0000-00-00'),
(4, 4, 'YES', 'Car', '0000-00-00'),
(5, 5, 'YES', 'Three-wheeler', '0000-00-00'),
(6, 6, 'NO', 'Van', '0000-00-00'),
(7, 7, 'NO', 'Bicycle', '0000-00-00'),
(8, 8, 'YES', 'Three-wheeler', '2021-02-16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `driver_det`
--
ALTER TABLE `driver_det`
  ADD PRIMARY KEY (`DID`);

--
-- Indexes for table `rider_det`
--
ALTER TABLE `rider_det`
  ADD PRIMARY KEY (`RID`);

--
-- Indexes for table `trip_det`
--
ALTER TABLE `trip_det`
  ADD PRIMARY KEY (`trip_id`);

--
-- Indexes for table `vehicle_det`
--
ALTER TABLE `vehicle_det`
  ADD PRIMARY KEY (`VID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `driver_det`
--
ALTER TABLE `driver_det`
  MODIFY `DID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `rider_det`
--
ALTER TABLE `rider_det`
  MODIFY `RID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `trip_det`
--
ALTER TABLE `trip_det`
  MODIFY `trip_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `vehicle_det`
--
ALTER TABLE `vehicle_det`
  MODIFY `VID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
