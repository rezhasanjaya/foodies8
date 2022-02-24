-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Feb 2022 pada 20.11
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodies`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `username` varchar(32) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(32) NOT NULL,
  `jenis_kelamin` enum('LK','PR') NOT NULL,
  `image` varchar(1000) DEFAULT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`username`, `nama`, `email`, `password`, `jenis_kelamin`, `image`, `date_created`) VALUES
('cobadong', 'Sahudin', 'cobacoba33@gmail.com', '4297f44b13955235245b2497399d7a93', 'LK', 'default.jpg', 1644711470),
('minyak123', 'Minyak', 'cobacoba33@gmail.com', '4297f44b13955235245b2497399d7a93', 'LK', 'default.jpg', 1644719579),
('terpongkeng', 'terpongkeng', 'cobacoba33@gmail.com', '4297f44b13955235245b2497399d7a93', 'PR', 'default.jpg', 1644719641);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis`
--

CREATE TABLE `jenis` (
  `id_jenis` int(11) NOT NULL,
  `nama_jenis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jenis`
--

INSERT INTO `jenis` (`id_jenis`, `nama_jenis`) VALUES
(1, 'Makanan'),
(2, 'Minuman'),
(3, 'Tips');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_tips`
--

CREATE TABLE `kategori_tips` (
  `id_kategori_tips` int(11) NOT NULL,
  `nama_kategori_tips` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori_tips`
--

INSERT INTO `kategori_tips` (`id_kategori_tips`, `nama_kategori_tips`) VALUES
(1, 'Menumis Dan Meracik'),
(2, 'Mengiriskan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `resep`
--

CREATE TABLE `resep` (
  `id_resep` varchar(12) NOT NULL,
  `judul_resep` varchar(100) NOT NULL,
  `penulis_artikel` varchar(100) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `sumber` varchar(100) NOT NULL,
  `media` varchar(100) NOT NULL,
  `isi_resep` text NOT NULL,
  `langkah` text NOT NULL,
  `imgvid` varchar(400) NOT NULL,
  `date_writed` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `resep_minuman`
--

CREATE TABLE `resep_minuman` (
  `id_resep` varchar(12) NOT NULL,
  `judul_resep` varchar(100) NOT NULL,
  `penulis_artikel` varchar(100) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `sumber` varchar(100) NOT NULL,
  `isi_resep` text NOT NULL,
  `langkah` text NOT NULL,
  `file_imgvid` varchar(400) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tips`
--

CREATE TABLE `tips` (
  `id_tips` int(11) NOT NULL,
  `nama_tips` varchar(100) NOT NULL,
  `id_kategori_tips` int(11) NOT NULL,
  `sumber` varchar(100) NOT NULL,
  `media` varchar(100) NOT NULL,
  `penulis_tips` varchar(100) NOT NULL,
  `langkah` text NOT NULL,
  `imgvid` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `kategori_tips`
--
ALTER TABLE `kategori_tips`
  ADD PRIMARY KEY (`id_kategori_tips`);

--
-- Indeks untuk tabel `resep`
--
ALTER TABLE `resep`
  ADD PRIMARY KEY (`id_resep`);

--
-- Indeks untuk tabel `resep_minuman`
--
ALTER TABLE `resep_minuman`
  ADD PRIMARY KEY (`id_resep`);

--
-- Indeks untuk tabel `tips`
--
ALTER TABLE `tips`
  ADD PRIMARY KEY (`id_tips`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12144;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
