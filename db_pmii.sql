-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Okt 2021 pada 18.14
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pmii`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `adminn`
--

CREATE TABLE `adminn` (
  `id` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `adminn`
--

INSERT INTO `adminn` (`id`, `nama`, `username`, `password`) VALUES
(1, 'PMII UNIVERSITAS NASIONAL', 'admin', 'sahabatsahabati'),
(2, 'No Name', 'admin1', 'admin1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `log1`
--

CREATE TABLE `log1` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `ttl` date NOT NULL,
  `jkel` varchar(255) NOT NULL,
  `hp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `instansi` varchar(255) NOT NULL,
  `ortu` varchar(255) NOT NULL,
  `noortu` varchar(255) NOT NULL,
  `alortu` varchar(255) NOT NULL,
  `orga` varchar(255) NOT NULL,
  `minat` varchar(255) NOT NULL,
  `pengalaman` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `log1`
--

INSERT INTO `log1` (`id`, `nama`, `lokasi`, `ttl`, `jkel`, `hp`, `email`, `instansi`, `ortu`, `noortu`, `alortu`, `orga`, `minat`, `pengalaman`) VALUES
(1, 'Farhan Rizky Ramadhan', 'Jakarta', '1998-01-12', 'Laki-Laki', '081536090329', 'farhanrizkyramadhan99@gmail.com', 'Universitas Nasional', 'Susanti Widiastuti', '081536090322', 'Grogl Depok', 'xxxx', 'xxxx', 'xxxx');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pmii`
--

CREATE TABLE `pmii` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `gmail` varchar(255) NOT NULL,
  `saran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pmii`
--

INSERT INTO `pmii` (`id`, `nama`, `gmail`, `saran`) VALUES
(1, 'Farhan Rizky Ramadhan', 'farhanrizkyramadhan99@gmail.com', 'Test');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `adminn`
--
ALTER TABLE `adminn`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `log1`
--
ALTER TABLE `log1`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pmii`
--
ALTER TABLE `pmii`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `adminn`
--
ALTER TABLE `adminn`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `log1`
--
ALTER TABLE `log1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pmii`
--
ALTER TABLE `pmii`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
