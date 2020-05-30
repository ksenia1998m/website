-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Май 30 2020 г., 11:47
-- Версия сервера: 10.1.37-MariaDB
-- Версия PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `onlineshop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `authorization`
--

CREATE TABLE `authorization` (
  `ID_authorization` int(11) NOT NULL,
  `login` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `authorization`
--

INSERT INTO `authorization` (`ID_authorization`, `login`, `password`) VALUES
(1, 'root', '123');

-- --------------------------------------------------------

--
-- Структура таблицы `authorization2`
--

CREATE TABLE `authorization2` (
  `ID_authorization` int(11) NOT NULL,
  `login` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `authorization2`
--

INSERT INTO `authorization2` (`ID_authorization`, `login`, `password`) VALUES
(1, 'admin', '123');

-- --------------------------------------------------------

--
-- Структура таблицы `brand`
--

CREATE TABLE `brand` (
  `ID_brand` int(11) NOT NULL,
  `Naimenovanie` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `brand`
--

INSERT INTO `brand` (`ID_brand`, `Naimenovanie`) VALUES
(1, 'Любой'),
(2, '8 in 1'),
(3, 'ACANA'),
(4, 'Animonda'),
(5, 'ARDEN GRANGE'),
(6, 'B&B'),
(7, 'Belcando'),
(8, 'BERKLEY');

-- --------------------------------------------------------

--
-- Структура таблицы `feedback`
--

CREATE TABLE `feedback` (
  `ID_feedback` int(11) NOT NULL,
  `receiver_name` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `feedback`
--

INSERT INTO `feedback` (`ID_feedback`, `receiver_name`, `phone`) VALUES
(1, 'Анна', '8 (917) 015-63-89'),
(2, 'Екатерина', '8 (985) 750-36-00'),
(3, 'Кристина', '8 (915) 847-25-36'),
(4, 'Сергей', '8 (985) 752-36-95'),
(5, 'Елена', '8 (916) 452-66-55'),
(6, 'Дмитрий', '8 (988) 380-61-29'),
(7, 'Лариса', '8 (915) 887-20-42'),
(8, 'Михаил', '8 (929) 750-10-22'),
(17, 'Валерий', '8 (929) 047-45-63'),
(18, 'Александр', '8 (988) 380-61-29'),
(19, 'Дмитрий', '8 (985) 750-36-00'),
(20, 'Елена', '8 (916) 452-66-55'),
(21, 'Надежда', '8 (915) 777-93-36'),
(22, 'Лариса', '8 (915) 967-15-42'),
(23, 'Инна', '8 (929) 750-10-22'),
(24, 'Кирилл', '8 (985) 785-96-15'),
(43, 'Кирилл', '79653542185'),
(44, 'Ксения', '89854221111'),
(45, 'Ксения', '8 985 422 11 03'),
(46, 'Ксения', '8 915 017 85 96'),
(47, 'Ксения', '8 915 017 85 96'),
(48, 'Ксения', '8 915 017 85 96'),
(49, 'Ксения', '8 915 017 85 96'),
(50, 'Ксения', '8 915 017 85 96'),
(51, 'Ксения', '8 915 017 85 96'),
(52, 'Ксения', '8 915 017 85 96');

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `ID_good` int(11) NOT NULL,
  `ID_range` int(11) NOT NULL,
  `ID_categories` int(11) NOT NULL,
  `ID_brand` int(11) NOT NULL,
  `Images` varchar(10) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Price` varchar(10) NOT NULL,
  `ID_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`ID_good`, `ID_range`, `ID_categories`, `ID_brand`, `Images`, `Name`, `Price`, `ID_price`) VALUES
(1, 2, 2, 2, '1img1', 'Корм для собак DUKE\'S FARM для средних и крупных пород, индейка', '1500', 2),
(2, 2, 2, 4, '1img2', 'Корм для собак DUKE\'S FARM для средних и крупных пород, индейка', '4800', 4),
(3, 2, 2, 4, '1img3', 'Корм для собак DUKE\'S FARM Grainfree Говядина, клюква, шпинат конс.', '5800', 4),
(4, 2, 2, 4, '1img4', 'Корм для собак DUKE\'S FARM Grainfree Говядина, клюква, шпинат конс.', '4900', 4),
(5, 2, 2, 3, '1img5', 'Корм для собак DUKE\'S FARM Grainfree Говядина, клюква, шпинат конс.', '4700', 4),
(6, 2, 2, 4, '1img6', 'Корм для собак DUKE\'S FARM Grainfree Говядина, клюква, шпинат конс.', '6800', 5),
(7, 2, 2, 4, '1img7', 'Корм для собак DUKE\'S FARM Grainfree Говядина, клюква, шпинат конс.', '6900', 5),
(8, 2, 2, 2, '1img8', 'Корм для собак DUKE\'S FARM Grainfree Говядина, клюква, шпинат конс.', '3300', 3),
(9, 2, 2, 2, '1img9', 'Корм для собак DUKE\'S FARM Grainfree Говядина, клюква, шпинат конс.', '1700', 2),
(10, 2, 2, 3, '1img10', 'Корм для собак DUKE\'S FARM для средних и крупных пород, индейка', '4200', 3),
(11, 2, 2, 2, '1img11', 'Корм для собак DUKE\'S FARM для средних и крупных пород, индейка', '1600', 2),
(12, 2, 2, 4, '1img12', 'Корм для собак DUKE\'S FARM для средних и крупных пород, индейка', '4300', 3),
(13, 2, 2, 3, '1img13', 'Корм для собак DUKE\'S FARM для средних и крупных пород, индейка', '3400', 3),
(58, 3, 3, 4, '2img8', 'Товар', '5200', 4),
(59, 3, 3, 2, '2img9', 'Товар', '4400', 3),
(60, 3, 3, 3, '2img10', 'Миска', '2300', 2),
(72, 3, 3, 3, '2img1', 'Миска', '2700', 2),
(73, 3, 3, 3, '2img11', 'Миска', '1700', 2),
(75, 3, 3, 3, '2img4', 'Товар', '2300', 2),
(77, 3, 3, 4, '2img6', 'Товар', '7100', 5),
(78, 3, 3, 2, '2img7', 'Товар', '1600', 2),
(81, 3, 3, 2, '2img2', 'Миска', '3100', 3),
(82, 3, 3, 3, '2img3', 'Товар', '4300', 3),
(83, 3, 3, 4, '2img12', 'Миска', '4200', 4),
(85, 3, 3, 3, '2img5', 'Товар', '4600', 4),
(87, 3, 4, 2, '3img1', 'Товар', '1700', 2),
(88, 4, 4, 3, '3img2', 'Товар', '3700', 3),
(89, 4, 4, 4, '3img3', 'Товар', '8000', 5),
(90, 4, 4, 4, '3img4', 'Товар', '9000', 5),
(91, 4, 4, 4, '3img5', 'Товар', '6600', 5),
(92, 4, 4, 3, '3img6', 'Товар', '5500', 4),
(93, 4, 4, 4, '3img7', 'Товар', '4700', 4),
(94, 4, 4, 4, '3img8', 'Товар', '6300', 5),
(122, 5, 5, 2, '4img1', 'Товар', '1700', 2),
(123, 5, 5, 4, '4img2', 'Товар', '5600', 4),
(124, 5, 5, 3, '4img3', 'Товар', '4300', 3),
(125, 5, 5, 3, '4img4', 'Товар', '4700', 4),
(126, 5, 5, 4, '4img5', 'Товар', '3900', 3),
(127, 6, 6, 2, '5img1', 'Товар', '2000', 2),
(128, 6, 6, 2, '5img2', 'Товар', '1600', 2),
(129, 6, 6, 2, '5img3', 'Товар', '2400', 2),
(130, 6, 6, 3, '5img4', 'Товар', '4400', 3),
(131, 6, 6, 2, '5img5', 'Товар', '2200', 2),
(132, 6, 6, 4, '5img6', 'Товар', '4600', 4),
(133, 6, 6, 3, '5img7', 'Товар', '3300', 3),
(151, 7, 7, 2, '6img1', 'Товар', '1500', 2),
(152, 7, 7, 4, '6img2', 'Товар', '4900', 4),
(153, 7, 7, 3, '6img3', 'Товар', '4300', 3),
(169, 5, 5, 3, '4img6', 'Товар', '3300', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `ordering`
--

CREATE TABLE `ordering` (
  `ID_ordering` int(11) NOT NULL,
  `receiver_name` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `id_in_order` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `ordering`
--

INSERT INTO `ordering` (`ID_ordering`, `receiver_name`, `phone`, `address`, `date`, `time`, `id_in_order`) VALUES
(1, 'Валерий', '8 985 458 85 00', 'г. Москва, ул.Бабушкинская, д.10, корп. 11', '2018-05-08', '18:00:00', '15'),
(2, 'Анна', '8 985 458 85 00', 'г. Москва, ул.Бабушкинская, д.10, корп. 11', '2018-05-08', '18:00:00', '25'),
(6, 'Кирилл', '89653542185', 'г. Москва, ул.Бабушкинская, д.10, корп. 11', '2018-06-07', '08:00:00', '2'),
(7, 'Ксения', '8 915 017 85 96', 'г. Москва', '2020-05-31', '10:00:00', '1,3'),
(8, 'Ксения', '8 915 017 85 96', 'г. Москва', '2020-05-31', '12:00:00', '1,3'),
(9, 'Ксения', '8 915 017 85 96', 'г. Москва', '2020-05-31', '12:00:00', '1'),
(10, 'Ксения', '8 915 017 85 96', 'г. Москва', '2020-05-31', '12:00:00', '1,3'),
(11, 'Ксения', '8 915 017 85 96', 'г. Москва', '2020-05-31', '12:00:00', '1,3');

-- --------------------------------------------------------

--
-- Структура таблицы `price`
--

CREATE TABLE `price` (
  `ID_price` int(11) NOT NULL,
  `Naimenovanie` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `price`
--

INSERT INTO `price` (`ID_price`, `Naimenovanie`) VALUES
(1, 'Любая'),
(2, '20-150'),
(3, '150-1000'),
(4, '1500-3000'),
(5, 'более 3000');

-- --------------------------------------------------------

--
-- Структура таблицы `range`
--

CREATE TABLE `range` (
  `ID_range` int(11) NOT NULL,
  `Naimenovanie` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `range`
--

INSERT INTO `range` (`ID_range`, `Naimenovanie`) VALUES
(1, 'Любой'),
(2, 'Корм'),
(3, 'Миски,кормушки'),
(4, 'Груминг, косметика'),
(5, 'Лакомства'),
(6, 'Оборудование'),
(7, 'Витамины');

-- --------------------------------------------------------

--
-- Структура таблицы `сategories`
--

CREATE TABLE `сategories` (
  `ID_categories` int(11) NOT NULL,
  `Naimenovanie` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `сategories`
--

INSERT INTO `сategories` (`ID_categories`, `Naimenovanie`) VALUES
(1, 'Любая'),
(2, 'Для собак'),
(3, 'Для кошек'),
(4, 'Для грызунов'),
(5, 'Для рыб'),
(6, 'Для птиц'),
(7, 'Ветаптека');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `authorization`
--
ALTER TABLE `authorization`
  ADD PRIMARY KEY (`ID_authorization`);

--
-- Индексы таблицы `authorization2`
--
ALTER TABLE `authorization2`
  ADD PRIMARY KEY (`ID_authorization`);

--
-- Индексы таблицы `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`ID_brand`);

--
-- Индексы таблицы `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`ID_feedback`);

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`ID_good`),
  ADD KEY `ID_categories` (`ID_categories`),
  ADD KEY `ID_color` (`ID_range`),
  ADD KEY `ID_price` (`ID_price`),
  ADD KEY `ID_size` (`ID_brand`);

--
-- Индексы таблицы `ordering`
--
ALTER TABLE `ordering`
  ADD PRIMARY KEY (`ID_ordering`);

--
-- Индексы таблицы `price`
--
ALTER TABLE `price`
  ADD PRIMARY KEY (`ID_price`);

--
-- Индексы таблицы `range`
--
ALTER TABLE `range`
  ADD PRIMARY KEY (`ID_range`);

--
-- Индексы таблицы `сategories`
--
ALTER TABLE `сategories`
  ADD PRIMARY KEY (`ID_categories`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `authorization`
--
ALTER TABLE `authorization`
  MODIFY `ID_authorization` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `brand`
--
ALTER TABLE `brand`
  MODIFY `ID_brand` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `feedback`
--
ALTER TABLE `feedback`
  MODIFY `ID_feedback` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `ID_good` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=173;

--
-- AUTO_INCREMENT для таблицы `ordering`
--
ALTER TABLE `ordering`
  MODIFY `ID_ordering` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `price`
--
ALTER TABLE `price`
  MODIFY `ID_price` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `range`
--
ALTER TABLE `range`
  MODIFY `ID_range` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `сategories`
--
ALTER TABLE `сategories`
  MODIFY `ID_categories` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `goods`
--
ALTER TABLE `goods`
  ADD CONSTRAINT `goods_ibfk_1` FOREIGN KEY (`ID_categories`) REFERENCES `сategories` (`ID_categories`),
  ADD CONSTRAINT `goods_ibfk_2` FOREIGN KEY (`ID_range`) REFERENCES `range` (`ID_range`),
  ADD CONSTRAINT `goods_ibfk_3` FOREIGN KEY (`ID_price`) REFERENCES `price` (`ID_price`),
  ADD CONSTRAINT `goods_ibfk_4` FOREIGN KEY (`ID_brand`) REFERENCES `brand` (`ID_brand`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
