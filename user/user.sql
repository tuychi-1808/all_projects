-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Май 25 2023 г., 03:31
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
-- База данных: `user`
--

-- --------------------------------------------------------

--
-- Структура таблицы `fifettask`
--

CREATE TABLE `fifettask` (
  `id` int(11) NOT NULL,
  `bigImg` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `littleImg` varchar(300) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `fifettask`
--

INSERT INTO `fifettask` (`id`, `bigImg`, `littleImg`) VALUES
(1, 'img/demo/gallery/21.jpg', 'img/demo/gallery/21.jpg'),
(2, 'img/demo/gallery/22.jpg', 'img/demo/gallery/22.jpg'),
(3, 'img/demo/gallery/23.jpg', 'img/demo/gallery/23.jpg'),
(4, 'img/demo/gallery/24.jpg', 'img/demo/gallery/24.jpg'),
(5, 'img/demo/gallery/25.jpg', 'img/demo/gallery/25.jpg'),
(6, 'img/demo/gallery/26.jpg', 'img/demo/gallery/26.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `firsttask`
--

CREATE TABLE `firsttask` (
  `id` int(11) NOT NULL,
  `item` varchar(75) NOT NULL,
  `title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Дамп данных таблицы `firsttask`
--

INSERT INTO `firsttask` (`id`, `item`, `title`) VALUES
(4, 'storages', ''),
(7, 'ge4tggjh5rj656u', 'dg4e3yhtj5r6uj546'),
(10, '234t23rt32t6y45yh4r', 'ghrhjr5erghtjh'),
(12, 'uioluio9lpui', 'uiol890;890;90');

-- --------------------------------------------------------

--
-- Структура таблицы `fourttask`
--

CREATE TABLE `fourttask` (
  `id` int(11) NOT NULL,
  `img` varchar(250) NOT NULL,
  `alt` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `profic` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Дамп данных таблицы `fourttask`
--

INSERT INTO `fourttask` (`id`, `img`, `alt`, `name`, `profic`, `email`, `status`) VALUES
(1, 'img/demo/authors/sunny.png', 'Sunny A.', 'Sunny A. (UI/UX Expert)', 'Lead Author', '@myplaneticket', 'active'),
(2, 'img/demo/authors/josh.png', 'Jos K.', 'Jos K. (ASP.NET Developer)', 'Partner &amp; Contributor', '@atlantez', 'active'),
(3, 'img/demo/authors/jovanni.png', 'Jovanni Lo', 'Jovanni L. (PHP Developer)', 'Partner &amp; Contributor', '@lodev09', 'banned'),
(4, 'img/demo/authors/roberto.png', 'Jovanni Lo', 'Roberto R. (Rails Developer)', 'Partner &amp; Contributor', '@sildur', 'banned');

-- --------------------------------------------------------

--
-- Структура таблицы `secondtask`
--

CREATE TABLE `secondtask` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `tags` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Дамп данных таблицы `secondtask`
--

INSERT INTO `secondtask` (`id`, `title`, `tags`) VALUES
(3, 'Export', 'export download'),
(4, 'Storages', 'storages'),
(7, 'khjhj', 'hj'),
(8, 'hjk,uikui', 'hukui8ku');

-- --------------------------------------------------------

--
-- Структура таблицы `seventtask`
--

CREATE TABLE `seventtask` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `href` varchar(250) NOT NULL,
  `is_link` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Дамп данных таблицы `seventtask`
--

INSERT INTO `seventtask` (`id`, `title`, `href`, `is_link`) VALUES
(1, 'Главная', '#', 'true'),
(2, 'PHP', '#', 'true'),
(3, 'Функции', '0', 'false');

-- --------------------------------------------------------

--
-- Структура таблицы `sixttask`
--

CREATE TABLE `sixttask` (
  `id` int(11) NOT NULL,
  `img` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `practic` varchar(250) NOT NULL,
  `number` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `data` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Дамп данных таблицы `sixttask`
--

INSERT INTO `sixttask` (`id`, `img`, `name`, `practic`, `number`, `email`, `data`) VALUES
(1, 'img/demo/avatars/avatar-b.png', 'Oliver Kopyov', 'IT Director, Gotbootstrap Inc', '+1 317-456-2564', 'oliver.kopyov@smartadminwebapp.com', '15 Charist St, Detroit, MI, 48212, USA'),
(2, 'img/demo/avatars/avatar-c.png', ' Sesha Gray', 'Project Manager, Gotbootstrap Inc', '+1 313-461-1347', 'sesha.gray@smartadminwebapp.com', '15 Charist St, Detroit, MI, 48212, USA'),
(3, 'img/demo/avatars/avatar-e.png', 'Dr. John Cook PhD', 'IT Director, Gotbootstrap Inc', '+1 313-779-1347', 'oliver.kopyov@smartadminwebapp.com', '15 Charist St, Detroit, MI, 48212, USA'),
(4, 'img/demo/avatars/avatar-k.png', 'Oliver Kopyov', 'IT Director, Gotbootstrap Inc', '+1 317-456-2564', 'oliver.kopyov@smartadminwebapp.com', '15 Charist St, Detroit, MI, 48212, USA');

-- --------------------------------------------------------

--
-- Структура таблицы `thirttask`
--

CREATE TABLE `thirttask` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `price` varchar(250) NOT NULL,
  `them` varchar(250) NOT NULL,
  `width` varchar(250) NOT NULL,
  `value` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Дамп данных таблицы `thirttask`
--

INSERT INTO `thirttask` (`id`, `title`, `price`, `them`, `width`, `value`) VALUES
(3, 'Bugs Squashed', '77%', 'bg-info-400', ' 77%;', '77'),
(4, 'User Testing', '10 days', 'bg-primary-350', '90%;', '89'),
(5, 'Tuychibek', 'Gaz', 'bg-primary-350	', '49%', '100'),
(7, 'bn8nuij', 'hjkyukyk', 'gjyukuik', 'ghjui,uik', 'yukuikuik'),
(8, 'hjkjiuikuku', 'yuk78ki7i', 'yuk78j7i7', 'ykj78i7', 'yku78k7');

-- --------------------------------------------------------

--
-- Структура таблицы `usertbl`
--

CREATE TABLE `usertbl` (
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
-- Дамп данных таблицы `usertbl`
--

INSERT INTO `usertbl` (`id`, `username`, `password`, `full_name`, `last_name`, `father_name`, `gender`, `user_level`, `activity`, `add_date`) VALUES
(1, 'adminman', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Tuychi', '', '', NULL, 1, 1, '2020-11-06 20:54:24');

-- --------------------------------------------------------

--
-- Структура таблицы `zero`
--

CREATE TABLE `zero` (
  `id` int(11) NOT NULL,
  `item` varchar(75) NOT NULL,
  `title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Дамп данных таблицы `zero`
--

INSERT INTO `zero` (`id`, `item`, `title`) VALUES
(1, 'Please', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab at eveniet libero nisi quibusdam! A amet consectetur consequatur consequuntur dolorem ea error et excepturi expedita explicabo facere fugiat illo nisi nulla numquam obcaecati quaerat quas qui quia quos, reiciendis sequi, soluta, vel veritatis vitae. Iusto maiores minus quibusdam repudiandae veli'),
(2, 'Please', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab at eveniet libero nisi quibusdam! A amet consectetur consequatur consequuntur dolorem ea error et excepturi expedita explicabo facere fugiat illo nisi nulla numquam obcaecati quaerat quas qui quia quos, reiciendis sequi, soluta, vel veritatis vitae. Iusto maiores minus quibusdam repudiandae velit'),
(3, 'Please', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab at eveniet libero nisi quibusdam! A amet consectetur consequatur consequuntur dolorem ea error et excepturi expedita explicabo facere fugiat illo nisi nulla numquam obcaecati quaerat quas qui quia quos, reiciendis sequi, soluta, vel veritatis vitae. Iusto maiores minus quibusdam repudiandae velit'),
(4, 'Please', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab at eveniet libero nisi quibusdam! A amet consectetur consequatur consequuntur dolorem ea error et excepturi expedita explicabo facere fugiat illo nisi nulla numquam obcaecati quaerat quas qui quia quos, reiciendis sequi, soluta, vel veritatis vitae. Iusto maiores minus quibusdam repudiandae velit');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `fifettask`
--
ALTER TABLE `fifettask`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `firsttask`
--
ALTER TABLE `firsttask`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `fourttask`
--
ALTER TABLE `fourttask`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `secondtask`
--
ALTER TABLE `secondtask`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `seventtask`
--
ALTER TABLE `seventtask`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sixttask`
--
ALTER TABLE `sixttask`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `thirttask`
--
ALTER TABLE `thirttask`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `usertbl`
--
ALTER TABLE `usertbl`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `zero`
--
ALTER TABLE `zero`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `fifettask`
--
ALTER TABLE `fifettask`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `firsttask`
--
ALTER TABLE `firsttask`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `fourttask`
--
ALTER TABLE `fourttask`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `secondtask`
--
ALTER TABLE `secondtask`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `seventtask`
--
ALTER TABLE `seventtask`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `sixttask`
--
ALTER TABLE `sixttask`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `thirttask`
--
ALTER TABLE `thirttask`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `usertbl`
--
ALTER TABLE `usertbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `zero`
--
ALTER TABLE `zero`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
