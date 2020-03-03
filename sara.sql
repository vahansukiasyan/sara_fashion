-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2020 at 06:22 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sara`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `description` varchar(10001) NOT NULL,
  `title_am` varchar(150) NOT NULL,
  `description_am` varchar(10001) NOT NULL,
  `iframe_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `title`, `description`, `title_am`, `description_am`, `iframe_id`) VALUES
(1, 'ABOUT US', 'Your About Us page should be:\r\n\r\n                Informative. It doesn’t always have to tell the whole story, but it should at least provide people with\r\n                an idea of who and what you are.\r\n                Contain social proof, testimonials, and some personal information that viewers can relate to such as\r\n                education, family, etc.\r\n                Useful and engaging.\r\n                Easy to navigate and accessible on any device.\r\n                That may all sound complicated, but it really isn’t.\r\n\r\n                The main purpose of your About Us page is to give visitors a glimpse into the identity of either a\r\n                person or business.\r\n\r\n                As users discover your brand, they need to distinguish what sets you apart and makes you… you.\r\n\r\n                This often requires finding the right balance between compelling content and a design carefully planned\r\n                to look the part.\r\n\r\n                Conveying your identity in a fun and approachable – but also reliable and informative – way is\r\n                challenging.\r\n\r\n                If you know who you are and your goal for your site, the About Us page should come naturally.\r\n\r\n                However, if you’re looking for some inspiration, you can always check out these 25 examples of creative\r\n                and engaging About Us pages.\r\n\r\n                These excellent examples will help you build a personal and engaging website journey.\r\n             ', 'Մեր մասին', 'Ձեր մասին մեր էջը պետք է լինի ՝       Տեղեկատվական: Միշտ չէ, որ պետք է պատմել ամբողջ պատմությունը, բայց գոնե պետք է ապահովի մարդկանց  գաղափար, թե ով և ինչ ես դու: Պարունակում է սոցիալական ապացույցներ, ցուցմունքներ և որոշ անձնական տեղեկություններ, որոնցով հեռուստադիտողները կարող են առնչվել, ինչպիսիք են  կրթություն, ընտանիք և այլն: Օգտակար և գրավիչ:                 Ձեր «Մեր մասին» էջի հիմնական նպատակը այցելուներին հայացք է տալու որևէ մեկի ինքնության մասին                 անձը կամ բիզնեսը:                 Քանի որ օգտվողները հայտնաբերում են ձեր ապրանքանիշը, նրանք պետք է տարբերեն, թե ինչն է ձեզ առանձնացնում և ձեզ… ձեզ:                 Դա հաճախ պահանջում է ճիշտ հավասարակշռություն գտնել հարկադիր բովանդակության և ուշադիր պլանավորված ձևավորման միջև                 նայելու մասը:                 Ձեր ինքնությունը զվարճալի և մատչելի, բայց նաև հուսալի և տեղեկատվական եղանակով փոխանցելը                 մարտահրավեր:                 Եթե ​​գիտեք, թե ով եք դուք և ձեր կայքի նպատակը, «Մեր մասին» էջը պետք է բնականաբար ստացվի:                 Այնուամենայնիվ, եթե փնտրում եք ոգեշնչում, միշտ կարող եք ստուգել ստեղծագործական այս 25 օրինակները                 և ներգրավելով Մեր մասին էջերը:                 Այս հիանալի օրինակները կօգնեն ձեզ ստեղծել անձնական և գրավիչ կայքէջի ճանապարհորդություն:', 0),
(2, 'FIND US', '<iframe\r\n                src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3018.9422268623407!2d43.82555121477695!3d40.82923263837331!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4041f909f29c7d65%3A0xce9b63f6d438a567!2zUGFydXlyIFNldmFrIFN0LCBHeXVtcmksINCQ0YDQvNC10L3QuNGP!5e0!3m2!1sru!2s!4v1580838090342!5m2!1sru!2s\"\r\n                width=\"1000\" height=\"680\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"\r\n                class=\"map-find\"></iframe>', 'Գտնել մեզ', '<iframe                 src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3018.9422268623407!2d43.82555121477695!3d40.82923263837331!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4041f909f29c7d65%3A0xce9b63f6d438a567!2zUGFydXlyIFNldmFrIFN0LCBHeXVtcmksINCQ0YDQvNC10L3QuNGP!5e0!3m2!1sru!2s!4v1580838090342!5m2!1sru!2s\"                 width=\"1000\" height=\"680\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"                 class=\"map-find\"></iframe>', 0),
(3, '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `description` varchar(550) NOT NULL,
  `title_am` varchar(150) NOT NULL,
  `description_am` varchar(550) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `description`, `title_am`, `description_am`) VALUES
(1, 'Woman wear', 'women2', '', ''),
(2, 'Chlidren', 'kids2', '', ''),
(3, 'Bags & Purses ', 'bags2', '', ''),
(4, 'Footwear', 'footwear2\r\n', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `title_am` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `title`, `title_am`) VALUES
(1, 'Yerevan', 'Երևան'),
(2, 'Gyumri', 'Գյումրի'),
(3, 'Vanadzor', 'Վանաձոր'),
(4, 'Vagharshapat', 'Վաղարշապատ'),
(5, 'Abovyan', 'Աբովյան'),
(6, 'Kapan', 'Կապան'),
(7, 'Hrazdan', 'Հրազդան'),
(8, 'Armavir', 'Արմավիր'),
(9, 'Artashat', 'Արտաշատ'),
(10, 'Ijevan', 'Իջևան'),
(11, 'Gavar', 'Գավառ'),
(12, 'Goris', 'Գորիս'),
(13, 'Charentsavan', 'Չարենցավան'),
(14, 'Ararat', 'Արարատ'),
(15, 'Masis', 'Մասիս'),
(16, 'Artik', 'Արթիկ'),
(17, 'Sevan', 'Սևան'),
(18, 'Ashtarak', 'Աշտարակ'),
(19, 'Dilijan', 'Դիլիջան'),
(20, 'Sisian', 'Սիսիան'),
(21, 'Alaverdi', 'Ալավերդի'),
(22, 'Stepanavan', 'Ստեփանավան'),
(23, 'Martuni', 'Մարտունի'),
(24, 'Spitak', 'Սպիտակ'),
(25, 'Vardenis', 'Վարդենիս'),
(27, 'Yeghvard', 'Յեղվարդ'),
(28, 'Vedi', 'Վեդի'),
(29, 'Byureghavan', 'Բյուրեղավան'),
(30, 'Nor Hachn', 'Նոր Հաճն'),
(33, 'Metsamor', 'Մեծամոր'),
(34, 'Berd', 'Բերդ'),
(35, 'Yeghegnadzor', 'Յեղեգնաձոր'),
(36, 'Tashir', 'Տաշիր'),
(37, 'Qajaran', 'Քաջարան'),
(38, 'Aparan', 'Ապարան'),
(39, 'Vayk', 'Վայք'),
(40, 'Chambarak', 'Ճամբարակ'),
(41, 'Maralik', 'Մարալիկ'),
(42, 'Noyemberyan', 'Նոյեմբերյան'),
(43, 'Talin', 'Թալին'),
(44, 'Jermuk', 'Ջերմուկ'),
(45, 'Meghri', 'Մեղրի'),
(46, 'Ayrum', 'Այրում'),
(47, 'Akhtala', 'Ախթալա'),
(48, 'Tumanyan', 'Թումանյան'),
(49, 'Tsaghkadzor', 'Ծաղկաձոր');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `url` varchar(550) NOT NULL,
  `title_am` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `title`, `url`, `title_am`) VALUES
(1, 'Home', 'index.php', 'Գլխավոր'),
(2, 'Shop', 'shop.php', ''),
(3, 'Checkout', 'checkout.php', ''),
(4, 'About Us', 'about.php', 'Մեր մասին');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `description` varchar(550) NOT NULL,
  `title_am` varchar(150) NOT NULL,
  `description_am` varchar(550) NOT NULL,
  `img_src` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `title_am`, `description_am`, `img_src`) VALUES
(1, 'FASHION TRENDS', '* Only today we offer free shipping', '', '', 'bg-1.jpg'),
(2, 'SUMMER COLLECTION', '* Only today we offer free shipping', '', '', 'bg-4.jpg'),
(3, 'WOMEN FASHION', '* Only today we offer free shipping', '', '', 'bg-2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `new_arrivals`
--

CREATE TABLE `new_arrivals` (
  `id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `title_am` varchar(150) NOT NULL,
  `shop_item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `new_arrivals`
--

INSERT INTO `new_arrivals` (`id`, `title`, `title_am`, `shop_item_id`) VALUES
(1, 'ALL', 'Ամբողջը', 0),
(2, 'WOMAN', 'Կանացի', 0),
(3, 'ACCESSORIES', '', 0),
(4, 'KIDS', 'Մանկական', 0);

-- --------------------------------------------------------

--
-- Table structure for table `secondary_news`
--

CREATE TABLE `secondary_news` (
  `id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `description` varchar(550) NOT NULL,
  `img_src` varchar(300) NOT NULL,
  `title_am` varchar(150) NOT NULL,
  `description_am` varchar(550) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `secondary_news`
--

INSERT INTO `secondary_news` (`id`, `title`, `description`, `img_src`, `title_am`, `description_am`) VALUES
(1, 'SALE 30%', 'ON ACCESORIES', 'bg-2.jpg', '', ''),
(2, 'DESIGNER BAGS', 'IN BAGS EXCEPTING THE NEW COLLECTION', 'bg-3.jpg', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `shop_item`
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
-- Dumping data for table `shop_item`
--

INSERT INTO `shop_item` (`id`, `title`, `description`, `img_src`, `price`, `size`, `status`, `create_time`, `category_id`) VALUES
(1, 'Boutique Silk Dress', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia expedita quibusdam aspernatur, sapiente consectetur accusantium perspiciatis praesentium eligendi, in fugiat?', 'woman-clothes.webp', '$39.90', '', '', '2020-02-16 08:15:52', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sub_menu`
--

CREATE TABLE `sub_menu` (
  `id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `description` varchar(550) NOT NULL,
  `title_am` varchar(150) NOT NULL,
  `description_am` varchar(550) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sub_menu`
--

INSERT INTO `sub_menu` (`id`, `title`, `description`, `title_am`, `description_am`) VALUES
(1, 'Free Shipping & Returns', '', '', ''),
(2, '20% Discount for all dresses', '', '', ''),
(3, '20% Discount for students', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `support`
--

CREATE TABLE `support` (
  `id` int(11) NOT NULL,
  `text` varchar(550) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(150) NOT NULL,
  `lastname` varchar(150) NOT NULL,
  `city` varchar(500) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(30) NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(1) NOT NULL,
  `img_src` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `city`, `email`, `password`, `create_time`, `status`, `img_src`) VALUES
(2, 'Vahan', 'Sukiasyan', 'VP', 'vahansukiayan2@gmail.com', 'fjfjfj11', '2020-03-01 02:07:21', 0, ''),
(3, 'Vahan', 'Sukiasyan', 'AY', 'vahansukiayan2@gmail.com', 'jfjfjf22', '2020-03-01 02:08:10', 0, ''),
(55, 'Vahan', 'Sukiasyan', '', 'anahittmkr@gmail.com', 'hhaall;', '2020-03-01 03:12:17', 0, ''),
(56, 'Vahan', 'Sukiasyan', '', 'anahittmkr@gmail.com', 'hhaall;', '2020-03-01 03:13:41', 0, ''),
(57, 'Vahan', 'Sukiasyan', '', 'anahittmkr@gmail.com', 'hhaall;', '2020-03-01 03:14:40', 0, ''),
(58, 'Vahan', 'Sukiasyan', '', 'anahittmkr@gmail.com', 'hhaall;', '2020-03-01 03:17:16', 0, ''),
(59, 'Vahan', 'Sukiasyan', '', 'anahittmkr@gmail.com', 'hhaall;', '2020-03-01 03:17:22', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_arrivals`
--
ALTER TABLE `new_arrivals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `secondary_news`
--
ALTER TABLE `secondary_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop_item`
--
ALTER TABLE `shop_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_menu`
--
ALTER TABLE `sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `support`
--
ALTER TABLE `support`
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
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `new_arrivals`
--
ALTER TABLE `new_arrivals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `secondary_news`
--
ALTER TABLE `secondary_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `shop_item`
--
ALTER TABLE `shop_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sub_menu`
--
ALTER TABLE `sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `support`
--
ALTER TABLE `support`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
