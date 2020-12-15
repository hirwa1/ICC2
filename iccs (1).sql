-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 15, 2020 at 07:36 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iccs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `aid` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `passwords` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`aid`, `name`, `passwords`, `email`) VALUES
(1, 'developer', 'developer', 'developer@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `prob`
--

CREATE TABLE `prob` (
  `pid` int(11) NOT NULL,
  `content` varchar(1500) DEFAULT NULL,
  `dates` date DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  `uid2` int(11) NOT NULL,
  `provice` varchar(250) NOT NULL,
  `district` varchar(230) NOT NULL,
  `sector` varchar(200) NOT NULL,
  `title` varchar(250) NOT NULL,
  `respo` varchar(1200) NOT NULL,
  `redate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prob`
--

INSERT INTO `prob` (`pid`, `content`, `dates`, `uid`, `uid2`, `provice`, `district`, `sector`, `title`, `respo`, `redate`) VALUES
(1, 'cx df dfcvdfcvfdvfvsdsd', '2020-12-01', 1, 1, 'vds', 'sv', 'svsv', 'xcxxcx', 'murakoze', '2020-12-15'),
(2, 'efdf', '2020-12-20', 1, 3, 'dfdfd', 'fdfd', 'dfdfd', 'dfdfdf', '', '0000-00-00'),
(3, 'kjnk bkjnbjk', '2020-12-14', 1, 3, 'Kigali', 'Kicukiro', 'Kagarama', 'WANT TO LEARN WEB DEVELOPMENT IN 2020? HEREâ€™S WHAT YOU NEED TO KNOW!', '0000-00-00', '0000-00-00'),
(4, 'kjnk bkjnbjk', '2020-12-14', 1, 3, 'Kigali', 'Kicukiro', 'Kagarama', 'top 10 hacking skills', '0000-00-00', '0000-00-00'),
(5, 'kjnk bkjnbjk', '2020-12-15', 1, 3, 'Kigali', 'Kicukiro', 'Kagarama', 'top 10 hacking skills', 'murakoze', '2020-12-15');

-- --------------------------------------------------------

--
-- Table structure for table `resp`
--

CREATE TABLE `resp` (
  `rid` int(11) NOT NULL,
  `content` varchar(1500) DEFAULT NULL,
  `dates` date DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user1`
--

CREATE TABLE `user1` (
  `uid` int(11) NOT NULL,
  `fname` varchar(200) DEFAULT NULL,
  `lname` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `idno` varchar(200) DEFAULT NULL,
  `passwords` varchar(200) DEFAULT NULL,
  `province` varchar(200) DEFAULT NULL,
  `district` varchar(200) DEFAULT NULL,
  `sector` varchar(200) DEFAULT NULL,
  `tel` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user1`
--

INSERT INTO `user1` (`uid`, `fname`, `lname`, `email`, `idno`, `passwords`, `province`, `district`, `sector`, `tel`) VALUES
(1, 'xc', 'xc', 'xc', 'xcx', 'c', 'c', 'xc', 'xc', 'xcxc'),
(3, 'NIYIBIZI', 'HIRWA', 'hirwadeveloper@gmail.com', '123456', '123456', 'Kigali', 'Kicukiro', 'Kagarama', '123456'),
(4, 'developer group', 'HIRWA', 'hirwadeveloper@gmail.com', '11111', '11111', 'Kigali', 'Kicukiro', 'Kagarama', '11111');

-- --------------------------------------------------------

--
-- Table structure for table `user2`
--

CREATE TABLE `user2` (
  `uid` int(11) NOT NULL,
  `lname` varchar(200) DEFAULT NULL,
  `fname` varchar(200) DEFAULT NULL,
  `username` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `passwords` varchar(200) DEFAULT NULL,
  `province` varchar(200) DEFAULT NULL,
  `district` varchar(200) DEFAULT NULL,
  `sector` varchar(200) DEFAULT NULL,
  `stat` int(9) DEFAULT NULL,
  `dates` date DEFAULT NULL,
  `tel` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user2`
--

INSERT INTO `user2` (`uid`, `lname`, `fname`, `username`, `email`, `passwords`, `province`, `district`, `sector`, `stat`, `dates`, `tel`) VALUES
(1, 'sdserr', 'ferfre', 'erferfee', 'ferfere', 'rfreferf', 'erfrefer', 'erfrefere', 'rfref', 1, '2020-12-20', ''),
(2, 'HIRWA', 'NIYIBIZI', 'qwerty', 'hirwadeveloper@gmail.com', '123456', 'Kigali', 'Kicukiro', 'Kagarama', 1, '2020-12-14', '0789207778'),
(3, 'devid', 'rugamba', 'rugamba', 'david@gmail.com', '12345', 'Kigali', 'Kicukiro', 'Kagarama', 1, '2020-12-14', '1234567');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `prob`
--
ALTER TABLE `prob`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `uid` (`uid`),
  ADD KEY `uid2` (`uid2`);

--
-- Indexes for table `resp`
--
ALTER TABLE `resp`
  ADD PRIMARY KEY (`rid`),
  ADD KEY `pid` (`pid`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `user1`
--
ALTER TABLE `user1`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `user2`
--
ALTER TABLE `user2`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `prob`
--
ALTER TABLE `prob`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `resp`
--
ALTER TABLE `resp`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user1`
--
ALTER TABLE `user1`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user2`
--
ALTER TABLE `user2`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `prob`
--
ALTER TABLE `prob`
  ADD CONSTRAINT `prob_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user2` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `prob_ibfk_2` FOREIGN KEY (`uid2`) REFERENCES `user1` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `resp`
--
ALTER TABLE `resp`
  ADD CONSTRAINT `resp_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `prob` (`pid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `resp_ibfk_2` FOREIGN KEY (`uid`) REFERENCES `user2` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
