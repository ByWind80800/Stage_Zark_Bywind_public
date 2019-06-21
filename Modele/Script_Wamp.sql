-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 20 juin 2019 à 08:03
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `freycenet`
--

-- --------------------------------------------------------

--
-- Structure de la table `actualite`
--

DROP TABLE IF EXISTS `actualite`;
CREATE TABLE IF NOT EXISTS `actualite` (
  `IDACTU` int(11) NOT NULL AUTO_INCREMENT,
  `IDTYPEMEDIA` int(11) DEFAULT NULL,
  `TITREACTU` char(30) DEFAULT NULL,
  `TEXTEACTU` text,
  `DATEACTU` date DEFAULT NULL,
  PRIMARY KEY (`IDACTU`),
  KEY `FK_ACTUALITE_TYPE_MEDIA` (`IDTYPEMEDIA`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `actualite`
--

INSERT INTO `actualite` (`IDACTU`, `IDTYPEMEDIA`, `TITREACTU`, `TEXTEACTU`, `DATEACTU`) VALUES
(2, 3, 'titre 2', 'Texte 2', '2019-06-01'),
(3, 3, 'titre 3', 'Texte 3', '2019-05-24');

-- --------------------------------------------------------

--
-- Structure de la table `elucm`
--

DROP TABLE IF EXISTS `elucm`;
CREATE TABLE IF NOT EXISTS `elucm` (
  `IDELU` int(11) NOT NULL AUTO_INCREMENT,
  `NOMELU` char(30) DEFAULT NULL,
  `PRENOMELU` char(30) DEFAULT NULL,
  `FONCTIONELU` char(70) DEFAULT NULL,
  `PHOTOELU` text,
  PRIMARY KEY (`IDELU`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `elucm`
--

INSERT INTO `elucm` (`IDELU`, `NOMELU`, `PRENOMELU`, `FONCTIONELU`, `PHOTOELU`) VALUES
(1, 'ARCHER', 'Marie-Hélène', 'Autre retraité', 'photo'),
(2, 'BERTRAND', 'René', 'Retraité de la fonction publique', 'photo'),
(3, 'CHANTEMESSE', 'Marie-Claude', 'Sans profession déclarée', 'photo'),
(4, 'COURIOL', 'Pierre', 'Artisan', 'photo'),
(5, 'DURAND', 'Daniel', 'Retraité salarié privé', 'photo'),
(6, 'DUSSAUD', 'François', 'Etudiant', 'photo'),
(7, 'FARGIER', 'Jean-Marc', 'Professeur du secondaire', 'photo'),
(8, 'REY', 'Jean-Pierre', 'Retraité de la fonction publique', 'photo'),
(10, 'SANCIER', 'Jean-Denis', 'Retraité salarié privé', 'photo'),
(11, 'SIGAUD', 'Daniel', 'Retraité artisans commerçant chef d\'entreprise', 'photo'),
(12, 'SURREL', 'Stéphanie', 'Employé', 'photo');

-- --------------------------------------------------------

--
-- Structure de la table `entreprises`
--

DROP TABLE IF EXISTS `entreprises`;
CREATE TABLE IF NOT EXISTS `entreprises` (
  `IDENTREPRISES` int(11) NOT NULL AUTO_INCREMENT,
  `NOMENTREPRISE` char(70) DEFAULT NULL,
  `NOMGERANT` char(30) DEFAULT NULL,
  `CORPSMETIER` char(50) DEFAULT NULL,
  PRIMARY KEY (`IDENTREPRISES`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `entreprises`
--

INSERT INTO `entreprises` (`IDENTREPRISES`, `NOMENTREPRISE`, `NOMGERANT`, `CORPSMETIER`) VALUES
(1, 'entreprises 1', 'gérant 1', 'Corps métier 1');

-- --------------------------------------------------------

--
-- Structure de la table `evenement`
--

DROP TABLE IF EXISTS `evenement`;
CREATE TABLE IF NOT EXISTS `evenement` (
  `IDEVENT` int(11) NOT NULL AUTO_INCREMENT,
  `LIBELLEEVENT` char(30) DEFAULT NULL,
  `DESCRIPTIF` text,
  PRIMARY KEY (`IDEVENT`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

DROP TABLE IF EXISTS `image`;
CREATE TABLE IF NOT EXISTS `image` (
  `IDIMG` int(11) NOT NULL AUTO_INCREMENT,
  `IDTYPEMEDIA` int(11) NOT NULL,
  `CHEMINIMG` text,
  PRIMARY KEY (`IDIMG`),
  KEY `FK_IMAGE_TYPE_MEDIA` (`IDTYPEMEDIA`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `image`
--

INSERT INTO `image` (`IDIMG`, `IDTYPEMEDIA`, `CHEMINIMG`) VALUES
(9, 1, 'photos_paysage/les_sucs_autour_de_freycenet_la_tour/f0538666.jpg'),
(11, 1, 'photos_paysage/église de la mairie.jpg'),
(12, 1, 'fichier_du_20190611074734.jpg'),
(14, 1, 'fichier_du_20190611075017.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `nouveaute`
--

DROP TABLE IF EXISTS `nouveaute`;
CREATE TABLE IF NOT EXISTS `nouveaute` (
  `IDNOUVEAUTE` int(2) NOT NULL AUTO_INCREMENT,
  `IDTYPEMEDIA` int(2) NOT NULL,
  `LIBELLENOUVEAUTE` char(32) DEFAULT NULL,
  `DESCRIPTIF` text,
  `DATENOUVEAUTE` date DEFAULT NULL,
  PRIMARY KEY (`IDNOUVEAUTE`),
  KEY `FK_NOUVEAUTE_TYPE_MEDIA` (`IDTYPEMEDIA`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `petitjournal`
--

DROP TABLE IF EXISTS `petitjournal`;
CREATE TABLE IF NOT EXISTS `petitjournal` (
  `IdJournal` int(11) NOT NULL AUTO_INCREMENT,
  `cheminJournal` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`IdJournal`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `petitjournal`
--

INSERT INTO `petitjournal` (`IdJournal`, `cheminJournal`) VALUES
(1, 'LeptitjournalF2010.pdf');

-- --------------------------------------------------------

--
-- Structure de la table `type_evenement`
--

DROP TABLE IF EXISTS `type_evenement`;
CREATE TABLE IF NOT EXISTS `type_evenement` (
  `IDTYPEEVENT` int(11) NOT NULL AUTO_INCREMENT,
  `LIBELLETYPEEVENT` char(50) DEFAULT NULL,
  PRIMARY KEY (`IDTYPEEVENT`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `type_media`
--

DROP TABLE IF EXISTS `type_media`;
CREATE TABLE IF NOT EXISTS `type_media` (
  `IDTYPEMEDIA` int(11) NOT NULL,
  `LIBELLEMEDIA` char(32) DEFAULT NULL,
  PRIMARY KEY (`IDTYPEMEDIA`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `type_media`
--

INSERT INTO `type_media` (`IDTYPEMEDIA`, `LIBELLEMEDIA`) VALUES
(1, 'IMAGE'),
(2, 'VIDEO'),
(3, 'ACTUALITE');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `IDUSERS` int(11) NOT NULL AUTO_INCREMENT,
  `NOM` char(30) DEFAULT NULL,
  `PRENOM` char(20) DEFAULT NULL,
  `LOGIN` char(50) DEFAULT NULL,
  `MDP` char(50) DEFAULT NULL,
  `DROIT` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`IDUSERS`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`IDUSERS`, `NOM`, `PRENOM`, `LOGIN`, `MDP`, `DROIT`) VALUES
(1, 'Fargier', 'Jean-Marc', 'J-MFargier', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1);

-- --------------------------------------------------------

--
-- Structure de la table `video`
--

DROP TABLE IF EXISTS `video`;
CREATE TABLE IF NOT EXISTS `video` (
  `IDVID` int(11) NOT NULL AUTO_INCREMENT,
  `IDTYPEMEDIA` int(11) NOT NULL,
  `CHEMINVID` text,
  PRIMARY KEY (`IDVID`),
  KEY `FK_VIDEO_TYPE_MEDIA` (`IDTYPEMEDIA`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `actualite`
--
ALTER TABLE `actualite`
  ADD CONSTRAINT `actualite_ibfk_1` FOREIGN KEY (`IDTYPEMEDIA`) REFERENCES `type_media` (`IDTYPEMEDIA`);

--
-- Contraintes pour la table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `image_ibfk_1` FOREIGN KEY (`IDTYPEMEDIA`) REFERENCES `type_media` (`IDTYPEMEDIA`);

--
-- Contraintes pour la table `nouveaute`
--
ALTER TABLE `nouveaute`
  ADD CONSTRAINT `nouveaute_ibfk_1` FOREIGN KEY (`IDTYPEMEDIA`) REFERENCES `type_media` (`IDTYPEMEDIA`);

--
-- Contraintes pour la table `video`
--
ALTER TABLE `video`
  ADD CONSTRAINT `video_ibfk_1` FOREIGN KEY (`IDTYPEMEDIA`) REFERENCES `type_media` (`IDTYPEMEDIA`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
