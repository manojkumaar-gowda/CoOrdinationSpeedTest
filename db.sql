-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2022 at 01:29 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `test1`
--

CREATE TABLE `test1` (
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `starttime` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `q1` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `q2` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `q3` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `q4` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `q5` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `q6` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `q7` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `q8` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `q9` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `q10` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `q11` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `q12` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `q13` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `q14` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `q15` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `q16` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `endtime` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `test2`
--

CREATE TABLE `test2` (
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `starttime` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `q1` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `q2` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `q3` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `q4` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `q5` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `q6` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `q7` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `q8` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `q9` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `q10` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `q11` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `q12` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `q13` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `q14` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `q15` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `q16` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `endtime` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `test3`
--

CREATE TABLE `test3` (
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `starttime` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `q1` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `q2` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `q3` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `q4` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `q5` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `q6` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `q7` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `q8` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `q9` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `q10` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `q11` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `q12` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `q13` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `q14` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `q15` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `q16` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `endtime` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `test4`
--

CREATE TABLE `test4` (
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `starttime` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `q1` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `q2` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `q3` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `q4` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `q5` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `q6` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `q7` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `q8` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `q9` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `q10` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `q11` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `q12` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `q13` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `q14` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `q15` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `q16` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `endtime` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `test5`
--

CREATE TABLE `test5` (
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `starttime` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `q1` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `q2` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `q3` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `q4` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `q5` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `q6` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `q7` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `q8` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `q9` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `q10` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `q11` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `q12` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `q13` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `q14` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `q15` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `q16` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `endtime` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `age` varchar(2) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `test1`
--
ALTER TABLE `test1`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `test2`
--
ALTER TABLE `test2`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `test3`
--
ALTER TABLE `test3`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `test4`
--
ALTER TABLE `test4`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `test5`
--
ALTER TABLE `test5`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
