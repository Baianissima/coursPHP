-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : dim. 20 fév. 2022 à 21:21
-- Version du serveur :  5.7.34
-- Version de PHP : 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `universite`
--

-- --------------------------------------------------------

--
-- Structure de la table `etudiants`
--

CREATE TABLE `etudiants` (
  `id_etudiant` int(3) NOT NULL,
  `cursus` varchar(20) CHARACTER SET latin1 NOT NULL,
  `civilite` enum('Mme','M') NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `pseudo` varchar(20) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `statut` int(1) NOT NULL DEFAULT '0',
  `message` varchar(200) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `etudiants`
--

INSERT INTO `etudiants` (`id_etudiant`, `cursus`, `civilite`, `prenom`, `nom`, `pseudo`, `mdp`, `statut`, `message`) VALUES
(1, 'Arts plastiques', 'Mme', 'Julia', 'Roberts', 'Juju', '1234', 0, ''),
(2, 'Lettres', 'M', 'Mauricio', 'Pereira', 'Momo', '1234', 0, ''),
(3, 'Lettres', 'Mme', 'Maura', 'Bento', 'Mama', '1234', 0, ''),
(4, 'Arts plastiques', 'Mme', 'Selma', 'Almeida', 'Sese', '1234', 0, ''),
(5, 'Lettres', 'M', 'Sandro', 'Silva', 'Sasa', '1234', 0, ''),
(6, 'Lettres', 'M', 'Antonio', 'Araujo', 'Tonton', '1234', 0, ''),
(7, 'Arts plastiques', 'Mme', 'Patricia', 'Pereira', 'Papa', '1234', 0, ''),
(8, 'Lettres', 'Mme', 'Roberta', 'Rios', 'Roro', '1234', 0, ''),
(9, 'Lettres', 'M', 'Wellington', 'Valença', 'Wewe', '1234', 0, ''),
(10, 'Arts plastiques', 'Mme', 'Vanille', 'Azul', 'Vava', '1234', 0, ''),
(11, 'Arts plastiques', 'M', 'Marques', 'Mario', 'Mamo', '1234', 0, ''),
(12, 'Lettres', 'Mme', 'Borges', 'Rita', 'Ritinha', '1234', 0, ''),
(13, 'Arts plastiques', 'M', 'Fernando', 'Franco', 'Fe', '1234', 0, '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `etudiants`
--
ALTER TABLE `etudiants`
  ADD PRIMARY KEY (`id_etudiant`),
  ADD KEY `cursus` (`cursus`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `etudiants`
--
ALTER TABLE `etudiants`
  MODIFY `id_etudiant` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
