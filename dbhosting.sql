-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Des 2021 pada 04.14
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbhosting`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_paket`
--

CREATE TABLE `tbl_paket` (
  `id` bigint(20) NOT NULL,
  `paket_name` varchar(128) NOT NULL,
  `normal_price` int(11) NOT NULL,
  `promo_price` int(11) NOT NULL,
  `user_data` varchar(128) NOT NULL,
  `resource` varchar(128) NOT NULL,
  `item_resource` text NOT NULL,
  `sales_status` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_paket`
--

INSERT INTO `tbl_paket` (`id`, `paket_name`, `normal_price`, `promo_price`, `user_data`, `resource`, `item_resource`, `sales_status`) VALUES
(1, 'Bayi', 19900, 14900, '938', '0.5X RESOURCE POWER', '', '0'),
(2, 'Pelajar', 46900, 23450, '4168', '1X RESOURCE POWER', '', '0'),
(3, 'Personal', 58900, 38900, '10017', '2X RESOURCE POWER', '', '1'),
(4, 'Bisnis', 109900, 65900, '3552', '3X RESOURCE POWER', '', '0');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_paket`
--
ALTER TABLE `tbl_paket`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_paket`
--
ALTER TABLE `tbl_paket`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
