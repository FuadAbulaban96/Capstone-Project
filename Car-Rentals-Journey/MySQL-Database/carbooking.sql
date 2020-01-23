-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 23, 2020 at 12:18 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carbooking`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(100) NOT NULL,
  `admin_email` varchar(150) NOT NULL,
  `admin_password` varchar(50) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `admin_image` varchar(250) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_email`, `admin_password`, `fullname`, `admin_image`) VALUES
(1, 'fouadabulaban@yahoo.com', '0123456', 'Fuad Abulaban', 'Fuad-Abulaban-FullStack-PHP.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `cat_id` int(10) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(50) NOT NULL,
  `cat_image` varchar(150) NOT NULL,
  `model_number` int(50) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `cat_image`, `model_number`) VALUES
(1, 'SUV', 'SUVs.jpg', 16),
(2, 'Vans', 'Vans.jpg', 4),
(3, 'Premium & Luxury', 'priemuem&luxurycars.jpg', 5),
(4, 'Full Size', 'fullsizecars.jpg', 10),
(5, 'Economy & Compact', 'economy&compactcars.jpg', 12),
(6, 'Mini', 'minicars.jpg', 7);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `customer_id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `birth_date` varchar(100) NOT NULL,
  `national_id` varchar(15) NOT NULL,
  `license_id` varchar(10) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mobile` varchar(30) NOT NULL,
  `location` varchar(100) NOT NULL,
  `address` varchar(250) NOT NULL,
  `city` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `name`, `birth_date`, `national_id`, `license_id`, `email`, `password`, `mobile`, `location`, `address`, `city`, `country`) VALUES
(1, 'Fuad Alaaldin Fuad Abulaban', '1996-06-24', '9961026415', '15891027', 'fouadabulaban624@gmail.com', '0000', '+962799375136', 'Amman', 'Marka', 'Amman', 'Jordan'),
(2, 'Fuad Abulaban', '1996-06-24', '9961026415', '15891027', 'f@f.f', 'ff', '+962799375136', 'Amman', 'Marka', 'Amman', 'Jordan');

-- --------------------------------------------------------

--
-- Table structure for table `model`
--

DROP TABLE IF EXISTS `model`;
CREATE TABLE IF NOT EXISTS `model` (
  `model_id` int(100) NOT NULL AUTO_INCREMENT,
  `model_name` varchar(100) NOT NULL,
  `model_subname` varchar(100) NOT NULL,
  `model_year` year(4) NOT NULL,
  `passenger_capacity` int(11) NOT NULL,
  `rent_price` double(10,2) NOT NULL,
  `model_desc` varchar(250) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `model_image` varchar(150) NOT NULL,
  PRIMARY KEY (`model_id`)
) ENGINE=MyISAM AUTO_INCREMENT=55 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `model`
--

INSERT INTO `model` (`model_id`, `model_name`, `model_subname`, `model_year`, `passenger_capacity`, `rent_price`, `model_desc`, `cat_id`, `model_image`) VALUES
(1, 'Hyundai ', 'H1', 2017, 9, 100.00, 'Color : Hurricane , Power Type : Diesel', 2, 'Hyundai H1 2017.jpg'),
(2, 'Renault ', 'Logan', 2019, 5, 15.00, 'Color : Blue ,  Power Type : Gasoline', 5, 'Renault Logan 2019.jpg'),
(3, 'Toyota', 'Fortuner ', 2017, 7, 70.00, 'Color : Taupe , Power Type : Gasoline', 1, 'Toyota Fortuner 2017.jpg'),
(4, 'Hyundai ', 'Tucson', 2019, 5, 60.00, 'Color : Black , Power Type : Gasoline', 1, 'Hyundai Tucson 2019.jpg'),
(5, 'Hyundai ', 'Eon', 2019, 4, 10.00, 'Color : Carmine , Power Type : Gasoline', 6, 'Hyundai Eon 2019.jpg'),
(6, 'Mitsubishi', 'Pajero', 2019, 7, 90.00, 'Color : Black Marlin , Power Type : Gasoline', 1, 'Mitsubishi Pajero 2019.jpg'),
(7, 'Kia', 'Carnival', 2019, 9, 100.00, 'Color : White , Power Type : Diesel', 2, 'Kia Carnival 2019.jpg'),
(8, 'Nissan', 'Versa', 2019, 5, 15.00, 'Color : Silver , Power Type : Gasoline', 5, 'Nissan Versa 2019.jpg'),
(9, 'Toyota', 'Yaris', 2017, 5, 15.00, 'Color : Black , Power Type : Gasoline', 5, 'Toyota Yaris 2017.jpg'),
(10, 'Nissan', 'Micra', 2017, 5, 12.00, 'Color : Tahiti Gold , Power Type : Gasoline', 6, 'Nissan Micra 2017.jpg'),
(11, 'Hyundai ', 'I20', 2017, 4, 10.00, 'Color : White , Power Type : Gasoline', 6, 'Hyundai I20 2017.jpg'),
(12, 'Mazda', '2', 2019, 4, 12.00, 'Color : White , Power Type : Gasoline', 6, 'Mazda 2 2019.jpg'),
(13, 'Citroen', 'C3', 2019, 5, 60.00, 'Color : White , Power Type : Gasoline', 1, 'Citroen C3 2019.jpg'),
(14, 'Nissan', 'Sunny', 2019, 5, 15.00, 'Color : Silver , Power Type : Gasoline', 5, 'Nissan Sunny 2019.jpg'),
(15, 'Chevrolet', 'Aveo', 2017, 5, 15.00, 'Color : Champagne , Power Type : Gasoline', 5, 'Chevrolet Aveo 2017.jpg'),
(16, 'Hyundai ', 'Accent', 2018, 5, 15.00, 'Color : Black , Power Type : Gasoline', 5, 'Hyundai Accent 2018.jpg'),
(17, 'Hyundai ', 'Verna', 2018, 5, 15.00, 'Color : Seal Brown , Power Type : Gasoline', 5, 'Hyundai Verna 2018.jpg'),
(18, 'BMW', '520i', 2019, 5, 100.00, 'Color : Dark Blue , Power Type : Gasoline', 3, 'Bmw 520i 2019.jpg'),
(19, 'Mercedes Benz', 'E220', 2019, 5, 110.00, 'Color : Black Russian , Power Type : Gasoline', 3, 'Mercedes E220 2019.jpg'),
(20, 'Jeep', 'Cherokee', 2019, 5, 90.00, 'Color : Black , Power Type : Gasoline', 1, 'Jeep Cherokee 2019.jpeg'),
(21, 'Kia', 'Sedona', 2015, 7, 90.00, 'Color : Black , Power Type : Diesel', 2, 'Kia Sedona 2015.jpg'),
(22, 'Toyota', 'Prius', 2018, 5, 30.00, 'Color : White , Power Type : Hybrid', 4, 'Toyota Prius 2018.jpg'),
(23, 'Mercedes Benz', 'S400', 2018, 5, 100.00, 'Color : White , Power Type : Gasoline', 3, 'Mercedes S400 2018.jpg'),
(24, 'Mercedes Benz', 'C180', 2019, 5, 110.00, 'Color : Davy Grey , Power Type : Gasoline', 3, 'Mercedes C180 2019.jpg'),
(25, 'Infiniti', 'Q50', 2016, 5, 35.00, 'Color : Black , Power Type : Gasoline', 4, 'Infiniti Q50 2016.jpg'),
(26, 'Mitsubishi', 'Lancer Evo', 2016, 5, 30.00, 'Color : Venetian Red , Power Type : Gasoline', 4, 'Mitsubishi Lancer Evo 2016.jpg'),
(27, 'Mercedes Benz', 'V-Class', 2018, 9, 110.00, 'Color : Silver , Power Type : Diesel', 2, 'Mercedes V-Class 2018.jpg'),
(28, 'Opel ', 'Astra', 2015, 5, 15.00, 'Color : Silver , Power Type : Gasoline', 5, 'Opel Astra 2015.jpg'),
(29, 'Chevrolet', 'Cobalt', 2016, 5, 15.00, 'Color : Dark Silver , Power Type : Gasoline', 5, 'Chevrolet Cobalt 2016.jpg'),
(30, 'Citroen', 'C6', 2019, 5, 100.00, 'Color : Grape , Power Type : Gasoline', 3, 'Citroen C6 2019.jpg'),
(31, 'Kia', 'Picanto', 2019, 4, 12.00, 'Color : Silver , Power Type : Gasoline', 6, 'Kia Picanto 2019.jpg'),
(32, 'Ford', 'Explorer', 2018, 7, 80.00, 'Color : Black , Power Type : Gasoline', 1, 'Ford Explorer 2018.jpg'),
(33, 'Chevrolet', 'Tahoe', 2016, 7, 80.00, 'Color : Black , Power Type : Gasoline', 1, 'Chevrolet Tahoe 2016.jpg'),
(34, 'Toyota', 'Land Cruiser', 2018, 7, 100.00, 'Color : Black Pearl , Power Type : Gasoline', 1, 'Toyota Land Cruiser 2018.jpg'),
(35, 'Opel ', 'Insignia', 2017, 5, 35.00, 'Color : Silver , Power Type : Gasoline', 4, 'Opel Insignia 2017.jpg'),
(36, 'Renault ', 'Latitude', 2016, 5, 30.00, 'Color : Black , Power Type : Gasoline', 4, 'Renault Latitude 2016.jpg'),
(37, 'Hyundai ', 'Ioniq', 2018, 5, 35.00, 'Color : Silver , Power Type : Hybrid', 4, 'Hyundai Ioniq 2018.jpg'),
(38, 'GMC', 'Yukon', 2017, 7, 60.00, 'Color : Voodoo , Power Type : Gasoline', 1, 'GMC Yukon 2017.jpg'),
(39, 'Kia', 'Niro', 2019, 5, 50.00, 'Color : White , Power Type : Electric', 1, 'Kia Niro 2019.jpg'),
(40, 'Peugeot', '108', 2018, 4, 10.00, 'Color : Black , Power Type : Gasoline', 6, 'Peugeot 108 2018.jpg'),
(41, 'Chevrolet', 'Spark', 2018, 4, 10.00, 'Color : Red , Power Type : Gasoline', 6, 'Chevrolet Spark 2018.jpg'),
(42, 'Chevrolet', 'Trax', 2017, 5, 50.00, 'Color : Blue , Power Type : Gasoline', 1, 'Chevrolet Trax 2017.jpg'),
(43, 'Renault ', 'Duster', 2017, 5, 50.00, 'Color : Metallic Bronze , Power Type : Gasoline', 1, 'Renault Duster 2017.jpeg'),
(44, 'Nissan', 'X trail', 2019, 5, 55.00, 'Color : Caput Mortuum , Power Type : Gasoline', 1, 'Nissan X trail 2019.jpg'),
(45, 'Chevrolet', 'Equinox', 2016, 7, 60.00, 'Color : Burgundy , Power Type : Gasoline', 1, 'Chevrolet Equinox 2016.jpeg'),
(46, 'Kia', 'Sorento', 2017, 7, 60.00, 'Color : Black Pearl , Power Type : Gasoline', 1, 'Kia Sorento 2017.jpg'),
(47, 'Toyota', 'Camry', 2019, 5, 35.00, 'Color : Blue , Power Type : Hybrid', 4, 'Toyota Camry 2019.jpg'),
(48, 'Kia', 'Optima', 2019, 5, 35.00, 'Color : Dove Grey , Power Type : Hybrid', 4, 'Kia Optima 2019.jpg'),
(49, 'Hyundai ', 'Sonata', 2018, 5, 35.00, 'Color : Blue , Power Type : Hybrid', 4, 'Hyundai Sonata 2018.jpg'),
(50, 'Ford', 'Fusion', 2017, 5, 35.00, 'Color : Rustic Red , Power Type : Hybrid', 4, 'Ford Fusion 2017.jpg'),
(51, 'Toyota', 'Corolla', 2018, 5, 20.00, 'Color : Black , Power Type : Gasoline', 5, 'Toyota Corolla 2018.jpg'),
(52, 'Kia', 'Cerato', 2016, 5, 20.00, 'Color : Silver , Power Type : Gasoline', 5, 'Kia Cerato 2016.jpg'),
(53, 'Nissan', 'Sentra', 2017, 5, 20.00, 'Color : Carmine , Power Type : Gasoline', 5, 'Nissan Sentra 2017.jpg'),
(54, 'Kia', 'Sportage', 2017, 5, 50.00, 'Color : Tundora , Power Type : Gasoline', 1, 'Kia Sportage 2017.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(200) NOT NULL AUTO_INCREMENT,
  `order_date` varchar(250) NOT NULL,
  `return_date` varchar(250) NOT NULL,
  `pick_location` varchar(250) NOT NULL,
  `pick_address` varchar(250) NOT NULL,
  `pick_city` varchar(250) NOT NULL,
  `drop_location` varchar(250) NOT NULL,
  `drop_address` varchar(250) NOT NULL,
  `drop_city` varchar(250) NOT NULL,
  `customer_id` int(100) NOT NULL,
  `model_id` int(100) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `order_date`, `return_date`, `pick_location`, `pick_address`, `pick_city`, `drop_location`, `drop_address`, `drop_city`, `customer_id`, `model_id`) VALUES
(22, '2020-01-22', '2020-01-23', 'Amman', 'Marka', 'Amman', 'The Same', 'Place', 'At', 1, 19),
(23, '2020-01-27', '2020-01-31', 'Amman', 'Al mahata', 'Amman', 'Alabdali', 'Albulivard', 'Amman', 2, 25);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
