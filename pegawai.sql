-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 24 Bulan Mei 2023 pada 05.49
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pegawai`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cutis`
--

CREATE TABLE `cutis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_employee` varchar(191) NOT NULL,
  `nama` varchar(191) NOT NULL,
  `nip` varchar(191) NOT NULL,
  `jabatan` varchar(191) NOT NULL,
  `masakerja` int(191) NOT NULL,
  `alasancuti` varchar(191) NOT NULL,
  `alamatcuti` varchar(191) NOT NULL,
  `ttd` varchar(191) NOT NULL,
  `notelepon` bigint(20) NOT NULL,
  `tgl_awal` date NOT NULL,
  `tgl_akhir` date NOT NULL,
  `approved` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `cutis`
--

INSERT INTO `cutis` (`id`, `id_employee`, `nama`, `nip`, `jabatan`, `masakerja`, `alasancuti`, `alamatcuti`, `ttd`, `notelepon`, `tgl_awal`, `tgl_akhir`, `approved`, `created_at`, `updated_at`) VALUES
(1, '1', 'DEWI SARTIKA, S.E', '767878', 'Anggota', 1, 'Sakit', 'Gresik', '64660d4a0fa26.png', 894535354, '2023-05-18', '2023-05-31', '1', '2023-05-18 04:34:34', '2023-05-18 22:41:31'),
(2, '2', 'QIRAN', '2312312', 'Kepala Bidang Keuangan', 2, 'Sakit', 'Surabaya', '6466c57d21445.png', 212131313, '2023-05-08', '2023-05-29', '1', '2023-05-18 17:40:29', '2023-05-18 22:41:53'),
(3, '2', 'QIRAN', '2312312', 'Kepala Bidang Keuangan', 3, 'Tamasya', 'Surabaya', '64670c9a1a6f1.png', 212131313, '2023-05-17', '2023-05-25', '1', '2023-05-18 22:43:54', '2023-05-18 23:29:44'),
(4, '2', 'QIRAN', '2312312', 'Kepala Bidang Keuangan', 1, 'Sakit', 'Gresik', '646717ab85b1c.png', 212131313, '2023-05-19', '2023-05-31', '1', '2023-05-18 23:31:07', '2023-05-18 23:31:11'),
(5, '2', 'QIRAN', '2312312', 'Kepala Bidang Keuangan', 1, 'Tamasya', 'Surabaya', '6469923806140.png', 212131313, '2023-05-21', '2023-05-31', '1', '2023-05-20 20:38:32', '2023-05-21 06:07:45'),
(6, '3', 'VINDY', '82949828', 'Kepala Bidang Keuangan', 3, 'Tamasya', 'Gresik', '646a1765600fd.png', 433231323, '2023-05-21', '2023-05-29', '1', '2023-05-21 06:06:45', '2023-05-21 06:07:21'),
(7, '2', 'QIRAN', '2312312', 'Kepala Bidang Keuangan', 1, 'udunen', 'Surabaya', '646a17d8c48b2.png', 212131313, '2023-05-20', '2023-05-25', '1', '2023-05-21 06:08:40', '2023-05-21 06:08:48'),
(8, '3', 'VINDY', '82949828', 'Kepala Bidang Keuangan', 5, 'Sakit', 'Gresik', '646a1923cd8ea.png', 433231323, '2023-05-21', '2023-05-27', '1', '2023-05-21 06:14:11', '2023-05-21 06:14:21'),
(9, '3', 'VINDY', '82949828', 'Kepala Bidang Keuangan', 2, 'Tamasya', 'Surabaya', '646a19a900ef5.png', 433231323, '2023-05-21', '2023-05-28', '1', '2023-05-21 06:16:25', '2023-05-21 06:16:34'),
(10, '3', 'VINDY', '82949828', 'Kepala Bidang Keuangan', 1, 'Sakit', 'Surabaya', '646a19f6790e6.png', 433231323, '2023-05-20', '2023-05-26', '1', '2023-05-21 06:17:42', '2023-05-21 06:17:42'),
(11, '1', 'DEWI SARTIKA, S.E', '767878', 'Anggota', 1, 'Sakit', 'Gresik', '646a1d42361f3.png', 894535354, '2023-05-21', '2023-05-27', '1', '2023-05-21 06:31:46', '2023-05-21 06:31:53'),
(12, '1', 'DEWI SARTIKA, S.E', '767878', 'Anggota', 1, 'Sakit', 'Gresik', '646a1dac7e6eb.png', 894535354, '2023-05-21', '2023-05-29', '1', '2023-05-21 06:33:32', '2023-05-21 06:34:31'),
(13, '2', 'QIRAN', '2312312', 'Kepala Bidang Keuangan', 1, 'Sakit', 'Gresik', '646a1e7abd501.png', 212131313, '2023-05-20', '2023-05-24', '1', '2023-05-21 06:36:58', '2023-05-21 06:44:49'),
(14, '2', 'QIRAN', '2312312', 'Kepala Bidang Keuangan', 1, 'Tamasya', 'Surabaya', '646a20e28fbe9.png', 212131313, '2023-05-21', '2023-05-25', '1', '2023-05-21 06:47:14', '2023-05-21 06:47:35'),
(15, '2', 'QIRAN', '2312312', 'Kepala Bidang Keuangan', 1, 'Sakit', 'Gresik', '646a302ac8765.png', 212131313, '2023-05-21', '2023-05-30', '1', '2023-05-21 07:52:26', '2023-05-21 22:16:38'),
(16, '3', 'VINDY', '82949828', 'Kepala Bidang Keuangan', 1, 'Sakit', 'Gresik', '646d63a46129e.png', 433231323, '2023-05-24', '2023-05-27', '1', '2023-05-23 18:08:52', '2023-05-23 18:09:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(191) NOT NULL,
  `nip` varchar(191) NOT NULL,
  `jeniskelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `notelepon` bigint(20) NOT NULL,
  `foto` varchar(191) NOT NULL,
  `jabatan` varchar(191) NOT NULL,
  `golongan` varchar(191) NOT NULL,
  `bidang` varchar(191) NOT NULL,
  `jatahcuti` int(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `employees`
--

INSERT INTO `employees` (`id`, `nama`, `nip`, `jeniskelamin`, `notelepon`, `foto`, `jabatan`, `golongan`, `bidang`, `jatahcuti`, `created_at`, `updated_at`) VALUES
(1, 'DEWI SARTIKA, S.E', '767878', 'Perempuan', 894535354, '', 'Anggota', 'I/a', 'Ekonomi Kreatif', 2, '2023-05-18 04:33:17', '2023-05-21 06:34:02'),
(2, 'QIRAN', '2312312', 'Laki-laki', 212131313, '', 'Kepala Bidang Keuangan', 'I/c', 'Kebudayaan', 3, '2023-05-18 04:33:54', '2023-05-21 22:16:38'),
(3, 'VINDY', '82949828', 'Perempuan', 433231323, '', 'Kepala Bidang Keuangan', 'I/b', 'Ekonomi Kreatif', 3, '2023-05-20 21:52:23', '2023-05-23 18:09:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(3, '2022_10_30_140817_create_employees_table', 1),
(4, '2023_05_04_151640_create_cutis_table', 1),
(5, '2023_05_12_130321_create_spds_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `spds`
--

CREATE TABLE `spds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nip` varchar(191) NOT NULL,
  `id_employee` varchar(191) NOT NULL,
  `no_srt` varchar(191) NOT NULL,
  `nama` varchar(191) NOT NULL,
  `pangkat` varchar(191) NOT NULL,
  `jabatan` varchar(191) NOT NULL,
  `tingkat_biaya` varchar(191) NOT NULL,
  `perjalanan_dinas` varchar(191) NOT NULL,
  `kendaraan` varchar(191) NOT NULL,
  `tempat_berangkat` varchar(191) NOT NULL,
  `tempat_tujuan` varchar(191) NOT NULL,
  `lama_perjalanan` varchar(191) NOT NULL,
  `tgl_berangkat` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `instansi` varchar(191) NOT NULL,
  `kode_rekening` varchar(191) NOT NULL,
  `keterangan_lain` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `spds`
--

INSERT INTO `spds` (`id`, `nip`, `id_employee`, `no_srt`, `nama`, `pangkat`, `jabatan`, `tingkat_biaya`, `perjalanan_dinas`, `kendaraan`, `tempat_berangkat`, `tempat_tujuan`, `lama_perjalanan`, `tgl_berangkat`, `tgl_kembali`, `instansi`, `kode_rekening`, `keterangan_lain`, `created_at`, `updated_at`) VALUES
(1, '767878', '1', '2313123AS', 'DEWI SARTIKA, S.E', 'VVI/A', 'Anggota', '2', 'Tamasya', 'Mobil', 'Kantor', 'Bali', '7 hari', '2023-05-19', '2023-05-23', 'Disparbud Kabupaten Gresik', '830958903334', '-', '2023-05-18 04:35:46', '2023-05-18 17:29:25'),
(3, '2312312', '2', '686786J', 'QIRAN', 'VVI/A', 'Kepala Bidang Keuangan', '1', 'Sakit', 'Motor', 'Kantor', 'Malang', '3 hari', '2023-05-19', '2023-05-31', 'Disparbud Kabupaten Gresik', '35223231231112', '3 Orang', '2023-05-18 17:37:23', '2023-05-18 17:37:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ahmad Hasby Bik', 'abik262002@gmail.com', NULL, '$2y$10$vkcpwfkouVWZ61IQhKi2Vubd/ABEL9tGN6IM8E3L9pSk5KGTIBSs.', NULL, '2023-05-18 04:32:48', '2023-05-18 04:32:48');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cutis`
--
ALTER TABLE `cutis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `spds`
--
ALTER TABLE `spds`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT untuk tabel `cutis`
--
ALTER TABLE `cutis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `spds`
--
ALTER TABLE `spds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
