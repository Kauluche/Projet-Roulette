-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mer 17 Avril 2024 à 09:27
-- Version du serveur :  5.7.11
-- Version de PHP :  7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bdd_roulette`
--

-- --------------------------------------------------------

--
-- Structure de la table `appartenir`
--

CREATE TABLE `appartenir` (
  `idU` int(10) UNSIGNED NOT NULL,
  `idC` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `appartenir`
--

INSERT INTO `appartenir` (`idU`, `idC`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 4);

-- --------------------------------------------------------

--
-- Structure de la table `classes`
--

CREATE TABLE `classes` (
  `idC` int(10) UNSIGNED NOT NULL,
  `nomC` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `classes`
--

INSERT INTO `classes` (`idC`, `nomC`) VALUES
(1, 'SIO2'),
(4, 'TEST');

-- --------------------------------------------------------

--
-- Structure de la table `notes`
--

CREATE TABLE `notes` (
  `idN` int(10) UNSIGNED NOT NULL,
  `valeurN` int(11) NOT NULL,
  `dateN` varchar(50) NOT NULL,
  `idU` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `notes`
--

INSERT INTO `notes` (`idN`, `valeurN`, `dateN`, `idU`) VALUES
(19, 10, '2024-04-07', 27);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `idU` int(10) UNSIGNED NOT NULL,
  `prenomU` varchar(50) NOT NULL,
  `nomU` varchar(50) NOT NULL,
  `identifiant` varchar(50) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `passage` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`idU`, `prenomU`, `nomU`, `identifiant`, `mdp`, `passage`) VALUES
(1, 'Karim', 'Aoudache', 'karim.aoudache', 'motdepasse1', 1),
(2, 'Baptiste', 'Aveline', 'baptiste.aveline', 'motdepasse2', 1),
(3, 'Alexis', 'Ballot', 'alexis.ballot', 'motdepasse3', 1),
(4, 'Jordan', 'Camus', 'jordan.camus', 'motdepasse4', 0),
(5, 'Yacine', 'Chafaï', 'yacine.chafai', 'motdepasse5', 1),
(6, 'Clément', 'Chateau', 'clement.chateau', 'motdepasse6', 1),
(7, 'Nathan', 'Delafaite', 'nathan.delafaite', 'motdepasse7', 1),
(8, 'Léo', 'Gadroy', 'leo.gadroy', 'motdepasse8', 0),
(9, 'David', 'Gérard', 'david.gerard', 'motdepasse9', 1),
(10, 'Arthur', 'Malherbe', 'arthur.malherbe', 'motdepasse10', 0),
(11, 'Pauline', 'Mao', 'pauline.mao', 'motdepasse11', 1),
(12, 'Pierre-Loup', 'Nouvian', 'pierre-loup.nouvian', 'motdepasse12', 0),
(13, 'Nicolas', 'Oudar', 'nicolas.oudar', 'motdepasse13', 1),
(14, 'Flavien', 'Ponsin', 'flavien.ponsin', 'motdepasse14', 0),
(15, 'Hamza', 'Senhadji', 'hamza.senhadji', 'motdepasse15', 1),
(16, 'Victor', 'Turquier', 'victor.turquier', 'motdepasse16', 1),
(17, 'Luka', 'Sellier', 'luka.sellier', 'motdepasse17', 1),
(18, 'Yanis', 'Kreir', 'yanis.kreir', 'motdepasse18', 1),
(19, 'Léa', 'Hubert', 'lea.hubert', 'motdepasse19', 1),
(20, 'Corentin', 'Guillaume', 'corentin.guillaume', 'motdepasse20', 0),
(21, 'Aymeric', 'De Lange', 'aymeric.de.lange', 'motdepasse21', 1),
(22, 'Benjamin', 'Barial', 'benjamin.barial', 'motdepasse22', 0),
(23, 'Aurélien', 'Aubriet', 'aurelien.aubriet', 'motdepasse23', 0),
(24, 'Bryan', 'Vandendrich', 'bryan.vandendrich', 'motdepasse24', 0),
(25, 'Jules', 'Willig', 'jules.willig', 'motdepasse25', 1),
(26, 'Mathéo', 'Wintrebert', 'matheo.wintrebert', 'motdepasse26', 1),
(27, 'Test', 'Complet ', 'Test.Complet', 'mdpTest', 0),
(28, 'luka', 'sellier', 'prof', 'motdepasseprof', 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `appartenir`
--
ALTER TABLE `appartenir`
  ADD PRIMARY KEY (`idU`,`idC`),
  ADD KEY `idC` (`idC`);

--
-- Index pour la table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`idC`);

--
-- Index pour la table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`idN`),
  ADD KEY `idU` (`idU`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`idU`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `classes`
--
ALTER TABLE `classes`
  MODIFY `idC` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `notes`
--
ALTER TABLE `notes`
  MODIFY `idN` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `idU` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `appartenir`
--
ALTER TABLE `appartenir`
  ADD CONSTRAINT `appartenir_ibfk_1` FOREIGN KEY (`idU`) REFERENCES `utilisateurs` (`idU`),
  ADD CONSTRAINT `appartenir_ibfk_2` FOREIGN KEY (`idC`) REFERENCES `classes` (`idC`);

--
-- Contraintes pour la table `notes`
--
ALTER TABLE `notes`
  ADD CONSTRAINT `notes_ibfk_1` FOREIGN KEY (`idU`) REFERENCES `utilisateurs` (`idU`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
