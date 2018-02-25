-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2017 at 06:23 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `evolty`
--

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
(5, '2014_10_12_000000_create_users_table', 1),
(6, '2014_10_12_100000_create_password_resets_table', 1);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `namatim` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `asalsekolah` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamatsekolah` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namaketua` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelasketua` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namaanggota1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelasanggota1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namaanggota2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelasanggota2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notelp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bukti` blob NOT NULL,
  `region` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipetes` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `namatim`, `status`, `email`, `password`, `asalsekolah`, `alamatsekolah`, `namaketua`, `kelasketua`, `namaanggota1`, `kelasanggota1`, `namaanggota2`, `kelasanggota2`, `event`, `notelp`, `bukti`, `region`, `tipetes`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'mantaplah', 1, 'arinanda.adib@gmail.com', '$2y$10$VL5UM8fi4kIRbAUd/ULp.ehASRXAHeQmXt537YlLIZAkHQuo1GtEy', 'mantapbos', 'mantapabis', 'Muhammad', '10', 'Adib', '11', 'Arinanda', '12', 'electra', '08115408066', 0x356133376461333761396537662e706e67, 'Balikpapan', 'online', 'o1oVuwh3QQjZ0MuqedHXTwMkPC5UwTkhQ6YUxaBEJZT9AuUyHSirdyyRMXcR', '2017-12-18 08:09:43', '2017-12-18 08:09:43'),
(3, 'Peserta Surabaya', 0, 'bonek@bonek.com', '$2y$10$dzKeRxUNpAsNFBxkY/8zyOQoSV.Pbr7TFBdpivJytHMnbt/pky0pm', 'yoi', 'dong', 'sura', '10', 'baya', '11', 'bonek', '12', 'electra', '0213453413', 0x356133376461663830666130342e6a7067, 'Surabaya', 'offline', 'l8rvPsjetMnp2chL2YzRGDBXCVsLyvPF8XQMpkGoPXSgKT1t749WTj3HbJdW', '2017-12-18 08:12:56', '2017-12-18 08:12:56');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
