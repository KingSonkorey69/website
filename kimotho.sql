-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2021 at 11:10 AM
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
-- Database: `kimotho`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_info`
--

CREATE TABLE `book_info` (
  `book_info` int(255) NOT NULL,
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

INSERT INTO `book_info` (`book_info`, `book_title`, `book_author_name`, `book_upload_date`, `book_isbno`, `book_synopsis`, `book_price`, `book_image`) VALUES
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
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `invoice` int(11) NOT NULL,
  `invoice_number` varchar(255) NOT NULL,
  `users` int(11) NOT NULL,
  `book_info` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`invoice`, `invoice_number`, `users`, `book_info`, `date`) VALUES
(1, '34725427645723645', 32, 27, '2021-02-10 09:39:36');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `users` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users`, `name`, `email`, `mobile`, `password`) VALUES
(27, 'githinji', 'githinji@gmail.com', '0734824894', '$2y$10$j6nbbv4Q9Pmb/vaG5rdtDu0K05FmKLqd.Llgl34cy1I1uRG0zM50u'),
(28, 'sam', 'sam@gmail.com', '0702129493', '$2y$10$IP.1M6iYDki9PJuevjv2sOJRqSpD5sNDeB81tEQ40WXvbeIxmQK2a'),
(29, 'samuel kimotho', 'sam.kimotho450@gmail.com', '0711234567', '$2y$10$7VSt0KE6MsYPGZnzbiyhq.6XNFWZhwajesjAQyb3lOPm0Gw3hOtzq'),
(30, 'sk', 'sk@gmail.com', '0711234567', '$2y$10$Eun4JtGgJnCej57dxt61KOHYj7RvtkFoH3MM339LVD.zPmnlNvo/S'),
(31, 'sammm', 'samk@gmail.com', '0735355466', '$2y$10$7gtRHejVWlfW4QhXemrR8uzmPMS1kMLdG7L9Pld1.HzzpNBHvxvTG'),
(32, 'sammm2', 'samk1@gmail.com', '0735355456', '$2y$10$gAAY2lC3iE6ULpsq0IA6L.YzeN/YPBj7Vu8fQS6.nfS.gWeurS892'),
(33, 'k', 'k@gmail.com', '0733322333', '$2y$10$ld5VMx3KwGLimqskXcfKKObVf/m2yKbZql4UeIFkmsLUMxDHociRW'),
(34, 'king', 'king@gmail.com', '0722767676', '$2y$10$0qGQgEiBisyP40tqQ4Zune.GVapCO0wLmbUaUD83rt7qlIuCa2cj2'),
(35, 'samuel', 'sam450@gmail.com', '0722868645', '$2y$10$3eZ3e16RaCPM.mCfoi7gu.z7dJF80V0D6jKazTSWDYSbeMzjwZBZG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_info`
--
ALTER TABLE `book_info`
  ADD PRIMARY KEY (`book_info`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`invoice`),
  ADD KEY `book_info_invoice_fk` (`book_info`),
  ADD KEY `user_invoice_fk` (`users`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book_info`
--
ALTER TABLE `book_info`
  MODIFY `book_info` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `invoice` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `book_info_invoice_fk` FOREIGN KEY (`book_info`) REFERENCES `book_info` (`book_info`),
  ADD CONSTRAINT `user_invoice_fk` FOREIGN KEY (`users`) REFERENCES `users` (`users`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
