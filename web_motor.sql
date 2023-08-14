-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Agu 2023 pada 19.24
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
-- Database: `web_motor`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak`
--

CREATE TABLE `kontak` (
  `id` varchar(12) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `notelpon` varchar(18) NOT NULL,
  `email` varchar(20) NOT NULL,
  `fax` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`user_name`, `password`) VALUES
('Admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `settings`
--

CREATE TABLE `settings` (
  `id` varchar(12) NOT NULL,
  `title` varchar(50) NOT NULL,
  `club_name` varchar(50) NOT NULL,
  `katPengantar_s` varchar(200) NOT NULL,
  `katPengantar_c` text NOT NULL,
  `about_s` varchar(200) NOT NULL,
  `about_c` text NOT NULL,
  `visiMisi_v` text NOT NULL,
  `visiMisi_m` text NOT NULL,
  `profile_c` text NOT NULL,
  `produk_c` text NOT NULL,
  `event_c` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `settings`
--

INSERT INTO `settings` (`id`, `title`, `club_name`, `katPengantar_s`, `katPengantar_c`, `about_s`, `about_c`, `visiMisi_v`, `visiMisi_m`, `profile_c`, `produk_c`, `event_c`) VALUES
('K1', 'Rider Monkey', 'Rider Monkey', '\"Lorem ipsum dolor sit amet consectetur adipisicing elit.\"', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae dolor iste repellendus quaerat ipsum labore aspernatur aliquam! Perferendis consectetur officiis, sapiente laboriosam soluta voluptate rerum possimus ducimus exercitationem quia ut.', '\"Lorem ipsum dolor sit amet consectetur adipisicing elit.\"', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae dolor iste repellendus quaerat ipsum labore aspernatur aliquam! Perferendis consectetur officiis, sapiente laboriosam soluta voluptate rerum possimus ducimus exercitationem quia ut.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae dolor iste repellendus quaerat ipsum labore aspernatur aliquam! Perferendis consectetur officiis, sapiente laboriosam soluta voluptate rerum possimus ducimus exercitationem quia ut.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae dolor iste repellendus quaerat ipsum labore aspernatur aliquam! Perferendis consectetur officiis, sapiente laboriosam soluta voluptate rerum possimus ducimus exercitationem quia ut.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae dolor iste repellendus quaerat ipsum labore aspernatur aliquam! Perferendis consectetur officiis, sapiente laboriosam soluta voluptate rerum possimus ducimus exercitationem quia ut.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae dolor iste repellendus quaerat ipsum labore aspernatur aliquam! Perferendis consectetur officiis, sapiente laboriosam soluta voluptate rerum possimus ducimus exercitationem quia ut.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae dolor iste repellendus quaerat ipsum labore aspernatur aliquam! Perferendis consectetur officiis, sapiente laboriosam soluta voluptate rerum possimus ducimus exercitationem quia ut.');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`user_name`);

--
-- Indeks untuk tabel `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
