-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 07 nov. 2018 à 15:17
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
  `price` int(11) UNSIGNED NOT NULL,
  `participant_number` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `events`
--

INSERT INTO `events` (`id`, `title`, `description`, `date_start`, `date_end`, `idcreator`, `adress`, `url`, `date_created`, `price`, `participant_number`) VALUES
(8, 'Présentation-dédicace de Révolution végane', 'Scandale des abattoirs, pollutions diverses, explosion des maladies de civilisation… Depuis quelques années, la consommation carnée est remise en question. Mais pourrait-on vraiment se passer de viande et de produits animaux à l’échelle de la société toute entière ? Quelles seraient les conséquences sur la santé, l’agriculture, ou encore l’économie, de la transition vers un monde végane ?   C’est l’objet de Révolution végane, d’Élodie Vieille Blanchard, qui tente de répondre à ces questions et dessine des pistes pour inventer un autre monde, durable et respectueux des animaux.   Présentation du livre, échange avec le public et dédicace.', '2018-11-10 16:00:00', '2018-11-10 18:30:00', 5, '24 rue de l\'Etoile - Thuard Librairie 72100 Le Mans', 'https://www.vegetarisme.fr', '2018-11-07 15:14:27', 0, 50),
(9, 'Soirée VegOresto', 'Repas vegan proposé par le restaurant La Pizza de Nico au prix de 16€90 à 20h00, uniquement sur réservation via le formulaire.', '2018-11-17 20:00:00', '2018-11-17 23:30:00', 5, '4 boulevard du Zénith 44800 Saint-Herblain', 'https://www.facebook.com/events/2251217348281885/', '2018-11-07 15:16:20', 17, 25),
(10, 'Action Stop Fourrure', 'Le collectif nazairien pour les animaux organise une action contre la production de fourrure. Durant 3 heures, nous informerons les passants sur les conditions de vie des animaux de ferme à fourrure. De plus, nous ferons signer des pétitions. Si vous êtes présent physiquement, cliquez sur \"Je participe\", si vous êtes seulement intéressé, cliquez sur \"Je suis intéressé\". ', '2018-11-24 14:30:00', '2018-11-24 17:30:00', 7, 'Rue de la Paix et des Arts 44600 Saint-Nazaire', 'https://www.facebook.com/events/291645101426996/?event_time_id=291645121426994', '2018-11-07 15:17:47', 0, 200),
(11, 'Happening National Hommage Mevy', 'Happening synchronisé national pour demander au gouvernement une loi nationale pour l\'interdiction des cirques avec animaux sur le territoire. #CirqueSANSanimaux', '2018-11-24 14:30:00', '2018-11-24 17:00:00', 7, 'Place du Bouffay 44000 Nantes', 'https://www.facebook.com/events/264320027622473/', '2018-11-07 15:19:47', 0, 300),
(12, 'Action Stop Foie Gras', 'Le collectif nazairien pour les animaux organise une action non au foie gras. Durant trois heures, nous informerons les passants sur les conditions de vie et de production des canards, qui deviennent foie gras ! Nous distribuerons des tracts informatifs et des pétitions de l\'association L214. Si vous participez physiquement, cliquez sur \"Je participe\", si vous êtes seulement intéressé, cliquez sur \"Je suis intéressé\". ', '2018-12-01 14:30:00', '2018-11-01 17:30:00', 6, 'Rue de la Paix et des Arts 44600 Saint-Nazaire ', 'https://www.facebook.com/events/683746565316006/?event_time_id=683746578649338', '2018-11-07 15:21:07', 0, 200),
(13, 'Marché de Noël', 'Lundi au Jeudi : 10h – 20h Vendredi au Samedi : 10h – 21h Dimanche : 11h – 20h  Excepté le lundi 24 décembre: 10h – 18h', '2018-11-23 10:00:00', '2018-12-24 20:00:00', 6, 'Place royale, Nantes ', 'https://marche-de-noel-nantes.com', '2018-11-07 15:25:07', 0, 300);

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `members`
--

INSERT INTO `members` (`id`, `first_name`, `last_name`, `email`, `password`, `date_created`) VALUES
(5, 'Cynthia', 'Rajaonarison', 'c@gmail.com', '$2y$15$5zASwo0J2fWZUlPmcIbvF.eVBh3vLgIuWUL3Ge4Fkwa3jX0wuKdf6', '2018-11-07 15:07:19'),
(6, 'Séréna', 'Delange', 's@gmail.com', '$2y$15$ALDnEPPt81yFNHhH1sBgp.J8o.QjxiDE7v2i79AcCDhOLjxNEmxza', '2018-11-07 15:07:37'),
(7, 'Van', 'Page', 'v@gmail.com', '$2y$15$ScDypG/V6OeE9xCjgxgO5e4rWgO8JUIZK74dikF4Op9SHKRJsjF/K', '2018-11-07 15:07:59');

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
