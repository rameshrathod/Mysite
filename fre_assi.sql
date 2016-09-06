-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2016 at 03:24 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fre_assi`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`username`, `password`, `firstname`, `lastname`) VALUES
('b vb', '', 'cv', ''),
('bvn', '', '', ''),
('dfg', '', '', ''),
('dgdffdbdfb', '', 'racco', 'racco'),
('dsfknmjasd;lk', 'bfdb', 'fdbdf', 'dfbdf'),
('dsvdf', '', '', ''),
('e', '', '', ''),
('e21464', '', '', ''),
('esdfsdf', '', '', ''),
('gb', '', '', ''),
('ghgfngfn', '', '', ''),
('ghmjfg', '', '', ''),
('hujkhjkjhk', 'kjhkjhk', 'hjk', ''),
('n bn ', '', ' ', ''),
('nfghnjghjgh', '', '', ''),
('nm', '', '', ''),
('racco', 'racco', '', ''),
('ramesh', 'a123216', 'racco', 'racco'),
('rfs', '', '', ''),
('rthyjhjk', '', '', ''),
('sdf', '', '', ''),
('sdfvdsfg', '', '', ''),
('vdf', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
