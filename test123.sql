-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2019 at 07:25 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test123`
--

-- --------------------------------------------------------

--
-- Table structure for table `profesijas`
--

CREATE TABLE `profesijas` (
  `Profesijas_ID` int(11) NOT NULL,
  `Profesija` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profesijas`
--

INSERT INTO `profesijas` (`Profesijas_ID`, `Profesija`) VALUES
(1, 'Stradnieks'),
(2, 'Programetajs'),
(3, 'Setnieks'),
(4, 'Galdnieks');

-- --------------------------------------------------------

--
-- Table structure for table `table1`
--

CREATE TABLE `table1` (
  `ID` int(11) NOT NULL,
  `Vards` varchar(254) NOT NULL,
  `Uzvards` varchar(254) NOT NULL,
  `Profesija` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table1`
--

INSERT INTO `table1` (`ID`, `Vards`, `Uzvards`, `Profesija`) VALUES
(1, 'es', 'ty', 4),
(2, 'es', 'strada', 1),
(3, 'Vecais', 'Tjobis', 1),
(4, 'es', 'ty', 3),
(5, 'Vecais', 'Tjobis', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `profesijas`
--
ALTER TABLE `profesijas`
  ADD PRIMARY KEY (`Profesijas_ID`);

--
-- Indexes for table `table1`
--
ALTER TABLE `table1`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `profesijas`
--
ALTER TABLE `profesijas`
  MODIFY `Profesijas_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `table1`
--
ALTER TABLE `table1`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
