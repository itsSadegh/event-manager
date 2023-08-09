-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 09, 2023 at 11:02 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sinaProject`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `speaker` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `duration` int(11) NOT NULL,
  `time` date NOT NULL,
  `place` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `speaker`, `description`, `duration`, `time`, `place`) VALUES
(29, 'Conference on Technology Trends', 'Dr. Smith', 'A conference discussing the latest technology trends.', 120, '2023-08-27', 'Tech Expo Center'),
(30, 'Product Launch Event', 'Alice Johnson', 'Introducing our new product line to the market.', 90, '2023-08-29', 'Grand Hotel Ballroom'),
(31, 'Leadership Seminar', 'John Williams', 'Learn essential leadership skills from industry experts.', 180, '2023-08-31', 'Business Institute'),
(32, 'Health and Wellness Workshop', 'Dr. Patel', 'Tips for maintaining a healthy lifestyle and wellness practices.', 60, '2023-09-02', 'Community Center'),
(33, 'Art Exhibition Opening', 'Sophia Lee', 'Discover local artists and their captivating artworks.', 120, '2023-09-05', 'Art Gallery'),
(34, 'Music Concert: Jazz Night', 'The Groove Ensemble', 'An evening of soulful jazz music and entertainment.', 150, '2023-09-07', 'City Park Amphitheater'),
(35, 'Educational Symposium', 'Prof. Johnson', 'Engaging discussions on the future of education.', 240, '2023-09-09', 'University Hall'),
(36, 'Food Festival', 'Chef Ramirez', 'Indulge in a variety of delicious cuisines from around the world.', 180, '2023-09-12', 'Local Park'),
(37, 'Fashion Show', 'Fashion House', 'Experience the latest fashion trends on the runway.', 120, '2023-09-15', 'Fashion Venue'),
(38, 'Workshop: Digital Marketing', 'Marketing Experts', 'Master the art of digital marketing strategies.', 90, '2023-09-18', 'Business Hub'),
(39, 'Charity Gala', 'Charity Foundation', 'Raise funds for a noble cause through an elegant gala.', 240, '2023-09-21', 'Luxury Hotel'),
(40, 'Sports Tournament', 'Sports Club', 'Compete in various sports and showcase your athletic skills.', 180, '2023-09-24', 'Sports Complex'),
(41, 'Technology Hackathon', 'Tech Innovators', 'A coding competition to build innovative solutions.', 360, '2023-09-27', 'Tech Hub'),
(42, 'Film Festival', 'Cinema Lovers', 'Enjoy a collection of international films and documentaries.', 300, '2023-10-01', 'Cinema Hall'),
(43, 'Science Exhibition', 'Young Scientists', 'Discover the wonders of science through interactive exhibits.', 120, '2023-10-05', 'Science Museum'),
(44, 'Book Launch', 'Author Showcase', 'Introducing the latest literary works by renowned authors.', 90, '2023-10-09', 'Bookstore'),
(45, 'Culinary Workshop', 'Chef Anderson', 'Learn cooking techniques from a professional chef.', 150, '2023-10-13', 'Culinary School'),
(46, 'Startup Pitch Competition', 'Entrepreneurs', 'Aspiring startups present their innovative business ideas.', 180, '2023-10-17', 'Startup Hub'),
(47, 'Art and Craft Fair', 'Artisans Guild', 'Shop for unique handcrafted artworks and crafts.', 240, '2023-10-21', 'Artisan Market'),
(48, 'Health Expo', 'Medical Experts', 'Explore health and wellness products and services.', 120, '2023-10-25', 'Exhibition Center'),
(55, 'bbbb', 'cccc', 'cccc', 3, '2023-08-02', 'cccc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
