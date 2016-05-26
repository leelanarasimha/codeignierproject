-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: May 26, 2016 at 03:26 AM
-- Server version: 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogreader`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` text,
  `description` text NOT NULL,
  `added_date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `description`, `added_date`) VALUES
(1, 'Sample title', 'sample title description', '2016-05-20 00:00:00'),
(2, 'another post ', 'description of another post', '2016-05-20 00:00:00'),
(3, 'Tis is updated post', 'this is yupdated descriotn', '2016-05-19 00:00:00'),
(4, 'post adding', 'post adding', '2016-05-21 03:02:53'),
(5, 'add another post', 'add another post', '2016-05-21 03:03:08'),
(6, 'das das j', 'a  asjdgsaj ', '2016-05-21 03:03:21'),
(7, 'sdas djk a', ' kajhjlk hals', '2016-05-21 03:04:24'),
(8, 'asdkjas dkj', 'kj hjklasd laksjd', '2016-05-21 03:05:04'),
(9, 'adkjas dlj', 'ak fljkah als', '2016-05-21 03:07:09'),
(10, 'sd dj', 'ck cjk ahdlaks', '2016-05-21 03:28:06'),
(11, 'asd asd ', 'kh dkhals djk', '2016-05-21 03:42:53'),
(12, 'sak dalkjs ', 'jk asljdkals kdj', '2016-05-22 03:30:55'),
(13, 'dkjs dlja ', 'a haljsd ask', '2016-05-22 03:31:44'),
(14, 'asdas dk ', 'kja akjd aslkjd', '2016-05-22 03:31:59');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `added_date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `added_date`) VALUES
(2, 'leela.narsimha@gmail.com', '06d778aa57cb002fe849bf880324d2ad', '2016-05-24 03:25:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
