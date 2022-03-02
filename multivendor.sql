-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2022 at 10:41 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `learnint_multivendor`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ID` int(11) NOT NULL,
  `vID` varchar(255) NOT NULL,
  `ImgURL` varchar(255) NOT NULL,
  `DESCRIPTION` varchar(255) NOT NULL,
  `CAT` varchar(255) NOT NULL,
  `priority` varchar(255) NOT NULL,
  `STATUS` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ID`, `vID`, `ImgURL`, `DESCRIPTION`, `CAT`, `priority`, `STATUS`) VALUES
(1, '1271337737', 'Annotation 2020-08-28 002843.png', 'just a pic', 'Bank', 'YES', 'OK'),
(2, '1271337737', 'WAP to router Untitled.png', 'R500.00 for one router', 'Electronic', 'NO', 'OK'),
(3, '1961169957', '4STEPpos.png', 'Point of Sale', 'Electronic', 'YES', 'OK'),
(4, '1961169957', 'views.png', 'Views', 'Baby & Kids', 'YES', 'OK'),
(5, '1271337737', 'Screenshot 2021-10-08 125730.png', 'Win', 'Bank', 'YES', 'OK'),
(8, '1271337737', 'ricardo1.jpg', 'Selling a man', 'Clothes & Shoes', 'YES', 'OK'),
(9, '446646569', '5.jpg', 'Shoes', 'Clothes & Shoes', 'YES', 'OK');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `ID` int(11) NOT NULL,
  `IDUQ` int(100) NOT NULL,
  `FirstName` text NOT NULL,
  `Surname` text NOT NULL,
  `Email` varchar(100) NOT NULL,
  `PhoneNum` int(20) NOT NULL,
  `Address` text NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Type` text NOT NULL,
  `Company` text NOT NULL,
  `Male` text NOT NULL,
  `STATUS` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`ID`, `IDUQ`, `FirstName`, `Surname`, `Email`, `PhoneNum`, `Address`, `Password`, `Type`, `Company`, `Male`, `STATUS`) VALUES
(5, 446646569, 'Johnson', 'Oloko', 'damilarejohnsonoloko@gmail.com', 799955545, '292 Anton Lembede St', 'Johnson88', 'Vendor', 'GoodsBasket', 'Male', 'OK'),
(8, 4774849, 'admin', 'admin', 'admin@gmail.com', 659255279, 'Admin 45 Road', 'admin1234', 'Admin', 'Admin', 'Male', 'OK'),
(10, 1961169957, 'Srivas', 'Pillay', 'srivas@mail.com', 87645231, '7 Grove Road', '123456', 'Vendor', 'Sri', 'Male', 'OK'),
(11, 1271337737, 'Mxo', 'Mxolisi', 'Mxo@gmail.com', 799955545, '292 Anton Lembede St', 'Mxolisi33', 'Vendor', 'PEP', 'Male', 'OK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
