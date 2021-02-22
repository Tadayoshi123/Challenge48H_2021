-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 22 fév. 2021 à 15:57
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
  `name` varchar(40) NOT NULL,
  `type` int(1) DEFAULT NULL,
  `p_humain` tinyint(1) DEFAULT NULL,
  `p_produit` tinyint(1) DEFAULT NULL,
  `p_instit` tinyint(1) DEFAULT NULL,
  `format` tinyint(1) DEFAULT NULL,
  `credits` varchar(50) NOT NULL,
  `droits` tinyint(1) DEFAULT NULL,
  `copyright` tinyint(1) DEFAULT NULL,
  `date_end` date NOT NULL,
  `tags` varchar(70) DEFAULT NULL,
  `image` varchar(150) NOT NULL,
  PRIMARY KEY (`id_aliment`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
