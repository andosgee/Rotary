-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2020 at 08:16 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

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
(1, 'Honors knight', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condimentum tellus sed auctor congue.\r\n\r\nQuisque a tortor vel est faucibus vehicula. Fusce rhoncus, nulla eu viverra laoreet, lacus velit feugiat sapien, in commodo metus mi nec dui. Pellentesque vitae lectus feugiat ipsum luctus fermentum id id nulla. Morbi ut enim placerat, consequat ligula congue, pharetra nunc. Pellentesque at blandit libero.\r\n\r\nVivamus ipsum tortor, tempor non neque et, aliquam efficitur tellus. Sed suscipit suscipit libero, non placerat velit venenatis nec. Proin pretium turpis vel vulputate vestibulum. Morbi fermentum est a orci ullamcorper, eget tristique nibh posuere. Ut metus diam, rutrum vitae dolor ut, pretium posuere urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Fusce dignissim ipsum sed est gravida, vel aliquam diam iaculis.', '2020-08-26', 1, 1, 1),
(2, 'The Bible', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condimentum tellus sed auctor congue.\r\n\rQuisque a tortor vel est faucibus vehicula. Fusce rhoncus, nulla eu viverra laoreet, lacus velit feugiat sapien, in commodo metus mi nec dui. Pellentesque vitae lectus feugiat ipsum luctus fermentum id id nulla. Morbi ut enim placerat, consequat ligula congue, pharetra nunc. Pellentesque at blandit libero.\r\n\rVivamus ipsum tortor, tempor non neque et, aliquam efficitur tellus. Sed suscipit suscipit libero, non placerat velit venenatis nec. Proin pretium turpis vel vulputate vestibulum. Morbi fermentum est a orci ullamcorper, eget tristique nibh posuere. Ut metus diam, rutrum vitae dolor ut, pretium posuere urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Fusce dignissim ipsum sed est gravida, vel aliquam diam iaculis.', '2020-08-26', 1, 1, 1),
(3, 'Hitchiker\'s Guide', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condimentum tellus sed auctor congue.\r\n\rQuisque a tortor vel est faucibus vehicula. Fusce rhoncus, nulla eu viverra laoreet, lacus velit feugiat sapien, in commodo metus mi nec dui. Pellentesque vitae lectus feugiat ipsum luctus fermentum id id nulla. Morbi ut enim placerat, consequat ligula congue, pharetra nunc. Pellentesque at blandit libero.\r\n\rVivamus ipsum tortor, tempor non neque et, aliquam efficitur tellus. Sed suscipit suscipit libero, non placerat velit venenatis nec. Proin pretium turpis vel vulputate vestibulum. Morbi fermentum est a orci ullamcorper, eget tristique nibh posuere. Ut metus diam, rutrum vitae dolor ut, pretium posuere urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Fusce dignissim ipsum sed est gravida, vel aliquam diam iaculis.', '2020-08-26', 1, 1, 1),
(4, 'Book', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condimentum tellus sed auctor congue.\r\n\rQuisque a tortor vel est faucibus vehicula. Fusce rhoncus, nulla eu viverra laoreet, lacus velit feugiat sapien, in commodo metus mi nec dui. Pellentesque vitae lectus feugiat ipsum luctus fermentum id id nulla. Morbi ut enim placerat, consequat ligula congue, pharetra nunc. Pellentesque at blandit libero.\r\n\rVivamus ipsum tortor, tempor non neque et, aliquam efficitur tellus. Sed suscipit suscipit libero, non placerat velit venenatis nec. Proin pretium turpis vel vulputate vestibulum. Morbi fermentum est a orci ullamcorper, eget tristique nibh posuere. Ut metus diam, rutrum vitae dolor ut, pretium posuere urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Fusce dignissim ipsum sed est gravida, vel aliquam diam iaculis.', '2020-08-25', 1, 0, 1),
(5, 'Ex. Title 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condimentum tellus sed auctor congue.\r\n\rQuisque a tortor vel est faucibus vehicula. Fusce rhoncus, nulla eu viverra laoreet, lacus velit feugiat sapien, in commodo metus mi nec dui. Pellentesque vitae lectus feugiat ipsum luctus fermentum id id nulla. Morbi ut enim placerat, consequat ligula congue, pharetra nunc. Pellentesque at blandit libero.\r\n\rVivamus ipsum tortor, tempor non neque et, aliquam efficitur tellus. Sed suscipit suscipit libero, non placerat velit venenatis nec. Proin pretium turpis vel vulputate vestibulum. Morbi fermentum est a orci ullamcorper, eget tristique nibh posuere. Ut metus diam, rutrum vitae dolor ut, pretium posuere urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Fusce dignissim ipsum sed est gravida, vel aliquam diam iaculis.', '2020-08-19', 1, 0, 1),
(6, 'Ex. Title 2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condimentum tellus sed auctor congue.\r\n\rQuisque a tortor vel est faucibus vehicula. Fusce rhoncus, nulla eu viverra laoreet, lacus velit feugiat sapien, in commodo metus mi nec dui. Pellentesque vitae lectus feugiat ipsum luctus fermentum id id nulla. Morbi ut enim placerat, consequat ligula congue, pharetra nunc. Pellentesque at blandit libero.\r\n\rVivamus ipsum tortor, tempor non neque et, aliquam efficitur tellus. Sed suscipit suscipit libero, non placerat velit venenatis nec. Proin pretium turpis vel vulputate vestibulum. Morbi fermentum est a orci ullamcorper, eget tristique nibh posuere. Ut metus diam, rutrum vitae dolor ut, pretium posuere urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Fusce dignissim ipsum sed est gravida, vel aliquam diam iaculis.', '2017-08-20', 1, 0, 1),
(7, 'Ex. Title 3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condimentum tellus sed auctor congue.\r\n\rQuisque a tortor vel est faucibus vehicula. Fusce rhoncus, nulla eu viverra laoreet, lacus velit feugiat sapien, in commodo metus mi nec dui. Pellentesque vitae lectus feugiat ipsum luctus fermentum id id nulla. Morbi ut enim placerat, consequat ligula congue, pharetra nunc. Pellentesque at blandit libero.\r\n\rVivamus ipsum tortor, tempor non neque et, aliquam efficitur tellus. Sed suscipit suscipit libero, non placerat velit venenatis nec. Proin pretium turpis vel vulputate vestibulum. Morbi fermentum est a orci ullamcorper, eget tristique nibh posuere. Ut metus diam, rutrum vitae dolor ut, pretium posuere urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Fusce dignissim ipsum sed est gravida, vel aliquam diam iaculis.', '2018-08-20', 1, 0, 1),
(8, 'Ex. Title 4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condimentum tellus sed auctor congue.\r\n\rQuisque a tortor vel est faucibus vehicula. Fusce rhoncus, nulla eu viverra laoreet, lacus velit feugiat sapien, in commodo metus mi nec dui. Pellentesque vitae lectus feugiat ipsum luctus fermentum id id nulla. Morbi ut enim placerat, consequat ligula congue, pharetra nunc. Pellentesque at blandit libero.\r\n\rVivamus ipsum tortor, tempor non neque et, aliquam efficitur tellus. Sed suscipit suscipit libero, non placerat velit venenatis nec. Proin pretium turpis vel vulputate vestibulum. Morbi fermentum est a orci ullamcorper, eget tristique nibh posuere. Ut metus diam, rutrum vitae dolor ut, pretium posuere urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Fusce dignissim ipsum sed est gravida, vel aliquam diam iaculis.', '2019-08-20', 1, 0, 1),
(9, 'Ex. Title 5', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condimentum tellus sed auctor congue.\r\n\rQuisque a tortor vel est faucibus vehicula. Fusce rhoncus, nulla eu viverra laoreet, lacus velit feugiat sapien, in commodo metus mi nec dui. Pellentesque vitae lectus feugiat ipsum luctus fermentum id id nulla. Morbi ut enim placerat, consequat ligula congue, pharetra nunc. Pellentesque at blandit libero.\r\n\rVivamus ipsum tortor, tempor non neque et, aliquam efficitur tellus. Sed suscipit suscipit libero, non placerat velit venenatis nec. Proin pretium turpis vel vulputate vestibulum. Morbi fermentum est a orci ullamcorper, eget tristique nibh posuere. Ut metus diam, rutrum vitae dolor ut, pretium posuere urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Fusce dignissim ipsum sed est gravida, vel aliquam diam iaculis.', '2010-08-20', 1, 0, 1),
(10, 'Ex. Title 6', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condimentum tellus sed auctor congue.\r\n\rQuisque a tortor vel est faucibus vehicula. Fusce rhoncus, nulla eu viverra laoreet, lacus velit feugiat sapien, in commodo metus mi nec dui. Pellentesque vitae lectus feugiat ipsum luctus fermentum id id nulla. Morbi ut enim placerat, consequat ligula congue, pharetra nunc. Pellentesque at blandit libero.\r\n\rVivamus ipsum tortor, tempor non neque et, aliquam efficitur tellus. Sed suscipit suscipit libero, non placerat velit venenatis nec. Proin pretium turpis vel vulputate vestibulum. Morbi fermentum est a orci ullamcorper, eget tristique nibh posuere. Ut metus diam, rutrum vitae dolor ut, pretium posuere urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Fusce dignissim ipsum sed est gravida, vel aliquam diam iaculis.', '2018-08-20', 1, 0, 1),
(11, 'Ex. Title 7', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condimentum tellus sed auctor congue.\r\n\rQuisque a tortor vel est faucibus vehicula. Fusce rhoncus, nulla eu viverra laoreet, lacus velit feugiat sapien, in commodo metus mi nec dui. Pellentesque vitae lectus feugiat ipsum luctus fermentum id id nulla. Morbi ut enim placerat, consequat ligula congue, pharetra nunc. Pellentesque at blandit libero.\r\n\rVivamus ipsum tortor, tempor non neque et, aliquam efficitur tellus. Sed suscipit suscipit libero, non placerat velit venenatis nec. Proin pretium turpis vel vulputate vestibulum. Morbi fermentum est a orci ullamcorper, eget tristique nibh posuere. Ut metus diam, rutrum vitae dolor ut, pretium posuere urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Fusce dignissim ipsum sed est gravida, vel aliquam diam iaculis.', '0001-09-20', 1, 0, 1),
(12, 'Ex. Title 8', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condimentum tellus sed auctor congue.\r\n\rQuisque a tortor vel est faucibus vehicula. Fusce rhoncus, nulla eu viverra laoreet, lacus velit feugiat sapien, in commodo metus mi nec dui. Pellentesque vitae lectus feugiat ipsum luctus fermentum id id nulla. Morbi ut enim placerat, consequat ligula congue, pharetra nunc. Pellentesque at blandit libero.\r\n\rVivamus ipsum tortor, tempor non neque et, aliquam efficitur tellus. Sed suscipit suscipit libero, non placerat velit venenatis nec. Proin pretium turpis vel vulputate vestibulum. Morbi fermentum est a orci ullamcorper, eget tristique nibh posuere. Ut metus diam, rutrum vitae dolor ut, pretium posuere urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Fusce dignissim ipsum sed est gravida, vel aliquam diam iaculis.', '0002-09-20', 1, 0, 1),
(13, 'Ex. Title 9', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condimentum tellus sed auctor congue.\r\n\rQuisque a tortor vel est faucibus vehicula. Fusce rhoncus, nulla eu viverra laoreet, lacus velit feugiat sapien, in commodo metus mi nec dui. Pellentesque vitae lectus feugiat ipsum luctus fermentum id id nulla. Morbi ut enim placerat, consequat ligula congue, pharetra nunc. Pellentesque at blandit libero.\r\n\rVivamus ipsum tortor, tempor non neque et, aliquam efficitur tellus. Sed suscipit suscipit libero, non placerat velit venenatis nec. Proin pretium turpis vel vulputate vestibulum. Morbi fermentum est a orci ullamcorper, eget tristique nibh posuere. Ut metus diam, rutrum vitae dolor ut, pretium posuere urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Fusce dignissim ipsum sed est gravida, vel aliquam diam iaculis.', '0003-09-20', 1, 0, 1),
(14, 'Ex. Title 10', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condimentum tellus sed auctor congue.\r\n\rQuisque a tortor vel est faucibus vehicula. Fusce rhoncus, nulla eu viverra laoreet, lacus velit feugiat sapien, in commodo metus mi nec dui. Pellentesque vitae lectus feugiat ipsum luctus fermentum id id nulla. Morbi ut enim placerat, consequat ligula congue, pharetra nunc. Pellentesque at blandit libero.\r\n\rVivamus ipsum tortor, tempor non neque et, aliquam efficitur tellus. Sed suscipit suscipit libero, non placerat velit venenatis nec. Proin pretium turpis vel vulputate vestibulum. Morbi fermentum est a orci ullamcorper, eget tristique nibh posuere. Ut metus diam, rutrum vitae dolor ut, pretium posuere urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Fusce dignissim ipsum sed est gravida, vel aliquam diam iaculis.', '0004-09-20', 1, 0, 1),
(15, 'Ex. Title 11', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condimentum tellus sed auctor congue.\r\n\rQuisque a tortor vel est faucibus vehicula. Fusce rhoncus, nulla eu viverra laoreet, lacus velit feugiat sapien, in commodo metus mi nec dui. Pellentesque vitae lectus feugiat ipsum luctus fermentum id id nulla. Morbi ut enim placerat, consequat ligula congue, pharetra nunc. Pellentesque at blandit libero.\r\n\rVivamus ipsum tortor, tempor non neque et, aliquam efficitur tellus. Sed suscipit suscipit libero, non placerat velit venenatis nec. Proin pretium turpis vel vulputate vestibulum. Morbi fermentum est a orci ullamcorper, eget tristique nibh posuere. Ut metus diam, rutrum vitae dolor ut, pretium posuere urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Fusce dignissim ipsum sed est gravida, vel aliquam diam iaculis.', '0005-09-20', 1, 0, 1),
(16, 'Ex. Title 12', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condimentum tellus sed auctor congue.\r\n\rQuisque a tortor vel est faucibus vehicula. Fusce rhoncus, nulla eu viverra laoreet, lacus velit feugiat sapien, in commodo metus mi nec dui. Pellentesque vitae lectus feugiat ipsum luctus fermentum id id nulla. Morbi ut enim placerat, consequat ligula congue, pharetra nunc. Pellentesque at blandit libero.\r\n\rVivamus ipsum tortor, tempor non neque et, aliquam efficitur tellus. Sed suscipit suscipit libero, non placerat velit venenatis nec. Proin pretium turpis vel vulputate vestibulum. Morbi fermentum est a orci ullamcorper, eget tristique nibh posuere. Ut metus diam, rutrum vitae dolor ut, pretium posuere urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Fusce dignissim ipsum sed est gravida, vel aliquam diam iaculis.', '0006-09-20', 1, 0, 1),
(17, 'Ex. Title 13', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condimentum tellus sed auctor congue.\r\n\rQuisque a tortor vel est faucibus vehicula. Fusce rhoncus, nulla eu viverra laoreet, lacus velit feugiat sapien, in commodo metus mi nec dui. Pellentesque vitae lectus feugiat ipsum luctus fermentum id id nulla. Morbi ut enim placerat, consequat ligula congue, pharetra nunc. Pellentesque at blandit libero.\r\n\rVivamus ipsum tortor, tempor non neque et, aliquam efficitur tellus. Sed suscipit suscipit libero, non placerat velit venenatis nec. Proin pretium turpis vel vulputate vestibulum. Morbi fermentum est a orci ullamcorper, eget tristique nibh posuere. Ut metus diam, rutrum vitae dolor ut, pretium posuere urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Fusce dignissim ipsum sed est gravida, vel aliquam diam iaculis.', '0007-09-20', 1, 0, 1),
(18, 'Ex. Title 14', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condimentum tellus sed auctor congue.\r\n\rQuisque a tortor vel est faucibus vehicula. Fusce rhoncus, nulla eu viverra laoreet, lacus velit feugiat sapien, in commodo metus mi nec dui. Pellentesque vitae lectus feugiat ipsum luctus fermentum id id nulla. Morbi ut enim placerat, consequat ligula congue, pharetra nunc. Pellentesque at blandit libero.\r\n\rVivamus ipsum tortor, tempor non neque et, aliquam efficitur tellus. Sed suscipit suscipit libero, non placerat velit venenatis nec. Proin pretium turpis vel vulputate vestibulum. Morbi fermentum est a orci ullamcorper, eget tristique nibh posuere. Ut metus diam, rutrum vitae dolor ut, pretium posuere urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Fusce dignissim ipsum sed est gravida, vel aliquam diam iaculis.', '0008-09-20', 1, 0, 1),
(19, 'Ex. Title 15', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condimentum tellus sed auctor congue.\r\n\rQuisque a tortor vel est faucibus vehicula. Fusce rhoncus, nulla eu viverra laoreet, lacus velit feugiat sapien, in commodo metus mi nec dui. Pellentesque vitae lectus feugiat ipsum luctus fermentum id id nulla. Morbi ut enim placerat, consequat ligula congue, pharetra nunc. Pellentesque at blandit libero.\r\n\rVivamus ipsum tortor, tempor non neque et, aliquam efficitur tellus. Sed suscipit suscipit libero, non placerat velit venenatis nec. Proin pretium turpis vel vulputate vestibulum. Morbi fermentum est a orci ullamcorper, eget tristique nibh posuere. Ut metus diam, rutrum vitae dolor ut, pretium posuere urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Fusce dignissim ipsum sed est gravida, vel aliquam diam iaculis.', '0009-09-20', 1, 0, 1),
(20, 'Ex. Title 16', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condimentum tellus sed auctor congue.\r\n\rQuisque a tortor vel est faucibus vehicula. Fusce rhoncus, nulla eu viverra laoreet, lacus velit feugiat sapien, in commodo metus mi nec dui. Pellentesque vitae lectus feugiat ipsum luctus fermentum id id nulla. Morbi ut enim placerat, consequat ligula congue, pharetra nunc. Pellentesque at blandit libero.\r\n\rVivamus ipsum tortor, tempor non neque et, aliquam efficitur tellus. Sed suscipit suscipit libero, non placerat velit venenatis nec. Proin pretium turpis vel vulputate vestibulum. Morbi fermentum est a orci ullamcorper, eget tristique nibh posuere. Ut metus diam, rutrum vitae dolor ut, pretium posuere urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Fusce dignissim ipsum sed est gravida, vel aliquam diam iaculis.', '2010-09-20', 1, 0, 1),
(21, 'Ex. Title 17', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condimentum tellus sed auctor congue.\r\n\rQuisque a tortor vel est faucibus vehicula. Fusce rhoncus, nulla eu viverra laoreet, lacus velit feugiat sapien, in commodo metus mi nec dui. Pellentesque vitae lectus feugiat ipsum luctus fermentum id id nulla. Morbi ut enim placerat, consequat ligula congue, pharetra nunc. Pellentesque at blandit libero.\r\n\rVivamus ipsum tortor, tempor non neque et, aliquam efficitur tellus. Sed suscipit suscipit libero, non placerat velit venenatis nec. Proin pretium turpis vel vulputate vestibulum. Morbi fermentum est a orci ullamcorper, eget tristique nibh posuere. Ut metus diam, rutrum vitae dolor ut, pretium posuere urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Fusce dignissim ipsum sed est gravida, vel aliquam diam iaculis.', '2011-09-20', 1, 0, 1),
(22, 'Ex. Title 18', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condimentum tellus sed auctor congue.\r\n\rQuisque a tortor vel est faucibus vehicula. Fusce rhoncus, nulla eu viverra laoreet, lacus velit feugiat sapien, in commodo metus mi nec dui. Pellentesque vitae lectus feugiat ipsum luctus fermentum id id nulla. Morbi ut enim placerat, consequat ligula congue, pharetra nunc. Pellentesque at blandit libero.\r\n\rVivamus ipsum tortor, tempor non neque et, aliquam efficitur tellus. Sed suscipit suscipit libero, non placerat velit venenatis nec. Proin pretium turpis vel vulputate vestibulum. Morbi fermentum est a orci ullamcorper, eget tristique nibh posuere. Ut metus diam, rutrum vitae dolor ut, pretium posuere urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Fusce dignissim ipsum sed est gravida, vel aliquam diam iaculis.', '2012-09-20', 1, 0, 1),
(23, 'Ex. Title 19', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condimentum tellus sed auctor congue.\r\n\rQuisque a tortor vel est faucibus vehicula. Fusce rhoncus, nulla eu viverra laoreet, lacus velit feugiat sapien, in commodo metus mi nec dui. Pellentesque vitae lectus feugiat ipsum luctus fermentum id id nulla. Morbi ut enim placerat, consequat ligula congue, pharetra nunc. Pellentesque at blandit libero.\r\n\rVivamus ipsum tortor, tempor non neque et, aliquam efficitur tellus. Sed suscipit suscipit libero, non placerat velit venenatis nec. Proin pretium turpis vel vulputate vestibulum. Morbi fermentum est a orci ullamcorper, eget tristique nibh posuere. Ut metus diam, rutrum vitae dolor ut, pretium posuere urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Fusce dignissim ipsum sed est gravida, vel aliquam diam iaculis.', '2013-09-20', 1, 0, 1),
(24, 'Ex. Title 20', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condimentum tellus sed auctor congue.\r\n\rQuisque a tortor vel est faucibus vehicula. Fusce rhoncus, nulla eu viverra laoreet, lacus velit feugiat sapien, in commodo metus mi nec dui. Pellentesque vitae lectus feugiat ipsum luctus fermentum id id nulla. Morbi ut enim placerat, consequat ligula congue, pharetra nunc. Pellentesque at blandit libero.\r\n\rVivamus ipsum tortor, tempor non neque et, aliquam efficitur tellus. Sed suscipit suscipit libero, non placerat velit venenatis nec. Proin pretium turpis vel vulputate vestibulum. Morbi fermentum est a orci ullamcorper, eget tristique nibh posuere. Ut metus diam, rutrum vitae dolor ut, pretium posuere urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Fusce dignissim ipsum sed est gravida, vel aliquam diam iaculis.', '2014-09-20', 1, 0, 1),
(25, 'Ex. Title 21', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condimentum tellus sed auctor congue.\r\n\rQuisque a tortor vel est faucibus vehicula. Fusce rhoncus, nulla eu viverra laoreet, lacus velit feugiat sapien, in commodo metus mi nec dui. Pellentesque vitae lectus feugiat ipsum luctus fermentum id id nulla. Morbi ut enim placerat, consequat ligula congue, pharetra nunc. Pellentesque at blandit libero.\r\n\rVivamus ipsum tortor, tempor non neque et, aliquam efficitur tellus. Sed suscipit suscipit libero, non placerat velit venenatis nec. Proin pretium turpis vel vulputate vestibulum. Morbi fermentum est a orci ullamcorper, eget tristique nibh posuere. Ut metus diam, rutrum vitae dolor ut, pretium posuere urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Fusce dignissim ipsum sed est gravida, vel aliquam diam iaculis.', '2015-09-20', 1, 0, 1),
(26, 'Ex. Title 22', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condimentum tellus sed auctor congue.\r\n\rQuisque a tortor vel est faucibus vehicula. Fusce rhoncus, nulla eu viverra laoreet, lacus velit feugiat sapien, in commodo metus mi nec dui. Pellentesque vitae lectus feugiat ipsum luctus fermentum id id nulla. Morbi ut enim placerat, consequat ligula congue, pharetra nunc. Pellentesque at blandit libero.\r\n\rVivamus ipsum tortor, tempor non neque et, aliquam efficitur tellus. Sed suscipit suscipit libero, non placerat velit venenatis nec. Proin pretium turpis vel vulputate vestibulum. Morbi fermentum est a orci ullamcorper, eget tristique nibh posuere. Ut metus diam, rutrum vitae dolor ut, pretium posuere urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Fusce dignissim ipsum sed est gravida, vel aliquam diam iaculis.', '2016-09-20', 1, 0, 1),
(27, 'Ex. Title 23', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condimentum tellus sed auctor congue.\r\n\rQuisque a tortor vel est faucibus vehicula. Fusce rhoncus, nulla eu viverra laoreet, lacus velit feugiat sapien, in commodo metus mi nec dui. Pellentesque vitae lectus feugiat ipsum luctus fermentum id id nulla. Morbi ut enim placerat, consequat ligula congue, pharetra nunc. Pellentesque at blandit libero.\r\n\rVivamus ipsum tortor, tempor non neque et, aliquam efficitur tellus. Sed suscipit suscipit libero, non placerat velit venenatis nec. Proin pretium turpis vel vulputate vestibulum. Morbi fermentum est a orci ullamcorper, eget tristique nibh posuere. Ut metus diam, rutrum vitae dolor ut, pretium posuere urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Fusce dignissim ipsum sed est gravida, vel aliquam diam iaculis.', '2017-09-20', 1, 0, 1),
(28, 'Ex. Title 24', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condimentum tellus sed auctor congue.\r\n\rQuisque a tortor vel est faucibus vehicula. Fusce rhoncus, nulla eu viverra laoreet, lacus velit feugiat sapien, in commodo metus mi nec dui. Pellentesque vitae lectus feugiat ipsum luctus fermentum id id nulla. Morbi ut enim placerat, consequat ligula congue, pharetra nunc. Pellentesque at blandit libero.\r\n\rVivamus ipsum tortor, tempor non neque et, aliquam efficitur tellus. Sed suscipit suscipit libero, non placerat velit venenatis nec. Proin pretium turpis vel vulputate vestibulum. Morbi fermentum est a orci ullamcorper, eget tristique nibh posuere. Ut metus diam, rutrum vitae dolor ut, pretium posuere urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Fusce dignissim ipsum sed est gravida, vel aliquam diam iaculis.', '2018-09-20', 1, 0, 1),
(29, 'Ex. Title 25', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condimentum tellus sed auctor congue.\r\n\rQuisque a tortor vel est faucibus vehicula. Fusce rhoncus, nulla eu viverra laoreet, lacus velit feugiat sapien, in commodo metus mi nec dui. Pellentesque vitae lectus feugiat ipsum luctus fermentum id id nulla. Morbi ut enim placerat, consequat ligula congue, pharetra nunc. Pellentesque at blandit libero.\r\n\rVivamus ipsum tortor, tempor non neque et, aliquam efficitur tellus. Sed suscipit suscipit libero, non placerat velit venenatis nec. Proin pretium turpis vel vulputate vestibulum. Morbi fermentum est a orci ullamcorper, eget tristique nibh posuere. Ut metus diam, rutrum vitae dolor ut, pretium posuere urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Fusce dignissim ipsum sed est gravida, vel aliquam diam iaculis.', '2019-09-20', 1, 0, 1),
(30, 'Ex. Title 26', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus co...', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condimentum tellus sed auctor congue.\r\n\r\nQuisque a tortor vel est faucibus vehicula. Fusce rhoncus, nulla eu viverra laoreet, lacus velit feugiat sapien, in commodo metus mi nec dui. Pellentesque vitae lectus feugiat ipsum luctus fermentum id id nulla. Morbi ut enim placerat, consequat ligula congue, pharetra nunc. Pellentesque at blandit libero.\r\n\r\nVivamus ipsum tortor, tempor non neque et, aliquam efficitur tellus. Sed suscipit suscipit libero, non placerat velit venenatis nec. Proin pretium turpis vel vulputate vestibulum. Morbi fermentum est a orci ullamcorper, eget tristique nibh posuere. Ut metus diam, rutrum vitae dolor ut, pretium posuere urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Fusce dignissim ipsum sed est gravida, vel aliquam diam iaculis.', '2020-09-20', 1, 0, 1),
(31, 'Ex. Title 27', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condimentum tellus sed auctor congue.\r\n\rQuisque a tortor vel est faucibus vehicula. Fusce rhoncus, nulla eu viverra laoreet, lacus velit feugiat sapien, in commodo metus mi nec dui. Pellentesque vitae lectus feugiat ipsum luctus fermentum id id nulla. Morbi ut enim placerat, consequat ligula congue, pharetra nunc. Pellentesque at blandit libero.\r\n\rVivamus ipsum tortor, tempor non neque et, aliquam efficitur tellus. Sed suscipit suscipit libero, non placerat velit venenatis nec. Proin pretium turpis vel vulputate vestibulum. Morbi fermentum est a orci ullamcorper, eget tristique nibh posuere. Ut metus diam, rutrum vitae dolor ut, pretium posuere urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Fusce dignissim ipsum sed est gravida, vel aliquam diam iaculis.', '2011-09-20', 1, 0, 1),
(32, 'Ex. Title 28', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condimentum tellus sed auctor congue.\r\n\rQuisque a tortor vel est faucibus vehicula. Fusce rhoncus, nulla eu viverra laoreet, lacus velit feugiat sapien, in commodo metus mi nec dui. Pellentesque vitae lectus feugiat ipsum luctus fermentum id id nulla. Morbi ut enim placerat, consequat ligula congue, pharetra nunc. Pellentesque at blandit libero.\r\n\rVivamus ipsum tortor, tempor non neque et, aliquam efficitur tellus. Sed suscipit suscipit libero, non placerat velit venenatis nec. Proin pretium turpis vel vulputate vestibulum. Morbi fermentum est a orci ullamcorper, eget tristique nibh posuere. Ut metus diam, rutrum vitae dolor ut, pretium posuere urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Fusce dignissim ipsum sed est gravida, vel aliquam diam iaculis.', '2012-09-20', 1, 0, 1),
(33, 'Ex. Title 29', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condimentum tellus sed auctor congue.\r\n\rQuisque a tortor vel est faucibus vehicula. Fusce rhoncus, nulla eu viverra laoreet, lacus velit feugiat sapien, in commodo metus mi nec dui. Pellentesque vitae lectus feugiat ipsum luctus fermentum id id nulla. Morbi ut enim placerat, consequat ligula congue, pharetra nunc. Pellentesque at blandit libero.\r\n\rVivamus ipsum tortor, tempor non neque et, aliquam efficitur tellus. Sed suscipit suscipit libero, non placerat velit venenatis nec. Proin pretium turpis vel vulputate vestibulum. Morbi fermentum est a orci ullamcorper, eget tristique nibh posuere. Ut metus diam, rutrum vitae dolor ut, pretium posuere urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Fusce dignissim ipsum sed est gravida, vel aliquam diam iaculis.', '2013-09-20', 1, 0, 1),
(34, 'Ex. Title 30', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condimentum tellus sed auctor congue.\r\n\rQuisque a tortor vel est faucibus vehicula. Fusce rhoncus, nulla eu viverra laoreet, lacus velit feugiat sapien, in commodo metus mi nec dui. Pellentesque vitae lectus feugiat ipsum luctus fermentum id id nulla. Morbi ut enim placerat, consequat ligula congue, pharetra nunc. Pellentesque at blandit libero.\r\n\rVivamus ipsum tortor, tempor non neque et, aliquam efficitur tellus. Sed suscipit suscipit libero, non placerat velit venenatis nec. Proin pretium turpis vel vulputate vestibulum. Morbi fermentum est a orci ullamcorper, eget tristique nibh posuere. Ut metus diam, rutrum vitae dolor ut, pretium posuere urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Fusce dignissim ipsum sed est gravida, vel aliquam diam iaculis.', '2014-09-20', 1, 0, 1),
(35, 'Ex. Title 31', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condimentum tellus sed auctor congue.\r\n\rQuisque a tortor vel est faucibus vehicula. Fusce rhoncus, nulla eu viverra laoreet, lacus velit feugiat sapien, in commodo metus mi nec dui. Pellentesque vitae lectus feugiat ipsum luctus fermentum id id nulla. Morbi ut enim placerat, consequat ligula congue, pharetra nunc. Pellentesque at blandit libero.\r\n\rVivamus ipsum tortor, tempor non neque et, aliquam efficitur tellus. Sed suscipit suscipit libero, non placerat velit venenatis nec. Proin pretium turpis vel vulputate vestibulum. Morbi fermentum est a orci ullamcorper, eget tristique nibh posuere. Ut metus diam, rutrum vitae dolor ut, pretium posuere urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Fusce dignissim ipsum sed est gravida, vel aliquam diam iaculis.', '2015-09-20', 1, 0, 1),
(36, 'Ex. Title 32', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condimentum tellus sed auctor congue.\r\n\rQuisque a tortor vel est faucibus vehicula. Fusce rhoncus, nulla eu viverra laoreet, lacus velit feugiat sapien, in commodo metus mi nec dui. Pellentesque vitae lectus feugiat ipsum luctus fermentum id id nulla. Morbi ut enim placerat, consequat ligula congue, pharetra nunc. Pellentesque at blandit libero.\r\n\rVivamus ipsum tortor, tempor non neque et, aliquam efficitur tellus. Sed suscipit suscipit libero, non placerat velit venenatis nec. Proin pretium turpis vel vulputate vestibulum. Morbi fermentum est a orci ullamcorper, eget tristique nibh posuere. Ut metus diam, rutrum vitae dolor ut, pretium posuere urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Fusce dignissim ipsum sed est gravida, vel aliquam diam iaculis.', '2016-09-20', 1, 0, 1),
(37, 'Ex. Title 33', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condimentum tellus sed auctor congue.\r\n\rQuisque a tortor vel est faucibus vehicula. Fusce rhoncus, nulla eu viverra laoreet, lacus velit feugiat sapien, in commodo metus mi nec dui. Pellentesque vitae lectus feugiat ipsum luctus fermentum id id nulla. Morbi ut enim placerat, consequat ligula congue, pharetra nunc. Pellentesque at blandit libero.\r\n\rVivamus ipsum tortor, tempor non neque et, aliquam efficitur tellus. Sed suscipit suscipit libero, non placerat velit venenatis nec. Proin pretium turpis vel vulputate vestibulum. Morbi fermentum est a orci ullamcorper, eget tristique nibh posuere. Ut metus diam, rutrum vitae dolor ut, pretium posuere urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Fusce dignissim ipsum sed est gravida, vel aliquam diam iaculis.', '2007-09-20', 1, 0, 1),
(38, 'Ex. Title 34', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condimentum tellus sed auctor congue.\r\n\rQuisque a tortor vel est faucibus vehicula. Fusce rhoncus, nulla eu viverra laoreet, lacus velit feugiat sapien, in commodo metus mi nec dui. Pellentesque vitae lectus feugiat ipsum luctus fermentum id id nulla. Morbi ut enim placerat, consequat ligula congue, pharetra nunc. Pellentesque at blandit libero.\r\n\rVivamus ipsum tortor, tempor non neque et, aliquam efficitur tellus. Sed suscipit suscipit libero, non placerat velit venenatis nec. Proin pretium turpis vel vulputate vestibulum. Morbi fermentum est a orci ullamcorper, eget tristique nibh posuere. Ut metus diam, rutrum vitae dolor ut, pretium posuere urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Fusce dignissim ipsum sed est gravida, vel aliquam diam iaculis.', '2018-09-20', 1, 0, 1),
(39, 'Ex. Title 35', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condimentum tellus sed auctor congue.\r\n\rQuisque a tortor vel est faucibus vehicula. Fusce rhoncus, nulla eu viverra laoreet, lacus velit feugiat sapien, in commodo metus mi nec dui. Pellentesque vitae lectus feugiat ipsum luctus fermentum id id nulla. Morbi ut enim placerat, consequat ligula congue, pharetra nunc. Pellentesque at blandit libero.\r\n\rVivamus ipsum tortor, tempor non neque et, aliquam efficitur tellus. Sed suscipit suscipit libero, non placerat velit venenatis nec. Proin pretium turpis vel vulputate vestibulum. Morbi fermentum est a orci ullamcorper, eget tristique nibh posuere. Ut metus diam, rutrum vitae dolor ut, pretium posuere urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Fusce dignissim ipsum sed est gravida, vel aliquam diam iaculis.', '2010-09-20', 1, 0, 1),
(40, 'Ex. Title 36', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condimentum tellus sed auctor congue.\r\n\rQuisque a tortor vel est faucibus vehicula. Fusce rhoncus, nulla eu viverra laoreet, lacus velit feugiat sapien, in commodo metus mi nec dui. Pellentesque vitae lectus feugiat ipsum luctus fermentum id id nulla. Morbi ut enim placerat, consequat ligula congue, pharetra nunc. Pellentesque at blandit libero.\r\n\rVivamus ipsum tortor, tempor non neque et, aliquam efficitur tellus. Sed suscipit suscipit libero, non placerat velit venenatis nec. Proin pretium turpis vel vulputate vestibulum. Morbi fermentum est a orci ullamcorper, eget tristique nibh posuere. Ut metus diam, rutrum vitae dolor ut, pretium posuere urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Fusce dignissim ipsum sed est gravida, vel aliquam diam iaculis.', '2017-09-20', 1, 0, 1),
(41, 'Ex. Title 37', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condimentum tellus sed auctor congue.\r\n\rQuisque a tortor vel est faucibus vehicula. Fusce rhoncus, nulla eu viverra laoreet, lacus velit feugiat sapien, in commodo metus mi nec dui. Pellentesque vitae lectus feugiat ipsum luctus fermentum id id nulla. Morbi ut enim placerat, consequat ligula congue, pharetra nunc. Pellentesque at blandit libero.\r\n\rVivamus ipsum tortor, tempor non neque et, aliquam efficitur tellus. Sed suscipit suscipit libero, non placerat velit venenatis nec. Proin pretium turpis vel vulputate vestibulum. Morbi fermentum est a orci ullamcorper, eget tristique nibh posuere. Ut metus diam, rutrum vitae dolor ut, pretium posuere urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Fusce dignissim ipsum sed est gravida, vel aliquam diam iaculis.', '0001-10-20', 1, 0, 1),
(42, 'Ex. Title 38', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condimentum tellus sed auctor congue.\r\n\rQuisque a tortor vel est faucibus vehicula. Fusce rhoncus, nulla eu viverra laoreet, lacus velit feugiat sapien, in commodo metus mi nec dui. Pellentesque vitae lectus feugiat ipsum luctus fermentum id id nulla. Morbi ut enim placerat, consequat ligula congue, pharetra nunc. Pellentesque at blandit libero.\r\n\rVivamus ipsum tortor, tempor non neque et, aliquam efficitur tellus. Sed suscipit suscipit libero, non placerat velit venenatis nec. Proin pretium turpis vel vulputate vestibulum. Morbi fermentum est a orci ullamcorper, eget tristique nibh posuere. Ut metus diam, rutrum vitae dolor ut, pretium posuere urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Fusce dignissim ipsum sed est gravida, vel aliquam diam iaculis.', '0002-10-20', 1, 0, 1),
(43, 'Ex. Title 39', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condimentum tellus sed auctor congue.\r\n\rQuisque a tortor vel est faucibus vehicula. Fusce rhoncus, nulla eu viverra laoreet, lacus velit feugiat sapien, in commodo metus mi nec dui. Pellentesque vitae lectus feugiat ipsum luctus fermentum id id nulla. Morbi ut enim placerat, consequat ligula congue, pharetra nunc. Pellentesque at blandit libero.\r\n\rVivamus ipsum tortor, tempor non neque et, aliquam efficitur tellus. Sed suscipit suscipit libero, non placerat velit venenatis nec. Proin pretium turpis vel vulputate vestibulum. Morbi fermentum est a orci ullamcorper, eget tristique nibh posuere. Ut metus diam, rutrum vitae dolor ut, pretium posuere urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Fusce dignissim ipsum sed est gravida, vel aliquam diam iaculis.', '0003-10-20', 1, 0, 1),
(44, 'Ex. Title 40', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condimentum tellus sed auctor congue.\r\n\rQuisque a tortor vel est faucibus vehicula. Fusce rhoncus, nulla eu viverra laoreet, lacus velit feugiat sapien, in commodo metus mi nec dui. Pellentesque vitae lectus feugiat ipsum luctus fermentum id id nulla. Morbi ut enim placerat, consequat ligula congue, pharetra nunc. Pellentesque at blandit libero.\r\n\rVivamus ipsum tortor, tempor non neque et, aliquam efficitur tellus. Sed suscipit suscipit libero, non placerat velit venenatis nec. Proin pretium turpis vel vulputate vestibulum. Morbi fermentum est a orci ullamcorper, eget tristique nibh posuere. Ut metus diam, rutrum vitae dolor ut, pretium posuere urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Fusce dignissim ipsum sed est gravida, vel aliquam diam iaculis.', '0004-10-20', 1, 0, 1),
(45, 'Ex. Title 41', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condimentum tellus sed auctor congue.\r\n\rQuisque a tortor vel est faucibus vehicula. Fusce rhoncus, nulla eu viverra laoreet, lacus velit feugiat sapien, in commodo metus mi nec dui. Pellentesque vitae lectus feugiat ipsum luctus fermentum id id nulla. Morbi ut enim placerat, consequat ligula congue, pharetra nunc. Pellentesque at blandit libero.\r\n\rVivamus ipsum tortor, tempor non neque et, aliquam efficitur tellus. Sed suscipit suscipit libero, non placerat velit venenatis nec. Proin pretium turpis vel vulputate vestibulum. Morbi fermentum est a orci ullamcorper, eget tristique nibh posuere. Ut metus diam, rutrum vitae dolor ut, pretium posuere urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Fusce dignissim ipsum sed est gravida, vel aliquam diam iaculis.', '0005-10-20', 1, 0, 1),
(46, 'Ex. Title 42', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condimentum tellus sed auctor congue.\r\n\rQuisque a tortor vel est faucibus vehicula. Fusce rhoncus, nulla eu viverra laoreet, lacus velit feugiat sapien, in commodo metus mi nec dui. Pellentesque vitae lectus feugiat ipsum luctus fermentum id id nulla. Morbi ut enim placerat, consequat ligula congue, pharetra nunc. Pellentesque at blandit libero.\r\n\rVivamus ipsum tortor, tempor non neque et, aliquam efficitur tellus. Sed suscipit suscipit libero, non placerat velit venenatis nec. Proin pretium turpis vel vulputate vestibulum. Morbi fermentum est a orci ullamcorper, eget tristique nibh posuere. Ut metus diam, rutrum vitae dolor ut, pretium posuere urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Fusce dignissim ipsum sed est gravida, vel aliquam diam iaculis.', '0006-10-20', 1, 0, 1),
(47, 'Ex. Title 43', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condimentum tellus sed auctor congue.\r\n\rQuisque a tortor vel est faucibus vehicula. Fusce rhoncus, nulla eu viverra laoreet, lacus velit feugiat sapien, in commodo metus mi nec dui. Pellentesque vitae lectus feugiat ipsum luctus fermentum id id nulla. Morbi ut enim placerat, consequat ligula congue, pharetra nunc. Pellentesque at blandit libero.\r\n\rVivamus ipsum tortor, tempor non neque et, aliquam efficitur tellus. Sed suscipit suscipit libero, non placerat velit venenatis nec. Proin pretium turpis vel vulputate vestibulum. Morbi fermentum est a orci ullamcorper, eget tristique nibh posuere. Ut metus diam, rutrum vitae dolor ut, pretium posuere urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Fusce dignissim ipsum sed est gravida, vel aliquam diam iaculis.', '0007-10-20', 1, 0, 1),
(48, 'Ex. Title 44', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condimentum tellus sed auctor congue.\r\n\rQuisque a tortor vel est faucibus vehicula. Fusce rhoncus, nulla eu viverra laoreet, lacus velit feugiat sapien, in commodo metus mi nec dui. Pellentesque vitae lectus feugiat ipsum luctus fermentum id id nulla. Morbi ut enim placerat, consequat ligula congue, pharetra nunc. Pellentesque at blandit libero.\r\n\rVivamus ipsum tortor, tempor non neque et, aliquam efficitur tellus. Sed suscipit suscipit libero, non placerat velit venenatis nec. Proin pretium turpis vel vulputate vestibulum. Morbi fermentum est a orci ullamcorper, eget tristique nibh posuere. Ut metus diam, rutrum vitae dolor ut, pretium posuere urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Fusce dignissim ipsum sed est gravida, vel aliquam diam iaculis.', '0008-10-20', 1, 0, 1),
(49, 'Ex. Title 45', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condimentum tellus sed auctor congue.\r\n\rQuisque a tortor vel est faucibus vehicula. Fusce rhoncus, nulla eu viverra laoreet, lacus velit feugiat sapien, in commodo metus mi nec dui. Pellentesque vitae lectus feugiat ipsum luctus fermentum id id nulla. Morbi ut enim placerat, consequat ligula congue, pharetra nunc. Pellentesque at blandit libero.\r\n\rVivamus ipsum tortor, tempor non neque et, aliquam efficitur tellus. Sed suscipit suscipit libero, non placerat velit venenatis nec. Proin pretium turpis vel vulputate vestibulum. Morbi fermentum est a orci ullamcorper, eget tristique nibh posuere. Ut metus diam, rutrum vitae dolor ut, pretium posuere urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Fusce dignissim ipsum sed est gravida, vel aliquam diam iaculis.', '0009-10-20', 1, 0, 1);
INSERT INTO `tbl_articles` (`AID`, `Title`, `Description`, `Content`, `Date`, `Author`, `Featured`, `Moderated`) VALUES
(50, 'Ex. Title 46', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus co...', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condimentum tellus sed auctor congue.\r\n\r\nQuisque a tortor vel est faucibus vehicula. Fusce rhoncus, nulla eu viverra laoreet, lacus velit feugiat sapien, in commodo metus mi nec dui. Pellentesque vitae lectus feugiat ipsum luctus fermentum id id nulla. Morbi ut enim placerat, consequat ligula congue, pharetra nunc. Pellentesque at blandit libero.\r\n\r\nVivamus ipsum tortor, tempor non neque et, aliquam efficitur tellus. Sed suscipit suscipit libero, non placerat velit venenatis nec. Proin pretium turpis vel vulputate vestibulum. Morbi fermentum est a orci ullamcorper, eget tristique nibh posuere. Ut metus diam, rutrum vitae dolor ut, pretium posuere urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Fusce dignissim ipsum sed est gravida, vel aliquam diam iaculis.', '2010-10-20', 1, 0, 0),
(51, 'Ex Article 47', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus co...', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condimentum tellus sed auctor congue.\r\n\r\nQuisque a tortor vel est faucibus vehicula. Fusce rhoncus, nulla eu viverra laoreet, lacus velit feugiat sapien, in commodo metus mi nec dui. Pellentesque vitae lectus feugiat ipsum luctus fermentum id id nulla. Morbi ut enim placerat, consequat ligula congue, pharetra nunc. Pellentesque at blandit libero.\r\n\r\nVivamus ipsum tortor, tempor non neque et, aliquam efficitur tellus. Sed suscipit suscipit libero, non placerat velit venenatis nec. Proin pretium turpis vel vulputate vestibulum. Morbi fermentum est a orci ullamcorper, eget tristique nibh posuere. Ut metus diam, rutrum vitae dolor ut, pretium posuere urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Fusce dignissim ipsum sed est gravida, vel aliquam diam iaculis.', '2020-09-21', 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_interest`
--

CREATE TABLE `tbl_interest` (
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
  `PostCode` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_interest`
--

INSERT INTO `tbl_interest` (`ID`, `NameF`, `NameS`, `Email`, `Mobile`, `StreetNum`, `UnitNum`, `StreetName`, `City`, `Suburb`, `PostCode`) VALUES
(1, 'Cain', 'Garcia', 'name.last@example.com', '0225557432', 123, NULL, 'Main North Road', 'Christchutch', 'Redwood', 8051);

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
  `Publish` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`ID`, `NameF`, `NameS`, `Email`, `Mobile`, `StreetNum`, `UnitNum`, `StreetName`, `City`, `Suburb`, `PostCode`, `UserName`, `Password`, `Admin`, `Active`, `Publish`) VALUES
(1, 'Admin', 'Admin', 'admin@admin.com', '0000000', 12, '212', 'Tester', 'Tester', 'Test', 1111, 'Admin', '$2y$10$tMkgQx99Wq9neWRT7d3.D.MGaEX5qMutcz2eaMyWIehZNg9jVMg4e', 1, 1, 1),
(2, 'Example', 'User', 'example.user@gmail.com', '3141592653', 123, NULL, 'Main St', 'Christchurch', 'Redwood', 8051, 'ExUser', '$2y$10$uNvEJeTcToc0zaTNfpLcxOY6ZVh43u3/mJ.ste6wsPpfXXOOYItVa', 0, 1, 1),
(3, 'Andrew', 'Grant', 'Test@user.com', 'N', 4, NULL, 'Faulks', 'Chc', 'Lin', 7608, 'andosgee', '$2y$10$seHV7/5NtlDvOB2UicFeWuXqn3Lt2wMLFYM8B2Abx/MOvFIqOmS1C', 0, 1, 0);

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
-- Table structure for table `tbl_newsreg`
--

CREATE TABLE `tbl_newsreg` (
  `UID` int(11) NOT NULL,
  `Email` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_newsreg`
--

INSERT INTO `tbl_newsreg` (`UID`, `Email`) VALUES
(1, 'wfd');

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
  MODIFY `AID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `tbl_interest`
--
ALTER TABLE `tbl_interest`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
-- AUTO_INCREMENT for table `tbl_newsreg`
--
ALTER TABLE `tbl_newsreg`
  MODIFY `UID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
