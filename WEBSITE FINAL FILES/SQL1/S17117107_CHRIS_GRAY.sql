-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 09, 2019 at 11:25 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `S17117107_CHRIS_GRAY`
--

-- --------------------------------------------------------

--
-- Table structure for table `Administration`
--

CREATE TABLE `Administration` (
  `Email` int(255) NOT NULL,
  `Password` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `FIRST_NAME` varchar(255) DEFAULT NULL,
  `LAST_NAME` varchar(255) DEFAULT NULL,
  `EMAIL` varchar(255) DEFAULT NULL,
  `PASSWORD` varchar(255) DEFAULT NULL,
  `ADDRESSS` varchar(255) DEFAULT NULL,
  `PHONENUMBER` varchar(255) DEFAULT NULL,
  `CITY` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `FIRST_NAME`, `LAST_NAME`, `EMAIL`, `PASSWORD`, `ADDRESSS`, `PHONENUMBER`, `CITY`) VALUES
(1, 'CHRIS', 'GRAY', 'CJGRAY@HOTMAIL.COM', '1234', '1 BROAD ST', '01212560798', 'BIRMINGHAM'),
(2, 'JAMES', 'DEGALE', 'JD1@rocketmail.com', '2345', ' 3 New Road', '01614469403', 'LONDON'),
(3, 'KEVIN', 'HART', 'KEVIN_H@googllemail.com', '12345', '99 Capliano Street', '01214443222', 'BIRMINGHAM'),
(4, 'BOBBY', 'EWING', 'BOBBIE1@gmail.com', '6969', '4 Dallas Avenue', '0777989087', 'SWINDOW'),
(5, 'JACOB', 'CREEK', 'JK1@hotmail.co.uk', '5555', '32 Chocolate Road', '01627003765', 'BIRMINGHAM'),
(6, 'TOMMY', 'GUNN', 'TGUNN@ricemail.com', '98765', '4 Leaf Street West', '03321997534', 'COVENTRY'),
(7, 'BETTY', 'SWEATY', 'BSWEATY@toolmail.com', '01234', '68 Jiggins Lane', '01123887334', 'LONDON'),
(8, 'LIONEL', 'RICHTEA', 'L_RICHTEA@bubblemail.com', '1234', 'Flat NO2 Worldly Road', '01217764423', 'MANCHESTER'),
(9, 'JANE', 'NORMAN', 'JNK@rocketmail.com', '765', '5 House Street', '01553442098', 'BRISTOL'),
(10, 'KATIE', 'PRICE', 'KPRICE@juggmail.com', '1111', '34 Winsdor road', '07777772212', 'KENT');

-- --------------------------------------------------------

--
-- Table structure for table `shoe`
--

CREATE TABLE `shoe` (
  `Male_Female` varchar(255) DEFAULT NULL,
  `Shoe_id` int(255) NOT NULL,
  `Size` varchar(255) DEFAULT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Colour` varchar(255) DEFAULT NULL,
  `Brand` varchar(255) DEFAULT NULL,
  `Image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shoe`
--

INSERT INTO `shoe` (`Male_Female`, `Shoe_id`, `Size`, `Name`, `Colour`, `Brand`, `Image`) VALUES
('Male', 1, 'All sizes', 'Black Clarks', 'Black', 'Clarks', 'clarks_4.jpg'),
('Male', 2, 'All sizes', 'Brown Busy Clarks', 'Brown only', 'Clarks', 'clarks_3.jpg'),
('Male', 3, 'All sizes', 'Black Bag Clarks', 'Black only', 'Clarks', 'clarks_2.jpg'),
('Male_female', 4, 'All sizes', 'addidas style', 'Black, blue, green.', 'Addidas', 'addidas_2.jpg'),
('Male_female', 5, 'All sizes', 'addidas chips', 'Black, blue, green,red.', 'Addidas', 'addidas_5.jpg'),
('Male_female', 6, 'All sizes', 'addidas tango', 'Black, blue, green,red.', 'Addidas', 'addidas_6.jpg'),
('Female', 7, 'limited sizes', 'Gina', 'Black', 'Gina', 'Gina_3.jpg'),
('Female', 8, 'Most sizes', 'Gina', 'Black, silver', 'Gina', 'Gina_2.jpg'),
('Female', 9, 'Most sizes', 'Jimmy choo train', 'Black, blue, silver', 'Jimmy choo', 'jimmy_Choo_2.jpg'),
('Female', 10, 'limited sizes', 'I luv Jimmy choo ', 'Black, blue, silver', 'Jimmy choo', 'jimmy_Choo_1.jpg'),
('Male', 11, 'Most sizes', 'nike ttt3', 'black and various', 'nike', 'nike_2.jpg'),
('Male_Female', 12, 'Most sizes', 'nike 101', 'black and various', 'nike', 'nike_4.jpg'),
('Male_Female', 13, 'Most sizes', 'Puma king', 'black and various', 'Puma', 'Puma_4.jpg'),
('Male_Female', 14, 'Most sizes', 'Puma fire', 'black and various', 'Puma', 'Puma_2.jpg'),
('Female', 15, 'Most sizes', 'Yull', 'Black, silver', 'Yull', 'yull_2.jpg'),
('Female', 16, 'Most sizes', 'Yull fashionable', 'Black, silver', 'Yull', 'yull_6.jpg'),
('Female', 17, 'limited sizes', 'Yull Top', 'Any', 'Yull', 'yull_7.jpg'),
('Female', 18, 'limited sizes', 'Teddy teds', 'Any', 'ted baker', 'ted_baker4.jpg'),
('Female', 19, 'All sizes', 'Teddy weds', 'Any', 'ted baker', 'ted_baker1.jpg'),
('Female', 20, 'All sizes', 'Teddy beds', 'Any', 'ted baker', 'ted_baker2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `Shoe_Orders`
--

CREATE TABLE `Shoe_Orders` (
  `Order_ID` int(255) NOT NULL,
  `Customer_ID` int(255) NOT NULL,
  `Shoe_ID` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shoe`
--
ALTER TABLE `shoe`
  ADD PRIMARY KEY (`Shoe_id`);

--
-- Indexes for table `Shoe_Orders`
--
ALTER TABLE `Shoe_Orders`
  ADD PRIMARY KEY (`Order_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `shoe`
--
ALTER TABLE `shoe`
  MODIFY `Shoe_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `Shoe_Orders`
--
ALTER TABLE `Shoe_Orders`
  MODIFY `Order_ID` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
