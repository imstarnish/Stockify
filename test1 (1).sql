-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 08, 2017 at 02:56 AM
-- Server version: 5.6.34-log
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test1`
--

-- --------------------------------------------------------

--
-- Table structure for table `newslettersubscribers`
--

CREATE TABLE IF NOT EXISTS `newslettersubscribers` (
  `id` int(11) NOT NULL,
  `email_id` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newslettersubscribers`
--

INSERT INTO `newslettersubscribers` (`id`, `email_id`) VALUES
(1, 'abc@gmail.com'),
(3, 'as@a.com'),
(4, 'afs@s.com'),
(5, 'aaa@s.com'),
(6, 'aa@s'),
(12, 'rsd@ss'),
(13, 'trdd@aaq'),
(14, 'asd@gmail.com'),
(15, 'harsh@gmail.com'),
(16, 'amjanish@gmail.com'),
(17, 'khushbu@gmail.com'),
(18, 'ass@gmail.com'),
(19, 'dfsd@dsfs.com'),
(20, ''),
(21, ''),
(22, ''),
(23, ''),
(24, ''),
(25, ''),
(26, ''),
(27, ''),
(28, 'hghc');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `mail_id` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `hash` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `company`, `mail_id`, `pass`, `hash`, `status`) VALUES
(5, 'a', 'b', 'acd@gmail.com', '$2y$10$4DBVaDN0pjKyi.5.l7AmUeKJPgkXNWGxloA7SaxWpnW.XGYHJjgHe', '', ''),
(6, 'a', 'b', 'xyz@gmail.com', '$2y$10$IVGqf8FjYlGk5TgKh16U5uMICDihfeo1e1cNl2EGcAr6WFk9NzyGC', 'e515df0d202ae52fcebb14295743063b', '1'),
(7, 'ab', 'b', 'asd@gmail.com', '$2y$10$bJfx0L.o3UUyULkZ1BKQ.uyAsnneRTNldFZiaiV0Vaj/8datW5d56', '522a9ae9a99880d39e5daec35375e999', '1'),
(8, 'a', 'b', 'qw@gmail.com', '$2y$10$50p6oVbdzAyaEDl/N/qRV.z6K2XYY5I.urtRx47ghuTLoy4pdSPLy', 'f47330643ae134ca204bf6b2481fec47', '0'),
(9, 'a', 'b', 'qaz@gmail.com', '$2y$10$oc.dSdg.wbCijUSOjQ.aJewYPNXNgJAbabnSFLULLOuzKMgQGq6B.', '060ad92489947d410d897474079c1477', '0'),
(10, 'Anish', 'aaaa', 'qwerty@gmail.com', '$2y$10$ompGy.IOc.oI3c0rd/5NbeLXyGyBvE1a4I/CbE66wJYwL1.i4nXYS', 'dc87c13749315c7217cdc4ac692e704c', '1'),
(11, 'Anish', 'amazon', 'asdf@gmail.com', '$2y$10$XO1b0JBxcSkchJBk08au8.mIhKOyVzdYkTUCkCPm1I2OozrjPBgG2', 'ff49cc40a8890e6a60f40ff3026d2730', '1'),
(12, 'Rudra', 'RuYa', 'heru@gmail.com', '$2y$10$89SevrYtWcKCJ7TNLDowDug71aPod8Cmllbu0fujHIWJyCSSO8CHK', '0b8aff0438617c055eb55f0ba5d226fa', '0'),
(13, 'Yash', 'Yukteesa', 'ramani@gmail.com', '$2y$10$ZKpbIzUPWqRXcJO2xbMEkeWrGxrd9w0ffPoCyO2enH5S9HICcToQ6', '42a0e188f5033bc65bf8d78622277c4e', '1'),
(14, 'aaa', 'sdfafaf', 'nishit@gmail.com', '$2y$10$Qhb.n1cutrTv0mJHWtObxumKLEswB2ca3rHYnHCuunqwX0ILwvDqC', '18997733ec258a9fcaf239cc55d53363', '0'),
(15, 'Goku', 'dbz', 'goku@gmail.com', '$2y$10$c8jwbo6rYvfnqhYhgxl9h.ihPi5F2rWKcK99HVu3NbOI7DMKhEHlm', 'fde9264cf376fffe2ee4ddf4a988880d', '1'),
(16, 'anish', 'aaa', 'aaa@gmail.com', '$2y$10$uN7.Md12DevDHREnCYGx3.bBG/RXczxlJ2HH5h8OCIxU3vcXkA1uK', 'dc960c46c38bd16e953d97cdeefdbc68', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `newslettersubscribers`
--
ALTER TABLE `newslettersubscribers`
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
-- AUTO_INCREMENT for table `newslettersubscribers`
--
ALTER TABLE `newslettersubscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
