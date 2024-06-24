-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 20, 2023 at 12:32 PM
-- Server version: 5.7.39
-- PHP Version: 8.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms_laravel10`
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
-- Table structure for table `blog_category`
--

CREATE TABLE `blog_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sorting` int(11) NOT NULL DEFAULT '1',
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_title` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog_comment`
--

CREATE TABLE `blog_comment` (
  `id` int(10) UNSIGNED NOT NULL,
  `blog_id` int(10) UNSIGNED DEFAULT NULL,
  `blog_name` text COLLATE utf8mb4_unicode_ci,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(111) COLLATE utf8mb4_unicode_ci DEFAULT 'Pending',
  `message` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog_post`
--

CREATE TABLE `blog_post` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED DEFAULT NULL,
  `tags_ids` text COLLATE utf8mb4_unicode_ci,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `posted_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `posted_date` date DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `image2` text COLLATE utf8mb4_unicode_ci,
  `short_description` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `views_count` int(11) DEFAULT NULL,
  `page_title` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_other` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog_tag`
--

CREATE TABLE `blog_tag` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_title` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `career_application`
--

CREATE TABLE `career_application` (
  `id` int(11) NOT NULL,
  `job_code` varchar(250) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `firstname` varchar(250) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `mobile` varchar(100) DEFAULT NULL,
  `dob` varchar(100) DEFAULT NULL,
  `form_date` varchar(100) DEFAULT NULL,
  `resume_path` varchar(250) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `current_org` varchar(200) DEFAULT NULL,
  `current_location` varchar(222) DEFAULT NULL,
  `current_designation` varchar(222) DEFAULT NULL,
  `current_org_tenure` varchar(222) DEFAULT NULL,
  `preferred_location` varchar(222) DEFAULT NULL,
  `functional_area` text,
  `exp_years` varchar(222) DEFAULT NULL,
  `exp_months` varchar(22) DEFAULT NULL,
  `annual_salary` varchar(222) DEFAULT NULL,
  `previous_exp_org` text,
  `previous_exp_designation` text,
  `previous_exp_tenure_org` text,
  `remarks` text,
  `linkedin` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `career_job`
--

CREATE TABLE `career_job` (
  `id` int(11) NOT NULL,
  `post_name` varchar(250) DEFAULT NULL,
  `post_short_desc` text,
  `job_slug` varchar(200) DEFAULT NULL,
  `post_description` text,
  `status` int(11) DEFAULT NULL,
  `primary_responsibility` text,
  `key_skills` text,
  `job_code` varchar(100) DEFAULT NULL,
  `location` text,
  `experience` text,
  `department` varchar(222) DEFAULT NULL,
  `sorting` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `link_url_2` text COLLATE utf8mb4_unicode_ci,
  `brand_id` int(11) DEFAULT NULL,
  `download_file` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cms_banner`
--

INSERT INTO `cms_banner` (`id`, `title`, `sub_text`, `description`, `image_path`, `image_path_mobile`, `sorting`, `type`, `link_url`, `link_url_2`, `brand_id`, `download_file`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Rizwana', NULL, NULL, 'media/cmsimage/image_path/flite-bnr-1690550320-1700482390.webp', 'media/cmsimage/image_path_mobile/flite-bnr-1690550320-1700482392.webp', 1, '1', NULL, NULL, 0, NULL, 1, '2023-08-07 12:56:50', '2023-11-20 12:13:14');

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
(5, 'Contact Us', 1, NULL, NULL, 'contact-us', 'Contact us', NULL, '<div class=\"col-txt\">\r\n              <div class=\"sm-title-1\">Email</div>\r\n              <p><a href=\"mailto:contact@lbctindia.org\">contact@lbctindia.org</a></p>\r\n            </div>\r\n            <div class=\"col-txt\">\r\n              <div class=\"sm-title-1\">LADY BAMFORD CHARITABLE TRUST</div>\r\n              <p>B1/1-1, 2nd Floor, <br>Mohan Cooperative Industrial Estate, Mathura Road, <br>New Delhi-110044</p>\r\n            </div>', 'contact_page', '2023-08-07 16:37:20', '2018-09-11 04:20:12', '0', 0, 'Contact us', 'No', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3506.0986304604166!2d77.29566647390885!3d28.506680136173905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce13714137807%3A0x3ec3bbfb977382a2!2sNH-19%2C%20Mohan%20Cooperative%20Industrial%20Estate%2C%20Badarpur%2C%20New%20Delhi!5e0!3m2!1sen!2sin!4v1691403348676!5m2!1sen!2sin\" width=\"500\" height=\"350\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', NULL, '', '', '', NULL, 'Contact us'),
(43, 'About Us', 1, NULL, NULL, 'about-us', 'About Us', NULL, '<section class=\"section aboutSec\">\r\n    <div class=\"wrapper\">\r\n      <h2 class=\"text-center\" data-aos=\"fade-down\">Lady Bamford Charitable Trust</h2>\r\n      <p data-aos=\"fade-up\">We are committed to work in partnership with the government and local communities with three clear objectives that can be called the “3E”s - Education, Employable Skills and, supporting Engagement with the Community. </p>\r\n      <p data-aos=\"fade-up\" data-aos-duration=\"1000\">Since its launch, it has achieved the following: </p>\r\n      <ol data-aos=\"fade-up\" data-aos-duration=\"1500\">\r\n        <li>Supported the quality of education within schools. </li>\r\n        <li>Provided skills and training to help prepare pupils for life after school. </li>\r\n        <li>Helped women and young men from developing communities learn traditional crafts to provide valuable employment. </li>\r\n        <li> Set up self-help groups within rural communities to give women greater financial literacy and autonomy. </li>\r\n        <li>Helped build roads, sanitation units, water pipelines and providing medical facilities. </li>\r\n      </ol>\r\n    </div>\r\n  </section>\r\n  <section class=\"section locationMapSec\">\r\n    <div class=\"wrapper\">\r\n      <h2 class=\"text-center\" data-aos=\"fade-down\">LOCATION MAP</h2>\r\n      <div class=\"row\">\r\n        <div class=\"col-md-7\">\r\n          <div class=\"location\" data-aos=\"fade-up\">\r\n            <ul>\r\n              <li><span>BALLABGARH</span> 7 Villages\r\n                <br>30 Schools</li>\r\n              <li><span>JAIPUR</span> 6 Villages\r\n                <br>20 Schools</li>\r\n              <li><span>HALOL</span> 5 Villages\r\n                <br>10 Schools</li>\r\n              <li><span>PUNE</span> 5 Villages\r\n                <br>20 Schools</li>\r\n            </ul>\r\n            <div class=\"img mapointer\"> <img src=\"img/location_map.png\" alt=\"\"></div>\r\n          </div>\r\n        </div>\r\n      </div>\r\n    </div>\r\n  </section>\r\n  <section class=\"section ourFounderSec flip\">\r\n    <div class=\"wrapper\">\r\n      <div class=\"row\">\r\n        <div class=\"col-md-7 ps-5\">\r\n          <h2 data-aos=\"fade-down\">OUR FOUNDER <span>Carole Bamford</span></h2>\r\n          <p data-aos=\"fade-up\">‘Bringing education to children and providing the infrastructure to access it have always been central to LBCT’s work. As a mother and a grandmother, I am so fortunate to witness the role teaching plays in nurturing the changemakers of tomorrow, so it is something I have always been passionate about supporting.</p>\r\n          <p data-aos=\"fade-up\" data-aos-duration=\"1000\"> Today the scope of LBCT’s work has been broadened, growing from work with a single school in Ballabgargh to projects that are centred around three key objectives: education, provision of employable skills and community engagement – each anchored in the belief that a secure livelihood is possible for all.</p>\r\n          <p data-aos=\"fade-up\" data-aos-duration=\"1500\"> I am very proud that for more than 20 years the work that LBCT carries out has changed so many lives. When I think what has been achieved during that time and the extent of its impact, it makes me hopeful for the next 20.’</p> <a href=\"#\" class=\"btn\" data-aos=\"fade-up\" data-aos-duration=\"2000\">LEARN MORE</a> </div>\r\n        <div class=\"col-md-5\" data-aos=\"fade-up-right\"> <img src=\"img/our_founder.jpg\" alt=\"\"> </div>\r\n      </div>\r\n    </div>\r\n  </section>\r\n  <section class=\"section sustainDevSec marbt100\">\r\n    <div class=\"wrapper\">\r\n      <h2 class=\"text-center\" data-aos=\"fade-down\">SUSTAINABLE DEVELOPMENT GOALS</h2>\r\n      <div class=\"row\">\r\n        <div class=\"col-md-8\">\r\n<div class=\"row\">\r\n<div class=\"col-md-4\" data-aos=\"flip-left\"><img src=\"img/e_web_inverted_01.jpg\" alt=\"\"></div>\r\n<div class=\"col-md-4\" data-aos=\"flip-up\" data-aos-duration=\"1000\"><img src=\"img/e_web_inverted_03.jpg\" alt=\"\"></div>\r\n<div class=\"col-md-4\" data-aos=\"flip-right\"><img src=\"img/e_web_inverted_04.jpg\" alt=\"\"></div>\r\n<div class=\"col-md-4\" data-aos=\"flip-left\"><img src=\"img/e_web_inverted_05.jpg\" alt=\"\"></div>\r\n<div class=\"col-md-4\" data-aos=\"flip-up\" data-aos-duration=\"1000\"><img src=\"img/e_web_inverted_06.jpg\" alt=\"\"></div>\r\n<div class=\"col-md-4\" data-aos=\"flip-right\"><img src=\"img/e_web_inverted_08.jpg\" alt=\"\"></div>\r\n<div class=\"col-md-4\" data-aos=\"flip-left\"><img src=\"img/e_web_inverted_10.jpg\" alt=\"\"></div>\r\n<div class=\"col-md-4\" data-aos=\"flip-up\" data-aos-duration=\"1000\"><img src=\"img/e_web_inverted_13.jpg\" alt=\"\"></div>\r\n<div class=\"col-md-4\" data-aos=\"flip-right\"><img src=\"img/e_web_inverted_17.jpg\" alt=\"\"></div>\r\n</div>\r\n        </div>\r\n      </div>\r\n    </div>\r\n  </section>', 'about-us', '2023-11-20 12:05:32', '2019-03-20 05:43:40', '0', 0, NULL, NULL, '<p>&nbsp;&nbsp;&nbsp;&nbsp;<!--<div class=\"col-25 mg-btm25\">\r\n          <div class=\"accreditionbox\">\r\n            <div class=\"acc-place\">SDA</div>\r\n            <div class=\"acc-txt\">NABH-MIS</div>\r\n          </div>\r\n        </div>\r\n\r\n        <div class=\"col-25 mg-btm25\">\r\n          <div class=\"accreditionbox\">\r\n            <div class=\"acc-place\">Defence Colony</div>\r\n            <div class=\"acc-txt\">NABH-MIS</div>\r\n          </div>\r\n        </div>\r\n\r\n        <div class=\"col-25 mg-btm25\">\r\n          <div class=\"accreditionbox\">\r\n            <div class=\"acc-place\">Pusa Road</div>\r\n            <div class=\"acc-txt\">NABH-MIS</div>\r\n          </div>\r\n        </div>\r\n\r\n        <div class=\"col-25 mg-btm25\">\r\n          <div class=\"accreditionbox\">\r\n            <div class=\"acc-place\">Gurugram</div>\r\n            <div class=\"acc-txt\">NABH-MIS</div>\r\n          </div>\r\n        </div>\r\n\r\n        <div class=\"col-25 mg-btm25\">\r\n          <div class=\"accreditionbox\">\r\n            <div class=\"acc-place\">Sir Ganga Ram Hospital</div>\r\n            <div class=\"acc-txt\">NABH-MIS, NABH</div>\r\n          </div>\r\n        </div>\r\n\r\n        <div class=\"col-25 mg-btm25\">\r\n          <div class=\"accreditionbox\">\r\n            <div class=\"acc-place\">Fortis, Vasant Kunj</div>\r\n            <div class=\"acc-txt\">NABH</div>\r\n          </div>\r\n        </div>\r\n\r\n<div class=\"col-25 mg-btm25\">\r\n          <div class=\"accreditionbox\">\r\n            <div class=\"acc-place\">SIC, Safdarjung Hospital</div>\r\n            <div class=\"acc-txt\">NABH-MIS</div>\r\n          </div>\r\n        </div>\r\n\r\n<div class=\"col-25 mg-btm25\">\r\n          <div class=\"accreditionbox\">\r\n            <div class=\"acc-place\">PSRI Hospital</div>\r\n            <div class=\"acc-txt\">NABH</div>\r\n          </div>\r\n        </div>\r\n\r\n<div class=\"col-25 mg-btm25\">\r\n          <div class=\"accreditionbox\">\r\n            <div class=\"acc-place\">Fortis, Jaipur</div>\r\n            <div class=\"acc-txt\">NABH</div>\r\n          </div>\r\n        </div>--></p>', '<p><br></p>', NULL, 'media/cmspage/image/firebird-winner-1700481931.webp', 'media/cmspage/image_mobile/about_us_banner_mobile-1690896087.webp', NULL, NULL),
(58, 'Thank You', 1, NULL, NULL, 'thank-you', 'Thank You', NULL, NULL, 'thank_you', '2021-03-11 14:30:24', '2019-08-01 09:55:26', '0', 0, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL),
(60, 'Privacy Policy', 1, NULL, NULL, 'privacy-policy', 'Privacy Policy', NULL, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>\r\n          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>\r\n          <h2>Lorem Ipsum is simply dummy</h2>\r\n            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>  \r\n\r\n     <ul class=\"bullet\">\r\n        <li>Supported the quality of education within schools. </li>\r\n        <li>Provided skills and training to help prepare pupils for life after school. </li>\r\n        <li>Helped women and young men from developing communities learn traditional crafts to provide valuable employment. </li>\r\n        <li> Set up self-help groups within rural communities to give women greater financial literacy and autonomy. </li>\r\n        <li>Helped build roads, sanitation units, water pipelines and providing medical facilities. </li>\r\n      </ul>\r\n        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>\r\n          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>\r\n            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>', NULL, '2023-08-04 19:13:15', '2019-08-02 13:46:56', '0', 0, NULL, NULL, '<p><br></p>', NULL, NULL, '', NULL, NULL, NULL),
(82, 'Lady Bamford Charitable Trust', 1, NULL, NULL, 'home', 'Homepage', NULL, '<div class=\"row\">\r\n                <div class=\"col-md-5\">\r\n                    <h2 data-aos=\"fade-down\">About Us</h2>\r\n                    <p data-aos=\"fade-up\">Founded in 2000, The Lady Bamford Charitable Trust supports vulnerable communities in India to access a better quality of life. Working in partnership with the government and local communities through a diverse set of programmes, The Trust has supported the quality of education within schools and augmented the livelihoods of women and youth through skill enhancement. Besides these, the Trust has also supported development initiatives of the government by building roads, sanitation units, water pipelines, and providing medical facilities.</p> <a href=\"about-us.html\" class=\"btn\" data-aos=\"fade-up\" data-aos-duration=\"1000\">LEARN MORE</a> \r\n                </div>\r\n                <div class=\"col-md-7\">\r\n                    <div class=\"location\" data-aos=\"fade-up\">\r\n                        <ul>\r\n                            <li><span>BALLABGARH</span> 7 Villages\r\n                                <br>30 Schools</li>\r\n                            <li><span>JAIPUR</span> 6 Villages\r\n                                <br>20 Schools</li>\r\n                            <li><span>HALOL</span> 5 Villages\r\n                                <br>10 Schools</li>\r\n                            <li><span>PUNE</span> 5 Villages\r\n                                <br>20 Schools</li>\r\n                        </ul>\r\n                        <div class=\"img mapointer\"> <img src=\"img/location_map.png\" alt=\"lbct\"></div>\r\n                    </div>\r\n                </div>\r\n            </div>', NULL, '2023-08-07 16:23:51', '2020-08-08 14:58:10', '0', 0, NULL, NULL, '<div class=\"row\">\r\n				<div class=\"col-md-7 ps-5\">\r\n					<h2 data-aos=\"fade-down\">OUR FOUNDER <span>Carole Bamford</span></h2>\r\n					<p data-aos=\"fade-up\">‘Bringing education to children and providing the infrastructure to access it have always been central to LBCT’s work. As a mother and a grandmother, I am so fortunate to witness the role teaching plays in nurturing the changemakers of tomorrow, so it is something I have always been passionate about supporting.</p>\r\n					<p data-aos=\"fade-up\" data-aos-duration=\"1000\"> Today the scope of LBCT’s work has been broadened, growing from work with a single school in Ballabgargh to projects that are centred around three key objectives: education, provision of employable skills and community engagement – each anchored in the belief that a secure livelihood is possible for all.</p>\r\n					<p data-aos=\"fade-up\" data-aos-duration=\"1500\"> I am very proud that for more than 20 years the work that LBCT carries out has changed so many lives. When I think what has been achieved during that time and the extent of its impact, it makes me hopeful for the next 20.’</p> <a href=\"http://about-us\" class=\"btn\" data-aos=\"fade-up\" data-aos-duration=\"2000\">LEARN MORE</a> </div>\r\n				<div class=\"col-md-5\" data-aos=\"fade-up-right\"> <img src=\"img/our_founder.jpg\" alt=\"lbct\"> </div>\r\n			</div>', NULL, NULL, '', '', NULL, NULL),
(109, 'Terms & Conditions', 1, NULL, NULL, 'terms-conditions', 'Terms & Conditions', NULL, NULL, NULL, '2023-03-01 12:02:44', '2023-03-01 12:02:44', '0', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

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
(18, 'product', '4', 'test-product', '::1', 'Record updated', 'Admin', 6, '2023-11-20 12:19:44', '2023-11-20 12:19:44');

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
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `sortname` varchar(3) NOT NULL,
  `name` varchar(150) NOT NULL,
  `phonecode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`) VALUES
(1, 'AF', 'Afghanistan', 93),
(2, 'AL', 'Albania', 355),
(3, 'DZ', 'Algeria', 213),
(4, 'AS', 'American Samoa', 1684),
(5, 'AD', 'Andorra', 376),
(6, 'AO', 'Angola', 244),
(7, 'AI', 'Anguilla', 1264),
(8, 'AQ', 'Antarctica', 0),
(9, 'AG', 'Antigua And Barbuda', 1268),
(10, 'AR', 'Argentina', 54),
(11, 'AM', 'Armenia', 374),
(12, 'AW', 'Aruba', 297),
(13, 'AU', 'Australia', 61),
(14, 'AT', 'Austria', 43),
(15, 'AZ', 'Azerbaijan', 994),
(16, 'BS', 'Bahamas The', 1242),
(17, 'BH', 'Bahrain', 973),
(18, 'BD', 'Bangladesh', 880),
(19, 'BB', 'Barbados', 1246),
(20, 'BY', 'Belarus', 375),
(21, 'BE', 'Belgium', 32),
(22, 'BZ', 'Belize', 501),
(23, 'BJ', 'Benin', 229),
(24, 'BM', 'Bermuda', 1441),
(25, 'BT', 'Bhutan', 975),
(26, 'BO', 'Bolivia', 591),
(27, 'BA', 'Bosnia and Herzegovina', 387),
(28, 'BW', 'Botswana', 267),
(29, 'BV', 'Bouvet Island', 0),
(30, 'BR', 'Brazil', 55),
(31, 'IO', 'British Indian Ocean Territory', 246),
(32, 'BN', 'Brunei', 673),
(33, 'BG', 'Bulgaria', 359),
(34, 'BF', 'Burkina Faso', 226),
(35, 'BI', 'Burundi', 257),
(36, 'KH', 'Cambodia', 855),
(37, 'CM', 'Cameroon', 237),
(38, 'CA', 'Canada', 1),
(39, 'CV', 'Cape Verde', 238),
(40, 'KY', 'Cayman Islands', 1345),
(41, 'CF', 'Central African Republic', 236),
(42, 'TD', 'Chad', 235),
(43, 'CL', 'Chile', 56),
(44, 'CN', 'China', 86),
(45, 'CX', 'Christmas Island', 61),
(46, 'CC', 'Cocos (Keeling) Islands', 672),
(47, 'CO', 'Colombia', 57),
(48, 'KM', 'Comoros', 269),
(49, 'CG', 'Republic Of The Congo', 242),
(50, 'CD', 'Democratic Republic Of The Congo', 242),
(51, 'CK', 'Cook Islands', 682),
(52, 'CR', 'Costa Rica', 506),
(53, 'CI', 'Cote D\'Ivoire (Ivory Coast)', 225),
(54, 'HR', 'Croatia (Hrvatska)', 385),
(55, 'CU', 'Cuba', 53),
(56, 'CY', 'Cyprus', 357),
(57, 'CZ', 'Czech Republic', 420),
(58, 'DK', 'Denmark', 45),
(59, 'DJ', 'Djibouti', 253),
(60, 'DM', 'Dominica', 1767),
(61, 'DO', 'Dominican Republic', 1809),
(62, 'TP', 'East Timor', 670),
(63, 'EC', 'Ecuador', 593),
(64, 'EG', 'Egypt', 20),
(65, 'SV', 'El Salvador', 503),
(66, 'GQ', 'Equatorial Guinea', 240),
(67, 'ER', 'Eritrea', 291),
(68, 'EE', 'Estonia', 372),
(69, 'ET', 'Ethiopia', 251),
(70, 'XA', 'External Territories of Australia', 61),
(71, 'FK', 'Falkland Islands', 500),
(72, 'FO', 'Faroe Islands', 298),
(73, 'FJ', 'Fiji Islands', 679),
(74, 'FI', 'Finland', 358),
(75, 'FR', 'France', 33),
(76, 'GF', 'French Guiana', 594),
(77, 'PF', 'French Polynesia', 689),
(78, 'TF', 'French Southern Territories', 0),
(79, 'GA', 'Gabon', 241),
(80, 'GM', 'Gambia The', 220),
(81, 'GE', 'Georgia', 995),
(82, 'DE', 'Germany', 49),
(83, 'GH', 'Ghana', 233),
(84, 'GI', 'Gibraltar', 350),
(85, 'GR', 'Greece', 30),
(86, 'GL', 'Greenland', 299),
(87, 'GD', 'Grenada', 1473),
(88, 'GP', 'Guadeloupe', 590),
(89, 'GU', 'Guam', 1671),
(90, 'GT', 'Guatemala', 502),
(91, 'XU', 'Guernsey and Alderney', 44),
(92, 'GN', 'Guinea', 224),
(93, 'GW', 'Guinea-Bissau', 245),
(94, 'GY', 'Guyana', 592),
(95, 'HT', 'Haiti', 509),
(96, 'HM', 'Heard and McDonald Islands', 0),
(97, 'HN', 'Honduras', 504),
(98, 'HK', 'Hong Kong S.A.R.', 852),
(99, 'HU', 'Hungary', 36),
(100, 'IS', 'Iceland', 354),
(101, 'IN', 'India', 91),
(102, 'ID', 'Indonesia', 62),
(103, 'IR', 'Iran', 98),
(104, 'IQ', 'Iraq', 964),
(105, 'IE', 'Ireland', 353),
(106, 'IL', 'Israel', 972),
(107, 'IT', 'Italy', 39),
(108, 'JM', 'Jamaica', 1876),
(109, 'JP', 'Japan', 81),
(110, 'XJ', 'Jersey', 44),
(111, 'JO', 'Jordan', 962),
(112, 'KZ', 'Kazakhstan', 7),
(113, 'KE', 'Kenya', 254),
(114, 'KI', 'Kiribati', 686),
(115, 'KP', 'Korea North', 850),
(116, 'KR', 'Korea South', 82),
(117, 'KW', 'Kuwait', 965),
(118, 'KG', 'Kyrgyzstan', 996),
(119, 'LA', 'Laos', 856),
(120, 'LV', 'Latvia', 371),
(121, 'LB', 'Lebanon', 961),
(122, 'LS', 'Lesotho', 266),
(123, 'LR', 'Liberia', 231),
(124, 'LY', 'Libya', 218),
(125, 'LI', 'Liechtenstein', 423),
(126, 'LT', 'Lithuania', 370),
(127, 'LU', 'Luxembourg', 352),
(128, 'MO', 'Macau S.A.R.', 853),
(129, 'MK', 'Macedonia', 389),
(130, 'MG', 'Madagascar', 261),
(131, 'MW', 'Malawi', 265),
(132, 'MY', 'Malaysia', 60),
(133, 'MV', 'Maldives', 960),
(134, 'ML', 'Mali', 223),
(135, 'MT', 'Malta', 356),
(136, 'XM', 'Man (Isle of)', 44),
(137, 'MH', 'Marshall Islands', 692),
(138, 'MQ', 'Martinique', 596),
(139, 'MR', 'Mauritania', 222),
(140, 'MU', 'Mauritius', 230),
(141, 'YT', 'Mayotte', 269),
(142, 'MX', 'Mexico', 52),
(143, 'FM', 'Micronesia', 691),
(144, 'MD', 'Moldova', 373),
(145, 'MC', 'Monaco', 377),
(146, 'MN', 'Mongolia', 976),
(147, 'MS', 'Montserrat', 1664),
(148, 'MA', 'Morocco', 212),
(149, 'MZ', 'Mozambique', 258),
(150, 'MM', 'Myanmar', 95),
(151, 'NA', 'Namibia', 264),
(152, 'NR', 'Nauru', 674),
(153, 'NP', 'Nepal', 977),
(154, 'AN', 'Netherlands Antilles', 599),
(155, 'NL', 'Netherlands The', 31),
(156, 'NC', 'New Caledonia', 687),
(157, 'NZ', 'New Zealand', 64),
(158, 'NI', 'Nicaragua', 505),
(159, 'NE', 'Niger', 227),
(160, 'NG', 'Nigeria', 234),
(161, 'NU', 'Niue', 683),
(162, 'NF', 'Norfolk Island', 672),
(163, 'MP', 'Northern Mariana Islands', 1670),
(164, 'NO', 'Norway', 47),
(165, 'OM', 'Oman', 968),
(166, 'PK', 'Pakistan', 92),
(167, 'PW', 'Palau', 680),
(168, 'PS', 'Palestinian Territory Occupied', 970),
(169, 'PA', 'Panama', 507),
(170, 'PG', 'Papua new Guinea', 675),
(171, 'PY', 'Paraguay', 595),
(172, 'PE', 'Peru', 51),
(173, 'PH', 'Philippines', 63),
(174, 'PN', 'Pitcairn Island', 0),
(175, 'PL', 'Poland', 48),
(176, 'PT', 'Portugal', 351),
(177, 'PR', 'Puerto Rico', 1787),
(178, 'QA', 'Qatar', 974),
(179, 'RE', 'Reunion', 262),
(180, 'RO', 'Romania', 40),
(181, 'RU', 'Russia', 70),
(182, 'RW', 'Rwanda', 250),
(183, 'SH', 'Saint Helena', 290),
(184, 'KN', 'Saint Kitts And Nevis', 1869),
(185, 'LC', 'Saint Lucia', 1758),
(186, 'PM', 'Saint Pierre and Miquelon', 508),
(187, 'VC', 'Saint Vincent And The Grenadines', 1784),
(188, 'WS', 'Samoa', 684),
(189, 'SM', 'San Marino', 378),
(190, 'ST', 'Sao Tome and Principe', 239),
(191, 'SA', 'Saudi Arabia', 966),
(192, 'SN', 'Senegal', 221),
(193, 'RS', 'Serbia', 381),
(194, 'SC', 'Seychelles', 248),
(195, 'SL', 'Sierra Leone', 232),
(196, 'SG', 'Singapore', 65),
(197, 'SK', 'Slovakia', 421),
(198, 'SI', 'Slovenia', 386),
(199, 'XG', 'Smaller Territories of the UK', 44),
(200, 'SB', 'Solomon Islands', 677),
(201, 'SO', 'Somalia', 252),
(202, 'ZA', 'South Africa', 27),
(203, 'GS', 'South Georgia', 0),
(204, 'SS', 'South Sudan', 211),
(205, 'ES', 'Spain', 34),
(206, 'LK', 'Sri Lanka', 94),
(207, 'SD', 'Sudan', 249),
(208, 'SR', 'Suriname', 597),
(209, 'SJ', 'Svalbard And Jan Mayen Islands', 47),
(210, 'SZ', 'Swaziland', 268),
(211, 'SE', 'Sweden', 46),
(212, 'CH', 'Switzerland', 41),
(213, 'SY', 'Syria', 963),
(214, 'TW', 'Taiwan', 886),
(215, 'TJ', 'Tajikistan', 992),
(216, 'TZ', 'Tanzania', 255),
(217, 'TH', 'Thailand', 66),
(218, 'TG', 'Togo', 228),
(219, 'TK', 'Tokelau', 690),
(220, 'TO', 'Tonga', 676),
(221, 'TT', 'Trinidad And Tobago', 1868),
(222, 'TN', 'Tunisia', 216),
(223, 'TR', 'Turkey', 90),
(224, 'TM', 'Turkmenistan', 7370),
(225, 'TC', 'Turks And Caicos Islands', 1649),
(226, 'TV', 'Tuvalu', 688),
(227, 'UG', 'Uganda', 256),
(228, 'UA', 'Ukraine', 380),
(229, 'AE', 'United Arab Emirates', 971),
(230, 'GB', 'United Kingdom', 44),
(231, 'US', 'United States', 1),
(232, 'UM', 'United States Minor Outlying Islands', 1),
(233, 'UY', 'Uruguay', 598),
(234, 'UZ', 'Uzbekistan', 998),
(235, 'VU', 'Vanuatu', 678),
(236, 'VA', 'Vatican City State (Holy See)', 39),
(237, 'VE', 'Venezuela', 58),
(238, 'VN', 'Vietnam', 84),
(239, 'VG', 'Virgin Islands (British)', 1284),
(240, 'VI', 'Virgin Islands (US)', 1340),
(241, 'WF', 'Wallis And Futuna Islands', 681),
(242, 'EH', 'Western Sahara', 212),
(243, 'YE', 'Yemen', 967),
(244, 'YU', 'Yugoslavia', 38),
(245, 'ZM', 'Zambia', 260),
(246, 'ZW', 'Zimbabwe', 263);

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int(11) NOT NULL,
  `qsn` text NOT NULL,
  `ans` text NOT NULL,
  `status` varchar(111) NOT NULL,
  `type` varchar(111) DEFAULT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `locate_dealer`
--

CREATE TABLE `locate_dealer` (
  `id` int(11) NOT NULL,
  `name` varchar(111) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sorting` int(11) DEFAULT NULL,
  `contact_person` varchar(222) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(111) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax` varchar(222) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` mediumtext COLLATE utf8mb4_unicode_ci,
  `pincode` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `landline` varchar(222) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `timings` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latitude` varchar(222) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `longitude` varchar(222) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(111) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(111) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_map_link` text COLLATE utf8mb4_unicode_ci,
  `tests` text COLLATE utf8mb4_unicode_ci,
  `slug` varchar(111) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_text` text COLLATE utf8mb4_unicode_ci,
  `facilities_available` text COLLATE utf8mb4_unicode_ci,
  `image` text COLLATE utf8mb4_unicode_ci,
  `image_mobile` text COLLATE utf8mb4_unicode_ci,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `media_gallery`
--

CREATE TABLE `media_gallery` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `content_type` varchar(111) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_link` text COLLATE utf8mb4_unicode_ci,
  `video_length` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `download_file` text COLLATE utf8mb4_unicode_ci,
  `sorting` date DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `name` varchar(111) DEFAULT NULL,
  `email` varchar(222) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `organisation` varchar(222) DEFAULT NULL,
  `designation` varchar(222) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `name`, `email`, `created_at`, `updated_at`, `organisation`, `designation`) VALUES
(1, NULL, 'admin20123@gmail.com', '2023-11-20 17:01:56', '2023-11-20 17:01:56', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` text COLLATE utf8mb4_unicode_ci,
  `sorting` int(11) DEFAULT NULL,
  `sub_text` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `layout` varchar(111) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `image_mobile` text COLLATE utf8mb4_unicode_ci,
  `thumbnail_image` text COLLATE utf8mb4_unicode_ci,
  `tag` text COLLATE utf8mb4_unicode_ci,
  `views_count` int(11) DEFAULT NULL,
  `page_title` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_other` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(4) DEFAULT '1',
  `short_description` text COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `search_text` text COLLATE utf8mb4_unicode_ci,
  `locations` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `slug`, `name`, `category_id`, `sorting`, `sub_text`, `layout`, `image`, `image_mobile`, `thumbnail_image`, `tag`, `views_count`, `page_title`, `meta_keywords`, `meta_description`, `meta_other`, `status`, `short_description`, `description`, `search_text`, `locations`, `created_at`, `updated_at`) VALUES
(4, 'test-product', 'Test Product', '2', NULL, NULL, NULL, 'media/community/image/firebird-winner-1700482779.webp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'Test', '<p>test</p>', NULL, NULL, '2023-11-20 12:19:40', '2023-11-20 12:19:40');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(222) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sorting` int(11) DEFAULT NULL,
  `sub_text` text COLLATE utf8mb4_unicode_ci,
  `content` text COLLATE utf8mb4_unicode_ci,
  `content2` text COLLATE utf8mb4_unicode_ci,
  `content3` longtext COLLATE utf8mb4_unicode_ci,
  `parent_id` int(11) DEFAULT '0',
  `image` text COLLATE utf8mb4_unicode_ci,
  `image2` text COLLATE utf8mb4_unicode_ci,
  `image_banner` text COLLATE utf8mb4_unicode_ci,
  `image_banner_mobile` text COLLATE utf8mb4_unicode_ci,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_title` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `image_alt` varchar(222) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_other` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(4) DEFAULT NULL,
  `layout` varchar(222) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`id`, `name`, `type`, `sorting`, `sub_text`, `content`, `content2`, `content3`, `parent_id`, `image`, `image2`, `image_banner`, `image_banner_mobile`, `slug`, `page_title`, `meta_keywords`, `meta_description`, `image_alt`, `meta_other`, `status`, `layout`, `created_at`, `updated_at`) VALUES
(2, 'Category', NULL, 2, 'Category Category Category Category Category Category Category Category', NULL, NULL, NULL, 0, '', '', '', NULL, 'category', 'Category', NULL, NULL, NULL, NULL, 1, NULL, '2023-08-04 16:46:58', '2023-11-20 12:17:22');

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
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `id` int(10) UNSIGNED NOT NULL,
  `state` varchar(50) NOT NULL,
  `state_code` varchar(222) DEFAULT NULL,
  `customer_code` varchar(222) NOT NULL DEFAULT '1808609'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `state`, `state_code`, `customer_code`) VALUES
(1, 'ANDHRA PRADESH', 'AD', '1850001'),
(2, 'ANDAMAN AND NICOBAR', 'AN', '1850002'),
(3, 'ANDHRA PRADESH', 'AP', '1850003'),
(4, 'ARUNACHAL PRADESH', 'AR', '1850004'),
(5, 'ASSAM', 'AS', '1850005'),
(6, 'BIHAR', 'BR', '1850006'),
(7, 'CHANDIGARH', 'CH', '1850007'),
(8, 'CHHATTISGARH', 'CT', '1850008'),
(9, 'DELHI', 'DL', '1850009'),
(10, 'DADRA AND NAGAR HAVE', 'DN', '1850010'),
(11, 'GOA', 'GA', '1850011'),
(12, 'GUJARAT', 'GJ', '1850012'),
(13, 'HIMACHAL PRADESH', 'HP', '1850013'),
(14, 'HARYANA', 'HR', '1850014'),
(15, 'JHARKHAND', 'JH', '1850015'),
(16, 'Jammu and Kashmir', 'JK', '1850016'),
(17, 'KARNATAKA', 'KA', '1850017'),
(18, 'KERALA', 'KL', '1850018'),
(19, 'MAHARASHTRA', 'MH', '1850019'),
(20, 'MEGHALAYA', 'ML', '1850020'),
(21, 'MANIPUR', 'MN', '1850021'),
(22, 'MADHYA PRADESH', 'MP', '1850022'),
(23, 'MIZORAM', 'MZ', '1850023'),
(24, 'NAGALAND', 'NL', '1850024'),
(25, 'ORISSA', 'OR', '1850025'),
(26, 'PUNJAB', 'PB', '1850026'),
(27, 'PUDUCHERRY', 'PY', '1850027'),
(28, 'RAJASTHAN', 'RJ', '1850028'),
(29, 'SIKKIM', 'SK', '1850029'),
(30, 'TELANGANA', 'TG', '1850030'),
(31, 'TAMIL NADU', 'TN', '1850031'),
(32, 'TRIPURA', 'TR', '1850032'),
(33, 'UTTAR PRADESH', 'UP', '1850033'),
(34, 'UTTARAKHAND', 'UT', '1850034'),
(35, 'WEST BENGAL', 'WB', '1850035');

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
(6, 'Admin', 'admin@gmail.com', 'admin@gmail.com', '$2y$10$U9HGWOl8rEwnkt.A1JDRf.AH4ZB4Dqs0UavUD/z/Jrc7e/ZfBYucm', 'kKfdq89qk4URf3TntfaeeBGRCk4rsBhgaHPuWIVTgAaxLxYBmkvBGOtHJaTZ', '2018-04-06 05:47:28', '2022-11-18 10:54:49', NULL, '8860221289', 1, 'all-modules', 1);

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
-- Indexes for table `blog_category`
--
ALTER TABLE `blog_category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blog_categories_slug_unique` (`slug`);

--
-- Indexes for table `blog_comment`
--
ALTER TABLE `blog_comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_comments_blog_id_foreign` (`blog_id`);

--
-- Indexes for table `blog_post`
--
ALTER TABLE `blog_post`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blogs_slug_unique` (`slug`),
  ADD KEY `blogs_ibfk_1` (`category_id`);

--
-- Indexes for table `blog_tag`
--
ALTER TABLE `blog_tag`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `career_application`
--
ALTER TABLE `career_application`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `career_job`
--
ALTER TABLE `career_job`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`job_slug`),
  ADD UNIQUE KEY `job_code` (`job_code`);

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
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locate_dealer`
--
ALTER TABLE `locate_dealer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `media_gallery`
--
ALTER TABLE `media_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `redirect_url`
--
ALTER TABLE `redirect_url`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
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
-- AUTO_INCREMENT for table `blog_category`
--
ALTER TABLE `blog_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog_comment`
--
ALTER TABLE `blog_comment`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog_post`
--
ALTER TABLE `blog_post`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog_tag`
--
ALTER TABLE `blog_tag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `career_application`
--
ALTER TABLE `career_application`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `career_job`
--
ALTER TABLE `career_job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cms_banner`
--
ALTER TABLE `cms_banner`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cms_block`
--
ALTER TABLE `cms_block`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `cms_page`
--
ALTER TABLE `cms_page`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT COMMENT 'Page ID', AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `locate_dealer`
--
ALTER TABLE `locate_dealer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media_gallery`
--
ALTER TABLE `media_gallery`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `redirect_url`
--
ALTER TABLE `redirect_url`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

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
