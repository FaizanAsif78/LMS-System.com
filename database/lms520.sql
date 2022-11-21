-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2022 at 11:13 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms520`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adid` int(50) NOT NULL,
  `ademail` varchar(50) NOT NULL,
  `adpass` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adid`, `ademail`, `adpass`, `status`) VALUES
(1, 'admin@gmail.com', '123', 'admin'),
(2, 'admin1@gmail.com', '321', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `batch`
--

CREATE TABLE `batch` (
  `bid` int(50) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `b_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `batch`
--

INSERT INTO `batch` (`bid`, `cname`, `b_name`) VALUES
(1, '2', '520 5-6'),
(2, '1', '521 5:30-6:30'),
(4, '1', '520 2-3'),
(5, '', '520 3-4'),
(6, 'App Development', '520 4-9'),
(7, 'App Development', '520 4-9'),
(8, '2', '520 9-10');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `c_id` int(50) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `c_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`c_id`, `cname`, `c_date`) VALUES
(1, 'Mobile', '2022-01-19');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `cid` int(50) NOT NULL,
  `acourse` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`cid`, `acourse`) VALUES
(1, 'App Development'),
(2, 'Graphic Designing'),
(3, 'designer');

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE `expense` (
  `e_id` int(50) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `edate` varchar(50) NOT NULL,
  `tax` varchar(50) NOT NULL,
  `tper` varchar(50) NOT NULL,
  `tamount` varchar(50) NOT NULL,
  `IMG` varchar(50) NOT NULL,
  `enote` varchar(50) NOT NULL,
  `pamount` varchar(50) NOT NULL,
  `pmethod` varchar(50) NOT NULL,
  `pnote` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `expense`
--

INSERT INTO `expense` (`e_id`, `c_name`, `edate`, `tax`, `tper`, `tamount`, `IMG`, `enote`, `pamount`, `pmethod`, `pnote`) VALUES
(1, '1', '', '', '45', '4555', 'camper van.jpg', 's;ajDSjl;dals', '45454', 'sdasda', 'lsad;slda;lsd');

-- --------------------------------------------------------

--
-- Table structure for table `partner`
--

CREATE TABLE `partner` (
  `pid` int(50) NOT NULL,
  `pstatus` varchar(50) NOT NULL,
  `personid` varchar(50) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `pemail` varchar(50) NOT NULL,
  `pno` varchar(50) NOT NULL,
  `pgen` varchar(50) NOT NULL,
  `commethod` varchar(50) NOT NULL,
  `p_amount` varchar(50) NOT NULL,
  `p_per` varchar(50) NOT NULL,
  `padd` varchar(50) NOT NULL,
  `pimg` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `partner`
--

INSERT INTO `partner` (`pid`, `pstatus`, `personid`, `pname`, `pemail`, `pno`, `pgen`, `commethod`, `p_amount`, `p_per`, `padd`, `pimg`) VALUES
(8, 'Active', '123', 'aahad', 'aahad@gmail.com', '123456789', 'Male', 'direct', '5000', '2%', 'ksjaldkshdjasguadishajkdsdalsjads', 'banner_1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE `query` (
  `qid` int(50) NOT NULL,
  `qname` varchar(50) NOT NULL,
  `quni` varchar(50) NOT NULL,
  `qsem` varchar(50) NOT NULL,
  `qarea` varchar(50) NOT NULL,
  `qstat` varchar(50) NOT NULL,
  `qref` varchar(50) NOT NULL,
  `qcourse` varchar(50) NOT NULL,
  `qfee` varchar(50) NOT NULL,
  `qdisc` varchar(50) NOT NULL,
  `qgen` varchar(50) NOT NULL,
  `qcon1` varchar(50) NOT NULL,
  `qcon2` varchar(50) NOT NULL,
  `qadr` varchar(50) NOT NULL,
  `qdate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`qid`, `qname`, `quni`, `qsem`, `qarea`, `qstat`, `qref`, `qcourse`, `qfee`, `qdisc`, `qgen`, `qcon1`, `qcon2`, `qadr`, `qdate`) VALUES
(1, 'Aahad', 'Riphah', '1', 'Faisalabad', 'Faisalabad', 'Sir Anees', 'Web', '20000', '15000', 'Male', '243423423', '32423423532', '', '2022-01-08'),
(2, 'Aahad', 'Riphah', '4', 'Faisalabad', 'Faisalabad', 'Sir Usama', 'Web', '20000', '15000', 'Male', '3235523523', '523552323', 'fgsdfsdfadfsdf', '2022-01-11'),
(3, 'Aahad', 'Riphah', '4', 'Faisalabad', 'Faisalabad', 'Sir Usama', 'Web', '20000', '15000', 'Male', '3235523523', '523552323', 'fgsdfsdfadfsdf', '2022-01-11');

-- --------------------------------------------------------

--
-- Table structure for table `student_lms`
--

CREATE TABLE `student_lms` (
  `s_id` int(50) NOT NULL,
  `s_ses` varchar(50) NOT NULL,
  `t_name` varchar(50) NOT NULL,
  `ref` varchar(50) NOT NULL,
  `s_date` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phno` varchar(50) NOT NULL,
  `sgen` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `s_status` varchar(50) NOT NULL,
  `s_add` varchar(50) NOT NULL,
  `img` varchar(50) NOT NULL,
  `t_deg` varchar(50) NOT NULL,
  `d_name` varchar(50) NOT NULL,
  `deg_status` varchar(50) NOT NULL,
  `uni` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `t_fee` varchar(50) NOT NULL,
  `pay_method` varchar(50) NOT NULL,
  `paid_fee` varchar(50) NOT NULL,
  `rem_fee` varchar(50) NOT NULL,
  `pay_term` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_lms`
--

INSERT INTO `student_lms` (`s_id`, `s_ses`, `t_name`, `ref`, `s_date`, `name`, `fname`, `email`, `phno`, `sgen`, `dob`, `s_status`, `s_add`, `img`, `t_deg`, `d_name`, `deg_status`, `uni`, `year`, `t_fee`, `pay_method`, `paid_fee`, `rem_fee`, `pay_term`) VALUES
(1, '', '1', 'Sir Anees', '2022-01-09', 'Aahad', 'Ali', 'aahad@gmail.com', '3235352523', 'Male', '5-5-5', 'Enrolled', ';ljxc;ljXlzjx;lczxkhcjkzd', 'writer.jpg', '', 'fa', 'Continue', 'Riphah', '2020', '555', 'Full fee', '444444', '4444', '15 Days'),
(2, 'Noon', '1', 'Sir Anees', '2022-01-18', 'Aahad Ali', 'Ali', 'aahad@gmail.com', '376427834', 'Male', '3-3-3', 'Freez', 'klskldasd', 'pic2.jpg', '', 'fa', 'Complete', 'Riphah', '2021', '444', 'Installments', '422235', '352352', '60 Days');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_lms`
--

CREATE TABLE `teacher_lms` (
  `t_id` int(50) NOT NULL,
  `t_status` varchar(50) NOT NULL,
  `t_name` varchar(50) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `temail` varchar(50) NOT NULL,
  `tpass` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `tgen` varchar(50) NOT NULL,
  `tpost` varchar(50) NOT NULL,
  `per_student` varchar(50) NOT NULL,
  `salary` varchar(50) NOT NULL,
  `tadd` varchar(50) NOT NULL,
  `timg` varchar(50) NOT NULL,
  `t_degree` varchar(50) NOT NULL,
  `degree_n` varchar(50) NOT NULL,
  `deg_status` varchar(50) NOT NULL,
  `b_university` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `prof_field` varchar(50) NOT NULL,
  `experience` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher_lms`
--

INSERT INTO `teacher_lms` (`t_id`, `t_status`, `t_name`, `f_name`, `temail`, `tpass`, `phone`, `tgen`, `tpost`, `per_student`, `salary`, `tadd`, `timg`, `t_degree`, `degree_n`, `deg_status`, `b_university`, `year`, `prof_field`, `experience`) VALUES
(1, 'Active', 'Sir ', 'Mr Sir', '', '34342', '3235352523', '', '', '4%', '45454', 'l;ja;lsjad;sjdaskjdashjakdh', 'pic2.jpg', '', 'fa', '', 'faisalabad', '2020', 'sa;das;lda', ';jsak;sdja;jsjs');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adid`);

--
-- Indexes for table `batch`
--
ALTER TABLE `batch`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `expense`
--
ALTER TABLE `expense`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `query`
--
ALTER TABLE `query`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `student_lms`
--
ALTER TABLE `student_lms`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `teacher_lms`
--
ALTER TABLE `teacher_lms`
  ADD PRIMARY KEY (`t_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `batch`
--
ALTER TABLE `batch`
  MODIFY `bid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `c_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `cid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `expense`
--
ALTER TABLE `expense`
  MODIFY `e_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `partner`
--
ALTER TABLE `partner`
  MODIFY `pid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `query`
--
ALTER TABLE `query`
  MODIFY `qid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student_lms`
--
ALTER TABLE `student_lms`
  MODIFY `s_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `teacher_lms`
--
ALTER TABLE `teacher_lms`
  MODIFY `t_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
