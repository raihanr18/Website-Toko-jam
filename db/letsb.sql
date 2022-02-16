-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Jun 2020 pada 02.11
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `letsb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `baru`
--

CREATE TABLE `baru` (
  `id_beli` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `status_beli` enum('diproses','diantar','diterima','') NOT NULL,
  `metode_bayar` varchar(50) NOT NULL,
  `jumlah_beli` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `baru`
--

INSERT INTO `baru` (`id_beli`, `id_user`, `id_produk`, `status_beli`, `metode_bayar`, `jumlah_beli`) VALUES
(13, 56, 5, 'diproses', '', 1),
(14, 56, 5, 'diproses', '', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `chat` text NOT NULL,
  `role` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `diskon`
--

CREATE TABLE `diskon` (
  `id_diskon` int(11) NOT NULL,
  `voucher` varchar(50) NOT NULL,
  `jml_diskon` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `diskon`
--

INSERT INTO `diskon` (`id_diskon`, `voucher`, `jml_diskon`) VALUES
(1, 'KT2234567', 50);

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket`
--

CREATE TABLE `paket` (
  `id_paket` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `kode_bayar` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `paket`
--

INSERT INTO `paket` (`id_paket`, `id_user`, `kode_bayar`) VALUES
(45, 56, 790928408),
(46, 56, 1615799432),
(47, 56, 162176706),
(48, 56, 165537982),
(49, 56, 31901710);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian`
--

CREATE TABLE `pembelian` (
  `id_beli` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_paket` int(11) NOT NULL,
  `total_bayar` bigint(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pembelian`
--

INSERT INTO `pembelian` (`id_beli`, `id_user`, `id_paket`, `total_bayar`) VALUES
(1, 56, 5, 0),
(2, 56, 5, 0),
(3, 56, 5, 0),
(4, 56, 5, 0),
(5, 56, 5, 0),
(6, 56, 6, 0),
(7, 56, 5, 0),
(8, 56, 5, 0),
(9, 56, 6, 0),
(10, 56, 6, 0),
(11, 56, 5, 0),
(12, 56, 6, 0),
(13, 56, 5, 0),
(14, 56, 6, 0),
(15, 56, 6, 0),
(16, 56, 5, 1100000),
(17, 56, 5, 1100000),
(18, 56, 6, 800000),
(19, 56, 6, 1600000),
(20, 56, 6, 800000),
(21, 56, 5, 1100000),
(22, 56, 6, 800000),
(23, 56, 6, 800000),
(24, 56, 6, 800000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(10) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `harga` bigint(15) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(100) NOT NULL,
  `kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga`, `deskripsi`, `foto`, `kategori`) VALUES
(5, 'L\'W  Matte grey', 550000, 'It’s not about timeless anymore, but time less !\r\n\r\nLet\'s Watch Matte Black, is the answer for brothers who are mobile and dynamic in daily life. Elegantly designed yet still versatile for almost every occasion, gives you room to match it with various personal styles. The durability is incontestable due to gold plated steel and high quality leather used for the materials, as our commitment for the quality.\r\n<br>\r\n<br>\r\nL\'W Matte Black for your epic life\r\n\r\n<br>\r\n<br>\r\n<br>\r\nCase Material : High Grade Alloy\r\n<br>\r\nDiameter: 43mm\r\n<br>\r\nMovement : 3 Hands Japan Miyota Movement\r\n<br>\r\nPlating case & buckle : IP Silver Brush & IP Black Brush (Matte) *IP = Tahan luntur, lapisan emas\r\n<br>\r\nCase Color : Brushed Silver\r\n<br>\r\nStrap : Canvas Black,, Leather Backed\r\n<br>\r\nWater resistant 3 ATM atau 30 m, QC passed Warranty 1 year', 'matte.jpg', 'Jam Pria'),
(6, 'L\'W Canvas Brown', 400000, 'It’s not about timeless anymore, but time less !\r\n<br>\r\nL\'W Canvas Brown, is the answer for brothers who are mobile and dynamic in daily life. Elegantly designed yet still versatile for almost every occasion, gives you room to match it with various personal styles. The durability is incontestable due to gold plated steel and high quality leather used for the materials, as our commitment for the quality.\r\n<br>\r\n<br>\r\nL\'W Canvas Brown for your epic life\r\n<br>\r\n<br>\r\n<br>\r\nCase Material : High Grade Alloy\r\n<br>\r\nDiameter: 43mm\r\n<br>\r\nMovement : 3 Hands Japan Miyota Movement\r\n<br>\r\nPlating case & buckle : IP Silver Brush & IP Black Brush (Matte) *IP = Tahan luntur, lapisan emas\r\n<br>\r\nCase Color : Brushed Silver\r\n<br>\r\nStrap : Canvas Navy, Leather Backed\r\n<br>\r\nWater resistant 3 ATM atau 30 m, QC passed Warranty 1 year', 'canvas-brown.jpg', 'Jam Pria');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(60) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `email`, `pass`, `role`) VALUES
(46, 'raihan', 'raihanr8111@gmail.com', '$2y$10$LND1/sXB4T1zzsMYzZYjq.syXJn9j6Dd8R7jhUBqn8m0Z3FiwOu6S', 'admin'),
(47, 'fahmi22', 'fahmiilmawan12@gmail.com', '$2y$10$qtNghd1e7ZuLysTKvu3qc.EgWLhPX7tnWSfB0VnwwR5Z6cY7mFRGu', 'user'),
(48, 'bayu', 'bayuuwu@gmail.com', '$2y$10$UMAav0RVjTxsEZhwJSOaiu1YiAnQRKqd1G0SwM2GIYL9nHi23RLom', 'user'),
(49, 'fachri', 'fachridwi1990@gmail.com', '$2y$10$oll638.1LGPxF0e2FzpQm.oW.605QApoSUB/AslaTZ3PHUt8ItPDO', 'admin'),
(50, 'heru01', 'herupanca100@gmail.com', '$2y$10$U6bE1i0TqH5ab2i5FQVBMeVWXWSmEjmsGQy3KkU9LEv6ZQBjD9jhi', 'user'),
(55, 'raihan44212', 'raihanr8111@gmail.com', '$2y$10$ay6GIxYiOiLic6jb5hCFFOwOB9Jn1QAYyEJm59aMqpnkVOIel6BAy', 'user'),
(56, 'han', 'raihanr@gmail.com', '$2y$10$Lc4nsLYzZW4RCsYWZrLTJuTUWtsKJlEBCxlYau2UVdZ5IWTq61HAm', 'user'),
(62, 'doad', 'raihanr8111@gmail.com', '$2y$10$bplTkuwbVh6EQrLLA6z6.egm7BTTPk7HKq2h8m0e5rl7jjqQU7ZJ2', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `baru`
--
ALTER TABLE `baru`
  ADD PRIMARY KEY (`id_beli`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indeks untuk tabel `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`),
  ADD KEY `username` (`username`);

--
-- Indeks untuk tabel `diskon`
--
ALTER TABLE `diskon`
  ADD PRIMARY KEY (`id_diskon`);

--
-- Indeks untuk tabel `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id_paket`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_beli`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `baru`
--
ALTER TABLE `baru`
  MODIFY `id_beli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `diskon`
--
ALTER TABLE `diskon`
  MODIFY `id_diskon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `paket`
--
ALTER TABLE `paket`
  MODIFY `id_paket` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id_beli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
