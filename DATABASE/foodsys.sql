-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2021 at 10:59 PM
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
-- Database: `foodsys`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `username`, `password`) VALUES
(1, 'admin', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryid` int(11) NOT NULL,
  `catname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryid`, `catname`) VALUES
(15, 'Spaghetti'),
(16, 'Makaronaa'),
(17, 'Pizza'),
(18, 'Pijet');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productid` int(11) NOT NULL,
  `categoryid` int(1) NOT NULL,
  `productname` varchar(30) NOT NULL,
  `price` double NOT NULL,
  `photo` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productid`, `categoryid`, `productname`, `price`, `photo`) VALUES
(43, 15, 'Spaghetti', 50, 'upload/spagheti1_1624749423.jpg'),
(44, 15, 'Spaghetti 2', 23, 'upload/spagheti2_1624749449.jpg'),
(45, 15, 'Spaghetti 3', 44, 'upload/spagheti3_1624749471.jpg'),
(46, 16, 'Makarona 1', 18, 'upload/makarona1_1624749590.jpg'),
(48, 16, 'Makarona 3', 83, 'upload/makarona3_1624749654.jpg'),
(49, 17, 'Pizza 1 ', 42, 'upload/piza1_1624749778.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `purchaseid` int(11) NOT NULL,
  `customer` varchar(50) NOT NULL,
  `total` double NOT NULL,
  `date_purchase` datetime NOT NULL,
  `number` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`purchaseid`, `customer`, `total`, `date_purchase`, `number`) VALUES
(48, 'Enis', 305917, '2021-06-29 23:47:28', 9);

-- --------------------------------------------------------

--
-- Table structure for table `purchase_detail`
--

CREATE TABLE `purchase_detail` (
  `pdid` int(11) NOT NULL,
  `purchaseid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase_detail`
--

INSERT INTO `purchase_detail` (`pdid`, `purchaseid`, `productid`, `quantity`) VALUES
(13, 8, 15, 2),
(14, 8, 17, 2),
(15, 8, 18, 2),
(16, 9, 15, 3),
(17, 10, 15, 2),
(18, 10, 17, 6),
(19, 11, 15, 3),
(20, 11, 21, 0),
(21, 12, 15, 3),
(22, 12, 20, 4),
(23, 12, 23, 2),
(24, 13, 15, 4),
(25, 13, 23, 4),
(26, 14, 14, 0),
(27, 15, 19, 0),
(28, 15, 18, 0),
(29, 16, 19, 0),
(30, 16, 18, 0),
(31, 17, 19, 0),
(32, 17, 18, 0),
(33, 18, 15, 2),
(34, 19, 16, 1),
(35, 19, 17, 1),
(36, 19, 18, 4),
(37, 20, 22, 300),
(38, 20, 14, 120),
(39, 20, 15, 1),
(40, 20, 21, 500),
(41, 20, 16, 2),
(42, 21, 22, 3),
(43, 21, 14, 3),
(44, 21, 23, 3),
(45, 22, 21, 2),
(46, 22, 35, 3),
(47, 22, 20, 5),
(48, 23, 22, 6),
(49, 23, 35, 5),
(50, 23, 23, 5),
(51, 24, 22, 4),
(52, 24, 35, 4),
(53, 24, 17, 4),
(54, 24, 23, 2),
(55, 24, 36, 2),
(56, 25, 22, 2000),
(57, 25, 21, 2000),
(58, 25, 20, 2000),
(59, 25, 36, 2000),
(60, 25, 38, 2000),
(61, 26, 22, 6),
(62, 26, 14, 6),
(63, 27, 38, 20),
(64, 28, 38, 22),
(65, 29, 22, 5),
(66, 29, 15, 5),
(67, 29, 35, 5),
(68, 29, 23, 5),
(69, 29, 18, 4),
(70, 30, 35, 2),
(71, 30, 17, 2),
(72, 30, 37, 2),
(73, 31, 14, 5),
(74, 31, 20, 500),
(75, 31, 36, 60),
(76, 31, 39, 600),
(77, 31, 38, 600),
(78, 32, 35, 4),
(79, 32, 17, 4),
(80, 32, 20, 0),
(81, 32, 23, 4),
(82, 32, 38, 1),
(83, 33, 40, 20),
(84, 34, 22, 5),
(85, 34, 14, 5),
(86, 35, 22, 3),
(87, 35, 35, 3),
(88, 35, 37, 2),
(89, 35, 18, 1),
(90, 35, 40, 3),
(91, 36, 21, 22),
(92, 37, 23, 10),
(93, 38, 22, 1000),
(94, 38, 14, 1000),
(95, 38, 15, 1000),
(96, 38, 21, 1000),
(97, 38, 35, 1000),
(98, 38, 16, 1000),
(99, 38, 17, 1000),
(100, 38, 20, 1000),
(101, 38, 37, 1000),
(102, 38, 23, 1000),
(103, 38, 18, 1000),
(104, 38, 36, 1000),
(105, 38, 39, 1000),
(106, 38, 40, 1000),
(107, 39, 22, 2),
(108, 39, 15, 5),
(109, 39, 40, 10),
(110, 40, 36, 10),
(111, 41, 37, 10),
(112, 42, 22, 2),
(113, 42, 21, 3),
(114, 42, 37, 3),
(115, 42, 23, 3),
(116, 43, 35, 2),
(117, 43, 16, 3),
(118, 43, 20, 5),
(119, 43, 41, 4),
(120, 44, 22, 6),
(121, 44, 21, 4),
(122, 44, 39, 4),
(123, 44, 40, 5),
(124, 45, 22, 5),
(125, 45, 35, 5),
(126, 46, 22, 1000),
(127, 46, 14, 200),
(128, 47, 22, 2000),
(129, 47, 15, 50),
(130, 48, 43, 60),
(131, 48, 44, 54),
(132, 48, 48, 95),
(133, 48, 49, 6995);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productid`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`purchaseid`);

--
-- Indexes for table `purchase_detail`
--
ALTER TABLE `purchase_detail`
  ADD PRIMARY KEY (`pdid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `purchaseid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `purchase_detail`
--
ALTER TABLE `purchase_detail`
  MODIFY `pdid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
