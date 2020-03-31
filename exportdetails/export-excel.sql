-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2017 at 05:51 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `export-excel`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `student_username` varchar(255) NOT NULL,
  `student_email` varchar(255) NOT NULL,
  `student_password` varchar(255) NOT NULL,
  `student_grade` varchar(255) NOT NULL,
  `student_image` varchar(255) NOT NULL,
  `created_date` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `student_name`, `student_username`, `student_email`, `student_password`, `student_grade`, `student_image`, `created_date`, `status`) VALUES
(1, 'Aravinth', '', 'anthu1510@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', '', '', 'active'),
(3, 'priya', 'priya', 'ragapriya@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', 'A+', '', '', 'active'),
(4, 'murali', 'murali', 'murali@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'S+', '', '', ''),
(14, 'Andhu', 'Andhu1510', 'anthu1510@gmail.com', '123455', '', '', '', 'active'),
(7, 'sudha', 'sudha', 'sudham@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'A+', 'bg-01.jpg', '', 'active'),
(9, 'vidhya', 'vidhya', 'vidhu@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'A+', 'Hydrangeas.jpg', '', 'active'),
(13, 'Andhu', 'Andhu1510', 'anthu1510@gmail.com', '123455', '', '', '', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
