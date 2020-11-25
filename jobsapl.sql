-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2020 at 11:24 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobsapl`
--

-- --------------------------------------------------------

--
-- Table structure for table `aplform`
--

CREATE TABLE `aplform` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `age` int(255) NOT NULL,
  `exp` int(255) NOT NULL,
  `skill` varchar(255) NOT NULL,
  `resume` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aplform`
--

INSERT INTO `aplform` (`id`, `name`, `email`, `phone`, `age`, `exp`, `skill`, `resume`) VALUES
(1, 'Sandip', 'sandip@gmail.com', '8320194378', 21, 1, 'php', 'resume'),
(2, 'vijay', 'vijay@gmail.com', '091-25-521', 25, 0, '', ''),
(3, 'vijay', 'vijay@gmail.com', '091-25-521', 25, 0, '', ''),
(4, 'Ghanandiya', 'sandip@gmail.com', '091-25-521', 21, 0, '', ''),
(5, 'Ghanandiya', 'sandip@gmail.com', '091-25-521', 21, 0, 'php', 'resume'),
(6, 'ssfsd', 'vijay@gmail.com', '091-25-521', 25, 1, 'php', ''),
(7, 'ssfsd', 'vijay@gmail.com', '091-25-521', 25, 1, 'php', ''),
(8, 'ssfsd', 'vijay@gmail.com', '091-25-521', 25, 1, 'php', ''),
(11, 'sandipppp', 'sandipghanadiya@gmail.com', '9874563210', 26, 2, 'php', ''),
(12, 'sandipppp', 'sandipghanadiya@gmail.com', '9874563210', 26, 2, 'php', ''),
(14, 'pagal', 'pagal@gmail.com', '1234567890', 25, 0, 'php', ''),
(15, 'pagal', 'pagal@gmail.com', '1234567890', 25, 0, 'php', ''),
(16, 'pagal', 'pagal@gmail.com', '1234567890', 25, 0, 'php', ''),
(17, 'Ghanandiya', 'sandip@gmail.com', '8320194378', 25, 0, 'php', ''),
(18, 'Ghanandiya', 'sandip@gmail.com', '8320194378', 25, 0, 'php', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aplform`
--
ALTER TABLE `aplform`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aplform`
--
ALTER TABLE `aplform`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
