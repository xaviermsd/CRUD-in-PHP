-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2020 at 07:12 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_practice`
--

-- --------------------------------------------------------

--
-- Table structure for table `regi_form`
--

CREATE TABLE `regi_form` (
  `ID` int(100) NOT NULL,
  `First Name` varchar(20) NOT NULL,
  `Last Name` varchar(20) NOT NULL,
  `Company` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone` varchar(12) NOT NULL,
  `Subject` varchar(20) NOT NULL,
  `Technologies` varchar(100) NOT NULL,
  `Developer` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regi_form`
--

INSERT INTO `regi_form` (`ID`, `First Name`, `Last Name`, `Company`, `Email`, `Phone`, `Subject`, `Technologies`, `Developer`) VALUES
(1, 'Harsh', 'Prajapati', 'Indylogix Solution', 'harshprajapati34@gmail.com', '09898528376', 'Subject 1', 'MEAN,MERN,', 'Yes'),
(2, 'Ishwarbhai', 'Prajapati', 'Indylogix Solution', 'ishwarbhaimanabhai@gmail.com', '09428194229', 'Subject 3', 'MERN,FULL STACK DEVELOPER,', 'No'),
(3, 'Ishwarbhai', 'Prajapati', 'Gujarat State Road Transport Corporation [GSRTC]', 'ishwarbhaimanabhai@gmail.com', '09428194229', 'Subject 2', 'MEAN,MERN,', 'Yes'),
(4, 'Harsh', 'Prajapati', 'Indylogix Solution', 'harshprajapati34@gmail.com', '09898528376', 'Subject 3', 'MEAN,MERN,', 'No'),
(5, 'Harsh', 'Prajapati', 'Gujarat State Road Transport Corporation [GSRTC]', 'harshprajapati34@gmail.com', '09898528376', 'Subject 1', 'MEAN,MERN,', 'No'),
(6, 'Harsh', 'Prajapati', 'Indylogix Solution', 'harshprajapati34@gmail.com', '09898528376', 'Subject 3', 'FULL STACK DEVELOPER,', 'Yes'),
(7, 'Harsh', 'Prajapati', 'Indylogix Solution', 'harshprajapati34@gmail.com', '09898528376', 'Subject 3', 'MEAN,', 'No'),
(8, 'Harsh', 'Prajapati', 'Indylogix Solution', 'harshprajapati34@gmail.com', '09898528376', 'Subject 3', 'FULL STACK DEVELOPER,', 'Yes'),
(10, 'Harsh', 'Prajapati', 'Gujarat State Road Transport Corporation [GSRTC]', 'harshprajapati34@gmail.com', '09898528376', 'Subject 1', 'FULL STACK DEVELOPER,WORDPRESS,UX/UI,', 'Yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `regi_form`
--
ALTER TABLE `regi_form`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `regi_form`
--
ALTER TABLE `regi_form`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
