-- phpMyAdmin SQL Dump
-- version 2.11.2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 21, 2022 at 01:26 AM
-- Server version: 5.0.45
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `jobs`
--

-- --------------------------------------------------------

--
-- Table structure for table `apply`
--

CREATE TABLE `apply` (
  `aid` int(11) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `percentage` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `resume` varchar(100) NOT NULL,
  `jid` int(11) NOT NULL,
  `duration` varchar(100) NOT NULL,
  `cid` int(11) NOT NULL,
  PRIMARY KEY  (`jid`,`email`,`mobile`),
  UNIQUE KEY `aid` (`aid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `apply`
--

INSERT INTO `apply` (`aid`, `name`, `dob`, `email`, `mobile`, `qualification`, `percentage`, `title`, `resume`, `jid`, `duration`, `cid`) VALUES
(1, 'Maaz Shamim', '1997-11-16', 'maaz@gmail.com', '9410613216', 'BCA', 89, '', 'BMW2.jpg', 1, '2019-05-16 10:29:54', 6);

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `cid` int(11) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL,
  `founder` varchar(100) NOT NULL,
  `founded` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `pic` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `services` varchar(100) NOT NULL,
  `duration` varchar(200) NOT NULL,
  `status` varchar(100) NOT NULL default 'Active',
  UNIQUE KEY `cid` (`cid`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`cid`, `name`, `founder`, `founded`, `email`, `password`, `pic`, `address`, `services`, `duration`, `status`) VALUES
(6, 'Wipro', 'Mr Wipro', '2000-01-01', 'wipro@gmail.com', '123@123', '6.jpeg', 'Noida', 'IT', '2019-05-14 00:44:49', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(200) NOT NULL,
  `duration` varchar(100) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `contact`
--


-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `jid` int(11) NOT NULL auto_increment,
  `cname` varchar(100) NOT NULL default 'NA',
  `title` varchar(100) NOT NULL default 'NA',
  `salary` int(11) NOT NULL,
  `idate` varchar(100) NOT NULL default 'NA',
  `pdate` varchar(100) NOT NULL default 'NA',
  `location` varchar(100) NOT NULL default 'NA',
  `mobile` varchar(100) NOT NULL default 'NA',
  `email` varchar(100) NOT NULL default 'NA',
  `cperson` varchar(100) NOT NULL default 'NA',
  `vacancy` varchar(100) NOT NULL default 'NA',
  `description` longtext,
  `qualification` varchar(200) NOT NULL default 'NA',
  `percentage` varchar(100) NOT NULL default 'NA',
  `skills` varchar(200) NOT NULL default 'NA',
  `duration` varchar(100) NOT NULL default 'NA',
  `cid` int(11) default NULL,
  `status` varchar(100) NOT NULL default 'Not Active',
  `category` varchar(100) NOT NULL default 'NA',
  `pic` varchar(100) NOT NULL default 'NA',
  PRIMARY KEY  (`cname`,`title`),
  UNIQUE KEY `jid` (`jid`),
  KEY `job` (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`jid`, `cname`, `title`, `salary`, `idate`, `pdate`, `location`, `mobile`, `email`, `cperson`, `vacancy`, `description`, `qualification`, `percentage`, `skills`, `duration`, `cid`, `status`, `category`, `pic`) VALUES
(2, 'Wipro', 'Engineer', 25000, 'NA', 'NA', 'noida', '1234567890', 'wipro@gmail.com', 'andbchv', 'NA', NULL, 'NA', 'NA', 'NA', 'NA', 6, 'Not Active', 'NA', '6.jpeg'),
(3, 'Wipro', 'Engineer Analyst', 50000, 'NA', 'Monday, 27 December, 2021', 'Noida', '1234567890', 'wipro@gmail.com', 'HR ', '2', 'Analyst', 'NA', '50', 'NA', 'NA', 6, 'Not Active', 'NA', '6.jpeg'),
(1, 'Wipro', 'Ways Program', 30000, 'NA', 'Friday, 24 December, 2021', 'Noida\r\n', '1023569874', 'wipro@gmail.com', 'HR of the Company', '5', 'Urgent Requirement', 'BCA', '65', 'NA', 'NA', 6, 'Active', 'Telecommunication', 'Innova3.jpg');

-- --------------------------------------------------------

--
-- Stand-in structure for view `jobinfo`
--
CREATE TABLE `jobinfo` (
`sid` int(11)
,`sname` varchar(100)
,`dob` varchar(100)
,`gender` varchar(100)
,`semail` varchar(100)
,`squalification` varchar(100)
,`spic` varchar(100)
,`saddress` varchar(100)
,`smobile` varchar(100)
,`sstatus` varchar(100)
,`resume` varchar(200)
,`jid` int(11)
,`cname` varchar(100)
,`title` varchar(100)
,`salary` int(11)
,`idate` varchar(100)
,`pdate` varchar(100)
,`mobile` varchar(100)
,`jemail` varchar(100)
,`email` varchar(100)
,`vacancy` varchar(100)
,`description` longtext
,`skills` varchar(200)
,`category` varchar(100)
,`pic` varchar(100)
);
-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `sid` int(11) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `pic` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `duration` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL default 'NA',
  `status` varchar(100) NOT NULL default 'Active',
  `resume` varchar(200) NOT NULL default 'NA',
  UNIQUE KEY `sid` (`sid`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sid`, `name`, `dob`, `gender`, `email`, `password`, `qualification`, `pic`, `address`, `duration`, `mobile`, `status`, `resume`) VALUES
(4, 'Maaz Shamim', '1997-11-16', 'on', 'maaz@gmail.com', '123@123', 'BCA', '7.jpeg', 'D1 FIRST FLOOR, SHAHAB RESIDENCY, NIZAMI PULIA, NEW SIR SYED NAGAR', '2019-05-14 00:45:35', '9410613216', 'Active', 'NA');

-- --------------------------------------------------------

--
-- Structure for view `jobinfo`
--
DROP TABLE IF EXISTS `jobinfo`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `jobs`.`jobinfo` AS select `jobs`.`student`.`sid` AS `sid`,`jobs`.`student`.`name` AS `sname`,`jobs`.`student`.`dob` AS `dob`,`jobs`.`student`.`gender` AS `gender`,`jobs`.`student`.`email` AS `semail`,`jobs`.`student`.`qualification` AS `squalification`,`jobs`.`student`.`pic` AS `spic`,`jobs`.`student`.`address` AS `saddress`,`jobs`.`student`.`mobile` AS `smobile`,`jobs`.`student`.`status` AS `sstatus`,`jobs`.`student`.`resume` AS `resume`,`jobs`.`job`.`jid` AS `jid`,`jobs`.`job`.`cname` AS `cname`,`jobs`.`job`.`title` AS `title`,`jobs`.`job`.`salary` AS `salary`,`jobs`.`job`.`idate` AS `idate`,`jobs`.`job`.`pdate` AS `pdate`,`jobs`.`job`.`mobile` AS `mobile`,`jobs`.`job`.`email` AS `jemail`,`jobs`.`job`.`email` AS `email`,`jobs`.`job`.`vacancy` AS `vacancy`,`jobs`.`job`.`description` AS `description`,`jobs`.`job`.`skills` AS `skills`,`jobs`.`job`.`category` AS `category`,`jobs`.`job`.`pic` AS `pic` from (`jobs`.`student` join `jobs`.`job` on((`jobs`.`student`.`qualification` = `jobs`.`job`.`qualification`)));

--
-- Constraints for dumped tables
--

--
-- Constraints for table `apply`
--
ALTER TABLE `apply`
  ADD CONSTRAINT `apply_ibfk_1` FOREIGN KEY (`jid`) REFERENCES `job` (`jid`);

--
-- Constraints for table `job`
--
ALTER TABLE `job`
  ADD CONSTRAINT `job_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `company` (`cid`);
