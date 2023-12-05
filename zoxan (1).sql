-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Дек 06 2023 г., 00:16
-- Версия сервера: 10.4.28-MariaDB
-- Версия PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `zoxan`
--

-- --------------------------------------------------------

--
-- Структура таблицы `medcarts`
--

CREATE TABLE `medcarts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `datepost` date NOT NULL,
  `diagnoz` varchar(255) NOT NULL,
  `heal` varchar(255) NOT NULL,
  `doctor` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `medcarts`
--

INSERT INTO `medcarts` (`id`, `user_id`, `datepost`, `diagnoz`, `heal`, `doctor`) VALUES
(1, 4, '2023-12-17', 'sadasdasd', 'asdasd', 'asdsada'),
(2, 4, '2023-12-17', 'sadasdasd', 'asdasd', 'asdsada');

-- --------------------------------------------------------

--
-- Структура таблицы `rolle`
--

CREATE TABLE `rolle` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `rolle`
--

INSERT INTO `rolle` (`id`, `name`) VALUES
(1, 'user'),
(2, 'admin');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `idrolle` int(11) NOT NULL,
  `fio` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `sex` varchar(255) NOT NULL,
  `adres` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `avatars` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `password`, `username`, `idrolle`, `fio`, `date`, `sex`, `adres`, `telephone`, `avatars`) VALUES
(4, '$2y$10$.IpASJ9TZjCVBWwpu7E0we0sp/5.lVj3fCRfLjQtPIJp.C6C2wXAu', 'фыв', 1, 'фыв', '0000-00-00', 'фыв', 'фвы', '0', '0'),
(5, '$2y$10$N6p3YDRux7anVy53QFq/aunfaSlzx2Daod2ygN4mkhJ3LbWq4KZWe', 'zxc', 2, 'zxc', '2004-07-08', 'zxc', 'zxc', 'zxc', 'avatars/5_1625545538_11-kartinkin-com-p-ikonki-v-stile-anime-anime-krasivo-12.png'),
(7, '$2y$10$18oOhShCRvgTWmHlR.m60.C.d/A0dVBmJj9j6LYvkCrJqJStPAd9a', 'xxx', 1, 'zxczxc', '2023-12-27', 'zxc', 'zxc', 'xxcx', 'avatars/7_1625545538_11-kartinkin-com-p-ikonki-v-stile-anime-anime-krasivo-12.png');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `medcarts`
--
ALTER TABLE `medcarts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `rolle`
--
ALTER TABLE `rolle`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idrolle` (`idrolle`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `medcarts`
--
ALTER TABLE `medcarts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `rolle`
--
ALTER TABLE `rolle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `medcarts`
--
ALTER TABLE `medcarts`
  ADD CONSTRAINT `medcarts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`idrolle`) REFERENCES `rolle` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
