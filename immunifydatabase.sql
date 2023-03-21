-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 21, 2023 at 06:47 PM
-- Server version: 5.7.36
-- PHP Version: 8.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `immunifydatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `added_hospitals`
--

DROP TABLE IF EXISTS `added_hospitals`;
CREATE TABLE IF NOT EXISTS `added_hospitals` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contactNumber` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `certificate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hospitalImage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `added_hospitals`
--

INSERT INTO `added_hospitals` (`id`, `name`, `email`, `password`, `location`, `contactNumber`, `certificate`, `city`, `hospitalImage`, `created_at`, `updated_at`) VALUES
(1, 'AGHA KHAN HOSPITAL', 'aghakhan@gmail.com', 'aghakhan', 'National Stadium Rd', '0914552455', '1679420460.aghakhanCertificate.png', 'karachi', '1679420460.aga.jpg', '2023-03-21 12:48:40', '2023-03-21 12:48:40'),
(2, 'JINNAH HOSPITAL', 'jinnah@gmail.com', 'jinnah123', 'Rafiqui, Sarwar Shaheed Rd, Karachi Cantonment', '0914553455', '1679420671.aghakhanCertificate.png', 'karachi', '1679420671.jinnah.webp', '2023-03-21 12:48:43', '2023-03-21 12:48:43'),
(3, 'CIVIL HOSPITAL', 'civil@gmail.com', 'civil1234', 'Opposite Allawala Market, M.A.Jinnah Road, Baba-e-Urdu Road, Nanakwara', '0914552455', '1679420608.aghakhanCertificate.png', 'karachi', '1679420608.1679232641.Civil.jpg', '2023-03-21 12:48:45', '2023-03-21 12:48:45'),
(4, 'Liaquat National Hospital', 'liaquat@gmail.com', 'liaquat12', 'National Stadium Rd', '0914552423', '1679420724.aghakhanCertificate.png', 'karachi', '1679420724.liaq.jpg', '2023-03-21 12:48:48', '2023-03-21 12:48:48');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `appointment_requests`
--

DROP TABLE IF EXISTS `appointment_requests`;
CREATE TABLE IF NOT EXISTS `appointment_requests` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `fname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `medicalIssue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Timing` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vaccineType` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `childImage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parentId` int(11) NOT NULL,
  `hospitalId` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `appointment_requests_parentid_foreign` (`parentId`),
  KEY `appointment_requests_hospitalid_foreign` (`hospitalId`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointment_requests`
--

INSERT INTO `appointment_requests` (`id`, `fname`, `lname`, `dob`, `age`, `weight`, `medicalIssue`, `date`, `Timing`, `vaccineType`, `childImage`, `parentId`, `hospitalId`, `created_at`, `updated_at`) VALUES
(3, 'joseph', 'ishmal', '04-12-23', '4', '3.5', 'no', '26 March', '6:00 pm to 3:00 am', 'hepatis', '1679421914.patient3.jpg', 3, 4, '2023-03-21 13:05:14', '2023-03-21 13:05:14'),
(5, 'laiqa', 'seher', '09-10-23', '4', '4.3', 'thyroid', '23 March', '9:00 am to 6:00 pm', 'hepatis', '1679422161.child1.jpg', 3, 4, '2023-03-21 13:09:22', '2023-03-21 13:09:22');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

DROP TABLE IF EXISTS `bookings`;
CREATE TABLE IF NOT EXISTS `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `fname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `medicalIssue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Timing` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vaccineType` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `childImage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parentId` int(11) NOT NULL,
  `hospitalId` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `bookings_parentid_foreign` (`parentId`),
  KEY `bookings_hospitalid_foreign` (`hospitalId`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `fname`, `lname`, `dob`, `age`, `weight`, `medicalIssue`, `date`, `Timing`, `vaccineType`, `childImage`, `parentId`, `hospitalId`, `created_at`, `updated_at`) VALUES
(1, 'azhar', 'hussain', '12-01-21', '2', '4.5', 'no', '24 March', '9:00 am to 6:00 pm', 'hepatis', '1679421638.patient4.jpg', 2, 1, '2023-03-21 13:09:43', '2023-03-21 13:09:43'),
(2, 'saira', 'shafiq', '10-12-23', '3', '3.5', 'thyroid', '22 March', '6:00 pm to 3:00 am', 'polio', '1679421715.patient2.jpg', 2, 1, '2023-03-21 13:09:45', '2023-03-21 13:09:45'),
(3, 'saul', 'benjamin', '21-09-22', '3', '2', 'no', '22 March', '9:00 am to 6:00 pm', 'hepatis', '1679422083.child.jpg', 3, 4, '2023-03-21 13:09:48', '2023-03-21 13:09:48');

-- --------------------------------------------------------

--
-- Table structure for table `children`
--

DROP TABLE IF EXISTS `children`;
CREATE TABLE IF NOT EXISTS `children` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `childName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `medicalIssue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parentId` int(11) NOT NULL,
  `vaccineId` int(11) NOT NULL,
  `time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `children_parentid_foreign` (`parentId`),
  KEY `children_vaccineid_foreign` (`vaccineId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cmodels`
--

DROP TABLE IF EXISTS `cmodels`;
CREATE TABLE IF NOT EXISTS `cmodels` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cmodels`
--

INSERT INTO `cmodels` (`id`, `name`, `lastname`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'hdh', 'dffdg', 'afd@gmail.com', 'sgfg', '2023-03-19 13:56:39', '2023-03-19 13:56:39');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hospitals`
--

DROP TABLE IF EXISTS `hospitals`;
CREATE TABLE IF NOT EXISTS `hospitals` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contactNumber` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `certificate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hospitalImage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hospitals`
--

INSERT INTO `hospitals` (`id`, `name`, `email`, `password`, `location`, `contactNumber`, `certificate`, `city`, `hospitalImage`, `created_at`, `updated_at`) VALUES
(5, 'OMI HOSPITAL', 'omi@gmail.com', 'omi12345', '89/1, M.A.Jinnah road, Depot Lines', '0914532455', '1679420773.aghakhanCertificate.png', 'karachi', '1679420773.omi.jpg', '2023-03-21 12:46:13', '2023-03-21 12:46:13'),
(6, 'ZIAUDDIN HOSPITAL', 'ziauddin@gmail.com', 'ziauddin12', '4/B Shahrah-e-Ghalib Rd, Block 6 Clifton', '0914152455', '1679420831.aghakhanCertificate.png', 'karachi', '1679420831.zia.jpg', '2023-03-21 12:47:11', '2023-03-21 12:47:11'),
(7, 'HOLY FAMILY HOSPITAL', 'holyfamily@gmail.com', 'holyfamily', 'Afridi Shahid Road, Soldier Bazaar', '0914552255', '1679420890.aghakhanCertificate.png', 'karachi', '1679420890.holy.jpg', '2023-03-21 12:48:10', '2023-03-21 12:48:10');

-- --------------------------------------------------------

--
-- Table structure for table `hospital_images`
--

DROP TABLE IF EXISTS `hospital_images`;
CREATE TABLE IF NOT EXISTS `hospital_images` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `hospitalImages` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hospitalId` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `hospital_images_hospitalid_foreign` (`hospitalId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_03_01_131116_create_admins_table', 1),
(6, '2023_03_05_172313_create_hospitals_table', 1),
(7, '2023_03_05_172327_create_vaccines_table', 1),
(8, '2023_03_05_172343_create_bookings_table', 1),
(9, '2023_03_05_172422_create_children_table', 1),
(10, '2023_03_05_172435_create_requests_table', 1),
(11, '2023_03_12_161509_create_hospital_images_table', 1),
(12, '2023_03_12_185214_create_added_hospitals_table', 1),
(13, '2023_03_18_105653_create_appointment_requests_table', 1),
(14, '2023_03_18_173851_create_user_parents_table', 1),
(15, '2023_03_19_175942_create_vaccinateds_table', 1),
(16, '2023_03_19_184341_create_cmodels_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

DROP TABLE IF EXISTS `requests`;
CREATE TABLE IF NOT EXISTS `requests` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_parents`
--

DROP TABLE IF EXISTS `user_parents`;
CREATE TABLE IF NOT EXISTS `user_parents` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contactNumber` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parentImage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_parents`
--

INSERT INTO `user_parents` (`id`, `name`, `password`, `location`, `email`, `contactNumber`, `city`, `parentImage`, `created_at`, `updated_at`) VALUES
(2, 'sarah', 'sarah123', 'DHA Phase 3', 'sarah@gmail.com', '0914552455', 'karachi', '1679416746.patient8.jpeg', '2023-03-21 11:39:06', '2023-03-21 11:39:06'),
(3, 'Ahad', 'ahad1234', 'North Nazimabad', 'Ahad@gmail.com', '0966352655', 'karachi', '1679416846.patient7.jpeg', '2023-03-21 11:40:46', '2023-03-21 11:40:46'),
(4, 'Haadi', 'haadi123', 'Saddar', 'haadi@gmail.com', '0914355655', 'karachi', '1679419948.patient9.jpeg', '2023-03-21 12:32:28', '2023-03-21 12:32:28'),
(5, 'Arishfa', 'arishfa123', 'Garden', 'arishfa@gmail.com', '0914342655', 'karachi', '1679420011.patient10.jpeg', '2023-03-21 12:33:31', '2023-03-21 12:33:31');

-- --------------------------------------------------------

--
-- Table structure for table `vaccinateds`
--

DROP TABLE IF EXISTS `vaccinateds`;
CREATE TABLE IF NOT EXISTS `vaccinateds` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `fname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `medicalIssue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Timing` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vaccineType` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `childImage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parentId` int(11) NOT NULL,
  `hospitalId` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `vaccinateds_parentid_foreign` (`parentId`),
  KEY `vaccinateds_hospitalid_foreign` (`hospitalId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vaccines`
--

DROP TABLE IF EXISTS `vaccines`;
CREATE TABLE IF NOT EXISTS `vaccines` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `vaccineType` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `VaccineQuantity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hospitalId` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `vaccines_hospitalid_foreign` (`hospitalId`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vaccines`
--

INSERT INTO `vaccines` (`id`, `vaccineType`, `VaccineQuantity`, `hospitalId`, `created_at`, `updated_at`) VALUES
(1, 'Polio', '43', 1, '2023-03-19 15:03:49', '2023-03-19 15:03:49'),
(2, 'Hepatits', '56', 1, '2023-03-21 13:10:54', '2023-03-21 13:10:54'),
(3, 'Tetanus', '12', 1, '2023-03-21 13:11:13', '2023-03-21 13:11:13'),
(4, 'Pneumococcal', '78', 1, '2023-03-21 13:11:27', '2023-03-21 13:11:27'),
(5, 'MMR Vaccine', '9', 1, '2023-03-21 13:11:45', '2023-03-21 13:11:45'),
(6, 'Rotavirus', '13', 4, '2023-03-21 13:12:21', '2023-03-21 13:12:21'),
(7, 'Rubella', '67', 4, '2023-03-21 13:12:30', '2023-03-21 13:12:30'),
(8, 'Polio', '78', 4, '2023-03-21 13:12:36', '2023-03-21 13:12:36'),
(9, 'Pfizer', '67', 4, '2023-03-21 13:12:45', '2023-03-21 13:12:45'),
(10, 'Polio', '34', 2, '2023-03-21 13:13:46', '2023-03-21 13:13:46'),
(11, 'Hepatits', '43', 2, '2023-03-21 13:13:49', '2023-03-21 13:13:49'),
(12, 'Rotavirus', '3', 2, '2023-03-21 13:13:53', '2023-03-21 13:13:53');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
