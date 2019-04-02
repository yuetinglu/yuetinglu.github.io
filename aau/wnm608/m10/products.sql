-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 20, 2018 at 12:13 AM
-- Server version: 5.6.41-84.1
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yuetingl_WNM608`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `email` varchar(128) NOT NULL,
  `url` varchar(256) NOT NULL,
  `price` decimal(11,2) NOT NULL,
  `description` varchar(512) NOT NULL,
  `data_create` datetime NOT NULL,
  `data_modify` datetime NOT NULL,
  `main_image` varchar(128) NOT NULL,
  `other_images` varchar(512) NOT NULL,
  `category` varchar(16) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `email`, `url`, `price`, `description`, `data_create`, `data_modify`, `main_image`, `other_images`, `category`) VALUES
(1, 'Golden gate', '', 'Golden gate.php', '900.00', '12 x 24 x 1.5, 2016, oil colors on canvas', '2018-11-14 15:53:45', '2018-11-14 15:53:45', 'img/1.png', '', 'Painting'),
(2, 'Coastline', '', 'Coastline.php', '600.00', '16 X 12 X 0.8, 2016, oil on canvas', '2018-11-14 15:53:45', '2018-11-14 15:53:45', 'img/2.png', '', 'Painting'),
(3, 'Rock and sand', '', 'Rock and sand.php', '3600.00', '30 x 40 x 1.5, 2017, oil on canvas', '2018-11-14 15:53:45', '2018-11-14 15:53:45', 'img/3.png', '', 'Painting'),
(4, 'Rock in water', '', 'Rock in water.php', '500.00', '11 x 14 x 1.5, 2017, oil on canvas', '2018-11-14 15:53:45', '2018-11-14 15:53:45', 'img/4.png', '', 'Painting'),
(5, 'Monterey beach', '', 'Monterey beach.php', '600.00', '24 x 8 x 0.8, 2017, oil on canvas', '2018-11-14 15:53:45', '2018-11-14 15:53:45', 'img/5.png', '', 'Painting'),
(6, 'Notleys Landing viewpoint', '', 'Notleys Landing viewpoint.php', '600.00', '24 x 12 x 1.5, 2017, oil on canvas', '2018-11-14 15:53:45', '2018-11-14 15:53:45', 'img/6.png', '', 'Painting'),
(7, 'Cliff at Santa Cruz', '', 'Cliff at Santa Cruz.php', '2600.00', '36 x 24 x 1.5, 2017, oil on canvas', '2018-11-14 15:53:45', '2018-11-14 15:53:45', 'img/7.png', '', 'Painting'),
(8, 'Thornton State Beach', '', 'Thornton State Beach.php', '1000.00', '20 x 16 x 1.5, 2017, oil on canvas', '2018-11-14 15:53:45', '2018-11-14 15:53:45', 'img/8.png', '', 'Painting'),
(9, 'Muir Beach', '', 'Muir Beach.php', '250.00', '8 X 10 X 0.5, 2017, oil on canvas', '2018-11-14 15:53:45', '2018-11-14 15:53:45', 'img/9.png', '', 'Painting'),
(10, 'Cliff', '', 'Cliff.php', '500.00', '11 x 14 x 0.8, 2017, oil on canvas', '2018-11-14 15:53:45', '2018-11-14 15:53:45', 'img/10.png', '', 'Painting'),
(11, 'Surrounding', '', 'Surrounding.php', '900.00', '12 X 24 X 1.5, 2017, oil on canvas', '2018-11-14 15:53:45', '2018-11-14 15:53:45', 'img/11.png', '', 'Painting'),
(12, 'Cliff 2', '', 'Cliff 2.php', '600.00', '16 X 12 X 0.8, oil on canvas', '2018-11-14 15:53:45', '2018-11-14 15:53:45', 'img/12.png', '', 'Painting');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
