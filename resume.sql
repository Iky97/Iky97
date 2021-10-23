-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Okt 2021 pada 04.19
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resume`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id` int(3) NOT NULL,
  `judulartikel` varchar(255) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Tabel Resume';

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id`, `judulartikel`, `isi`) VALUES
(1, 'About Me', 'I\'m Rizky Ananda, age 21\r\nYear. I am a\r\n5th semester student of study program\r\ninformatics, I\r\nexperienced as staff\r\nwarehouse and logistics\r\napproximately 3 years, and worked as Admin for 1 year. I\r\nlove to learn things\r\nnew, to add\r\nknowledge and\r\nimprove quality\r\nmy job.'),
(2, 'Education', 'I am currently studying at Pembangunan Jaya University (Semester 5), I am taking the Informatics Study Program. Previously I studied at SMK Negeri 53 Jakarta. Light Vehicle Automotive Engineering Study Program.'),
(3, 'Experience', 'Currently working at PT Solusi Sarana Sehat.\r\nWorking as an Order Management Admin has been running for 1 year until now, previously worked as a Warehouse Staff at PT Solusi Sarana Sehat for 1 year.\r\n\r\nPrior to PT Solusi Sarana Sehat. I Worked at PT Karta Indonesia Global as a Supply Chain Staff for 1 Year 3 Months'),
(5, 'Instagram', 'rananda_07'),
(6, 'Whatsapp', '0896xxxxxxx'),
(7, 'Email', 'Kiki090700@gmail.com'),
(8, 'Linked In', 'Rizky Ananda');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
