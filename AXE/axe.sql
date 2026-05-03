-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 03 mai 2026 à 13:50
-- Version du serveur : 8.4.7
-- Version de PHP : 8.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `axe`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `pseudo`, `email`, `password`) VALUES
(29, 'wam', 'wam@free.fr', '$2y$10$Zgze1WDGr5rLeZ.dvEKbB.wXmRU7LUKyxwN3qdrtYqa2gq7Hv4c9C'),
(28, '123', '123@gmail.com', '$2y$10$0SJov1.XBjz4f6xtmgo3W.2aIfxmYJFhzS9JEiLB.Mvg37nBZH.NW'),
(27, '123456', '123456@gmail.com', '$2y$10$ls79RZbJ4hooXPQpn2Qx3eWJfiXI45LsJIpK2krGkJszHPtti0ps2'),
(26, 'feafzef', 'pseudo@email.com', '$2y$10$3k4aNVwX3f7bArDt1isvHeNnB/mSHOxfQGQYGjgDyI42aE5TSYh5G'),
(25, 'Pseudo', 'caca@gmail.com', '$2y$10$DaVG4dOq0qYWKpjpW23WWe4b1enag5h7kiyoFWG1LxI0glTHnDlim');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
