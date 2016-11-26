-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2016 at 01:25 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `testdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email_id` varchar(20) NOT NULL,
  `phone_no` int(22) NOT NULL,
  `admin_id` varchar(100) NOT NULL,
  PRIMARY KEY (`aid`),
  UNIQUE KEY `admin_id` (`admin_id`,`email_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `name`, `password`, `email_id`, `phone_no`, `admin_id`) VALUES
(1, 'Sireesha', '1234567890', 'sireesha.g@iiits.in', 1234567890, '1234');

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE IF NOT EXISTS `announcement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sub` varchar(100) NOT NULL,
  `des` varchar(10000) NOT NULL,
  `dt` datetime NOT NULL,
  `aid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`id`, `sub`, `des`, `dt`, `aid`) VALUES
(24, 'Software Engineering', 'There is an exam on 06-11-2016', '2016-11-06 11:29:20', 1),
(25, 'Software Engineering', 'THERE IS AN EVEALUTION', '2016-11-06 12:12:39', 1),
(26, 'Software Engineering', 'an', '2016-11-06 13:26:12', 1),
(27, 'dip', 'Submit assignment today!!', '2016-11-26 03:36:30', 1),
(28, 'Computer Architecture', 'Update the Project Status!!!', '2016-11-26 12:41:34', 4);

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE IF NOT EXISTS `attendance` (
  `sid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `dt` datetime NOT NULL,
  `mark` varchar(10) NOT NULL,
  `fid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`sid`, `cid`, `dt`, `mark`, `fid`) VALUES
(1, 14, '2016-10-12 12:33:29', 'Present', 1),
(16, 14, '2016-10-12 12:33:29', 'Present', 1),
(16, 15, '2016-10-12 12:35:30', 'Present', 4),
(1, 15, '2016-10-12 12:45:33', 'Present', 4),
(1, 15, '2016-10-12 12:45:33', 'Present', 4),
(1, 15, '2016-10-12 12:46:08', 'Present', 4),
(16, 15, '2016-10-12 12:46:30', 'Present', 4),
(1, 15, '2016-10-12 12:47:45', 'Present', 4),
(1, 15, '2016-10-12 12:47:45', 'Present', 4),
(1, 15, '2016-10-12 12:47:45', 'Present', 4),
(16, 16, '2016-10-12 12:55:49', 'Present', 4),
(1, 16, '2016-10-12 12:56:02', 'Present', 4),
(1, 16, '2016-10-12 12:56:02', 'Present', 4),
(1, 16, '2016-10-12 12:57:40', 'Present', 4),
(1, 14, '2016-10-12 13:02:42', 'Present', 1),
(16, 13, '2016-10-12 13:05:09', 'Present', 1),
(1, 15, '2016-10-12 14:11:06', 'Present', 4),
(16, 15, '2016-10-12 14:29:15', 'Present', 4),
(16, 14, '2016-10-12 14:31:50', 'Present', 1),
(1, 15, '2016-10-13 09:22:08', 'Present', 4),
(16, 14, '2016-11-06 11:52:16', 'Present', 1),
(17, 14, '2016-11-06 11:52:16', 'Present', 1),
(1, 14, '2016-11-06 11:52:36', 'Present', 1),
(16, 16, '2016-11-06 11:52:58', 'Present', 4),
(1, 16, '2016-11-06 11:56:01', 'Present', 4),
(17, 13, '2016-11-06 11:56:10', 'Present', 1),
(16, 14, '2016-11-06 11:57:15', 'Present', 1),
(16, 14, '2016-11-06 11:57:33', 'Present', 1),
(17, 13, '2016-11-06 12:00:16', 'Present', 1),
(16, 13, '2016-11-06 12:00:16', 'ABSENT', 1),
(1, 13, '2016-11-06 12:00:16', 'ABSENT', 1),
(1, 15, '2016-11-06 12:02:22', 'Present', 4),
(16, 15, '2016-11-06 12:02:22', 'ABSENT', 4),
(16, 14, '2016-11-06 12:02:57', 'Present', 1),
(17, 13, '2016-11-06 12:04:28', 'Present', 1),
(1, 13, '2016-11-06 12:04:28', 'Present', 1),
(17, 13, '2016-11-06 12:05:08', 'Present', 1),
(16, 13, '2016-11-06 12:08:02', 'Present', 1),
(17, 13, '2016-11-06 12:08:02', 'Present', 1),
(1, 13, '2016-11-06 12:08:02', 'ABSENT', 1),
(16, 14, '2016-11-06 12:09:02', 'Present', 1),
(16, 14, '2016-11-06 12:09:28', 'Present', 1),
(17, 14, '2016-11-06 12:09:28', 'Present', 1),
(17, 13, '2016-11-06 12:12:05', 'Present', 1),
(16, 13, '2016-11-06 12:12:05', 'ABSENT', 1),
(1, 13, '2016-11-06 12:12:05', 'ABSENT', 1),
(16, 16, '2016-11-06 12:12:58', 'Present', 4),
(1, 16, '2016-11-06 12:12:58', 'ABSENT', 4),
(16, 13, '2016-11-06 12:13:32', 'Present', 1),
(17, 13, '2016-11-06 12:13:32', 'ABSENT', 1),
(1, 13, '2016-11-06 12:13:32', 'ABSENT', 1),
(16, 15, '2016-11-06 12:47:55', 'Present', 4),
(1, 15, '2016-11-06 12:47:55', 'ABSENT', 4),
(16, 13, '2016-11-06 12:57:54', 'Present', 1),
(17, 13, '2016-11-06 12:57:54', 'Present', 1),
(1, 13, '2016-11-06 12:57:54', 'ABSENT', 1),
(16, 13, '2016-11-06 13:25:44', 'Present', 1),
(17, 13, '2016-11-06 13:25:44', 'Present', 1),
(17, 14, '2016-11-06 13:26:59', 'Present', 1),
(16, 14, '2016-11-06 13:26:59', 'ABSENT', 1),
(11, 15, '2016-11-26 03:13:52', 'Present', 4),
(16, 15, '2016-11-26 03:13:52', 'ABSENT', 4),
(1, 15, '2016-11-26 03:13:52', 'ABSENT', 4),
(11, 15, '2016-11-26 03:13:52', 'Present', 4),
(16, 15, '2016-11-26 03:13:52', 'ABSENT', 4),
(1, 15, '2016-11-26 03:13:52', 'ABSENT', 4),
(1, 15, '2016-11-26 03:15:31', 'Present', 4),
(16, 15, '2016-11-26 03:15:31', 'ABSENT', 4),
(11, 15, '2016-11-26 03:15:31', 'ABSENT', 4),
(11, 13, '2016-11-26 03:30:49', 'Present', 1),
(16, 13, '2016-11-26 03:30:49', 'ABSENT', 1),
(17, 13, '2016-11-26 03:30:49', 'ABSENT', 1),
(11, 15, '2016-11-26 11:48:08', 'Present', 4),
(16, 15, '2016-11-26 11:48:08', 'ABSENT', 4),
(16, 13, '2016-11-26 11:48:46', 'Present', 1),
(17, 13, '2016-11-26 11:48:46', 'Present', 1),
(11, 13, '2016-11-26 11:48:46', 'ABSENT', 1),
(17, 13, '2016-11-26 11:49:26', 'Present', 1),
(11, 13, '2016-11-26 11:49:26', 'Present', 1),
(16, 13, '2016-11-26 11:49:26', 'ABSENT', 1),
(17, 13, '2016-11-26 11:54:05', 'Present', 1),
(11, 13, '2016-11-26 11:54:05', 'Present', 1),
(16, 13, '2016-11-26 11:54:05', 'ABSENT', 1),
(16, 14, '2016-11-26 11:56:33', 'Present', 1),
(17, 14, '2016-11-26 11:56:33', 'Present', 1),
(16, 15, '2016-11-26 12:40:41', 'Present', 4),
(11, 15, '2016-11-26 12:40:41', 'ABSENT', 4),
(1, 16, '2016-11-26 14:03:11', 'Present', 4),
(16, 16, '2016-11-26 14:03:11', 'ABSENT', 4),
(11, 13, '2016-11-26 14:04:17', 'Present', 1),
(16, 13, '2016-11-26 14:04:17', 'ABSENT', 1),
(17, 13, '2016-11-26 14:04:17', 'ABSENT', 1),
(1, 13, '2016-11-26 14:04:17', 'ABSENT', 1);

-- --------------------------------------------------------

--
-- Table structure for table `courseregistered`
--

CREATE TABLE IF NOT EXISTS `courseregistered` (
  `sid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `fid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courseregistered`
--

INSERT INTO `courseregistered` (`sid`, `cid`, `fid`) VALUES
(16, 15, 4),
(16, 13, 1),
(16, 16, 4),
(16, 14, 1),
(17, 13, 1),
(17, 14, 1),
(11, 15, 4),
(11, 13, 1),
(1, 17, 1),
(1, 13, 1),
(24, 13, 1);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `fid` int(11) NOT NULL,
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `climit` int(100) DEFAULT NULL,
  `cname` varchar(100) NOT NULL,
  `cpreq` varchar(100) DEFAULT NULL,
  `descp` text NOT NULL,
  PRIMARY KEY (`cid`),
  KEY `fid` (`fid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`fid`, `cid`, `climit`, `cname`, `cpreq`, `descp`) VALUES
(1, 13, 0, 'Software Engineering', 'NULL', 'Its an interesting Course where people start loving towards coding||'),
(1, 14, 0, 'Discrete Mathematics', 'NULL', 'Its an interesting maths course where people should use their brain not pen..'),
(4, 15, 0, 'Pop', 'SE', 'fdsfdsafdfg'),
(4, 16, 1212, 'SSAD', 'SE', 'sdssdsfdfdfdsfdsfdg'),
(1, 17, 100, 'Theroy of computation', 'NULL', 'Its a Interesting Course !!!'),
(4, 18, 50, 'Effect Designing ', 'ITWS', 'To know the design'),
(1, 19, 0, 'dip', 'NULL', 'This an interesting appilcation'),
(4, 20, 0, 'Design and Architecture', 'NULL', 'This will help to do better in Software Eng.'),
(4, 21, 0, 'Computer Architecture', 'Computre Organasitation', 'fdfgdsgd'),
(4, 22, 0, 'Systems N Structures', 'SSP', 'Very Good!1');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE IF NOT EXISTS `faculty` (
  `fid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `faculty_id` varchar(100) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `phone_no` int(22) NOT NULL,
  PRIMARY KEY (`fid`),
  UNIQUE KEY `faculty_id` (`faculty_id`,`email_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`fid`, `name`, `password`, `faculty_id`, `email_id`, `phone_no`) VALUES
(1, 'Manideep', '123456', 'm19', 'mani.d14@iiits.in', 2147483647),
(2, 'vamshi', '123456', 'v15', 'vamshi.r14@iiits.in', 2147483647),
(3, 'faculty', '123456', '123', 'faculty@iiits.in', 1234567890),
(4, 'Sridhar Chimalakonda', '9876543210', '234', 'faculty@iiits.in', 2147483647),
(5, 'test', '123456', '123@', 'faculty@iiits.in', 1234567890);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `post_id` int(8) NOT NULL AUTO_INCREMENT,
  `post_content` text NOT NULL,
  `post_date` datetime NOT NULL,
  `post_topic` int(8) NOT NULL,
  `post_by` int(8) NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=97 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_content`, `post_date`, `post_topic`, `post_by`) VALUES
(69, 'Pls any One..!!\r\n', '2016-11-06 02:34:20', 37, 17),
(72, 'dont u know', '2016-11-06 09:31:57', 38, 1),
(73, 'dont u know abt it', '2016-11-06 09:38:04', 38, 1),
(74, 'hwww', '2016-11-06 09:45:43', 0, 1),
(75, 'hwww', '2016-11-06 09:45:55', 0, 1),
(76, 'rg4th', '2016-11-06 09:47:04', 0, 1),
(77, 'hello master', '2016-11-06 09:50:53', 0, 1),
(78, 'helo master', '2016-11-06 09:51:46', 0, 1),
(79, 'ahaha', '2016-11-06 09:53:02', 0, 1),
(80, 'efrf', '2016-11-06 09:53:48', 38, 1),
(81, 'efrf', '2016-11-06 09:54:57', 38, 1),
(82, 'g', '2016-11-06 09:56:12', 38, 1),
(83, 'come on', '2016-11-06 09:56:19', 38, 1),
(84, 'd', '2016-11-06 09:56:57', 38, 1),
(85, 'ha', '2016-11-06 09:57:13', 38, 1),
(87, 'Pls reply ASAP!!!', '2016-11-25 21:34:26', 42, 11),
(93, 'Okk!!', '2016-11-26 13:24:25', 42, 4),
(94, 'Do one thing!\r\n\r\n', '2016-11-26 13:24:45', 42, 4),
(95, 'May be Finite automata Stufff!!', '2016-11-26 14:09:17', 45, 1),
(96, 'Any one pls??', '2016-11-26 16:32:12', 46, 24);

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE IF NOT EXISTS `states` (
  `source` varchar(10) DEFAULT NULL,
  `state` int(11) DEFAULT NULL,
  `dest` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`source`, `state`, `dest`) VALUES
('q0', 0, 'q1'),
('q0', 1, 'q0'),
('q1', 1, 'q1'),
('q1', 0, 'q0');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Roll_No` varchar(11) NOT NULL,
  `email_Id` varchar(40) NOT NULL,
  `Phone_no` int(11) NOT NULL,
  PRIMARY KEY (`sid`),
  UNIQUE KEY `email_Id` (`email_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`sid`, `Name`, `Password`, `Roll_No`, `email_Id`, `Phone_no`) VALUES
(1, 'sunil', 'sunil9', 'is201401044', 'sunil.k14@iiits.in', 123456),
(2, 'Manideep', 'manideep', 'IS201401044', 'mani.d14@iiits.in', 0),
(3, 'test', 'testpwd', 'IS201401000', 'test.014@iiits.in', 0),
(8, 'Manideep', 'maniteja', 'IS201401044', 'test.015@iiits.in', 1234567899),
(9, 'aaa', '111111', 'aaaaaaaaaaa', 'aa@gmail.com', 1234567891),
(10, 'jagadesh', '123456', 'IS201401034', 'jagadeesh.d14@iiits.in', 2147483647),
(11, 'Vamshi', '9912145721', 'IS201411038', 'vamshi.r14@iiits.in', 2147483647),
(12, 'student', '123456', 'IS201400000', 'student@iiits.in', 1234567890),
(13, 'Nataraj', 'sunil9', 'IS201411021', 'nataraj.k14@iiits.in', 2147483647),
(15, 'Mohan', '123456', 'is201411003', 'mohan.a14@iiits.in', 2147483647),
(16, 'Vineeth', '1234567890', 'IS201411017', 'vineeth.k14@iiits.in', 2147483647),
(17, 'Chaitanya', '123456', 'IS201401032', 'chaitanya.m14@iiits.in', 2147483647),
(19, 'mahesh', '1234567', 'IS201411075', 'mahesh.m14@iiits.in', 2147483647),
(21, 'Student', '123456', 'IS201601044', 'student14@iiits.in', 2147483647),
(22, 'Nataraj', '123456', 'IS201411021', 'jagadeesh14@iiits.in', 2147483647),
(23, 'Krishn', '123456', 'Is201410245', 'krishna@iiits.in', 1234567890),
(24, 'Ch Nagaraju', '1234567', 'IS201301030', 'nagaraju.c13@iiits.in', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE IF NOT EXISTS `topics` (
  `topic_id` int(8) NOT NULL AUTO_INCREMENT,
  `topic_subject` varchar(255) NOT NULL,
  `topic_date` datetime NOT NULL,
  `topic_cat` int(8) NOT NULL,
  `topic_by` int(8) NOT NULL,
  PRIMARY KEY (`topic_id`),
  KEY `topic_cat` (`topic_cat`),
  KEY `topic_by` (`topic_by`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `topicsstu`
--

CREATE TABLE IF NOT EXISTS `topicsstu` (
  `topic_id` int(11) NOT NULL AUTO_INCREMENT,
  `topic_subject` varchar(255) NOT NULL,
  `topic_date` datetime NOT NULL,
  `topic_name` varchar(500) NOT NULL,
  `topic_description` varchar(500) NOT NULL,
  `topic_by` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  PRIMARY KEY (`topic_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=47 ;

--
-- Dumping data for table `topicsstu`
--

INSERT INTO `topicsstu` (`topic_id`, `topic_subject`, `topic_date`, `topic_name`, `topic_description`, `topic_by`, `subject_id`) VALUES
(37, 'I didn''t understand today''s class ', '2016-11-06 02:17:12', 'Software Engineering', 'Can anyone explain the today''s class....!!!', 17, 13),
(38, 'what is the syllabus`', '2016-11-06 09:31:43', 'Discrete Mathematics', 'u should only know abt it', 1, 14),
(42, 'Can anyone tell the final evaluation schedule?', '2016-11-25 21:33:59', 'Pop', 'Guys, What is the project schedule? @What timings..? Any judges come from outside to evaluate??? ', 11, 15),
(45, 'Term Paper in TOC??', '2016-11-26 14:08:55', 'Theroy of computation', 'What kind of Topics???', 1, 17),
(46, 'What this course describes??', '2016-11-26 16:31:34', 'Software Engineering', 'Can any one tell me this above question', 24, 13);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(40) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'test', 't.14@iiits.in', 'e10adc3949ba59abbe56e057f20f883e'),
(2, 'a', 'a.14@iiits.im', '123456'),
(3, 'Manideep', 'manideep.c14@iiits.in', '123456'),
(4, 'Siribabu', 'siri@iiits.in', '1234567890');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`fid`) REFERENCES `faculty` (`fid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
