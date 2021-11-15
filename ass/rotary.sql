-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 15, 2021 at 01:18 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

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
(4, 'IT Hardware Project for local schools', 'Belfast-Kaiapoi Rotary have been supplying IT Hardware (Chromebooks...', 'Belfast-Kaiapoi Rotary have been supplying IT Hardware (Chromebooks) and associated Educational Software packages to local schools in our area since 2016. \nRotary became involved after a presentation from a local School Principal highlighted the disparity in educational outcomes between high(er) and low(er) decile rated schools. Many Primary School pupils were moving on to local Intermediates having little or no “IT” learning experience due to a lack of resources. This put them at a major disadvantage when moving on to their future educational years, of which most pupils struggled to recover from, or, catch up to an acceptable current minimum standard.\nAfter much consultation, Northcote Primary was selected as our first Chromebooks recipient, when twenty-eight laptops with associated charging stations and software were purchased.\nThis has proven to be such an outstanding success, that Belfast-Kaiapoi Rotary have gone on to provide many other local Primary Schools with Chromebook Laptops in the ensuing years.\nThe feedback from the Teachers and Principals of these recipient schools has been overwhelmingly positive.\nThis project is ongoing for The Rotary Club of Belfast-Kaiapoi. All future enquiries to Leith at 0211426297', '2021-11-10', 1, 1, 1),
(5, 'Forté uniforms head to the Pacific Islands', 'Forté Health has teamed up with The Rotary NZ World Community Serv...', 'Forté Health has teamed up with The Rotary NZ World Community Service to send desperately needed items to Pacific Island hospitals.\r\nThis container full of supplies is bound for Samoa and includes nurses’ uniforms donated by Forté Health. It’s not the first time Forté has worked alongside Rotary to support our Pacific neighbours. In previous years Forté has donated theatre scrubs, patient gowns and blood pressure monitors to hospitals across Fiji, Samoa and Tonga.\r\nGordon Hooper of the Cashmere Rotary Club says uniforms may seem simple but are desperately needed.\r\n“Apart from what we sent years ago, one of the hospitals we’re donating to doesn’t have any uniforms or clothing at all.  This is fantastic, they look brand-new. The staff there will be delighted,” says Hooper.\r\nForté Nursing Services Manager Angela Ross says getting behind the Rotary project is a no-brainer.\r\n“We’ve been supporting Rotary for a few years now – sending whatever we can to support medical care in the Pacific Islands. Forté has a large focus on sustainability, so seeing items we no longer need get a second life and helping others less fortunate is really important to us.”\r\nOther items in this shipment include desks, chairs, sporting uniforms for schools, hand sanitiser, wheelchairs and an operating table.\r\nChristchurch’s Rotary Clubs have sent almost 30 containers full of supplies to the Pacific Islands over the last seven years, including two sent earlier this year to Fiji.\r\nThe uniforms Forté has donated for this latest shipment are all less than five years old and were carefully inspected to be in tip-top condition.\r\n“We really only wanted to send the best uniforms that have lots of life left in them. Other uniforms were recycled into bags to store patient belongings, which fits with our sustainable vision and values,” says Angela.\r\n', '2021-11-10', 1, 1, 1),
(6, 'KIDS IN SPORT STAY OUT OF COURT', 'The above motto was used in 2008 when two of our club members had t...', 'The above motto was used in 2008 when two of our club members had the idea of inviting sponsors from local businesses, individuals and club members to purchase team shirts - with their logos on them - to give to Junior Touch teams and give greater encouragement for youngsters to become part of community sports.\r\n\r\nFrom small beginnings at the Belfast Rugby Club, sponsorship has continued to grow each year. With the Kaiapoi Rugby Club also involved in this project for the last few years, we have seen the number of teams continue to increase. This present season 2021-2022 will have 64 teams playing each week; 768 children gaining new skills, keeping fit, learning to work in teams, making new friends and enjoying themselves. With the presence of care givers watching the children play, it brings many families of Belfast and Kaiapoi together thus improving community spirit and wellbeing.\r\n\r\nThe Rotary Club of Belfast Kaiapoi together with the Touch players, their families and the Touch organisations are extremely grateful and appreciative of the ever-growing number of sponsors who see the benefit of giving their support. Many have continued to support this worthwhile project from the very beginning – thank you.\r\n', '2021-11-10', 1, 1, 1),
(7, 'Members backing Foodbanks', 'During the Covid related lockdown in 2020, job losses and business ...', 'During the Covid related lockdown in 2020, job losses and business closures led to a demand for food banks from those whose livelihoods had been upended.  \r\nAs a semi-rural club with members involved in vegetable growing we then started supplying vegetables to these food banks.   We supply potatoes, onions, carrots and pumpkins.   Some are donated and others purchased at very low prices.    Due to the high standards demanded by supermarkets growers are left with seconds which are discarded due to size or minor blemishes but still of excellent quality.   Each week club members collect these vegetables to deliver to food banks and in particular FoodBank Canterbury (FBC).   \r\nFBC works with supermarkets collecting stock which is nearing the “best before dates” and food manufactures, such as Fonterra and Watties.  When they have to buy food they do so at very good prices.   For example they can secure baked beans for 19 cents a can.  \r\nThe food is then distributed through local agencies such as churches, and a myriad of local groups – over 130 in all.   This two tier system works very well.    The local people have knowledge of their communities while FBC has effective and professional relationships with the food industry.   \r\nAs of November 2021, our club has procured and delivered over 170 tonnes of vegetables.  This work is on-going.\r\n', '2021-11-10', 1, 0, 1),
(8, 'Trucks for Foodbank Canterbury', 'As well as providing FBC with vegetables the Belfast Kaiapoi Rotary...', 'As well as providing FBC with vegetables the Belfast Kaiapoi Rotary has assisted in purchasing three trucks for FBC, two for town collections and a third to collect vegetables from farms.   By joining with five other Rotary clubs in Christchurch and tapping into wider funding from the Rotary movement these trucks are to be seen around Christchurch with both FBC and Rotary signage.', '2021-11-10', 1, 0, 1);

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
(22, './ass/gallery/618a619d10efc1.12430823.jpg', 1, 1),
(23, './ass/gallery/61924eb181b048.41994723.jpeg', 0, 1);

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

--
-- Dumping data for table `tbl_news`
--

INSERT INTO `tbl_news` (`NID`, `FileName`, `Date`, `Moderated`, `UID`) VALUES
(3, './ass/newsletters/2620 Tuesday 26th October 2021.pdf', '10-11-21', 0, 1),
(4, './ass/newsletters/2621 Tuesday 2nd November 2021.pdf', '10-11-21', 0, 1);

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
  MODIFY `AID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `GID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

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
  MODIFY `NID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
