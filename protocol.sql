-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 24 2023 г., 16:26
-- Версия сервера: 5.5.68-MariaDB
-- Версия PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `protocol`
--

-- --------------------------------------------------------

--
-- Структура таблицы `PROTOCOL_TABLE`
--

CREATE TABLE `PROTOCOL_TABLE` (
  `id` int(11) NOT NULL,
  `protoc_number` varchar(50) COLLATE utf8_bin NOT NULL,
  `responsible` varchar(50) COLLATE utf8_bin NOT NULL,
  `protoc_date` date NOT NULL,
  `accordance` enum('yes','no') COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Дамп данных таблицы `PROTOCOL_TABLE`
--

INSERT INTO `PROTOCOL_TABLE` (`id`, `protoc_number`, `responsible`, `protoc_date`, `accordance`) VALUES
(6, 'SS674532', 'Романов Илья', '2023-05-24', 'yes'),
(7, 'TT987678', 'Иванов Вадим', '2023-05-24', 'yes'),
(9, 'DD567879', 'Жуков', '2023-05-24', 'no');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `PROTOCOL_TABLE`
--
ALTER TABLE `PROTOCOL_TABLE`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `PROTOCOL_TABLE`
--
ALTER TABLE `PROTOCOL_TABLE`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
