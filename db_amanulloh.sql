-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Apr 2022 pada 08.33
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
-- Database: `db_amanulloh`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_099`
--

CREATE TABLE `tbl_099` (
  `id_099` int(11) NOT NULL,
  `nama_099` varchar(13) DEFAULT NULL,
  `email_099` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_099`
--

INSERT INTO `tbl_099` (`id_099`, `nama_099`, `email_099`) VALUES
(1, 'ali', 'ali@gmail.com'),
(2, 'hasan 11', 'hasan@gmail.com 11'),
(6, 'Amanulloh 12', 'amanulloh@gmail.com ');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_099`
--
ALTER TABLE `tbl_099`
  ADD PRIMARY KEY (`id_099`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_099`
--
ALTER TABLE `tbl_099`
  MODIFY `id_099` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
