-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2023 at 07:18 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookapp`
--

CREATE TABLE `bookapp` (
  `AppoID` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  `studentID` int(11) NOT NULL,
  `teacherID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookapp`
--

INSERT INTO `bookapp` (`AppoID`, `Date`, `Time`, `studentID`, `teacherID`) VALUES
(65, '2022-05-18', '21:26:00', 123, 5),
(126, '2023-08-25', '12:07:00', 1, 3),
(342, '2022-05-11', '21:21:00', 123, 3),
(352, '2022-05-25', '19:31:00', 123, 4),
(357, '2022-05-20', '21:36:00', 123, 3),
(43534, '2022-05-17', '21:33:00', 123, 2);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `UserID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `ContactNumber` varchar(40) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`UserID`, `Name`, `Address`, `ContactNumber`, `Email`, `Password`) VALUES
(2, 'harshdeep', 'sirhind', '9865234548', 'hkaur12@gmail.com', 'd113ee607a6bf115382894c105460c5f'),
(65, 'Beant', 'brampton', '64458745', 'bkaur@gmail.com', '0bb7955bfd12a70b7c78e320699ab65f'),
(123, 'Komal ', 'Khanna ', '987567437 ', 'komal12@gmail.com ', '68673662afe234e2598220915639c3e2');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teacherID` int(11) NOT NULL,
  `teachername` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `ContactNumber` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacherID`, `teachername`, `email`, `Address`, `ContactNumber`, `password`, `subject`) VALUES
(1, 'Jaspreet Kaur', 'jkaur@gmail.com', 'Badali City', '0987652723', 'jkaur', 'english'),
(2, 'ManpreetKaur', 'mkaur123@gmail.com', 'Morinda', '9856324851', 'mkaur123', 'math'),
(3, 'Kamaldeep', 'kamaldeep@gmail.com', 'Mohali', '9863765438', 'kamal123', 'science'),
(4, 'Priya', 'priya12@gmail.com', 'Patiala', '659874526', 'priya123', 'socialscience'),
(5, 'Navdeep', 'navdeep12@gmail.com', 'Amloh', '6298735612', 'navdeep123', 'hindi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookapp`
--
ALTER TABLE `bookapp`
  ADD PRIMARY KEY (`AppoID`),
  ADD UNIQUE KEY `Time` (`Time`),
  ADD KEY `studentapp` (`studentID`),
  ADD KEY `teacherapp` (`teacherID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`UserID`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacherID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
