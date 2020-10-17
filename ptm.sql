-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 17 أكتوبر 2020 الساعة 10:39
-- إصدار الخادم: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ptm`
--

-- --------------------------------------------------------

--
-- بنية الجدول `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `depart_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `department`
--

INSERT INTO `department` (`id`, `depart_name`) VALUES
(1, 'Developer'),
(2, 'Support IT');

-- --------------------------------------------------------

--
-- بنية الجدول `info`
--

CREATE TABLE `info` (
  `email` varchar(150) NOT NULL,
  `name` varchar(150) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `rank` varchar(30) NOT NULL,
  `depart_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `info`
--

INSERT INTO `info` (`email`, `name`, `phone`, `rank`, `depart_id`) VALUES
('es@s.s', 'sd', '2222', '', 1),
('man@m.m', 'nasser', '9999', '', 1),
('test@t.t', 'Ahmad', '888', '', 1),
('user@u.u', 'user', '8888', '', 1);

-- --------------------------------------------------------

--
-- بنية الجدول `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `project_name` varchar(200) NOT NULL,
  `user_email` varchar(200) NOT NULL,
  `descrip` varchar(300) NOT NULL,
  `date_line` datetime NOT NULL,
  `create_date` datetime NOT NULL,
  `status` varchar(100) NOT NULL,
  `Client` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `project`
--

INSERT INTO `project` (`id`, `project_name`, `user_email`, `descrip`, `date_line`, `create_date`, `status`, `Client`) VALUES
(1, 'test', 'aljarallahabdulrahman@gmail.com', 'ttst', '2020-10-05 00:00:00', '0000-00-00 00:00:00', 'On Hold', 'kjj'),
(2, 'test', 'aljarallahabdulrahman@gmail.com', '33', '2020-10-21 00:00:00', '0000-00-00 00:00:00', 'On Hold', 'e'),
(3, 'tests', 'aljarallahabdulrahman@gmail.com', 'sa', '2020-10-14 00:00:00', '2020-10-11 00:00:00', 'On Hold', 'kjj'),
(4, 'bulid new system ', 'aljarallahabdulrahman@gmail.com', 'ss', '2020-10-29 00:00:00', '2020-10-12 00:00:00', '', ''),
(5, 'build api ', 'man@m.m', 'build api project ', '2020-12-24 00:00:00', '2020-10-13 00:00:00', 'On Hold', 'STC ');

-- --------------------------------------------------------

--
-- بنية الجدول `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `role_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `role`
--

INSERT INTO `role` (`id`, `role_name`) VALUES
(1, 'admin'),
(2, 'manager'),
(3, 'employee');

-- --------------------------------------------------------

--
-- بنية الجدول `task`
--

CREATE TABLE `task` (
  `id_` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `task_name` varchar(300) NOT NULL,
  `descrip_task` varchar(300) NOT NULL,
  `status` varchar(100) NOT NULL,
  `employee_email` varchar(300) NOT NULL,
  `date_line` datetime NOT NULL,
  `date_create` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `task`
--

INSERT INTO `task` (`id_`, `project_id`, `task_name`, `descrip_task`, `status`, `employee_email`, `date_line`, `date_create`) VALUES
(1, 1, '991', 'ws', 'On Hold', 'es@s.s', '2020-10-22 00:00:00', '2020-10-11 00:00:00'),
(2, 1, 'sx', '98', 'Success', 'es@s.s', '2020-10-22 00:00:00', '2020-10-11 00:00:00'),
(3, 1, 'test ', 'test how can add task ', 'On Hold', 'es@s.s', '2020-11-06 00:00:00', '2020-10-11 00:00:00'),
(4, 1, 'build system ', 'm', 'Success', 'test@t.t', '2020-10-30 00:00:00', '2020-10-12 00:00:00'),
(7, 5, 'build database ', 'build database for new api ', 'Success', 'user@u.u', '2020-10-16 00:00:00', '2020-10-13 00:00:00');

-- --------------------------------------------------------

--
-- بنية الجدول `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(150) NOT NULL,
  `pass` text NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `user`
--

INSERT INTO `user` (`id`, `email`, `pass`, `role`) VALUES
(1, 'aljarallahabdulrahman@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 2),
(3, 'es@s.s', '1111', 3),
(4, 'test@t.t', '7c4a8d09ca3762af61e59520943dc26494f8941b', 3),
(5, 'man@m.m', '7c4a8d09ca3762af61e59520943dc26494f8941b', 2),
(6, 'user@u.u', '7c4a8d09ca3762af61e59520943dc26494f8941b', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id_`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `id_` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
