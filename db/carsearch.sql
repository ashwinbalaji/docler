-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 21, 2019 at 11:53 AM
-- Server version: 5.7.26
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carsearch`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Administrator',
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `phone`, `role`, `photo`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', '01629552892', 'Administrator', '1564392361people.png', '$2y$12$4TTY9NJPM52HbsxB3LVYJuZfw1jK44B8TZESEGuxe6IGH7ue1UIrq', 1, 'wWcf56PAQEid730KmVaI3HkiQMz74tOkupgE3VLWfwXjshI4lDwK1O2KNI6I', '2018-02-28 23:27:08', '2019-07-29 03:26:14'),
(4, 'Staff', 'staff@gmail.com', '34534534534', 'Staff', '1558707029staff.jpg', '$2y$12$V8KOpp9JOA5.lsz3.YbrH.oJz8xP/A5Px1niH3LVBZynNxbb1d4.m', 1, '9FXuykJQh9LqupMURzoXq9qDfzQqFr17ixgrMRwPEqez9M3QyjUsAVlUvs8g', '2019-05-24 08:10:30', '2019-05-24 08:10:30'),
(5, 'Genius', 'genius@gmail.com', '47433488', 'Administrator', NULL, '$2y$12$xHtGQsO4RB9yIxsnHS92VeyCROqDu7zcNeyYVMVj.ik7gGB.UDhIS', 1, '0Kel2RVNyXnYAZGmh6vFO1gKM85iO2iFfozFisqXzzqD1H94hOouKWK44aaF', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
CREATE TABLE IF NOT EXISTS `blogs` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `category_id` int(191) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `source` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `views` int(11) NOT NULL DEFAULT '0',
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `meta_tag` text COLLATE utf8mb4_unicode_ci,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `tags` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `category_id`, `title`, `details`, `photo`, `source`, `views`, `status`, `meta_tag`, `meta_description`, `tags`, `created_at`) VALUES
(9, 2, 'How to design effective arts?', 'MIAMI — For decades, South Florida schoolchildren and adults fascinated by far-off galaxies, earthly ecosystems, the proper ties of light and sound and other wonders of science had only a quaint, antiquated museum here in which to explore their interests. Now, with the long-delayed opening of a vast new science museum downtown set for Monday, visitors will be able to stand underneath a suspended, 500,000-gallon aquarium tank and gaze at hammerhead and tiger sharks, mahi mahi, devil rays and other creatures through a 60,000-pound oculus. \r\n\r\nLens that will give the impression of seeing the fish from the bottom of a huge cocktail glass. And that’s just one of many attractions and exhibits. Officials at the $305 million Phillip and Patricia Frost Museum of Science promise that it will be a vivid expression of modern scientific inquiry and exposition. Its opening follows a series of setbacks and lawsuits and a scramble to finish the 250,000-square-foot structure. At one point, the project ran precariously short of money. The museum high-profile opening is especially significant in a state s', '15606631021560403292adolescent-adult-attractive-1462637.jpg', 'www.geniusocean.com', 48, 1, 'b1,b2,b3', 'Mauna Loa, the biggest volcano on Earth — and one of the most active — covers half the Island of Hawaii. Just 35 miles to the northeast, Mauna Kea, known to native Hawaiians as Mauna a Wakea, rises nearly 14,000 feet above sea level.', 'Business,Research,Mechanical,Process,Innovation,Engineering', '2018-02-06 09:53:41'),
(10, 3, 'How to design effective arts?', 'MIAMI — For decades, South Florida schoolchildren and adults fascinated by far-off galaxies, earthly ecosystems, the proper ties of light and sound and other wonders of science had only a quaint, antiquated museum here in which to explore their interests. Now, with the long-delayed opening of a vast new science museum downtown set for Monday, visitors will be able to stand underneath a suspended, 500,000-gallon aquarium tank and gaze at hammerhead and tiger sharks, mahi mahi, devil rays and other creatures through a 60,000-pound oculus. \r\n\r\nLens that will give the impression of seeing the fish from the bottom of a huge cocktail glass. And that’s just one of many attractions and exhibits. Officials at the $305 million Phillip and Patricia Frost Museum of Science promise that it will be a vivid expression of modern scientific inquiry and exposition. Its opening follows a series of setbacks and lawsuits and a scramble to finish the 250,000-square-foot structure. At one point, the project ran precariously short of money. The museum high-profile opening is especially significant in a state s', '15606630871560403442blur-businesswoman-caucasian-941555.jpg', 'www.geniusocean.com', 14, 1, NULL, NULL, 'Business,Research,Mechanical,Process,Innovation,Engineering', '2018-03-06 09:54:21'),
(12, 2, 'Modeling is an art', 'MIAMI — For decades, South Florida schoolchildren and adults fascinated by far-off galaxies, earthly ecosystems, the proper ties of light and sound and other wonders of science had only a quaint, antiquated museum here in which to explore their interests. Now, with the long-delayed opening of a vast new science museum downtown set for Monday, visitors will be able to stand underneath a suspended, 500,000-gallon aquarium tank and gaze at hammerhead and tiger sharks, mahi mahi, devil rays and other creatures through a 60,000-pound oculus. \r\n\r\nLens that will give the impression of seeing the fish from the bottom of a huge cocktail glass. And that’s just one of many attractions and exhibits. Officials at the $305 million Phillip and Patricia Frost Museum of Science promise that it will be a vivid expression of modern scientific inquiry and exposition. Its opening follows a series of setbacks and lawsuits and a scramble to finish the 250,000-square-foot structure. At one point, the project ran precariously short of money. The museum high-profile opening is especially significant in a state s', '15606630761560403334beautiful-cellphone-cute-761963.jpg', 'www.geniusocean.com', 19, 1, NULL, NULL, 'Business,Research,Mechanical,Process,Innovation,Engineering', '2018-04-06 22:04:20'),
(13, 3, 'How to design effective arts?', 'MIAMI — For decades, South Florida schoolchildren and adults fascinated by far-off galaxies, earthly ecosystems, the proper ties of light and sound and other wonders of science had only a quaint, antiquated museum here in which to explore their interests. Now, with the long-delayed opening of a vast new science museum downtown set for Monday, visitors will be able to stand underneath a suspended, 500,000-gallon aquarium tank and gaze at hammerhead and tiger sharks, mahi mahi, devil rays and other creatures through a 60,000-pound oculus. \r\n\r\nLens that will give the impression of seeing the fish from the bottom of a huge cocktail glass. And that’s just one of many attractions and exhibits. Officials at the $305 million Phillip and Patricia Frost Museum of Science promise that it will be a vivid expression of modern scientific inquiry and exposition. Its opening follows a series of setbacks and lawsuits and a scramble to finish the 250,000-square-foot structure. At one point, the project ran precariously short of money. The museum high-profile opening is especially significant in a state s', '15606630511560403627adult-attractive-beautiful-731070.jpg', 'www.geniusocean.com', 58, 1, NULL, NULL, 'Business,Research,Mechanical,Process,Innovation,Engineering', '2018-05-06 22:04:36'),
(14, 2, 'How to design effective arts?', 'MIAMI — For decades, South Florida schoolchildren and adults fascinated by far-off galaxies, earthly ecosystems, the proper ties of light and sound and other wonders of science had only a quaint, antiquated museum here in which to explore their interests. Now, with the long-delayed opening of a vast new science museum downtown set for Monday, visitors will be able to stand underneath a suspended, 500,000-gallon aquarium tank and gaze at hammerhead and tiger sharks, mahi mahi, devil rays and other creatures through a 60,000-pound oculus. \r\n\r\nLens that will give the impression of seeing the fish from the bottom of a huge cocktail glass. And that’s just one of many attractions and exhibits. Officials at the $305 million Phillip and Patricia Frost Museum of Science promise that it will be a vivid expression of modern scientific inquiry and exposition. Its opening follows a series of setbacks and lawsuits and a scramble to finish the 250,000-square-foot structure. At one point, the project ran precariously short of money. The museum high-profile opening is especially significant in a state s', '15606630621560403590adult-blue-blue-sky-875862.jpg', 'www.geniusocean.com', 2, 1, NULL, NULL, 'Business,Research,Mechanical,Process,Innovation,Engineering', '2018-06-03 06:02:30'),
(15, 3, 'I found my passion in modelling', 'MIAMI — For decades, South Florida schoolchildren and adults fascinated by far-off galaxies, earthly ecosystems, the proper ties of light and sound and other wonders of science had only a quaint, antiquated museum here in which to explore their interests. Now, with the long-delayed opening of a vast new science museum downtown set for Monday, visitors will be able to stand underneath a suspended, 500,000-gallon aquarium tank and gaze at hammerhead and tiger sharks, mahi mahi, devil rays and other creatures through a 60,000-pound oculus. \r\n\r\nLens that will give the impression of seeing the fish from the bottom of a huge cocktail glass. And that’s just one of many attractions and exhibits. Officials at the $305 million Phillip and Patricia Frost Museum of Science promise that it will be a vivid expression of modern scientific inquiry and exposition. Its opening follows a series of setbacks and lawsuits and a scramble to finish the 250,000-square-foot structure. At one point, the project ran precariously short of money. The museum high-profile opening is especially significant in a state s', '1560403734adult-beverage-blur-186353.jpg', 'www.geniusocean.com', 5, 1, NULL, NULL, 'Business,Research,Mechanical,Process,Innovation,Engineering', '2018-07-03 06:02:53'),
(16, 2, 'How to design effective arts?', 'MIAMI — For decades, South Florida schoolchildren and adults fascinated by far-off galaxies, earthly ecosystems, the proper ties of light and sound and other wonders of science had only a quaint, antiquated museum here in which to explore their interests. Now, with the long-delayed opening of a vast new science museum downtown set for Monday, visitors will be able to stand underneath a suspended, 500,000-gallon aquarium tank and gaze at hammerhead and tiger sharks, mahi mahi, devil rays and other creatures through a 60,000-pound oculus. \r\n\r\nLens that will give the impression of seeing the fish from the bottom of a huge cocktail glass. And that’s just one of many attractions and exhibits. Officials at the $305 million Phillip and Patricia Frost Museum of Science promise that it will be a vivid expression of modern scientific inquiry and exposition. Its opening follows a series of setbacks and lawsuits and a scramble to finish the 250,000-square-foot structure. At one point, the project ran precariously short of money. The museum high-profile opening is especially significant in a state s', '1560403701adult-brunette-editorial-2224735.jpg', 'www.geniusocean.com', 7, 1, NULL, NULL, 'Business,Research,Mechanical,Process,Innovation,Engineering', '2018-08-03 06:03:14'),
(17, 3, 'Modeling is not just a profession its a passion', 'MIAMI — For decades, South Florida schoolchildren and adults fascinated by far-off galaxies, earthly ecosystems, the proper ties of light and sound and other wonders of science had only a quaint, antiquated museum here in which to explore their interests. Now, with the long-delayed opening of a vast new science museum downtown set for Monday, visitors will be able to stand underneath a suspended, 500,000-gallon aquarium tank and gaze at hammerhead and tiger sharks, mahi mahi, devil rays and other creatures through a 60,000-pound oculus. \r\n\r\nLens that will give the impression of seeing the fish from the bottom of a huge cocktail glass. And that’s just one of many attractions and exhibits. Officials at the $305 million Phillip and Patricia Frost Museum of Science promise that it will be a vivid expression of modern scientific inquiry and exposition. Its opening follows a series of setbacks and lawsuits and a scramble to finish the 250,000-square-foot structure. At one point, the project ran precariously short of money. The museum high-profile opening is especially significant in a state s', '1560403662beautiful-brown-hair-casual-1989252.jpg', 'www.geniusocean.com', 55, 1, NULL, NULL, 'Business,Research,Mechanical,Process,Innovation,Engineering', '2019-01-03 06:03:37'),
(18, 2, 'How to design effective arts?', 'MIAMI — For decades, South Florida schoolchildren and adults fascinated by far-off galaxies, earthly ecosystems, the proper ties of light and sound and other wonders of science had only a quaint, antiquated museum here in which to explore their interests. Now, with the long-delayed opening of a vast new science museum downtown set for Monday, visitors will be able to stand underneath a suspended, 500,000-gallon aquarium tank and gaze at hammerhead and tiger sharks, mahi mahi, devil rays and other creatures through a 60,000-pound oculus. \r\n\r\nLens that will give the impression of seeing the fish from the bottom of a huge cocktail glass. And that’s just one of many attractions and exhibits. Officials at the $305 million Phillip and Patricia Frost Museum of Science promise that it will be a vivid expression of modern scientific inquiry and exposition. Its opening follows a series of setbacks and lawsuits and a scramble to finish the 250,000-square-foot structure. At one point, the project ran precariously short of money. The museum high-profile opening is especially significant in a state s', '1560403334beautiful-cellphone-cute-761963.jpg', 'www.geniusocean.com', 172, 1, NULL, NULL, 'Business,Research,Mechanical,Process,Innovation,Engineering', '2019-01-03 06:03:59'),
(20, 2, 'How to design effective arts?', 'MIAMI — For decades, South Florida schoolchildren and adults fascinated by far-off galaxies, earthly ecosystems, the proper ties of light and sound and other wonders of science had only a quaint, antiquated museum here in which to explore their interests. Now, with the long-delayed opening of a vast new science museum downtown set for Monday, visitors will be able to stand underneath a suspended, 500,000-gallon aquarium tank and gaze at hammerhead and tiger sharks, mahi mahi, devil rays and other creatures through a 60,000-pound oculus. \r\n\r\nLens that will give the impression of seeing the fish from the bottom of a huge cocktail glass. And that’s just one of many attractions and exhibits. Officials at the $305 million Phillip and Patricia Frost Museum of Science promise that it will be a vivid expression of modern scientific inquiry and exposition. Its opening follows a series of setbacks and lawsuits and a scramble to finish the 250,000-square-foot structure. At one point, the project ran precariously short of money. The museum high-profile opening is especially significant in a state s', '1560403627adult-attractive-beautiful-731070.jpg', 'www.geniusocean.com', 8, 1, NULL, NULL, 'Business,Research,Mechanical,Process,Innovation,Engineering', '2018-08-03 06:03:14'),
(21, 3, 'Read this blog if you are a beginner', 'MIAMI — For decades, South Florida schoolchildren and adults fascinated by far-off galaxies, earthly ecosystems, the proper ties of light and sound and other wonders of science had only a quaint, antiquated museum here in which to explore their interests. Now, with the long-delayed opening of a vast new science museum downtown set for Monday, visitors will be able to stand underneath a suspended, 500,000-gallon aquarium tank and gaze at hammerhead and tiger sharks, mahi mahi, devil rays and other creatures through a 60,000-pound oculus. \r\n\r\nLens that will give the impression of seeing the fish from the bottom of a huge cocktail glass. And that’s just one of many attractions and exhibits. Officials at the $305 million Phillip and Patricia Frost Museum of Science promise that it will be a vivid expression of modern scientific inquiry and exposition. Its opening follows a series of setbacks and lawsuits and a scramble to finish the 250,000-square-foot structure. At one point, the project ran precariously short of money. The museum high-profile opening is especially significant in a state s', '1560403590adult-blue-blue-sky-875862.jpg', 'www.geniusocean.com', 37, 1, NULL, NULL, 'Business,Research,Mechanical,Process,Innovation,Engineering', '2019-01-03 06:03:37'),
(22, 2, 'How to design effective arts?', 'MIAMI — For decades, South Florida schoolchildren and adults fascinated by far-off galaxies, earthly ecosystems, the proper ties of light and sound and other wonders of science had only a quaint, antiquated museum here in which to explore their interests. Now, with the long-delayed opening of a vast new science museum downtown set for Monday, visitors will be able to stand underneath a suspended, 500,000-gallon aquarium tank and gaze at hammerhead and tiger sharks, mahi mahi, devil rays and other creatures through a 60,000-pound oculus. \r\n\r\nLens that will give the impression of seeing the fish from the bottom of a huge cocktail glass. And that’s just one of many attractions and exhibits. Officials at the $305 million Phillip and Patricia Frost Museum of Science promise that it will be a vivid expression of modern scientific inquiry and exposition. Its opening follows a series of setbacks and lawsuits and a scramble to finish the 250,000-square-foot structure. At one point, the project ran precariously short of money. The museum high-profile opening is especially significant in a state s', '1560403292adolescent-adult-attractive-1462637.jpg', 'www.geniusocean.com', 53, 1, NULL, NULL, 'Business,Research,Mechanical,Process,Innovation,Engineering', '2019-01-03 06:03:59'),
(23, 7, 'How to design effective arts?', 'MIAMI — For decades, South Florida schoolchildren and adults fascinated by far-off galaxies, earthly ecosystems, the proper ties of light and sound and other wonders of science had only a quaint, antiquated museum here in which to explore their interests. Now, with the long-delayed opening of a vast new science museum downtown set for Monday, visitors will be able to stand underneath a suspended, 500,000-gallon aquarium tank and gaze at hammerhead and tiger sharks, mahi mahi, devil rays and other creatures through a 60,000-pound oculus. \r\n\r\nLens that will give the impression of seeing the fish from the bottom of a huge cocktail glass. And that’s just one of many attractions and exhibits. Officials at the $305 million Phillip and Patricia Frost Museum of Science promise that it will be a vivid expression of modern scientific inquiry and exposition. Its opening follows a series of setbacks and lawsuits and a scramble to finish the 250,000-square-foot structure. At one point, the project ran precariously short of money. The museum high-profile opening is especially significant in a state s', '1560403521afro-attractive-beautiful-2253065.jpg', 'www.geniusocean.com', 25, 1, NULL, NULL, 'Business,Research,Mechanical,Process,Innovation,Engineering', '2018-08-03 06:03:14'),
(24, 3, 'How to design effective arts?', 'MIAMI — For decades, South Florida schoolchildren and adults fascinated by far-off galaxies, earthly ecosystems, the proper ties of light and sound and other wonders of science had only a quaint, antiquated museum here in which to explore their interests. Now, with the long-delayed opening of a vast new science museum downtown set for Monday, visitors will be able to stand underneath a suspended, 500,000-gallon aquarium tank and gaze at hammerhead and tiger sharks, mahi mahi, devil rays and other creatures through a 60,000-pound oculus. \r\n\r\nLens that will give the impression of seeing the fish from the bottom of a huge cocktail glass. And that’s just one of many attractions and exhibits. Officials at the $305 million Phillip and Patricia Frost Museum of Science promise that it will be a vivid expression of modern scientific inquiry and exposition. Its opening follows a series of setbacks and lawsuits and a scramble to finish the 250,000-square-foot structure. At one point, the project ran precariously short of money. The museum high-profile opening is especially significant in a state s', '1560403442blur-businesswoman-caucasian-941555.jpg', 'www.geniusocean.com', 47, 1, NULL, NULL, 'Business,Research,Mechanical,Process,Innovation,Engineering', '2019-01-03 06:03:37'),
(25, 3, 'Top Five secrets to become a model', 'MIAMI — For decades, South Florida schoolchildren and adults fascinated by far-off galaxies, earthly ecosystems, the proper ties of light and sound and other wonders of science had only a quaint, antiquated museum here in which to explore their interests. Now, with the long-delayed opening of a vast new science museum downtown set for Monday, visitors will be able to stand underneath a suspended, 500,000-gallon aquarium tank and gaze at hammerhead and tiger sharks, mahi mahi, devil rays and other creatures through a 60,000-pound oculus. \r\n\r\nLens that will give the impression of seeing the fish from the bottom of a huge cocktail glass. And that’s just one of many attractions and exhibits. Officials at the $305 million Phillip and Patricia Frost Museum of Science promise that it will be a vivid expression of modern scientific inquiry and exposition. Its opening follows a series of setbacks and lawsuits and a scramble to finish the 250,000-square-foot structure. At one point, the project ran precariously short of money. The museum high-profile opening is especially significant in a state s', '1560403187blog.jpg', 'www.geniusocean.com', 109, 1, NULL, NULL, 'Business,Research,Process,Innovation', '2019-01-03 06:03:59');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

DROP TABLE IF EXISTS `blog_categories`;
CREATE TABLE IF NOT EXISTS `blog_categories` (
  `id` int(191) NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `name`, `slug`) VALUES
(2, 'Oil & gas', 'oil-and-gas'),
(3, 'Manufacturing', 'manufacturing'),
(4, 'Chemical Research', 'chemical_research'),
(5, 'Agriculture', 'agriculture'),
(6, 'Mechanical', 'mechanical'),
(7, 'Entrepreneurs', 'entrepreneurs'),
(8, 'Technology', 'technology');

-- --------------------------------------------------------

--
-- Table structure for table `body_types`
--

DROP TABLE IF EXISTS `body_types`;
CREATE TABLE IF NOT EXISTS `body_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `status` int(3) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `body_types`
--

INSERT INTO `body_types` (`id`, `name`, `status`) VALUES
(3, 'Hatchback', 1),
(4, 'Sedan', 1),
(5, 'MPV', 1),
(6, 'SUV', 1),
(7, 'Crossover', 1),
(8, 'Coupe', 1),
(9, 'Convertible', 1);

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

DROP TABLE IF EXISTS `brands`;
CREATE TABLE IF NOT EXISTS `brands` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `status` int(3) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `status`) VALUES
(1, 'Acura', 1),
(2, 'Alfa Romeo', 1),
(3, 'AMC', 1),
(4, 'Aston Martin', 1),
(5, 'Audi', 1),
(6, 'Avanti', 1),
(7, 'Bentley', 1),
(8, 'BMW', 1),
(9, 'Buick', 1),
(10, 'Cadillac', 1),
(11, 'Chevrolet', 1),
(12, 'Chrysler', 1),
(13, 'Daewoo', 1),
(14, 'Daihatsu', 1),
(15, 'Datsun', 1),
(16, 'DeLorean', 1),
(17, 'Dodge', 1),
(18, 'Eagle', 1),
(19, 'Ferrari', 1),
(20, 'FIAT', 1),
(21, 'Fisker', 1),
(22, 'Ford', 1),
(23, 'Freightliner', 1),
(24, 'Geo', 1),
(25, 'GMC', 1),
(26, 'Honda', 1),
(27, 'HUMMER', 1),
(28, 'Hyundai', 1),
(29, 'Infiniti', 1),
(30, 'Isuzu', 1),
(31, 'Jaguar', 1),
(32, 'Jeep', 1),
(33, 'Kia', 1),
(34, 'Lamborghini', 1),
(35, 'Lancia', 1),
(36, 'Land Rover', 1),
(37, 'Lexus', 1),
(38, 'Lincoln', 1),
(39, 'Lotus', 1),
(40, 'Maserati', 1),
(41, 'Maybach', 1),
(42, 'Mazda', 1),
(43, 'McLaren', 1),
(44, 'Mercedes-Benz', 1),
(45, 'Mercury', 1),
(46, 'Merkur', 1),
(47, 'MINI', 1),
(48, 'Mitsubishi', 1),
(49, 'Nissan', 1),
(50, 'Oldsmobile', 1),
(51, 'Peugeot', 1),
(52, 'Plymouth', 1),
(53, 'Pontiac', 1),
(54, 'Porsche', 1),
(55, 'RAM', 1),
(56, 'Renault', 1),
(57, 'Rolls-Royce', 1),
(58, 'Saab', 1),
(59, 'Saturn', 1),
(60, 'Scion', 1),
(61, 'smart', 1),
(62, 'SRT', 1),
(63, 'Sterling', 1),
(64, 'Subaru', 1),
(65, 'Suzuki', 1),
(66, 'Tesla', 1),
(67, 'Toyota', 1),
(68, 'Triumph', 1),
(69, 'Volkswagen', 1),
(70, 'Volvo', 1),
(71, 'Yugo', 1);

-- --------------------------------------------------------

--
-- Table structure for table `brand_models`
--

DROP TABLE IF EXISTS `brand_models`;
CREATE TABLE IF NOT EXISTS `brand_models` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `brand_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `status` int(3) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1316 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand_models`
--

INSERT INTO `brand_models` (`id`, `brand_id`, `name`, `status`) VALUES
(1, 1, 'CL Models (4)', 1),
(2, 1, ' - 2.2CL', 1),
(3, 1, ' - 2.3CL', 1),
(4, 1, ' - 3.0CL', 1),
(5, 1, ' - 3.2CL', 1),
(6, 1, 'ILX', 1),
(7, 1, 'Integra', 1),
(8, 1, 'Legend', 1),
(9, 1, 'MDX', 1),
(10, 1, 'NSX', 1),
(11, 1, 'RDX', 1),
(12, 1, 'RL Models (2)', 1),
(13, 1, ' - 3.5 RL', 1),
(14, 1, ' - RL', 1),
(15, 1, 'RSX', 1),
(16, 1, 'SLX', 1),
(17, 1, 'TL Models (3)', 1),
(18, 1, ' - 2.5TL', 1),
(19, 1, ' - 3.2TL', 1),
(20, 1, ' - TL', 1),
(21, 1, 'TSX', 1),
(22, 1, 'Vigor', 1),
(23, 1, 'ZDX', 1),
(24, 1, 'Other Acura Models', 1),
(25, 2, '164', 1),
(26, 2, '8C Competizione', 1),
(27, 2, 'GTV-6', 1),
(28, 2, 'Milano', 1),
(29, 2, 'Spider', 1),
(30, 2, 'Other Alfa Romeo Models', 1),
(31, 3, 'Alliance', 1),
(32, 3, 'Concord', 1),
(33, 3, 'Eagle', 1),
(34, 3, 'Encore', 1),
(35, 3, 'Spirit', 1),
(36, 3, 'Other AMC Models', 1),
(37, 4, 'DB7', 1),
(38, 4, 'DB9', 1),
(39, 4, 'DBS', 1),
(40, 4, 'Lagonda', 1),
(41, 4, 'Rapide', 1),
(42, 4, 'V12 Vantage', 1),
(43, 4, 'V8 Vantage', 1),
(44, 4, 'Vanquish', 1),
(45, 4, 'Virage', 1),
(46, 4, 'Other Aston Martin Models', 1),
(47, 5, '100', 1),
(48, 5, '200', 1),
(49, 5, '4000', 1),
(50, 5, '5000', 1),
(51, 5, '80', 1),
(52, 5, '90', 1),
(53, 5, 'A3', 1),
(54, 5, 'A4', 1),
(55, 5, 'A5', 1),
(56, 5, 'A6', 1),
(57, 5, 'A7', 1),
(58, 5, 'A8', 1),
(59, 5, 'allroad', 1),
(60, 5, 'Cabriolet', 1),
(61, 5, 'Coupe', 1),
(62, 5, 'Q3', 1),
(63, 5, 'Q5', 1),
(64, 5, 'Q7', 1),
(65, 5, 'Quattro', 1),
(66, 5, 'R8', 1),
(67, 5, 'RS 4', 1),
(68, 5, 'RS 5', 1),
(69, 5, 'RS 6', 1),
(70, 5, 'S4', 1),
(71, 5, 'S5', 1),
(72, 5, 'S6', 1),
(73, 5, 'S7', 1),
(74, 5, 'S8', 1),
(75, 5, 'TT', 1),
(76, 5, 'TT RS', 1),
(77, 5, 'TTS', 1),
(78, 5, 'V8 Quattro', 1),
(79, 5, 'Other Audi Models', 1),
(80, 6, 'Convertible', 1),
(81, 6, 'Coupe', 1),
(82, 6, 'Sedan', 1),
(83, 6, 'Other Avanti Models', 1),
(84, 7, 'Arnage', 1),
(85, 7, 'Azure', 1),
(86, 7, 'Brooklands', 1),
(87, 7, 'Continental', 1),
(88, 7, 'Corniche', 1),
(89, 7, 'Eight', 1),
(90, 7, 'Mulsanne', 1),
(91, 7, 'Turbo R', 1),
(92, 7, 'Other Bentley Models', 1),
(93, 8, '1 Series (3)', 1),
(94, 8, ' - 128i', 1),
(95, 8, ' - 135i', 1),
(96, 8, ' - 135is', 1),
(97, 8, '3 Series (29)', 1),
(98, 8, ' - 318i', 1),
(99, 8, ' - 318iC', 1),
(100, 8, ' - 318iS', 1),
(101, 8, ' - 318ti', 1),
(102, 8, ' - 320i', 1),
(103, 8, ' - 323ci', 1),
(104, 8, ' - 323i', 1),
(105, 8, ' - 323is', 1),
(106, 8, ' - 323iT', 1),
(107, 8, ' - 325Ci', 1),
(108, 8, ' - 325e', 1),
(109, 8, ' - 325es', 1),
(110, 8, ' - 325i', 1),
(111, 8, ' - 325is', 1),
(112, 8, ' - 325iX', 1),
(113, 8, ' - 325xi', 1),
(114, 8, ' - 328Ci', 1),
(115, 8, ' - 328i', 1),
(116, 8, ' - 328iS', 1),
(117, 8, ' - 328xi', 1),
(118, 8, ' - 330Ci', 1),
(119, 8, ' - 330i', 1),
(120, 8, ' - 330xi', 1),
(121, 8, ' - 335d', 1),
(122, 8, ' - 335i', 1),
(123, 8, ' - 335is', 1),
(124, 8, ' - 335xi', 1),
(125, 8, ' - ActiveHybrid 3', 1),
(126, 8, ' - 325', 1),
(127, 8, '5 Series (19)', 1),
(128, 8, ' - 524td', 1),
(129, 8, ' - 525i', 1),
(130, 8, ' - 525xi', 1),
(131, 8, ' - 528e', 1),
(132, 8, ' - 528i', 1),
(133, 8, ' - 528iT', 1),
(134, 8, ' - 528xi', 1),
(135, 8, ' - 530i', 1),
(136, 8, ' - 530iT', 1),
(137, 8, ' - 530xi', 1),
(138, 8, ' - 533i', 1),
(139, 8, ' - 535i', 1),
(140, 8, ' - 535i Gran Turismo', 1),
(141, 8, ' - 535xi', 1),
(142, 8, ' - 540i', 1),
(143, 8, ' - 545i', 1),
(144, 8, ' - 550i', 1),
(145, 8, ' - 550i Gran Turismo', 1),
(146, 8, ' - ActiveHybrid 5', 1),
(147, 8, '6 Series (8)', 1),
(148, 8, ' - 633CSi', 1),
(149, 8, ' - 635CSi', 1),
(150, 8, ' - 640i', 1),
(151, 8, ' - 640i Gran Coupe', 1),
(152, 8, ' - 645Ci', 1),
(153, 8, ' - 650i', 1),
(154, 8, ' - 650i Gran Coupe', 1),
(155, 8, ' - L6', 1),
(156, 8, '7 Series (15)', 1),
(157, 8, ' - 733i', 1),
(158, 8, ' - 735i', 1),
(159, 8, ' - 735iL', 1),
(160, 8, ' - 740i', 1),
(161, 8, ' - 740iL', 1),
(162, 8, ' - 740Li', 1),
(163, 8, ' - 745i', 1),
(164, 8, ' - 745Li', 1),
(165, 8, ' - 750i', 1),
(166, 8, ' - 750iL', 1),
(167, 8, ' - 750Li', 1),
(168, 8, ' - 760i', 1),
(169, 8, ' - 760Li', 1),
(170, 8, ' - ActiveHybrid 7', 1),
(171, 8, ' - Alpina B7', 1),
(172, 8, '8 Series (4)', 1),
(173, 8, ' - 840Ci', 1),
(174, 8, ' - 850Ci', 1),
(175, 8, ' - 850CSi', 1),
(176, 8, ' - 850i', 1),
(177, 8, 'L Series (1)', 1),
(178, 8, ' - L7', 1),
(179, 8, 'M Series (8)', 1),
(180, 8, ' - 1 Series M', 1),
(181, 8, ' - M Coupe', 1),
(182, 8, ' - M Roadster', 1),
(183, 8, ' - M3', 1),
(184, 8, ' - M5', 1),
(185, 8, ' - M6', 1),
(186, 8, ' - X5 M', 1),
(187, 8, ' - X6 M', 1),
(188, 8, 'X Series (5)', 1),
(189, 8, ' - ActiveHybrid X6', 1),
(190, 8, ' - X1', 1),
(191, 8, ' - X3', 1),
(192, 8, ' - X5', 1),
(193, 8, ' - X6', 1),
(194, 8, 'Z Series (3)', 1),
(195, 8, ' - Z3', 1),
(196, 8, ' - Z4', 1),
(197, 8, ' - Z8', 1),
(198, 8, 'Other BMW Models', 1),
(199, 9, 'Century', 1),
(200, 9, 'Electra', 1),
(201, 9, 'Enclave', 1),
(202, 9, 'Encore', 1),
(203, 9, 'LaCrosse', 1),
(204, 9, 'Le Sabre', 1),
(205, 9, 'Lucerne', 1),
(206, 9, 'Park Avenue', 1),
(207, 9, 'Rainier', 1),
(208, 9, 'Reatta', 1),
(209, 9, 'Regal', 1),
(210, 9, 'Rendezvous', 1),
(211, 9, 'Riviera', 1),
(212, 9, 'Roadmaster', 1),
(213, 9, 'Skyhawk', 1),
(214, 9, 'Skylark', 1),
(215, 9, 'Somerset', 1),
(216, 9, 'Terraza', 1),
(217, 9, 'Verano', 1),
(218, 9, 'Other Buick Models', 1),
(219, 10, 'Allante', 1),
(220, 10, 'ATS', 1),
(221, 10, 'Brougham', 1),
(222, 10, 'Catera', 1),
(223, 10, 'Cimarron', 1),
(224, 10, 'CTS', 1),
(225, 10, 'De Ville', 1),
(226, 10, 'DTS', 1),
(227, 10, 'Eldorado', 1),
(228, 10, 'Escalade', 1),
(229, 10, 'Escalade ESV', 1),
(230, 10, 'Escalade EXT', 1),
(231, 10, 'Fleetwood', 1),
(232, 10, 'Seville', 1),
(233, 10, 'SRX', 1),
(234, 10, 'STS', 1),
(235, 10, 'XLR', 1),
(236, 10, 'XTS', 1),
(237, 10, 'Other Cadillac Models', 1),
(238, 11, 'Astro', 1),
(239, 11, 'Avalanche', 1),
(240, 11, 'Aveo', 1),
(241, 11, 'Aveo5', 1),
(242, 11, 'Beretta', 1),
(243, 11, 'Blazer', 1),
(244, 11, 'Camaro', 1),
(245, 11, 'Caprice', 1),
(246, 11, 'Captiva Sport', 1),
(247, 11, 'Cavalier', 1),
(248, 11, 'Celebrity', 1),
(249, 11, 'Chevette', 1),
(250, 11, 'Citation', 1),
(251, 11, 'Cobalt', 1),
(252, 11, 'Colorado', 1),
(253, 11, 'Corsica', 1),
(254, 11, 'Corvette', 1),
(255, 11, 'Cruze', 1),
(256, 11, 'El Camino', 1),
(257, 11, 'Equinox', 1),
(258, 11, 'Express Van', 1),
(259, 11, 'G Van', 1),
(260, 11, 'HHR', 1),
(261, 11, 'Impala', 1),
(262, 11, 'Kodiak C4500', 1),
(263, 11, 'Lumina', 1),
(264, 11, 'Lumina APV', 1),
(265, 11, 'LUV', 1),
(266, 11, 'Malibu', 1),
(267, 11, 'Metro', 1),
(268, 11, 'Monte Carlo', 1),
(269, 11, 'Nova', 1),
(270, 11, 'Prizm', 1),
(271, 11, 'S10 Blazer', 1),
(272, 11, 'S10 Pickup', 1),
(273, 11, 'Silverado and other C/K1500', 1),
(274, 11, 'Silverado and other C/K2500', 1),
(275, 11, 'Silverado and other C/K3500', 1),
(276, 11, 'Sonic', 1),
(277, 11, 'Spark', 1),
(278, 11, 'Spectrum', 1),
(279, 11, 'Sprint', 1),
(280, 11, 'SSR', 1),
(281, 11, 'Suburban', 1),
(282, 11, 'Tahoe', 1),
(283, 11, 'Tracker', 1),
(284, 11, 'TrailBlazer', 1),
(285, 11, 'TrailBlazer EXT', 1),
(286, 11, 'Traverse', 1),
(287, 11, 'Uplander', 1),
(288, 11, 'Venture', 1),
(289, 11, 'Volt', 1),
(290, 11, 'Other Chevrolet Models', 1),
(291, 12, '200', 1),
(292, 12, '300', 1),
(293, 12, '300M', 1),
(294, 12, 'Aspen', 1),
(295, 12, 'Caravan', 1),
(296, 12, 'Cirrus', 1),
(297, 12, 'Concorde', 1),
(298, 12, 'Conquest', 1),
(299, 12, 'Cordoba', 1),
(300, 12, 'Crossfire', 1),
(301, 12, 'E Class', 1),
(302, 12, 'Fifth Avenue', 1),
(303, 12, 'Grand Voyager', 1),
(304, 12, 'Imperial', 1),
(305, 12, 'Intrepid', 1),
(306, 12, 'Laser', 1),
(307, 12, 'LeBaron', 1),
(308, 12, 'LHS', 1),
(309, 12, 'Neon', 1),
(310, 12, 'New Yorker', 1),
(311, 12, 'Newport', 1),
(312, 12, 'Pacifica', 1),
(313, 12, 'Prowler', 1),
(314, 12, 'PT Cruiser', 1),
(315, 12, 'Sebring', 1),
(316, 12, 'TC by Maserati', 1),
(317, 12, 'Town & Country', 1),
(318, 12, 'Voyager', 1),
(319, 12, 'Other Chrysler Models', 1),
(320, 13, 'Lanos', 1),
(321, 13, 'Leganza', 1),
(322, 13, 'Nubira', 1),
(323, 13, 'Other Daewoo Models', 1),
(324, 14, 'Charade', 1),
(325, 14, 'Rocky', 1),
(326, 14, 'Other Daihatsu Models', 1),
(327, 15, '200SX', 1),
(328, 15, '210', 1),
(329, 15, '280ZX', 1),
(330, 15, '300ZX', 1),
(331, 15, '310', 1),
(332, 15, '510', 1),
(333, 15, '720', 1),
(334, 15, '810', 1),
(335, 15, 'Maxima', 1),
(336, 15, 'Pickup', 1),
(337, 15, 'Pulsar', 1),
(338, 15, 'Sentra', 1),
(339, 15, 'Stanza', 1),
(340, 15, 'Other Datsun Models', 1),
(341, 16, 'DMC-12', 1),
(342, 17, '400', 1),
(343, 17, '600', 1),
(344, 17, 'Aries', 1),
(345, 17, 'Avenger', 1),
(346, 17, 'Caliber', 1),
(347, 17, 'Caravan', 1),
(348, 17, 'Challenger', 1),
(349, 17, 'Charger', 1),
(350, 17, 'Colt', 1),
(351, 17, 'Conquest', 1),
(352, 17, 'D/W Truck', 1),
(353, 17, 'Dakota', 1),
(354, 17, 'Dart', 1),
(355, 17, 'Daytona', 1),
(356, 17, 'Diplomat', 1),
(357, 17, 'Durango', 1),
(358, 17, 'Dynasty', 1),
(359, 17, 'Grand Caravan', 1),
(360, 17, 'Intrepid', 1),
(361, 17, 'Journey', 1),
(362, 17, 'Lancer', 1),
(363, 17, 'Magnum', 1),
(364, 17, 'Mirada', 1),
(365, 17, 'Monaco', 1),
(366, 17, 'Neon', 1),
(367, 17, 'Nitro', 1),
(368, 17, 'Omni', 1),
(369, 17, 'Raider', 1),
(370, 17, 'Ram 1500 Truck', 1),
(371, 17, 'Ram 2500 Truck', 1),
(372, 17, 'Ram 3500 Truck', 1),
(373, 17, 'Ram 4500 Truck', 1),
(374, 17, 'Ram 50 Truck', 1),
(375, 17, 'RAM C/V', 1),
(376, 17, 'Ram SRT-10', 1),
(377, 17, 'Ram Van', 1),
(378, 17, 'Ram Wagon', 1),
(379, 17, 'Ramcharger', 1),
(380, 17, 'Rampage', 1),
(381, 17, 'Shadow', 1),
(382, 17, 'Spirit', 1),
(383, 17, 'Sprinter', 1),
(384, 17, 'SRT-4', 1),
(385, 17, 'St. Regis', 1),
(386, 17, 'Stealth', 1),
(387, 17, 'Stratus', 1),
(388, 17, 'Viper', 1),
(389, 17, 'Other Dodge Models', 1),
(390, 18, 'Medallion', 1),
(391, 18, 'Premier', 1),
(392, 18, 'Summit', 1),
(393, 18, 'Talon', 1),
(394, 18, 'Vision', 1),
(395, 18, 'Other Eagle Models', 1),
(396, 19, '308 GTB Quattrovalvole', 1),
(397, 19, '308 GTBI', 1),
(398, 19, '308 GTS Quattrovalvole', 1),
(399, 19, '308 GTSI', 1),
(400, 19, '328 GTB', 1),
(401, 19, '328 GTS', 1),
(402, 19, '348 GTB', 1),
(403, 19, '348 GTS', 1),
(404, 19, '348 Spider', 1),
(405, 19, '348 TB', 1),
(406, 19, '348 TS', 1),
(407, 19, '360', 1),
(408, 19, '456 GT', 1),
(409, 19, '456M GT', 1),
(410, 19, '458 Italia', 1),
(411, 19, '512 BBi', 1),
(412, 19, '512M', 1),
(413, 19, '512TR', 1),
(414, 19, '550 Maranello', 1),
(415, 19, '575M Maranello', 1),
(416, 19, '599 GTB Fiorano', 1),
(417, 19, '599 GTO', 1),
(418, 19, '612 Scaglietti', 1),
(419, 19, 'California', 1),
(420, 19, 'Enzo', 1),
(421, 19, 'F355', 1),
(422, 19, 'F40', 1),
(423, 19, 'F430', 1),
(424, 19, 'F50', 1),
(425, 19, 'FF', 1),
(426, 19, 'Mondial', 1),
(427, 19, 'Testarossa', 1),
(428, 19, 'Other Ferrari Models', 1),
(429, 20, '2000 Spider', 1),
(430, 20, '500', 1),
(431, 20, 'Bertone X1/9', 1),
(432, 20, 'Brava', 1),
(433, 20, 'Pininfarina Spider', 1),
(434, 20, 'Strada', 1),
(435, 20, 'X1/9', 1),
(436, 20, 'Other Fiat Models', 1),
(437, 21, 'Karma', 1),
(438, 22, 'Aerostar', 1),
(439, 22, 'Aspire', 1),
(440, 22, 'Bronco', 1),
(441, 22, 'Bronco II', 1),
(442, 22, 'C-MAX', 1),
(443, 22, 'Club Wagon', 1),
(444, 22, 'Contour', 1),
(445, 22, 'Courier', 1),
(446, 22, 'Crown Victoria', 1),
(447, 22, 'E-150 and Econoline 150', 1),
(448, 22, 'E-250 and Econoline 250', 1),
(449, 22, 'E-350 and Econoline 350', 1),
(450, 22, 'Edge', 1),
(451, 22, 'Escape', 1),
(452, 22, 'Escort', 1),
(453, 22, 'Excursion', 1),
(454, 22, 'EXP', 1),
(455, 22, 'Expedition', 1),
(456, 22, 'Expedition EL', 1),
(457, 22, 'Explorer', 1),
(458, 22, 'Explorer Sport Trac', 1),
(459, 22, 'F100', 1),
(460, 22, 'F150', 1),
(461, 22, 'F250', 1),
(462, 22, 'F350', 1),
(463, 22, 'F450', 1),
(464, 22, 'Fairmont', 1),
(465, 22, 'Festiva', 1),
(466, 22, 'Fiesta', 1),
(467, 22, 'Five Hundred', 1),
(468, 22, 'Flex', 1),
(469, 22, 'Focus', 1),
(470, 22, 'Freestar', 1),
(471, 22, 'Freestyle', 1),
(472, 22, 'Fusion', 1),
(473, 22, 'Granada', 1),
(474, 22, 'GT', 1),
(475, 22, 'LTD', 1),
(476, 22, 'Mustang', 1),
(477, 22, 'Probe', 1),
(478, 22, 'Ranger', 1),
(479, 22, 'Taurus', 1),
(480, 22, 'Taurus X', 1),
(481, 22, 'Tempo', 1),
(482, 22, 'Thunderbird', 1),
(483, 22, 'Transit Connect', 1),
(484, 22, 'Windstar', 1),
(485, 22, 'ZX2 Escort', 1),
(486, 22, 'Other Ford Models', 1),
(487, 23, 'Sprinter', 1),
(488, 24, 'Metro', 1),
(489, 24, 'Prizm', 1),
(490, 24, 'Spectrum', 1),
(491, 24, 'Storm', 1),
(492, 24, 'Tracker', 1),
(493, 24, 'Other Geo Models', 1),
(494, 25, 'Acadia', 1),
(495, 25, 'Caballero', 1),
(496, 25, 'Canyon', 1),
(497, 25, 'Envoy', 1),
(498, 25, 'Envoy XL', 1),
(499, 25, 'Envoy XUV', 1),
(500, 25, 'Jimmy', 1),
(501, 25, 'Rally Wagon', 1),
(502, 25, 'S15 Jimmy', 1),
(503, 25, 'S15 Pickup', 1),
(504, 25, 'Safari', 1),
(505, 25, 'Savana', 1),
(506, 25, 'Sierra C/K1500', 1),
(507, 25, 'Sierra C/K2500', 1),
(508, 25, 'Sierra C/K3500', 1),
(509, 25, 'Sonoma', 1),
(510, 25, 'Suburban', 1),
(511, 25, 'Syclone', 1),
(512, 25, 'Terrain', 1),
(513, 25, 'TopKick C4500', 1),
(514, 25, 'Typhoon', 1),
(515, 25, 'Vandura', 1),
(516, 25, 'Yukon', 1),
(517, 25, 'Yukon XL', 1),
(518, 25, 'Other GMC Models', 1),
(519, 26, 'Accord', 1),
(520, 26, 'Civic', 1),
(521, 26, 'CR-V', 1),
(522, 26, 'CR-Z', 1),
(523, 26, 'CRX', 1),
(524, 26, 'Crosstour and Accord Crosstour Models (2)', 1),
(525, 26, ' - Accord Crosstour', 1),
(526, 26, ' - Crosstour', 1),
(527, 26, 'Del Sol', 1),
(528, 26, 'Element', 1),
(529, 26, 'Fit', 1),
(530, 26, 'Insight', 1),
(531, 26, 'Odyssey', 1),
(532, 26, 'Passport', 1),
(533, 26, 'Pilot', 1),
(534, 26, 'Prelude', 1),
(535, 26, 'Ridgeline', 1),
(536, 26, 'S2000', 1),
(537, 26, 'Other Honda Models', 1),
(538, 27, 'H1', 1),
(539, 27, 'H2', 1),
(540, 27, 'H3', 1),
(541, 27, 'H3T', 1),
(542, 27, 'Other Hummer Models', 1),
(543, 28, 'Accent', 1),
(544, 28, 'Azera', 1),
(545, 28, 'Elantra', 1),
(546, 28, 'Elantra Coupe', 1),
(547, 28, 'Elantra Touring', 1),
(548, 28, 'Entourage', 1),
(549, 28, 'Equus', 1),
(550, 28, 'Excel', 1),
(551, 28, 'Genesis', 1),
(552, 28, 'Genesis Coupe', 1),
(553, 28, 'Santa Fe', 1),
(554, 28, 'Scoupe', 1),
(555, 28, 'Sonata', 1),
(556, 28, 'Tiburon', 1),
(557, 28, 'Tucson', 1),
(558, 28, 'Veloster', 1),
(559, 28, 'Veracruz', 1),
(560, 28, 'XG300', 1),
(561, 28, 'XG350', 1),
(562, 28, 'Other Hyundai Models', 1),
(563, 29, 'EX Models (2)', 1),
(564, 29, ' - EX35', 1),
(565, 29, ' - EX37', 1),
(566, 29, 'FX Models (4)', 1),
(567, 29, ' - FX35', 1),
(568, 29, ' - FX37', 1),
(569, 29, ' - FX45', 1),
(570, 29, ' - FX50', 1),
(571, 29, 'G Models (4)', 1),
(572, 29, ' - G20', 1),
(573, 29, ' - G25', 1),
(574, 29, ' - G35', 1),
(575, 29, ' - G37', 1),
(576, 29, 'I Models (2)', 1),
(577, 29, ' - I30', 1),
(578, 29, ' - I35', 1),
(579, 29, 'J Models (1)', 1),
(580, 29, ' - J30', 1),
(581, 29, 'JX Models (1)', 1),
(582, 29, ' - JX35', 1),
(583, 29, 'M Models (6)', 1),
(584, 29, ' - M30', 1),
(585, 29, ' - M35', 1),
(586, 29, ' - M35h', 1),
(587, 29, ' - M37', 1),
(588, 29, ' - M45', 1),
(589, 29, ' - M56', 1),
(590, 29, 'Q Models (1)', 1),
(591, 29, ' - Q45', 1),
(592, 29, 'QX Models (2)', 1),
(593, 29, ' - QX4', 1),
(594, 29, ' - QX56', 1),
(595, 29, 'Other Infiniti Models', 1),
(596, 30, 'Amigo', 1),
(597, 30, 'Ascender', 1),
(598, 30, 'Axiom', 1),
(599, 30, 'Hombre', 1),
(600, 30, 'i-280', 1),
(601, 30, 'i-290', 1),
(602, 30, 'i-350', 1),
(603, 30, 'i-370', 1),
(604, 30, 'I-Mark', 1),
(605, 30, 'Impulse', 1),
(606, 30, 'Oasis', 1),
(607, 30, 'Pickup', 1),
(608, 30, 'Rodeo', 1),
(609, 30, 'Stylus', 1),
(610, 30, 'Trooper', 1),
(611, 30, 'Trooper II', 1),
(612, 30, 'VehiCROSS', 1),
(613, 30, 'Other Isuzu Models', 1),
(614, 31, 'S-Type', 1),
(615, 31, 'X-Type', 1),
(616, 31, 'XF', 1),
(617, 31, 'XJ Series (10)', 1),
(618, 31, ' - XJ12', 1),
(619, 31, ' - XJ6', 1),
(620, 31, ' - XJR', 1),
(621, 31, ' - XJR-S', 1),
(622, 31, ' - XJS', 1),
(623, 31, ' - XJ Vanden Plas', 1),
(624, 31, ' - XJ', 1),
(625, 31, ' - XJ8', 1),
(626, 31, ' - XJ8 L', 1),
(627, 31, ' - XJ Sport', 1),
(628, 31, 'XK Series (3)', 1),
(629, 31, ' - XK8', 1),
(630, 31, ' - XK', 1),
(631, 31, ' - XKR', 1),
(632, 31, 'Other Jaguar Models', 1),
(633, 32, 'Cherokee', 1),
(634, 32, 'CJ', 1),
(635, 32, 'Comanche', 1),
(636, 32, 'Commander', 1),
(637, 32, 'Compass', 1),
(638, 32, 'Grand Cherokee', 1),
(639, 32, 'Grand Wagoneer', 1),
(640, 32, 'Liberty', 1),
(641, 32, 'Patriot', 1),
(642, 32, 'Pickup', 1),
(643, 32, 'Scrambler', 1),
(644, 32, 'Wagoneer', 1),
(645, 32, 'Wrangler', 1),
(646, 32, 'Other Jeep Models', 1),
(647, 33, 'Amanti', 1),
(648, 33, 'Borrego', 1),
(649, 33, 'Forte', 1),
(650, 33, 'Forte Koup', 1),
(651, 33, 'Optima', 1),
(652, 33, 'Rio', 1),
(653, 33, 'Rio5', 1),
(654, 33, 'Rondo', 1),
(655, 33, 'Sedona', 1),
(656, 33, 'Sephia', 1),
(657, 33, 'Sorento', 1),
(658, 33, 'Soul', 1),
(659, 33, 'Spectra', 1),
(660, 33, 'Spectra5', 1),
(661, 33, 'Sportage', 1),
(662, 33, 'Other Kia Models', 1),
(663, 34, 'Aventador', 1),
(664, 34, 'Countach', 1),
(665, 34, 'Diablo', 1),
(666, 34, 'Gallardo', 1),
(667, 34, 'Jalpa', 1),
(668, 34, 'LM002', 1),
(669, 34, 'Murcielago', 1),
(670, 34, 'Other Lamborghini Models', 1),
(671, 35, 'Beta', 1),
(672, 35, 'Zagato', 1),
(673, 35, 'Other Lancia Models', 1),
(674, 36, 'Defender', 1),
(675, 36, 'Discovery', 1),
(676, 36, 'Freelander', 1),
(677, 36, 'LR2', 1),
(678, 36, 'LR3', 1),
(679, 36, 'LR4', 1),
(680, 36, 'Range Rover', 1),
(681, 36, 'Range Rover Evoque', 1),
(682, 36, 'Range Rover Sport', 1),
(683, 36, 'Other Land Rover Models', 1),
(684, 37, 'CT Models (1)', 1),
(685, 37, ' - CT 200h', 1),
(686, 37, 'ES Models (5)', 1),
(687, 37, ' - ES 250', 1),
(688, 37, ' - ES 300', 1),
(689, 37, ' - ES 300h', 1),
(690, 37, ' - ES 330', 1),
(691, 37, ' - ES 350', 1),
(692, 37, 'GS Models (6)', 1),
(693, 37, ' - GS 300', 1),
(694, 37, ' - GS 350', 1),
(695, 37, ' - GS 400', 1),
(696, 37, ' - GS 430', 1),
(697, 37, ' - GS 450h', 1),
(698, 37, ' - GS 460', 1),
(699, 37, 'GX Models (2)', 1),
(700, 37, ' - GX 460', 1),
(701, 37, ' - GX 470', 1),
(702, 37, 'HS Models (1)', 1),
(703, 37, ' - HS 250h', 1),
(704, 37, 'IS Models (6)', 1),
(705, 37, ' - IS 250', 1),
(706, 37, ' - IS 250C', 1),
(707, 37, ' - IS 300', 1),
(708, 37, ' - IS 350', 1),
(709, 37, ' - IS 350C', 1),
(710, 37, ' - IS F', 1),
(711, 37, 'LFA', 1),
(712, 37, 'LS Models (4)', 1),
(713, 37, ' - LS 400', 1),
(714, 37, ' - LS 430', 1),
(715, 37, ' - LS 460', 1),
(716, 37, ' - LS 600h', 1),
(717, 37, 'LX Models (3)', 1),
(718, 37, ' - LX 450', 1),
(719, 37, ' - LX 470', 1),
(720, 37, ' - LX 570', 1),
(721, 37, 'RX Models (5)', 1),
(722, 37, ' - RX 300', 1),
(723, 37, ' - RX 330', 1),
(724, 37, ' - RX 350', 1),
(725, 37, ' - RX 400h', 1),
(726, 37, ' - RX 450h', 1),
(727, 37, 'SC Models (3)', 1),
(728, 37, ' - SC 300', 1),
(729, 37, ' - SC 400', 1),
(730, 37, ' - SC 430', 1),
(731, 37, 'Other Lexus Models', 1),
(732, 38, 'Aviator', 1),
(733, 38, 'Blackwood', 1),
(734, 38, 'Continental', 1),
(735, 38, 'LS', 1),
(736, 38, 'Mark LT', 1),
(737, 38, 'Mark VI', 1),
(738, 38, 'Mark VII', 1),
(739, 38, 'Mark VIII', 1),
(740, 38, 'MKS', 1),
(741, 38, 'MKT', 1),
(742, 38, 'MKX', 1),
(743, 38, 'MKZ', 1),
(744, 38, 'Navigator', 1),
(745, 38, 'Navigator L', 1),
(746, 38, 'Town Car', 1),
(747, 38, 'Zephyr', 1),
(748, 38, 'Other Lincoln Models', 1),
(749, 39, 'Elan', 1),
(750, 39, 'Elise', 1),
(751, 39, 'Esprit', 1),
(752, 39, 'Evora', 1),
(753, 39, 'Exige', 1),
(754, 39, 'Other Lotus Models', 1),
(755, 40, '430', 1),
(756, 40, 'Biturbo', 1),
(757, 40, 'Coupe', 1),
(758, 40, 'GranSport', 1),
(759, 40, 'GranTurismo', 1),
(760, 40, 'Quattroporte', 1),
(761, 40, 'Spyder', 1),
(762, 40, 'Other Maserati Models', 1),
(763, 41, '57', 1),
(764, 41, '62', 1),
(765, 41, 'Other Maybach Models', 1),
(766, 42, '323', 1),
(767, 42, '626', 1),
(768, 42, '929', 1),
(769, 42, 'B-Series Pickup', 1),
(770, 42, 'CX-5', 1),
(771, 42, 'CX-7', 1),
(772, 42, 'CX-9', 1),
(773, 42, 'GLC', 1),
(774, 42, 'MAZDA2', 1),
(775, 42, 'MAZDA3', 1),
(776, 42, 'MAZDA5', 1),
(777, 42, 'MAZDA6', 1),
(778, 42, 'MAZDASPEED3', 1),
(779, 42, 'MAZDASPEED6', 1),
(780, 42, 'Miata MX5', 1),
(781, 42, 'Millenia', 1),
(782, 42, 'MPV', 1),
(783, 42, 'MX3', 1),
(784, 42, 'MX6', 1),
(785, 42, 'Navajo', 1),
(786, 42, 'Protege', 1),
(787, 42, 'Protege5', 1),
(788, 42, 'RX-7', 1),
(789, 42, 'RX-8', 1),
(790, 42, 'Tribute', 1),
(791, 42, 'Other Mazda Models', 1),
(792, 43, 'MP4-12C', 1),
(793, 44, '190 Class (2)', 1),
(794, 44, ' - 190D', 1),
(795, 44, ' - 190E', 1),
(796, 44, '240 Class (1)', 1),
(797, 44, ' - 240D', 1),
(798, 44, '300 Class / E Class (6)', 1),
(799, 44, ' - 300CD', 1),
(800, 44, ' - 300CE', 1),
(801, 44, ' - 300D', 1),
(802, 44, ' - 300E', 1),
(803, 44, ' - 300TD', 1),
(804, 44, ' - 300TE', 1),
(805, 44, 'C Class (13)', 1),
(806, 44, ' - C220', 1),
(807, 44, ' - C230', 1),
(808, 44, ' - C240', 1),
(809, 44, ' - C250', 1),
(810, 44, ' - C280', 1),
(811, 44, ' - C300', 1),
(812, 44, ' - C320', 1),
(813, 44, ' - C32 AMG', 1),
(814, 44, ' - C350', 1),
(815, 44, ' - C36 AMG', 1),
(816, 44, ' - C43 AMG', 1),
(817, 44, ' - C55 AMG', 1),
(818, 44, ' - C63 AMG', 1),
(819, 44, 'CL Class (6)', 1),
(820, 44, ' - CL500', 1),
(821, 44, ' - CL550', 1),
(822, 44, ' - CL55 AMG', 1),
(823, 44, ' - CL600', 1),
(824, 44, ' - CL63 AMG', 1),
(825, 44, ' - CL65 AMG', 1),
(826, 44, 'CLK Class (7)', 1),
(827, 44, ' - CLK320', 1),
(828, 44, ' - CLK350', 1),
(829, 44, ' - CLK430', 1),
(830, 44, ' - CLK500', 1),
(831, 44, ' - CLK550', 1),
(832, 44, ' - CLK55 AMG', 1),
(833, 44, ' - CLK63 AMG', 1),
(834, 44, 'CLS Class (4)', 1),
(835, 44, ' - CLS500', 1),
(836, 44, ' - CLS550', 1),
(837, 44, ' - CLS55 AMG', 1),
(838, 44, ' - CLS63 AMG', 1),
(839, 44, 'E Class (18)', 1),
(840, 44, ' - 260E', 1),
(841, 44, ' - 280CE', 1),
(842, 44, ' - 280E', 1),
(843, 44, ' - 400E', 1),
(844, 44, ' - 500E', 1),
(845, 44, ' - E300', 1),
(846, 44, ' - E320', 1),
(847, 44, ' - E320 Bluetec', 1),
(848, 44, ' - E320 CDI', 1),
(849, 44, ' - E350', 1),
(850, 44, ' - E350 Bluetec', 1),
(851, 44, ' - E400 Hybrid', 1),
(852, 44, ' - E420', 1),
(853, 44, ' - E430', 1),
(854, 44, ' - E500', 1),
(855, 44, ' - E550', 1),
(856, 44, ' - E55 AMG', 1),
(857, 44, ' - E63 AMG', 1),
(858, 44, 'G Class (4)', 1),
(859, 44, ' - G500', 1),
(860, 44, ' - G550', 1),
(861, 44, ' - G55 AMG', 1),
(862, 44, ' - G63 AMG', 1),
(863, 44, 'GL Class (5)', 1),
(864, 44, ' - GL320 Bluetec', 1),
(865, 44, ' - GL320 CDI', 1),
(866, 44, ' - GL350 Bluetec', 1),
(867, 44, ' - GL450', 1),
(868, 44, ' - GL550', 1),
(869, 44, 'GLK Class (1)', 1),
(870, 44, ' - GLK350', 1),
(871, 44, 'M Class (11)', 1),
(872, 44, ' - ML320', 1),
(873, 44, ' - ML320 Bluetec', 1),
(874, 44, ' - ML320 CDI', 1),
(875, 44, ' - ML350', 1),
(876, 44, ' - ML350 Bluetec', 1),
(877, 44, ' - ML430', 1),
(878, 44, ' - ML450 Hybrid', 1),
(879, 44, ' - ML500', 1),
(880, 44, ' - ML550', 1),
(881, 44, ' - ML55 AMG', 1),
(882, 44, ' - ML63 AMG', 1),
(883, 44, 'R Class (6)', 1),
(884, 44, ' - R320 Bluetec', 1),
(885, 44, ' - R320 CDI', 1),
(886, 44, ' - R350', 1),
(887, 44, ' - R350 Bluetec', 1),
(888, 44, ' - R500', 1),
(889, 44, ' - R63 AMG', 1),
(890, 44, 'S Class (30)', 1),
(891, 44, ' - 300SD', 1),
(892, 44, ' - 300SDL', 1),
(893, 44, ' - 300SE', 1),
(894, 44, ' - 300SEL', 1),
(895, 44, ' - 350SD', 1),
(896, 44, ' - 350SDL', 1),
(897, 44, ' - 380SE', 1),
(898, 44, ' - 380SEC', 1),
(899, 44, ' - 380SEL', 1),
(900, 44, ' - 400SE', 1),
(901, 44, ' - 400SEL', 1),
(902, 44, ' - 420SEL', 1),
(903, 44, ' - 500SEC', 1),
(904, 44, ' - 500SEL', 1),
(905, 44, ' - 560SEC', 1),
(906, 44, ' - 560SEL', 1),
(907, 44, ' - 600SEC', 1),
(908, 44, ' - 600SEL', 1),
(909, 44, ' - S320', 1),
(910, 44, ' - S350', 1),
(911, 44, ' - S350 Bluetec', 1),
(912, 44, ' - S400 Hybrid', 1),
(913, 44, ' - S420', 1),
(914, 44, ' - S430', 1),
(915, 44, ' - S500', 1),
(916, 44, ' - S550', 1),
(917, 44, ' - S55 AMG', 1),
(918, 44, ' - S600', 1),
(919, 44, ' - S63 AMG', 1),
(920, 44, ' - S65 AMG', 1),
(921, 44, 'SL Class (13)', 1),
(922, 44, ' - 300SL', 1),
(923, 44, ' - 380SL', 1),
(924, 44, ' - 380SLC', 1),
(925, 44, ' - 500SL', 1),
(926, 44, ' - 560SL', 1),
(927, 44, ' - 600SL', 1),
(928, 44, ' - SL320', 1),
(929, 44, ' - SL500', 1),
(930, 44, ' - SL550', 1),
(931, 44, ' - SL55 AMG', 1),
(932, 44, ' - SL600', 1),
(933, 44, ' - SL63 AMG', 1),
(934, 44, ' - SL65 AMG', 1),
(935, 44, 'SLK Class (8)', 1),
(936, 44, ' - SLK230', 1),
(937, 44, ' - SLK250', 1),
(938, 44, ' - SLK280', 1),
(939, 44, ' - SLK300', 1),
(940, 44, ' - SLK320', 1),
(941, 44, ' - SLK32 AMG', 1),
(942, 44, ' - SLK350', 1),
(943, 44, ' - SLK55 AMG', 1),
(944, 44, 'SLR Class (1)', 1),
(945, 44, ' - SLR', 1),
(946, 44, 'SLS Class (1)', 1),
(947, 44, ' - SLS AMG', 1),
(948, 44, 'Sprinter Class (1)', 1),
(949, 44, ' - Sprinter', 1),
(950, 44, 'Other Mercedes-Benz Models', 1),
(951, 45, 'Capri', 1),
(952, 45, 'Cougar', 1),
(953, 45, 'Grand Marquis', 1),
(954, 45, 'Lynx', 1),
(955, 45, 'Marauder', 1),
(956, 45, 'Mariner', 1),
(957, 45, 'Marquis', 1),
(958, 45, 'Milan', 1),
(959, 45, 'Montego', 1),
(960, 45, 'Monterey', 1),
(961, 45, 'Mountaineer', 1),
(962, 45, 'Mystique', 1),
(963, 45, 'Sable', 1),
(964, 45, 'Topaz', 1),
(965, 45, 'Tracer', 1),
(966, 45, 'Villager', 1),
(967, 45, 'Zephyr', 1),
(968, 45, 'Other Mercury Models', 1),
(969, 46, 'Scorpio', 1),
(970, 46, 'XR4Ti', 1),
(971, 46, 'Other Merkur Models', 1),
(972, 47, 'Cooper Clubman Models (2)', 1),
(973, 47, ' - Cooper Clubman', 1),
(974, 47, ' - Cooper S Clubman', 1),
(975, 47, 'Cooper Countryman Models (2)', 1),
(976, 47, ' - Cooper Countryman', 1),
(977, 47, ' - Cooper S Countryman', 1),
(978, 47, 'Cooper Coupe Models (2)', 1),
(979, 47, ' - Cooper Coupe', 1),
(980, 47, ' - Cooper S Coupe', 1),
(981, 47, 'Cooper Models (2)', 1),
(982, 47, ' - Cooper', 1),
(983, 47, ' - Cooper S', 1),
(984, 47, 'Cooper Roadster Models (2)', 1),
(985, 47, ' - Cooper Roadster', 1),
(986, 47, ' - Cooper S Roadster', 1),
(987, 48, '3000GT', 1),
(988, 48, 'Cordia', 1),
(989, 48, 'Diamante', 1),
(990, 48, 'Eclipse', 1),
(991, 48, 'Endeavor', 1),
(992, 48, 'Expo', 1),
(993, 48, 'Galant', 1),
(994, 48, 'i', 1),
(995, 48, 'Lancer', 1),
(996, 48, 'Lancer Evolution', 1),
(997, 48, 'Mighty Max', 1),
(998, 48, 'Mirage', 1),
(999, 48, 'Montero', 1),
(1000, 48, 'Montero Sport', 1),
(1001, 48, 'Outlander', 1),
(1002, 48, 'Outlander Sport', 1),
(1003, 48, 'Precis', 1),
(1004, 48, 'Raider', 1),
(1005, 48, 'Sigma', 1),
(1006, 48, 'Starion', 1),
(1007, 48, 'Tredia', 1),
(1008, 48, 'Van', 1),
(1009, 48, 'Other Mitsubishi Models', 1),
(1010, 49, '200SX', 1),
(1011, 49, '240SX', 1),
(1012, 49, '300ZX', 1),
(1013, 49, '350Z', 1),
(1014, 49, '370Z', 1),
(1015, 49, 'Altima', 1),
(1016, 49, 'Armada', 1),
(1017, 49, 'Axxess', 1),
(1018, 49, 'Cube', 1),
(1019, 49, 'Frontier', 1),
(1020, 49, 'GT-R', 1),
(1021, 49, 'Juke', 1),
(1022, 49, 'Leaf', 1),
(1023, 49, 'Maxima', 1),
(1024, 49, 'Murano', 1),
(1025, 49, 'Murano CrossCabriolet', 1),
(1026, 49, 'NV', 1),
(1027, 49, 'NX', 1),
(1028, 49, 'Pathfinder', 1),
(1029, 49, 'Pickup', 1),
(1030, 49, 'Pulsar', 1),
(1031, 49, 'Quest', 1),
(1032, 49, 'Rogue', 1),
(1033, 49, 'Sentra', 1),
(1034, 49, 'Stanza', 1),
(1035, 49, 'Titan', 1),
(1036, 49, 'Van', 1),
(1037, 49, 'Versa', 1),
(1038, 49, 'Xterra', 1),
(1039, 49, 'Other Nissan Models', 1),
(1040, 50, '88', 1),
(1041, 50, 'Achieva', 1),
(1042, 50, 'Alero', 1),
(1043, 50, 'Aurora', 1),
(1044, 50, 'Bravada', 1),
(1045, 50, 'Custom Cruiser', 1),
(1046, 50, 'Cutlass', 1),
(1047, 50, 'Cutlass Calais', 1),
(1048, 50, 'Cutlass Ciera', 1),
(1049, 50, 'Cutlass Supreme', 1),
(1050, 50, 'Firenza', 1),
(1051, 50, 'Intrigue', 1),
(1052, 50, 'Ninety-Eight', 1),
(1053, 50, 'Omega', 1),
(1054, 50, 'Regency', 1),
(1055, 50, 'Silhouette', 1),
(1056, 50, 'Toronado', 1),
(1057, 50, 'Other Oldsmobile Models', 1),
(1058, 51, '405', 1),
(1059, 51, '504', 1),
(1060, 51, '505', 1),
(1061, 51, '604', 1),
(1062, 51, 'Other Peugeot Models', 1),
(1063, 52, 'Acclaim', 1),
(1064, 52, 'Arrow', 1),
(1065, 52, 'Breeze', 1),
(1066, 52, 'Caravelle', 1),
(1067, 52, 'Champ', 1),
(1068, 52, 'Colt', 1),
(1069, 52, 'Conquest', 1),
(1070, 52, 'Gran Fury', 1),
(1071, 52, 'Grand Voyager', 1),
(1072, 52, 'Horizon', 1),
(1073, 52, 'Laser', 1),
(1074, 52, 'Neon', 1),
(1075, 52, 'Prowler', 1),
(1076, 52, 'Reliant', 1),
(1077, 52, 'Sapporo', 1),
(1078, 52, 'Scamp', 1),
(1079, 52, 'Sundance', 1),
(1080, 52, 'Trailduster', 1),
(1081, 52, 'Voyager', 1),
(1082, 52, 'Other Plymouth Models', 1),
(1083, 53, '1000', 1),
(1084, 53, '6000', 1),
(1085, 53, 'Aztek', 1),
(1086, 53, 'Bonneville', 1),
(1087, 53, 'Catalina', 1),
(1088, 53, 'Fiero', 1),
(1089, 53, 'Firebird', 1),
(1090, 53, 'G3', 1),
(1091, 53, 'G5', 1),
(1092, 53, 'G6', 1),
(1093, 53, 'G8', 1),
(1094, 53, 'Grand Am', 1),
(1095, 53, 'Grand Prix', 1),
(1096, 53, 'GTO', 1),
(1097, 53, 'J2000', 1),
(1098, 53, 'Le Mans', 1),
(1099, 53, 'Montana', 1),
(1100, 53, 'Parisienne', 1),
(1101, 53, 'Phoenix', 1),
(1102, 53, 'Safari', 1),
(1103, 53, 'Solstice', 1),
(1104, 53, 'Sunbird', 1),
(1105, 53, 'Sunfire', 1),
(1106, 53, 'Torrent', 1),
(1107, 53, 'Trans Sport', 1),
(1108, 53, 'Vibe', 1),
(1109, 53, 'Other Pontiac Models', 1),
(1110, 54, '911', 1),
(1111, 54, '924', 1),
(1112, 54, '928', 1),
(1113, 54, '944', 1),
(1114, 54, '968', 1),
(1115, 54, 'Boxster', 1),
(1116, 54, 'Carrera GT', 1),
(1117, 54, 'Cayenne', 1),
(1118, 54, 'Cayman', 1),
(1119, 54, 'Panamera', 1),
(1120, 54, 'Other Porsche Models', 1),
(1121, 55, '1500', 1),
(1122, 55, '2500', 1),
(1123, 55, '3500', 1),
(1124, 55, '4500', 1),
(1125, 56, '18i', 1),
(1126, 56, 'Fuego', 1),
(1127, 56, 'Le Car', 1),
(1128, 56, 'R18', 1),
(1129, 56, 'Sportwagon', 1),
(1130, 56, 'Other Renault Models', 1),
(1131, 57, 'Camargue', 1),
(1132, 57, 'Corniche', 1),
(1133, 57, 'Ghost', 1),
(1134, 57, 'Park Ward', 1),
(1135, 57, 'Phantom', 1),
(1136, 57, 'Silver Dawn', 1),
(1137, 57, 'Silver Seraph', 1),
(1138, 57, 'Silver Spirit', 1),
(1139, 57, 'Silver Spur', 1),
(1140, 57, 'Other Rolls-Royce Models', 1),
(1141, 58, '9-2X', 1),
(1142, 58, '9-3', 1),
(1143, 58, '9-4X', 1),
(1144, 58, '9-5', 1),
(1145, 58, '9-7X', 1),
(1146, 58, '900', 1),
(1147, 58, '9000', 1),
(1148, 58, 'Other Saab Models', 1),
(1149, 59, 'Astra', 1),
(1150, 59, 'Aura', 1),
(1151, 59, 'ION', 1),
(1152, 59, 'L Series (3)', 1),
(1153, 59, ' - L100', 1),
(1154, 59, ' - L200', 1),
(1155, 59, ' - L300', 1),
(1156, 59, 'LS', 1),
(1157, 59, 'LW Series (4)', 1),
(1158, 59, ' - LW1', 1),
(1159, 59, ' - LW2', 1),
(1160, 59, ' - LW200', 1),
(1161, 59, ' - LW300', 1),
(1162, 59, 'Outlook', 1),
(1163, 59, 'Relay', 1),
(1164, 59, 'SC Series (2)', 1),
(1165, 59, ' - SC1', 1),
(1166, 59, ' - SC2', 1),
(1167, 59, 'Sky', 1),
(1168, 59, 'SL Series (3)', 1),
(1169, 59, ' - SL', 1),
(1170, 59, ' - SL1', 1),
(1171, 59, ' - SL2', 1),
(1172, 59, 'SW Series (2)', 1),
(1173, 59, ' - SW1', 1),
(1174, 59, ' - SW2', 1),
(1175, 59, 'Vue', 1),
(1176, 59, 'Other Saturn Models', 1),
(1177, 60, 'FR-S', 1),
(1178, 60, 'iQ', 1),
(1179, 60, 'tC', 1),
(1180, 60, 'xA', 1),
(1181, 60, 'xB', 1),
(1182, 60, 'xD', 1),
(1183, 61, 'fortwo', 1),
(1184, 61, 'Other smart Models', 1),
(1185, 62, 'Viper', 1),
(1186, 63, '825', 1),
(1187, 63, '827', 1),
(1188, 63, 'Other Sterling Models', 1),
(1189, 64, 'Baja', 1),
(1190, 64, 'Brat', 1),
(1191, 64, 'BRZ', 1),
(1192, 64, 'Forester', 1),
(1193, 64, 'Impreza', 1),
(1194, 64, 'Impreza WRX', 1),
(1195, 64, 'Justy', 1),
(1196, 64, 'L Series', 1),
(1197, 64, 'Legacy', 1),
(1198, 64, 'Loyale', 1),
(1199, 64, 'Outback', 1),
(1200, 64, 'SVX', 1),
(1201, 64, 'Tribeca', 1),
(1202, 64, 'XT', 1),
(1203, 64, 'XV Crosstrek', 1),
(1204, 64, 'Other Subaru Models', 1),
(1205, 65, 'Aerio', 1),
(1206, 65, 'Equator', 1),
(1207, 65, 'Esteem', 1),
(1208, 65, 'Forenza', 1),
(1209, 65, 'Grand Vitara', 1),
(1210, 65, 'Kizashi', 1),
(1211, 65, 'Reno', 1),
(1212, 65, 'Samurai', 1),
(1213, 65, 'Sidekick', 1),
(1214, 65, 'Swift', 1),
(1215, 65, 'SX4', 1),
(1216, 65, 'Verona', 1),
(1217, 65, 'Vitara', 1),
(1218, 65, 'X-90', 1),
(1219, 65, 'XL7', 1),
(1220, 65, 'Other Suzuki Models', 1),
(1221, 66, 'Roadster', 1),
(1222, 67, '4Runner', 1),
(1223, 67, 'Avalon', 1),
(1224, 67, 'Camry', 1),
(1225, 67, 'Celica', 1),
(1226, 67, 'Corolla', 1),
(1227, 67, 'Corona', 1),
(1228, 67, 'Cressida', 1),
(1229, 67, 'Echo', 1),
(1230, 67, 'FJ Cruiser', 1),
(1231, 67, 'Highlander', 1),
(1232, 67, 'Land Cruiser', 1),
(1233, 67, 'Matrix', 1),
(1234, 67, 'MR2', 1),
(1235, 67, 'MR2 Spyder', 1),
(1236, 67, 'Paseo', 1),
(1237, 67, 'Pickup', 1),
(1238, 67, 'Previa', 1),
(1239, 67, 'Prius', 1),
(1240, 67, 'Prius C', 1),
(1241, 67, 'Prius V', 1),
(1242, 67, 'RAV4', 1),
(1243, 67, 'Sequoia', 1),
(1244, 67, 'Sienna', 1),
(1245, 67, 'Solara', 1),
(1246, 67, 'Starlet', 1),
(1247, 67, 'Supra', 1),
(1248, 67, 'T100', 1),
(1249, 67, 'Tacoma', 1),
(1250, 67, 'Tercel', 1),
(1251, 67, 'Tundra', 1),
(1252, 67, 'Van', 1),
(1253, 67, 'Venza', 1),
(1254, 67, 'Yaris', 1),
(1255, 67, 'Other Toyota Models', 1),
(1256, 68, 'TR7', 1),
(1257, 68, 'TR8', 1),
(1258, 68, 'Other Triumph Models', 1),
(1259, 69, 'Beetle', 1),
(1260, 69, 'Cabrio', 1),
(1261, 69, 'Cabriolet', 1),
(1262, 69, 'CC', 1),
(1263, 69, 'Corrado', 1),
(1264, 69, 'Dasher', 1),
(1265, 69, 'Eos', 1),
(1266, 69, 'Eurovan', 1),
(1267, 69, 'Fox', 1),
(1268, 69, 'GLI', 1),
(1269, 69, 'Golf R', 1),
(1270, 69, 'GTI', 1),
(1271, 69, 'Golf and Rabbit Models (2)', 1),
(1272, 69, ' - Golf', 1),
(1273, 69, ' - Rabbit', 1),
(1274, 69, 'Jetta', 1),
(1275, 69, 'Passat', 1),
(1276, 69, 'Phaeton', 1),
(1277, 69, 'Pickup', 1),
(1278, 69, 'Quantum', 1),
(1279, 69, 'R32', 1),
(1280, 69, 'Routan', 1),
(1281, 69, 'Scirocco', 1),
(1282, 69, 'Tiguan', 1),
(1283, 69, 'Touareg', 1),
(1284, 69, 'Vanagon', 1),
(1285, 69, 'Other Volkswagen Models', 1),
(1286, 70, '240', 1),
(1287, 70, '260', 1),
(1288, 70, '740', 1),
(1289, 70, '760', 1),
(1290, 70, '780', 1),
(1291, 70, '850', 1),
(1292, 70, '940', 1),
(1293, 70, '960', 1),
(1294, 70, 'C30', 1),
(1295, 70, 'C70', 1),
(1296, 70, 'S40', 1),
(1297, 70, 'S60', 1),
(1298, 70, 'S70', 1),
(1299, 70, 'S80', 1),
(1300, 70, 'S90', 1),
(1301, 70, 'V40', 1),
(1302, 70, 'V50', 1),
(1303, 70, 'V70', 1),
(1304, 70, 'V90', 1),
(1305, 70, 'XC60', 1),
(1306, 70, 'XC70', 1),
(1307, 70, 'XC90', 1),
(1308, 70, 'Other Volvo Models', 1),
(1309, 71, 'GV', 1),
(1310, 71, 'GVC', 1),
(1311, 71, 'GVL', 1),
(1312, 71, 'GVS', 1),
(1313, 71, 'GVX', 1),
(1314, 71, 'Other Yugo Models', 1),
(1315, 1, 'Acura1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

DROP TABLE IF EXISTS `cars`;
CREATE TABLE IF NOT EXISTS `cars` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `brand_id` int(11) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `mileage` varchar(20) DEFAULT NULL,
  `currency_code` varchar(20) DEFAULT NULL,
  `currency_symbol` blob,
  `regular_price` decimal(11,2) DEFAULT NULL,
  `sale_price` decimal(11,2) DEFAULT NULL,
  `search_price` decimal(11,2) NOT NULL DEFAULT '0.00',
  `negotiable` int(3) DEFAULT '0',
  `top_speed` decimal(11,2) NOT NULL DEFAULT '0.00',
  `brand_model_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `body_type_id` int(11) DEFAULT NULL,
  `fuel_type_id` int(11) DEFAULT NULL,
  `transmission_type_id` int(11) DEFAULT NULL,
  `condtion_id` int(11) DEFAULT NULL,
  `featured_image` varchar(255) DEFAULT NULL,
  `description` text,
  `label` text,
  `value` text,
  `status` int(3) NOT NULL DEFAULT '1' COMMENT '1 - active, 0 - deactive',
  `admin_status` int(3) NOT NULL DEFAULT '2' COMMENT '2 - pending, 1 - approve, 0 - reject	',
  `featured` int(3) NOT NULL DEFAULT '0',
  `views` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `user_id`, `title`, `brand_id`, `year`, `mileage`, `currency_code`, `currency_symbol`, `regular_price`, `sale_price`, `search_price`, `negotiable`, `top_speed`, `brand_model_id`, `category_id`, `body_type_id`, `fuel_type_id`, `transmission_type_id`, `condtion_id`, `featured_image`, `description`, `label`, `value`, `status`, `admin_status`, `featured`, `views`, `created_at`, `updated_at`) VALUES
(7, 11, '2012 MERCEDES-BENZ M-CLASS', 41, 2012, '754490', 'USD', 0x24, '150.00', NULL, '150.00', 0, '200.00', 765, 42, 4, 12, 5, 6, '5d67959c9ca87.jpg', 'The 650S may look like a face-lifted 12C, but there’s a lot more to it: The revised styling pays tribute to the P1 hybrid, the body tub is lighter, and about 25 percent of the parts are new. The heart of the car (and the name) is the 650-PS (641-hp) 3.8-liter twin-turbo V-8. Mated to a seven-speed dual-clutch automatic, the 650S can hit 60 mph in less than 3 seconds. There’s also a Spider version. For more power, there’s the 675LT, which makes 666 hp and hits 60 mph in a claimed 2.9 seconds.\r\n\r\nThe 650S shares the MP4-12C\'s Carbon fiber reinforced polymer chassis, and is powered by the same McLaren M838T engine 3.8-litre V8, twin-turbo engine, but now developing 641 bhp (478 kW; 650 PS) and 500 lb·ft (680 N·m) of torque. Power is transmitted to the wheels through a seven-speed near instantaneous shift dual clutch gearbox.', '[\"Drivetrain\",\"Interior Color\",\"VIN Number\"]', '[\"AWD\",\"Tan\",\"4JGDA5HB2CA006345\"]', 1, 1, 1, 14, '2019-07-27 04:58:31', '2019-08-31 11:30:43'),
(8, 11, '2007 LEXUS ES', 37, 2007, '115364', 'USD', 0x24, '450.00', NULL, '450.00', 1, '150.00', 686, 44, 4, 11, 8, 7, '5d3ec5b455555.jpg', 'The 650S may look like a face-lifted 12C, but there’s a lot more to it: The revised styling pays tribute to the P1 hybrid, the body tub is lighter, and about 25 percent of the parts are new. The heart of the car (and the name) is the 650-PS (641-hp) 3.8-liter twin-turbo V-8. Mated to a seven-speed dual-clutch automatic, the 650S can hit 60 mph in less than 3 seconds. There’s also a Spider version. For more power, there’s the 675LT, which makes 666 hp and hits 60 mph in a claimed 2.9 seconds.\r\n\r\nThe 650S shares the MP4-12C\'s Carbon fiber reinforced polymer chassis, and is powered by the same McLaren M838T engine 3.8-litre V8, twin-turbo engine, but now developing 641 bhp (478 kW; 650 PS) and 500 lb·ft (680 N·m) of torque. Power is transmitted to the wheels through a seven-speed near instantaneous shift dual clutch gearbox.', '[\"Drivetrain\",\"Engine\",\"Exterior Color\",\"Interior Color\",\"VIN Number\"]', '[\"FWD\",\"3.5L V6 272hp 254ft. lbs.\",\"White\",\"Tan\",\"JTHBJ46G372004848\"]', 1, 1, 0, 0, '2019-07-29 04:08:52', '2019-08-03 23:33:57'),
(9, 11, '2016 VOLKSWAGEN TOUAREG', 69, 2016, '28065', 'USD', 0x24, '600.00', '450.00', '450.00', 1, '180.00', 1283, 44, 6, 11, 8, 6, '5d3ec6cd8d581.jpg', 'The 650S may look like a face-lifted 12C, but there’s a lot more to it: The revised styling pays tribute to the P1 hybrid, the body tub is lighter, and about 25 percent of the parts are new. The heart of the car (and the name) is the 650-PS (641-hp) 3.8-liter twin-turbo V-8. Mated to a seven-speed dual-clutch automatic, the 650S can hit 60 mph in less than 3 seconds. There’s also a Spider version. For more power, there’s the 675LT, which makes 666 hp and hits 60 mph in a claimed 2.9 seconds.\r\n\r\nThe 650S shares the MP4-12C\'s Carbon fiber reinforced polymer chassis, and is powered by the same McLaren M838T engine 3.8-litre V8, twin-turbo engine, but now developing 641 bhp (478 kW; 650 PS) and 500 lb·ft (680 N·m) of torque. Power is transmitted to the wheels through a seven-speed near instantaneous shift dual clutch gearbox.', '[\"Drivetrain\",\"Engine\",\"Exterior Color\",\"Interior Color\"]', '[\"AWD\",\"3.6L V6 280hp 266ft. lbs.\",\"White\",\"Black\"]', 1, 1, 0, 5, '2019-07-29 04:13:33', '2019-11-21 04:50:08'),
(10, 11, '2015 LEXUS RC 350', 37, 2015, '35126', 'USD', 0x24, '800.00', '600.00', '600.00', 1, '130.00', 721, 45, 8, 10, 5, 6, '5d3ec85216de2.jpg', 'The 650S may look like a face-lifted 12C, but there’s a lot more to it: The revised styling pays tribute to the P1 hybrid, the body tub is lighter, and about 25 percent of the parts are new. The heart of the car (and the name) is the 650-PS (641-hp) 3.8-liter twin-turbo V-8. Mated to a seven-speed dual-clutch automatic, the 650S can hit 60 mph in less than 3 seconds. There’s also a Spider version. For more power, there’s the 675LT, which makes 666 hp and hits 60 mph in a claimed 2.9 seconds.\r\n\r\nThe 650S shares the MP4-12C\'s Carbon fiber reinforced polymer chassis, and is powered by the same McLaren M838T engine 3.8-litre V8, twin-turbo engine, but now developing 641 bhp (478 kW; 650 PS) and 500 lb·ft (680 N·m) of torque. Power is transmitted to the wheels through a seven-speed near instantaneous shift dual clutch gearbox.', '[\"Engine\",\"Interior Color\",\"Exterior Color\",\"VIN Number\"]', '[\"3.5L V6 306hp 277ft. lbs.\",\"Black\",\"Black\",\"JTHSE5BC4F5001631\"]', 1, 1, 0, 5, '2019-07-29 04:20:02', '2019-09-02 21:48:59'),
(11, 11, '2011 NISSAN JUKE SL', 49, 2011, '62662', 'USD', 0x24, '650.00', '550.00', '550.00', 1, '140.00', 1021, 43, 9, 11, 6, 6, '5d3ecbd52f13e.jpg', 'The 650S may look like a face-lifted 12C, but there’s a lot more to it: The revised styling pays tribute to the P1 hybrid, the body tub is lighter, and about 25 percent of the parts are new. The heart of the car (and the name) is the 650-PS (641-hp) 3.8-liter twin-turbo V-8. Mated to a seven-speed dual-clutch automatic, the 650S can hit 60 mph in less than 3 seconds. There’s also a Spider version. For more power, there’s the 675LT, which makes 666 hp and hits 60 mph in a claimed 2.9 seconds.\r\n\r\nThe 650S shares the MP4-12C\'s Carbon fiber reinforced polymer chassis, and is powered by the same McLaren M838T engine 3.8-litre V8, twin-turbo engine, but now developing 641 bhp (478 kW; 650 PS) and 500 lb·ft (680 N·m) of torque. Power is transmitted to the wheels through a seven-speed near instantaneous shift dual clutch gearbox.', '[\"Engine\",\"Exterior Color\",\"Interior Color\"]', '[\"1.6L Turbo I4 188hp 177ft. lbs.\",\"Gray\",\"Black\"]', 1, 1, 0, 46, '2019-07-29 04:35:01', '2019-08-31 11:30:42'),
(12, 12, '2015 LEXUS RC 350', 37, 2015, '200', NULL, NULL, '700.00', '350.00', '350.00', 1, '120.00', 721, 43, 5, 9, 6, 7, '5d3fc9a42a81f.jpg', 'The 650S may look like a face-lifted 12C, but there’s a lot more to it: The revised styling pays tribute to the P1 hybrid, the body tub is lighter, and about 25 percent of the parts are new. The heart of the car (and the name) is the 650-PS (641-hp) 3.8-liter twin-turbo V-8. Mated to a seven-speed dual-clutch automatic, the 650S can hit 60 mph in less than 3 seconds. There’s also a Spider version. For more power, there’s the 675LT, which makes 666 hp and hits 60 mph in a claimed 2.9 seconds.\r\n\r\nThe 650S shares the MP4-12C\'s Carbon fiber reinforced polymer chassis, and is powered by the same McLaren M838T engine 3.8-litre V8, twin-turbo engine, but now developing 641 bhp (478 kW; 650 PS) and 500 lb·ft (680 N·m) of torque. Power is transmitted to the wheels through a seven-speed near instantaneous shift dual clutch gearbox.', '[\"Drivetrain\",\"Engine\"]', '[\"AWD\",\"3.5L V6 306hp 277ft. lbs.\"]', 1, 1, 1, 30, '2019-07-29 22:37:56', '2019-11-21 05:23:38'),
(13, 12, '2013 CADILLAC CTS 3.6L PREMIUM', 10, 2013, '200', 'USD', 0x24, '200.00', '180.00', '180.00', 0, '160.00', 224, 45, 4, 11, 6, 6, '5d4016d208d3b.jpg', 'The 650S may look like a face-lifted 12C, but there’s a lot more to it: The revised styling pays tribute to the P1 hybrid, the body tub is lighter, and about 25 percent of the parts are new. The heart of the car (and the name) is the 650-PS (641-hp) 3.8-liter twin-turbo V-8. Mated to a seven-speed dual-clutch automatic, the 650S can hit 60 mph in less than 3 seconds. There’s also a Spider version. For more power, there’s the 675LT, which makes 666 hp and hits 60 mph in a claimed 2.9 seconds.\r\n\r\nThe 650S shares the MP4-12C\'s Carbon fiber reinforced polymer chassis, and is powered by the same McLaren M838T engine 3.8-litre V8, twin-turbo engine, but now developing 641 bhp (478 kW; 650 PS) and 500 lb·ft (680 N·m) of torque. Power is transmitted to the wheels through a seven-speed near instantaneous shift dual clutch gearbox.', '[\"Drivetrain\",\"Engine\"]', '[\"AWD\",\"3.6L V6 318hp 275ft. lbs.\"]', 1, 0, 0, 1, '2019-07-30 04:07:14', '2019-08-03 23:30:58'),
(14, 12, 'Lexus LFA \'2014', 37, 2014, '200', 'USD', 0x24, '770.00', '750.00', '750.00', 1, '140.00', 711, 43, 5, 10, 4, 7, '5d415ceaa3375.jpg', 'The 650S may look like a face-lifted 12C, but there’s a lot more to it: The revised styling pays tribute to the P1 hybrid, the body tub is lighter, and about 25 percent of the parts are new. The heart of the car (and the name) is the 650-PS (641-hp) 3.8-liter twin-turbo V-8. Mated to a seven-speed dual-clutch automatic, the 650S can hit 60 mph in less than 3 seconds. There’s also a Spider version. For more power, there’s the 675LT, which makes 666 hp and hits 60 mph in a claimed 2.9 seconds.\r\n\r\nThe 650S shares the MP4-12C\'s Carbon fiber reinforced polymer chassis, and is powered by the same McLaren M838T engine 3.8-litre V8, twin-turbo engine, but now developing 641 bhp (478 kW; 650 PS) and 500 lb·ft (680 N·m) of torque. Power is transmitted to the wheels through a seven-speed near instantaneous shift dual clutch gearbox.', '[\"Doors\",\"Int Color\",\"Ext Color\"]', '[\"5\",\"Tan\",\"Silver\"]', 1, 1, 0, 8, '2019-07-31 03:18:34', '2019-08-31 11:30:42'),
(15, 12, '2016 MCLAREN 650S', 43, 2016, '500', 'USD', 0x24, '1000.00', NULL, '1000.00', 0, '230.00', 792, 44, 5, 11, 6, 6, '5d415f85bc2af.jpg', 'The 650S may look like a face-lifted 12C, but there’s a lot more to it: The revised styling pays tribute to the P1 hybrid, the body tub is lighter, and about 25 percent of the parts are new. The heart of the car (and the name) is the 650-PS (641-hp) 3.8-liter twin-turbo V-8. Mated to a seven-speed dual-clutch automatic, the 650S can hit 60 mph in less than 3 seconds. There’s also a Spider version. For more power, there’s the 675LT, which makes 666 hp and hits 60 mph in a claimed 2.9 seconds.\r\n\r\nThe 650S shares the MP4-12C\'s Carbon fiber reinforced polymer chassis, and is powered by the same McLaren M838T engine 3.8-litre V8, twin-turbo engine, but now developing 641 bhp (478 kW; 650 PS) and 500 lb·ft (680 N·m) of torque. Power is transmitted to the wheels through a seven-speed near instantaneous shift dual clutch gearbox.', '[\"Exterior Color\",\"Interior Color\"]', '[\"Alpine White\",\"Silver\"]', 1, 1, 1, 21, '2019-07-31 03:29:41', '2019-08-31 11:30:42');

-- --------------------------------------------------------

--
-- Table structure for table `car_images`
--

DROP TABLE IF EXISTS `car_images`;
CREATE TABLE IF NOT EXISTS `car_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `car_id` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car_images`
--

INSERT INTO `car_images` (`id`, `car_id`, `image`, `created_at`, `updated_at`) VALUES
(23, 7, '5d3d7c53e4418.jpg', '2019-07-28 04:43:31', '2019-07-28 04:43:31'),
(25, 7, '5d3d7cdb60892.jpg', '2019-07-28 04:45:47', '2019-07-28 04:45:47'),
(26, 8, '5d3ec5b4576b2.jpg', '2019-07-29 04:08:52', '2019-07-29 04:08:52'),
(27, 8, '5d3ec5b459122.jpg', '2019-07-29 04:08:52', '2019-07-29 04:08:52'),
(28, 8, '5d3ec5b45bde1.jpg', '2019-07-29 04:08:52', '2019-07-29 04:08:52'),
(29, 9, '5d3ec6cd8fb3e.jpg', '2019-07-29 04:13:33', '2019-07-29 04:13:33'),
(30, 9, '5d3ec6cd91eb3.jpg', '2019-07-29 04:13:33', '2019-07-29 04:13:33'),
(31, 9, '5d3ec6cd93949.jpg', '2019-07-29 04:13:33', '2019-07-29 04:13:33'),
(32, 10, '5d3ec852193bd.jpg', '2019-07-29 04:20:02', '2019-07-29 04:20:02'),
(33, 10, '5d3ec8521ba10.jpg', '2019-07-29 04:20:02', '2019-07-29 04:20:02'),
(34, 10, '5d3ec8521e23f.jpg', '2019-07-29 04:20:02', '2019-07-29 04:20:02'),
(35, 11, '5d3ecbd531407.jpg', '2019-07-29 04:35:01', '2019-07-29 04:35:01'),
(36, 11, '5d3ecbd532dc0.jpg', '2019-07-29 04:35:01', '2019-07-29 04:35:01'),
(37, 11, '5d3ecbd53509b.jpg', '2019-07-29 04:35:01', '2019-07-29 04:35:01'),
(38, 12, '5d3fc9a42d160.jpg', '2019-07-29 22:37:56', '2019-07-29 22:37:56'),
(39, 12, '5d3fc9a42f13a.jpg', '2019-07-29 22:37:56', '2019-07-29 22:37:56'),
(40, 12, '5d3fc9a432bf1.jpg', '2019-07-29 22:37:56', '2019-07-29 22:37:56'),
(41, 13, '5d4016d20ad1a.jpg', '2019-07-30 04:07:14', '2019-07-30 04:07:14'),
(42, 13, '5d4016d20e8f8.jpg', '2019-07-30 04:07:14', '2019-07-30 04:07:14'),
(43, 13, '5d4016d2115d0.jpg', '2019-07-30 04:07:14', '2019-07-30 04:07:14'),
(44, 14, '5d415ceaa5abc.jpg', '2019-07-31 03:18:34', '2019-07-31 03:18:34'),
(45, 14, '5d415ceaa80dc.jpg', '2019-07-31 03:18:34', '2019-07-31 03:18:34'),
(46, 14, '5d415ceaaa2dc.jpg', '2019-07-31 03:18:34', '2019-07-31 03:18:34'),
(47, 15, '5d415f85be7de.jpg', '2019-07-31 03:29:41', '2019-07-31 03:29:41'),
(48, 15, '5d415f85c0b36.jpg', '2019-07-31 03:29:41', '2019-07-31 03:29:41'),
(49, 15, '5d415f85c2ff8.jpg', '2019-07-31 03:29:41', '2019-07-31 03:29:41'),
(51, 7, '5d678fb08ed2a.jpg', '2019-08-29 02:41:20', '2019-08-29 02:41:20');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(191) NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `count` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `status`, `count`) VALUES
(42, 'Category A', 'category-a-E4Scw-42', 1, 0),
(43, 'Category B', 'category-b-QTKPm-43', 1, 0),
(44, 'Category S', 'category-s-cjEXN-44', 1, 0),
(45, 'Category N', 'category-n-vKnQZ-45', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `condtions`
--

DROP TABLE IF EXISTS `condtions`;
CREATE TABLE IF NOT EXISTS `condtions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `status` int(3) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `condtions`
--

INSERT INTO `condtions` (`id`, `name`, `status`) VALUES
(6, 'Used', 1),
(7, 'New', 1);

-- --------------------------------------------------------

--
-- Table structure for table `email_templates`
--

DROP TABLE IF EXISTS `email_templates`;
CREATE TABLE IF NOT EXISTS `email_templates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email_type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email_subject` mediumtext COLLATE utf8_unicode_ci,
  `email_body` longtext COLLATE utf8_unicode_ci,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `email_templates`
--

INSERT INTO `email_templates` (`id`, `email_type`, `email_subject`, `email_body`, `status`) VALUES
(3, 'expiration_alert', 'Package Expiration Alert', '<p>Hello {model_name},<br>You have successfully registered to {website_title}, We wish you will have a wonderful experience using our service.</p><p>Thank You<br></p>', 1);

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

DROP TABLE IF EXISTS `faqs`;
CREATE TABLE IF NOT EXISTS `faqs` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `title`, `details`, `status`) VALUES
(1, 'Right my front it wound cause fully', 'Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis. Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.', 1),
(4, 'Civilly why how end viewing related', 'Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis. Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.', 0),
(7, 'Cheleder salary jiggesh kora ovodrota keno?', 'Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis. Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.', 0),
(8, 'Meyeder Boyosh jiggesh kora ovodrota keno?', 'Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis. Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.', 0),
(9, 'Man particular insensible celebrated', 'Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis. Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.', 0),
(10, 'Right my front it wound cause fully', 'Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis. Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `fuel_types`
--

DROP TABLE IF EXISTS `fuel_types`;
CREATE TABLE IF NOT EXISTS `fuel_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `status` int(3) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fuel_types`
--

INSERT INTO `fuel_types` (`id`, `name`, `status`) VALUES
(8, 'Premium unleaded petrol', 1),
(9, 'Super unleaded petrol', 1),
(10, 'Diesel', 1),
(11, 'LPG Autogas', 1),
(12, 'Biofuels', 1);

-- --------------------------------------------------------

--
-- Table structure for table `generalsettings`
--

DROP TABLE IF EXISTS `generalsettings`;
CREATE TABLE IF NOT EXISTS `generalsettings` (
  `id` int(191) NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer` blob,
  `copyright` blob,
  `footer_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `colors` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loader` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_aloader` int(3) NOT NULL DEFAULT '1',
  `is_talkto` tinyint(1) NOT NULL DEFAULT '1',
  `talkto` text COLLATE utf8mb4_unicode_ci,
  `is_language` tinyint(1) NOT NULL DEFAULT '1',
  `is_loader` tinyint(1) NOT NULL DEFAULT '1',
  `map_key` text COLLATE utf8mb4_unicode_ci,
  `is_disqus` tinyint(1) NOT NULL DEFAULT '0',
  `disqus` longtext COLLATE utf8mb4_unicode_ci,
  `is_faq` tinyint(1) NOT NULL DEFAULT '0',
  `smtp_host` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `smtp_port` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `smtp_user` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `smtp_pass` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_smtp` tinyint(1) NOT NULL DEFAULT '0',
  `is_comment` tinyint(1) NOT NULL DEFAULT '1',
  `is_currency` tinyint(1) NOT NULL DEFAULT '1',
  `favicon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ss` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gplus` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dribble` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `f_status` int(3) NOT NULL DEFAULT '0',
  `i_status` int(3) NOT NULL DEFAULT '0',
  `g_status` int(3) NOT NULL DEFAULT '0',
  `t_status` int(3) NOT NULL DEFAULT '0',
  `l_status` int(3) NOT NULL DEFAULT '0',
  `d_status` int(3) NOT NULL DEFAULT '0',
  `footer_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_phone` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `generalsettings`
--

INSERT INTO `generalsettings` (`id`, `title`, `footer`, `copyright`, `footer_logo`, `colors`, `loader`, `is_aloader`, `is_talkto`, `talkto`, `is_language`, `is_loader`, `map_key`, `is_disqus`, `disqus`, `is_faq`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `from_email`, `from_name`, `is_smtp`, `is_comment`, `is_currency`, `favicon`, `ss`, `pb`, `facebook`, `instagram`, `gplus`, `twitter`, `linkedin`, `dribble`, `f_status`, `i_status`, `g_status`, `t_status`, `l_status`, `d_status`, `footer_address`, `footer_phone`, `footer_email`) VALUES
(1, 'Car Search Me', 0x5365642075742070657273706963696174697320756e6465206f6d6e69732069737465206e61747573206572726f722073697420766f6c7570746174656d206163637573616e7469756d20646f6c6f72656d717565206c617564616e7469756d2c20746f74616d2072656d206170657269616d2c2065617175652069707361207175616520616220696c6c6f20696e76656e746f726520766572697461746973206574207175617369206172636869746563746f20626561746165207669746165, 0x6361727365617263686d65266e6273703b, 'F:\\xampp\\tmp\\phpBEF1.tmp', '#1d63a7', 'F:\\xampp1\\tmp\\php1336.tmp', 1, 0, '<script type=\"text/javascript\">\r\nvar Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();\r\n(function(){\r\nvar s1=document.createElement(\"script\"),s0=document.getElementsByTagName(\"script\")[0];\r\ns1.async=true;\r\ns1.src=\'https://embed.tawk.to/5bc2019c61d0b77092512d03/default\';\r\ns1.charset=\'UTF-8\';\r\ns1.setAttribute(\'crossorigin\',\'*\');\r\ns0.parentNode.insertBefore(s1,s0);\r\n})();\r\n</script>', 1, 1, 'AIzaSyB1GpE4qeoJ__70UZxvX9CTMUTZRZNHcu8', 0, '<div id=\"disqus_thread\"></div>\r\n<script>\r\n\r\n/**\r\n*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.\r\n*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/\r\n/*\r\nvar disqus_config = function () {\r\nthis.page.url = PAGE_URL;  // Replace PAGE_URL with your page\'s canonical URL variable\r\nthis.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page\'s unique identifier variable\r\n};\r\n*/\r\n(function() { // DON\'T EDIT BELOW THIS LINE\r\nvar d = document, s = d.createElement(\'script\');\r\ns.src = \'https://model-4.disqus.com/embed.js\';\r\ns.setAttribute(\'data-timestamp\', +new Date());\r\n(d.head || d.body).appendChild(s);\r\n})();\r\n</script>\r\n<noscript>Please enable JavaScript to view the <a href=\"https://disqus.com/?ref_noscript\">comments powered by Disqus.</a></noscript>', 1, 'in-v3.mailjet.com', '587', '0e05029e2dc70da691aa2223aa53c5be', '5df1b6242e86bce602c3fd9adc178460', 'admin@geniusocean.com', 'GeniusOcean', 0, 1, 1, NULL, 'sk_test_QQcg3vGsKRPlW6T3dXcNJsor', 'Adjr_NvX4lUV6PQCi15BgedrVJMHnpnVc-H51LhimBj5nhS_iKHJMXMN68fQx9UItjuqyUT2ubv7mkeT', 'https://www.facebook.com/', 'https://www.instagram.com/', 'https://www.google.com/', 'https://twitter.com/', 'https://bd.linkedin.com/', 'https://dribbble.com/', 0, 1, 0, 0, 0, 0, '250 Los Angles, California, USA', '(000) 123-4567', 'your@example.com');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

DROP TABLE IF EXISTS `languages`;
CREATE TABLE IF NOT EXISTS `languages` (
  `id` int(191) NOT NULL AUTO_INCREMENT,
  `is_default` tinyint(1) NOT NULL DEFAULT '0',
  `language` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `is_default`, `language`, `file`) VALUES
(1, 1, 'Language', '1566879169Language.json');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(191) NOT NULL AUTO_INCREMENT,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_tag` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `meta_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `slug`, `details`, `meta_tag`, `meta_description`) VALUES
(1, 'About Us', 'about', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', NULL, NULL),
(2, 'Privacy & Policy', 'privacy', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 'test,test1,test2,test3', 'Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.'),
(3, 'Terms & Condition', 'termsu', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 't1,t2,t3,t4', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.<br>'),
(7, 'Dynamic Page', 'dynamic-page-OmtFT-7', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 'dynamic,page,dynamic-pagre', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College');

-- --------------------------------------------------------

--
-- Table structure for table `pagesettings`
--

DROP TABLE IF EXISTS `pagesettings`;
CREATE TABLE IF NOT EXISTS `pagesettings` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `side_title` text COLLATE utf8mb4_unicode_ci,
  `side_text` text COLLATE utf8mb4_unicode_ci,
  `street` text COLLATE utf8mb4_unicode_ci,
  `phone` text COLLATE utf8mb4_unicode_ci,
  `fax` text COLLATE utf8mb4_unicode_ci,
  `email` text COLLATE utf8mb4_unicode_ci,
  `site` text COLLATE utf8mb4_unicode_ci,
  `slider` tinyint(1) NOT NULL DEFAULT '1',
  `service` tinyint(1) NOT NULL DEFAULT '1',
  `featured` tinyint(1) NOT NULL DEFAULT '1',
  `small_banner` tinyint(1) NOT NULL DEFAULT '1',
  `best` tinyint(1) NOT NULL DEFAULT '1',
  `top_rated` tinyint(1) NOT NULL DEFAULT '1',
  `large_banner` tinyint(1) NOT NULL DEFAULT '1',
  `big` tinyint(1) NOT NULL DEFAULT '1',
  `hot_sale` tinyint(1) NOT NULL DEFAULT '1',
  `review_blog` tinyint(1) NOT NULL DEFAULT '1',
  `header_stxt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `header_btxt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invitation_stxt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invitation_btxt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invitation_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invitation_btn_txt` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `small_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bold_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_contact` int(3) NOT NULL DEFAULT '1',
  `contact_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `featured_stxt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `featured_btxt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latest_stxt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latest_btxt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `testimonial_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `testimonial_subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_btxt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_stxt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pagesettings`
--

INSERT INTO `pagesettings` (`id`, `side_title`, `side_text`, `street`, `phone`, `fax`, `email`, `site`, `slider`, `service`, `featured`, `small_banner`, `best`, `top_rated`, `large_banner`, `big`, `hot_sale`, `review_blog`, `header_stxt`, `header_btxt`, `invitation_stxt`, `invitation_btxt`, `invitation_url`, `invitation_btn_txt`, `small_text`, `bold_text`, `is_contact`, `contact_phone`, `contact_email`, `contact_address`, `featured_stxt`, `featured_btxt`, `latest_stxt`, `latest_btxt`, `testimonial_title`, `testimonial_subtitle`, `blog_btxt`, `blog_stxt`) VALUES
(1, '<h4 class=\"title\" style=\"margin-bottom: 10px; font-weight: 600; line-height: 28px; font-size: 28px;\">Let\'s Connect</h4>', '<span style=\"color: rgb(51, 51, 51);\">Get in touch with us</span>', '3584 Hickory Heights Drive ,Hanover MD 21076, USA', '53223623', '6326326', 'admin@gmail.com', 'IOTISM', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Over 9500 car Listings', 'CAR SEARCH ME', 'Who Involved in the fashion week around the world', 'WE HAVE BEST OF MODELS FROM THE FASHION INDUSTRY', 'iotism', 'Search Here', 'Search From Over 15,00,000 modelsu', 'Find Your Perfect Modelu', 1, '+880-356237683,+880-34634626676,+880-358396738', 'admin@example.com', 'House: 104, Road: 20, Sector: 07, Uttara, Dhaka', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Featured Cars', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Latest Cars', 'Customer Reviews', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Latest Blog', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

DROP TABLE IF EXISTS `payments`;
CREATE TABLE IF NOT EXISTS `payments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `plan_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `amount` decimal(11,2) NOT NULL DEFAULT '0.00',
  `gateway` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `plan_id`, `user_id`, `amount`, `gateway`, `created_at`, `updated_at`) VALUES
(21, 12, 11, '300.00', 'Paypal', '2019-07-29 01:52:20', '2019-07-29 01:52:20'),
(22, 14, 11, '800.00', 'Stripe', '2019-07-29 01:53:49', '2019-07-29 01:53:49'),
(23, 13, 11, '400.00', 'Stripe', '2019-07-29 01:58:08', '2019-07-29 01:58:08'),
(24, 11, 11, '200.00', 'Stripe', '2019-07-29 02:15:56', '2019-07-29 02:15:56'),
(25, 11, 11, '200.00', 'Paypal', '2019-07-29 02:18:03', '2019-07-29 02:18:03'),
(26, 12, 11, '300.00', 'Stripe', '2019-07-29 02:21:27', '2019-07-29 02:21:27'),
(27, 13, 11, '400.00', 'Paypal', '2019-07-29 02:22:05', '2019-07-29 02:22:05'),
(28, 13, 11, '400.00', 'Stripe', '2019-07-29 02:26:30', '2019-07-29 02:26:30'),
(29, 13, 11, '400.00', 'Paypal', '2019-07-29 03:59:17', '2019-07-29 03:59:17'),
(30, 13, 12, '400.00', 'Stripe', '2019-07-31 03:12:44', '2019-07-31 03:12:44'),
(31, 13, 12, '400.00', 'Stripe', '2019-07-31 03:12:44', '2019-07-31 03:12:44');

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

DROP TABLE IF EXISTS `plans`;
CREATE TABLE IF NOT EXISTS `plans` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `currency` varchar(30) DEFAULT NULL,
  `currency_code` blob,
  `price` decimal(11,2) NOT NULL DEFAULT '0.00',
  `days` int(11) NOT NULL DEFAULT '0',
  `ads` int(10) NOT NULL DEFAULT '0',
  `status` int(3) NOT NULL DEFAULT '1',
  `details` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`id`, `title`, `currency`, `currency_code`, `price`, `days`, `ads`, `status`, `details`) VALUES
(11, 'Basic', 'USD', 0x24, '200.00', 20, 25, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.'),
(12, 'Standard', 'USD', 0x24, '300.00', 30, 40, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.'),
(13, 'Premium', 'USD', 0x24, '400.00', 45, 60, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.'),
(14, 'Platinum', 'USD', 0x24, '800.00', 50, 70, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.');

-- --------------------------------------------------------

--
-- Table structure for table `pricings`
--

DROP TABLE IF EXISTS `pricings`;
CREATE TABLE IF NOT EXISTS `pricings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `minimum` decimal(11,2) DEFAULT NULL,
  `maximum` decimal(11,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pricings`
--

INSERT INTO `pricings` (`id`, `minimum`, `maximum`) VALUES
(3, '100.00', '300.00'),
(4, '301.00', '500.00'),
(5, '501.00', '750.00'),
(6, '751.00', '1000.00');

-- --------------------------------------------------------

--
-- Table structure for table `seotools`
--

DROP TABLE IF EXISTS `seotools`;
CREATE TABLE IF NOT EXISTS `seotools` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `google_analytics` text COLLATE utf8mb4_unicode_ci,
  `meta_keys` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seotools`
--

INSERT INTO `seotools` (`id`, `google_analytics`, `meta_keys`) VALUES
(1, 'UA-137437974-1', 'Genius,Ocean,Sea,Etc,Genius,Ocean,SeaGenius,Ocean,Sea,Etc,Genius,Ocean,SeaGenius,Ocean,Sea,Etc,Genius,Ocean,Sea');

-- --------------------------------------------------------

--
-- Table structure for table `socialsettings`
--

DROP TABLE IF EXISTS `socialsettings`;
CREATE TABLE IF NOT EXISTS `socialsettings` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `f_status` tinyint(4) NOT NULL DEFAULT '0',
  `t_status` tinyint(4) NOT NULL DEFAULT '0',
  `l_status` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `socialsettings`
--

INSERT INTO `socialsettings` (`id`, `user_id`, `facebook`, `twitter`, `linkedin`, `f_status`, `t_status`, `l_status`) VALUES
(8, 11, 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.linkedin.com/', 1, 1, 1),
(9, 14, NULL, NULL, NULL, 1, 1, 1),
(10, 12, NULL, NULL, NULL, 1, 1, 1),
(11, 13, NULL, NULL, NULL, 1, 1, 1),
(12, 17, NULL, NULL, NULL, 1, 1, 1),
(13, 18, NULL, NULL, NULL, 1, 1, 1),
(14, 20, NULL, NULL, NULL, 1, 1, 1),
(15, 22, NULL, NULL, NULL, 1, 1, 1),
(16, 24, NULL, NULL, NULL, 1, 1, 1),
(17, 19, 'https://www.facebook.com/', 'https://twitter.com/', 'https://bd.linkedin.com/', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `specifications`
--

DROP TABLE IF EXISTS `specifications`;
CREATE TABLE IF NOT EXISTS `specifications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `label` varchar(255) DEFAULT NULL,
  `value` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=324 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `specifications`
--

INSERT INTO `specifications` (`id`, `user_id`, `label`, `value`) VALUES
(168, 14, 'Age', '19'),
(169, 14, 'Height', '5\'9\"'),
(170, 14, 'Eyes', 'Blue'),
(171, 14, 'Hair', 'Brown'),
(172, 14, 'Bust', '91'),
(173, 14, 'Waist', '86'),
(174, 14, 'Residency', 'USA'),
(175, 14, 'Hips', '86'),
(176, 15, 'Age', '22'),
(177, 15, 'Height', '5\'9\"'),
(178, 15, 'Eyes', 'Blue'),
(179, 15, 'Hair', 'Brown'),
(180, 15, 'Bust', '91'),
(181, 15, 'Waist', '86'),
(182, 15, 'Residency', 'USA'),
(183, 15, 'Hips', '86'),
(194, 12, 'Age', '22'),
(195, 12, 'Height', '5\'9\"'),
(196, 12, 'Eyes', 'Blue'),
(197, 12, 'Hair', 'Brown'),
(198, 12, 'Bust', '91'),
(199, 12, 'Waist', '86'),
(200, 12, 'Residency', 'USA'),
(201, 12, 'Hips', '86'),
(202, 13, 'Age', '22'),
(203, 13, 'Height', '5\'9\"'),
(204, 13, 'Eyes', 'Blue'),
(205, 13, 'Hair', 'Brown'),
(206, 13, 'Bust', '91'),
(207, 13, 'Waist', '86'),
(208, 13, 'Residency', 'USA'),
(209, 13, 'Hips', '86'),
(210, 16, 'Age', '19'),
(211, 16, 'Height', '5\'9\"'),
(212, 16, 'Eyes', 'Blue'),
(213, 16, 'Hair', 'Brown'),
(214, 16, 'Bust', '91'),
(215, 16, 'Waist', '86'),
(216, 16, 'Residency', 'USA'),
(217, 16, 'Hips', '86'),
(218, 17, 'Age', '19'),
(219, 17, 'Height', '5\'9\"'),
(220, 17, 'Eyes', 'Blue'),
(221, 17, 'Hair', 'Brown'),
(222, 17, 'Bust', '91'),
(223, 17, 'Waist', '86'),
(224, 17, 'Residency', 'USA'),
(225, 17, 'Hips', '86'),
(226, 18, 'Age', '19'),
(227, 18, 'Height', '5\'9\"'),
(228, 18, 'Eyes', 'Blue'),
(229, 18, 'Hair', 'Brown'),
(230, 18, 'Bust', '91'),
(231, 18, 'Waist', '86'),
(232, 18, 'Residency', 'USA'),
(233, 18, 'Hips', '86'),
(234, 19, 'Age', '19'),
(235, 19, 'Height', '5\'9\"'),
(236, 19, 'Eyes', 'Blue'),
(237, 19, 'Hair', 'Brown'),
(238, 19, 'Bust', '91'),
(239, 19, 'Waist', '86'),
(240, 19, 'Residency', 'USA'),
(241, 19, 'Hips', '86'),
(242, 20, 'Age', '19'),
(243, 20, 'Height', '5\'9\"'),
(244, 20, 'Eyes', 'Blue'),
(245, 20, 'Hair', 'Brown'),
(246, 20, 'Bust', '91'),
(247, 20, 'Waist', '86'),
(248, 20, 'Residency', 'USA'),
(249, 20, 'Hips', '86'),
(258, 22, 'Age', '22'),
(259, 22, 'Height', '5\'9\"'),
(260, 22, 'Eyes', 'Blue'),
(261, 22, 'Hair', 'Brown'),
(262, 22, 'Bust', '86'),
(263, 22, 'Waist', '86'),
(264, 22, 'Residency', 'USA'),
(265, 22, 'Hips', '86'),
(274, 24, 'Age', '23'),
(275, 24, 'Height', '5\'9\"'),
(276, 24, 'Eyes', 'Blue'),
(277, 24, 'Hair', 'Brown'),
(278, 24, 'Bust', '91'),
(279, 24, 'Waist', '86'),
(280, 24, 'Residency', 'USA'),
(281, 24, 'Hips', '86'),
(290, 23, 'Age', '24'),
(291, 23, 'Height', '5\'9\"'),
(292, 23, 'Eyes', 'Blue'),
(293, 23, 'Hair', 'Brown'),
(294, 23, 'Bust', '91'),
(295, 23, 'Waist', '86'),
(296, 23, 'Residency', 'USA'),
(297, 23, 'Hips', '86'),
(298, 21, 'Age', '22'),
(299, 21, 'Height', '5\'9\"'),
(300, 21, 'Eyes', 'Blue'),
(301, 21, 'Hair', 'Brown'),
(302, 21, 'Bust', '91'),
(303, 21, 'Waist', '86'),
(304, 21, 'Residency', 'USA'),
(305, 21, 'Hips', '86'),
(316, 11, 'Age', '19'),
(317, 11, 'Height', '5\'9\"'),
(318, 11, 'Eyes', 'Blue'),
(319, 11, 'Hair', 'Brown'),
(320, 11, 'Bust', '91'),
(321, 11, 'Waist', '86'),
(322, 11, 'Residency', 'USA'),
(323, 11, 'Hips', '86');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

DROP TABLE IF EXISTS `subscribers`;
CREATE TABLE IF NOT EXISTS `subscribers` (
  `id` int(191) NOT NULL AUTO_INCREMENT,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`) VALUES
(1, 'samiul.pratik@gmail.com'),
(2, 'pratik.anwar@gmail.com'),
(3, 'user@gmail.com'),
(4, 'pratik.anwar@gmail.com'),
(5, 'milu@gmail.com'),
(6, 'mamun@gmail.com'),
(7, 'user11@gmail.com'),
(8, 'user12@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

DROP TABLE IF EXISTS `testimonials`;
CREATE TABLE IF NOT EXISTS `testimonials` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `rank` varchar(255) DEFAULT NULL,
  `comment` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `image`, `name`, `rank`, `comment`, `created_at`, `updated_at`) VALUES
(2, '1562488087adult-boy-casual-220453.jpg', 'Json Roy', 'CEO, APPLE', 'That conviction is where the process of change really begins—with the realization that just because a certain abuse has taken place in the past doesn’t mean that we have to tole. That conviction is where the process of change really begins', '2019-07-07 02:28:07', '2019-07-07 02:28:07'),
(3, '1562489108adult-beach-casual-736716.jpg', 'Jony Barristow', 'CTO, APPLE', 'That conviction is where the process of change really begins—with the realization that just because a certain abuse has taken place in the past doesn’t mean that we have to tole. That conviction is where the process of change really begins', '2019-07-07 02:35:49', '2019-07-07 02:45:08'),
(4, '1562488638attractive-beautiful-beauty-415829.jpg', 'Joe Root', 'MANAGER, APPLE', 'That conviction is where the process of change really begins—with the realization that just because a certain abuse has taken place in the past doesn’t mean that we have to tole. That conviction is where the process of change really begins', '2019-07-07 02:37:18', '2019-07-07 02:37:18'),
(6, '1564382456people.png', 'Mamun Khan', 'CEO of APPLE', 'That conviction is where the process of change really begins—with the realization that just because a certain abuse has taken place in the past doesn’t mean that we have to tole. That conviction is where the process of change really begins', '2019-07-29 00:39:32', '2019-07-29 00:40:56');

-- --------------------------------------------------------

--
-- Table structure for table `transmission_types`
--

DROP TABLE IF EXISTS `transmission_types`;
CREATE TABLE IF NOT EXISTS `transmission_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `status` int(3) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transmission_types`
--

INSERT INTO `transmission_types` (`id`, `name`, `status`) VALUES
(3, 'Traditional Automatic', 1),
(4, 'Automated-Manual', 1),
(5, 'Continuously Variable', 1),
(6, 'Dual-Clutch', 1),
(7, 'DSG', 1),
(8, 'Tiptronic', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) DEFAULT NULL,
  `gender` varchar(40) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `latitude` varchar(255) DEFAULT NULL,
  `longitude` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `about` text,
  `current_plan` int(11) DEFAULT NULL,
  `ads` int(11) NOT NULL DEFAULT '0',
  `expired_date` varchar(255) DEFAULT NULL,
  `verification_link` varchar(255) DEFAULT NULL,
  `email_verified` int(3) NOT NULL DEFAULT '0',
  `status` int(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `category_id`, `gender`, `username`, `first_name`, `last_name`, `email`, `phone`, `address`, `latitude`, `longitude`, `password`, `remember_token`, `image`, `about`, `current_plan`, `ads`, `expired_date`, `verification_link`, `email_verified`, `status`, `created_at`, `updated_at`) VALUES
(11, 25, 'male', 'user', 'Chris', 'Cairns', 'user@gmail.com', '547,54754', 'Uttara, Dhaka', '23.875854', '90.379547', '$2y$10$7ThTlr1jhxqUNggm82tEI.Yar5zbIQLmWDmhlHH9lmmHztVqYehaq', 'b5uEsywTisDJIM18WGDKzbKWN1uysycxYGTmgaAsaI1XtPiFn0WU0uk139Lx', '1564205563.png', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 13, 54, '2019-09-12 09:59:17', '29daf97a0b50052e92d8f488467c16cc', 1, 1, '2019-07-01 03:33:10', '2019-07-31 00:23:38'),
(12, 26, 'female', 'user1', 'Jackob', 'Oram', 'genius@gmail.com', NULL, 'Dhanmondi, Dhaka', NULL, NULL, '$2y$10$YR0oyGfOtj0w4T/i3SWQdunB7ei5/jomCSSEJlASUZ3PYeS.7nXYy', 'nvYarc236u3dRtfZmCODkPNZ20YVA6sFbIOqeBDzHPBb4zsyuxbyaPBkQkJk', '1564396896.png', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia', 13, 58, '2019-09-14 09:12:44', '7e261372bb25932186169b15dd4ddc9e', 1, 1, '2019-07-06 23:33:59', '2019-07-31 03:29:41'),
(13, 30, 'female', 'user2', 'User', 'Two', 'user2@gmail.com', NULL, 'Banani, Dhaka', NULL, NULL, '$2y$10$gom5eaPT3aJxoVD/ytAlPOj4hg5UtH7QAOoTXRqAH4lZPaX23JnHu', '30yAuzXuBXPJf2qQRSAQJMkXPLxJ3GJSeIzN8dPpmNPrq3cTO5JLxrIPFnX2', '1562565124.png', '<p style=\"margin-bottom: 1rem; color: rgb(41, 41, 58);\">Born in Inverness, Scotland, on November 28, 1987, I loved the acting very early on and worked in several youth theater groups in my teens, which later inspired me to try becoming a model as well.</p><p style=\"margin-bottom: 1rem; color: rgb(41, 41, 58);\">Born in Inverness, Scotland, on November 28, 1987, I loved the acting very early on and worked in several youth theater groups in my teens, which later inspired me to try becoming a model as well. Born in Inverness, Scotland, on November 28, 1987, I loved the acting very early on and worked in several youth theater groups in my teens, which later inspired me to try becoming a model as well.</p><p style=\"margin-bottom: 1rem; color: rgb(41, 41, 58);\">Born in Inverness, Scotland, on November 28, 1987, I loved the acting very early on and worked in several youth theater groups in my teens, which later inspired me to try becoming a model as well.</p><p style=\"margin-bottom: 1rem; color: rgb(41, 41, 58);\">Born in Inverness, Scotland, on November 28, 1987, I loved the acting very early on and worked in several youth theater groups in my teens, which later inspired me to try becoming a model as well. Born in Inverness, Scotland, on November 28, 1987, I loved the acting very early on and worked in several youth theater groups in my teens.</p>', NULL, 0, NULL, '1d40deff09dce60fc64bef8546daccf2', 1, 1, '2019-07-06 23:44:28', '2019-07-17 03:38:32'),
(14, 26, 'female', 'user3', 'Model', 'Three', 'user3@gmail.com', '96794699467,9483690409,7347548588', 'Gulshan, Dhaka', NULL, NULL, '$2y$10$teTh4g5FADF3BeVV6y4pnOYjm5YbJ/04WPoJB6xgVxpXx.LHYLq52', 'soIwtTuH22qJs8IbFKE6AigUgzFYWyEvgJQzZx3bdubnGVYMDERciXKxrmqK', '1562558041.png', '<p style=\"margin-bottom: 1rem; color: rgb(41, 41, 58);\">Born in Inverness, Scotland, on November 28, 1987, I loved the acting very early on and worked in several youth theater groups in my teens, which later inspired me to try becoming a model as well.</p><p style=\"margin-bottom: 1rem; color: rgb(41, 41, 58);\">Born in Inverness, Scotland, on November 28, 1987, I loved the acting very early on and worked in several youth theater groups in my teens, which later inspired me to try becoming a model as well. Born in Inverness, Scotland, on November 28, 1987, I loved the acting very early on and worked in several youth theater groups in my teens, which later inspired me to try becoming a model as well.</p><p style=\"margin-bottom: 1rem; color: rgb(41, 41, 58);\">Born in Inverness, Scotland, on November 28, 1987, I loved the acting very early on and worked in several youth theater groups in my teens, which later inspired me to try becoming a model as well.</p><p style=\"margin-bottom: 1rem; color: rgb(41, 41, 58);\">Born in Inverness, Scotland, on November 28, 1987, I loved the acting very early on and worked in several youth theater groups in my teens, which later inspired me to try becoming a model as well. Born in Inverness, Scotland, on November 28, 1987, I loved the acting very early on and worked in several youth theater groups in my teens.</p>', NULL, 0, NULL, 'ef31f55cae4b56868d1cbf3f373bfb5d', 1, 1, '2019-07-06 23:45:36', '2019-07-20 02:33:22'),
(15, 29, 'female', 'user4', 'User', 'Four', 'user4@gmail.com', NULL, 'Bashvaban, Dhaka', NULL, NULL, '$2y$10$dlrR.IQ95HCm.SkAQy5DNOMPU0Uoid/1nGNpSObjmQ6DbRaQXwwUe', NULL, '1562568557.png', '<p style=\"margin-bottom: 1rem; color: rgb(41, 41, 58);\">Born in Inverness, Scotland, on November 28, 1987, I loved the acting very early on and worked in several youth theater groups in my teens, which later inspired me to try becoming a model as well.</p><p style=\"margin-bottom: 1rem; color: rgb(41, 41, 58);\">Born in Inverness, Scotland, on November 28, 1987, I loved the acting very early on and worked in several youth theater groups in my teens, which later inspired me to try becoming a model as well. Born in Inverness, Scotland, on November 28, 1987, I loved the acting very early on and worked in several youth theater groups in my teens, which later inspired me to try becoming a model as well.</p><p style=\"margin-bottom: 1rem; color: rgb(41, 41, 58);\">Born in Inverness, Scotland, on November 28, 1987, I loved the acting very early on and worked in several youth theater groups in my teens, which later inspired me to try becoming a model as well.</p><p style=\"margin-bottom: 1rem; color: rgb(41, 41, 58);\">Born in Inverness, Scotland, on November 28, 1987, I loved the acting very early on and worked in several youth theater groups in my teens, which later inspired me to try becoming a model as well. Born in Inverness, Scotland, on November 28, 1987, I loved the acting very early on and worked in several youth theater groups in my teens.</p>', NULL, 0, NULL, '6c1203a71052bf58abc09400fa2d4659', 1, 1, '2019-07-06 23:46:03', '2019-07-17 03:26:41'),
(16, 27, 'female', 'user5', 'User', 'Five', 'user5@gmail.com', NULL, 'Uttara, Dhaka', NULL, NULL, '$2y$10$SNWatP72u5bXjeai4OvlQ.iZ7cEZEctMPm0iHpr1pX7NZ62Vf360u', 'Csm6axDxV2sAjFakyoqjv6x0BmLoHfmApRytixSE5S518MQe1Jvjhmrw3YAb', '1562647885.png', '<p style=\"margin-bottom: 1rem; color: rgb(41, 41, 58);\">Born in Inverness, Scotland, on November 28, 1987, I loved the acting very early on and worked in several youth theater groups in my teens, which later inspired me to try becoming a model as well.</p><p style=\"margin-bottom: 1rem; color: rgb(41, 41, 58);\">Born in Inverness, Scotland, on November 28, 1987, I loved the acting very early on and worked in several youth theater groups in my teens, which later inspired me to try becoming a model as well. Born in Inverness, Scotland, on November 28, 1987, I loved the acting very early on and worked in several youth theater groups in my teens, which later inspired me to try becoming a model as well.</p><p style=\"margin-bottom: 1rem; color: rgb(41, 41, 58);\">Born in Inverness, Scotland, on November 28, 1987, I loved the acting very early on and worked in several youth theater groups in my teens, which later inspired me to try becoming a model as well.</p><p style=\"margin-bottom: 1rem; color: rgb(41, 41, 58);\">Born in Inverness, Scotland, on November 28, 1987, I loved the acting very early on and worked in several youth theater groups in my teens, which later inspired me to try becoming a model as well. Born in Inverness, Scotland, on November 28, 1987, I loved the acting very early on and worked in several youth theater groups in my teens.</p>', NULL, 0, NULL, 'e0d91687c4adad617a4a1deb7a573df9', 1, 1, '2019-07-08 21:24:31', '2019-07-17 03:26:41'),
(17, 25, 'male', 'user6', 'Model', 'Six', 'user6@gmail.com', NULL, 'Uttara, Dhaka', NULL, NULL, '$2y$10$SNWatP72u5bXjeai4OvlQ.iZ7cEZEctMPm0iHpr1pX7NZ62Vf360u', 'GloesySOR0AB2Bmm3yttgydyfO5bPvAA0h8SzbeJhXfKaE3I55yuVPnjV76q', '1563265178.png', '<p style=\"margin-bottom: 1rem; color: rgb(41, 41, 58);\">Born in Inverness, Scotland, on November 28, 1987, I loved the acting very early on and worked in several youth theater groups in my teens, which later inspired me to try becoming a model as well.</p><p style=\"margin-bottom: 1rem; color: rgb(41, 41, 58);\">Born in Inverness, Scotland, on November 28, 1987, I loved the acting very early on and worked in several youth theater groups in my teens, which later inspired me to try becoming a model as well. Born in Inverness, Scotland, on November 28, 1987, I loved the acting very early on and worked in several youth theater groups in my teens, which later inspired me to try becoming a model as well.</p><p style=\"margin-bottom: 1rem; color: rgb(41, 41, 58);\">Born in Inverness, Scotland, on November 28, 1987, I loved the acting very early on and worked in several youth theater groups in my teens, which later inspired me to try becoming a model as well.</p><p style=\"margin-bottom: 1rem; color: rgb(41, 41, 58);\">Born in Inverness, Scotland, on November 28, 1987, I loved the acting very early on and worked in several youth theater groups in my teens, which later inspired me to try becoming a model as well. Born in Inverness, Scotland, on November 28, 1987, I loved the acting very early on and worked in several youth theater groups in my teens.</p>', NULL, 0, NULL, '5987238b083ccf40952778466bb50194', 1, 1, '2019-07-08 21:25:42', '2019-07-17 03:26:41'),
(18, 25, 'male', 'user7', 'User', 'Seven', 'user7@gmail.com', NULL, 'Uttara, Dhaka', NULL, NULL, '$2y$10$genpk5aY/8KJAAIqoFjjYuEoQFLYUM23FSvAYQXvT66kKdd9JL70O', '04Cju8b0MbA6nKGmI6Ey1xPNjBa770ZRFHosaeNRGQOz8clbs0vGexuMAriT', '1562649507.png', NULL, NULL, 0, NULL, 'b82c1d5ae5d8c109ab65662b6eb13d46', 1, 1, '2019-07-08 21:46:32', '2019-07-28 22:17:37'),
(19, 25, 'female', 'user8', 'User', 'Eight', 'user8@gmail.com', NULL, 'Uttara, Dhaka', NULL, NULL, '$2y$10$aHyoO.HbiOLOFvjuSDpXquHzgx4YMUNJSxYbyXI7ZnxXKsSycP2Y6', 'vn9pGbXXz887gC6uKkUfc34Me9pTmDbNc2A09VjlEDK8pVVr75qbVtghRNXx', '1563354528.png', NULL, NULL, 0, NULL, '5d226bd6e7d97411e3f568dee80138c3', 1, 1, '2019-07-08 21:47:39', '2019-07-28 22:17:25'),
(20, 25, 'female', 'user9', 'User', 'Nine', 'user9@gmail.com', NULL, 'Uttara, Dhaka', NULL, NULL, '$2y$10$TOeMnaKjvkkaN2g65A1yt.0//C0ayH2m19wpMU7IVkg5hzWH6M1c6', 'So04B2INumhlrTf4EyBPQVF35YlnYvBUB1lawYAUDr6fzgjCODaViOkYDXDe', '1562651056.png', NULL, NULL, 0, NULL, '691356dde7dcc680945bc3a61440b2f3', 1, 1, '2019-07-08 21:48:26', '2019-07-28 22:17:30'),
(21, 25, 'female', 'user10', 'User', 'Ten', 'user10@gmail.com', NULL, 'Uttara, Dhaka', NULL, NULL, '$2y$10$2JPeppBBfoHDEqqsiGqAOOmvympPLwa/GmifH9EOCGDFXIxQJ43Me', 'IcEO3hdBGaDXM2aCDi9rcA6fJ031Do9WdSKSOH6pxRcoDCJ4JEBYuRciAHjM', '1562651452.png', NULL, NULL, 0, NULL, '2440f5e24533d107866dabdbed353451', 1, 1, '2019-07-08 21:49:03', '2019-07-28 22:17:19'),
(22, 25, 'female', 'user11', 'User', 'Eleven', 'user11@gmail.com', NULL, 'Uttara, Dhaka', NULL, NULL, '$2y$10$VbpySEWJVMiBBv1HKM.rkOSwqj6dZf2DR6XwYhg2VBlpMy4ccTg.O', 'XDB1KaZe3WOqiMNqAUaUNAoXeNdTGeCXCOjWnGWqMykhmKRe9S7bIBOqaxOX', '1563354377.png', NULL, NULL, 0, NULL, 'b2fe180499384bc946959460fff9b4a5', 1, 1, '2019-07-08 21:51:09', '2019-07-28 22:17:13'),
(23, 28, 'female', 'user12', 'User', 'Twelve', 'user12@gmail.com', '7554835364,3496704890,6794590497', 'Uttara, Dhaka', NULL, NULL, '$2y$10$mmV6FZSJ3UOOZImqLrNPleC075eYiRIFPLzBvmowZmX8NACWhxUvC', 'Hyz2UDOHQRwT6JDwe9gzCOdnLtitNQqapcvoZWbWmtcuhtQ2irdlXOeRwelo', '1563354463.png', NULL, NULL, 0, NULL, 'e1665be3339e4fb4893aea4edd5a3816', 1, 1, '2019-07-08 21:51:51', '2019-07-28 22:17:07'),
(24, 29, 'male', 'user13', 'User', 'thirteen', 'user13@gmail.com', '6754754234,800375923,4378903347', 'Ludwigstrabe 53, 70176 Stuttgart', NULL, NULL, '$2y$10$wTTBRA2LRw4J3Rsxx3XkjODsAVMpdKpi.COSuFeoEyQdk55rZ/iIq', 'g3SSvh99lXRlKU47qX6Tk7mSoS2hASnQy8ODlgytczDn6IwQzBB9qCHUHWih', '1563354319.png', NULL, NULL, 0, NULL, '4c5d3fb65db7fa3973a9ef46af4b7b73', 1, 1, '2019-07-08 21:57:02', '2019-07-28 22:16:42'),
(25, NULL, NULL, 'user14', 'User', 'Fourteen', 'user14@gmail.com', NULL, 'Uttara, Dhaka', NULL, NULL, '$2y$10$5IYrop/oirY0goRdlanDt..DFCKmEmGujr70v3XGRVq64o6T4lOxW', NULL, NULL, NULL, NULL, 0, NULL, 'e7a0ce833515423dfd366c3401fca779', 1, 1, '2019-07-08 21:57:44', '2019-07-28 22:18:46'),
(26, 27, 'male', 'user15', 'User', 'Fifteen', 'user15@gmail.com', NULL, 'Uttara, Dhaka', NULL, NULL, '$2y$10$TQSqtIOG5nttYgdQQFJj4OsbWabsZOEx10YxENMyPuSmL/mdjZ9iy', 'MxzLy6WPo7RtuIGOJMe4R0HZBkEFEv2cBq35YmixHlnLu8skb9buBixMiSEF', '1563682970.png', NULL, NULL, 0, NULL, '908e7fa21c14b712a32cdf15f808f33f', 1, 1, '2019-07-08 21:58:31', '2019-07-28 22:16:28'),
(27, NULL, NULL, 'user16', 'User', 'Sixteen', 'user16@gmail.com', NULL, NULL, NULL, NULL, '$2y$10$itzb4hp3NuYDKPWLIFibHegbF3u851m6G2OEy/MnPPZT5VfUhOj3q', 'qRnPRK8e9nWRNkxQKiWfSnwH0UlsfLSTJU0v08WInbsQQaqpUxeANjdUnwKp', NULL, NULL, NULL, 0, NULL, '30c2f84e7d34b95fa4c569b8fdd59ae5', 1, 1, '2019-07-22 22:34:58', '2019-07-28 22:25:11'),
(28, NULL, NULL, 'pranav', 'pranav', 'pk', 'pranavpk.pk1@gmail.com', NULL, NULL, NULL, NULL, '$2y$10$wDq4P/c4DCObgHvCAnRcE.8GJ0nIcsA7VGSLLYaGvbDzP4Gi7mSby', '413kLWKVWXokttv5ZYHqVkBxBv8NDbziaMgpjxAoabi6vAnLguQre8p3jQHZ', NULL, NULL, NULL, 0, NULL, '5e830853edfe2427ed588c592d2e863c', 1, 1, '2019-11-21 05:09:12', '2019-11-21 05:09:12'),
(29, NULL, NULL, 'coqybi', 'Maggy', 'Ball', 'buhegyx@mailinator.com', NULL, NULL, NULL, NULL, '$2y$10$j2q7nLt.Azv230U5eVxRae9Gnd3HEeuwQY0lqJblKvb2jhC006knC', 'p3qGFCLwfc0wwk3wVUhvevv5KRBAuyR9sU8I6rtJ2YYRvTF0uCx3p6XXgU0j', NULL, NULL, NULL, 0, NULL, '8832c528aebde491771bd1d9d9169e70', 0, 1, '2019-11-21 05:10:18', '2019-11-21 05:10:18');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
