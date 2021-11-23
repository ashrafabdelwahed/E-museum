-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2021 at 03:18 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-museum`
--

-- --------------------------------------------------------

--
-- Table structure for table `antiques`
--

CREATE TABLE `antiques` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_en` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_ar` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `civilization_id` bigint(20) UNSIGNED NOT NULL,
  `museum_id` bigint(20) UNSIGNED NOT NULL,
  `image_one` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_two` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_three` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `antiques`
--

INSERT INTO `antiques` (`id`, `name_en`, `name_ar`, `desc_en`, `desc_ar`, `civilization_id`, `museum_id`, `image_one`, `image_two`, `image_three`, `created_at`, `updated_at`) VALUES
(2, 'Tutankhamun mask', 'قناع توت عنخ آمون', 'Tutankhamun\'s Mask is the death mask of Pharaoh Tutankhamun from the Eighteenth Dynasty of ancient Egypt. It was discovered by Howard Carter in 1925 in Tomb 62 and is now in the Egyptian Museum in Cairo. The mask is one of the most famous works of art in the world.', '<span style=\"color: rgb(77, 81, 86); font-family: &quot;Helvetica Neue&quot;, &quot;Noto Naskh Arabic UI&quot;, Arial, sans-serif; font-size: large; text-align: right;\">قناع توت عنخ آمون هو قناع الموت للفرعون توت عنخ آمون من الأسرة الثامنة عشر في مصر القديمة. وقد اكتشف من قبل هوارد كارتر في عام 1925 في مقبرة 62 وهو موجود الآن في المتحف المصري في القاهرة. القناع هو واحد من أكثر الأعمال الفنية شهرة في العالم.</span>', 3, 1, 'images/antique/y5qt9tIzbDCxukVTMwLplEZPe4qi2jmid6TSWvSN.jpeg', 'images/antique/bklox3g2tGsdVj38iseFoOhTNWijC02mDXqrIxl4.jpeg', 'images/antique/GITqXmlnTn6g9qLIBMF5SHGDPLGQcCC2aeHu9GW4.jpeg', '2021-11-23 12:01:35', '2021-11-23 12:01:35'),
(3, 'Tutankhamun mask 2222', 'قناع توت عنخ آمون 2222', 'Tutankhamun\'s Mask is the death mask of Pharaoh Tutankhamun from the Eighteenth Dynasty of ancient Egypt. It was discovered by Howard Carter in 1925 in Tomb 62 and is now in the Egyptian Museum in Cairo. The mask is one of the most famous works of art in the world.', '<span style=\"color: rgb(77, 81, 86); font-family: &quot;Helvetica Neue&quot;, &quot;Noto Naskh Arabic UI&quot;, Arial, sans-serif; font-size: large; text-align: right;\">قناع توت عنخ آمون هو قناع الموت للفرعون توت عنخ آمون من الأسرة الثامنة عشر في مصر القديمة. وقد اكتشف من قبل هوارد كارتر في عام 1925 في مقبرة 62 وهو موجود الآن في المتحف المصري في القاهرة. القناع هو واحد من أكثر الأعمال الفنية شهرة في العالم.</span>', 3, 1, 'images/antique/CMj5jTvTkDhjCil8Yc5Pw2sm3xAF6QkLUNJkzriV.jpeg', 'images/antique/E2aGMxIyNA2ZJvkDtXWV14EoQv8wJdRiUijcrK3n.jpeg', 'images/antique/KTg9eiRSXUbnK9SlKIvGWOCDQISNsgvRkW4Xt52Q.jpeg', '2021-11-23 12:05:01', '2021-11-23 12:05:01'),
(4, 'test test test', 'تجربة تجربة تجربة', '<p>&nbsp; test test test test test&nbsp;&nbsp;&nbsp;&nbsp;<br></p>', '<span style=\"font-family: JannaLT-Regular; font-size: 18px; text-align: right;\">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.</span><br class=\"line-break\" style=\"margin-bottom: 27px; font-family: JannaLT-Regular; font-size: 18px; text-align: right;\">', 3, 1, 'images/antique/cYDxQ9FAxF0p7QkUA2b1dKAp8ckE78Hqlx1DEOFQ.jpeg', 'images/antique/cFuh1HrVZJWZDtzzBmpzjoUYzjZM7Mxsbwf4NMzV.jpeg', 'images/antique/Xr6KYTDUvKNOBD4w7AzIM8Pvf6W0Taw9O8nSpBa9.jpeg', '2021-11-23 12:06:01', '2021-11-23 12:08:03'),
(5, 'test 2', 'تجربة', '<p>tevyvewuifgbuewrfvuewv hj&nbsp;</p>', '<span style=\"font-family: JannaLT-Regular; font-size: 18px; text-align: right;\">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.</span><br class=\"line-break\" style=\"margin-bottom: 27px; font-family: JannaLT-Regular; font-size: 18px; text-align: right;\">', 3, 1, 'images/antique/srkc2e0B4x1AtDu2HyDojlllH61mSAImWnXHoFUm.jpeg', 'images/antique/KpSlVqAiy4MMYtYZDJDqzpkSzty71RltYeo61YLm.jpeg', 'images/antique/PLcC32ygmiANuJm3UP7SR1efIk5wx9O0wxgnsP9i.jpeg', '2021-11-23 12:07:29', '2021-11-23 12:07:29');

-- --------------------------------------------------------

--
-- Table structure for table `civilizations`
--

CREATE TABLE `civilizations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_en` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_ar` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `civilizations`
--

INSERT INTO `civilizations` (`id`, `name_en`, `name_ar`, `desc_en`, `desc_ar`, `created_at`, `updated_at`) VALUES
(3, 'pharaonic', 'الفرعونية', '<span style=\"font-size: 28px; white-space: pre-wrap;\">Ancient Egypt is an ancient civilization in northeastern Africa. The ancient Egyptian civilization centered on the banks of the Nile River in what is now the Arab Republic of Egypt. Ancient Egyptian civilization followed the prehistoric era and merged around 3100 BC with the political unification of Upper and Lower Egypt under the rule of Mines</span><br>', '<span style=\"color: rgb(77, 81, 86); font-family: &quot;Helvetica Neue&quot;, &quot;Noto Naskh Arabic UI&quot;, Arial, sans-serif; font-size: large; text-align: right;\">مصر القديمة هي حضارة قديمة في الشمال الشرقي لأفريقيا وقد تركزت الحضارة المصرية القديمة على ضفاف نهر النيل فيما يعرف الآن بجمهورية مصر العربية. اتبعت الحضارة المصرية القديمة عصر ما قبل التاريخ واندمجت حوالي عام 3100 قبل الميلاد مع التوحيد السياسي لمصر العليا والسفلى تحت حكم مينا</span>', '2021-11-23 11:37:11', '2021-11-23 11:37:11'),
(4, 'Sumer', 'سومر', 'The Sumerian civilization is one of the well-known ancient civilizations in southern Mesopotamia, and its history is known from the clay tablets recorded in the cuneiform script. The name Sumer appeared at the beginning of the third millennium BC. In the period of the emergence of the Hittites, but the beginning of the Sumerians was in the sixth millennium BC.', '<span style=\"color: rgb(77, 81, 86); font-family: &quot;Helvetica Neue&quot;, &quot;Noto Naskh Arabic UI&quot;, Arial, sans-serif; font-size: large; text-align: right;\">الحضارة السومرية من الحضارات القديمة المعروفة في جنوب بلاد الرافدين وقد عرف تاريخها من الألواح الطينية المدونة بالخط المسماري. وظهر اسم سومر في بداية الألفية الثالثة ق.م. في فترة ظهور الحيثيين لكن بداية السومريين كانت في الألفية السادسة ق.م.</span>', '2021-11-23 11:40:10', '2021-11-23 11:40:10'),
(5, 'Roman Empire', 'الإمبراطورية الرومانية', 'The Roman Empire was the period after the collapse of the Roman Republic of ancient Roman civilization. As a polity that included large territorial areas around the Mediterranean in Europe, North Africa, and Western Asia ruled by emperors.', '<span style=\"color: rgb(77, 81, 86); font-family: &quot;Helvetica Neue&quot;, &quot;Noto Naskh Arabic UI&quot;, Arial, sans-serif; font-size: large; text-align: right;\">كانت الإمبراطورية الرومانية الفترة ما بعد إنهيار الجمهورية الرومانية من الحضارة الرومانية القديمة. بصفتها نظامًا سياسيًا ضمت مناطق إقليمية كبيرة حول البحر الأبيض المتوسط في أوروبا وشمال إفريقيا وغرب آسيا يحكمها الأباطرة.</span>', '2021-11-23 11:43:40', '2021-11-23 11:43:40');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `governorates`
--

CREATE TABLE `governorates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `governorates`
--

INSERT INTO `governorates` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'القاهرة', NULL, NULL),
(2, 'الإسكندرية', NULL, NULL),
(3, 'الجيزة', NULL, NULL),
(4, 'القليوبية', NULL, NULL),
(5, 'الدقهلية', NULL, NULL),
(6, 'الشرقية', NULL, NULL),
(7, 'المنوفية', NULL, NULL),
(8, 'الإسماعيلية', NULL, NULL),
(9, 'أسوان', NULL, NULL),
(10, 'أسيوط', NULL, NULL),
(11, 'الأقصر', NULL, NULL),
(12, 'البحر الأحمر', NULL, NULL),
(13, 'البحيرة', NULL, NULL),
(14, 'بني سويف', NULL, NULL),
(15, 'بورسعيد', NULL, NULL),
(16, 'جنوب سيناء', NULL, NULL),
(17, 'دمياط', NULL, NULL),
(18, 'سوهاج', NULL, NULL),
(19, 'السويس', NULL, NULL),
(20, 'شمال سيناء	', NULL, NULL),
(21, 'الغربية', NULL, NULL),
(22, 'الفيوم', NULL, NULL),
(23, 'قنا', NULL, NULL),
(24, 'كفر الشيخ', NULL, NULL),
(25, 'مطروح', NULL, NULL),
(26, 'المنيا', NULL, NULL),
(27, 'الوادي الجديد', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `museum_id` bigint(20) UNSIGNED NOT NULL,
  `stars` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_one` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_two` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_three` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`id`, `name_en`, `name_ar`, `address_en`, `address_ar`, `museum_id`, `stars`, `image_one`, `image_two`, `image_three`, `created_at`, `updated_at`) VALUES
(1, 'ramses hilton', 'هيتلون رمسيس', 'Tahrir Square', 'ميدان التحرير القاهرة', 1, '5', 'images/hotel/mJMw3KCVVwfBBycmuWUCDx3unuhqFapJFzc2AbSu.jpeg', 'images/hotel/DRJeESn4f5NhkjK6yw9scAXgSDNDo16L2O5TLVpG.jpeg', 'images/hotel/07MH1ltgL4Bk6VzQxmCcQGRZ3XRxvYCXSZSsgs3w.jpeg', '2021-11-23 12:11:26', '2021-11-23 12:11:26'),
(2, 'The Nile Ritz-Carlton', 'نايل ريتز كارلتون', 'Tahrir Square', 'ميدان التحرير القاهرة', 1, '5', 'images/hotel/pNsHMHrJhK1Y0lOYTn3dDhv7GSIoqCDWIT3MVDMk.jpeg', 'images/hotel/EBhuvXMRoHUVfUqFfpKfEA0XU4CieVZ8gviecVpC.jpeg', 'images/hotel/6OM6MUUdYbB66t6ZFJ8ffG2hM0xWBJCTlhkU2hgK.jpeg', '2021-11-23 12:13:36', '2021-11-23 12:13:36');

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
(4, '2020_06_06_121556_create_governorates_table', 1),
(5, '2020_10_08_233936_create_museums_table', 1),
(6, '2020_10_09_141320_create_civilizations_table', 1),
(7, '2020_10_10_094205_create_antiques_table', 1),
(8, '2020_10_12_121347_create_hotels_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `museums`
--

CREATE TABLE `museums` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_work_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_work_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ticket_price` int(11) NOT NULL,
  `image_one` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_two` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_three` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_en` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_ar` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `governorate_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `museums`
--

INSERT INTO `museums` (`id`, `name_en`, `name_ar`, `address_en`, `address_ar`, `start_work_time`, `end_work_time`, `ticket_price`, `image_one`, `image_two`, `image_three`, `desc_en`, `desc_ar`, `governorate_id`, `created_at`, `updated_at`) VALUES
(1, 'egypt museum', 'المتحف المصري', 'tahrir', 'التحرير', '7', '5', 50, 'images/museum/id0X46QW9hkcys7MhVcXL4w1VJ7wp2E8AfC8SIIA.jpeg', 'images/museum/7ADtIXtXONDBWSQMBTqXIT2JygK3JZRBYfdkuIOL.jpeg', 'images/museum/8Xs5XEWOFwAVkfNNVO2D7AgmeXqfk8o4o6dE6VV9.jpeg', 'test', 'تجربة', 1, '2021-10-02 17:29:05', '2021-10-02 17:29:05'),
(2, 'Grand Egyptian Museum', 'المتحف المصري الكبير', 'al ramaya Square - Haram - Giza', 'ميدان الرماية- الهرم - الجيزة', '00', '00', 200, 'images/museum/KNnb8iWtQRmBTibF45AaGjm3e94iSlHBvvPavRBW.jpeg', 'images/museum/Ytqm2K1nvzJ0YYNKWteZuAHzKw3dKNQk1ewRE2IY.jpeg', 'images/museum/By9KhWsUFF9FfnoFBoCWfEBSh8XYu5J8Gso94OA2.jpeg', 'Grand Egyptian Museum, which is located near Cairo. And it will be the largest exhibition in the world for antiquities, to accommodate 5 million annual visitors. In addition to commercial and recreational services, real estate belonging to the securities, belonging to the horses that were present at the ancient Egyptian', 'المتحف المصري الكبير أو الجديد‏ يقع على بعد أميال قليلة من غرب القاهرة بالقرب من أهرام الجيزة. ويتم بناؤه ليكون أكبر متحف في العالم للآثار، ليستوعب 5 ملايين زائر سنويًا. بالإضافة لمباني الخدمات التجارية والترفيهية ومركز الترميم والحديقة المتحفية التي سيزرع بها الأشجار التي كانت معروفة عند المصري القديم', 3, '2021-11-23 11:52:37', '2021-11-23 11:52:37'),
(3, 'test 1', 'تجربة 1', 'test', 'تجربة', '7', '5', 100, 'images/museum/nZs4LZ4NmdM2VX3KZkQmO1JH8aAURqNQ9OeN9CCA.jpeg', 'images/museum/ssdT9nWxGfKXTqIMvJc81RD8txoAB8aBxzVQaC69.jpeg', 'images/museum/qBp9iwW5UjRuZSEYq9C1taEqW8eyxEfVWqOage7j.jpeg', 'test test', 'تجربة تجربة', 1, '2021-11-23 11:54:21', '2021-11-23 11:54:21'),
(4, 'test 2', 'تجربة 2', 'test 2', 'تجربة 2', '7', '5', 100, 'images/museum/qrPq4IlhMzhF8QlxYzDkcDKqvIEFNZbJvN6RZsz0.jpeg', 'images/museum/3HgL5trwcjtnf7UsvAZOEREe6wdBiTN8wiugvrSr.jpeg', 'images/museum/i1Fyef1oA1VLYQV4GtikqdSP2LM7lgC6knTqGE7f.jpeg', 'test test test test', 'تجربة تجربة تجربة تجربة', 1, '2021-11-23 11:55:07', '2021-11-23 11:55:07');

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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'admin@app.com', NULL, '$2y$10$q/27TvNbOfdwmW3B4Cv5B.gzp5IGQntDc9dIQ0H3w92B8dQ5Coaou', NULL, '2021-06-21 18:33:33', '2021-06-21 18:33:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `antiques`
--
ALTER TABLE `antiques`
  ADD PRIMARY KEY (`id`),
  ADD KEY `antiques_civilization_id_foreign` (`civilization_id`),
  ADD KEY `antiques_museum_id_foreign` (`museum_id`);

--
-- Indexes for table `civilizations`
--
ALTER TABLE `civilizations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `governorates`
--
ALTER TABLE `governorates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hotels_museum_id_foreign` (`museum_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `museums`
--
ALTER TABLE `museums`
  ADD PRIMARY KEY (`id`),
  ADD KEY `museums_governorate_id_foreign` (`governorate_id`);

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
-- AUTO_INCREMENT for table `antiques`
--
ALTER TABLE `antiques`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `civilizations`
--
ALTER TABLE `civilizations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `governorates`
--
ALTER TABLE `governorates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `museums`
--
ALTER TABLE `museums`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `antiques`
--
ALTER TABLE `antiques`
  ADD CONSTRAINT `antiques_civilization_id_foreign` FOREIGN KEY (`civilization_id`) REFERENCES `civilizations` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `antiques_museum_id_foreign` FOREIGN KEY (`museum_id`) REFERENCES `museums` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `hotels`
--
ALTER TABLE `hotels`
  ADD CONSTRAINT `hotels_museum_id_foreign` FOREIGN KEY (`museum_id`) REFERENCES `museums` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `museums`
--
ALTER TABLE `museums`
  ADD CONSTRAINT `museums_governorate_id_foreign` FOREIGN KEY (`governorate_id`) REFERENCES `governorates` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
