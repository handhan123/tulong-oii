-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Des 2019 pada 16.11
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
-- Database: `grimes`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `gambar`
--

CREATE TABLE `gambar` (
  `id` int(10) UNSIGNED NOT NULL,
  `file` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `no` int(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `homestay`
--

CREATE TABLE `homestay` (
  `homestay_id` int(250) NOT NULL,
  `homestay_nama` varchar(50) NOT NULL,
  `homestay_alamat` text NOT NULL,
  `homestay_kota` varchar(50) NOT NULL,
  `homestay_pemilik` varchar(50) NOT NULL,
  `homestay_jumlah_kamar` int(50) NOT NULL,
  `homestay_harga_tertinggi` int(255) NOT NULL,
  `homestay_harga_terendah` int(255) NOT NULL,
  `homestay_telepon` varchar(14) NOT NULL,
  `homestay_foto` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `homestay`
--

INSERT INTO `homestay` (`homestay_id`, `homestay_nama`, `homestay_alamat`, `homestay_kota`, `homestay_pemilik`, `homestay_jumlah_kamar`, `homestay_harga_tertinggi`, `homestay_harga_terendah`, `homestay_telepon`, `homestay_foto`) VALUES
(1, 'OAOE Homestay', 'Jl. Kebon Agung no. 53', 'Sleman', 'Pakdhe Wo', 50, 300000, 100000, '0876889545', 'BMW r100 Custom.jpg'),
(15, 'Tempel Homestay', 'jl. kebenaran,Wonogendeng,ngaglik', 'Kulon Progo', 'Farhan', 1, 1, 2, '0876543212', 'q.jpg'),
(16, 'Tempel Homestay', 'jl. kebenaran,Wonogendeng,ngaglik', 'Yogyakarta', 'Farhan', 3, 3, 3, '0876543212', NULL),
(17, 'Tempel Homestay', 'jl. kebenaran,Wonogendeng,ngaglik', 'Sleman', 'Farhan', 2, 2, 2, '0876543212', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `homestay2`
--

CREATE TABLE `homestay2` (
  `homestay_id` int(250) NOT NULL,
  `homestay_nama` varchar(50) NOT NULL,
  `homestay_alamat` text NOT NULL,
  `homestay_kota` varchar(50) NOT NULL,
  `homestay_pemilik` varchar(50) NOT NULL,
  `homestay_jumlah_kamar` int(50) NOT NULL,
  `homestay_harga_tertinggi` int(255) NOT NULL,
  `homestay_harga_terendah` int(255) NOT NULL,
  `homestay_telepon` varchar(14) NOT NULL,
  `homestay_foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `is_admin`) VALUES
(1, 'fadil', 'Xcution64@nasa.gov', NULL, '$2y$10$7QIk617qwSXfJwV4RYMjT.Wvnhx9xp9V/ZgSqWDjMR0Ym6TZQPHoG', NULL, '2019-12-04 09:26:25', '2019-12-04 09:26:25', NULL),
(2, 'farhan ramadhan', 'farhan@gmail.com', NULL, '$2y$10$GJRpDWkPN/ZVRkSvstCHYeDix75MwbmAspazJh6MTEYBrDFViVY6e', NULL, '2019-12-05 04:33:28', '2019-12-05 04:33:28', 1),
(3, 'coba coba', 'dias@gmail.com', NULL, '$2y$10$ntmgNCz.Ygwze6DjeBq9TuDgojrUN01jRq1YJ0Dv6C4smDmHAnM.u', NULL, '2019-12-05 05:35:51', '2019-12-05 05:35:51', NULL),
(4, 'oke', '18523104@students.uii.ac.id', NULL, '$2y$10$wBl36sksta7w07UW/dxyi.YJ2QM9b5dFNUrJk6SuMqK15RLbl2VoK', NULL, '2019-12-11 19:23:54', '2019-12-11 19:23:54', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `homestay`
--
ALTER TABLE `homestay`
  ADD PRIMARY KEY (`homestay_id`);

--
-- Indeks untuk tabel `homestay2`
--
ALTER TABLE `homestay2`
  ADD PRIMARY KEY (`homestay_id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `homestay`
--
ALTER TABLE `homestay`
  MODIFY `homestay_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `homestay2`
--
ALTER TABLE `homestay2`
  MODIFY `homestay_id` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
