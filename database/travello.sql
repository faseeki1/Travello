-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2020 at 01:53 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travello`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'unread',
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `subject`, `message`, `status`, `date`, `time`) VALUES
(1, 'Swanky James', 'faseekiswenky@gmail.com', 'Request', 'Please do you guys go to London?', 'read', '09th of Septemper 2020', '1599649804'),
(2, 'Tems Johnson', 'fredo@gmail.com', 'Request', 'Please do you guys travel to Ibadan?', 'read', '09th of Septemper 2020', '1599649908'),
(3, 'Ban Lee', 'balogun@maek.com', 'Complaint', 'I sent a message last week and i didn\'t receive any replies. Please what\'s going on?', 'read', '09th of Septemper 2020', '1599650445'),
(4, 'Ajibola A', 'john@gmail.com', 'I\'m confused', 'Hello, please I need your assistance', 'read', '09th of Septemper 2020', '1599660094'),
(5, 'Martins Makanjuola', 'ope@gmail.com', 'I dey H sir', 'This is a message to tell you how much I dey H.', 'read', '09th of Septemper 2020', '1599662556'),
(6, 'Balogun Adebayo', 'balogun@maek.com', 'Request', 'I want to request for your assistance in my registration.', 'read', '09th of Septemper 2020', '1599666072'),
(7, 'Habeeb Abdullahi', 'habeeb@gmail.com', 'Retirement Notification', 'Hello, I am Habib, and I wish to notify you of my retirement from Google Inc. This is an official request, a formal procedure will be made soon.', 'read', '10th of Septemper 2020', '1599729957'),
(8, 'Taofeek Olanrewaju', 'amanda@gmail.com', 'Request For internship', 'This is to request for an internship interview', 'read', '10th of Septemper 2020', '1599734052'),
(9, 'swanky james', 'john@gmail.com', 'Hello sir', 'Hello sirHello sir Hello sirHello sirHello sirHello sir Hello sirHello sirHello sirHello sirHello sirHello sirHello sirHello sirHello sirHello sirHello sirHello sirHello sirHello sirHello sirHello sirHello sirHello sirHello sirHello sirHello sirHello sirH', 'read', '10th of Septemper 2020', '1599757127');

-- --------------------------------------------------------

--
-- Table structure for table `tour_places`
--

CREATE TABLE `tour_places` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `locality` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `image_main` varchar(255) NOT NULL,
  `image_alt` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `include_hotel` varchar(255) NOT NULL DEFAULT 'Hotel not Included',
  `include_flight` varchar(255) NOT NULL DEFAULT 'Flight not Included',
  `include_refreshment` varchar(255) NOT NULL DEFAULT 'Refreshment not Included',
  `include_movie` varchar(255) NOT NULL DEFAULT 'Movies not included',
  `status` varchar(255) NOT NULL DEFAULT 'uploaded',
  `months` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tour_places`
--

INSERT INTO `tour_places` (`id`, `name`, `locality`, `state`, `image_main`, `image_alt`, `price`, `include_hotel`, `include_flight`, `include_refreshment`, `include_movie`, `status`, `months`) VALUES
(6, 'Calabar Municipal', 'Calabar', 'Cross river', 'destination_7.jpg', '', '5000', 'Not included', 'Not included', 'Not included', 'Not included', 'upload', 'january febuary march april'),
(7, 'Tinapa Resort', 'Calabar', 'Cross river', 'destination_9.jpg', 'destination_5.jpg', '19000', 'Not included', 'Not included', 'Not included', 'Not included', 'upload', 'march april may june'),
(8, 'Shoprite mall', 'Ilorin', 'Kwara', 'destination_3.jpg', 'destination_6.jpg', '5000', 'Included', 'Included', 'Not included', 'Not included', 'upload', 'julu august september'),
(9, 'Oyo Museum', 'Ibadan Central', 'Oyo', 'destination_8.jpg', 'destination_1.jpg', '5800', 'Not included', 'Not included', 'Included', 'Not included', 'upload', 'october november'),
(10, 'Obudu Cattle Ranch', 'Obudu', 'Cross river', 'destination_4.jpg', 'destination_6.jpg', '2000', 'Included', 'Not included', 'Included', 'Not included', 'upload', 'december'),
(11, 'Marina Resorts', 'Calabar Municipal', 'Cross river', 'destination_1 - Copy (2).jpg', 'destination_2.jpg', '3000', 'Not included', 'Not included', 'Not included', 'Not included', 'upload', 'january febuary'),
(12, 'Codesquad LLC', 'Lajonrin', 'Kwara', 'destination_8.jpg', '', '5000', 'Not included', 'Not included', 'Not included', 'Not included', 'upload', 'febuary march'),
(13, 'Terminus Beach', 'Jos', 'plateau', 'destination_7.jpg', 'destination_2 - Copy.jpg', '3000', 'Not included', 'Not included', 'Not included', 'Not included', 'upload', 'may june'),
(14, 'Onne Depot', 'Onne', 'Port-harcourt', 'destination_6.jpg', 'destination_9.jpg', '10000', 'Not included', 'Not included', 'Not included', 'Not included', 'upload', 'june july august'),
(15, 'Rowland Centre', 'Enugu', 'Enugu', 'destination_4.jpg', 'destination_4.jpg', '8750', 'Included', 'Included', 'Included', 'Included', 'upload', 'december febuary march');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `last_login` varchar(255) NOT NULL,
  `login_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `email`, `password`, `last_login`, `login_time`) VALUES
(10, 'faseeki', 'beef', 'fred', 'john@gmail.com', '$2y$10$0Wc/xoekGGmCpSWhK5P1BOS6FCjIg88uTOY8qeEhzz46nME/SmoVS', '20/09/06  at 10:21:57pm', '20/09/07  at 10:24:34am'),
(11, 'Ahmad', 'Abubakar', 'ahmad', 'ope@gmail.com', '$2y$10$d0JK/t/EeQpWwPCmCB7XiOjus8aaESg8U0xRoF9547K4raLaB17pi', '20/09/11  at 12:13:59pm', '20/09/11  at 01:10:47pm'),
(12, 'bello', 'suleiman', 'faseeki1', 'balogun@maek.com', '$2y$10$vulrY7Mid3vS4ZnnAu3WruUEmlgdVnDEm.DhxWitLRGb.wNQ367sC', '', ''),
(13, 'praise', 'Adamu', 'praise', 'praise@gmail.com', '$2y$10$pXSfMXYh2lql9vO7QLXovOhwMvTVv/H9vxZMHC5nuJ1PYS.MekWCy', '20/09/11  at 10:06:08am', '20/09/11  at 11:48:16am'),
(15, 'Makanjuola ', 'Martins', 'martins12', 'martins12@gmail.com', '$2y$10$WsFreOPZ8dKtkxXN7wvNkuO9CgKSIIYOX7Nt0jMLAlHLhZHJwhxOC', '', '20/09/11  at 12:22:40pm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tour_places`
--
ALTER TABLE `tour_places`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tour_places`
--
ALTER TABLE `tour_places`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
