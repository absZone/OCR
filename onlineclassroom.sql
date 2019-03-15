-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2019 at 12:10 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlineclassroom`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminId` varchar(500) NOT NULL,
  `loginId` varchar(500) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminId`, `loginId`, `password`) VALUES
('44f56ffc-4543-11e9-98de-c8d3fff0df35', 'root', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `answerId` varchar(500) NOT NULL,
  `questionId` varchar(500) DEFAULT NULL,
  `answer` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `courseId` varchar(500) NOT NULL,
  `courseTypeId` varchar(500) DEFAULT NULL,
  `courseName` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`courseId`, `courseTypeId`, `courseName`) VALUES
('295068d8-470e-11e9-a1b9-f82fa8dc38d8', '569e4ace-461f-11e9-acdc-c8d3fff0df35', 'Operating System'),
('30512008-470e-11e9-a1b9-f82fa8dc38d8', '569e4ace-461f-11e9-acdc-c8d3fff0df35', 'Imperative Programming'),
('3c75214b-470e-11e9-a1b9-f82fa8dc38d8', '569e72d0-461f-11e9-acdc-c8d3fff0df35', 'Web Programming');

-- --------------------------------------------------------

--
-- Table structure for table `course_type`
--

CREATE TABLE `course_type` (
  `courseTypeId` varchar(500) NOT NULL,
  `courseType` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_type`
--

INSERT INTO `course_type` (`courseTypeId`, `courseType`) VALUES
('569e4ace-461f-11e9-acdc-c8d3fff0df35', 'Semester 1'),
('569e72d0-461f-11e9-acdc-c8d3fff0df35', 'Semester 2'),
('7ea607aa-461f-11e9-acdc-c8d3fff0df35', 'Semester 3'),
('7ea636d2-461f-11e9-acdc-c8d3fff0df35', 'Semester 4'),
('8b853aae-461f-11e9-acdc-c8d3fff0df35', 'Semester 5'),
('8b856216-461f-11e9-acdc-c8d3fff0df35', 'Semester 6'),
('9cb4211e-461f-11e9-acdc-c8d3fff0df35', 'Individual');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `facultyId` varchar(500) NOT NULL,
  `loginId` varchar(500) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL,
  `firstName` varchar(500) DEFAULT NULL,
  `lastName` varchar(500) DEFAULT NULL,
  `experienceYear` varchar(500) DEFAULT NULL,
  `course` varchar(500) DEFAULT NULL,
  `gender` varchar(500) DEFAULT NULL,
  `age` varchar(500) DEFAULT NULL,
  `adress` varchar(500) DEFAULT NULL,
  `phoneNo` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`facultyId`, `loginId`, `password`, `firstName`, `lastName`, `experienceYear`, `course`, `gender`, `age`, `adress`, `phoneNo`) VALUES
('2f816b2b-4618-11e9-acdc-c8d3fff0df35', 'rinkle mam', '827ccb0eea8a706c4c34a16891f84e7b', 'rinkle', 'mam', '11111', 'pata nahi', 'female', '50', 'dfvd', '1257865855'),
('8d1b54f8-46f7-11e9-a1b9-f82fa8dc38d8', 'test', '81dc9bdb52d04dc20036dbd8313ed055', 'rahul', 'grover', '5', 'MCA', 'male', '20', 'aaaaaaaaaaaaaaaaaa', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `questionId` varchar(500) NOT NULL,
  `courseId` varchar(500) DEFAULT NULL,
  `question` varchar(500) DEFAULT NULL,
  `optionOne` varchar(500) DEFAULT NULL,
  `optionTwo` varchar(500) DEFAULT NULL,
  `optionThree` varchar(500) DEFAULT NULL,
  `optionFour` varchar(500) DEFAULT NULL,
  `correctAns` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`questionId`, `courseId`, `question`, `optionOne`, `optionTwo`, `optionThree`, `optionFour`, `correctAns`) VALUES
('bb38c9bb-4702-11e9-a1b9-f82fa8dc38d8', NULL, 'What is Java', 'Programming', 'Scripting', 'Testing', 'Devloping', 1);

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `reusltId` varchar(500) NOT NULL,
  `courseId` varchar(500) DEFAULT NULL,
  `studentId` varchar(500) DEFAULT NULL,
  `marks` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `studentId` varchar(500) NOT NULL,
  `courseTypeId` varchar(500) DEFAULT NULL,
  `loginId` varchar(500) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL,
  `firstName` varchar(500) DEFAULT NULL,
  `lastName` varchar(500) DEFAULT NULL,
  `age` varchar(500) DEFAULT NULL,
  `phoneNo` varchar(500) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `gender` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`studentId`, `courseTypeId`, `loginId`, `password`, `firstName`, `lastName`, `age`, `phoneNo`, `address`, `gender`) VALUES
('a6017dd4-4712-11e9-a1b9-f82fa8dc38d8', '569e4ace-461f-11e9-acdc-c8d3fff0df35', 'rahulg59', '81dc9bdb52d04dc20036dbd8313ed055', 'Rahul', 'Grover', '20', 'male', 'bhaynder', '976676767');

-- --------------------------------------------------------

--
-- Table structure for table `student_course`
--

CREATE TABLE `student_course` (
  `relationId` varchar(500) NOT NULL,
  `studentId` varchar(500) DEFAULT NULL,
  `courseId` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_course`
--

INSERT INTO `student_course` (`relationId`, `studentId`, `courseId`) VALUES
('a63588f3-4712-11e9-a1b9-f82fa8dc38d8', 'a6017dd4-4712-11e9-a1b9-f82fa8dc38d8', '295068d8-470e-11e9-a1b9-f82fa8dc38d8'),
('a646b687-4712-11e9-a1b9-f82fa8dc38d8', 'a6017dd4-4712-11e9-a1b9-f82fa8dc38d8', '30512008-470e-11e9-a1b9-f82fa8dc38d8');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD KEY `fk_questionId1` (`questionId`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`courseId`),
  ADD KEY `fk_courseType` (`courseTypeId`);

--
-- Indexes for table `course_type`
--
ALTER TABLE `course_type`
  ADD PRIMARY KEY (`courseTypeId`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`facultyId`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`questionId`),
  ADD KEY `fk_course2` (`courseId`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`reusltId`),
  ADD KEY `fk_course3` (`courseId`),
  ADD KEY `fk_student2` (`studentId`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`studentId`),
  ADD KEY `fk_courseType1` (`courseTypeId`);

--
-- Indexes for table `student_course`
--
ALTER TABLE `student_course`
  ADD PRIMARY KEY (`relationId`),
  ADD KEY `fk_studentRelCourse` (`courseId`),
  ADD KEY `fk_courseRelStudent` (`studentId`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answer`
--
ALTER TABLE `answer`
  ADD CONSTRAINT `fk_questionId1` FOREIGN KEY (`questionId`) REFERENCES `question` (`questionId`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `fk_courseType` FOREIGN KEY (`courseTypeId`) REFERENCES `course_type` (`courseTypeId`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `fk_course2` FOREIGN KEY (`courseId`) REFERENCES `course` (`courseId`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `result`
--
ALTER TABLE `result`
  ADD CONSTRAINT `fk_course3` FOREIGN KEY (`courseId`) REFERENCES `course` (`courseId`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `fk_student2` FOREIGN KEY (`studentId`) REFERENCES `student` (`studentId`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `fk_courseType1` FOREIGN KEY (`courseTypeId`) REFERENCES `course_type` (`courseTypeId`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `student_course`
--
ALTER TABLE `student_course`
  ADD CONSTRAINT `fk_courseRelStudent` FOREIGN KEY (`studentId`) REFERENCES `student` (`studentId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_studentRelCourse` FOREIGN KEY (`courseId`) REFERENCES `course` (`courseId`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
