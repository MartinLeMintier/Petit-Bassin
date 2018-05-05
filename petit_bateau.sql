-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 05 mai 2018 à 12:03
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `petit_bateau`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

DROP TABLE IF EXISTS `administrateur`;
CREATE TABLE IF NOT EXISTS `administrateur` (
  `Adresse_mail` varchar(50) NOT NULL,
  `mdp` varchar(20) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `ID` int(50) NOT NULL,
  PRIMARY KEY (`Adresse_mail`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `administrateur`
--

INSERT INTO `administrateur` (`Adresse_mail`, `mdp`, `nom`, `prenom`, `ID`) VALUES
('martin.le-mintier-de-la-motte-basse@edu.ece.fr', 'Martinlemintier', 'Le Mintier De La Mot', 'Martin', 0),
('quentin.are@live.fr', 'quentinare', 'are', 'quentin', 1),
('solene.consten@edu.ece.fr', 'Soleneconsten', 'Consten', 'Solene', 2);

-- --------------------------------------------------------

--
-- Structure de la table `aime`
--

DROP TABLE IF EXISTS `aime`;
CREATE TABLE IF NOT EXISTS `aime` (
  `IDutilisateur` int(11) NOT NULL,
  `IDpub` int(11) NOT NULL,
  PRIMARY KEY (`IDutilisateur`,`IDpub`),
  KEY `klsdhihqezfhm` (`IDpub`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `amis`
--

DROP TABLE IF EXISTS `amis`;
CREATE TABLE IF NOT EXISTS `amis` (
  `ID` int(100) NOT NULL,
  `IDami` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `amis`
--

INSERT INTO `amis` (`ID`, `IDami`) VALUES
(1, 2),
(1, 3),
(2, 1);

-- --------------------------------------------------------

--
-- Structure de la table `auteur`
--

DROP TABLE IF EXISTS `auteur`;
CREATE TABLE IF NOT EXISTS `auteur` (
  `adresse_mail` varchar(50) NOT NULL,
  `mdp` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `photodepp` varchar(50) NOT NULL,
  `photodecouv` varchar(50) NOT NULL,
  `ID` int(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `auteur`
--

INSERT INTO `auteur` (`adresse_mail`, `mdp`, `prenom`, `nom`, `photodepp`, `photodecouv`, `ID`) VALUES
('mail1@edu.ece.fr', 'mdp1', 'Marie', 'Yayawi', 'base.jpg', 'pcbase.jpg', 1),
('mail2@edu.ece.fr', 'mdp2', 'amandine', 'duc', 'base.jpg', 'Piscine-Bora-Debord-120-5-768x374.jpg', 2),
('caca', 'caca', 'caca', 'caca', 'base.jpg', 'pcbase.jpg', 3);

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

DROP TABLE IF EXISTS `commentaires`;
CREATE TABLE IF NOT EXISTS `commentaires` (
  `IDcom` int(11) NOT NULL,
  `ContenuCom` varchar(255) NOT NULL,
  PRIMARY KEY (`IDcom`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `contientpj`
--

DROP TABLE IF EXISTS `contientpj`;
CREATE TABLE IF NOT EXISTS `contientpj` (
  `IDcom` int(11) NOT NULL,
  `IDPJ` int(11) NOT NULL,
  PRIMARY KEY (`IDcom`,`IDPJ`),
  KEY `pjcom` (`IDPJ`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `ecrit`
--

DROP TABLE IF EXISTS `ecrit`;
CREATE TABLE IF NOT EXISTS `ecrit` (
  `IDauteur` int(11) NOT NULL,
  `IDcom` int(11) NOT NULL,
  PRIMARY KEY (`IDauteur`,`IDcom`),
  KEY `comauteur` (`IDcom`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `emplois`
--

DROP TABLE IF EXISTS `emplois`;
CREATE TABLE IF NOT EXISTS `emplois` (
  `IDemploi` int(11) NOT NULL,
  `Titre` varchar(255) NOT NULL,
  `Tel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `emplois`
--

INSERT INTO `emplois` (`IDemploi`, `Titre`, `Tel`) VALUES
(1, 'Stagiaire ECE Paris\r\nService EDT', 123),
(2, 'Vendeur de Hot Dogs', 45),
(3, 'Chercheur en Pokemon', 456),
(4, 'Cuisinier a la KFet E2', 5678),
(5, 'Femme de menage', 5678),
(6, 'Distributeur de tracts', 789),
(7, 'test', 5),
(8, 'er', 4),
(9, 'Assitant Soutenance de Projet Web ', 123456);

-- --------------------------------------------------------

--
-- Structure de la table `envoyermessages`
--

DROP TABLE IF EXISTS `envoyermessages`;
CREATE TABLE IF NOT EXISTS `envoyermessages` (
  `IDutilisateur` int(11) NOT NULL,
  `IDmessage` int(11) NOT NULL,
  PRIMARY KEY (`IDutilisateur`,`IDmessage`),
  KEY `messageauteur` (`IDmessage`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `est_ecrit_dans`
--

DROP TABLE IF EXISTS `est_ecrit_dans`;
CREATE TABLE IF NOT EXISTS `est_ecrit_dans` (
  `IDpub` int(11) NOT NULL,
  `IDcom` int(11) NOT NULL,
  PRIMARY KEY (`IDpub`,`IDcom`),
  KEY `dtrytyjkhjlmo` (`IDcom`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `IDmessages` int(11) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Prenom` varchar(255) NOT NULL,
  `Contenu` varchar(255) NOT NULL,
  PRIMARY KEY (`IDmessages`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `partage`
--

DROP TABLE IF EXISTS `partage`;
CREATE TABLE IF NOT EXISTS `partage` (
  `IDutilisateur` int(11) NOT NULL,
  `IDpub` int(11) NOT NULL,
  `textepartage` varchar(255) NOT NULL,
  PRIMARY KEY (`IDutilisateur`,`IDpub`),
  KEY `dzad` (`IDpub`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `pj`
--

DROP TABLE IF EXISTS `pj`;
CREATE TABLE IF NOT EXISTS `pj` (
  `IDPJ` int(11) NOT NULL,
  `Contenu` longblob NOT NULL,
  `Type` enum('JPEG','PNG','MP4','') DEFAULT NULL,
  PRIMARY KEY (`IDPJ`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `publication`
--

DROP TABLE IF EXISTS `publication`;
CREATE TABLE IF NOT EXISTS `publication` (
  `IDPub` int(11) NOT NULL,
  `Texte` varchar(255) NOT NULL,
  `Lieu` varchar(255) NOT NULL,
  `Date` date NOT NULL,
  `NbLikes` int(11) NOT NULL,
  `humeur` enum('Content','Triste','J''ai faim','Colère') NOT NULL,
  `Emploi` enum('Oui','Non','','') DEFAULT NULL,
  PRIMARY KEY (`IDPub`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `publication`
--

INSERT INTO `publication` (`IDPub`, `Texte`, `Lieu`, `Date`, `NbLikes`, `humeur`, `Emploi`) VALUES
(1, 'Le web c\'est vraiment trop genial !', 'Paris', '2018-05-15', 2, 'Colère', 'Non'),
(2, 'Qui veut manger avec moi ?', 'PAris', '2018-05-01', 123456789, 'J\'ai faim', 'Non'),
(3, 'Lolololo', 'Chez soso', '2018-05-03', 34, 'Content', 'Non'),
(5, 'Franchement, la piscine c\'est gé-nial, on bronze et tout', 'Maroc', '2018-05-16', 3145, 'Content', 'Non'),
(6, 'Par contre, bon 6 degres pour aller a la piscine c\'est pas ouf non plus ?', 'Finistere', '2018-05-01', 4, 'Colère', 'Non');

-- --------------------------------------------------------

--
-- Structure de la table `publie`
--

DROP TABLE IF EXISTS `publie`;
CREATE TABLE IF NOT EXISTS `publie` (
  `IDutilisateur` int(11) NOT NULL,
  `IDpub` int(11) NOT NULL,
  KEY `IDutilisateur` (`IDutilisateur`),
  KEY `IDpub` (`IDpub`),
  KEY `IDutilisateur_2` (`IDutilisateur`),
  KEY `IDpub_2` (`IDpub`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `publie`
--

INSERT INTO `publie` (`IDutilisateur`, `IDpub`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 5),
(2, 6);

-- --------------------------------------------------------

--
-- Structure de la table `recevoirmessages`
--

DROP TABLE IF EXISTS `recevoirmessages`;
CREATE TABLE IF NOT EXISTS `recevoirmessages` (
  `IDauteur` int(11) NOT NULL,
  `IDmessage` int(11) NOT NULL,
  PRIMARY KEY (`IDauteur`,`IDmessage`),
  KEY `messagauteurrece` (`IDmessage`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `reseaupro`
--

DROP TABLE IF EXISTS `reseaupro`;
CREATE TABLE IF NOT EXISTS `reseaupro` (
  `ID` int(11) NOT NULL,
  `IDcollegue` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reseaupro`
--

INSERT INTO `reseaupro` (`ID`, `IDcollegue`) VALUES
(2, 3);

-- --------------------------------------------------------

--
-- Structure de la table `supprimer`
--

DROP TABLE IF EXISTS `supprimer`;
CREATE TABLE IF NOT EXISTS `supprimer` (
  `IDutilisateur` int(11) NOT NULL,
  `IDpub` int(11) NOT NULL,
  PRIMARY KEY (`IDutilisateur`,`IDpub`),
  KEY `DUIZJDIAZO` (`IDpub`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `aime`
--
ALTER TABLE `aime`
  ADD CONSTRAINT `kljsdlncqzskl` FOREIGN KEY (`IDutilisateur`) REFERENCES `auteur` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `klsdhihqezfhm` FOREIGN KEY (`IDpub`) REFERENCES `publication` (`IDPub`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `contientpj`
--
ALTER TABLE `contientpj`
  ADD CONSTRAINT `compj` FOREIGN KEY (`IDcom`) REFERENCES `commentaires` (`IDcom`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pjcom` FOREIGN KEY (`IDPJ`) REFERENCES `pj` (`IDPJ`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `ecrit`
--
ALTER TABLE `ecrit`
  ADD CONSTRAINT `auteurcom` FOREIGN KEY (`IDauteur`) REFERENCES `auteur` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comauteur` FOREIGN KEY (`IDcom`) REFERENCES `commentaires` (`IDcom`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `envoyermessages`
--
ALTER TABLE `envoyermessages`
  ADD CONSTRAINT `auteurmessage` FOREIGN KEY (`IDutilisateur`) REFERENCES `auteur` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `messageauteur` FOREIGN KEY (`IDmessage`) REFERENCES `messages` (`IDmessages`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `est_ecrit_dans`
--
ALTER TABLE `est_ecrit_dans`
  ADD CONSTRAINT `dtrytyjkhjlmo` FOREIGN KEY (`IDcom`) REFERENCES `commentaires` (`IDcom`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ninhukqjc` FOREIGN KEY (`IDpub`) REFERENCES `publication` (`IDPub`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `partage`
--
ALTER TABLE `partage`
  ADD CONSTRAINT `blabl` FOREIGN KEY (`IDutilisateur`) REFERENCES `auteur` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dzad` FOREIGN KEY (`IDpub`) REFERENCES `publication` (`IDPub`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `publie`
--
ALTER TABLE `publie`
  ADD CONSTRAINT `publication` FOREIGN KEY (`IDpub`) REFERENCES `publication` (`IDPub`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `utilisateur` FOREIGN KEY (`IDutilisateur`) REFERENCES `auteur` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `recevoirmessages`
--
ALTER TABLE `recevoirmessages`
  ADD CONSTRAINT `auteurmessagerece` FOREIGN KEY (`IDauteur`) REFERENCES `auteur` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `messagauteurrece` FOREIGN KEY (`IDmessage`) REFERENCES `messages` (`IDmessages`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `supprimer`
--
ALTER TABLE `supprimer`
  ADD CONSTRAINT `DUIZJDIAZO` FOREIGN KEY (`IDpub`) REFERENCES `auteur` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `zjkhfjEZKCUZ` FOREIGN KEY (`IDutilisateur`) REFERENCES `auteur` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
