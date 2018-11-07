-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 07 Novembre 2018 à 14:57
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `rhinoc-ros`
--

-- --------------------------------------------------------

--
-- Structure de la table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `date_start` datetime NOT NULL,
  `date_end` datetime NOT NULL,
  `idcreator` int(11) NOT NULL,
  `adress` text NOT NULL,
  `url` varchar(200) DEFAULT NULL,
  `date_created` datetime NOT NULL,
  `price` int(11) unsigned NOT NULL,
  `participant_number` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `events`
--

INSERT INTO `events` (`id`, `title`, `description`, `date_start`, `date_end`, `idcreator`, `adress`, `url`, `date_created`, `price`, `participant_number`) VALUES
(1, 'event 1 ', 'rzgqzrsgsehgsethqe', '2018-11-05 20:36:00', '2018-11-06 00:00:00', 1, '1 rue de jesaispas', 'wow.com', '2018-11-05 15:36:00', 100, 20),
(2, 'event 2 ', 'rzgqlhgozqilfhvzivqrzgqf', '2018-11-06 20:36:00', '2018-11-07 00:00:00', 1, '2 rue de supercool', 'blabla.com', '2018-11-05 15:37:00', 2, 100),
(3, 'event 3', 'la descritionhgehgksehgsehg', '2018-11-22 00:00:00', '2018-11-23 00:00:00', 2, '5 rue de la liberté', 'okokok.okok', '2018-11-05 16:31:00', 0, 20),
(4, 'hihi event de cynthia', 'rzkhgoqlrshfOZQM<RSG?V', '2222-02-22 22:22:00', '2222-02-22 22:22:00', 3, '1 RUE DE JPPPPPPP', 'MAIS OSEKOUR', '2018-11-07 10:36:41', 100000, 1),
(5, 'event cynthia 2 ', 'SIESTE', '2233-02-23 21:11:00', '1225-11-11 12:22:00', 3, '1 rue du bouh', 'fb', '2018-11-07 10:43:30', 2, 2),
(6, 'Event du compte test', 'Descriptionnnnnnnnnnnnnnnn', '0001-01-01 00:00:00', '0001-01-01 00:00:00', 4, 'chez moi', 'jsp', '2018-11-07 10:50:49', 2, 2),
(7, 'un titre', 'une description', '1000-02-20 20:32:00', '3223-02-23 23:23:00', 4, '1 rue de oulala', '', '2018-11-07 11:14:03', 0, 10);

-- --------------------------------------------------------

--
-- Structure de la table `favorites`
--

CREATE TABLE IF NOT EXISTS `favorites` (
  `iduser` int(11) NOT NULL,
  `idevent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `date_created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `members`
--

INSERT INTO `members` (`id`, `first_name`, `last_name`, `email`, `password`, `date_created`) VALUES
(1, 'cynthia', 'raj', 'cyn@gmail.com', '123456789', '2018-11-05 15:13:10'),
(2, 'saro', 'hihi', 'saro@yahoo.fr', '123456789', '2018-11-05 16:36:00'),
(3, 'Cynthia', 'Rajanarison', 'c@c.c', '$2y$15$88I6ET5XiXv.5MCj56AE4uuYhGYyoA5gBdRdxJ6r5pS5er6tvNK1a', '2018-11-07 10:35:34'),
(4, 'test', 'compte', 't@t.t', '$2y$15$MjlFGDN0NwPVrn1JSI.eLuocV62ea9Gk9PIfn4/edNMfdXZ4d43ve', '2018-11-07 10:44:19');

-- --------------------------------------------------------

--
-- Structure de la table `participants`
--

CREATE TABLE IF NOT EXISTS `participants` (
  `iduser` int(11) NOT NULL,
  `idevent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
