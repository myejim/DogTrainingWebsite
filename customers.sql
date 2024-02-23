-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2024 at 08:34 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `customers`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `Name` text NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Number` int(11) NOT NULL,
  `Message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`Name`, `Email`, `Number`, `Message`) VALUES
('Myelena Jimenez', 'myejim@gmail.com', 1234567890, 'Dog bit me'),
('Julie Han', 'juliehan@gmail.com', 0, 'My dog keeps running away :('),
('Tim Burton', 'tburton@yahoo.com', 0, 'My dog keeps acting weird, make him stop.'),
('Margot Robbie', 'mrob@icloud.com', 369258147, 'Just teach him the basic commands.'),
('Annabeth Chase', 'annchase@gmail.com', 0, 'Would like for my dog to learn basic commands and off leash training.'),
('Percy Jackson', 'pjack@icloud.com', 0, 'Can you teach her how to swim?'),
('Stephenie Soo', 'sssoo@gmail.com', 987654321, 'Would just like to have my dog start becoming a service dog.'),
('Erica Luze', 'luze@gmail.com', 0, 'She keeps eating stuff she\'s not supposed to.'),
('Edward Cullen', 'ecullen@aol.com', 66666666, 'Can you train cats?'),
('Jacob Black', 'jblack@bing.com', 0, 'She just doesn\'t listen to me.'),
('Hermione Granger', 'mioneg@gmail.com', 564897231, 'My dog is very smart, however she refuses to use that smartness. Please teach her how to use it.'),
('Casper Ghost', 'casperg@yahoo.com', 0, 'Boo?'),
('Myelena Jimenez', 'myejim@gmail.com', 1234567890, 'Dog bit me'),
('Julie Han', 'juliehan@gmail.com', 0, 'My dog keeps running away :('),
('Tim Burton', 'tburton@yahoo.com', 0, 'My dog keeps acting weird, make him stop.'),
('Margot Robbie', 'mrob@icloud.com', 369258147, 'Just teach him the basic commands.'),
('Annabeth Chase', 'annchase@gmail.com', 0, 'Would like for my dog to learn basic commands and off leash training.'),
('Percy Jackson', 'pjack@icloud.com', 0, 'Can you teach her how to swim?'),
('Stephenie Soo', 'sssoo@gmail.com', 987654321, 'Would just like to have my dog start becoming a service dog.'),
('Erica Luze', 'luze@gmail.com', 0, 'She keeps eating stuff she\'s not supposed to.'),
('Edward Cullen', 'ecullen@aol.com', 66666666, 'Can you train cats?'),
('Jacob Black', 'jblack@bing.com', 0, 'She just doesn\'t listen to me.'),
('Hermione Granger', 'mioneg@gmail.com', 564897231, 'My dog is very smart, however she refuses to use that smartness. Please teach her how to use it.'),
('Casper Ghost', 'casperg@yahoo.com', 0, 'Boo?');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
