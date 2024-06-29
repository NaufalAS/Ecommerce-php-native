-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Des 2022 pada 17.35
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_barang`
--

CREATE TABLE `data_barang` (
  `id` int(50) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `kode_barang` varchar(30) NOT NULL,
  `nama_brg` varchar(50) NOT NULL,
  `desk` varchar(200) NOT NULL,
  `harga` int(50) NOT NULL,
  `stock` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_barang`
--

INSERT INTO `data_barang` (`id`, `foto`, `kode_barang`, `nama_brg`, `desk`, `harga`, `stock`) VALUES
(1, 'foto_peminjam/doraemon1.png', 'A1231', 'Keyboard mechanincal Accha', 'Kualitas no 4 di indonesia', 250000, 16),
(2, 'foto_peminjam/doraemon1.png', 'A1232', 'Mouse mechanincal Doraemon', 'mouse gaming terbaik dunia', 150000, 19),
(4, 'foto_peminjam/C:xampp	mpphp3B21.tmp', 'A1234', 'Keyboard mechanincal Accha', 'Kualitas no 3 di indonesia', 250000, 22),
(5, 'foto_peminjam/bp.jpg', 'A1235', 'Keyboard mechanincal Accha', 'Kualitas no 1di indonesia', 250000, 22),
(7, 'foto_peminjam/Screenshot (3).png', 'A1237', 'Keyboard mechanincal Accha', 'Kualitas no 1di indonesia', 250000, 22);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_out`
--

CREATE TABLE `tb_out` (
  `id` int(50) NOT NULL,
  `nama_org` varchar(50) NOT NULL,
  `Nohp` int(100) NOT NULL,
  `Alamat` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `qty` int(20) NOT NULL,
  `total` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_out`
--

INSERT INTO `tb_out` (`id`, `nama_org`, `Nohp`, `Alamat`, `nama`, `qty`, `total`) VALUES
(1, 'naufal', 895213423, 'Jl sumarno no 20 Semarang', 'Keyboard mechanincal Accha', 2, 500000),
(2, 'naufal', 895213423, 'Jl sumarno no 20 Semarang', 'Keyboard mechanincal Accha', 2, 500000),
(3, 'naufal', 895213423, 'Jl sumarno no 20 Semarang', 'Mouse mechanincal Doraemon', 3, 450000),
(4, 'naufal', 89656474, 'jl. subroto no 20', 'Keyboard mechanincal Accha', 2, 500000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama_user` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama_user`, `password`, `username`) VALUES
(1, 'naufal', 'naufal123', 'user'),
(2, 'patoni', 'admin123', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_barang`
--
ALTER TABLE `data_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_out`
--
ALTER TABLE `tb_out`
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
-- AUTO_INCREMENT untuk tabel `data_barang`
--
ALTER TABLE `data_barang`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_out`
--
ALTER TABLE `tb_out`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
