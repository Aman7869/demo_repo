-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 13, 2021 at 08:35 PM
-- Server version: 8.0.26-0ubuntu0.20.04.2
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `Article`
--

CREATE TABLE `Article` (
  `sno` int NOT NULL,
  `tittle` varchar(50) NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `tstamp` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime DEFAULT NULL,
  `alias` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  `imagePath` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Article`
--

INSERT INTO `Article` (`sno`, `tittle`, `description`, `tstamp`, `updated`, `alias`, `status`, `imagePath`) VALUES
(19, 'Bollywood', '<p>Hindi cinema, often known as Bollywood and formerly as Bombay cinema,[4] is the Indian Hindi-language film industry based in Mumbai . The term is a portmanteau of &quot;Bombay&quot; and &quot;Hollywood&quot;. The industry is related to Cinema of South India and other Indian film industries, making up Indian cinemathe world&#39;s largest by number of feature films produced.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2021-08-07 15:51:31', '2021-08-12 07:30:06', 'Bollywood', 'active', '/var/www/html/Task/images/bollywood.jpeg'),
(20, 'Sport', '<p><em><strong>Sport</strong></em> pertains to any form of <strong>competitive</strong> physical activity or game[1] that aims to use, maintain or improve physical ability and skills while providing enjoyment to participants and, in some cases, entertainment to spectators.[2] Sports can, through casual or organized participation, improve one&#39;s physical health. Hundreds of sports exist, from those between single contestants, through to those with hundreds of simultaneous participants, either in teams or competing as individuals. In certain sports such as racing, many contestants may compete, <strong>simultaneously</strong> or consecutively, with one winner; in others, the contest (a match) is between two sides, each attempting to exceed the other. Some sports allow a &quot;tie&quot; or &quot;draw&quot;, in which there is no single winner; others provide tie-breaking methods to ensure one <strong>winner</strong> and one loser. A number of contests may be <strong>arranged</strong> in a tournament producing a champion. Many sports leagues make an annual champion by arranging games in a regular sports season, followed in some cases by&nbsp;</p>\r\n', '2021-08-07 18:42:37', '2021-08-12 07:30:03', 'Sport', 'active', '/var/www/html/Task/images/sport.jpg'),
(21, 'Cricket', '<p><strong>Cricket</strong> is a bat-and-ball game played between two teams of eleven players on a field at the centre of which is a 22-yard (20-metre) pitch with a wicket at each end, each comprising two bails balanced on three stumps. The batting side scores runs by striking the ball bowled at the wicket with the bat (and running between the wickets), while the bowling and fielding side tries to prevent this (by preventing the ball from leaving the field, and getting the ball to either wicket) and dismiss each batter (so they are &quot;out&quot;). Means of <em>dismissal</em> include being bowled, when the ball hits the stumps and dislodges the bails, and by the fielding side either catching the ball after it is hit by the bat and before it hits the ground, or hitting a wicket with the ball before a batter can cross the crease in front of the wicket. When ten batters have been dismissed, the innings ends and the teams swap roles. The game is adjudicated by two umpires, aided by a third umpire and match referee in international matches.</p>\r\n', '2021-08-07 18:58:23', '2021-08-12 07:29:53', 'Cricket', 'active', '/var/www/html/Task/images/cricket.jpg'),
(22, 'Entertainment', '<p><strong>Entertainment</strong> is a form of activity that holds the attention and interest of an audience or gives pleasure and delight. It can be an idea or a task, but is more likely to be one of the activities or events that have developed over thousands of years specifically for the purpose of keeping an audience&#39;s attention.</p>\r\n', '2021-08-07 19:02:57', '2021-08-12 07:30:10', 'Entertainment', 'active', '/var/www/html/Task/images/original_entertainment.jpg'),
(23, 'Tittle', '<p>&nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,&nbsp;quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo&nbsp;consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse&nbsp;cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non&nbsp;proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', '2021-08-07 19:04:39', '2021-08-13 11:10:13', 'Tittle', 'inactive', '/var/www/html/Task/images/profile.jpg'),
(24, 'Olympic', '<p>The modern <strong>Olympic</strong> Games or Olympics (French: Jeux olympiques)[1][2] are leading international sporting events featuring summer and winter sports competitions in which thousands of athletes from around the world participate in a variety of competitions. The Olympic Games are considered the world&#39;s foremost sports competition with more than 200 nations participating.[3] The<strong><em> Olympic Games </em></strong>are normally held every four years, alternating between the Summer and Winter Olympics every two years in the four-year period.</p>\r\n', '2021-08-09 14:46:54', '2021-08-09 02:50:36', 'Olympic', 'active', '/var/www/html/Task/images/olympic.jpeg'),
(28, 'Football', '<p>The <em><strong>FIFA World Cup</strong></em>, often simply called the World Cup, is an international association football competition contested by the senior men&#39;s national teams of the members of the F&eacute;d&eacute;ration Internationale de Football Association (FIFA), the sport&#39;s global governing body. The championship has been awarded every four years since the inaugural tournament in 1930, except in 1942 and 1946 when it was not held because of the Second World War. The current champion is France, which won its second title at the 2018 tournament in Russia&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2021-08-09 17:40:42', '2021-08-13 07:59:18', 'Football', 'active', '/var/www/html/Task/images/football.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cityInformation`
--

CREATE TABLE `cityInformation` (
  `city_id` int NOT NULL,
  `city_name` varchar(30) NOT NULL,
  `state_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `cityInformation`
--

INSERT INTO `cityInformation` (`city_id`, `city_name`, `state_id`) VALUES
(1, 'Indore', 1),
(2, 'Ujjain', 1),
(3, 'Dewas', 1),
(4, 'Bhopal', 1),
(5, 'Ratlam', 1),
(6, 'Surat', 2),
(7, 'Ahemdabad', 2),
(8, 'Vadodara', 2),
(9, 'Bihar', 3),
(10, 'Luckhnow', 3),
(11, 'Patna', 3),
(12, 'Gurugram', 4),
(13, 'Sonipat', 4),
(14, 'Faridabad', 4);

-- --------------------------------------------------------

--
-- Table structure for table `countryInformation`
--

CREATE TABLE `countryInformation` (
  `cid` int NOT NULL,
  `cname` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `countryInformation`
--

INSERT INTO `countryInformation` (`cid`, `cname`) VALUES
(1, 'India'),
(2, 'Nepal'),
(3, 'Bangladesh');

-- --------------------------------------------------------

--
-- Table structure for table `stateInformation`
--

CREATE TABLE `stateInformation` (
  `sid` int NOT NULL,
  `sname` varchar(40) NOT NULL,
  `country` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `stateInformation`
--

INSERT INTO `stateInformation` (`sid`, `sname`, `country`) VALUES
(1, 'Madhya Pradesh', 1),
(2, 'Gujrat', 1),
(3, 'Utter Pradesh', 1),
(4, 'Haryana', 1),
(5, 'Rajesthan', 1),
(6, 'Janakpur', 2),
(7, 'Deukhuri', 2),
(8, 'Hetauda', 2),
(9, 'Mahakali Kshetra', 2),
(10, 'Karnali Kshetra', 2),
(11, 'Bansal', 3),
(12, 'Chittagong', 3),
(13, 'Dhaka', 3),
(14, 'Khulna', 3);

-- --------------------------------------------------------

--
-- Table structure for table `userInformation`
--

CREATE TABLE `userInformation` (
  `id` int NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `password` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `country` int DEFAULT NULL,
  `state` int DEFAULT NULL,
  `city` int DEFAULT NULL,
  `phone` bigint DEFAULT NULL,
  `address` varchar(60) DEFAULT NULL,
  `imagePath` varchar(255) DEFAULT NULL,
  `status` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `userInformation`
--

INSERT INTO `userInformation` (`id`, `name`, `email`, `password`, `date_of_birth`, `gender`, `country`, `state`, `city`, `phone`, `address`, `imagePath`, `status`) VALUES
(200, 'Maniiiiii', 'abc@gmail.com', '34ac5bd06f96e0bc9cf4a29e29cdf5a2', '2021-08-12', 'Male', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(201, 'Nayan', 'nayan@gmail.com', '3aa45979171a83e2fe45ab52a5703127', '2021-08-06', 'Male', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(202, 'Aman', 'aman@gmail.com', '34ac5bd06f96e0bc9cf4a29e29cdf5a2', '2021-08-07', 'Male', 1, 4, 13, 8770012345, 'mhow nagar', '/var/www/html/Task/images/user4.jpeg', 1),
(207, 'Kunal', 'kunal@gmail.com', 'a92b2bb807cafdce88b4824f13a43a12', '2021-07-28', 'Male', 1, 1, 1, 1234567898, 'America', '', 1),
(208, 'Aarohi', 'aarohi@gmail.com', '89c85149134c774caa0e3d76c1621538', '2021-08-12', 'Female', 1, 2, 6, 1234567898, 'mhow ', '/var/www/html/Task/images/user2.jpeg', 1),
(209, 'Nikhil', 'nikhil@gmail.com', '0dff271b880081d20674fed4d45b00fc', '2021-08-13', 'Male', 1, 1, 1, 9893331234, 'vijay nagar', '/var/www/html/Task/images/user3.jpeg', 1),
(211, 'Sumant', 'sumant@gmail.com', '92aba5b2a649280eee041357e6394e91', '2021-08-27', 'Male', 1, 1, 2, 9876543212, 'rajendra nagar', '', 1),
(215, 'Manik', 'manik@gmail.com', '6e04cba50334f48816139a5e8f7c8c93', '2021-08-11', 'Male', 1, 3, 11, 1234567898, 'colony', '/var/www/html/Task/images/user3.jpeg', 1),
(216, 'Nimay', 'nimay@gmail.com', '34ac5bd06f96e0bc9cf4a29e29cdf5a2', '2021-08-13', 'Male', 1, 2, 6, 8899007766, 'rau', '/var/www/html/Task/images/user3.jpeg', 1),
(218, 'Reeta', 'reeta@gmail.com', '34ac5bd06f96e0bc9cf4a29e29cdf5a2', '2021-08-12', 'Female', 1, 2, 7, 1234567898, 'rajendra nagar', '/var/www/html/Task/images/userFemale.jpeg', 1),
(222, 'Suresh', 'abc@gmail.com', '34ac5bd06f96e0bc9cf4a29e29cdf5a2', '2021-08-13', 'Male', 1, 2, 7, 1234567898, 'mhow', '/var/www/html/Task/images/user1.jpeg', 1),
(224, 'Parag', 'parag@gmail.com', '322027b53adef49ce89e4d8b853e0ef8', '2021-08-13', 'Male', 1, 2, 7, 1234567898, 'dhar nake', '/var/www/html/Task/images/user4.jpeg', 1),
(226, 'Harry', 'harry@gmail.com', '34ac5bd06f96e0bc9cf4a29e29cdf5a2', '2021-08-12', 'Male', 1, 1, 2, 9876543212, 'mhow', '/var/www/html/Task/images/user2.jpeg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Article`
--
ALTER TABLE `Article`
  ADD PRIMARY KEY (`sno`),
  ADD UNIQUE KEY `alias` (`alias`);

--
-- Indexes for table `userInformation`
--
ALTER TABLE `userInformation`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `name_2` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Article`
--
ALTER TABLE `Article`
  MODIFY `sno` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `userInformation`
--
ALTER TABLE `userInformation`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=227;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
