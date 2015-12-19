-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 19, 2015 at 03:19 
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diw`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'post',
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL DEFAULT '0',
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(8) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image_left` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image_right` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `published_at` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `created_at`, `updated_at`) VALUES
(1, 'General', 'general', NULL, '2015-12-19 01:18:39', '2015-12-19 01:18:39');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_07_05_111905_create_visitors_table', 1),
('2014_07_05_144447_create_articles_table', 1),
('2014_07_05_152557_create_options_table', 1),
('2014_07_07_005653_create_categories_table', 1),
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2014_11_02_051938_create_roles_table', 1),
('2014_11_02_052125_create_permissions_table', 1),
('2014_11_02_052410_create_role_user_table', 1),
('2014_11_02_092851_create_permission_role_table', 1),
('2015_12_16_101436_create_project_logos_table', 1),
('2015_12_16_101457_create_project_images_table', 1),
('2015_12_18_203214_create_clients_table', 1),
('2015_12_18_213023_create_photos_table', 1),
('2015_12_18_213715_create_services_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`id`, `key`, `value`, `created_at`, `updated_at`) VALUES
(1, 'site.name', 'My Site Name', '2015-12-19 01:18:34', '2015-12-19 01:18:34'),
(2, 'site.slogan', 'The Great Website!', '2015-12-19 01:18:35', '2015-12-19 01:18:35'),
(3, 'site.description', 'My Site.', '2015-12-19 01:18:35', '2015-12-19 01:18:35'),
(4, 'contact.email', 'My Email.', '2015-12-19 01:18:35', '2015-12-19 01:18:35'),
(5, 'contact.phone', 'My Phone.', '2015-12-19 01:18:35', '2015-12-19 01:18:35'),
(6, 'site.keywords', 'pingpong, gravitano', '2015-12-19 01:18:35', '2015-12-19 01:18:35'),
(7, 'tracking', '<!-- GA Here -->', '2015-12-19 01:18:35', '2015-12-19 01:18:35'),
(8, 'facebook.link', 'https://www.facebook.com/pingponglabs', '2015-12-19 01:18:35', '2015-12-19 01:18:35'),
(9, 'twitter.link', 'https://twitter.com/pingponglabs', '2015-12-19 01:18:35', '2015-12-19 01:18:35'),
(10, 'youtube.link', 'youtube link', '2015-12-19 01:18:35', '2015-12-19 01:18:35'),
(11, 'linkedin.link', 'linkedin link', '2015-12-19 01:18:35', '2015-12-19 01:18:35'),
(12, 'instagram.link', 'instagram link', '2015-12-19 01:18:35', '2015-12-19 01:18:35'),
(13, 'post.permalink', '{slug}', '2015-12-19 01:18:36', '2015-12-19 01:18:36'),
(14, 'ckfinder.prefix', 'packages/pingpong/admin', '2015-12-19 01:18:36', '2015-12-19 01:18:36'),
(15, 'admin.theme', 'default', '2015-12-19 01:18:36', '2015-12-19 01:18:36'),
(16, 'pagination.perpage', '10', '2015-12-19 01:18:36', '2015-12-19 01:18:36');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `slug`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Manage Users', 'manage_users', 'Manage Users', '2015-12-19 01:18:36', '2015-12-19 01:18:36'),
(2, 'Manage Articles', 'manage_articles', 'Manage Articles', '2015-12-19 01:18:37', '2015-12-19 01:18:37'),
(3, 'Manage Pages', 'manage_pages', 'Manage Pages', '2015-12-19 01:18:37', '2015-12-19 01:18:37'),
(4, 'Manage Categories', 'manage_categories', 'Manage Categories', '2015-12-19 01:18:37', '2015-12-19 01:18:37'),
(5, 'Manage Settings', 'manage_settings', 'Manage Settings', '2015-12-19 01:18:37', '2015-12-19 01:18:37'),
(6, 'Manage Roles', 'manage_roles', 'Manage Roles', '2015-12-19 01:18:37', '2015-12-19 01:18:37'),
(7, 'Manage Permissions', 'manage_permissions', 'Manage Permissions', '2015-12-19 01:18:37', '2015-12-19 01:18:37'),
(8, 'Manage Clients', 'manage_clients', 'Manage Clients', '2015-12-19 01:18:37', '2015-12-19 01:18:37'),
(9, 'Manage Photos', 'manage_photos', 'Manage Photos', '2015-12-19 01:18:37', '2015-12-19 01:18:37'),
(10, 'Manage Services', 'manage_services', 'Manage Services', '2015-12-19 01:18:37', '2015-12-19 01:18:37');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`id`, `permission_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 2, 1, '2015-12-19 01:18:37', '2015-12-19 01:18:37'),
(2, 4, 1, '2015-12-19 01:18:37', '2015-12-19 01:18:37'),
(3, 8, 1, '2015-12-19 01:18:37', '2015-12-19 01:18:37'),
(4, 3, 1, '2015-12-19 01:18:37', '2015-12-19 01:18:37'),
(5, 7, 1, '2015-12-19 01:18:37', '2015-12-19 01:18:37'),
(6, 9, 1, '2015-12-19 01:18:37', '2015-12-19 01:18:37'),
(7, 6, 1, '2015-12-19 01:18:37', '2015-12-19 01:18:37'),
(8, 10, 1, '2015-12-19 01:18:37', '2015-12-19 01:18:37'),
(9, 5, 1, '2015-12-19 01:18:37', '2015-12-19 01:18:37'),
(10, 1, 1, '2015-12-19 01:18:37', '2015-12-19 01:18:37');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `project_images`
--

CREATE TABLE `project_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `article_id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `project_logos`
--

CREATE TABLE `project_logos` (
  `id` int(10) UNSIGNED NOT NULL,
  `article_id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `slug`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin', NULL, '2015-12-19 01:18:36', '2015-12-19 01:18:36'),
(2, 'User', 'user', NULL, '2015-12-19 01:18:36', '2015-12-19 01:18:36');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2015-12-19 01:18:38', '2015-12-19 01:18:38');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `user_id`, `title`, `image`, `body`, `created_at`, `updated_at`) VALUES
(1, 1, 'Korporátna identita', '4b9c7d6aabe3111f8bc90f64a2745d7965ae0eb2.png', '<p>Korpor&aacute;tna identita je tv&aacute;rou podniku. Navrhujeme vysoko kreat&iacute;vne a jedinečn&eacute; korpor&aacute;tne identity, pri ktor&yacute;ch kladieme d&ocirc;raz na vlastnosti, hist&oacute;riu a osobitnosť podniku či produktu.</p>\r\n', '2015-12-19 01:27:46', '2015-12-19 02:12:36'),
(2, 1, 'Tvorba moderných webov', '8759be3a21ff96f6e8c3622f5623552b263b129e.png', '<p>Vytv&aacute;rtame nielen jednoduch&eacute; webov&eacute; str&aacute;nky pomocou HTML5 a CSS3, ale aj komplikovan&eacute; weby obsahuj&uacute;ce datab&aacute;zy ako e-shopy a in&eacute;, zložitej&scaron;ie str&aacute;nky.</p>\r\n', '2015-12-19 02:13:59', '2015-12-19 02:13:59'),
(3, 1, 'Tvorba tlačovín', '14c0116c4f22905c3fe461bbf27c9d1b2562f377.png', '<p>Reklama si kladie za cieľ z&iacute;skať&nbsp;spotrebiteľov a jej tlačov&aacute; podoba je jedn&yacute;m z najroz&scaron;&iacute;renej&scaron;&iacute;ch foriem propag&aacute;cie. Zabezpečujeme nielen grafick&uacute; časť ale vieme garantovať kvalitn&uacute; a cenovo veľmi v&yacute;hodn&uacute; tlač podľa požiadavok.</p>\r\n', '2015-12-19 02:15:00', '2015-12-19 02:15:00'),
(4, 1, 'Správa sociálnych sietí', 'dea0e0f8f010b3519b2d7776a507b096321c4fab.png', '<p>Vir&aacute;lne roz&scaron;irovanie je z&aacute;kladom soci&aacute;lnych siet&iacute; a s jeho pomocou je možn&eacute; zasiahnuť obrovsk&eacute; spektr&aacute; použ&iacute;vateľov, ktor&yacute;m d&aacute;vame na povedomie inform&aacute;ciu, ktor&uacute; roz&scaron;irujeme za relat&iacute;vne n&iacute;zke n&aacute;klady.</p>\r\n', '2015-12-19 02:15:53', '2015-12-19 02:15:53'),
(5, 1, 'Copywriting', '1a29e4d335cb9a0017d9e572705fd52643eb0b90.png', '<p>Postar&aacute;me sa o va&scaron;e soci&aacute;lne siete, vymysl&iacute;me texty na webov&eacute; str&aacute;nky, pon&uacute;kneme copyediting.</p>\r\n', '2015-12-19 02:16:16', '2015-12-19 02:16:16'),
(6, 1, 'Online kampane', '91950906a7958f530d73475f22751a6348aaead2.png', '<p>Zostav&iacute;me pl&aacute;n, v ktorom zohľadn&iacute;me va&scaron;u hist&oacute;riu, hodnoty, produkt i mnoh&eacute; ďaľ&scaron;ie a podľa nich v&aacute;m priprav&iacute;me online kampane na mieru - vek ľud&iacute;, ku ktor&yacute;m bude reklama siahať, časov&yacute; &uacute;sek, kedy bud&uacute; viditeľn&eacute; či cieľov&eacute; oslovenie použ&iacute;vateľov podľa ich z&aacute;ujmov.</p>\r\n', '2015-12-19 02:16:43', '2015-12-19 02:16:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'peterabsolon@yahoo.com', '$2y$10$sXfcXYWGl7ll3KwDXPh4WukzP7vceEOLOvX6Owvy9u/3.464uJL4u', NULL, '2015-12-19 01:18:38', '2015-12-19 01:18:38');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` int(10) UNSIGNED NOT NULL,
  `ip` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hits` int(11) NOT NULL,
  `online` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `options_key_unique` (`key`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_slug_unique` (`slug`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_images`
--
ALTER TABLE `project_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_images_article_id_index` (`article_id`);

--
-- Indexes for table `project_logos`
--
ALTER TABLE `project_logos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_logos_article_id_index` (`article_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_slug_unique` (`slug`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_user_role_id_index` (`role_id`),
  ADD KEY `role_user_user_id_index` (`user_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `permission_role`
--
ALTER TABLE `permission_role`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `project_images`
--
ALTER TABLE `project_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `project_logos`
--
ALTER TABLE `project_logos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
