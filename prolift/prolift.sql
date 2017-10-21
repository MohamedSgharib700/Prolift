-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2017 at 06:52 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prolift`
--

-- --------------------------------------------------------

--
-- Table structure for table `abotutus_titles`
--

CREATE TABLE `abotutus_titles` (
  `id` int(10) UNSIGNED NOT NULL,
  `titles` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abotutus_titles`
--

INSERT INTO `abotutus_titles` (`id`, `titles`, `images`, `created_at`, `updated_at`) VALUES
(1, 'About US test', '1503895169.2222.jpg', NULL, '2017-08-28 02:39:29');

-- --------------------------------------------------------

--
-- Table structure for table `about_homes`
--

CREATE TABLE `about_homes` (
  `id` int(10) UNSIGNED NOT NULL,
  `question` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_homes`
--

INSERT INTO `about_homes` (`id`, `question`, `answer`, `created_at`, `updated_at`) VALUES
(1, 'Poducts Poducts Poducts', 'how To ...............?', NULL, '2017-08-23 09:27:35');

-- --------------------------------------------------------

--
-- Table structure for table `blog_titles`
--

CREATE TABLE `blog_titles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_titles`
--

INSERT INTO `blog_titles` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Nwes Blog test', '1503898127.118462969.jpg', NULL, '2017-08-28 03:28:47');

-- --------------------------------------------------------

--
-- Table structure for table `category_products`
--

CREATE TABLE `category_products` (
  `id` int(10) NOT NULL,
  `type` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `namePage` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category_products`
--

INSERT INTO `category_products` (`id`, `type`, `namePage`) VALUES
(1, 'zzzzzzzz', 'Category1'),
(13, NULL, 'Category2');

-- --------------------------------------------------------

--
-- Table structure for table `category_services`
--

CREATE TABLE `category_services` (
  `id` int(10) NOT NULL,
  `type` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `namePage` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category_services`
--

INSERT INTO `category_services` (`id`, `type`, `namePage`) VALUES
(1, 'SS', 'Apps'),
(2, NULL, 'Hosting');

-- --------------------------------------------------------

--
-- Table structure for table `clints_homes`
--

CREATE TABLE `clints_homes` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `specialty` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clints_homes`
--

INSERT INTO `clints_homes` (`id`, `title`, `content`, `specialty`, `image`, `created_at`, `updated_at`) VALUES
(1, 'mohamed', '<p>asda asd asd asd sad asd sad sHHhHHHHHHHhhhh</p>', 'CEO', '1503729581.6e629e2e2d.jpg', NULL, '2017-08-26 04:39:41'),
(4, 'Sayed', '<p>imgClints&nbsp;imgClints&nbsp;imgClints&nbsp;imgClints&nbsp;imgClints</p>', 'Dev', '1503729779.football_tactics-2.jpg', '2017-08-26 04:42:59', '2017-08-26 04:42:59');

-- --------------------------------------------------------

--
-- Table structure for table `contactus_detes`
--

CREATE TABLE `contactus_detes` (
  `id` int(10) UNSIGNED NOT NULL,
  `title_page` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_face` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_twitter` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_linkadin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_mail1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_mail2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_mail3` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_phone1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_phone2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_phone3` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_address1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_address2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_address3` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone3` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_face` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_twitter` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_linkadin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_mail1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_mail2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_mail3` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contactus_detes`
--

INSERT INTO `contactus_detes` (`id`, `title_page`, `title_face`, `title_twitter`, `title_linkadin`, `title_mail1`, `title_mail2`, `title_mail3`, `title_phone1`, `title_phone2`, `title_phone3`, `title_address1`, `title_address2`, `title_address3`, `phone1`, `phone2`, `phone3`, `url_face`, `url_twitter`, `url_linkadin`, `url_mail1`, `url_mail2`, `url_mail3`, `created_at`, `updated_at`) VALUES
(1, 'Contact US test', 'Facebook test', 'TWitter test', 'LINkadin test', 'dasdas@asdasad', 'dasdas@asdasad', 'dasdas@asdasad', 'CEO', 'Developer', 'test', 'test test test1', 'test test test2', 'test test test3', '011111', '0122222', '0100000', 'https://www.facebook.com/', 'https://www.twitter.com/', 'https://www.linkedin.com/', 'http://www.multimega-eg.com/', 'http://www.multimega-eg.com/', 'http://www.multimega-eg.com/', NULL, '2017-08-28 11:58:50');

-- --------------------------------------------------------

--
-- Table structure for table `contact_homes`
--

CREATE TABLE `contact_homes` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_homes`
--

INSERT INTO `contact_homes` (`id`, `title`, `sub_title`, `content`, `title1`, `phone`, `title2`, `email`, `created_at`, `updated_at`) VALUES
(1, 'BUSINES', 'Talk to a WEB SITE', '<p>asdsa dsad sd sad sad sad sad asd sa DDDDas</p>', 'CALL US NOW', '010000037', 'SEND AN EMAIL', 'Prolift@gmail.com', NULL, '2017-08-26 20:35:27');

-- --------------------------------------------------------

--
-- Table structure for table `contact_plants`
--

CREATE TABLE `contact_plants` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_plants`
--

INSERT INTO `contact_plants` (`id`, `title`, `sub_title`, `title1`, `email`, `url_email`, `title2`, `phone`, `images`, `created_at`, `updated_at`) VALUES
(1, 'contact to', 'contact Us zzzzzzzz', 'email test', 'asdasd@dad.com', 'http://www.multimega-eg.com/', 'phone test', '010000037', '1503826358.335.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `content_abotutuss`
--

CREATE TABLE `content_abotutuss` (
  `id` int(10) UNSIGNED NOT NULL,
  `titles` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(4000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `content_abotutuss`
--

INSERT INTO `content_abotutuss` (`id`, `titles`, `content`, `images`, `created_at`, `updated_at`) VALUES
(1, '\\zx\\zxxcz', 'aaaaaaaaaaaaaaaaaaaaaaa  aaaaaaaaaa aaaaaaaaaa aaaaaaaaaa aaaaaaaaaa aaaaaaaaaa aaaaaaaaaa aaaaaaaaaa aaaaaaaaaa aaaaaaaaaa aaaaaaaaaa  aaaaaaaaaa aaaaaaaaaa aaaaaaaaaa aaaaaaaaaa aaaaaaaaaa aaaaaaaaaa', '1503859544.2222.jpg', NULL, NULL),
(2, 'xcvcxv', '<p>x xcvcxvcxv vcx v cxv cx vc xv cx vc v xc v cxv c v cv c xv xc v</p>', '1503859564.1111.jpg', NULL, NULL),
(7, 'zzzzzz', 'aaaaaaaaaa aaaaaaaaaa aaaaaaaaaa aaaaaaaaaa aaaaaaaaaa aaaaaaaaaa aaaaaaaaaa aaaaaaaaaa aaaaaaaaaa aaaaaaaaaa aaaaaaaaaa aaaaaaaaaa aaaaaaaaaa aaaaaaaaaa aaaaaaaaaa aaaaaaaaaa aaaaaaaaaa aaaaaaaaaa aaaaaaaaaa aaaaaaaaaa aaaaaaaaaa aaaaaaaaaa aaaaaaaaaa aaaaaaaaaa aaaaaaaaaa aaaaaaaaaa aaaaaaaaaa aaaaaaaaaa aaaaaaaaaa  aaaaaaaaaa aaaaaaaaaa aaaaaaaaaa aaaaaaaaaa aaaaaaaaaa aaaaaaaaaa aaaaaaaaaa aaaaaaaaaa aaaaaaaaaa aaaaaaaaaa aaaaaaaaaa ', '1503861095.18342799_928973567243501_5707913721739644743_n.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employes`
--

CREATE TABLE `employes` (
  `id` int(10) UNSIGNED NOT NULL,
  `titles` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_titles` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `specialty` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contents` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_face` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_twitter` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_linkedin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_google` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employes`
--

INSERT INTO `employes` (`id`, `titles`, `sub_titles`, `specialty`, `contents`, `images`, `url_face`, `url_twitter`, `url_linkedin`, `url_google`, `created_at`, `updated_at`) VALUES
(2, 'Sayed G', 'Director of G Company', 'CEO 1', '<p>zz\\x\\z x\\z xds &nbsp;fds s df &nbsp; &nbsp;sdf &nbsp;sfsd &nbsp; sd fs df s dfs&nbsp;</p>', '1503833577.c33b55c2-39a7-4cf0-9db6-2763f21d81c0.jpg', 'https://www.facebook.com/ 1', 'https://www.twitter.com/ 1', 'https://www.linkedin.com/ 1', 'https://plus.google.com/ 1', NULL, NULL),
(4, 'sadasd', 'sad', 'sadasd', '<p>zczxczx sdfdsfsdf sdfsdfsdf</p>', '1503834497.2014121536181.jpg', 'asdasd', 'sdad', 'dsada', 'asdasd', NULL, NULL),
(5, 'zxz\\', '\\zxx\\z', 'xz\\x', '<p>z\\x\\zx &nbsp;\\zx \\z x\\zx &nbsp;\\ x\\z x &nbsp;zx\\ x \\zx</p>', '1503834556.6e629e2e2d.jpg', 'zx\\zx', '\\zz\\x', '\\zxz\\x', 'zx\\xzx', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `footers`
--

CREATE TABLE `footers` (
  `id` int(10) UNSIGNED NOT NULL,
  `sub_title1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titles1` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titles2` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_title1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_title2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_title3` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `copy_right` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footers`
--

INSERT INTO `footers` (`id`, `sub_title1`, `sub_title2`, `phone`, `logo`, `titles1`, `titles2`, `url_title1`, `url_title2`, `url_title3`, `copy_right`, `created_at`, `updated_at`) VALUES
(1, 'ContactUs', 'AboutUs', '011222222222', '1503491166.logo.png', 'POLICIES', 'COMPANY', 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.instagram.com/', '© Copyright 2017. All Rights Reserved', NULL, '2017-08-23 10:26:06');

-- --------------------------------------------------------

--
-- Table structure for table `headers`
--

CREATE TABLE `headers` (
  `id` int(10) UNSIGNED NOT NULL,
  `logos` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'logo.png',
  `contactTitle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `metaTitles` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metaDescrabtions` varchar(600) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keywords` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titleSite` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `headers`
--

INSERT INTO `headers` (`id`, `logos`, `contactTitle`, `phone`, `created_at`, `updated_at`, `metaTitles`, `metaDescrabtions`, `keywords`, `titleSite`) VALUES
(1, '1503922080.logo.png', 'call us1', '01211111', NULL, '2017-08-28 10:08:00', 'Prolift', 'Prolift Prolift Prolift Prolift Prolift Prolift  Prolift', 'Prolift Prolift Prolift', 'Gharib');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `select` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(6000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `phone`, `select`, `message`, `created_at`, `updated_at`) VALUES
(2, 'sayed', 'Abdallah400@gmail.com', '010000037', 'Option 3', 'sd asdasd as adasdasd ada das dasdasda dasdasda dasdasda cdasdasda v dasdasda dasdasda dasdasda dasdasda dasdasda dasdasda dasdasda dasdasda dasdasda dasdasda dasdasdadasdasda dasdasda dasdasda dasdasda dasdasda dasdasda dasdasda dasdasda dasdasda dasdasda dasdasda dasdasda dasdasda dasdasda dasdasda dasdasda dasdasda  sdasdas a asd asdasd', '2017-08-21 10:29:26', '2017-08-21 10:29:26'),
(3, 'Admin1', 'admin.g400@gmail.com', '01111111111', 'Option 4', 'fdgsdsg s', '2017-08-21 10:52:33', '2017-08-21 10:52:33'),
(4, 'hghghg', 'ahmeds@oscar.com', '1151155665', 'Option 3', 'sfsdf sfs fsdfsdf sfsf', '2017-08-21 11:18:43', '2017-08-21 11:18:43'),
(5, 'sdfdsf', 'admin.g400@gmail.com', '01111111111', NULL, 'asddasdasd ad ad asdas', NULL, NULL),
(6, 'asdasdad', 'ahmeds@oscar.com', '01111111111', NULL, 'sadasd as dasd as dasd asd asdas as d asd sa s sa dasdas asd as', NULL, NULL),
(7, 'gharib', 'Abdallah400@gmail.com', '01111111111', NULL, 'sadasd as dasd as dasd asd asdas as d asd sa s sa dasdas asd as', NULL, NULL),
(8, 'Admin1', 'g400@gmail.com', '01111111111', 'Option 1', '\\zx\\zx\\zxx\\xcscs s sds ds sds ds ds ds sdds', NULL, NULL),
(9, 'mohamed', 'Abdallah400@gmail.com', '01111111111', 'Option 2', 'xxxx c  ccs  s s  s s s s s sssssssss  sssssssssss s ssssssssssss s s', NULL, NULL),
(10, 'gharib', 'mohamed700@gmail.com', '010000037', 'Option 2', 'zzzzzzzz z             zzzzzzzzzzz zzzzzzz zzzzzzzzzz zzz', NULL, NULL),
(11, 'mohamed', 'ahmeds@oscar.com', '11111111', 'Option 2', 'xxxxxxxxx cccccccccc v vvvvvvvvvv vvvvvvvvvvvvv', NULL, NULL),
(12, 'Admin1', 'admin.g400@gmail.com', '01111111111', 'Option 1', 'ddddddddddd ddddddddddddddddd  dddddddd', NULL, NULL),
(13, 'mohamed', 'mohamed700@gmail.com', '01111111111', 'Option 1', 'mohamed mohamed mohamed mohamed mohamed mohamed', NULL, NULL),
(14, 'cccc', 'admin.g400@gmail.com', '11111', NULL, 'ccccc', NULL, NULL);

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_08_15_154626_create_header_table', 1),
(4, '2017_08_16_110445_create_slides_table', 2),
(5, '2017_08_16_112807_create_about_home_table', 3),
(6, '2017_08_16_113751_create_products_table', 4),
(7, '2017_08_16_114321_create_reports_home_table', 5),
(8, '2017_08_16_122802_create_products_shows_table', 6),
(9, '2017_08_16_124536_create_definition_company_table', 7),
(10, '2017_08_16_130133_create_clints_home_table', 8),
(11, '2017_08_16_140946_create_news_home_table', 9),
(12, '2017_08_16_144210_create_contact_home_table', 10),
(13, '2017_08_16_145851_create_footer_table', 11),
(14, '2017_08_17_103934_create_slider_plants_table', 12),
(15, '2017_08_17_105127_create_plants_table', 13),
(16, '2017_08_17_105941_create_contact_plants_table', 14),
(17, '2017_08_17_114138_create_titleP_page_table', 15),
(18, '2017_08_17_120727_create_estratiges_table', 16),
(19, '2017_08_17_122058_create_services_titles_table', 16),
(20, '2017_08_17_122921_create_services_table', 17),
(21, '2017_08_17_141001_create_titles_academy_table', 18),
(22, '2017_08_17_142041_create_employes_table', 19),
(23, '2017_08_17_144705_create_titles_aboutUs_table', 20),
(24, '2017_08_17_145114_create_content_aboutUss_table', 21),
(25, '2017_08_17_145739_create_contactUs_date_table', 22),
(26, '2017_08_20_085513_create_our_mission_table', 23),
(27, '2017_08_21_085855_create_posts_table', 24),
(28, '2017_08_21_093423_create_blog_titles_table', 25),
(29, '2017_08_21_114732_create_messages_table', 26);

-- --------------------------------------------------------

--
-- Table structure for table `news_homes`
--

CREATE TABLE `news_homes` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title3` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Ddata1` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MYdata1` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Ddata2` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MYdata2` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Ddata3` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MYdata3` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content3` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `clints_title` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Csub_title` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news_homes`
--

INSERT INTO `news_homes` (`id`, `title`, `sub_title`, `title1`, `title2`, `title3`, `Ddata1`, `MYdata1`, `Ddata2`, `MYdata2`, `Ddata3`, `MYdata3`, `content1`, `content2`, `content3`, `clints_title`, `Csub_title`, `created_at`, `updated_at`) VALUES
(1, 'test News', 'test News test News', 'Products 1', 'Clients', 'Years in Busines 60', '2', 'nov-6', '6', 'mirs-4', '8', 'DEsam-12', '<p>&nbsp;Products 1&nbsp;Products 1&nbsp;Products 1 &nbsp;Products 1</p>', '<p>Clients &nbsp;Clients &nbsp;&nbsp;Clients &nbsp;&nbsp;Clients &nbsp;Clients</p>', '<p>&nbsp;Years in Busines 60 &nbsp;Years in Busines 60&nbsp;</p>', 'clintsss', 'clint clint  clint ', '2017-07-31 22:00:00', '2017-08-26 19:35:03');

-- --------------------------------------------------------

--
-- Table structure for table `our_missions`
--

CREATE TABLE `our_missions` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title1` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content1` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image1` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title2` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content2` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image2` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title3` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content3` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image3` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `our_missions`
--

INSERT INTO `our_missions` (`id`, `title`, `sub_title`, `title1`, `content1`, `image1`, `title2`, `content2`, `image2`, `title3`, `content3`, `image3`, `created_at`, `updated_at`) VALUES
(1, 'WHY CHOOSE US ddddd', '3 Basic dddd', 'PEOPLEG VIB', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci,&nbsp;</p>', '1503748453.335.jpg', 'PROCESS TIT', '<p>Adipisci, libero blanditiis Adipisci, libero blanditiis Adipisci, libero blanditiis tttttttttt</p>', '1503748453.118462969.jpg', 'PRODUCT', '<p>aadada asd asdas dasd ad asdasd asdasd asd sad sad aszzzzzzzzzz</p>', '1503748453.img-102617-20160713213555.jpg', NULL, NULL);

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
-- Table structure for table `plants`
--

CREATE TABLE `plants` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `plants`
--

INSERT INTO `plants` (`id`, `title`, `sub_title`, `content`, `image`, `created_at`, `updated_at`) VALUES
(2, 'LabTop 1', 'Dell', '<p>asdsadasd asdasd dad</p>\r\n\r\n<p>asdasdasds</p>\r\n\r\n<p>sadsadsadsad</p>', '1503821581.0802201512124.jpg', NULL, '2017-08-27 06:13:01'),
(3, 'Tab', 'Tab Tab Tab', '<p>Tab&nbsp;Tab&nbsp;Tab&nbsp;Tab &nbsp;<u><strong>Tab </strong>&nbsp; &nbsp;</u>Tab &nbsp;Tab</p>', '1503822242.118462969.jpg', '2017-08-27 06:24:02', '2017-08-27 06:24:02');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `titles` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contents` varchar(4000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `custom_url` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `likes` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comments` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `days` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `months` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `years` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `titles`, `images`, `contents`, `custom_url`, `likes`, `comments`, `days`, `months`, `years`, `created_at`, `updated_at`) VALUES
(1, 'Developer T', '1503899576.0802201512124.jpg', '<p>asdasd ad adasd asdsdasd adasd s<strong><u>adas dsadas das das dasd</u></strong></p>\r\n\r\n<p>dasd asdsdasd&nbsp;dasd asdsdasd&nbsp;dasd asdsdasd&nbsp;dasd asdsdasd&nbsp;dasd asdsdasd&nbsp;</p>\r\n\r\n<p>dasd asdsdasd&nbsp;dasd asdsdasd&nbsp;dasd asdsdasd&nbsp;dasd asdsdasd</p>\r\n\r\n<p>dasd asdsdasd&nbsp;dasd asdsdasd&nbsp;dasd asdsdasd&nbsp;dasd asdsdasd&nbsp;</p>\r\n\r\n<p>dasd asdsdasd&nbsp;dasd asdsdasd&nbsp;dasd asdsdasd&nbsp;dasd asdsdasd&nbsp;</p>', 'post1', '100', '200', '13', 'Octoper', '2000', NULL, NULL),
(3, 'Work', '1503900670.118462969.jpg', '<p>Work&nbsp;Work&nbsp;Work&nbsp;Work&nbsp;Work&nbsp;Work&nbsp;Work&nbsp;Work&nbsp;Work&nbsp;Work&nbsp;Work</p>', 'post2', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'football', '1503900756.4-4.jpg', '<p>football &nbsp;football &nbsp;football &nbsp;football &nbsp;&nbsp;football &nbsp;football &nbsp;football &nbsp;football &nbsp;&nbsp;football &nbsp;football&nbsp;football &nbsp;football</p>', 'post3', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(6000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `content`, `image`, `category_id`, `created_at`, `updated_at`) VALUES
(8, 'a store', '<p>&nbsp;store&nbsp;store&nbsp;store&nbsp;store&nbsp;storestorestorestore</p>', '1503760652.2222.jpg', 0, NULL, NULL),
(9, 'Tablet', '<p>&nbsp;Tablet&nbsp;Tablet&nbsp;Tablet&nbsp;Tablet&nbsp;TabletTablet</p>', '1503760708.118462969.jpg', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_titles`
--

CREATE TABLE `product_titles` (
  `id` int(10) UNSIGNED NOT NULL,
  `titles` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_titles`
--

INSERT INTO `product_titles` (`id`, `titles`, `images`, `title`, `sub_title`, `created_at`, `updated_at`) VALUES
(1, 'Productsss', 'img-102617-20160713213555.jpg', 'Productss', 'Productsss Productsss', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` int(10) UNSIGNED NOT NULL,
  `title1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `count1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title2` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `count2` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title3` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `count3` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sup_title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `title1`, `count1`, `title2`, `count2`, `title3`, `count3`, `product_title`, `sup_title`, `created_at`, `updated_at`) VALUES
(1, 'Clients', '600', 'Products', '800', 'Years in Busines', '50', 'INVESTED YOUR MONEY', 'take a look to product', NULL, '2017-08-26 18:29:19');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `titles` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_titles` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `titles`, `sub_titles`, `images`, `content`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Services', 'Hosting 10', '1503673273.c33b55c2-39a7-4cf0-9db6-2763f21d81c0.jpg', '<p>sSasASaasASasASSDSDSDFSDFSDFSD DFSDFSDF DSSDFSDFSD DSFDSFDS DSF SDFDS FSFSD</p>', 0, NULL, '2017-08-25 13:01:13'),
(4, 'Services', 'Hard ware', '1503725680.images.jpg', '<p>sadasd asd &nbsp;asd ad asd d sad a das d asd asd as das da sd ad sda</p>', 0, '2017-08-26 03:34:40', '2017-08-26 03:34:40');

-- --------------------------------------------------------

--
-- Table structure for table `services_titles`
--

CREATE TABLE `services_titles` (
  `id` int(10) UNSIGNED NOT NULL,
  `titles` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services_titles`
--

INSERT INTO `services_titles` (`id`, `titles`, `images`, `title`, `sub_title`, `created_at`, `updated_at`) VALUES
(1, 'services', '37755-cybercri_article.jpg', 'servicess', 'services services ', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slider_plants`
--

CREATE TABLE `slider_plants` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slider_plants`
--

INSERT INTO `slider_plants` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Plants Page test', '1503820288.cenefas-adhesivas-decorativas-futbol-D_NQ_NP_17945-MCO20146371825_082014-F.jpg', NULL, '2017-08-27 05:51:28');

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` int(10) UNSIGNED NOT NULL,
  `slides` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sup_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_name` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `slides`, `title`, `sup_title`, `link_name`, `created_at`, `updated_at`) VALUES
(12, '1503567881.37755-cybercri_article.jpg', 'test1', 'test test', 'About Us', '2017-08-24 07:42:09', '2017-08-27 13:46:32'),
(13, '1503568335.118462969.jpg', 'test', 'test test test', 'About Us', '2017-08-24 07:52:15', '2017-08-24 07:52:15'),
(14, '1503572845.download.jpg', 'tessst', 'tessst tessst tessst', 'About Us', '2017-08-24 09:07:25', '2017-08-24 09:07:25');

-- --------------------------------------------------------

--
-- Table structure for table `titles_academys`
--

CREATE TABLE `titles_academys` (
  `id` int(10) UNSIGNED NOT NULL,
  `titles` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `titles_academys`
--

INSERT INTO `titles_academys` (`id`, `titles`, `images`, `created_at`, `updated_at`) VALUES
(1, 'Thebas Academy', '126.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(10) DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'mohamed', 'mohamed.s700@gmail.com', '$2y$10$/M3x8uGWlm9K5ro6aBsZ6OSaUWUY8x6Rrv.EZqeyq4GxJ1IKH5Mba', 1, 'KXnrwMLfB4ccrcZsls9ZCeqPXrf2f3qJxBdimd97bh6fAoooHq36Ja96vrAa', '2017-08-22 07:12:52', '2017-08-27 17:47:51'),
(4, 'sayed g', 'sayed488@gmail.com', '$2y$10$/M3x8uGWlm9K5ro6aBsZ6OSaUWUY8x6Rrv.EZqeyq4GxJ1IKH5Mba', 0, 'bIwCbd74btOSy9I9HdzP5bRQk8WDrcV847d9ipl5efp4XwvWjrrVWDlFRX6T', '2017-08-22 07:40:48', '2017-08-22 11:09:04'),
(6, 'Omar', 'Omar@gmail.com', '$2y$10$vy4Yu1PJ30IB3cUGxvoOLeHt2WR5xe4.eyd5tK6shXg2nX8NrFjUG', 0, 'rA4DerRQ4T4EWZKGqtKu1qJ4RK5yKx4SXhNlE2b2wJ0engugAgWbNJvzq9Lr', '2017-08-22 13:29:12', '2017-08-22 13:29:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abotutus_titles`
--
ALTER TABLE `abotutus_titles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_homes`
--
ALTER TABLE `about_homes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_titles`
--
ALTER TABLE `blog_titles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_products`
--
ALTER TABLE `category_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_services`
--
ALTER TABLE `category_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clints_homes`
--
ALTER TABLE `clints_homes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus_detes`
--
ALTER TABLE `contactus_detes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_homes`
--
ALTER TABLE `contact_homes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_plants`
--
ALTER TABLE `contact_plants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `content_abotutuss`
--
ALTER TABLE `content_abotutuss`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employes`
--
ALTER TABLE `employes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footers`
--
ALTER TABLE `footers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `headers`
--
ALTER TABLE `headers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_homes`
--
ALTER TABLE `news_homes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_missions`
--
ALTER TABLE `our_missions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `plants`
--
ALTER TABLE `plants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_titles`
--
ALTER TABLE `product_titles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services_titles`
--
ALTER TABLE `services_titles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider_plants`
--
ALTER TABLE `slider_plants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `titles_academys`
--
ALTER TABLE `titles_academys`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `abotutus_titles`
--
ALTER TABLE `abotutus_titles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `about_homes`
--
ALTER TABLE `about_homes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `blog_titles`
--
ALTER TABLE `blog_titles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `category_products`
--
ALTER TABLE `category_products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `category_services`
--
ALTER TABLE `category_services`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `clints_homes`
--
ALTER TABLE `clints_homes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `contactus_detes`
--
ALTER TABLE `contactus_detes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `contact_homes`
--
ALTER TABLE `contact_homes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `contact_plants`
--
ALTER TABLE `contact_plants`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `content_abotutuss`
--
ALTER TABLE `content_abotutuss`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `employes`
--
ALTER TABLE `employes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `footers`
--
ALTER TABLE `footers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `headers`
--
ALTER TABLE `headers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `news_homes`
--
ALTER TABLE `news_homes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `our_missions`
--
ALTER TABLE `our_missions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `plants`
--
ALTER TABLE `plants`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `product_titles`
--
ALTER TABLE `product_titles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `services_titles`
--
ALTER TABLE `services_titles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `slider_plants`
--
ALTER TABLE `slider_plants`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `titles_academys`
--
ALTER TABLE `titles_academys`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
