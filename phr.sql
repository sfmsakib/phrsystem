-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2018 at 01:23 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phr`
--

-- --------------------------------------------------------

--
-- Table structure for table `blood_pressure`
--

CREATE TABLE `blood_pressure` (
  `bpid` int(11) NOT NULL,
  `user_id` int(6) NOT NULL,
  `systolic` int(10) NOT NULL,
  `diastolic` int(10) NOT NULL,
  `pulse` int(250) NOT NULL,
  `irregular_heartbeat` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dom` date NOT NULL,
  `tom` time DEFAULT NULL,
  `note` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blood_pressure`
--

INSERT INTO `blood_pressure` (`bpid`, `user_id`, `systolic`, `diastolic`, `pulse`, `irregular_heartbeat`, `dom`, `tom`, `note`) VALUES
(3, 100002, 130, 80, 70, 'no', '2018-03-03', '07:32:30', 'feeling cool'),
(5, 100001, 130, 85, 76, 'no', '2018-03-04', '07:32:30', 'Happy'),
(6, 100001, 135, 90, 80, '', '2017-03-03', '00:00:00', ''),
(8, 100001, 140, 85, 80, 'no', '2015-03-03', '07:32:30', 'oops'),
(21, 100000, 120, 80, 60, 'no', '2018-03-03', '07:32:30', '1st input'),
(22, 100000, 120, 80, 60, 'no', '2018-05-03', '13:06:30', '2nd input'),
(23, 100000, 120, 85, 76, 'no', '2018-03-04', '07:32:30', ''),
(24, 100000, 120, 85, 70, 'no', '2015-03-03', '07:32:30', ''),
(25, 100000, 120, 85, 60, '', '2017-03-03', '00:00:00', ''),
(26, 100000, 135, 85, 0, '', '2015-03-03', '00:00:00', ''),
(27, 100002, 130, 85, 60, 'no', '2017-03-03', '07:32:30', ''),
(30, 100002, 135, 85, 0, '', '2017-03-03', '00:00:00', ''),
(31, 100002, 120, 90, 0, '', '2018-03-03', '00:00:00', ''),
(32, 100002, 120, 80, 60, 'no', '2018-04-04', '00:00:00', ''),
(33, 100002, 120, 80, 60, 'no', '2018-04-04', '00:00:00', ''),
(34, 100002, 120, 80, 60, 'no', '2018-04-04', '00:00:00', ''),
(35, 100002, 130, 80, 60, 'no', '2018-04-04', '00:00:00', ''),
(36, 100002, 140, 80, 60, 'no', '2018-04-04', '00:00:00', ''),
(37, 100002, 120, 80, 60, 'no', '2018-04-04', '00:00:00', ''),
(38, 100002, 124, 80, 60, 'no', '2018-04-04', '00:00:00', ''),
(39, 100002, 150, 80, 60, 'no', '2018-04-04', '00:00:00', ''),
(40, 100002, 130, 80, 60, 'no', '2018-04-04', '00:00:00', ''),
(41, 100002, 122, 80, 60, 'no', '2018-04-04', '00:00:00', ''),
(42, 100002, 126, 80, 60, 'no', '2018-04-04', '00:00:00', ''),
(43, 100002, 170, 80, 60, 'no', '2018-04-04', '00:00:00', ''),
(44, 100002, 180, 80, 60, 'no', '2018-04-04', '00:00:00', ''),
(45, 100002, 170, 80, 60, 'no', '2018-04-04', '00:00:00', ''),
(46, 100002, 150, 80, 60, 'no', '2018-04-04', '00:00:00', ''),
(47, 100002, 120, 80, 60, 'no', '2018-04-04', '00:00:00', ''),
(48, 100002, 180, 80, 60, 'no', '2018-04-04', '00:00:00', ''),
(49, 100002, 120, 80, 60, 'no', '2018-04-04', '00:00:00', ''),
(53, 100006, 120, 80, 0, '', '2017-03-03', '00:00:00', ''),
(54, 100006, 130, 80, 0, '', '2018-03-03', '00:00:00', ''),
(55, 100006, 135, 90, 0, '', '2017-03-03', '00:00:00', ''),
(56, 100006, 130, 80, 0, '', '2017-03-03', '00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `diagnostic_info`
--

CREATE TABLE `diagnostic_info` (
  `id` int(11) NOT NULL,
  `dg_id` int(11) NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_no` int(11) NOT NULL,
  `email` varchar(260) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_pic` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `diagnostic_info`
--

INSERT INTO `diagnostic_info` (`id`, `dg_id`, `name`, `phone_no`, `email`, `password`, `profile_pic`) VALUES
(3, 10001, 'Fuad Diagnostic Center', 1670219027, 'skb@gmail.com', 'e8967b2788382ed826f046e8a567c52f', 'uploads/diagnostic/profilepic/SR.jpg265201.jpg'),
(4, 10002, 'Sakib DG', 987654, 'skbdg@gmail.com', 'e8967b2788382ed826f046e8a567c52f', 'uploads/diagnostic/profilepic/GO logo1.jpg861280.jpg'),
(5, 10003, 'gddg', 4444444, 'admin@gmail.com', 'e8967b2788382ed826f046e8a567c52f', 'uploads/diagnostic/profilepic/GO logo2.jpg306380.jpg'),
(6, 10004, 'Demo Lab', 225525, 'demo@demo.com', '81dc9bdb52d04dc20036dbd8313ed055', 'uploads/diagnostic/profilepic/Untitled-1.jpg232884.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `height_measurement`
--

CREATE TABLE `height_measurement` (
  `htid` int(11) NOT NULL,
  `user_id` int(6) NOT NULL,
  `height` float NOT NULL,
  `htdom` date NOT NULL,
  `httom` time DEFAULT NULL,
  `htnote` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `height_measurement`
--

INSERT INTO `height_measurement` (`htid`, `user_id`, `height`, `htdom`, `httom`, `htnote`) VALUES
(1, 100006, 167, '2018-04-03', '12:45:00', ''),
(2, 100006, 168, '2018-04-03', '12:45:00', ''),
(3, 100006, 167.5, '2018-05-03', '00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `medical_record_document`
--

CREATE TABLE `medical_record_document` (
  `docid` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disease_title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doc_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doc_name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doc_loc` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `app_date` date NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci,
  `create_date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dg_id` int(11) DEFAULT NULL,
  `dr_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medical_record_document`
--

INSERT INTO `medical_record_document` (`docid`, `user_id`, `user_name`, `disease_title`, `doc_type`, `doc_name`, `doc_loc`, `app_date`, `comment`, `create_date_time`, `dg_id`, `dr_id`) VALUES
(4, 100000, 'Sheikh fuyad Sakib', '1st title', 'report', 'after.jpg', 'uploads/documents/after.jpg', '2018-03-01', 'cool!', '2018-03-09 13:35:03', NULL, NULL),
(5, 100000, 'Sheikh Fuyad Sakib', '2nd title', 'prescription', 'curves heart rate poster.jpg', 'uploads/documents/curves heart rate poster.jpg', '2018-03-01', 'WoW!', '2018-03-09 13:54:54', NULL, NULL),
(6, 100000, 'Sheikh fuyad Sakib', '3rd', 'report', 'after.jpg248134.jpg', 'uploads/documents/after.jpg248134.jpg', '2018-03-01', 'ioo', '2018-03-09 14:34:55', NULL, NULL),
(8, 100000, 'Sheikh fuyad Sakib', '4th', 'prescription', '27545069_1594964977217178_8517193762923282507_n.jpg34884.jpg', 'uploads/documents/27545069_1594964977217178_8517193762923282507_n.jpg34884.jpg', '2018-03-01', '', '2018-03-09 14:53:53', NULL, NULL),
(10, 100000, 'Sheikh Fuyad Sakib', 'next', 'prescription', 'backdrop.jpg482095.jpg', 'uploads/documents/backdrop.jpg482095.jpg', '2015-03-01', 'fasdf', '2018-03-09 14:58:54', NULL, NULL),
(11, 100001, 'ronaldo', '1st title', 'prescription', '27545069_1594964977217178_8517193762923282507_n.jpg607866.jpg', 'uploads/documents/27545069_1594964977217178_8517193762923282507_n.jpg607866.jpg', '2018-03-01', '', '2018-03-09 18:05:44', NULL, NULL),
(12, 100001, 'ronaldo', '2nd title', 'invoice', 'back.jpg492008.jpg', 'uploads/documents/back.jpg492008.jpg', '2015-03-01', '', '2018-03-09 18:06:03', NULL, NULL),
(13, 100000, 'Sheikh fuyad Sakib', '\\\\\\\\\\\\\\\\\\\\\\\\\\', 'report', '27545069_1594964977217178_8517193762923282507_n.jpg227636.jpg', 'uploads/documents/27545069_1594964977217178_8517193762923282507_n.jpg227636.jpg', '2018-03-16', ' \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\', '2018-03-10 13:59:54', NULL, NULL),
(14, 100002, 'neumer', '1st title', 'prescription', 'back.jpg202971.jpg', 'uploads/documents/back.jpg202971.jpg', '2018-03-06', 'hiuyu', '2018-03-11 12:59:38', NULL, NULL),
(15, 100000, 'Sheikh fuyad Sakib', 'New bill', 'Invoice', 'back.jpg376523.jpg', 'uploads/documents/back.jpg376523.jpg', '2018-03-11', 'Bill document\r\n', '2018-03-11 21:36:45', NULL, NULL),
(16, 100002, 'Neymer Jr', '1st title', 'Report', 'lol.jpg287376.jpg', 'uploads/documents/lol.jpg287376.jpg', '2018-03-23', 'ffggffggffgg', '2018-03-23 03:39:17', NULL, NULL),
(17, 100005, 'New Image', 'dsd', 'Invoice', '3.jpg451698.jpg', 'uploads/documents/3.jpg451698.jpg', '2018-03-23', 'cvbnm,', '2018-03-23 03:43:50', NULL, NULL),
(18, 100002, 'Neymer Jr', 'sccss', 'Report', '3.jpg333920.jpg', 'uploads/documents/3.jpg333920.jpg', '2018-03-23', 'scsce', '2018-03-23 16:58:18', NULL, NULL),
(19, 100001, 'ronaldo', '1st title', 'Report', '3.jpg992143.jpg', 'uploads/documents/3.jpg992143.jpg', '2018-03-23', 'ede', '2018-03-23 17:00:26', NULL, NULL),
(20, 100001, 'ronaldo', '4th', 'Prescription', '3.jpg604021.jpg', 'uploads/documents/3.jpg604021.jpg', '2018-03-07', '1w1', '2018-03-23 17:01:55', NULL, NULL),
(21, 100001, 'ronaldo', '1st title', 'Prescription', 'bbbbbbbbb.jpg295935.jpg', 'uploads/documents/bbbbbbbbb.jpg295935.jpg', '2018-03-01', 'w', '2018-03-23 17:02:26', NULL, NULL),
(22, 100005, 'Ney ', '4th', 'Prescription', 'bbbbbbbbb.jpg135912.jpg', 'uploads/documents/bbbbbbbbb.jpg135912.jpg', '2018-03-25', 'qs', '2018-03-23 17:04:04', NULL, NULL),
(23, 100005, 'Neymer Jr', '1st title', 'Prescription', 'bbbbbbbbb.jpg414780.jpg', 'uploads/documents/bbbbbbbbb.jpg414780.jpg', '2018-03-24', '', '2018-03-24 01:43:51', NULL, NULL),
(24, 100005, 'Neymer Jr', '1st title', 'Prescription', 'bbbbbbbbb.jpg797113.jpg', 'uploads/documents/bbbbbbbbb.jpg797113.jpg', '2018-03-24', 'tyu', '2018-03-24 01:55:55', NULL, NULL),
(25, 100005, 'sds', '4th', 'Prescription', '3818475.jpg', 'uploads/documents/3818475.jpg', '2018-03-21', 'ww', '2018-03-24 16:19:25', NULL, NULL),
(26, 100005, 'sds', '1st title', 'Report', '3674138.jpg', 'uploads/documents/3674138.jpg', '2018-03-24', 'ttttt', '2018-03-24 16:44:08', 10001, NULL),
(27, 100002, 'Neymer Jr', '4th', 'Report', '3.jpg311853.jpg', 'uploads/documents/3.jpg311853.jpg', '2018-03-22', 'nlllll', '2018-03-24 16:48:29', NULL, NULL),
(28, 100002, 'Neymer Jr', '5th', 'Report', 'bbbbbbbbb699065.jpg', 'uploads/documents/bbbbbbbbb699065.jpg', '2018-03-24', 'sdfgj', '2018-03-24 16:52:22', NULL, NULL),
(29, 100005, 'dsf', 'de', 'Prescription', 'lol663257.jpg', 'uploads/documents/lol663257.jpg', '2018-03-22', '', '2018-03-25 18:45:22', 10001, NULL),
(30, 100002, 'Neymer Jr', 'fever', 'Prescription', '29541512_1659675774122311_1046816731971059687_n356787.jpg', 'uploads/documents/29541512_1659675774122311_1046816731971059687_n356787.jpg', '2018-04-03', ':(', '2018-04-02 04:30:59', NULL, NULL),
(31, 100002, 'Neymer Jr', 'new test', 'Report', 'untitled-1161838.jpg', 'uploads/documents/untitled-1161838.jpg', '2018-04-03', 'cool', '2018-04-03 02:41:36', 10003, NULL),
(32, 100005, 'sds', 'dsd', 'Report', 'untitled-158066.jpg', 'uploads/documents/untitled-158066.jpg', '2018-04-03', 'ki', '2018-04-03 02:44:40', 10003, NULL),
(33, 100002, 'Neymer Jr', 'dsd', 'Report', 'images448198.png', 'uploads/documents/images448198.png', '2018-04-09', '', '2018-04-03 02:46:02', NULL, NULL),
(34, 100002, 'Sheikh fuyad Sakib', 'ekhon', 'Report', 'abstraiga-el-fondo-textura-de-la-tarjeta-de-circuitos-20825385438347.jpg', 'uploads/documents/abstraiga-el-fondo-textura-de-la-tarjeta-de-circuitos-20825385438347.jpg', '2018-04-03', '', '2018-04-03 02:48:25', NULL, NULL),
(35, 100006, 'Demo', 'XM fever', 'Prescription', '29541512_1659675774122311_1046816731971059687_n877471.jpg', 'uploads/documents/29541512_1659675774122311_1046816731971059687_n877471.jpg', '2018-04-03', ':)', '2018-04-03 02:57:30', NULL, NULL),
(36, 100006, 'Demo', '2nd title', 'Report', '29543321_1659675737455648_1954734944869810800_n849943.jpg', 'uploads/documents/29543321_1659675737455648_1954734944869810800_n849943.jpg', '2018-04-05', '', '2018-04-05 13:36:46', NULL, NULL),
(37, 100002, 'Neymer Jr', '4th', 'Report', '91.9244z138539932.jpg', 'uploads/documents/91.9244z138539932.jpg', '2018-04-03', '', '2018-04-05 14:21:25', 10003, NULL),
(38, 100002, 'Neymer Jr', 'dsd', 'Prescription', 'images878315.png', 'uploads/documents/images878315.png', '2018-04-11', '', '2018-04-05 14:29:45', 10003, NULL),
(39, 100001, 'Cristiano Ronaldo', 'Fever', 'Report', '29541512_1659675774122311_1046816731971059687_n799478.jpg', 'uploads/documents/29541512_1659675774122311_1046816731971059687_n799478.jpg', '2018-04-12', '', '2018-04-05 15:58:24', 10004, NULL),
(40, 100006, 'Demo', '2nd title', 'Report', '91.9244z138948903.jpg', 'uploads/documents/91.9244z138948903.jpg', '2018-04-07', '', '2018-04-06 06:55:54', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `reg_date`) VALUES
(1, '0', 'skfuadsakib@gmail.com', 'e8967b2788382ed826f046e8a567c52f', '2018-02-27 06:32:24'),
(2, 'skb', 'skfuadsakib@gmail.com', 'e8967b2788382ed826f046e8a567c52f', '2018-02-27 06:33:47'),
(3, 'skb', 'skfuadsakib@gmail.com', 'e8967b2788382ed826f046e8a567c52f', '2018-02-27 06:34:04'),
(4, 'de', 'skfuadsakib@gmail.com', 'e8967b2788382ed826f046e8a567c52f', '2018-02-27 07:46:26'),
(5, 'oooo', 'skfuadsakib@gmail.com', 'e8967b2788382ed826f046e8a567c52f', '2018-02-27 07:46:34'),
(6, 'p', 'skfuadsakib@gmail.com', 'e8967b2788382ed826f046e8a567c52f', '2018-02-27 07:47:45'),
(7, 'yyy', 'skfuadsakib@gmail.com', 'e8967b2788382ed826f046e8a567c52f', '2018-02-27 08:10:24'),
(8, 'm', 'skfuadsakib@mmail.com', 'e8967b2788382ed826f046e8a567c52f', '2018-02-27 08:38:57'),
(9, 'fuad', 'skfuadsakib@ymail.com', 'e8967b2788382ed826f046e8a567c52f', '2018-02-27 08:39:49'),
(10, 'skb', 'skfuadsakib@nmail.com', 'e8967b2788382ed826f046e8a567c52f', '2018-02-27 08:49:17'),
(11, 'sakib', 'skfuadsakib@fmail.com', 'e8967b2788382ed826f046e8a567c52f', '2018-02-27 23:03:27');

-- --------------------------------------------------------

--
-- Table structure for table `users_info`
--

CREATE TABLE `users_info` (
  `id` int(20) UNSIGNED NOT NULL,
  `user_id` int(6) NOT NULL,
  `first_name` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_pic` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sex` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `phone_no` int(15) UNSIGNED NOT NULL,
  `email` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users_info`
--

INSERT INTO `users_info` (`id`, `user_id`, `first_name`, `last_name`, `profile_pic`, `sex`, `dob`, `phone_no`, `email`, `password`) VALUES
(1, 100000, 'Sheikh Fuad', 'Sakib', 'uploads/profilepic/IMG_3177.JPG227613.jpg', 'male', '1994-04-03', 1670219027, 'admin@gmail.com', 'e8967b2788382ed826f046e8a567c52f'),
(15, 100001, 'Cristiano', 'Ronaldo', 'uploads/profilepic/cr7.jpg', 'male', '1989-03-03', 277324, 'cr7@gmail.com', 'e8967b2788382ed826f046e8a567c52f'),
(16, 100002, 'Neymer', 'Jr', 'uploads/profilepic/dgt9kwhuiae1pta669895.jpg', 'male', '1991-03-03', 43246, 'neymerjr@gmail.com', 'e8967b2788382ed826f046e8a567c52f'),
(18, 100003, 'New ', 'User', 'uploads/profilepic/GO logo.png726009.png', 'female', '1111-02-22', 1220219027, 'newuser@gmail.com', 'e8967b2788382ed826f046e8a567c52f'),
(19, 100004, 'img', 'vo', '', 'male', '2018-03-07', 232424, '24@gmail.com', 'e8967b2788382ed826f046e8a567c52f'),
(20, 100005, 'New ', 'Image', 'uploads/profilepic/after.jpg830641.jpg', 'male', '2222-02-22', 1780459027, '1234567890@gmail.com', 'e8967b2788382ed826f046e8a567c52f'),
(21, 100006, 'Demo', 'Account', 'uploads/profilepic/cool-attitude-miniclip-8-ball-pool-avatar-dp-for-boys-hd-images-regarding-profile-photo-avatar-600x600559737.png', 'male', '2018-04-03', 1780219032, 'demo@demo.com', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `weight_measurement`
--

CREATE TABLE `weight_measurement` (
  `wtid` int(11) NOT NULL,
  `user_id` int(6) NOT NULL,
  `weight` float NOT NULL,
  `wtdom` date NOT NULL,
  `wttom` time DEFAULT NULL,
  `wtnote` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `weight_measurement`
--

INSERT INTO `weight_measurement` (`wtid`, `user_id`, `weight`, `wtdom`, `wttom`, `wtnote`) VALUES
(1, 100001, 75, '2018-03-03', '13:06:30', 'yep its good!!!!!'),
(2, 100001, 54, '2014-08-05', '00:00:00', ':-p'),
(4, 100001, 60, '2014-08-08', '00:00:00', '=D'),
(7, 100000, 54, '2018-04-03', '00:00:00', ':)'),
(10, 100000, 60, '2018-04-03', '00:00:00', ''),
(11, 100000, 54, '2014-08-05', '07:42:55', ''),
(12, 100000, 60, '2014-08-08', '07:42:55', ''),
(13, 100002, 68, '2018-04-03', '07:42:55', ''),
(18, 100002, 54, '2018-04-03', '07:42:55', ''),
(19, 100002, 75, '2018-04-03', '07:42:55', ''),
(20, 100002, 74, '2014-08-08', '07:42:55', ''),
(35, 100006, 60, '2014-08-05', '07:42:55', ''),
(37, 100006, 167, '2014-08-05', '07:42:55', ''),
(38, 100006, 54, '2018-04-03', '00:00:00', ''),
(39, 100006, 60, '2018-04-03', '00:00:00', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blood_pressure`
--
ALTER TABLE `blood_pressure`
  ADD PRIMARY KEY (`bpid`);

--
-- Indexes for table `diagnostic_info`
--
ALTER TABLE `diagnostic_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `height_measurement`
--
ALTER TABLE `height_measurement`
  ADD PRIMARY KEY (`htid`);

--
-- Indexes for table `medical_record_document`
--
ALTER TABLE `medical_record_document`
  ADD PRIMARY KEY (`docid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_info`
--
ALTER TABLE `users_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `weight_measurement`
--
ALTER TABLE `weight_measurement`
  ADD PRIMARY KEY (`wtid`),
  ADD UNIQUE KEY `wtid` (`wtid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blood_pressure`
--
ALTER TABLE `blood_pressure`
  MODIFY `bpid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `diagnostic_info`
--
ALTER TABLE `diagnostic_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `height_measurement`
--
ALTER TABLE `height_measurement`
  MODIFY `htid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `medical_record_document`
--
ALTER TABLE `medical_record_document`
  MODIFY `docid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users_info`
--
ALTER TABLE `users_info`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `weight_measurement`
--
ALTER TABLE `weight_measurement`
  MODIFY `wtid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
