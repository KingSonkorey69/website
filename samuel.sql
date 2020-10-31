-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 31, 2020 at 02:09 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.9

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
(32, 'Fisi Kanyagara', 'Gabriel Githinji Kimotho', '2020-09-01', 2147483647, 'This is a tale about the hyena', 5000, 'fisi_kanyagara.jpg'),
(33, 'Fisi Mlafi', 'Gabriel Githinji', '2020-09-13', 987, 'fisi mlafi', 3000, 'Fisi_mlafi.jpg'),
(34, 'Fisi na Chui', 'Gbariel Githinji', '2020-09-13', 989, 'fisi na chui', 4000, 'Fisi_na_chui.jpg'),
(35, 'Fisi Na Supu Ya Nzi', 'Gabriel Githinji', '2020-09-20', 989, 'fisi na supu ya nzi', 4000, 'Fisi_na_supu_ya_nzi.jpg'),
(36, 'Sungura na Fisi', 'Gabriel Githinji', '2020-09-13', 989, 'sungura na fisi', 3000, 'Sungura_na_Fisi.jpg'),
(37, 'Kiapo cha Fisi', 'Gabriel Githinji', '2020-10-04', 987, 'kiapo cha fisi', 4000, 'Kiapo_cha_Fisi.jpg'),
(38, 'Ndovu na Sungura', 'Gabriel Githinji', '2020-10-02', 97879, 'Ndovu na sungura', 3000, 'Ndovu_na_Sungura.jpg'),
(39, 'Fisi na Swara', 'Gabriel Githinji', '2020-10-03', 97879, 'fisi na swara', 1500, 'Fisi_na_Swara.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `password`) VALUES
(25, 'Samuel', 'amshelkanyi@gmail.com', '+254716276879', '$2y$10$qP2nENpQ0mBJQ9rcWhmMledAzOcY2.l00oEA8wtClcpzqu57XDoo.'),
(26, 'Samuel', 'amshel@gmail.com', '+254716276879', '$2y$10$E4rBWWh3a9iFnNkWZPNmi.1461W4lVJLJHqZwA8MeossNvZH76We2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_info`
--
ALTER TABLE `book_info`
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
-- AUTO_INCREMENT for table `book_info`
--
ALTER TABLE `book_info`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
