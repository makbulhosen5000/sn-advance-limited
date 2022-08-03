-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2022 at 06:53 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sm-advanced-ltd`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `description`, `image`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Title', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem\r\nwith the release of Letraset sheets containing Lorem', '1658410888.jpg', NULL, 1, '2022-06-21 03:51:43', '2022-07-21 07:41:28');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Bangladeshi', 1, 1, '2022-04-14 04:50:12', '2022-04-23 14:52:53'),
(3, 'Indian', 1, 1, '2022-04-15 12:17:21', '2022-04-23 14:53:07'),
(4, 'China', 1, NULL, '2022-04-23 14:53:39', '2022-04-23 14:53:39'),
(5, 'Bata', 1, NULL, '2022-05-02 10:33:00', '2022-05-02 10:33:00'),
(6, 'Apex', 1, NULL, '2022-05-02 10:33:46', '2022-05-02 10:33:46'),
(7, 'lotto', 1, NULL, '2022-05-02 10:34:22', '2022-05-02 10:34:22');

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `long_desc` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publish_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expire_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`id`, `title`, `slug`, `short_desc`, `long_desc`, `publish_date`, `expire_date`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Intern', 'intern', 'S.N ADVANCE LIMITED, a leading systems integrator providing managed service solutions to businesses since 1994, has an exciting career opportunity for a highly motivated individual who is ready to move ahead in a progressive industry. We are focused on helping our clients succeed by understanding their unique technology requirements and developing a fully customized program to care for their data and voice networks.', 'S.N ADVANCE LIMITED  is seeking an energetic intern who can work a flexible schedule (approximately 20 – 30 Hours a week) for at least 90 calendar days from their start date. The internship may be extended out further if both parties agree, and we are willing to work with any level college student interested in information technology. The internship is paid and there are many opportunities to gain valuable practical experience. Interns must be able to demonstrate solid communication and organizational skills so that they are able to work within a team-focused environment. It is expected that all client interactions will be performed at the highest level of customer service and professionalism. They will work very closely with other technical resources and the Management team to ensure internal S.N ADVANCE LIMITED team areas and our clients are supported. They must be able to both document and effectively communicate the technical steps they’ve taken during their work day. The position relies on instructions and pre-established guidelines to perform the functions of the job, working under the supervision of a team lead or manager. This position offers internship candidates a chance to take part in the day to day operations of an established technology company that provides continued opportunities for growth and professional development. The working environment promotes strong values and encourages employee development, diversity, and requires customer service excellence.\r\nEssential Duties and Responsibilities:\r\nAssisting engineers on client projects\r\nCreating technical documentation and schematics\r\nGathering operational metrics for management\r\nHelping the support team solve technical support issues/requests\r\nSales support and data entry\r\nSome interaction with clients\r\nTechnical preparation of newly purchased client equipment prior to field deployment by an engineer\r\nTransportation of client equipment to from their offices\r\nQualifications:\r\nProficiency in usage of Microsoft Office suites\r\nProficiency in usage of Microsoft Operating Systems\r\nAnalytical problem-solving skills\r\nInterpersonal communication skills\r\nPassion for working in a team environment\r\nReliable transportation and valid driver’s license\r\nSpecial consideration given to candidates with the below qualifications:\r\nInstallation of Apple/MAC operating systems\r\nActive Directory and how it works in domain environments\r\nSecurity software such as Anti-Virus, Anti-Malware, etc.\r\nBasic networking concepts and/or LAN troubleshooting\r\nBasic data security concepts\r\nMicrosoft Hosted Exchange (365)\r\nAll selected candidates are subject to a satisfactory background check. This position will require limited travel in the local area. Serious candidates should send their resumes to HR@southtech.com or fax them to 941-306-4756.\r\nApply Online\r\nName*\r\nEmail*\r\nPhone*\r\nAttach Resume*\r\nNo file chosen', '2022-07-24', '2022-07-25', '202207250627CP-Computer Programming [Tamim Shariar Subeen].pdf', '2022-07-24 05:21:31', '2022-07-25 00:27:35');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('Active','Inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `details`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Import', 'import', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,\r\nmolestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum\r\nnumquam blanditiis harum quisquam eius sed odit fugiat iusto fuga', '1658997036.jpg', 'Inactive', '2022-06-30 05:52:21', '2022-07-28 02:30:36'),
(2, 'Export', 'export', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,\r\nmolestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum\r\nnumquam blanditiis harum quisquam eius sed odit fugiat iusto fuga', '1658820351.jpg', 'Inactive', '2022-06-30 06:10:08', '2022-07-28 02:30:07'),
(3, 'Construction', 'construction', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,\r\nmolestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum\r\nnumquam blanditiis harum quisquam eius sed odit fugiat iusto fuga', '1658820368.jpg', 'Inactive', '2022-06-30 06:10:35', '2022-07-28 02:31:00'),
(4, 'Our Products', 'our-products', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,\r\nmolestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum\r\nnumquam blanditiis harum quisquam eius sed odit fugiat iusto fuga', '1658820380.jpg', 'Inactive', '2022-06-30 06:11:02', '2022-07-28 02:31:17');

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `name`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Red', 1, NULL, '2022-04-22 14:05:46', '2022-04-22 14:05:46'),
(2, 'White', 1, NULL, '2022-04-23 15:20:46', '2022-04-23 15:20:46'),
(3, 'Yellow', 1, NULL, '2022-04-23 15:20:59', '2022-04-23 15:20:59'),
(4, 'Green', 1, NULL, '2022-04-23 15:21:09', '2022-04-23 15:21:09'),
(5, 'Black', 1, NULL, '2022-05-02 10:36:49', '2022-05-02 10:36:49'),
(6, 'Gray', 1, NULL, '2022-05-02 10:36:57', '2022-05-02 10:36:57'),
(7, 'Orange', 1, NULL, '2022-05-02 10:37:03', '2022-05-02 10:37:03'),
(8, 'Pink', 1, NULL, '2022-05-02 10:37:09', '2022-05-02 10:37:09');

-- --------------------------------------------------------

--
-- Table structure for table `companies_brand_logos`
--

CREATE TABLE `companies_brand_logos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies_brand_logos`
--

INSERT INTO `companies_brand_logos` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(10, NULL, '1655900834.png', '2022-06-22 06:27:14', '2022-06-22 06:27:14'),
(11, NULL, '1655900844.png', '2022-06-22 06:27:24', '2022-06-22 06:27:24'),
(12, NULL, '1655900857.png', '2022-06-22 06:27:37', '2022-06-22 06:27:37'),
(13, NULL, '1655900874.png', '2022-06-22 06:27:54', '2022-06-22 06:27:54'),
(14, NULL, '1655900881.png', '2022-06-22 06:28:01', '2022-06-22 06:28:01'),
(15, NULL, '1655900895.png', '2022-06-22 06:28:15', '2022-06-22 06:28:15');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `address`, `phone`, `email`, `facebook`, `twitter`, `linkedin`, `youtube`, `google`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, '37/2, Bir Protik Gazi Dastagir Road Purana Paltan, Dhaka-1000 Bangladesh', '01782283171', 'info@snadvanceltd.com', 'https://www.facebook.com', 'https://www.twitter.com', 'https://www.linkedin.com', 'https://www.youtube.com', NULL, NULL, NULL, '2022-05-10 08:59:25', '2022-07-27 23:21:45');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `massage` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `phone`, `email`, `product_name`, `massage`, `created_at`, `updated_at`) VALUES
(111, 'Mh Akash', '566546', 'mhakash5000@gmail.com', NULL, 'dsfs', '2022-07-27 01:25:41', '2022-07-27 01:25:41');

-- --------------------------------------------------------

--
-- Table structure for table `count_down_timers`
--

CREATE TABLE `count_down_timers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `launch_date` datetime NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `count_down_timers`
--

INSERT INTO `count_down_timers` (`id`, `title`, `launch_date`, `status`, `created_at`, `updated_at`) VALUES
(9, 'Timer', '2022-08-06 17:54:00', 0, '2022-05-17 08:12:31', '2022-07-25 05:54:12');

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `logos`
--

CREATE TABLE `logos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logos`
--

INSERT INTO `logos` (`id`, `image`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(10, '1657110700.png', NULL, 1, '2022-06-21 07:51:25', '2022-07-06 06:31:40');

-- --------------------------------------------------------

--
-- Table structure for table `medicines`
--

CREATE TABLE `medicines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `long_desc` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medicines`
--

INSERT INTO `medicines` (`id`, `name`, `slug`, `price`, `short_desc`, `long_desc`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Medicine', 'medicine', '500', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore nobis eos porro sapiente ipsam odio nihil iste doloribus consequatur, eius aperiam est quaerat inventore aliquam. Dignissimos iusto facere ex neque?', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore nobis eos porro sapiente ipsam odio nihil iste doloribus consequatur, eius aperiam est quaerat inventore aliquam. Dignissimos iusto facere ex neque?\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Dolore nobis eos porro sapiente ipsam odio nihil iste doloribus consequatur, eius aperiam est quaerat inventore aliquam. Dignissimos iusto facere ex neque?', '202208010702pexels-pixabay-262353.jpg', '2022-08-01 00:56:43', '2022-08-01 01:13:32'),
(2, 'Feed', 'feed', '200', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore nobis eos porro sapiente ipsam odio nihil iste doloribus consequatur, eius aperiam est quaerat inventore aliquam. Dignissimos iusto facere ex neque?', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore nobis eos porro sapiente ipsam odio nihil iste doloribus consequatur, eius aperiam est quaerat inventore aliquam. Dignissimos iusto facere ex neque?\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Dolore nobis eos porro sapiente ipsam odio nihil iste doloribus consequatur, eius aperiam est quaerat inventore aliquam. Dignissimos iusto facere ex neque?', '202208010715pexels-tom-fisk-3856440.jpg', '2022-08-01 01:15:57', '2022-08-01 01:15:57');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2020_05_01_104950_create_logos_table', 1),
(6, '2020_05_02_045646_create_sliders_table', 1),
(7, '2020_05_03_140713_create_contacts_table', 1),
(8, '2020_05_03_170016_create_abouts_table', 1),
(9, '2020_05_08_144512_create_contact_us_table', 1),
(10, '2022_04_11_162200_create_categories_table', 2),
(11, '2022_04_14_101043_create_brands_table', 3),
(14, '2022_04_15_172626_create_sizes_table', 4),
(15, '2022_04_15_173432_create_colors_table', 4),
(16, '2022_04_20_192327_create_products_table', 5),
(17, '2022_04_20_193429_create_product_sizes_table', 5),
(18, '2022_04_20_193516_create_product_colors_table', 5),
(19, '2022_04_20_193640_create_product_sub_images_table', 5),
(20, '2022_04_22_191915_create_count_down_timers_table', 6),
(21, '2022_06_21_094740_create_abouts_table', 7),
(24, '2022_06_21_104436_create_services_table', 8),
(25, '2022_06_22_115600_create_companies_brand_logos_table', 8),
(26, '2022_06_25_100333_create_sub_categories_table', 9),
(27, '2022_06_30_113501_create_categories_table', 10),
(28, '2022_06_30_121513_create_sub_categories_table', 11),
(29, '2022_07_19_052044_create_teams_table', 12),
(32, '2022_07_20_094845_create_news_table', 13),
(33, '2022_07_24_101448_create_careers_table', 14),
(34, '2022_08_01_060344_create_medicines_table', 15);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `long_desc` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pdf` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `slug`, `short_desc`, `long_desc`, `date`, `pdf`, `image`, `created_at`, `updated_at`) VALUES
(24, 'Fish & Feed', 'fish-feed', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum voluptate consequuntur totam iusto ea nemo? Blanditiis assumenda molestias fugiat sed harum. Repellat, perspiciatis! Quas, magni. Omnis velit sunt facere vel.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum voluptate consequuntur totam iusto ea nemo? Blanditiis assumenda molestias fugiat sed harum. Repellat, perspiciatis! Quas, magni. Omnis velit sunt facere vel.\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Cum voluptate consequuntur totam iusto ea nemo? Blanditiis assumenda molestias fugiat sed harum. Repellat, perspiciatis! Quas, magni. Omnis velit sunt facere vel.\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Cum voluptate consequuntur totam iusto ea nemo? Blanditiis assumenda molestias fugiat sed harum. Repellat, perspiciatis! Quas, magni. Omnis velit sunt facere vel.', '2022-07-24', '1658577922.pdf', '1658576630.jpg', '2022-07-23 05:43:50', '2022-07-23 22:48:18'),
(32, 'Import & Export', 'import-export', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit sint inventore iste nisi sequi expedita quam quos id praesentium? Tenetur vero nihil, laudantium nemo itaque reprehenderit hic amet sed neque.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit sint inventore iste nisi sequi expedita quam quos id praesentium? Tenetur vero nihil, laudantium nemo itaque reprehenderit hic amet sed neque.\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Impedit sint inventore iste nisi sequi expedita quam quos id praesentium? Tenetur vero nihil, laudantium nemo itaque reprehenderit hic amet sed neque.\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Impedit sint inventore iste nisi sequi expedita quam quos id praesentium? Tenetur vero nihil, laudantium nemo itaque reprehenderit hic amet sed neque.\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Impedit sint inventore iste nisi sequi expedita quam quos id praesentium? Tenetur vero nihil, laudantium nemo itaque reprehenderit hic amet sed neque.', '2022-07-24', '202207240449CP-Computer Programming [Tamim Shariar Subeen].pdf', '202207240449pexels-tom-fisk-3856440.jpg', '2022-07-23 22:49:44', '2022-07-23 22:50:05'),
(35, 'Construction', 'construction', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit sint inventore iste nisi sequi expedita quam quos id praesentium? Tenetur vero nihil, laudantium nemo itaque reprehenderit hic amet sed neque.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit sint inventore iste nisi sequi expedita quam quos id praesentium? Tenetur vero nihil, laudantium nemo itaque reprehenderit hic amet sed neque.                          Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit sint inventore iste nisi sequi expedita quam quos id praesentium? Tenetur vero nihil, laudantium nemo itaque reprehenderit hic amet sed neque.', '2022-07-27', NULL, '202207271048pexels-tom-fisk-3856440.jpg', '2022-07-27 04:48:41', '2022-07-27 04:48:41');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_category_id` int(11) NOT NULL,
  `brand_id` int(11) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double NOT NULL,
  `model` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `long_desc` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `sub_category_id`, `brand_id`, `name`, `slug`, `price`, `model`, `short_desc`, `long_desc`, `image`, `created_at`, `updated_at`) VALUES
(53, 1, 14, 1, 'fridge', 'fridge', 50, 'sdfdsre433', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga', '202207180844pexels-pixabay-262353.jpg', '2022-07-01 22:55:30', '2022-07-27 02:26:50'),
(54, 2, 14, NULL, 'T-shirt', 't-shirt', 10.5, 'sdfdsre4339', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga', '2022070609512022070305351656308774.jpeg', '2022-07-01 22:56:20', '2022-07-27 02:28:49'),
(55, 3, 14, NULL, 'sdf sdfd', 'sdf-sdfd', 5000, NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga', '2022070305351656308774.jpeg', '2022-07-01 22:56:47', '2022-07-03 03:39:42'),
(56, 4, 14, NULL, 'filter', 'filter', 50000, NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga', '202207030457photo2.png', '2022-07-01 22:57:21', '2022-07-03 03:39:55'),
(57, 1, 14, 3, 'Sultan kabir', 'sultan-kabir', 500, NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga', '202207030533photo1.png', '2022-07-02 06:53:04', '2022-07-03 03:40:34'),
(58, 1, 14, NULL, 'Shop', 'shop', 5000, NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga', '2022070609512022070412141656936564.jpg', '2022-07-02 22:50:07', '2022-07-06 03:51:14'),
(59, 4, 14, NULL, 'Bio Spray Plus', 'bio-spray-plus', 5000, NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga', '202207041147aziz-acharki-boIJluEJEPM-unsplash.jpg', '2022-07-04 05:47:48', '2022-07-04 05:47:48'),
(60, 4, 14, NULL, 'Security Device', 'security-device', 600, NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga', '202207041156Color.jpg', '2022-07-04 05:51:56', '2022-07-04 05:56:56'),
(61, 4, 14, NULL, 'device', 'device', 5000, NULL, 'Short Description', 'Long Description', '202207050446tim-schmidbauer-7_18eO1o0sc-unsplash.jpg', '2022-07-04 22:46:48', '2022-07-04 22:46:48'),
(62, 4, 2, NULL, 'Product Name', 'product-name', 50, 'dfg5', 'fgfsdgfdg', 'dfgfsdgfdsgf', '202207050454Color.jpg', '2022-07-04 22:54:21', '2022-07-28 01:59:51'),
(63, 3, 14, NULL, 'dsfsd', 'dsfsd', 5, NULL, 'sdfsd', 'sdfsd', '202207050502Color.jpg', '2022-07-04 23:02:48', '2022-07-04 23:02:48'),
(64, 3, 2, NULL, 'Cons', 'cons', 4000, '45ff', 'sdfds', 'sdfsdf', '202207050516aziz-acharki-boIJluEJEPM-unsplash.jpg', '2022-07-04 23:16:13', '2022-07-28 02:01:02'),
(65, 4, 14, NULL, 'Compression', 'compression', 5000, NULL, 'sdfdsf', 'sdfd', '202207050529term.jpg', '2022-07-04 23:29:22', '2022-07-04 23:29:22'),
(66, 4, 2, NULL, 'dddfdf', 'dddfdf', 2000, 'sdfsd33', 'sdfsdfsdf', 'sdfsdf', '202207050536pexels.jpg', '2022-07-04 23:36:09', '2022-07-28 02:00:27'),
(67, 3, 14, NULL, 'Const', 'const', 5000, NULL, 'sdfdsf sdfsdfs', 'sdfsdfd sdfsdfds', '202207050654tim-schmidbauer-7_18eO1o0sc-unsplash.jpg', '2022-07-05 00:54:45', '2022-07-05 00:54:45'),
(68, 4, 14, NULL, 'Oil', 'oil', 5000, NULL, 'ssdfds', 'sdfdsf', '202207050707aziz-acharki-boIJluEJEPM-unsplash.jpg', '2022-07-05 01:07:41', '2022-07-05 01:07:41'),
(69, 4, 14, NULL, 'oil tqo', 'oil-tqo', 5000, NULL, 'sdfsdfd', 'sdfsdfsdfds', '202207060510202207030533photo1.png', '2022-07-05 23:10:00', '2022-07-05 23:10:00'),
(70, 2, 2, NULL, 'Baby', 'baby', 500, 'da33', 'sdfdsfdsf', 'sdfdsfds', '202207060954202207050707aziz-acharki-boIJluEJEPM-unsplash.jpg', '2022-07-06 03:54:48', '2022-07-28 01:54:48'),
(71, 3, 2, NULL, 'Cobra', 'cobra', 1000, 'ad43', 'sdfsdfsdf', 'sdfsdfsdfds', '202207060955202207030457photo2.png', '2022-07-06 03:55:28', '2022-07-28 01:55:37'),
(72, 3, 2, NULL, 'Snake', 'snake', 5000, 'ffg5', 'sdfsdfsd', 'sdfsdfsdfds', '202207060956202207041156Color.jpg', '2022-07-06 03:56:27', '2022-07-28 01:56:23'),
(73, 1, 2, NULL, 'Dhaka', 'dhaka', 5200, 'bg65', 'fgds', 'sdf', '2022070616421656936490.jpg', '2022-07-06 10:42:13', '2022-07-28 01:58:57'),
(74, 4, 14, NULL, 'ffff', 'ffff', 2300, NULL, 'fdsg', 'sdf', '2022070616421656936520.jpg', '2022-07-06 10:42:56', '2022-07-06 10:42:56'),
(75, 3, 9, NULL, 'consul', 'consul', 5000, NULL, 'sdfsdf', 'sdfsdfd', '202207180559axel-ahoi-hjEesK4KSDs-unsplash.jpg', '2022-07-17 23:59:53', '2022-07-17 23:59:53'),
(76, 3, 11, NULL, 'model', 'model', 0, NULL, 'dsfdsf', 'sdfsdfds', '202207180949barrett-ward-5WQJ_ejZ7y8-unsplash.jpg', '2022-07-18 03:49:58', '2022-07-18 03:49:58'),
(77, 1, 4, NULL, 'sdf', 'sdf', 50, NULL, 'ds', 'sdf', '202207231603pexels-sascha-hormel-1095814.jpg', '2022-07-23 10:03:02', '2022-07-23 10:03:46'),
(79, 5, 25, NULL, 'MEDICINE & FEED', 'medicine-feed', 0, NULL, 'sdfd', 'sdfds', '202207251201pexels-tom-fisk-3856440.jpg', '2022-07-25 06:01:10', '2022-07-25 06:01:10'),
(80, 5, 25, NULL, 'Medicine', 'medicine', 500, NULL, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eius voluptatibus, ut voluptas minima maxime iure, sit magni commodi omnis nesciunt harum! Neque exercitationem iusto optio animi, eos quia at soluta!', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eius voluptatibus, ut voluptas minima maxime iure, sit magni commodi omnis nesciunt harum! Neque exercitationem iusto optio animi, eos quia at soluta!\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Eius voluptatibus, ut voluptas minima maxime iure, sit magni commodi omnis nesciunt harum! Neque exercitationem iusto optio animi, eos quia at soluta!', '202207270727axel-ahoi-hjEesK4KSDs-unsplash.jpg', '2022-07-27 01:27:31', '2022-07-27 03:41:15'),
(81, 1, 3, NULL, 'Hardware', 'hardware', 50, 'sdfdsre433', 'sdfsdfsdfds', 'sdfsdfdsf', '202207270810pexels-tom-fisk-3856440.jpg', '2022-07-27 02:10:55', '2022-07-27 02:10:55'),
(82, 1, 3, NULL, 'new product', 'new-product', 4000, 'sdfdsre433', 'xvgvsdfds', 'sdfsdf', '202207270818pexels-sascha-hormel-1095814.jpg', '2022-07-27 02:18:10', '2022-07-27 02:18:10'),
(83, 2, 6, NULL, 'polo', 'polo', 500, 'sdf33', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, sit harum. Recusandae eaque totam aut quia deleniti! Saepe fugiat iure minus soluta, quidem consequatur quaerat consectetur repudiandae, fuga, omnis at?', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, sit harum. Recusandae eaque totam aut quia deleniti! Saepe fugiat iure minus soluta, quidem consequatur quaerat consectetur repudiandae, fuga, omnis at?', '202207310621axel-ahoi-hjEesK4KSDs-unsplash.jpg', '2022-07-31 00:21:48', '2022-07-31 00:21:48'),
(84, 4, 18, NULL, 'Bio', 'bio', 5000, 'sdfdsre43393', 'sdfdsa', 'sdfdsf', '202207310649barrett-ward-5WQJ_ejZ7y8-unsplash.jpg', '2022-07-31 00:49:16', '2022-07-31 00:49:16');

-- --------------------------------------------------------

--
-- Table structure for table `product_colors`
--

CREATE TABLE `product_colors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `color_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_sizes`
--

CREATE TABLE `product_sizes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `size_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_sub_images`
--

CREATE TABLE `product_sub_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `sub_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_sub_images`
--

INSERT INTO `product_sub_images` (`id`, `product_id`, `sub_image`, `created_at`, `updated_at`) VALUES
(40, 57, '2022070212531.jpg', '2022-07-02 06:53:04', '2022-07-02 06:53:04'),
(41, 57, '2022070212532.png', '2022-07-02 06:53:04', '2022-07-02 06:53:04'),
(42, 53, '20220702130918.png', '2022-07-02 07:09:18', '2022-07-02 07:09:18'),
(43, 53, '20220702130919.png', '2022-07-02 07:09:18', '2022-07-02 07:09:18'),
(46, 58, '202207030533user8-128x128.jpg', '2022-07-02 23:33:37', '2022-07-02 23:33:37'),
(47, 60, '202207041156Color.jpg', '2022-07-04 05:56:32', '2022-07-04 05:56:32'),
(48, 73, '2022070616421657112186.jpg', '2022-07-06 10:42:13', '2022-07-06 10:42:13'),
(49, 74, '2022070616421657117406.jpg', '2022-07-06 10:42:56', '2022-07-06 10:42:56');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'IMPORT', NULL, NULL, '2022-06-22 06:11:04', '2022-07-23 23:45:39'),
(2, 'EXPORT', NULL, NULL, '2022-06-22 06:11:15', '2022-07-23 23:46:02'),
(3, 'CONSTRUCTION', NULL, NULL, '2022-06-22 06:11:26', '2022-07-23 23:46:20'),
(4, 'OUR PRODUCTS', NULL, NULL, '2022-06-22 06:11:37', '2022-07-23 23:48:22');

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`id`, `name`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'M', 1, NULL, '2022-04-19 15:07:08', '2022-04-19 15:07:08'),
(2, 'L', 1, NULL, '2022-04-19 15:07:42', '2022-04-19 15:07:42'),
(3, 'XL', 1, NULL, '2022-04-19 15:07:57', '2022-04-19 15:07:57'),
(4, 'S', 1, NULL, '2022-04-19 15:08:04', '2022-04-19 15:08:04'),
(5, 'Full-length', 1, NULL, '2022-05-02 10:29:09', '2022-05-02 10:29:09'),
(6, '10 inch', 1, NULL, '2022-05-02 10:30:24', '2022-05-02 10:30:24'),
(7, '11 inch', 1, NULL, '2022-05-02 10:30:31', '2022-05-02 10:30:31'),
(8, '12 inch', 1, NULL, '2022-05-02 10:30:38', '2022-05-02 10:30:38'),
(9, '13 inch', 1, NULL, '2022-05-02 10:30:46', '2022-05-02 10:30:46'),
(10, '14 inch', 1, NULL, '2022-05-02 10:30:51', '2022-05-02 10:30:51'),
(11, '24 inches long by 24 inches wide', 1, NULL, '2022-05-05 00:29:52', '2022-05-05 00:29:52');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `long_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `sort_title`, `long_title`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(5, '1657113379.jpg', 'S.N ADVANCE', 'LIMITED', NULL, 1, '2022-05-02 10:23:03', '2022-07-24 05:38:18'),
(7, '1657112186.jpg', 'S.N ADVANCE', 'LIMITED', NULL, 1, '2022-05-02 10:23:57', '2022-07-24 05:38:36'),
(11, '1657113471.jpg', 'S.N ADVANCE', 'LIMITED', NULL, 1, '2022-07-06 07:17:51', '2022-07-24 05:38:52'),
(12, '1657113485.jpg', 'S.N ADVANCE', 'LIMITED', NULL, 1, '2022-07-06 07:18:05', '2022-07-24 05:39:16'),
(13, '1657117406.jpg', 'S.N ADVANCE', 'LIMITED', NULL, 1, '2022-07-06 07:18:21', '2022-07-24 05:39:30'),
(14, '1657113516.jpg', 'S.N ADVANCE', 'LTD', NULL, 1, '2022-07-06 07:18:36', '2022-07-24 05:39:55');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('Active','Inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `category_id`, `name`, `slug`, `details`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'electric', 'electric', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,\r\nmolestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum\r\nnumquam blanditiis harum quisquam eius sed odit fugiat iusto fuga', '1656923933.jpeg', 'Inactive', '2022-06-30 06:23:22', '2022-07-04 02:38:53'),
(2, 1, 'electronics', 'electronics', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga', '1656923924.jpeg', 'Inactive', '2022-06-30 06:30:22', '2022-07-04 02:38:44'),
(3, 1, 'Hardware', 'Hardware', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga', '1656923907.jpeg', 'Inactive', '2022-06-30 06:30:43', '2022-07-04 02:38:27'),
(4, 1, 'Software', 'Software', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga', '1656923893.jpeg', 'Inactive', '2022-06-30 06:31:03', '2022-07-04 02:38:13'),
(5, 1, 'Shirt', 'Shirt', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga', '1656923829.jpeg', 'Inactive', '2022-06-30 06:31:22', '2022-07-04 02:37:09'),
(6, 2, 'T-Shirt', 'T-Shirt', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga', '1656923844.jpeg', 'Inactive', '2022-06-30 06:31:47', '2022-07-04 02:37:24'),
(7, 2, 'Pants', 'Pants', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga', '1656923860.jpeg', 'Inactive', '2022-06-30 06:32:01', '2022-07-04 02:37:40'),
(8, 2, 'Baby Cloths', 'Baby Cloths', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga', '1656923879.jpeg', 'Inactive', '2022-06-30 06:32:21', '2022-07-04 02:37:59'),
(9, 3, 'Consultant', 'Consultant', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga', '1656923944.jpeg', 'Inactive', '2022-06-30 06:32:46', '2022-07-04 02:39:24'),
(11, 3, 'Constructor', 'Constructor', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga', '1656923954.jpeg', 'Inactive', '2022-06-30 06:33:32', '2022-07-04 02:39:34'),
(12, 4, 'Air Filters', 'Air Filters', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga', '1656924120.jpeg', 'Inactive', '2022-06-30 06:34:15', '2022-07-04 02:42:00'),
(13, 4, 'Oil Separators', 'Oil Separators', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga', '1656924168.jpeg', 'Inactive', '2022-06-30 06:34:44', '2022-07-04 02:42:48'),
(14, 4, 'Oil Filters', 'Oil Filters', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga', '1656924147.jpeg', 'Inactive', '2022-06-30 06:35:10', '2022-07-04 02:42:27'),
(15, 4, 'Compressor Oil', 'Compressor Oil', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga', '1656924089.jpeg', 'Inactive', '2022-06-30 06:35:37', '2022-07-04 02:41:29'),
(16, 4, 'CNG Ring Piston', 'CNG Ring Piston', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga', '1656924073.jpeg', 'Inactive', '2022-06-30 06:35:59', '2022-07-04 02:41:13'),
(17, 4, 'Bike Security Device', 'Bike Security Device', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga', '1656924054.jpeg', 'Inactive', '2022-06-30 06:36:20', '2022-07-04 02:40:54'),
(18, 4, 'Bio Spray Plus', 'Bio Spray Plus', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga', '1656924037.jpeg', 'Inactive', '2022-06-30 06:36:47', '2022-07-04 02:40:37'),
(21, 3, 'Drawing', 'Drawing', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga', '1656924016.jpeg', 'Inactive', '2022-07-01 22:53:35', '2022-07-04 02:40:16'),
(22, 1, 'Mechanical Equipment', 'Mechanical Equipment', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga', '2022070306471656308774.jpeg', 'Inactive', '2022-07-03 00:47:31', '2022-07-04 02:39:58'),
(23, 1, 'Food Supplement', 'Food Supplement', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga', '2022070306491656308774.jpeg', 'Inactive', '2022-07-03 00:49:37', '2022-07-04 02:39:45');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `slug`, `designation`, `description`, `image`, `created_at`, `updated_at`) VALUES
(5, 'Shamima Nasrin', 'shamima-nasrin', 'Chairman', 'Shamima Nasrin, the wife of Sagar Ahamed, was born in 1995. in a respectable Muslim family of rangpur. and graduated from the Begum rokeya college rangpur. B.A (hons)M.A English', '1658381645.jpeg', '2022-07-19 00:18:47', '2022-08-02 22:46:26'),
(6, 'Sagar Ahamed', 'Sagar Ahamed', 'Managing Director', 'Sagar Ahamed BSc in Civil Engineering,\r\nSagar Ahamed was born in 1988 in a respectable Muslim family of Dinajpur and graduated from Stamford University Bangladesh.', '1658381877.jpeg', '2022-07-19 00:26:36', '2022-07-20 23:37:57'),
(7, 'Md.Anam Ahmed', 'mdanam-ahmed', 'Director', 'Md.Anam Ahmed was born in 1992 in a respectable Muslim family of Dinajpur and graduated from Hajee Mohammod Danesh Science and Technology University, Dinajpur. B.sc fisheries (hons) *MS in Aquaculture from Banhladesh Agricultural University, Mymensingh.', '1658382811.jpg', '2022-07-19 00:27:28', '2022-08-02 22:47:10'),
(9, 'Md.Rumon Sarkar', 'mdrumon-sarkar', 'General Manager', 'Md.Rumon Sarkar was born in 1992 in a respectable Muslim family of Dinajpur and graduated from  Dhaka International university, BSc in (EETE', '1658382193.jpeg', '2022-07-19 02:52:20', '2022-08-02 22:47:38');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `phone`, `email`, `email_verified_at`, `password`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'mh akash', '01989139570', 'mhakash5000@gmail.com', NULL, '$2y$10$AmSmqniHRbgy21o0hOnR1.RIsz7r1yx1/zLMEPkRNNTj28F7LUGdy', NULL, NULL, '2022-04-11 11:04:56', '2022-06-26 23:43:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `brands_name_unique` (`name`);

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `colors_name_unique` (`name`);

--
-- Indexes for table `companies_brand_logos`
--
ALTER TABLE `companies_brand_logos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `count_down_timers`
--
ALTER TABLE `count_down_timers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicines`
--
ALTER TABLE `medicines`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `medicines_name_unique` (`name`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_name_unique` (`name`);

--
-- Indexes for table `product_colors`
--
ALTER TABLE `product_colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_sizes`
--
ALTER TABLE `product_sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_sub_images`
--
ALTER TABLE `product_sub_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sizes_name_unique` (`name`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `companies_brand_logos`
--
ALTER TABLE `companies_brand_logos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `count_down_timers`
--
ALTER TABLE `count_down_timers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logos`
--
ALTER TABLE `logos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `medicines`
--
ALTER TABLE `medicines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `product_colors`
--
ALTER TABLE `product_colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `product_sizes`
--
ALTER TABLE `product_sizes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `product_sub_images`
--
ALTER TABLE `product_sub_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
