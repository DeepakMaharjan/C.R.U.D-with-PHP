-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2018 at 06:11 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `softwaricastudents`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin_logins`
--

CREATE TABLE `tbl_admin_logins` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin_logins`
--

INSERT INTO `tbl_admin_logins` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'Devish', '33bba3af638e81a9ac51864f9ef5e947');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login_attempts`
--

CREATE TABLE `tbl_login_attempts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `login_attempt` int(11) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login_attempts`
--

INSERT INTO `tbl_login_attempts` (`id`, `user_id`, `login_attempt`, `date`) VALUES
(7, 2, 1, '2018-12-28 06:08:59'),
(8, 2, 2, '2018-12-28 06:09:02'),
(9, 2, 3, '2018-12-28 06:09:04');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_students`
--

CREATE TABLE `tbl_students` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `gender` enum('Male','Female','Others') NOT NULL,
  `added_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_students`
--

INSERT INTO `tbl_students` (`id`, `fullname`, `address`, `email`, `phone`, `gender`, `added_date`) VALUES
(1, 'Devish Baidawar Chhetri', 'Sunakothi, Lalitpur', 'devish@gmail.com', '9874563210', 'Male', '2018-11-25 14:22:51'),
(2, 'Nistha Bajracharya', 'Patan, Lalitpur', 'nistha@gmail.com', '9874562310', 'Female', '2018-11-25 14:26:13'),
(3, 'Deepak Maharjan', 'Sanogau, Lalitpur', 'deepak@gmail.com', '9847563201', 'Male', '2018-11-25 19:28:29'),
(4, 'Saugat Subedi', 'Mahalaxmisthan, Lalitpur', 'saugat@gmail.com', '0894561235', 'Male', '2018-12-03 02:21:38'),
(5, 'Anish Kumar Thakur', 'Bhaisepati, Lalitpur', 'anish@gmail.com', '4567896542', 'Male', '2018-11-25 00:00:00'),
(6, 'Hipakha Khergoli', 'Suryabinayak, Bhaktapur', 'hipakha@outlook.com', '9874563217', 'Male', '2018-12-03 02:12:43'),
(7, 'Shubham Shrestha', 'Balkhu, Kathmandu', 'shubham@gmail.com', '8527419630', 'Male', '2018-11-25 07:33:25'),
(8, 'Jalzala Bhurtel', 'Kalanki, Kathmandu', 'jalzala@hotmail.com', '8547123699', 'Female', '2018-12-03 03:22:38'),
(9, 'Shristi Joshi', 'Kritipur, Kathmandu', 'shristi@yahoo.com', '9877899875', 'Female', '2018-12-04 03:16:07'),
(10, 'Niyash Baidawar Chhetri', 'Sunakothi, Lalitpur', 'niyash@gmail.com', '9875546210', 'Male', '2018-12-03 02:11:54'),
(11, 'Khadga Parshad Sharma Oli', 'Kathmandu, Nepal', 'kp.oli.1@gmail.com', '98758451230', 'Male', '2018-12-03 02:44:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin_logins`
--
ALTER TABLE `tbl_admin_logins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_login_attempts`
--
ALTER TABLE `tbl_login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_students`
--
ALTER TABLE `tbl_students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin_logins`
--
ALTER TABLE `tbl_admin_logins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_login_attempts`
--
ALTER TABLE `tbl_login_attempts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_students`
--
ALTER TABLE `tbl_students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
