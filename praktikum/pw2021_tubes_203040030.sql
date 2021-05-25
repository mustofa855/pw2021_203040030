-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Bulan Mei 2021 pada 15.10
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
-- Database: `pw2021_tubes_203040030`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kendaraan`
--

CREATE TABLE `kendaraan` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tahun_dibuat` date NOT NULL,
  `tipe_transmisi` varchar(255) NOT NULL,
  `tipe_mesin` varchar(255) NOT NULL,
  `cc` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kendaraan`
--

INSERT INTO `kendaraan` (`id`, `img`, `nama`, `tahun_dibuat`, `tipe_transmisi`, `tipe_mesin`, `cc`, `harga`) VALUES
(1, 'cbr.jpg', 'Honda CBR 150 R', '2021-01-20', '', '4-Langkah, DOHC 1 Silinder', '149,16 cc', 'Rp 35.120.000'),
(2, 'cbr25.jpg', 'CBR 250RR', '2020-06-17', 'Manual, 6 kecepatan', '4-langkah, DOHC 2 silinder', '249,7 cc', 'Rp 66.200.000'),
(3, 'cb.png', 'Honda CB 150R', '2020-09-15', 'Manual, 6 Kecepatan', '4-langkah, DOHC 1 Silinder', '149,16 cc', 'Rp 27.481.000'),
(4, 'crf.jpg', 'Honda CRF 150 L', '2021-02-12', 'Manual, 5 Kecepatan', '4-Langkah, SOHC Satu Silinder', '149,15 cc', 'Rp 35.760.000'),
(5, 'sonic.png', 'Honda Sonic 150R', '2021-01-15', 'Manual, 6 Kecepatan', '4-Langkah, DOHC, 4 katup', '149,16 cc', 'Rp 24.240.000'),
(6, 'adv.png', 'Honda ADV 150', '2021-01-10', 'Otomatis, V-Matic', '4-Langkah, SOHC, eSP, Idling Stop System', '149,9', 'Rp 35.348.000'),
(7, 'beat.jpg', 'Honda Beat Street', '2021-01-01', 'Otomatis, V-Matic', '4-Langkah, SOHC, eSP', '109,5 cc', 'Rp 17.870.000'),
(8, 'genio.jpg', 'Honda Genio', '2021-01-15', 'Otomatis, V-Matic', '4-Langkah, DOHC, eSP', '109,9 cc', 'Rp 18.500.000'),
(9, 'pcx.jpeg', 'Honda PCX 150', '2021-02-08', 'Otomatis, V-Matic', '4-Langkah,4-Valve,eSP+', '156,9 cc', 'Rp 32.842.000'),
(10, 'supra.png', 'Honda Supra X 125 FI', '2021-03-28', '4-Speed, Rotary', '4-Langkah, SOHC, Silinder Tunggal', '124,89 cc', 'Rp 18.700.000'),
(14, 'r15.jpg', 'Yamaha R15', '2019-12-17', 'Manual, 6 Kecepatan', '4-Langkah SOHC 1 Silinder', '155 cc', 'Rp 37.280.000'),
(15, 'r25.jpg', 'Yamaha r25', '2021-02-15', 'Manual, 6 Kecepatan ', '4-Langkah SOHC', '255 CC', 'Rp 68.300.000'),
(16, 'mioz.png', 'Yamaha Mio Z', '2019-10-14', 'Otomatis, V-matic', '3-Langkah SOHC, BLUE CORE', '125 CC', 'Rp 15.800.000'),
(17, 'nmax.jpeg', 'Yamaha All New NMax', '2021-04-20', 'Otomatis, v-Matic', '4-Langkah SOHC, BLUE CORE', '155 CC', 'Rp 31.800.000'),
(18, 'jupiter.jpg', 'Yamaha Jupiter MX King', '2021-03-28', 'Manual, 5 Kecepatan', '4-Langkah SOHC, BLUE CORE', '150 CC', 'Rp 24.580.000'),
(19, 'gsx.png', 'Suzuki GSX R150', '2021-01-09', 'Manual, 6 Kecepatan', '4-Langkah, DOHC 1 Silinder', '147,3 CC', 'Rp 29.500.000'),
(20, 'addres.png', 'Suzuki Address', '2021-05-10', 'Otomatis, V-Matic', '4-Langkah SOHC', '113 CC', 'Rp 17.800.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `nrp` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `gambar`, `nrp`, `nama`, `email`, `jurusan`) VALUES
(1, 'mus.jpg', '192021', 'Mustofa', 'mustofa@gmail.com', 'Teknik Informatika'),
(2, 'jerome.jpg', '192022', 'Jerome', 'jerome@yahoo.com', 'Teknik Pangan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', '12345'),
(2, 'mustofa', '$2y$10$ujwfA9dF5PeWPQzlbc.7W.EE67I.DatpvZK1bd5cdHSsZQAL0J.ai'),
(3, 'tofa', '$2y$10$Dz96zyRBDZuYqjSBZShu/eMQmIqTJri5atZEXE8diGCHovZG8y2VO');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kendaraan`
--
ALTER TABLE `kendaraan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
