-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 24 يناير 2023 الساعة 12:36
-- إصدار الخادم: 10.4.17-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newjoblaravel`
--

-- --------------------------------------------------------

--
-- بنية الجدول `aboutusinfo`
--

CREATE TABLE `aboutusinfo` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `aboutus_word` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aboutus_text` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whoweare_word` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whoweare_text` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ourvision_word` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ourvision_text` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ourhistory_word` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ourhistory_text` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_about` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `aboutusinfo`
--

INSERT INTO `aboutusinfo` (`id`, `name`, `lang`, `created_at`, `updated_at`, `aboutus_word`, `aboutus_text`, `whoweare_word`, `whoweare_text`, `ourvision_word`, `ourvision_text`, `ourhistory_word`, `ourhistory_text`, `img_about`) VALUES
(1, 'aboutus', '1', NULL, '2023-01-23 22:22:03', 'About Us', 'There are many variations of passages  Lorem Ipsum available, but the majority have in some form, by injected humour.\n', 'Who We Are', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-ssssssssssson of letters, look like readable English.</p><p>There are many variations of passages&nbsp; Lorem Ipsum available, but the majority have in some form, by injected humour.</p>', 'Our Vision', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-levvvvvvvn of letters, look like readable English.</p><p>There are many variations of passages&nbsp; Lorem Ipsum available, but the majority have in some form, by injected humour.</p><p><br></p>', 'Our History', '<p>It is a long established fact that a reader wilhhhhhhhhhhhhhhh readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, look like readable English.\r\n\r\nThere are many variations of passages  Lorem Ipsum available, but th</p><p style=\"box-sizing: border-box; -webkit-font-smoothing: antialiased; text-rendering: optimizelegibility; outline: none !important; margin-top: 0px; margin-bottom: 1rem; font-size: 14px; color: rgb(0, 0, 0); font-family: &quot;Nunito Sans&quot;, sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\">mal distribution of letters, look like readable English.</p><p><br></p><p style=\"box-sizing: border-box; -webkit-font-smoothing: antialiased; text-rendering: optimizelegibility; outline: none !important; margin-top: 0px; margin-bottom: 1rem; font-size: 14px; color: rgb(0, 0, 0); font-family: &quot;Nunito Sans&quot;, sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\">There are many variations of passages&nbsp; Lorem Ipsum available, but th</p><p><br></p><p>e majority have in some form, by injected humour.</p>', '1674519641about-img1.jpg.jpg'),
(4, 'عن الشركة', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- بنية الجدول `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `ipandserver` longtext DEFAULT NULL,
  `readornot` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `phone`, `subject`, `message`, `ipandserver`, `readornot`, `created_at`, `updated_at`) VALUES
(2, 'mmhod', 'kdskl@ds.com', '2838838', 'dsfklj', 'kdsf jfkdjfksd ljflk jsdj fklsdj k jsdl', '{', 1, '2023-01-24 09:24:51', '2023-01-24 09:24:51'),
(3, 'dfslkajfkld', 'kljdkslf@dksl.com', '2333', 'kkdjlfdj', 'kldjsfkljsd', '{', 1, '2023-01-24 09:25:28', '2023-01-24 09:25:28');

-- --------------------------------------------------------

--
-- بنية الجدول `failed_jobs`
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
-- بنية الجدول `generalinfo`
--

CREATE TABLE `generalinfo` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `valueoftext` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `fileupload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `typeofdata` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `generalinfo`
--

INSERT INTO `generalinfo` (`id`, `name`, `lang`, `valueoftext`, `fileupload`, `typeofdata`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Logo', '1', '', '1674531819logo_white.png.png', 'file', NULL, NULL, '2023-01-24 01:43:39'),
(2, 'Home', '1', 'Home', '', '', NULL, NULL, NULL),
(3, 'Services', '1', 'Services', '', '', NULL, NULL, NULL),
(4, 'Blog', '1', 'Blog', '', '', NULL, NULL, NULL),
(5, 'Contact', '1', 'Contact', '', '', NULL, NULL, NULL),
(6, 'Watch_Intro', '1', 'Watch Intro', '', '', NULL, NULL, NULL),
(7, 'OurBestServices', '1', 'Our Best Services', '', '', NULL, NULL, NULL),
(8, 'our_servicestext', '1', 'There are many variations of sssssss kkk Ipsum available, but the majority have suffered alteration in some form.', '', '', NULL, NULL, '2023-01-24 01:59:36'),
(9, 'lastnew_title', '1', 'Latest News & Blog', '', '', NULL, NULL, NULL),
(10, 'lastnew_text', '1', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.', '', '', NULL, NULL, NULL),
(11, 'Get_toch', '1', 'Get in Touch', '', '', NULL, NULL, NULL),
(12, 'readytostart', '1', 'Ready to Get Started', '', '', NULL, NULL, NULL),
(13, 'readytostartdescription', '1', 'At vero eos et accssssssus et iusto odio dignissimos ducimus quiblanditiis praesentium', '', '', NULL, NULL, NULL),
(14, 'Name', '1', 'Name', '', '', NULL, NULL, NULL),
(15, 'Phone', '1', 'Phone', '', '', NULL, NULL, NULL),
(16, 'email', '1', 'Email', '', '', NULL, NULL, NULL),
(17, 'subject', '1', 'Subject', '', '', NULL, NULL, NULL),
(18, 'message', '1', 'Message', '', '', NULL, NULL, NULL),
(19, 'sendmessage', '1', 'Send Message', '', '', NULL, NULL, NULL),
(20, 'address_word', '1', 'Address', '', '', NULL, NULL, NULL),
(21, 'Schedule_word', '1', 'Schedule', '', '', NULL, NULL, NULL),
(22, 'Schedule_text', '1', '24 Hours / 7 Days Open\r\n<br>\r\nOffice time: 10 AM - 5:30 PM', '', '', NULL, NULL, NULL),
(23, 'address_text', '1', '175 5th Ave, New York, NY 10010 United States', '', '', NULL, NULL, NULL),
(24, 'contact_email', '1', 'yourmail@gmail.com', '', '', NULL, NULL, NULL),
(25, 'contact_phone', '1', '0984537278623', '', '', NULL, NULL, NULL),
(26, 'Logo_footer', '1', 'logo.png', '1674531819logo.png.png', 'file', NULL, NULL, '2023-01-24 01:43:40'),
(27, 'footer_text', '1', 'Making the world a better place through constructing elegant hierarchies.', '', '', NULL, NULL, NULL),
(28, 'footer_copyright', '1', '© 2024 Olivx. Designed and Developed', '', '', NULL, NULL, '2023-01-24 01:59:48');

-- --------------------------------------------------------

--
-- بنية الجدول `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2023_01_24_113536_create_aboutusinfo_table', 0),
(2, '2023_01_24_113536_create_contactus_table', 0),
(3, '2023_01_24_113536_create_failed_jobs_table', 0),
(4, '2023_01_24_113536_create_generalinfo_table', 0),
(5, '2023_01_24_113536_create_model_has_permissions_table', 0),
(6, '2023_01_24_113536_create_model_has_roles_table', 0),
(7, '2023_01_24_113536_create_news_models_table', 0),
(8, '2023_01_24_113536_create_oauth_access_tokens_table', 0),
(9, '2023_01_24_113536_create_oauth_auth_codes_table', 0),
(10, '2023_01_24_113536_create_oauth_clients_table', 0),
(11, '2023_01_24_113536_create_oauth_personal_access_clients_table', 0),
(12, '2023_01_24_113536_create_oauth_refresh_tokens_table', 0),
(13, '2023_01_24_113536_create_password_resets_table', 0),
(14, '2023_01_24_113536_create_permissions_table', 0),
(15, '2023_01_24_113536_create_roles_table', 0),
(16, '2023_01_24_113536_create_role_has_permissions_table', 0),
(17, '2023_01_24_113536_create_services_table', 0),
(18, '2023_01_24_113536_create_sliders_table', 0),
(19, '2023_01_24_113536_create_users_table', 0),
(20, '2023_01_24_113537_add_foreign_keys_to_model_has_permissions_table', 0),
(21, '2023_01_24_113537_add_foreign_keys_to_model_has_roles_table', 0),
(22, '2023_01_24_113537_add_foreign_keys_to_role_has_permissions_table', 0);

-- --------------------------------------------------------

--
-- بنية الجدول `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 4),
(3, 'App\\Models\\User', 2),
(4, 'App\\Models\\User', 3);

-- --------------------------------------------------------

--
-- بنية الجدول `news_models`
--

CREATE TABLE `news_models` (
  `id` int(8) NOT NULL,
  `title` varchar(255) NOT NULL,
  `lang` int(11) DEFAULT 1,
  `desc_news` text DEFAULT NULL,
  `img_news` text DEFAULT NULL,
  `details_news` longtext DEFAULT NULL,
  `byname` text DEFAULT NULL,
  `active` int(1) DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `news_models`
--

INSERT INTO `news_models` (`id`, `title`, `lang`, `desc_news`, `img_news`, `details_news`, `byname`, `active`, `created_at`, `updated_at`) VALUES
(1, 'Make your team a Design driven company', 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard..', '16745134311.jpg.jpg', '<p><span style=\"color: rgb(109, 109, 109); font-family: Inter, sans-serif; font-size: 16px; background-color: rgb(225, 225, 225);\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard</span></p><p><span style=\"color: rgb(109, 109, 109); font-family: Inter, sans-serif; font-size: 16px; background-color: rgb(225, 225, 225);\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard</span></p><p><span style=\"color: rgb(109, 109, 109); font-family: Inter, sans-serif; font-size: 16px; background-color: rgb(225, 225, 225);\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard</span><span style=\"color: rgb(109, 109, 109); font-family: Inter, sans-serif; font-size: 16px; background-color: rgb(225, 225, 225);\"><br></span><span style=\"color: rgb(109, 109, 109); font-family: Inter, sans-serif; font-size: 16px; background-color: rgb(225, 225, 225);\"><br></span><br></p>', NULL, 1, '2023-01-23 20:37:11', '2023-01-23 20:37:11'),
(2, 'dsfakdasdfklasdj', 1, 'dkkkskkskskksk sdnfajh sdfjkha sdjkhf ksda >.....', '16745135812.jpg.jpg', '<p>fdsklafj sldkljf sdkjf safklsdjfkas DSFSD</p>', 'dksjjsjsjjsj', 1, '2023-01-23 20:39:42', '2023-01-23 20:55:17');

-- --------------------------------------------------------

--
-- بنية الجدول `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(2, 'manage_role', 'web', '2020-03-10 10:10:57', '2020-03-10 10:10:57'),
(3, 'manage_permission', 'web', '2020-03-10 10:11:09', '2020-03-10 10:11:09'),
(4, 'manage_user', 'web', '2020-03-10 10:11:41', '2020-03-10 10:11:41'),
(5, 'manage_sales', 'web', '2020-03-12 07:46:39', '2020-03-12 07:46:39'),
(6, 'manage_projects', 'web', '2020-03-12 07:46:54', '2020-03-12 07:46:54');

-- --------------------------------------------------------

--
-- بنية الجدول `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'web', '2020-03-10 09:40:47', '2020-03-10 09:40:47'),
(2, 'Admin', 'web', '2020-03-10 10:39:23', '2020-03-10 10:39:23'),
(3, 'Project Manager', 'web', '2020-03-12 10:11:50', '2020-03-12 10:11:50'),
(4, 'Sales Manager', 'web', '2020-03-12 10:12:07', '2020-03-12 10:12:07');

-- --------------------------------------------------------

--
-- بنية الجدول `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(4, 2),
(5, 2),
(5, 4),
(6, 2),
(6, 3);

-- --------------------------------------------------------

--
-- بنية الجدول `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lang` int(3) NOT NULL DEFAULT 1,
  `title` text DEFAULT NULL,
  `desc_service` longtext DEFAULT NULL,
  `img` longtext DEFAULT NULL,
  `icon` text DEFAULT NULL,
  `isavisable` int(5) DEFAULT 1,
  `type` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `services`
--

INSERT INTO `services` (`id`, `name`, `lang`, `title`, `desc_service`, `img`, `icon`, `isavisable`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Refreshing Design', 1, 'Refreshing Design', 'Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy\n                eirmod tempor ividunt labor dolore magna.', '1674521382about-img1.jpg.jpg', 'lni-capsule', 1, 0, '2023-01-23 17:35:28', '2023-01-23 23:14:03'),
(4, 'Solid Bootstrap', 1, 'Solid Bootstrap', 'Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy\r\n                eirmod tempor ividunt labor dolore magna.', '', 'lni-bootstrap', 1, 0, '2023-01-23 17:35:28', '2023-01-23 23:14:03'),
(5, '100+ Components', 1, '100+ Components', 'eirmod tempor ividunt labor dolore magnaeirmod tempor ividunt labor dolore magnaeirmod tempor ividunt labor dolore magna', NULL, 'lni-shortcode', 1, 0, '2023-01-24 10:44:27', '2023-01-24 10:44:27'),
(6, 'Speed Optimized', 1, 'Speed Optimized', 'Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy\r\n                eirmod tempor ividunt labor dolore magna.', NULL, 'lni-dashboard', 1, 0, '2023-01-24 10:44:27', '2023-01-24 10:44:27'),
(7, 'Fully Customizable', 1, 'Fully Customizable', 'Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy\r\n                eirmod tempor ividunt labor dolore magna.', NULL, 'lni-layers', 1, 0, '2023-01-24 10:46:03', '2023-01-24 10:46:03'),
(8, 'Regular Updates', 1, 'Regular Updates', 'Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy\r\n                eirmod tempor ividunt labor dolore magna.\r\n              ', NULL, 'lni-reload', 1, 0, '2023-01-24 10:46:03', '2023-01-24 10:46:03');

-- --------------------------------------------------------

--
-- بنية الجدول `sliders`
--

CREATE TABLE `sliders` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lang` int(3) NOT NULL DEFAULT 1,
  `title` text DEFAULT NULL,
  `desc_slide` longtext DEFAULT NULL,
  `img` longtext DEFAULT NULL,
  `icon` text DEFAULT NULL,
  `isavisable` int(5) DEFAULT 1,
  `type` int(11) DEFAULT 0,
  `urlvideo` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `sliders`
--

INSERT INTO `sliders` (`id`, `name`, `lang`, `title`, `desc_slide`, `img`, `icon`, `isavisable`, `type`, `urlvideo`, `created_at`, `updated_at`) VALUES
(2, 'Corporate & Business', 1, 'Corporate & Business Site Template by Ayro UI.', '              We are a digital agency that helps brands to achieve their\n              business outcomes. We see technology as a tool to create amazing\n              things.\n', '1674509728hero-image.jpg.jpg', NULL, 1, 0, 'https://www.youtube.com/watch?v=r44RKWyfcFw&fbclid=IwAR21beSJORalzmzokxDRcGfkZA1AtRTE__l5N4r09HcGS5Y6vOluyouM9EM', '2023-01-23 19:35:28', '2023-01-23 19:50:10');

-- --------------------------------------------------------

--
-- بنية الجدول `users`
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
-- إرجاع أو استيراد بيانات الجدول `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'admin@test.com', NULL, '$2y$10$uZDwEdgAzi3wD4n8oBYfruvBmZJqVV7sSasFRZzlz5Wkqs0EyqiDe', NULL, NULL, '2020-03-12 10:28:44'),
(2, 'Project Manager', 'pm@test.com', NULL, '$2y$10$rm0yp.fuqPZevIkxlActtuBpMuTHLGwPRYFaNlA5TToZZqx.i7Tra', NULL, '2020-03-12 10:18:59', '2020-03-12 10:18:59'),
(3, 'Sales Manager', 'sm@test.com', NULL, '$2y$10$40lQm5lnWgtElBwnko7ASuUr.Obu2CI.hPecZ8ZciGsYKkXw2Kf3.', NULL, '2020-03-12 10:20:15', '2020-03-12 10:20:15'),
(4, 'HR', 'hr@test.com', NULL, '$2y$10$sFgFRrOZS4mzhRlAHbDIie.Kz.G3YSIYynnmcljjxVzyl0gkMQT6a', NULL, '2020-03-12 10:25:25', '2020-03-12 10:25:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutusinfo`
--
ALTER TABLE `aboutusinfo`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `generalinfo_name_unique` (`name`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `generalinfo`
--
ALTER TABLE `generalinfo`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `generalinfo_name_unique` (`name`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `news_models`
--
ALTER TABLE `news_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

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
-- AUTO_INCREMENT for table `aboutusinfo`
--
ALTER TABLE `aboutusinfo`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `generalinfo`
--
ALTER TABLE `generalinfo`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `news_models`
--
ALTER TABLE `news_models`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- قيود الجداول المحفوظة
--

--
-- القيود للجدول `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- القيود للجدول `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- القيود للجدول `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
