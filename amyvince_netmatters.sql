-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 27, 2023 at 10:19 AM
-- Server version: 8.0.30
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amyvince_netmatters`
--

-- --------------------------------------------------------

--
-- Table structure for table `email_info`
--

CREATE TABLE `email_info` (
  `name` text COLLATE utf8mb4_general_ci NOT NULL,
  `company` text COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `telephone` int NOT NULL,
  `subject` text COLLATE utf8mb4_general_ci NOT NULL,
  `message` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `email_info`
--

INSERT INTO `email_info` (`name`, `company`, `email`, `telephone`, `subject`, `message`) VALUES
('sss', 'PhantomFaery-inc', 'amy@amy.com', 3333, 'aaa', 'rfeff'),
('sss', 'PhantomFaery-inc', 'amy@amy.com', 0, 'sfvsv', 'aaa'),
('eeeeeee', 'eeee', 'amy@amy.com', 0, 'sfvsv', 'aaa');

-- --------------------------------------------------------

--
-- Table structure for table `netmatters_articles`
--

CREATE TABLE `netmatters_articles` (
  `news_id` int NOT NULL,
  `news_title` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `news_info` text COLLATE utf8mb4_general_ci NOT NULL,
  `news_image` text COLLATE utf8mb4_general_ci NOT NULL,
  `news_class` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `netmatters_articles`
--

INSERT INTO `netmatters_articles` (`news_id`, `news_title`, `news_info`, `news_image`, `news_class`) VALUES
(1, 'The Benefits of a Modern ', 'We Read a Bold Claim the Other Day That the Employee Intranet Was Dead.We couldnt Have Disagreed M...', '  \"img/the-benefits-of.webp\"  ', 1),
(2, 'June Notables 2022', 'Each month, every department recognises those who have gone above and beyond to\r\ndeliver excellence w...', '\"img/richard.webp\"', 2),
(3, 'SCS Graduates June 2022', 'The Netmatters SCS trainee scheme is completely unique to Netmatters, it enables individuals of a variety of different .........\r\n\r\n\r\n', '\"img/scs-graduates-june.jpg\"', 3);

-- --------------------------------------------------------

--
-- Table structure for table `netmatters_maps`
--

CREATE TABLE `netmatters_maps` (
  `id` int NOT NULL,
  `map_class` int NOT NULL,
  `map_images` text COLLATE utf8mb4_general_ci NOT NULL,
  `map_title` text COLLATE utf8mb4_general_ci NOT NULL,
  `map_info` text COLLATE utf8mb4_general_ci NOT NULL,
  `map_number` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `location` varchar(1000) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `netmatters_maps`
--

INSERT INTO `netmatters_maps` (`id`, `map_class`, `map_images`, `map_title`, `map_info`, `map_number`, `location`) VALUES
(1, 1, '\"img/london_office.jpg\"', 'London Office', 'Unit G6,<br>\r\nPixel Business Centre,<br>\r\n110 Brooker Road, Waltham Abbey,<br>\r\nLondon,<br>\r\nEN9 1JH', '02045 397354', '<iframe src=\"https://my.atlistmaps.com/map/0f9d663e-68b0-4271-8143-439f2c340042?share=true\" allow=\"geolocation\"  frameborder=\"0\"  width:\"100%\" height = \"250px\" border-radius-bottom-left = \"25px\" border-radius-bottom-right= \"25px\" scrolling=\"no\" allowfullscreen></iframe>'),
(2, 2, '\"img/cambridge_office.jpg\"', 'Cambridge Office', 'Unit 1.31,<br>\r\nSt John\'s Innovation Centre,<br>\r\nCowley Road, Milton,<br>\r\nCambridge,<br>\r\nCB4 0WS', '01223 37 57 72', '<iframe src=\"https://my.atlistmaps.com/map/a8b81bb8-e8a6-4f8d-931b-933fc7237b51?share=true\" allow=\"geolocation\"   frameborder=\"0\" \r\nwidth:\"100%\" height = \"250px\" border-radius-bottom-left = \"25px\" border-radius-bottom-right= \"25px\"  scrolling=\"no\" allowfullscreen></iframe>'),
(3, 3, '\"img/wymondham_office.jpg\"', 'Wymondham Office', 'Unit 15,<br>\r\nPenfold Drive,<br>\r\nGateway 11 Business Park,<br>\r\nWymondham, Norfolk,<br>\r\nNR18 0WZ', '01603 70 40 20', '<iframe src=\"https://my.atlistmaps.com/map/74d5ecfa-69fd-4985-8aea-17b5972ba81f?share=true\" allow=\"geolocation\" frameborder=\"0\" \r\n\r\nwidth:\"100%\" height = \"250px\" border-radius-bottom-left = \"25px\" border-radius-bottom-right= \"25px\" scrolling=\"no\" allowfullscreen></iframe>'),
(4, 4, '\"img/yarmouth_office.jpg\"', 'Great Yarmouth Office', 'Suite F23,<br>\r\nBeacon Innovation Centre,<br>\r\nBeacon Park, Gorleston,<br>\r\nGreat Yarmouth, Norfolk,<br>\r\nNR31 7RA', '01493 60 32 04', '<iframe src=\"https://my.atlistmaps.com/map/2d84cf81-a4fb-46b7-8bc7-2d7545652519?share=true\" allow=\"geolocation\"  frameborder=\"0\" \r\nwidth:\"100%\" height = \"250px\" border-radius-bottom-left = \"25px\" border-radius-bottom-right= \"25px\" scrolling=\"no\" allowfullscreen></iframe>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `netmatters_articles`
--
ALTER TABLE `netmatters_articles`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `netmatters_maps`
--
ALTER TABLE `netmatters_maps`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `netmatters_articles`
--
ALTER TABLE `netmatters_articles`
  MODIFY `news_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `netmatters_maps`
--
ALTER TABLE `netmatters_maps`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
