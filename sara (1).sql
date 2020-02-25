-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Фев 23 2020 г., 05:26
-- Версия сервера: 10.4.8-MariaDB
-- Версия PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `sara`
--

-- --------------------------------------------------------

--
-- Структура таблицы `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `description` varchar(10001) NOT NULL,
  `iframe_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `about`
--

INSERT INTO `about` (`id`, `title`, `description`, `iframe_id`) VALUES
(1, 'ABOUT US', 'Your About Us page should be:\r\n\r\n                Informative. It doesn’t always have to tell the whole story, but it should at least provide people with\r\n                an idea of who and what you are.\r\n                Contain social proof, testimonials, and some personal information that viewers can relate to such as\r\n                education, family, etc.\r\n                Useful and engaging.\r\n                Easy to navigate and accessible on any device.\r\n                That may all sound complicated, but it really isn’t.\r\n\r\n                The main purpose of your About Us page is to give visitors a glimpse into the identity of either a\r\n                person or business.\r\n\r\n                As users discover your brand, they need to distinguish what sets you apart and makes you… you.\r\n\r\n                This often requires finding the right balance between compelling content and a design carefully planned\r\n                to look the part.\r\n\r\n                Conveying your identity in a fun and approachable – but also reliable and informative – way is\r\n                challenging.\r\n\r\n                If you know who you are and your goal for your site, the About Us page should come naturally.\r\n\r\n                However, if you’re looking for some inspiration, you can always check out these 25 examples of creative\r\n                and engaging About Us pages.\r\n\r\n                These excellent examples will help you build a personal and engaging website journey.\r\n             ', 0),
(2, 'FIND US', '<iframe\r\n                src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3018.9422268623407!2d43.82555121477695!3d40.82923263837331!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4041f909f29c7d65%3A0xce9b63f6d438a567!2zUGFydXlyIFNldmFrIFN0LCBHeXVtcmksINCQ0YDQvNC10L3QuNGP!5e0!3m2!1sru!2s!4v1580838090342!5m2!1sru!2s\"\r\n                width=\"1000\" height=\"680\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"\r\n                class=\"map-find\"></iframe>', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `description` varchar(550) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `title`, `description`) VALUES
(1, 'Woman wear', ''),
(2, 'Chlidren', ''),
(3, 'Bags & Purses ', ''),
(4, 'Footwear', '');

-- --------------------------------------------------------

--
-- Структура таблицы `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `url` varchar(550) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `menu`
--

INSERT INTO `menu` (`id`, `title`, `url`) VALUES
(1, 'Home', 'index.php'),
(2, 'Shop', 'shop.php'),
(3, 'Checkout', 'checkout.php'),
(4, 'About Us', 'about.php');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `description` varchar(550) NOT NULL,
  `img_src` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `img_src`) VALUES
(1, 'FASHION TRENDS', '* Only today we offer free shipping', 'bg-1.jpg'),
(2, 'SUMMER COLLECTION', '* Only today we offer free shipping', 'bg-4.jpg'),
(3, 'WOMEN FASHION', '* Only today we offer free shipping', 'bg-2.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `new_arrivals`
--

CREATE TABLE `new_arrivals` (
  `id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `shop_item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `new_arrivals`
--

INSERT INTO `new_arrivals` (`id`, `title`, `shop_item_id`) VALUES
(1, 'ALL', 0),
(2, 'WOMAN', 0),
(3, 'ACCESSORIES', 0),
(4, 'KIDS', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `secondary_news`
--

CREATE TABLE `secondary_news` (
  `id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `description` varchar(550) NOT NULL,
  `img_src` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `secondary_news`
--

INSERT INTO `secondary_news` (`id`, `title`, `description`, `img_src`) VALUES
(1, 'SALE 30%', 'ON ACCESORIES', 'bg-2.jpg'),
(2, 'DESIGNER BAGS', 'IN BAGS EXCEPTING THE NEW COLLECTION', 'bg-3.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `shop_item`
--

CREATE TABLE `shop_item` (
  `id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `description` varchar(550) NOT NULL,
  `img_src` varchar(300) NOT NULL,
  `price` varchar(100) NOT NULL,
  `size` varchar(50) NOT NULL,
  `status` varchar(1) NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `shop_item`
--

INSERT INTO `shop_item` (`id`, `title`, `description`, `img_src`, `price`, `size`, `status`, `create_time`, `category_id`) VALUES
(1, 'Boutique Silk Dress', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia expedita quibusdam aspernatur, sapiente consectetur accusantium perspiciatis praesentium eligendi, in fugiat?', 'woman-clothes.webp', '$39.90', '', '', '2020-02-16 08:15:52', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `sub_menu`
--

CREATE TABLE `sub_menu` (
  `id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `description` varchar(550) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `sub_menu`
--

INSERT INTO `sub_menu` (`id`, `title`, `description`) VALUES
(1, 'Free Shipping & Returns', ''),
(2, '20% Discount for all dresses', ''),
(3, '20% Discount for students', '');

-- --------------------------------------------------------

--
-- Структура таблицы `support`
--

CREATE TABLE `support` (
  `id` int(11) NOT NULL,
  `text` varchar(550) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(150) NOT NULL,
  `lastname` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(30) NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(1) NOT NULL,
  `img_src` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `new_arrivals`
--
ALTER TABLE `new_arrivals`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `secondary_news`
--
ALTER TABLE `secondary_news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `shop_item`
--
ALTER TABLE `shop_item`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sub_menu`
--
ALTER TABLE `sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `support`
--
ALTER TABLE `support`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `new_arrivals`
--
ALTER TABLE `new_arrivals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `secondary_news`
--
ALTER TABLE `secondary_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `shop_item`
--
ALTER TABLE `shop_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `sub_menu`
--
ALTER TABLE `sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `support`
--
ALTER TABLE `support`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
