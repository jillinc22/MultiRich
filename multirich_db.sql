-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 12, 2019 at 06:02 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `multirich_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_account`
--

CREATE TABLE `tbl_account` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_account`
--

INSERT INTO `tbl_account` (`id`, `name`, `password`, `email`) VALUES
(1, 'adMinUser127001', 'df9eb3cec627f7f63a362e5cc9de97ea', 'admin@mail.com'),
(2, 'admin', '1234', 'admin@admin.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_career`
--

CREATE TABLE `tbl_career` (
  `car_id` int(11) NOT NULL,
  `car_position` varchar(255) NOT NULL,
  `car_description` varchar(255) NOT NULL,
  `car_dateAdded` timestamp NOT NULL DEFAULT current_timestamp(),
  `car_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_career`
--

INSERT INTO `tbl_career` (`car_id`, `car_position`, `car_description`, `car_dateAdded`, `car_type`) VALUES
(1, 'IT Support', 'Installation & configuration of a company’s computer hardware operating systems and applications.', '2019-08-06 15:57:11', 'Corporate Human Resources');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_message`
--

CREATE TABLE `tbl_message` (
  `msg_id` int(11) NOT NULL,
  `msg_name` varchar(255) NOT NULL,
  `msg_email` varchar(255) NOT NULL,
  `msg_type` varchar(50) NOT NULL,
  `msg_text` varchar(255) NOT NULL,
  `msg_dateAdded` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_message`
--

INSERT INTO `tbl_message` (`msg_id`, `msg_name`, `msg_email`, `msg_type`, `msg_text`, `msg_dateAdded`) VALUES
(1, 'Jill', 'jill@mail.com', 'Product Related', 'Hi, may I ask for a product brochure for my project?', '2019-08-06 16:00:53');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_prod`
--

CREATE TABLE `tbl_prod` (
  `prod_id` int(11) NOT NULL,
  `prod_name` varchar(255) NOT NULL,
  `prod_categ` varchar(50) NOT NULL,
  `prod_desc` varchar(255) NOT NULL,
  `prod_imagePath` varchar(255) NOT NULL,
  `prod_dateAdded` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_prod`
--

INSERT INTO `tbl_prod` (`prod_id`, `prod_name`, `prod_categ`, `prod_desc`, `prod_imagePath`, `prod_dateAdded`) VALUES
(1, 'Choco Mucho', 'Chocolate', 'Choco Mucho offers Heavenly Indulgence with its luscious chocolate and complementing layers of ingredients. Experience Heaven with every bite of the different variant offerings that suit every craving. With Choco Mucho, you\'re sure to give in to Pure Choc', 'chocomucho.png', '2019-08-06 16:02:11'),
(4, 'Superstix', 'Rolled Wafers', 'Cream-filled wafer', 'superstix.png', '2019-08-07 05:03:13'),
(5, 'Jiggels', 'Gelatins', 'Soft and chewy', 'jiggels.png', '2019-08-07 05:03:13'),
(6, 'samplelang', 'rolledwafers', 'sdadafsds', 'SampleImagePathh', '2019-08-12 14:06:51'),
(7, 'Jill', 'Gelatins', 'Jill description', 'SampleImagePathh', '2019-08-12 14:22:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_account`
--
ALTER TABLE `tbl_account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_career`
--
ALTER TABLE `tbl_career`
  ADD PRIMARY KEY (`car_id`);

--
-- Indexes for table `tbl_message`
--
ALTER TABLE `tbl_message`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `tbl_prod`
--
ALTER TABLE `tbl_prod`
  ADD PRIMARY KEY (`prod_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_account`
--
ALTER TABLE `tbl_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_career`
--
ALTER TABLE `tbl_career`
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_message`
--
ALTER TABLE `tbl_message`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_prod`
--
ALTER TABLE `tbl_prod`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
