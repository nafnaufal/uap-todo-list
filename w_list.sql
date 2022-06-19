-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2022 at 05:32 PM
-- Server version: 10.4.21-MariaDB-log
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `w_list`
--

-- --------------------------------------------------------

--
-- Table structure for table `list`
--

CREATE TABLE `list` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `detail` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `list`
--

INSERT INTO `list` (`id`, `title`, `date`, `time`, `detail`) VALUES
(6, 'asd a', '2022-06-21', '15:38:00', 'asdas dad'),
(18, 'zzxd', '2022-06-11', '03:57:00', 'asdasd'),
(19, 'sadad', '2022-06-06', '03:33:00', 'as dasdasd'),
(20, 'asd a', '2022-06-15', '00:37:00', 'sd a'),
(21, 'asd d', '2022-06-21', '00:35:00', 'as sda'),
(22, 'asda', '2022-06-21', '00:36:00', 'sdasdad'),
(23, 'ayam berkokok di paghi asadlans aksdh jasdkljalsjd ajslsjad klasjd ajskld jalksj dklajsd lkasjd klajsl djaklsjd klasjdkljas ldjaklsdjjkl', '2022-06-09', '00:48:00', 'aljs lajsd ajsd jakldj aklsjd klajsldkjaslkjajjjjajajajajajajajajajajajajajajjjjjjjsjjj ajsldkj alksjd klajsld jaklsd jklajd lkjaklsd jlaksj dklajsd kljasl dlaks la jsdklals dklj askldjaklsdj lasjd kjsklj akljdlkajs dklaskld jlk jsdklja skldja jsd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `list`
--
ALTER TABLE `list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `list`
--
ALTER TABLE `list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
