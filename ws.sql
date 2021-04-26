-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Apr 2021 pada 08.33
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ws`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `Id_Pelanggan` int(5) NOT NULL,
  `Nama_Pelanggan` varchar(30) NOT NULL,
  `Alamat` varchar(30) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `No_Telepon` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`Id_Pelanggan`, `Nama_Pelanggan`, `Alamat`, `Email`, `No_Telepon`) VALUES
(1, 'Sri Dewi Utama', 'Singaparna', 'sridewiutama05@gmail', '089647186585'),
(2, 'Irena Kusuma Dewi', 'Paseh', 'irena@gmail.com', '089789000894'),
(7, 'Mayang Jayanti', 'Bandung', 'mayang123@gmail.com', '081234777124'),
(8, 'Charlieta Nova Putri Peditto', 'Cibeureum', 'Charlieta04@gmail.co', '089131765123'),
(9, 'Nova ', 'Singaparna', 'novaarista@gmail.com', '08123477765'),
(10, 'Anggis', 'Ciamis', 'anggis@gmail.com', '08123477765'),
(11, 'Riana Dwi W', 'Yogyakarta', 'riana@gmail.com', '08123677765'),
(12, 'Novi Pazriah', 'Pagerageng', 'novipazriah23@gmail.', '089789000897'),
(25, 'Nuni Purwanti', 'Cianjur', 'nuni@gmail.com', '0897678889');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`Id_Pelanggan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `Id_Pelanggan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
