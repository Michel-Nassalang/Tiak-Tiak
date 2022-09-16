-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 25 sep. 2021 à 00:44
-- Version du serveur : 10.4.20-MariaDB
-- Version de PHP : 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `tiak-tiak`
--

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `nom`, `email`, `message`) VALUES
(1, 'Michel', 'nassalang.michel@gmail.com', 'Test'),
(2, 'Michel Nassalang', 'nassalang.michel@ugb.edu.sn', 'merci');

-- --------------------------------------------------------

--
-- Structure de la table `livraison`
--

CREATE TABLE `livraison` (
  `id` int(250) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `produits` varchar(250) NOT NULL,
  `depart` varchar(250) NOT NULL,
  `livraison` varchar(250) NOT NULL,
  `heure` time NOT NULL,
  `telephone` varchar(50) NOT NULL,
  `poids` varchar(250) NOT NULL,
  `type` varchar(50) NOT NULL,
  `prix` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `livraison`
--

INSERT INTO `livraison` (`id`, `nom`, `produits`, `depart`, `livraison`, `heure`, `telephone`, `poids`, `type`, `prix`) VALUES
(4, 'Michel Nassalang', 'Télévision', 'Diamniadio', 'Parcelles unité 11', '00:00:00', '771112236', 'prix', 'tiak-tiak', 2500),
(5, 'Michel Nassalang', 'Lunettes de Soleil', 'Diamniadio', 'Keur Massar', '18:15:00', '771112236', 'prix', 'tiak-tiak', 0);

-- --------------------------------------------------------

--
-- Structure de la table `taxi`
--

CREATE TABLE `taxi` (
  `id` int(250) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `depart` varchar(250) NOT NULL,
  `arrivee` varchar(250) NOT NULL,
  `heure` time NOT NULL,
  `telephone` varchar(50) NOT NULL,
  `payement` varchar(50) NOT NULL,
  `place` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `taxi`
--

INSERT INTO `taxi` (`id`, `nom`, `depart`, `arrivee`, `heure`, `telephone`, `payement`, `place`) VALUES
(2, 'Michel Nassalang', 'Parcelles', 'Grand Yoff', '00:00:00', '771112236', 'Orange Money', 1);

-- --------------------------------------------------------

--
-- Structure de la table `tiak`
--

CREATE TABLE `tiak` (
  `id` int(250) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `depart` varchar(250) NOT NULL,
  `arrivee` varchar(250) NOT NULL,
  `heure` time NOT NULL,
  `telephone` varchar(50) NOT NULL,
  `payement` varchar(50) NOT NULL,
  `place` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `tiak`
--

INSERT INTO `tiak` (`id`, `nom`, `depart`, `arrivee`, `heure`, `telephone`, `payement`, `place`) VALUES
(9, 'Michel Nassalang', 'Diamniadio', 'Parcelles', '00:00:09', '771112236', 'Orange Money', 1),
(10, 'Michel Nassalang', 'Diamniadio', 'Parcelles', '15:36:00', '771112236', 'Orange Money', 1),
(12, 'Michel Nassalang', 'Diamniadio', 'Parcelles', '16:15:00', '771112236', 'Orange Money', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `livraison`
--
ALTER TABLE `livraison`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `taxi`
--
ALTER TABLE `taxi`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tiak`
--
ALTER TABLE `tiak`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `livraison`
--
ALTER TABLE `livraison`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `taxi`
--
ALTER TABLE `taxi`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `tiak`
--
ALTER TABLE `tiak`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
