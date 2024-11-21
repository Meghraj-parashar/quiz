-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2024 at 12:42 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `question_text` varchar(255) DEFAULT NULL,
  `option1` varchar(100) DEFAULT NULL,
  `option2` varchar(100) DEFAULT NULL,
  `option3` varchar(100) DEFAULT NULL,
  `option4` varchar(100) DEFAULT NULL,
  `correct_option` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question_text`, `option1`, `option2`, `option3`, `option4`, `correct_option`) VALUES
(1, 'Which of the following is the style language?', 'CSS', 'HTML', 'PHP', 'JS', 1),
(2, 'Which programming language is used for web development?', 'Python', 'JavaScript', 'C++', 'Java', 2),
(3, 'What is the correct syntax to output \"Hello World\" in JavaScript?', 'print(\"Hello World\")', 'echo(\"Hello World\")', 'console.log(\"Hello World\")', 'write(\"Hello World\")', 3),
(4, 'Which HTML tag is used to define an unordered list?', '<ol>', '<li>', '<ul>', '<list>', 3),
(5, 'In CSS, what does the padding property control?', 'Space between elements', 'Space between content and border', 'Font size', 'Text color', 2),
(6, 'What does SQL stand for?', 'Simple Query Language', 'Structured Query Language', 'Standard Query Language', 'Sequential Query Language', 2),
(7, 'Which PHP function is used to open a file?', 'fopen()', 'open()', 'file_open()', 'open_file()', 1),
(8, 'Which of the following is not a valid JavaScript data type?', 'String', 'Number', 'Boolean', 'Character', 4),
(9, 'In MySQL, which statement is used to delete a database?', 'DROP DATABASE database_name;', 'REMOVE DATABASE database_name;', 'DELETE DATABASE database_name;', 'ERASE DATABASE database_name;', 1),
(10, 'Which of the following is a front-end framework?', 'Laravel', 'Django', 'Bootstrap', 'Flask', 3);

-- --------------------------------------------------------

--
-- Table structure for table `sign_up`
--

CREATE TABLE `sign_up` (
  `S_no` int(10) NOT NULL,
  `username` text DEFAULT NULL,
  `password` int(20) DEFAULT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sign_up`
--

INSERT INTO `sign_up` (`S_no`, `username`, `password`, `email`) VALUES
(1, 'meghraj', 123, 'meghraj@gmail.com'),
(3, 'deepak', 123, 'deepak@gmail.com'),
(4, 'aditya', 123, 'aditya@gamil.com'),
(7, 'karishma', 123, 'karishma@gamil.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sign_up`
--
ALTER TABLE `sign_up`
  ADD PRIMARY KEY (`S_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sign_up`
--
ALTER TABLE `sign_up`
  MODIFY `S_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
