-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 
-- Версия на сървъра: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db`
--
CREATE DATABASE IF NOT EXISTS `db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db`;

-- --------------------------------------------------------

--
-- Структура на таблица `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `price` int(11) NOT NULL,
  `age` text,
  `weight` text,
  `descr` longtext,
  `link` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Схема на данните от таблица `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `age`, `weight`, `descr`, `link`) VALUES
(4, 'American Bobtail', 150, '8 Months', '1 kg.', 'Sarah can easily learn to open doors, drawers and cabinets. She is not aggressive and rarely meows. Has good relationships with other cats, and also with some dogs.', 'res/americanbobtail.jpg\r\n'),
(6, 'Japanese Bobtail', 150, '3 Months\r\n', '0,5 kg.', 'Leo is very friendly and gets easily attached to family members. His tail is unusually short which is a typical sign of his breed.', 'res/japanesebobtail.jpg'),
(7, 'Kurilian Bobtail', 200, '2 Years\r\n', '3 kg.', 'Ana has a lot of features a dog would have- like playing catch with its owner. Loyal, agile and very smart. These qualities make her perfect for a \'guard cat\'.\r\n', 'res/kurilianbobtail.jpg'),
(8, 'Scottish Fold_1', 200, '2 Months\r\n', '0,3 kg.', 'Meggie is gregarious, loves to be petted and to do tricks for its owner. She is very playful, friendly and loves human attention and affection.', 'res/scottishfold1.jpg'),
(9, 'Scottish Fold_2', 600, '3 Months\r\n', '0,4 kg.', 'Max is very calm and friendly, but can also be very energetic and playful. He gets easily attached and gets along with adults as well as with kids. He craves his owner\'s attention.', 'res/scottishfold2.jpg'),
(10, 'Scottish Fold_3', 350, '1 Year\r\n', '2 kg.', 'George is very communicative and easily adapts to a new environment. He loves human company and is perfect for a pet. Has no trouble getting along with other pets. \r\n', 'res/scottishfold3.jpg'),
(11, 'Scottish Fold_4', 300, '1 Year\r\n', '1 kg.', 'Moni is very smart and likes toys and games. Nothing makes her happier than the opportunity to be with people and have fun with them.\r\n', 'res/scottishfold4.jpg'),
(12, 'Egyptian Mau_1', 420, '1 Year\r\n\r\n\r\n', '1,7 kg.', 'Pippy loves climbing high. She is very fast which makes her a good hunter. When she is happy she stands on her back paws and starts hopping like a puppy.\r\n', 'res/egyptianmau1.jpg'),
(13, 'Egyptian Mau_2', 280, '8 Months\r\n', '1 kg.', 'The curious Emma can have a very strong bond with only one member of the family. She isn\'t interested in strangers and avoids them. Emma is very active and playful.', 'res/egyptianmau2.jpg'),
(14, 'Egyptian Mau_3', 660, '1 Year 2 Months\r\n', '2 kg.', 'Nicky hates being interrupted while doing his favorite things- like taking a nap in the early afternoon. Doesn\'t like being alone, and also hates changes in climates and being cold. ', 'res/egyptianmau3.jpg'),
(15, 'Egyptian Mau_4', 420, '4 Months\r\n', '0,3 kg.', 'Mary has the habit of picking her \'very special person\'. That person is hers and only hers. On her own territory she is very open.', 'res/egyptianmau4.jpg'),
(16, 'Maine coon_1', 300, '4 Months\r\n', '0,3 kg.', 'Hannah gets along very well with children, but overall she is very shy and delicate. She has likeable characteristics, and is also very smart, playful and takes care of herself, rarely requires being taken care of. ', 'res/mainecoon1.jpg'),
(17, 'Maine coon_2', 300, '4 Months.  \r\n', '0,3 kg.', 'Lilly is used to living in harsh environments, and also likes sleeping in weird places. Has a quiet, calm voice. Needs a lot of space.\r\nAge: 4 Months. ', 'res/mainecoon2.jpg'),
(18, 'Maine coon_3', 360, '4 Months\r\n', '0,25 kg.', 'Theo gets used to its owner\'s character and follows him everywhere like a dog. Loves games, even in water. Theo loves being in a bathtub.', 'res/mainecoon3.jpg'),
(19, 'Maine coon_4', 560, '2 Years 2 Months\r\n', '4 kg.\r\n', 'Zorro\'s look shows respect. He can remember a lot of commands. Zoro can understand what is required of him just by following his owner\'s gestures.', 'res/mainecoon4.jpg'),
(20, 'Himalayan cat_1', 350, '8 Months\r\n', '0,9 kg.', 'Bella is smart and very communicative. She is very dependent on her owner\'s company and suffers immensely while he is away. Always wants to be held and petted. ', 'res/himcat1.jpg'),
(21, 'Himalayan cat_2', 570, '1 Year 5 Months\r\n', '2 kg.', 'Stella is quiet and calm, can excellently adopt to living in an apartment. She can play with a ball of crushed paper for hours. \r\n', 'res/himcat2.jpg'),
(22, 'Himalayan cat_3', 850, '3 Months\r\n', '0,3 kg.', 'Brothers Leo and Deo are very playful and get easily attached, but are also very proud and collected. They aren\'t afraid of dogs and other cats, but like to play with them. ', 'res/himcat3.jpg'),
(23, 'Himalayan cat_4', 400, '2 Years\r\n', '3 kg.', 'Alex loves playing with kids and would never harm them. When he doesn\'t like something he doesn\'t show aggression but rather retreats to a quiet place he likes.', 'res/himcat4.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;--
-- Database: `registration`
--
CREATE DATABASE IF NOT EXISTS `registration` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `registration`;

-- --------------------------------------------------------

--
-- Структура на таблица `member`
--

CREATE TABLE `member` (
  `mem_id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `address` longtext NOT NULL,
  `contact` text NOT NULL,
  `gender` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Схема на данните от таблица `member`
--

INSERT INTO `member` (`mem_id`, `username`, `password`, `fname`, `lname`, `address`, `contact`, `gender`) VALUES
(53, 'tanche', '123456', 'Tanya', 'Hristova', 'tanche98@gmail.com', '123456', 'female'),
(55, 'dconeva', '19651409', 'Daniela', 'Coneva', 'dconeva@abv.bg', '', 'female'),
(62, 'sdfg', 'dcfg', 'afvg', 'sdfg', 'sdf', '', 'female'),
(61, 'zxc', 'zxcv', 'zxcv', 'zxcv', 'zxcv', 'xcvb', 'male'),
(60, 'xcvbg', 'cvb', 'blah', 'sdf', 'sdfg', 'zxdcf', 'male'),
(59, 'fvgb', 'dfxcgv', 'dfg', 'bn', 'dfgh', 'xdcfgh', 'male'),
(58, 'marti', '123456', 'sgdrg', 'fgrf', 'fd', '', 'female'),
(57, 'qqqq', 'wwww', 'D', 'k', 'dsad', 'asdas', 'male'),
(56, 'ison4eto', 'shkembechorba', 'Iskra', 'Trifonova', 'ison4eto635@gmail.com', '', 'female'),
(54, 'stefan_c', 'Tanya#1998', 'Stefan', 'Tsonev', 'stefan_c@abv.bg', '', 'male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`mem_id`);
ALTER TABLE `member` ADD FULLTEXT KEY `username` (`username`,`password`,`fname`,`lname`,`address`,`contact`,`gender`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
