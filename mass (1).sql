-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2019 at 02:07 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mass`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_user`
--

CREATE TABLE `admin_user` (
  `id` int(12) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_user`
--

INSERT INTO `admin_user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(60) NOT NULL,
  `cat_image` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `cat_image`) VALUES
(1, 'Customized Courses', 'a1bbda2413a468a5542be16b193d7950.png'),
(2, 'International Courses', '0c2ad15a32a536dceca7c274331c72fb.jpg'),
(3, 'training courses out line', '68323be0a7cff8dffe73c6a00d434556.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `certification`
--

CREATE TABLE `certification` (
  `cert_id` int(15) NOT NULL,
  `st_regno` varchar(80) NOT NULL,
  `st_name` varchar(80) NOT NULL,
  `st_cert_name` varchar(80) NOT NULL,
  `cert_file` text NOT NULL,
  `c_ins_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE `college` (
  `id` int(15) NOT NULL,
  `college_name` varchar(60) NOT NULL,
  `description` varchar(60) NOT NULL,
  `picture` varchar(60) NOT NULL,
  `priority` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`id`, `college_name`, `description`, `picture`, `priority`) VALUES
(8, 'Venketeswara College', 'Bangalore', '347a1ee3fe0883071e016b5109f51688.jpg', '0'),
(9, 'St.Benedict Academy', 'Bangalore', '376c842ed08b5316614d271254416ff6.jpg', '0'),
(10, 'East West College', 'Bangalore', '87d99b5f73950960def2ad4a9f5f137f.jpg', '0'),
(11, 'carmel college', 'thrissur', '444122db617b6453eb8c9841355beb76.jpg', '0'),
(12, 'thygaraja polytechnic', 'amballur', '916ee61bd302e0a74121f5cffc11c6b3.jpg', '0'),
(13, 'st.marries', 'thrissur', '1aabb8673e1e2e09faeed7ac42a59c00.jpg', '0'),
(14, 'st.Thomas college', 'thrissur', '106787072388d96f6520280f92685da6.jpg', '0');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(15) NOT NULL,
  `course` varchar(60) NOT NULL,
  `course_cat` varchar(60) NOT NULL,
  `priority` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `course`, `course_cat`, `priority`) VALUES
(17, 'Nursing', '3', '0'),
(18, 'Professional Digree', '3', '0'),
(19, 'IT courses', '2', '0'),
(20, 'H2S Safety Awareness SCBA Training Course', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

CREATE TABLE `fees` (
  `id` int(15) NOT NULL,
  `file` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fees`
--

INSERT INTO `fees` (`id`, `file`) VALUES
(2, '2fe832cdb6cf3c93d46d19ed4ab04006.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `home_slider`
--

CREATE TABLE `home_slider` (
  `slider_id` int(15) NOT NULL,
  `slider_name` varchar(60) NOT NULL,
  `slide_priority` int(15) NOT NULL,
  `slide_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_slider`
--

INSERT INTO `home_slider` (`slider_id`, `slider_name`, `slide_priority`, `slide_image`) VALUES
(1, 'slider123', 1, 'de238e85e3f2bb201c1da1df7fd5c7b1.jpg'),
(3, 'slider5', 3, '93e3056317c5096bad1ce6439e978ef0.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `offer_banner`
--

CREATE TABLE `offer_banner` (
  `ban_id` int(15) NOT NULL,
  `ban_name` varchar(60) NOT NULL,
  `ban_image` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offer_banner`
--

INSERT INTO `offer_banner` (`ban_id`, `ban_name`, `ban_image`) VALUES
(1, 'test123', '52dd9669516170f8fb3950f692fae546.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` int(15) NOT NULL,
  `first_name` varchar(60) NOT NULL,
  `last_name` varchar(60) NOT NULL,
  `gender` varchar(60) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(60) NOT NULL,
  `phno` varchar(60) NOT NULL,
  `qualification` varchar(60) NOT NULL,
  `p_course` varchar(60) NOT NULL,
  `picture` varchar(70) NOT NULL,
  `student_reg` text NOT NULL,
  `student_pwd` varchar(60) NOT NULL,
  `ins_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `first_name`, `last_name`, `gender`, `dob`, `email`, `phno`, `qualification`, `p_course`, `picture`, `student_reg`, `student_pwd`, `ins_date`) VALUES
(1, 'test', 'tester', 'male', '2018-07-19', 'test@hmail.com', '1023456789', 'degree', '20', '', 'MHC19122101', '123456', '2019-12-21'),
(2, 'test', 'tester2', 'Male', '1998-05-11', 'test@gmail.com', '1345487965', 'BCA', '19', 'b589ceaadcc2cb192362d2126c2bde67.jpg', 'MHC1912212', '654321', '2019-12-21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_user`
--
ALTER TABLE `admin_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `certification`
--
ALTER TABLE `certification`
  ADD PRIMARY KEY (`cert_id`);

--
-- Indexes for table `college`
--
ALTER TABLE `college`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fees`
--
ALTER TABLE `fees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_slider`
--
ALTER TABLE `home_slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `offer_banner`
--
ALTER TABLE `offer_banner`
  ADD PRIMARY KEY (`ban_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_user`
--
ALTER TABLE `admin_user`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `certification`
--
ALTER TABLE `certification`
  MODIFY `cert_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `college`
--
ALTER TABLE `college`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `fees`
--
ALTER TABLE `fees`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `home_slider`
--
ALTER TABLE `home_slider`
  MODIFY `slider_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `offer_banner`
--
ALTER TABLE `offer_banner`
  MODIFY `ban_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
