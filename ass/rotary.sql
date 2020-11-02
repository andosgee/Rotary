-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 02, 2020 at 09:16 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

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
  `Date` date NOT NULL,
  `Author` int(11) NOT NULL,
  `Featured` tinyint(1) NOT NULL,
  `Moderated` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_articles`
--

INSERT INTO `tbl_articles` (`AID`, `Title`, `Description`, `Content`, `Date`, `Author`, `Featured`, `Moderated`) VALUES
(1, 'Helping in the Community', 'Here at Rotary we have been helping out....  ...', 'Here at Rotary we have been helping out....\r\n', '2020-11-02', 1, 0, 1),
(2, 'Tree Planting', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vit...', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vitae placerat arcu. Suspendisse est ipsum, pretium vel suscipit sed, pulvinar ac dolor. Mauris vestibulum rhoncus leo ac posuere. Pellentesque sed porta nunc. Proin efficitur turpis at mi ultrices, vitae eleifend mi dapibus. Ut malesuada nulla ut augue ultrices sagittis. Sed rutrum feugiat libero, non mattis arcu hendrerit non. Vivamus in libero ante. Nulla ac purus et turpis luctus accumsan non et quam. Nunc in nisl in lectus egestas lobortis at at ante.\r\n\r\nCras ut lacinia enim. Quisque aliquet ultricies porta. Suspendisse eget nunc in felis lobortis hendrerit. Curabitur ac cursus eros. Nam eu venenatis elit, quis pretium ante. Ut ac tristique nisi, sed porttitor felis. Integer dignissim lectus turpis, a mollis orci dapibus eget. Cras eget viverra eros.\r\n\r\nVestibulum eget risus risus. Integer ac dignissim dui. Praesent lobortis fringilla urna vel lobortis. Etiam non urna eleifend, facilisis erat et, euismod lorem. Vivamus in imperdiet ex, in eleifend mauris. Nulla imperdiet velit vitae nisl dapibus accumsan. Fusce ut fringilla lacus. Sed ullamcorper turpis non elementum facilisis. Vivamus mollis lectus vitae elit lobortis ultrices. Nulla facilisi. Integer magna enim, tristique sed nunc ut, lobortis malesuada magna. Sed luctus orci at sapien viverra accumsan. Cras pretium, massa non suscipit rhoncus, leo nisl ornare nisi, non commodo erat mauris sit amet sem.\r\n\r\nIn maximus efficitur condimentum. Aliquam id ligula enim. Nunc posuere aliquet turpis id interdum. Aenean varius convallis tempus. Sed porttitor sapien ut scelerisque lacinia. Nulla lectus tortor, sodales eu luctus vitae, rutrum non ante. Duis id sapien posuere, dapibus turpis vel, scelerisque felis. Phasellus vel ex velit. Pellentesque sapien urna, aliquet nec feugiat non, tristique vitae nibh. Proin convallis risus non lacus sagittis aliquam. Fusce metus justo, luctus nec tristique non, euismod in sem. Vestibulum semper egestas purus, id pretium velit ultricies in.\r\n\r\nVivamus viverra ut augue eu vestibulum. Praesent eget interdum mi. Curabitur molestie risus eu nisl porttitor, sed laoreet nibh hendrerit. Integer imperdiet, mi ac aliquam varius, nunc ligula aliquam tortor, in sollicitudin arcu leo vel arcu. Suspendisse tristique, diam in feugiat laoreet, urna augue interdum risus, at dapibus quam tortor nec arcu. Integer augue arcu, eleifend ac finibus eu, finibus vitae libero. Phasellus eget posuere tortor, id porta augue. Phasellus nec ultrices quam. Quisque a nulla eu diam placerat lacinia in nec justo. Sed magna urna, egestas eget luctus in, tincidunt sed ipsum. Donec ultrices purus diam, vel dictum lacus lobortis a. Nulla quis eleifend nisi, vel varius massa. Integer vel nunc at orci ornare feugiat. Suspendisse facilisis, sapien lacinia ullamcorper sodales, est tellus volutpat elit, eget tristique felis enim vel felis.', '2020-11-02', 1, 1, 1),
(3, 'Save the World!', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vit...', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vitae placerat arcu. Suspendisse est ipsum, pretium vel suscipit sed, pulvinar ac dolor. Mauris vestibulum rhoncus leo ac posuere. Pellentesque sed porta nunc. Proin efficitur turpis at mi ultrices, vitae eleifend mi dapibus. Ut malesuada nulla ut augue ultrices sagittis. Sed rutrum feugiat libero, non mattis arcu hendrerit non. Vivamus in libero ante. Nulla ac purus et turpis luctus accumsan non et quam. Nunc in nisl in lectus egestas lobortis at at ante.\r\n\r\nCras ut lacinia enim. Quisque aliquet ultricies porta. Suspendisse eget nunc in felis lobortis hendrerit. Curabitur ac cursus eros. Nam eu venenatis elit, quis pretium ante. Ut ac tristique nisi, sed porttitor felis. Integer dignissim lectus turpis, a mollis orci dapibus eget. Cras eget viverra eros.\r\n\r\nVestibulum eget risus risus. Integer ac dignissim dui. Praesent lobortis fringilla urna vel lobortis. Etiam non urna eleifend, facilisis erat et, euismod lorem. Vivamus in imperdiet ex, in eleifend mauris. Nulla imperdiet velit vitae nisl dapibus accumsan. Fusce ut fringilla lacus. Sed ullamcorper turpis non elementum facilisis. Vivamus mollis lectus vitae elit lobortis ultrices. Nulla facilisi. Integer magna enim, tristique sed nunc ut, lobortis malesuada magna. Sed luctus orci at sapien viverra accumsan. Cras pretium, massa non suscipit rhoncus, leo nisl ornare nisi, non commodo erat mauris sit amet sem.\r\n\r\nIn maximus efficitur condimentum. Aliquam id ligula enim. Nunc posuere aliquet turpis id interdum. Aenean varius convallis tempus. Sed porttitor sapien ut scelerisque lacinia. Nulla lectus tortor, sodales eu luctus vitae, rutrum non ante. Duis id sapien posuere, dapibus turpis vel, scelerisque felis. Phasellus vel ex velit. Pellentesque sapien urna, aliquet nec feugiat non, tristique vitae nibh. Proin convallis risus non lacus sagittis aliquam. Fusce metus justo, luctus nec tristique non, euismod in sem. Vestibulum semper egestas purus, id pretium velit ultricies in.\r\n\r\nVivamus viverra ut augue eu vestibulum. Praesent eget interdum mi. Curabitur molestie risus eu nisl porttitor, sed laoreet nibh hendrerit. Integer imperdiet, mi ac aliquam varius, nunc ligula aliquam tortor, in sollicitudin arcu leo vel arcu. Suspendisse tristique, diam in feugiat laoreet, urna augue interdum risus, at dapibus quam tortor nec arcu. Integer augue arcu, eleifend ac finibus eu, finibus vitae libero. Phasellus eget posuere tortor, id porta augue. Phasellus nec ultrices quam. Quisque a nulla eu diam placerat lacinia in nec justo. Sed magna urna, egestas eget luctus in, tincidunt sed ipsum. Donec ultrices purus diam, vel dictum lacus lobortis a. Nulla quis eleifend nisi, vel varius massa. Integer vel nunc at orci ornare feugiat. Suspendisse facilisis, sapien lacinia ullamcorper sodales, est tellus volutpat elit, eget tristique felis enim vel felis.', '2020-11-02', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_interest`
--

CREATE TABLE `tbl_interest` (
  `ID` int(10) NOT NULL,
  `NameF` varchar(30) NOT NULL,
  `NameS` varchar(30) DEFAULT NULL,
  `Email` varchar(70) NOT NULL,
  `Mobile` varchar(12) DEFAULT NULL,
  `StreetNum` int(5) DEFAULT NULL,
  `UnitNum` varchar(8) DEFAULT NULL,
  `StreetName` varchar(60) DEFAULT NULL,
  `City` varchar(30) DEFAULT NULL,
  `Suburb` varchar(30) DEFAULT NULL,
  `PostCode` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_interest`
--

INSERT INTO `tbl_interest` (`ID`, `NameF`, `NameS`, `Email`, `Mobile`, `StreetNum`, `UnitNum`, `StreetName`, `City`, `Suburb`, `PostCode`) VALUES
(4, 'Frank', 'Sinatra', 'Frank.sinatra@music.com', '4040404040', 44, '12', 'Treble Street', 'Christchurch', 'Mus', 4444);

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
  `UnitNum` varchar(8) DEFAULT NULL,
  `StreetName` varchar(60) NOT NULL,
  `City` varchar(30) NOT NULL,
  `Suburb` varchar(30) NOT NULL,
  `PostCode` int(4) NOT NULL,
  `UserName` varchar(15) NOT NULL,
  `Password` varchar(120) NOT NULL,
  `Admin` tinyint(1) NOT NULL,
  `Active` tinyint(1) NOT NULL,
  `Publish` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`ID`, `NameF`, `NameS`, `Email`, `Mobile`, `StreetNum`, `UnitNum`, `StreetName`, `City`, `Suburb`, `PostCode`, `UserName`, `Password`, `Admin`, `Active`, `Publish`) VALUES
(1, 'Admin', 'Admin', 'admin@admin.com', '0', 12, NULL, 'Tester', 'Tester', 'Test', 1111, 'Admin', '$2y$10$tMkgQx99Wq9neWRT7d3.D.MGaEX5qMutcz2eaMyWIehZNg9jVMg4e', 1, 1, 1),
(4, 'Andrew', 'Grant', 'andosgee@gmail.com', '0277808905', 4, NULL, 'Faulks Drive', 'Christchurch', 'Lincoln', 7608, 'AndrewGrant', '$2y$10$JAG9I5hYS7XfUE/OWyltbe/LykxQmsAQ4pzYSs2yYdfchYY2TYF1i', 0, 1, 0);

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

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

CREATE TABLE `tbl_news` (
  `NID` int(11) NOT NULL,
  `FileName` varchar(60) NOT NULL,
  `Date` varchar(10) NOT NULL,
  `UID` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_newsReg`
--

CREATE TABLE `tbl_newsReg` (
  `UID` int(11) NOT NULL,
  `Email` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_newsReg`
--

INSERT INTO `tbl_newsReg` (`UID`, `Email`) VALUES
(1, 'fred@gmail.com'),
(2, 'sue@gmail.com'),
(3, 'frank@hotmail.com'),
(4, 'frank@hotmail.com'),
(5, 'freddy@hotmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_articles`
--
ALTER TABLE `tbl_articles`
  ADD PRIMARY KEY (`AID`),
  ADD KEY `Author` (`Author`);

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
-- Indexes for table `tbl_news`
--
ALTER TABLE `tbl_news`
  ADD PRIMARY KEY (`NID`);

--
-- Indexes for table `tbl_newsReg`
--
ALTER TABLE `tbl_newsReg`
  ADD PRIMARY KEY (`UID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_articles`
--
ALTER TABLE `tbl_articles`
  MODIFY `AID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_interest`
--
ALTER TABLE `tbl_interest`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_mins`
--
ALTER TABLE `tbl_mins`
  MODIFY `MID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_news`
--
ALTER TABLE `tbl_news`
  MODIFY `NID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_newsReg`
--
ALTER TABLE `tbl_newsReg`
  MODIFY `UID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_articles`
--
ALTER TABLE `tbl_articles`
  ADD CONSTRAINT `tbl_articles_ibfk_1` FOREIGN KEY (`Author`) REFERENCES `tbl_login` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
