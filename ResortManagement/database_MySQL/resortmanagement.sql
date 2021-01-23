-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2021 at 08:03 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resortmanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `image` varchar(30) NOT NULL,
  `review` text NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`image`, `review`, `name`) VALUES
('person_3.jpg', 'On a trip me and my family were to attend some functions so had booked this place.We found it superb location wise,very easy to get there,silent,good,away from routine.It has great view from the room and also everything is taken care very nicely.I am sure to come again whenever possible.', 'Aidan Jenkins'),
('person_1.jpg', 'Hotel is really good. Made to Western standards with clean, well equipped large rooms. Rooms equipped with large beds, coffee table with chairs, fridge, set for valuables, large TV, free WiFi etc.', 'Gemma Murphy'),
('img_2.jpg', 'best hotel', 'Manu'),
('person_2.jpg', 'Absolutely delightful great and peaceful stay and a nice weekend at the hotel.Rooms are cozy,airy and very comfortable.pleasant stay.Very good food but cost is on higher side.Staff at the hotel is very courteous.Miss forum on reception desk was very corteous and informative.', 'Rose Simmons');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `email`, `password`) VALUES
('admin', 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `name` varchar(10) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `checkin` date DEFAULT NULL,
  `checkout` date NOT NULL,
  `roomtype` varchar(20) NOT NULL,
  `numberofrooms` int(11) NOT NULL,
  `numberofdays` int(11) NOT NULL,
  `adults` int(11) NOT NULL,
  `children` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `name`, `phone`, `email`, `checkin`, `checkout`, `roomtype`, `numberofrooms`, `numberofdays`, `adults`, `children`, `address`, `cost`) VALUES
(97, 'diksha', 9511603896, 'nikorediksha@gmail.c', '2021-01-17', '2021-01-19', 'Family Room ', 1, 2, 1, 0, 'pune ', 490),
(98, 'diksha', 9511603896, 'nikorediksha@gmail.c', '2021-01-17', '2021-01-19', 'Family Room ', 1, 2, 1, 0, 'pune ', 490),
(99, 'diksha', 9511603896, 'nikorediksha@gmail.c', '2021-01-17', '2021-01-19', 'Family Room ', 1, 2, 1, 0, 'pune ', 490);

--
-- Triggers `booking`
--
DELIMITER $$
CREATE TRIGGER `afterinsertlogg` AFTER INSERT ON `booking` FOR EACH ROW INSERT INTO history2 VALUES(NEW.id,NEW.name,NEW.phone,NEW.email,NEW.checkin,NEW.checkout,NEW.roomtype,NEW.numberofrooms,NEW.numberofdays,NEW.adults,NEW.children,NEW.address,NEW.cost,NOW())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `Name` varchar(20) NOT NULL,
  `Email` varchar(35) NOT NULL,
  `Q1` varchar(20) NOT NULL,
  `Q2` varchar(20) NOT NULL,
  `Q3` varchar(20) NOT NULL,
  `Q4` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`Name`, `Email`, `Q1`, `Q2`, `Q3`, `Q4`) VALUES
('akhil', 'akhil@gmail.com', 'wonderful', 'friends', 'no', 3),
('gita', 'gita@gmail.com', 'good', 'Adds', 'No', 3),
('mani', 'man@gmail.com', 'good', 'tv', 'nothing', 3),
('sangita', 'smarri@gmail.com', 'good', 'Adds', 'No', 5),
('sunny', 'sun@gmail.com', 'nice', 'advertisement', 'yes', 3);

-- --------------------------------------------------------

--
-- Table structure for table `history2`
--

CREATE TABLE `history2` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `roomtype` varchar(100) NOT NULL,
  `numberofrooms` int(11) NOT NULL,
  `numberofdays` int(11) NOT NULL,
  `adults` int(11) NOT NULL,
  `children` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `cost` int(11) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history2`
--

INSERT INTO `history2` (`id`, `name`, `phone`, `email`, `checkin`, `checkout`, `roomtype`, `numberofrooms`, `numberofdays`, `adults`, `children`, `address`, `cost`, `time`) VALUES
(36, 'sangita', 9511603896, 'nikorediksha@gmail.c', '2021-01-15', '2021-01-16', 'family', 1, 1, 1, 0, 'pune', 245, '2021-01-13 14:47:12'),
(37, 'sangita', 9511603896, 'nikorediksha@gmail.c', '2021-01-15', '2021-01-16', 'family', 1, 1, 1, 0, 'pune', 245, '2021-01-13 14:47:13'),
(38, 'sangita', 9511603896, 'nikorediksha@gmail.c', '2021-01-15', '2021-01-16', 'family', 1, 1, 1, 0, 'pune', 245, '2021-01-13 14:47:20'),
(39, 'nishant', 9511603896, 'nikorediksha@gmail.c', '2021-01-15', '2021-01-16', 'Batchelors', 1, 1, 1, 0, 'pune', 150, '2021-01-13 14:51:10'),
(40, 'diksha', 9511603896, 'nikorediksha@gmail.c', '2021-01-15', '2021-01-16', 'Batchelors', 1, 1, 1, 0, 'pune', 150, '2021-01-13 15:11:42'),
(41, 'diksha', 9511603896, 'nikorediksha@gmail.c', '2021-01-15', '2021-01-16', 'Batchelors', 1, 1, 1, 0, 'pune', 150, '2021-01-13 15:12:32'),
(42, 'sainiya', 7840905460, 'nikorediksha@gmail.c', '2021-01-15', '2021-01-16', 'Presidential', 1, 1, 1, 0, 'yiwuq', 350, '2021-01-13 15:50:37'),
(43, 'niluu', 9511603896, 'nikorediksha@gmail.c', '2021-01-14', '2021-01-16', 'family', 1, 2, 1, 0, 'nagpur', 490, '2021-01-13 17:02:06'),
(44, 'niluu', 9511603896, 'nikorediksha@gmail.c', '2021-01-14', '2021-01-16', 'family', 1, 2, 1, 0, 'nagpur', 490, '2021-01-13 17:02:31'),
(45, 'diksha', 9511603896, 'nikorediksha@gmail.c', '2021-01-14', '2021-01-16', 'family', 3, 2, 1, 1, 'pune', 1470, '2021-01-13 19:07:36'),
(46, 'radhika', 9511603896, 'radhika@gmail.com', '2021-01-15', '2021-01-19', 'family', 1, 4, 1, 0, 'pune', 980, '2021-01-14 22:00:21'),
(47, 'radhika', 9511603896, 'radhika@gmail.com', '2021-01-15', '2021-01-19', 'family', 1, 4, 1, 0, 'pune', 980, '2021-01-14 22:03:48'),
(48, 'sayali', 7840905460, 'sayali@gmail.com', '2021-01-15', '2021-01-16', 'family', 1, 1, 1, 0, 'nashik', 245, '2021-01-14 22:05:03'),
(49, 'sayali', 7840905460, 'sayali@gmail.com', '2021-01-15', '2021-01-16', 'family', 1, 1, 1, 0, 'nashik', 245, '2021-01-14 22:08:19'),
(50, 'sayali', 7840905460, 'sayali@gmail.com', '2021-01-15', '2021-01-16', 'family', 1, 1, 1, 0, 'nashik', 1, '2021-01-14 22:17:44'),
(51, 'sayali', 7840905460, 'sayali@gmail.com', '2021-01-15', '2021-01-16', 'family', 1, 1, 1, 0, 'nashik', 1, '2021-01-14 22:17:51'),
(52, 'AISH', 9511603896, 'nikorediksha@gmail.c', '2021-01-23', '2021-01-27', 'Family Room', 1, 4, 1, 0, 'ksjal', 980, '2021-01-14 22:50:52'),
(53, 'AISH', 9511603896, 'nikorediksha@gmail.c', '2021-01-23', '2021-01-27', 'Family Room', 1, 4, 1, 0, 'ksjal', 980, '2021-01-14 22:52:17'),
(54, 'AISH', 9511603896, 'nikorediksha@gmail.c', '2021-01-23', '2021-01-27', 'Family Room', 1, 4, 1, 0, 'ksjal', 980, '2021-01-14 22:52:17'),
(55, 'AISH', 9511603896, 'nikorediksha@gmail.c', '2021-01-23', '2021-01-27', 'Family Room', 1, 4, 1, 0, 'ksjal', 980, '2021-01-14 22:52:25'),
(56, 'AISH', 9511603896, 'nikorediksha@gmail.c', '2021-01-23', '2021-01-27', 'Classic Bungalow Cot', 1, 4, 1, 0, 'ksjal', 4000, '2021-01-14 22:53:00'),
(57, 'AISH', 9511603896, 'nikorediksha@gmail.c', '2021-01-23', '2021-01-27', 'Classic Bungalow Cot', 1, 4, 1, 0, 'ksjal', 4000, '2021-01-14 22:56:31'),
(58, 'AISH', 9511603896, 'nikorediksha@gmail.c', '2021-01-23', '2021-01-27', 'Classic Bungalow Cot', 1, 4, 1, 0, 'ksjal', 4000, '2021-01-14 22:56:31'),
(59, 'AISH', 9511603896, 'nikorediksha@gmail.c', '2021-01-23', '2021-01-27', 'Classic Bungalow Cot', 1, 4, 1, 0, 'ksjal', 4000, '2021-01-14 22:56:32'),
(60, 'AISH', 9511603896, 'nikorediksha@gmail.c', '2021-01-23', '2021-01-27', 'Classic Bungalow Cot', 1, 4, 1, 0, 'ksjal', 4000, '2021-01-14 22:56:39'),
(61, 'AISH', 9511603896, 'nikorediksha@gmail.c', '2021-01-23', '2021-01-27', 'Classic Bungalow Cot', 1, 4, 1, 0, 'ksjal', 4000, '2021-01-14 22:57:51'),
(62, 'AISH', 9511603896, 'nikorediksha@gmail.c', '2021-01-23', '2021-01-27', 'Classic Bungalow Cot', 1, 4, 1, 0, 'ksjal', 4000, '2021-01-14 22:57:51'),
(63, 'AISH', 9511603896, 'nikorediksha@gmail.c', '2021-01-23', '2021-01-27', 'Classic Bungalow Cot', 1, 4, 1, 0, 'ksjal', 4000, '2021-01-14 22:57:52'),
(64, 'AISH', 9511603896, 'nikorediksha@gmail.c', '2021-01-23', '2021-01-27', 'Classic Bungalow Cot', 1, 4, 1, 0, 'ksjal', 4000, '2021-01-14 22:57:53'),
(65, 'AISH', 9511603896, 'nikorediksha@gmail.c', '2021-01-23', '2021-01-27', 'Classic Bungalow Cot', 1, 4, 1, 0, 'ksjal', 4000, '2021-01-14 22:59:11'),
(66, 'AISH', 9511603896, 'nikorediksha@gmail.c', '2021-01-23', '2021-01-27', 'Classic Bungalow Cot', 1, 4, 1, 0, 'ksjal', 4000, '2021-01-14 22:59:59'),
(67, 'AISH', 9511603896, 'nikorediksha@gmail.c', '2021-01-23', '2021-01-27', 'Classic Bungalow Cot', 1, 4, 1, 0, 'ksjal', 4000, '2021-01-14 23:00:07'),
(68, 'AISH', 9511603896, 'nikorediksha@gmail.c', '2021-01-23', '2021-01-27', 'Classic Bungalow Cot', 1, 4, 1, 0, 'ksjal', 4000, '2021-01-14 23:00:40'),
(69, 'AISH', 9511603896, 'nikorediksha@gmail.c', '2021-01-23', '2021-01-27', 'Classic Bungalow Cot', 1, 4, 1, 0, 'ksjal', 4000, '2021-01-14 23:00:48'),
(70, 'AISH', 9511603896, 'nikorediksha@gmail.c', '2021-01-23', '2021-01-27', 'Classic Bungalow Cot', 1, 4, 1, 0, 'ksjal', 4000, '2021-01-14 23:02:07'),
(71, 'AISH', 9511603896, 'nikorediksha@gmail.c', '2021-01-23', '2021-01-27', 'Classic Bungalow Cot', 1, 4, 1, 0, 'ksjal', 4000, '2021-01-14 23:03:28'),
(72, 'AISH', 9511603896, 'nikorediksha@gmail.c', '2021-01-23', '2021-01-27', 'Classic Bungalow Cot', 1, 4, 1, 0, 'ksjal', 4000, '2021-01-14 23:05:04'),
(73, 'AISH', 9511603896, 'nikorediksha@gmail.c', '2021-01-23', '2021-01-27', 'Classic Bungalow Cot', 1, 4, 1, 0, 'ksjal', 4000, '2021-01-14 23:05:36'),
(74, 'AISH', 9511603896, 'nikorediksha@gmail.c', '2021-01-23', '2021-01-27', 'Classic Bungalow Cot', 1, 4, 1, 0, 'ksjal', 4000, '2021-01-14 23:06:06'),
(75, 'AISH', 9511603896, 'nikorediksha@gmail.c', '2021-01-23', '2021-01-27', 'Classic Bungalow Cot', 1, 4, 1, 0, 'ksjal', 4000, '2021-01-14 23:06:28'),
(76, 'AISH', 9511603896, 'nikorediksha@gmail.c', '2021-01-23', '2021-01-27', 'Classic Bungalow Cot', 1, 4, 1, 0, 'ksjal', 4000, '2021-01-14 23:07:34'),
(77, 'AISH', 9511603896, 'nikorediksha@gmail.c', '2021-01-23', '2021-01-27', 'Classic Bungalow Cot', 1, 4, 1, 0, 'ksjal', 4000, '2021-01-14 23:07:58'),
(78, 'AISH', 9511603896, 'nikorediksha@gmail.c', '2021-01-23', '2021-01-27', 'Classic Bungalow Cot', 1, 4, 1, 0, 'ksjal', 4000, '2021-01-14 23:08:29'),
(79, 'AISH', 9511603896, 'nikorediksha@gmail.c', '2021-01-23', '2021-01-27', 'Classic Bungalow Cot', 1, 4, 1, 0, 'ksjal', 4000, '2021-01-14 23:08:30'),
(80, 'AISH', 9511603896, 'nikorediksha@gmail.c', '2021-01-23', '2021-01-27', 'Family Room', 1, 4, 1, 0, 'ksjal', 980, '2021-01-14 23:08:56'),
(81, 'AISH', 9511603896, 'nikorediksha@gmail.c', '2021-01-23', '2021-01-27', 'Classic Bungalow Cot', 1, 4, 1, 0, 'ksjal', 4000, '2021-01-14 23:12:30'),
(82, 'sayali', 9511603896, 'nikorediksha@gmail.c', '2021-01-23', '2021-01-27', 'Family Room', 1, 4, 1, 0, 'ksjal', 980, '2021-01-14 23:13:21'),
(83, 'rakhi', 1234567891, 'nikorediksha@gmail.c', '2021-01-16', '2021-01-19', 'Family Room', 3, 3, 1, 0, 'nanded', 2205, '2021-01-14 23:16:52'),
(84, 'rakhi', 1234567891, 'nikorediksha@gmail.c', '2021-01-16', '2021-01-19', 'Family Room', 3, 3, 1, 0, 'nanded', 2205, '2021-01-14 23:24:53'),
(85, 'rakhi', 1234567891, 'nikorediksha@gmail.c', '2021-01-16', '2021-01-19', 'Family Room', 3, 3, 1, 0, 'nanded', 2205, '2021-01-14 23:26:44'),
(86, 'rakhi', 1234567891, 'nikorediksha@gmail.c', '2021-01-16', '2021-01-19', 'Family Room', 3, 3, 1, 0, 'nanded', 2205, '2021-01-14 23:32:14'),
(87, 'rakhi', 1234567891, 'nikorediksha@gmail.c', '2021-01-16', '2021-01-19', 'Family Room', 3, 3, 1, 0, 'nanded', 2205, '2021-01-14 23:32:14'),
(88, 'rakhi', 1234567891, 'nikorediksha@gmail.c', '2021-01-16', '2021-01-19', 'Family Room', 3, 3, 1, 0, 'nanded', 2205, '2021-01-14 23:32:22'),
(89, 'rakhi', 1234567891, 'nikorediksha@gmail.c', '2021-01-16', '2021-01-19', 'Family Room', 3, 3, 1, 0, 'nanded', 2205, '2021-01-14 23:35:49'),
(90, 'rakhi', 1234567891, 'nikorediksha@gmail.c', '2021-01-16', '2021-01-19', 'Family Room', 3, 3, 1, 0, 'nanded', 2205, '2021-01-14 23:35:50'),
(91, 'rakhi', 1234567891, 'nikorediksha@gmail.c', '2021-01-16', '2021-01-19', 'Family Room', 3, 3, 1, 0, 'nanded', 2205, '2021-01-14 23:37:06'),
(92, 'rakhi', 1234567891, 'nikorediksha@gmail.c', '2021-01-16', '2021-01-19', 'Family Room', 3, 3, 1, 0, 'nanded', 2205, '2021-01-14 23:39:07'),
(93, 'sangita', 9511603896, 'nikorediksha@gmail.c', '2021-01-16', '2021-01-17', 'Family Room', 1, 1, 1, 0, 'mumbai', 245, '2021-01-15 00:15:11'),
(94, 'sangita', 9511603896, 'nikorediksha@gmail.c', '2021-01-16', '2021-01-17', 'Bachelors Room', 1, 1, 1, 0, 'kkj', 150, '2021-01-15 00:17:08'),
(95, 'diksha', 9511603896, 'nikorediksha@gmail.c', '2021-01-16', '2021-01-17', 'Family Room', 7, 1, 1, 0, 'pune', 1715, '2021-01-15 23:47:47'),
(96, 'diksha', 9511603896, 'nikorediksha@gmail.c', '2021-01-17', '2021-01-19', 'Family Room', 1, 2, 1, 0, 'pune', 490, '2021-01-16 14:07:17'),
(97, 'AISH', 9511603896, 'nikorediksha@gmail.c', '2021-01-17', '2021-01-19', 'Family Room', 1, 2, 1, 0, 'pune', 490, '2021-01-16 14:15:07'),
(98, 'diksha', 9511603896, 'nikorediksha@gmail.c', '2021-01-17', '2021-01-20', 'Family Room', 4, 3, 1, 0, 'pune', 2940, '2021-01-16 16:05:58'),
(99, 'diksha', 9511603896, 'nikorediksha@gmail.c', '2021-01-17', '2021-01-20', 'Family Room', 4, 3, 1, 0, 'pune', 2940, '2021-01-16 16:06:23');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Name` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `Phone` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Name`, `email`, `password`, `Phone`) VALUES
('pratiksha', 'pratiksha@gmail.com', 'abc', 6745982537),
('rani', 'ranni@gmail.com', '12345', 7856439843),
('nishant', 'nikorediksha@gmail.c', '123', 9511603896),
('neha', 'nikorediksha@gmail.c', '12345', 9511603896),
('sujata', 'nikorediksha@gmail.com', 'abc123', 7840905467);

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `roomtype` varchar(20) NOT NULL,
  `numberofrooms` int(11) UNSIGNED NOT NULL,
  `cost_per_night` int(5) NOT NULL,
  `adults` int(2) NOT NULL,
  `facility` varchar(100) NOT NULL,
  `size` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `image`, `roomtype`, `numberofrooms`, `cost_per_night`, `adults`, `facility`, `size`) VALUES
(1, 'img_3.jpg', 'Bachelors Room', 49, 150, 2, 'Closet with Hangers,HD flat-screen TV,Telephone', '20 sqm'),
(2, 'img_4.jpg', 'Classic Bungalow Cot', 30, 1000, 8, 'Closet with Hangers,HD flat-screen TV,Telephone   ', '200 sqm   '),
(3, 'bg_2.jpg', 'Family Room  ', 0, 245, 6, 'Closet with Hangers,HD flat-screen TV,Telephone  ', '60 sqm  '),
(4, 'img_5.jpg', 'Presidential Room', 0, 350, 4, 'Closet with Hangers,HD flat-screen TV,Telephone', '80 sqm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `history2`
--
ALTER TABLE `history2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `history2`
--
ALTER TABLE `history2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=207;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
