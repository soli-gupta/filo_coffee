-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2024 at 04:04 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lks`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_modules`
--

CREATE TABLE `admin_modules` (
  `id` int(11) NOT NULL,
  `name` varchar(222) NOT NULL,
  `code` varchar(222) NOT NULL,
  `status` int(11) DEFAULT 1,
  `sorting` varchar(111) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `attributes_option`
--

CREATE TABLE `attributes_option` (
  `id` int(10) UNSIGNED NOT NULL,
  `attributes_id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `slug` varchar(222) DEFAULT NULL,
  `status` smallint(6) NOT NULL DEFAULT 2,
  `sorting` int(11) DEFAULT NULL,
  `value` text DEFAULT NULL,
  `value2` longtext DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cms_banner`
--

CREATE TABLE `cms_banner` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(255) NOT NULL,
  `title` text DEFAULT NULL,
  `sub_text` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `image_path_mobile` text DEFAULT NULL,
  `sorting` int(11) DEFAULT NULL,
  `link_url` varchar(500) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cms_banner`
--

INSERT INTO `cms_banner` (`id`, `type`, `title`, `sub_text`, `description`, `image_path`, `image_path_mobile`, `sorting`, `link_url`, `date`, `status`, `created_at`, `updated_at`) VALUES
(1, '1', 'Your Partner on Progress', 'With 470+ professionals, including 72+ partners operating from 14 offices pan India, we provide customised solutions and hand-holding that exceeds industry standards.', NULL, 'media/cmsimage/image_path/video2-1719905033.mp4', 'media/cmsimage/image_path_mobile/video2-1719905033.mp4', 2, 'https://www.lakshmisri.com/', NULL, 1, '2024-07-02 07:23:54', '2024-07-02 07:29:55'),
(2, '1', '39 years of Excellence', 'Our proficient teams are passionately dedicated to delivering unmatched solutions for all your legal needs.', NULL, 'media/cmsimage/image_path/video1-1719905145.mp4', 'media/cmsimage/image_path_mobile/video1-1719905145.mp4', 1, 'https://www.lakshmisri.com/', NULL, 1, '2024-07-02 07:25:45', '2024-07-02 10:09:43'),
(3, '1', 'Innovation, Technology & Collaboration', 'Integrating cutting-edge technology to foster collaboration and provide unique out-of-the-box solutions', NULL, 'media/cmsimage/image_path/video3-1719905187.mp4', 'media/cmsimage/image_path_mobile/video3-1719905187.mp4', 3, 'https://www.lakshmisri.com/', NULL, 1, '2024-07-02 07:26:27', '2024-07-02 07:30:04'),
(4, '2', NULL, 'Trademark Registrar has no authority to restrict choice of colours – Applicant has right to choose colours', NULL, NULL, NULL, 4, 'https://www.lakshmisri.com/newsroom/news-briefings/trademark-registrar-has-no-authority-to-restrict-choice-of-colours/', '2024-04-24', 1, '2024-07-02 09:59:20', '2024-07-02 10:09:11'),
(5, '2', NULL, 'RoDTEP benefit extended to exports by Advance Authorisation holders and by EOU and SEZ units', NULL, NULL, NULL, 5, 'https://www.lakshmisri.com/newsroom/news-briefings/trademark-registrar-has-no-authority-to-restrict-choice-of-colours/', '2024-04-10', 1, '2024-07-02 10:01:55', '2024-07-02 10:09:17'),
(6, '2', NULL, 'Valuation – Notional cost of specification drawings received free of cost by manufacturer from buyer, before letter of intent identifying former as supplier, is not includible', NULL, NULL, NULL, 6, 'https://www.lakshmisri.com/newsroom/news-briefings/valuation-of-exports/', '2024-03-15', 1, '2024-07-02 10:06:41', '2024-07-02 10:09:22'),
(7, '3', NULL, '<strong>LKS</strong> is one of the largest integrated full-service law firms in India. Integrity, Knowledge and Passion are the principles that resonate with every member of our family and the work that we do.', NULL, NULL, NULL, 1, NULL, NULL, 1, '2024-07-02 10:13:28', '2024-07-02 12:50:48'),
(8, '4', 'Services', 'Our professionals have experience of working in both traditional sectors such as commodities, automobile, pharmaceuticals, petrochemicals and modern sectors such as e-commerce, big data, renewables.', NULL, NULL, NULL, 1, NULL, NULL, 1, '2024-07-02 10:24:02', '2024-07-02 13:23:38'),
(10, '5', 'Accolades & Awards', 'Global recognition validates our commitment to excellence. We and our professionals are regularly appreciated for the quality of services and the depth of legal expertise. Our consistent recognition also proves our maxim of always exceeding expectations.', NULL, NULL, NULL, 1, NULL, NULL, 1, '2024-07-02 10:30:15', '2024-07-02 13:28:26'),
(11, '6', 'Grow with us', 'Multidisciplinary teams with background in law, business, process, project management, technology, and more; built on a bedrock of Indian values and diverse perspectives', NULL, 'media/cmsimage/image_path/growwith-1719917364.jpg', 'media/cmsimage/image_path_mobile/growwith-1719917364.jpg', 1, NULL, NULL, 1, '2024-07-02 10:49:24', '2024-07-02 10:49:24'),
(12, '7', 'Connect with us', NULL, NULL, 'media/cmsimage/image_path/scancode-1719917708.png', NULL, 1, NULL, NULL, 1, '2024-07-02 10:55:09', '2024-07-02 10:55:09');

-- --------------------------------------------------------

--
-- Table structure for table `cms_block`
--

CREATE TABLE `cms_block` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(191) NOT NULL,
  `value` text DEFAULT NULL,
  `value2` text DEFAULT NULL,
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
  `meta_keywords` text DEFAULT NULL COMMENT 'Page Meta Keywords',
  `meta_description` text DEFAULT NULL COMMENT 'Page Meta Description',
  `slug` varchar(100) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL COMMENT 'Page Content Heading',
  `sub_text` text DEFAULT NULL,
  `content1` longtext DEFAULT NULL COMMENT 'Page Content',
  `layout` varchar(222) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL COMMENT 'Page Creation Time',
  `created_at` timestamp NULL DEFAULT NULL COMMENT 'Page Modification Time',
  `menu_sort_order` varchar(6) DEFAULT '0' COMMENT 'Page Sort Order',
  `parent_menu_page_id` int(11) NOT NULL DEFAULT 0,
  `menu_name` varchar(222) DEFAULT NULL,
  `menu_include` varchar(10) DEFAULT NULL,
  `content2` longtext DEFAULT NULL,
  `content3` text DEFAULT NULL,
  `content4` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `image_mobile` text DEFAULT NULL,
  `meta_other` text DEFAULT NULL,
  `image_alt` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci COMMENT='CMS Page Table';

--
-- Dumping data for table `cms_page`
--

INSERT INTO `cms_page` (`id`, `page_title`, `status`, `meta_keywords`, `meta_description`, `slug`, `name`, `sub_text`, `content1`, `layout`, `updated_at`, `created_at`, `menu_sort_order`, `parent_menu_page_id`, `menu_name`, `menu_include`, `content2`, `content3`, `content4`, `image`, `image_mobile`, `meta_other`, `image_alt`) VALUES
(1, 'Lakshmisri', 1, NULL, NULL, 'home', 'Lakshmisri', NULL, '<p><br></p>', NULL, '2024-07-08 12:45:24', '2024-05-17 11:24:38', '0', 0, NULL, NULL, '<p><br></p>', NULL, NULL, 'media/cmspage/image/direct-tax-banner-1720442723.jpg', NULL, NULL, NULL),
(2, 'About Us', 1, NULL, NULL, 'about-us', 'About Us', NULL, NULL, NULL, '2024-07-01 13:22:23', '2024-07-01 13:22:23', '0', 0, NULL, NULL, NULL, NULL, NULL, 'media/cmspage/image/direct-tax-banner-1719840142.jpg', NULL, NULL, NULL),
(3, 'career', 1, NULL, NULL, 'career', 'Grow With Us', 'LKS handles complex client projects that need deep insights, market knowledge and global capabilities. Consequently our teams are made up of a diverse range of backgrounds, cultures and perspectives.', '<p id=\"growwithsub\">Talent is critical to the success of Lakshmikumaran &amp; Sridharan. We invest heavily in our talent and recognise that the success of our firm is built on the diverse strengths of each of the members. We offer exceptional career opportunities to experienced lawyers, chartered accountants, management graduates, engineers, scientists, Doctorates and aspiring graduates, in an environment which is challenging, rewarding and distinct.</p>\r\n<p>We encourage a transparent style of work, where individual opinions are valued, and feedback is openly accepted. We are looking for problem solvers, strategic thinkers and most importantly people with whom we can share our lives. For more than three decades, we have produced a unique track record of delivering exceptional services to our clients that is the result of having great people operating in our unique culture.</p>', NULL, '2024-07-01 13:24:34', '2024-07-01 13:24:34', '0', 0, NULL, NULL, NULL, NULL, NULL, 'media/cmspage/image/careers-1719840274.jpg', NULL, NULL, NULL),
(4, 'People', 1, NULL, NULL, 'people', 'People', NULL, '<p>The collective experience and knowledge of more than <strong>470+ professionals</strong> from <strong>14 offices</strong> across India and covering more than <strong>20 practice</strong> areas, gives us the commitment to excel in all our services.</p>', NULL, '2024-07-10 12:49:49', '2024-07-05 13:18:34', '0', 0, NULL, NULL, NULL, NULL, NULL, 'media/cmspage/image/articleimg3-1720185514.jpg', NULL, NULL, NULL),
(5, 'awards', 1, NULL, NULL, 'awards', 'Awards', 'LKS is regularly appreciated for the quality of its service and depth of its legal expertise. Read more about our recent accolades and awards.', NULL, NULL, '2024-07-08 12:55:16', '2024-07-08 12:55:16', '0', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'advisory', 1, NULL, NULL, 'advisory', 'Advisory', 'Advisory services encompass a wide range of support functions aimed at helping businesses achieve their goals while staying compliant with applicable laws and regulations.', NULL, NULL, '2024-07-08 13:12:43', '2024-07-08 13:12:12', '0', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'Direct Tax', 1, NULL, NULL, 'direct-tax', 'Direct Tax', 'Our multidisciplinary team advises on all aspects of tax requirements for companies, with a special focus on M&A tax and transfer pricing. Our team also specialises in litigation strategy and services.', NULL, NULL, '2024-07-08 13:14:36', '2024-07-08 13:14:36', '0', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'Manufacturing', 1, NULL, NULL, 'manufacturing', 'Manufacturing', NULL, NULL, NULL, '2024-07-08 13:16:02', '2024-07-08 13:16:02', '0', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'Values that shape us', 1, NULL, NULL, 'our-value', 'Values that shape us', NULL, NULL, NULL, '2024-07-08 13:26:40', '2024-07-08 13:16:51', '0', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'Who We are', 1, NULL, NULL, 'who-we-are', 'Who We are', NULL, NULL, NULL, '2024-07-08 13:19:49', '2024-07-08 13:19:49', '0', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `module` varchar(111) DEFAULT NULL,
  `data_id` varchar(111) DEFAULT NULL,
  `data_name` text DEFAULT NULL,
  `ip` varchar(111) DEFAULT NULL,
  `comment` longtext DEFAULT NULL,
  `user_name` varchar(222) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
(194, 'product', '47', 'matcha', '103.206.223.148', 'Record updated', 'Admin', 6, '2024-06-03 12:57:45', '2024-06-03 12:57:45'),
(195, 'cms-page', '2', 'about-us', '127.0.0.1', 'Record created', 'Admin', 6, '2024-07-01 13:22:23', '2024-07-01 13:22:23'),
(196, 'cms-page', '3', 'career', '127.0.0.1', 'Record created', 'Admin', 6, '2024-07-01 13:24:34', '2024-07-01 13:24:34'),
(197, 'cms-page', '4', 'people', '127.0.0.1', 'Record created', 'Admin', 6, '2024-07-05 13:18:34', '2024-07-05 13:18:34'),
(198, 'cms-page', '1', 'home', '127.0.0.1', 'Record updated', 'Admin', 6, '2024-07-08 12:45:24', '2024-07-08 12:45:24'),
(199, 'cms-page', '5', 'awards', '127.0.0.1', 'Record created', 'Admin', 6, '2024-07-08 12:55:16', '2024-07-08 12:55:16'),
(200, 'cms-page', '6', 'advisory', '127.0.0.1', 'Record created', 'Admin', 6, '2024-07-08 13:12:12', '2024-07-08 13:12:12'),
(201, 'cms-page', '6', 'advisory', '127.0.0.1', 'Record updated', 'Admin', 6, '2024-07-08 13:12:43', '2024-07-08 13:12:43'),
(202, 'cms-page', '7', 'direct-tax', '127.0.0.1', 'Record created', 'Admin', 6, '2024-07-08 13:14:36', '2024-07-08 13:14:36'),
(203, 'cms-page', '8', 'manufacturing', '127.0.0.1', 'Record created', 'Admin', 6, '2024-07-08 13:16:02', '2024-07-08 13:16:02'),
(204, 'cms-page', '9', 'values-that-shape-us', '127.0.0.1', 'Record created', 'Admin', 6, '2024-07-08 13:16:51', '2024-07-08 13:16:51'),
(205, 'cms-page', '10', 'who-we-are', '127.0.0.1', 'Record created', 'Admin', 6, '2024-07-08 13:19:49', '2024-07-08 13:19:49'),
(206, 'cms-page', '9', 'our-value', '127.0.0.1', 'Record updated', 'Admin', 6, '2024-07-08 13:26:40', '2024-07-08 13:26:40'),
(207, 'cms-page', '4', 'people', '127.0.0.1', 'Record updated', 'Admin', 6, '2024-07-10 12:49:49', '2024-07-10 12:49:49');

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `subject` text DEFAULT NULL,
  `status` varchar(10) DEFAULT 'Pending',
  `page_type` varchar(100) DEFAULT NULL,
  `item_type` varchar(100) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `pincode` varchar(6) DEFAULT NULL,
  `product` varchar(100) DEFAULT NULL,
  `centre` varchar(200) DEFAULT NULL,
  `gender` varchar(111) DEFAULT NULL,
  `age` varchar(111) DEFAULT NULL,
  `upload_file` text DEFAULT NULL,
  `ip` varchar(111) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`id`, `name`, `email`, `mobile`, `message`, `subject`, `status`, `page_type`, `item_type`, `address`, `city`, `pincode`, `product`, `centre`, `gender`, `age`, `upload_file`, `ip`, `created_at`, `updated_at`) VALUES
(2, 'Felix Stevens', 'meme@mailinator.com', '8860221289', 'Sunt et quis asperna', NULL, 'Pending', 'Contact us', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '::1', '2023-11-20 17:51:45', '2023-11-20 17:51:45');

-- --------------------------------------------------------

--
-- Table structure for table `leadership`
--

CREATE TABLE `leadership` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `practice` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `short_description` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` text NOT NULL,
  `sorting` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `leadership`
--

INSERT INTO `leadership` (`id`, `name`, `slug`, `designation`, `practice`, `location`, `short_description`, `description`, `image`, `sorting`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Anjali Hirawat', 'anjali-hirawat', 'Partner', 'Arbitration', 'Mumbai', 'Anjali is a Partner in the Customs and International Trade practice group at the firm', NULL, 'media/leadership/image/anjali_hirawat_400400px-1720533173.jpg', 1, 1, '2024-07-09 13:55:08', '2024-07-09 13:55:08'),
(2, 'Bipin Kumar Verma', 'bipin-kumar-verma', 'Senior Partner', 'Commercial Litigation', 'Pune', NULL, NULL, 'media/leadership/image/bipin-kumar-verma-1720607197.jpg', 1, 1, '2024-07-10 10:26:37', '2024-07-10 10:26:37'),
(3, 'Chaitanya R. Bhatt', 'chaitanya-r-bhatt', 'Partner', 'Classification', 'Mumbai', NULL, NULL, 'media/leadership/image/chaitanya-r-bhatt-1720607241.jpg', 1, 1, '2024-07-10 10:27:21', '2024-07-10 10:27:21'),
(4, 'Charanya Lakshmikumaran', 'charanya-lakshmikumaran', 'Partner', 'Commercial Litigation', 'Mumbai, New Delhi', NULL, NULL, 'media/leadership/image/l-charanya1-1720607336.jpg', 1, 1, '2024-07-10 10:28:56', '2024-07-10 10:28:56');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sorting` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `name`, `sorting`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Ahmedabad', 1, 1, '2024-07-10 13:29:31', '2024-07-10 13:29:31'),
(2, 'Prayagraj', 2, 1, '2024-07-10 13:29:42', '2024-07-10 13:29:42'),
(3, 'Bengaluru', 3, 1, '2024-07-10 13:29:51', '2024-07-10 13:29:51'),
(4, 'Chandigarh', 4, 1, '2024-07-10 13:30:01', '2024-07-10 13:30:01'),
(5, 'Chennai', 5, 1, '2024-07-10 13:30:10', '2024-07-10 13:30:10'),
(6, 'Gurugram', 6, 1, '2024-07-10 13:30:20', '2024-07-10 13:30:20'),
(7, 'Hyderabad', 7, 1, '2024-07-10 13:30:31', '2024-07-10 13:30:31'),
(8, 'Kochi', 8, 1, '2024-07-10 13:30:42', '2024-07-10 13:30:42'),
(9, 'Kolkata', 9, 1, '2024-07-10 13:30:50', '2024-07-10 13:30:50'),
(10, 'Mumbai', 10, 1, '2024-07-10 13:30:59', '2024-07-10 13:30:59'),
(11, 'New Delhi', 11, 1, '2024-07-10 13:31:09', '2024-07-10 13:31:09'),
(12, 'Pune', 12, 1, '2024-07-10 13:31:17', '2024-07-10 13:31:17'),
(13, 'Jaipur', 13, 1, '2024-07-10 13:31:26', '2024-07-10 13:31:26'),
(14, 'Nagpur', 14, 1, '2024-07-10 13:31:36', '2024-07-10 13:31:36');

-- --------------------------------------------------------

--
-- Table structure for table `media_gallery`
--

CREATE TABLE `media_gallery` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text DEFAULT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `sorting` int(11) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `practices`
--

CREATE TABLE `practices` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sorting` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `practices`
--

INSERT INTO `practices` (`id`, `name`, `sorting`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Arbitration', 1, 1, '2024-07-04 07:57:28', '2024-07-04 07:57:28'),
(2, 'Classification', 2, 1, '2024-07-04 07:57:37', '2024-07-04 07:57:37'),
(3, 'Commercial Litigation', 3, 1, '2024-07-04 07:57:53', '2024-07-04 07:57:53');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `slug` varchar(191) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `category_id` text DEFAULT NULL,
  `sub_cate_id` int(11) DEFAULT NULL,
  `sorting` int(11) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `status` tinyint(4) DEFAULT 1,
  `short_description` text DEFAULT NULL,
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
  `name` varchar(255) DEFAULT NULL,
  `sorting` int(11) DEFAULT NULL,
  `slug` varchar(191) NOT NULL,
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
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `sorting` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
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
  `from_url` text DEFAULT NULL,
  `to_url` text DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `redirect_url`
--

INSERT INTO `redirect_url` (`id`, `from_url`, `to_url`, `status`, `updated_at`, `created_at`) VALUES
(1, '/contact2', '/about-us', 1, '2023-07-06 13:40:58', '2023-07-06 12:23:10');

-- --------------------------------------------------------

--
-- Table structure for table `sectors`
--

CREATE TABLE `sectors` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sorting` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sectors`
--

INSERT INTO `sectors` (`id`, `name`, `sorting`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Automative Logistics', 1, 1, '2024-07-03 07:35:25', '2024-07-03 07:35:25'),
(2, 'Defence', 2, 1, '2024-07-03 07:35:34', '2024-07-03 07:35:34'),
(3, 'Financial Service', 3, 1, '2024-07-03 07:35:47', '2024-07-03 07:35:47'),
(4, 'Food & Agriculture', 4, 1, '2024-07-03 07:35:57', '2024-07-03 07:35:57'),
(5, 'IT & ITES', 5, 1, '2024-07-03 07:36:10', '2024-07-03 07:36:10'),
(6, 'Manufaturing', 6, 1, '2024-07-03 07:36:21', '2024-07-03 07:36:21'),
(7, 'Oil and Gas', 7, 1, '2024-07-03 07:36:37', '2024-07-03 07:36:37'),
(8, 'Online Gaming', 8, 1, '2024-07-03 07:36:49', '2024-07-03 07:36:49'),
(9, 'Pharma & Healthcare', 9, 1, '2024-07-03 07:36:58', '2024-07-03 07:36:58'),
(10, 'Renewable Energy', 10, 1, '2024-07-03 07:37:08', '2024-07-03 07:37:08'),
(11, 'Retail & E-commerce', 11, 1, '2024-07-03 07:37:19', '2024-07-03 07:37:19'),
(12, 'Supply Chain', 12, 1, '2024-07-03 07:37:31', '2024-07-03 07:37:31'),
(13, 'Technology & Data Protection', 13, 1, '2024-07-03 07:37:41', '2024-07-03 07:37:41'),
(14, 'Telecom and Media', 14, 1, '2024-07-03 07:37:53', '2024-07-03 07:37:53');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sorting` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `sorting`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Transaction', 1, 1, '2024-07-03 08:34:56', '2024-07-03 08:34:56'),
(2, 'Advisory', 2, 1, '2024-07-03 08:35:07', '2024-07-03 08:35:07'),
(3, 'Litigation', 3, 1, '2024-07-03 08:35:16', '2024-07-03 08:35:16'),
(4, 'Investigations', 4, 1, '2024-07-03 08:35:24', '2024-07-03 08:35:24'),
(5, 'Technology', 5, 1, '2024-07-03 08:35:35', '2024-07-03 08:35:35');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `api_token` text DEFAULT NULL,
  `mobile` varchar(50) DEFAULT NULL,
  `is_admin` int(11) DEFAULT NULL,
  `admin_modules` text DEFAULT NULL,
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
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(191) NOT NULL,
  `description` text DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `web_setting`
--

INSERT INTO `web_setting` (`id`, `name`, `slug`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Update  CSS and JS Control  Version', 'staticver', '24', 1, '2019-10-01 01:08:05', '2023-06-22 16:14:01'),
(4, 'common-seo-tags', 'common-seo-tags', '', 1, '2019-11-19 02:03:19', '2023-07-06 10:38:42'),
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
-- Indexes for table `leadership`
--
ALTER TABLE `leadership`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `media_gallery`
--
ALTER TABLE `media_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `practices`
--
ALTER TABLE `practices`
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
-- Indexes for table `sectors`
--
ALTER TABLE `sectors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `cms_block`
--
ALTER TABLE `cms_block`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `cms_page`
--
ALTER TABLE `cms_page`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT COMMENT 'Page ID', AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=208;

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `leadership`
--
ALTER TABLE `leadership`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `media_gallery`
--
ALTER TABLE `media_gallery`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `practices`
--
ALTER TABLE `practices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
-- AUTO_INCREMENT for table `sectors`
--
ALTER TABLE `sectors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
