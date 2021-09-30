-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 01, 2021 at 12:39 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Blog`
--
CREATE DATABASE IF NOT EXISTS `Blog` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `Blog`;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--
-- Creation: Sep 14, 2021 at 09:11 PM
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `categories`:
--

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`) VALUES
(1, 'Wellness', '2021-09-17 20:19:23'),
(2, 'Self help', '2021-09-17 20:19:23'),
(3, 'Motivational', '2021-09-17 20:19:23'),
(4, 'Psychology', '2021-09-27 21:11:41');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--
-- Creation: Sep 20, 2021 at 11:12 PM
-- Last update: Sep 30, 2021 at 10:24 PM
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment_body` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `comments`:
--

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `name`, `email`, `comment_body`, `created_at`) VALUES
(34, 0, 'zayno', 'zayno70@gmail.com', 'Great article keep up the good work buddy!!', '2021-09-30 22:24:37');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--
-- Creation: Sep 29, 2021 at 02:41 PM
-- Last update: Sep 30, 2021 at 10:17 PM
--

CREATE TABLE IF NOT EXISTS `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `post`:
--

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `category_id`, `user_id`, `title`, `slug`, `body`, `created_at`) VALUES
(14, 2, 0, 'Codeigniter 3.11.1 update in my MYSQL', 'success story from the field of Development', '						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sem urna, tempor ac leo et, semper commodo sem. Fusce pellentesque sem a nisi blandit mattis. Nullam malesuada nisi vel sem ullamcorper, at hendrerit diam auctor. Sed hendrerit metus vitae dui auctor volutpat. Curabitur nisi lacus, iaculis ac dui sit amet, tempus mattis arcu. In sagittis pharetra felis, eu porttitor eros condimentum mattis. Fusce convallis, nibh at tempor porta, nunc leo condimentum enim, ut ullamcorper urna augue quis nulla. Aenean felis mauris, tincidunt et mi a, suscipit sagittis libero. In fermentum sapien aliquam posuere fringilla. Sed id risus ut nisi mattis porttitor.\r\n\r\nUt in augue non dolor egestas pretium quis vitae ex. Donec justo ipsum, dictum in semper non, rhoncus vitae orci. Nulla ac tincidunt felis, ut finibus leo. Pellentesque in diam sed eros pellentesque tempus. Ut ut arcu dapibus, lacinia diam ut, laoreet ante. Vestibulum nec risus lobortis, ullamcorper lacus at, auctor dui. Quisque at commodo enim. Vivamus vel sapien vitae velit aliquet tincidunt. Morbi eu fermentum odio. Mauris suscipit lorem eu maximus convallis.\r\n\r\nIn aliquet interdum nisi. Sed sed purus a eros scelerisque luctus eu ac tellus. Duis sed nisi malesuada, dapibus eros ac, tincidunt lectus. Praesent eu velit eget tellus congue scelerisque eu in orci. Praesent lacinia eu mi id varius. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur non tortor vel ex suscipit convallis. Donec lacinia orci id ante venenatis, sit amet lacinia elit feugiat. Aliquam mollis, sapien et pellentesque blandit, dolor eros ultricies velit, ut euismod elit felis in nisl. Vivamus efficitur volutpat lacus in feugiat. Curabitur nec mauris id massa lacinia semper. Vivamus elit turpis, posuere non ullamcorper vitae, aliquam id ipsum. Nullam vestibulum sem ut tellus dictum feugiat. Maecenas mi neque, hendrerit et dolor ac, efficitur dapibus sapien. Fusce viverra ullamcorper tortor, ac mattis nisl ornare condimentum. In sed sem dui.																											', '2021-09-11 02:11:28'),
(15, 3, 0, 'Benefits of learning a framework', 'success story from the field of Development !!!!', '																								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sem urna, tempor ac leo et, semper commodo sem. Fusce pellentesque sem a nisi blandit mattis. Nullam malesuada nisi vel sem ullamcorper, at hendrerit diam auctor. Sed hendrerit metus vitae dui auctor volutpat. Curabitur nisi lacus, iaculis ac dui sit amet, tempus mattis arcu. In sagittis pharetra felis, eu porttitor eros condimentum mattis. Fusce convallis, nibh at tempor porta, nunc leo condimentum enim, ut ullamcorper urna augue quis nulla. Aenean felis mauris, tincidunt et mi a, suscipit sagittis libero. In fermentum sapien aliquam posuere fringilla. Sed id risus ut nisi mattis porttitor.\r\n\r\nUt in augue non dolor egestas pretium quis vitae ex. Donec justo ipsum, dictum in semper non, rhoncus vitae orci. Nulla ac tincidunt felis, ut finibus leo. Pellentesque in diam sed eros pellentesque tempus. Ut ut arcu dapibus, lacinia diam ut, laoreet ante. Vestibulum nec risus lobortis, ullamcorper lacus at, auctor dui. Quisque at commodo enim. Vivamus vel sapien vitae velit aliquet tincidunt. Morbi eu fermentum odio. Mauris suscipit lorem eu maximus convallis.\r\n\r\nIn aliquet interdum nisi. Sed sed purus a eros scelerisque luctus eu ac tellus. Duis sed nisi malesuada, dapibus eros ac, tincidunt lectus. Praesent eu velit eget tellus congue scelerisque eu in orci. Praesent lacinia eu mi id varius. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur non tortor vel ex suscipit convallis. Donec lacinia orci id ante venenatis, sit amet lacinia elit feugiat. Aliquam mollis, sapien et pellentesque blandit, dolor eros ultricies velit, ut euismod elit felis in nisl. Vivamus efficitur volutpat lacus in feugiat. Curabitur nec mauris id massa lacinia semper. Vivamus elit turpis, posuere non ullamcorper vitae, aliquam id ipsum. Nullam vestibulum sem ut tellus dictum feugiat. Maecenas mi neque, hendrerit et dolor ac, efficitur dapibus sapien. Fusce viverra ullamcorper tortor, ac mattis nisl ornare condimentum. In sed sem dui.																				', '2021-09-16 21:58:43');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--
-- Creation: Sep 29, 2021 at 02:40 PM
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `user`:
--

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `address`, `email`, `username`, `password`, `register_date`) VALUES
(1, 'zayno', 'uteweg z/n', 'design9em@outlook.com', 'zayno7007', '25d55ad283aa400af464c76d713c07ad', '2021-09-29 16:00:42'),
(2, 'zayno', 'uteweg z/n', 'design9em@outlook.com', 'Admin7007', '25d55ad283aa400af464c76d713c07ad', '2021-09-29 16:01:47'),
(3, 'Robert', 'uteweg z/n', 'zayno70@gmail.com', 'robert074', '25d55ad283aa400af464c76d713c07ad', '2021-09-29 20:06:17');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
