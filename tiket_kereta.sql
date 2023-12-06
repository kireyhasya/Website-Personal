-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 01 Des 2023 pada 12.42
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tiket_kereta`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan_tiket_kereta`
--

CREATE TABLE `pemesanan_tiket_kereta` (
  `id` int(11) NOT NULL,
  `nama_kereta` varchar(255) DEFAULT NULL,
  `harga_kereta` int(11) DEFAULT NULL,
  `kelas` varchar(50) DEFAULT NULL,
  `nama_penumpang` varchar(255) DEFAULT NULL,
  `umur` int(11) DEFAULT NULL,
  `jenis_kelamin` varchar(20) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `jumlah_tiket` int(11) DEFAULT NULL,
  `total_harga` int(11) DEFAULT NULL,
  `waktu_pemesanan` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pemesanan_tiket_kereta`
--

INSERT INTO `pemesanan_tiket_kereta` (`id`, `nama_kereta`, `harga_kereta`, `kelas`, `nama_penumpang`, `umur`, `jenis_kelamin`, `alamat`, `jumlah_tiket`, `total_harga`, `waktu_pemesanan`) VALUES
(1, 'Argo Bromo Anggrek', 150000, 'bisnis', 'test', 12, 'Laki-laki', 'bali', 7, 1050000, '2023-12-01 11:22:00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pemesanan_tiket_kereta`
--
ALTER TABLE `pemesanan_tiket_kereta`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pemesanan_tiket_kereta`
--
ALTER TABLE `pemesanan_tiket_kereta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
