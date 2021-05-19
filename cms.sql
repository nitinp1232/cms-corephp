-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2021 at 01:26 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `cats`
--

CREATE TABLE `cats` (
  `sno` int(11) NOT NULL,
  `catname` varchar(50) NOT NULL,
  `catdes` varchar(200) NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cats`
--

INSERT INTO `cats` (`sno`, `catname`, `catdes`, `dt`) VALUES
(1, 'Public Posts', 'Public Posts', '2020-08-13 21:36:24'),
(2, 'Media Post', 'Media Post', '2020-08-13 21:36:24');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `sno` int(11) NOT NULL,
  `admin` varchar(150) NOT NULL,
  `title` varchar(150) NOT NULL,
  `des` varchar(2000) NOT NULL,
  `cats` varchar(100) NOT NULL,
  `catid` int(100) NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp(),
  `img` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`sno`, `admin`, `title`, `des`, `cats`, `catid`, `dt`, `img`) VALUES
(22, 'nitin', 'Test Post', '<p>Some content here</p>\r\n', 'Public Posts', 1, '2020-09-17 20:19:00', 'cms1600354233.jpg'),
(23, 'nitin', 'Another image title', '<p>Content</p>\r\n', 'Public Posts', 1, '2020-09-17 20:42:00', 'cms1600355583.jpg'),
(24, 'nitinpp', 'Summer Activity', '<p>fsdivndsnviudfniuvndfxc ix</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>csd</p>\r\n\r\n<p>c</p>\r\n\r\n<p>f</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>vdf</p>\r\n\r\n<p>v</p>\r\n\r\n<p>df</p>\r\n\r\n<p>vdfvdf</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>fvlkmcndcnkjnc</p>\r\n', 'Public Posts', 1, '0000-00-00 00:00:00', 'cms1618245375.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sno` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(300) NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sno`, `username`, `email`, `password`, `dt`) VALUES
(8, 'nitin', 'nitin@mail.com', '123', '2020-09-17 20:19:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cats`
--
ALTER TABLE `cats`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cats`
--
ALTER TABLE `cats`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
