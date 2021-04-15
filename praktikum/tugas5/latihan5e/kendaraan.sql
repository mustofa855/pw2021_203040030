-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Apr 2021 pada 17.07
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_tubes_203040030`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kendaraan`
--

CREATE TABLE `kendaraan` (
  `id` int(11) NOT NULL,
  `img` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tahun_dibuat` date NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kendaraan`
--

INSERT INTO `kendaraan` (`id`, `img`, `nama`, `tahun_dibuat`, `harga`) VALUES
(1, 'crf.jpg', 'Honda CRF150L', '2020-03-26', 2070),
(2, 'cbr.jpg', 'Honda CBR 150R', '2021-01-20', 2449),
(3, 'beat.jpg', 'Honda Beat Street', '2021-01-15', 1173),
(4, 'genio.jpg', 'Honda Genio', '2020-03-19', 1309),
(5, 'adv.png', 'Honda ADV 150', '2020-09-15', 2070),
(6, 'cb.png', 'Honda CB150R', '2020-06-17', 1976),
(7, 'cbr25.jpg', 'Honda CBR250RR', '2021-01-21', 4657),
(8, 'supra.png', 'Honda Supra X 125 FI', '2018-07-10', 1264),
(9, 'sonic.png', 'Honda Sonic 150R', '2019-09-08', 1976),
(10, 'pcx.jpeg', 'Honda PCX eHEV', '2020-03-18', 3147);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kendaraan`
--
ALTER TABLE `kendaraan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
