-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2020 at 07:41 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `samuel`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_info`
--

CREATE TABLE `book_info` (
  `id` int(255) NOT NULL,
  `book_title` varchar(255) NOT NULL,
  `book_author_name` varchar(255) NOT NULL,
  `book_upload_date` date NOT NULL,
  `book_isbno` int(255) NOT NULL,
  `book_synopsis` text NOT NULL,
  `book_price` int(255) NOT NULL,
  `book_image` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_info`
--

INSERT INTO `book_info` (`id`, `book_title`, `book_author_name`, `book_upload_date`, `book_isbno`, `book_synopsis`, `book_price`, `book_image`) VALUES
(27, 'BuiBui Na Fisi', 'Gabriel Githinji Kimotho', '2020-07-01', 2147483647, 'Its a Story About a Spider and a Hyena ', 2000, 'buibui_na_fisi.jpg'),
(29, 'Fisi Na Ini', 'Gabriel Githinji Kimotho', '2020-07-01', 978, 'Its a Story About a Hyena  and The Liver', 2000, 'fisi_na_ini.jpg'),
(30, 'Fisi Na Kinyonga', 'Gabriel Githinji Kimotho', '2020-07-01', 978, 'Its a Story About a Hyena  and The Chameleon', 2000, 'fisi_na_kinyonga.jpg'),
(31, 'Fisi Na Punda', 'Gabriel Githinji Kimotho', '2020-07-01', 978, 'Its a Story About a Hyena  and The Donkey', 2000, 'fisi_na_punda.jpg'),
(32, 'Fisi Kanyagara', 'Gabriel Githinji Kimotho', '2020-09-01', 2147483647, 'This is a tale about the hyena', 5000, 'fisi_kanyagara.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_info`
--
ALTER TABLE `book_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book_info`
--
ALTER TABLE `book_info`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
