-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2021 at 08:50 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `csv_db 7`
--

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `COL 1` varchar(3) DEFAULT NULL,
  `COL 2` varchar(8) DEFAULT NULL,
  `COL 3` varchar(4) DEFAULT NULL,
  `COL 4` varchar(8) DEFAULT NULL,
  `COL 5` varchar(19) DEFAULT NULL,
  `COL 6` varchar(19) DEFAULT NULL,
  `COL 7` varchar(9) DEFAULT NULL,
  `COL 8` varchar(9) DEFAULT NULL,
  `COL 9` varchar(7) DEFAULT NULL,
  `COL 10` varchar(7) DEFAULT NULL,
  `COL 11` varchar(12) DEFAULT NULL,
  `COL 12` varchar(85) DEFAULT NULL,
  `COL 13` varchar(6) DEFAULT NULL,
  `COL 14` varchar(14) DEFAULT NULL,
  `COL 15` varchar(4) DEFAULT NULL,
  `COL 16` varchar(12) DEFAULT NULL,
  `COL 17` varchar(10) DEFAULT NULL,
  `COL 18` varchar(5) DEFAULT NULL,
  `COL 19` varchar(10) DEFAULT NULL,
  `COL 20` varchar(7) DEFAULT NULL,
  `COL 21` varchar(10) DEFAULT NULL,
  `COL 22` varchar(12) DEFAULT NULL,
  `COL 23` varchar(19) DEFAULT NULL,
  `COL 24` varchar(14) DEFAULT NULL,
  `COL 25` varchar(13) DEFAULT NULL,
  `COL 26` varchar(11) DEFAULT NULL,
  `COL 27` varchar(12) DEFAULT NULL,
  `COL 28` varchar(14) DEFAULT NULL,
  `COL 29` varchar(14) DEFAULT NULL,
  `COL 30` varchar(15) DEFAULT NULL,
  `COL 31` varchar(17) DEFAULT NULL,
  `COL 32` varchar(17) DEFAULT NULL,
  `COL 33` varchar(7) DEFAULT NULL,
  `COL 34` varchar(5) DEFAULT NULL,
  `COL 35` varchar(8) DEFAULT NULL,
  `COL 36` varchar(8) DEFAULT NULL,
  `COL 37` varchar(8) DEFAULT NULL,
  `COL 38` varchar(7) DEFAULT NULL,
  `COL 39` varchar(7) DEFAULT NULL,
  `COL 40` varchar(10) DEFAULT NULL,
  `COL 41` varchar(7) DEFAULT NULL,
  `COL 42` varchar(5) DEFAULT NULL,
  `COL 43` varchar(15) DEFAULT NULL,
  `COL 44` varchar(14) DEFAULT NULL,
  `COL 45` varchar(12) DEFAULT NULL,
  `COL 46` varchar(14) DEFAULT NULL,
  `COL 47` varchar(14) DEFAULT NULL,
  `COL 48` varchar(17) DEFAULT NULL,
  `COL 49` varchar(21) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`COL 1`, `COL 2`, `COL 3`, `COL 4`, `COL 5`, `COL 6`, `COL 7`, `COL 8`, `COL 9`, `COL 10`, `COL 11`, `COL 12`, `COL 13`, `COL 14`, `COL 15`, `COL 16`, `COL 17`, `COL 18`, `COL 19`, `COL 20`, `COL 21`, `COL 22`, `COL 23`, `COL 24`, `COL 25`, `COL 26`, `COL 27`, `COL 28`, `COL 29`, `COL 30`, `COL 31`, `COL 32`, `COL 33`, `COL 34`, `COL 35`, `COL 36`, `COL 37`, `COL 38`, `COL 39`, `COL 40`, `COL 41`, `COL 42`, `COL 43`, `COL 44`, `COL 45`, `COL 46`, `COL 47`, `COL 48`, `COL 49`) VALUES
('ID', 'Source', 'TMC', 'Severity', 'Start_Time', 'End_Time', 'Start_Lat', 'Start_Lng', 'End_Lat', 'End_Lng', 'Distance(mi)', 'Description', 'Number', 'Street', 'Side', 'City', 'County', 'State', 'Zipcode', 'Country', 'Timezone', 'Airport_Code', 'Weather_Timestamp', 'Temperature(F)', 'Wind_Chill(F)', 'Humidity(%)', 'Pressure(in)', 'Visibility(mi)', 'Wind_Direction', 'Wind_Speed(mph)', 'Precipitation(in)', 'Weather_Condition', 'Amenity', 'Bump', 'Crossing', 'Give_Way', 'Junction', 'No_Exit', 'Railway', 'Roundabout', 'Station', 'Stop', 'Traffic_Calming', 'Traffic_Signal', 'Turning_Loop', 'Sunrise_Sunset', 'Civil_Twilight', 'Nautical_Twilight', 'Astronomical_Twilight'),
('A-1', 'MapQuest', '201.', '3', '2016-02-08 05:46:00', '2016-02-08 11:00:00', '39.865147', '-84.05872', '', '', '0.01', 'Right lane blocked due to accident on I-70 Eastbound at Exit 41 OH-235 State Route 4.', '', 'I-70 E', 'R', 'Dayton', 'Montgomery', 'OH', '45424', 'US', 'US/Eastern', 'KFFO', '2016-02-08 05:58:00', '36.9', '', '91.0', '29.68', '10.0', 'Calm', '', '0.02', 'Light Rain', 'False', 'False', 'False', 'False', 'False', 'False', 'False', 'False', 'False', 'False', 'False', 'False', 'False', 'Night', 'Night', 'Night', 'Night'),
('A-2', 'MapQuest', '201.', '2', '2016-02-08 06:07:59', '2016-02-08 06:37:59', '39.928059', '-82.83118', '', '', '0.01', 'Accident on Brice Rd at Tussing Rd. Expect delays.', '2584.0', 'Brice Rd', 'L', 'Reynoldsburg', 'Franklin', 'OH', '43068-3402', 'US', 'US/Eastern', 'KCMH', '2016-02-08 05:51:00', '37.9', '', '100.0', '29.65', '10.0', 'Calm', '', '0.0', 'Light Rain', 'False', 'False', 'False', 'False', 'False', 'False', 'False', 'False', 'False', 'False', 'False', 'False', 'False', 'Night', 'Night', 'Night', 'Day'),
('A-3', 'MapQuest', '201.', '2', '2016-02-08 06:49:27', '2016-02-08 07:19:27', '39.063148', '-84.03260', '', '', '0.01', 'Accident on OH-32 State Route 32 Westbound at Dela Palma Rd. Expect delays.', '', 'State Route 32', 'R', 'Williamsburg', 'Clermont', 'OH', '45176', 'US', 'US/Eastern', 'KI69', '2016-02-08 06:56:00', '36.0', '33.3', '100.0', '29.67', '10.0', 'SW', '3.5', '', 'Overcast', 'False', 'False', 'False', 'False', 'False', 'False', 'False', 'False', 'False', 'False', 'False', 'True', 'False', 'Night', 'Night', 'Day', 'Day');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
