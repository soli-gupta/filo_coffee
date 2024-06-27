-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 27, 2024 at 04:57 PM
-- Server version: 5.7.23-23
-- PHP Version: 8.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grapesmo_filo_coffee`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_modules`
--

CREATE TABLE `admin_modules` (
  `id` int(11) NOT NULL,
  `name` varchar(222) NOT NULL,
  `code` varchar(222) NOT NULL,
  `status` int(11) DEFAULT '1',
  `sorting` varchar(111) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `attributes`
--

CREATE TABLE `attributes` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `type` varchar(111) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `attributes_option`
--

CREATE TABLE `attributes_option` (
  `id` int(10) UNSIGNED NOT NULL,
  `attributes_id` int(11) NOT NULL,
  `name` text,
  `slug` varchar(222) DEFAULT NULL,
  `status` smallint(6) NOT NULL DEFAULT '2',
  `sorting` int(11) DEFAULT NULL,
  `value` text,
  `value2` longtext,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cms_banner`
--

CREATE TABLE `cms_banner` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `sub_text` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_path_mobile` text COLLATE utf8mb4_unicode_ci,
  `sorting` int(11) DEFAULT NULL,
  `type` varchar(111) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_url` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cms_banner`
--

INSERT INTO `cms_banner` (`id`, `title`, `sub_text`, `description`, `image_path`, `image_path_mobile`, `sorting`, `type`, `link_url`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Where Ideology and Elegance  Converge: Unveiling the Story of Filo', NULL, '<p>The ideology of class emanates from the opportunities presented by the objective perspective of beauty.\r\n                    This serves as our origin, our starting point. Over the years, various concepts have been introduced,\r\n                    originating from the creative musings of a select few who bestowed them upon the masses. How do we\r\n                    navigate this path? How do we embrace these ideas and visions? Herein lies the key.</p>\r\n                <p>In ancient times, the Syriacs engaged in the ritual of consuming coffee beneath the night sky. They\r\n                    would gather among companions of wisdom and understanding, sharing profound interactions and exchanging\r\n                    ideas. These stimulating moments were enhanced by the simplicity of time, as they savored the aromatic\r\n                    essence of coffee accompanied by Anatolian desserts, fit for the royalty of bygone eras. In the Levant,\r\n                    contemplation and sharing of thoughts would continue until inspiration bloomed.</p>\r\n                <p>We are<span class=\"accent\">&nbsp;Filo,</span> and this is our narrative.</p>', 'media/cmsimage/image_path/stroy_background-1716444954.webp', 'media/cmsimage/image_path_mobile/stroy_background-1716444955.webp', 1, '1', NULL, 1, '2024-05-23 06:15:57', '2024-05-28 12:45:04'),
(2, 'Filo', NULL, 'Our cafe is located at <a target=\"_blank\" href=\"https://maps.app.goo.gl/WRFXGnpPp4wDxVcJ8\">19 Bute Street,\r\n                            London, SW7 3EY</a>. Call us on <a href=\"tel:02030932025\">020 3093 2025</a> or mail us at <a class=\"underline-it\" href=\"mailto:hello@filocoffee.com\">hello@filocoffee.com</a> to reserve&nbsp;', NULL, NULL, 1, '2', NULL, 1, '2024-05-23 06:18:37', '2024-05-28 12:45:32'),
(3, 'Opening Hours', NULL, 'Monday-Friday 8am - 7pm<br>\r\n                            Saturday &amp; Sunday 9am - 7pm', NULL, NULL, 1, '3', NULL, 1, '2024-05-23 06:21:15', '2024-05-28 12:45:55'),
(4, 'The Tradition', NULL, NULL, 'media/cmsimage/image_path/traditonal-1716448834.webp', 'media/cmsimage/image_path_mobile/traditonal-1716448835.webp', 1, '4', NULL, 1, '2024-05-23 07:20:36', '2024-05-23 07:20:36');

-- --------------------------------------------------------

--
-- Table structure for table `cms_block`
--

CREATE TABLE `cms_block` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `value2` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cms_block`
--

INSERT INTO `cms_block` (`id`, `slug`, `value`, `value2`, `status`, `created_at`, `updated_at`) VALUES
(1, 'copyright-text', 'Copyright © 2023 Mahajan Imaging &amp; Labs. All Rights Reserved', NULL, 1, '2019-03-20 05:36:45', '2023-03-01 11:44:14'),
(15, 'top-offer-message', 'na', NULL, 2, '2020-08-17 20:41:48', '2023-05-01 15:22:47'),
(22, 'contact-number', '011-4118 3838', NULL, 1, '2022-01-11 14:01:25', '2023-04-24 12:28:30'),
(23, 'contact-email', 'info@mahajanimaging.com', 'info@mahajanimaging.com', 1, '2022-01-11 14:02:08', '2023-03-01 11:43:11'),
(24, 'whatsapp-number', '88828 97661', NULL, 1, '2023-03-01 11:27:10', '2023-03-01 11:43:02');

-- --------------------------------------------------------

--
-- Table structure for table `cms_page`
--

CREATE TABLE `cms_page` (
  `id` smallint(6) NOT NULL COMMENT 'Page ID',
  `page_title` varchar(255) DEFAULT NULL COMMENT 'Page Title',
  `status` int(11) NOT NULL,
  `meta_keywords` text COMMENT 'Page Meta Keywords',
  `meta_description` text COMMENT 'Page Meta Description',
  `slug` varchar(100) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL COMMENT 'Page Content Heading',
  `sub_text` text,
  `content1` longtext COMMENT 'Page Content',
  `layout` varchar(222) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL COMMENT 'Page Creation Time',
  `created_at` timestamp NULL DEFAULT NULL COMMENT 'Page Modification Time',
  `menu_sort_order` varchar(6) DEFAULT '0' COMMENT 'Page Sort Order',
  `parent_menu_page_id` int(11) NOT NULL DEFAULT '0',
  `menu_name` varchar(222) DEFAULT NULL,
  `menu_include` varchar(10) DEFAULT NULL,
  `content2` longtext,
  `content3` text,
  `content4` text,
  `image` text,
  `image_mobile` text,
  `meta_other` text,
  `image_alt` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='CMS Page Table';

--
-- Dumping data for table `cms_page`
--

INSERT INTO `cms_page` (`id`, `page_title`, `status`, `meta_keywords`, `meta_description`, `slug`, `name`, `sub_text`, `content1`, `layout`, `updated_at`, `created_at`, `menu_sort_order`, `parent_menu_page_id`, `menu_name`, `menu_include`, `content2`, `content3`, `content4`, `image`, `image_mobile`, `meta_other`, `image_alt`) VALUES
(1, 'Filo Coffee', 1, NULL, NULL, 'home', 'Filo Coffee', NULL, '<div class=\"mask-w\">\r\n            <h1>The Tradition</h1>\r\n        </div>\r\n        <div class=\"cont-wm\">\r\n            <h2>Where Ideology and Elegance Converge: Unveiling the Story of Filo</h2>\r\n            <p>The ideology of class emanates from the opportunities presented by the objective perspective of beauty.\r\n                This serves as our origin, our starting point. Over the years, various concepts have been introduced,\r\n                originating from the creative musings of a select few who bestowed them upon the masses. How do we\r\n                navigate this path? How do we embrace these ideas and visions? Herein lies the key.</p>\r\n        </div>', NULL, '2024-05-22 10:23:56', '2024-05-17 11:24:38', '0', 0, NULL, NULL, '<p><br></p>', NULL, NULL, 'media/cmspage/image/filo-vid-1716373435.mp4', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `module` varchar(111) DEFAULT NULL,
  `data_id` varchar(111) DEFAULT NULL,
  `data_name` text,
  `ip` varchar(111) DEFAULT NULL,
  `comment` longtext,
  `user_name` varchar(222) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `module`, `data_id`, `data_name`, `ip`, `comment`, `user_name`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'cms-page', '108', 'blog', '192.168.103.1', 'Record deleted', 'Admin', 6, '2023-08-07 16:53:10', '2023-08-07 16:53:10'),
(2, 'cms-page', '111', 'sitemap', '192.168.103.1', 'Record deleted', 'Admin', 6, '2023-08-07 16:53:22', '2023-08-07 16:53:22'),
(3, 'cms-page', '112', 'disclaimer', '192.168.103.1', 'Record deleted', 'Admin', 6, '2023-08-07 16:53:25', '2023-08-07 16:53:25'),
(4, 'cms-page', '113', 'book-test', '192.168.103.1', 'Record deleted', 'Admin', 6, '2023-08-07 16:53:28', '2023-08-07 16:53:28'),
(5, 'cms-page', '114', 'health-packages', '192.168.103.1', 'Record deleted', 'Admin', 6, '2023-08-07 16:53:30', '2023-08-07 16:53:30'),
(6, 'cms-page', '115', 'faq', '192.168.103.1', 'Record deleted', 'Admin', 6, '2023-08-07 16:53:35', '2023-08-07 16:53:35'),
(7, 'cms-page', '116', 'media-news', '192.168.103.1', 'Record deleted', 'Admin', 6, '2023-08-07 16:53:39', '2023-08-07 16:53:39'),
(8, 'cms-page', '117', 'careers', '192.168.103.1', 'Record deleted', 'Admin', 6, '2023-08-07 16:53:42', '2023-08-07 16:53:42'),
(9, 'cms-page', '121', 'terms-of-use', '::1', 'Record updated', 'Admin', 6, '2023-11-20 11:23:37', '2023-11-20 11:23:37'),
(10, 'cms-page', '43', 'about-us', '::1', 'Record updated', 'Admin', 6, '2023-11-20 12:05:32', '2023-11-20 12:05:32'),
(11, 'cms-page', '118', 'community', '::1', 'Record deleted', 'Admin', 6, '2023-11-20 12:13:40', '2023-11-20 12:13:40'),
(12, 'cms-page', '119', 'work', '::1', 'Record deleted', 'Admin', 6, '2023-11-20 12:13:44', '2023-11-20 12:13:44'),
(13, 'cms-page', '121', 'terms-of-use', '::1', 'Record deleted', 'Admin', 6, '2023-11-20 12:14:33', '2023-11-20 12:14:33'),
(14, 'cms-page', '110', 'cookies-policy', '::1', 'Record deleted', 'Admin', 6, '2023-11-20 12:14:42', '2023-11-20 12:14:42'),
(15, 'product', '1', 'rizwana', '::1', 'Record deleted', 'Admin', 6, '2023-11-20 12:18:35', '2023-11-20 12:18:35'),
(16, 'product', '3', 'rizwana-1691152752', '::1', 'Record deleted', 'Admin', 6, '2023-11-20 12:18:37', '2023-11-20 12:18:37'),
(17, 'product', '4', 'test-product', '::1', 'Record created', 'Admin', 6, '2023-11-20 12:19:40', '2023-11-20 12:19:40'),
(18, 'product', '4', 'test-product', '::1', 'Record updated', 'Admin', 6, '2023-11-20 12:19:44', '2023-11-20 12:19:44'),
(19, 'cms-page', '5', 'contact-us', '127.0.0.1', 'Record deleted', 'Admin', 6, '2024-05-17 11:22:48', '2024-05-17 11:22:48'),
(20, 'cms-page', '43', 'about-us', '127.0.0.1', 'Record deleted', 'Admin', 6, '2024-05-17 11:22:52', '2024-05-17 11:22:52'),
(21, 'cms-page', '109', 'terms-conditions', '127.0.0.1', 'Record deleted', 'Admin', 6, '2024-05-17 11:22:57', '2024-05-17 11:22:57'),
(22, 'cms-page', '58', 'thank-you', '127.0.0.1', 'Record deleted', 'Admin', 6, '2024-05-17 11:23:00', '2024-05-17 11:23:00'),
(23, 'cms-page', '60', 'privacy-policy', '127.0.0.1', 'Record deleted', 'Admin', 6, '2024-05-17 11:23:06', '2024-05-17 11:23:06'),
(24, 'cms-page', '1', 'home', '127.0.0.1', 'Record created', 'Admin', 6, '2024-05-17 11:24:38', '2024-05-17 11:24:38'),
(25, 'product', '1', 'hummus', '127.0.0.1', 'Record created', 'Admin', 6, '2024-05-17 12:54:30', '2024-05-17 12:54:30'),
(26, 'product', '1', 'hummus', '127.0.0.1', 'Record updated', 'Admin', 6, '2024-05-17 12:58:51', '2024-05-17 12:58:51'),
(27, 'cms-page', '1', 'home', '127.0.0.1', 'Record updated', 'Admin', 6, '2024-05-22 09:36:19', '2024-05-22 09:36:19'),
(28, 'cms-page', '1', 'home', '127.0.0.1', 'Record updated', 'Admin', 6, '2024-05-22 09:37:07', '2024-05-22 09:37:07'),
(29, 'cms-page', '1', 'home', '127.0.0.1', 'Record updated', 'Admin', 6, '2024-05-22 09:56:27', '2024-05-22 09:56:27'),
(30, 'cms-page', '1', 'home', '127.0.0.1', 'Record updated', 'Admin', 6, '2024-05-22 10:23:56', '2024-05-22 10:23:56'),
(31, 'product', '3', 'hummus-1716380403', '127.0.0.1', 'Record updated', 'Admin', 6, '2024-05-22 12:20:48', '2024-05-22 12:20:48'),
(32, 'product', '4', 'hummus-1716380405', '127.0.0.1', 'Record updated', 'Admin', 6, '2024-05-22 12:20:56', '2024-05-22 12:20:56'),
(33, 'product', '5', 'hummus-1716380407', '127.0.0.1', 'Record updated', 'Admin', 6, '2024-05-22 12:21:07', '2024-05-22 12:21:07'),
(34, 'product', '6', 'hummus-1716380410', '127.0.0.1', 'Record updated', 'Admin', 6, '2024-05-22 12:21:16', '2024-05-22 12:21:16'),
(35, 'product', '7', 'hummus-1716380412', '127.0.0.1', 'Record updated', 'Admin', 6, '2024-05-22 12:21:25', '2024-05-22 12:21:25'),
(36, 'product', '8', 'hummus-1716380415', '127.0.0.1', 'Record updated', 'Admin', 6, '2024-05-22 12:21:34', '2024-05-22 12:21:34'),
(37, 'product', '9', 'hummus-1716380415-1716380417', '127.0.0.1', 'Record updated', 'Admin', 6, '2024-05-22 12:21:44', '2024-05-22 12:21:44'),
(38, 'product', '10', 'hummus-1716380415-1716380417-1716380419', '127.0.0.1', 'Record updated', 'Admin', 6, '2024-05-22 12:21:53', '2024-05-22 12:21:53'),
(39, 'product', '11', 'hummus-1716380415-1716380417-1716380419-1716380421', '127.0.0.1', 'Record updated', 'Admin', 6, '2024-05-22 12:22:05', '2024-05-22 12:22:05'),
(40, 'product', '12', 'hummus-1716380415-1716380417-1716380419-1716380421-1716380426', '127.0.0.1', 'Record updated', 'Admin', 6, '2024-05-22 12:22:11', '2024-05-22 12:22:11'),
(41, 'product', '12', 'hummus-1716380415-1716380417-1716380419-1716380421-1716380426', '127.0.0.1', 'Record updated', 'Admin', 6, '2024-05-22 12:22:30', '2024-05-22 12:22:30'),
(42, 'product', '1', 'hummus', '127.0.0.1', 'Record updated', 'Admin', 6, '2024-05-23 07:24:39', '2024-05-23 07:24:39'),
(43, 'product', '2', 'salad', '127.0.0.1', 'Record updated', 'Admin', 6, '2024-05-23 07:25:05', '2024-05-23 07:25:05'),
(44, 'product', '3', 'mutabal-v', '127.0.0.1', 'Record updated', 'Admin', 6, '2024-05-23 07:25:35', '2024-05-23 07:25:35'),
(45, 'product', '4', 'tabula', '127.0.0.1', 'Record updated', 'Admin', 6, '2024-05-23 07:26:05', '2024-05-23 07:26:05'),
(46, 'product', '4', 'tabula', '127.0.0.1', 'Record updated', 'Admin', 6, '2024-05-23 07:26:22', '2024-05-23 07:26:22'),
(47, 'product', '1', 'hummus', '127.0.0.1', 'Record updated', 'Admin', 6, '2024-05-23 07:26:40', '2024-05-23 07:26:40'),
(48, 'product', '2', 'salad', '127.0.0.1', 'Record updated', 'Admin', 6, '2024-05-23 07:28:27', '2024-05-23 07:28:27'),
(49, 'product', '1', 'hummus', '127.0.0.1', 'Record updated', 'Admin', 6, '2024-05-23 07:29:30', '2024-05-23 07:29:30'),
(50, 'product', '1', 'hummus', '127.0.0.1', 'Record updated', 'Admin', 6, '2024-05-23 07:29:57', '2024-05-23 07:29:57'),
(51, 'product', '1', 'hummus', '127.0.0.1', 'Record updated', 'Admin', 6, '2024-05-23 07:30:29', '2024-05-23 07:30:29'),
(52, 'product', '1', 'hummus', '127.0.0.1', 'Record updated', 'Admin', 6, '2024-05-23 07:30:50', '2024-05-23 07:30:50'),
(53, 'product', '2', 'salad', '127.0.0.1', 'Record updated', 'Admin', 6, '2024-05-23 07:30:58', '2024-05-23 07:30:58'),
(54, 'product', '3', 'mutabal-v', '127.0.0.1', 'Record updated', 'Admin', 6, '2024-05-23 07:31:21', '2024-05-23 07:31:21'),
(55, 'product', '2', 'salad', '127.0.0.1', 'Record updated', 'Admin', 6, '2024-05-23 07:31:29', '2024-05-23 07:31:29'),
(56, 'product', '1', 'hummus', '127.0.0.1', 'Record updated', 'Admin', 6, '2024-05-23 07:31:36', '2024-05-23 07:31:36'),
(57, 'product', '4', 'tabula', '127.0.0.1', 'Record updated', 'Admin', 6, '2024-05-23 07:32:07', '2024-05-23 07:32:07'),
(58, 'product', '5', 'falafel-v', '127.0.0.1', 'Record updated', 'Admin', 6, '2024-05-23 07:34:41', '2024-05-23 07:34:41'),
(59, 'product', '6', 'spinach-kibbeh', '127.0.0.1', 'Record updated', 'Admin', 6, '2024-05-23 07:35:15', '2024-05-23 07:35:15'),
(60, 'product', '7', 'batata-hara-v', '127.0.0.1', 'Record updated', 'Admin', 6, '2024-05-23 07:43:52', '2024-05-23 07:43:52'),
(61, 'product', '8', 'hummus-1716380415', '127.0.0.1', 'Record updated', 'Admin', 6, '2024-05-23 07:44:17', '2024-05-23 07:44:17'),
(62, 'product', '7', 'batata-hara-v', '127.0.0.1', 'Record updated', 'Admin', 6, '2024-05-23 07:44:54', '2024-05-23 07:44:54'),
(63, 'product', '8', 'selection-of-fatayer', '127.0.0.1', 'Record updated', 'Admin', 6, '2024-05-23 07:45:11', '2024-05-23 07:45:11'),
(64, 'product', '7', 'batata-hara-v', '127.0.0.1', 'Record updated', 'Admin', 6, '2024-05-23 07:45:26', '2024-05-23 07:45:26'),
(65, 'product', '9', 'strained-yogurt-olive-oil-pomegranate-seeds-cilantro-zaatar', '127.0.0.1', 'Record updated', 'Admin', 6, '2024-05-23 07:46:07', '2024-05-23 07:46:07'),
(66, 'product', '10', 'mincemeat-kibbeh', '127.0.0.1', 'Record updated', 'Admin', 6, '2024-05-23 07:48:33', '2024-05-23 07:48:33'),
(67, 'product', '11', 'servers-up-to-2-persons', '127.0.0.1', 'Record updated', 'Admin', 6, '2024-05-23 08:14:00', '2024-05-23 08:14:00'),
(68, 'product', '12', 'filos-chicken-sheesh-special-wrap', '127.0.0.1', 'Record updated', 'Admin', 6, '2024-05-23 08:16:10', '2024-05-23 08:16:10'),
(69, 'product', '13', 'lamb-kofta', '127.0.0.1', 'Record created', 'Admin', 6, '2024-05-23 08:18:04', '2024-05-23 08:18:04'),
(70, 'product', '12', 'filos-chicken-sheesh-special-wrap', '127.0.0.1', 'Record updated', 'Admin', 6, '2024-05-23 13:23:41', '2024-05-23 13:23:41'),
(71, 'product', '8', 'selection-of-fatayer', '127.0.0.1', 'Record updated', 'Admin', 6, '2024-05-23 13:23:56', '2024-05-23 13:23:56'),
(72, 'product', '14', 'filos-special-wrap', '110.172.156.178', 'Record created', 'Admin', 6, '2024-05-31 12:36:43', '2024-05-31 12:36:43'),
(73, 'product', '15', 'chicken-shawarma', '110.172.156.184', 'Record updated', 'Admin', 6, '2024-05-31 12:38:04', '2024-05-31 12:38:04'),
(74, 'product', '16', 'falafel-wrap', '110.172.156.184', 'Record created', 'Admin', 6, '2024-05-31 12:39:14', '2024-05-31 12:39:14'),
(75, 'product', '17', 'filos-special-wrap-1717159560', '110.172.156.184', 'Record updated', 'Admin', 6, '2024-05-31 12:48:44', '2024-05-31 12:48:44'),
(76, 'product', '17', 'filos-special-wrap', '110.172.156.184', 'Record updated', 'Admin', 6, '2024-05-31 12:48:58', '2024-05-31 12:48:58'),
(77, 'product', '18', 'pesto-mozzarella-ciabatta', '110.172.156.184', 'Record created', 'Admin', 6, '2024-05-31 12:52:21', '2024-05-31 12:52:21'),
(78, 'product', '19', 'chicken-shawarma', '110.172.156.184', 'Record created', 'Admin', 6, '2024-05-31 12:52:44', '2024-05-31 12:52:44'),
(79, 'product', '20', 'tuna-melt', '110.172.156.184', 'Record created', 'Admin', 6, '2024-05-31 12:53:09', '2024-05-31 12:53:09'),
(80, 'product', '21', 'plain-croissant', '110.172.156.184', 'Record created', 'Admin', 6, '2024-05-31 12:54:23', '2024-05-31 12:54:23'),
(81, 'product', '22', 'twice-baked-pistachio-raspberry-croissant', '110.172.156.184', 'Record created', 'Admin', 6, '2024-05-31 12:54:59', '2024-05-31 12:54:59'),
(82, 'product', '23', 'twice-baked-almond-croissant', '110.172.156.186', 'Record created', 'Admin', 6, '2024-05-31 12:55:27', '2024-05-31 12:55:27'),
(83, 'product', '24', 'tiramisu-danish', '110.172.156.184', 'Record created', 'Admin', 6, '2024-05-31 12:56:08', '2024-05-31 12:56:08'),
(84, 'product', '25', 'baklava', '110.172.156.184', 'Record created', 'Admin', 6, '2024-05-31 12:56:34', '2024-05-31 12:56:34'),
(85, 'product', '26', 'sticky-cinnamon-bun', '110.172.156.184', 'Record created', 'Admin', 6, '2024-05-31 12:57:05', '2024-05-31 12:57:05'),
(86, 'product', '27', 'mushroom-truffle-danish', '110.172.156.184', 'Record created', 'Admin', 6, '2024-05-31 12:57:49', '2024-05-31 12:57:49'),
(87, 'product', '28', 'zaatar-gruyere-knot', '110.172.156.184', 'Record created', 'Admin', 6, '2024-05-31 12:58:14', '2024-05-31 12:58:14'),
(88, 'product', '29', 'cheese-croissant', '110.172.156.184', 'Record created', 'Admin', 6, '2024-05-31 12:58:39', '2024-05-31 12:58:39'),
(89, 'product', '30', 'croque-monsieur', '110.172.156.181', 'Record created', 'Admin', 6, '2024-05-31 12:59:05', '2024-05-31 12:59:05'),
(90, 'product', '31', 'cappuccino', '110.172.156.184', 'Record created', 'Admin', 6, '2024-05-31 12:59:51', '2024-05-31 12:59:51'),
(91, 'product', '32', 'espresso', '110.172.156.184', 'Record created', 'Admin', 6, '2024-05-31 13:00:28', '2024-05-31 13:00:28'),
(92, 'product', '33', 'double-espresso', '110.172.156.184', 'Record created', 'Admin', 6, '2024-05-31 13:00:44', '2024-05-31 13:00:44'),
(93, 'product', '34', 'macchiato', '110.172.156.184', 'Record created', 'Admin', 6, '2024-05-31 13:01:04', '2024-05-31 13:01:04'),
(94, 'product', '35', 'mocha', '110.172.156.184', 'Record created', 'Admin', 6, '2024-05-31 13:01:18', '2024-05-31 13:01:18'),
(95, 'product', '36', 'latte', '110.172.156.184', 'Record created', 'Admin', 6, '2024-05-31 13:01:36', '2024-05-31 13:01:36'),
(96, 'product', '37', 'flat-white', '110.172.156.184', 'Record created', 'Admin', 6, '2024-05-31 13:01:52', '2024-05-31 13:01:52'),
(97, 'product', '38', 'spanish-pistachio-latte', '110.172.156.184', 'Record created', 'Admin', 6, '2024-05-31 13:02:53', '2024-05-31 13:02:53'),
(98, 'product', '39', 'spanish-caramel-latte', '110.172.156.184', 'Record created', 'Admin', 6, '2024-05-31 13:03:10', '2024-05-31 13:03:10'),
(99, 'product', '40', 'spanish-biscoff-latte', '110.172.156.184', 'Record created', 'Admin', 6, '2024-05-31 13:03:27', '2024-05-31 13:03:27'),
(100, 'product', '41', 'matcha-latte', '110.172.156.184', 'Record created', 'Admin', 6, '2024-05-31 13:03:51', '2024-05-31 13:03:51'),
(101, 'product', '42', 'chai-latte', '110.172.156.184', 'Record created', 'Admin', 6, '2024-05-31 13:04:09', '2024-05-31 13:04:09'),
(102, 'product', '43', 'turmeric-latte', '110.172.156.184', 'Record created', 'Admin', 6, '2024-05-31 13:04:32', '2024-05-31 13:04:32'),
(103, 'product', '44', 'iced-coffees', '110.172.156.184', 'Record created', 'Admin', 6, '2024-05-31 13:04:57', '2024-05-31 13:04:57'),
(104, 'product', '45', 'hot-chocolate', '110.172.156.184', 'Record created', 'Admin', 6, '2024-05-31 13:05:17', '2024-05-31 13:05:17'),
(105, 'product', '46', 'tea-selection', '110.172.156.184', 'Record created', 'Admin', 6, '2024-05-31 13:06:35', '2024-05-31 13:06:35'),
(106, 'product', '47', 'matcha', '110.172.156.187', 'Record created', 'Admin', 6, '2024-05-31 13:07:51', '2024-05-31 13:07:51'),
(107, 'product', '48', 'karak', '110.172.156.184', 'Record created', 'Admin', 6, '2024-05-31 13:08:14', '2024-05-31 13:08:14'),
(108, 'product', '49', 'chai', '110.172.156.184', 'Record created', 'Admin', 6, '2024-05-31 13:08:34', '2024-05-31 13:08:34'),
(109, 'product', '50', 'water', '110.172.156.184', 'Record created', 'Admin', 6, '2024-05-31 13:10:32', '2024-05-31 13:10:32'),
(110, 'product', '51', 'canned', '110.172.156.184', 'Record created', 'Admin', 6, '2024-05-31 13:10:55', '2024-05-31 13:10:55'),
(111, 'product', '52', 'bottled', '110.172.156.184', 'Record created', 'Admin', 6, '2024-05-31 13:11:18', '2024-05-31 13:11:18'),
(112, 'product', '53', 'organic-red', '110.172.156.184', 'Record created', 'Admin', 6, '2024-05-31 13:12:01', '2024-05-31 13:12:01'),
(113, 'product', '54', 'passion-storm', '110.172.156.184', 'Record created', 'Admin', 6, '2024-05-31 13:12:28', '2024-05-31 13:12:28'),
(114, 'product', '55', 'acai-kick', '110.172.156.184', 'Record created', 'Admin', 6, '2024-05-31 13:12:52', '2024-05-31 13:12:52'),
(115, 'product', '56', 'mango-dream', '110.172.156.184', 'Record created', 'Admin', 6, '2024-05-31 13:13:15', '2024-05-31 13:13:15'),
(116, 'product', '57', 'green-reviver', '110.172.156.184', 'Record created', 'Admin', 6, '2024-05-31 13:13:39', '2024-05-31 13:13:39'),
(117, 'product', '58', 'raspberry-heaven', '110.172.156.184', 'Record created', 'Admin', 6, '2024-05-31 13:14:03', '2024-05-31 13:14:03'),
(118, 'product', '12', 'filos-chicken-sheesh-special-wrap', '110.172.156.184', 'Record updated', 'Admin', 6, '2024-06-03 10:52:18', '2024-06-03 10:52:18'),
(119, 'product', '49', 'chai', '110.172.156.182', 'Record updated', 'Admin', 6, '2024-06-03 10:55:04', '2024-06-03 10:55:04'),
(120, 'product', '12', 'filos-chicken-sheesh-special-wrap', '110.172.156.184', 'Record updated', 'Admin', 6, '2024-06-03 10:55:33', '2024-06-03 10:55:33'),
(121, 'product', '20', 'tuna-melt', '110.172.156.184', 'Record updated', 'Admin', 6, '2024-06-03 10:58:09', '2024-06-03 10:58:09'),
(122, 'product', '19', 'chicken-shawarma', '110.172.156.184', 'Record updated', 'Admin', 6, '2024-06-03 10:58:42', '2024-06-03 10:58:42'),
(123, 'product', '18', 'pesto-mozzarella-ciabatta', '110.172.156.181', 'Record updated', 'Admin', 6, '2024-06-03 10:59:19', '2024-06-03 10:59:19'),
(124, 'product', '17', 'filos-special-wrap', '110.172.156.184', 'Record updated', 'Admin', 6, '2024-06-03 10:59:30', '2024-06-03 10:59:30'),
(125, 'product', '16', 'falafel-wrap', '110.172.156.184', 'Record updated', 'Admin', 6, '2024-06-03 10:59:39', '2024-06-03 10:59:39'),
(126, 'product', '15', 'chicken-shawarma', '110.172.156.184', 'Record updated', 'Admin', 6, '2024-06-03 11:00:21', '2024-06-03 11:00:21'),
(127, 'product', '13', 'lamb-kofta', '110.172.156.184', 'Record updated', 'Admin', 6, '2024-06-03 11:01:29', '2024-06-03 11:01:29'),
(128, 'product', '14', 'filos-special-wrap', '110.172.156.184', 'Record updated', 'Admin', 6, '2024-06-03 11:01:56', '2024-06-03 11:01:56'),
(129, 'product', '12', 'filos-chicken-sheesh-special-wrap', '110.172.156.184', 'Record updated', 'Admin', 6, '2024-06-03 11:02:23', '2024-06-03 11:02:23'),
(130, 'product', '21', 'plain-croissant', '110.172.156.184', 'Record updated', 'Admin', 6, '2024-06-03 11:03:34', '2024-06-03 11:03:34'),
(131, 'product', '22', 'twice-baked-pistachio-raspberry-croissant', '110.172.156.184', 'Record updated', 'Admin', 6, '2024-06-03 11:03:41', '2024-06-03 11:03:41'),
(132, 'product', '23', 'twice-baked-almond-croissant', '110.172.156.184', 'Record updated', 'Admin', 6, '2024-06-03 11:03:49', '2024-06-03 11:03:49'),
(133, 'product', '24', 'tiramisu-danish', '110.172.156.184', 'Record updated', 'Admin', 6, '2024-06-03 11:04:06', '2024-06-03 11:04:06'),
(134, 'product', '25', 'baklava', '110.172.156.184', 'Record updated', 'Admin', 6, '2024-06-03 11:04:25', '2024-06-03 11:04:25'),
(135, 'product', '26', 'sticky-cinnamon-bun', '110.172.156.184', 'Record updated', 'Admin', 6, '2024-06-03 11:04:44', '2024-06-03 11:04:44'),
(136, 'product', '27', 'mushroom-truffle-danish', '110.172.156.184', 'Record updated', 'Admin', 6, '2024-06-03 11:05:22', '2024-06-03 11:05:22'),
(137, 'product', '28', 'zaatar-gruyere-knot', '110.172.156.184', 'Record updated', 'Admin', 6, '2024-06-03 11:05:30', '2024-06-03 11:05:30'),
(138, 'product', '29', 'cheese-croissant', '110.172.156.184', 'Record updated', 'Admin', 6, '2024-06-03 11:05:38', '2024-06-03 11:05:38'),
(139, 'product', '30', 'croque-monsieur', '110.172.156.184', 'Record updated', 'Admin', 6, '2024-06-03 11:05:44', '2024-06-03 11:05:44'),
(140, 'product', '31', 'cappuccino', '110.172.156.184', 'Record updated', 'Admin', 6, '2024-06-03 11:42:06', '2024-06-03 11:42:06'),
(141, 'product', '58', 'raspberry-heaven', '110.172.156.183', 'Record updated', 'Admin', 6, '2024-06-03 11:48:33', '2024-06-03 11:48:33'),
(142, 'product', '57', 'green-reviver', '110.172.156.184', 'Record updated', 'Admin', 6, '2024-06-03 11:48:51', '2024-06-03 11:48:51'),
(143, 'product', '56', 'mango-dream', '110.172.156.184', 'Record updated', 'Admin', 6, '2024-06-03 11:49:04', '2024-06-03 11:49:04'),
(144, 'product', '55', 'acai-kick', '110.172.156.184', 'Record updated', 'Admin', 6, '2024-06-03 11:49:17', '2024-06-03 11:49:17'),
(145, 'product', '54', 'passion-storm', '110.172.156.184', 'Record updated', 'Admin', 6, '2024-06-03 11:49:29', '2024-06-03 11:49:29'),
(146, 'product', '53', 'organic-red', '110.172.156.184', 'Record updated', 'Admin', 6, '2024-06-03 11:49:48', '2024-06-03 11:49:48'),
(147, 'product', '52', 'bottled', '110.172.156.184', 'Record updated', 'Admin', 6, '2024-06-03 11:50:46', '2024-06-03 11:50:46'),
(148, 'product', '51', 'canned', '110.172.156.184', 'Record updated', 'Admin', 6, '2024-06-03 11:51:00', '2024-06-03 11:51:00'),
(149, 'product', '50', 'water', '110.172.156.184', 'Record updated', 'Admin', 6, '2024-06-03 11:51:15', '2024-06-03 11:51:15'),
(150, 'product', '49', 'chai', '110.172.156.184', 'Record updated', 'Admin', 6, '2024-06-03 11:51:27', '2024-06-03 11:51:27'),
(151, 'product', '48', 'karak', '110.172.156.184', 'Record updated', 'Admin', 6, '2024-06-03 11:51:48', '2024-06-03 11:51:48'),
(152, 'product', '47', 'matcha', '110.172.156.184', 'Record updated', 'Admin', 6, '2024-06-03 11:52:02', '2024-06-03 11:52:02'),
(153, 'product', '45', 'hot-chocolate', '110.172.156.184', 'Record updated', 'Admin', 6, '2024-06-03 11:52:20', '2024-06-03 11:52:20'),
(154, 'product', '44', 'iced-coffees', '110.172.156.184', 'Record updated', 'Admin', 6, '2024-06-03 11:52:34', '2024-06-03 11:52:34'),
(155, 'product', '43', 'turmeric-latte', '110.172.156.184', 'Record updated', 'Admin', 6, '2024-06-03 11:52:54', '2024-06-03 11:52:54'),
(156, 'product', '42', 'chai-latte', '110.172.156.184', 'Record updated', 'Admin', 6, '2024-06-03 11:53:10', '2024-06-03 11:53:10'),
(157, 'product', '41', 'matcha-latte', '110.172.156.184', 'Record updated', 'Admin', 6, '2024-06-03 11:53:27', '2024-06-03 11:53:27'),
(158, 'product', '40', 'spanish-biscoff-latte', '110.172.156.184', 'Record updated', 'Admin', 6, '2024-06-03 11:53:51', '2024-06-03 11:53:51'),
(159, 'product', '39', 'spanish-caramel-latte', '110.172.156.184', 'Record updated', 'Admin', 6, '2024-06-03 11:54:22', '2024-06-03 11:54:22'),
(160, 'product', '38', 'spanish-pistachio-latte', '110.172.156.184', 'Record updated', 'Admin', 6, '2024-06-03 11:54:44', '2024-06-03 11:54:44'),
(161, 'product', '37', 'flat-white', '110.172.156.184', 'Record updated', 'Admin', 6, '2024-06-03 11:56:19', '2024-06-03 11:56:19'),
(162, 'product', '36', 'latte', '110.172.156.184', 'Record updated', 'Admin', 6, '2024-06-03 11:56:25', '2024-06-03 11:56:25'),
(163, 'product', '35', 'mocha', '110.172.156.184', 'Record updated', 'Admin', 6, '2024-06-03 11:56:29', '2024-06-03 11:56:29'),
(164, 'product', '34', 'macchiato', '110.172.156.184', 'Record updated', 'Admin', 6, '2024-06-03 11:56:33', '2024-06-03 11:56:33'),
(165, 'product', '33', 'double-espresso', '110.172.156.184', 'Record updated', 'Admin', 6, '2024-06-03 11:56:37', '2024-06-03 11:56:37'),
(166, 'product', '32', 'espresso', '110.172.156.184', 'Record updated', 'Admin', 6, '2024-06-03 11:56:41', '2024-06-03 11:56:41'),
(167, 'product', '31', 'cappuccino', '110.172.156.179', 'Record updated', 'Admin', 6, '2024-06-03 11:56:47', '2024-06-03 11:56:47'),
(168, 'product', '1', 'hummus', '103.206.223.148', 'Record updated', 'Admin', 6, '2024-06-03 12:11:39', '2024-06-03 12:11:39'),
(169, 'product', '1', 'hummus', '103.206.223.148', 'Record updated', 'Admin', 6, '2024-06-03 12:12:34', '2024-06-03 12:12:34'),
(170, 'product', '1', 'hummus', '103.206.223.148', 'Record updated', 'Admin', 6, '2024-06-03 12:12:56', '2024-06-03 12:12:56'),
(171, 'product', '8', 'selection-of-fatayer', '103.206.223.148', 'Record updated', 'Admin', 6, '2024-06-03 12:18:53', '2024-06-03 12:18:53'),
(172, 'product', '9', 'strained-yogurt-olive-oil-pomegranate-seeds-cilantro-zaatar', '103.206.223.148', 'Record updated', 'Admin', 6, '2024-06-03 12:21:44', '2024-06-03 12:21:44'),
(173, 'product', '7', 'batata-hara-v', '103.206.223.148', 'Record updated', 'Admin', 6, '2024-06-03 12:22:09', '2024-06-03 12:22:09'),
(174, 'product', '9', 'waraq-inab-v', '103.206.223.148', 'Record updated', 'Admin', 6, '2024-06-03 12:23:54', '2024-06-03 12:23:54'),
(175, 'product', '2', 'salad', '103.206.223.148', 'Record updated', 'Admin', 6, '2024-06-03 12:25:22', '2024-06-03 12:25:22'),
(176, 'product', '17', 'filos-special-wrap', '103.206.223.148', 'Record updated', 'Admin', 6, '2024-06-03 12:34:49', '2024-06-03 12:34:49'),
(177, 'product', '17', 'filos-special-wrap', '103.206.223.148', 'Record updated', 'Admin', 6, '2024-06-03 12:35:13', '2024-06-03 12:35:13'),
(178, 'product', '14', 'filos-special-wrap', '103.206.223.148', 'Record updated', 'Admin', 6, '2024-06-03 12:35:31', '2024-06-03 12:35:31'),
(179, 'product', '13', 'lamb-kofta', '103.206.223.148', 'Record updated', 'Admin', 6, '2024-06-03 12:37:22', '2024-06-03 12:37:22'),
(180, 'product', '16', 'falafel-wrap', '103.206.223.148', 'Record updated', 'Admin', 6, '2024-06-03 12:37:46', '2024-06-03 12:37:46'),
(181, 'product', '14', 'filos-special-wrap', '103.206.223.148', 'Record updated', 'Admin', 6, '2024-06-03 12:38:49', '2024-06-03 12:38:49'),
(182, 'product', '17', 'filos-special-wrap', '103.206.223.148', 'Record updated', 'Admin', 6, '2024-06-03 12:39:20', '2024-06-03 12:39:20'),
(183, 'product', '14', 'filos-special-wrap', '103.206.223.148', 'Record updated', 'Admin', 6, '2024-06-03 12:40:08', '2024-06-03 12:40:08'),
(184, 'product', '15', 'chicken-shawarma', '103.206.223.148', 'Record updated', 'Admin', 6, '2024-06-03 12:41:54', '2024-06-03 12:41:54'),
(185, 'product', '13', 'lamb-kofta', '103.206.223.148', 'Record updated', 'Admin', 6, '2024-06-03 12:42:30', '2024-06-03 12:42:30'),
(186, 'product', '12', 'filos-chicken-sheesh-special-wrap', '103.206.223.148', 'Record updated', 'Admin', 6, '2024-06-03 12:44:39', '2024-06-03 12:44:39'),
(187, 'product', '13', 'lamb-kofta', '103.206.223.148', 'Record updated', 'Admin', 6, '2024-06-03 12:45:51', '2024-06-03 12:45:51'),
(188, 'product', '22', 'twice-baked-pistachio-raspberry-croissant', '103.206.223.148', 'Record updated', 'Admin', 6, '2024-06-03 12:49:22', '2024-06-03 12:49:22'),
(189, 'product', '24', 'tiramisu-danish', '103.206.223.148', 'Record updated', 'Admin', 6, '2024-06-03 12:50:18', '2024-06-03 12:50:18'),
(190, 'product', '25', 'baklava', '103.206.223.148', 'Record updated', 'Admin', 6, '2024-06-03 12:50:34', '2024-06-03 12:50:34'),
(191, 'product', '46', 'tea-selection', '103.206.223.148', 'Record updated', 'Admin', 6, '2024-06-03 12:56:06', '2024-06-03 12:56:06'),
(192, 'product', '47', 'matcha', '103.206.223.148', 'Record updated', 'Admin', 6, '2024-06-03 12:56:34', '2024-06-03 12:56:34'),
(193, 'product', '48', 'karak', '103.206.223.148', 'Record updated', 'Admin', 6, '2024-06-03 12:57:06', '2024-06-03 12:57:06'),
(194, 'product', '47', 'matcha', '103.206.223.148', 'Record updated', 'Admin', 6, '2024-06-03 12:57:45', '2024-06-03 12:57:45');

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `message` text,
  `subject` text,
  `status` varchar(10) DEFAULT 'Pending',
  `page_type` varchar(100) DEFAULT NULL,
  `item_type` varchar(100) DEFAULT NULL,
  `address` text,
  `city` varchar(100) DEFAULT NULL,
  `pincode` varchar(6) DEFAULT NULL,
  `product` varchar(100) DEFAULT NULL,
  `centre` varchar(200) DEFAULT NULL,
  `gender` varchar(111) DEFAULT NULL,
  `age` varchar(111) DEFAULT NULL,
  `upload_file` text,
  `ip` varchar(111) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`id`, `name`, `email`, `mobile`, `message`, `subject`, `status`, `page_type`, `item_type`, `address`, `city`, `pincode`, `product`, `centre`, `gender`, `age`, `upload_file`, `ip`, `created_at`, `updated_at`) VALUES
(2, 'Felix Stevens', 'meme@mailinator.com', '8860221289', 'Sunt et quis asperna', NULL, 'Pending', 'Contact us', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '::1', '2023-11-20 17:51:45', '2023-11-20 17:51:45');

-- --------------------------------------------------------

--
-- Table structure for table `media_gallery`
--

CREATE TABLE `media_gallery` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `image_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sorting` int(11) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media_gallery`
--

INSERT INTO `media_gallery` (`id`, `title`, `image_path`, `sorting`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Gallery-1', 'media/mediagallery/image_path/gallery-1-1716447393.webp', NULL, 1, '2024-05-23 06:56:34', '2024-05-23 06:56:34'),
(2, 'Gallery-2', 'media/mediagallery/image_path/gallery-2-1716447405.webp', NULL, 1, '2024-05-23 06:56:45', '2024-05-23 06:56:45'),
(3, 'Gallery-3', 'media/mediagallery/image_path/gallery-3-1716447415.webp', NULL, 1, '2024-05-23 06:56:56', '2024-05-23 06:56:56'),
(4, 'Gallery-4', 'media/mediagallery/image_path/g-1716447426.webp', NULL, 1, '2024-05-23 06:57:07', '2024-05-23 06:57:07'),
(5, 'Gallery-5', 'media/mediagallery/image_path/gallery-4-1716447439.webp', NULL, 1, '2024-05-23 06:57:22', '2024-05-23 06:57:22'),
(6, 'Gallery-6', 'media/mediagallery/image_path/gallery-5-1716447471.webp', NULL, 2, '2024-05-23 06:57:25', '2024-05-23 07:04:08'),
(7, 'Logo', 'media/mediagallery/image_path/img_6720-1716537237.webp', NULL, 2, '2024-05-24 07:17:57', '2024-05-24 08:02:15'),
(8, 'Gallery-6', 'media/mediagallery/image_path/filo5-1717396476.webp', NULL, 1, '2024-06-03 06:34:36', '2024-06-03 06:38:34'),
(9, 'Gallery-7', 'media/mediagallery/image_path/filo7-1717396490.webp', NULL, 1, '2024-06-03 06:34:50', '2024-06-03 06:34:50'),
(10, 'Gallery-8', 'media/mediagallery/image_path/filo8-1717396495.webp', NULL, 1, '2024-06-03 06:34:55', '2024-06-03 06:34:55'),
(11, 'Gallery-9', 'media/mediagallery/image_path/filo9-1717396500.webp', NULL, 1, '2024-06-03 06:35:01', '2024-06-03 06:35:01'),
(12, 'Gallery-10', 'media/mediagallery/image_path/filo10-1717396507.webp', NULL, 1, '2024-06-03 06:35:07', '2024-06-03 06:35:07'),
(13, 'Gallery-11', 'media/mediagallery/image_path/filo11-1717396514.webp', NULL, 1, '2024-06-03 06:35:14', '2024-06-03 06:35:14'),
(14, 'Gallery-12', 'media/mediagallery/image_path/filo12-1717396522.webp', NULL, 1, '2024-06-03 06:35:23', '2024-06-03 06:35:23');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` text COLLATE utf8mb4_unicode_ci,
  `sub_cate_id` int(11) DEFAULT NULL,
  `sorting` int(11) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `status` tinyint(4) DEFAULT '1',
  `short_description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `slug`, `name`, `category_id`, `sub_cate_id`, `sorting`, `price`, `status`, `short_description`, `created_at`, `updated_at`) VALUES
(1, 'hummus', 'HUMMUS (V)', '1', NULL, NULL, 6.5, 1, 'Chickpeas, tahini, olive oil & lemon juice', '2024-05-17 12:54:30', '2024-06-03 12:12:56'),
(2, 'salad', 'Salad', '1', NULL, NULL, 6.5, 2, 'Lettuce, cucumber, tomato & pomegranate', '2024-05-22 12:20:01', '2024-06-03 12:25:22'),
(3, 'mutabal-v', 'Mutabal (V)', '1', NULL, NULL, 6.5, 1, 'Roasted eggplant, tahini, lemon juice, garlic & Olive Oil', '2024-05-22 12:20:03', '2024-05-23 07:31:21'),
(4, 'tabula', 'Tabula', '1', NULL, NULL, 6.9, 1, 'Fine chopped parsley, tomato, onions, fresh mint, crushed wheat, lemon juice & olive oil', '2024-05-22 12:20:05', '2024-05-23 07:32:07'),
(5, 'falafel-v', 'Falafel (V)', '1', NULL, NULL, 6.9, 1, 'Deep fried broad beans, chickpeas, fine herbs & croquets', '2024-05-22 12:20:07', '2024-05-23 07:34:41'),
(6, 'spinach-kibbeh', 'Spinach Kibbeh', '1', NULL, NULL, 6.9, 1, 'Bulgur wheat, potato, mint, basil, black pepper & spinach filling', '2024-05-22 12:20:10', '2024-05-23 07:35:15'),
(7, 'batata-hara-v', 'Batata Hara (V)', '1', NULL, NULL, 5.9, 2, 'Spicy potato, peppers, garlic & coriande', '2024-05-22 12:20:12', '2024-06-03 12:22:09'),
(8, 'selection-of-fatayer', 'Selection of Fatayer', '1', NULL, NULL, 9.9, 1, 'Spinach, cheese, mincemeat  & hummus dip', '2024-05-22 12:20:15', '2024-06-03 12:18:53'),
(9, 'waraq-inab-v', 'Waraq Inab (V)', '1', NULL, NULL, 6.9, 1, 'Rice stuffed vine leaves & olive oil', '2024-05-22 12:20:17', '2024-06-03 12:23:54'),
(10, 'mincemeat-kibbeh', 'Mincemeat Kibbeh', '1', NULL, NULL, 6.9, 1, 'Bulgur wheat, potato, mint, basil, black pepper & mincemeat', '2024-05-22 12:20:19', '2024-05-23 07:48:33'),
(11, 'servers-up-to-2-persons', 'Servers up to 2 persons', '2', NULL, NULL, 22.9, 1, 'Hummus, mutabal, taboula, selection of fatyer, kubba, wara Inab, parsley and olive oil & falafel garnished with pomegranate seeds', '2024-05-22 12:20:21', '2024-05-23 08:14:00'),
(12, 'filos-chicken-sheesh-special-wrap', 'Filo’s Chicken Sheesh Special Wrap', '3', 9, NULL, 5.9, 2, 'Chicken cubes, haloumi, patata hara, salad & garlic', '2024-05-22 12:20:26', '2024-06-03 12:44:39'),
(13, 'lamb-kofta', 'Lamb Kofta', '3', 8, NULL, 6.45, 1, 'Minced lamb, Hummus & salad', '2024-05-23 08:18:04', '2024-06-03 12:45:51'),
(14, 'filos-special-wrap', 'Filo\'s Special Wrap', '3', 9, NULL, 6.45, 1, 'Falafel, Aubergine with a mint & garlic sauce', '2024-05-31 12:36:43', '2024-06-03 12:40:08'),
(15, 'chicken-shawarma', 'Chicken Shawarma', '3', 9, NULL, 4.95, 1, 'Chicken & Salad', '2024-05-31 12:37:42', '2024-06-03 12:41:54'),
(16, 'falafel-wrap', 'Falafel Wrap', '3', 8, NULL, 4.95, 1, 'Falafel, hummus & salad', '2024-05-31 12:39:14', '2024-06-03 10:59:39'),
(17, 'filos-special-wrap', 'Filo’s Special Wrap', '3', 8, NULL, 6.45, 1, 'Chicken cubes, haloumi, patata hara, salad & garlic', '2024-05-31 12:46:00', '2024-06-03 12:35:13'),
(18, 'pesto-mozzarella-ciabatta', 'Pesto & Mozzarella Ciabatta', '3', 9, NULL, 4.95, 1, 'Mozzarella, sun-dried tomato & pesto paste', '2024-05-31 12:52:21', '2024-06-03 10:59:19'),
(19, 'chicken-shawarma', 'Chicken Shawarma', '3', 8, NULL, 4.95, 1, 'Chicken & Salad', '2024-05-31 12:52:44', '2024-06-03 10:58:42'),
(20, 'tuna-melt', 'Tuna Melt', '3', 9, NULL, 4.95, 1, 'Tuma, Cheese, sweetcorn, salt, pepper & Mayonnaise', '2024-05-31 12:53:09', '2024-06-03 10:58:09'),
(21, 'plain-croissant', 'Plain Croissant', '4', 1, NULL, 2.75, 1, 'Traditional croissant with buttery, flakey layers', '2024-05-31 12:54:23', '2024-06-03 11:03:34'),
(22, 'twice-baked-pistachio-raspberry-croissant', 'Twice-Baked Pistachio & Raspberry Croissant', '4', 1, NULL, 4.95, 1, 'Vanilla syrup filled with raspberry gel, pistachio almond cream, caramelised pistachio & topped with pistachio ganache', '2024-05-31 12:54:59', '2024-06-03 12:49:22'),
(23, 'twice-baked-almond-croissant', 'Twice-Baked Almond Croissant', '4', 1, NULL, 4.95, 1, 'Almond Filling, topped with flaked almonds & icing sugar', '2024-05-31 12:55:27', '2024-06-03 11:03:49'),
(24, 'tiramisu-danish', 'Tiramisu Danish', '4', 1, NULL, 4.95, 1, 'Danish case, filled with mascarpone cream, coffee caramel and honey savoiardi, dusted with cocoa powder', '2024-05-31 12:56:08', '2024-06-03 12:50:18'),
(25, 'baklava', 'Baklava', '4', 1, NULL, 6, 1, 'Phyllo dough, finely crushed pistachio, butter & sugar syrup', '2024-05-31 12:56:34', '2024-06-03 12:50:34'),
(26, 'sticky-cinnamon-bun', 'Sticky Cinnamon Bun', '4', 1, NULL, 3.95, 1, 'Cinnamon filling, topped with orange cream & cheese frosting', '2024-05-31 12:57:05', '2024-06-03 11:04:44'),
(27, 'mushroom-truffle-danish', 'Mushroom & Truffle Danish', '4', 2, NULL, 4.95, 1, 'Mornay sauce and wild portobello & oyster mushroom truffle oil, topped with grated parmesan & chives', '2024-05-31 12:57:49', '2024-06-03 11:05:22'),
(28, 'zaatar-gruyere-knot', 'Za\'atar & Gruyere Knot', '4', 2, NULL, 4.75, 1, 'Croissant twirls filled with za\'atar & gruyere cheese brushed with garlic, olive oil & gruyere', '2024-05-31 12:58:14', '2024-06-03 11:05:30'),
(29, 'cheese-croissant', 'Cheese Croissant', '4', 2, NULL, 4.75, 1, 'Traditional croissant with butter, flaky layers sprinkled with white and black sesame seeds', '2024-05-31 12:58:39', '2024-06-03 11:05:38'),
(30, 'croque-monsieur', 'Croque Monsieur', '4', 2, NULL, 6.45, 1, 'Multi-layered baked croissant, stuffed with smoked turkey breast, home made cheese sauce & onion-sherry jam', '2024-05-31 12:59:05', '2024-06-03 11:05:44'),
(31, 'cappuccino', 'Cappuccino', '5', 3, NULL, 3.8, 1, NULL, '2024-05-31 12:59:51', '2024-06-03 11:42:06'),
(32, 'espresso', 'Espresso', '5', 3, NULL, 2.9, 1, NULL, '2024-05-31 13:00:28', '2024-06-03 11:56:41'),
(33, 'double-espresso', 'Double Espresso', '5', 3, NULL, 3.8, 1, NULL, '2024-05-31 13:00:44', '2024-06-03 11:56:37'),
(34, 'macchiato', 'Macchiato', '5', 3, NULL, 3.2, 1, NULL, '2024-05-31 13:01:04', '2024-06-03 11:56:33'),
(35, 'mocha', 'Mocha', '5', 3, NULL, 3.8, 1, NULL, '2024-05-31 13:01:18', '2024-06-03 11:56:29'),
(36, 'latte', 'Latte', '5', 3, NULL, 3.8, 1, NULL, '2024-05-31 13:01:36', '2024-06-03 11:56:25'),
(37, 'flat-white', 'Flat White', '5', 3, NULL, 3.8, 1, NULL, '2024-05-31 13:01:52', '2024-06-03 11:56:19'),
(38, 'spanish-pistachio-latte', 'Spanish Pistachio Latte', '5', 4, NULL, 4.8, 1, NULL, '2024-05-31 13:02:53', '2024-06-03 11:54:44'),
(39, 'spanish-caramel-latte', 'Spanish Caramel Latte', '5', 4, NULL, 4.8, 1, NULL, '2024-05-31 13:03:10', '2024-06-03 11:54:22'),
(40, 'spanish-biscoff-latte', 'Spanish Biscoff Latte', '5', 4, NULL, 4.8, 1, NULL, '2024-05-31 13:03:27', '2024-06-03 11:53:51'),
(41, 'matcha-latte', 'Matcha Latte', '5', 4, NULL, 4.2, 1, NULL, '2024-05-31 13:03:51', '2024-06-03 11:53:27'),
(42, 'chai-latte', 'Chai Latte', '5', 4, NULL, 4.2, 1, NULL, '2024-05-31 13:04:09', '2024-06-03 11:53:10'),
(43, 'turmeric-latte', 'Turmeric Latte', '5', 4, NULL, 3.8, 1, NULL, '2024-05-31 13:04:32', '2024-06-03 11:52:54'),
(44, 'iced-coffees', 'Iced Coffees', '5', 4, NULL, 3.8, 1, NULL, '2024-05-31 13:04:57', '2024-06-03 11:52:34'),
(45, 'hot-chocolate', 'Hot Chocolate', '5', 4, NULL, 4.8, 1, NULL, '2024-05-31 13:05:17', '2024-06-03 11:52:20'),
(46, 'tea-selection', 'Tea Selection', '5', 5, NULL, 4.8, 1, 'Breakfast, Earl Grey, Green, Jasmine, Lemon and Ginger and Fresh Mint', '2024-05-31 13:06:35', '2024-06-03 12:56:06'),
(47, 'matcha', 'Matcha', '5', 5, NULL, 6.5, 1, 'Cup £3.50 - Pot £6.50', '2024-05-31 13:07:51', '2024-06-03 11:52:02'),
(48, 'karak', 'Karak', '5', 5, NULL, 5.8, 1, NULL, '2024-05-31 13:08:14', '2024-06-03 11:51:48'),
(49, 'chai', 'Chai', '5', 5, NULL, 4.8, 1, NULL, '2024-05-31 13:08:34', '2024-06-03 10:55:04'),
(50, 'water', 'Water', '5', 6, NULL, 2.5, 1, 'Still/Sparkling', '2024-05-31 13:10:32', '2024-06-03 11:51:15'),
(51, 'canned', 'Canned', '5', 6, NULL, 5.8, 1, 'DA-SH, Sanpellegrino', '2024-05-31 13:10:55', '2024-06-03 11:51:00'),
(52, 'bottled', 'Bottled', '5', 6, NULL, 4.8, 1, 'Coca-Cola', '2024-05-31 13:11:18', '2024-06-03 11:50:46'),
(53, 'organic-red', 'Organic Red', '5', 7, NULL, 6.5, 1, 'Blueberry, Strawberry, Mango', '2024-05-31 13:12:01', '2024-06-03 11:49:48'),
(54, 'passion-storm', 'Passion Storm', '5', 7, NULL, 6.5, 1, 'Peach, Pineapple, Papaya, Passion Fruit, Guava Puree, Aloe Vera', '2024-05-31 13:12:28', '2024-06-03 11:49:29'),
(55, 'acai-kick', 'Acai Kick', '5', 7, NULL, 6.5, 1, 'Strawberry, Mango, Blueberry, Acai', '2024-05-31 13:12:52', '2024-06-03 11:49:17'),
(56, 'mango-dream', 'Mango Dream', '5', 7, NULL, 6.5, 1, 'Mango, Pear', '2024-05-31 13:13:15', '2024-06-03 11:49:04'),
(57, 'green-reviver', 'Green Reviver', '5', 7, NULL, 6.5, 1, 'Banana, Kale, Mango, Lemongrass', '2024-05-31 13:13:39', '2024-06-03 11:48:51'),
(58, 'raspberry-heaven', 'Raspberry Heaven', '5', 7, NULL, 6.5, 1, 'Apple, Raspberry, Mango, Blueberry', '2024-05-31 13:14:03', '2024-06-03 11:48:33');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sorting` int(11) DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`id`, `name`, `sorting`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Starters', 1, 'starters', 1, '2024-05-17 11:41:05', '2024-05-22 12:12:12'),
(2, 'Sharing Platter', 2, 'sharing-platter', 1, '2024-05-17 11:41:42', '2024-05-22 12:12:30'),
(3, 'Sandwiches', 3, 'sandwiches', 1, '2024-05-17 11:42:02', '2024-05-22 12:11:23'),
(4, 'Pastries', 4, 'pastries', 1, '2024-05-17 11:42:26', '2024-05-22 12:11:29'),
(5, 'Drinks', 5, 'drinks', 1, '2024-05-17 11:44:30', '2024-05-22 12:11:35');

-- --------------------------------------------------------

--
-- Table structure for table `product_sub_category`
--

CREATE TABLE `product_sub_category` (
  `id` int(11) NOT NULL,
  `cate_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sorting` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_sub_category`
--

INSERT INTO `product_sub_category` (`id`, `cate_id`, `name`, `slug`, `sorting`, `status`, `created_at`, `updated_at`) VALUES
(1, 4, 'Sweets', 'sweets', 1, 1, '2024-05-31 10:55:24', '2024-05-31 10:55:24'),
(2, 4, 'Savoury', 'savoury', 2, 1, '2024-05-31 11:02:55', '2024-05-31 11:02:55'),
(3, 5, 'Coffee', 'coffee', 3, 1, '2024-05-31 11:03:46', '2024-05-31 11:03:46'),
(4, 5, 'Speciality Coffee', 'speciality-coffee', 4, 1, '2024-05-31 11:04:18', '2024-05-31 11:04:18'),
(5, 5, 'Tea', 'tea', 5, 1, '2024-05-31 11:04:43', '2024-05-31 11:04:43'),
(6, 5, 'Soft Drink', 'soft-drink', 6, 1, '2024-05-31 11:05:03', '2024-05-31 11:05:03'),
(7, 5, 'Smoothies', 'smoothies', 7, 1, '2024-05-31 11:05:31', '2024-05-31 11:05:31'),
(8, 3, 'Wraps', 'wraps', 8, 1, '2024-05-31 11:06:34', '2024-05-31 11:06:34'),
(9, 3, 'Ciabatta', 'ciabatta', 9, 1, '2024-05-31 11:07:36', '2024-05-31 11:07:36');

-- --------------------------------------------------------

--
-- Table structure for table `redirect_url`
--

CREATE TABLE `redirect_url` (
  `id` int(11) NOT NULL,
  `from_url` text,
  `to_url` text,
  `status` int(11) DEFAULT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `redirect_url`
--

INSERT INTO `redirect_url` (`id`, `from_url`, `to_url`, `status`, `updated_at`, `created_at`) VALUES
(1, '/contact2', '/about-us', 1, '2023-07-06 13:40:58', '2023-07-06 12:23:10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `api_token` text COLLATE utf8_unicode_ci,
  `mobile` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_admin` int(11) DEFAULT NULL,
  `admin_modules` text COLLATE utf8_unicode_ci,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `password`, `remember_token`, `created_at`, `updated_at`, `api_token`, `mobile`, `is_admin`, `admin_modules`, `status`) VALUES
(3, 'Ram', 'ram@gmail.com', NULL, '$2y$10$.BUDPZW3u0VFqlT2GxXpe.bTu6nLTGtKYAx79EyGKOu/QZj6BHmnq', '4ooGRDo8IA6L0FRl3T0ncf24EUIlWWlODXK9ldp0N5pfMgvcDl53g3zG5pwq', '2017-07-25 23:05:44', '2018-06-08 04:19:12', NULL, '8860221289', 0, 'admin-user,user,poll', 1),
(6, 'Admin', 'admin@gmail.com', 'admin@gmail.com', '$2y$10$U9HGWOl8rEwnkt.A1JDRf.AH4ZB4Dqs0UavUD/z/Jrc7e/ZfBYucm', '3YfpP90G2FlI8gD1V8JhOK23R0lLrTJw8q2pPGOj6ubggMOxVv8usxj2DEYX', '2018-04-06 05:47:28', '2022-11-18 10:54:49', NULL, '8860221289', 1, 'all-modules', 1);

-- --------------------------------------------------------

--
-- Table structure for table `web_setting`
--

CREATE TABLE `web_setting` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `web_setting`
--

INSERT INTO `web_setting` (`id`, `name`, `slug`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Update  CSS and JS Control  Version', 'staticver', '24', 1, '2019-10-01 01:08:05', '2023-06-22 16:14:01'),
(4, 'common-seo-tags', 'common-seo-tags', '<!-- Meta Pixel Code -->\r\n<script>\r\n!function(f,b,e,v,n,t,s)\r\n{if(f.fbq)return;n=f.fbq=function(){n.callMethod?\r\nn.callMethod.apply(n,arguments):n.queue.push(arguments)};\r\nif(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version=\'2.0\';\r\nn.queue=[];t=b.createElement(e);t.async=!0;\r\nt.src=v;s=b.getElementsByTagName(e)[0];\r\ns.parentNode.insertBefore(t,s)}(window, document,\'script\',\r\n\'https://connect.facebook.net/en_US/fbevents.js\');\r\nfbq(\'init\', \'1686808975101519\');\r\nfbq(\'track\', \'PageView\');\r\n</script>\r\n<noscript><img height=\"1\" width=\"1\" style=\"display:none\"\r\nsrc=\"https://www.facebook.com/tr?id=1686808975101519&ev=PageView&noscript=1\"\r\n/></noscript>\r\n<!-- End Meta Pixel Code -->\r\n\r\n<!-- Google tag (gtag.js) --> <script async src=\"https://www.googletagmanager.com/gtag/js?id=G-JM3GTXL5PG\"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag(\'js\', new Date()); gtag(\'config\', \'G-JM3GTXL5PG\'); </script>', 1, '2019-11-19 02:03:19', '2023-07-06 10:38:42'),
(5, 'facebook-link', 'facebook-link', NULL, 1, '2019-11-22 05:27:06', '2022-06-27 11:17:29'),
(6, 'twitter-link', 'twitter-link', NULL, 1, '2019-11-22 05:27:40', '2022-06-27 11:17:56'),
(7, 'Instagram Link', 'instagram-link', NULL, 1, '2019-11-22 05:28:04', '2020-12-22 06:34:39'),
(11, 'youtube-link', 'youtube-link', NULL, 1, '2020-08-08 09:15:23', '2022-06-27 10:50:39'),
(14, 'Linked In', 'linked-in', NULL, 1, '2022-06-27 11:15:40', '2022-06-27 11:15:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_modules`
--
ALTER TABLE `admin_modules`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `attributes`
--
ALTER TABLE `attributes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `attributes_option`
--
ALTER TABLE `attributes_option`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_banner`
--
ALTER TABLE `cms_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_block`
--
ALTER TABLE `cms_block`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blocks_name_unique` (`slug`);

--
-- Indexes for table `cms_page`
--
ALTER TABLE `cms_page`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`),
  ADD KEY `IDX_CMS_PAGE_IDENTIFIER` (`slug`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media_gallery`
--
ALTER TABLE `media_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slug_2` (`slug`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `product_sub_category`
--
ALTER TABLE `product_sub_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `redirect_url`
--
ALTER TABLE `redirect_url`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `web_setting`
--
ALTER TABLE `web_setting`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blocks_name_unique` (`slug`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_modules`
--
ALTER TABLE `admin_modules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `attributes`
--
ALTER TABLE `attributes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `attributes_option`
--
ALTER TABLE `attributes_option`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cms_banner`
--
ALTER TABLE `cms_banner`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cms_block`
--
ALTER TABLE `cms_block`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `cms_page`
--
ALTER TABLE `cms_page`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT COMMENT 'Page ID', AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=195;

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `media_gallery`
--
ALTER TABLE `media_gallery`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product_sub_category`
--
ALTER TABLE `product_sub_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `redirect_url`
--
ALTER TABLE `redirect_url`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `web_setting`
--
ALTER TABLE `web_setting`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
