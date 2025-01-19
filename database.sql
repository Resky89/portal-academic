-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Jan 2025 pada 09.13
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ipat09_tgs`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_kuliah`
--

CREATE TABLE `jadwal_kuliah` (
  `id_jadwal` int(11) NOT NULL,
  `kd_matkul` varchar(10) NOT NULL,
  `waktu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `jadwal_kuliah`
--

INSERT INTO `jadwal_kuliah` (`id_jadwal`, `kd_matkul`, `waktu`) VALUES
(8, 'MK001', '14.00-16.00'),
(9, 'MK002', '09.00-12.00'),
(11, 'MK003', '09.00-12.00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `matkul`
--

CREATE TABLE `matkul` (
  `kd_matkul` varchar(10) NOT NULL,
  `matkul` varchar(50) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `kelas` varchar(1) NOT NULL,
  `dosen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `matkul`
--

INSERT INTO `matkul` (`kd_matkul`, `matkul`, `prodi`, `kelas`, `dosen`) VALUES
('MK001', 'English 1', 'TI', 'A', 'Nurhayati, SE'),
('MK002', 'Software Modeling and Analyst', 'SI', 'C', 'Irmayansyah, S.Kom., M.Kom.'),
('MK003', 'Kalkulus', 'TI', 'A', 'Evi Julianti, S.E');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '0001_01_01_000000_create_users_table', 1),
(5, '0001_01_01_000001_create_cache_table', 1),
(6, '0001_01_01_000002_create_jobs_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai_mhs`
--

CREATE TABLE `nilai_mhs` (
  `id_nilai` int(11) NOT NULL,
  `nama_mhs` varchar(50) NOT NULL,
  `kd_matkul` varchar(10) NOT NULL,
  `uts` int(11) NOT NULL,
  `uas` int(11) NOT NULL,
  `kehadiran` int(11) NOT NULL,
  `keaktifan` int(11) NOT NULL,
  `tugas` int(11) NOT NULL,
  `sks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `nilai_mhs`
--

INSERT INTO `nilai_mhs` (`id_nilai`, `nama_mhs`, `kd_matkul`, `uts`, `uas`, `kehadiran`, `keaktifan`, `tugas`, `sks`) VALUES
(6, 'Aira Harune', 'MK002', 50, 80, 77, 90, 98, 3),
(8, 'Rizumu Amamiya', 'MK002', 80, 80, 70, 80, 90, 3),
(9, 'Mion Takamine', 'MK001', 77, 89, 75, 77, 80, 3),
(10, 'Fauzan', 'MK001', 88, 89, 77, 90, 90, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('tvqclIxjJaF0ZOrfchjPGnkPEUyMQbYE7YT9n4nT', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36 Edg/131.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiRDZIWWdXMlU0NjFLcmd0WXVMbGE5bmExMUM3QlhYNE1sY2ZwYUNVQiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9kYXNoYm9hcmQiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1737274309),
('ZVLnSM9xXBKaKDf5rKfZlwMAgutZc7qTAPSppcR0', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36 Edg/131.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZ014Mlc0V01TckJsYjBiSkZSR1VEWk5yTWVSREplY1hEaXRLaWlCciI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1737269551);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL DEFAULT 'mahasiswa',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Grant Gustin', 'grantgustin1248@gmail.com', NULL, '$2y$12$W4iNsi0Ftxzg/iAqKrPxyenJiaMgqMO3J5ryTTs35TayDWe4CZ1vK', 'admin', NULL, '2025-01-18 23:54:41', '2025-01-19 01:03:05'),
(2, 'Sonata Kanzaki', 'sonata@gmail.com', NULL, '$2y$12$.21qjrkS2lTf8m06nt32suXUe5qikgNZWq2gUz8wVfJ.F4NQd3LHG', 'dosen', NULL, NULL, NULL),
(3, 'Muhammad Resky Prabowo Sutejo', 'mhs@gmail.com', NULL, '$2y$12$9gIS3tqwOgl7ooRJHueMw.rh.VHvMAYcsFBUJxEC9nQseu1W9Lb2.', 'mahasiswa', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `view_jadwal`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `view_jadwal` (
`matkul` varchar(50)
,`dosen` varchar(50)
,`prodi` varchar(50)
,`kelas` varchar(1)
,`waktu` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `view_nilai`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `view_nilai` (
`nama_mhs` varchar(50)
,`matkul` varchar(50)
,`uts` int(11)
,`uas` int(11)
,`kehadiran` int(11)
,`keaktifan` int(11)
,`tugas` int(11)
,`sks` int(11)
,`na` decimal(17,2)
,`hm` varchar(1)
);

-- --------------------------------------------------------

--
-- Struktur untuk view `view_jadwal`
--
DROP TABLE IF EXISTS `view_jadwal`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_jadwal`  AS SELECT `a`.`matkul` AS `matkul`, `a`.`dosen` AS `dosen`, `a`.`prodi` AS `prodi`, `a`.`kelas` AS `kelas`, `b`.`waktu` AS `waktu` FROM (`matkul` `a` join `jadwal_kuliah` `b`) WHERE `a`.`kd_matkul` = `b`.`kd_matkul` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `view_nilai`
--
DROP TABLE IF EXISTS `view_nilai`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_nilai`  AS SELECT `a`.`nama_mhs` AS `nama_mhs`, `b`.`matkul` AS `matkul`, `a`.`uts` AS `uts`, `a`.`uas` AS `uas`, `a`.`kehadiran` AS `kehadiran`, `a`.`keaktifan` AS `keaktifan`, `a`.`tugas` AS `tugas`, `a`.`sks` AS `sks`, `a`.`uts`* 0.20 + `a`.`uas` * 0.25 + `a`.`kehadiran` * 0.20 + `a`.`keaktifan` * 0.10 + `a`.`tugas` * 0.25 AS `na`, CASE WHEN `a`.`uts` * 0.20 + `a`.`uas` * 0.25 + `a`.`kehadiran` * 0.20 + `a`.`keaktifan` * 0.10 + `a`.`tugas` * 0.25 >= 80 THEN 'A' WHEN `a`.`uts` * 0.20 + `a`.`uas` * 0.25 + `a`.`kehadiran` * 0.20 + `a`.`keaktifan` * 0.10 + `a`.`tugas` * 0.25 >= 69 THEN 'B' WHEN `a`.`uts` * 0.20 + `a`.`uas` * 0.25 + `a`.`kehadiran` * 0.20 + `a`.`keaktifan` * 0.10 + `a`.`tugas` * 0.25 >= 56 THEN 'C' WHEN `a`.`uts` * 0.20 + `a`.`uas` * 0.25 + `a`.`kehadiran` * 0.20 + `a`.`keaktifan` * 0.10 + `a`.`tugas` * 0.25 >= 45 THEN 'D' ELSE 'E' END AS `hm` FROM (`nilai_mhs` `a` join `matkul` `b` on(`a`.`kd_matkul` = `b`.`kd_matkul`)) ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `jadwal_kuliah`
--
ALTER TABLE `jadwal_kuliah`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `kd_matkul` (`kd_matkul`) USING BTREE;

--
-- Indeks untuk tabel `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indeks untuk tabel `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `matkul`
--
ALTER TABLE `matkul`
  ADD PRIMARY KEY (`kd_matkul`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `nilai_mhs`
--
ALTER TABLE `nilai_mhs`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `kd_matkul` (`kd_matkul`) USING BTREE;

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT untuk tabel `jadwal_kuliah`
--
ALTER TABLE `jadwal_kuliah`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `nilai_mhs`
--
ALTER TABLE `nilai_mhs`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `jadwal_kuliah`
--
ALTER TABLE `jadwal_kuliah`
  ADD CONSTRAINT `jadwal_kuliah_ibfk_1` FOREIGN KEY (`kd_matkul`) REFERENCES `matkul` (`kd_matkul`);

--
-- Ketidakleluasaan untuk tabel `nilai_mhs`
--
ALTER TABLE `nilai_mhs`
  ADD CONSTRAINT `nilai_mhs_ibfk_1` FOREIGN KEY (`kd_matkul`) REFERENCES `matkul` (`kd_matkul`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
