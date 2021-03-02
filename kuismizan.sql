-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2021 at 07:23 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kuismizan`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `soal` varchar(255) NOT NULL,
  `opsi_1` varchar(255) NOT NULL,
  `opsi_2` varchar(255) NOT NULL,
  `opsi_3` varchar(255) NOT NULL,
  `jawaban` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `soal`, `opsi_1`, `opsi_2`, `opsi_3`, `jawaban`) VALUES
(1, 'Berasal darimana kah kota kelahiran Mama Gina?', 'Bandung', 'Jakarta', 'Bogor', 'Bandung'),
(2, 'Siapakah dari ketiga anak Mama Gina dan Appa Jay yang dilahirkan di Korea?', 'Suji', 'Yunji', 'Jio', 'Suji'),
(3, 'Dimanakah tempat pertama kali Appa Jay dan Mama Gina bertemu?', 'Korea', 'China', 'Indonesia', 'China'),
(4, 'Berapa lama mama Gina kursus bahasa korea?', '3 Bulan', '4 Bulan', '5 Bulan', '3 Bulan'),
(5, 'Di kota manakah Keluarga Kimbab Family tinggal di Korea?', 'Jeju', 'Seoul', 'Busan', 'Seoul'),
(6, 'Dari three miniyeons, mana yang paling jago nge-dance?', 'Suji', 'Yunji', 'Jio', 'Yunji'),
(7, 'Siapa yang paling suka makan cireng? ', 'Suji', 'Yunji', 'Jio', 'Suji'),
(8, 'Tanggal berapakah ulang tahun Suji? ', '10 Februari', '9 Februari', '8 Februari', '8 Februari'),
(9, 'Siapa Nama lengkap dari mama Gina?', 'Gina Silvina', 'Gina Silviena', 'Gina Selvina', 'Gina Selvina'),
(10, 'Apa nama panggilan untuk subscribers Kimbab Family?', 'Keluarga Kimbab', 'Keluarga Online', 'Keluarga Bahagia', 'Keluarga Online'),
(11, 'Berapa umur Jio saat ini dalam kalender Internasional?', '4 Tahun', '5 Tahun', '6 Tahun', '4 Tahun'),
(12, 'Berapa umur Suji saat ini?', '7 Tahun', '8 Tahun', '9 Tahun', '8 Tahun'),
(13, 'Kapan PO Kimbab Family akan dimulai?', '23 Februari', '24 Februari', '25 Februari', '23 Februari'),
(14, 'Apa judul lengkap buku Kimbab Family? ', 'Kimbab Family: Kisah Drama Korea', 'Kimbab Family: Kisah Seru Drama Korea', 'Kimbab Family: (Bukan) Kisah Drama Korea', 'Kimbab Family: (Bukan) Kisah Drama Korea'),
(15, 'Apa nama penerbit yang menerbitkan buku Kimbab Family?', 'Penerbita Qanita', 'Bentang Pustaka', 'Mizan Pustaka', 'Mizan Pustaka');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `code` varchar(13) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`email`, `password`, `nama`, `no_hp`, `start`, `end`, `question`, `answer`, `code`, `status`) VALUES
('admin@gmail.com', '123456789', 'Dimas Putra Pamungkas', '081224377189', '2021-02-17 19:16:23', '2021-02-17 19:16:52', '11,14,12,5,1,7,13,3,2,4,10,8,9,15,6', 'a,c,a,b,a,b,b,a,a,a,a,a,a,a,a', 'OGTRb1H4PLMp', '3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
