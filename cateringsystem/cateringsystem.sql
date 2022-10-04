-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2020 at 10:32 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cateringsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customerID` int(11) NOT NULL,
  `fname` varchar(500) DEFAULT NULL,
  `lname` varchar(500) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `phoneNo` varchar(20) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customerID`, `fname`, `lname`, `email`, `phoneNo`, `password`) VALUES
(1, 'Shayma', 'Said', 'sashayma00@gmail.com', '0743595043', 'sdf');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `eventID` int(11) NOT NULL,
  `eventname` varchar(500) DEFAULT NULL,
  `venueID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `foodID` int(11) NOT NULL,
  `food` varchar(500) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `breakfast` tinyint(1) DEFAULT NULL,
  `lunch` tinyint(1) DEFAULT NULL,
  `dinner` tinyint(1) DEFAULT NULL,
  `Snacks` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`foodID`, `food`, `price`, `breakfast`, `lunch`, `dinner`, `Snacks`) VALUES
(1, 'Chicken Pot Pie Soup', 300, 0, 0, 1, 0),
(2, 'Sweet \'n\' Spicy Chicken', 400, 0, 0, 1, 0),
(3, 'Ravioli Lasagna', 500, 0, 0, 1, 0),
(4, 'Spicy Thai Shrimp Pasta', 400, 0, 0, 1, 0),
(5, 'Shrimp Over Coconut Rice', 550, 0, 0, 1, 0),
(6, 'Corn and Salsa Tortilla Soup', 400, 0, 0, 1, 0),
(7, 'Pizza', 800, 0, 0, 1, 0),
(8, 'Pasta Pie ', 350, 0, 0, 1, 0),
(9, 'Samosas', 30, 0, 0, 0, 1),
(10, 'Cupcakes', 30, 0, 0, 0, 1),
(11, 'Biscuits', 10, 0, 0, 0, 1),
(12, 'Honey Combs', 150, 0, 0, 0, 1),
(13, 'Crackles', 50, 0, 0, 0, 1),
(14, 'Apple Slices', 50, 0, 0, 0, 1),
(15, 'Chocolate Truffles', 50, 0, 0, 0, 1),
(16, 'Cookies', 30, 0, 0, 0, 1),
(17, 'Buttermilk Pancakes', 350, 1, 0, 0, 0),
(18, 'Belgian Waffles', 200, 1, 0, 0, 0),
(19, 'French Toast', 70, 1, 0, 0, 0),
(20, 'Cheese Omellette', 70, 1, 0, 0, 0),
(21, 'Rasberry Pancakes', 180, 1, 0, 0, 0),
(22, 'Strawberry Pancakes', 180, 1, 0, 0, 0),
(23, 'Eggs and Sausage', 100, 1, 0, 0, 0),
(24, 'Tea', 100, 1, 0, 0, 0),
(25, 'Pilau', 350, 0, 1, 0, 0),
(26, 'Biryani', 400, 0, 1, 0, 0),
(27, 'Chicken Spaghetti', 500, 0, 1, 0, 0),
(28, 'Beef Spaghetti', 500, 0, 1, 0, 0),
(29, 'Chicken Stew', 200, 0, 1, 0, 0),
(30, 'Beef Stew', 200, 0, 1, 0, 0),
(31, 'Fried Fish', 350, 0, 1, 0, 0),
(32, 'Rice', 150, 0, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderID` int(11) NOT NULL,
  `customerID` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `venueID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `firstName` varchar(500) DEFAULT NULL,
  `lastName` varchar(500) DEFAULT NULL,
  `isAdmin` tinyint(1) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `venues`
--

CREATE TABLE `venues` (
  `venueID` int(11) NOT NULL,
  `venueName` varchar(500) DEFAULT NULL,
  `location` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `venues`
--

INSERT INTO `venues` (`venueID`, `venueName`, `location`) VALUES
(1, 'Sarit Centre', 'Westlands'),
(2, 'Villa Rosa Kempinski', 'Westlands');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customerID`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`eventID`),
  ADD KEY `venueID` (`venueID`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`foodID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderID`),
  ADD KEY `customerID` (`customerID`),
  ADD KEY `venueID` (`venueID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `venues`
--
ALTER TABLE `venues`
  ADD PRIMARY KEY (`venueID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `eventID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `foodID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `venues`
--
ALTER TABLE `venues`
  MODIFY `venueID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`venueID`) REFERENCES `venues` (`venueID`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customerID`) REFERENCES `customers` (`customerID`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`venueID`) REFERENCES `venues` (`venueID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
