-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 05, 2018 at 05:49 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projekatmladi`
--

-- --------------------------------------------------------

--
-- Table structure for table `navigation`
--

DROP TABLE IF EXISTS `navigation`;
CREATE TABLE IF NOT EXISTS `navigation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `navigation`
--

INSERT INTO `navigation` (`id`, `name`) VALUES
(1, 'Pocetna'),
(2, 'Vijesti '),
(3, 'Projekti'),
(4, 'Aktivnosti'),
(5, 'Omladinska politika'),
(6, 'Linkovi'),
(7, 'Kontakti'),
(10, 'O nama');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `summary` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `full_text` varchar(5000) COLLATE utf8_unicode_ci NOT NULL,
  `img1` varchar(600) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `summary`, `full_text`, `img1`) VALUES
(37, 'Naslov 7', 'Nam ullamcorper imperdiet pretium. Integer in laoreet nulla. Maecenas ut turpis quis felis aliquam semper at in nisi. Etiam fermentum odio sed libero porta imperdiet. Donec sit amet sem posuere, elementum elit a, fermentum ex. Nulla sagittis lorem tortor, a maximus purus semper in. Fusce rutrum vestibulum mi, et euismod odio semper eget.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget vestibulum metus, quis vulputate enim. Morbi id ex nibh. Nulla fringilla lectus in semper facilisis. Integer cursus turpis at elit consectetur, ac mollis lectus aliquam. Aenean ex arcu, convallis eget neque non, ullamcorper sagittis dui. Nam ullamcorper imperdiet pretium. Integer in laoreet nulla. Maecenas ut turpis quis felis aliquam semper at in nisi. Etiam fermentum odio sed libero porta imperdiet. Donec sit amet sem posuere, elementum elit a, fermentum ex. Nulla sagittis lorem tortor, a maximus purus semper in. Fusce rutrum vestibulum mi, et euismod odio semper eget.\r\n\r\nPraesent at lacus eget nisi euismod tristique. Quisque luctus felis sit amet felis eleifend consectetur. Mauris cursus mauris id nunc tempus, non lobortis augue maximus. Suspendisse sed dolor ante. Vestibulum malesuada scelerisque nisi interdum vestibulum. In auctor leo quis venenatis interdum. Nam risus neque, condimentum efficitur lacus non, porttitor aliquet neque. Donec consequat ipsum tincidunt nisi luctus, gravida elementum nisl aliquet. Pellentesque vel cursus dui. Morbi magna mi, aliquet sit amet ipsum ut, viverra feugiat tortor.', 'James Milner.jpeg'),
(36, 'Naslov 6', 'Nam ullamcorper imperdiet pretium. Integer in laoreet nulla. Maecenas ut turpis quis felis aliquam semper at in nisi. Etiam fermentum odio sed libero porta imperdiet. Donec sit amet sem posuere, elementum elit a, fermentum ex. Nulla sagittis lorem tortor, a maximus purus semper in. Fusce rutrum vestibulum mi, et euismod odio semper eget.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget vestibulum metus, quis vulputate enim. Morbi id ex nibh. Nulla fringilla lectus in semper facilisis. Integer cursus turpis at elit consectetur, ac mollis lectus aliquam. Aenean ex arcu, convallis eget neque non, ullamcorper sagittis dui. Nam ullamcorper imperdiet pretium. Integer in laoreet nulla. Maecenas ut turpis quis felis aliquam semper at in nisi. Etiam fermentum odio sed libero porta imperdiet. Donec sit amet sem posuere, elementum elit a, fermentum ex. Nulla sagittis lorem tortor, a maximus purus semper in. Fusce rutrum vestibulum mi, et euismod odio semper eget.\r\n\r\nPraesent at lacus eget nisi euismod tristique. Quisque luctus felis sit amet felis eleifend consectetur. Mauris cursus mauris id nunc tempus, non lobortis augue maximus. Suspendisse sed dolor ante. Vestibulum malesuada scelerisque nisi interdum vestibulum. In auctor leo quis venenatis interdum. Nam risus neque, condimentum efficitur lacus non, porttitor aliquet neque. Donec consequat ipsum tincidunt nisi luctus, gravida elementum nisl aliquet. Pellentesque vel cursus dui. Morbi magna mi, aliquet sit amet ipsum ut, viverra feugiat tortor.', 'Danny Ings.jpeg'),
(35, 'Naslov 5', 'Nam ullamcorper imperdiet pretium. Integer in laoreet nulla. Maecenas ut turpis quis felis aliquam semper at in nisi. Etiam fermentum odio sed libero porta imperdiet. Donec sit amet sem posuere, elementum elit a, fermentum ex. Nulla sagittis lorem tortor, a maximus purus semper in. Fusce rutrum vestibulum mi, et euismod odio semper eget.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget vestibulum metus, quis vulputate enim. Morbi id ex nibh. Nulla fringilla lectus in semper facilisis. Integer cursus turpis at elit consectetur, ac mollis lectus aliquam. Aenean ex arcu, convallis eget neque non, ullamcorper sagittis dui. Nam ullamcorper imperdiet pretium. Integer in laoreet nulla. Maecenas ut turpis quis felis aliquam semper at in nisi. Etiam fermentum odio sed libero porta imperdiet. Donec sit amet sem posuere, elementum elit a, fermentum ex. Nulla sagittis lorem tortor, a maximus purus semper in. Fusce rutrum vestibulum mi, et euismod odio semper eget.\r\n\r\nPraesent at lacus eget nisi euismod tristique. Quisque luctus felis sit amet felis eleifend consectetur. Mauris cursus mauris id nunc tempus, non lobortis augue maximus. Suspendisse sed dolor ante. Vestibulum malesuada scelerisque nisi interdum vestibulum. In auctor leo quis venenatis interdum. Nam risus neque, condimentum efficitur lacus non, porttitor aliquet neque. Donec consequat ipsum tincidunt nisi luctus, gravida elementum nisl aliquet. Pellentesque vel cursus dui. Morbi magna mi, aliquet sit amet ipsum ut, viverra feugiat tortor.', 'Ben Woodburn.jpeg'),
(31, 'Naslov 1', 'Nam ullamcorper imperdiet pretium. Integer in laoreet nulla. Maecenas ut turpis quis felis aliquam semper at in nisi. Etiam fermentum odio sed libero porta imperdiet. Donec sit amet sem posuere, elementum elit a, fermentum ex. Nulla sagittis lorem tortor, a maximus purus semper in. Fusce rutrum vestibulum mi, et euismod odio semper eget.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget vestibulum metus, quis vulputate enim. Morbi id ex nibh. Nulla fringilla lectus in semper facilisis. Integer cursus turpis at elit consectetur, ac mollis lectus aliquam. Aenean ex arcu, convallis eget neque non, ullamcorper sagittis dui. Nam ullamcorper imperdiet pretium. Integer in laoreet nulla. Maecenas ut turpis quis felis aliquam semper at in nisi. Etiam fermentum odio sed libero porta imperdiet. Donec sit amet sem posuere, elementum elit a, fermentum ex. Nulla sagittis lorem tortor, a maximus purus semper in. Fusce rutrum vestibulum mi, et euismod odio semper eget.\r\n\r\nPraesent at lacus eget nisi euismod tristique. Quisque luctus felis sit amet felis eleifend consectetur. Mauris cursus mauris id nunc tempus, non lobortis augue maximus. Suspendisse sed dolor ante. Vestibulum malesuada scelerisque nisi interdum vestibulum. In auctor leo quis venenatis interdum. Nam risus neque, condimentum efficitur lacus non, porttitor aliquet neque. Donec consequat ipsum tincidunt nisi luctus, gravida elementum nisl aliquet. Pellentesque vel cursus dui. Morbi magna mi, aliquet sit amet ipsum ut, viverra feugiat tortor.', 'Adam Lalana.jpeg'),
(32, 'Naslov 2', 'Nam ullamcorper imperdiet pretium. Integer in laoreet nulla. Maecenas ut turpis quis felis aliquam semper at in nisi. Etiam fermentum odio sed libero porta imperdiet. Donec sit amet sem posuere, elementum elit a, fermentum ex. Nulla sagittis lorem tortor, a maximus purus semper in. Fusce rutrum vestibulum mi, et euismod odio semper eget.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget vestibulum metus, quis vulputate enim. Morbi id ex nibh. Nulla fringilla lectus in semper facilisis. Integer cursus turpis at elit consectetur, ac mollis lectus aliquam. Aenean ex arcu, convallis eget neque non, ullamcorper sagittis dui. Nam ullamcorper imperdiet pretium. Integer in laoreet nulla. Maecenas ut turpis quis felis aliquam semper at in nisi. Etiam fermentum odio sed libero porta imperdiet. Donec sit amet sem posuere, elementum elit a, fermentum ex. Nulla sagittis lorem tortor, a maximus purus semper in. Fusce rutrum vestibulum mi, et euismod odio semper eget.\r\n\r\nPraesent at lacus eget nisi euismod tristique. Quisque luctus felis sit amet felis eleifend consectetur. Mauris cursus mauris id nunc tempus, non lobortis augue maximus. Suspendisse sed dolor ante. Vestibulum malesuada scelerisque nisi interdum vestibulum. In auctor leo quis venenatis interdum. Nam risus neque, condimentum efficitur lacus non, porttitor aliquet neque. Donec consequat ipsum tincidunt nisi luctus, gravida elementum nisl aliquet. Pellentesque vel cursus dui. Morbi magna mi, aliquet sit amet ipsum ut, viverra feugiat tortor.', 'Alberto Moreno.jpeg'),
(33, 'Naslov 3', 'Nam ullamcorper imperdiet pretium. Integer in laoreet nulla. Maecenas ut turpis quis felis aliquam semper at in nisi. Etiam fermentum odio sed libero porta imperdiet. Donec sit amet sem posuere, elementum elit a, fermentum ex. Nulla sagittis lorem tortor, a maximus purus semper in. Fusce rutrum vestibulum mi, et euismod odio semper eget.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget vestibulum metus, quis vulputate enim. Morbi id ex nibh. Nulla fringilla lectus in semper facilisis. Integer cursus turpis at elit consectetur, ac mollis lectus aliquam. Aenean ex arcu, convallis eget neque non, ullamcorper sagittis dui. Nam ullamcorper imperdiet pretium. Integer in laoreet nulla. Maecenas ut turpis quis felis aliquam semper at in nisi. Etiam fermentum odio sed libero porta imperdiet. Donec sit amet sem posuere, elementum elit a, fermentum ex. Nulla sagittis lorem tortor, a maximus purus semper in. Fusce rutrum vestibulum mi, et euismod odio semper eget.\r\n\r\nPraesent at lacus eget nisi euismod tristique. Quisque luctus felis sit amet felis eleifend consectetur. Mauris cursus mauris id nunc tempus, non lobortis augue maximus. Suspendisse sed dolor ante. Vestibulum malesuada scelerisque nisi interdum vestibulum. In auctor leo quis venenatis interdum. Nam risus neque, condimentum efficitur lacus non, porttitor aliquet neque. Donec consequat ipsum tincidunt nisi luctus, gravida elementum nisl aliquet. Pellentesque vel cursus dui. Morbi magna mi, aliquet sit amet ipsum ut, viverra feugiat tortor.', 'Alex Oxlade-Chamberlain.jpeg'),
(34, 'Naslov 4', 'Nam ullamcorper imperdiet pretium. Integer in laoreet nulla. Maecenas ut turpis quis felis aliquam semper at in nisi. Etiam fermentum odio sed libero porta imperdiet. Donec sit amet sem posuere, elementum elit a, fermentum ex. Nulla sagittis lorem tortor, a maximus purus semper in. Fusce rutrum vestibulum mi, et euismod odio semper eget.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget vestibulum metus, quis vulputate enim. Morbi id ex nibh. Nulla fringilla lectus in semper facilisis. Integer cursus turpis at elit consectetur, ac mollis lectus aliquam. Aenean ex arcu, convallis eget neque non, ullamcorper sagittis dui. Nam ullamcorper imperdiet pretium. Integer in laoreet nulla. Maecenas ut turpis quis felis aliquam semper at in nisi. Etiam fermentum odio sed libero porta imperdiet. Donec sit amet sem posuere, elementum elit a, fermentum ex. Nulla sagittis lorem tortor, a maximus purus semper in. Fusce rutrum vestibulum mi, et euismod odio semper eget.\r\n\r\nPraesent at lacus eget nisi euismod tristique. Quisque luctus felis sit amet felis eleifend consectetur. Mauris cursus mauris id nunc tempus, non lobortis augue maximus. Suspendisse sed dolor ante. Vestibulum malesuada scelerisque nisi interdum vestibulum. In auctor leo quis venenatis interdum. Nam risus neque, condimentum efficitur lacus non, porttitor aliquet neque. Donec consequat ipsum tincidunt nisi luctus, gravida elementum nisl aliquet. Pellentesque vel cursus dui. Morbi magna mi, aliquet sit amet ipsum ut, viverra feugiat tortor.', 'Andy Robertson.jpeg'),
(38, 'Naslov 8', 'Nam ullamcorper imperdiet pretium. Integer in laoreet nulla. Maecenas ut turpis quis felis aliquam semper at in nisi. Etiam fermentum odio sed libero porta imperdiet. Donec sit amet sem posuere, elementum elit a, fermentum ex. Nulla sagittis lorem tortor, a maximus purus semper in. Fusce rutrum vestibulum mi, et euismod odio semper eget.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget vestibulum metus, quis vulputate enim. Morbi id ex nibh. Nulla fringilla lectus in semper facilisis. Integer cursus turpis at elit consectetur, ac mollis lectus aliquam. Aenean ex arcu, convallis eget neque non, ullamcorper sagittis dui. Nam ullamcorper imperdiet pretium. Integer in laoreet nulla. Maecenas ut turpis quis felis aliquam semper at in nisi. Etiam fermentum odio sed libero porta imperdiet. Donec sit amet sem posuere, elementum elit a, fermentum ex. Nulla sagittis lorem tortor, a maximus purus semper in. Fusce rutrum vestibulum mi, et euismod odio semper eget.\r\n\r\nPraesent at lacus eget nisi euismod tristique. Quisque luctus felis sit amet felis eleifend consectetur. Mauris cursus mauris id nunc tempus, non lobortis augue maximus. Suspendisse sed dolor ante. Vestibulum malesuada scelerisque nisi interdum vestibulum. In auctor leo quis venenatis interdum. Nam risus neque, condimentum efficitur lacus non, porttitor aliquet neque. Donec consequat ipsum tincidunt nisi luctus, gravida elementum nisl aliquet. Pellentesque vel cursus dui. Morbi magna mi, aliquet sit amet ipsum ut, viverra feugiat tortor.', 'Joel Matip.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `password`, `status`) VALUES
(1, 'nikola', 'jankovic', 'jannikola', '123', 0),
(2, 'ognjen', 'kezunovic', 'ogikeza', '456', 0),
(3, 'petar', 'petrovic', 'rope', '111', 0),
(4, 'marko ', 'markovic', 'mareCare', '222', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
