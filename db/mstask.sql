-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 17, 2023 at 02:05 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mstask`
--

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint UNSIGNED NOT NULL,
  `iso` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nicename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iso3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phonecode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `iso`, `name`, `nicename`, `iso3`, `numcode`, `phonecode`, `created_at`, `updated_at`) VALUES
(1, 'AW', 'Equatorial Guinea', 'Equatorial Guinea', 'CCK', '403', '+08', '2023-06-16 08:03:48', '2023-06-16 08:03:48'),
(2, 'PH', 'Comoros', 'Comoros', 'BDI', '195', '+97', '2023-06-16 08:03:48', '2023-06-16 08:03:48'),
(3, 'KW', 'Cayman Islands', 'Cayman Islands', 'NZL', '704', '+89', '2023-06-16 08:03:48', '2023-06-16 08:03:48'),
(4, 'GF', 'Trinidad and Tobago', 'Trinidad and Tobago', 'NER', '871', '+32', '2023-06-16 08:03:48', '2023-06-16 08:03:48'),
(5, 'KE', 'Saint Vincent and the Grenadines', 'Saint Vincent and the Grenadines', 'SVN', '482', '+33', '2023-06-16 08:03:48', '2023-06-16 08:03:48'),
(6, 'CW', 'Ukraine', 'Ukraine', 'MCO', '908', '+99', '2023-06-16 08:03:48', '2023-06-16 08:03:48'),
(7, 'AF', 'Mauritania', 'Mauritania', 'COK', '759', '+99', '2023-06-16 08:03:48', '2023-06-16 08:03:48'),
(8, 'GN', 'Reunion', 'Reunion', 'MSR', '751', '+56', '2023-06-16 08:03:48', '2023-06-16 08:03:48'),
(9, 'TZ', 'Greece', 'Greece', 'HMD', '935', '+45', '2023-06-16 08:03:48', '2023-06-16 08:03:48'),
(10, 'GT', 'Taiwan', 'Taiwan', 'MAR', '319', '+14', '2023-06-16 08:03:48', '2023-06-16 08:03:48');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int NOT NULL,
  `type_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `tages` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `user_id`, `type_id`, `title`, `rate`, `description`, `tages`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 2, '1', 'Exhibit Designer', '25', 'Quia eligendi sed sit aut consequuntur voluptas.', 'PHP, Laravel, Joomla', NULL, '2023-06-16 08:03:48', '2023-06-16 08:03:48'),
(2, 2, '1', 'Spotters', '11', 'Est facilis qui beatae non corporis dolores ad.', 'PHP, Laravel, Shopify', NULL, '2023-06-16 08:03:48', '2023-06-16 08:03:48'),
(3, 1, '1', 'Bulldozer Operator', '35', 'Voluptates sunt cumque sed.', 'PHP, wordpress, Joomla', NULL, '2023-06-16 08:03:48', '2023-06-16 08:03:48'),
(4, 2, '2', 'Bill and Account Collector', '30', 'Quod et magni culpa doloribus ea officiis architecto rerum.', 'Laravel, Shopify, Joomla', NULL, '2023-06-16 08:03:48', '2023-06-16 08:03:48'),
(5, 2, '2', 'Photographic Developer', '18', 'Exercitationem est enim alias suscipit reprehenderit distinctio.', 'PHP, wordpress, Shopify', NULL, '2023-06-16 08:03:48', '2023-06-16 08:03:48'),
(6, 2, '1', 'Heating and Air Conditioning Mechanic', '43', 'Quos aut sit nihil rerum.', 'Laravel, wordpress, Shopify', NULL, '2023-06-16 08:03:48', '2023-06-16 08:03:48'),
(7, 2, '1', 'Log Grader and Scaler', '20', 'Qui voluptatem accusantium veritatis ut excepturi soluta culpa.', 'Laravel, wordpress, Joomla', NULL, '2023-06-16 08:03:48', '2023-06-16 08:03:48'),
(8, 3, '2', 'Police Detective', '18', 'Et voluptatem nulla nam natus reprehenderit occaecati.', 'Laravel, wordpress, Joomla', NULL, '2023-06-16 08:03:48', '2023-06-16 08:03:48'),
(9, 1, '2', 'Software Engineer', '21', 'Rerum temporibus ut a consequatur quos.', 'PHP, wordpress, Joomla', NULL, '2023-06-16 08:03:48', '2023-06-16 08:03:48'),
(10, 3, '1', 'Waste Treatment Plant Operator', '44', 'Enim minima dolores et rem sit sit quo.', 'Laravel, wordpress, Joomla', NULL, '2023-06-16 08:03:48', '2023-06-16 08:03:48'),
(11, 3, '1', 'Radiation Therapist', '19', 'Officiis et quos nihil.', 'PHP, wordpress, Shopify', NULL, '2023-06-16 08:03:48', '2023-06-16 08:03:48'),
(12, 2, '1', 'Petroleum Technician', '19', 'Omnis quam fugiat et maxime sapiente.', 'Laravel, wordpress, Joomla', NULL, '2023-06-16 08:03:48', '2023-06-16 08:03:48'),
(13, 3, '2', 'Fish Hatchery Manager', '15', 'Officia non fugit aut quae aut.', 'Laravel, wordpress, Joomla', NULL, '2023-06-16 08:03:48', '2023-06-16 08:03:48'),
(14, 2, '2', 'Motorboat Operator', '44', 'Magni qui ut nesciunt blanditiis quo.', 'Laravel, wordpress, Shopify', NULL, '2023-06-16 08:03:48', '2023-06-16 08:03:48'),
(15, 3, '2', 'Ship Carpenter and Joiner', '34', 'Qui maxime esse id voluptas.', 'PHP, wordpress, Joomla', NULL, '2023-06-16 08:03:48', '2023-06-16 08:03:48'),
(16, 3, '1', 'Court Reporter', '38', 'Autem ut enim nisi facilis nam soluta enim hic.', 'PHP, wordpress, Shopify', NULL, '2023-06-16 08:03:48', '2023-06-16 08:03:48'),
(17, 2, '2', 'Nuclear Monitoring Technician', '42', 'Iusto quasi omnis quisquam autem praesentium.', 'wordpress, Shopify, Joomla', NULL, '2023-06-16 08:03:48', '2023-06-16 08:03:48'),
(18, 3, '2', 'Athletes and Sports Competitor', '25', 'Atque consequatur doloremque neque.', 'Laravel, Shopify, Joomla', NULL, '2023-06-16 08:03:48', '2023-06-16 08:03:48'),
(19, 1, '2', 'Paralegal', '41', 'Eum nisi et quos sit vel nisi.', 'PHP, Laravel, Joomla', NULL, '2023-06-16 08:03:48', '2023-06-16 08:03:48'),
(20, 1, '1', 'Tile Setter OR Marble Setter', '34', 'Et et repellendus id itaque sit.', 'PHP, wordpress, Shopify', NULL, '2023-06-16 08:03:48', '2023-06-16 08:03:48');

-- --------------------------------------------------------

--
-- Table structure for table `job_types`
--

CREATE TABLE `job_types` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_types`
--

INSERT INTO `job_types` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Part Time', '2023-06-16 08:03:49', '2023-06-16 08:03:49'),
(2, 'Full Time', '2023-06-16 08:03:49', '2023-06-16 08:03:49');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(29, '2014_10_12_000000_create_users_table', 1),
(30, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(31, '2019_08_19_000000_create_failed_jobs_table', 1),
(32, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(33, '2023_06_15_203408_create_jobs_table', 1),
(34, '2023_06_15_210713_create_countries_table', 1),
(35, '2023_06_16_115217_create_job_types_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` int NOT NULL,
  `terms_accept` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `country_id`, `terms_accept`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'amaan', 'baig', 1, 'on', 'amaan@gmail.com', NULL, '$2y$10$QNHipGLlhCsrCA0zf2P8GOLqJQyXE268vM8r3mPTLNNZncarYSF8m', 'nUeWUI79bDMBkLDujkTxy6mzdSG1zKRN6AFoiLrjS7k8ENA1YTKvTqs254R6', '2023-06-16 08:06:10', '2023-06-16 08:06:10'),
(2, 'test', 'user 2', 6, 'on', 'test2@test.com', NULL, '$2y$10$Fd7HnBzT7rLB0PzcA3gE3OQivO6qMs4K1DohncudfbGN.7KehZwdi', NULL, '2023-06-16 16:29:00', '2023-06-16 16:29:00'),
(3, 'test3', 'user', 10, 'on', 'test3@test.com', NULL, '$2y$10$hvSnrlyBXvVF2JgdkAnQJuWEPPJHG79Q81zsITsA.F2aIxC2QHGuy', NULL, '2023-06-16 16:29:35', '2023-06-16 16:29:35'),
(4, 'Aristotle', 'Paul', 4, 'on', 'fuqun@mailinator.com', NULL, '$2y$10$I3v4cwj1K633umTi15PoquneFnnG2BT3IFxSqTu062t0OJ5N88.ju', NULL, '2023-06-16 16:52:04', '2023-06-16 16:52:04'),
(5, 'Jamalia', 'Gibson', 1, 'on', 'mupyrijom@mailinator.com', NULL, '$2y$10$EudnnggWZusxayGGSCp8C.QKYqqEoYEaRT3TM0ci3RtjMuT1MYHMy', NULL, '2023-06-16 16:52:19', '2023-06-16 16:52:19'),
(6, 'Dora', 'Mason', 6, 'on', 'zawi@mailinator.com', NULL, '$2y$10$tbrSDJC/GB5ZK97HtUd4DOMHBqFYuAd0K1wiWSy0kfmFLKdMbVdpC', NULL, '2023-06-16 17:03:06', '2023-06-16 17:03:06'),
(7, 'Iris', 'Chapman', 10, 'on', 'sevagoma@mailinator.com', NULL, '$2y$10$0qNBIuLIa4D/.kFXQBhhCugT3mN6cMNe0k2UqhwNnINKQQe04PER6', NULL, '2023-06-16 17:03:18', '2023-06-16 17:03:18'),
(8, 'Ginger', 'Becker', 5, 'on', 'zaremygipy@mailinator.com', NULL, '$2y$10$0/IeGtowPkGCJJDDxiXg8OSFABfhnDKk9SvJcdU90yrFSCtp7i60S', NULL, '2023-06-16 17:03:36', '2023-06-16 17:03:36'),
(9, 'Madonna', 'Goodwin', 6, 'on', 'jiquxowoko@mailinator.com', NULL, '$2y$10$WVW4DWDVritB3XVj/R36me.9US2fdLvGRvx2YO3S5L8TxI2h82bUi', NULL, '2023-06-16 17:06:30', '2023-06-16 17:06:30'),
(10, 'Irma', 'Wilcox', 9, 'on', 'hysuxuna@mailinator.com', NULL, '$2y$10$Iw52.Bfx477LYIqwgXTr6Odoih/1gNi3ld.ERGJeKc7tLIEBRXfsO', NULL, '2023-06-16 17:07:47', '2023-06-16 17:07:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_types`
--
ALTER TABLE `job_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `job_types`
--
ALTER TABLE `job_types`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
