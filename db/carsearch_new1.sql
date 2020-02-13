-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 16, 2019 at 06:53 AM
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
-- Table structure for table `acceleration`
--

DROP TABLE IF EXISTS `acceleration`;
CREATE TABLE IF NOT EXISTS `acceleration` (
  `id` int(200) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `status` varchar(30) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `acceleration`
--

INSERT INTO `acceleration` (`id`, `name`, `status`, `created_on`) VALUES
(1, 'acceleration', '1', '2019-12-10 10:25:12');

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
-- Table structure for table `cars`
--

DROP TABLE IF EXISTS `cars`;
CREATE TABLE IF NOT EXISTS `cars` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `car_name` varchar(255) DEFAULT NULL,
  `price` varchar(200) NOT NULL,
  `make_id` int(200) NOT NULL,
  `model_id` int(200) NOT NULL,
  `engine_capacity_id` int(200) NOT NULL,
  `cylinders_id` int(200) NOT NULL,
  `drive_Type_id` int(200) NOT NULL,
  `fuel_tank_capacity_id` int(200) NOT NULL,
  `fuel_economy_id` int(200) NOT NULL,
  `fuel_type_id` int(200) NOT NULL,
  `horsepower_id` int(200) NOT NULL,
  `torque_id` int(200) NOT NULL,
  `transmission_id` int(200) NOT NULL,
  `top_speed_id` int(200) NOT NULL,
  `seating_capacity_id` int(200) NOT NULL,
  `acceleration_id` int(200) NOT NULL,
  `length_id` int(200) NOT NULL,
  `width_id` int(200) NOT NULL,
  `height_id` int(200) NOT NULL,
  `wheelbase_id` int(200) NOT NULL,
  `trunk_capacity_id` int(200) NOT NULL,
  `featured_image` varchar(255) DEFAULT NULL,
  `features` text,
  `status` int(3) NOT NULL DEFAULT '1' COMMENT '1 - active, 0 - deactive',
  `admin_status` int(3) NOT NULL DEFAULT '2' COMMENT '2 - pending, 1 - approve, 0 - reject	',
  `featured` int(3) NOT NULL DEFAULT '0',
  `views` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `user_id`, `car_name`, `price`, `make_id`, `model_id`, `engine_capacity_id`, `cylinders_id`, `drive_Type_id`, `fuel_tank_capacity_id`, `fuel_economy_id`, `fuel_type_id`, `horsepower_id`, `torque_id`, `transmission_id`, `top_speed_id`, `seating_capacity_id`, `acceleration_id`, `length_id`, `width_id`, `height_id`, `wheelbase_id`, `trunk_capacity_id`, `featured_image`, `features`, `status`, `admin_status`, `featured`, `views`, `created_at`, `updated_at`) VALUES
(1, 0, 'Erica Neal', '446', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '5df0a28ee98d2.jpg', 'Deserunt quis anim v.', 1, 1, 1, 5, '2019-12-11 04:02:22', '2019-12-15 00:56:50'),
(2, 0, 'Henry Mccarty', '989', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '5df0a30991e7d.jpg', 'Tenetur iste ipsum, .', 1, 1, 0, 1, '2019-12-11 04:04:25', '2019-12-15 06:59:49'),
(3, 0, 'Renault Duster', '8000', 1, 1, 1, 2, 1, 1, 1, 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '5df47e47d52d1.jpg', 'dewrer', 1, 1, 0, 24, '2019-12-14 02:16:39', '2019-12-15 06:59:48');

-- --------------------------------------------------------

--
-- Table structure for table `cars_old`
--

DROP TABLE IF EXISTS `cars_old`;
CREATE TABLE IF NOT EXISTS `cars_old` (
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
-- Dumping data for table `cars_old`
--

INSERT INTO `cars_old` (`id`, `user_id`, `title`, `brand_id`, `year`, `mileage`, `currency_code`, `currency_symbol`, `regular_price`, `sale_price`, `search_price`, `negotiable`, `top_speed`, `brand_model_id`, `category_id`, `body_type_id`, `fuel_type_id`, `transmission_type_id`, `condtion_id`, `featured_image`, `description`, `label`, `value`, `status`, `admin_status`, `featured`, `views`, `created_at`, `updated_at`) VALUES
(7, 11, '2012 MERCEDES-BENZ M-CLASS', 41, 2012, '754490', 'USD', 0x24, '150.00', NULL, '150.00', 0, '200.00', 765, 42, 4, 12, 5, 6, '5d67959c9ca87.jpg', 'The 650S may look like a face-lifted 12C, but there’s a lot more to it: The revised styling pays tribute to the P1 hybrid, the body tub is lighter, and about 25 percent of the parts are new. The heart of the car (and the name) is the 650-PS (641-hp) 3.8-liter twin-turbo V-8. Mated to a seven-speed dual-clutch automatic, the 650S can hit 60 mph in less than 3 seconds. There’s also a Spider version. For more power, there’s the 675LT, which makes 666 hp and hits 60 mph in a claimed 2.9 seconds.\r\n\r\nThe 650S shares the MP4-12C\'s Carbon fiber reinforced polymer chassis, and is powered by the same McLaren M838T engine 3.8-litre V8, twin-turbo engine, but now developing 641 bhp (478 kW; 650 PS) and 500 lb·ft (680 N·m) of torque. Power is transmitted to the wheels through a seven-speed near instantaneous shift dual clutch gearbox.', '[\"Drivetrain\",\"Interior Color\",\"VIN Number\"]', '[\"AWD\",\"Tan\",\"4JGDA5HB2CA006345\"]', 1, 1, 1, 14, '2019-07-27 04:58:31', '2019-08-31 11:30:43'),
(8, 11, '2007 LEXUS ES', 37, 2007, '115364', 'USD', 0x24, '450.00', NULL, '450.00', 1, '150.00', 686, 44, 4, 11, 8, 7, '5d3ec5b455555.jpg', 'The 650S may look like a face-lifted 12C, but there’s a lot more to it: The revised styling pays tribute to the P1 hybrid, the body tub is lighter, and about 25 percent of the parts are new. The heart of the car (and the name) is the 650-PS (641-hp) 3.8-liter twin-turbo V-8. Mated to a seven-speed dual-clutch automatic, the 650S can hit 60 mph in less than 3 seconds. There’s also a Spider version. For more power, there’s the 675LT, which makes 666 hp and hits 60 mph in a claimed 2.9 seconds.\r\n\r\nThe 650S shares the MP4-12C\'s Carbon fiber reinforced polymer chassis, and is powered by the same McLaren M838T engine 3.8-litre V8, twin-turbo engine, but now developing 641 bhp (478 kW; 650 PS) and 500 lb·ft (680 N·m) of torque. Power is transmitted to the wheels through a seven-speed near instantaneous shift dual clutch gearbox.', '[\"Drivetrain\",\"Engine\",\"Exterior Color\",\"Interior Color\",\"VIN Number\"]', '[\"FWD\",\"3.5L V6 272hp 254ft. lbs.\",\"White\",\"Tan\",\"JTHBJ46G372004848\"]', 1, 1, 0, 0, '2019-07-29 04:08:52', '2019-08-03 23:33:57'),
(9, 11, '2016 VOLKSWAGEN TOUAREG', 69, 2016, '28065', 'USD', 0x24, '600.00', '450.00', '450.00', 1, '180.00', 1283, 44, 6, 11, 8, 6, '5d3ec6cd8d581.jpg', 'The 650S may look like a face-lifted 12C, but there’s a lot more to it: The revised styling pays tribute to the P1 hybrid, the body tub is lighter, and about 25 percent of the parts are new. The heart of the car (and the name) is the 650-PS (641-hp) 3.8-liter twin-turbo V-8. Mated to a seven-speed dual-clutch automatic, the 650S can hit 60 mph in less than 3 seconds. There’s also a Spider version. For more power, there’s the 675LT, which makes 666 hp and hits 60 mph in a claimed 2.9 seconds.\r\n\r\nThe 650S shares the MP4-12C\'s Carbon fiber reinforced polymer chassis, and is powered by the same McLaren M838T engine 3.8-litre V8, twin-turbo engine, but now developing 641 bhp (478 kW; 650 PS) and 500 lb·ft (680 N·m) of torque. Power is transmitted to the wheels through a seven-speed near instantaneous shift dual clutch gearbox.', '[\"Drivetrain\",\"Engine\",\"Exterior Color\",\"Interior Color\"]', '[\"AWD\",\"3.6L V6 280hp 266ft. lbs.\",\"White\",\"Black\"]', 1, 1, 0, 5, '2019-07-29 04:13:33', '2019-11-21 04:50:08'),
(10, 11, '2015 LEXUS RC 350', 37, 2015, '35126', 'USD', 0x24, '800.00', '600.00', '600.00', 1, '130.00', 721, 45, 8, 10, 5, 6, '5d3ec85216de2.jpg', 'The 650S may look like a face-lifted 12C, but there’s a lot more to it: The revised styling pays tribute to the P1 hybrid, the body tub is lighter, and about 25 percent of the parts are new. The heart of the car (and the name) is the 650-PS (641-hp) 3.8-liter twin-turbo V-8. Mated to a seven-speed dual-clutch automatic, the 650S can hit 60 mph in less than 3 seconds. There’s also a Spider version. For more power, there’s the 675LT, which makes 666 hp and hits 60 mph in a claimed 2.9 seconds.\r\n\r\nThe 650S shares the MP4-12C\'s Carbon fiber reinforced polymer chassis, and is powered by the same McLaren M838T engine 3.8-litre V8, twin-turbo engine, but now developing 641 bhp (478 kW; 650 PS) and 500 lb·ft (680 N·m) of torque. Power is transmitted to the wheels through a seven-speed near instantaneous shift dual clutch gearbox.', '[\"Engine\",\"Interior Color\",\"Exterior Color\",\"VIN Number\"]', '[\"3.5L V6 306hp 277ft. lbs.\",\"Black\",\"Black\",\"JTHSE5BC4F5001631\"]', 1, 1, 0, 5, '2019-07-29 04:20:02', '2019-09-02 21:48:59'),
(11, 11, '2011 NISSAN JUKE SL', 49, 2011, '62662', 'USD', 0x24, '650.00', '550.00', '550.00', 1, '140.00', 1021, 43, 9, 11, 6, 6, '5d3ecbd52f13e.jpg', 'The 650S may look like a face-lifted 12C, but there’s a lot more to it: The revised styling pays tribute to the P1 hybrid, the body tub is lighter, and about 25 percent of the parts are new. The heart of the car (and the name) is the 650-PS (641-hp) 3.8-liter twin-turbo V-8. Mated to a seven-speed dual-clutch automatic, the 650S can hit 60 mph in less than 3 seconds. There’s also a Spider version. For more power, there’s the 675LT, which makes 666 hp and hits 60 mph in a claimed 2.9 seconds.\r\n\r\nThe 650S shares the MP4-12C\'s Carbon fiber reinforced polymer chassis, and is powered by the same McLaren M838T engine 3.8-litre V8, twin-turbo engine, but now developing 641 bhp (478 kW; 650 PS) and 500 lb·ft (680 N·m) of torque. Power is transmitted to the wheels through a seven-speed near instantaneous shift dual clutch gearbox.', '[\"Engine\",\"Exterior Color\",\"Interior Color\"]', '[\"1.6L Turbo I4 188hp 177ft. lbs.\",\"Gray\",\"Black\"]', 1, 1, 0, 46, '2019-07-29 04:35:01', '2019-08-31 11:30:42'),
(12, 12, '2015 LEXUS RC 350', 37, 2015, '200', NULL, NULL, '700.00', '350.00', '350.00', 1, '120.00', 721, 43, 5, 9, 6, 7, '5d3fc9a42a81f.jpg', 'The 650S may look like a face-lifted 12C, but there’s a lot more to it: The revised styling pays tribute to the P1 hybrid, the body tub is lighter, and about 25 percent of the parts are new. The heart of the car (and the name) is the 650-PS (641-hp) 3.8-liter twin-turbo V-8. Mated to a seven-speed dual-clutch automatic, the 650S can hit 60 mph in less than 3 seconds. There’s also a Spider version. For more power, there’s the 675LT, which makes 666 hp and hits 60 mph in a claimed 2.9 seconds.\r\n\r\nThe 650S shares the MP4-12C\'s Carbon fiber reinforced polymer chassis, and is powered by the same McLaren M838T engine 3.8-litre V8, twin-turbo engine, but now developing 641 bhp (478 kW; 650 PS) and 500 lb·ft (680 N·m) of torque. Power is transmitted to the wheels through a seven-speed near instantaneous shift dual clutch gearbox.', '[\"Drivetrain\",\"Engine\"]', '[\"AWD\",\"3.5L V6 306hp 277ft. lbs.\"]', 1, 1, 1, 30, '2019-07-29 22:37:56', '2019-11-21 05:23:38'),
(13, 12, '2013 CADILLAC CTS 3.6L PREMIUM', 10, 2013, '200', 'USD', 0x24, '200.00', '180.00', '180.00', 0, '160.00', 224, 45, 4, 11, 6, 6, '5d4016d208d3b.jpg', 'The 650S may look like a face-lifted 12C, but there’s a lot more to it: The revised styling pays tribute to the P1 hybrid, the body tub is lighter, and about 25 percent of the parts are new. The heart of the car (and the name) is the 650-PS (641-hp) 3.8-liter twin-turbo V-8. Mated to a seven-speed dual-clutch automatic, the 650S can hit 60 mph in less than 3 seconds. There’s also a Spider version. For more power, there’s the 675LT, which makes 666 hp and hits 60 mph in a claimed 2.9 seconds.\r\n\r\nThe 650S shares the MP4-12C\'s Carbon fiber reinforced polymer chassis, and is powered by the same McLaren M838T engine 3.8-litre V8, twin-turbo engine, but now developing 641 bhp (478 kW; 650 PS) and 500 lb·ft (680 N·m) of torque. Power is transmitted to the wheels through a seven-speed near instantaneous shift dual clutch gearbox.', '[\"Drivetrain\",\"Engine\"]', '[\"AWD\",\"3.6L V6 318hp 275ft. lbs.\"]', 1, 0, 0, 1, '2019-07-30 04:07:14', '2019-08-03 23:30:58'),
(14, 12, 'Lexus LFA \'2014', 37, 2014, '200', 'USD', 0x24, '770.00', '750.00', '750.00', 1, '140.00', 711, 43, 5, 10, 4, 7, '5d415ceaa3375.jpg', 'The 650S may look like a face-lifted 12C, but there’s a lot more to it: The revised styling pays tribute to the P1 hybrid, the body tub is lighter, and about 25 percent of the parts are new. The heart of the car (and the name) is the 650-PS (641-hp) 3.8-liter twin-turbo V-8. Mated to a seven-speed dual-clutch automatic, the 650S can hit 60 mph in less than 3 seconds. There’s also a Spider version. For more power, there’s the 675LT, which makes 666 hp and hits 60 mph in a claimed 2.9 seconds.\r\n\r\nThe 650S shares the MP4-12C\'s Carbon fiber reinforced polymer chassis, and is powered by the same McLaren M838T engine 3.8-litre V8, twin-turbo engine, but now developing 641 bhp (478 kW; 650 PS) and 500 lb·ft (680 N·m) of torque. Power is transmitted to the wheels through a seven-speed near instantaneous shift dual clutch gearbox.', '[\"Doors\",\"Int Color\",\"Ext Color\"]', '[\"5\",\"Tan\",\"Silver\"]', 1, 1, 0, 12, '2019-07-31 03:18:34', '2019-11-21 08:59:41'),
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
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;

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
(51, 7, '5d678fb08ed2a.jpg', '2019-08-29 02:41:20', '2019-08-29 02:41:20'),
(52, 1, '5df0a28f1108f.jpg', '2019-12-11 04:02:23', '2019-12-11 04:02:23'),
(53, 2, '5df0a309a1d89.jpg', '2019-12-11 04:04:25', '2019-12-11 04:04:25'),
(54, 3, '5df47e47e9067.jpg', '2019-12-14 02:16:40', '2019-12-14 02:16:40');

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
-- Table structure for table `cylinders`
--

DROP TABLE IF EXISTS `cylinders`;
CREATE TABLE IF NOT EXISTS `cylinders` (
  `id` int(200) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `status` varchar(30) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cylinders`
--

INSERT INTO `cylinders` (`id`, `name`, `status`, `created_on`) VALUES
(1, 'sss', '1', '2019-12-10 08:06:06'),
(2, 'cylinders', '1', '2019-12-10 10:24:33');

-- --------------------------------------------------------

--
-- Table structure for table `drive_type`
--

DROP TABLE IF EXISTS `drive_type`;
CREATE TABLE IF NOT EXISTS `drive_type` (
  `id` int(200) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `status` varchar(30) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `drive_type`
--

INSERT INTO `drive_type` (`id`, `name`, `status`, `created_on`) VALUES
(1, 'test_drive', '1', '2019-12-10 10:24:20');

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
-- Table structure for table `engine_capacity`
--

DROP TABLE IF EXISTS `engine_capacity`;
CREATE TABLE IF NOT EXISTS `engine_capacity` (
  `id` int(200) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `status` varchar(30) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `engine_capacity`
--

INSERT INTO `engine_capacity` (`id`, `name`, `status`, `created_on`) VALUES
(1, 'FADASDA', '1', '2019-12-11 07:56:46');

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
-- Table structure for table `fuel_economy`
--

DROP TABLE IF EXISTS `fuel_economy`;
CREATE TABLE IF NOT EXISTS `fuel_economy` (
  `id` int(200) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `status` varchar(30) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fuel_economy`
--

INSERT INTO `fuel_economy` (`id`, `name`, `status`, `created_on`) VALUES
(1, 'fuel economy', '1', '2019-12-10 10:27:23');

-- --------------------------------------------------------

--
-- Table structure for table `fuel_tank_capacity`
--

DROP TABLE IF EXISTS `fuel_tank_capacity`;
CREATE TABLE IF NOT EXISTS `fuel_tank_capacity` (
  `id` int(200) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `status` varchar(30) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fuel_tank_capacity`
--

INSERT INTO `fuel_tank_capacity` (`id`, `name`, `status`, `created_on`) VALUES
(1, 'capacity', '1', '2019-12-10 10:27:32');

-- --------------------------------------------------------

--
-- Table structure for table `fuel_type`
--

DROP TABLE IF EXISTS `fuel_type`;
CREATE TABLE IF NOT EXISTS `fuel_type` (
  `id` int(200) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `status` varchar(30) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fuel_type`
--

INSERT INTO `fuel_type` (`id`, `name`, `status`, `created_on`) VALUES
(1, 'fuel type', '1', '2019-12-10 10:29:23'),
(2, 'Petrol', '1', '2019-12-14 06:13:50'),
(3, 'Diesel', '1', '2019-12-14 06:14:42');

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
-- Table structure for table `height`
--

DROP TABLE IF EXISTS `height`;
CREATE TABLE IF NOT EXISTS `height` (
  `id` int(200) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `status` varchar(30) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `height`
--

INSERT INTO `height` (`id`, `name`, `status`, `created_on`) VALUES
(1, '22', '1', '2019-12-10 10:33:47');

-- --------------------------------------------------------

--
-- Table structure for table `horsepower`
--

DROP TABLE IF EXISTS `horsepower`;
CREATE TABLE IF NOT EXISTS `horsepower` (
  `id` int(200) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `status` varchar(30) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `horsepower`
--

INSERT INTO `horsepower` (`id`, `name`, `status`, `created_on`) VALUES
(1, 'hourse power', '1', '2019-12-10 10:29:37');

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
-- Table structure for table `length`
--

DROP TABLE IF EXISTS `length`;
CREATE TABLE IF NOT EXISTS `length` (
  `id` int(200) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `status` varchar(30) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `length`
--

INSERT INTO `length` (`id`, `name`, `status`, `created_on`) VALUES
(1, '1002', '1', '2019-12-10 10:33:38');

-- --------------------------------------------------------

--
-- Table structure for table `make`
--

DROP TABLE IF EXISTS `make`;
CREATE TABLE IF NOT EXISTS `make` (
  `id` int(200) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `status` varchar(30) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `make`
--

INSERT INTO `make` (`id`, `name`, `status`, `created_on`) VALUES
(1, 'make', '1', '2019-12-10 10:29:48'),
(2, 'BMW', '1', '2019-12-14 06:53:38'),
(3, 'AUDI', '1', '2019-12-14 06:53:53');

-- --------------------------------------------------------

--
-- Table structure for table `model`
--

DROP TABLE IF EXISTS `model`;
CREATE TABLE IF NOT EXISTS `model` (
  `id` int(200) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `status` varchar(30) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `model`
--

INSERT INTO `model` (`id`, `name`, `status`, `created_on`) VALUES
(1, 'model', '1', '2019-12-10 10:29:57');

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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `slug`, `details`, `meta_tag`, `meta_description`) VALUES
(1, 'About Us', 'about', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', NULL, NULL),
(2, 'Privacy & Policy', 'privacy', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 'test,test1,test2,test3', 'Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.'),
(3, 'Terms & Condition', 'termsu', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 't1,t2,t3,t4', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.<br>'),
(7, 'Dynamic Page', 'dynamic-page-OmtFT-7', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 'dynamic,page,dynamic-pagre', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College'),
(8, 'test', 'test', 'test', NULL, NULL);

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
-- Table structure for table `seating_capacity`
--

DROP TABLE IF EXISTS `seating_capacity`;
CREATE TABLE IF NOT EXISTS `seating_capacity` (
  `id` int(200) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `status` varchar(30) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `seating_capacity`
--

INSERT INTO `seating_capacity` (`id`, `name`, `status`, `created_on`) VALUES
(1, 'seating_capacity', '1', '2019-12-10 10:30:13');

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `image`, `name`, `rank`, `comment`, `created_at`, `updated_at`) VALUES
(2, '1562488087adult-boy-casual-220453.jpg', 'Json Roy', 'CEO, APPLE', 'That conviction is where the process of change really begins—with the realization that just because a certain abuse has taken place in the past doesn’t mean that we have to tole. That conviction is where the process of change really begins', '2019-07-07 02:28:07', '2019-07-07 02:28:07');

-- --------------------------------------------------------

--
-- Table structure for table `top_speed`
--

DROP TABLE IF EXISTS `top_speed`;
CREATE TABLE IF NOT EXISTS `top_speed` (
  `id` int(200) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `status` varchar(30) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `top_speed`
--

INSERT INTO `top_speed` (`id`, `name`, `status`, `created_on`) VALUES
(1, 'top speed', '1', '2019-12-10 10:31:47');

-- --------------------------------------------------------

--
-- Table structure for table `torque`
--

DROP TABLE IF EXISTS `torque`;
CREATE TABLE IF NOT EXISTS `torque` (
  `id` int(200) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `status` varchar(30) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `torque`
--

INSERT INTO `torque` (`id`, `name`, `status`, `created_on`) VALUES
(1, 'torque', '1', '2019-12-10 10:31:59');

-- --------------------------------------------------------

--
-- Table structure for table `transmission`
--

DROP TABLE IF EXISTS `transmission`;
CREATE TABLE IF NOT EXISTS `transmission` (
  `id` int(200) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `status` varchar(30) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transmission`
--

INSERT INTO `transmission` (`id`, `name`, `status`, `created_on`) VALUES
(1, 'transmission', '1', '2019-12-10 10:32:10');

-- --------------------------------------------------------

--
-- Table structure for table `trunk_capacity`
--

DROP TABLE IF EXISTS `trunk_capacity`;
CREATE TABLE IF NOT EXISTS `trunk_capacity` (
  `id` int(200) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `status` varchar(30) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `trunk_capacity`
--

INSERT INTO `trunk_capacity` (`id`, `name`, `status`, `created_on`) VALUES
(1, 'truck capacity', '1', '2019-12-10 10:32:22');

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

-- --------------------------------------------------------

--
-- Table structure for table `wheelbase`
--

DROP TABLE IF EXISTS `wheelbase`;
CREATE TABLE IF NOT EXISTS `wheelbase` (
  `id` int(200) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `status` varchar(30) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `wheelbase`
--

INSERT INTO `wheelbase` (`id`, `name`, `status`, `created_on`) VALUES
(1, 'wheelbase', '1', '2019-12-10 10:32:38');

-- --------------------------------------------------------

--
-- Table structure for table `width`
--

DROP TABLE IF EXISTS `width`;
CREATE TABLE IF NOT EXISTS `width` (
  `id` int(200) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `status` varchar(30) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `width`
--

INSERT INTO `width` (`id`, `name`, `status`, `created_on`) VALUES
(1, '3003', '1', '2019-12-10 10:33:27');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
