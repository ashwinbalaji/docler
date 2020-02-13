-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 23, 2019 at 02:53 PM
-- Server version: 10.2.22-MariaDB
-- PHP Version: 7.2.5

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
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `car_name` varchar(255) DEFAULT NULL,
  `price` varchar(200) NOT NULL,
  `make_id` int(11) NOT NULL,
  `model_id` int(11) NOT NULL,
  `engine_capacity_id` int(11) NOT NULL,
  `cylinder_id` int(11) NOT NULL,
  `drive_Type_id` int(11) NOT NULL,
  `fuel_tank_capacity_id` int(11) NOT NULL,
  `fuel_economy_id` int(11) NOT NULL,
  `fuel_type_id` int(11) NOT NULL,
  `horsepower_id` int(11) NOT NULL,
  `torque_id` int(11) NOT NULL,
  `transmission_id` int(11) NOT NULL,
  `top_speed_id` int(11) NOT NULL,
  `seating_capacity_id` int(11) NOT NULL,
  `acceleration_id` int(11) NOT NULL,
  `length_id` int(11) NOT NULL,
  `width_id` int(11) NOT NULL,
  `wheelbase_id` int(11) NOT NULL,
  `trunk_capacity_id` int(11) NOT NULL,
  `featured_image` varchar(255) DEFAULT NULL,
  `features` text DEFAULT NULL,
  `status` int(3) NOT NULL DEFAULT 1 COMMENT '1 - active, 0 - deactive',
  `admin_status` int(3) NOT NULL DEFAULT 2 COMMENT '2 - pending, 1 - approve, 0 - reject	',
  `featured` int(3) NOT NULL DEFAULT 0,
  `views` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cars_make` (`make_id`),
  ADD KEY `fk_cars_model` (`model_id`),
  ADD KEY `fk_cars_engine_capacity` (`engine_capacity_id`),
  ADD KEY `fk_cars_cylinder` (`cylinder_id`),
  ADD KEY `fk_cars_drive_type` (`drive_Type_id`),
  ADD KEY `fk_cars_fuel_tank_capacity` (`fuel_tank_capacity_id`),
  ADD KEY `fk_cars_fuel_economy` (`fuel_economy_id`),
  ADD KEY `fk_cars_fuel_type` (`fuel_type_id`),
  ADD KEY `fk_cars_horsepower` (`horsepower_id`),
  ADD KEY `fk_cars_torque` (`torque_id`),
  ADD KEY `fk_cars_transmission` (`transmission_id`),
  ADD KEY `fk_cars_top_speed` (`top_speed_id`),
  ADD KEY `fk_cars_seating_capacity` (`seating_capacity_id`),
  ADD KEY `fk_cars_acceleration` (`acceleration_id`),
  ADD KEY `fk_cars_length` (`length_id`),
  ADD KEY `fk_cars_width` (`width_id`),
  ADD KEY `fk_cars_wheelbase` (`wheelbase_id`),
  ADD KEY `fk_cars_trunk_capacity_id` (`trunk_capacity_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cars`
--
ALTER TABLE `cars`
  ADD CONSTRAINT `fk_cars_acceleration` FOREIGN KEY (`acceleration_id`) REFERENCES `acceleration` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_cars_cylinder` FOREIGN KEY (`cylinder_id`) REFERENCES `cylinders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_cars_drive_type` FOREIGN KEY (`drive_Type_id`) REFERENCES `drive_type` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_cars_engine_capacity` FOREIGN KEY (`engine_capacity_id`) REFERENCES `engine_capacity` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_cars_fuel_economy` FOREIGN KEY (`fuel_economy_id`) REFERENCES `fuel_economy` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_cars_fuel_tank_capacity` FOREIGN KEY (`fuel_tank_capacity_id`) REFERENCES `fuel_tank_capacity` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_cars_fuel_type` FOREIGN KEY (`fuel_type_id`) REFERENCES `fuel_type` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_cars_horsepower` FOREIGN KEY (`horsepower_id`) REFERENCES `horsepower` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_cars_length` FOREIGN KEY (`length_id`) REFERENCES `length` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_cars_make` FOREIGN KEY (`make_id`) REFERENCES `make` (`id`),
  ADD CONSTRAINT `fk_cars_model` FOREIGN KEY (`model_id`) REFERENCES `model` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_cars_seating_capacity` FOREIGN KEY (`seating_capacity_id`) REFERENCES `seating_capacity` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_cars_top_speed` FOREIGN KEY (`top_speed_id`) REFERENCES `top_speed` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_cars_torque` FOREIGN KEY (`torque_id`) REFERENCES `torque` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_cars_transmission` FOREIGN KEY (`transmission_id`) REFERENCES `transmission` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_cars_trunk_capacity_id` FOREIGN KEY (`trunk_capacity_id`) REFERENCES `trunk_capacity` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_cars_wheelbase` FOREIGN KEY (`wheelbase_id`) REFERENCES `wheelbase` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_cars_width` FOREIGN KEY (`width_id`) REFERENCES `height` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
