-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2021 at 07:44 AM
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
-- Database: `acs_tw`
--

-- --------------------------------------------------------

--
-- Table structure for table `test2`
--

CREATE TABLE `test2` (
  `ID` varchar(4) DEFAULT NULL,
  `Source` varchar(8) DEFAULT NULL,
  `TMC` varchar(4) DEFAULT NULL,
  `Severity` varchar(8) DEFAULT NULL,
  `Start_Time` varchar(19) DEFAULT NULL,
  `End_Time` varchar(19) DEFAULT NULL,
  `Start_Lat` varchar(9) DEFAULT NULL,
  `Start_Lng` varchar(9) DEFAULT NULL,
  `End_Lat` varchar(7) DEFAULT NULL,
  `End_Lng` varchar(7) DEFAULT NULL,
  `Distance(mi)` varchar(12) DEFAULT NULL,
  `Description` varchar(98) DEFAULT NULL,
  `Number` varchar(6) DEFAULT NULL,
  `Street` varchar(25) DEFAULT NULL,
  `Side` varchar(4) DEFAULT NULL,
  `City` varchar(12) DEFAULT NULL,
  `County` varchar(10) DEFAULT NULL,
  `State` varchar(5) DEFAULT NULL,
  `Zipcode` varchar(10) DEFAULT NULL,
  `Country` varchar(7) DEFAULT NULL,
  `Timezone` varchar(10) DEFAULT NULL,
  `Airport_Code` varchar(12) DEFAULT NULL,
  `Weather_Timestamp` varchar(19) DEFAULT NULL,
  `Temperature(F)` varchar(14) DEFAULT NULL,
  `Wind_Chill(F)` varchar(13) DEFAULT NULL,
  `Humidity(%)` varchar(11) DEFAULT NULL,
  `Pressure(in)` varchar(12) DEFAULT NULL,
  `Visibility(mi)` varchar(14) DEFAULT NULL,
  `Wind_Direction` varchar(14) DEFAULT NULL,
  `Wind_Speed(mph)` varchar(15) DEFAULT NULL,
  `Precipitation(in)` varchar(17) DEFAULT NULL,
  `Weather_Condition` varchar(17) DEFAULT NULL,
  `Amenity` varchar(7) DEFAULT NULL,
  `Bump` varchar(5) DEFAULT NULL,
  `Crossing` varchar(8) DEFAULT NULL,
  `Give_Way` varchar(8) DEFAULT NULL,
  `Junction` varchar(8) DEFAULT NULL,
  `No_Exit` varchar(7) DEFAULT NULL,
  `Railway` varchar(7) DEFAULT NULL,
  `Roundabout` varchar(10) DEFAULT NULL,
  `Station` varchar(7) DEFAULT NULL,
  `Stop` varchar(5) DEFAULT NULL,
  `Traffic_Calming` varchar(15) DEFAULT NULL,
  `Traffic_Signal` varchar(14) DEFAULT NULL,
  `Turning_Loop` varchar(12) DEFAULT NULL,
  `Sunrise_Sunset` varchar(14) DEFAULT NULL,
  `Civil_Twilight` varchar(14) DEFAULT NULL,
  `Nautical_Twilight` varchar(17) DEFAULT NULL,
  `Astronomical_Twilight` varchar(21) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `test2`
--

INSERT INTO `test2` (`ID`, `Source`, `TMC`, `Severity`, `Start_Time`, `End_Time`, `Start_Lat`, `Start_Lng`, `End_Lat`, `End_Lng`, `Distance(mi)`, `Description`, `Number`, `Street`, `Side`, `City`, `County`, `State`, `Zipcode`, `Country`, `Timezone`, `Airport_Code`, `Weather_Timestamp`, `Temperature(F)`, `Wind_Chill(F)`, `Humidity(%)`, `Pressure(in)`, `Visibility(mi)`, `Wind_Direction`, `Wind_Speed(mph)`, `Precipitation(in)`, `Weather_Condition`, `Amenity`, `Bump`, `Crossing`, `Give_Way`, `Junction`, `No_Exit`, `Railway`, `Roundabout`, `Station`, `Stop`, `Traffic_Calming`, `Traffic_Signal`, `Turning_Loop`, `Sunrise_Sunset`, `Civil_Twilight`, `Nautical_Twilight`, `Astronomical_Twilight`) VALUES
('A-1', 'MapQuest', '201.', '3', '2016-02-08 05:46:00', '2016-02-08 11:00:00', '39.865147', '-84.05872', '', '', '0.01', 'Right lane blocked due to accident on I-70 Eastbound at Exit 41 OH-235 State Route 4.', '', 'I-70 E', 'R', 'Dayton', 'Montgomery', 'OH', '45424', 'US', 'US/Eastern', 'KFFO', '2016-02-08 05:58:00', '36.9', '', '91.0', '29.68', '10.0', 'Calm', '', '0.02', 'Light Rain', 'False', 'False', 'False', 'False', 'False', 'False', 'False', 'False', 'False', 'False', 'False', 'False', 'False', 'Night', 'Night', 'Night', 'Night');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
