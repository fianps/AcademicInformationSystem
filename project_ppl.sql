-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Waktu pembuatan: 23 Nov 2022 pada 16.10
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
-- Database: `project_ppl`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosens`
--

CREATE TABLE `dosens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_wali` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `dosens`
--

INSERT INTO `dosens` (`id`, `nama`, `nip`, `email`, `kode_wali`, `no_hp`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'Bambang Waluyo', '213189032819823', 'bambang@lectures.com', 'A001', NULL, NULL, '2022-10-25 06:33:02', '2022-10-25 06:33:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `i_r_s`
--

CREATE TABLE `i_r_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester` int(11) DEFAULT NULL,
  `sks` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_irs` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `i_r_s`
--

INSERT INTO `i_r_s` (`id`, `email`, `semester`, `sks`, `file_irs`, `created_at`, `updated_at`) VALUES
(1, 'alfian@students.com', 5, '92', 'Tes.pdf', '2022-10-23 08:28:00', '2022-10-31 08:46:44'),
(2, 'alfianps@students.com', NULL, NULL, NULL, '2022-10-25 09:24:37', '2022-10-25 09:24:37'),
(3, 'jodi@students.com', NULL, NULL, NULL, '2022-10-25 09:40:59', '2022-10-25 09:40:59'),
(4, 'tes@students.com', NULL, NULL, NULL, '2022-10-25 09:42:45', '2022-10-25 09:42:45'),
(8, 'doma@students.com', NULL, NULL, NULL, '2022-11-02 10:27:20', '2022-11-02 10:27:20'),
(9, 'dimas@students.com', NULL, NULL, NULL, '2022-11-02 10:32:13', '2022-11-02 10:32:13'),
(10, 'bt@students.com', NULL, NULL, NULL, '2022-11-08 07:00:17', '2022-11-08 07:00:17'),
(11, 'khidir@students.com', NULL, NULL, NULL, '2022-11-15 09:11:56', '2022-11-15 09:11:56'),
(12, 'sumbul@students.com', NULL, NULL, NULL, '2022-11-15 09:11:56', '2022-11-15 09:11:56'),
(13, 'salma@students.com', NULL, NULL, NULL, '2022-11-15 09:11:56', '2022-11-15 09:11:56'),
(14, 'tingkir@students.com', NULL, NULL, NULL, '2022-11-15 09:11:56', '2022-11-15 09:11:56'),
(15, 'ismail@students.com', NULL, NULL, NULL, '2022-11-15 09:11:57', '2022-11-15 09:11:57'),
(16, 'beta@students.com', NULL, NULL, NULL, '2022-11-15 09:11:57', '2022-11-15 09:11:57'),
(17, 'alpha@students.com', NULL, NULL, NULL, '2022-11-15 09:11:57', '2022-11-15 09:11:57'),
(18, 'callo@students.com', NULL, NULL, NULL, '2022-11-15 09:11:57', '2022-11-15 09:11:57'),
(19, 'kepin@students.com', NULL, NULL, NULL, '2022-11-15 09:11:57', '2022-11-15 09:11:57'),
(20, 'ucup@students.com', NULL, NULL, NULL, '2022-11-15 09:11:57', '2022-11-15 09:11:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `k_h_s`
--

CREATE TABLE `k_h_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester` int(11) DEFAULT NULL,
  `sks_smt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sks_total` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ips` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ipk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_khs` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `k_h_s`
--

INSERT INTO `k_h_s` (`id`, `email`, `semester`, `sks_smt`, `sks_total`, `ips`, `ipk`, `file_khs`, `created_at`, `updated_at`) VALUES
(1, 'alfian@students.com', 5, '22', '92', '4', '4', 'KHS.pdf', '2022-10-24 01:23:29', '2022-10-31 08:57:33'),
(2, 'alfianps@students.com', NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-25 09:37:11', '2022-10-25 09:37:11'),
(3, 'jodi@students.com', NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-25 09:41:21', '2022-10-25 09:41:21'),
(4, 'tes@students.com', NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-25 09:46:20', '2022-10-25 09:46:20'),
(7, 'doma@students.com', NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-02 10:27:20', '2022-11-02 10:27:20'),
(8, 'dimas@students.com', NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-02 10:32:13', '2022-11-02 10:32:13'),
(9, 'bt@students.com', NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-08 07:00:17', '2022-11-08 07:00:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswas`
--

CREATE TABLE `mahasiswas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nim` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `angkatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kode_wali` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `mahasiswas`
--

INSERT INTO `mahasiswas` (`id`, `nama`, `email`, `nim`, `no_hp`, `alamat`, `angkatan`, `status`, `kode_wali`, `created_at`, `updated_at`) VALUES
(1, 'Alfian Putra Setyawan', 'alfianps@students.com', '24060120130114', '0892173981', 'Jl. Citarum', '2019', 'Belum Disetujui', 'A001', '2022-10-19 01:52:40', '2022-11-16 02:47:44'),
(2, 'Jodi Perwira', 'jodi@students.com', '2409128391709', '0899189878217', 'Jl. Graha Estetika No. 15', '2020', 'Disetujui', 'A001', '2022-10-21 06:18:22', '2022-11-16 02:48:37'),
(5, 'tes', 'tes@students.com', '12983901820', '098923193712', 'Jl. Mentok Kanan', '2021', 'Disetujui', 'A001', '2022-10-21 07:09:13', '2022-10-25 09:46:33'),
(7, 'Alfian', 'alfian@students.com', '24012893791832', '0891873298', 'Jl. Ngesrep', '2020', 'Disetujui', 'A001', NULL, '2022-11-21 09:40:48'),
(11, 'Buti Jenner', 'buti@students.com', '2131938001832', '0809182398', 'Jl. Kaligawe', '2020', 'Belum Disetujui', 'A002', '2022-11-02 09:43:17', '2022-11-02 09:43:17'),
(12, 'Anisa Putri', 'anisa@students.com', '21399183729', '081932798193', 'Jl. Sak Sake', '2019', 'Belum Disetujui', NULL, '2022-11-02 10:13:47', '2022-11-02 10:13:47'),
(16, 'Domaniza Khairen', 'doma@students.com', '2349124891739888', '089172317', 'Jl. Belok Kiri', '2019', 'Belum Disetujui', NULL, '2022-11-02 10:18:49', '2022-11-02 10:18:49'),
(17, 'Dimas Ramdhan', 'dimas@students.com', '238197923179', '083892178319', 'Jl. Pinggir Kali', '2021', 'Belum Disetujui', NULL, '2022-11-02 10:22:35', '2022-11-02 10:22:35'),
(18, 'Buti Jenner', 'bt@students.com', NULL, NULL, NULL, NULL, 'Belum Disetujui', 'A002', '2022-11-08 07:00:17', '2022-11-08 07:00:17');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_10_19_084232_create_mahasiswas_table', 1),
(6, '2022_10_19_090133_create_operators_table', 2),
(7, '2022_10_23_151206_create_i_r_s_table', 3),
(8, '2022_10_24_081314_create_k_h_s_table', 4),
(9, '2022_10_24_085858_create_p_k_l_s_table', 5),
(10, '2022_10_25_101257_create_skripsis_table', 6),
(11, '2022_10_25_132250_create_dosens_table', 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `operators`
--

CREATE TABLE `operators` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `operators`
--

INSERT INTO `operators` (`id`, `nama`, `email`, `nip`, `no_hp`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'Putri Azizni', 'puazi@operators.com', '28173971234', '0898199238719', 'Jl. Sini', '2022-10-19 02:07:12', '2022-11-21 09:36:39');

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
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `p_k_l_s`
--

CREATE TABLE `p_k_l_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nilai` char(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_pkl` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `p_k_l_s`
--

INSERT INTO `p_k_l_s` (`id`, `email`, `status`, `nilai`, `file_pkl`, `created_at`, `updated_at`) VALUES
(1, 'alfian@students.com', 'Lulus', 'A', 'KHS.pdf', '2022-10-24 02:05:55', '2022-10-31 09:25:31'),
(2, 'alfianps@students.com', 'Proses', NULL, NULL, '2022-10-25 09:37:50', '2022-10-25 09:37:50'),
(3, 'jodi@students.com', 'Belum', NULL, NULL, '2022-10-25 09:41:44', '2022-10-25 09:41:44'),
(4, 'tes@students.com', 'Proses', NULL, NULL, '2022-10-25 09:43:31', '2022-10-25 09:43:31'),
(7, 'doma@students.com', NULL, NULL, NULL, '2022-11-02 10:27:20', '2022-11-02 10:27:20'),
(8, 'dimas@students.com', 'Belum', NULL, NULL, '2022-11-02 10:32:13', '2022-11-02 10:32:13'),
(9, 'bt@students.com', 'Belum', NULL, NULL, '2022-11-08 07:00:17', '2022-11-08 07:00:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `skripsis`
--

CREATE TABLE `skripsis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nilai` char(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lama_studi` int(11) DEFAULT NULL,
  `tgl_sidang` date DEFAULT NULL,
  `file_skripsi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `skripsis`
--

INSERT INTO `skripsis` (`id`, `email`, `status`, `nilai`, `lama_studi`, `tgl_sidang`, `file_skripsi`, `created_at`, `updated_at`) VALUES
(1, 'alfian@students.com', 'Lulus', 'A', 8, NULL, 'PKL.pdf', '2022-10-25 03:22:46', '2022-10-26 18:31:37'),
(2, 'alfianps@students.com', 'Belum Ambil', NULL, NULL, NULL, NULL, '2022-10-25 09:38:21', '2022-10-25 09:38:21'),
(3, 'jodi@students.com', 'Belum Ambil', NULL, NULL, NULL, NULL, '2022-10-25 09:42:04', '2022-10-25 09:42:04'),
(4, 'tes@students.com', 'Belum Ambil', NULL, NULL, NULL, NULL, '2022-10-25 09:43:57', '2022-10-25 09:43:57'),
(7, 'doma@students.com', NULL, NULL, NULL, NULL, NULL, '2022-11-02 10:27:20', '2022-11-02 10:27:20'),
(8, 'dimas@students.com', 'Belum Ambil', NULL, NULL, NULL, NULL, '2022-11-02 10:32:13', '2022-11-02 10:32:13'),
(9, 'bt@students.com', 'Belum Ambil', NULL, NULL, NULL, NULL, '2022-11-08 07:00:17', '2022-11-08 07:00:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_wali` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `role`, `kode_wali`, `email`, `email_verified_at`, `photo`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Putri Azizni', 'admin', NULL, 'puazi@operators.com', NULL, NULL, '$2y$10$qPaG0YAOr8p.GhcG8BozWOXeFjt1BXERsCWRQTvU9KGI8HLBts1AG', NULL, '2022-10-19 01:54:33', '2022-10-19 01:54:33'),
(2, 'Suparjo', 'admin', NULL, 'suparjo@operators.com', NULL, NULL, '$2y$10$Vdfqe4KreX50moF5coGVs.qQ0bvNDXh3jQKvfrPDkGGKO50BD1Xnu', NULL, '2022-10-19 03:20:33', '2022-10-19 03:20:33'),
(4, 'Alfian', 'mahasiswa', NULL, 'alfian@students.com', NULL, NULL, '$2y$10$uW0HcE6s4buWRNY7lPlH.OWe.N.lMB.fKHRT5ELwiodszbOpg9C4G', NULL, '2022-10-22 10:44:19', '2022-10-22 10:44:19'),
(5, 'Bambang Waluyo', 'dosen', 'A001', 'bambang@lectures.com', NULL, NULL, '$2y$10$OsbD6grJz.neAJYCkNHDE.EjHR8SqmbXFdInvIWr62x57i.U8K2RW', NULL, '2022-10-25 03:51:47', '2022-10-25 03:51:47'),
(6, 'Percobaan', 'mahasiswa', NULL, 'coba@students.com', NULL, NULL, '$2y$10$fJ14rUfrlYYJRUE.0m0h6OIeHNM1/XDM2WalxGsBVySUu2Bp2qrBq', NULL, '2022-10-25 09:28:50', '2022-10-25 09:28:50'),
(7, 'Sutopo Sepuh', 'departemen', NULL, 'sutopo@department.com', NULL, NULL, '$2y$10$WUiWtRdJHzf6tdG5ephRMORQDERCg/RMlzeGLNY0K8TayOCAB6jue', NULL, '2022-10-26 07:45:10', '2022-10-26 07:45:10'),
(9, 'Suyono', 'mahasiswa', NULL, 'suyono@students.com', NULL, NULL, '$2y$10$huqFaYL2L5A9RPQ74EAvPOfpu7YhAWY6geShJAmUVtdAxjN/WtwiG', NULL, '2022-10-26 18:07:44', '2022-10-26 18:07:44'),
(13, 'Domaniza Khairen', 'mahasiswa', 'A002', 'doma@students.com', NULL, NULL, '$2y$10$qk0Nl6zBUQq4c75QZBK5Iud2q0SPWZKsAyxLvzjlXqzsfTsnq7Rt.', NULL, '2022-11-02 10:27:20', '2022-11-02 10:27:20'),
(14, 'Dimas Ramdhan', 'mahasiswa', 'A002', 'dimas@students.com', NULL, NULL, '$2y$10$zE2nvCl7uim1MYHYRehGc.IqcL2/RUjUZgh4UrVjRebXZEC2vj5tq', NULL, '2022-11-02 10:32:13', '2022-11-02 10:32:13'),
(15, 'Buti Jenner', 'mahasiswa', 'A002', 'bt@students.com', NULL, NULL, '$2y$10$GDbJ86QJyAmRl7pHBa3e/O9Dgi1.yrbHfF9qsAr8jdmMKMctp9TzW', NULL, '2022-11-08 07:00:17', '2022-11-08 07:00:17');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dosens`
--
ALTER TABLE `dosens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dosens_email_unique` (`email`),
  ADD UNIQUE KEY `dosens_kode_wali_unique` (`kode_wali`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `i_r_s`
--
ALTER TABLE `i_r_s`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `i_r_s_email_unique` (`email`);

--
-- Indeks untuk tabel `k_h_s`
--
ALTER TABLE `k_h_s`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `k_h_s_email_unique` (`email`);

--
-- Indeks untuk tabel `mahasiswas`
--
ALTER TABLE `mahasiswas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mahasiswas_email_unique` (`email`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `operators`
--
ALTER TABLE `operators`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `operators_email_unique` (`email`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `p_k_l_s`
--
ALTER TABLE `p_k_l_s`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `p_k_l_s_email_unique` (`email`);

--
-- Indeks untuk tabel `skripsis`
--
ALTER TABLE `skripsis`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `skripsis_email_unique` (`email`);

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
-- AUTO_INCREMENT untuk tabel `dosens`
--
ALTER TABLE `dosens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `i_r_s`
--
ALTER TABLE `i_r_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `k_h_s`
--
ALTER TABLE `k_h_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `mahasiswas`
--
ALTER TABLE `mahasiswas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `operators`
--
ALTER TABLE `operators`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `p_k_l_s`
--
ALTER TABLE `p_k_l_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `skripsis`
--
ALTER TABLE `skripsis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
