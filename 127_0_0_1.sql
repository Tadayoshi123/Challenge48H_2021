-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 23 fév. 2021 à 09:25
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `challenge48h`
--
CREATE DATABASE IF NOT EXISTS `challenge48h` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `challenge48h`;

-- --------------------------------------------------------

--
-- Structure de la table `aliment`
--

DROP TABLE IF EXISTS `aliment`;
CREATE TABLE IF NOT EXISTS `aliment` (
  `id_aliment` int(10) NOT NULL AUTO_INCREMENT,
  `titre` varchar(40) NOT NULL,
  `img` varchar(150) CHARACTER SET utf8mb4 DEFAULT NULL,
  `type` varchar(20) NOT NULL,
  `p_produit` varchar(3) NOT NULL,
  `p_humain` varchar(3) NOT NULL,
  `p_instit` varchar(3) NOT NULL,
  `format` varchar(11) NOT NULL,
  `credits` varchar(50) DEFAULT NULL,
  `droits` varchar(3) DEFAULT NULL,
  `copyright` varchar(30) DEFAULT NULL,
  `date_end` date DEFAULT NULL,
  `tags` varchar(70) DEFAULT NULL,
  PRIMARY KEY (`id_aliment`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `aliment`
--

INSERT INTO `aliment` (`id_aliment`, `titre`, `img`, `type`, `p_produit`, `p_humain`, `p_instit`, `format`, `credits`, `droits`, `copyright`, `date_end`, `tags`) VALUES
(17, 'dqsqsd', 'img/9.jpg', 'photo Passion Froid', 'oui', 'oui', 'non', 'horizontal', NULL, NULL, NULL, NULL, NULL),
(18, 'azeez', 'img/9.jpg', 'photo Passion Froid', 'oui', 'oui', 'oui', 'vertical', '', 'oui', NULL, NULL, NULL),
(19, 'azeeza', 'img/9.jpg', 'photo Passion Froid', 'oui', 'oui', 'oui', 'vertical', 'eazzae', 'oui', NULL, NULL, NULL),
(20, 'aeeaz', 'img/9.jpg', 'photo Passion Froid', 'oui', 'oui', 'oui', 'vertical', 'eazaez', 'oui', NULL, NULL, 'ezaaze');

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

DROP TABLE IF EXISTS `image`;
CREATE TABLE IF NOT EXISTS `image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_image` varchar(50) NOT NULL,
  `taille` int(11) NOT NULL,
  `type` int(20) NOT NULL,
  `bin` longblob NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
