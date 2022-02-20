-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : lun. 10 jan. 2022 à 19:39
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
-- Base de données : `dialogue`
--

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE `commentaires` (
  `id_commentaires` int(5) NOT NULL,
  `pseudo` varchar(20) NOT NULL,
  `message` text NOT NULL,
  `date_enregistrement` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`id_commentaires`, `pseudo`, `message`, `date_enregistrement`) VALUES
(1, 'Teste', 'Isso é um teste do 2° if...', '2022-01-07 12:30:34'),
(2, 'Teste', 'Isso é um teste do 2° if...', '2022-01-07 12:32:21'),
(3, 'Teste', 'Isso é um teste do 2° if...', '2022-01-07 12:33:09'),
(4, 'Teste', 'Isso é um teste do 2° if...', '2022-01-07 12:33:37'),
(5, 'Teste', 'Isso é um teste do 2° if...', '2022-01-07 17:52:09'),
(6, 'Teste', 'Isso é outro teste', '2022-01-07 17:52:25'),
(7, 'Teste', 'Isso é outro teste', '2022-01-07 17:53:09'),
(8, 'Teste', 'Isso é outro teste', '2022-01-07 17:55:04'),
(9, 'Teste', 'Isso é outro teste', '2022-01-07 17:55:13'),
(10, 'Teste', 'Isso é outro teste', '2022-01-07 17:55:31'),
(11, 'Teste', 'Isso é outro teste', '2022-01-07 17:55:42'),
(12, 'Teste', 'Isso é outro teste', '2022-01-07 17:55:56'),
(13, 'Teste', 'Isso é outro teste', '2022-01-07 17:56:04'),
(14, 'Teste', 'Isso é outro teste', '2022-01-07 17:56:11'),
(15, 'Teste', 'Isso é outro teste', '2022-01-07 17:56:18'),
(16, 'Teste', 'Isso é outro teste', '2022-01-07 17:56:30'),
(17, 'Teste', 'Isso é outro teste', '2022-01-07 17:56:48'),
(18, 'Teste', 'Isso é outro teste', '2022-01-07 17:56:55'),
(19, 'Teste', 'Isso é outro teste', '2022-01-07 17:59:08'),
(20, 'Teste', 'Isso é outro teste', '2022-01-07 18:19:25'),
(21, 'Teste', 'Isso é outro teste', '2022-01-07 18:19:57'),
(22, 'Teste', 'Isso é outro teste', '2022-01-07 18:20:31'),
(23, 'Teste', 'Isso é outro teste', '2022-01-07 18:20:44');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`id_commentaires`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `id_commentaires` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
