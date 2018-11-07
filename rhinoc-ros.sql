-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 07 nov. 2018 à 09:07
-- Version du serveur :  5.7.21
-- Version de PHP :  7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `rhinoc-ros`
--

-- --------------------------------------------------------

--
-- Structure de la table `events`
--

DROP TABLE IF EXISTS `events`;
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
  `price` int(11) NOT NULL,
  `participant_number` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `events`
--

INSERT INTO `events` (`id`, `title`, `description`, `date_start`, `date_end`, `idcreator`, `adress`, `url`, `date_created`, `price`, `participant_number`) VALUES
(1, 'event 1 ', 'rzgqzrsgsehgsethqe', '2018-11-05 20:36:00', '2018-11-06 00:00:00', 1, '1 rue de jesaispas', 'wow.com', '2018-11-05 15:36:00', 100, 20),
(2, 'event 2 ', 'rzgqlhgozqilfhvzivqrzgqf', '2018-11-06 20:36:00', '2018-11-07 00:00:00', 1, '2 rue de supercool', 'blabla.com', '2018-11-05 15:37:00', 2, 100),
(3, 'event 3', 'la descritionhgehgksehgsehg', '2018-11-22 00:00:00', '2018-11-23 00:00:00', 2, '5 rue de la liberté', 'okokok.okok', '2018-11-05 16:31:00', 0, 20),
(4, 'Evenement trop bien', 'lalallalalalallaa', '2222-02-22 22:22:00', '3333-03-31 03:33:00', 5, 'CHEZ MOI', 'https://www.youtube.com/watch?v=gho1Th8dk4o', '2018-11-07 09:17:14', 10, 100);

-- --------------------------------------------------------

--
-- Structure de la table `favorites`
--

DROP TABLE IF EXISTS `favorites`;
CREATE TABLE IF NOT EXISTS `favorites` (
  `iduser` int(11) NOT NULL,
  `idevent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `members`
--

DROP TABLE IF EXISTS `members`;
CREATE TABLE IF NOT EXISTS `members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `date_created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `members`
--

INSERT INTO `members` (`id`, `first_name`, `last_name`, `email`, `password`, `date_created`) VALUES
(1, 'cynthia', 'raj', 'cyn@gmail.com', '123456789', '2018-11-05 15:13:10'),
(2, 'saro', 'hihi', 'saro@yahoo.fr', '123456789', '2018-11-05 16:36:00'),
(3, 'a', 'a', 'serena.2lange@gmail.com', '$2y$15$YPz7jHa3.VoDIESYPi3uleQXhQPGiGlpJN4zNkRmdiIm.R5QPLLkG', '2018-11-06 10:05:47'),
(4, 'a', 'a', 'serena.2lange@gmail.com', '$2y$15$OCiRQII/UDCjYovnbgl61ermT/40bdAisqrkYsqvqGR4RzgzOOl2O', '2018-11-06 10:05:49'),
(5, 'Delange', 'Séréna', 'serena.delange@ecoles-wis.net', '$2y$15$fiT.Hzx.2mw8JqcbkHbGt.GVqdfrYdER9XZp8/0dqyuFq/tI/etjm', '2018-11-06 15:25:14');

-- --------------------------------------------------------

--
-- Structure de la table `participants`
--

DROP TABLE IF EXISTS `participants`;
CREATE TABLE IF NOT EXISTS `participants` (
  `iduser` int(11) NOT NULL,
  `idevent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
