-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2022 at 08:17 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sportcomp`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `programme` varchar(50) DEFAULT NULL,
  `applicant` varchar(50) DEFAULT NULL,
  `date` date NOT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `usertype` varchar(50) DEFAULT NULL,
  `facility` varchar(50) DEFAULT NULL,
  `inventory` varchar(50) DEFAULT NULL,
  `telephone` varchar(50) DEFAULT NULL,
  `totalCharge` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `programme`, `applicant`, `date`, `gender`, `usertype`, `facility`, `inventory`, `telephone`, `totalCharge`) VALUES
(10, 'Hari Sukan', 'Haris', '2021-01-27', 'male', 'STUDENT', 'BASKETBALL COURT (RM10.60)', 'BASKETBALL (RM17)', '0123456789', 'RM0'),
(11, 'Hari Kejohanan', 'Kamal', '2021-01-30', 'MALE', 'STUDENT', 'SOFTBALL (RM84.80)', 'BADMINTON RACKET (RM20)', '01234567743', 'RM0'),
(12, 'Lumba Lari', 'Kimi', '2021-01-29', 'MALE', 'OUTSIDER', 'BADMINTON (RM10.60)', 'BADMINTON RACKET (RM20)', '0111234554', 'RM20.60'),
(13, 'Hari Sukan', 'Haris', '2021-01-30', 'MALE', 'STUDENT', 'PING PONG (RM10)', 'NETBALL (RM10)', '0123456789', 'RM0'),
(14, 'Badminton', 'Hanif', '2021-01-31', 'MALE', 'STUDENT', 'BADMINTON (RM10.60)', 'BADMINTON RACKET (RM20)', '01234567453', 'RM0'),
(15, 'Hari Sukan', 'Kimi', '2021-02-01', 'MALE', 'STUDENT', 'BASKETBALL COURT (RM10.60)', 'BASKETBALL (RM17)', '0111234554', 'RM0'),
(16, 'Hari Lompat Jauh', 'Wani', '2021-01-31', 'MALE', 'STUDENT', 'PADANG RUSA (RM15)', 'BADMINTON RACKET (RM20)', '01234567743', 'RM0'),
(17, 'ahmad', 'ahmad', '2021-12-04', 'MALE', 'STUDENT', 'BASKETBALL COURT (RM10.60)', 'BADMINTON RACKET (RM20)', '0123456789', '12'),
(18, 'ahmad', 'ad', '2021-12-27', 'MALE', 'STUDENT', 'SKUASY (RM30)', 'BASKETBALL (RM17)', '121213', '131313131'),
(19, 'ahmad', 'ad', '2022-01-23', 'MALE', 'STUDENT', 'BASKETBALL COURT (RM10.60)', 'BADMINTON RACKET (RM20)', '121213', 'rm10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `usertype` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `name`, `email`, `contact`, `usertype`) VALUES
(11, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin', 'admin@gmail.com', '0123456789', 'Admin'),
(12, 'kecik', '9981b95fcb28eddb5a4dcab5fbe71061', 'Kecik', 'kecik@gmail.com', '0112345567', 'Student'),
(14, 'ahmad', '61243c7b9a4022cb3f8dc3106767ed12', 'ahmad', 'ahmad@gmail.com', '0123456789', 'Student'),
(15, 'kamal', 'aa63b0d5d950361c05012235ab520512', 'Kamal', 'kamil@gmail.com', '0123456789', 'Resident'),
(16, 'kamil', '11d462a4a1b14b00580d8020d6f64998', 'Kamil', 'kamil@gmail.com', '0123456789', 'Resident');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
