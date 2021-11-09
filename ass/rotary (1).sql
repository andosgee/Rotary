-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2021 at 01:17 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

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
-- Table structure for table `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `GID` int(100) NOT NULL,
  `ImageName` varchar(100) NOT NULL,
  `Moderated` int(1) NOT NULL,
  `UID` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`GID`, `ImageName`, `Moderated`, `UID`) VALUES
(4, './ass/gallery/618a5e7c4eabb3.09607152.JPG', 1, 1),
(5, './ass/gallery/618a5f0d784688.23252433.jpg', 1, 1),
(6, './ass/gallery/618a5f19ef8b93.83916086.jpg', 1, 1),
(7, './ass/gallery/618a5f1d2ba374.55930611.jpg', 1, 1),
(8, './ass/gallery/618a5f202afe56.47723258.jpg', 1, 1),
(9, './ass/gallery/618a5f26693178.81537001.png', 1, 1),
(10, './ass/gallery/618a5f2acc0f87.08835272.jpg', 1, 1),
(11, './ass/gallery/618a5f391aec09.49996325.jpg', 1, 1),
(12, './ass/gallery/618a5f3b87e869.22500703.jpg', 1, 1),
(13, './ass/gallery/618a5f3e72a484.73881419.jpg', 1, 1),
(14, './ass/gallery/618a5f42e2c881.58103440.jpg', 1, 1),
(15, './ass/gallery/618a5f459217f3.06210555.jpg', 1, 1),
(16, './ass/gallery/618a5f4add5292.30668835.jpg', 1, 1),
(17, './ass/gallery/618a61708a0f25.60460578.jpg', 1, 1),
(18, './ass/gallery/618a6176532967.14569421.jpg', 1, 1),
(19, './ass/gallery/618a618002e518.65194371.jpg', 1, 1),
(20, './ass/gallery/618a619091dd36.20496117.jpg', 1, 1),
(21, './ass/gallery/618a6196c42301.77632140.jpg', 1, 1),
(22, './ass/gallery/618a619d10efc1.12430823.jpg', 1, 1);

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
  `Moderated` int(1) NOT NULL,
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
  `Moderated` int(1) NOT NULL,
  `UID` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_newsreg`
--

CREATE TABLE `tbl_newsreg` (
  `UID` int(11) NOT NULL,
  `Email` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Indexes for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD UNIQUE KEY `GID` (`GID`);

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
-- Indexes for table `tbl_newsreg`
--
ALTER TABLE `tbl_newsreg`
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
-- AUTO_INCREMENT for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `GID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

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
  MODIFY `NID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_newsreg`
--
ALTER TABLE `tbl_newsreg`
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
