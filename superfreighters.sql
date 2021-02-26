-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 26, 2021 at 05:57 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `superfreighters`
--

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `status`) VALUES
('0f55cedd-5fc1-4311-8983-1d6c5b9ecbf7', 'MALDIVE', 0),
('280f8d4f-0106-46e3-8093-11659ad434e2', 'JAPAN', 0),
('49329c0e-f0df-4086-8579-ebeefa9da64b', 'CANADA', 1),
('5ada492d-42ed-458a-b1d4-f1084dc9b683', 'UNITED STATES OF AMERICA', 1),
('7553b1ba-d024-455c-b667-7cb0c5022596', 'CHINA', 0),
('7f9fc75c-9e62-40fa-8cb1-6b68e3dfee53', 'POLAND', 0),
('a7c99aec-6b03-4faa-ab39-5a7482745f69', 'UNITED KINGDOM', 1),
('aeb450f8-7a5d-475e-9cdf-500f3a7fb7ef', 'AFGHANISTAN', 0),
('af3a3160-ed0a-4e1d-ba32-00a1632008b7', 'RUSSIA', 0),
('b213aaa8-7b6f-4fbb-beab-d5346caf644e', 'SPAIN', 1),
('c4c5e03b-65be-4f9b-8371-6bbfe41c8882', 'GERMANY', 0),
('e4961e78-d876-49ed-b47e-7310e81d7a5f', 'ZAMNIA', 0),
('ec1c57ec-3d55-44d2-84ad-cec5d5699753', 'ITALY', 0);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `general_settings`
--

CREATE TABLE `general_settings` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `settings_key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `settings_value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `general_settings`
--

INSERT INTO `general_settings` (`id`, `settings_key`, `settings_value`, `description`, `created_at`, `updated_at`) VALUES
('036a5cf1-8805-49ed-b54d-3a2cfdc445e1', 'base', 'Georgia Terry', 'Est dolore eos est', '2021-02-22 14:37:02', '2021-02-22 14:37:02'),
('0f0403e3-af28-42a6-8ff0-eed951e2da25', 'base-fare-by-air', '50001', 'Base fare by air', '2021-02-22 14:38:33', '2021-02-23 07:25:57'),
('0ffc2824-f7b9-4d09-b55b-02839c9be847', 'custom-tax-percent', '10', 'tax percent to be deducted on each order', '2021-02-22 14:50:18', '2021-02-22 14:50:18'),
('24b38508-3606-4ab4-9ca3-b493c77cdcf9', 'canada-flat-rate', '100', 'this is for canada', '2021-02-23 07:53:20', '2021-02-23 07:53:20'),
('3d1d1273-5a0b-41cd-a4bf-e6ab8c8dfcfa', 'spain-flat-rate', '500', NULL, '2021-02-23 07:59:12', '2021-02-23 07:59:12'),
('7f419e45-89f1-4f09-b3b1-30f254a01cf0', 'sea-weight-per-kg', '2000', 'price of sea-weight-per-kg', '2021-02-22 14:46:22', '2021-02-22 14:46:22'),
('8edb7561-4770-4e36-a559-b4bf2d96c886', 'united kingdom-flat-rate', '800', 'flat rate for uk', '2021-02-23 07:55:21', '2021-02-23 07:55:21'),
('9a7f722e-06e5-4499-b161-78a9c1a7cc86', 'air-weight-per-kg', '10000', 'price of air weight of 1 kg', '2021-02-22 14:45:37', '2021-02-22 14:45:37'),
('9fab912d-0d96-4d98-95ea-1380a3a02e12', 'afghanistan-flat-rate', '500', 'outgpin for', '2021-02-22 15:23:30', '2021-02-22 15:23:30'),
('ac700b0b-cb41-4261-b59a-eebe93ed11a5', 'air-arrival-time', '2', 'time it takes order to arrive by air', '2021-02-22 14:39:40', '2021-02-22 14:39:40'),
('aee54a9f-4ab4-4cc0-9bf8-8d73f7973c2b', 'base-fare-by-sea', '15000', 'Base fare by sea', '2021-02-22 14:38:56', '2021-02-22 14:38:56'),
('b327f0d4-c935-4ece-9c5f-cd12cfba4061', 'united states of america-flat-rate', '1500', 'flat rate for us', '2021-02-23 07:56:52', '2021-02-23 07:56:52'),
('bdd389bc-bb63-4803-aab3-f5b0cac1ba55', 'ec1c57ec-3d55-44d2-84ad-cec5d5699753', '433', 'er', '2021-02-22 15:20:07', '2021-02-22 15:20:07'),
('d153b5cd-0e6c-43a8-b01c-9fb050800843', 'sea-arrival-time', '20', 'sea arrival tume', '2021-02-22 14:43:54', '2021-02-23 10:47:44'),
('dc715bbe-d8e7-4e9c-a91a-e29551c02c0f', 'ec1c57ec-3d55-44d2-84ad-cec5d5699753-afghanistan', '2332', '32', '2021-02-22 15:19:20', '2021-02-22 15:19:20');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_02_22_133040_create_orders_table', 1),
(5, '2021_02_22_134115_create_countries_table', 1),
(6, '2021_02_22_141331_create_general_settings_table', 2),
(7, '2021_02_23_084554_add_status_column_to_countries_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_ip_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mode_of_transport` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `origin_country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `destination_country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expected_arrival_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_ip_address`, `mode_of_transport`, `price`, `origin_country`, `destination_country`, `expected_arrival_date`, `created_at`, `updated_at`) VALUES
('036ce0cc-909b-4c85-93ba-980e45252533', 'oluwa@gmaul.com', 'air', 66111.10, 'canada', 'Nigeria', '2021-02-28 15:43:45', '2021-02-26 15:47:40', '2021-02-26 15:47:40'),
('101d77c6-f962-48bf-8bcf-678e5c4c194a', '197.210.28.219', 'sea', 23650.00, 'afghanistan', 'Nigeria', '2021-02-22 22:01:00', '2021-02-22 22:01:00', '2021-02-22 22:01:00'),
('1a233c90-457c-4d36-b54e-e544348f3423', 'oluwa@gmaul.com', 'air', 66111.10, 'canada', 'Nigeria', '2021-02-28 15:43:45', '2021-02-26 15:47:11', '2021-02-26 15:47:11'),
('1d6c0b00-b19e-45a5-b71a-cee960e07560', '197.210.28.219', 'air', 88550.00, 'afghanistan', 'Nigeria', '2021-02-22 21:54:48', '2021-02-22 21:54:48', '2021-02-22 21:54:48'),
('26b3271f-0a4f-48d2-adc7-5803578eff76', '197.210.28.219', 'sea', 23650.00, 'afghanistan', 'Nigeria', '2021-02-22 22:15:52', '2021-02-22 22:15:52', '2021-02-22 22:15:52'),
('301bd1d3-8324-4a1d-950b-63c60d37b170', 'oluwa@gmaul.com', 'air', 66111.10, 'canada', 'Nigeria', '2021-02-28 15:43:45', '2021-02-26 15:45:52', '2021-02-26 15:45:52'),
('344d6d9a-5e55-4507-8681-0ad6945af68f', 'oluwa@gmaul.com', 'air', 66111.10, 'canada', 'Nigeria', '2021-02-28 15:43:45', '2021-02-26 15:45:22', '2021-02-26 15:45:22'),
('35828568-3d20-45c6-ac9d-f64a462721ed', 'seller@freeki.com', 'air', 66880.00, 'united kingdom', 'Nigeria', '2021-02-28 14:08:13', '2021-02-26 15:01:17', '2021-02-26 15:01:17'),
('4544bda5-db2a-4f31-be9a-ade17d0a7035', '212.100.76.170', 'sea', 44550.00, 'united states of america', 'Nigeria', '2021-02-23 08:41:29', '2021-02-23 08:41:29', '2021-02-23 08:41:29'),
('495e208a-c352-47fd-9ad6-8b18da6e5848', 'seller@freeki.com', 'air', 66880.00, 'united kingdom', 'Nigeria', '2021-02-28 14:08:13', '2021-02-26 15:01:05', '2021-02-26 15:01:05'),
('53ae6925-3358-437c-ac0f-8ad34ea5a237', 'oluwa@gmaul.com', 'air', 66111.10, 'canada', 'Nigeria', '2021-02-28 15:43:45', '2021-02-26 15:48:25', '2021-02-26 15:48:25'),
('54b3f721-15c8-4712-8049-8e08885ff8e5', 'oluwa@gmaul.com', 'air', 66111.10, 'canada', 'Nigeria', '2021-02-28 15:43:45', '2021-02-26 15:44:04', '2021-02-26 15:44:04'),
('5f894055-fd0e-43d9-af41-f2f638185e3b', '197.210.28.219', 'sea', 23650.00, 'afghanistan', 'Nigeria', '2021-02-22 22:14:15', '2021-02-22 22:14:15', '2021-02-22 22:14:15'),
('6099ab17-9e2b-4071-966d-2b8e5833f194', '212.100.76.170', 'air', 275111.10, 'canada', 'Nigeria', '2021-02-23 08:23:30', '2021-02-23 08:23:30', '2021-02-23 08:23:30'),
('6b1bde8c-d8b2-4226-bf46-b58a0992701f', 'oluwa@gmaul.com', 'air', 66111.10, 'canada', 'Nigeria', '2021-02-28 15:43:45', '2021-02-26 15:46:22', '2021-02-26 15:46:22'),
('797b5840-5328-4f81-bca8-6d499b01b16a', '197.210.28.219', 'air', 88550.00, 'afghanistan', 'Nigeria', '2021-02-22 21:55:12', '2021-02-22 21:55:12', '2021-02-22 21:55:12'),
('86318e28-7c49-444e-867d-3410c654fd6f', 'oluwa@gmaul.com', 'air', 66111.10, 'canada', 'Nigeria', '2021-02-28 15:43:45', '2021-02-26 15:46:46', '2021-02-26 15:46:46'),
('8a7bddac-038c-4be2-96f8-b8e216aec5bd', '197.210.28.219', 'air', 99550.00, 'afghanistan', 'Nigeria', '2021-02-22 21:11:47', '2021-02-22 21:11:47', '2021-02-22 21:11:47'),
('8c355fa6-5529-461d-a697-9ac072855a03', '197.210.28.219', 'air', 88550.00, 'afghanistan', 'Nigeria', '2021-02-22 21:56:52', '2021-02-22 21:56:52', '2021-02-22 21:56:52'),
('8f015efa-6e3a-45ad-a322-59b951f3c5a5', 'oluwa@gmaul.com', 'air', 66111.10, 'canada', 'Nigeria', '2021-02-28 15:43:45', '2021-02-26 15:48:39', '2021-02-26 15:48:39'),
('9f084a86-0996-4a8b-9433-b74bec72ca5a', 'oluwa@gmaul.com', 'air', 66111.10, 'canada', 'Nigeria', '2021-02-28 15:43:45', '2021-02-26 15:44:29', '2021-02-26 15:44:29'),
('a6f9bd0c-02e1-4041-b9cf-6b81da5b5661', 'seller@freeki.com', 'air', 66880.00, 'united kingdom', 'Nigeria', '2021-02-28 14:08:13', '2021-02-26 15:03:39', '2021-02-26 15:03:39'),
('a89400bc-3710-46bf-83cd-2dac287c8cd1', 'oluwa@gmaul.com', 'air', 66111.10, 'canada', 'Nigeria', '2021-02-28 15:43:45', '2021-02-26 15:46:13', '2021-02-26 15:46:13'),
('b2e26647-5aba-4c40-a1eb-0bc8d2d93f10', 'oluwa@gmaul.com', 'air', 66111.10, 'canada', 'Nigeria', '2021-02-28 15:43:45', '2021-02-26 15:47:25', '2021-02-26 15:47:25'),
('b79bd79b-38bd-412a-9ec3-2811df4542ce', '212.100.76.170', 'sea', 22550.00, 'united states of america', 'Nigeria', '2021-02-23 08:44:22', '2021-02-23 08:44:22', '2021-02-23 08:44:22'),
('c3eddc8d-e77e-498a-b600-da96e7736bd6', 'oluwa@gmaul.com', 'air', 66111.10, 'canada', 'Nigeria', '2021-02-28 15:43:45', '2021-02-26 15:46:37', '2021-02-26 15:46:37'),
('cbbe66b3-cc65-4486-961f-8610bd7c224a', '197.210.28.219', 'sea', 23650.00, 'afghanistan', 'Nigeria', '2021-02-22 22:05:55', '2021-02-22 22:05:55', '2021-02-22 22:05:55'),
('d3728b4d-7f16-4999-bedf-d792186292ef', '197.210.28.219', 'sea', 23650.00, 'afghanistan', 'Nigeria', '2021-02-22 22:01:37', '2021-02-22 22:01:37', '2021-02-22 22:01:37'),
('d3888d91-2375-41bc-8435-4b8c6788f8a6', '197.210.28.219', 'sea', 23650.00, 'afghanistan', 'Nigeria', '2021-02-22 22:01:01', '2021-02-22 22:01:01', '2021-02-22 22:01:01'),
('d3b67e76-90fe-4f66-99d0-75a26db20859', 'seller@freeki.com', 'air', 66880.00, 'united kingdom', 'Nigeria', '2021-02-28 14:08:13', '2021-02-26 15:00:11', '2021-02-26 15:00:11'),
('e0c870f9-581c-4324-a875-747e8790bc0f', 'oluwa@gmaul.com', 'air', 66111.10, 'canada', 'Nigeria', '2021-02-28 15:43:45', '2021-02-26 15:45:21', '2021-02-26 15:45:21'),
('e1aa29b8-b53f-4e73-8d6b-366e1ebb65c2', 'oluwa@gmaul.com', 'air', 66111.10, 'canada', 'Nigeria', '2021-02-28 15:43:45', '2021-02-26 15:44:48', '2021-02-26 15:44:48'),
('e9b793c0-acbc-4585-ada6-7f4fdb4c54ee', 'seller@freeki.com', 'air', 66880.00, 'united kingdom', 'Nigeria', '2021-02-28 14:08:13', '2021-02-26 14:59:28', '2021-02-26 14:59:28'),
('ecd6ed68-d288-431b-8329-e1007208937f', 'oluwa@gmaul.com', 'air', 66111.10, 'canada', 'Nigeria', '2021-02-28 15:43:45', '2021-02-26 15:46:52', '2021-02-26 15:46:52'),
('f1f622c5-9443-4d11-8ff0-188d04cc7e81', 'seller@freeki.com', 'air', 66880.00, 'united kingdom', 'Nigeria', '2021-02-28 14:08:13', '2021-02-26 15:03:20', '2021-02-26 15:03:20'),
('f24656cd-5029-40a6-a564-0065de134c4c', '197.210.28.219', 'sea', 23650.00, 'afghanistan', 'Nigeria', '2021-02-22 21:57:38', '2021-02-22 21:57:38', '2021-02-22 21:57:38');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Indexes for table `general_settings`
--
ALTER TABLE `general_settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `general_settings_settings_key_unique` (`settings_key`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
