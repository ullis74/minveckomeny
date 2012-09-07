-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Värd: localhost
-- Skapad: 06 september 2012 kl 12:13
-- Serverversion: 5.5.8
-- PHP-version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databas: `shopping`
--

-- --------------------------------------------------------

--
-- Struktur för tabell `calender`
--

CREATE TABLE IF NOT EXISTS `calender` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `day` varchar(10) NOT NULL,
  `date` datetime NOT NULL,
  `week` int(11) NOT NULL,
  `year` year(4) NOT NULL,
  `meal` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Data i tabell `calender`
--


-- --------------------------------------------------------

--
-- Struktur för tabell `ingredient`
--

CREATE TABLE IF NOT EXISTS `ingredient` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Data i tabell `ingredient`
--


-- --------------------------------------------------------

--
-- Struktur för tabell `recipe`
--

CREATE TABLE IF NOT EXISTS `recipe` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `ingredient_id` mediumint(9) NOT NULL,
  `amount` int(11) NOT NULL,
  `unitsid` mediumint(9) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Data i tabell `recipe`
--


-- --------------------------------------------------------

--
-- Struktur för tabell `recipelist`
--

CREATE TABLE IF NOT EXISTS `recipelist` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(9) NOT NULL,
  `recipe_id` mediumint(9) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Data i tabell `recipelist`
--


-- --------------------------------------------------------

--
-- Struktur för tabell `recipe_calender`
--

CREATE TABLE IF NOT EXISTS `recipe_calender` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `recipe_id` mediumint(9) NOT NULL,
  `calender_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Data i tabell `recipe_calender`
--


-- --------------------------------------------------------

--
-- Struktur för tabell `shoppinglist`
--

CREATE TABLE IF NOT EXISTS `shoppinglist` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `recipe_calender_id` mediumint(11) NOT NULL,
  `ingredient_id` mediumint(9) NOT NULL,
  `user_id` mediumint(9) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Data i tabell `shoppinglist`
--


-- --------------------------------------------------------

--
-- Struktur för tabell `units`
--

CREATE TABLE IF NOT EXISTS `units` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(164) CHARACTER SET utf8 NOT NULL,
  `type` enum('weight','volume','other') CHARACTER SET utf8 NOT NULL,
  `unit` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf32 AUTO_INCREMENT=31 ;

--
-- Data i tabell `units`
--

INSERT INTO `units` (`id`, `title`, `type`, `unit`) VALUES
(1, 'dl', 'volume', 100),
(2, 'st', 'other', 0),
(3, 'gram', 'weight', 1),
(4, 'msk', 'volume', 15),
(5, 'kg', 'weight', 1000),
(6, 'tsk', 'volume', 5),
(7, 'cm', 'other', 0),
(8, 'krm', 'volume', 1),
(9, 'dl', 'volume', 100),
(10, 'st', 'other', 0),
(11, 'gram', 'weight', 1),
(12, 'msk', 'volume', 15),
(13, 'kg', 'weight', 1000),
(14, 'tsk', 'volume', 5),
(15, 'cm', 'other', 0),
(16, 'krm', 'volume', 1),
(17, 'knippa(en)', 'other', 0),
(18, 'burk(ar)', 'other', 0),
(19, 'blad', 'other', 0),
(20, 'nypa(or)', 'other', 0),
(21, 'huvud', 'other', 0),
(22, 'port', 'other', 0),
(23, 'paket', 'other', 0),
(24, 'ark', 'other', 0),
(25, 'klase', 'other', 0),
(26, 'droppe(ar)', 'other', 0),
(27, 'del(ar)', 'other', 0),
(28, 'stänk', 'other', 0),
(29, 'sats(er)', 'other', 0),
(30, 'bit(ar)', 'other', 0);

-- --------------------------------------------------------

--
-- Struktur för tabell `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Data i tabell `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `email`, `username`, `password`) VALUES
(1, 'ulrika', 'olastuen', 'ullis_23@hotmail.com', 'ullis', 'ullis74');
