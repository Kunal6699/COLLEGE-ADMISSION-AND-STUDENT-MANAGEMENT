-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2019 at 12:57 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `oas`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_admin`
--

CREATE TABLE IF NOT EXISTS `t_admin` (
  `ad_id` varchar(10) NOT NULL,
  `ad_name` varchar(50) NOT NULL,
  `ad_pswd` varchar(50) NOT NULL,
  `ad_eml` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_admin`
--

INSERT INTO `t_admin` (`ad_id`, `ad_name`, `ad_pswd`, `ad_eml`) VALUES
('AD00000001', 'admin', 'admin', 'admin@gmail.com'),
('AD00002', 'Dilraj', 'QCoxFrwx', 'dilrajkaur18@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `t_status`
--

CREATE TABLE IF NOT EXISTS `t_status` (
  `s_id` varchar(50) NOT NULL,
  `s_stat` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_status`
--

INSERT INTO `t_status` (`s_id`, `s_stat`) VALUES
('CUTM00008', 'Applied'),
('CUTM00012', 'Applied');

-- --------------------------------------------------------

--
-- Table structure for table `t_user`
--

CREATE TABLE IF NOT EXISTS `t_user` (
  `s_detid` varchar(15) NOT NULL,
  `s_id` varchar(15) NOT NULL,
  `s_phn1` int(10) NOT NULL,
  `s_phn2` int(10) NOT NULL,
  `f_name` varchar(45) NOT NULL,
  `f_occ` varchar(45) NOT NULL,
  `f_phn` int(10) NOT NULL,
  `m_name` varchar(45) NOT NULL,
  `m_occ` varchar(45) NOT NULL,
  `m_phn` int(10) NOT NULL,
  `s_iop` int(10) NOT NULL,
  `s_sex` varchar(6) NOT NULL,
  `s_cadr` varchar(50) NOT NULL,
  `s_cst` varchar(20) NOT NULL,
  `s_cpin` int(6) NOT NULL,
  `s_cmob` int(10) NOT NULL,
  `s_padr` varchar(50) NOT NULL,
  `s_pst` varchar(20) NOT NULL,
  `s_ppin` int(6) NOT NULL,
  `s_pmob` int(10) NOT NULL,
  `s_ruc` varchar(10) NOT NULL,
  `s_natn` varchar(10) NOT NULL,
  `s_relg` varchar(10) DEFAULT NULL,
  `s_catg` varchar(3) NOT NULL,
  `s_mainsxam` varchar(20) NOT NULL,
  `s_mainsrank` varchar(10) NOT NULL,
  `s_mainsroll` varchar(20) NOT NULL,
  `s_mainsbrnch` varchar(45) NOT NULL,
  `s_branch` varchar(60) NOT NULL,
  `s_college` varchar(6) NOT NULL,
  `s_center` varchar(20) NOT NULL,
  `s_crtype` varchar(10) NOT NULL,
  `s_pcm` varchar(10) NOT NULL,
  `s_tenbrd` varchar(7) NOT NULL,
  `s_tenyop` varchar(4) NOT NULL,
  `s_tentotmark` varchar(4) NOT NULL,
  `s_tenmarkob` varchar(4) NOT NULL,
  `s_tendiv` varchar(4) NOT NULL,
  `s_tenprcmark` varchar(4) NOT NULL,
  `s_twlbrd` varchar(7) NOT NULL,
  `s_twlyop` varchar(4) NOT NULL,
  `s_twltotmark` varchar(4) NOT NULL,
  `s_twlmarkob` varchar(4) NOT NULL,
  `s_twldiv` varchar(4) NOT NULL,
  `s_twlprcmark` varchar(4) NOT NULL,
  `s_moi` varchar(8) NOT NULL,
  `s_pay` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_user`
--

INSERT INTO `t_user` (`s_detid`, `s_id`, `s_phn1`, `s_phn2`, `f_name`, `f_occ`, `f_phn`, `m_name`, `m_occ`, `m_phn`, `s_iop`, `s_sex`, `s_cadr`, `s_cst`, `s_cpin`, `s_cmob`, `s_padr`, `s_pst`, `s_ppin`, `s_pmob`, `s_ruc`, `s_natn`, `s_relg`, `s_catg`, `s_mainsxam`, `s_mainsrank`, `s_mainsroll`, `s_mainsbrnch`, `s_branch`, `s_college`, `s_center`, `s_crtype`, `s_pcm`, `s_tenbrd`, `s_tenyop`, `s_tentotmark`, `s_tenmarkob`, `s_tendiv`, `s_tenprcmark`, `s_twlbrd`, `s_twlyop`, `s_twltotmark`, `s_twlmarkob`, `s_twldiv`, `s_twlprcmark`, `s_moi`, `s_pay`) VALUES
('DE00000003', 'CUTM00003', 1234567890, 1234567890, 'Madhusudan Mahato', 'Employee', 1234567890, 'Sheela Mahato', 'Housemaker', 1234567890, 400000, 'Female', 'Jamshedpur', 'Jharkhand', 831004, 1234567890, 'Jamshedpur', 'Jharkhand', 831004, 1234567890, 'City', 'Indian', 'Sikh', 'GEN', 'JEE MAIN', '723', '71', 'Jamshedpur', 'COMPUTER SCIENCE AND ENG', 'CIT', 'Bhubaneshwar', 'Regular', '80', 'ICSE', '2011', '100', '80', '1', '80', '     Ot', '2014', '100', '66', '1', '79', 'English', 'Self'),
('DE00000004', 'CUTM00008', 2147483647, 2147483647, 'Rakesh Saigal', 'Journalist', 2147483647, 'Nisha Saigal', 'Homemaker', 2147483647, 200000, 'Female', 'Near Meera Hotel', 'Odisha', 768028, 2147483647, 'Near Meera Hotel', 'Odisha', 768028, 2147483647, 'City', 'Indian', 'Hindu', 'GEN', 'OJEE', '177', '3456278', 'Bhubaneshwar', 'ELECTRICAL AND ELECTRONICS ENG', 'CIT', 'Bhubaneshwar', 'Regular', '89', 'CBSE', '2011', '500', '483', '1', '89', 'chse', '2013', '600', '512', '1', '75', 'English', 'Loan'),
('DE00000005', 'CUTM00012', 78544878, 785100020, 'Johnny', 'Businessman', 2147483647, 'Natalie', 'Designer', 1004585100, 149000, 'Male', '8545454545', 'demo', 88888, 2147483647, '8545454545', 'demo', 8545, 2147483647, 'City', 'espn', 'demo', 'GEN', 'JEE MAIN', '6', '19', 'demo', 'COMPUTER SCIENCE AND ENG', 'CIT', 'Bhubaneshwar', 'Regular', '56', 'UINI', '2013', '82', '82', '1', '76', 'SHSC', '2015', '77', '77', '1', '71', 'English', 'Self');

-- --------------------------------------------------------

--
-- Table structure for table `t_userdoc`
--

CREATE TABLE IF NOT EXISTS `t_userdoc` (
  `s_id` varchar(10) NOT NULL,
  `s_pic` varchar(200) NOT NULL,
  `s_tenmarkpic` varchar(200) NOT NULL,
  `s_tencerpic` varchar(200) NOT NULL,
  `s_twdmarkpic` varchar(200) NOT NULL,
  `s_twdcerpic` varchar(200) NOT NULL,
  `s_idprfpic` varchar(200) NOT NULL,
  `s_sigpic` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_userdoc`
--

INSERT INTO `t_userdoc` (`s_id`, `s_pic`, `s_tenmarkpic`, `s_tencerpic`, `s_twdmarkpic`, `s_twdcerpic`, `s_idprfpic`, `s_sigpic`) VALUES
('CUTM00003', 'B612-2015-04-06-14-19-16.jpg', '4th Sem TT_CSE.pdf', '4th Sem TT_CSE.pdf', '4th Sem TT_CSE.pdf', '4th Sem TT_CSE.pdf', '4th Sem TT_CSE.pdf', 'Signature.png'),
('CUTM00008', 'IMG_20150301_235958.JPG', '4th Sem TT_CSE.pdf', '4th Sem TT_CSE.pdf', '4th Sem TT_CSE.pdf', '4th Sem TT_CSE.pdf', '4th Sem TT_CSE.pdf', 'Signature.png'),
('CUTM00012', 'H2cb-84q_400x400.jpeg', 'H2cb-84q_400x400.jpeg', 'H2cb-84q_400x400.jpeg', 'H2cb-84q_400x400.jpeg', 'H2cb-84q_400x400.jpeg', 'H2cb-84q_400x400.jpeg', 'H2cb-84q_400x400.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `t_usermark`
--

CREATE TABLE IF NOT EXISTS `t_usermark` (
  `s_id` varchar(50) NOT NULL,
  `s_omr` varchar(50) NOT NULL,
  `s_mark` int(5) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_usermark`
--

INSERT INTO `t_usermark` (`s_id`, `s_omr`, `s_mark`) VALUES
('CUTM00003', '123', 345);

-- --------------------------------------------------------

--
-- Table structure for table `t_user_data`
--

CREATE TABLE IF NOT EXISTS `t_user_data` (
  `s_id` varchar(10) NOT NULL,
  `s_pwd` varchar(15) NOT NULL,
  `s_dob` date DEFAULT NULL,
  `s_name` varchar(45) NOT NULL,
  `s_email` varchar(45) NOT NULL,
  `s_mob` varchar(10) DEFAULT NULL,
  `s_signupdate` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_user_data`
--

INSERT INTO `t_user_data` (`s_id`, `s_pwd`, `s_dob`, `s_name`, `s_email`, `s_mob`, `s_signupdate`) VALUES
('CUTM00003', 'QBAfi0Wy', '2015-09-08', 'Archana Kumari', 'archanajsr2310@gmail.com', '1234567890', '2015-09-30 14:43:31.000000'),
('CUTM00004', 'MNexGlM2', '2015-10-14', 'Arti', 'artijha15@gmail.com', '1234567890', '2015-10-01 11:30:33.000000'),
('CUTM00006', 'DBwdVb88', '2015-10-05', 'Arti', 'artijha16@gmail.com', '1234567890', '2015-10-07 15:27:32.000000'),
('CUTM00007', 'CmjAQZGw', '2015-10-19', 'Dilraj', 'dilrajkaur18@gmail.com', '1234567890', '2015-10-08 14:39:52.000000'),
('CUTM00008', 'X3PXhxEV', '2015-10-15', 'Ankita Saigal', 'ankitabargarh@gmail.com', '6884280078', '2015-10-08 19:15:11.000000'),
('CUTM00009', 'qcowa7pC', '2015-10-20', 'Ansh', 'anshsinha0309@gmail.com', '1234567890', '2015-10-08 20:25:35.000000'),
('CUTM00010', '0pzGI4Bf', '2015-10-07', 'Sweety', 'abc@gmai.com', '1234567890', '2015-10-09 23:01:06.000000'),
('CUTM00011', 'NC3Ro5KU', '2015-10-06', 'abc', '130301csl062@cutm.ac.in', '1234567890', '2015-10-10 13:48:10.000000'),
('CUTM00012', 'uUGnGyFq', '1997-03-04', 'Harry Den', 'harryden@ourmail.com', '8547854452', '2019-03-23 13:01:29.000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_admin`
--
ALTER TABLE `t_admin`
 ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `t_status`
--
ALTER TABLE `t_status`
 ADD KEY `s_id` (`s_id`);

--
-- Indexes for table `t_user`
--
ALTER TABLE `t_user`
 ADD PRIMARY KEY (`s_detid`), ADD KEY `s_id` (`s_id`);

--
-- Indexes for table `t_userdoc`
--
ALTER TABLE `t_userdoc`
 ADD KEY `s_id` (`s_id`);

--
-- Indexes for table `t_usermark`
--
ALTER TABLE `t_usermark`
 ADD KEY `s_id` (`s_id`);

--
-- Indexes for table `t_user_data`
--
ALTER TABLE `t_user_data`
 ADD PRIMARY KEY (`s_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `t_status`
--
ALTER TABLE `t_status`
ADD CONSTRAINT `t_status_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `t_user_data` (`s_id`);

--
-- Constraints for table `t_user`
--
ALTER TABLE `t_user`
ADD CONSTRAINT `t_user_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `t_user_data` (`s_id`);

--
-- Constraints for table `t_userdoc`
--
ALTER TABLE `t_userdoc`
ADD CONSTRAINT `t_userdoc_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `t_user_data` (`s_id`);

--
-- Constraints for table `t_usermark`
--
ALTER TABLE `t_usermark`
ADD CONSTRAINT `t_usermark_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `t_user_data` (`s_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
