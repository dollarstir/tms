-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 09, 2022 at 10:13 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tms`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `cid` varchar(100) DEFAULT NULL,
  `bookdate` text DEFAULT NULL,
  `booktime` text DEFAULT NULL,
  `toc` text DEFAULT NULL,
  `assigned` text DEFAULT NULL,
  `hyh` text DEFAULT NULL,
  `dateadded` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cmd`
--

CREATE TABLE `cmd` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` text DEFAULT NULL,
  `pic` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cmd`
--

INSERT INTO `cmd` (`id`, `name`, `email`, `username`, `password`, `pic`) VALUES
(3, 'Dollar stir', 'kpin463@gmail.com', 'dollarstir', '7b7f50a6836e9aa947492fbb19ee53bd', '1644086961.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `gender` text DEFAULT NULL,
  `empstatus` text DEFAULT NULL,
  `jobtitle` text DEFAULT NULL,
  `hedu` text DEFAULT NULL,
  `mstatus` text DEFAULT NULL,
  `address` text DEFAULT NULL,
  `phone` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `ename` text DEFAULT NULL,
  `erelation` text DEFAULT NULL,
  `eaddress` text DEFAULT NULL,
  `econt1` text DEFAULT NULL,
  `econt2` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `eventb`
--

CREATE TABLE `eventb` (
  `id` int(11) NOT NULL,
  `institution` text DEFAULT NULL,
  `title` text DEFAULT NULL,
  `address` text DEFAULT NULL,
  `program` text DEFAULT NULL,
  `requestdate` text DEFAULT NULL,
  `implementeddate` text DEFAULT NULL,
  `resourceperson` text DEFAULT NULL,
  `budget` text DEFAULT NULL,
  `remarks` text DEFAULT NULL,
  `cpname` text DEFAULT NULL,
  `cpaddress` text DEFAULT NULL,
  `cpcontact` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eventb`
--

INSERT INTO `eventb` (`id`, `institution`, `title`, `address`, `program`, `requestdate`, `implementeddate`, `resourceperson`, `budget`, `remarks`, `cpname`, `cpaddress`, `cpcontact`) VALUES
(2, 'Ghana Post', 'Afrochella', 'Madina', 'To God be the Glory', '2022-02-23', '2022-03-02', 'Kofi Nimo', '100', 'dollar', 'Dollarstir', 'Dome', '0556675374'),
(3, '', '', '', '', '', '', '', '', '', ' ', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `eventx`
--

CREATE TABLE `eventx` (
  `id` int(11) NOT NULL,
  `title` text DEFAULT NULL,
  `venue` text DEFAULT NULL,
  `rate` text DEFAULT NULL,
  `edate` text DEFAULT NULL,
  `edays` text DEFAULT NULL,
  `males` text DEFAULT NULL,
  `females` text DEFAULT NULL,
  `total` text DEFAULT NULL,
  `speaker` text DEFAULT NULL,
  `report` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `id` int(11) NOT NULL,
  `cid` varchar(100) DEFAULT NULL,
  `amount` varchar(100) DEFAULT NULL,
  `ptype` text DEFAULT NULL,
  `month` text DEFAULT NULL,
  `year` text DEFAULT NULL,
  `dateadded` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` int(11) NOT NULL,
  `cid` varchar(50) DEFAULT NULL,
  `presissue` text DEFAULT NULL,
  `intervgiven` text DEFAULT NULL,
  `assignment` text DEFAULT NULL,
  `remarks` text DEFAULT NULL,
  `datenext` text DEFAULT NULL,
  `psycotest` text DEFAULT NULL,
  `report` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `contact` varchar(100) DEFAULT NULL,
  `contact2` varchar(100) DEFAULT NULL,
  `ssnt` text DEFAULT NULL,
  `dob` text DEFAULT NULL,
  `gender` text DEFAULT NULL,
  `mstatus` text DEFAULT NULL,
  `address` text DEFAULT NULL,
  `religion` text DEFAULT NULL,
  `disorder` text DEFAULT NULL,
  `hedu` text DEFAULT NULL,
  `hinstitute` text DEFAULT NULL,
  `program` text DEFAULT NULL,
  `pic` text DEFAULT NULL,
  `doc` text DEFAULT NULL,
  `department` text DEFAULT NULL,
  `jobtitle` text DEFAULT NULL,
  `datestarted` text DEFAULT NULL,
  `cfirmdate` text DEFAULT NULL,
  `exitdate` text DEFAULT NULL,
  `slevel` text DEFAULT NULL,
  `samount` text DEFAULT NULL,
  `ename` text DEFAULT NULL,
  `erelation` text DEFAULT NULL,
  `eaddress` text DEFAULT NULL,
  `econt1` text DEFAULT NULL,
  `econt2` text DEFAULT NULL,
  `nokname` text DEFAULT NULL,
  `nokrelation` text DEFAULT NULL,
  `nokaddress` text DEFAULT NULL,
  `nokcont1` text DEFAULT NULL,
  `nokcont2` text DEFAULT NULL,
  `bankname` text DEFAULT NULL,
  `branch` text DEFAULT NULL,
  `accname` text DEFAULT NULL,
  `accnumber` text DEFAULT NULL,
  `status` text NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `checkin` text DEFAULT NULL,
  `checkout` text DEFAULT NULL,
  `datevisited` text DEFAULT NULL,
  `purpose` text DEFAULT NULL,
  `remarks` text DEFAULT NULL,
  `phone` text DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `address1` text DEFAULT NULL,
  `address2` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cmd`
--
ALTER TABLE `cmd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eventb`
--
ALTER TABLE `eventb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eventx`
--
ALTER TABLE `eventx`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cmd`
--
ALTER TABLE `cmd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `eventb`
--
ALTER TABLE `eventb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `eventx`
--
ALTER TABLE `eventx`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sessions`
--
ALTER TABLE `sessions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
