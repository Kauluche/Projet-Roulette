-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Sam 06 Avril 2024 à 12:58
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
-- Structure de la table `absences`
--

CREATE TABLE `absences` (
  `idA` int(10) UNSIGNED NOT NULL,
  `dateA` date NOT NULL,
  `rectifier` tinyint(1) NOT NULL DEFAULT '0',
  `idC` int(10) UNSIGNED NOT NULL,
  `idU` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `absences`
--

INSERT INTO `absences` (`idA`, `dateA`, `rectifier`, `idC`, `idU`) VALUES
(1, '2024-04-05', 1, 1, 1),
(2, '2024-04-05', 0, 1, 3),
(3, '2024-04-05', 0, 1, 1),
(4, '2024-04-05', 1, 1, 1);

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
(17, 2),
(18, 2),
(19, 2),
(20, 2),
(21, 2),
(22, 2),
(23, 2),
(24, 2),
(25, 2),
(26, 2),
(1, 3),
(2, 3),
(3, 3),
(4, 3),
(5, 3),
(6, 3),
(7, 3),
(8, 3),
(9, 3),
(10, 3),
(11, 3),
(12, 3),
(13, 3),
(14, 3),
(15, 3),
(16, 3);

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
(2, 'SLAM2'),
(3, 'SISR2');

-- --------------------------------------------------------

--
-- Structure de la table `notes`
--

CREATE TABLE `notes` (
  `idN` int(10) UNSIGNED NOT NULL,
  `valeurN` int(11) NOT NULL,
  `idU` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `notes`
--

INSERT INTO `notes` (`idN`, `valeurN`, `idU`) VALUES
(13, 15, 1),
(14, 12, 2),
(15, 17, 3),
(16, 14, 4),
(17, 16, 5);

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
(1, 'Karim', 'Aoudache', 'karim.aoudache', 'motdepasse1', 0),
(2, 'Baptiste', 'Aveline', 'baptiste.aveline', 'motdepasse2', 0),
(3, 'Alexis', 'Ballot', 'alexis.ballot', 'motdepasse3', 0),
(4, 'Jordan', 'Camus', 'jordan.camus', 'motdepasse4', 0),
(5, 'Yacine', 'Chafaï', 'yacine.chafai', 'motdepasse5', 0),
(6, 'Clément', 'Chateau', 'clement.chateau', 'motdepasse6', 0),
(7, 'Nathan', 'Delafaite', 'nathan.delafaite', 'motdepasse7', 0),
(8, 'Léo', 'Gadroy', 'leo.gadroy', 'motdepasse8', 0),
(9, 'David', 'Gérard', 'david.gerard', 'motdepasse9', 0),
(10, 'Arthur', 'Malherbe', 'arthur.malherbe', 'motdepasse10', 0),
(11, 'Pauline', 'Mao', 'pauline.mao', 'motdepasse11', 0),
(12, 'Pierre-Loup', 'Nouvian', 'pierre-loup.nouvian', 'motdepasse12', 0),
(13, 'Nicolas', 'Oudar', 'nicolas.oudar', 'motdepasse13', 0),
(14, 'Flavien', 'Ponsin', 'flavien.ponsin', 'motdepasse14', 0),
(15, 'Hamza', 'Senhadji', 'hamza.senhadji', 'motdepasse15', 0),
(16, 'Victor', 'Turquier', 'victor.turquier', 'motdepasse16', 0),
(17, 'Luka', 'Sellier', 'luka.sellier', 'motdepasse17', 0),
(18, 'Yanis', 'Kreir', 'yanis.kreir', 'motdepasse18', 0),
(19, 'Léa', 'Hubert', 'lea.hubert', 'motdepasse19', 0),
(20, 'Corentin', 'Guillaume', 'corentin.guillaume', 'motdepasse20', 0),
(21, 'Aymeric', 'De Lange', 'aymeric.de.lange', 'motdepasse21', 0),
(22, 'Benjamin', 'Barial', 'benjamin.barial', 'motdepasse22', 0),
(23, 'Aurélien', 'Aubriet', 'aurelien.aubriet', 'motdepasse23', 0),
(24, 'Bryan', 'Vandendrich', 'bryan.vandendrich', 'motdepasse24', 0),
(25, 'Jules', 'Willig', 'jules.willig', 'motdepasse25', 0),
(26, 'Mathéo', 'Wintrebert', 'matheo.wintrebert', 'motdepasse26', 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `absences`
--

ALTER TABLE `absences`
  ADD PRIMARY KEY (`idA`),
  ADD KEY `idU` (`idU`),
  ADD KEY `idC` (`idC`);

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
-- AUTO_INCREMENT pour la table `absences`
--
ALTER TABLE `absences`
  MODIFY `idA` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `classes`
--
ALTER TABLE `classes`
  MODIFY `idC` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `notes`
--
ALTER TABLE `notes`
  MODIFY `idN` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `idU` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `absences`
--
ALTER TABLE `absences`
  ADD CONSTRAINT `absences_ibfk_1` FOREIGN KEY (`idU`) REFERENCES `utilisateurs` (`idU`),
  ADD CONSTRAINT `absences_ibfk_2` FOREIGN KEY (`idC`) REFERENCES `classes` (`idC`);

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
