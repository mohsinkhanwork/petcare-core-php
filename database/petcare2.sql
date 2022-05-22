-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2022 at 05:02 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petcare2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(256) NOT NULL,
  `lastvisit` int(11) DEFAULT NULL,
  `active` int(1) NOT NULL DEFAULT 1,
  `role` int(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `lastvisit`, `active`, `role`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin', NULL, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `pet_id` varchar(11) DEFAULT NULL,
  `date` varchar(25) DEFAULT NULL,
  `time` varchar(25) DEFAULT NULL,
  `type` varchar(150) DEFAULT NULL,
  `note` text NOT NULL,
  `client_id` int(11) NOT NULL,
  `deleted` int(1) DEFAULT 0,
  `accept` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `pet_id`, `date`, `time`, `type`, `note`, `client_id`, `deleted`, `accept`) VALUES
(16, 'ASD', '2021 12 12', '10:12 Am', 'accepted', 'ASDAsdaSD', 20, 0, 1),
(17, 'ASD', '2021 12 12', '10:12 Am', 'decline', 'ASDAsdaSD', 20, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `appointment_availables`
--

CREATE TABLE `appointment_availables` (
  `id` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `deleted` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `appointment_availables`
--

INSERT INTO `appointment_availables` (`id`, `type`, `date`, `time`, `deleted`) VALUES
(1, 'Pet Grooming date', '2022-05-20', '06:30:00', 0),
(6, 'Checkup', '2022-05-06', '12:00:00', 0),
(7, 'Grooming', '2022-05-05', '12:00:00', 0),
(8, 'Grooming', '2022-06-03', '12:00:00', 0),
(9, 'Checkup', '2022-05-05', '12:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone` varchar(150) NOT NULL,
  `city` varchar(150) NOT NULL,
  `password` varchar(250) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `image` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `last_name`, `first_name`, `email`, `phone`, `city`, `password`, `gender`, `image`) VALUES
(22, 'khan', 'mohsin', 'mkhan9658@gmail.com', '123123123', '', '123123123', 'Male', 'IMG_7201.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `medias`
--

CREATE TABLE `medias` (
  `id` int(11) NOT NULL,
  `file_name` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL,
  `type_id` int(11) NOT NULL,
  `featured` enum('0','1') NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `medias`
--

INSERT INTO `medias` (`id`, `file_name`, `type`, `type_id`, `featured`, `comment`) VALUES
(1, '4d63f404a9c87c114487886a9df09104.jpg', 'pages', 1, '0', ''),
(3, '827894560c43c2df455f82baf0712847.png', 'pages', 33, '0', ''),
(44, '84f12d9fa8d4ef5231696444d6926ffb.jpg', 'blogs', 5, '0', ''),
(45, 'e3a5ed4b8e84bb2a5d55f40073bf389e.jpg', 'blogs', 11, '0', ''),
(46, 'f66a900685389f9a382b4ccecddfc712.png', 'blogs', 12, '0', ''),
(48, 'd98c6bf9034f5532362bd9391b90cb52.png', 'pages', 2, '0', ''),
(49, '51650ac00ed6c818b155296c5b7fad09.png', 'pages', 3, '0', '');

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`id`, `name`, `value`) VALUES
(1, 'company_description', 'Are you a new pet owner, or you acquire multiple number of pets? Our services and online planing in managing the veterinary clinic appointment making and results reviewing and have a contact with our veterinarian through email for advice and maintaining food supply. Plan for the future care of your pet today.                                                '),
(2, 'company_office', 'RJGR+G56 Alyasmin, Riyadh '),
(3, 'company_contact', '(+966)503456789                                     '),
(4, 'about_description', 'Are you a new pet owner, or you acquire multiple number of pets? Our services and online planing in managing the veterinary clinic appointment making and results reviewing and have a contact with our veterinarian through email for advice and maintaining food supply. Plan for the future care of your pet today.'),
(5, 'about_image', '97364775bdc2e8aab72fc6540cafa57d.jpg'),
(6, 'company_email', 'petcare@domain.com');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `page_title` varchar(256) DEFAULT NULL,
  `page_title_nl` varchar(255) DEFAULT NULL,
  `page_title_fr` varchar(255) DEFAULT NULL,
  `page_category_id` int(2) DEFAULT NULL,
  `alias` varchar(200) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `page_content` longtext DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `modified_time` int(11) DEFAULT NULL,
  `deleted` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `page_title`, `page_title_nl`, `page_title_fr`, `page_category_id`, `alias`, `image`, `page_content`, `location`, `email`, `contact`, `modified_time`, `deleted`) VALUES
(2, 'ABOUT', '', '', 0, 'about', 'istockphoto-1296353202-170667a.jpg', 'udpated about us information                                                                                                                                                                                                                                                                                                                                                                      ', '', '', '', 1652768443, 0),
(3, 'Our Company', '', '', 0, 'our-company', '', 'udpated Are you a new pet owner, or you acquire multiple number of pets? Our services and online planing in managing the veterinary clinic appointment making and results reviewing and have a contact with our veterinarian through email for advice and maintaining food supply. Plan for the future care of your pet today.', 'test riyadh city test location updated', 'test@gmail.com', '0092 232 23 23 ', 1652768418, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pets`
--

CREATE TABLE `pets` (
  `id` int(11) NOT NULL,
  `clientid` int(25) DEFAULT NULL,
  `name` varchar(150) DEFAULT NULL,
  `bread` varchar(150) DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `neutered` varchar(20) DEFAULT NULL,
  `medical_description` text DEFAULT NULL,
  `vaccination_description` text DEFAULT NULL,
  `image` varchar(150) DEFAULT NULL,
  `client_id` int(11) NOT NULL,
  `deleted` int(1) DEFAULT NULL,
  `accept` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pets`
--

INSERT INTO `pets` (`id`, `clientid`, `name`, `bread`, `birth_date`, `gender`, `neutered`, `medical_description`, `vaccination_description`, `image`, `client_id`, `deleted`, `accept`) VALUES
(66, 20, 'test pets', 'test bread', '2022-05-20', 'male', 'notneutered', 'test mediacl description', 'test vaccination desc', 'istockphoto-1296353202-170667a.jpg', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `client_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `email`, `description`, `created_date`, `client_id`) VALUES
(1, 'rohit', 'rohit@gmail.com', 'Hello how are you\r\n\r\nTEST IT', '2022-05-14 10:17:32', 1),
(2, 'amit', 'amit@gmail.com', 'test it', '2022-05-14 10:18:24', 1),
(3, 'jitender', 'jitender@gmail.com', 'dsfsdf', '2022-05-17 13:29:26', 4),
(4, 'sadasd', 'dsfdds@gmail.com', 'dsfsdf', '2022-05-17 13:31:27', 4),
(5, 'amit', 'amit@gmail.com', 'sdfs', '2022-05-17 14:07:10', 4),
(6, 'bob', 'tebshbfd@gmail.com', 'kdsfnv', '2022-05-17 18:29:43', 7);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `type` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `price` varchar(150) NOT NULL,
  `image` varchar(150) NOT NULL,
  `deleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `type`, `description`, `price`, `image`, `deleted`) VALUES
(1, 'Checkup', 'asdasd', '200', '2764d5c1167cb32ad7411796b77ef6e0.jpg', 0),
(2, 'Grooming', 'sadasd', '5000', '', 0),
(3, 'Grooming', 'ddd', '140', '9bec361fba15693a5e7e25cfb7bb06f0.jpg', 0),
(4, 'Grooming', 'ased', '12', '', 0),
(5, 'Checkup', 'Testing ', '123', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment_availables`
--
ALTER TABLE `appointment_availables`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medias`
--
ALTER TABLE `medias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pets`
--
ALTER TABLE `pets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `appointment_availables`
--
ALTER TABLE `appointment_availables`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `medias`
--
ALTER TABLE `medias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `pets`
--
ALTER TABLE `pets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
