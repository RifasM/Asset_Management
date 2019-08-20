-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 20, 2019 at 11:22 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cse_cmrit`
--

-- --------------------------------------------------------

--
-- Table structure for table `keyboard`
--

CREATE TABLE `keyboard` (
  `uid` varchar(10) NOT NULL,
  `man_name` varchar(20) NOT NULL,
  `pur_date` date NOT NULL,
  `last_service` date DEFAULT NULL,
  `layout_type` varchar(20) NOT NULL,
  `cpu_id` varchar(10) DEFAULT NULL,
  `wireless` tinyint(1) NOT NULL DEFAULT 0,
  `service_id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `monitor`
--

CREATE TABLE `monitor` (
  `uid` varchar(10) NOT NULL,
  `man_name` varchar(20) NOT NULL,
  `pur_date` date NOT NULL,
  `last_service` date DEFAULT NULL,
  `screen_size` decimal(10,0) NOT NULL,
  `hdmi` tinyint(1) NOT NULL DEFAULT 0,
  `vga` tinyint(1) NOT NULL DEFAULT 1,
  `dvi_type` varchar(10) NOT NULL,
  `touch` tinyint(1) NOT NULL DEFAULT 0,
  `hd` tinyint(1) NOT NULL DEFAULT 0,
  `service_id` varchar(10) DEFAULT NULL,
  `cpu_id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mouse`
--

CREATE TABLE `mouse` (
  `uid` varchar(10) NOT NULL,
  `man_name` varchar(20) NOT NULL,
  `pur_date` date NOT NULL,
  `last_service` date DEFAULT NULL,
  `btn_count` int(11) NOT NULL DEFAULT 3,
  `cpu_id` varchar(10) DEFAULT NULL,
  `wireless` tinyint(1) NOT NULL DEFAULT 0,
  `service_id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `name` varchar(10) NOT NULL,
  `item_name` varchar(10) NOT NULL,
  `item_id` varchar(10) NOT NULL,
  `room_no` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `service_id` varchar(10) NOT NULL,
  `part_name` varchar(20) NOT NULL,
  `issue_description` varchar(100) NOT NULL,
  `issue_solution` varchar(100) NOT NULL,
  `service_date` date NOT NULL DEFAULT current_timestamp(),
  `service_agency` varchar(20) NOT NULL,
  `prev_service_id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `speaker`
--

CREATE TABLE `speaker` (
  `uid` varchar(10) NOT NULL,
  `man_name` varchar(20) NOT NULL,
  `pur_date` date NOT NULL,
  `last_service` date DEFAULT NULL,
  `type` enum('stereo','mono') NOT NULL DEFAULT 'stereo',
  `surround` tinyint(1) NOT NULL DEFAULT 1,
  `surround_count` int(11) DEFAULT NULL,
  `service_id` varchar(10) DEFAULT NULL,
  `cpu_id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(6) NOT NULL COMMENT 'Unique Id per user',
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `password` varchar(16) NOT NULL,
  `last_login` date DEFAULT NULL,
  `position` varchar(15) NOT NULL,
  `permission` enum('0','1','2') NOT NULL DEFAULT '2',
  `active` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `email`, `uname`, `password`, `last_login`, `position`, `permission`, `active`) VALUES
(1, 'Admin', '', '', 'admin', 'admin123', NULL, 'admin', '0', '0'),
(9, 'burla', 'sai', 'burl17cs@cmrit.ac.in', 'burli', 'burla', NULL, 'Janitor', '2', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `keyboard`
--
ALTER TABLE `keyboard`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `monitor`
--
ALTER TABLE `monitor`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `mouse`
--
ALTER TABLE `mouse`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `speaker`
--
ALTER TABLE `speaker`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `uname` (`uname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(6) NOT NULL AUTO_INCREMENT COMMENT 'Unique Id per user', AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
