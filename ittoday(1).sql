-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2019 at 06:59 PM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ittoday`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `anggota1s`
--

CREATE TABLE `anggota1s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nim` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tmptLahir` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tglLahir` date NOT NULL,
  `jenKel` tinyint(4) NOT NULL,
  `asalInstansi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fakultas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noHP` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idLine` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `namaBerkasSKMA` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamatBerkasSKMA` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `namaBerkasKTM` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamatBerkasKTM` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `anggota1s`
--

INSERT INTO `anggota1s` (`id`, `nama`, `nim`, `tmptLahir`, `tglLahir`, `jenKel`, `asalInstansi`, `fakultas`, `jurusan`, `email`, `noHP`, `idLine`, `namaBerkasSKMA`, `alamatBerkasSKMA`, `namaBerkasKTM`, `alamatBerkasKTM`, `created_at`, `updated_at`) VALUES
(1, 'jokiani', 'b1231273', 'bogor', '2018-12-11', 0, 'IPB aja', 'Fapet', 'hujan', 'joku@asda.com', '083123321317', 'gdasud.dasd', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `anggota2s`
--

CREATE TABLE `anggota2s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nim` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tmptLahir` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tglLahir` date NOT NULL,
  `jenKel` tinyint(4) NOT NULL,
  `asalInstansi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fakultas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noHP` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idLine` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `namaBerkasSKMA` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamatBerkasSKMA` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `namaBerkasKTM` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamatBerkasKTM` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `anggota2s`
--

INSERT INTO `anggota2s` (`id`, `nama`, `nim`, `tmptLahir`, `tglLahir`, `jenKel`, `asalInstansi`, `fakultas`, `jurusan`, `email`, `noHP`, `idLine`, `namaBerkasSKMA`, `alamatBerkasSKMA`, `namaBerkasKTM`, `alamatBerkasKTM`, `created_at`, `updated_at`) VALUES
(1, 'jiwa', 'J879kda', 'Jugailni', '2019-03-19', 1, 'IPB hehe', 'Jukianin', 'Kilang minyak', 'jukano@mgail.com', '0130123810', 'ndald.dasd', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ketua_tims`
--

CREATE TABLE `ketua_tims` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nim` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tmptLahir` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tglLahir` date NOT NULL,
  `jenKel` tinyint(4) NOT NULL,
  `asalInstansi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fakultas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noHP` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idLine` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `namaBerkasSKMA` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamatBerkasSKMA` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `namaBerkasKTM` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamatBerkasKTM` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ketua_tims`
--

INSERT INTO `ketua_tims` (`id`, `nama`, `nim`, `tmptLahir`, `tglLahir`, `jenKel`, `asalInstansi`, `fakultas`, `jurusan`, `email`, `noHP`, `idLine`, `namaBerkasSKMA`, `alamatBerkasSKMA`, `namaBerkasKTM`, `alamatBerkasKTM`, `created_at`, `updated_at`) VALUES
(1, 'joko', 'G741317', 'Palemabng', '2019-02-13', 1, 'IPB', 'FMIPA', 'Ilkom', 'joko@gmail.com', '08123863931312', 'kujo,kazune', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(52, '2014_10_12_000000_create_users_table', 1),
(53, '2014_10_12_100000_create_password_resets_table', 1),
(54, '2019_05_31_152533_create_admins_table', 1),
(55, '2019_06_01_045219_create_anggota1s_table', 1),
(56, '2019_06_01_045244_create_anggota2s_table', 1),
(57, '2019_06_01_045303_create_ketua_tims_table', 1),
(58, '2019_06_01_045401_create_teams_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `namaTim` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenisTim` tinyint(4) NOT NULL,
  `idKetuaTim` int(11) DEFAULT NULL,
  `verifSKMAKetua` tinyint(1) NOT NULL DEFAULT '0',
  `verifKTMKetua` tinyint(1) NOT NULL DEFAULT '0',
  `idAnggota1` int(11) DEFAULT NULL,
  `verifSKMA1` tinyint(1) NOT NULL DEFAULT '0',
  `verifKTM1` tinyint(1) NOT NULL DEFAULT '0',
  `idAnggota2` int(11) DEFAULT NULL,
  `verifSKMA2` tinyint(1) NOT NULL DEFAULT '0',
  `verifKTM2` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `namaTim`, `jenisTim`, `idKetuaTim`, `verifSKMAKetua`, `verifKTMKetua`, `idAnggota1`, `verifSKMA1`, `verifKTM1`, `idAnggota2`, `verifSKMA2`, `verifKTM2`, `created_at`, `updated_at`) VALUES
(1, 'wadaw', 1, 1, 0, 0, 1, 0, 0, 1, 0, 0, NULL, NULL),
(2, 'widiw', 2, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, NULL),
(3, 'haha', 3, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idTim` int(11) DEFAULT NULL,
  `namaTim` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `idTim`, `namaTim`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Muhammad Fakhri', 'muhammadfakhri301@gmail.com', 1, 'wadaw', '2019-06-01 00:42:07', '$2y$10$AKDtHN6DWY5RosPpGRh0vOcS0O7uJ6LCQx13UMOLQUPlCtn5gh8r2', NULL, '2019-06-01 00:40:46', '2019-06-01 00:42:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `anggota1s`
--
ALTER TABLE `anggota1s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `anggota2s`
--
ALTER TABLE `anggota2s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ketua_tims`
--
ALTER TABLE `ketua_tims`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `teams_namatim_unique` (`namaTim`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_namatim_unique` (`namaTim`),
  ADD UNIQUE KEY `users_idtim_unique` (`idTim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `anggota1s`
--
ALTER TABLE `anggota1s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `anggota2s`
--
ALTER TABLE `anggota2s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ketua_tims`
--
ALTER TABLE `ketua_tims`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
