-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2017 at 06:28 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rent_a_car_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking_information`
--

CREATE TABLE `booking_information` (
  `sl` int(20) NOT NULL,
  `Booking_ID` varchar(20) NOT NULL,
  `Car_ID` varchar(35) NOT NULL,
  `Customer_ID` varchar(35) NOT NULL,
  `Booking_Date` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking_information`
--

INSERT INTO `booking_information` (`sl`, `Booking_ID`, `Car_ID`, `Customer_ID`, `Booking_Date`) VALUES
(4, '11', '111', 'C111', '1 January 2017'),
(5, '12', '112', 'C112', '2 January 2017'),
(6, '13', '113', 'C113', '4 January 2017');

-- --------------------------------------------------------

--
-- Table structure for table `car_information`
--

CREATE TABLE `car_information` (
  `sl` int(20) NOT NULL,
  `Car_ID` varchar(20) NOT NULL,
  `Car_Licence_Number` varchar(35) NOT NULL,
  `Car_Engine_Number` varchar(35) NOT NULL,
  `Car_Name` varchar(35) NOT NULL,
  `Car_Brand` varchar(35) NOT NULL,
  `Driver_ID` varchar(35) NOT NULL,
  `Total_sit` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car_information`
--

INSERT INTO `car_information` (`sl`, `Car_ID`, `Car_Licence_Number`, `Car_Engine_Number`, `Car_Name`, `Car_Brand`, `Driver_ID`, `Total_sit`) VALUES
(3, '111', 'CL12345', 'CE112233', 'Chiron', 'Bugatti', 'D123', '2'),
(4, '112', 'CL54321', 'CE222233', 'Hi-Ace', 'Toyota', 'D223', '12'),
(5, '113', 'CL09876', 'CE332233', 'Premio', 'Toyota', 'D323', '4'),
(6, '114', 'CL67890', 'CE442233', 'Allion', 'Toyota', 'D423', '4'),
(7, '115', 'CL12987', 'CE552233', 'Axio', 'Toyota', 'D523', '4');

-- --------------------------------------------------------

--
-- Table structure for table `customer_information`
--

CREATE TABLE `customer_information` (
  `sl` int(20) NOT NULL,
  `Customer_ID` varchar(20) NOT NULL,
  `Customer_Name` varchar(35) NOT NULL,
  `Sex` varchar(35) NOT NULL,
  `Cell` varchar(35) NOT NULL,
  `Email` varchar(35) NOT NULL,
  `Car_ID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_information`
--

INSERT INTO `customer_information` (`sl`, `Customer_ID`, `Customer_Name`, `Sex`, `Cell`, `Email`, `Car_ID`) VALUES
(3, 'C111', 'Jony Depp', 'Male', '01711110099', 'depp123@hotmail.com', '111'),
(4, 'C112', 'Jonathan', 'Male', '01983827382', 'jonathan789@gmail.com', '112'),
(5, 'C113', 'Lionel', 'Male', '01682009300', 'LM10@hotmail.com', '113');

-- --------------------------------------------------------

--
-- Table structure for table `driver_information`
--

CREATE TABLE `driver_information` (
  `sl` int(20) NOT NULL,
  `Driver_ID` varchar(20) NOT NULL,
  `Car_ID` varchar(20) NOT NULL,
  `Driver_License_Number` varchar(23) NOT NULL,
  `Driver_Name` varchar(45) NOT NULL,
  `Driver_cell` varchar(34) NOT NULL,
  `Driver_Email` varchar(34) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driver_information`
--

INSERT INTO `driver_information` (`sl`, `Driver_ID`, `Car_ID`, `Driver_License_Number`, `Driver_Name`, `Driver_cell`, `Driver_Email`) VALUES
(3, 'D123', '111', 'L98765', 'William', '01811122233', 'willim000@gmail.com'),
(4, 'D223', '112', 'L56789', 'Jack', '01174937493', 'jacklol@gmail.com'),
(5, 'D323', '113', 'L12345', 'Christiano', '0178653437', 'cr7@gmail.com'),
(6, 'D423', '114', 'L34567', 'Mario', '01979279483', 'mb987@gmail.com'),
(7, 'D523', '115', 'L56432', 'Sisoko', '0189903872', 'sisoko@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `payment_information`
--

CREATE TABLE `payment_information` (
  `sl` int(20) NOT NULL,
  `Booking_ID` varchar(20) NOT NULL,
  `Total_Payment` varchar(30) NOT NULL,
  `Paid` varchar(30) NOT NULL,
  `Due` varchar(30) NOT NULL,
  `Fine` varchar(30) NOT NULL,
  `Customer_ID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_information`
--

INSERT INTO `payment_information` (`sl`, `Booking_ID`, `Total_Payment`, `Paid`, `Due`, `Fine`, `Customer_ID`) VALUES
(3, '11', '50000', '50000', '0', '0', 'C111'),
(4, '12', '5000', '4000', '1000', '100', 'C112'),
(5, '13', '7000', '7000', '0', '0', 'C113');

-- --------------------------------------------------------

--
-- Table structure for table `time_location`
--

CREATE TABLE `time_location` (
  `sl` int(20) NOT NULL,
  `Booking_ID` varchar(20) NOT NULL,
  `Departure_Time` varchar(30) NOT NULL,
  `Arrival_Time` varchar(30) NOT NULL,
  `Departure_Location` varchar(30) NOT NULL,
  `Arrival_Location` varchar(30) NOT NULL,
  `Rent_Deadline` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `time_location`
--

INSERT INTO `time_location` (`sl`, `Booking_ID`, `Departure_Time`, `Arrival_Time`, `Departure_Location`, `Arrival_Location`, `Rent_Deadline`) VALUES
(3, '11', '5 PM', '9 AM', 'Cherag-Ali, Tongi', 'Redison, Dhaka', '2 January 2017'),
(4, '12', '9AM', '5PM', 'Uttara, Dhaka', 'Mudafa,Tongi', '3 January 2017'),
(5, '13', '6PM', '11PM', 'Jamuna Future Park', 'IUBAT, Kamar-para', '5 January 2017');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking_information`
--
ALTER TABLE `booking_information`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `car_information`
--
ALTER TABLE `car_information`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `customer_information`
--
ALTER TABLE `customer_information`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `driver_information`
--
ALTER TABLE `driver_information`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `payment_information`
--
ALTER TABLE `payment_information`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `time_location`
--
ALTER TABLE `time_location`
  ADD PRIMARY KEY (`sl`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking_information`
--
ALTER TABLE `booking_information`
  MODIFY `sl` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `car_information`
--
ALTER TABLE `car_information`
  MODIFY `sl` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `customer_information`
--
ALTER TABLE `customer_information`
  MODIFY `sl` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `driver_information`
--
ALTER TABLE `driver_information`
  MODIFY `sl` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `payment_information`
--
ALTER TABLE `payment_information`
  MODIFY `sl` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `time_location`
--
ALTER TABLE `time_location`
  MODIFY `sl` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
