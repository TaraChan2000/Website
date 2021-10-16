-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2021 at 06:49 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_shopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `Cat_ID` varchar(10) NOT NULL,
  `Cat_Name` varchar(30) NOT NULL,
  `Cat_Des` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`Cat_ID`, `Cat_Name`, `Cat_Des`) VALUES
('C01', 'Cat Food', 'Cat food products'),
('P01', 'Dog Food', 'Dog food products'),
('S01', 'Pet shampoo', 'Pet shampoo products');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Username` varchar(20) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `CustName` varchar(30) NOT NULL,
  `gender` int(11) NOT NULL,
  `Address` varchar(1000) NOT NULL,
  `telephone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `CusDate` int(11) NOT NULL,
  `CusMonth` int(11) NOT NULL,
  `CusYear` int(11) NOT NULL,
  `SSN` varchar(10) DEFAULT NULL,
  `ActiveCode` varchar(100) NOT NULL,
  `state` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Username`, `Password`, `CustName`, `gender`, `Address`, `telephone`, `email`, `CusDate`, `CusMonth`, `CusYear`, `SSN`, `ActiveCode`, `state`) VALUES
('aaaaaa', '1bbd886460827015e5d605ed44252251', 'aaaaaaaaa', 1, 'can tho', '1234567890', 'aaaaaaa@mail.com', 20, 12, 1984, '', '', 0),
('admin', 'e10adc3949ba59abbe56e057f20f883e', 'Danh Chan Tara', 0, 'can tho', '0293876890', 'taradctgcc19004@fpt.edu.vn', 14, 7, 2000, '', '', 1),
('admin1', 'e10adc3949ba59abbe56e057f20f883e', 'Danh Chan Tara', 0, 'can tho', '0293876890', 'taradctgcc1900@fpt.edu.vn', 7, 11, 1979, '', '', 0),
('nguyensieu', '1bbd886460827015e5d605ed44252251', 'Nguyen Sieu', 0, 'can tho', '0123456789', 'ns@mail.com', 13, 9, 1983, '', '', 0),
('Tarachan', 'e10adc3949ba59abbe56e057f20f883e', 'Danh Chan Tara', 0, 'can tho', '0293876897', 'taradctgcc19002@fpt.edu.vn', 14, 9, 1982, '', '', 0),
('Tester', '25f9e794323b453885f5181f1b624d0b', 'Customer', 0, 'can tho', '123456555', 't1@mail.com', 18, 12, 1986, '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Product_ID` varchar(10) NOT NULL,
  `Product_Name` varchar(30) NOT NULL,
  `Price` bigint(20) NOT NULL,
  `oldPrice` decimal(12,2) NOT NULL,
  `SmallDesc` varchar(1000) NOT NULL,
  `DetailDesc` text NOT NULL,
  `ProDate` datetime NOT NULL,
  `Pro_qty` int(11) NOT NULL,
  `Pro_image` varchar(200) NOT NULL,
  `Cat_ID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Product_ID`, `Product_Name`, `Price`, `oldPrice`, `SmallDesc`, `DetailDesc`, `ProDate`, `Pro_qty`, `Pro_image`, `Cat_ID`) VALUES
('C02', 'Food for grown-ups Persian cat', 250000, '0.00', 'Food for grown-ups Persian cats', '<p>\r\n	Food for grown-ups Persian cats</p>\r\n', '2021-05-14 20:09:38', 35, '5.jpg', 'C01'),
('C03', 'Food for mother and kittens', 230000, '0.00', 'Food for mother and kittens', '<h2 style=\"box-sizing: inherit; font-family: &quot;Segoe UI&quot;, Arial, sans-serif; font-weight: 400; line-height: 25px; color: rgb(0, 0, 0); margin: 15px 0px 10px; font-size: 18px;\">\r\n	<a href=\"http://localhost:1000/Website/?page=menu&amp;ma=P06\" style=\"box-sizing: inherit; background: transparent; color: rgb(34, 34, 34); text-decoration-line: none; transition: all 300ms ease 0s;\">Food for mother and kittens</a></h2>\r\n', '2021-05-14 20:12:47', 35, '6.jpg', 'C01'),
('C04', 'Pate gives cats chicken and cr', 180000, '0.00', 'Pate gives cats chicken and crab flavors', '<p>\r\n	Pate gives cats chicken and crab flavors</p>\r\n', '2021-05-14 20:14:00', 55, '9.jpg', 'C01'),
('P01', 'The cake gives the dog the tas', 170000, '0.00', 'The cake gives the dog the taste of fresh vegetables', '<p>\r\n	<span style=\"color: rgb(0, 0, 0); font-family: Nunito, sans-serif; font-size: 16px;\">The cake gives the dog the taste of fresh vegetables</span></p>\r\n', '2021-05-14 08:10:18', 20, '1.jpg', 'P01'),
('P04', 'Clean teeth teeth for dogs wit', 190000, '0.00', 'Clean teeth teeth for dogs with synthetic taste', '<p>\r\n	<span style=\"color: rgb(0, 0, 0); font-family: Nunito, sans-serif; font-size: 16px;\">Clean teeth teeth for dogs with synthetic taste</span></p>\r\n', '2021-05-14 08:02:34', 45, '4.jpg', 'P01'),
('P07', 'Pate gives adult dogs the tast', 180000, '0.00', 'Pate gives adult dogs the taste of chicken', '<p>\r\n	<span style=\"color: rgb(0, 0, 0); font-family: Nunito, sans-serif; font-size: 16px;\">Pate gives adult dogs the taste of chicken</span></p>\r\n', '2021-05-14 08:05:21', 30, '7.jpg', 'P01'),
('S01', 'Conditioner for dogs and cats ', 300000, '0.00', 'Conditioner for dogs and cats to restore hair', '<p>\r\n	Conditioner for dogs and cats to restore hair</p>\r\n', '2021-05-14 20:19:11', 45, '15.jpg', 'S01'),
('S02', 'Red-brown dog shower gel', 250000, '0.00', 'Red-brown dog shower gel', '<p>\r\n	Red-brown dog shower gel</p>\r\n', '2021-05-16 20:04:23', 20, '14.jpg', 'S01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`Cat_ID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Product_ID`),
  ADD KEY `Cat_ID` (`Cat_ID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`Cat_ID`) REFERENCES `category` (`Cat_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
