-- phpMyAdmin SQL Dump
-- version 4.2.6deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 21, 2015 at 02:38 PM
-- Server version: 5.5.44-0ubuntu0.14.10.1
-- PHP Version: 5.5.12-2ubuntu4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `Bansach`
--
CREATE DATABASE IF NOT EXISTS `Bansach` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `Bansach`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_book`
--

DROP TABLE IF EXISTS `tbl_book`;
CREATE TABLE IF NOT EXISTS `tbl_book` (
`id` int(11) NOT NULL,
  `nxb` varchar(128) NOT NULL,
  `author` varchar(128) NOT NULL,
  `km_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `type` int(11) NOT NULL,
  `cost` int(13) NOT NULL,
  `introduc` text NOT NULL,
  `namxb` int(11) NOT NULL,
  `slnhap` int(11) NOT NULL,
  `slcon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_km`
--

DROP TABLE IF EXISTS `tbl_km`;
CREATE TABLE IF NOT EXISTS `tbl_km` (
`id` int(11) NOT NULL,
  `content` text NOT NULL,
  `phantram` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_km`
--

INSERT INTO `tbl_km` (`id`, `content`, `phantram`) VALUES
(1, 'km nhan ngay 20/10', 50),
(2, 'km ngay nha giao viet nam', 20);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tacgia`
--

DROP TABLE IF EXISTS `tbl_tacgia`;
CREATE TABLE IF NOT EXISTS `tbl_tacgia` (
`id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `profile` text NOT NULL,
  `frequency` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_tacgia`
--

INSERT INTO `tbl_tacgia` (`id`, `name`, `profile`, `frequency`) VALUES
(1, 'to hoai', 'abc', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE IF NOT EXISTS `tbl_user` (
`id` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `profile` varchar(128) NOT NULL,
  `phone` varchar(128) NOT NULL,
  `user_type` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `password`, `email`, `profile`, `phone`, `user_type`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'hoang@gmail.com', 'abcd', '12345678', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_book`
--
ALTER TABLE `tbl_book`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_km`
--
ALTER TABLE `tbl_km`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_tacgia`
--
ALTER TABLE `tbl_tacgia`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_book`
--
ALTER TABLE `tbl_book`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_km`
--
ALTER TABLE `tbl_km`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_tacgia`
--
ALTER TABLE `tbl_tacgia`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
