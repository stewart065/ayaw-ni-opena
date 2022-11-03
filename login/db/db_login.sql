-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2022 at 07:52 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `number` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `firstname`, `lastname`, `number`, `email`, `username`, `password`) VALUES
(1, 'client', 'booc', ' 9934322', 'clientstewart@gmail.com', 'clientstewart', 'admin1234'),
(2, 'rongie', 'gwapo', ' 88833455', 'rongieislaw@gmail.com', 'rongie', 'admin1234'),
(3, 'client', 'booc', ' 2555', 'rongieislaw@gmail.com', 'adddddd', 'addddd'),
(7, 'kristie', 'sala', ' 43434', 'kristiesala@gmail.om', 'kristie', 'admin123'),
(16, 'joy', 'asd', ' 2115222', 'casdas@gmail.com', 'joy', 'admin12345'),
(17, 'joys', 'asddddd', ' 21152226666', 'casdas@gmail.com', 'joys', 'admin123456'),
(18, 'joysf', 'asdddddss', ' 2115222666677', 'casdas@gmail.com', 'joysv', 'sfdsffsdfs'),
(23, 'asda', 'sdf', ' 45456', 'cluewlkjh@gmail.com', 'asdsad', '545465555');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
