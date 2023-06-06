-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Май 25 2023 г., 03:01
-- Версия сервера: 10.4.27-MariaDB
-- Версия PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `student`
--

-- --------------------------------------------------------

--
-- Структура таблицы `burger`
--

CREATE TABLE `burger` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `burger_insert` text NOT NULL,
  `price` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `texttitle` text NOT NULL,
  `isvisible` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Дамп данных таблицы `burger`
--

INSERT INTO `burger` (`id`, `image`, `burger_insert`, `price`, `title`, `texttitle`, `isvisible`) VALUES
(30, 'images/photo.jpg', 'io;p[0\'p[-\'', 'l\'p]', '', '', ''),
(31, 'images/photo.jpg', 'io;p[0\'p[-\'', 'l\'p][-]', '', '', ''),
(32, 'images/photo.jpg', 'io;p[0\'p[-\'', 'l\'p][-][]', '', '', ''),
(33, 'images/photo.jpg', 'io;p[0\'p[-\'', 'l\'p][-][]', 'l;', '', ''),
(34, 'images/bg_img.jpg', 'grtyhrtghghfgh', 'ghfghfghfgh', 'fgnfgnrfjnrf', 'fghnjrtherrgwerfgwefgwerghwerrghe', '');

-- --------------------------------------------------------

--
-- Структура таблицы `student_usertbl`
--

CREATE TABLE `student_usertbl` (
  `id` int(11) NOT NULL,
  `username` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `password` varchar(70) DEFAULT NULL,
  `full_name` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `last_name` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `father_name` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `gender` tinyint(1) DEFAULT NULL,
  `user_level` tinyint(4) NOT NULL,
  `activity` tinyint(1) NOT NULL DEFAULT 1,
  `add_date` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `student_usertbl`
--

INSERT INTO `student_usertbl` (`id`, `username`, `password`, `full_name`, `last_name`, `father_name`, `gender`, `user_level`, `activity`, `add_date`) VALUES
(51, 'blog_admin', '2b841644a3654dce4ba64898c9c81535b52891fd', 'Tuychibek', NULL, NULL, NULL, 0, 1, '2023-03-17 10:46:38'),
(52, 'adminsxfgvh', 'admincfbherhb', 'fvgbdrtghed', NULL, NULL, NULL, 0, 1, '2023-03-17 12:09:53');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `burger`
--
ALTER TABLE `burger`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `student_usertbl`
--
ALTER TABLE `student_usertbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `burger`
--
ALTER TABLE `burger`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT для таблицы `student_usertbl`
--
ALTER TABLE `student_usertbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
