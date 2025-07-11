-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 02, 2023 at 04:35 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `aId` int NOT NULL AUTO_INCREMENT,
  `aName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(16) NOT NULL,
  `contactNo` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(10) NOT NULL,
  PRIMARY KEY (`aId`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aId`, `aName`, `email`, `password`, `contactNo`, `address`, `city`) VALUES
(1, 'sarthak bhuptani', 'mrsarthak825@gmail.com', 'sarthak123', '7436059291', 'vidhya nager', 'Ananad'),
(2, 'ravi rathod', 'ravi123@gmail.com', '12345678', '1234567890', 'vv nager', 'vv nager');

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

DROP TABLE IF EXISTS `author`;
CREATE TABLE IF NOT EXISTS `author` (
  `aId` int NOT NULL AUTO_INCREMENT,
  `author` varchar(40) NOT NULL,
  `email` varchar(25) NOT NULL,
  `contactNo` varchar(10) NOT NULL,
  `city` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  PRIMARY KEY (`aId`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`aId`, `author`, `email`, `contactNo`, `city`, `address`) VALUES
(2, 'Danielle steel', 'Dnielle22@gmail.com', '2345666678', 'New york', 'Post office 470130, san Francisco, califorina'),
(4, 'Tulsidas', 'Tulsi44@gmail.com', '1234567780', 'uttarprade', 'Rajapur'),
(5, 'Agatha Christie ', 'Agatha3@gmail.com', '5673873267', 'UK', 'Greenway Road ,king swear, Brixham TQS OES '),
(6, 'William shakespeare', 'William33@gmail.com', '5673873267', 'England', 'Henley street, strat ford'),
(7, 'Barbara cartland', 'Barbara43@gmail.com', '8745012652', 'England', 'camfield place,near Hatfield'),
(8, 'A P J Abdulkalam', 'Adbul21@gmail.com', '1234567890', 'Tamilnadu', 'Rameswaram'),
(9, 'Danielle steel', 'Dnielle22@gmail.com', '7436059291', 'New york', 'Post office 470130,san francisco'),
(10, 'Barbara cartland', 'Barb 23@gmail.com', '7436059291', 'New york', 'Camfield  place,near Hatfield'),
(11, 'Danielle  steel', 'Danielle22@gmail.com', '5555555590', 'New york', 'Post office 470130,san francisco'),
(12, 'mohan rakesh', 'mohan64@gmail.com', '5555555590', 'Amritsar', 'mohan nagar, Amritsar'),
(14, 'Bhagat singh', 'bhagat12@gmail.com', '7436059291', 'haryana', 'dcdcdc'),
(15, 'charles Darwin', 'charles13@gmail.com', '5673873267', 'anand', 'test'),
(16, 'Vikram seth', 'vikram16@gmail.com', '1236789098', 'calcutta', 'near golden gate calcutta'),
(17, 'Louis Fischer', 'Louis17@gmail.com', '3452672187', 'Philadelph', 'Phili street');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
CREATE TABLE IF NOT EXISTS `books` (
  `bId` int NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `author` varchar(40) NOT NULL,
  `page` int NOT NULL,
  `price` int NOT NULL,
  `stock` int NOT NULL,
  PRIMARY KEY (`bId`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`bId`, `title`, `author`, `page`, `price`, `stock`) VALUES
(1, 'The Gift', '2', 569, 599, 8),
(3, 'Matters of the heart', '2', 300, 300, 7),
(4, 'impossible', '2', 300, 500, 0),
(6, 'Ramcharitmanas', '4', 765, 456, 8),
(9, 'Gitavali', '4', 567, 900, 6),
(11, 'kavitavali', '4', 123, 345, 7),
(31, 'Three Act tragedy', '5', 234, 567, 5),
(32, 'N or M ?', '5', 678, 777, 7),
(33, 'Endless Night', '5', 456, 456, 45),
(34, 'Five little pigs ', '5', 456, 458, 10),
(35, 'Mission  of India', '8', 111, 58, 10),
(36, 'Wings of fire', '8', 122, 80, 10),
(37, 'The Luminous sparks', '8', 160, 99, 6),
(38, 'An introduction of dream land', '2', 111, 5, 6),
(39, 'Letter to father', '12', 127, 85, 8),
(40, 'NO hanging  ,please shoot us', '14', 136, 77, 10),
(41, 'Words of freedom', '14', 153, 77, 8),
(42, 'Shakuntal', '12', 177, 99, 2),
(43, 'Aadhe adhure', '12', 180, 55, 2),
(44, 'Purvabhyas', '12', 122, 66, 6),
(45, 'The  Descent of man', '15', 678, 99, 3),
(46, 'Darwin', '15', 122, 77, 6),
(47, 'on natural selection', '15', 678, 44, 7),
(48, 'A suitable boy', '16', 22, 99, 7),
(49, 'A suitable girl', '16', 111, 77, 6),
(50, 'The golden gate', '16', 88, 22, 7),
(51, 'Gandhi', '17', 456, 76, 9),
(52, 'mahatma gandhi', '17', 89, 50, 4),
(53, 'Men and politics', '17', 122, 50, 6),
(54, 'janki mangal', '4', 67, 6, 6),
(55, 'Blue', '2', 100, 56, 9),
(56, 'Death on nile', '5', 68, 77, 8),
(57, 'othello', '6', 199, 72, 2),
(58, 'Lost Laughter', '10', 512, 600, 10);

-- --------------------------------------------------------

--
-- Table structure for table `issue_book`
--

DROP TABLE IF EXISTS `issue_book`;
CREATE TABLE IF NOT EXISTS `issue_book` (
  `iId` int NOT NULL AUTO_INCREMENT,
  `sId` int NOT NULL,
  `bId` int NOT NULL,
  `aId` int NOT NULL,
  `iBook` varchar(30) NOT NULL,
  `stock` int NOT NULL,
  `iDate` date NOT NULL,
  `dDate` date NOT NULL,
  `rDate` date NOT NULL,
  PRIMARY KEY (`iId`),
  KEY `sId` (`sId`),
  KEY `bId` (`bId`),
  KEY `aId` (`aId`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issue_book`
--

INSERT INTO `issue_book` (`iId`, `sId`, `bId`, `aId`, `iBook`, `stock`, `iDate`, `dDate`, `rDate`) VALUES
(1, 16, 1, 2, '', 0, '2023-05-02', '2023-05-03', '2023-05-04'),
(2, 18, 3, 2, '', 0, '2023-05-05', '2023-05-06', '2023-05-07');

-- --------------------------------------------------------

--
-- Table structure for table `issue_request`
--

DROP TABLE IF EXISTS `issue_request`;
CREATE TABLE IF NOT EXISTS `issue_request` (
  `id` int NOT NULL AUTO_INCREMENT,
  `bId` int NOT NULL,
  `status` tinyint NOT NULL DEFAULT '0',
  `sId` int NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `returndate` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `bId` (`bId`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issue_request`
--

INSERT INTO `issue_request` (`id`, `bId`, `status`, `sId`, `created`, `returndate`) VALUES
(21, 3, 1, 37, '2023-06-20 18:51:03', '2023-06-23'),
(23, 11, 1, 37, '2023-07-02 08:52:09', '2023-07-05');

-- --------------------------------------------------------

--
-- Table structure for table `librarian`
--

DROP TABLE IF EXISTS `librarian`;
CREATE TABLE IF NOT EXISTS `librarian` (
  `lId` int NOT NULL AUTO_INCREMENT,
  `LName` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(16) NOT NULL,
  `contactNo` varchar(10) NOT NULL,
  `city` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `otp` varchar(4) NOT NULL,
  PRIMARY KEY (`lId`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `librarian`
--

INSERT INTO `librarian` (`lId`, `LName`, `email`, `password`, `contactNo`, `city`, `address`, `otp`) VALUES
(1, 'jay', 'jenil123@gmail.com', '123', '7436059291', 'dfdfd', 'refrfrf', '5333'),
(2, 'sgchcbd', 'sarthakbhuptani16@gmail.com', '123', '5673873267', 'fefef', 'derer', ''),
(3, 'sarthak', 'mrsarthak@gmail.com', '4321', '7436059291', 'una', 'test', '6904'),
(4, 'Arpit Bhuptani', 'test1@gmail', 'dd', '33456789', 'fdffd', 'sdsdsdsd', '');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `sId` int NOT NULL AUTO_INCREMENT,
  `sName` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(16) NOT NULL,
  `contactNo` varchar(10) NOT NULL,
  `city` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `otp` varchar(4) NOT NULL,
  PRIMARY KEY (`sId`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sId`, `sName`, `email`, `password`, `contactNo`, `city`, `address`, `otp`) VALUES
(16, 'ravi', 'ravi@gmail.com', 'zxcv', '7436059291', 'una', 'patel society,una', '9217'),
(18, 'mahir', 'mahirmakecha@gmail.com', '234', '5673873267', 'Anand ', 'vallabh vidhyanager,bakrol', ''),
(22, 'jinal', 'jinal123@gmail.com', '1234', '1234567891', 'junagadh', 'lal darvaja,junagadh', ''),
(23, 'hkp123', 'sarthak123@gmail.com', '1234', '7436059291', 'jhjdfd', 'frgrgrh', ''),
(24, 'arpit', 'arpit123@gmail.com', '12345', '7436059291', 'una', 'ihdjbjdbfcjb', '9465'),
(26, 'mann', 'mrsarthak1@gmail.com', '12345', '1231111111', 'vvn', 'kasd', ''),
(30, 'mahir', 'jenil1283@gmail.com', 'ASDQ1345', '5673873267', 'bagdu', 'dcdcdc', ''),
(31, 'gghgh', 'cdcdcdd@gmail.com', '12345767', '5673873267', 'efgggg', 'gfghgh', ''),
(32, 'gcttc', 'test@gmailll.com', '12345678', '7436059291', 'anand', 'bbjdbfdbfhg', ''),
(33, 'mann shah', 'mann1234@gmail.com', '12345678', '7623737377', 'sdf', 'fwgsdg', ''),
(34, 'nirbhay ', 'nirbhay635@gmail.com', '12345678', '8141925021', 'bhuj', 'wddsfdfsfxfxfxf', ''),
(35, 'fiza', 'fizashaikh0809@gmail.com', '12345', '9898780472', 'Anand', 'vallbh vidhyanager,Ananad', '2758'),
(36, 'jay thakker', 'jaythakker@gmail.com', 'jay12345', '9876543210', 'vvn', 'vvn', ''),
(37, 'sarthak Bhuptani', 'mrsarthak825@gmail.com ', '12345678', '7436059291', 'una', 'gir somnath', ''),
(38, 'Dharam', 'dharamsomaiya123@gmail.com', 'dharam12', '9081141431', 'Surat', '309', '');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `issue_book`
--
ALTER TABLE `issue_book`
  ADD CONSTRAINT `issue_book_ibfk_1` FOREIGN KEY (`sId`) REFERENCES `student` (`sId`),
  ADD CONSTRAINT `issue_book_ibfk_2` FOREIGN KEY (`bId`) REFERENCES `books` (`bId`),
  ADD CONSTRAINT `issue_book_ibfk_3` FOREIGN KEY (`aId`) REFERENCES `author` (`aId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
