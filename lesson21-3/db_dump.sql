-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 29 2017 г., 14:19
-- Версия сервера: 5.5.50
-- Версия PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `cms.dev`
--

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `pub_time` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `pub_time`) VALUES
(7, 'Vestibulum at semper purus, quis placerat velit. ', 'Nullam nisl felis, scelerisque sed sagittis eu, cursus vel dolor. Donec ultrices rutrum enim. Praesent dignissim viverra euismod. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eros velit, aliquet nec laoreet at, dignissim sit amet turpis. Maecenas mattis nec sem ac bibendum. Aliquam lobortis ut lorem eu luctus. Phasellus sodales interdum mi sed sodales. Fusce ornare augue ac ipsum ultrices, ac ultrices nunc varius. Mauris quis scelerisque nibh. Nam et enim eget urna porta tristique. Aenean pretium vel velit at pretium. Etiam nisl arcu, maximus et mauris et, tristique iaculis turpis. Nulla facilisi. Nulla commodo urna metus, ut condimentum massa elementum eget.Etiam a auctor odio. Vivamus venenatis sit amet risus in viverra. Nulla blandit, lorem bibendum consequat pulvinar, magna neque commodo lectus, faucibus pulvinar est erat ac nibh. Curabitur eget bibendum nisi, sed elementum quam. Ut ornare rutrum augue, in ullamcorper risus placerat in. Ut nec tortor quis libero accumsan gravida sed nec lacus. Vivamus vel augue dolor. Donec in ipsum lectus. In et ante arcu. Ut vel erat et tortor egestas condimentum a eget metus. Integer eu lorem arcu.', '2016-11-10 11:43:47'),
(8, 'Vestibulum at semper purus, quis placerat velit. ', 'Nullam nisl felis, scelerisque sed sagittis eu, cursus vel dolor. Donec ultrices rutrum enim. Praesent dignissim viverra euismod. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eros velit, aliquet nec laoreet at, dignissim sit amet turpis. Maecenas mattis nec sem ac bibendum. Aliquam lobortis ut lorem eu luctus. Phasellus sodales interdum mi sed sodales. Fusce ornare augue ac ipsum ultrices, ac ultrices nunc varius. Mauris quis scelerisque nibh. Nam et enim eget urna porta tristique. Aenean pretium vel velit at pretium. Etiam nisl arcu, maximus et mauris et, tristique iaculis turpis. Nulla facilisi. Nulla commodo urna metus, ut condimentum massa elementum eget.Etiam a auctor odio. Vivamus venenatis sit amet risus in viverra. Nulla blandit, lorem bibendum consequat pulvinar, magna neque commodo lectus, faucibus pulvinar est erat ac nibh. Curabitur eget bibendum nisi, sed elementum quam. Ut ornare rutrum augue, in ullamcorper risus placerat in. Ut nec tortor quis libero accumsan gravida sed nec lacus. Vivamus vel augue dolor. Donec in ipsum lectus. In et ante arcu. Ut vel erat et tortor egestas condimentum a eget metus. Integer eu lorem arcu.', '2016-11-10 11:43:54');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
