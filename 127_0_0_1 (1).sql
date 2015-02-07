-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2015 at 03:53 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `estreaming`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `body` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `user_id`, `body`, `created_at`, `updated_at`) VALUES
(1, 'This is a new article', 1, 'Hello there, how are you guys, this is just a test article that was made inside the admin panel. I hope you like this article about something like test and it''s just a test so I''m writing and have to write a long one because this is a news article so it must be long, like soooo long so what are you currently doing, we''re going to have a seminar soon, want to know what? just go to the seminars page.', '2015-01-31 17:45:54', '2015-01-31 17:45:54'),
(3, 'test article 3', 1, 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?', '2015-01-31 17:46:51', '2015-01-31 17:46:51'),
(4, 'test again', 1, 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?', '2015-01-31 17:47:08', '2015-01-31 17:47:08'),
(5, 'just for testing', 1, 'just test this Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?', '2015-01-31 17:47:22', '2015-01-31 17:47:22'),
(6, 'test more 6', 1, 'vSed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?', '2015-01-31 17:47:32', '2015-01-31 17:47:32');

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE IF NOT EXISTS `faqs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `question` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `answer` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`, `created_at`, `updated_at`) VALUES
(1, 'Test question', 'This is a test answer also that was created on the system, you can create one if you have an admin access on the system', '2015-01-31 17:28:36', '2015-01-31 17:28:36'),
(2, 'Another question', 'This is another question just to show that it''s a dynamic system for use', '2015-01-31 17:29:26', '2015-01-31 17:29:26'),
(3, 'How to register?', 'To register, just click the register link on the upper right side of the screen of the system. Then just fill up the form and click the submit button and wait for confirmation.', '2015-01-31 17:30:23', '2015-01-31 17:30:23'),
(4, 'tanong po', 'ano yon', '2015-02-01 23:02:25', '2015-02-01 23:02:25');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE IF NOT EXISTS `logs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `action` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `user_id`, `action`, `created_at`, `updated_at`) VALUES
(1, 1, 'Logged in', '2015-02-05 18:21:54', '2015-02-05 18:21:54');

-- --------------------------------------------------------

--
-- Table structure for table `medias`
--

CREATE TABLE IF NOT EXISTS `medias` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `file` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `medias`
--

INSERT INTO `medias` (`id`, `type`, `user_id`, `file`, `created_at`, `updated_at`) VALUES
(2, 'image', 1, '1423137655_2015-02-04_1713.png', '2015-02-05 04:00:55', '2015-02-05 04:00:55'),
(3, 'image', 1, '54d35bb6a5a81-1423137718-512.png', '2015-02-05 04:01:58', '2015-02-05 04:01:58');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2015_01_16_040541_create_users_table', 1),
('2015_01_16_051906_create_users_info', 1),
('2015_01_16_052005_create_users_membership', 1),
('2015_01_16_052046_create_roles_table', 1),
('2015_01_16_052118_create_permissions_table', 1),
('2015_01_16_052156_create_seminars_table', 1),
('2015_01_16_052226_create_articles_table', 1),
('2015_01_16_052300_create_medias_table', 1),
('2015_01_16_052410_create_seminars_webcast_table', 1),
('2015_01_16_052453_create_seminars_media_table', 1),
('2015_01_16_062849_create_faq_table', 1),
('2015_01_29_134348_create_seminar_speakers_table', 1),
('2015_02_02_061108_create_logs_table', 2),
('2015_02_04_184954_create_seminar_users_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'user', '2015-01-31 17:26:01', '2015-01-31 17:26:01'),
(2, 'admin', '2015-01-31 17:26:01', '2015-01-31 17:26:01');

-- --------------------------------------------------------

--
-- Table structure for table `seminar_speakers`
--

CREATE TABLE IF NOT EXISTS `seminar_speakers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `seminar_id` int(11) NOT NULL,
  `fname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bio` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `seminar_users`
--

CREATE TABLE IF NOT EXISTS `seminar_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `seminar_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `seminar_users`
--

INSERT INTO `seminar_users` (`id`, `seminar_id`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 8, 2, 'paid', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 9, 2, 'waiting for payment', '2015-02-04 12:32:02', '2015-02-04 12:32:02'),
(3, 9, 3, 'waiting for payment', '2015-02-04 22:49:06', '2015-02-04 22:49:06');

-- --------------------------------------------------------

--
-- Table structure for table `seminars`
--

CREATE TABLE IF NOT EXISTS `seminars` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `long` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `start_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `end_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `seminars`
--

INSERT INTO `seminars` (`id`, `title`, `description`, `image`, `price`, `location`, `long`, `lat`, `start_at`, `end_at`, `created_at`, `updated_at`) VALUES
(8, 'test lang seminar', 'test seminar po to', '', '120', 'Masantol High School (Sta. Lucia National High School, Masantol), Masantol, Philippines', '120.70771000000002', '14.876826', '2015-02-02 16:00:00', '2015-02-06 16:00:00', '2015-01-31 18:43:33', '2015-01-31 18:43:33'),
(9, 'Test seminar again', 'description of the seminar asdasd asd asd as das das d asd asd asd asdajsdkjahsjkdhajksdasdasd', '', '133', 'SM Tarlac Service Road, Tarlac City, Central Luzon, Philippines', '120.59505990000002', '15.4778264', '2015-02-03 16:00:00', '2015-02-13 16:00:00', '2015-02-01 22:59:52', '2015-02-01 22:59:52');

-- --------------------------------------------------------

--
-- Table structure for table `seminars_media`
--

CREATE TABLE IF NOT EXISTS `seminars_media` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `seminar_id` int(11) NOT NULL,
  `media_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `seminars_webcast`
--

CREATE TABLE IF NOT EXISTS `seminars_webcast` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `seminar_id` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'waiting',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `activation_code` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `activated` int(11) NOT NULL,
  `role_id` int(11) NOT NULL DEFAULT '1',
  `last_ip` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `last_login_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `activation_code`, `remember_token`, `activated`, `role_id`, `last_ip`, `last_login_at`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'admin@admin.com', '$2y$10$D8Tz9nEKvarDz/6If3PH9OdgpruGvr86ygSZuRb7P6yCQ9Fm5ndrG', '', '25AGepE3JmbgnHsWIKKajhaGvNngQtjYMTuXgbGJ7KhvsGFbkywaWbhOOO7B', 0, 2, '', '0000-00-00 00:00:00', NULL, '2015-01-31 17:26:27', '2015-02-05 18:27:30'),
(2, 'test@yahoo.com', '$2y$10$UI3jbGhsO.s9DAiGKGDxqO38pv8Mkx9n0k2PzVbpdMJUZJoNd3Xc2', '', 'yT0pKd9qsA7kK6wBYKPnoHg6Uvp5yjxiVqxK7k0EYEg4amwTlPfgeLbijn4e', 0, 1, '', '0000-00-00 00:00:00', NULL, '2015-02-01 22:34:52', '2015-02-05 02:42:59'),
(3, 'test2@test.com', '$2y$10$X5X8tTd9IbEGQRKPZ67DbOdIeRSOSI3XM890sxWHGoSQ9ZnyOoh/S', '', 'fKs7ogmfJQNkFcpH2qCuEMKskBhk7KOgPnLbovY8EQ8KwCFz48NBTcalWl8V', 0, 1, '', '0000-00-00 00:00:00', NULL, '2015-02-01 22:36:06', '2015-02-05 02:58:12'),
(4, 'admin2@admin.com', '$2y$10$dQtZIftwk.I9os1Q6JFobeMibTG44tP2eUV/9cbrIrhXY6prWxJAm', '', '', 0, 2, '', '0000-00-00 00:00:00', NULL, '2015-02-04 22:57:26', '2015-02-04 22:57:26'),
(5, 'admin3@admin.com', '$2y$10$GI3TdH0RxESsjLTD4c8uveefGC4AbMJuieZAoOP.JlGRO5dhFHvEq', '', '7bGvChTTNmwq0eWPaEFhPcCpZNwpy0oaD9cdXmTDXgUyGBDIShkUEuatnIE3', 0, 2, '', '0000-00-00 00:00:00', NULL, '2015-02-04 22:58:56', '2015-02-04 22:59:32'),
(6, 'adminako@admin.com', '$2y$10$7Qu3qya9Cdxd30f7aNwRbeU6aFUoMEBHZ0YWokB6DWGWGgolmt9.y', '', '', 0, 2, '', '0000-00-00 00:00:00', NULL, '2015-02-05 02:22:35', '2015-02-05 02:22:35');

-- --------------------------------------------------------

--
-- Table structure for table `users_info`
--

CREATE TABLE IF NOT EXISTS `users_info` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `first_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `middle_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `occupation` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `birthdate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `membership` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'regular',
  `membership_expire_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `users_info`
--

INSERT INTO `users_info` (`id`, `user_id`, `first_name`, `last_name`, `middle_name`, `occupation`, `birthdate`, `address`, `membership`, `membership_expire_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'admin', 'admin', '', '', '0000-00-00 00:00:00', '', 'regular', '0000-00-00 00:00:00', '2015-01-31 17:26:27', '2015-02-05 18:21:53'),
(2, 2, 'test', 'test', 'test', '', '0000-00-00 00:00:00', '', 'member', '2015-02-15 16:00:00', '2015-02-01 22:34:52', '2015-02-01 22:34:52'),
(3, 3, 'testing2', 'asdasd', 'teasdasdasd', '', '0000-00-00 00:00:00', '', 'regular', '0000-00-00 00:00:00', '2015-02-01 22:36:06', '2015-02-05 02:47:01'),
(4, 4, 'admin2', 'admin2', 'admin2', '', '0000-00-00 00:00:00', '', 'regular', '0000-00-00 00:00:00', '2015-02-04 22:57:26', '2015-02-04 22:57:26'),
(5, 5, 'admin3', 'admin3', 'admin3', '', '0000-00-00 00:00:00', '', 'regular', '0000-00-00 00:00:00', '2015-02-04 22:58:56', '2015-02-04 22:58:56'),
(6, 6, 'ako admin', 'ako ah', 'ako din', '', '0000-00-00 00:00:00', '', 'regular', '0000-00-00 00:00:00', '2015-02-05 02:22:35', '2015-02-05 02:22:35');

-- --------------------------------------------------------

--
-- Table structure for table `users_membership`
--

CREATE TABLE IF NOT EXISTS `users_membership` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `expire_at` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
