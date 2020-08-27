-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 27, 2020 at 02:41 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rotary`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_articles`
--

CREATE TABLE `tbl_articles` (
  `AID` int(11) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Description` varchar(70) NOT NULL,
  `Content` longtext NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_articles`
--

INSERT INTO `tbl_articles` (`AID`, `Title`, `Description`, `Content`, `Date`) VALUES
(1, 'Honors knight', 'Some description of the text idk', 'soghspoajgbkajsbgabdsgjkpasdbgjkbasejkgfbsgisebasoghspoajgbkajsbgabdsgjkpasdbgjkbasejkgfbsgisebasoghspoajgbkajsbgabdsgjkpasdbgjkbasejkgfbsgisebasoghspoajgbkajsbgabdsgjkpasdbgjkbasejkgfbsgisebasoghspoajgbkajsbgabdsgjkpasdbgjkbasejkgfbsgisebasoghspoajgbkajsbgabdsgjkpasdbgjkbasejkgfbsgisebasoghspoajgbkajsbgabdsgjkpasdbgjkbasejkgfbsgisebasoghspoajgbkajsbgabdsgjkpasdbgjkbasejkgfbsgisebasoghspoajgbkajsbgabdsgjkpasdbgjkbasejkgfbsgisebasoghspoajgbkajsbgabdsgjkpasdbgjkbasejkgfbsgisebasoghspoajgbkajsbgabdsgjkpasdbgjkbasejkgfbsgisebasoghspoajgbkajsbgabdsgjkpasdbgjkbasejkgfbsgisebasoghspoajgbkajsbgabdsgjkpasdbgjkbasejkgfbsgisebasoghspoajgbkajsbgabdsgjkpasdbgjkbasejkgfbsgisebasoghspoajgbkajsbgabdsgjkpasdbgjkbasejkgfbsgisebasoghspoajgbkajsbgabdsgjkpasdbgjkbasejkgfbsgisebasoghspoajgbkajsbgabdsgjkpasdbgjkbasejkgfbsgisebasoghspoajgbkajsbgabdsgjkpasdbgjkbasejkgfbsgisebasoghspoajgbkajsbgabdsgjkpasdbgjkbasejkgfbsgisebasoghspoajgbkajsbgabdsgjkpasdbgjkbasejkgfbsgisebasoghspoajgbkajsbgabdsgjkpasdbgjkbasejkgfbsgisebasoghspoajgbkajsbgabdsgjkpasdbgjkbasejkgfbsgisebasoghspoajgbkajsbgabdsgjkpasdbgjkbasejkgfbsgisebasoghspoajgbkajsbgabdsgjkpasdbgjkbasejkgfbsgisebasoghspoajgbkajsbgabdsgjkpasdbgjkbasejkgfbsgisebasoghspoajgbkajsbgabdsgjkpasdbgjkbasejkgfbsgisebasoghspoajgbkajsbgabdsgjkpasdbgjkbasejkgfbsgisebasoghspoajgbkajsbgabdsgjkpasdbgjkbasejkgfbsgiseba', '2020-08-26'),
(2, 'The Bible', 'sdilfhpsfk;hsfhsdbfk;hsabd', 'sdilfhpsfk;hsfhsdbfk;hsabdsdilfhpsfk;hsfhsdbfk;hsabdsdilfhpsfk;hsfhsdbfk;hsabdsdilfhpsfk;hsfhsdbfk;hsabdsdilfhpsfk;hsfhsdbfk;hsabdsdilfhpsfk;hsfhsdbfk;hsabdsdilfhpsfk;hsfhsdbfk;hsabdsdilfhpsfk;hsfhsdbfk;hsabdsdilfhpsfk;hsfhsdbfk;hsabdsdilfhpsfk;hsfhsdbfk;hsabdsdilfhpsfk;hsfhsdbfk;hsabdsdilfhpsfk;hsfhsdbfk;hsabdsdilfhpsfk;hsfhsdbfk;hsabdsdilfhpsfk;hsfhsdbfk;hsabdsdilfhpsfk;hsfhsdbfk;hsabdsdilfhpsfk;hsfhsdbfk;hsabdsdilfhpsfk;hsfhsdbfk;hsabd sdilfhpsfk;hsfhsdbfk;hsabdsdilfhpsfk;hsfhsdbfk;hsabdsdilfhpsfk;hsfhsdbfk;hsabdsdilfhpsfk;hsfhsdbfk;hsabdsdilfhpsfk;hsfhsdbfk;hsabdsdilfhpsfk;hsfhsdbfk;hsabdsdilfhpsfk;hsfhsdbfk;hsabdsdilfhpsfk;hsfhsdbfk;hsabdsdilfhpsfk;hsfhsdbfk;hsabdsdilfhpsfk;hsfhsdbfk;hsabdsdilfhpsfk;hsfhsdbfk;hsabdsdilfhpsfk;hsfhsdbfk;hsabdsdilfhpsfk;hsfhsdbfk;hsabdsdilfhpsfk;hsfhsdbfk;hsabdsdilfhpsfk;hsfhsdbfk;hsabdsdilfhpsfk;hsfhsdbfk;hsabd', '2020-08-26'),
(3, 'Hitchiker\'s Guide', 'sdilfhpsfk;hsfhsdbfk;hsabd', 'sdilfhpsfk;hsfhsdbfk;hsabdsdilfhpsfk;hsfhsdbfk;hsabdsdilfhpsfk;hsfhsdbfk;hsabdsdilfhpsfk;hsfhsdbfk;hsabdsdilfhpsfk;hsfhsdbfk;hsabdsdilfhpsfk;hsfhsdbfk;hsabdsdilfhpsfk;hsfhsdbfk;hsabdsdilfhpsfk;hsfhsdbfk;hsabdsdilfhpsfk;hsfhsdbfk;hsabdsdilfhpsfk;hsfhsdbfk;hsabdsdilfhpsfk;hsfhsdbfk;hsabdsdilfhpsfk;hsfhsdbfk;hsabdsdilfhpsfk;hsfhsdbfk;hsabdsdilfhpsfk;hsfhsdbfk;hsabdsdilfhpsfk;hsfhsdbfk;hsabdsdilfhpsfk;hsfhsdbfk;hsabdsdilfhpsfk;hsfhsdbfk;hsabdsdilfhpsfk;hsfhsdbfk;hsabdsdilfhpsfk;hsfhsdbfk;hsabdsdilfhpsfk;hsfhsdbfk;hsabdsdilfhpsfk;hsfhsdbfk;hsabdsdilfhpsfk;hsfhsdbfk;hsabdsdilfhpsfk;hsfhsdbfk;hsabdsdilfhpsfk;hsfhsdbfk;hsabdsdilfhpsfk;hsfhsdbfk;hsabdsdilfhpsfk;hsfhsdbfk;hsabdsdilfhpsfk;hsfhsdbfk;hsabdsdilfhpsfk;hsfhsdbfk;hsabdsdilfhpsfk;hsfhsdbfk;hsabdsdilfhpsfk;hsfhsdbfk;hsabdsdilfhpsfk;hsfhsdbfk;hsabdsdilfhpsfk;hsfhsdbfk;hsabdsdilfhpsfk;hsfhsdbfk;hsabdsdilfhpsfk;hsfhsdbfk;hsabdsdilfhpsfk;hsfhsdbfk;hsabdsdilfhpsfk;hsfhsdbfk;hsabdsdilfhpsfk;hsfhsdbfk;hsabd', '2020-08-26'),
(4, 'Book', 'sdilfhpsfk;hsfhsdbfk;hsabdsdilfhpsfk;hsfhsdbfk;hsabd', 'sdilfhpsfk;hsfhsdbfk;hsabdsdilfhpsfk;hsfhsdbfk;hsabdsdilfhpsfk;hsfhsdbfk;hsabdsdilfhpsfk;hsfhsdbfk;hsabdsdilfhpsfk;hsfhsdbfk;hsabdsdilfhpsfk;hsfhsdbfk;hsabdsdilfhpsfk;hsfhsdbfk;hsabdsdilfhpsfk;hsfhsdbfk;hsabdsdilfhpsfk;hsfhsdbfk;hsabdsdilfhpsfk;hsfhsdbfk;hsabdsdilfhpsfk;hsfhsdbfk;hsabdsdilfhpsfk;hsfhsdbfk;hsabdsdilfhpsfk;hsfhsdbfk;hsabdsdilfhpsfk;hsfhsdbfk;hsabdsdilfhpsfk;hsfhsdbfk;hsabdsdilfhpsfk;hsfhsdbfk;hsabdsdilfhpsfk;hsfhsdbfk;hsabdsdilfhpsfk;hsfhsdbfk;hsabdsdilfhpsfk;hsfhsdbfk;hsabdsdilfhpsfk;hsfhsdbfk;hsabdsdilfhpsfk;hsfhsdbfk;hsabd', '2020-08-25');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_interest`
--

CREATE TABLE `tbl_interest` (
  `ID` int(11) NOT NULL,
  `Name` varchar(60) NOT NULL,
  `Email` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_interest`
--

INSERT INTO `tbl_interest` (`ID`, `Name`, `Email`) VALUES
(1, 'Andrew', 'test@test.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `ID` int(10) NOT NULL,
  `NameF` varchar(30) NOT NULL,
  `NameS` varchar(30) NOT NULL,
  `Email` varchar(70) NOT NULL,
  `Mobile` varchar(12) NOT NULL,
  `StreetNum` int(5) NOT NULL,
  `UnitNum` varchar(8) NOT NULL,
  `StreetName` varchar(60) NOT NULL,
  `City` varchar(30) NOT NULL,
  `Suburb` varchar(30) NOT NULL,
  `PostCode` int(4) NOT NULL,
  `UserName` varchar(15) NOT NULL,
  `Password` varchar(120) NOT NULL,
  `Admin` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`ID`, `NameF`, `NameS`, `Email`, `Mobile`, `StreetNum`, `UnitNum`, `StreetName`, `City`, `Suburb`, `PostCode`, `UserName`, `Password`, `Admin`) VALUES
(1, 'Admin', 'Admin', 'admin@admin.com', '0000000', 12, '212', 'Tester', 'Tester', 'Test', 1111, 'Admin', '$2y$10$d7E7mzZo2N/Ko6N7Px.ipOtbH7q00DGogLo5KLfx0ittlY9Zbgf5i', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mins`
--

CREATE TABLE `tbl_mins` (
  `MID` int(11) NOT NULL,
  `FileName` varchar(30) NOT NULL,
  `Date` varchar(15) NOT NULL,
  `UID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_articles`
--
ALTER TABLE `tbl_articles`
  ADD PRIMARY KEY (`AID`);

--
-- Indexes for table `tbl_interest`
--
ALTER TABLE `tbl_interest`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_mins`
--
ALTER TABLE `tbl_mins`
  ADD PRIMARY KEY (`MID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_articles`
--
ALTER TABLE `tbl_articles`
  MODIFY `AID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_interest`
--
ALTER TABLE `tbl_interest`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_mins`
--
ALTER TABLE `tbl_mins`
  MODIFY `MID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
