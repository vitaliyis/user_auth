-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 28, 2017 at 04:48 PM
-- Server version: 5.7.19-0ubuntu0.16.04.1
-- PHP Version: 7.0.18-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `body` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `body`, `created`, `modified`, `user_id`) VALUES
(1, 'The title', 'This is the article body. Ruslan good!', '2017-07-27 11:53:33', '2017-07-28 13:31:24', NULL),
(2, 'A title once again', 'And the article body follows.', '2017-07-27 11:53:33', NULL, NULL),
(3, 'Title strikes back', 'This is really exciting! Not.', '2017-07-27 11:53:33', NULL, NULL),
(4, 'My application about login hahaha', 'You can now register a new user by accessing the /users/add URL and log in with the newly created credentials by going to /users/login URL. Also, try to access any other URL that was not explicitly allowed such as /articles/add, you will see that the application automatically redirects you to the login page.', '2017-07-27 16:30:11', '2017-07-27 16:30:49', NULL),
(5, 'my article vetal', 'dfkdfgkjdfjgh fdgjdfgjhdfjkg dfgbkjfdbgkjdfb dfgbkdjfkb dfgkjdfnklgfmh dfjgbkdjfg nnjfhj', '2017-07-27 17:28:12', '2017-07-27 17:28:54', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `created`, `modified`) VALUES
(1, 'root', '$2y$10$kfOgoyds8M5CfhIILkLGxOBbqwPFK43brg3WkLLvnahkbUQMhDvUS', 'admin', '2017-07-27 16:27:50', '2017-07-27 16:27:50'),
(2, 'vetal', '$2y$10$513kkx5XWBD6czeOzlmjqepAmo869/lib3/Pfxx5QiF9DuCHkgl.e', 'author', '2017-07-27 16:45:27', '2017-07-27 16:45:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
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
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
