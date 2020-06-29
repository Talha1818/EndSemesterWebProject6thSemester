-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2020 at 09:35 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finalprojectcorephp`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogpost`
--

CREATE TABLE `blogpost` (
  `id` int(11) NOT NULL,
  `name` varchar(57) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `imagename` varchar(50) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogpost`
--

INSERT INTO `blogpost` (`id`, `name`, `title`, `description`, `imagename`, `created_at`) VALUES
(1, 'talha', 'Python', 'Python can be used on a server to create web applications.\r\nPython can be used alongside software to create workflows.\r\nPython can connect to database systems. It can also read and modify files.\r\nPython can be used to handle big data and perform complex mathematics.\r\nPython can be used for rapid prototyping, or for production-ready software development', 'python,programming', '2020-06-27'),
(2, 'anas', 'Javascript', 'As a multi-paradigm language, JavaScript supports event-driven, functional, and imperative programming styles. It has application programming interfaces (APIs) for working with text, dates, regular expressions, standard data structures, and the Document Object Model (DOM). However, the language itself does not include any input/output (I/O), such as networking, storage, or graphics facilities, as the host environment (usually a web browser) provides those APIs.\r\n\r\nJavaScript engines were originally used only in web browsers, but they are now embedded in some servers, usually via Node.js. They are also embedded in a variety of applications created with frameworks such as Electron and Cordova.\r\n\r\nAlthough there are similarities between JavaScript and Java, including language name, syntax, and respective standard libraries, the two languages are distinct and differ greatly in design', 'javascript,programming', '2020-06-27'),
(3, 'taha', 'C++', 'language, or \"C with Classes\". The language has expanded significantly over time, and modern C++ now has object-oriented, generic, and functional features in addition to facilities for low-level memory manipulation. It is almost always implemented as a compiled language, and many vendors provide C++ compilers, including the Free Software Foundation, LLVM, Microsoft, Intel, Oracle, and IBM, so it is available on many platforms.[9]\r\n\r\nC++ was designed with a bias toward system programming and embedded, resource-constrained software and large systems, with performance, efficiency, and flexibility of use as its design highlights.[10] C++ has also been found useful in many other contexts, with key strengths being software infrastructure and resource-constrained applications,[10] including desktop applications, video games, servers (e.g. e-commerce, Web search, or SQL servers), and performance-critical applications (e.g. telephone switches or space probes)', 'C++,programming', '2020-06-27');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `comment_desc` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `blog_post_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_desc`, `created_at`, `blog_post_id`, `username`) VALUES
(74, 'python is also used for web scraping', '2020-06-28 22:53:08', 1, 'talha'),
(80, 'python is a great language bro', '2020-06-28 23:20:56', 1, 'faisal'),
(87, 'talha malik', '2020-06-29 10:03:58', 1, 'talha'),
(88, 'behzad don', '2020-06-29 10:05:17', 2, 'behzad'),
(91, 'C++', '2020-06-29 10:16:53', 3, 'talha'),
(93, 'i love python', '2020-06-29 11:59:16', 1, 'anas1212');

-- --------------------------------------------------------

--
-- Table structure for table `contactuser`
--

CREATE TABLE `contactuser` (
  `user_id` int(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(57) NOT NULL,
  `user_phone` varchar(45) NOT NULL,
  `user_message` varchar(255) NOT NULL,
  `user_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactuser`
--

INSERT INTO `contactuser` (`user_id`, `user_name`, `user_email`, `user_phone`, `user_message`, `user_address`) VALUES
(1, 'Muhammad Talha', 'muhammadtalha1818@gmail.com', '+923444300394', 'something went wroung\r\n', ''),
(2, 'Faisal', 'talha@gmail.com', '+923444300394', 'i have an issue to install pyaudio plz help me , i\'m a great fan of you harry bhai', ''),
(3, 'Muhammad Talha', 'muhammadtalha1818@gmail.com', '+923444300394', 'what is this', ''),
(4, 'Faisal', 'muhammadtalha1818@gmail.com', '+923444300394', 'i really love ur behaviour', ''),
(5, 'Bulbul', 'muhammadtalha1818@gmail.com', '923444300394567', 'hjk', ''),
(6, 'Faisal', 'muhammadtalha1818@gmail.com', '03444300394', 'dfghjkl', ''),
(7, 'Faisal', 'muhammadtalha1818@gmail.com', '923444300394', 'dfghjkl;', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`) VALUES
(14, 'talha', '12345'),
(16, 'faisal', '123'),
(20, 'anas', '123'),
(21, 'tayyab', '123'),
(22, 'behzad', '123'),
(23, 'hadeya', '123'),
(26, 'Talha1818', '123'),
(33, 'haroon1818', '123'),
(34, 'haroon', '123'),
(35, 'anas1212', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogpost`
--
ALTER TABLE `blogpost`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `blogpost` ADD FULLTEXT KEY `title` (`title`,`description`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `contactuser`
--
ALTER TABLE `contactuser`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogpost`
--
ALTER TABLE `blogpost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `contactuser`
--
ALTER TABLE `contactuser`
  MODIFY `user_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
