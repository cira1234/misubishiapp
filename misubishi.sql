-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2024 at 04:19 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `misubishi`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_car` varchar(255) DEFAULT NULL,
  `detail_car` varchar(255) DEFAULT NULL,
  `price_car` int(11) DEFAULT NULL,
  `car_user_by` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `name_car`, `detail_car`, `price_car`, `car_user_by`, `created_at`, `updated_at`) VALUES
(1, 'ออล-นิว ไทรทัน', 'ทลายขีดจำกัดให้ตัวเอง กับกระบะสายพันธุ์ใหม่ ที่พร้อมปลุกทุกประสาทสัมผัสให้ตื่นเต้นเร้าใจกว่าที่เคย ด้วยการพัฒนาแบบใหม่หมด ทุกมิติ ', 599000, '1', '2024-03-20 10:10:31', '2024-03-20 10:10:31'),
(2, 'เอาท์แลนเดอร์ พีเอชอีวี ใหม่', 'ที่สุดของรถเอสยูวีปลั๊กอินไฮบริดทรงพลัง ผสาน DNA ของ มิตซูบิชิ มอเตอร์ส อย่างลงตัว ก้าวข้ามสู่โลกยนตรกรรมยุคใหม่ที่ตอบโจทย์ในทุกเส้นทางอย่างแท้จริง', 1640000, '1', '2024-03-20 10:22:20', '2024-03-20 10:22:20'),
(3, 'ปาเจโร สปอร์ต ใหม่', 'ไม่ใช่แค่สมรรถนะที่ดี แต่ยังมั่นใจยิ่งขึ้นด้วยพลังการควบคุมที่เหนือระดับ นี่แหล่ะ… นิยามของการขับขี่ที่สมบูรณ์แบบ', 1389000, '1', '2024-03-20 20:07:46', '2024-03-20 20:07:46'),
(4, 'เอ็กซ์แพนเดอร์ เอชอีวี ใหม่', 'รถยนต์เอนกประสงค์ 7 ที่นั่ง ดีไซน์สปอร์ตพรีเมียม ยกระดับชีวิตครอบครัวไปอีกชั้นกับประสบการณ์การขับขี่ที่เหนือกว่าด้วยขุมพลังไฮบริดใหม่ สัมผัสพลังใหม่ ความรู้สึกใหม่…ให้ชีวิตไปได้ไกลกว่าเดิม', 933000, '1', '2024-03-20 20:08:34', '2024-03-20 20:08:34'),
(5, 'เอ็กซ์แพนเดอร์ ครอส เอชอีวี ใหม่', 'รถพรีเมียม SUV 7 ที่นั่ง ดีไซน์สปอร์ต โฉบเฉี่ยว พร้อมให้คุณสร้างเรื่องราวผจญภัยใหม่ๆ ในแบบที่ต้องการ ด้วยขุมพลังไฮบริดใหม่ สัมผัสพลังใหม่ ความรู้สึกใหม่…ให้ชีวิตไปได้ไกลกว่าเดิม', 961000, '1', '2024-03-20 20:08:52', '2024-03-20 20:08:52'),
(6, 'เอ็กซ์แพนเดอร์', 'ก้าวข้ามชีวิตแบบเดิมๆ ไปกับมิติใหม่ของรถยนต์อเนกประสงค์ 7 ที่นั่ง ขยายความเป็นไปได้ไม่สิ้นสุด เติมเต็มความสุขในทุกเส้นทาง ให้คุณและครอบครัวออกไปพบกับประสบการณ์ใหม่เพื่อ... “ชีวิตที่เหนือกว่าทุกข้อจำกัด', 799000, '1', '2024-03-20 20:09:12', '2024-03-20 20:09:12'),
(7, 'เอ็กซ์แพนเดอร์ ครอส', 'รถยนต์ SUV 7 ที่นั่ง ให้คุณและครอบครัวออกไปผจญภัย ใช้ชีวิตมิติใหม่ ในแบบที่ต้องการ... \"เพราะชีวิต...ไม่ได้มีแค่มุมเดียว', 946000, '1', '2024-03-20 20:12:55', '2024-03-20 20:12:55'),
(8, 'มิราจ', 'ปลุกพลังไปกับ มิตซูบิชิ มิราจ ตอบรับไลฟ์สไตล์ที่ไม่เคยหยุด แตกต่างอย่างมีสไตล์แล้วไปให้สุด', 509000, '1', '2024-03-20 20:13:10', '2024-03-20 20:13:10'),
(9, 'แอททราจ', 'โดดเด่นในทุกมุมมอง พร้อมสร้างสิ่งใหม่จากแรงบันดาลใจให้คุณทำได้มากกว่า', 529000, '1', '2024-03-20 20:13:27', '2024-03-20 20:13:27');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_03_17_161450_create_companies_table', 1),
(6, '2014_10_12_200000_add_two_factor_columns_to_users_table', 2),
(7, '2024_03_18_043955_create_sessions_table', 2),
(12, '2024_03_18_190735_create_cars_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('aunoford89@gmail.com', '$2y$10$.mHiuWGKqMJ1SrH6gMszRuSKuodVK1oJoluLKoL8tHUHEbGXLShpq', '2024-03-17 21:48:51');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
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
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('MF8XVdDomLm3TSlswi9wZIiQlrTtNPpnePNFpm1c', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiYnVuZ2hpZ3lxeXRRNENKYVpnMTVLZnFEWnllNm1NR050R3o3eTBLdiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9kYXNoYm9hcmQiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJC9XUXM1WjVVR2NmdHZXWVZ0YlRpQi5TVnBsbzhRNnFBRlQveFZTY3NCUERPbnJ4TFM1U3YuIjt9', 1710990828);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `created_at`, `updated_at`, `status`) VALUES
(1, 'Ford', 'aunoford89@gmail.com', NULL, '$2y$10$/WQs5Z5UGcftvWYVtbTiB.SVplo8Q6qAFT/xVScsBPDOnrxLS5Sv.', NULL, NULL, NULL, NULL, '2024-03-17 21:43:49', '2024-03-17 21:43:49', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
