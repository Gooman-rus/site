-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Янв 15 2013 г., 09:06
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `notebook`
--

-- --------------------------------------------------------

--
-- Структура таблицы `main`
--

CREATE TABLE IF NOT EXISTS `main` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `fio` varchar(30) CHARACTER SET cp1251 NOT NULL,
  `gender` varchar(5) CHARACTER SET cp1251 NOT NULL,
  `town` varchar(25) CHARACTER SET cp1251 NOT NULL,
  `house` int(5) NOT NULL,
  `phone` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=cp1250 AUTO_INCREMENT=7 ;

--
-- Дамп данных таблицы `main`
--

INSERT INTO `main` (`id`, `fio`, `gender`, `town`, `house`, `phone`) VALUES
(1, 'Квасин Евгений Иннокентиевич', 'М', 'Севастополь', 32, 332211),
(2, 'Васильева Марфа Петровна', 'Ж', 'Москва', 43, 233311),
(3, 'Танков Сергей Афанасиевич', 'М', 'Кировоград', 54, 111111),
(4, 'Чемодан Прокоп Евлампиевич', 'М', 'Симферополь', 54, 554433),
(5, 'Светов Евлампий Евлампиевич', 'М', 'Барнаул', 78, 774412),
(6, 'Тракова Марина Васильевна', 'Ж', 'Санкт-Петербург', 123, 324587);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
