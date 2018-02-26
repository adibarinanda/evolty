-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2018 at 07:58 AM
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
(6, '2014_10_12_100000_create_password_resets_table', 1),
(10, '2017_12_26_015056_add_nopeserta_to_users', 2),
(11, '2018_01_04_014259_add_tipedaftar_to_users', 2),
(16, '2018_01_08_015438_add_baronas_to_users', 3),
(17, '2018_01_08_062102_add_baronas_bukti_to_users', 3),
(18, '2018_01_10_022635_add_baronas_kategori_to_users', 4),
(19, '2018_01_11_060631_add_namaanggota3_baronasemail_to_users', 5),
(20, '2018_01_14_154120_add_kartupelajar_foto_to_users', 6),
(21, '2018_01_15_022408_add_namapembimbing_to_users', 7);

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
  `namatim` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `tipedaftar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_peserta` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `asalsekolah` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamatsekolah` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `namaketua` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kelasketua` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `namaanggota1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kelasanggota1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `namaanggota2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kelasanggota2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `namaanggota3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notelp` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bukti` blob,
  `region` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tipetes` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `baronas_kategori` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `baronas_namatim` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `baronas_cp` int(25) DEFAULT NULL,
  `baronas_namapembimbing` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `baronas_bukti` blob,
  `baronas_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `baronas_kartupelajar1` blob,
  `baronas_kartupelajar2` blob,
  `baronas_kartupelajar3` blob,
  `baronas_foto1` blob,
  `baronas_foto2` blob,
  `baronas_foto3` blob,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `namatim`, `status`, `tipedaftar`, `no_peserta`, `email`, `password`, `asalsekolah`, `alamatsekolah`, `namaketua`, `kelasketua`, `namaanggota1`, `kelasanggota1`, `namaanggota2`, `kelasanggota2`, `namaanggota3`, `event`, `notelp`, `bukti`, `region`, `tipetes`, `remember_token`, `baronas_kategori`, `baronas_namatim`, `baronas_cp`, `baronas_namapembimbing`, `baronas_bukti`, `baronas_email`, `baronas_kartupelajar1`, `baronas_kartupelajar2`, `baronas_kartupelajar3`, `baronas_foto1`, `baronas_foto2`, `baronas_foto3`, `created_at`, `updated_at`) VALUES
(1, 'mantaplah', 1, NULL, '11-111-111-2', 'arinanda.adib@gmail.com', '$2y$10$VL5UM8fi4kIRbAUd/ULp.ehASRXAHeQmXt537YlLIZAkHQuo1GtEy', 'mantapbos', 'mantapabis', 'Muhammad', '10', 'Adib', '11', 'Arinanda', '12', NULL, 'electra', '08115408066', 0x356133376461333761396537662e706e67, 'Balikpapan', 'Offline', 'E7LzvqhFvh7NsBlFkXDm2evve4rU9Jkmbst9yOgB0jLNdMKM80iGq6Y7lkaH', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-12-18 08:09:43', '2018-01-14 01:12:17'),
(3, 'Peserta Surabaya', 1, NULL, '13-313-313-3', 'bonek@bonek.com', '$2y$10$dzKeRxUNpAsNFBxkY/8zyOQoSV.Pbr7TFBdpivJytHMnbt/pky0pm', 'yoi', 'dong', 'sura', '10', 'baya', '11', 'bonek', '12', NULL, 'electra', '0213453413', 0x356133376461663830666130342e6a7067, 'Surabaya', 'offline', 'gav9oNCE6L3rc0jXVVamFwLdrSNncQFV5eeQ1Ql2cuqYo6oS9why8jA1VSrF', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-12-18 08:12:56', '2018-01-02 18:44:25'),
(4, 'dasdas', 0, NULL, NULL, 'ada@ada.com', '$2y$10$gwjTt7SuG0XKLIibQIhcS.Mj2WpHf.mWzb6eONnF36wqz3Ac5geRm', 'sman 48', 'asdasdasd', 'asdasd', '11', 'asdasd', '12', 'asdasdasdas', '10', NULL, 'electra', '123123', 0x356133663131353533363237322e6a7067, 'Pilih Region', 'online', 'lpPDpfJCy2wspKjRh5x000I9nlQ9nClQ5BgNACPNaWcALp7Co13PPg2LW5e7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-12-23 19:30:45', '2018-01-03 00:54:12'),
(30, 'unggul', 0, 'Online', '12-212-121-2', 'ungguljawa@gmail.com', '$2y$10$MvA.PQ1tXcaCR3H7lZfCSuWn0lBLZ3jD.VW3j4A6wV4Pe/bXhtp6.', 'unggul', 'unggul', 'unggul', '10', 'unggul', '11', 'unggul', '12', NULL, 'electra', '65444444', 0x356134643862376236333136372e6a7067, 'Surabaya', 'Online', '6PH22MjMfYG4088K6QD38iuyKJx62EAJNobHhXIA6tuINxegI6EhQwkGCR8p', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-01-03 19:03:39', '2018-01-13 20:02:49'),
(65, 'lagi', 0, 'Offline', NULL, 'lagi@lagi.com', '$2y$10$752IL45gx8lopVMaz6Uzl.GwM7ujDavqhDPnLpwLTY5gL3h2XWLDq', 'lagi', 'lagi', 'lagi', '10', 'lagi', '10', 'lagi', '10', NULL, 'electra', '23487628734', NULL, 'Balikpapan', 'Online', 'JRcesEU6bpVu5qG6IH1onkBQYDMg7EYTP4JiIRSj0WRRS5iikNzlf9cybwgb', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(66, 'tesssss', 0, 'Online', NULL, 'haha@haha.com', '$2y$10$Q7ilKjlrsUZYz6U3fstd8OpkgaKzwiHUC4UFtT35gDs8ghs35PW6S', 'tesssss', 'tesssss', 'tesssss', '10', 'tesssss', '10', 'tesssss', '10', NULL, 'electra', '1293123', 0x356135326634333461383463302e706e67, 'Gresik', 'Online', 'NL1SrOsyATW32hpRip29meL7O4g1NZrpOT6Y4kUb9pEQOMLtSn6VWch0y8Gv', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-01-07 21:31:49', '2018-01-07 21:31:49'),
(82, NULL, 1, NULL, 'AB-2138-791', 'user1@evolty-its.com', '$2y$10$01rhNnAiB04dxWjvUYuwhuoqiN1SufbDssNKpKifLia5asVIuKYRe', 'jember', 'cok', NULL, NULL, 'hero', NULL, 'akbar', NULL, 'ahmadi', 'baronas', NULL, NULL, NULL, NULL, 'VzOiMo7siwSmzcW4yIIAs9rtXgYyOmcaIWs6RyaP4Tl15z2OWrHgFWD1pq4m', 'Elementary', 'baronas2', 4320934, 'pembimbing', 0x356135353761353535643261352e706e67, 'hero@hero.com', 0x356135633133646135393164382e6a7067, 0x356135633133646135393634362e6a7067, 0x356135633133646135396136302e6a7067, 0x356135633133646135396533392e706e67, 0x356135633133646135613234382e706e67, 0x356135633133646135613661372e706e67, NULL, '2018-01-14 19:37:14'),
(83, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'baronas', NULL, NULL, NULL, NULL, NULL, 'Junior', 'rttyryrt', 234234123, NULL, 0x356135656639383931336363342e6a7067, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(84, 'treter', 0, 'Offline', '45-645-645-6', 'ytr@ytr.ytr', '$2y$10$iY18e..fxMs8thng8rJc.e4Yim4EsbprhoMgMA9HXD3DTebd1wWoa', 'ertertert', 'erttrer', 'terte', '10', 'ertert', '11', 'ertert', '12', NULL, 'electra', '234465456', NULL, 'Denpasar', 'Online', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
