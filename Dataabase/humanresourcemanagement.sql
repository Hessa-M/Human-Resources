-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2016 at 10:09 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `humanresourcemanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `EID` int(10) NOT NULL,
  `Ename` varchar(30) CHARACTER SET latin1 NOT NULL,
  `EXT` int(5) NOT NULL,
  `Email` varchar(25) CHARACTER SET latin1 NOT NULL,
  `BriefJobDescription` varchar(50) CHARACTER SET latin1 NOT NULL,
  `Position` enum('admin','hr','employee','') CHARACTER SET latin1 NOT NULL,
  `Username` varchar(10) CHARACTER SET latin1 NOT NULL,
  `Password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`EID`, `Ename`, `EXT`, `Email`, `BriefJobDescription`, `Position`, `Username`, `Password`) VALUES
(1, 'MOHAMMAD ', 11111, 'MOHAMMAD@kacst.edu.sa', 'Admin', 'admin', 'MOHAMMAD01', 'password'),
(2, 'FUHAD ', 11112, 'FUHAD@kacst.edu.sa', 'HR ', 'hr', 'FUHAD02', 'password'),
(3, 'NAIF ', 11113, 'NAIF@kacst.edu.sa', 'Employee', 'employee', 'NAIF03', 'password'),
(4, 'SALEH', 12345, 'SALEH@kacst.edu.sa', 'employee', 'employee', 'SALEH', 'password'),
(5, 'FARES', 12367, 'FARES@kacst.edu.sa', 'Admin', 'admin', 'FARES', 'password'),
(6, 'KAHLED', 23456, 'KAHLED@kacst.edu.sa', 'EMPLOYEE', 'employee', 'KAHLED', 'password'),
(7, 'NASER', 9876, 'NASER@kacst.edu.sa', 'ADMIN', 'admin', 'NASER', 'password'),
(8, 'ALI ', 76890, 'ALI@Kacst.edu.sa', ' employee ', 'employee', 'ALI', 'password'),
(9, 'HAMED', 87086, 'HAMED@kacst.edu.sa', 'EMPLOYEE', 'employee', 'HAMED', 'password'),
(10, 'FERAS', 78987, 'FERAS@kacst.edu.sa', 'ADMIN', 'admin', 'FERAS', 'password'),
(11, 'f', 12389, 'f@kacst.edu.sa', 'admin', 'admin', 'f', 'password'),
(12, 's', 12388, 's@kacst.edu.sa', 'employee', 'employee', 's', 'password'),
(13, 'q', 12387, 'q@kacst.edu.sa', 'employee', 'employee', 'q', 'password'),
(14, 'w', 12386, 'w@kacst.edu.sa', 'admin', 'admin', 'w', 'password'),
(15, 'jjnfx', 12385, 'jjnfx@kacst.edu.sa', 'employee', 'employee', 'jjnfx', 'password'),
(16, 'ss', 12384, 'ss@kacst.edu.sa', 'employee', 'employee', 'ss', 'password'),
(17, 'fg', 12383, 'fg@kacst.edu.sa', 'employee', 'employee', 'fg', 'password'),
(18, 'js', 12392, 'js@kacst.edu.sa', 'employee', 'employee', 'js', 'password'),
(19, 'ww', 12382, 'ww@kacst.edu.sa', 'admin', 'admin', 'ww', 'password'),
(20, 'jt', 12381, 'jt@kacst.edu.sa', 'employee', 'employee', 'jt', 'password'),
(21, 'tt', 12390, 'tt@kacst.edu.sa', 'employee', 'employee', 'tt', 'password'),
(22, 'yy', 12380, 'yy@kacst.edu.sa', 'admin', 'admin', 'yy', 'password'),
(23, 'ggh', 99999, 'ggh@kacst.edu.sa', 'employee', 'employee', 'ggh', 'password'),
(24, 'dfdf', 78654, 'dfdf@Kacst.edu.sa', ' EMPLYEE', 'employee', 'dfdf', 'password'),
(25, 'WALEED', 97658, 'WALEED@KACST.EDU.SA', 'employee', 'employee', 'WALEED', 'password'),
(26, 'NOUAF', 49765, 'NOUAF@KACST.EDU.SA', 'ADMIN', 'admin', 'NOUAF', 'password'),
(27, 'MUHANNA', 49765, 'MUHANNA@KACST.EDU.SA', 'ADMIN', 'admin', 'MUHANNA', 'password'),
(28, 'name', 98976, 'name@kacst.edu.sa', 'employee', 'employee', 'name', 'password'),
(34, 'fahad', 76438, 'fahad@kacst.edu.sa', 'employee', 'employee', 'fahad', 'password'),
(35, 'h', 73757, 'h@kacst.edu.sa', 'employee', 'employee', 'h', 'password'),
(36, 'add', 87654, 'add@kacst.edu.sa', 'employee', 'employee', 'add', 'password'),
(37, 'name', 11223, 'n@kacst.edu.sa', 'm', 'employee', 'n', 'password'),
(38, 'kl', 87987, 'kl@kacst.edu.sa', 'employee', 'employee', 'kl', 'password'),
(39, 'g', 34567, 'ad6d@kacst.edu.sa', 'j', 'admin', 'ad6d', 'password'),
(40, 'jk', 99987, 'jk@kacst.edu.sa', 'employee', 'employee', 'jk', 'password'),
(41, 'gi', 34567, 'ad6jd@kacst.edu.sa', 'jj', 'admin', 'ad6jd', 'password'),
(42, 'giu', 34567, 'adk6jd@kacst.edu.sa', 'jj', 'admin', 'adk6jd', 'password'),
(44, 'giujs', 34567, 'adks6jd@kacst.edu.sa', 'jj', 'admin', 'adks6jd', 'password'),
(45, 'lo', 98765, 'lo@kacst.edu.sa', 'employee', 'employee', 'lo', 'password'),
(46, 'giujsa', 34567, 'adkas6jd@kacst.edu.sa', 'jj', 'admin', 'adkas6jd', 'password'),
(47, 'giujsaa', 34567, 'adkaas6jd@kacst.edu.sa', 'jj', 'admin', 'adkaas6jd', 'password'),
(48, 'giujsaaj', 34567, 'adkaas6kjd@kacst.edu.sa', 'jj', 'admin', 'adkaas6kjd', 'password'),
(49, 'hhh', 76539, 'hhhh@kacst.edu.sa', 'employee', 'employee', 'hhhh', 'password'),
(50, 'nmn', 87654, 'mknm@kacst.edu.sa', 'employee', 'employee', 'mknm', 'password'),
(51, 'nmen', 87754, 'mkdnm@kacst.edu.sa', 'employee', 'employee', 'mkdnm', 'password'),
(52, 'name', 11111, 'adnn@kacst.edu.sa', 'mm', 'employee', 'adnn', 'password'),
(53, 'name', 12323, 'ad76d@kacst.edu.sa', 'mmn', 'employee', 'ad76d', 'password'),
(54, 'name', 12345, 'ad68d@kacst.edu.sa', 'mm', 'employee', 'ad68d', 'password'),
(55, 'name', 12345, 'ad69d@kacst.edu.sa', 'mm', 'employee', 'ad69d', 'password'),
(56, 'gg', 87654, 'gg@kacst.edu.sa', 'employee', 'employee', 'gg', 'password'),
(57, 'mm', 76768888, 'mm@kacst.edu.sa', 'Admin', 'admin', 'mm', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `MID` int(10) NOT NULL,
  `MTo` int(10) NOT NULL,
  `Content` tinytext CHARACTER SET latin1 NOT NULL,
  `EID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`MID`, `MTo`, `Content`, `EID`) VALUES
(1, 2, 'Hello \r\nNAIF ', 3),
(2, 3, 'Good morning\r\nFUHAD', 2),
(3, 2, 'HELLO 2', 3),
(4, 3, 'HELLO 3', 2),
(5, 12, 'HELLO 12', 2),
(6, 16, 'HELLO 16', 2),
(7, 2, 'HELLO 2', 10),
(8, 10, 'HELLO 10', 2),
(9, 2, 'HELLO 2', 9),
(10, 9, 'HELLO 9 ', 2),
(11, 2, 'HELLO 2', 6),
(12, 6, 'HELLO 6', 2),
(13, 2, 'hello 2', 24),
(14, 2, 'Hello 2', 20),
(15, 2, 'HELLO 2', 18),
(16, 3, 'hello', 2),
(17, 3, 'no', 2),
(18, 2, 'HELLO 2', 27),
(19, 27, 'HELLO 27 ', 2),
(20, 3, 'HELLO', 2),
(21, 3, 'good morning', 2),
(22, 3, 'hhh', 2),
(23, 3, 'hello', 2),
(24, 3, 'hhi', 2),
(25, 3, 'nnn', 2),
(26, 3, 'hh', 2),
(27, 3, 'hello', 2),
(28, 2, 'hello', 3),
(29, 26, 'HELLO 26', 2),
(30, 2, 'HELLO 2', 26),
(31, 15, 'hello', 2),
(32, 2, 'hello', 3),
(33, 6, 'hello', 2),
(34, 6, 'hello', 2),
(35, 2, 'good morning ', 6),
(36, 2, ' hh', 6),
(37, 2, ' nn', 6),
(38, 3, 'j', 2),
(39, 6, 't', 2);

-- --------------------------------------------------------

--
-- Table structure for table `purchaseorder`
--

CREATE TABLE `purchaseorder` (
  `OID` int(10) NOT NULL,
  `Date` date NOT NULL,
  `ReplyStatus` enum('Start','Accept','Reject') NOT NULL,
  `Content` tinytext NOT NULL,
  `comment` tinytext NOT NULL,
  `EID` int(10) NOT NULL,
  `RID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `purchaseorder`
--

INSERT INTO `purchaseorder` (`OID`, `Date`, `ReplyStatus`, `Content`, `comment`, `EID`, `RID`) VALUES
(1, '2016-05-29', 'Accept', '', '', 3, 2),
(2, '2016-02-14', 'Accept', '', '', 3, 3),
(3, '2016-02-14', 'Reject', '', '', 3, 4),
(4, '2016-05-01', 'Accept', '', '', 6, 2),
(5, '2016-04-14', 'Reject', '', '', 6, 3),
(6, '2016-06-11', 'Start', '', '', 6, 1),
(7, '2016-01-10', 'Accept', '', '', 20, 2),
(8, '2016-05-14', 'Reject', '', '', 20, 3),
(9, '2016-07-11', 'Accept', '', '9 acc', 20, 1),
(10, '2016-09-10', 'Accept', '', '', 11, 2),
(11, '2016-04-14', 'Reject', '', '', 11, 3),
(12, '2016-04-11', 'Start', '', '', 11, 1),
(13, '2016-03-10', 'Reject', '', ' ', 1, 2),
(14, '2016-07-14', 'Start', '', '', 1, 3),
(15, '2016-03-11', 'Accept', '', 'hhhh', 1, 1),
(16, '2016-03-10', 'Accept', '', '', 6, 1),
(17, '2016-04-14', 'Reject', '', '', 6, 4),
(18, '2016-07-27', 'Start', '', '', 9, 1),
(19, '2016-07-20', 'Accept', 'mm', '', 3, 2),
(20, '2016-07-27', 'Reject', 'hh', '', 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `resource`
--

CREATE TABLE `resource` (
  `RID` int(10) NOT NULL,
  `Type` varchar(10) CHARACTER SET latin1 NOT NULL,
  `Quantity` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `resource`
--

INSERT INTO `resource` (`RID`, `Type`, `Quantity`) VALUES
(1, 'ink', 0),
(2, 'paper', 0),
(3, 'PC', 0),
(4, 'printer', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`EID`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`MID`),
  ADD KEY `EID` (`EID`);

--
-- Indexes for table `purchaseorder`
--
ALTER TABLE `purchaseorder`
  ADD PRIMARY KEY (`OID`),
  ADD UNIQUE KEY `OID` (`OID`),
  ADD KEY `purchaseorder_ibfk_1` (`EID`),
  ADD KEY `purchaseorder_ibfk_2` (`RID`);

--
-- Indexes for table `resource`
--
ALTER TABLE `resource`
  ADD PRIMARY KEY (`RID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `EID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `MID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `purchaseorder`
--
ALTER TABLE `purchaseorder`
  MODIFY `OID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `resource`
--
ALTER TABLE `resource`
  MODIFY `RID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_ibfk_1` FOREIGN KEY (`EID`) REFERENCES `employee` (`EID`);

--
-- Constraints for table `purchaseorder`
--
ALTER TABLE `purchaseorder`
  ADD CONSTRAINT `purchaseorder_ibfk_1` FOREIGN KEY (`EID`) REFERENCES `employee` (`EID`),
  ADD CONSTRAINT `purchaseorder_ibfk_2` FOREIGN KEY (`RID`) REFERENCES `resource` (`RID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
