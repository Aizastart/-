-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 17 2023 г., 09:44
-- Версия сервера: 5.6.51
-- Версия PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `bd_sweet`
--

-- --------------------------------------------------------

--
-- Структура таблицы `about`
--

CREATE TABLE `about` (
  `id` int(10) NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL,
  `filename` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `contact`
--

CREATE TABLE `contact` (
  `id` int(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `header`
--

CREATE TABLE `header` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `header`
--

INSERT INTO `header` (`id`, `name`, `filename`) VALUES
(1, 'Сладкое лето', '44.jpg\r\n');

-- --------------------------------------------------------

--
-- Структура таблицы `prace`
--

CREATE TABLE `prace` (
  `id` int(255) NOT NULL,
  `name` varchar(250) NOT NULL,
  `sales` int(255) NOT NULL,
  `hotsales` int(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `filename` varchar(250) NOT NULL,
  `categories` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `prace`
--

INSERT INTO `prace` (`id`, `name`, `sales`, `hotsales`, `description`, `filename`, `categories`) VALUES
(1, 'Вечер', 350, 300, 'Вкуснейшие конфеты из Казахстана', 'Вечерок.png', 'Конфеты'),
(2, 'Молочный батончик', 380, 330, 'Конфеты на молочной основе с вафлями', '2.jpg', 'Конфеты'),
(3, 'Toffix', 300, 280, 'Жевательные конфеты с желейной начинкой', '1.jpg', 'Конфеты'),
(4, 'Coca-Cola', 150, 120, 'Газированный напиток утоляющий жажду ', 'cola.jpg', 'Напитки'),
(5, 'Fanta', 150, 120, 'Газированный напиток утоляющий жажду', 'Fanta-009-700x467.jpg', 'Напитки'),
(6, 'Sprite', 150, 120, 'Газированный напиток утоляющий жажду', 'sprite.jpg', 'Напитки'),
(7, 'Snikers', 85, 65, 'Шоколадная палочка с нугой и орехами', 'main.jpg', 'Шоколад'),
(8, 'Bounty', 85, 65, 'Шоколадная палочка с кокосовой струшкой', 'baunti.jpg', 'Шоколад'),
(9, 'Twix', 85, 65, 'Две шоколадные палочки с вафельной начинкой', 'twix.webp', 'Шоколад'),
(10, 'Bondi', 120, 100, 'Мармеладные конфеты Bondi', 'H4a7d82a9a3b645c0a2a1c6c623a1dc98W.jpg', 'Мармелад'),
(11, 'Mamba', 140, 120, 'Мармеладные конфеты Mamba', 'orig.webp', 'Мармелад'),
(12, 'HARIBO', 100, 800, 'Мармеладные конфеты HARIBO', '297180.970.jpeg', 'Мармелад'),
(13, 'Branshe', 230, 200, 'Нежный зефир от компании Branshe', 'c70a354b36c7d2ae12da80b606be6f08.webp', 'Зефир'),
(14, 'Lucky day`s', 250, 230, 'Нежный зефир Lucky day`s', 'images.jfif', 'Зефир'),
(15, 'Smile', 230, 200, 'Нежный зефир Smile', 'ua_pim_244171001002_01.png', 'Зефир');

-- --------------------------------------------------------

--
-- Структура таблицы `slider`
--

CREATE TABLE `slider` (
  `id` int(12) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `filename` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `slider`
--

INSERT INTO `slider` (`id`, `name`, `filename`) VALUES
(1, 'Свежая выпечка', '13.jpg'),
(2, 'Шикарные сладости', '12.jpg'),
(3, 'Нежнейший шоколад', 'Много шоколада.jpg'),
(4, 'Брендовые напитки', 'Напитки.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `statbaner`
--

CREATE TABLE `statbaner` (
  `id` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `filename` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `statbaner`
--

INSERT INTO `statbaner` (`id`, `name`, `description`, `filename`) VALUES
(1, 'Огромный ассортимент', 'Я думаю у каждого из нас есть его любимые конфеты которые он помнит с детства', 'statbaner.webp');

-- --------------------------------------------------------

--
-- Структура таблицы `stock`
--

CREATE TABLE `stock` (
  `id` int(100) NOT NULL,
  `name` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL,
  `filename` varchar(250) NOT NULL,
  `date` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `stock`
--

INSERT INTO `stock` (`id`, `name`, `description`, `filename`, `date`) VALUES
(1, 'Распродажа Сладостей на хэллоуин', 'В интернет-магазине на InSales Вы можете вести блог магазина или новостную ленту – это отличный способ привлекать дополнительных покупателей из...', 'Helllowen.webp', '10.10.2023-30.10.2023'),
(2, '− 20% На все весь зефир', 'В интернет-магазине на InSales Вы можете вести блог магазина или новостную ленту – это отличный способ привлекать дополнительных покупателей', 'zefir-po-zavarnoy-tehnologii.jpg', '12.06.2023-30.08.2023'),
(3, 'Скидка на все сладости', 'А это уже вторая новость в интернет-магазине.', 'large_Фото.webp', '20.07.2023'),
(4, 'Упакуем бесплатно ваш подарок, если нужно!', 'Поздравляем! Это первая новость в интернет-магазине.', 'large_Фото-2.webp', '31.01.2016');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `login` varchar(255) CHARACTER SET utf8 NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `login`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'Aiza', '090191');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `about`
--
ALTER TABLE `about`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `header`
--
ALTER TABLE `header`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `prace`
--
ALTER TABLE `prace`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `slider`
--
ALTER TABLE `slider`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `statbaner`
--
ALTER TABLE `statbaner`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `stock`
--
ALTER TABLE `stock`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `about`
--
ALTER TABLE `about`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `header`
--
ALTER TABLE `header`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `prace`
--
ALTER TABLE `prace`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `statbaner`
--
ALTER TABLE `statbaner`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `stock`
--
ALTER TABLE `stock`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
