-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 18 Novembre 2014 à 15:45
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `audio`
--
CREATE DATABASE IF NOT EXISTS `audio` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `audio`;

-- --------------------------------------------------------

--
-- Structure de la table `api_album`
--

CREATE TABLE IF NOT EXISTS `api_album` (
  `Id_Album` int(255) NOT NULL AUTO_INCREMENT,
  `Nom_Album` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `Image_Album` longblob,
  PRIMARY KEY (`Id_Album`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `api_album`
--

INSERT INTO `api_album` (`Id_Album`, `Nom_Album`, `Image_Album`) VALUES
(1, 'Compil 1', NULL),
(2, 'Tove Lo', NULL),
(3, 'Nevermind', NULL),
(4, 'black ice', NULL),
(5, 'Nevermind', NULL),
(6, 'black ice', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `api_artiste`
--

CREATE TABLE IF NOT EXISTS `api_artiste` (
  `Id_Artiste` int(255) NOT NULL AUTO_INCREMENT,
  `Nom_Artiste` char(65) DEFAULT NULL,
  PRIMARY KEY (`Id_Artiste`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `api_artiste`
--

INSERT INTO `api_artiste` (`Id_Artiste`, `Nom_Artiste`) VALUES
(1, 'Tove Lo'),
(2, 'nirvana'),
(3, 'ACDC');

-- --------------------------------------------------------

--
-- Structure de la table `api_donnee`
--

CREATE TABLE IF NOT EXISTS `api_donnee` (
  `ID_Donnee` int(255) NOT NULL AUTO_INCREMENT,
  `Temps_Donnee` time NOT NULL,
  `Titre_Donnee` varchar(60) NOT NULL,
  PRIMARY KEY (`ID_Donnee`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `api_genre`
--

CREATE TABLE IF NOT EXISTS `api_genre` (
  `ID_Genre` int(255) NOT NULL AUTO_INCREMENT,
  `Genre_Genre` varchar(60) NOT NULL,
  PRIMARY KEY (`ID_Genre`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `api_genre`
--

INSERT INTO `api_genre` (`ID_Genre`, `Genre_Genre`) VALUES
(1, 'Electro');

-- --------------------------------------------------------

--
-- Structure de la table `api_laa`
--

CREATE TABLE IF NOT EXISTS `api_laa` (
  `ID_LMAD` int(255) NOT NULL AUTO_INCREMENT,
  `ID_Art` int(255) NOT NULL,
  `ID_Alb` int(255) NOT NULL,
  PRIMARY KEY (`ID_LMAD`),
  KEY `ID_Mus` (`ID_Art`),
  KEY `ID_Alb` (`ID_Alb`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `api_laa`
--

INSERT INTO `api_laa` (`ID_LMAD`, `ID_Art`, `ID_Alb`) VALUES
(1, 3, 4),
(2, 2, 3);

-- --------------------------------------------------------

--
-- Structure de la table `api_lmaa`
--

CREATE TABLE IF NOT EXISTS `api_lmaa` (
  `ID_LMAA` int(255) NOT NULL AUTO_INCREMENT,
  `ID_Mus` int(255) NOT NULL,
  `ID_Art` int(255) NOT NULL,
  `ID_Alb` int(255) NOT NULL,
  PRIMARY KEY (`ID_LMAA`),
  KEY `ID_Mus` (`ID_Mus`),
  KEY `ID_Art` (`ID_Art`),
  KEY `ID_Alb` (`ID_Alb`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `api_lmaa`
--

INSERT INTO `api_lmaa` (`ID_LMAA`, `ID_Mus`, `ID_Art`, `ID_Alb`) VALUES
(1, 1, 1, 2),
(2, 2, 1, 2),
(3, 4, 3, 4),
(4, 5, 3, 4);

-- --------------------------------------------------------

--
-- Structure de la table `api_lmd`
--

CREATE TABLE IF NOT EXISTS `api_lmd` (
  `ID_LMD` int(255) NOT NULL AUTO_INCREMENT,
  `ID_MUS` int(255) NOT NULL,
  `ID_DON` int(255) NOT NULL,
  PRIMARY KEY (`ID_LMD`),
  KEY `ID_DON` (`ID_DON`),
  KEY `ID_MUS` (`ID_MUS`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `api_lmg`
--

CREATE TABLE IF NOT EXISTS `api_lmg` (
  `ID_LMG` int(255) NOT NULL AUTO_INCREMENT,
  `ID_MUS` int(255) NOT NULL,
  `ID_GEN` int(255) NOT NULL,
  PRIMARY KEY (`ID_LMG`),
  KEY `ID_MUS` (`ID_MUS`),
  KEY `ID_GEN` (`ID_GEN`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `api_lmg`
--

INSERT INTO `api_lmg` (`ID_LMG`, `ID_MUS`, `ID_GEN`) VALUES
(1, 2, 1),
(2, 3, 1);

-- --------------------------------------------------------

--
-- Structure de la table `api_lmp`
--

CREATE TABLE IF NOT EXISTS `api_lmp` (
  `ID_LMP` int(255) NOT NULL AUTO_INCREMENT,
  `ID_Mus` int(255) NOT NULL,
  `ID_Pla` int(255) NOT NULL,
  PRIMARY KEY (`ID_LMP`),
  KEY `ID_Mus` (`ID_Mus`),
  KEY `ID_Pla` (`ID_Pla`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `api_lmp`
--

INSERT INTO `api_lmp` (`ID_LMP`, `ID_Mus`, `ID_Pla`) VALUES
(1, 1, 1),
(2, 3, 1);

-- --------------------------------------------------------

--
-- Structure de la table `api_musique`
--

CREATE TABLE IF NOT EXISTS `api_musique` (
  `ID_Musique` int(255) NOT NULL AUTO_INCREMENT,
  `Fichier_Musique` varchar(200) CHARACTER SET utf8 NOT NULL,
  `Noms_Musique` varchar(60) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`ID_Musique`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `api_musique`
--

INSERT INTO `api_musique` (`ID_Musique`, `Fichier_Musique`, `Noms_Musique`) VALUES
(1, 'file://localhost/Users/Guillaume/Downloads/Tove%20Lo%20-%20Habits%20(Stay%20High)%20-%20Hippie%20Sabotage%20Remix.m4a', 'Stay High'),
(2, 'file://localhost/Users/Guillaume/Downloads/Tove%20Lo%20-%20Habits%20(Stay%20High)%20-%20Hippie%20Sabotage%20Remix.m4a', 'Stay high 2'),
(3, 'file://localhost/Users/Guillaume/Downloads/Tove%20Lo%20-%20Habits%20(Stay%20High)%20-%20Hippie%20Sabotage%20Remix.m4a', 'Stay High 3'),
(4, '', 'Black Ice'),
(5, '', 'Skies on Fire');

-- --------------------------------------------------------

--
-- Structure de la table `api_playlist`
--

CREATE TABLE IF NOT EXISTS `api_playlist` (
  `ID_Playliste` int(255) NOT NULL AUTO_INCREMENT,
  `Nom_Playlist` char(255) DEFAULT NULL,
  PRIMARY KEY (`ID_Playliste`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `api_playlist`
--

INSERT INTO `api_playlist` (`ID_Playliste`, `Nom_Playlist`) VALUES
(1, 'Ma Super Playlist');

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `vuealbart`
--
CREATE TABLE IF NOT EXISTS `vuealbart` (
`ID_LMAD` int(255)
,`ID_Art` int(255)
,`ID_Alb` int(255)
,`Id_Artiste` int(255)
,`Nom_Artiste` char(65)
,`Id_Album` int(255)
,`Nom_Album` varchar(50)
,`Image_Album` longblob
);
-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `vueartalb`
--
CREATE TABLE IF NOT EXISTS `vueartalb` (
`ID_LMAA` int(255)
,`ID_Mus` int(255)
,`ID_Art` int(255)
,`ID_Alb` int(255)
,`Id_Album` int(255)
,`Nom_Album` varchar(50)
,`Image_Album` longblob
,`Id_Artiste` int(255)
,`Nom_Artiste` char(65)
,`ID_Musique` int(255)
,`Fichier_Musique` varchar(200)
,`Noms_Musique` varchar(60)
);
-- --------------------------------------------------------

--
-- Structure de la vue `vuealbart`
--
DROP TABLE IF EXISTS `vuealbart`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vuealbart` AS select `api_laa`.`ID_LMAD` AS `ID_LMAD`,`api_laa`.`ID_Art` AS `ID_Art`,`api_laa`.`ID_Alb` AS `ID_Alb`,`api_artiste`.`Id_Artiste` AS `Id_Artiste`,`api_artiste`.`Nom_Artiste` AS `Nom_Artiste`,`api_album`.`Id_Album` AS `Id_Album`,`api_album`.`Nom_Album` AS `Nom_Album`,`api_album`.`Image_Album` AS `Image_Album` from ((`api_laa` join `api_artiste`) join `api_album`) where ((`api_laa`.`ID_Art` = `api_artiste`.`Id_Artiste`) and (`api_laa`.`ID_Alb` = `api_album`.`Id_Album`));

-- --------------------------------------------------------

--
-- Structure de la vue `vueartalb`
--
DROP TABLE IF EXISTS `vueartalb`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vueartalb` AS select `api_lmaa`.`ID_LMAA` AS `ID_LMAA`,`api_lmaa`.`ID_Mus` AS `ID_Mus`,`api_lmaa`.`ID_Art` AS `ID_Art`,`api_lmaa`.`ID_Alb` AS `ID_Alb`,`api_album`.`Id_Album` AS `Id_Album`,`api_album`.`Nom_Album` AS `Nom_Album`,`api_album`.`Image_Album` AS `Image_Album`,`api_artiste`.`Id_Artiste` AS `Id_Artiste`,`api_artiste`.`Nom_Artiste` AS `Nom_Artiste`,`api_musique`.`ID_Musique` AS `ID_Musique`,`api_musique`.`Fichier_Musique` AS `Fichier_Musique`,`api_musique`.`Noms_Musique` AS `Noms_Musique` from (((`api_lmaa` join `api_album`) join `api_artiste`) join `api_musique`) where ((`api_lmaa`.`ID_Mus` = `api_musique`.`ID_Musique`) and (`api_lmaa`.`ID_Art` = `api_artiste`.`Id_Artiste`) and (`api_lmaa`.`ID_Alb` = `api_album`.`Id_Album`));

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `api_laa`
--
ALTER TABLE `api_laa`
  ADD CONSTRAINT `FKY_LAA_Artiste` FOREIGN KEY (`ID_Art`) REFERENCES `api_artiste` (`Id_Artiste`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FKY_LMAD_Album` FOREIGN KEY (`ID_Alb`) REFERENCES `api_album` (`Id_Album`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `api_lmaa`
--
ALTER TABLE `api_lmaa`
  ADD CONSTRAINT `FKY_LMAA_Album` FOREIGN KEY (`ID_Alb`) REFERENCES `api_album` (`Id_Album`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FKY_LMAA_Artiste` FOREIGN KEY (`ID_Art`) REFERENCES `api_artiste` (`Id_Artiste`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FKY_LMAA_Musique` FOREIGN KEY (`ID_Mus`) REFERENCES `api_musique` (`ID_Musique`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `api_lmd`
--
ALTER TABLE `api_lmd`
  ADD CONSTRAINT `FKY_LMD_Donne` FOREIGN KEY (`ID_DON`) REFERENCES `api_donnee` (`ID_Donnee`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FKY_LMD_Musique` FOREIGN KEY (`ID_MUS`) REFERENCES `api_musique` (`ID_Musique`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `api_lmg`
--
ALTER TABLE `api_lmg`
  ADD CONSTRAINT `FKY_LMG_Genre` FOREIGN KEY (`ID_GEN`) REFERENCES `api_genre` (`ID_Genre`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FKY_LMG_Musique` FOREIGN KEY (`ID_MUS`) REFERENCES `api_musique` (`ID_Musique`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `api_lmp`
--
ALTER TABLE `api_lmp`
  ADD CONSTRAINT `FKY_LMP_Musique` FOREIGN KEY (`ID_Mus`) REFERENCES `api_musique` (`ID_Musique`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FKY_LMP_Playlist` FOREIGN KEY (`ID_Pla`) REFERENCES `api_playlist` (`ID_Playliste`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
