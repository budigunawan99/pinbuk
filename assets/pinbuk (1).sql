-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Feb 2020 pada 07.57
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pinbuk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '9995B60BD637FE51E6F6CC9E2EE0D6202CAD02ADE5F02326A8FA8D819AEA1061');

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_workshop`
--

CREATE TABLE `daftar_workshop` (
  `id_daftar` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_workshop` int(11) NOT NULL,
  `time_register` timestamp NOT NULL DEFAULT current_timestamp(),
  `alamat` varchar(100) NOT NULL,
  `bukti_pembayaran` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `daftar_workshop`
--

INSERT INTO `daftar_workshop` (`id_daftar`, `id_user`, `id_workshop`, `time_register`, `alamat`, `bukti_pembayaran`, `status`) VALUES
(11, 32, 2, '2020-02-06 17:39:58', 'peunayong', '603a2755fc89719938a744e4395d767d.jpg', 0),
(12, 32, 1, '2020-02-10 08:52:06', 'prapt', '5321e1d5b5399ba1f51b9a10e44d2a8d.png', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `code` varchar(60) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `password`, `email`, `code`, `active`) VALUES
(32, 'Budi Gunawan', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'gunawanbudi930@gmail.com', 'SaPgu6m7CXkW', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `workshop`
--

CREATE TABLE `workshop` (
  `id_workshop` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `date_mulai` date NOT NULL,
  `date_selesai` date NOT NULL,
  `jam_mulai` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `workshop`
--

INSERT INTO `workshop` (`id_workshop`, `nama`, `date_mulai`, `date_selesai`, `jam_mulai`) VALUES
(1, 'Kelas BMT, Koperasi, & LKM', '2020-03-12', '2020-03-14', '08:00:00'),
(2, 'Kelas PINBUK Daerah & Pegiat Pemberdayaan Masyarakat', '2020-02-12', '2020-02-14', '08:00:00'),
(3, 'Kelas CSR, PKBL, & Badan Pemberdayaan Masyarakat', '2020-03-13', '2020-02-13', '08:00:00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `daftar_workshop`
--
ALTER TABLE `daftar_workshop`
  ADD PRIMARY KEY (`id_daftar`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `EMAIL_UNIQUE` (`email`);

--
-- Indeks untuk tabel `workshop`
--
ALTER TABLE `workshop`
  ADD PRIMARY KEY (`id_workshop`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `daftar_workshop`
--
ALTER TABLE `daftar_workshop`
  MODIFY `id_daftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT untuk tabel `workshop`
--
ALTER TABLE `workshop`
  MODIFY `id_workshop` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
