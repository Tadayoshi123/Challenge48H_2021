-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 23 fév. 2021 à 08:53
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 8.0.0

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

CREATE TABLE `aliment` (
  `id_aliment` int(10) NOT NULL,
  `titre` varchar(40) NOT NULL,
  `img` varchar(150) CHARACTER SET utf8mb4 DEFAULT NULL,
  `type` int(1) DEFAULT NULL,
  `p_humain` tinyint(1) DEFAULT NULL,
  `p_produit` tinyint(1) DEFAULT NULL,
  `p_instit` tinyint(1) DEFAULT NULL,
  `format` tinyint(1) DEFAULT NULL,
  `credits` varchar(50) DEFAULT NULL,
  `droits` tinyint(1) DEFAULT NULL,
  `copyright` tinyint(1) DEFAULT NULL,
  `date_end` date DEFAULT NULL,
  `tags` varchar(70) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `aliment`
--

INSERT INTO `aliment` (`id_aliment`, `titre`, `img`, `type`, `p_humain`, `p_produit`, `p_instit`, `format`, `credits`, `droits`, `copyright`, `date_end`, `tags`) VALUES
(3, 'dfzfezxx', 'img/wakerz (1).png', NULL, NULL, NULL, NULL, NULL, 'kklk', NULL, NULL, '2021-02-25', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `name_image` varchar(50) NOT NULL,
  `taille` int(11) NOT NULL,
  `type` int(20) NOT NULL,
  `bin` longblob NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `aliment`
--
ALTER TABLE `aliment`
  ADD PRIMARY KEY (`id_aliment`);

--
-- Index pour la table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `aliment`
--
ALTER TABLE `aliment`
  MODIFY `id_aliment` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
