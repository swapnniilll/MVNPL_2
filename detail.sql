-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2024 at 12:15 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saved`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail`
--

CREATE TABLE `detail` (
  `pan_no` varchar(255) NOT NULL,
  `gstin_no` varchar(255) NOT NULL,
  `in_out` varchar(255) NOT NULL,
  `gate_pass_no` varchar(255) NOT NULL,
  `do_no` varchar(255) NOT NULL,
  `transporter` varchar(255) NOT NULL,
  `truck_no` varchar(255) NOT NULL,
  `product` varchar(255) NOT NULL,
  `gross_weight` varchar(255) NOT NULL,
  `tare_weight` varchar(255) NOT NULL,
  `net_weight` varchar(255) NOT NULL,
  `source` varchar(255) NOT NULL,
  `out_date` date NOT NULL,
  `out_time` time NOT NULL,
  `in_date` date NOT NULL,
  `in_time` time NOT NULL,
  `grade` varchar(255) NOT NULL,
  `wb` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detail`
--

INSERT INTO `detail` (`pan_no`, `gstin_no`, `in_out`, `gate_pass_no`, `do_no`, `transporter`, `truck_no`, `product`, `gross_weight`, `tare_weight`, `net_weight`, `source`, `out_date`, `out_time`, `in_date`, `in_time`, `grade`, `wb`) VALUES
('4dd4d4d4dd', '4d4d4d4d', 'IN', '222', 'DO1', 'Transporter1', 'ddddd4444', 'Product1', '2', '2', '2', 'Source1', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'Grade1', '2'),
('', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', ''),
('npmasr5467hg', 'gdh54snnskau74', 'OUT', '99999999', 'DO2', 'Transporter2', 'mh36af7177', 'Product2', '99', '99', '99', 'Source2', '2024-11-02', '14:30:00', '2024-11-01', '13:30:00', 'Grade2', '55'),
('0000999', '000099', 'OUT', '10', 'DO3', 'Transporter3', 'mh34fd5555', 'Product3', '34', '2', '32.00', 'Source3', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'Grade3', '10'),
('', '', '', '', '', '', '', '', '', '', '', '', '2024-11-11', '15:00:00', '2024-11-10', '14:00:00', '', ''),
('qwe12e456', 'asdf42sd55g', 'OUT', '123', 'DO2', 'Transporter2', 'as12sd3333', 'Product2', '123', '112', '11.00', 'Source2', '2024-11-26', '14:24:00', '2024-11-22', '14:22:00', 'Grade2', ''),
('iiiuu888uuu7', 'oooo0087yyg-', 'IN', '555555555', 'DO1', 'Transporter1', 'yy67y777', 'Product1', '555', '55', '500.00', 'Source1', '2024-11-21', '19:44:00', '2024-11-12', '14:43:00', 'Grade1', '98'),
('0000999', 'asdf42sd55g', 'OUT', '222', 'DO2', 'Transporter1', 'ddddd4444', 'Product1', '80453638', '9436613', '71017025.00', 'Source1', '2024-11-17', '20:53:00', '2024-11-12', '20:52:00', 'Grade3', '33'),
('', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
