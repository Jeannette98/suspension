-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2021 at 07:22 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student suspension`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Username` varchar(255) NOT NULL,
  `Password` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Username`, `Password`) VALUES
('', '0'),
('', ''),
('', ''),
('', 'hjffjuhgftD'),
('', 'hjffjuhgftD'),
('', 'hjffjuhgftD'),
('Jeannete', 'jeane122sss'),
('kaline', 'Kaline23S'),
('hirwa', 'hirw22234Df'),
('sedrtyghu', 'dfgSD@23'),
('sedrtyghu', 'dfgSD@23');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Firstname` varchar(255) NOT NULL,
  `Lastname` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `College` varchar(255) NOT NULL,
  `School` varchar(255) NOT NULL,
  `Department` varchar(255) NOT NULL,
  `Yearofstudy` int(11) NOT NULL,
  `Academicyear` int(11) NOT NULL,
  `Startdate` date NOT NULL,
  `Enddate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Firstname`, `Lastname`, `Email`, `Gender`, `College`, `School`, `Department`, `Yearofstudy`, `Academicyear`, `Startdate`, `Enddate`) VALUES
('Dukuze', 'Ella', 'ange2gmail.com', 'Male', 'CMHS', 'Mental health', 'Mental health', 2, 233, '0000-00-00', '0000-00-00'),
('Ishimwe ', 'Joshua', 'neel@gmail.com', 'Male', 'CMHS', 'Mental health', 'CS', 2, 233, '0000-00-00', '0000-00-00'),
('Teta', 'Ange', 'ange@gmail.com', 'Female', 'CBE', 'Economics', 'Accounting', 3, 2021, '0000-00-00', '0000-00-00'),
('Teta', 'Ange', 'ange@gmail.com', 'Female', 'CBE', 'Economics', 'Accounting', 3, 2019, '0000-00-00', '0000-00-00'),
('Mucyo', 'Ella', 'nnn2@gmail.com', 'Female', 'CBE', 'Economics', 'finance', 2, 2019, '0000-00-00', '0000-00-00'),
('Ishimwe ', 'Joshua', 'nnn2@gmail.com', 'Male', 'CST', 'ICT', 'CS', 3, 2019, '0000-00-00', '0000-00-00'),
('Dukuze', 'Joshua', 'nnn2@gmail.com', 'Female', 'CBE', 'Economics', 'finance', 2, 2019, '2013-02-06', '2020-07-09');

-- --------------------------------------------------------

--
-- Table structure for table `studentlogin`
--

CREATE TABLE `studentlogin` (
  `Reg _no` int(11) NOT NULL,
  `Pin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
