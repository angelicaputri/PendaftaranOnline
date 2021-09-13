-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2019 at 07:59 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penol`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`user_id`, `username`, `email`, `password`) VALUES
(1, 'Fagil Baskoro', 'gilbaskoro@gmail.com', 'gioraldo');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id_admin` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id_admin`, `name`, `username`, `email`, `password`) VALUES
(1, 'Gilbert Gioraldo Maulany', 'GioBlog', 'sonny012348@gmail.com', '$2y$10$04L9VmOb2iZiDyrNuXhf5eMv3GPnFQqxRXgjZdnzrV9dd5sLuDmSq'),
(4, 'aaa', 'GioGio', 'aaa@gmail.com', '$2y$10$W76AILbMzAW/Rw8DoAE0ruZwU6XGjvVNE7Av7OyH/K1iyRbyhyq12'),
(5, 'aaaaaa', 'aaaaa', 'aaa1@gmail.com', '$2y$10$Uv4u.KN1SeGK.Q10NIBjjuKv.qiBwrr4.jlFMlQG2MFLY3gE2oJia'),
(0, 'Angelica', 'angelicam', '', '$2y$10$NtMl7rJ6ZweQckinGBx4O..ohLb4wmOMhQEzdNKPaYp8xLXlX9cHe'),
(0, 'Angelica Amartya', 'angelicamartya', 'angelica.amartya01@gmail.com', '$2y$10$WoqB89LjQpoaSmTQOxiNSO8TkvwwlnUaUtJt7l47Qp1eyKAovwHte');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `user_id` int(11) NOT NULL,
  `nilai` int(11) NOT NULL,
  `hasil` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `namaLengkap` varchar(50) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `ttl` varchar(50) NOT NULL,
  `umur` varchar(3) NOT NULL,
  `alamat` text NOT NULL,
  `namaBapak` varchar(50) NOT NULL,
  `kerjaBapak` varchar(30) NOT NULL,
  `tempatBapak` varchar(50) NOT NULL,
  `gajiBapak` varchar(15) NOT NULL,
  `namaIbu` varchar(50) NOT NULL,
  `kerjaIbu` varchar(30) NOT NULL,
  `tempatIbu` varchar(50) NOT NULL,
  `gajiIbu` varchar(15) NOT NULL,
  `asalSekolah` varchar(50) NOT NULL,
  `ijazah` text,
  `kk` text,
  `usernameU` varchar(5) NOT NULL,
  `passwordU` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `namaLengkap`, `nik`, `ttl`, `umur`, `alamat`, `namaBapak`, `kerjaBapak`, `tempatBapak`, `gajiBapak`, `namaIbu`, `kerjaIbu`, `tempatIbu`, `gajiIbu`, `asalSekolah`, `ijazah`, `kk`, `usernameU`, `passwordU`) VALUES
(20, 'Putri', '12345678', 'Jakarta 20 Desember', '20', 'Dimana', 'Anton', 'Apa', 'Dimana', '2000', 'Lina', 'Gaktau', 'Wah', '', 'SMP Mana', NULL, NULL, '', ''),
(21, 'Putri', '3175034407990002', 'Jakarta 20 Desember', '20', 'Kebon', 'Anton', 'Apa', 'Dimana', '2000', 'Lina', 'Gaktau', 'Wah', '', 'SMP Mana', 'adidas2.jpg', 'adidas2.jpg', '', ''),
(22, 'Putri3', '3175034407990002', 'Jakarta 20 Desember', '20', 'Mana Aja', 'Anton', 'Apa', 'Dimana', '2000', 'Lina', 'Gaktau', 'Wah', '', 'SMP Mana', 'adidas3.jpg', 'adidas3.jpg', '', ''),
(23, 'Febi Andria Putra', '317544449990003', 'Bogor, 12 Februari 1999', '21', 'Bogor deh pokoknya', 'Budi Hartono', 'Owner BCA', 'BCA', '10000000', 'Pevita Pearce', 'Aktris', 'Tempat Syuting', '', 'SMP Negeri 19', 'gambar1.jpg', 'gambar1.jpg', 'Zj326', 'VijfG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
