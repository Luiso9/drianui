-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2022 at 12:56 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webstatic`
--

-- --------------------------------------------------------

--
-- Table structure for table `drianui`
--

CREATE TABLE `drianui` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `drianui`
--

INSERT INTO `drianui` (`id`, `title`, `deskripsi`, `tag`, `created_at`, `updated_at`) VALUES
(1, 'drian-web', 'just a useless website that i make for fun', 'personal-website', NULL, NULL),
(2, 'register', 'Grab your own sweet-looking \'.is-a.dev\' subdomain', 'Subdomain', NULL, NULL),
(3, 'Discord-MusicBot', 'Very simple discord music bot with the discord.js with Song Name playing. It can able to play music with the song name', 'Music', NULL, NULL),
(4, 'mal-web', 'Quick access to MyAnimeList content with simpler and more modern style.', 'API', NULL, NULL),
(5, 'mov-cli', '[WIP]An ani-cli like cli tool for movies and shows', 'movie', NULL, NULL),
(6, 'goindex', 'Index your google drive.', 'material', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `drianui`
--
ALTER TABLE `drianui`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `drianui`
--
ALTER TABLE `drianui`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
