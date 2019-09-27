-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Sep 2019 pada 08.58
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `erp_smesco`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `alamat` text NOT NULL,
  `no_telepon` varchar(12) NOT NULL,
  `user_level_id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `alamat`, `no_telepon`, `user_level_id`, `username`, `email`, `password`) VALUES
(1, 'super admin', 'bandung', '08080808', 1, 'sadmin', 'superadmin@mail.com', '17c4520f6cfd1ab53d8745e84681eb49'),
(2, 'admin_marketing', 'bandung', '08080808', 2, 'admin_marketing', 'admin@marketing.com', 'c769c2bd15500dd906102d9be97fdceb'),
(3, 'admin_bisnis', 'bandung', '08080808', 3, 'admin_bisnis', 'admin@bisnis.com', '2e4d5d0711261485abe3b1c4e4bbd05d'),
(4, 'Admin_keuangan', 'bandung', '08080808', 4, 'admin_keuangan', 'admin@keuangan.com', 'a4151d4b2856ec63368a7c784b1f0a6e'),
(5, 'User Marketing', 'Bandung', '08080808', 5, 'user_marketing', 'user@marketing.com', 'c769c2bd15500dd906102d9be97fdceb'),
(6, 'User Bisnis', 'Bandung', '08080808', 6, 'user_bisnis', 'user@bisnis.com', '2e4d5d0711261485abe3b1c4e4bbd05d'),
(7, 'User Keuangan', 'Bandung', '08080808', 7, 'user_keuangan', 'user@keuangan.com', 'a4151d4b2856ec63368a7c784b1f0a6e');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_level`
--

CREATE TABLE `user_level` (
  `id` int(11) NOT NULL,
  `user_level` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_level`
--

INSERT INTO `user_level` (`id`, `user_level`) VALUES
(1, 'super admin'),
(2, 'admin_marketing'),
(3, 'admin_bisnis'),
(4, 'admin_keuangan'),
(5, 'user_marketing'),
(6, 'user_bisnis'),
(7, 'user_keuangan');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_level_id` (`user_level_id`);

--
-- Indeks untuk tabel `user_level`
--
ALTER TABLE `user_level`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `user_level`
--
ALTER TABLE `user_level`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`user_level_id`) REFERENCES `user_level` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
